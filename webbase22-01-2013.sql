/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50527
Source Host           : localhost:3306
Source Database       : webbase

Target Server Type    : MYSQL
Target Server Version : 50527
File Encoding         : 65001

Date: 2013-01-22 02:18:57
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `article`
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shortcontent` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `images` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thumbs` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `visit` int(11) DEFAULT NULL,
  `keyword` varchar(125) COLLATE utf8_unicode_ci DEFAULT NULL,
  `typeid` int(11) DEFAULT NULL,
  `catid` int(11) DEFAULT NULL,
  `createdate` datetime DEFAULT NULL,
  `createuser` int(11) DEFAULT NULL,
  `modifydate` datetime DEFAULT NULL,
  `active` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `article_type` (`typeid`),
  KEY `cat_type` (`catid`),
  CONSTRAINT `article_type` FOREIGN KEY (`typeid`) REFERENCES `articletype` (`id`),
  CONSTRAINT `cat_type` FOREIGN KEY (`catid`) REFERENCES `catpost` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of article
-- ----------------------------

-- ----------------------------
-- Table structure for `articletype`
-- ----------------------------
DROP TABLE IF EXISTS `articletype`;
CREATE TABLE `articletype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of articletype
-- ----------------------------

-- ----------------------------
-- Table structure for `block_static`
-- ----------------------------
DROP TABLE IF EXISTS `block_static`;
CREATE TABLE `block_static` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `showtitle` tinyint(4) DEFAULT NULL,
  `active` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`,`code`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of block_static
