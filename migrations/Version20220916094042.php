<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220916094042 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE car (id INT AUTO_INCREMENT NOT NULL, merk_id INT NOT NULL, motor_id INT NOT NULL, kleur VARCHAR(255) NOT NULL, gewicht INT NOT NULL, brandstof VARCHAR(255) NOT NULL, top_snel_heid INT NOT NULL, bouwjaar DATE NOT NULL, automaat TINYINT(1) NOT NULL, aantal_versnellingen INT NOT NULL, aantal_deuren INT NOT NULL, prijs INT NOT NULL, INDEX IDX_773DE69DD901B33D (merk_id), INDEX IDX_773DE69D80D58D71 (motor_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE merk (id INT AUTO_INCREMENT NOT NULL, naam VARCHAR(255) NOT NULL, land_opgericht VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE motor (id INT AUTO_INCREMENT NOT NULL, naam VARCHAR(255) NOT NULL, vermogen INT NOT NULL, aantal_cylinders INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE car ADD CONSTRAINT FK_773DE69DD901B33D FOREIGN KEY (merk_id) REFERENCES merk (id)');
        $this->addSql('ALTER TABLE car ADD CONSTRAINT FK_773DE69D80D58D71 FOREIGN KEY (motor_id) REFERENCES motor (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE car DROP FOREIGN KEY FK_773DE69DD901B33D');
        $this->addSql('ALTER TABLE car DROP FOREIGN KEY FK_773DE69D80D58D71');
        $this->addSql('DROP TABLE car');
        $this->addSql('DROP TABLE merk');
        $this->addSql('DROP TABLE motor');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
