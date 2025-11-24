<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251121014055 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE overtime_request');
        $this->addSql('ALTER TABLE employee_overtime_request ADD emp_record_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE employee_overtime_request ADD CONSTRAINT FK_684E51EEB79CACBD FOREIGN KEY (emp_record_id) REFERENCES employee_records (id)');
        $this->addSql('CREATE INDEX IDX_684E51EEB79CACBD ON employee_overtime_request (emp_record_id)');
        $this->addSql('ALTER TABLE leave_request DROP updated_at, DROP updated_by, CHANGE emp_record_id emp_record_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE leave_request ADD CONSTRAINT FK_7DC8F778A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_7DC8F778A76ED395 ON leave_request (user_id)');
        $this->addSql('ALTER TABLE sub_modules ADD overtime_request LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE overtime_request (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, overtime_date DATE DEFAULT NULL, ot_hours VARCHAR(45) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, ot_reason TEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, status INT DEFAULT NULL, deleted INT DEFAULT NULL, created_at DATETIME DEFAULT NULL, created_by INT DEFAULT NULL, updated_at DATETIME DEFAULT NULL, updated_by INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE employee_overtime_request DROP FOREIGN KEY FK_684E51EEB79CACBD');
        $this->addSql('DROP INDEX IDX_684E51EEB79CACBD ON employee_overtime_request');
        $this->addSql('ALTER TABLE employee_overtime_request DROP emp_record_id');
        $this->addSql('ALTER TABLE leave_request DROP FOREIGN KEY FK_7DC8F778A76ED395');
        $this->addSql('DROP INDEX IDX_7DC8F778A76ED395 ON leave_request');
        $this->addSql('ALTER TABLE leave_request ADD updated_at DATETIME DEFAULT NULL, ADD updated_by INT DEFAULT NULL, CHANGE emp_record_id emp_record_id INT NOT NULL');
        $this->addSql('ALTER TABLE sub_modules DROP overtime_request');
    }
}
