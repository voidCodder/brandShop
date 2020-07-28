-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Июл 28 2020 г., 13:56
-- Версия сервера: 5.6.41
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `brandshop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id_category` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id_category`, `parent_id`, `name`, `status`) VALUES
(1, 0, 'Man', 1),
(2, 0, 'Women', 1),
(3, 0, 'Kids', 1),
(4, 0, 'Accessories', 1),
(6, 1, 'Jackets', 1),
(7, 1, 'T-Shirts', 1),
(8, 1, 'Shirts', 1),
(9, 1, 'Knitwear', 1),
(10, 1, 'Coats', 1),
(11, 1, 'Trousers', 1),
(12, 1, 'Jeans', 1),
(13, 1, 'Leisurewear', 1),
(14, 1, 'Beachwear', 1),
(15, 1, 'Suits', 1),
(16, 2, 'Dresses', 1),
(17, 2, 'Tops', 1),
(18, 2, 'Trousers', 1),
(19, 2, 'Skirts', 1),
(20, 2, 'Beachwear', 1),
(21, 2, 'Bikinis', 1),
(22, 2, 'Swimsuits', 1),
(23, 2, 'T-Shirts', 1),
(24, 2, 'Jeans', 1),
(25, 2, 'Blazers', 1),
(26, 3, 'Tops', 1),
(27, 3, 'Shorts & Skirts', 1),
(28, 3, 'Leggings & Pants', 1),
(29, 3, 'Dresses & Rompers', 1),
(30, 3, 'Sweaters & Hoodies', 1),
(31, 3, 'Jackets & Outerwear', 1),
(32, 3, 'Pajamas', 1),
(33, 3, 'Swimwear', 1),
(34, 4, 'Chains', 1),
(35, 4, 'Sunglasses', 1),
(36, 4, 'Small Leather Goods', 1),
(37, 4, 'Belts', 1),
(38, 4, 'Suiting Accessories', 1),
(39, 4, 'Hats', 1),
(40, 4, 'Scarves', 1),
(41, 4, 'Gloves', 1),
(42, 4, 'Jewelry', 1),
(43, 4, 'Hosiery', 1),
(44, 4, 'Tech Accessories', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id_good` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `price` double NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(4) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id_good`, `id_category`, `name`, `brand`, `description`, `price`, `image`, `status`) VALUES
(1, 6, 'Bomber Jacket', 'BALMAIN', 'A luxe layer that will last beyond one season, this black bomber jacket from Balmain is as versatile as it is comfortable and cool. Finished with the brand\'s signature silver-tone buttons for slick attention-to-detail, it features a boxy silhouette and a contrast white logo on the back that lends instant brand recognition.', 1630, '1', 1),
(2, 6, 'Distressed Denim Jacket', 'BALMAIN', 'Vintage-inspired in light blue, this denim jacket from Balmain is distressed for a youthful and contemporary finish. With a classic pointed collar and a boxy silhouette, it has plenty of styling potential for casual and off-duty.', 975, '2', 1),
(3, 6, 'Quilted Shipton Vest', 'Burberry', 'An indulgent choice in black, this quilted vest from Burberry features a slight surface sheen and characteristic check lining. We love how its contrast pockets and logo patch at the nape lend a slightly sporty twist to classic styling.', 440, '3', 1),
(4, 6, 'SST Track Jacket with Cotton', 'ADIDAS ORIGINALS', 'Jet black coloring with minimal branding informs this track jacket from adidas Originals. Made with cotton for durability and styled with a zipped front for versatility, it\'s comfortable and credible for running sprints.', 69, '4', 1),
(5, 24, 'The Stiletto Skinny Jeans', 'CURRENT/ELLIOTT', 'The perfect cut makes \"The Stiletto\" skinny jeans from Current/Elliott an essential for any denim arsenal. A lighter weight and just the right amount of stretch are ideal for wearing through all four seasons.', 225, '5', 1),
(6, 27, 'Floral Tumbling Shorts', 'Kid Girl', 'Built for care-free cartwheels and playground practicality, these floral tumbling shorts are a summer staple.', 7, '1', 1),
(7, 37, 'Leather Belt', 'PHILIPP PLEIN', 'Elevate your accessory edit with this butter-soft leather belt from Philipp Plein - a luxe choice with plenty of styling potential for casual and off-duty dressing.\r\n', 279, '7', 1),
(8, 37, 'La Ceinture Leather Belt', 'JACQUEMUS', 'Made from supple leather for added practicality, this brown woven belt from Jacquemus will finish any outfit on a high note. With a round buckle and minimal branding, wear it next to blue denim or linen shorts for effortless cool.', 200, '8', 1),
(9, 6, 'Hargrave Zipped Jacket', 'Burberry', 'In navy blue with cool logo branding, this zipped jacket is a smart investment from Burberry. Contemporary, sporty yet versatile with a boxy silhouette, it promises comfort and layering ease.', 595, '1', 1),
(10, 6, 'Hargrave Zipped Jacket', 'Burberry', 'In navy blue with cool logo branding, this zipped jacket is a smart investment from Burberry. Contemporary, sporty yet versatile with a boxy silhouette, it promises comfort and layering ease.', 595, '11', 1),
(11, 6, 'Hargrave Zipped Jacket', 'Burberry', 'In navy blue with cool logo branding, this zipped jacket is a smart investment from Burberry. Contemporary, sporty yet versatile with a boxy silhouette, it promises comfort and layering ease.', 605, '1', 1),
(12, 6, 'Hargrave Zipped Jacket', 'Burberry', 'In navy blue with cool logo branding, this zipped jacket is a smart investment from Burberry. Contemporary, sporty yet versatile with a boxy silhouette, it promises comfort and layering ease.', 575, '2', 1),
(13, 6, 'Hargrave Zipped Jacket', 'Burberry', 'In navy blue with cool logo branding, this zipped jacket is a smart investment from Burberry. Contemporary, sporty yet versatile with a boxy silhouette, it promises comfort and layering ease.', 755, '3', 1),
(14, 6, 'Hargrave Zipped Jacket', 'Burberry', 'In navy blue with cool logo branding, this zipped jacket is a smart investment from Burberry. Contemporary, sporty yet versatile with a boxy silhouette, it promises comfort and layering ease.', 1, '4', 1),
(15, 6, 'Hargrave Zipped Jacket', 'Burberry', 'In navy blue with cool logo branding, this zipped jacket is a smart investment from Burberry. Contemporary, sporty yet versatile with a boxy silhouette, it promises comfort and layering ease.', 605, '5', 1),
(16, 6, 'Hargrave Zipped Jacket', 'Burberry', 'In navy blue with cool logo branding, this zipped jacket is a smart investment from Burberry. Contemporary, sporty yet versatile with a boxy silhouette, it promises comfort and layering ease.', 660, '6', 1),
(17, 6, 'Hargrave Zipped Jacket', 'Burberry', 'In matte black with cool logo branding, this zipped jacket is a smart investment from Burberry. Contemporary, sporty yet versatile with a boxy silhouette, it promises comfort and layering ease.', 595, '7', 1),
(18, 6, 'Zipped Bomber Jacket with Knit Wool Trim', 'ami', 'Simple and eternally stylish, this navy bomber jacket from Hugo transitions effortlessly throughout the seasons. We love how soft ribbed knit trim lends a luxe finish to its sporty silhouette.', 395, '8', 1),
(19, 6, 'Distressed Denim Jacket', 'Balmain', 'Vintage-inspired in light blue, this denim jacket from Balmain is distressed for a youthful and contemporary finish. With a classic pointed collar and a boxy silhouette, it has plenty of styling potential for casual and off-duty.', 975, '10', 1),
(20, 7, 'Gately Printed Cotton T-Shirt', 'Burberry', 'Pristine white coloring with a boxy silhouette informs this printed cotton t-shirt from Burberry. We love how the bold logo on the front lends brand recognition and adds slick attention-to-detail.', 295, '7', 1),
(21, 7, 'Gately Printed Cotton T-Shirt', 'Burberry', 'Pristine white coloring with a boxy silhouette informs this printed cotton t-shirt from Burberry. We love how the bold logo on the front lends brand recognition and adds slick attention-to-detail.', 299, '1', 1),
(22, 7, 'Gately Printed Cotton T-Shirt', 'Burberry', 'Pristine white coloring with a boxy silhouette informs this printed cotton t-shirt from Burberry. We love how the bold logo on the front lends brand recognition and adds slick attention-to-detail.', 285, '2', 1),
(23, 7, 'Gately Printed Cotton T-Shirt', 'Burberry', 'Pristine white coloring with a boxy silhouette informs this printed cotton t-shirt from Burberry. We love how the bold logo on the front lends brand recognition and adds slick attention-to-detail.', 370, '3', 1),
(24, 7, 'Gately Printed Cotton T-Shirt', 'Burberry', 'Pristine white coloring with a boxy silhouette informs this printed cotton t-shirt from Burberry. We love how the bold logo on the front lends brand recognition and adds slick attention-to-detail.', 480, '4', 1),
(25, 7, 'Gately Printed Cotton T-Shirt', 'Burberry', 'Pristine white coloring with a boxy silhouette informs this printed cotton t-shirt from Burberry. We love how the bold logo on the front lends brand recognition and adds slick attention-to-detail.', 299, '5', 1),
(26, 7, 'Gately Printed Cotton T-Shirt', 'Burberry', 'Pristine white coloring with a boxy silhouette informs this printed cotton t-shirt from Burberry. We love how the bold logo on the front lends brand recognition and adds slick attention-to-detail.', 325, '6', 1),
(27, 7, 'Parker Cotton T-Shirt', 'Burberry', 'In neutral grey cotton with a round neck, this t-shirt is a simple yet stylish choice from Burberry. The slim fit is comfortable and flattering while the embroidered logo on the chest lends brand recognition.', 170, '8', 1),
(28, 7, 'Cotton Tee', 'ami', 'A cool staple in cream, this cotton tee is a versatile choice from ami. With a boxy silhouette and a round neckline, wear it next to classic denim or smart tailoring - it works both ways.', 65, '11', 1),
(29, 7, 'Cotton Tee', 'ami', 'A cool staple in charcoal black, this cotton tee is a versatile choice from ami. With a boxy silhouette and a round neckline, wear it next to classic denim or smart tailoring - it works both ways.', 65, '9', 1),
(30, 7, 'Printed Cotton T-Shirt', 'True Religion', 'In white with a bold print, this cotton tee is a versatile topper from True Religion. Short sleeves and a boxy fit keep it easy to layer with everything and anything from your wardrobe.', 55, '1', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id_order` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `datetime_create` datetime NOT NULL,
  `date_payment` datetime DEFAULT NULL,
  `date_modification` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `comment` text,
  `id_order_status` int(11) NOT NULL DEFAULT '0',
  `user_name` varchar(45) NOT NULL,
  `user_phone` varchar(45) NOT NULL,
  `user_address` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id_order`, `id_user`, `datetime_create`, `date_payment`, `date_modification`, `comment`, `id_order_status`, `user_name`, `user_phone`, `user_address`) VALUES
(2, 9, '0000-00-00 00:00:00', NULL, '2019-06-02 16:24:22', NULL, 1, '', '', ''),
(3, 13, '2019-06-04 15:09:39', NULL, '2019-06-04 12:09:39', NULL, 0, 'sadfg', '895126523', 'sdfhj'),
(4, 13, '2019-06-04 15:09:54', NULL, '2019-06-04 12:09:54', NULL, 0, 'sadfg', '895126523', 'sdfhj'),
(5, 13, '2019-06-04 15:11:57', NULL, '2019-06-04 12:12:22', NULL, 0, 'sadfg', '895126523', 'sdfhj'),
(6, 13, '2019-06-04 15:14:14', NULL, '2019-06-04 12:14:14', NULL, 0, '', '', ''),
(7, 13, '2019-06-04 15:17:54', NULL, '2019-06-04 12:17:54', NULL, 0, 'sadf', '853', 'asdfg'),
(8, 13, '2019-06-04 15:19:13', NULL, '2019-06-04 12:19:13', NULL, 0, 'sadf', '853', 'asdfg'),
(9, 13, '2019-06-04 15:19:39', NULL, '2019-06-04 12:19:39', NULL, 0, '', '', ''),
(10, 13, '2019-06-04 15:21:17', NULL, '2019-06-04 12:21:17', NULL, 0, 'asdfg', '86534', 'sdf'),
(11, 13, '2019-06-04 16:54:22', NULL, '2019-06-04 13:54:22', NULL, 0, 'asd', '000', 'sdf'),
(12, 13, '2019-06-09 20:12:16', NULL, '2019-06-09 17:12:16', NULL, 0, 'q', '+7-911-297-00-79', 'q'),
(13, 17, '2020-07-28 12:55:15', NULL, '2020-07-28 09:55:15', NULL, 0, '', '', ''),
(14, 17, '2020-07-28 12:56:41', NULL, '2020-07-28 09:56:41', NULL, 0, '', '', ''),
(15, 17, '2020-07-28 12:57:20', NULL, '2020-07-28 09:57:20', NULL, 0, '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `order_status`
--

CREATE TABLE `order_status` (
  `id_order_status` int(11) NOT NULL,
  `order_status_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `order_status`
