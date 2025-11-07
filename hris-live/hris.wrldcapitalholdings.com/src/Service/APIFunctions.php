<?php

namespace App\Service;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpClient\HttpClient;
use InvalidArgumentException;
use App\Service\APIRequest;

class APIFunctions
{
    public $apiService;

    public function __construct(APIRequest $apiService)
    {
        $this->apiService = $apiService;
    }

    public function getDivisionList($request){
        $jsonBody = [];
        $token = $request->getSession()->get('token');
        $response = $this->apiService->apiRequest('GET', 'api/division/list', $jsonBody, $token);
        return $response;
    }

    public function getAffiliatedCompany($request){
        $jsonBody = [];
        $token = $request->getSession()->get('token');
        $response = $this->apiService->apiRequest('GET', 'api/affiliated-companies/list', $jsonBody, $token);
        return $response;
    }

    public function getDivision($request){
        $jsonBody = [];
        $token = $request->getSession()->get('token');
        $response = $this->apiService->apiRequest('GET', 'api/division', $jsonBody, $token);
        return $response;
    }

    public function getDepartment($request){
        $jsonBody = [];
        $token = $request->getSession()->get('token');
        $response = $this->apiService->apiRequest('GET', 'api/department', $jsonBody, $token);
        return $response;
    }

    public function getOwner($request){
        $jsonBody = [];
        $token = $request->getSession()->get('token');
        $response = $this->apiService->apiRequest('GET', 'api/owner', $jsonBody, $token);
        return $response;
    }

    public function getModel($request){
        $jsonBody = [];
        $token = $request->getSession()->get('token');
        $response = $this->apiService->apiRequest('GET', 'api/model', $jsonBody, $token);
        return $response;
    }

    public function getModelTypes($request){
        $jsonBody = [];
        $token = $request->getSession()->get('token');
        $response = $this->apiService->apiRequest('GET', 'api/model-types', $jsonBody, $token);
        return $response;
    }

    public function getEmployees($request){
        $jsonBody = [];
        $token = $request->getSession()->get('token');
        $response = $this->apiService->apiRequest('GET', 'api/employee201', $jsonBody, $token);
        return $response;
    }
    public function getEmployeesPaginated($request, $page, $limit){
        $jsonBody = [
            'page' => $page,
            'limit' => $limit,
        ];
        $token = $request->getSession()->get('token');
        $response = $this->apiService->apiRequest('POST', 'api/emp_paginated', json_encode($jsonBody), $token);
        return $response;
    }

    public function getWorker($request){
        $jsonBody = [];
        $token = $request->getSession()->get('token');
        $response = $this->apiService->apiRequest('GET', 'api/worker', $jsonBody, $token);
        return $response;
    }

    public function getSubdivision($request){
        $jsonBody = [];
        $token = $request->getSession()->get('token');
        $response = $this->apiService->apiRequest('GET', 'api/subdivision', $jsonBody, $token);
        return $response;
    }

    public function getPhase($request){
        $jsonBody = [];
        $token = $request->getSession()->get('token');
        $response = $this->apiService->apiRequest('GET', 'api/phase', $jsonBody, $token);
        return $response;
    }

    public function getProject($request){
        $jsonBody = [];
        $token = $request->getSession()->get('token');
        $response = $this->apiService->apiRequest('GET', 'api/project', $jsonBody, $token);
        return $response;
    }

    public function getProjectUsingEmpRecord($request,$id){
        $jsonBody = [];
        $token = $request->getSession()->get('token');
        $response = $this->apiService->apiRequest('GET', 'api/project-emp/'.$id, $jsonBody, $token);
        return $response;
    }

    public function getEmpProjects($request){
        $jsonBody = [];
        $token = $request->getSession()->get('token');
        $response = $this->apiService->apiRequest('GET', 'api/employee-projects', $jsonBody, $token);
        return $response;
    }

