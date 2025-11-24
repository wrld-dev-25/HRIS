<?php
declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251124120000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE overtime_request (id INT UNSIGNED AUTO_INCREMENT NOT NULL, user_id INT UNSIGNED NOT NULL, overtime_date DATE NOT NULL, ot_hours INT NOT NULL, ot_reason LONGTEXT DEFAULT NULL, status TINYINT(1) NOT NULL DEFAULT 0, deleted TINYINT(1) NOT NULL DEFAULT 0, created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, created_by INT UNSIGNED DEFAULT NULL, updated_at DATETIME DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP, updated_by INT UNSIGNED DEFAULT NULL, INDEX idx_overtime_request_user_id (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE overtime_request ADD CONSTRAINT FK_OVERTIME_REQUEST_USER FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE overtime_request DROP FOREIGN KEY FK_OVERTIME_REQUEST_USER');
        $this->addSql('DROP TABLE overtime_request');
    }
}