-- ----------------------------
INSERT INTO block_static VALUES ('26', 'home', 'Home', '<div id=\"ctl00_ContentPlaceHolder1_panel1\" style=\"margin: 0px; padding: 0px; color: rgb(79, 107, 134); font-family: Tahoma, \'Lucida Grande\', Verdana, \'sans serif\'; font-size: small; line-height: 26px; text-align: center;\">\r\n	<div class=\"TitleVisa_NoiDung_kocachnhieu\" style=\"margin: 3px 0px 10px 35px; padding: 0px; text-align: left;\">\r\n		Every tourists visiting to Vietnam always want to look for all relevant and reliable information before arrival in Vietnam. And every tourists pay notice to all things involving visas such as visa rules, procedures, application, fees, and so on. There are three main types of Vietnam Visa including tourist visas, diplomatic and official visas and business visas. Many tourists think that getting Vietnam visa is quite complicated then they make up their mind cancelling their trip to Vietnam. But it is not true in this case, you can get Vietnam visa easier and more convenient than ever.&nbsp;<br />\r\n		<b>Vietsmile Travel</b>&nbsp;will provide you all updating information related to Vietnam visa by&nbsp;<b>the simplest, fastest as well as cheapest way</b>. Tourists will be assured about every service when coming to Vietsmile Travel with our criteria of&nbsp;<b>simple</b>,&nbsp;<b>secure</b>,&nbsp;<b>reliable</b>&nbsp;and&nbsp;<b>effective</b>&nbsp;and&nbsp;<b>timely</b>.</div>\r\n</div>\r\n<div class=\"TitleVisa_C1\" style=\"margin: 15px 0px 0px; padding: 0px; font-size: larger; font-weight: 700; color: rgb(71, 149, 245); font-family: Tahoma, \'Lucida Grande\', Verdana, \'sans serif\';\">\r\n	How to get visa approval?</div>\r\n<div id=\"how_to_get\" style=\"margin: 0px 0px 0px 20px; padding: 0px 10px 30px; background-image: url(http://www.smiletravelvietnam.com/images/content_bg.jpg); color: rgb(79, 107, 134); font-family: Tahoma, \'Lucida Grande\', Verdana, \'sans serif\'; font-size: small; line-height: 26px; text-align: center; background-repeat: no-repeat no-repeat;\">\r\n	<p id=\"step_one\" style=\"margin: 5px 0px 0px 25px; padding: 0px 15px 15px; text-align: justify; height: 20px;\">\r\n		Fill in the&nbsp;<a href=\"http://www.smiletravelvietnam.com/secure/visaform\" style=\"text-decoration: initial; color: rgb(5, 86, 230);\">secure online form</a>. * only takes a couple of minutes.</p>\r\n	<p id=\"step_two\" style=\"margin: 0px 0px 0px 60px; padding: 0px 15px 15px; text-align: justify; height: 40px;\">\r\n		<br />\r\n		Confirm the information for processing your visa and pay the service fee.</p>\r\n	<p id=\"step_three\" style=\"margin: 0px 0px 0px 100px; padding: 0px 15px 15px; text-align: justify;\">\r\n		<br />\r\n		Get the &quot;Visa approval letter&quot; by email within 2 working days and pick up your visa at airports.</p>\r\n</div>\r\n<div id=\"ctl00_ContentPlaceHolder1_panel_vn\" style=\"margin: 0px; padding: 0px; color: rgb(79, 107, 134); font-family: Tahoma, \'Lucida Grande\', Verdana, \'sans serif\'; font-size: small; line-height: 26px; text-align: center;\">\r\n	<div class=\"TitleVisa_C1\" style=\"margin: 15px 0px 0px; padding: 0px; font-size: larger; font-weight: 700; text-align: left; color: rgb(71, 149, 245);\">\r\n		Vietnam visa fee</div>\r\n	<div class=\"TitleVisa_NoiDung\" style=\"margin: 3px 0px 10px 75px; padding: 0px; text-align: left;\">\r\n		<table align=\"center\" border=\"1\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-collapse: collapse; width: 888px;\">\r\n			<tbody>\r\n				<tr>\r\n					<td align=\"center\" class=\"Linkfrom\" colspan=\"2\" rowspan=\"2\" style=\"margin: 0px; padding: 0px;\" valign=\"top\">\r\n						<b>Types of visa</b></td>\r\n					<td align=\"center\" class=\"Linkfrom\" colspan=\"4\" style=\"margin: 0px; padding: 0px; height: 6px;\" valign=\"top\">\r\n						<b>Normal proscessing - 2-3 working days</b></td>\r\n					<td align=\"center\" class=\"Linkfrom\" rowspan=\"2\" style=\"margin: 0px; padding: 0px; width: 142px;\">\r\n						<b>Urgent fee (1 working day)</b></td>\r\n					<td align=\"center\" class=\"Linkfrom\" rowspan=\"2\" style=\"margin: 0px; padding: 0px;\" width=\"40%\">\r\n						<b>Stamping fee</b></td>\r\n				</tr>\r\n				<tr>\r\n					<td align=\"center\" class=\"Linkfrom\" style=\"margin: 0px; padding: 0px; width: 122px; height: 17px;\" valign=\"top\">\r\n						1 pax</td>\r\n					<td align=\"center\" class=\"Linkfrom\" style=\"margin: 0px; padding: 0px; width: 130px; height: 17px;\">\r\n						2 - 3 pax</td>\r\n					<td align=\"center\" class=\"Linkfrom\" style=\"margin: 0px; padding: 0px; width: 98px; height: 17px;\">\r\n						4 - 5 pax</td>\r\n					<td align=\"center\" class=\"Linkfrom\" style=\"margin: 0px; padding: 0px; width: 98px; height: 17px;\">\r\n						Up 6 pax</td>\r\n				</tr>\r\n				<tr>\r\n					<td align=\"center\" class=\"smalltextb\" rowspan=\"2\" style=\"margin: 0px; padding: 0px; width: 123px;\">\r\n						Single entry</td>\r\n					<td align=\"center\" class=\"smalltextb\" style=\"margin: 0px; padding: 0px; height: 17px; width: 107px;\">\r\n						01 month</td>\r\n					<td align=\"center\" class=\"smalltextb\" style=\"margin: 0px; padding: 0px; height: 17px; width: 122px;\">\r\n						$20</td>\r\n					<td align=\"center\" class=\"smalltextb\" style=\"margin: 0px; padding: 0px; height: 17px; width: 130px;\">\r\n						$19</td>\r\n					<td align=\"center\" class=\"smalltextb\" style=\"margin: 0px; padding: 0px; width: 98px; height: 17px;\">\r\n						$16</td>\r\n					<td align=\"center\" class=\"smalltextb\" style=\"margin: 0px; padding: 0px; width: 98px; height: 17px;\">\r\n						$14</td>\r\n					<td align=\"center\" class=\"smalltextb\" style=\"margin: 0px; padding: 0px; height: 17px; width: 142px;\">\r\n						$20</td>\r\n					<td align=\"center\" class=\"smalltextb\" style=\"margin: 0px; padding: 0px; height: 17px; width: 60px;\">\r\n						$25</td>\r\n				</tr>\r\n				<tr>\r\n					<td align=\"center\" class=\"smalltextb\" style=\"margin: 0px; padding: 0px; width: 107px;\">\r\n						03 months</td>\r\n					<td align=\"center\" class=\"smalltextb\" style=\"margin: 0px; padding: 0px; width: 122px;\">\r\n						$34</td>\r\n					<td align=\"center\" class=\"smalltextb\" style=\"margin: 0px; padding: 0px; width: 130px;\">\r\n						$33</td>\r\n					<td align=\"center\" class=\"smalltextb\" style=\"margin: 0px; padding: 0px; width: 98px;\">\r\n						$31</td>\r\n					<td align=\"center\" class=\"smalltextb\" style=\"margin: 0px; padding: 0px; width: 98px;\">\r\n						$28</td>\r\n					<td align=\"center\" class=\"smalltextb\" style=\"margin: 0px; padding: 0px; width: 142px;\">\r\n						$20</td>\r\n					<td align=\"center\" class=\"smalltextb\" style=\"margin: 0px; padding: 0px; height: 17px; width: 60px;\">\r\n						$25</td>\r\n				</tr>\r\n				<tr>\r\n					<td align=\"center\" class=\"smalltextb\" rowspan=\"2\" style=\"margin: 0px; padding: 0px; width: 123px;\">\r\n						Multiple entry</td>\r\n					<td align=\"center\" class=\"smalltextb\" style=\"margin: 0px; padding: 0px; width: 107px;\">\r\n						01 month</td>\r\n					<td align=\"center\" class=\"smalltextb\" style=\"margin: 0px; padding: 0px; width: 122px;\">\r\n						$23</td>\r\n					<td align=\"center\" class=\"smalltextb\" style=\"margin: 0px; padding: 0px; width: 130px;\">\r\n						$22</td>\r\n					<td align=\"center\" class=\"smalltextb\" style=\"margin: 0px; padding: 0px; width: 98px;\">\r\n						$19</td>\r\n					<td align=\"center\" class=\"smalltextb\" style=\"margin: 0px; padding: 0px; width: 98px;\">\r\n						$16</td>\r\n					<td align=\"center\" class=\"smalltextb\" style=\"margin: 0px; padding: 0px; width: 142px;\">\r\n						$20</td>\r\n					<td align=\"center\" class=\"smalltextb\" style=\"margin: 0px; padding: 0px; height: 17px; width: 60px;\">\r\n						$50</td>\r\n				</tr>\r\n				<tr>\r\n					<td align=\"center\" class=\"smalltextb\" style=\"margin: 0px; padding: 0px; width: 107px;\">\r\n						03 months</td>\r\n					<td align=\"center\" class=\"smalltextb\" style=\"margin: 0px; padding: 0px; width: 122px;\">\r\n						$40</td>\r\n					<td align=\"center\" class=\"smalltextb\" style=\"margin: 0px; padding: 0px; width: 130px;\">\r\n						$38</td>\r\n					<td align=\"center\" class=\"smalltextb\" style=\"margin: 0px; padding: 0px; width: 98px;\">\r\n						$36</td>\r\n					<td align=\"center\" class=\"smalltextb\" style=\"margin: 0px; padding: 0px; width: 98px;\">\r\n						$30</td>\r\n					<td align=\"center\" class=\"smalltextb\" style=\"margin: 0px; padding: 0px; width: 142px;\">\r\n						$20</td>\r\n					<td align=\"center\" class=\"smalltextb\" style=\"margin: 0px; padding: 0px; height: 17px; width: 60px;\">\r\n						$50<br />\r\n						&nbsp;</td>\r\n				</tr>\r\n			</tbody>\r\n		</table>\r\n	</div>\r\n</div>\r\n<p style=\"text-align: center;\">\r\n	<a href=\"http://localhost:8080/basecodeigniter/visa/visaform\"><img alt=\"Vietnam visa\" src=\"http://www.smiletravelvietnam.com/images/booknow4.png\" /></a></p>\r\n', '1', '1');
INSERT INTO block_static VALUES ('27', 'payment', 'Payment Guidelines', '<p style=\"text-align: center;\">\r\n	<a href=\"http://www.smiletravelvietnam.com/payment\" rel=\"nofollow,noindex\">We accept VISA, MasterCard, American Express, JCB, ...</a></p>\r\n<p style=\"text-align: center;\">\r\n	<img alt=\"Payment\" src=\"http://www.smiletravelvietnam.com/images/visa.gif\" width=\"140\" /></p>\r\n', '1', '1');