    public function getEmpProjectsId($request, $id){
        $jsonBody = [];
        $token = $request->getSession()->get('token');
        $response = $this->apiService->apiRequest('GET', 'api/employee-projects/'.$id, $jsonBody, $token);
        return $response;
    }

    public function getUserTypes($request){
        $jsonBody = [];
        $token = $request->getSession()->get('token');
        $response = $this->apiService->apiRequest('GET', 'api/user-types', $jsonBody, $token);
        return $response;
    }

    public function getShifts($request){
        $jsonBody = [];
        $token = $request->getSession()->get('token');
        $response = $this->apiService->apiRequest('GET', 'api/shifts', $jsonBody, $token);
        return $response;
    }
    
    public function getAttendanceType($request){
        $jsonBody = [];
        $token = $request->getSession()->get('token');
        $response = $this->apiService->apiRequest('GET', 'api/attendance-types', $jsonBody, $token);
        return $response;
    }
    //eto yung employees na niremove na yung employees with same projects sa employee project table
    public function getFilteredEmployees($request, $id){
        $jsonBody = [];
        $token = $request->getSession()->get('token');
        $response = $this->apiService->apiRequest('GET', 'api/employee201/emp_proj/'.$id, $jsonBody, $token);
        return $response;
    }

    public function getCategory($request){
        $jsonBody = [];
        $token = $request->getSession()->get('token');
        $response = $this->apiService->apiRequest('GET', 'api/category', $jsonBody, $token);
        return $response;
    }

    public function getConnection($request){
        $jsonBody = [];
        $token = $request->getSession()->get('token');
        $response = $this->apiService->apiRequest('GET', 'api/super_admin/connections', $jsonBody, $token);
        return $response;
    }

    public function getUserTypesAndPermission($request){
        $jsonBody = [];
        $token = $request->getSession()->get('token');
        $response = $this->apiService->apiRequest('GET', 'api/user-types-permission', $jsonBody, $token);
        return $response;
    }

    // BIR Config API Calls
    public function getBIRConfig($request){
        $jsonBody = [];
        $token = $request->getSession()->get('token');
        $response = $this->apiService->apiRequest('GET', 'api/taxconfig/list', $jsonBody, $token);
        return $response;
    }

    // SSS Config API Calls
    public function getSSSConfig($request){
        $jsonBody = [];
        $token = $request->getSession()->get('token');
        $response = $this->apiService->apiRequest('GET', 'api/sssconfig/list', $jsonBody, $token);
        return $response;
    }

    // Pagibig Config API Calls
    public function getPagibigConfig($request){
        $jsonBody = [];
        $token = $request->getSession()->get('token');
        $response = $this->apiService->apiRequest('GET', 'api/pagibigconfig/list', $jsonBody, $token);
        return $response;
    }

    // Philhealth Config API Calls
    public function getPhilhealthConfig($request){
        $jsonBody = [];
        $token = $request->getSession()->get('token');
        $response = $this->apiService->apiRequest('GET', 'api/philhealthconfig/list', $jsonBody, $token);
        return $response;
    }

    // Employee Payroll Profile Config API Calls
    public function getEmployeePayrollProfiles($request, $id){
        $jsonBody = [];
        $token = $request->getSession()->get('token');
        $response = $this->apiService->apiRequest('GET', 'api/employee-payroll-profile/find/'.$id, $jsonBody, $token);
        return $response;
    }

    // Employee with Payroll Profile Config API Calls
    public function getEmployeeListPayrollProfiles($request){
        $jsonBody = [];
        $token = $request->getSession()->get('token');
        $response = $this->apiService->apiRequest('GET', 'api/employees-payroll', $jsonBody, $token);
        return $response;
    }

    // Employee with Payroll Profile Config API Calls
    public function getCompanyList($request){
        $jsonBody = [];
        $token = $request->getSession()->get('token');
        $response = $this->apiService->apiRequest('GET', 'api/affiliated-companies/list', $jsonBody, $token);
        return $response;
    }

