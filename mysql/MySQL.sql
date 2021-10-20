CREATE DATABASE IF NOT EXISTS crud CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE `crud`.`categories` ( `id` INT(10) NOT NULL AUTO_INCREMENT , `name` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL , `created` TIMESTAMP(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) , `updated` TIMESTAMP(6) on update CURRENT_TIMESTAMP(6) NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM;

CREATE TABLE `crud`.`products` ( `id` INT(10) NOT NULL AUTO_INCREMENT , `category_id` INT(5) NOT NULL , `name` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL , `created` TIMESTAMP(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) , `updated` TIMESTAMP(6) on update CURRENT_TIMESTAMP(6) NOT NULL , PRIMARY KEY (`id`), foreign key (category_id) REFERENCES categories(id)) ENGINE = MyISAM;