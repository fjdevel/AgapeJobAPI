<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210310053252 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UNIQ_8D93D6497BA2F5EB ON user');
        $this->addSql('ALTER TABLE user ADD apellido VARCHAR(255) DEFAULT NULL, ADD estado VARCHAR(1) DEFAULT NULL, ADD fecha_creacion DATETIME DEFAULT NULL, ADD fecha_modificacion DATETIME DEFAULT NULL, ADD id_empresa INT DEFAULT NULL, ADD id_estudiante INT DEFAULT NULL, CHANGE api_token nombre VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `user` ADD api_token VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, DROP nombre, DROP apellido, DROP estado, DROP fecha_creacion, DROP fecha_modificacion, DROP id_empresa, DROP id_estudiante');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D6497BA2F5EB ON `user` (api_token)');
    }
}
