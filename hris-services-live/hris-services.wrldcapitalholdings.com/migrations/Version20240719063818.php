<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240719063818 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE attendance_types (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, is_hours_rendered TINYINT(1) NOT NULL, hours_provided DOUBLE PRECISION DEFAULT NULL, automated_attendance TINYINT(1) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE audit_trail_log (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, ip_address VARCHAR(255) DEFAULT NULL, transactions LONGTEXT DEFAULT NULL, datetime DATETIME NOT NULL, INDEX IDX_C15D73B9A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE blocks (id INT AUTO_INCREMENT NOT NULL, phase_id INT NOT NULL, block_name VARCHAR(255) NOT NULL, total_lots INT NOT NULL, INDEX IDX_CEED957899091188 (phase_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, project_id INT NOT NULL, model_id INT DEFAULT NULL, phase_id INT NOT NULL, blocks_id INT DEFAULT NULL, owner_id INT DEFAULT NULL, lots_id INT DEFAULT NULL, code VARCHAR(255) DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, location VARCHAR(255) DEFAULT NULL, block INT DEFAULT NULL, lot INT DEFAULT NULL, archived TINYINT(1) DEFAULT NULL, is_overhead TINYINT(1) DEFAULT NULL, INDEX IDX_64C19C1166D1F9C (project_id), INDEX IDX_64C19C17975B7E7 (model_id), INDEX IDX_64C19C199091188 (phase_id), INDEX IDX_64C19C1EE2E1C8C (blocks_id), INDEX IDX_64C19C17E3C61F9 (owner_id), UNIQUE INDEX UNIQ_64C19C1C400113F (lots_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE department (id INT AUTO_INCREMENT NOT NULL, manager_id INT DEFAULT NULL, division_id INT DEFAULT NULL, code VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL, is_archived TINYINT(1) DEFAULT NULL, INDEX IDX_CD1DE18A783E3463 (manager_id), INDEX IDX_CD1DE18A41859289 (division_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE division (id INT AUTO_INCREMENT NOT NULL, director_id INT DEFAULT NULL, code VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL, is_archived TINYINT(1) DEFAULT NULL, INDEX IDX_10174714899FB366 (director_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE emp_task (id INT AUTO_INCREMENT NOT NULL, emp_project_id INT DEFAULT NULL, worker_logs_id INT DEFAULT NULL, task_desc VARCHAR(255) DEFAULT NULL, rendered_hours INT DEFAULT NULL, date DATETIME DEFAULT NULL, archived TINYINT(1) DEFAULT NULL, approved TINYINT(1) DEFAULT NULL, assigned_hours DOUBLE PRECISION DEFAULT NULL, is_adjusted TINYINT(1) DEFAULT NULL, INDEX IDX_D5130D71AAF1FD5F (emp_project_id), INDEX IDX_D5130D71D7AF8720 (worker_logs_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE employee_additional_records (id INT AUTO_INCREMENT NOT NULL, employee_code_id INT DEFAULT NULL, employment_history JSON DEFAULT NULL, past_employment_record JSON DEFAULT NULL, educational_background JSON DEFAULT NULL, seminars_trainings JSON DEFAULT NULL, assessments_exams JSON DEFAULT NULL, skills JSON DEFAULT NULL, awards JSON DEFAULT NULL, licenses JSON DEFAULT NULL, dependents JSON DEFAULT NULL, violations JSON DEFAULT NULL, medical_drug_tests JSON DEFAULT NULL, school_graduated VARCHAR(255) DEFAULT NULL, course VARCHAR(255) DEFAULT NULL, career_band_level VARCHAR(255) DEFAULT NULL, career_global_grade VARCHAR(255) DEFAULT NULL, cash_card_number VARCHAR(255) DEFAULT NULL, hmo_account VARCHAR(255) DEFAULT NULL, sss_number VARCHAR(255) DEFAULT NULL, philhealth_number VARCHAR(255) DEFAULT NULL, pagibig_number VARCHAR(255) DEFAULT NULL, tin_number VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_D178FCB2A796A818 (employee_code_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE employee_attachments (id INT AUTO_INCREMENT NOT NULL, employee_id INT DEFAULT NULL, type VARCHAR(255) DEFAULT NULL, attachment_name VARCHAR(255) DEFAULT NULL, attachment_size VARCHAR(255) DEFAULT NULL, date_uploaded DATETIME DEFAULT NULL, file VARCHAR(255) DEFAULT NULL, original_file_name VARCHAR(255) DEFAULT NULL, INDEX IDX_C6E23BAB8C03F15C (employee_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE employee_projects (id INT AUTO_INCREMENT NOT NULL, project_id INT DEFAULT NULL, employee_id INT DEFAULT NULL, date DATETIME DEFAULT NULL, rendered_hours INT DEFAULT NULL, task VARCHAR(255) DEFAULT NULL, archived TINYINT(1) DEFAULT NULL, INDEX IDX_CCACE263166D1F9C (project_id), INDEX IDX_CCACE2638C03F15C (employee_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE employee_records (id INT AUTO_INCREMENT NOT NULL, division_id INT DEFAULT NULL, department_id INT DEFAULT NULL, user_id INT DEFAULT NULL, first_name VARCHAR(255) NOT NULL, middle_name VARCHAR(255) DEFAULT NULL, last_name VARCHAR(255) NOT NULL, extension VARCHAR(255) DEFAULT NULL, employee_code VARCHAR(255) NOT NULL, birthdate DATETIME NOT NULL, birth_place VARCHAR(255) DEFAULT NULL, age SMALLINT NOT NULL, gender VARCHAR(255) NOT NULL, civil_status VARCHAR(255) NOT NULL, email VARCHAR(255) DEFAULT NULL, zip_code SMALLINT DEFAULT NULL, area VARCHAR(255) DEFAULT NULL, present_barangay VARCHAR(255) DEFAULT NULL, present_city VARCHAR(255) DEFAULT NULL, same_address TINYINT(1) DEFAULT NULL, permanent_barangay VARCHAR(255) DEFAULT NULL, permanent_city VARCHAR(255) DEFAULT NULL, date_hired DATETIME NOT NULL, employee_status VARCHAR(255) NOT NULL, position VARCHAR(255) DEFAULT NULL, employment_type VARCHAR(255) DEFAULT NULL, contract_expiry_date DATETIME DEFAULT NULL, date_separated DATETIME DEFAULT NULL, probationary_date DATETIME DEFAULT NULL, regularization_date DATETIME DEFAULT NULL, archived TINYINT(1) DEFAULT NULL, telephone VARCHAR(255) DEFAULT NULL, cellphone VARCHAR(255) DEFAULT NULL, INDEX IDX_1CD10E4941859289 (division_id), INDEX IDX_1CD10E49AE80F5DF (department_id), UNIQUE INDEX UNIQ_1CD10E49A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lots (id INT AUTO_INCREMENT NOT NULL, blocks_id INT DEFAULT NULL, lot_num INT DEFAULT NULL, lot_name VARCHAR(255) DEFAULT NULL, INDEX IDX_916087CEEE2E1C8C (blocks_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE model (id INT AUTO_INCREMENT NOT NULL, type_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_D79572D9C54C8C93 (type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE model_types (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) DEFAULT NULL, code VARCHAR(255) DEFAULT NULL, archived TINYINT(1) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE options (id INT AUTO_INCREMENT NOT NULL, option_name VARCHAR(255) DEFAULT NULL, option_value JSON DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE owner (id INT AUTO_INCREMENT NOT NULL, firstname VARCHAR(255) DEFAULT NULL, lastname VARCHAR(255) DEFAULT NULL, lot_no VARCHAR(255) DEFAULT NULL, block VARCHAR(255) DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, contact_no VARCHAR(255) DEFAULT NULL, archived TINYINT(1) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE phase (id INT AUTO_INCREMENT NOT NULL, subdivision_id INT NOT NULL, name VARCHAR(255) NOT NULL, code VARCHAR(255) NOT NULL, total_blocks INT NOT NULL, total_lots INT NOT NULL, archived TINYINT(1) DEFAULT NULL, INDEX IDX_B1BDD6CBE05F13C (subdivision_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE project (id INT AUTO_INCREMENT NOT NULL, subdivision_id INT DEFAULT NULL, project_type_id INT DEFAULT NULL, code VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL, archived TINYINT(1) DEFAULT NULL, INDEX IDX_2FB3D0EEE05F13C (subdivision_id), INDEX IDX_2FB3D0EE535280F6 (project_type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE project_type (id INT AUTO_INCREMENT NOT NULL, project_name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE shifts (id INT AUTO_INCREMENT NOT NULL, start_time TIME DEFAULT NULL, end_time TIME DEFAULT NULL, archived TINYINT(1) DEFAULT NULL, name VARCHAR(255) DEFAULT NULL, lunch_break_duration DOUBLE PRECISION DEFAULT NULL, total_hours_minus_lunch DOUBLE PRECISION DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE subdivision (id INT AUTO_INCREMENT NOT NULL, subdivision_code VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL, name VARCHAR(255) NOT NULL, archived TINYINT(1) DEFAULT NULL, location VARCHAR(255) NOT NULL, total_lots INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sync_connection (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, dbname VARCHAR(255) NOT NULL, host VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, user_type_id INT NOT NULL, emp_shift_id INT DEFAULT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, first_name VARCHAR(255) DEFAULT NULL, middle_name VARCHAR(255) DEFAULT NULL, last_name VARCHAR(255) DEFAULT NULL, birthdate DATE DEFAULT NULL, gender VARCHAR(255) DEFAULT NULL, address VARCHAR(255) DEFAULT NULL, contact_num VARCHAR(50) DEFAULT NULL, biometric_data VARCHAR(999) DEFAULT NULL, status INT DEFAULT NULL, user_id VARCHAR(255) DEFAULT NULL, removed INT NOT NULL, profile_photo VARCHAR(255) DEFAULT NULL, block VARCHAR(255) DEFAULT NULL, lot VARCHAR(255) DEFAULT NULL, phase VARCHAR(255) DEFAULT NULL, street VARCHAR(255) DEFAULT NULL, city VARCHAR(255) DEFAULT NULL, province VARCHAR(255) DEFAULT NULL, country VARCHAR(255) DEFAULT NULL, zip VARCHAR(255) DEFAULT NULL, login_count INT DEFAULT NULL, username VARCHAR(255) DEFAULT NULL, archived TINYINT(1) DEFAULT NULL, is_straight_time TINYINT(1) DEFAULT NULL, is_assignable_proj TINYINT(1) NOT NULL, INDEX IDX_8D93D6499D419299 (user_type_id), INDEX IDX_8D93D649D5946E10 (emp_shift_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_type (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, removed SMALLINT NOT NULL, user_code VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE worker (id INT AUTO_INCREMENT NOT NULL, emp_record_id INT DEFAULT NULL, worker_id VARCHAR(255) NOT NULL, firstname VARCHAR(255) NOT NULL, lastname VARCHAR(255) NOT NULL, position VARCHAR(255) DEFAULT NULL, worker_docs VARCHAR(255) DEFAULT NULL, photo VARCHAR(255) DEFAULT NULL, er_name VARCHAR(255) DEFAULT NULL, er_contact VARCHAR(255) DEFAULT NULL, status VARCHAR(255) DEFAULT NULL, empcode VARCHAR(255) DEFAULT NULL, INDEX IDX_9FB2BF62B79CACBD (emp_record_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE worker_logs (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, attendance_status_id INT DEFAULT NULL, type VARCHAR(255) DEFAULT NULL, login_date DATETIME DEFAULT NULL, logout_date DATETIME DEFAULT NULL, worker_log_id VARCHAR(255) DEFAULT NULL, overtime DOUBLE PRECISION DEFAULT NULL, overtime_approved TINYINT(1) DEFAULT NULL, undertime DOUBLE PRECISION DEFAULT NULL, rendered_hours DOUBLE PRECISION DEFAULT NULL, is_time_calculated TINYINT(1) NOT NULL, INDEX IDX_3B4A700DA76ED395 (user_id), INDEX IDX_3B4A700D1E73AA87 (attendance_status_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE audit_trail_log ADD CONSTRAINT FK_C15D73B9A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE blocks ADD CONSTRAINT FK_CEED957899091188 FOREIGN KEY (phase_id) REFERENCES phase (id)');
        $this->addSql('ALTER TABLE category ADD CONSTRAINT FK_64C19C1166D1F9C FOREIGN KEY (project_id) REFERENCES project (id)');
        $this->addSql('ALTER TABLE category ADD CONSTRAINT FK_64C19C17975B7E7 FOREIGN KEY (model_id) REFERENCES model (id)');
        $this->addSql('ALTER TABLE category ADD CONSTRAINT FK_64C19C199091188 FOREIGN KEY (phase_id) REFERENCES phase (id)');
        $this->addSql('ALTER TABLE category ADD CONSTRAINT FK_64C19C1EE2E1C8C FOREIGN KEY (blocks_id) REFERENCES blocks (id)');
        $this->addSql('ALTER TABLE category ADD CONSTRAINT FK_64C19C17E3C61F9 FOREIGN KEY (owner_id) REFERENCES owner (id)');
        $this->addSql('ALTER TABLE category ADD CONSTRAINT FK_64C19C1C400113F FOREIGN KEY (lots_id) REFERENCES lots (id)');
        $this->addSql('ALTER TABLE department ADD CONSTRAINT FK_CD1DE18A783E3463 FOREIGN KEY (manager_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE department ADD CONSTRAINT FK_CD1DE18A41859289 FOREIGN KEY (division_id) REFERENCES division (id)');
        $this->addSql('ALTER TABLE division ADD CONSTRAINT FK_10174714899FB366 FOREIGN KEY (director_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE emp_task ADD CONSTRAINT FK_D5130D71AAF1FD5F FOREIGN KEY (emp_project_id) REFERENCES employee_projects (id)');
        $this->addSql('ALTER TABLE emp_task ADD CONSTRAINT FK_D5130D71D7AF8720 FOREIGN KEY (worker_logs_id) REFERENCES worker_logs (id)');
        $this->addSql('ALTER TABLE employee_additional_records ADD CONSTRAINT FK_D178FCB2A796A818 FOREIGN KEY (employee_code_id) REFERENCES employee_records (id)');
        $this->addSql('ALTER TABLE employee_attachments ADD CONSTRAINT FK_C6E23BAB8C03F15C FOREIGN KEY (employee_id) REFERENCES employee_records (id)');
        $this->addSql('ALTER TABLE employee_projects ADD CONSTRAINT FK_CCACE263166D1F9C FOREIGN KEY (project_id) REFERENCES project (id)');
        $this->addSql('ALTER TABLE employee_projects ADD CONSTRAINT FK_CCACE2638C03F15C FOREIGN KEY (employee_id) REFERENCES employee_records (id)');
        $this->addSql('ALTER TABLE employee_records ADD CONSTRAINT FK_1CD10E4941859289 FOREIGN KEY (division_id) REFERENCES division (id)');
        $this->addSql('ALTER TABLE employee_records ADD CONSTRAINT FK_1CD10E49AE80F5DF FOREIGN KEY (department_id) REFERENCES department (id)');
        $this->addSql('ALTER TABLE employee_records ADD CONSTRAINT FK_1CD10E49A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE lots ADD CONSTRAINT FK_916087CEEE2E1C8C FOREIGN KEY (blocks_id) REFERENCES blocks (id)');
        $this->addSql('ALTER TABLE model ADD CONSTRAINT FK_D79572D9C54C8C93 FOREIGN KEY (type_id) REFERENCES model_types (id)');
        $this->addSql('ALTER TABLE phase ADD CONSTRAINT FK_B1BDD6CBE05F13C FOREIGN KEY (subdivision_id) REFERENCES subdivision (id)');
        $this->addSql('ALTER TABLE project ADD CONSTRAINT FK_2FB3D0EEE05F13C FOREIGN KEY (subdivision_id) REFERENCES subdivision (id)');
        $this->addSql('ALTER TABLE project ADD CONSTRAINT FK_2FB3D0EE535280F6 FOREIGN KEY (project_type_id) REFERENCES project_type (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6499D419299 FOREIGN KEY (user_type_id) REFERENCES user_type (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649D5946E10 FOREIGN KEY (emp_shift_id) REFERENCES shifts (id)');
        $this->addSql('ALTER TABLE worker ADD CONSTRAINT FK_9FB2BF62B79CACBD FOREIGN KEY (emp_record_id) REFERENCES employee_records (id)');
        $this->addSql('ALTER TABLE worker_logs ADD CONSTRAINT FK_3B4A700DA76ED395 FOREIGN KEY (user_id) REFERENCES worker (id)');
        $this->addSql('ALTER TABLE worker_logs ADD CONSTRAINT FK_3B4A700D1E73AA87 FOREIGN KEY (attendance_status_id) REFERENCES attendance_types (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE audit_trail_log DROP FOREIGN KEY FK_C15D73B9A76ED395');
        $this->addSql('ALTER TABLE blocks DROP FOREIGN KEY FK_CEED957899091188');
        $this->addSql('ALTER TABLE category DROP FOREIGN KEY FK_64C19C1166D1F9C');
        $this->addSql('ALTER TABLE category DROP FOREIGN KEY FK_64C19C17975B7E7');
        $this->addSql('ALTER TABLE category DROP FOREIGN KEY FK_64C19C199091188');
        $this->addSql('ALTER TABLE category DROP FOREIGN KEY FK_64C19C1EE2E1C8C');
        $this->addSql('ALTER TABLE category DROP FOREIGN KEY FK_64C19C17E3C61F9');
        $this->addSql('ALTER TABLE category DROP FOREIGN KEY FK_64C19C1C400113F');
        $this->addSql('ALTER TABLE department DROP FOREIGN KEY FK_CD1DE18A783E3463');
        $this->addSql('ALTER TABLE department DROP FOREIGN KEY FK_CD1DE18A41859289');
        $this->addSql('ALTER TABLE division DROP FOREIGN KEY FK_10174714899FB366');
        $this->addSql('ALTER TABLE emp_task DROP FOREIGN KEY FK_D5130D71AAF1FD5F');
        $this->addSql('ALTER TABLE emp_task DROP FOREIGN KEY FK_D5130D71D7AF8720');
        $this->addSql('ALTER TABLE employee_additional_records DROP FOREIGN KEY FK_D178FCB2A796A818');
        $this->addSql('ALTER TABLE employee_attachments DROP FOREIGN KEY FK_C6E23BAB8C03F15C');
        $this->addSql('ALTER TABLE employee_projects DROP FOREIGN KEY FK_CCACE263166D1F9C');
        $this->addSql('ALTER TABLE employee_projects DROP FOREIGN KEY FK_CCACE2638C03F15C');
        $this->addSql('ALTER TABLE employee_records DROP FOREIGN KEY FK_1CD10E4941859289');
        $this->addSql('ALTER TABLE employee_records DROP FOREIGN KEY FK_1CD10E49AE80F5DF');
        $this->addSql('ALTER TABLE employee_records DROP FOREIGN KEY FK_1CD10E49A76ED395');
        $this->addSql('ALTER TABLE lots DROP FOREIGN KEY FK_916087CEEE2E1C8C');
        $this->addSql('ALTER TABLE model DROP FOREIGN KEY FK_D79572D9C54C8C93');
        $this->addSql('ALTER TABLE phase DROP FOREIGN KEY FK_B1BDD6CBE05F13C');
        $this->addSql('ALTER TABLE project DROP FOREIGN KEY FK_2FB3D0EEE05F13C');
        $this->addSql('ALTER TABLE project DROP FOREIGN KEY FK_2FB3D0EE535280F6');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6499D419299');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649D5946E10');
        $this->addSql('ALTER TABLE worker DROP FOREIGN KEY FK_9FB2BF62B79CACBD');
        $this->addSql('ALTER TABLE worker_logs DROP FOREIGN KEY FK_3B4A700DA76ED395');
        $this->addSql('ALTER TABLE worker_logs DROP FOREIGN KEY FK_3B4A700D1E73AA87');
        $this->addSql('DROP TABLE attendance_types');
        $this->addSql('DROP TABLE audit_trail_log');
        $this->addSql('DROP TABLE blocks');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE department');
        $this->addSql('DROP TABLE division');
        $this->addSql('DROP TABLE emp_task');
        $this->addSql('DROP TABLE employee_additional_records');
        $this->addSql('DROP TABLE employee_attachments');
        $this->addSql('DROP TABLE employee_projects');
        $this->addSql('DROP TABLE employee_records');
        $this->addSql('DROP TABLE lots');
        $this->addSql('DROP TABLE model');
        $this->addSql('DROP TABLE model_types');
        $this->addSql('DROP TABLE options');
        $this->addSql('DROP TABLE owner');
        $this->addSql('DROP TABLE phase');
        $this->addSql('DROP TABLE project');
        $this->addSql('DROP TABLE project_type');
        $this->addSql('DROP TABLE shifts');
        $this->addSql('DROP TABLE subdivision');
        $this->addSql('DROP TABLE sync_connection');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE user_type');
        $this->addSql('DROP TABLE worker');
        $this->addSql('DROP TABLE worker_logs');
    }
}