    // Employee with Payroll Profile Config API Calls
    public function getPayrollGroups($request, $currentYear){
        $jsonBody = [];
        $token = $request->getSession()->get('token');
        $response = $this->apiService->apiRequest('GET', 'api/payroll-groups/list/'.$currentYear, $jsonBody, $token);
        return $response;
    }

    // Leave Policies
    public function getLeavePolicy($request){
        $jsonBody = [];
        $token = $request->getSession()->get('token');
        $response = $this->apiService->apiRequest('GET', 'api/leave-policy/list', $jsonBody, $token);
        return $response;
    }

    // Leave Policies
    public function getEmployeeLeaves($request){
        $jsonBody = [];
        $token = $request->getSession()->get('token');
        $response = $this->apiService->apiRequest('GET', 'api/employee-leaves/list', $jsonBody, $token);
        return $response;
    }

    // Holiday Config
    public function getHolidayConfig($request){
        $jsonBody = [];
        $token = $request->getSession()->get('token');
        $response = $this->apiService->apiRequest('GET', 'api/holiday/config/list', $jsonBody, $token);
        return $response;
    }

    // Yearly Config
    public function getYearlyHoliday($request){
        $jsonBody = [];
        $token = $request->getSession()->get('token');
        $response = $this->apiService->apiRequest('GET', 'api/yearly-holiday/list', $jsonBody, $token);
        return $response;
    }

    // Leave Request
    public function getAllLeaveRequest($request){
        $jsonBody = [];
        $token = $request->getSession()->get('token');
        $response = $this->apiService->apiRequest('GET', 'api/leave/request/list', $jsonBody, $token);
        return $response;
    }

    // Approved Leave Request
    public function getAllApprovedLeaveRequest($request){
        $jsonBody = [];
        $token = $request->getSession()->get('token');
        $response = $this->apiService->apiRequest('GET', 'api/leave/request/list-approved', $jsonBody, $token);
        return $response;
    }

    public function getEmpLeaveRequest($request, $id){
        $jsonBody = [];
        $token = $request->getSession()->get('token');
        $response = $this->apiService->apiRequest('GET', 'api/leave/request/find/'.$id, $jsonBody, $token);
        return $response;
    }

    public function getEmpLeaveEntitlements($request, $id){
        $jsonBody = [];
        $token = $request->getSession()->get('token');
        $response = $this->apiService->apiRequest('GET', 'api/employee-leaves/find/'.$id, $jsonBody, $token);
        return $response;
    }

    // Overtime Request
    public function getOvertimeRequest($request){
        $jsonBody = [];
        $token = $request->getSession()->get('token');
        $response = $this->apiService->apiRequest('GET', 'api/overtime_requests/list', $jsonBody, $token);
        return $response;
    }

    public function getOvertimeRequestByEmp($request,$id){
        $jsonBody = [];
        $token = $request->getSession()->get('token');
        $response = $this->apiService->apiRequest('GET', 'api/overtime_requests/find-by-emp/'.$id, $jsonBody, $token);
        return $response;
    }

    // Accountability Records

    public function getAccountabilityRecords($request){
        $jsonBody = [];
        $token = $request->getSession()->get('token');
        $response = $this->apiService->apiRequest('GET', 'api/accountability_records/list', $jsonBody, $token);
        return $response;
    }

    public function getAccountabilityRecordsByEmployee($request,$id){
        $jsonBody = [];
        $token = $request->getSession()->get('token');
        $response = $this->apiService->apiRequest('GET', 'api/accountability_records/find-by-emp/'.$id, $jsonBody, $token);
        return $response;
    }

    // // Employee with Payroll Profile Config API Calls
    // public function getEmployeePayslip($request){
    //     $jsonBody = [];
    //     $token = $request->getSession()->get('token');
    //     $response = $this->apiService->apiRequest('GET', 'api/employees-payroll', $jsonBody, $token);
    //     return $response;
    // }

}
