/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50087
Source Host           : localhost:3306
Source Database       : pvuv

Target Server Type    : MYSQL
Target Server Version : 50087
File Encoding         : 65001

Date: 2016-01-12 16:02:18
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for pvuv-data
-- ----------------------------
DROP TABLE IF EXISTS `pvuv-data`;
CREATE TABLE `pvuv-data` (
  `id` bigint(20) NOT NULL auto_increment,
  `mac` varchar(64) NOT NULL default '0',
  `time` varchar(64) NOT NULL default '0',
  `pv` varchar(64) NOT NULL default '0',
  `download_app_times` varchar(64) NOT NULL default '0',
  `uv` varchar(64) NOT NULL default '0',
  `uv_android` varchar(64) NOT NULL default '0',
  `uv_ios` varchar(64) NOT NULL default '0',
  `uv_windows` varchar(64) NOT NULL default '0',
  `uv_others` varchar(64) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pvuv-data
-- ----------------------------
