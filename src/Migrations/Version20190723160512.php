<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190723160512 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE avis (id INT AUTO_INCREMENT NOT NULL, question1 INT NOT NULL, question2 INT NOT NULL, question3 INT NOT NULL, question4 INT NOT NULL, question5 INT NOT NULL, question6 INT NOT NULL, question7 INT NOT NULL, question8 INT NOT NULL, question9 INT NOT NULL, question10 INT NOT NULL, question11 INT NOT NULL, question12 INT NOT NULL, question13 INT NOT NULL, question14 INT NOT NULL, question15 INT NOT NULL, question16 INT NOT NULL, question17 INT NOT NULL, question18 INT NOT NULL, question19 INT NOT NULL, question20 INT NOT NULL, question21 INT NOT NULL, question22 INT NOT NULL, question23 INT NOT NULL, question24 INT NOT NULL, question25 INT NOT NULL, question26 INT NOT NULL, question27 INT NOT NULL, question28 INT NOT NULL, nom VARCHAR(255) DEFAULT NULL, prenom VARCHAR(255) DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, telephone INT DEFAULT NULL, question33 INT NOT NULL, question34 INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE avis');
    }
}
