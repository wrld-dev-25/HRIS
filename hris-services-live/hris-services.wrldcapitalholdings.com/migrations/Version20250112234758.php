<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250112234758 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE accountability_records (id INT AUTO_INCREMENT NOT NULL, employee_record_id INT DEFAULT NULL, item_name VARCHAR(255) NOT NULL, item_count DOUBLE PRECISION NOT NULL, status INT NOT NULL, INDEX IDX_6ED92051486D1D4E (employee_record_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contract_types (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, code VARCHAR(255) NOT NULL, archived TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE dtradjutments (id INT AUTO_INCREMENT NOT NULL, worker_logs_id INT DEFAULT NULL, emp_record_id INT DEFAULT NULL, adjusted_date DATE NOT NULL, INDEX IDX_BD12DAAED7AF8720 (worker_logs_id), INDEX IDX_BD12DAAEB79CACBD (emp_record_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE employee_overtime_request (id INT AUTO_INCREMENT NOT NULL, emp_id_id INT DEFAULT NULL, worker_logs_id INT DEFAULT NULL, approved_by_id INT DEFAULT NULL, status SMALLINT NOT NULL, time_requested DOUBLE PRECISION NOT NULL, reason VARCHAR(255) DEFAULT NULL, INDEX IDX_684E51EE13C5666C (emp_id_id), INDEX IDX_684E51EED7AF8720 (worker_logs_id), INDEX IDX_684E51EE2D234F6A (approved_by_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE notifications (id INT AUTO_INCREMENT NOT NULL, recipient_department_id INT DEFAULT NULL, recipient_division_id INT DEFAULT NULL, recipient_employee_record_id INT DEFAULT NULL, sender_employee_record_id INT DEFAULT NULL, action VARCHAR(255) DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, datetime DATETIME DEFAULT NULL, notification_type INT DEFAULT NULL, INDEX IDX_6000B0D3FA791772 (recipient_department_id), INDEX IDX_6000B0D3F640CEF8 (recipient_division_id), INDEX IDX_6000B0D3D86E1FD5 (recipient_employee_record_id), INDEX IDX_6000B0D39296E287 (sender_employee_record_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE payroll_calculation_config (id INT AUTO_INCREMENT NOT NULL, no_hours_per_week DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE accountability_records ADD CONSTRAINT FK_6ED92051486D1D4E FOREIGN KEY (employee_record_id) REFERENCES employee_records (id)');
        $this->addSql('ALTER TABLE dtradjutments ADD CONSTRAINT FK_BD12DAAED7AF8720 FOREIGN KEY (worker_logs_id) REFERENCES worker_logs (id)');
        $this->addSql('ALTER TABLE dtradjutments ADD CONSTRAINT FK_BD12DAAEB79CACBD FOREIGN KEY (emp_record_id) REFERENCES employee_records (id)');
        $this->addSql('ALTER TABLE employee_overtime_request ADD CONSTRAINT FK_684E51EE13C5666C FOREIGN KEY (emp_id_id) REFERENCES employee_records (id)');
        $this->addSql('ALTER TABLE employee_overtime_request ADD CONSTRAINT FK_684E51EED7AF8720 FOREIGN KEY (worker_logs_id) REFERENCES worker_logs (id)');
        $this->addSql('ALTER TABLE employee_overtime_request ADD CONSTRAINT FK_684E51EE2D234F6A FOREIGN KEY (approved_by_id) REFERENCES employee_records (id)');
        $this->addSql('ALTER TABLE notifications ADD CONSTRAINT FK_6000B0D3FA791772 FOREIGN KEY (recipient_department_id) REFERENCES department (id)');
        $this->addSql('ALTER TABLE notifications ADD CONSTRAINT FK_6000B0D3F640CEF8 FOREIGN KEY (recipient_division_id) REFERENCES division (id)');
        $this->addSql('ALTER TABLE notifications ADD CONSTRAINT FK_6000B0D3D86E1FD5 FOREIGN KEY (recipient_employee_record_id) REFERENCES employee_records (id)');
        $this->addSql('ALTER TABLE notifications ADD CONSTRAINT FK_6000B0D39296E287 FOREIGN KEY (sender_employee_record_id) REFERENCES employee_records (id)');
        $this->addSql('ALTER TABLE cash_advance ADD enabled TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE employee_records ADD profile_photo_path VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE main_modules ADD payroll LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', ADD emp_leaves LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\'');
        $this->addSql('ALTER TABLE pagibig_loans ADD enabled TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE sssloans ADD enabled TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE sub_modules ADD sss_config LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', ADD pagibig_config LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', ADD bir_config LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', ADD philhealth_config LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', ADD payroll LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', ADD payroll_reports LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', ADD leave_policy LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', ADD emp_leaves LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', ADD holiday_config LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', ADD leave_request LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', ADD leave_calendar LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE accountability_records DROP FOREIGN KEY FK_6ED92051486D1D4E');
        $this->addSql('ALTER TABLE dtradjutments DROP FOREIGN KEY FK_BD12DAAED7AF8720');
        $this->addSql('ALTER TABLE dtradjutments DROP FOREIGN KEY FK_BD12DAAEB79CACBD');
        $this->addSql('ALTER TABLE employee_overtime_request DROP FOREIGN KEY FK_684E51EE13C5666C');
        $this->addSql('ALTER TABLE employee_overtime_request DROP FOREIGN KEY FK_684E51EED7AF8720');
        $this->addSql('ALTER TABLE employee_overtime_request DROP FOREIGN KEY FK_684E51EE2D234F6A');
        $this->addSql('ALTER TABLE notifications DROP FOREIGN KEY FK_6000B0D3FA791772');
        $this->addSql('ALTER TABLE notifications DROP FOREIGN KEY FK_6000B0D3F640CEF8');
        $this->addSql('ALTER TABLE notifications DROP FOREIGN KEY FK_6000B0D3D86E1FD5');
        $this->addSql('ALTER TABLE notifications DROP FOREIGN KEY FK_6000B0D39296E287');
        $this->addSql('DROP TABLE accountability_records');
        $this->addSql('DROP TABLE contract_types');
        $this->addSql('DROP TABLE dtradjutments');
        $this->addSql('DROP TABLE employee_overtime_request');
        $this->addSql('DROP TABLE notifications');
        $this->addSql('DROP TABLE payroll_calculation_config');
        $this->addSql('ALTER TABLE cash_advance DROP enabled');
        $this->addSql('ALTER TABLE employee_records DROP profile_photo_path');
        $this->addSql('ALTER TABLE main_modules DROP payroll, DROP emp_leaves');
        $this->addSql('ALTER TABLE pagibig_loans DROP enabled');
        $this->addSql('ALTER TABLE sssloans DROP enabled');
        $this->addSql('ALTER TABLE sub_modules DROP sss_config, DROP pagibig_config, DROP bir_config, DROP philhealth_config, DROP payroll, DROP payroll_reports, DROP leave_policy, DROP emp_leaves, DROP holiday_config, DROP leave_request, DROP leave_calendar');
    }
}
