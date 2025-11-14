<?php
namespace App\Service;

use DateTime;
use DatePeriod;
use DateInterval;
use DateTimeZone;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Cell\Coordinate;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class ExportXLSService
{
    public function exportProjects($filters, $data): Response
    {
        $dateRange = $filters['date_range'];
        
        // Explode the date range string by ' to ' delimiter
        list($dateFrom, $dateTo) = explode(' to ', $dateRange);

        // Convert the date formats
        $dateFrom = DateTime::createFromFormat('Y-m-d', $dateFrom)->format('m/d/Y');
        $dateTo = DateTime::createFromFormat('Y-m-d', $dateTo)->format('m/d/Y');
        
        $taskHeader = [];

        $date = new DateTime('now', new DateTimeZone('Asia/Manila'));
        $datePrinted = $date->format('m/d/Y');

        // Create Spreadsheet
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Set headers
        $sheet->mergeCells('A1:Z1');
        $sheet->mergeCells('A2:Z2');
        $sheet->mergeCells('A3:Z3');
        $sheet->mergeCells('A4:Z4');

        $sheet->setCellValue('A1', 'WRLD CAPITAL HOLDINGS INC.');
        $sheet->setCellValue('A2', 'Manpower Monitoring Report');
        $sheet->setCellValue('A3', 'Attendance Period : From ' . $dateFrom . ' To ' . $dateTo);
        $sheet->setCellValue('A4', 'Date Printed : '.$datePrinted);

        $headerStyle = [ // Header Styling
            'font' => ['bold' => true, 'size' => 14],
            'alignment' => ['horizontal' => Alignment::HORIZONTAL_CENTER],
        ];

        $headingStyle = [
            'font' => [
                'bold' => true, 
                'size' => 11
            ], 
            'alignment' => [
                'horizontal' => Alignment::HORIZONTAL_CENTER
            ]
        ];

        $sheet->getStyle('A1:Z4')->applyFromArray($headerStyle);
        $sheet->setCellValue('A5', 'Projects');


        // Set headers
        foreach ($data as $proj) {
            foreach ($proj['tasks'] as $task) {
                if (!in_array($task['description'], $taskHeader)) {
                    $taskHeader[] = $task['description'];
                }
            }
        }

        foreach ($taskHeader as $col => $header) {
            $sheet->setCellValue([$col + 2, 5], $header); // Row 5 for headers, +2 for array index to match column B
        }

        // Populate data
        $row = 6; // Starting row for projects and tasks data
        foreach ($data as $project) {

            $sheet->setCellValue('A' . $row, $project["name"]); // Column A for project names
            $rowTotalMandays = 0;

            foreach ($project["tasks"] as $task) {
                // Find the column index for the task description
                $colIndex = array_search($task["description"], $taskHeader);
                if ($colIndex !== false) {
                    $colLetter = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex($colIndex + 2);
                    $sheet->setCellValue($colLetter . $row, $task["total_rendered_time"] ?? 0);
                    $rowTotalMandays += $task["total_rendered_time"] ?? 0;
                }
                $colIndex++;
            }

            $rowTotalMandaysCoordinates = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex(count($taskHeader) + 2) . $row; // get columnIndex from $taskHeader +2 and $row from start of the loop
            $sheet->setCellValue($rowTotalMandaysCoordinates, $rowTotalMandays); // set cell values of total mandays per row
            $row++;
        }

        // set cell values of total mandays per column
        $lastDataRow = count($data) + 5;
        $totalRow = $lastDataRow + 1;
        for ($col = 2; $col <= count($taskHeader) + 1; $col++) {
            $columnTotalMandaysCoordinates = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex($col) . $totalRow;
            $columnSumRange = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex($col) . '6:' . \PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex($col) . $lastDataRow; // sample result: B6:B11
            $sheet->setCellValue($columnTotalMandaysCoordinates, '=SUM('.$columnSumRange.')'); 
        }

        // set total Mandays from Column Totals and Row Totals
        $totalMandaysColumnRowCoordinates = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex(count($taskHeader) + 2) . $totalRow; // sample result: H12
        $totalMandaysColumnSumRange = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex(count($taskHeader) + 2) . '6:' . \PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex(count($taskHeader) + 2) . $lastDataRow; // sample result: H6:H11
        $totalMandaysRowSumRange = 'B' . $totalRow . ':' . \PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex(count($taskHeader) + 1) . $totalRow; // sample result: B11:G11
        $sheet->setCellValue($totalMandaysColumnRowCoordinates, '=SUM('.$totalMandaysColumnSumRange.','.$totalMandaysRowSumRange.')');
        $sheet->getStyle($totalMandaysColumnRowCoordinates)->applyFromArray(['font' => ['bold' => true, 'size' => 11]]);

        //set heading title for Total Mandays
        $rowTotalMandaysHeadingCoordinates = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex(count($taskHeader) + 2) . 5; // set row to 5 after all the Headers
        $columnTotalMandaysHeadingCoordinates = 'A' . $totalRow;
        $sheet->setCellValue($rowTotalMandaysHeadingCoordinates, 'Total Mandays');
        $sheet->setCellValue($columnTotalMandaysHeadingCoordinates, 'Total Mandays');
        $sheet->getStyle($columnTotalMandaysHeadingCoordinates)->applyFromArray($headingStyle);

        // Loop through the populated cells and set the value to 0 if it's 0 or not set
        $highestRow = $sheet->getHighestRow('A'); // Start counting from column A
        $highestColumn = $sheet->getHighestColumn(5); // Start counting from row 5
        $highestColumnIndex = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::columnIndexFromString($highestColumn);

        for ($row = 6; $row <= $highestRow; $row++) {
            for ($col = 2; $col <= $highestColumnIndex; $col++) {
                $cell = $sheet->getCell([$col, $row]);
                if ($cell->getValue() === null || $cell->getValue() == 0) {
                    $cell->setValue(0);
                }
            }
        }

        // Set Styling for Project/Task Headings
        $colLetter = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex(count($taskHeader) + 2);
        $headingCoordinates = sprintf('A5:%s5', $colLetter);
        $sheet->getStyle($headingCoordinates)->applyFromArray($headingStyle);

        // Freeze panes
        $sheet->freezePane('B5');

        //! Auto Resize Column Width Dynamically
        // Get the highest column that has data
        $highestColumn = $sheet->getHighestColumn(5);
        // Convert column letters to an index (A=1, B=2, ..., Z=26, AA=27, etc.)
        $highestColumnIndex = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::columnIndexFromString($highestColumn);
        // Loop through each column and set auto size
        for ($col = 1; $col <= $highestColumnIndex; $col++) {
            $columnLetter = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex($col);
            $sheet->getColumnDimension($columnLetter)->setAutoSize(true);
            $sheet->getStyle($columnLetter . '5')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
        } //! End

        // Freeze the first column
        $sheet->freezePane('B1');
        
        // Set the borders for the headers
        $headerBorder = [
            'borders' => [
                'allBorders' => [
                    'borderStyle' => Border::BORDER_THIN,
                ],
            ],
        ];
        $sheet->getStyle('A1:Z4')->applyFromArray($headerBorder);
        $sheet->getStyle('A5:'.$highestColumn.$highestRow)->applyFromArray($headerBorder);

        // Create and return response
        $writer = new Xlsx($spreadsheet);
        $temp_file = tempnam(sys_get_temp_dir(), 'phpspreadsheet');
        $writer->save($temp_file);

        return new Response(
            file_get_contents($temp_file),
            200,
            [
                'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                'Content-Disposition' => 'inline; filename="timesheet.xlsx"',
            ]
        );
    }

    public function exportTasks($filters, $data): Response
    {
        //dd($data);
        $dateRange = $filters['date_range'];
        
        // Explode the date range string by ' to ' delimiter
        list($dateFrom, $dateEnd) = explode(' to ', $dateRange);

        // Convert the date formats
        $dateFrom = DateTime::createFromFormat('Y-m-d', $dateFrom)->format('m/d/Y');
        $dateTo = DateTime::createFromFormat('Y-m-d', $dateEnd)->format('m/d/Y');
        // Create a DateTime object from the string
        $date = DateTime::createFromFormat('Y-m-d', $dateEnd);
        // Add one day to the date
        $date->modify('+1 day');
        // Format the date as m/d/Y
        $formattedDate = $date->format('m/d/Y');
        
        $taskHeader = [];

        $date = new DateTime('now', new DateTimeZone('Asia/Manila'));
        $datePrinted = $date->format('m/d/Y');
        $projectName = $data[0]['name'];

        // Create array of dates from date range
        $interval = new DateInterval('P1D'); // 1 Day interval
        $period = new DatePeriod(new DateTime($dateFrom, new DateTimeZone('Asia/Manila')), $interval, new DateTime($formattedDate, new DateTimeZone('Asia/Manila')));
        $dateHeader = [];
        foreach ($period as $date) {
            $dateHeader[] = $date->format('m/d (D)');
        }

        // Create Spreadsheet
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue('A1', 'WRLD CAPITAL HOLDINGS INC.');
        $sheet->setCellValue('A2', 'Manpower Monitoring By Task Report');
        $sheet->setCellValue('A3', 'Attendance Period : From ' . $dateFrom . ' To ' . $dateTo);
        $sheet->setCellValue('A4', 'Date Printed : '.$datePrinted);
        $sheet->setCellValue('A5', 'Project : '.$projectName);

        $headerStyle = [ // Header Styling
            'font' => ['bold' => true, 'size' => 14],
            'alignment' => ['horizontal' => Alignment::HORIZONTAL_CENTER],
        ];

        $taskStyle = [
            'font' => ['bold' => true, 'size' => 11],
        ];

        $taskHeaderStyle = [
            'font' => ['bold' => true, 'size' => 11],
            'alignment' => ['horizontal' => Alignment::HORIZONTAL_CENTER],
        ];

        $sheet->getStyle('A1:Z5')->applyFromArray($headerStyle);

        // set taskHeader array with tasks and employees for each task
        foreach ($data[0]['tasks'] as $task) {
            $taskHeader[] = [
                'description' => $task['description'],
                'employees' => $task['employees']
            ];
        }

        foreach ($taskHeader as &$item) {
            $employees = $item["employees"];
            $distinctEmployees = [];
            
            foreach ($employees as $employee) {
                $name = $employee["employee"];
                $date = $employee["date"];
                $time = $employee["total_rendered_time"];
                $overTime = $employee["total_overtime"];
                
                if (!isset($distinctEmployees[$name])) {
                    $distinctEmployees[$name] = [];
                }
                
                $dateExists = false;
                foreach ($distinctEmployees[$name] as $existingEntry) {
                    if ($existingEntry['date'] == $date) {
                        $dateExists = true;
                        break;
                    }
                }
                
                if (!$dateExists) {
                    $distinctEmployees[$name][] = ["date" => $date, "total_rendered_time" => $time, "total_overtime" => $overTime];
                }
            }
            
            $item["employees"] = $distinctEmployees;
        }

        $row = 6; // Starting row to populate data
        foreach ($taskHeader as $task) {
            $employees = $task["employees"];

            $sheet->setCellValue('A' . $row, $task['description']); // this sets the Task Header
            $sheet->getStyle('A' . $row)->applyFromArray($taskStyle);

            $sheet->setCellValue('B' . $row, 'Mandays'); // this sets the Table Header
            $sheet->getStyle('B' . $row,)->applyFromArray($taskHeaderStyle);
            $colLetter = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex(count($dateHeader) + 1);
            $sheet->mergeCells('B' . $row . ':' . $colLetter . $row);

            $colLetter = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex(count($dateHeader) + 3);
            $colLetterOffset = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex((count($dateHeader) * 2) + 2);
            $sheet->setCellValue($colLetter . $row, 'Overtime (in Mandays)'); // this sets the Table Header
            $sheet->getStyle($colLetter . $row)->applyFromArray($taskHeaderStyle);
            $sheet->mergeCells($colLetter . $row . ':' . $colLetterOffset . $row);

            $colLetter = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex(count($dateHeader) + 2);
            $totalHeaderRow = $row + 1;
            $sheet->setCellValue($colLetter . $totalHeaderRow, 'Total Mandays'); // this sets the Table Header Total Mandays
            $sheet->getStyle($colLetter . $totalHeaderRow)->applyFromArray($taskHeaderStyle);

            $colLetter = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex((count($dateHeader) * 2) + 3);
            $sheet->setCellValue($colLetter . $totalHeaderRow, 'Total OT (Mandays)'); // this sets the Table Header Total OT
            $sheet->getStyle($colLetter . $totalHeaderRow)->applyFromArray($taskHeaderStyle);

            $totalRowLabelIndex = $row + count($employees) + 2;
            $sheet->setCellValue('A' . $totalRowLabelIndex, 'Total'); // this sets the Task Header in Rows
            $sheet->getStyle('A' . $totalRowLabelIndex)->applyFromArray($taskHeaderStyle);

            $row += 1;
            $sheet->setCellValue('A' . $row, 'Employees'); //! this sets Employees Header. $row + 1 to set header below Task Header
            $sheet->getStyle('A' . $row)->applyFromArray($taskHeaderStyle);

            //! Populate Data for Mandays Table
            $column = 2; // Column 2 = B
            foreach ($dateHeader as $key => $date) { // iterate through date period and prints date headers
                $colLetter = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex($column);
                $sheet->setCellValue($colLetter . $row, $date); // set Formatted Date Headers
                $sheet->getStyle($colLetter . $row)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
                $column++;
            }

            $dateHeaderRow = $row;

            foreach ($employees as $employee => $employeeDateTime) { // this sets the Employee Names on Column A
                $row += 1;
                $sheet->setCellValue('A' . $row, $employee);

                $name = $employee;

                $datePerEmployee = [];
                $timePerEmployee = [];

                foreach ($employeeDateTime as $empDT) {
                    $empNewDate = new DateTime($empDT['date']);
                    $empFormattedDate = $empNewDate->format('m/d (D)');
                    $datePerEmployee[] = $empFormattedDate;
                    $timePerEmployee[] = $empDT['total_rendered_time'];
                    $rowMandaysTotal = 0;
                    $rowMandaysTotalCoordinates = '';

                    // Find the row of the employee based on their name
                    if ($sheet->getCell('A' . $row)->getValue() == $name) {
                        // Find the column of the date
                        for ($col = 2; $col <= count($dateHeader) + 1; $col++) { // initialize $col = 2 to match Column B

                           $dateHeaderColumnValue = $sheet->getCell([$col, $dateHeaderRow])->getValue();

                            if (in_array($dateHeaderColumnValue, $datePerEmployee)) {
                                $timeIndex = array_search($dateHeaderColumnValue, $datePerEmployee);
                                $time = $timePerEmployee[$timeIndex];
                                $sheet->setCellValue([$col, $row], $time);
                                $sheet->getStyle([$col, $row])->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);

                            } else {
                                $sheet->setCellValue([$col, $row], 0);
                                $sheet->getStyle([$col, $row])->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
                            }

                            $rowMandaysTotal += $sheet->getCell([$col, $row])->getValue();
                        }
                    }

                }

                // Set Mandays Total per row
                $colLetter = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex(count($dateHeader) + 2);
                $rowMandaysTotalCoordinates =  $colLetter . $row;
                //dd($rowMandaysTotalCoordinates);
                $sheet->setCellValue($rowMandaysTotalCoordinates, $rowMandaysTotal);
                $sheet->getStyle($rowMandaysTotalCoordinates)->applyFromArray($taskHeaderStyle);                
            }

            $columnStartRow = $dateHeaderRow + 1;
            $columnTotalRow = $columnStartRow + count($employees);
            for ($col = 2; $col <= count($dateHeader) + 2; $col++) { // Set Total Mandays per Column
                $columnTotalMandaysCoordinates = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex($col) . $columnTotalRow;
                $columnSumRange = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex($col) . $columnStartRow . ':' . \PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex($col) . ($columnTotalRow - 1); // sample result: B1:B11
                /* print_r($columnTotalMandaysCoordinates);
                echo "<br/>"; */
                $sheet->setCellValue($columnTotalMandaysCoordinates, '=SUM('.$columnSumRange.')'); 
                $sheet->getStyle($columnTotalMandaysCoordinates)->applyFromArray($taskHeaderStyle);
            }
            //! Populate Data for Mandays Table End

            //! Populate Data for Overtime Table
            foreach ($dateHeader as $key => $date) { // iterate through date period and prints date headers
                $colLetter = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex($column + 1);
                $sheet->setCellValue($colLetter . $dateHeaderRow, $date); // set Formatted Date Headers
                $sheet->getStyle($colLetter . $dateHeaderRow)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
                $column++;
            }

            $rowOt = $row - 2;
            foreach ($employees as $employee => $employeeDateTime) { // this sets the Employee Names on Column A
                //$sheet->setCellValue('A' . $row += 1, $employee);
                $rowOt += 1;

                $name = $employee;

                $datePerEmployee = [];
                $timePerEmployee = [];
                $overTimePerEmployee = [];

                foreach ($employeeDateTime as $empDT) {
                    $empNewDate = new DateTime($empDT['date']);
                    $empFormattedDate = $empNewDate->format('m/d (D)');
                    $datePerEmployee[] = $empFormattedDate;
                    $timePerEmployee[] = $empDT['total_rendered_time'];
                    $overTimePerEmployee[] = $empDT['total_overtime'];
                    $rowOvertimeTotal = 0;
                    $rowOvertimeTotalCoordinates = '';

                    // Find the row of the employee based on their name
                    if ($sheet->getCell('A' . $rowOt)->getValue() == $name) {

                        // Find the column of the date
                        for ($colOt = count($dateHeader) + 3; $colOt <= (count($dateHeader) * 2) + 2; $colOt++) { // initialize $colOt as count of $dat Header +3 to match the column
                  
                           $dateHeaderColumnValue = $sheet->getCell([$colOt, $dateHeaderRow])->getValue();
                            
                            if (in_array($dateHeaderColumnValue, $datePerEmployee)) {
                                $timeIndex = array_search($dateHeaderColumnValue, $datePerEmployee);
                                $time = $overTimePerEmployee[$timeIndex];
                                $sheet->setCellValue([$colOt, $rowOt], $time);
                                $sheet->getStyle([$colOt, $rowOt])->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);

                            } else {
                                $sheet->setCellValue([$colOt, $rowOt], 0);
                                $sheet->getStyle([$colOt, $rowOt])->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
                            }

                            $rowOvertimeTotal += $sheet->getCell([$colOt, $rowOt])->getValue();
                            $rowOvertimeTotalAlternativeCoordinates = '';
                        }
                    }  else {
                        for ($colOt = count($dateHeader) + 3; $colOt <= (count($dateHeader) * 2) + 2; $colOt++) {
                            $colLetter = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex($colOt);
                            $sheet->setCellValue([$colOt, $rowOt + 1], 0);
                            $sheet->getStyle([$colOt, $rowOt + 1])->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
                            $rowOvertimeTotalAlternativeCoordinates = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex($colOt + 1) . ($rowOt + 1);
                        }
                    }

                    // Set Mandays Total per row
                    $colLetter = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex((count($dateHeader) * 2) + 3);
                    $rowOvertimeTotalCoordinates =  $colLetter . $rowOt;
                    $rowOvertimeTotalAlternativeCoordinates != '' ? $rowOvertimeTotalCoordinates = $rowOvertimeTotalAlternativeCoordinates : $rowOvertimeTotalCoordinates;
                    $sheet->setCellValue($rowOvertimeTotalCoordinates, $rowOvertimeTotal);
                    $sheet->getStyle($rowOvertimeTotalCoordinates)->applyFromArray($taskHeaderStyle);
                }
                
            }

            $overtimeColumnStartRow = $dateHeaderRow + 1;
            $overtimeTotalRow = $overtimeColumnStartRow + count($employees);
            for ($colOt = count($dateHeader) + 3; $colOt <= (count($dateHeader) * 2) + 3; $colOt++) { // Set Total Mandays per Column
                $columnTotalMandaysCoordinates = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex($colOt) . $overtimeTotalRow;
                $columnSumRange = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex($colOt) . $overtimeColumnStartRow . ':' . \PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex($colOt) . ($overtimeTotalRow - 1); // sample result: B1:B11
                /* print_r($columnTotalMandaysCoordinates);
                echo "<br/>"; */
                $sheet->setCellValue($columnTotalMandaysCoordinates, '=SUM('.$columnSumRange.')'); 
                $sheet->getStyle($columnTotalMandaysCoordinates)->applyFromArray($taskHeaderStyle);
            }
            //dd(1);

            //! Populate Data for Overtime Table End
            $row += 4;
        }
        //dd('1');
        //dd($taskHeader);

        // Update Merging based on highest column
        $totalHighestColumn = $sheet->getHighestColumn();
        $totalHighestRow = $sheet->getHighestRow();

        $sheet->mergeCells('A1:'.$totalHighestColumn.'1');
        $sheet->mergeCells('A2:'.$totalHighestColumn.'2');
        $sheet->mergeCells('A3:'.$totalHighestColumn.'3');
        $sheet->mergeCells('A4:'.$totalHighestColumn.'4');
        $sheet->mergeCells('A5:'.$totalHighestColumn.'5');

        //! Auto Resize Column Width Dynamically
        // Get the highest column that has data
        $highestColumn = $sheet->getHighestColumn(7);
        // Convert column letters to an index (A=1, B=2, ..., Z=26, AA=27, etc.)
        $highestColumnIndex = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::columnIndexFromString($highestColumn);
        // Loop through each column and set auto size
        for ($col = 1; $col <= $highestColumnIndex; $col++) {
            $columnLetter = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex($col);
            $sheet->getColumnDimension($columnLetter)->setAutoSize(true);
            $sheet->getStyle($columnLetter . '7')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
        } //! End

        // Freeze the first column
        $sheet->freezePane('B1');
        
        // Set the borders for the headers
        $worksheetBorder = [
            'borders' => [
                'allBorders' => [
                    'borderStyle' => Border::BORDER_THIN,
                ],
            ],
        ];
        $sheet->getStyle('A1:'.$totalHighestColumn.$totalHighestRow)->applyFromArray($worksheetBorder);

        // Create and return response
        $writer = new Xlsx($spreadsheet);
        $temp_file = tempnam(sys_get_temp_dir(), 'phpspreadsheet');
        $writer->save($temp_file);

        return new Response(
            file_get_contents($temp_file),
            200,
            [
                'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                'Content-Disposition' => 'inline; filename="timesheet.xlsx"',
            ]
        );
    }

    public function exportEmployeeTasks($filters, $data): Response
    {
        $dateRange = $filters['date_range'];
        
        // Explode the date range string by ' to ' delimiter
        list($dateFrom, $dateEnd) = explode(' to ', $dateRange);

        // Convert the date formats
        $dateFrom = DateTime::createFromFormat('Y-m-d', $dateFrom)->format('m/d/Y');
        $dateTo = DateTime::createFromFormat('Y-m-d', $dateEnd)->format('m/d/Y');
        // Create a DateTime object from the string
        $date = DateTime::createFromFormat('Y-m-d', $dateEnd);
        // Add one day to the date
        $date->modify('+1 day');
        // Format the date as m/d/Y
        $formattedDate = $date->format('m/d/Y');

        foreach ($data as $proj) {
            foreach ($proj['tasks'] as $task) {
                foreach ($task['employees'] as $emp) {
                    $employeeName = $emp['employee'];
                    break;
                }
                break;
            }
            break;
        }
        
        $taskHeader = [];

        $date = new DateTime('now', new DateTimeZone('Asia/Manila'));
        $datePrinted = $date->format('m/d/Y');
        $projectName = $data[0]['name'];

        // Create array of dates from date range
        $interval = new DateInterval('P1D'); // 1 Day interval
        $period = new DatePeriod(new DateTime($dateFrom, new DateTimeZone('Asia/Manila')), $interval, new DateTime($formattedDate, new DateTimeZone('Asia/Manila')));
        $dateHeader = [];
        foreach ($period as $date) {
            $dateHeader[] = $date->format('m/d (D)');
        }

        $employeeNames = [
            ['Aparece, Jomark Duran'], 
            ['Quisim, Louiel Angelo'], 
            ['Pangilinan, Louie'],
        ];
        $dates = ['Test test', 'Test test 2', 'Sample Task', 'Paint Works', 'Masonry'];

        // Create Spreadsheet
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Set headers
        /* $sheet->mergeCells('A1:Z1');
        $sheet->mergeCells('A2:Z2');
        $sheet->mergeCells('A3:Z3');
        $sheet->mergeCells('A4:Z4');
        $sheet->mergeCells('A5:Z5'); */

        $sheet->setCellValue('A1', 'WRLD CAPITAL HOLDINGS INC.');
        $sheet->setCellValue('A2', 'Per Employee Tasks Monitoring Report');
        $sheet->setCellValue('A3', 'Attendance Period : From ' . $dateFrom . ' To ' . $dateTo);
        $sheet->setCellValue('A5', 'Assigned Projects and Tasks for : '.$employeeName);
        $sheet->setCellValue('A4', 'Date Printed : '.$datePrinted);

        $headerStyle = [ // Header Styling
            'font' => ['bold' => true, 'size' => 14],
            'alignment' => ['horizontal' => Alignment::HORIZONTAL_CENTER],
        ];

        $taskStyle = [
            'font' => ['bold' => true, 'size' => 11],
        ];

        $taskHeaderStyle = [
            'font' => ['bold' => true, 'size' => 11],
            'alignment' => ['horizontal' => Alignment::HORIZONTAL_CENTER],
        ];

        $sheet->getStyle('A1:Z5')->applyFromArray($headerStyle);

        /* $sheet->setCellValue('A6', 'Employee Names');
        $sheet->getStyle('A6')->applyFromArray(['font' => ['bold' => true, 'size' => 11], 'alignment' => ['horizontal' => Alignment::HORIZONTAL_CENTER]]); */

        $row = 6;
        foreach ($data as $project) {
            $projName = $project['name'];
            $taskHeader = $project['tasks'] ?? null;

            if ($taskHeader === null) {
                continue; // skip project with empty tasks
            }

            foreach ($taskHeader as &$item) {
                $employees = $item["employees"];
                $distinctEmployees = [];
                
                foreach ($employees as $employee) {
                    $name = $employee["employee"];
                    $date = $employee["date"];
                    $time = $employee["total_rendered_time"];
                    $overTime = $employee["total_overtime"];
                    
                    if (!isset($distinctEmployees[$name])) {
                        $distinctEmployees[$name] = [];
                    }
                    
                    $dateExists = false;
                    foreach ($distinctEmployees[$name] as $existingEntry) {
                        if ($existingEntry['date'] == $date) {
                            $dateExists = true;
                            break;
                        }
                    }
                    
                    if (!$dateExists) {
                        $distinctEmployees[$name][] = ["date" => $date, "total_rendered_time" => $time, "total_overtime" => $overTime];
                    }
                }
                
                $item["employees"] = $distinctEmployees;
            }

            $sheet->setCellValue('A' . $row, $projName); // this sets the Project Header
            $sheet->getStyle('A' . $row)->applyFromArray($taskStyle);

            $taskRow = $row + 1;
            foreach ($taskHeader as $task) {
                $taskName = $task['description'];
                $employees = $task['employees'];
                
                $sheet->setCellValue('A' . $taskRow, $taskName); // this sets the Task Header
                //$sheet->getStyle('A' . $taskRow)->applyFromArray($taskStyle);

                $sheet->setCellValue('B' . $taskRow, 'Mandays'); // this sets the Table Header
                $sheet->getStyle('B' . $taskRow,)->applyFromArray($taskHeaderStyle);
                $colLetter = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex(count($dateHeader) + 1);
                $sheet->mergeCells('B' . $taskRow . ':' . $colLetter . $taskRow);

                $colLetter = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex(count($dateHeader) + 3);
                $colLetterOffset = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex((count($dateHeader) * 2) + 2);
                $sheet->setCellValue($colLetter . $taskRow, 'Overtime (in Mandays)'); // this sets the Table Header
                $sheet->getStyle($colLetter . $taskRow)->applyFromArray($taskHeaderStyle);
                $sheet->mergeCells($colLetter . $taskRow . ':' . $colLetterOffset . $taskRow);

                $colLetter = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex(count($dateHeader) + 2);
                $taskTotalsHeaderRow = $taskRow + 1;
                $sheet->setCellValue($colLetter . $taskTotalsHeaderRow, 'Total Mandays'); // this sets the Table Header Total Mandays
                $sheet->getStyle($colLetter . $taskTotalsHeaderRow)->applyFromArray($taskHeaderStyle);

                $colLetter = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex((count($dateHeader) * 2) + 3);
                $sheet->setCellValue($colLetter . $taskTotalsHeaderRow, 'Total OT (Mandays)'); // this sets the Table Header Total OT
                $sheet->getStyle($colLetter . $taskTotalsHeaderRow)->applyFromArray($taskHeaderStyle);

                $taskRow += 1; // move 1 row below for employee header
                $sheet->setCellValue('A' . $taskRow, 'Employee Name'); // this sets the Employee Name Title
                $sheet->getStyle('A' . $taskRow)->applyFromArray($taskHeaderStyle);

                //! Populate Data for Mandays Table
                $column = 2; // Column 2 = B
                foreach ($dateHeader as $key => $date) { // iterate through date period and prints date headers
                    $colLetter = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex($column);
                    $sheet->setCellValue($colLetter . $taskRow, $date); // set Formatted Date Headers
                    $sheet->getStyle($colLetter . $taskRow)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
                    $column++;
                }

                $dateHeaderRow = $taskRow;

                foreach ($employees as $employee => $employeeDateTime) { // this sets the Employee Names on Column A
                    
                    $taskRow += 1;
                    $sheet->setCellValue('A' . $taskRow, $employee);
                    //dd($employeeDateTime);
    
                    $name = $employee;
    
                    $datePerEmployee = [];
                    $timePerEmployee = [];
    
                    foreach ($employeeDateTime as $empDT) {
                        $empNewDate = new DateTime($empDT['date']);
                        $empFormattedDate = $empNewDate->format('m/d (D)');
                        $datePerEmployee[] = $empFormattedDate;
                        $timePerEmployee[] = $empDT['total_rendered_time'];
                        $rowMandaysTotal = 0;
                        $rowMandaysTotalCoordinates = '';
        
                        // Find the row of the employee based on their name
                        if ($sheet->getCell('A' . $taskRow)->getValue() == $name) {
                            // Find the column of the date
                            for ($col = 2; $col <= count($dateHeader) + 1; $col++) { // initialize $col = 2 to match Column B
        
                                $dateHeaderColumnValue = $sheet->getCell([$col, $dateHeaderRow])->getValue();
        
                                if (in_array($dateHeaderColumnValue, $datePerEmployee)) {
                                    $timeIndex = array_search($dateHeaderColumnValue, $datePerEmployee);
                                    $time = $timePerEmployee[$timeIndex];
                                    $sheet->setCellValue([$col, $taskRow], $time);
                                    $sheet->getStyle([$col, $taskRow])->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
        
                                } else {
                                    $sheet->setCellValue([$col, $taskRow], 0);
                                    $sheet->getStyle([$col, $taskRow])->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
                                }
        
                                $rowMandaysTotal += $sheet->getCell([$col, $taskRow])->getValue();
                            }
                        }
                    }
    
                    // Set Mandays Total per row
                    $colLetter = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex(count($dateHeader) + 2);
                    $rowMandaysTotalCoordinates =  $colLetter . $taskRow;
                    //dd($rowMandaysTotalCoordinates);
                    $sheet->setCellValue($rowMandaysTotalCoordinates, $rowMandaysTotal);
                    $sheet->getStyle($rowMandaysTotalCoordinates)->applyFromArray($taskHeaderStyle);         
                }
                //! Populate Data for Mandays Table End

                //! Populate Data for Overtime Table
                foreach ($dateHeader as $key => $date) { // iterate through date period and prints date headers
                    $colLetter = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex($column + 1);
                    $sheet->setCellValue($colLetter . $dateHeaderRow, $date); // set Formatted Date Headers
                    $sheet->getStyle($colLetter . $dateHeaderRow)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
                    $column++;
                }

                $rowOt = $taskRow - 2;
                foreach ($employees as $employee => $employeeDateTime) { // this sets the Employee Names on Column A
                    //$sheet->setCellValue('A' . $row += 1, $employee);
                    $rowOt += 2;

                    $name = $employee;

                    $datePerEmployee = [];
                    $timePerEmployee = [];
                    $overTimePerEmployee = [];

                    foreach ($employeeDateTime as $empDT) {
                        $empNewDate = new DateTime($empDT['date']);
                        $empFormattedDate = $empNewDate->format('m/d (D)');
                        $datePerEmployee[] = $empFormattedDate;
                        $timePerEmployee[] = $empDT['total_rendered_time'];
                        $overTimePerEmployee[] = $empDT['total_overtime'];
                        $rowOvertimeTotal = 0;
                        $rowOvertimeTotalCoordinates = '';

                        // Find the row of the employee based on their name
                        if ($sheet->getCell('A' . $rowOt)->getValue() == $name) {

                            // Find the column of the date
                            for ($colOt = count($dateHeader) + 3; $colOt <= (count($dateHeader) * 2) + 2; $colOt++) { // initialize $colOt as count of $dat Header +3 to match the column
                    
                            $dateHeaderColumnValue = $sheet->getCell([$colOt, $dateHeaderRow])->getValue();
                                
                                if (in_array($dateHeaderColumnValue, $datePerEmployee)) {
                                    $timeIndex = array_search($dateHeaderColumnValue, $datePerEmployee);
                                    $time = $overTimePerEmployee[$timeIndex];
                                    $sheet->setCellValue([$colOt, $rowOt], $time);
                                    $sheet->getStyle([$colOt, $rowOt])->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);

                                } else {
                                    $sheet->setCellValue([$colOt, $rowOt], 0);
                                    $sheet->getStyle([$colOt, $rowOt])->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
                                }

                                $rowOvertimeTotal += $sheet->getCell([$colOt, $rowOt])->getValue();
                                $rowOvertimeTotalAlternativeCoordinates = '';
                            }
                        }  else {
                            for ($colOt = count($dateHeader) + 3; $colOt <= (count($dateHeader) * 2) + 2; $colOt++) {
                                $colLetter = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex($colOt);
                                $sheet->setCellValue([$colOt, $rowOt + 1], 0);
                                $sheet->getStyle([$colOt, $rowOt + 1])->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
                                $rowOvertimeTotalAlternativeCoordinates = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex($colOt + 1) . ($rowOt + 1);
                            }
                        }

                        // Set Mandays Total per row
                        $colLetter = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex((count($dateHeader) * 2) + 3);
                        $rowOvertimeTotalCoordinates =  $colLetter . $rowOt;
                        $rowOvertimeTotalAlternativeCoordinates != '' ? $rowOvertimeTotalCoordinates = $rowOvertimeTotalAlternativeCoordinates : $rowOvertimeTotalCoordinates;
                        $sheet->setCellValue($rowOvertimeTotalCoordinates, $rowOvertimeTotal);
                        $sheet->getStyle($rowOvertimeTotalCoordinates)->applyFromArray($taskHeaderStyle);
                    }
                    //dd($overTimePerEmployee);
                    
                }
                
                $taskRow++;
            }

            $row = $taskRow + 1;
        }
        /* print_r($taskRow);
                echo "<br/>";
                print_r($task);
                echo "<br/>";
                echo "<br/>"; */
        //dd(1);

        /* $sheet->fromArray($employeeNames, null, 'A6'); // Insert values from Array $projects to each rows at column A

        $sheet->fromArray($dates, null, 'B5'); */

        // Update Merging based on highest column
        $totalHighestColumn = $sheet->getHighestColumn();
        $totalHighestRow = $sheet->getHighestRow();

        $sheet->mergeCells('A1:'.$totalHighestColumn.'1');
        $sheet->mergeCells('A2:'.$totalHighestColumn.'2');
        $sheet->mergeCells('A3:'.$totalHighestColumn.'3');
        $sheet->mergeCells('A4:'.$totalHighestColumn.'4');
        $sheet->mergeCells('A5:'.$totalHighestColumn.'5');

        //! Auto Resize Column Width Dynamically
        // Get the highest column that has data
        $highestColumn = $sheet->getHighestColumn(8);
        // Convert column letters to an index (A=1, B=2, ..., Z=26, AA=27, etc.)
        $highestColumnIndex = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::columnIndexFromString($highestColumn);
        // Loop through each column and set auto size
        for ($col = 1; $col <= $highestColumnIndex; $col++) {
            $columnLetter = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex($col);
            $sheet->getColumnDimension($columnLetter)->setAutoSize(true);
            $sheet->getStyle($columnLetter . '8')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
        } //! End

        // Freeze the first column
        $sheet->freezePane('B1');
        
        // Set the borders for the headers
        $worksheetBorder = [
            'borders' => [
                'allBorders' => [
                    'borderStyle' => Border::BORDER_THIN,
                ],
            ],
        ];
        $sheet->getStyle('A1:'.$totalHighestColumn.$totalHighestRow)->applyFromArray($worksheetBorder);

        // Create and return response
        $writer = new Xlsx($spreadsheet);
        $temp_file = tempnam(sys_get_temp_dir(), 'phpspreadsheet');
        $writer->save($temp_file);

        return new Response(
            file_get_contents($temp_file),
            200,
            [
                'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                'Content-Disposition' => 'inline; filename="timesheet.xlsx"',
            ]
        );
    }

    public function generateManpowerMonitoringReport($dateFrom, $dateTo, $project) : Response
    {
        // Initialize Spreadsheet
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
    
        // Set header rows with variables
        $sheet->setCellValue('A1', 'WRLD CAPITAL HOLDINGS');
        $sheet->mergeCells('A1:V1'); // Adjust to fit the header width
        $sheet->getStyle('A1')->getFont()->setBold(true)->setSize(14);
        $sheet->getStyle('A1')->getAlignment()->setHorizontal('center');
    
        $sheet->setCellValue('A2', $dateFrom.  'CONTRIBUTION for SSS, HDMF (Pagibig) and PhilHealth');
        $sheet->mergeCells('A2:V2'); // Adjust to fit the header width
        $sheet->getStyle('A2')->getFont()->setBold(true);
        $sheet->getStyle('A2')->getAlignment()->setHorizontal('center');
    
        // Set column headers
        $headers = [
            'Name of Employee', 'SSS No.', '1st Semi Monthly', '2nd Semi Monthly', 
            'Gross Pay', "Employee's", "Employer's", 'Total EE / ER', 'ER', 
            'SSS Total', 'PhilHEALTH Number', "EMPLOYEE'S", "EMPLOYER'S", 'PhilHEALTH TOTAL',
            'Pagibig Number', "EMPLOYEE'S", "EMPLOYER'S", 'HDMF TOTAL',
            'HDMF (MP2) Total', 'SSS Loan', 'SSS Calamity Loan', 'HDMF Short Term Loan', 'Withholding Tax', 'RCBC Salary Loan'
        ];
    
        // Set the headers in the spreadsheet
        $col = 'A';
        foreach ($headers as $header) {
            $sheet->setCellValue($col . '5', $header);
            $col++;
        }
    
        // Make headers bold and apply border
        $sheet->getStyle('A5:' . $col . '5')->getFont()->setBold(true);
        $sheet->getStyle('A5:' . $col . '5')->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);
    
        // Adjust column widths
        foreach (range('A', $col) as $columnID) {
            $sheet->getColumnDimension($columnID)->setAutoSize(true);
        }
    
        // Create writer and save to a temporary file
        $writer = new Xlsx($spreadsheet);
        $temp_file = tempnam(sys_get_temp_dir(), 'phpspreadsheet');
        $writer->save($temp_file);
    
        // Read the file contents and prepare the response for download
        return new Response(
            file_get_contents($temp_file),
            200,
            [
                'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                'Content-Disposition' => 'attachment; filename="Manpower_Monitoring_Report_' . date('Ymd') . '.xlsx"',
                'Content-Length' => filesize($temp_file),
            ]
        );
    }

    // public function generateSalaryAdjustmentsReport($dateFrom, $dateTo, $project) : Response
    // {
    //     // Initialize Spreadsheet
    //     $spreadsheet = new Spreadsheet();
    //     $sheet = $spreadsheet->getActiveSheet();
    
    //     // Set header rows with variables
    //     $sheet->setCellValue('A1', 'WRLD CAPITAL HOLDINGS INC.');
    //     $sheet->mergeCells('A1:O1'); // Adjust the range to match the width of the headers
    //     $sheet->getStyle('A1')->getFont()->setBold(true)->setSize(14);
    //     $sheet->getStyle('A1')->getAlignment()->setHorizontal('center');
    
    //     $sheet->setCellValue('A2', 'PAYROLL ADJUSTMENT');
    //     $sheet->mergeCells('A2:O2'); // Adjust the range to match the width of the headers
    //     $sheet->getStyle('A2')->getFont()->setBold(true)->setSize(12);
    //     $sheet->getStyle('A2')->getAlignment()->setHorizontal('center');
    
    //     $sheet->setCellValue('A3', 'Payroll Period : ' . $dateFrom . ' - ' . $dateTo);
    //     $sheet->mergeCells('A3:O3');
    //     $sheet->getStyle('A3')->getFont()->setBold(true);
    //     $sheet->getStyle('A3')->getAlignment()->setHorizontal('center');
    
    //     $sheet->setCellValue('A4', 'Date Printed : ' . $dateFrom);
    //     $sheet->mergeCells('A4:O4');
    //     $sheet->getStyle('A4')->getAlignment()->setHorizontal('center');
    
    //     // Set specific headers as per your image
    //     $headers = [
    //         'NAME', 'DAILY RATE', 'REG. DAYS', 'REG. DAYS PAY', 'REG. NDOT HOURS', 
    //         'REG. NDOT PAY', 'OT MEAL SUBSIDY (Days/8PM Onwards)', 'OT MEAL SUBSIDY AMOUNT', 
    //         '4 HRS or MORE during SAT./SUN./LEG. HOL.', 'AMOUNT', 'Temporary Allowance Amount', 
    //         'WELLNESS', 'SALARY ADJUSTMENT', 'TOTAL SALARY ADJUSTMENT', 'REMARKS'
    //     ];
    
    //     // Set the headers in the spreadsheet
    //     $col = 'A';
    //     foreach ($headers as $header) {
    //         $sheet->setCellValue($col . '6', $header);
    //         $col++;
    //     }
    
    //     // Make headers bold and apply border
    //     $sheet->getStyle('A6:' . $col . '6')->getFont()->setBold(true);
    //     $sheet->getStyle('A6:' . $col . '6')->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);
    
    //     // Adjust column widths
    //     foreach (range('A', $col) as $columnID) {
    //         $sheet->getColumnDimension($columnID)->setAutoSize(true);
    //     }
    
    //     // Create writer and save to a temporary file
    //     $writer = new Xlsx($spreadsheet);
    //     $temp_file = tempnam(sys_get_temp_dir(), 'phpspreadsheet');
    //     $writer->save($temp_file);
    
    //     // Read the file contents and prepare the response for download
    //     return new Response(
    //         file_get_contents($temp_file),
    //         200,
    //         [
    //             'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
    //             'Content-Disposition' => 'attachment; filename="Salary_Adjustments_Report_' . date('Ymd') . '.xlsx"',
    //             'Content-Length' => filesize($temp_file),
    //         ]
    //     );
    // }

    public function generateSalaryAdjustmentsReport($dateFrom, $dateTo, $data): Response
    {
        // Initialize Spreadsheet
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Set header rows with variables
        $sheet->setCellValue('A1', 'WRLD CAPITAL HOLDINGS INC.');
        $sheet->mergeCells('A1:O1');
        $sheet->getStyle('A1')->getFont()->setBold(true)->setSize(14);
        $sheet->getStyle('A1')->getAlignment()->setHorizontal('center');

        $sheet->setCellValue('A2', 'PAYROLL ADJUSTMENT');
        $sheet->mergeCells('A2:O2');
        $sheet->getStyle('A2')->getFont()->setBold(true)->setSize(12);
        $sheet->getStyle('A2')->getAlignment()->setHorizontal('center');

        $sheet->setCellValue('A3', 'Payroll Period : ' . $dateFrom . ' - ' . $dateTo);
        $sheet->mergeCells('A3:O3');
        $sheet->getStyle('A3')->getFont()->setBold(true);
        $sheet->getStyle('A3')->getAlignment()->setHorizontal('center');

        $sheet->setCellValue('A4', 'Date Printed : ' . date('Y-m-d'));
        $sheet->mergeCells('A4:O4');
        $sheet->getStyle('A4')->getAlignment()->setHorizontal('center');

        // Define headers
        $headers = [
            'NAME', 'DAILY RATE', 'REG. DAYS', 'REG. DAYS PAY', 'REG. NDOT HOURS', 
            'REG. NDOT PAY', 'OT MEAL SUBSIDY (Days/8PM Onwards)', 'OT MEAL SUBSIDY AMOUNT', 
            '4 HRS or MORE during SAT./SUN./LEG. HOL.', 'AMOUNT', 'Temporary Allowance Amount', 
            'WELLNESS', 'SALARY ADJUSTMENT', 'TOTAL SALARY ADJUSTMENT', 'REMARKS'
        ];

        // Insert headers
        $col = 'A';
        foreach ($headers as $header) {
            $sheet->setCellValue($col . '6', $header);
            $col++;
        }

        // Set header styling
        $sheet->getStyle('A6:' . $col . '6')->getFont()->setBold(true);
        $sheet->getStyle('A6:' . $col . '6')->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);

        // Adjust column widths
        foreach (range('A', $col) as $columnID) {
            $sheet->getColumnDimension($columnID)->setAutoSize(true);
        }

        // Start populating data from row 7 onward
        $row = 7;
        foreach ($data as $employee) {
            $salaryAdjustment = $employee['salary_adjustment'] ?? [];

            $sheet->setCellValue('A' . $row, $employee['fullname']);
            $sheet->setCellValue('B' . $row, $employee['daily_rate']);
            $sheet->setCellValue('C' . $row, $salaryAdjustment['regular_days'] ?? 0);
            $sheet->setCellValue('D' . $row, $salaryAdjustment['regular_days_pay'] ?? 0);
            $sheet->setCellValue('E' . $row, $salaryAdjustment['regular_ndot_hours'] ?? 0);
            $sheet->setCellValue('F' . $row, $salaryAdjustment['regular_ndot_amount'] ?? 0);
            $sheet->setCellValue('G' . $row, $salaryAdjustment['ot_meal_subsidy'] ?? 0);
            $sheet->setCellValue('H' . $row, $salaryAdjustment['ot_meal_subsidy_amount'] ?? 0);
            $sheet->setCellValue('I' . $row, $salaryAdjustment['above_four_hours'] ?? 0);
            $sheet->setCellValue('J' . $row, $salaryAdjustment['above_four_hours_amount'] ?? 0);
            $sheet->setCellValue('K' . $row, $salaryAdjustment['temp_allowance_amount'] ?? 0);
            $sheet->setCellValue('L' . $row, $salaryAdjustment['wellness'] ?? 0);
            $sheet->setCellValue('M' . $row, $salaryAdjustment['salary_adjustment'] ?? 0);
            $sheet->setCellValue('N' . $row, $salaryAdjustment['total_salary_adjustment'] ?? 0);
            $sheet->setCellValue('O' . $row, ''); // Remarks column, left blank or fill as needed

            $row++;
        }

        // Create writer and save to a temporary file
        $writer = new Xlsx($spreadsheet);
        $temp_file = tempnam(sys_get_temp_dir(), 'phpspreadsheet');
        $writer->save($temp_file);

        // Return response for file download
        return new Response(
            file_get_contents($temp_file),
            200,
            [
                'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                'Content-Disposition' => 'attachment; filename="Salary_Adjustments_Report_' . date('Ymd') . '.xlsx"',
                'Content-Length' => filesize($temp_file),
            ]
        );
    }

    

    // public function generate13thMonthPayReport($dateFrom, $dateTo, $project) : Response
    // {
    //     // Initialize Spreadsheet
    //     $spreadsheet = new Spreadsheet();
    //     $sheet = $spreadsheet->getActiveSheet();

    //     // Set header rows with variables
    //     $sheet->setCellValue('A1', 'ABELLINE HUMAN RESOURCE SERVICES');
    //     $sheet->mergeCells('A1:E1'); // Adjust to fit the header width
    //     $sheet->getStyle('A1')->getFont()->setBold(true)->setSize(14);
    //     $sheet->getStyle('A1')->getAlignment()->setHorizontal('center');

    //     $sheet->setCellValue('A2', 'PAYROLL REGISTER');
    //     $sheet->mergeCells('A2:E2'); // Adjust to fit the header width
    //     $sheet->getStyle('A2')->getFont()->setBold(true);
    //     $sheet->getStyle('A2')->getAlignment()->setHorizontal('center');

    //     $sheet->setCellValue('A3', 'FOR THE PAYROLL PERIOD OF ' . $dateFrom . ' - ' . $dateTo);
    //     $sheet->mergeCells('A3:E3');
    //     $sheet->getStyle('A3')->getFont()->setBold(true);
    //     $sheet->getStyle('A3')->getAlignment()->setHorizontal('center');

    //     $sheet->setCellValue('A4', '13TH MONTH PAY');
    //     $sheet->mergeCells('A4:E4');
    //     $sheet->getStyle('A4')->getFont()->setBold(true);
    //     $sheet->getStyle('A4')->getAlignment()->setHorizontal('center');

    //     // No specific headers were available in this sheet structure.
        
    //     // Create writer and save to a temporary file
    //     $writer = new Xlsx($spreadsheet);
    //     $temp_file = tempnam(sys_get_temp_dir(), 'phpspreadsheet');
    //     $writer->save($temp_file);

    //     // Read the file contents and prepare the response for download
    //     return new Response(
    //         file_get_contents($temp_file),
    //         200,
    //         [
    //             'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
    //             'Content-Disposition' => 'attachment; filename="13th_Month_Pay_Report_' . date('Ymd') . '.xlsx"',
    //             'Content-Length' => filesize($temp_file),
    //         ]
    //     );
    // }

    // public function generateTimeSheetReport($dateFrom, $dateTo, $data): Response
    // {
    //     // Initialize Spreadsheet
    //     $spreadsheet = new Spreadsheet();
    //     $sheet = $spreadsheet->getActiveSheet();
    
    //     // Set header rows with company information
    //     $sheet->setCellValue('A1', 'WRLD CAPITAL HOLDINGS INC.');
    //     $sheet->mergeCells('A1:AI1'); // Adjust to fit the header width
    //     $sheet->getStyle('A1')->getFont()->setBold(true)->setSize(14);
    //     $sheet->getStyle('A1')->getAlignment()->setHorizontal('center');
    
    //     $sheet->setCellValue('A2', 'TIME SHEET');
    //     $sheet->mergeCells('A2:AI2'); // Adjust to fit the header width
    //     $sheet->getStyle('A2')->getFont()->setBold(true)->setSize(12);
    //     $sheet->getStyle('A2')->getAlignment()->setHorizontal('center');
    
    //     $sheet->setCellValue('A3', 'Payroll Period: ' . $dateFrom . ' - ' . $dateTo);
    //     $sheet->mergeCells('A3:AI3');
    //     $sheet->getStyle('A3')->getAlignment()->setHorizontal('center');
    
    //     $sheet->setCellValue('A4', 'Date Printed: ' . $dateFrom);
    //     $sheet->mergeCells('A4:AI4');
    //     $sheet->getStyle('A4')->getAlignment()->setHorizontal('center');
    
    //     // Define the headers for employee names and daily records
    //     $sheet->setCellValue('A6', 'Name of Employee');
    
    //     // Define the sub-headers for each day
    //     $subHeaders = ['Reg. Hrs.', 'Reg. OT', 'Hrs. Late'];
    
    //     // Create DateTime objects for the range
    //     $startDate = new \DateTime($dateFrom);
    //     $endDate = new \DateTime($dateTo);
    
    //     // Initialize the column for the first day
    //     $col = 'B';
    
    //     // Loop through the dates and add them as headers with sub-headers
    //     while ($startDate <= $endDate) {
    //         $currentDay = $startDate->format('d'); // Get the day number (1, 2, 3, etc.)
    
    //         // Merge the main header for the date
    //         $sheet->setCellValue($col . '6', $currentDay);
    //         // Convert the current column letter to its column index
    //         $colIndex = Coordinate::columnIndexFromString($col);

    //         // Calculate the index for the end column by adding 5 (for 5 columns)
    //         $endColIndex = $colIndex + 2;

    //         // Convert the end column index back to a column letter
    //         $endCol = Coordinate::stringFromColumnIndex($endColIndex);
    //         $sheet->mergeCells($col . '6:' . $endCol . '6');
    
    //         // Apply sub-headers for each day (Reg. Hrs., Reg. OT, Hrs. Late)
    //         foreach ($subHeaders as $subHeader) {
    //             $sheet->setCellValue($col . '7', $subHeader);
    //             $col++;
    //         }
    
    //         // Move to the next day
    //         $startDate->modify('+1 day');
    //     }
    
    //     // After looping through the dates, add the "Total" and other columns
    //     $sheet->setCellValue($col . '6', 'TOTAL');
    //     // Convert the current column letter to its column index
    //     $colIndex = Coordinate::columnIndexFromString($col);

    //     // Calculate the index for the end column by adding 5 (for 5 columns)
    //     $endColIndex = $colIndex + 5;

    //     // Convert the end column index back to a column letter
    //     $endCol = Coordinate::stringFromColumnIndex($endColIndex);

    //     // Now merge the cells from the current column to the calculated end column
    //     $sheet->mergeCells($col . '6:' . $endCol . '6');
    
    //     $subTotalHeaders = ['REG. DAYS', 'REG. O.T.', 'REG. NDOT', 'SUN.', 'SALARY ADJ.', 'LATES'];
    //     foreach ($subTotalHeaders as $subTotalHeader) {
    //         $sheet->setCellValue($col . '7', $subTotalHeader);
    //         $col++;
    //     }

    //     // Add data from API

    
    //     // Make headers bold and apply border
    //     $sheet->getStyle('A6:' . $col . '7')->getFont()->setBold(true);
    //     $sheet->getStyle('A6:' . $col . '7')->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);
    
    //     // Adjust column widths
    //     foreach (range('A', $col) as $columnID) {
    //         $sheet->getColumnDimension($columnID)->setAutoSize(true);
    //     }
    
    //     // Create writer and save to a temporary file
    //     $writer = new Xlsx($spreadsheet);
    //     $temp_file = tempnam(sys_get_temp_dir(), 'phpspreadsheet');
    //     $writer->save($temp_file);
    
    //     // Read the file contents and prepare the response for download
    //     return new Response(
    //         file_get_contents($temp_file),
    //         200,
    //         [
    //             'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
    //             'Content-Disposition' => 'attachment; filename="Time_Sheet_Report_' . date('Ymd') . '.xlsx"',
    //             'Content-Length' => filesize($temp_file),
    //         ]
    //     );
    // }

    public function generateTimeSheetReport($dateFrom, $dateTo, $data): Response
    {
        // Initialize Spreadsheet
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $currentDate = date('Y-m-d');

        // Set header rows with company information
        $sheet->setCellValue('A1', 'WRLD CAPITAL HOLDINGS INC.');
        $sheet->mergeCells('A1:AI1');
        $sheet->getStyle('A1')->getFont()->setBold(true)->setSize(14);
        $sheet->getStyle('A1')->getAlignment()->setHorizontal('center');

        $sheet->setCellValue('A2', 'TIME SHEET');
        $sheet->mergeCells('A2:AI2');
        $sheet->getStyle('A2')->getFont()->setBold(true)->setSize(12);
        $sheet->getStyle('A2')->getAlignment()->setHorizontal('center');

        $sheet->setCellValue('A3', 'Payroll Period: ' . $dateFrom . ' - ' . $dateTo);
        $sheet->mergeCells('A3:AI3');
        $sheet->getStyle('A3')->getAlignment()->setHorizontal('center');

        $sheet->setCellValue('A4', 'Date Generated: ' . $currentDate);
        $sheet->mergeCells('A4:AI4');
        $sheet->getStyle('A4')->getAlignment()->setHorizontal('center');

        // Define the headers for employee names and daily records
        $sheet->setCellValue('A6', 'Name of Employee');

        // Define the sub-headers for each day
        $subHeaders = ['Reg. Hrs.', 'Reg. OT', 'Hrs. Late'];

        // Create DateTime objects for the range
        $startDate = new \DateTime($dateFrom);
        $endDate = new \DateTime($dateTo);

        // Initialize the column for the first day
        $col = 'B';

        // Loop through the dates and add them as headers with sub-headers
        while ($startDate <= $endDate) {
            $currentDay = $startDate->format('d'); // Get the day number (1, 2, 3, etc.)

            // Merge the main header for the date
            $sheet->setCellValue($col . '6', $currentDay);
            $colIndex = Coordinate::columnIndexFromString($col);
            $endColIndex = $colIndex + 2;
            $endCol = Coordinate::stringFromColumnIndex($endColIndex);
            $sheet->mergeCells($col . '6:' . $endCol . '6');

            // Apply sub-headers for each day (Reg. Hrs., Reg. OT, Hrs. Late)
            foreach ($subHeaders as $subHeader) {
                $sheet->setCellValue($col . '7', $subHeader);
                $col++;
            }

            // Move to the next day
            $startDate->modify('+1 day');
        }

        // Add "TOTAL" column
        $sheet->setCellValue($col . '6', 'TOTAL');
        $colIndex = Coordinate::columnIndexFromString($col);
        $endColIndex = $colIndex + 5;
        $endCol = Coordinate::stringFromColumnIndex($endColIndex);
        $sheet->mergeCells($col . '6:' . $endCol . '6');

        $subTotalHeaders = ['REG. Hrs', 'REG. O.T.', 'REG. NDOT', 'SUN.', 'SALARY ADJ.', 'LATES'];
        foreach ($subTotalHeaders as $subTotalHeader) {
            $sheet->setCellValue($col . '7', $subTotalHeader);
            $col++;
        }

        // Loop through the employee data
        $row = 8; // Start at row 8 for employee data
        $total_rendered_hours   = 0;
        $total_reg_days         = 0;
        $total_overtime         = 0;
        $total_night_overtime   = 0;
        $total_sunday           = 0;
        $total_salary_adj       = 0;
        $total_undertime        = 0;
        foreach ($data as $employee) {
            // Combine first and last names
            $fullName = $employee['firstname'] . ' ' . $employee['lastname'];
            $sheet->setCellValue('A' . $row, $fullName);

            // Reset the column to 'B' for employee data
            $col = 'B';
            $startDate = new \DateTime($dateFrom);

            //Totals variable
            $emp_total_reg_hours        = 0;
            $emp_total_reg_days         = 0;
            $emp_total_overtime         = 0;
            $emp_total_night_overtime   = 0;
            $emp_total_sunday           = 0;
            $emp_total_salary_adj       = 0;
            $emp_total_undertime        = 0;

            // Loop through the dates again to match logs
            while ($startDate <= $endDate) {
                $currentDate = $startDate->format('Y-m-d');
                $matchedLog = null;

                // Check if there is a log that matches the current date
                foreach ($employee['logs'] as $log) {
                    $logDate = (new \DateTime($log['loginDate']))->format('Y-m-d');
                    if ($logDate === $currentDate) {
                        $matchedLog = $log;
                        break;
                    }
                }

                $colIndex = Coordinate::columnIndexFromString($col);
                $overtimeColIndex = $colIndex + 1;
                $undertimeColIndex = $colIndex + 2;
                $overtimeIndex = Coordinate::stringFromColumnIndex($overtimeColIndex);
                $undertimeIndex = Coordinate::stringFromColumnIndex($undertimeColIndex);
                //dd($undertimeIndex);
                if ($matchedLog) {
                    // Populate the data for matched logs
                    $sheet->setCellValue($col . $row, $matchedLog['rendered_hours'] / 60); // Reg. Hrs.
                    $sheet->setCellValue($overtimeIndex. $row, $matchedLog['overtime'] / 60); // Reg. OT
                    $sheet->setCellValue($undertimeIndex. $row, $matchedLog['undertime'] / 60); // Hrs. Late
                    $emp_total_reg_hours        += $matchedLog['rendered_hours'] / 60;
                    $emp_total_overtime         += $matchedLog['overtime'] / 60;
                    $emp_total_undertime        += $matchedLog['undertime'] / 60;
                    $total_rendered_hours       += $matchedLog['rendered_hours'] / 60;
                    $total_overtime             += $matchedLog['overtime'] / 60;
                    $total_undertime            += $matchedLog['undertime'] / 60;
                } else {
                    // If no log is found, leave it empty
                    $sheet->setCellValue($col . $row, '0'); // Reg. Hrs.
                    $sheet->setCellValue($overtimeIndex . $row, '0'); // Reg. OT
                    $sheet->setCellValue($undertimeIndex . $row, '0'); // Hrs. Late
                }

                // Move to the next set of columns (3 columns per day)
                $colIndex = Coordinate::columnIndexFromString($col);
                $newColIndex = $colIndex + 3;
                $newCol = Coordinate::stringFromColumnIndex($newColIndex);

                $col = $newCol;
                $startDate->modify('+1 day');
            }

            // Add total employee values in the total part
            // Add Total Values with Calculated Values
            $subTotalHeaders = [
                'REG. Hrs.'     => $emp_total_reg_hours,
                'REG. O.T.'     => $emp_total_overtime,
                'REG. NDOT'     => $emp_total_night_overtime,
                'SUN.'          => $emp_total_sunday,
                'SALARY ADJ.'   => $emp_total_salary_adj,
                'LATES'         => $emp_total_undertime
            ];
            $current_col = $col;
            // Place values into the appropriate columns
            foreach ($subTotalHeaders as $subTotalHeader => $value) {
                $sheet->setCellValue($current_col . $row, $value); // Set the header
                $current_col++;
            }
            // Move to the next row for the next employee
            $row++;
        }

        // Add Total Values with Calculated Values
        $subTotalHeaders = [
            'REG. Hrs.' => $total_rendered_hours,
            'REG. O.T.' => $total_overtime,
            'REG. NDOT' => $total_night_overtime,
            'SUN.' => $total_sunday,
            'SALARY ADJ.' => $total_salary_adj,
            'LATES' => $total_undertime
        ];

        // Place values into the appropriate columns
        foreach ($subTotalHeaders as $subTotalHeader => $value) {
            $sheet->setCellValue($col . $row, $value); // Set the header
            $col++;
        }

        // Apply styling to the headers
        $sheet->getStyle('A6:' . $col . '7')->getFont()->setBold(true);
        $sheet->getStyle('A6:' . $col . '7')->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);

        // Adjust column widths
        foreach (range('A', $col) as $columnID) {
            $sheet->getColumnDimension($columnID)->setAutoSize(true);
        }

        // Create writer and save to a temporary file
        $writer = new Xlsx($spreadsheet);
        $temp_file = tempnam(sys_get_temp_dir(), 'phpspreadsheet');
        $writer->save($temp_file);

        // Return the response for download
        return new Response(
            file_get_contents($temp_file),
            200,
            [
                'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                'Content-Disposition' => 'attachment; filename="Time_Sheet_Report_' . date('Ymd') . '.xlsx"',
                'Content-Length' => filesize($temp_file),
            ]
        );
    }

    public function generatePayrollSheetReport($dateFrom, $dateTo, $data): Response
    {
        // Initialize Spreadsheet
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
    
        // Set header rows with variables
        $sheet->setCellValue('A1', 'Payroll Sheet');
        $sheet->mergeCells('A1:Z1'); // Adjust to fit the header width based on your final column count
        $sheet->getStyle('A1')->getFont()->setBold(true)->setSize(14);
        $sheet->getStyle('A1')->getAlignment()->setHorizontal('center');
    
        $sheet->setCellValue('A2', 'Payroll Period: ' . $dateFrom . ' - ' . $dateTo);
        $sheet->mergeCells('A2:Z2'); // Adjust to fit the header width based on your final column count
        $sheet->getStyle('A2')->getFont()->setBold(true);
        $sheet->getStyle('A2')->getAlignment()->setHorizontal('center');
    
        // Set column headers
        $headers = [
            'EMPLOYEE FULL NAME', 'DAILY RATE', 'REG. DAYS', 'REG. DAYS PAY', 'REG. OT HOURS',
            'REG. OT PAY', 'SUN.', 'SUN. OT', 'SUN. PAY', 'BASIC SALARY',
            'No. of HOURS LATE', 'LATE DED./ HOUR', 'OVERTIME', 'SALARY ADJ.',
            'GROSS SALARY', 'SSS', 'PHIL HEALTH', 'W / TAX', 'HDMF (P1)',
            'HDMF (MP2)', 'HDMF SHORT TERM LOAN', 'HDMF CALAMITY LOAN',
            'SSS LOAN', 'SSS CALAMITY LOAN', 'RCBC SALARY LOAN', 'CASH ADVANCE',
            'TOTAL DEDUCTIONS', 'NET SALARY'
        ];
    
        // Set the headers in the spreadsheet
        $col = 'A';
        foreach ($headers as $header) {
            $sheet->setCellValue($col . '5', $header);
            $col++;
        }
    
        // Make headers bold and apply border
        $sheet->getStyle('A5:' . $col . '5')->getFont()->setBold(true);
        $sheet->getStyle('A5:' . $col . '5')->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);
    
        // Adjust column widths
        foreach (range('A', $col) as $columnID) {
            $sheet->getColumnDimension($columnID)->setAutoSize(true);
        }
    
        // Initialize totals
        $totals = [
            'daily_rate' => 0,
            'reg_days' => 0,
            'reg_days_pay' => 0,
            'reg_ot_hours' => 0,
            'reg_ot_pay' => 0,
            'sun' => 0,
            'sun_ot' => 0,
            'sun_pay' => 0,
            'basic_salary' => 0,
            'hours_late' => 0,
            'late_deduction' => 0,
            'overtime' => 0,
            'salary_adj' => 0,
            'gross_salary' => 0,
            'sss' => 0,
            'philhealth' => 0,
            'tax' => 0,
            'hdmf_p1' => 0,
            'hdmf_mp2' => 0,
            'hdmf_short_term_loan' => 0,
            'hdmf_calamity_loan' => 0,
            'sss_loan' => 0,
            'sss_calamity_loan' => 0,
            'rcbc_salary_loan' => 0,
            'cash_advance' => 0,
            'total_deductions' => 0,
            'net_salary' => 0,
        ];
    
        // Populate data per row starting from row 6 (the next row after headers)
        $row = 6; // Start from row 6
        foreach ($data as $employeeData) {
            // Access employee data fields
            $payrollDetails = $employeeData['payroll_details'];
    
            // Set values in the spreadsheet
            $sheet->setCellValue('A' . $row, $employeeData['fullname']);
            $sheet->setCellValue('B' . $row, $employeeData['daily_rate']); 
            $sheet->setCellValue('C' . $row, $payrollDetails['rendered_days']);
            $sheet->setCellValue('D' . $row, $payrollDetails['basic_salary']);
            $sheet->setCellValue('E' . $row, 0); // REG. OT HOURS - Needs calculation based on additional data
            $sheet->setCellValue('F' . $row, $payrollDetails['overtime_salary']);
            $sheet->setCellValue('G' . $row, 0); // SUN. - Needs additional data
            $sheet->setCellValue('H' . $row, 0); // SUN. OT - Needs additional data
            $sheet->setCellValue('I' . $row, 0); // SUN. PAY - Needs additional data
            $sheet->setCellValue('J' . $row, $payrollDetails['basic_salary']);
            $sheet->setCellValue('K' . $row, 0); // No. of HOURS LATE - Needs additional data
            $sheet->setCellValue('L' . $row, $employeeData['late_rate']); // LATE DED./ HOUR
            $sheet->setCellValue('M' . $row, $payrollDetails['overtime_salary']); // OVERTIME
            $sheet->setCellValue('N' . $row, 0); // SALARY ADJ. - Needs additional data
            $sheet->setCellValue('O' . $row, $payrollDetails['total_salary']); // GROSS SALARY
            $sheet->setCellValue('P' . $row, $payrollDetails['sss_share']); // SSS
            $sheet->setCellValue('Q' . $row, $payrollDetails['philhealth_share']); // PHIL HEALTH
            $sheet->setCellValue('R' . $row, $payrollDetails['tax_contribution']); // W / TAX
            $sheet->setCellValue('S' . $row, $payrollDetails['hdmf_contribution']); // HDMF (P1)
            $sheet->setCellValue('T' . $row, $payrollDetails['hdmf_mp2']); // HDMF (MP2) - Needs additional data
            $sheet->setCellValue('U' . $row, $payrollDetails['hdmf_loan']); // HDMF SHORT TERM LOAN - Needs additional data
            $sheet->setCellValue('V' . $row, $payrollDetails['hdmf_calamity_loan']); // HDMF CALAMITY LOAN - Needs additional data
            $sheet->setCellValue('W' . $row, $payrollDetails['sss_loan']); // SSS LOAN - Needs additional data
            $sheet->setCellValue('X' . $row, $payrollDetails['sss_calamity_loan']); // SSS CALAMITY LOAN - Needs additional data
            $sheet->setCellValue('Y' . $row, 0); // RCBC SALARY LOAN - Needs additional data
            $sheet->setCellValue('Z' . $row, $payrollDetails['sss_calamity_loan']); // CASH ADVANCE
            $sheet->setCellValue('AA' . $row, $payrollDetails['total_deduction']); // Assuming total deductions goes in column AB
            $sheet->setCellValue('AB' . $row, $payrollDetails['net_salary']); // Assuming net salary goes in column AC
    
            // Accumulate totals
            $totals['daily_rate'] += $employeeData['daily_rate'];
            $totals['reg_days'] += $payrollDetails['rendered_days'];
            $totals['reg_days_pay'] += $payrollDetails['basic_salary'];
            $totals['reg_ot_hours'] += 0; // You can implement the logic for OT hours
            $totals['reg_ot_pay'] += $payrollDetails['overtime_salary'];
            $totals['sun'] += 0; // Needs additional data
            $totals['sun_ot'] += 0; // Needs additional data
            $totals['sun_pay'] += 0; // Needs additional data
            $totals['basic_salary'] += $payrollDetails['basic_salary'];
            $totals['hours_late'] += 0; // Needs additional data
            $totals['late_deduction'] += $employeeData['late_rate'];
            $totals['overtime'] += $payrollDetails['overtime_salary'];
            $totals['salary_adj'] += 0; // Needs additional data
            $totals['gross_salary'] += $payrollDetails['total_salary'];
            $totals['sss'] += $payrollDetails['sss_share'];
            $totals['philhealth'] += $payrollDetails['philhealth_share'];
            $totals['tax'] += $payrollDetails['tax_contribution'];
            $totals['hdmf_p1'] += $payrollDetails['hdmf_contribution'];
            $totals['hdmf_mp2'] += $payrollDetails['hdmf_mp2']; // Needs additional data
            $totals['hdmf_short_term_loan'] += $payrollDetails['hdmf_loan']; // Needs additional data
            $totals['hdmf_calamity_loan'] += $payrollDetails['hdmf_calamity_loan']; // Needs additional data
            $totals['sss_loan'] += $payrollDetails['sss_loan']; // Needs additional data
            $totals['sss_calamity_loan'] += $payrollDetails['sss_calamity_loan']; // Needs additional data
            $totals['rcbc_salary_loan'] += 0; // Needs additional data
            $totals['cash_advance'] += $payrollDetails['sss_calamity_loan']; // Needs additional data
            $totals['total_deductions'] += $payrollDetails['total_deduction'];
            $totals['net_salary'] += $payrollDetails['net_salary'];
    
            $row++; // Move to the next row
        }
        
        $row++;
        // Insert Grand Total Row with Bold Label
        $sheet->setCellValue('A' . $row, 'Grand Total');
        // $sheet->mergeCells('A' . $row . ':J' . $row); // Adjust range to fit
        $sheet->getStyle('A' . $row)->getFont()->setBold(true);
        $sheet->getStyle('A' . $row)->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
    
        // Set Actual Totals Row
        // $sheet->setCellValue('B' . $row, $totals['daily_rate']);
        $sheet->setCellValue('C' . $row, $totals['reg_days']);
        $sheet->setCellValue('D' . $row, $totals['reg_days_pay']);
        $sheet->setCellValue('E' . $row, $totals['reg_ot_hours']);
        $sheet->setCellValue('F' . $row, $totals['reg_ot_pay']);
        $sheet->setCellValue('G' . $row, $totals['sun']);
        $sheet->setCellValue('H' . $row, $totals['sun_ot']);
        $sheet->setCellValue('I' . $row, $totals['sun_pay']);
        $sheet->setCellValue('J' . $row, $totals['basic_salary']);
        $sheet->setCellValue('K' . $row, $totals['hours_late']);
        $sheet->setCellValue('L' . $row, $totals['late_deduction']);
        $sheet->setCellValue('M' . $row, $totals['overtime']);
        $sheet->setCellValue('N' . $row, $totals['salary_adj']);
        $sheet->setCellValue('O' . $row, $totals['gross_salary']);
        $sheet->setCellValue('P' . $row, $totals['sss']);
        $sheet->setCellValue('Q' . $row, $totals['philhealth']);
        $sheet->setCellValue('R' . $row, $totals['tax']);
        $sheet->setCellValue('S' . $row, $totals['hdmf_p1']);
        $sheet->setCellValue('T' . $row, $totals['hdmf_mp2']);
        $sheet->setCellValue('U' . $row, $totals['hdmf_short_term_loan']);
        $sheet->setCellValue('V' . $row, $totals['hdmf_calamity_loan']);
        $sheet->setCellValue('W' . $row, $totals['sss_loan']);
        $sheet->setCellValue('X' . $row, $totals['sss_calamity_loan']);
        $sheet->setCellValue('Y' . $row, $totals['rcbc_salary_loan']);
        $sheet->setCellValue('Z' . $row, $totals['cash_advance']);
        $sheet->setCellValue('AA' . $row, $totals['total_deductions']);
        $sheet->setCellValue('AB' . $row, $totals['net_salary']);
    
        // Apply borders to the totals row
        $sheet->getStyle('A' . $row . ':AB' . $row)->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
    
        // Save the file
        $writer = new Xlsx($spreadsheet);
        $fileName = 'payroll_sheet_' . date('Ymd') . '.xlsx';
        $temp_file = tempnam(sys_get_temp_dir(), $fileName);
        $writer->save($temp_file);
        
        // Return response
        return new Response(
            file_get_contents($temp_file),
            200,
            [
                'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                'Content-Disposition' => 'attachment; filename="' . $fileName . '"',
            ]
        );
    }

    public function generatePayrollRegisterReport($dateFrom, $dateTo, $data): Response
    {
        // Initialize Spreadsheet
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
    
        // Set header rows with variables
        $sheet->setCellValue('A1', 'Payroll Sheet');
        $sheet->mergeCells('A1:Z1'); // Adjust to fit the header width based on your final column count
        $sheet->getStyle('A1')->getFont()->setBold(true)->setSize(14);
        $sheet->getStyle('A1')->getAlignment()->setHorizontal('center');
    
        $sheet->setCellValue('A2', 'Payroll Period: ' . $dateFrom . ' - ' . $dateTo);
        $sheet->mergeCells('A2:Z2'); // Adjust to fit the header width based on your final column count
        $sheet->getStyle('A2')->getFont()->setBold(true);
        $sheet->getStyle('A2')->getAlignment()->setHorizontal('center');
    
        // Set column headers
        $headers = [
            'EMPLOYEE FULL NAME', 'EMPLOYEE CODE', 'NET SALARY'
        ];
    
        // Set the headers in the spreadsheet
        $col = 'A';
        foreach ($headers as $header) {
            $sheet->setCellValue($col . '5', $header);
            $col++;
        }
    
        // Make headers bold and apply border
        $sheet->getStyle('A5:' . $col . '5')->getFont()->setBold(true);
        $sheet->getStyle('A5:' . $col . '5')->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);
    
        // Adjust column widths
        foreach (range('A', $col) as $columnID) {
            $sheet->getColumnDimension($columnID)->setAutoSize(true);
        }
    
        // Initialize totals
        $totals = [
            'daily_rate' => 0,
            'reg_days' => 0,
            'reg_days_pay' => 0,
            'reg_ot_hours' => 0,
            'reg_ot_pay' => 0,
            'sun' => 0,
            'sun_ot' => 0,
            'sun_pay' => 0,
            'basic_salary' => 0,
            'hours_late' => 0,
            'late_deduction' => 0,
            'overtime' => 0,
            'salary_adj' => 0,
            'gross_salary' => 0,
            'sss' => 0,
            'philhealth' => 0,
            'tax' => 0,
            'hdmf_p1' => 0,
            'hdmf_mp2' => 0,
            'hdmf_short_term_loan' => 0,
            'hdmf_calamity_loan' => 0,
            'sss_loan' => 0,
            'sss_calamity_loan' => 0,
            'rcbc_salary_loan' => 0,
            'cash_advance' => 0,
            'total_deductions' => 0,
            'net_salary' => 0,
        ];
    
        // Populate data per row starting from row 6 (the next row after headers)
        $row = 6; // Start from row 6
        foreach ($data as $employeeData) {
            // Access employee data fields
            $payrollDetails = $employeeData['payroll_details'];
    
            // Set values in the spreadsheet
            $sheet->setCellValue('A' . $row, $employeeData['fullname']);
            $sheet->setCellValue('B' . $row, $employeeData['employee_code']); 
            $sheet->setCellValue('C' . $row, $payrollDetails['net_salary']); // Assuming net salary goes in column AC
    
            // Accumulate totals
            $totals['daily_rate'] += $employeeData['daily_rate'];
            $totals['reg_days'] += $payrollDetails['rendered_days'];
            $totals['reg_days_pay'] += $payrollDetails['basic_salary'];
            $totals['reg_ot_hours'] += 0; // You can implement the logic for OT hours
            $totals['reg_ot_pay'] += $payrollDetails['overtime_salary'];
            $totals['sun'] += 0; // Needs additional data
            $totals['sun_ot'] += 0; // Needs additional data
            $totals['sun_pay'] += 0; // Needs additional data
            $totals['basic_salary'] += $payrollDetails['basic_salary'];
            $totals['hours_late'] += 0; // Needs additional data
            $totals['late_deduction'] += $employeeData['late_rate'];
            $totals['overtime'] += $payrollDetails['overtime_salary'];
            $totals['salary_adj'] += 0; // Needs additional data
            $totals['gross_salary'] += $payrollDetails['total_salary'];
            $totals['sss'] += $payrollDetails['sss_share'];
            $totals['philhealth'] += $payrollDetails['philhealth_share'];
            $totals['tax'] += $payrollDetails['tax_contribution'];
            $totals['hdmf_p1'] += $payrollDetails['hdmf_contribution'];
            $totals['hdmf_mp2'] += $payrollDetails['hdmf_mp2']; // Needs additional data
            $totals['hdmf_short_term_loan'] += $payrollDetails['hdmf_loan']; // Needs additional data
            $totals['hdmf_calamity_loan'] += $payrollDetails['hdmf_calamity_loan']; // Needs additional data
            $totals['sss_loan'] += $payrollDetails['sss_loan']; // Needs additional data
            $totals['sss_calamity_loan'] += $payrollDetails['sss_calamity_loan']; // Needs additional data
            $totals['rcbc_salary_loan'] += 0; // Needs additional data
            $totals['cash_advance'] += $payrollDetails['sss_calamity_loan']; // Needs additional data
            $totals['total_deductions'] += $payrollDetails['total_deduction'];
            $totals['net_salary'] += $payrollDetails['net_salary'];
    
            $row++; // Move to the next row
        }
        
        $row++;
        // Insert Grand Total Row with Bold Label
        $sheet->setCellValue('A' . $row, 'Grand Total');
        // $sheet->mergeCells('A' . $row . ':J' . $row); // Adjust range to fit
        $sheet->getStyle('A' . $row)->getFont()->setBold(true);
        $sheet->getStyle('A' . $row)->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
    
        // Set Actual Totals Row
        // $sheet->setCellValue('B' . $row, $totals['daily_rate']);
        $sheet->setCellValue('C' . $row, $totals['net_salary']);
    
        // Apply borders to the totals row
        $sheet->getStyle('A' . $row . ':C' . $row)->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
    
        // Save the file
        $writer = new Xlsx($spreadsheet);
        $fileName = 'payroll_sheet_' . date('Ymd') . '.xlsx';
        $temp_file = tempnam(sys_get_temp_dir(), $fileName);
        $writer->save($temp_file);
        
        // Return response
        return new Response(
            file_get_contents($temp_file),
            200,
            [
                'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                'Content-Disposition' => 'attachment; filename="' . $fileName . '"',
            ]
        );
    }
    
    
    // public function generatePayrollSummaryReport($dateFrom, $dateTo, $data) : Response
    // {
    //     // Initialize Spreadsheet
    //     $spreadsheet = new Spreadsheet();
    //     $sheet = $spreadsheet->getActiveSheet();

    //     // Set header rows with variables
    //     $sheet->setCellValue('A1', 'ALSDC and WRLD CAPITAL HOLDINGS');
    //     $sheet->mergeCells('A1:N1'); // Adjust to fit the header width
    //     $sheet->getStyle('A1')->getFont()->setBold(true)->setSize(14);
    //     $sheet->getStyle('A1')->getAlignment()->setHorizontal('center');

    //     $sheet->setCellValue('A2', 'PAYROLL SUMMARY');
    //     $sheet->mergeCells('A2:N2'); // Adjust to fit the header width
    //     $sheet->getStyle('A2')->getFont()->setBold(true);
    //     $sheet->getStyle('A2')->getAlignment()->setHorizontal('center');

    //     $sheet->setCellValue('A3', 'Payroll Period : ' . $dateFrom . ' - ' . $dateTo);
    //     $sheet->mergeCells('A3:N3');
    //     $sheet->getStyle('A3')->getFont()->setBold(true);
    //     $sheet->getStyle('A3')->getAlignment()->setHorizontal('center');

    //     // Set column headers
    //     $headers = [
    //         'COMPANY', 'GROSS SALARY', 'SSS', 'PHIL HEALTH', 'W / TAX', 'HDMF (P1)', 
    //         'HDMF (MP2)', 'HDMF LOAN', 'HDMF CALAMITY LOAN', 'SSS LOAN', 
    //         'SSS CALAMITY LOAN', 'RCBC SALARY LOAN', 'CASH ADVANCE', '13th MONTH PAY', 'NET SALARY'
    //     ];

    //     // Set the headers in the spreadsheet
    //     $col = 'A';
    //     foreach ($headers as $header) {
    //         $sheet->setCellValue($col . '5', $header);
    //         $col++;
    //     }

    //     // Make headers bold and apply border
    //     $sheet->getStyle('A5:' . $col . '5')->getFont()->setBold(true);
    //     $sheet->getStyle('A5:' . $col . '5')->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);

    //     // Adjust column widths
    //     foreach (range('A', $col) as $columnID) {
    //         $sheet->getColumnDimension($columnID)->setAutoSize(true);
    //     }

    //     // Create writer and save to a temporary file
    //     $writer = new Xlsx($spreadsheet);
    //     $temp_file = tempnam(sys_get_temp_dir(), 'phpspreadsheet');
    //     $writer->save($temp_file);

    //     // Read the file contents and prepare the response for download
    //     return new Response(
    //         file_get_contents($temp_file),
    //         200,
    //         [
    //             'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
    //             'Content-Disposition' => 'attachment; filename="Payroll_Summary_Report_' . date('Ymd') . '.xlsx"',
    //             'Content-Length' => filesize($temp_file),
    //         ]
    //     );
    // }

    // public function generatePayrollSummaryReport($dateFrom, $dateTo, $data) : Response
    // {
    //     // Initialize Spreadsheet
    //     $spreadsheet = new Spreadsheet();
    //     $sheet = $spreadsheet->getActiveSheet();

    //     // Set header rows with variables
    //     $sheet->setCellValue('A1', 'ALSDC and WRLD CAPITAL HOLDINGS');
    //     $sheet->mergeCells('A1:O1'); // Adjust to fit the header width
    //     $sheet->getStyle('A1')->getFont()->setBold(true)->setSize(14);
    //     $sheet->getStyle('A1')->getAlignment()->setHorizontal('center');

    //     $sheet->setCellValue('A2', 'PAYROLL SUMMARY');
    //     $sheet->mergeCells('A2:O2'); // Adjust to fit the header width
    //     $sheet->getStyle('A2')->getFont()->setBold(true);
    //     $sheet->getStyle('A2')->getAlignment()->setHorizontal('center');

    //     $sheet->setCellValue('A3', 'Payroll Period : ' . $dateFrom . ' - ' . $dateTo);
    //     $sheet->mergeCells('A3:O3');
    //     $sheet->getStyle('A3')->getFont()->setBold(true);
    //     $sheet->getStyle('A3')->getAlignment()->setHorizontal('center');

    //     // Set column headers
    //     $headers = [
    //         'COMPANY', 'GROSS SALARY', 'SSS', 'PHIL HEALTH', 'W / TAX', 'HDMF (P1)', 
    //         'HDMF (MP2)', 'HDMF LOAN', 'HDMF CALAMITY LOAN', 'SSS LOAN', 
    //         'CASH ADVANCE', '13th MONTH PAY', 'NET SALARY', 'TAX SHIELD'
    //     ];

    //     // Set the headers in the spreadsheet
    //     $col = 'A';
    //     foreach ($headers as $header) {
    //         $sheet->setCellValue($col . '5', $header);
    //         $col++;
    //     }

    //     // Make headers bold and apply border
    //     $sheet->getStyle('A5:' . $col . '5')->getFont()->setBold(true);
    //     $sheet->getStyle('A5:' . $col . '5')->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);

    //     // Adjust column widths
    //     foreach (range('A', $col) as $columnID) {
    //         $sheet->getColumnDimension($columnID)->setAutoSize(true);
    //     }

    //     // Populate rows with company data
    //     $startRow = 6;
    //     foreach ($data as $index => $company) {
    //         $sheet->setCellValue('A' . $startRow, $company['company_name']);
    //         $sheet->setCellValue('B' . $startRow, $company['companyGrossSalary']);
    //         $sheet->setCellValue('C' . $startRow, $company['companyTotalSSS']);
    //         $sheet->setCellValue('D' . $startRow, $company['companyTotalPhilHealth']);
    //         $sheet->setCellValue('E' . $startRow, $company['companyTotalTax']);
    //         $sheet->setCellValue('F' . $startRow, $company['companyTotalHDMF']);
    //         $sheet->setCellValue('G' . $startRow, $company['companyTotalMP2']);
    //         $sheet->setCellValue('H' . $startRow, $company['companyTotalHDMFLoan']);
    //         $sheet->setCellValue('I' . $startRow, $company['companyTotalHDMFCalamity']);
    //         $sheet->setCellValue('J' . $startRow, $company['companyTotalSSSLoan']);
    //         $sheet->setCellValue('K' . $startRow, $company['companyTotalCashAdvance']);
    //         $sheet->setCellValue('L' . $startRow, $company['companyTotal13thMonthPay']);
    //         $sheet->setCellValue('M' . $startRow, $company['companyTotalNetSalary']);
    //         $sheet->setCellValue('N' . $startRow, $company['companyTotalTaxShield']);

    //         // Optional: Apply border to each row
    //         $sheet->getStyle('A' . $startRow . ':N' . $startRow)->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);

    //         $startRow++;
    //     }

    //     // Create writer and save to a temporary file
    //     $writer = new Xlsx($spreadsheet);
    //     $temp_file = tempnam(sys_get_temp_dir(), 'phpspreadsheet');
    //     $writer->save($temp_file);

    //     // Read the file contents and prepare the response for download
    //     return new Response(
    //         file_get_contents($temp_file),
    //         200,
    //         [
    //             'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
    //             'Content-Disposition' => 'attachment; filename="Payroll_Summary_Report_' . date('Ymd') . '.xlsx"',
    //             'Content-Length' => filesize($temp_file),
    //         ]
    //     );
    // }

    public function generatePayrollSummaryReport($dateFrom, $dateTo, $data) : Response
    {
        // Initialize Spreadsheet
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Set header rows with variables
        $sheet->setCellValue('A1', 'ALSDC and WRLD CAPITAL HOLDINGS');
        $sheet->mergeCells('A1:O1'); // Adjust to fit the header width
        $sheet->getStyle('A1')->getFont()->setBold(true)->setSize(14);
        $sheet->getStyle('A1')->getAlignment()->setHorizontal('center');

        $sheet->setCellValue('A2', 'PAYROLL SUMMARY');
        $sheet->mergeCells('A2:O2'); // Adjust to fit the header width
        $sheet->getStyle('A2')->getFont()->setBold(true);
        $sheet->getStyle('A2')->getAlignment()->setHorizontal('center');

        $sheet->setCellValue('A3', 'Payroll Period : ' . $dateFrom . ' - ' . $dateTo);
        $sheet->mergeCells('A3:O3');
        $sheet->getStyle('A3')->getFont()->setBold(true);
        $sheet->getStyle('A3')->getAlignment()->setHorizontal('center');

        // Set column headers
        $headers = [
            'COMPANY', 'GROSS SALARY', 'SSS', 'PHIL HEALTH', 'W / TAX', 'HDMF (P1)', 
            'HDMF (MP2)', 'HDMF LOAN', 'HDMF CALAMITY LOAN', 'SSS LOAN', 
            'CASH ADVANCE', '13th MONTH PAY', 'NET SALARY', 'TAX SHIELD'
        ];

        // Set the headers in the spreadsheet
        $col = 'A';
        foreach ($headers as $header) {
            $sheet->setCellValue($col . '5', $header);
            $col++;
        }

        // Make headers bold and apply border
        $sheet->getStyle('A5:' . $col . '5')->getFont()->setBold(true);
        $sheet->getStyle('A5:' . $col . '5')->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);

        // Adjust column widths
        foreach (range('A', $col) as $columnID) {
            $sheet->getColumnDimension($columnID)->setAutoSize(true);
        }

        // Populate rows with company data
        $startRow = 6;
        foreach ($data as $index => $company) {
            $sheet->setCellValue('A' . $startRow, $company['company_name']);
            $sheet->setCellValue('B' . $startRow, $company['companyGrossSalary']);
            $sheet->setCellValue('C' . $startRow, $company['companyTotalSSS']);
            $sheet->setCellValue('D' . $startRow, $company['companyTotalPhilHealth']);
            $sheet->setCellValue('E' . $startRow, $company['companyTotalTax']);
            $sheet->setCellValue('F' . $startRow, $company['companyTotalHDMF']);
            $sheet->setCellValue('G' . $startRow, $company['companyTotalMP2']);
            $sheet->setCellValue('H' . $startRow, $company['companyTotalHDMFLoan']);
            $sheet->setCellValue('I' . $startRow, $company['companyTotalHDMFCalamity']);
            $sheet->setCellValue('J' . $startRow, $company['companyTotalSSSLoan']);
            $sheet->setCellValue('K' . $startRow, $company['companyTotalCashAdvance']);
            $sheet->setCellValue('L' . $startRow, $company['companyTotal13thMonthPay']);
            $sheet->setCellValue('M' . $startRow, $company['companyTotalNetSalary']);
            $sheet->setCellValue('N' . $startRow, $company['companyTotalTaxShield']);

            // Optional: Apply border to each row
            $sheet->getStyle('A' . $startRow . ':N' . $startRow)->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);

            $startRow++;
        }

        // Calculate grand total for Net Salary
        $sheet->setCellValue('L' . $startRow, 'Grand Total');
        $sheet->setCellValue('M' . $startRow, '=SUM(M6:M' . ($startRow - 1) . ')');
        $sheet->getStyle('L' . $startRow . ':M' . $startRow)->getFont()->setBold(true);

        // Create writer and save to a temporary file
        $writer = new Xlsx($spreadsheet);
        $temp_file = tempnam(sys_get_temp_dir(), 'phpspreadsheet');
        $writer->save($temp_file);

        // Read the file contents and prepare the response for download
        return new Response(
            file_get_contents($temp_file),
            200,
            [
                'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                'Content-Disposition' => 'attachment; filename="Payroll_Summary_Report_' . date('Ymd') . '.xlsx"',
                'Content-Length' => filesize($temp_file),
            ]
        );
    }


    
    // public function generateCashAdvanceReport($dateFrom, $dateTo, $project) : Response
    // {
    //     // Initialize Spreadsheet
    //     $spreadsheet = new Spreadsheet();
    //     $sheet = $spreadsheet->getActiveSheet();
    
    //     // Set header rows with variables
    //     $sheet->setCellValue('A1', 'Cash Advance Sheet');
    //     $sheet->mergeCells('A1:H1'); // Adjust to fit the header width
    //     $sheet->getStyle('A1')->getFont()->setBold(true)->setSize(14);
    //     $sheet->getStyle('A1')->getAlignment()->setHorizontal('center');
    
    //     $sheet->setCellValue('A2', 'Cash Advance Period: ' . $dateFrom . ' - ' . $dateTo);
    //     $sheet->mergeCells('A2:H2'); // Adjust to fit the header width
    //     $sheet->getStyle('A2')->getFont()->setBold(true);
    //     $sheet->getStyle('A2')->getAlignment()->setHorizontal('center');
    
    //     // Set column headers
    //     $headers = [
    //         'Date', 'Purpose', 'Amount', 'Previous Balance', 'Total Balance', 
    //         'Payroll Cut Off', 'Remaining Balance'
    //     ];
    
    //     // Set the headers in the spreadsheet
    //     $col = 'A';
    //     foreach ($headers as $header) {
    //         $sheet->setCellValue($col . '5', $header);
    //         $col++;
    //     }
    
    //     // Make headers bold and apply border
    //     $sheet->getStyle('A5:' . $col . '5')->getFont()->setBold(true);
    //     $sheet->getStyle('A5:' . $col . '5')->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);
    
    //     // Adjust column widths
    //     foreach (range('A', $col) as $columnID) {
    //         $sheet->getColumnDimension($columnID)->setAutoSize(true);
    //     }
    
    //     // Create writer and save to a temporary file
    //     $writer = new Xlsx($spreadsheet);
    //     $temp_file = tempnam(sys_get_temp_dir(), 'phpspreadsheet');
    //     $writer->save($temp_file);
    
    //     // Read the file contents and prepare the response for download
    //     return new Response(
    //         file_get_contents($temp_file),
    //         200,
    //         [
    //             'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
    //             'Content-Disposition' => 'attachment; filename="Cash_Advance_Report_' . date('Ymd') . '.xlsx"',
    //             'Content-Length' => filesize($temp_file),
    //         ]
    //     );
    // }

    public function generateCashAdvanceReport($dateFrom, $dateTo, $project): Response
    {
        // Initialize Spreadsheet
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
    
        // Set main header
        $sheet->setCellValue('A1', 'Cash Advance Sheet');
        $sheet->mergeCells('A1:H1'); // Adjust to fit the header width
        $sheet->getStyle('A1')->getFont()->setBold(true)->setSize(14);
        $sheet->getStyle('A1')->getAlignment()->setHorizontal('center');
    
        // Set period range
        $sheet->setCellValue('A2', 'Cash Advance Period: ' . $dateFrom . ' - ' . $dateTo);
        $sheet->mergeCells('A2:H2'); // Adjust to fit the header width
        $sheet->getStyle('A2')->getFont()->setBold(true);
        $sheet->getStyle('A2')->getAlignment()->setHorizontal('center');
    
        $row = 5; // Starting row for headers and data
    
        // Loop through each employee
        foreach ($project as $employee) {
            $cashAdvances = $employee['cash_advances'];
    
            // Create a header for each employee section
            $sheet->setCellValue('A' . $row, 'Employee Name: ' . $employee['fullname']);
            $sheet->mergeCells('A' . $row . ':H' . $row);
            $sheet->getStyle('A' . $row)->getFont()->setBold(true);
            $row++; // Move to next row
    
            // Set static column headers
            $staticHeaders = ['Date', 'Purpose', 'Amount', 'Previous Balance', 'Deduction', 'Remaining Balance'];
            $col = 'A';
            foreach ($staticHeaders as $header) {
                $sheet->setCellValue($col . $row, $header);
                $sheet->getColumnDimension($col)->setAutoSize(true); // Adjust column width to fit the longest header or data
                $col++;
            }
    
            $sheet->getStyle('A' . $row . ':' . $col . $row)->getFont()->setBold(true);
            $sheet->getStyle('A' . $row . ':' . $col . $row)->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);
            $row++; // Move to the next row for data
    
            // Loop through each cash advance for the current employee
            foreach ($cashAdvances as $cashAdvance) {
                foreach ($cashAdvance['history'] as $history) {
                    // Set history data
                    $sheet->setCellValue('A' . $row, date('M. d, Y', strtotime($cashAdvance['date_start'])));
                    $sheet->setCellValue('B' . $row, $history['remarks']);
                    $sheet->setCellValue('C' . $row, number_format($cashAdvance['starting_amount'], 2));
                    $sheet->setCellValue('D' . $row, number_format($history['previous_amount'], 2));
                    $sheet->setCellValue('E' . $row, number_format($history['deduction'], 2));
                    $sheet->setCellValue('F' . $row, number_format($history['current_amount'], 2));
    
                    // Move to the next row after filling data for this history
                    $row++;
                }
            }
    
            // Add a blank row after each employee for better readability
            $row++;
        }
    
        // Create writer and save to a temporary file
        $writer = new Xlsx($spreadsheet);
        $temp_file = tempnam(sys_get_temp_dir(), 'phpspreadsheet');
        $writer->save($temp_file);
    
        // Return the response for download
        return new Response(
            file_get_contents($temp_file),
            200,
            [
                'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                'Content-Disposition' => 'attachment; filename="Cash_Advance_Report_' . date('Ymd') . '.xlsx"',
                'Content-Length' => filesize($temp_file),
            ]
        );
    }
    
    public function generateTaxShieldReport($dateFrom, $dateTo, $data): Response
    {
        // Initialize Spreadsheet
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Set header rows with variables
        $sheet->setCellValue('A1', 'Tax Shield Sheet');
        $sheet->mergeCells('A1:E1'); // Adjust to fit the header width
        $sheet->getStyle('A1')->getFont()->setBold(true)->setSize(14);
        $sheet->getStyle('A1')->getAlignment()->setHorizontal('center');

        $sheet->setCellValue('A2', 'Tax Shield Period: ' . $dateFrom . ' - ' . $dateTo);
        $sheet->mergeCells('A2:E2'); // Adjust to fit the header width
        $sheet->getStyle('A2')->getFont()->setBold(true);
        $sheet->getStyle('A2')->getAlignment()->setHorizontal('center');

        // Set column headers
        // Convert the strings into DateTime objects
        $dateFromObj = new DateTime($dateFrom);
        $dateToObj = new DateTime($dateTo);
        $formattedDateRange = $dateFromObj->format('F j') . ' - ' . $dateToObj->format('j, Y');
        $payroll_period = 'Payroll Period : '.$formattedDateRange;
        $headers = [
            '#', 'Name of Employee', 'Monthly Tax Shield', 'Daily Tax Shield', $payroll_period, 'Remarks'
        ];

        // Set the headers in the spreadsheet
        $col = 'A';
        foreach ($headers as $header) {
            $sheet->setCellValue($col . '5', $header);
            $col++;
        }

        // Make headers bold and apply border
        $sheet->getStyle('A5:E5')->getFont()->setBold(true);
        $sheet->getStyle('A5:E5')->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);

        // Adjust column widths
        foreach (range('A', 'E') as $columnID) {
            $sheet->getColumnDimension($columnID)->setAutoSize(true);
        }

        // Start row for employee data
        $row = 6;

        // Loop through the data and populate the rows
        $count = 0;
        foreach ($data as $employee) {
            $count++;
            $payrollDetails = $employee['payroll_details'];

            $sheet->setCellValue('A' . $row, $count);
            $sheet->setCellValue('B' . $row, $employee['fullname']);
            $sheet->setCellValue('C' . $row, $employee['tax_shield']['monthly_tax_shield']);
            $sheet->setCellValue('D' . $row, $employee['tax_shield']['daily_tax_shield']);
            $sheet->setCellValue('E' . $row, $payrollDetails['total_tax_shield']);
            $sheet->setCellValue('F' . $row, $employee['tax_shield']['remarks']);

            // Move to the next row
            $row++;
        }

        // Create writer and save to a temporary file
        $writer = new Xlsx($spreadsheet);
        $temp_file = tempnam(sys_get_temp_dir(), 'phpspreadsheet');
        $writer->save($temp_file);

        // Read the file contents and prepare the response for download
        return new Response(
            file_get_contents($temp_file),
            200,
            [
                'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                'Content-Disposition' => 'attachment; filename="Tax_Shield_Report_' . date('Ymd') . '.xlsx"',
                'Content-Length' => filesize($temp_file),
            ]
        );
    }

    // public function generateContributionReport($dateFrom, $dateTo, $data): Response
    // {
    //     // Initialize Spreadsheet
    //     $spreadsheet = new Spreadsheet();
    //     $sheet = $spreadsheet->getActiveSheet();
    
    //     // Set header rows with title and period
    //     $sheet->setCellValue('A1', 'Contribution Report');
    //     $sheet->mergeCells('A1:O1');
    //     $sheet->getStyle('A1')->getFont()->setBold(true)->setSize(14);
    //     $sheet->getStyle('A1')->getAlignment()->setHorizontal('center');
    
    //     $sheet->setCellValue('A2', 'Period: ' . $dateFrom . ' - ' . $dateTo);
    //     $sheet->mergeCells('A2:O2');
    //     $sheet->getStyle('A2')->getFont()->setBold(true);
    //     $sheet->getStyle('A2')->getAlignment()->setHorizontal('center');
    
    //     // Define the new headers based on your specification
    //     $headers = [
    //         "EMPLOYEE'S SHARE", "EMPLOYER'S SHARE/EC", "TOTAL EE / ER", "ER SSS TOTAL",
    //         "EMPLOYEE'S PhilHEALTH SHARE", "EMPLOYER'S PhilHEALTH SHARE", "PhilHEALTH TOTAL",
    //         "EMPLOYEE'S HDMF (MP1) SHARE", "EMPLOYER'S HDMF (MP1) SHARE", "HDMF (MP1) TOTAL",
    //         "HDMF (MP2) TOTAL", "SSS LOAN", "SSS CALAMITY LOAN",
    //         "HDMF SHORT TERM LOAN", "HDMF CALAMITY LOAN", "WITHHOLDING TAX", "RCBC SALARY LOAN"
    //     ];
    
    //     // Set the headers in the spreadsheet
    //     $col = 'A';
    //     foreach ($headers as $header) {
    //         $sheet->setCellValue($col . '5', $header);
    //         $col++;
    //     }
    
    //     // Make headers bold and apply border
    //     $sheet->getStyle('A5:' . $col . '5')->getFont()->setBold(true);
    //     $sheet->getStyle('A5:' . $col . '5')->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);
    
    //     // Adjust column widths
    //     foreach (range('A', $col) as $columnID) {
    //         $sheet->getColumnDimension($columnID)->setAutoSize(true);
    //     }
    
    //     // Initialize totals
    //     $totals = array_fill_keys(array_map('strtolower', $headers), 0);
    
    //     // Populate data per row starting from row 6 (the next row after headers)
    //     $row = 6;
    //     // Assuming $data is structured to match these columns. Replace placeholder values with actual data
    //     $sheet->setCellValue('A' . $row, $employeeData['employee_share'] ?? 0);
    //     $sheet->setCellValue('B' . $row, $employeeData['employer_share'] ?? 0);
    //     $sheet->setCellValue('C' . $row, ($employeeData['employee_share'] ?? 0) + ($employeeData['employer_share'] ?? 0)); // TOTAL EE / ER
    //     $sheet->setCellValue('D' . $row, $employeeData['er_sss_total'] ?? 0);
    //     $sheet->setCellValue('E' . $row, $employeeData['employee_philhealth_share'] ?? 0);
    //     $sheet->setCellValue('F' . $row, $employeeData['employer_philhealth_share'] ?? 0);
    //     $sheet->setCellValue('G' . $row, ($employeeData['employee_philhealth_share'] ?? 0) + ($employeeData['employer_philhealth_share'] ?? 0)); // PhilHEALTH TOTAL
    //     $sheet->setCellValue('H' . $row, $employeeData['employee_hdmf_mp1_share'] ?? 0);
    //     $sheet->setCellValue('I' . $row, $employeeData['employer_hdmf_mp1_share'] ?? 0);
    //     $sheet->setCellValue('J' . $row, ($employeeData['employee_hdmf_mp1_share'] ?? 0) + ($employeeData['employer_hdmf_mp1_share'] ?? 0)); // HDMF (MP1) TOTAL
    //     $sheet->setCellValue('K' . $row, $employeeData['hdmf_mp2_total'] ?? 0);
    //     $sheet->setCellValue('L' . $row, $employeeData['sss_loan'] ?? 0);
    //     $sheet->setCellValue('M' . $row, $employeeData['sss_calamity_loan'] ?? 0);
    //     $sheet->setCellValue('N' . $row, $employeeData['hdmf_short_term_loan'] ?? 0);
    //     $sheet->setCellValue('O' . $row, $employeeData['hdmf_calamity_loan'] ?? 0);
    //     $sheet->setCellValue('P' . $row, $employeeData['withholding_tax'] ?? 0);
    //     $sheet->setCellValue('Q' . $row, $employeeData['rcbc_salary_loan'] ?? 0);

    //     // Accumulate totals for each column
    //     $totals['employee\'s share'] += $employeeData['employee_share'] ?? 0;
    //     $totals['employer\'s share/ec'] += $employeeData['employer_share'] ?? 0;
    
    //     // Insert Grand Total Row
    //     $row++;
    //     $sheet->setCellValue('A' . $row, 'Grand Total');
    //     $sheet->getStyle('A' . $row)->getFont()->setBold(true);
    
    //     // Set the totals in each corresponding column
    //     $sheet->setCellValue('A' . $row, $totals['employee\'s share']);
    //     $sheet->setCellValue('B' . $row, $totals['employer\'s share/ec']);
    //     $sheet->setCellValue('C' . $row, $totals['employee\'s share'] + $totals['employer\'s share/ec']); // TOTAL EE / ER
    //     $sheet->setCellValue('D' . $row, $totals['er sss total']);
    //     // ... set totals for all other columns accordingly ...
    
    //     // Prepare response to download the file
    //     $writer = new Xlsx($spreadsheet);
    //     $temp_file = tempnam(sys_get_temp_dir(), 'phpspreadsheet');
    //     $writer->save($temp_file);
    
    //     return new Response(
    //         file_get_contents($temp_file),
    //         200,
    //         [
    //             'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
    //             'Content-Disposition' => 'attachment; filename="Contribution_Report_' . date('Ymd') . '.xlsx"',
    //             'Content-Length' => filesize($temp_file),
    //         ]
    //     );
    // }

    public function generateContributionReport($dateFrom, $dateTo, $data): Response
    {
        // Initialize Spreadsheet
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $company_name = $data['company_name'] ?? "";
        // Set header rows with title and period
        $sheet->setCellValue('A1', strtoupper($company_name));
        
        $sheet->mergeCells('A1:Q1');
        $sheet->getStyle('A1')->getFont()->setBold(true)->setSize(14);
        $sheet->getStyle('A1')->getAlignment()->setHorizontal('center');

        $sheet->setCellValue('A2', 'Contribution Report for SSS, HMDF(Pag-Ibig) and PhilHealth');
        $sheet->mergeCells('A2:Q2');
        $sheet->getStyle('A2')->getFont()->setBold(true);
        $sheet->getStyle('A2')->getAlignment()->setHorizontal('center');

        $sheet->setCellValue('A3', 'Period: ' . $dateFrom . ' - ' . $dateTo);
        $sheet->mergeCells('A3:Q3');
        $sheet->getStyle('A3')->getFont()->setBold(true);
        $sheet->getStyle('A3')->getAlignment()->setHorizontal('center');
    
        // Define headers as specified
        $headers = [
            "EMPLOYEE'S SHARE", "EMPLOYER'S SHARE/EC", "TOTAL EE / ER", "SSS TOTAL",
            "EMPLOYEE'S PhilHealth SHARE", "EMPLOYER'S PhilHealth SHARE", "PhilHealth TOTAL",
            "EMPLOYEE'S HDMF (MP1) SHARE", "EMPLOYER'S HDMF (MP1) SHARE", "HDMF (MP1) TOTAL",
            "HDMF (MP2) TOTAL", "SSS LOAN", "SSS CALAMITY LOAN",
            "HDMF SHORT TERM LOAN", "HDMF CALAMITY LOAN", "WITHHOLDING TAX"
        ];
    
        // Set headers in the spreadsheet
        $col = 'A';
        foreach ($headers as $header) {
            $sheet->setCellValue($col . '5', $header);
            $col++;
        }
    
        // Make headers bold and apply border
        $sheet->getStyle('A5:Q5')->getFont()->setBold(true);
        $sheet->getStyle('A5:Q5')->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);
    
        // Adjust column widths
        foreach (range('A', 'Q') as $columnID) {
            $sheet->getColumnDimension($columnID)->setAutoSize(true);
        }
    
        // Populate the single row of data
        $row = 6;
        $sheet->setCellValue('A' . $row, $data['sss_share'] ?? 0);
        $sheet->setCellValue('B' . $row, $data['sss_employer_share'] ?? 0);
        $sheet->setCellValue('C' . $row, $data['sss_total'] ?? 0);
        $sheet->setCellValue('D' . $row, $data['sss_total'] ?? 0);
        $sheet->setCellValue('E' . $row, $data['philhealth_share'] ?? 0);
        $sheet->setCellValue('F' . $row, $data['philhealth_employer_share'] ?? 0);
        $sheet->setCellValue('G' . $row, $data['philhealth_total_share'] ?? 0);
        $sheet->setCellValue('H' . $row, $data['hdmf_contribution'] ?? 0);
        $sheet->setCellValue('I' . $row, $data['hdmf_employer_contribution'] ?? 0);
        $sheet->setCellValue('J' . $row, $data['hdmf_total_contribution'] ?? 0);
        $sheet->setCellValue('K' . $row, $data['hdmf_mp2'] ?? 0);
        $sheet->setCellValue('L' . $row, $data['sss_loan'] ?? 0);
        $sheet->setCellValue('M' . $row, $data['sss_calamity_loan'] ?? 0);
        $sheet->setCellValue('N' . $row, $data['hdmf_loan'] ?? 0);
        $sheet->setCellValue('O' . $row, $data['hdmf_calamity_loan'] ?? 0);
        $sheet->setCellValue('P' . $row, $data['tax_contribution'] ?? 0);
        //$sheet->setCellValue('Q' . $row, $data['cash_advance_total'] ?? 0);
    
        // Prepare response to download the file
        $writer = new Xlsx($spreadsheet);
        $temp_file = tempnam(sys_get_temp_dir(), 'phpspreadsheet');
        $writer->save($temp_file);
    
        return new Response(
            file_get_contents($temp_file),
            200,
            [
                'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                'Content-Disposition' => 'attachment; filename="'.$company_name.' Mandatories'. date('Ymd') . '.xlsx"',
                'Content-Length' => filesize($temp_file),
            ]
        );
    }
    


    // public function generateTotalContributionReport($dateFrom, $dateTo, $data): Response
    // {
    //     // Initialize Spreadsheet
    //     $spreadsheet = new Spreadsheet();
    //     $sheet = $spreadsheet->getActiveSheet();
    
    //     // Set header rows with title and period
    //     $sheet->setCellValue('A1', 'Contribution Report');
    //     $sheet->mergeCells('A1:O1');
    //     $sheet->getStyle('A1')->getFont()->setBold(true)->setSize(14);
    //     $sheet->getStyle('A1')->getAlignment()->setHorizontal('center');
    
    //     $sheet->setCellValue('A2', 'Period: ' . $dateFrom . ' - ' . $dateTo);
    //     $sheet->mergeCells('A2:O2');
    //     $sheet->getStyle('A2')->getFont()->setBold(true);
    //     $sheet->getStyle('A2')->getAlignment()->setHorizontal('center');
    
    //     // Define the new headers based on your specification
    //     $headers = [
    //         "NAME OF EMPLOYEE", "SSS NO.", "GROSS PAY", "EMPLOYEE'S SHARE", "EMPLOYER'S SHARE/EC", "TOTAL EE / ER", "ER EC", "SSS TOTAL",
    //         "PhilHealth NO.", "EMPLOYEE'S SHARE", "EMPLOYER'S SHARE", "PhilHealth TOTAL", " ",
    //         "PagIbig No.", "EMPLOYEE'S SHARE", "EMPLOYER'S SHARE", "HDMF (MP1) TOTAL", " ",
    //         "HDMF (MP2) TOTAL", "SSS LOAN", "SSS CALAMITY LOAN",
    //         "HDMF SHORT TERM LOAN", "HDMF CALAMITY LOAN", "WITHHOLDING TAX", "RCBC SALARY LOAN"
    //     ];
    
    //     // Set the headers in the spreadsheet
    //     $col = 'A';
    //     foreach ($headers as $header) {
    //         $sheet->setCellValue($col . '5', $header);
    //         $col++;
    //     }
    
    //     // Make headers bold and apply border
    //     $sheet->getStyle('A5:' . $col . '5')->getFont()->setBold(true);
    //     $sheet->getStyle('A5:' . $col . '5')->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);
    
    //     // Adjust column widths
    //     foreach (range('A', $col) as $columnID) {
    //         $sheet->getColumnDimension($columnID)->setAutoSize(true);
    //     }
    
    //     // Initialize totals
    //     $totals = array_fill_keys(array_map('strtolower', $headers), 0);
    
    //     // Populate data per row starting from row 6 (the next row after headers)
    //     $row = 6;
    //     foreach ($data as $employeeData) {
    //         // Assuming $data is structured to match these columns. Replace placeholder values with actual data
    //         // Set data for each header column based on the mapped fields
    //         $sheet->setCellValue('A' . $row, $employeeData['employee_name'] ?? '');            // NAME OF EMPLOYEE
    //         $sheet->setCellValue('B' . $row, $employeeData['sss_number'] ?? '');               // SSS NO.
    //         $sheet->setCellValue('C' . $row, $employeeData['gross_pay'] ?? 0);                 // GROSS PAY
    //         $sheet->setCellValue('D' . $row, $employeeData['employee_share'] ?? 0);            // EMPLOYEE'S SHARE
    //         $sheet->setCellValue('E' . $row, $employeeData['employer_share'] ?? 0);            // EMPLOYER'S SHARE/EC
    //         $sheet->setCellValue('F' . $row, ($employeeData['employee_share'] ?? 0) + ($employeeData['employer_share'] ?? 0)); // TOTAL EE / ER
    //         $sheet->setCellValue('G' . $row, $employeeData['er_ec'] ?? 0);                     // ER EC
    //         $sheet->setCellValue('H' . $row, $employeeData['er_sss_total'] ?? 0);              // SSS TOTAL

    //         $sheet->setCellValue('I' . $row, $employeeData['philhealth_number'] ?? '');        // PhilHealth NO.
    //         $sheet->setCellValue('J' . $row, $employeeData['employee_philhealth_share'] ?? 0); // PhilHealth EMPLOYEE'S SHARE
    //         $sheet->setCellValue('K' . $row, $employeeData['employer_philhealth_share'] ?? 0); // PhilHealth EMPLOYER'S SHARE
    //         $sheet->setCellValue('L' . $row, ($employeeData['employee_philhealth_share'] ?? 0) + ($employeeData['employer_philhealth_share'] ?? 0)); // PhilHealth TOTAL

    //         $sheet->setCellValue('M' . $row, ''); // Empty column

    //         $sheet->setCellValue('N' . $row, $employeeData['pagibig_number'] ?? '');           // PagIbig No.
    //         $sheet->setCellValue('O' . $row, $employeeData['employee_hdmf_mp1_share'] ?? 0);   // HDMF (MP1) EMPLOYEE'S SHARE
    //         $sheet->setCellValue('P' . $row, $employeeData['employer_hdmf_mp1_share'] ?? 0);   // HDMF (MP1) EMPLOYER'S SHARE
    //         $sheet->setCellValue('Q' . $row, ($employeeData['employee_hdmf_mp1_share'] ?? 0) + ($employeeData['employer_hdmf_mp1_share'] ?? 0)); // HDMF (MP1) TOTAL

    //         $sheet->setCellValue('R' . $row, ''); // Empty column

    //         $sheet->setCellValue('S' . $row, $employeeData['hdmf_mp2_total'] ?? 0);            // HDMF (MP2) TOTAL
    //         $sheet->setCellValue('T' . $row, $employeeData['sss_loan'] ?? 0);                  // SSS LOAN
    //         $sheet->setCellValue('U' . $row, $employeeData['sss_calamity_loan'] ?? 0);         // SSS CALAMITY LOAN
    //         $sheet->setCellValue('V' . $row, $employeeData['hdmf_short_term_loan'] ?? 0);      // HDMF SHORT TERM LOAN
    //         $sheet->setCellValue('W' . $row, $employeeData['hdmf_calamity_loan'] ?? 0);        // HDMF CALAMITY LOAN
    //         $sheet->setCellValue('X' . $row, $employeeData['withholding_tax'] ?? 0);           // WITHHOLDING TAX
    //         $sheet->setCellValue('Y' . $row, $employeeData['rcbc_salary_loan'] ?? 0);          // RCBC SALARY LOAN

    //         // Accumulate totals for each column, adjust based on header names if needed
    //         $totals['EMPLOYEE\'S SHARE'] += $employeeData['employee_share'] ?? 0;
    //         $totals['EMPLOYER\'S SHARE/EC'] += $employeeData['employer_share'] ?? 0;
    //         $totals['PhilHealth EMPLOYEE\'S SHARE'] += $employeeData['employee_philhealth_share'] ?? 0;
    //         $totals['PhilHealth EMPLOYER\'S SHARE'] += $employeeData['employer_philhealth_share'] ?? 0;
    //         $totals['HDMF (MP1) EMPLOYEE\'S SHARE'] += $employeeData['employee_hdmf_mp1_share'] ?? 0;
    //         $totals['HDMF (MP1) EMPLOYER\'S SHARE'] += $employeeData['employer_hdmf_mp1_share'] ?? 0;
    //         // Add further totals accumulation as required...

    //         $row++;
    //     }
    
    //     // Insert Grand Total Row
    //     $row++;
    //     $sheet->setCellValue('A' . $row, 'Grand Total');
    //     $sheet->getStyle('A' . $row)->getFont()->setBold(true);
    
    //     // Set the totals in each corresponding column
    //     $sheet->setCellValue('A' . $row, $totals['employee\'s share']);
    //     $sheet->setCellValue('B' . $row, $totals['employer\'s share/ec']);
    //     $sheet->setCellValue('C' . $row, $totals['employee\'s share'] + $totals['employer\'s share/ec']); // TOTAL EE / ER
    //     $sheet->setCellValue('D' . $row, $totals['er sss total']);
    //     // ... set totals for all other columns accordingly ...
    
    //     // Prepare response to download the file
    //     $writer = new Xlsx($spreadsheet);
    //     $temp_file = tempnam(sys_get_temp_dir(), 'phpspreadsheet');
    //     $writer->save($temp_file);
    
    //     return new Response(
    //         file_get_contents($temp_file),
    //         200,
    //         [
    //             'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
    //             'Content-Disposition' => 'attachment; filename="Contribution_Report_' . date('Ymd') . '.xlsx"',
    //             'Content-Length' => filesize($temp_file),
    //         ]
    //     );
    // }

    public function generateTotalContributionReport($dateFrom, $dateTo, $data): Response
    {
        // Initialize Spreadsheet
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Set header rows with title and period
        $sheet->setCellValue('A1', 'Contribution Report');
        $sheet->mergeCells('A1:Y1');
        $sheet->getStyle('A1')->getFont()->setBold(true)->setSize(14);
        $sheet->getStyle('A1')->getAlignment()->setHorizontal('center');

        $sheet->setCellValue('A2', 'Period: ' . $dateFrom . ' - ' . $dateTo);
        $sheet->mergeCells('A2:Y2');
        $sheet->getStyle('A2')->getFont()->setBold(true);
        $sheet->getStyle('A2')->getAlignment()->setHorizontal('center');

        // Define headers
        $headers = [
            "NAME OF EMPLOYEE", "SSS NO.", "GROSS PAY", "EMPLOYEE'S SHARE", "EMPLOYER'S SHARE/EC", "TOTAL EE / ER", "SSS TOTAL",
            "PhilHealth NO.", "EMPLOYEE'S SHARE", "EMPLOYER'S SHARE", "PhilHealth TOTAL", " ",
            "PagIbig No.", "EMPLOYEE'S SHARE", "EMPLOYER'S SHARE", "HDMF (MP1) TOTAL", " ",
            "HDMF (MP2) TOTAL", "SSS LOAN", "SSS CALAMITY LOAN",
            "HDMF SHORT TERM LOAN", "HDMF CALAMITY LOAN", "WITHHOLDING TAX",
        ];

        // Set headers in the spreadsheet
        $col = 'A';
        foreach ($headers as $header) {
            $sheet->setCellValue($col . '5', $header);
            $col++;
        }

        // Make headers bold and apply border
        $sheet->getStyle('A5:Y5')->getFont()->setBold(true);
        $sheet->getStyle('A5:Y5')->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);

        // Adjust column widths
        foreach (range('A', 'Y') as $columnID) {
            $sheet->getColumnDimension($columnID)->setAutoSize(true);
        }

        // Populate data per row starting from row 6
        $row = 6;
        foreach ($data as $employeeData) {
            $payroll = $employeeData['payroll_details'];
            
            $sheet->setCellValue('A' . $row, $employeeData['fullname'] ?? '');                  // NAME OF EMPLOYEE
            $sheet->setCellValue('B' . $row, $employeeData['sss_no'] ?? '');                     // SSS NO.
            $sheet->setCellValue('C' . $row, $payroll['total_salary'] ?? 0);                     // GROSS PAY
            $sheet->setCellValue('D' . $row, $payroll['sss_share'] ?? 0);                        // EMPLOYEE'S SHARE
            $sheet->setCellValue('E' . $row, $payroll['sss_employer_share'] ?? 0);               // EMPLOYER'S SHARE/EC
            $sheet->setCellValue('F' . $row, ($payroll['sss_share'] ?? 0) + ($payroll['sss_employer_share'] ?? 0)); // TOTAL EE / ER
            $sheet->setCellValue('G' . $row, $payroll['sss_total'] ?? 0);                        // SSS TOTAL

            $sheet->setCellValue('H' . $row, $employeeData['philhealth_no'] ?? '');              // PhilHealth NO.
            $sheet->setCellValue('I' . $row, $payroll['philhealth_share'] ?? 0);                 // PhilHealth EMPLOYEE'S SHARE
            $sheet->setCellValue('J' . $row, $payroll['philhealth_employer_share'] ?? 0);        // PhilHealth EMPLOYER'S SHARE
            $sheet->setCellValue('K' . $row, ($payroll['philhealth_share'] ?? 0) + ($payroll['philhealth_employer_share'] ?? 0)); // PhilHealth TOTAL

            $sheet->setCellValue('L' . $row, '');                                                // Empty column

            $sheet->setCellValue('M' . $row, $employeeData['pagibig_no'] ?? '');                 // PagIbig No.
            $sheet->setCellValue('N' . $row, $payroll['hdmf_contribution'] ?? 0);                // HDMF (MP1) EMPLOYEE'S SHARE
            $sheet->setCellValue('O' . $row, $payroll['hdmf_employer_contribution'] ?? 0);       // HDMF (MP1) EMPLOYER'S SHARE
            $sheet->setCellValue('P' . $row, ($payroll['hdmf_contribution'] ?? 0) + ($payroll['hdmf_employer_contribution'] ?? 0)); // HDMF (MP1) TOTAL

            $sheet->setCellValue('Q' . $row, '');                                                // Empty column

            $sheet->setCellValue('R' . $row, $payroll['hdmf_mp2'] ?? 0);                         // HDMF (MP2) TOTAL
            $sheet->setCellValue('S' . $row, $payroll['sss_loan'] ?? 0);                         // SSS LOAN
            $sheet->setCellValue('T' . $row, $payroll['sss_calamity_loan'] ?? 0);                // SSS CALAMITY LOAN
            $sheet->setCellValue('U' . $row, $payroll['hdmf_loan'] ?? 0);                        // HDMF SHORT TERM LOAN
            $sheet->setCellValue('V' . $row, $payroll['hdmf_calamity_loan'] ?? 0);               // HDMF CALAMITY LOAN
            $sheet->setCellValue('W' . $row, $payroll['tax_contribution'] ?? 0);                 // WITHHOLDING TAX
            // $sheet->setCellValue('X' . $row, $payroll['cash_advance_total'] ?? 0);               // RCBC SALARY LOAN

            $row++;
        }

        // Prepare response to download the file
        $writer = new Xlsx($spreadsheet);
        $temp_file = tempnam(sys_get_temp_dir(), 'phpspreadsheet');
        $writer->save($temp_file);

        return new Response(
            file_get_contents($temp_file),
            200,
            [
                'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                'Content-Disposition' => 'attachment; filename="Contribution_Report_' . date('Ymd') . '.xlsx"',
                'Content-Length' => filesize($temp_file),
            ]
        );
    }

    
    
}