-- ----------------------------
-- Table structure for `catpost`
-- ----------------------------
DROP TABLE IF EXISTS `catpost`;
CREATE TABLE `catpost` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `parent` int(11) DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `active` enum('active','unactive') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'active',
  PRIMARY KEY (`id`),
  KEY `parent` (`parent`),
  CONSTRAINT `parent` FOREIGN KEY (`parent`) REFERENCES `catpost` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of catpost
-- ----------------------------

-- ----------------------------
-- Table structure for `contact`
-- ----------------------------
DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `typeid` int(11) DEFAULT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `maps` text COLLATE utf8_unicode_ci,
  `yahoo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `default` tinyint(4) DEFAULT NULL,
  `active` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `type` (`typeid`),
  CONSTRAINT `type` FOREIGN KEY (`typeid`) REFERENCES `contacttype` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of contact
-- ----------------------------

-- ----------------------------
-- Table structure for `contacttype`
-- ----------------------------
DROP TABLE IF EXISTS `contacttype`;
CREATE TABLE `contacttype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contactname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of contacttype
-- ----------------------------

-- ----------------------------
-- Table structure for `core_config`
-- ----------------------------
DROP TABLE IF EXISTS `core_config`;
CREATE TABLE `core_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sitename` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sitetitle` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sitekeyword` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `siteDescription` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sitelogo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sitefavico` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emailsubject` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emailto` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `smtphost` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `smtpaccount` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `smtppassword` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `smtpport` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of core_config
-- ----------------------------
INSERT INTO core_config VALUES ('15', 'Sitename', 'Trang chu ', 'press enter keyword', 'press enter description', '', '', 'SiteName Report', 'info@sitename.com', 'smtp.gmail.com', 'admin', 'admin123', '465');

-- ----------------------------
-- Table structure for `country`
-- ----------------------------
DROP TABLE IF EXISTS `country`;
CREATE TABLE `country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of country
-- ----------------------------
INSERT INTO country VALUES ('1', 'English', '1');
INSERT INTO country VALUES ('2', 'Italia', '1');
INSERT INTO country VALUES ('3', 'Viet Nam', '1');
INSERT INTO country VALUES ('5', 'Laos', '1');

