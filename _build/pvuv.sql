/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50087
Source Host           : localhost:3306
Source Database       : pvuv

Target Server Type    : MYSQL
Target Server Version : 50087
File Encoding         : 65001

Date: 2016-01-12 10:08:16
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for pvuv_00-00
-- ----------------------------
DROP TABLE IF EXISTS `pvuv_00-00`;
CREATE TABLE `pvuv_00-00` (
  `id` bigint(20) NOT NULL auto_increment,
  `time` varchar(64) NOT NULL default '0',
  `pv` varchar(64) NOT NULL default '0',
  `download_app_times` varchar(64) NOT NULL default '0',
  `uv` varchar(64) NOT NULL default '0',
  `android` varchar(64) NOT NULL default '0',
  `ios` varchar(64) NOT NULL default '0',
  `windows` varchar(64) NOT NULL default '0',
  `unknown` varchar(64) NOT NULL default '0',
  `others` varchar(64) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pvuv_00-00
-- ----------------------------
INSERT INTO `pvuv_00-00` VALUES ('1', '01-11', '23223', '56', '345', '23', '56', '47', '123', '45');

-- ----------------------------
-- Table structure for pvuv_00-20
-- ----------------------------
DROP TABLE IF EXISTS `pvuv_00-20`;
CREATE TABLE `pvuv_00-20` (
  `id` bigint(20) NOT NULL auto_increment,
  `time` varchar(64) NOT NULL default '0',
  `pv` varchar(64) NOT NULL default '0',
  `download_app_times` varchar(64) NOT NULL default '0',
  `uv` varchar(64) NOT NULL default '0',
  `android` varchar(64) NOT NULL default '0',
  `ios` varchar(64) NOT NULL default '0',
  `windows` varchar(64) NOT NULL default '0',
  `unknown` varchar(64) NOT NULL default '0',
  `others` varchar(64) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pvuv_00-20
-- ----------------------------
INSERT INTO `pvuv_00-20` VALUES ('3', '01-11', '34222', '45', '456', '43', '54', '23', '124', '45');

-- ----------------------------
-- Table structure for pvuv_00-40
-- ----------------------------
DROP TABLE IF EXISTS `pvuv_00-40`;
CREATE TABLE `pvuv_00-40` (
  `id` bigint(20) NOT NULL auto_increment,
  `time` varchar(64) NOT NULL default '0',
  `pv` varchar(64) NOT NULL default '0',
  `download_app_times` varchar(64) NOT NULL default '0',
  `uv` varchar(64) NOT NULL default '0',
  `android` varchar(64) NOT NULL default '0',
  `ios` varchar(64) NOT NULL default '0',
  `windows` varchar(64) NOT NULL default '0',
  `unknown` varchar(64) NOT NULL default '0',
  `others` varchar(64) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pvuv_00-40
-- ----------------------------
INSERT INTO `pvuv_00-40` VALUES ('3', '01-11', '27543', '54', '432', '43', '78', '123', '36', '78');

-- ----------------------------
-- Table structure for pvuv_00-60
-- ----------------------------
DROP TABLE IF EXISTS `pvuv_00-60`;
CREATE TABLE `pvuv_00-60` (
  `id` bigint(20) NOT NULL auto_increment,
  `time` varchar(64) NOT NULL default '0',
  `pv` varchar(64) NOT NULL default '0',
  `download_app_times` varchar(64) NOT NULL default '0',
  `uv` varchar(64) NOT NULL default '0',
  `android` varchar(64) NOT NULL default '0',
  `ios` varchar(64) NOT NULL default '0',
  `windows` varchar(64) NOT NULL default '0',
  `unknown` varchar(64) NOT NULL default '0',
  `others` varchar(64) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pvuv_00-60
-- ----------------------------
INSERT INTO `pvuv_00-60` VALUES ('3', '01-11', '234', '23', '132', '16', '24', '3', '6', '28');

-- ----------------------------
-- Table structure for pvuv_00-80
-- ----------------------------
DROP TABLE IF EXISTS `pvuv_00-80`;
CREATE TABLE `pvuv_00-80` (
  `id` bigint(20) NOT NULL auto_increment,
  `time` varchar(64) NOT NULL default '0',
  `pv` varchar(64) NOT NULL default '0',
  `download_app_times` varchar(64) NOT NULL default '0',
  `uv` varchar(64) NOT NULL default '0',
  `android` varchar(64) NOT NULL default '0',
  `ios` varchar(64) NOT NULL default '0',
  `windows` varchar(64) NOT NULL default '0',
  `unknown` varchar(64) NOT NULL default '0',
  `others` varchar(64) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pvuv_00-80
-- ----------------------------
INSERT INTO `pvuv_00-80` VALUES ('3', '01-11', '34213', '34', '342', '132', '98', '4', '43', '23');

-- ----------------------------
-- Table structure for pvuv_00-a0
-- ----------------------------
DROP TABLE IF EXISTS `pvuv_00-a0`;
CREATE TABLE `pvuv_00-a0` (
  `id` bigint(20) NOT NULL auto_increment,
  `time` varchar(64) NOT NULL default '0',
  `pv` varchar(64) NOT NULL default '0',
  `download_app_times` varchar(64) NOT NULL default '0',
  `uv` varchar(64) NOT NULL default '0',
  `android` varchar(64) NOT NULL default '0',
  `ios` varchar(64) NOT NULL default '0',
  `windows` varchar(64) NOT NULL default '0',
  `unknown` varchar(64) NOT NULL default '0',
  `others` varchar(64) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pvuv_00-a0
-- ----------------------------

-- ----------------------------
-- Table structure for pvuv_00-c0
-- ----------------------------
DROP TABLE IF EXISTS `pvuv_00-c0`;
CREATE TABLE `pvuv_00-c0` (
  `id` bigint(20) NOT NULL auto_increment,
  `time` varchar(64) NOT NULL default '0',
  `pv` varchar(64) NOT NULL default '0',
  `download_app_times` varchar(64) NOT NULL default '0',
  `uv` varchar(64) NOT NULL default '0',
  `android` varchar(64) NOT NULL default '0',
  `ios` varchar(64) NOT NULL default '0',
  `windows` varchar(64) NOT NULL default '0',
  `unknown` varchar(64) NOT NULL default '0',
  `others` varchar(64) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pvuv_00-c0
-- ----------------------------
INSERT INTO `pvuv_00-c0` VALUES ('3', '01-11', '13225', '26', '254', '32', '29', '95', '85', '34');

-- ----------------------------
-- Table structure for pvuv_00-e0
-- ----------------------------
DROP TABLE IF EXISTS `pvuv_00-e0`;
CREATE TABLE `pvuv_00-e0` (
  `id` bigint(20) NOT NULL auto_increment,
  `time` varchar(64) NOT NULL default '0',
  `pv` varchar(64) NOT NULL default '0',
  `download_app_times` varchar(64) NOT NULL default '0',
  `uv` varchar(64) NOT NULL default '0',
  `android` varchar(64) NOT NULL default '0',
  `ios` varchar(64) NOT NULL default '0',
  `windows` varchar(64) NOT NULL default '0',
  `unknown` varchar(64) NOT NULL default '0',
  `others` varchar(64) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pvuv_00-e0
-- ----------------------------
INSERT INTO `pvuv_00-e0` VALUES ('3', '01-11', '4525', '26', '167', '34', '67', '23', '43', '44');

-- ----------------------------
-- Table structure for pvuv_01-00
-- ----------------------------
DROP TABLE IF EXISTS `pvuv_01-00`;
CREATE TABLE `pvuv_01-00` (
  `id` bigint(20) NOT NULL auto_increment,
  `time` varchar(64) NOT NULL default '0',
  `pv` varchar(64) NOT NULL default '0',
  `download_app_times` varchar(64) NOT NULL default '0',
  `uv` varchar(64) NOT NULL default '0',
  `android` varchar(64) NOT NULL default '0',
  `ios` varchar(64) NOT NULL default '0',
  `windows` varchar(64) NOT NULL default '0',
  `unknown` varchar(64) NOT NULL default '0',
  `others` varchar(64) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pvuv_01-00
-- ----------------------------
INSERT INTO `pvuv_01-00` VALUES ('3', '01-11', '21232', '67', '231', '161', '98', '2', '67', '4');

-- ----------------------------
-- Table structure for pvuv_01-20
-- ----------------------------
DROP TABLE IF EXISTS `pvuv_01-20`;
CREATE TABLE `pvuv_01-20` (
  `id` bigint(20) NOT NULL auto_increment,
  `time` varchar(64) NOT NULL default '0',
  `pv` varchar(64) NOT NULL default '0',
  `download_app_times` varchar(64) NOT NULL default '0',
  `uv` varchar(64) NOT NULL default '0',
  `android` varchar(64) NOT NULL default '0',
  `ios` varchar(64) NOT NULL default '0',
  `windows` varchar(64) NOT NULL default '0',
  `unknown` varchar(64) NOT NULL default '0',
  `others` varchar(64) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pvuv_01-20
-- ----------------------------
INSERT INTO `pvuv_01-20` VALUES ('3', '01-11', '452', '56', '324', '22', '88', '121', '22', '56');
