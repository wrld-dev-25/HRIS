<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241121004601 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE holiday_config (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, date DATE NOT NULL, multiplier_regular DOUBLE PRECISION NOT NULL, multiplier_overtime DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE leave_policy (id INT AUTO_INCREMENT NOT NULL, department_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, year VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL, days DOUBLE PRECISION NOT NULL, calendar_color VARCHAR(255) NOT NULL, type VARCHAR(255) DEFAULT NULL, gender VARCHAR(255) NOT NULL, marital SMALLINT NOT NULL, increment_amount INT NOT NULL, years_before_increment INT NOT NULL, is_carried_over TINYINT(1) NOT NULL, INDEX IDX_C6BB9BB9AE80F5DF (department_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE leave_request (id INT AUTO_INCREMENT NOT NULL, emp_record_id INT NOT NULL, leave_policies_id INT NOT NULL, updated_by_id INT DEFAULT NULL, selected_leave_id INT DEFAULT NULL, reason VARCHAR(255) DEFAULT NULL, date_start DATETIME NOT NULL, date_end DATETIME NOT NULL, is_half_day TINYINT(1) NOT NULL, document VARCHAR(255) NOT NULL, year VARCHAR(255) NOT NULL, status VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', total_days_requested DOUBLE PRECISION NOT NULL, INDEX IDX_7DC8F778B79CACBD (emp_record_id), INDEX IDX_7DC8F77857917312 (leave_policies_id), INDEX IDX_7DC8F778896DBBDE (updated_by_id), INDEX IDX_7DC8F778C752161 (selected_leave_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE selected_employee_leaves (id INT AUTO_INCREMENT NOT NULL, leave_policy_id INT DEFAULT NULL, employee_leave_id INT DEFAULT NULL, no_of_days DOUBLE PRECISION NOT NULL, used_days DOUBLE PRECISION NOT NULL, carried_over_days DOUBLE PRECISION NOT NULL, carry_over_policy INT NOT NULL, status INT NOT NULL, INDEX IDX_BE47A01B62C839BC (leave_policy_id), INDEX IDX_BE47A01B8B158A9B (employee_leave_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE yearly_employee_leave (id INT AUTO_INCREMENT NOT NULL, emp_record_id INT NOT NULL, year VARCHAR(255) NOT NULL, INDEX IDX_3B4AA152B79CACBD (emp_record_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE yearly_holiday (id INT AUTO_INCREMENT NOT NULL, holiday_config_id INT NOT NULL, date DATE DEFAULT NULL, year VARCHAR(255) NOT NULL, INDEX IDX_C9CC8A8ABCEEACCF (holiday_config_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE leave_policy ADD CONSTRAINT FK_C6BB9BB9AE80F5DF FOREIGN KEY (department_id) REFERENCES department (id)');
        $this->addSql('ALTER TABLE leave_request ADD CONSTRAINT FK_7DC8F778B79CACBD FOREIGN KEY (emp_record_id) REFERENCES employee_records (id)');
        $this->addSql('ALTER TABLE leave_request ADD CONSTRAINT FK_7DC8F77857917312 FOREIGN KEY (leave_policies_id) REFERENCES leave_policy (id)');
        $this->addSql('ALTER TABLE leave_request ADD CONSTRAINT FK_7DC8F778896DBBDE FOREIGN KEY (updated_by_id) REFERENCES employee_records (id)');
        $this->addSql('ALTER TABLE leave_request ADD CONSTRAINT FK_7DC8F778C752161 FOREIGN KEY (selected_leave_id) REFERENCES selected_employee_leaves (id)');
        $this->addSql('ALTER TABLE selected_employee_leaves ADD CONSTRAINT FK_BE47A01B62C839BC FOREIGN KEY (leave_policy_id) REFERENCES leave_policy (id)');
        $this->addSql('ALTER TABLE selected_employee_leaves ADD CONSTRAINT FK_BE47A01B8B158A9B FOREIGN KEY (employee_leave_id) REFERENCES yearly_employee_leave (id)');
        $this->addSql('ALTER TABLE yearly_employee_leave ADD CONSTRAINT FK_3B4AA152B79CACBD FOREIGN KEY (emp_record_id) REFERENCES employee_records (id)');
        $this->addSql('ALTER TABLE yearly_holiday ADD CONSTRAINT FK_C9CC8A8ABCEEACCF FOREIGN KEY (holiday_config_id) REFERENCES holiday_config (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE leave_policy DROP FOREIGN KEY FK_C6BB9BB9AE80F5DF');
        $this->addSql('ALTER TABLE leave_request DROP FOREIGN KEY FK_7DC8F778B79CACBD');
        $this->addSql('ALTER TABLE leave_request DROP FOREIGN KEY FK_7DC8F77857917312');
        $this->addSql('ALTER TABLE leave_request DROP FOREIGN KEY FK_7DC8F778896DBBDE');
        $this->addSql('ALTER TABLE leave_request DROP FOREIGN KEY FK_7DC8F778C752161');
        $this->addSql('ALTER TABLE selected_employee_leaves DROP FOREIGN KEY FK_BE47A01B62C839BC');
        $this->addSql('ALTER TABLE selected_employee_leaves DROP FOREIGN KEY FK_BE47A01B8B158A9B');
        $this->addSql('ALTER TABLE yearly_employee_leave DROP FOREIGN KEY FK_3B4AA152B79CACBD');
        $this->addSql('ALTER TABLE yearly_holiday DROP FOREIGN KEY FK_C9CC8A8ABCEEACCF');
        $this->addSql('DROP TABLE holiday_config');
        $this->addSql('DROP TABLE leave_policy');
        $this->addSql('DROP TABLE leave_request');
        $this->addSql('DROP TABLE selected_employee_leaves');
        $this->addSql('DROP TABLE yearly_employee_leave');
        $this->addSql('DROP TABLE yearly_holiday');
    }
}