--

INSERT INTO `order_status` (`id_order_status`, `order_status_name`) VALUES
(0, 'not paid yet'),
(1, 'paid');

-- --------------------------------------------------------

--
-- Структура таблицы `purchase`
--

CREATE TABLE `purchase` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `good_id` int(11) NOT NULL,
  `price` double DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `size` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `purchase`
--

INSERT INTO `purchase` (`id`, `order_id`, `good_id`, `price`, `amount`, `size`) VALUES
(2, 2, 25, 1, 2, 'S'),
(16, 10, 25, 299, 1, 'S'),
(17, 10, 29, 65, 1, 'XS'),
(18, 11, 25, 299, 1, 'S'),
(19, 12, 25, 299, 1, 'S'),
(20, 13, 5, 225, 1, 'M'),
(21, 14, 3, 440, 1, 'S'),
(22, 15, 10, 595, 1, 'S');

--
-- Триггеры `purchase`
--
DELIMITER $$
CREATE TRIGGER `after_insert_purchase` AFTER INSERT ON `purchase` FOR EACH ROW BEGIN
IF (
	SELECT `count` 
	FROM `stock`
	WHERE (`good_id` = NEW.`good_id`
	AND `size` = NEW.`size`)
	) >= NEW.`amount`  
	THEN
		UPDATE `stock` 
		SET `count` = `count` - NEW.`amount`
		WHERE (
			`good_id` = NEW.`good_id`
			AND
            `size` = NEW.`size`
        );
