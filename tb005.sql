-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2021-06-15 18:13:45
-- 服务器版本： 5.5.29
-- PHP 版本： 5.6.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `tb005`
--

-- --------------------------------------------------------

--
-- 表的结构 `ordershop`
--

CREATE TABLE `ordershop` (
  `id` int(11) NOT NULL,
  `orderno` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shopjson` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `ordershop`
--

INSERT INTO `ordershop` (`id`, `orderno`, `Description`, `shopjson`) VALUES
(15, 'bbbb', '456', '[{\"img\":\"http:\\/\\/www.tb005.com\\/mister.gif\",\"name\":\"Mister Potato Chips 75g\",\"piec\":\"$2.50\",\"number\":\"3\"},{\"img\":\"http:\\/\\/www.tb005.com\\/maggicup.gif\",\"name\":\"Maggi Hot Cup\",\"piec\":\"$2.99\",\"number\":\"4\"},{\"img\":\"http:\\/\\/www.tb005.com\\/maggipacket.jpg\",\"name\":\"Maggi 6packs\",\"piec\":\"$5.35\",\"number\":\"3\"},{\"img\":\"http:\\/\\/www.tb005.com\\/fullmilk.gif\",\"name\":\"Full Cream Milk\\n6 x 200ml\",\"piec\":\"$8.94\",\"number\":\"7\"},{\"img\":\"http:\\/\\/www.tb005.com\\/lowmilk.gif\",\"name\":\"Low Fat Milk\\n6 x 200ml\",\"piec\":\"$8.50\",\"number\":\"5\"},{\"img\":\"http:\\/\\/www.tb005.com\\/oat.gif\",\"name\":\"Munchy\'s Oat Crunch 416g\",\"piec\":\"$8.79\",\"number\":\"7\"}]'),
(14, 'aaaa', '789', '[{\"img\":\"http:\\/\\/www.tb005.com\\/orange.jpg\",\"name\":\"Orange\",\"piec\":\"$1.20\\/each\",\"number\":\"4\"},{\"img\":\"http:\\/\\/www.tb005.com\\/strawberry.gif\",\"name\":\"Strawberry 500g\",\"piec\":\"$9.99\",\"number\":\"6\"},{\"img\":\"http:\\/\\/www.tb005.com\\/apple.jpg\",\"name\":\"Apple\",\"piec\":\"$2.10\\/each\",\"number\":\"4\"},{\"img\":\"http:\\/\\/www.tb005.com\\/oil3.gif\",\"name\":\"Canola Cooking Oil\\n5L\",\"piec\":\"$23.99\",\"number\":\"5\"},{\"img\":\"http:\\/\\/www.tb005.com\\/butter.gif\",\"name\":\"Unsalted Butter 199g\",\"piec\":\"$5.90\",\"number\":\"10\"},{\"img\":\"http:\\/\\/www.tb005.com\\/mini.gif\",\"name\":\"Magnum Mini Chocolate\",\"piec\":\"$10.49\",\"number\":\"1\"},{\"img\":\"http:\\/\\/www.tb005.com\\/yogurt.gif\",\"name\":\"Nestle Yogurt 470g\",\"piec\":\"$7.99\",\"number\":\"1\"},{\"img\":\"http:\\/\\/www.tb005.com\\/squid.gif\",\"name\":\"Fresh Squid\",\"piec\":\"$30.80\\/kg\",\"number\":\"1\"},{\"img\":\"http:\\/\\/www.tb005.com\\/crab.gif\",\"name\":\"Fresh Crab\",\"piec\":\"$28.00\\/kg\",\"number\":\"2\"},{\"img\":\"http:\\/\\/www.tb005.com\\/corn.gif\",\"name\":\"Corn\",\"piec\":\"$6.99\",\"number\":\"1\"},{\"img\":\"http:\\/\\/www.tb005.com\\/fruit.gif\",\"name\":\"Fruit Cocktail\",\"piec\":\"$7.99\",\"number\":\"3\"},{\"img\":\"http:\\/\\/www.tb005.com\\/mush.gif\",\"name\":\"Button Mushroom\",\"piec\":\"$6.99\",\"number\":\"1\"},{\"img\":\"http:\\/\\/www.tb005.com\\/tuna.gif\",\"name\":\"Fish Food Can Mockup\",\"piec\":\"$7.99\",\"number\":\"3\"},{\"img\":\"http:\\/\\/www.tb005.com\\/coriander.gif\",\"name\":\"Coriander 100g\",\"piec\":\"$1.90\",\"number\":\"1\"},{\"img\":\"http:\\/\\/www.tb005.com\\/cauliflower.gif\",\"name\":\"Cauliflower 500g\",\"piec\":\"$6.90\",\"number\":\"1\"},{\"img\":\"http:\\/\\/www.tb005.com\\/lettuce.gif\",\"name\":\"Lettuce 100pcs\",\"piec\":\"$1.70\",\"number\":\"1\"},{\"img\":\"http:\\/\\/www.tb005.com\\/lemongrass.gif\",\"name\":\"Lemongrass 100g\",\"piec\":\"$2.10\",\"number\":\"2\"},{\"img\":\"http:\\/\\/www.tb005.com\\/jasmine1.gif\",\"name\":\"Jasmine Sunwhite Rice 10kg\",\"piec\":\"$37.88\",\"number\":\"1\"},{\"img\":\"http:\\/\\/www.tb005.com\\/basmathi.gif\",\"name\":\"Basmati Rice 5kg\",\"piec\":\"$35.00\",\"number\":\"5\"},{\"img\":\"http:\\/\\/www.tb005.com\\/tiger.gif\",\"name\":\"Tiger Biscuit 100g\",\"piec\":\"$2.80\",\"number\":\"2\"},{\"img\":\"http:\\/\\/www.tb005.com\\/jacob.gif\",\"name\":\"Jacaobs Crackers 700g\",\"piec\":\"$13.70\",\"number\":\"1\"},{\"img\":\"http:\\/\\/www.tb005.com\\/oat.gif\",\"name\":\"Munchy\'s Oat Crunch 416g\",\"piec\":\"$8.79\",\"number\":\"1\"},{\"img\":\"http:\\/\\/www.tb005.com\\/maggipacket.jpg\",\"name\":\"Maggi 6packs\",\"piec\":\"$5.35\",\"number\":\"1\"},{\"img\":\"http:\\/\\/www.tb005.com\\/maggicup.gif\",\"name\":\"Maggi Hot Cup\",\"piec\":\"$2.99\",\"number\":\"1\"},{\"img\":\"http:\\/\\/www.tb005.com\\/chips.gif\",\"name\":\"Cottage Fries 100g\",\"piec\":\"$3.99\",\"number\":\"2\"},{\"img\":\"http:\\/\\/www.tb005.com\\/mister.gif\",\"name\":\"Mister Potato Chips 75g\",\"piec\":\"$2.50\",\"number\":\"2\"}]');

--
-- 转储表的索引
--

--
-- 表的索引 `ordershop`
--
ALTER TABLE `ordershop`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `ordershop`
--
ALTER TABLE `ordershop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
