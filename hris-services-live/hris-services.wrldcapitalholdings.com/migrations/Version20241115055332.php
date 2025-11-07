<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241115055332 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE affiliated_company (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cash_advance (id INT AUTO_INCREMENT NOT NULL, payroll_profile_id INT DEFAULT NULL, cash_advance_amount DOUBLE PRECISION NOT NULL, cash_advance_deduction DOUBLE PRECISION NOT NULL, date_start DATE NOT NULL, remarks VARCHAR(255) DEFAULT NULL, starting_amount DOUBLE PRECISION NOT NULL, INDEX IDX_B96D09AF51993B6D (payroll_profile_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cash_advance_history (id INT AUTO_INCREMENT NOT NULL, payroll_profile_id INT DEFAULT NULL, cash_advance_id INT DEFAULT NULL, payroll_id INT DEFAULT NULL, remarks VARCHAR(255) NOT NULL, previous_amount DOUBLE PRECISION NOT NULL, deduction DOUBLE PRECISION NOT NULL, current_amount DOUBLE PRECISION NOT NULL, INDEX IDX_1CBA572451993B6D (payroll_profile_id), INDEX IDX_1CBA572456A47978 (cash_advance_id), INDEX IDX_1CBA5724DBA340EA (payroll_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE employee_payroll (id INT AUTO_INCREMENT NOT NULL, payroll_profile_id INT DEFAULT NULL, payroll_group_id INT DEFAULT NULL, basic_salary DOUBLE PRECISION NOT NULL, overtime_salary DOUBLE PRECISION NOT NULL, total_salary DOUBLE PRECISION NOT NULL, total_deduction DOUBLE PRECISION NOT NULL, net_salary DOUBLE PRECISION NOT NULL, thirteenth_month_pay DOUBLE PRECISION NOT NULL, sss_share DOUBLE PRECISION NOT NULL, philhealth_share DOUBLE PRECISION NOT NULL, hdmf_contribution DOUBLE PRECISION NOT NULL, insurance_contribution DOUBLE PRECISION NOT NULL, tax_contribution DOUBLE PRECISION NOT NULL, cash_advance_deduction DOUBLE PRECISION NOT NULL, undertime_deduction DOUBLE PRECISION NOT NULL, rendered_days DOUBLE PRECISION NOT NULL, date_generated DATETIME NOT NULL, total_tax_shield DOUBLE PRECISION DEFAULT NULL, date_start DATE NOT NULL, date_end DATE NOT NULL, sss_calamity_loan DOUBLE PRECISION DEFAULT NULL, sss_loan DOUBLE PRECISION DEFAULT NULL, hdmf_loan DOUBLE PRECISION DEFAULT NULL, hdmf_calamity_loan DOUBLE PRECISION DEFAULT NULL, hdmf_mp2 DOUBLE PRECISION DEFAULT NULL, total_ca DOUBLE PRECISION DEFAULT NULL, INDEX IDX_C9D3EAC951993B6D (payroll_profile_id), INDEX IDX_C9D3EAC9ABC7787C (payroll_group_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE employee_payroll_profile (id INT AUTO_INCREMENT NOT NULL, sss_contribution_id INT DEFAULT NULL, tax_contribution_id INT DEFAULT NULL, pagibig_contribution_id INT DEFAULT NULL, philhealth_contribution_id INT DEFAULT NULL, employee_record_id INT DEFAULT NULL, monthly_salary DOUBLE PRECISION NOT NULL, allowance DOUBLE PRECISION NOT NULL, overtime_rate DOUBLE PRECISION NOT NULL, late_rate DOUBLE PRECISION NOT NULL, sss_loan DOUBLE PRECISION NOT NULL, sss_loan_deduction DOUBLE PRECISION NOT NULL, hdmf_loan DOUBLE PRECISION NOT NULL, hdmf_loan_deduction DOUBLE PRECISION NOT NULL, cash_advance DOUBLE PRECISION NOT NULL, cash_advance_deduction DOUBLE PRECISION NOT NULL, other_loans DOUBLE PRECISION NOT NULL, other_loans_deduction DOUBLE PRECISION NOT NULL, employer_sss_contribution DOUBLE PRECISION NOT NULL, employer_pagibig_contribution DOUBLE PRECISION NOT NULL, employer_philhealth_contribution DOUBLE PRECISION NOT NULL, accident_insurance DOUBLE PRECISION NOT NULL, thirteenth_month_pay DOUBLE PRECISION NOT NULL, daily_rate DOUBLE PRECISION NOT NULL, hourly_rate DOUBLE PRECISION NOT NULL, daily_rate_non_tax DOUBLE PRECISION NOT NULL, allowance_non_tax DOUBLE PRECISION NOT NULL, include_salary_adjustment_for_thirteenth_month TINYINT(1) NOT NULL, include_salary_for_thirteenth_month TINYINT(1) NOT NULL, include_taxshield__for_thirteenth_month TINYINT(1) NOT NULL, INDEX IDX_47890A1C7A6EC129 (sss_contribution_id), INDEX IDX_47890A1CAEAD69E3 (tax_contribution_id), INDEX IDX_47890A1CC0CB05CD (pagibig_contribution_id), INDEX IDX_47890A1C9E44FD3 (philhealth_contribution_id), UNIQUE INDEX UNIQ_47890A1C486D1D4E (employee_record_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE loan_history (id INT AUTO_INCREMENT NOT NULL, employee_record_id INT DEFAULT NULL, sss_loan DOUBLE PRECISION NOT NULL, sss_loan_deduction DOUBLE PRECISION NOT NULL, hdmf_loan DOUBLE PRECISION NOT NULL, hdmf_loan_deduction DOUBLE PRECISION NOT NULL, cash_advance DOUBLE PRECISION NOT NULL, cash_advance_deduction DOUBLE PRECISION NOT NULL, other_loans DOUBLE PRECISION NOT NULL, other_loans_deduction DOUBLE PRECISION NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_9F5FE3F486D1D4E (employee_record_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pagibig_config (id INT AUTO_INCREMENT NOT NULL, employer_share DOUBLE PRECISION NOT NULL, employee_share DOUBLE PRECISION NOT NULL, monthly_compensation_cap DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pagibig_loans (id INT AUTO_INCREMENT NOT NULL, payroll_profile_id INT DEFAULT NULL, remark VARCHAR(255) NOT NULL, amount DOUBLE PRECISION NOT NULL, deduction DOUBLE PRECISION NOT NULL, date DATE NOT NULL, INDEX IDX_1872D63A51993B6D (payroll_profile_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pagibig_loans_history (id INT AUTO_INCREMENT NOT NULL, payroll_profile_id INT DEFAULT NULL, pagibig_loans_history_id INT DEFAULT NULL, remark VARCHAR(255) NOT NULL, previous_amount DOUBLE PRECISION NOT NULL, current_amount DOUBLE PRECISION NOT NULL, deduction DOUBLE PRECISION NOT NULL, date DATE NOT NULL, INDEX IDX_9996987551993B6D (payroll_profile_id), INDEX IDX_99969875948F5971 (pagibig_loans_history_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE payroll_groups (id INT AUTO_INCREMENT NOT NULL, date_start DATE NOT NULL, date_end DATE NOT NULL, remarks VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE phil_health_config (id INT AUTO_INCREMENT NOT NULL, base_rate DOUBLE PRECISION NOT NULL, employee_share DOUBLE PRECISION NOT NULL, employer_share DOUBLE PRECISION NOT NULL, minimum_cap DOUBLE PRECISION NOT NULL, maximum_cap DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE salary_adjustment (id INT AUTO_INCREMENT NOT NULL, payroll_id INT DEFAULT NULL, daily_rate DOUBLE PRECISION NOT NULL, regular_days DOUBLE PRECISION NOT NULL, regular_days_pay DOUBLE PRECISION NOT NULL, regular_ndot_hours DOUBLE PRECISION NOT NULL, ot_meal_subsidy DOUBLE PRECISION NOT NULL, ot_meal_subsidy_amount DOUBLE PRECISION NOT NULL, above_four_hours DOUBLE PRECISION NOT NULL, above_four_hours_amount DOUBLE PRECISION NOT NULL, temp_allowance_amount DOUBLE PRECISION NOT NULL, wellness DOUBLE PRECISION NOT NULL, salary_adjustment DOUBLE PRECISION NOT NULL, total_salary_adjustment DOUBLE PRECISION NOT NULL, regular_ndot_amount DOUBLE PRECISION DEFAULT NULL, total_nontax_sal_adjustment DOUBLE PRECISION NOT NULL, total_taxable_sal_adjustment DOUBLE PRECISION NOT NULL, UNIQUE INDEX UNIQ_9D8FB12CDBA340EA (payroll_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sssconfig (id INT AUTO_INCREMENT NOT NULL, range_start DOUBLE PRECISION NOT NULL, range_end DOUBLE PRECISION NOT NULL, msc_ec DOUBLE PRECISION NOT NULL, msc_wisp DOUBLE PRECISION NOT NULL, msc_total DOUBLE PRECISION NOT NULL, contribution_regular_er DOUBLE PRECISION NOT NULL, contribution_regular_ee DOUBLE PRECISION NOT NULL, contribution_ec_er DOUBLE PRECISION NOT NULL, contribution_ec_ee DOUBLE PRECISION NOT NULL, contribution_wisp_er DOUBLE PRECISION NOT NULL, contribution_wisp_ee DOUBLE PRECISION NOT NULL, contribution_total_er DOUBLE PRECISION NOT NULL, contribution_total_ee DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sssloans (id INT AUTO_INCREMENT NOT NULL, payroll_profile_id INT DEFAULT NULL, remark VARCHAR(255) NOT NULL, amount DOUBLE PRECISION NOT NULL, deduction DOUBLE PRECISION NOT NULL, date DATE NOT NULL, INDEX IDX_532B466251993B6D (payroll_profile_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sssloans_history (id INT AUTO_INCREMENT NOT NULL, payroll_profile_id INT DEFAULT NULL, sss_loan_id INT DEFAULT NULL, remark VARCHAR(255) NOT NULL, previous_amount DOUBLE PRECISION NOT NULL, deduction DOUBLE PRECISION NOT NULL, date DATETIME NOT NULL, current_amount DOUBLE PRECISION NOT NULL, INDEX IDX_F43F365D51993B6D (payroll_profile_id), INDEX IDX_F43F365D70EFC0E (sss_loan_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tax_config (id INT AUTO_INCREMENT NOT NULL, tax_bracket_name VARCHAR(255) NOT NULL, tax_bracket_range DOUBLE PRECISION NOT NULL, tax_bracket_range_end DOUBLE PRECISION NOT NULL, tax_deduction_percent DOUBLE PRECISION NOT NULL, tax_deduction_amount DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tax_shield (id INT AUTO_INCREMENT NOT NULL, payroll_id INT DEFAULT NULL, monthly_tax_shield DOUBLE PRECISION NOT NULL, daily_tax_shield DOUBLE PRECISION NOT NULL, remarks VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_5249B843DBA340EA (payroll_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE thirteenth_month_pay_config (id INT AUTO_INCREMENT NOT NULL, employee_payroll_profile_id INT DEFAULT NULL, include_salary_adjustment TINYINT(1) NOT NULL, include_salary TINYINT(1) NOT NULL, include_tax_shield_pay TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_83C9EA081DF64C6D (employee_payroll_profile_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE cash_advance ADD CONSTRAINT FK_B96D09AF51993B6D FOREIGN KEY (payroll_profile_id) REFERENCES employee_payroll_profile (id)');
        $this->addSql('ALTER TABLE cash_advance_history ADD CONSTRAINT FK_1CBA572451993B6D FOREIGN KEY (payroll_profile_id) REFERENCES employee_payroll_profile (id)');
        $this->addSql('ALTER TABLE cash_advance_history ADD CONSTRAINT FK_1CBA572456A47978 FOREIGN KEY (cash_advance_id) REFERENCES cash_advance (id)');
        $this->addSql('ALTER TABLE cash_advance_history ADD CONSTRAINT FK_1CBA5724DBA340EA FOREIGN KEY (payroll_id) REFERENCES employee_payroll (id)');
        $this->addSql('ALTER TABLE employee_payroll ADD CONSTRAINT FK_C9D3EAC951993B6D FOREIGN KEY (payroll_profile_id) REFERENCES employee_payroll_profile (id)');
        $this->addSql('ALTER TABLE employee_payroll ADD CONSTRAINT FK_C9D3EAC9ABC7787C FOREIGN KEY (payroll_group_id) REFERENCES payroll_groups (id)');
        $this->addSql('ALTER TABLE employee_payroll_profile ADD CONSTRAINT FK_47890A1C7A6EC129 FOREIGN KEY (sss_contribution_id) REFERENCES sssconfig (id)');
        $this->addSql('ALTER TABLE employee_payroll_profile ADD CONSTRAINT FK_47890A1CAEAD69E3 FOREIGN KEY (tax_contribution_id) REFERENCES tax_config (id)');
        $this->addSql('ALTER TABLE employee_payroll_profile ADD CONSTRAINT FK_47890A1CC0CB05CD FOREIGN KEY (pagibig_contribution_id) REFERENCES pagibig_config (id)');
        $this->addSql('ALTER TABLE employee_payroll_profile ADD CONSTRAINT FK_47890A1C9E44FD3 FOREIGN KEY (philhealth_contribution_id) REFERENCES phil_health_config (id)');
        $this->addSql('ALTER TABLE employee_payroll_profile ADD CONSTRAINT FK_47890A1C486D1D4E FOREIGN KEY (employee_record_id) REFERENCES employee_records (id)');
        $this->addSql('ALTER TABLE loan_history ADD CONSTRAINT FK_9F5FE3F486D1D4E FOREIGN KEY (employee_record_id) REFERENCES employee_records (id)');
        $this->addSql('ALTER TABLE pagibig_loans ADD CONSTRAINT FK_1872D63A51993B6D FOREIGN KEY (payroll_profile_id) REFERENCES employee_payroll_profile (id)');
        $this->addSql('ALTER TABLE pagibig_loans_history ADD CONSTRAINT FK_9996987551993B6D FOREIGN KEY (payroll_profile_id) REFERENCES employee_payroll_profile (id)');
        $this->addSql('ALTER TABLE pagibig_loans_history ADD CONSTRAINT FK_99969875948F5971 FOREIGN KEY (pagibig_loans_history_id) REFERENCES pagibig_loans (id)');
        $this->addSql('ALTER TABLE salary_adjustment ADD CONSTRAINT FK_9D8FB12CDBA340EA FOREIGN KEY (payroll_id) REFERENCES employee_payroll (id)');
        $this->addSql('ALTER TABLE sssloans ADD CONSTRAINT FK_532B466251993B6D FOREIGN KEY (payroll_profile_id) REFERENCES employee_payroll_profile (id)');
        $this->addSql('ALTER TABLE sssloans_history ADD CONSTRAINT FK_F43F365D51993B6D FOREIGN KEY (payroll_profile_id) REFERENCES employee_payroll_profile (id)');
        $this->addSql('ALTER TABLE sssloans_history ADD CONSTRAINT FK_F43F365D70EFC0E FOREIGN KEY (sss_loan_id) REFERENCES sssloans (id)');
        $this->addSql('ALTER TABLE tax_shield ADD CONSTRAINT FK_5249B843DBA340EA FOREIGN KEY (payroll_id) REFERENCES employee_payroll (id)');
        $this->addSql('ALTER TABLE thirteenth_month_pay_config ADD CONSTRAINT FK_83C9EA081DF64C6D FOREIGN KEY (employee_payroll_profile_id) REFERENCES employee_payroll_profile (id)');
        $this->addSql('ALTER TABLE employee_records ADD affiliated_company_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE employee_records ADD CONSTRAINT FK_1CD10E495256794D FOREIGN KEY (affiliated_company_id) REFERENCES affiliated_company (id)');
        $this->addSql('CREATE INDEX IDX_1CD10E495256794D ON employee_records (affiliated_company_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE employee_records DROP FOREIGN KEY FK_1CD10E495256794D');
        $this->addSql('ALTER TABLE cash_advance DROP FOREIGN KEY FK_B96D09AF51993B6D');
        $this->addSql('ALTER TABLE cash_advance_history DROP FOREIGN KEY FK_1CBA572451993B6D');
        $this->addSql('ALTER TABLE cash_advance_history DROP FOREIGN KEY FK_1CBA572456A47978');
        $this->addSql('ALTER TABLE cash_advance_history DROP FOREIGN KEY FK_1CBA5724DBA340EA');
        $this->addSql('ALTER TABLE employee_payroll DROP FOREIGN KEY FK_C9D3EAC951993B6D');
        $this->addSql('ALTER TABLE employee_payroll DROP FOREIGN KEY FK_C9D3EAC9ABC7787C');
        $this->addSql('ALTER TABLE employee_payroll_profile DROP FOREIGN KEY FK_47890A1C7A6EC129');
        $this->addSql('ALTER TABLE employee_payroll_profile DROP FOREIGN KEY FK_47890A1CAEAD69E3');
        $this->addSql('ALTER TABLE employee_payroll_profile DROP FOREIGN KEY FK_47890A1CC0CB05CD');
        $this->addSql('ALTER TABLE employee_payroll_profile DROP FOREIGN KEY FK_47890A1C9E44FD3');
        $this->addSql('ALTER TABLE employee_payroll_profile DROP FOREIGN KEY FK_47890A1C486D1D4E');
        $this->addSql('ALTER TABLE loan_history DROP FOREIGN KEY FK_9F5FE3F486D1D4E');
        $this->addSql('ALTER TABLE pagibig_loans DROP FOREIGN KEY FK_1872D63A51993B6D');
        $this->addSql('ALTER TABLE pagibig_loans_history DROP FOREIGN KEY FK_9996987551993B6D');
        $this->addSql('ALTER TABLE pagibig_loans_history DROP FOREIGN KEY FK_99969875948F5971');
        $this->addSql('ALTER TABLE salary_adjustment DROP FOREIGN KEY FK_9D8FB12CDBA340EA');
        $this->addSql('ALTER TABLE sssloans DROP FOREIGN KEY FK_532B466251993B6D');
        $this->addSql('ALTER TABLE sssloans_history DROP FOREIGN KEY FK_F43F365D51993B6D');
        $this->addSql('ALTER TABLE sssloans_history DROP FOREIGN KEY FK_F43F365D70EFC0E');
        $this->addSql('ALTER TABLE tax_shield DROP FOREIGN KEY FK_5249B843DBA340EA');
        $this->addSql('ALTER TABLE thirteenth_month_pay_config DROP FOREIGN KEY FK_83C9EA081DF64C6D');
        $this->addSql('DROP TABLE affiliated_company');
        $this->addSql('DROP TABLE cash_advance');
        $this->addSql('DROP TABLE cash_advance_history');
        $this->addSql('DROP TABLE employee_payroll');
        $this->addSql('DROP TABLE employee_payroll_profile');
        $this->addSql('DROP TABLE loan_history');
        $this->addSql('DROP TABLE pagibig_config');
        $this->addSql('DROP TABLE pagibig_loans');
        $this->addSql('DROP TABLE pagibig_loans_history');
        $this->addSql('DROP TABLE payroll_groups');
        $this->addSql('DROP TABLE phil_health_config');
        $this->addSql('DROP TABLE salary_adjustment');
        $this->addSql('DROP TABLE sssconfig');
        $this->addSql('DROP TABLE sssloans');
        $this->addSql('DROP TABLE sssloans_history');
        $this->addSql('DROP TABLE tax_config');
        $this->addSql('DROP TABLE tax_shield');
        $this->addSql('DROP TABLE thirteenth_month_pay_config');
        $this->addSql('DROP INDEX IDX_1CD10E495256794D ON employee_records');
        $this->addSql('ALTER TABLE employee_records DROP affiliated_company_id');
    }
}
