<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230330131159 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE commandes (id INT AUTO_INCREMENT NOT NULL, id_facture_id INT NOT NULL, produit_id_id INT NOT NULL, INDEX IDX_35D4282CDAA76EDF (id_facture_id), INDEX IDX_35D4282C4FD8F9C3 (produit_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE commandes ADD CONSTRAINT FK_35D4282CDAA76EDF FOREIGN KEY (id_facture_id) REFERENCES facture (id)');
        $this->addSql('ALTER TABLE commandes ADD CONSTRAINT FK_35D4282C4FD8F9C3 FOREIGN KEY (produit_id_id) REFERENCES produit (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commandes DROP FOREIGN KEY FK_35D4282CDAA76EDF');
        $this->addSql('ALTER TABLE commandes DROP FOREIGN KEY FK_35D4282C4FD8F9C3');
        $this->addSql('DROP TABLE commandes');
    }
}
