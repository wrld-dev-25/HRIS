<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250220051513 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE division DROP FOREIGN KEY FK_10174714899FB366');
        $this->addSql('ALTER TABLE division ADD CONSTRAINT FK_10174714899FB366 FOREIGN KEY (director_id) REFERENCES employee_records (id)');
        $this->addSql('ALTER TABLE holiday_config ADD archived TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE leave_policy CHANGE name name VARCHAR(255) DEFAULT NULL, CHANGE year year VARCHAR(255) DEFAULT NULL, CHANGE gender gender VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE yearly_holiday ADD archived TINYINT(1) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE division DROP FOREIGN KEY FK_10174714899FB366');
        $this->addSql('ALTER TABLE division ADD CONSTRAINT FK_10174714899FB366 FOREIGN KEY (director_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE holiday_config DROP archived');
        $this->addSql('ALTER TABLE leave_policy CHANGE name name VARCHAR(255) NOT NULL, CHANGE year year VARCHAR(255) NOT NULL, CHANGE gender gender VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE yearly_holiday DROP archived');
    }
}
