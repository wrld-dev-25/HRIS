<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20251124121500 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add user-based updated_by and optional updated_at to leave_request table';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE leave_request ADD updated_by INT DEFAULT NULL, ADD updated_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE leave_request ADD CONSTRAINT FK_LEAVE_REQUEST_UPDATED_BY_USER FOREIGN KEY (updated_by) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_LEAVE_REQUEST_UPDATED_BY ON leave_request (updated_by)');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE leave_request DROP FOREIGN KEY FK_LEAVE_REQUEST_UPDATED_BY_USER');
        $this->addSql('DROP INDEX IDX_LEAVE_REQUEST_UPDATED_BY ON leave_request');
        $this->addSql('ALTER TABLE leave_request DROP updated_by, DROP updated_at');
    }
}
