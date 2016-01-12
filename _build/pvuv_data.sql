/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50087
Source Host           : localhost:3306
Source Database       : pvuv

Target Server Type    : MYSQL
Target Server Version : 50087
File Encoding         : 65001

Date: 2016-01-12 11:09:50
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for pvuv_data
-- ----------------------------
DROP TABLE IF EXISTS `pvuv_data`;
CREATE TABLE `pvuv_data` (
  `id` bigint(20) NOT NULL auto_increment,
  `mac` varchar(64) NOT NULL default '0',
  `time` varchar(64) NOT NULL default '0',
  `pv` varchar(64) NOT NULL default '0',
  `download_app_times` varchar(64) NOT NULL default '0',
  `uv` varchar(64) NOT NULL default '0',
  `android` varchar(64) NOT NULL default '0',
  `ios` varchar(64) NOT NULL default '0',
  `windows` varchar(64) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pvuv_data
-- ----------------------------
