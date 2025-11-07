<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240902100352 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE main_modules (id INT AUTO_INCREMENT NOT NULL, submodule_id INT DEFAULT NULL, project LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', humanres LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', administration LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', UNIQUE INDEX UNIQ_DAFCEA3E3BAD1EA8 (submodule_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sub_modules (id INT AUTO_INCREMENT NOT NULL, daily_time_record LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', subdivision LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', division LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', department LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', phase LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', owner LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', models LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', model_types LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', emp_settings LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', shifts LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', projects LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', emp_project LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', emp_list LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE main_modules ADD CONSTRAINT FK_DAFCEA3E3BAD1EA8 FOREIGN KEY (submodule_id) REFERENCES sub_modules (id)');
        $this->addSql('ALTER TABLE model_types ADD additional_options TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD is_worker TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE user_type ADD main_module_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user_type ADD CONSTRAINT FK_F65F1BE08F741233 FOREIGN KEY (main_module_id) REFERENCES main_modules (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_F65F1BE08F741233 ON user_type (main_module_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user_type DROP FOREIGN KEY FK_F65F1BE08F741233');
        $this->addSql('ALTER TABLE main_modules DROP FOREIGN KEY FK_DAFCEA3E3BAD1EA8');
        $this->addSql('DROP TABLE main_modules');
        $this->addSql('DROP TABLE sub_modules');
        $this->addSql('ALTER TABLE model_types DROP additional_options');
        $this->addSql('ALTER TABLE user DROP is_worker');
        $this->addSql('DROP INDEX UNIQ_F65F1BE08F741233 ON user_type');
        $this->addSql('ALTER TABLE user_type DROP main_module_id');
    }
}