END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Структура таблицы `stock`
--

CREATE TABLE `stock` (
  `id` int(11) NOT NULL,
  `good_id` int(11) NOT NULL,
  `size` varchar(50) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `stock`
--

INSERT INTO `stock` (`id`, `good_id`, `size`, `count`) VALUES
(3, 25, 'S', 2),
(4, 26, 'S', 4),
(5, 27, 'S', 4),
(6, 28, 'M', 4),
(7, 29, 'XS', 4),
(8, 20, 'S', 4),
(9, 21, 'S', 4),
(10, 22, 'S', 4),
(11, 23, 'M', 4),
(12, 24, 'XS', 4),
(13, 13, 'S', 4),
(14, 14, 'S', 4),
(15, 15, 'S', 4),
(16, 16, 'M', 4),
(17, 17, 'XS', 4),
(18, 13, 'M', 4),
(19, 14, 'XS', 4),
(20, 15, 'XS', 4),
(21, 16, 'XXL', 4),
(22, 17, 'S', 4),
(23, 29, 'S', 4),
(24, 19, 'M', 5),
(25, 5, 'M', 2),
(26, 6, 'M', 6),
(27, 5, 'S', 3),
(28, 6, 'S', 6),
(29, 1, 'M', 2),
(30, 1, 'S', 2),
(31, 2, 'S', 2),
(32, 3, 'S', 1),
(33, 4, 'S', 2),
(34, 9, 'S', 2),
(35, 10, 'S', 1),
(36, 11, 'S', 2),
(37, 12, 'S', 2),
(38, 18, 'S', 2),
(39, 30, 'S', 2);

--
-- Триггеры `stock`
--
DELIMITER $$
CREATE TRIGGER `after_insert_stock` AFTER INSERT ON `stock` FOR EACH ROW BEGIN
	IF (
		SELECT count(`good_id`) 
        FROM `stock`
		WHERE (`good_id` = NEW.`good_id`
		AND `count` > 0)
    ) > 0
	THEN
		UPDATE `goods` 
		SET `status` = 1
		WHERE `id_good` = NEW.`good_id`;
    END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_update_stock` AFTER UPDATE ON `stock` FOR EACH ROW BEGIN
	IF (
		SELECT count(`good_id`) 
        FROM `stock`
		WHERE (`good_id` = NEW.`good_id`
		AND `count` > 0)
    ) > 0
	THEN
		UPDATE `goods` 
		SET `status` = 1
		WHERE `id_good` = NEW.`good_id`;
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `user_last_action` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id_user`, `user_email`, `user_password`, `user_name`, `phone`, `address`, `user_last_action`) VALUES
(9, 'w', 'c4ca4238a0b923820dcc509a6f75849b', 'sdf', 'dsa', 'ads', '2019-05-25 18:57:27'),
(10, 'qw', 'c4ca4238a0b923820dcc509a6f75849b', '', '', '', '2019-05-25 19:41:51'),
(11, 'q2', 'c81e728d9d4c2f636f067f89cc14862c', '', '', '', '2019-05-25 19:47:33'),
(12, 'q23', 'c81e728d9d4c2f636f067f89cc14862c', '', '', '', '2019-05-25 19:47:49'),
(13, 'q', 'c4ca4238a0b923820dcc509a6f75849b', '', '', '', '2019-05-25 19:53:39'),
(14, 'q233', '37693cfc748049e45d87b8c7d8b9aacd', '', '', '', '2019-06-04 10:47:56'),
(15, 'qa', 'c4ca4238a0b923820dcc509a6f75849b', '', '', '', '2020-07-27 10:01:49'),
(16, 'd', 'c4ca4238a0b923820dcc509a6f75849b', 'fdsf', '+7-911-297-00-79', '', '2020-07-27 16:15:03'),
(17, 'f', '8fa14cdd754f91cc6554c9e71929cce7', '', '', '', '2020-07-27 20:03:42');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_category`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id_good`),
  ADD KEY `id_category` (`id_category`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_order_status` (`id_order_status`);

--
-- Индексы таблицы `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`id_order_status`);

--
-- Индексы таблицы `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`),
  ADD KEY `good_id` (`good_id`),
  ADD KEY `purchase_ibfk_1_idx` (`order_id`);

--
-- Индексы таблицы `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `good_id` (`good_id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id_good` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `goods`
--
ALTER TABLE `goods`
  ADD CONSTRAINT `goods_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `categories` (`id_category`);

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`id_order_status`) REFERENCES `order_status` (`id_order_status`),
  ADD CONSTRAINT `orders_ibfk_4` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ограничения внешнего ключа таблицы `purchase`
--
ALTER TABLE `purchase`
  ADD CONSTRAINT `purchase_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id_order`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `purchase_ibfk_2` FOREIGN KEY (`good_id`) REFERENCES `goods` (`id_good`);

--
-- Ограничения внешнего ключа таблицы `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `stock_ibfk_1` FOREIGN KEY (`good_id`) REFERENCES `goods` (`id_good`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
