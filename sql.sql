CREATE DATABASE IF NOT EXISTS `fujia365_001` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci; 
USE fujia365_001;
CREATE TABLE `visitor_messages` (
`id` BIGINT NOT NULL AUTO_INCREMENT,
`name` VARCHAR(50) NULL COMMENT '姓名',
`email` VARCHAR(50) NULL COMMENT '邮件',
`comment` VARCHAR(255) NULL COMMENT '留言', PRIMARY KEY (`id`)
)
;

CREATE TABLE `categories` (
	`id` BIGINT(20) NOT NULL AUTO_INCREMENT COMMENT 'ID',
	`name` VARCHAR(50) NOT NULL COMMENT '分类名称',
	PRIMARY KEY (`id`),
	UNIQUE INDEX `name` (`name`)
)
COMMENT='产品分类'
COLLATE='utf8_general_ci'
ENGINE=InnoDB
AUTO_INCREMENT=1;

ALTER TABLE `visitor_messages`
	ADD COLUMN `create_date` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP AFTER `comment`;
	
CREATE TABLE `products` (
	`id` BIGINT(20) NOT NULL AUTO_INCREMENT COMMENT 'ID',
	`title` VARCHAR(50) NOT NULL COMMENT '产品名称',
	`image` VARCHAR(255) NULL DEFAULT NULL COMMENT '产品图片',
	`price` DOUBLE NOT NULL DEFAULT '0' COMMENT '产品价格',
	`list_price` DOUBLE NOT NULL DEFAULT '0' COMMENT '产品展示价格',
	`category` VARCHAR(50) NULL DEFAULT NULL COMMENT '产品分类',
	`description` VARCHAR(1000) NULL DEFAULT NULL COMMENT '产品描述',
	PRIMARY KEY (`id`),
	INDEX `FK_product_category` (`category`),
	CONSTRAINT `FK_product_category` FOREIGN KEY (`category`) REFERENCES `categories` (`name`)
)
COMMENT='产品表'
COLLATE='utf8_general_ci'
ENGINE=InnoDB
AUTO_INCREMENT=1;