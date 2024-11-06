<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241106160619 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE acteurs ADD id INT AUTO_INCREMENT NOT NULL, ADD id_film VARCHAR(50) NOT NULL, ADD date_de_naissance DATE DEFAULT NULL, DROP dateDeNaissance, CHANGE nom nom VARCHAR(155) NOT NULL, CHANGE prenom prenom VARCHAR(155) NOT NULL, CHANGE role role VARCHAR(500) DEFAULT NULL, DROP PRIMARY KEY, ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE films ADD id INT AUTO_INCREMENT NOT NULL, CHANGE titre titre VARCHAR(155) NOT NULL, DROP PRIMARY KEY, ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE realisateurs ADD id INT AUTO_INCREMENT NOT NULL, CHANGE nom nom VARCHAR(155) NOT NULL, CHANGE prenom prenom VARCHAR(155) NOT NULL, DROP PRIMARY KEY, ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE utilisateurs ADD id INT AUTO_INCREMENT NOT NULL, CHANGE nom nom VARCHAR(155) NOT NULL, CHANGE prenom prenom VARCHAR(155) NOT NULL, CHANGE email email VARCHAR(155) NOT NULL, CHANGE mdp mdp VARCHAR(50) NOT NULL, DROP PRIMARY KEY, ADD PRIMARY KEY (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE messenger_messages');
        $this->addSql('ALTER TABLE acteurs MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX `PRIMARY` ON acteurs');
        $this->addSql('ALTER TABLE acteurs ADD dateDeNaissance DATE DEFAULT \'NULL\', DROP id, DROP id_film, DROP date_de_naissance, CHANGE nom nom VARCHAR(155) DEFAULT \'NULL\', CHANGE prenom prenom VARCHAR(155) DEFAULT \'NULL\', CHANGE role role VARCHAR(500) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE acteurs ADD PRIMARY KEY (id_acteur)');
        $this->addSql('ALTER TABLE films MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX `PRIMARY` ON films');
        $this->addSql('ALTER TABLE films DROP id, CHANGE titre titre VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE films ADD PRIMARY KEY (id_film)');
        $this->addSql('ALTER TABLE realisateurs MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX `PRIMARY` ON realisateurs');
        $this->addSql('ALTER TABLE realisateurs DROP id, CHANGE nom nom VARCHAR(155) DEFAULT \'NULL\', CHANGE prenom prenom VARCHAR(155) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE realisateurs ADD PRIMARY KEY (id_real)');
        $this->addSql('ALTER TABLE utilisateurs MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX `PRIMARY` ON utilisateurs');
        $this->addSql('ALTER TABLE utilisateurs DROP id, CHANGE nom nom VARCHAR(155) DEFAULT \'NULL\', CHANGE prenom prenom VARCHAR(155) DEFAULT \'NULL\', CHANGE email email VARCHAR(155) DEFAULT \'NULL\', CHANGE mdp mdp VARCHAR(50) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE utilisateurs ADD PRIMARY KEY (id_user)');
    }
}
