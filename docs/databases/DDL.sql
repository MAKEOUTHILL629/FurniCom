
-- -----------------------------------------------------
-- Table `mydb`.`identity_documents`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `identity_documents` (
  `id_identity_document` TINYINT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(75) NOT NULL,
  `abbreviation` VARCHAR(4) NOT NULL,
  PRIMARY KEY (`id_identity_document`),
  UNIQUE INDEX `name_UNIQUE` (`name` ASC) ,
  UNIQUE INDEX `abbreviation_UNIQUE` (`abbreviation` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`roles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `roles` (
  `id_role` TINYINT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(75) NOT NULL,
  `abbreviation` VARCHAR(4) NOT NULL,
  PRIMARY KEY (`id_role`),
  UNIQUE INDEX `name_UNIQUE` (`name` ASC) ,
  UNIQUE INDEX `abbreviation_UNIQUE` (`abbreviation` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`genres`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `genres` (
  `id_genre` TINYINT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(30) NOT NULL,
  `abbreviation` VARCHAR(4) NOT NULL,
  PRIMARY KEY (`id_genre`),
  UNIQUE INDEX `name_UNIQUE` (`name` ASC) ,
  UNIQUE INDEX `abbreviation_UNIQUE` (`abbreviation` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` INT NOT NULL AUTO_INCREMENT,
  `fk_role` TINYINT NOT NULL,
  `fk_genre` TINYINT NOT NULL,
  `fk_identity_document` TINYINT NOT NULL,
  `document_number` VARCHAR(20) NOT NULL,
  `first_names` VARCHAR(45) NOT NULL,
  `lastnames` VARCHAR(45) NOT NULL,
  `address` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `password` VARCHAR(75) NOT NULL,
  `active` TINYINT(1) NOT NULL,
  `created_at` TIMESTAMP NOT NULL,
  `updated_at` TIMESTAMP NOT NULL,
  PRIMARY KEY (`id_user`, `fk_role`, `fk_genre`, `fk_identity_document`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) ,
  INDEX `fk_users_identity_documents_idx` (`fk_identity_document` ASC) ,
  INDEX `fk_users_roles1_idx` (`fk_role` ASC) ,
  INDEX `fk_users_genres1_idx` (`fk_genre` ASC) ,
  CONSTRAINT `fk_users_identity_documents`
    FOREIGN KEY (`fk_identity_document`)
    REFERENCES `identity_documents` (`id_identity_document`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_roles1`
    FOREIGN KEY (`fk_role`)
    REFERENCES `roles` (`id_role`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_genres1`
    FOREIGN KEY (`fk_genre`)
    REFERENCES `genres` (`id_genre`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`categories`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `categories` (
  `id_category` TINYINT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `created_at` TIMESTAMP NOT NULL,
  `updated_at` TIMESTAMP NOT NULL,
  PRIMARY KEY (`id_category`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`products`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `products` (
  `id_product` INT NOT NULL AUTO_INCREMENT,
  `fk_category` TINYINT NOT NULL,
  `name` VARCHAR(100) NOT NULL,
  `description` TEXT NOT NULL,
  `stock` SMALLINT NOT NULL,
  `price` DECIMAL(10,2) NOT NULL,
  `created_at` TIMESTAMP NOT NULL,
  `updated_at` TIMESTAMP NOT NULL,
  PRIMARY KEY (`id_product`, `fk_category`),
  INDEX `fk_products_categories1_idx` (`fk_category` ASC) ,
  CONSTRAINT `fk_products_categories1`
    FOREIGN KEY (`fk_category`)
    REFERENCES `categories` (`id_category`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`shopping_carts`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `shopping_carts` (
  `id_shopping_cart` INT NOT NULL AUTO_INCREMENT,
  `fk_consumer` INT NOT NULL,
  `created_at` TIMESTAMP NOT NULL,
  `updated_at` TIMESTAMP NOT NULL,
  `purchased_products` SMALLINT NOT NULL,
  `subtotal` DECIMAL NOT NULL,
  PRIMARY KEY (`id_shopping_cart`, `fk_consumer`),
  INDEX `fk_shopping_carts_users1_idx` (`fk_consumer` ASC) ,
  CONSTRAINT `fk_shopping_carts_users1`
    FOREIGN KEY (`fk_consumer`)
    REFERENCES `users` (`id_user`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`orders`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `orders` (
  `id_order` INT NOT NULL AUTO_INCREMENT,
  `fk_shopping_cart` INT NOT NULL,
  `invoice_path` VARCHAR(100) NOT NULL,
  `total_purchase` DECIMAL NOT NULL,
  `payment` TINYINT(1) NOT NULL,
  `created_at` TIMESTAMP NOT NULL,
  `updated_at` TIMESTAMP NOT NULL,
  PRIMARY KEY (`id_order`, `fk_shopping_cart`),
  INDEX `fk_orders_shopping_carts1_idx` (`fk_shopping_cart` ASC) ,
  CONSTRAINT `fk_orders_shopping_carts1`
    FOREIGN KEY (`fk_shopping_cart`)
    REFERENCES `shopping_carts` (`id_shopping_cart`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`phone_numbers`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `phone_numbers` (
  `id_phone_number` INT NOT NULL AUTO_INCREMENT,
  `fk_user` INT NOT NULL,
  `number` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`id_phone_number`, `fk_user`),
  INDEX `fk_phone_numbers_users1_idx` (`fk_user` ASC) ,
  CONSTRAINT `fk_phone_numbers_users1`
    FOREIGN KEY (`fk_user`)
    REFERENCES `users` (`id_user`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`purchased_products`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `purchased_products` (
  `id_purchased_product` INT NOT NULL AUTO_INCREMENT,
  `fk_product` INT NOT NULL,
  `fk_shopping_cart` INT NOT NULL,
  `purchased_amount` SMALLINT NOT NULL,
  `created_at` TIMESTAMP NOT NULL,
  PRIMARY KEY (`id_purchased_product`, `fk_product`, `fk_shopping_cart`),
  INDEX `fk_purchased_products_products1_idx` (`fk_product` ASC) ,
  INDEX `fk_purchased_products_shopping_carts1_idx` (`fk_shopping_cart` ASC) ,
  CONSTRAINT `fk_purchased_products_products1`
    FOREIGN KEY (`fk_product`)
    REFERENCES `products` (`id_product`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_purchased_products_shopping_carts1`
    FOREIGN KEY (`fk_shopping_cart`)
    REFERENCES `shopping_carts` (`id_shopping_cart`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`product_pictures`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `product_pictures` (
  `id_product_picture` INT NOT NULL AUTO_INCREMENT,
  `fk_product` INT NOT NULL,
  `path` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id_product_picture`, `fk_product`),
  INDEX `fk_product_pictures_products1_idx` (`fk_product` ASC) ,
  CONSTRAINT `fk_product_pictures_products1`
    FOREIGN KEY (`fk_product`)
    REFERENCES `products` (`id_product`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;
