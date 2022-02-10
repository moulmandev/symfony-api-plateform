<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220210102753 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE shop (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, picture_url VARCHAR(255) DEFAULT NULL, longitude DOUBLE PRECISION NOT NULL, latitude DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE shop_product (shop_id INT NOT NULL, product_id INT NOT NULL, INDEX IDX_D07944874D16C4DD (shop_id), INDEX IDX_D07944874584665A (product_id), PRIMARY KEY(shop_id, product_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE shop_product ADD CONSTRAINT FK_D07944874D16C4DD FOREIGN KEY (shop_id) REFERENCES shop (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE shop_product ADD CONSTRAINT FK_D07944874584665A FOREIGN KEY (product_id) REFERENCES product (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE shop_product DROP FOREIGN KEY FK_D07944874D16C4DD');
        $this->addSql('DROP TABLE shop');
        $this->addSql('DROP TABLE shop_product');
        $this->addSql('ALTER TABLE product CHANGE name name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE picture_url picture_url VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
