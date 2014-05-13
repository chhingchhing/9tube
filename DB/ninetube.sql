SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `ninetube` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `ninetube` ;

-- -----------------------------------------------------
-- Table `ninetube`.`ninetube_categories`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ninetube`.`ninetube_categories` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `category` VARCHAR(150) NULL,
  `description` VARCHAR(250) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ninetube`.`ninetube_movies`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ninetube`.`ninetube_movies` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(150) NULL,
  `description` VARCHAR(200) NULL,
  `link` VARCHAR(200) NULL,
  `category_id` INT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_9tube_movies_9tube_categories1_idx` (`category_id` ASC),
  CONSTRAINT `fk_9tube_movies_9tube_categories1`
    FOREIGN KEY (`category_id`)
    REFERENCES `ninetube`.`ninetube_categories` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ninetube`.`ninetube_menu_positions`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ninetube`.`ninetube_menu_positions` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `position` VARCHAR(100) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ninetube`.`ninetube_menus`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ninetube`.`ninetube_menus` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NULL,
  `alias` VARCHAR(100) NULL,
  `status` TINYINT NULL DEFAULT 0,
  `parent_id` INT NULL DEFAULT 0,
  `position_id` INT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_9tube_menus_9tube_menu_positions1_idx` (`position_id` ASC),
  CONSTRAINT `fk_9tube_menus_9tube_menu_positions1`
    FOREIGN KEY (`position_id`)
    REFERENCES `ninetube`.`ninetube_menu_positions` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ninetube`.`ninetube_contents`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ninetube`.`ninetube_contents` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `content` TEXT NULL,
  `title` VARCHAR(100) NULL,
  `menu_id` INT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_9tube_contents_9tube_menus1_idx` (`menu_id` ASC),
  CONSTRAINT `fk_9tube_contents_9tube_menus1`
    FOREIGN KEY (`menu_id`)
    REFERENCES `ninetube`.`ninetube_menus` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ninetube`.`ninetube_images`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ninetube`.`ninetube_images` (
  `source` VARCHAR(100) NOT NULL,
  `thumb` VARCHAR(100) NOT NULL,
  `mark` VARCHAR(100) NULL,
  `content_id` INT NULL,
  INDEX `fk_9tube_images_9tube_contents1_idx` (`content_id` ASC),
  CONSTRAINT `fk_9tube_images_9tube_contents1`
    FOREIGN KEY (`content_id`)
    REFERENCES `ninetube`.`ninetube_contents` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ninetube`.`ninetube_ads`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ninetube`.`ninetube_ads` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(100) NULL,
  `desccription` VARCHAR(200) NULL,
  `company` VARCHAR(150) NULL,
  `address` VARCHAR(150) NULL,
  `phone` VARCHAR(50) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ninetube`.`ninetube_users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ninetube`.`ninetube_users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(100) NULL,
  `password` VARCHAR(255) NULL,
  `deleted` TINYINT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ninetube`.`ninetube_banners`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ninetube`.`ninetube_banners` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `source` VARCHAR(100) NULL,
  `ads_name` VARCHAR(150) NULL,
  `ads_id` INT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_9tube_banners_9tube_ads1_idx` (`ads_id` ASC),
  CONSTRAINT `fk_9tube_banners_9tube_ads1`
    FOREIGN KEY (`ads_id`)
    REFERENCES `ninetube`.`ninetube_ads` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ninetube`.`ninetube_singers`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ninetube`.`ninetube_singers` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `singer_name` VARCHAR(150) NULL,
  `mark` VARCHAR(200) NULL,
  `production` VARCHAR(150) NULL,
  `gender` VARCHAR(150) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ninetube`.`ninetube_songs`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ninetube`.`ninetube_songs` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(150) NULL,
  `description` VARCHAR(200) NULL,
  `link` VARCHAR(200) NULL,
  `singer_id` INT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_9tube_songs_9tube_singers1_idx` (`singer_id` ASC),
  CONSTRAINT `fk_9tube_songs_9tube_singers1`
    FOREIGN KEY (`singer_id`)
    REFERENCES `ninetube`.`ninetube_singers` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ninetube`.`ninetube_user_profile`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ninetube`.`ninetube_user_profile` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `firstname` VARCHAR(100) NULL,
  `lastname` VARCHAR(255) NULL,
  `gender` VARCHAR(10) NULL,
  `email` VARCHAR(100) NULL,
  `phone` VARCHAR(45) NULL,
  `pic_profile` VARCHAR(100) NULL,
  `address` VARCHAR(250) NULL,
  `user_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_9tube_user_profile_9tube_users1_idx` (`user_id` ASC),
  CONSTRAINT `fk_9tube_user_profile_9tube_users1`
    FOREIGN KEY (`user_id`)
    REFERENCES `ninetube`.`ninetube_users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