-- ----------------------------
-- Table structure for `typeofvisa`
-- ----------------------------
DROP TABLE IF EXISTS `typeofvisa`;
CREATE TABLE `typeofvisa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of typeofvisa
-- ----------------------------
INSERT INTO typeofvisa VALUES ('1', 'dd', '1');
INSERT INTO typeofvisa VALUES ('2', 'nnn', '1');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pword` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dateofbirth` date DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avata` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO user VALUES ('4', 'xxxxxxxxxx', 'qqqqqqq', '', 'Male', '1970-01-01', '', '', '', '', '', '', '1');
INSERT INTO user VALUES ('5', 'xxxxxxxxxx', 'qqqqqqq', '', 'Male', '1970-01-01', '', '', '', '', '', '', '1');
INSERT INTO user VALUES ('6', 'xxxxxxxxxx', 'qqqqqqq', '', 'Male', '1970-01-01', '', '', '', '', '', '', '1');
INSERT INTO user VALUES ('7', 'xxxxxxxxxx', 'qqqqqqq', '', 'Male', '1970-01-01', '', '', '', '', '', '', '1');
INSERT INTO user VALUES ('8', 'xxxxxxxxxx', 'qqqqqqq', '', 'Male', '1970-01-01', '', '', '', '', '', '', '1');
INSERT INTO user VALUES ('9', 'xxxxxxxxxx', 'qqqqqqq', '', 'Male', '1970-01-01', '', '', '', '', '', '', '1');
INSERT INTO user VALUES ('10', 'xxxxxxxxxx', 'qqqqqqq', '', 'Male', '1970-01-01', '', '', '', '', '', '', '1');
INSERT INTO user VALUES ('11', 'xxxxxxxxxx', 'qqqqqqq', '', 'Male', '1970-01-01', '', '', '', '', '', '', '1');
INSERT INTO user VALUES ('12', 'xxxxxxxxxx', 'qqqqqqq', '', 'Male', '1970-01-01', '', '', '', '', '', '', '1');
INSERT INTO user VALUES ('14', 'xxxxxxxxxx', 'qqqqqqq', '', 'Male', '1970-01-01', '', '', '', '', '', '', '1');
INSERT INTO user VALUES ('15', 'xxxxxxxxxx', 'qqqqqqq', '', 'Male', '1970-01-01', '', '', '', '', '', '', '1');
INSERT INTO user VALUES ('16', 'xxxxxxxxxx', 'qqqqqqq', '', 'Male', '1970-01-01', '', '', '', '', '', '', '1');
INSERT INTO user VALUES ('17', 'xxxxxxxxxx', 'qqqqqqq', '', 'Male', '1970-01-01', '', '', '', '', '', '', '1');
INSERT INTO user VALUES ('18', 'xxxxxxxxxx', 'qqqqqqq', '', 'Male', '1970-01-01', '', '', '', '', '', '', '1');
INSERT INTO user VALUES ('19', 'xxxxxxxxxx', 'qqqqqqq', '', 'Male', '1970-01-01', '', '', '', '', '', '', '1');
INSERT INTO user VALUES ('20', 'xxxxxxxxxx', 'qqqqqqq', '', 'Male', '1970-01-01', '', '', '', '', '', '', '1');
INSERT INTO user VALUES ('25', 'xxxxxxxxxx', 'qqqqqqq', '', 'Male', '1970-01-01', '', '', '', '', '', '', '1');
INSERT INTO user VALUES ('26', 'xxxxxxxxxx', 'qqqqqqq', '', 'Male', '1970-01-01', '', '', '', '', '', '', '1');
INSERT INTO user VALUES ('28', 'xxxxxxxxxx', 'qqqqqqq', '', 'Male', '1970-01-01', '', '', '', '', '', '', '1');
INSERT INTO user VALUES ('29', 'xxxxxxxxxx', 'qqqqqqq', '', 'Male', '1970-01-01', '', '', '', '', '', '', '1');
INSERT INTO user VALUES ('30', 'xxxxxxxxxx', 'qqqqqqq', '', 'Male', '1970-01-01', '', '', '', '', '', '', '1');
INSERT INTO user VALUES ('31', 'xxxxxxxxxx', 'qqqqqqq', '', 'Male', '1970-01-01', '', '', '', '', '', '', '1');
INSERT INTO user VALUES ('32', 'xxxxxxxxxx', 'qqqqqqq', '', 'Male', '1970-01-01', '', '', '', '', '', '', '1');
INSERT INTO user VALUES ('33', 'xxxxxxxxxx', 'qqqqqqq', '', 'Male', '1970-01-01', '', '', '', '', '', '', '1');
INSERT INTO user VALUES ('34', 'xxxxxxxxxx', 'qqqqqqq', '', 'Male', '1970-01-01', '', '', '', '', '', '', '1');
INSERT INTO user VALUES ('35', 'xxxxxxxxxx', 'qqqqqqq', '', 'Male', '1970-01-01', '', '', '', '', '', '', '1');
INSERT INTO user VALUES ('36', 'xxxxxxxxxx', 'qqqqqqq', '', 'Male', '1970-01-01', '', '', '', '', '', '', '1');
INSERT INTO user VALUES ('37', 'xxxxxxxxxx', 'qqqqqqq', '', 'Male', '1970-01-01', '', '', '', '', '', '', '1');
INSERT INTO user VALUES ('38', 'xxxxxxxxxx', 'qqqqqqq', '', 'Male', '1970-01-01', '', '', '', '', '', '', '1');
INSERT INTO user VALUES ('39', 'xxxxxxxxxx', 'qqqqqqq', '', 'Male', '1970-01-01', '', '', '', '', '', '', '1');
INSERT INTO user VALUES ('40', 'xxxxxxxxxx', 'qqqqqqq', '', 'Male', '1970-01-01', '', '', '', '', '', '', '1');
INSERT INTO user VALUES ('41', 'xxxxxxxxxx', 'qqqqqqq', '', 'Male', '1970-01-01', '', '', '', '', '', '', '1');
INSERT INTO user VALUES ('42', 'xxxxxxxxxx', 'qqqqqqq', '', 'Male', '1970-01-01', '', '', '', '', '', '', '1');
INSERT INTO user VALUES ('43', 'xxxxxxxxxx', 'qqqqqqq', '', 'Male', '1970-01-01', '', '', '', '', '', '', '1');
INSERT INTO user VALUES ('44', 'xxxxxxxxxx', 'qqqqqqq', '', 'Male', '1970-01-01', '', '', '', '', '', '', '1');
INSERT INTO user VALUES ('45', 'xxxxxxxxxx', 'qqqqqqq', '', 'Male', '1970-01-01', '', '', '', '', '', '', '1');
INSERT INTO user VALUES ('46', 'xxxxxxxxxx', 'qqqqqqq', '', 'Male', '1970-01-01', '', '', '', '', '', '', '1');
INSERT INTO user VALUES ('47', 'xxxxxxxxxx', 'qqqqqqq', '', 'Male', '1970-01-01', '', '', '', '', '', '', '1');
INSERT INTO user VALUES ('48', 'xxxxxxxxxx', 'qqqqqqq', '', 'Male', '1970-01-01', '', '', '', '', '', '', '1');
INSERT INTO user VALUES ('49', 'xxxxxxxxxx', 'qqqqqqq', '', 'Male', '1970-01-01', '', '', '', '', '', '', '1');
INSERT INTO user VALUES ('50', 'xxxxxxxxxx', 'qqqqqqq', '', 'Male', '1970-01-01', '', '', '', '', '', '', '1');
INSERT INTO user VALUES ('51', 'xxxxxxxxxx', 'qqqqqqq', '', 'Male', '1970-01-01', '', '', '', '', '', '', '1');
INSERT INTO user VALUES ('52', 'xxxxxxxxxx', 'qqqqqqq', '', 'Male', '1970-01-01', '', '', '', '', '', '', '1');
INSERT INTO user VALUES ('53', 'xxxxxxxxxx', 'qqqqqqq', '', 'Male', '1970-01-01', '', '', '', '', '', '', '1');
INSERT INTO user VALUES ('54', 'zzzz', 'qqqqqqq', '', 'Male', '1970-01-01', '', '', '', '', '', '', '1');
INSERT INTO user VALUES ('55', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '0');
INSERT INTO user VALUES ('56', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '0');
INSERT INTO user VALUES ('57', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '0');

