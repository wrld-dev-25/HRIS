<?php

namespace App\Entity;

use App\Repository\EmployeeAdditionalRecordsRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: EmployeeAdditionalRecordsRepository::class)]
class EmployeeAdditionalRecords
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToOne(inversedBy: 'employeeAdditionalRecords', cascade: ['persist', 'remove'])]
    #[Groups(['employee_additional_records'])]
    //#[ORM\JoinColumn(name: 'employee_code', referencedColumnName: 'employee_code')]
    private ?EmployeeRecords $employee_code = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['employee_additional_records'])]
    private ?array $employment_history = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['employee_additional_records'])]
    private ?array $past_employment_record = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['employee_additional_records'])]
    private ?array $educational_background = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['employee_additional_records'])]
    private ?array $seminars_trainings = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['employee_additional_records'])]
    private ?array $assessments_exams = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['employee_additional_records'])]
    private ?array $skills = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['employee_additional_records'])]
    private ?array $awards = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['employee_additional_records'])]
    private ?array $licenses = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['employee_additional_records'])]
    private ?array $dependents = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['employee_additional_records'])]
    private ?array $violations = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['employee_additional_records'])]
    private ?array $medical_drug_tests = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['employee_additional_records'])]
    private ?string $school_graduated = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['employee_additional_records'])]
    private ?string $course = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['employee_additional_records'])]
    private ?string $career_band_level = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['employee_additional_records'])]
    private ?string $career_global_grade = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['employee_additional_records'])]
    private ?string $cash_card_number = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['employee_additional_records'])]
    private ?string $hmo_account = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['employee_additional_records'])]
    private ?string $sss_number = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['employee_additional_records'])]
    private ?string $philhealth_number = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['employee_additional_records'])]
    private ?string $pagibig_number = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['employee_additional_records'])]
    private ?string $tin_number = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmployeeCode(): ?EmployeeRecords
    {
        return $this->employee_code;
    }

    public function setEmployeeCode(?EmployeeRecords $employee_code): static
    {
        $this->employee_code = $employee_code;

        return $this;
    }

    public function getEmploymentHistory(): ?array
    {
        return $this->employment_history;
    }

    public function setEmploymentHistory(?array $employment_history): static
    {
        $this->employment_history = $employment_history;

        return $this;
    }

    public function getPastEmploymentRecord(): ?array
    {
        return $this->past_employment_record;
    }

    public function setPastEmploymentRecord(?array $past_employment_record): static
    {
        $this->past_employment_record = $past_employment_record;

        return $this;
    }

    public function getEducationalBackground(): ?array
    {
        return $this->educational_background;
    }

    public function setEducationalBackground(?array $educational_background): static
    {
        $this->educational_background = $educational_background;

        return $this;
    }

    public function getSeminarsTrainings(): ?array
    {
        return $this->seminars_trainings;
    }

    public function setSeminarsTrainings(?array $seminars_trainings): static
    {
        $this->seminars_trainings = $seminars_trainings;

        return $this;
    }

    public function getAssessmentsExams(): ?array
    {
        return $this->assessments_exams;
    }

    public function setAssessmentsExams(?array $assessments_exams): static
    {
        $this->assessments_exams = $assessments_exams;

        return $this;
    }

    public function getSkills(): ?array
    {
        return $this->skills;
    }

    public function setSkills(?array $skills): static
    {
        $this->skills = $skills;

        return $this;
    }

    public function getAwards(): ?array
    {
        return $this->awards;
    }

    public function setAwards(?array $awards): static
    {
        $this->awards = $awards;

        return $this;
    }

    public function getLicenses(): ?array
    {
        return $this->licenses;
    }

    public function setLicenses(?array $licenses): static
    {
        $this->licenses = $licenses;

        return $this;
    }

    public function getDependents(): ?array
    {
        return $this->dependents;
    }

    public function setDependents(?array $dependents): static
    {
        $this->dependents = $dependents;

        return $this;
    }

    public function getViolations(): ?array
    {
        return $this->violations;
    }

    public function setViolations(?array $violations): static
    {
        $this->violations = $violations;

        return $this;
    }

    public function getMedicalDrugTests(): ?array
    {
        return $this->medical_drug_tests;
    }

    public function setMedicalDrugTests(?array $medical_drug_tests): static
    {
        $this->medical_drug_tests = $medical_drug_tests;

        return $this;
    }

    public function getSchoolGraduated(): ?string
    {
        return $this->school_graduated;
    }

    public function setSchoolGraduated(?string $school_graduated): static
    {
        $this->school_graduated = $school_graduated;

        return $this;
    }

    public function getCourse(): ?string
    {
        return $this->course;
    }

    public function setCourse(?string $course): static
    {
        $this->course = $course;

        return $this;
    }

    public function getCareerBandLevel(): ?string
    {
        return $this->career_band_level;
    }

    public function setCareerBandLevel(?string $career_band_level): static
    {
        $this->career_band_level = $career_band_level;

        return $this;
    }

    public function getCareerGlobalGrade(): ?string
    {
        return $this->career_global_grade;
    }

    public function setCareerGlobalGrade(?string $career_global_grade): static
    {
        $this->career_global_grade = $career_global_grade;

        return $this;
    }

    public function getCashCardNumber(): ?string
    {
        return $this->cash_card_number;
    }

    public function setCashCardNumber(?string $cash_card_number): static
    {
        $this->cash_card_number = $cash_card_number;

        return $this;
    }

    public function getHmoAccount(): ?string
    {
        return $this->hmo_account;
    }

    public function setHmoAccount(?string $hmo_account): static
    {
        $this->hmo_account = $hmo_account;

        return $this;
    }

    public function getSssNumber(): ?string
    {
        return $this->sss_number;
    }

    public function setSssNumber(?string $sss_number): static
    {
        $this->sss_number = $sss_number;

        return $this;
    }

    public function getPhilhealthNumber(): ?string
    {
        return $this->philhealth_number;
    }

    public function setPhilhealthNumber(?string $philhealth_number): static
    {
        $this->philhealth_number = $philhealth_number;

        return $this;
    }

    public function getPagibigNumber(): ?string
    {
        return $this->pagibig_number;
    }

    public function setPagibigNumber(?string $pagibig_number): static
    {
        $this->pagibig_number = $pagibig_number;

        return $this;
    }

    public function getTinNumber(): ?string
    {
        return $this->tin_number;
    }

    public function setTinNumber(?string $tin_number): static
    {
        $this->tin_number = $tin_number;

        return $this;
    }
}
