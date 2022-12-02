//table for users
CREATE TABLE `users`
(
  `user_id` int(11) NOT NULL AUTO_INCREMENT ,
  `Username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
   `Phone_num` varchar(15) DEFAULT NULL,
   PRIMARY KEY(`user_id`)
 );
//table for sell_product
CREATE TABLE `sell_product`
(
  `product_id` int(11) NOT NULL AUTO_INCREMENT ,
  `product_title` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` LONGBLOB NOT NULL,  
  `upload_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `category` varchar(255) NOT NULL,
  `seller_id` int(11) NOT NULL ,
  PRIMARY KEY(`product_id`),
  FOREIGN KEY(`category`) references categories(`category`),
  FOREIGN KEY(`seller_id`) references users(`user_id`)
);
//table for categories
CREATE TABLE `categories`
(
  `category_id` int(11) NOT NULL AUTO_INCREMENT ,
  `category` varchar(255) NOT NULL,
   PRIMARY KEY(`category_id`)
 );
//table for contactdetails
CREATE TABLE `contactdetails`
(
  `id` int(11) NOT NULL AUTO_INCREMENT ,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `content` text NOT NULL,
   PRIMARY KEY(`id`)
 );