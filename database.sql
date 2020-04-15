
CREATE TABLE `witcher`.`characters` ( `id` INT NOT NULL AUTO_INCREMENT , 
                                `name` VARCHAR(255) NOT NULL , 
                                `slug` VARCHAR(255) NOT NULL ,
                                'description' VARCHAR(1000) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `witcher`.`races` ( `raceid` INT NOT NULL AUTO_INCREMENT , 
                                `racename` VARCHAR(255) NOT NULL , 
                                `created_at` TIMESTAMP NOT NULL , PRIMARY KEY (`raceid`)) ENGINE = InnoDB;

                                ALTER TABLE `characters` ADD `race_id` INT NOT NULL AFTER `description`;

                                ALTER TABLE `characters` ADD `char_image` VARCHAR(255) NOT NULL AFTER `description`;