-- ----------------------------
-- Table structure for `visa_manager`
-- ----------------------------
DROP TABLE IF EXISTS `visa_manager`;
CREATE TABLE `visa_manager` (
  `code` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `number_visa` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dateofbirth` date DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_in` datetime DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `rush` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pay_date` date DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dispatch` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `country` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `note` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_create` date DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of visa_manager
-- ----------------------------
INSERT INTO visa_manager VALUES ('v2000', '1', 'Trinh Duy Luong', null, 'duyluongnd@gmail.com', '2013-01-11 11:22:43', '77', 'vvvv', '2013-01-11', 'pay done', '5445', '<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width: 500px;\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"width: 85px;\">\r\n				dads</td>\r\n			<td style=\"width: 402px;\">\r\n				asdadad</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width: 85px;\">\r\n				dadaad</td>\r\n			<td style=\"width: 402px;\">\r\n				sdasd</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width: 85px;\">\r\n				adad</td>\r\n			<td style=\"width: 402px;\">\r\n				asdada</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	&nbsp;</p>\r\n', null, 'dada', '2013-01-11');
INSERT INTO visa_manager VALUES ('v2001', '2', 'Vuong kiem minh', null, 'vuongkiemminh@gmail.com', '2013-01-13 01:17:37', '22', 'sdad', '2013-01-13', 'Wait visa', 'add', '<p>\r\n	dadsd</p>\r\n', null, null, '2013-01-13');
