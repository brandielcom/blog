<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200603053526 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('CREATE TEMPORARY TABLE __temp__post AS SELECT id, title, body, created_at, updated_at FROM post');
        $this->addSql('DROP TABLE post');
        $this->addSql('CREATE TABLE post (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, title VARCHAR(255) NOT NULL COLLATE BINARY, body CLOB NOT NULL COLLATE BINARY, created_at DATETIME NOT NULL --(DC2Type:datetime_immutable)
        , updated_at DATETIME NOT NULL --(DC2Type:datetime_immutable)
        , deleted_at DATETIME DEFAULT NULL, uuid CHAR(36) NOT NULL --(DC2Type:uuid)
        , slug VARCHAR(256) NOT NULL)');
        $this->addSql('INSERT INTO post (id, title, body, created_at, updated_at) SELECT id, title, body, created_at, updated_at FROM __temp__post');
        $this->addSql('DROP TABLE __temp__post');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_5A8A6C8DD17F50A6 ON post (uuid)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_5A8A6C8D989D9B62 ON post (slug)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('DROP INDEX UNIQ_5A8A6C8DD17F50A6');
        $this->addSql('DROP INDEX UNIQ_5A8A6C8D989D9B62');
        $this->addSql('CREATE TEMPORARY TABLE __temp__post AS SELECT id, title, body, created_at, updated_at FROM post');
        $this->addSql('DROP TABLE post');
        $this->addSql('CREATE TABLE post (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, title VARCHAR(255) NOT NULL, body CLOB NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL)');
        $this->addSql('INSERT INTO post (id, title, body, created_at, updated_at) SELECT id, title, body, created_at, updated_at FROM __temp__post');
        $this->addSql('DROP TABLE __temp__post');
    }
}
