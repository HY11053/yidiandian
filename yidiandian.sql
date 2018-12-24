/*
 Navicat MySQL Data Transfer

 Source Server         : 127
 Source Server Type    : MySQL
 Source Server Version : 50714
 Source Host           : localhost:3306
 Source Schema         : yidiandian

 Target Server Type    : MySQL
 Target Server Version : 50714
 File Encoding         : 65001

 Date: 25/12/2018 01:00:32
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for ydd_acreagements
-- ----------------------------
DROP TABLE IF EXISTS `ydd_acreagements`;
CREATE TABLE `ydd_acreagements`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) DEFAULT NULL,
  `updated_at` timestamp(0) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `acreagements_type_index`(`type`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for ydd_admins
-- ----------------------------
DROP TABLE IF EXISTS `ydd_admins`;
CREATE TABLE `ydd_admins`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp(0) DEFAULT NULL,
  `updated_at` timestamp(0) DEFAULT NULL,
  `type` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `admins_email_unique`(`email`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ydd_admins
-- ----------------------------
INSERT INTO `ydd_admins` VALUES (1, '梁李良', 'liang569874@163.com', '$2y$10$Qf2/tsu70h3DYFTu7cWuLusOiWQvBZe2.qQZUUTaeB9saZ/sKZnUu', 'xUdbVYtPFo', '2018-12-16 23:00:28', '2018-12-16 23:00:28', 1);

-- ----------------------------
-- Table structure for ydd_answers
-- ----------------------------
DROP TABLE IF EXISTS `ydd_answers`;
CREATE TABLE `ydd_answers`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ask_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `goodpost` int(11) NOT NULL DEFAULT 0,
  `is_hidden` int(11) NOT NULL DEFAULT 0,
  `ip` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) DEFAULT NULL,
  `updated_at` timestamp(0) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `answers_ask_id_index`(`ask_id`) USING BTREE,
  INDEX `answers_user_id_index`(`user_id`) USING BTREE,
  INDEX `answers_goodpost_index`(`goodpost`) USING BTREE,
  INDEX `answers_is_hidden_index`(`is_hidden`) USING BTREE,
  INDEX `answers_ip_index`(`ip`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for ydd_archives
-- ----------------------------
DROP TABLE IF EXISTS `ydd_archives`;
CREATE TABLE `ydd_archives`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `typeid` int(11) NOT NULL,
  `ismake` int(11) NOT NULL,
  `brandid` int(11) DEFAULT NULL,
  `click` int(11) NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `shorttitle` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bdname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flags` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mid` int(11) NOT NULL DEFAULT 0,
  `keywords` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `write` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `editor` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `litpic` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dutyadmin` smallint(6) NOT NULL,
  `editorid` smallint(6) DEFAULT NULL,
  `imagepics` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `body` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `published_at` timestamp(0) DEFAULT NULL,
  `created_at` timestamp(0) DEFAULT NULL,
  `updated_at` timestamp(0) DEFAULT NULL,
  `url` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `archives_url_unique`(`url`) USING BTREE,
  INDEX `archives_click_index`(`click`) USING BTREE,
  INDEX `archives_typeid_index`(`typeid`) USING BTREE,
  INDEX `archives_title_index`(`title`) USING BTREE,
  INDEX `archives_shorttitle_index`(`shorttitle`) USING BTREE,
  INDEX `archives_flags_index`(`flags`) USING BTREE,
  INDEX `archives_mid_index`(`mid`) USING BTREE,
  INDEX `archives_write_index`(`write`) USING BTREE,
  INDEX `archives_dutyadmin_index`(`dutyadmin`) USING BTREE,
  INDEX `archives_editorid_index`(`editorid`) USING BTREE,
  INDEX `archives_editor_index`(`editor`) USING BTREE,
  INDEX `archives_published_at_index`(`published_at`) USING BTREE,
  INDEX `archives_created_at_index`(`created_at`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ydd_archives
-- ----------------------------
INSERT INTO `ydd_archives` VALUES (1, 1, 1, 0, 586, '232313213213', NULL, NULL, 'p', NULL, 0, '232313213213', '2545644', '梁李良', NULL, '/storage/uploads/2018/12/25/f08612d3bdf65d50e503d8da8361bbbd.png', 1, NULL, '', '<p>2545644</p><p><br/></p>', '2018-12-16 23:08:18', '2018-12-16 23:08:18', '2018-12-25 00:46:11', NULL);

-- ----------------------------
-- Table structure for ydd_arctypes
-- ----------------------------
DROP TABLE IF EXISTS `ydd_arctypes`;
CREATE TABLE `ydd_arctypes`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `reid` int(11) NOT NULL DEFAULT 0,
  `topid` int(11) NOT NULL DEFAULT 0,
  `sortrank` int(11) DEFAULT NULL,
  `typename` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `typedir` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dirposition` smallint(6) NOT NULL DEFAULT 1,
  `is_write` int(11) NOT NULL,
  `real_path` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `litpic` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `typeimages` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `contents` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `mid` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp(0) DEFAULT NULL,
  `updated_at` timestamp(0) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `arctypes_reid_index`(`reid`) USING BTREE,
  INDEX `arctypes_topid_index`(`topid`) USING BTREE,
  INDEX `arctypes_sortrank_index`(`sortrank`) USING BTREE,
  INDEX `arctypes_typename_index`(`typename`) USING BTREE,
  INDEX `arctypes_typedir_index`(`typedir`) USING BTREE,
  INDEX `arctypes_real_path_index`(`real_path`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 14 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ydd_arctypes
-- ----------------------------
INSERT INTO `ydd_arctypes` VALUES (1, 0, 0, 1, '企业品牌', 'ppjs', '212', '3232', '121212', 1, 0, 'ppjs', '', NULL, '<p>dassssssssssssssssssssss</p>', 1, '2018-12-16 23:01:48', '2018-12-25 00:50:14');
INSERT INTO `ydd_arctypes` VALUES (2, 0, 0, 2, '产品中心', 'productions', '产品中心', '产品中心', '产品中心', 1, 1, 'productions', '', NULL, NULL, 0, '2018-12-24 23:54:53', '2018-12-24 23:54:53');
INSERT INTO `ydd_arctypes` VALUES (3, 0, 0, 3, '新闻动态', 'news', '新闻动态', '新闻动态', '新闻动态', 1, 1, 'news', '', NULL, NULL, 1, '2018-12-24 23:55:20', '2018-12-24 23:55:20');
INSERT INTO `ydd_arctypes` VALUES (4, 0, 0, 4, '店铺展示', 'mendian', '店铺展示', '店铺展示', '店铺展示', 1, 1, 'mendian', '', NULL, NULL, 0, '2018-12-24 23:56:04', '2018-12-24 23:56:04');
INSERT INTO `ydd_arctypes` VALUES (5, 0, 0, 5, '加盟案例', 'anlinews', '加盟案例', '加盟案例', '加盟案例', 1, 1, 'anlinews', '', NULL, NULL, 0, '2018-12-24 23:56:47', '2018-12-24 23:56:47');
INSERT INTO `ydd_arctypes` VALUES (6, 0, 0, 6, '加盟中心', 'jiameng', '加盟中心', '加盟中心', '加盟中心', 1, 1, 'jiameng', '', NULL, NULL, 0, '2018-12-24 23:57:20', '2018-12-24 23:57:20');
INSERT INTO `ydd_arctypes` VALUES (7, 0, 0, 7, '公司介绍', 'gsjs', '公司介绍', '公司介绍', '公司介绍', 1, 1, 'gsjs', '', NULL, NULL, 0, '2018-12-25 00:01:56', '2018-12-25 00:01:56');
INSERT INTO `ydd_arctypes` VALUES (8, 0, 0, 8, '投资分析', 'tznews', '投资分析', '投资分析', '投资分析', 1, 1, 'tznews', '', NULL, NULL, 0, '2018-12-25 00:03:39', '2018-12-25 00:03:39');
INSERT INTO `ydd_arctypes` VALUES (9, 0, 0, 9, '利润分析', 'lirunnews', '利润分析', '利润分析', '利润分析', 1, 1, 'lirunnews', '', NULL, NULL, 0, '2018-12-25 00:04:07', '2018-12-25 00:04:07');
INSERT INTO `ydd_arctypes` VALUES (10, 0, 0, 10, '加盟条件', 'jiamtj', '加盟条件', '加盟条件', '加盟条件', 1, 1, 'jiamtj', '', NULL, NULL, 0, '2018-12-25 00:06:02', '2018-12-25 00:06:02');
INSERT INTO `ydd_arctypes` VALUES (11, 0, 0, 11, '加盟流程', 'liucheng', '加盟流程', '加盟流程', '加盟流程', 1, 1, 'liucheng', '', NULL, NULL, 0, '2018-12-25 00:06:31', '2018-12-25 00:06:31');
INSERT INTO `ydd_arctypes` VALUES (12, 0, 0, 13, '加盟优势', 'youshi', '加盟优势', '加盟优势', '加盟优势', 1, 1, 'youshi', '', NULL, NULL, 0, '2018-12-25 00:06:53', '2018-12-25 00:06:53');
INSERT INTO `ydd_arctypes` VALUES (13, 0, 0, 14, '加盟费用', 'feiyong', '加盟费用', '加盟费用', '加盟费用', 1, 1, 'feiyong', '', NULL, NULL, 0, '2018-12-25 00:07:18', '2018-12-25 00:07:18');

-- ----------------------------
-- Table structure for ydd_areas
-- ----------------------------
DROP TABLE IF EXISTS `ydd_areas`;
CREATE TABLE `ydd_areas`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `parentid` int(11) NOT NULL,
  `regionname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `created_at` timestamp(0) DEFAULT NULL,
  `updated_at` timestamp(0) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `areas_parentid_index`(`parentid`) USING BTREE,
  INDEX `areas_regionname_index`(`regionname`) USING BTREE,
  INDEX `areas_type_index`(`type`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for ydd_asks
-- ----------------------------
DROP TABLE IF EXISTS `ydd_asks`;
CREATE TABLE `ydd_asks`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `viewnum` int(11) NOT NULL DEFAULT 0,
  `answernum` int(11) NOT NULL DEFAULT 0,
  `is_hidden` int(11) NOT NULL DEFAULT 0,
  `ip` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `goodpost` int(11) NOT NULL DEFAULT 0,
  `mid` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp(0) DEFAULT NULL,
  `updated_at` timestamp(0) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `asks_user_id_index`(`user_id`) USING BTREE,
  INDEX `asks_viewnum_index`(`viewnum`) USING BTREE,
  INDEX `asks_answernum_index`(`answernum`) USING BTREE,
  INDEX `asks_is_hidden_index`(`is_hidden`) USING BTREE,
  INDEX `asks_goodpost_index`(`goodpost`) USING BTREE,
  INDEX `asks_mid_index`(`mid`) USING BTREE,
  INDEX `asks_ip_index`(`ip`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for ydd_brand_types
-- ----------------------------
DROP TABLE IF EXISTS `ydd_brand_types`;
CREATE TABLE `ydd_brand_types`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `brandtype` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `brandname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) DEFAULT NULL,
  `updated_at` timestamp(0) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for ydd_brandarticles
-- ----------------------------
DROP TABLE IF EXISTS `ydd_brandarticles`;
CREATE TABLE `ydd_brandarticles`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `typeid` int(11) NOT NULL,
  `ismake` int(11) NOT NULL,
  `click` int(11) NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `shorttitle` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flags` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mid` int(11) NOT NULL,
  `keywords` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `write` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `litpic` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dutyadmin` smallint(6) NOT NULL,
  `body` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `brandname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brandtime` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brandorigin` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brandnum` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brandpay` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brandarea` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brandmap` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brandperson` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brandattch` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brandapply` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brandchat` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brandgroup` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brandaddr` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brandduty` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagepics` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `acreage` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `genre` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `licenseno` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `registeredcapital` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `decorationpay` int(11) NOT NULL DEFAULT 0,
  `quartersrent` int(11) NOT NULL DEFAULT 0,
  `equipmentcost` int(11) NOT NULL DEFAULT 0,
  `workingcapital` int(11) NOT NULL DEFAULT 0,
  `laborquarter` int(11) NOT NULL DEFAULT 0,
  `miscellaneous` int(11) NOT NULL DEFAULT 0,
  `dailyvolume` int(11) NOT NULL DEFAULT 0,
  `unitprice` int(11) NOT NULL DEFAULT 0,
  `watercoal` int(11) NOT NULL DEFAULT 0,
  `ppjstitle` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brandphone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brandpsp` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `published_at` timestamp(0) DEFAULT NULL,
  `created_at` timestamp(0) DEFAULT NULL,
  `updated_at` timestamp(0) DEFAULT NULL,
  `tzid` int(11) DEFAULT NULL,
  `indexpic` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `editor` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `editor_id` int(11) NOT NULL DEFAULT 0,
  `received_at` timestamp(0) DEFAULT NULL,
  `isedit` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `brandarticles_id_unique`(`id`) USING BTREE,
  UNIQUE INDEX `brandarticles_url_unique`(`url`) USING BTREE,
  INDEX `brandarticles_brandname_index`(`brandname`) USING BTREE,
  INDEX `brandarticles_brandnum_index`(`brandnum`) USING BTREE,
  INDEX `brandarticles_brandpay_index`(`brandpay`) USING BTREE,
  INDEX `brandarticles_brandattch_index`(`brandattch`) USING BTREE,
  INDEX `brandarticles_brandapply_index`(`brandapply`) USING BTREE,
  INDEX `brandarticles_brandchat_index`(`brandchat`) USING BTREE,
  INDEX `brandarticles_tzid_index`(`tzid`) USING BTREE,
  INDEX `brandarticles_editor_index`(`editor`) USING BTREE,
  INDEX `brandarticles_editor_id_index`(`editor_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for ydd_charge_histories
-- ----------------------------
DROP TABLE IF EXISTS `ydd_charge_histories`;
CREATE TABLE `ydd_charge_histories`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `score` int(11) NOT NULL,
  `group` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `operater` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) DEFAULT NULL,
  `updated_at` timestamp(0) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for ydd_comment_reversions
-- ----------------------------
DROP TABLE IF EXISTS `ydd_comment_reversions`;
CREATE TABLE `ydd_comment_reversions`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `comment_id` int(11) NOT NULL,
  `archive_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `goodpost` int(11) NOT NULL DEFAULT 0,
  `is_hidden` int(11) NOT NULL DEFAULT 0,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) DEFAULT NULL,
  `updated_at` timestamp(0) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `comment_reversions_comment_id_index`(`comment_id`) USING BTREE,
  INDEX `comment_reversions_archive_id_index`(`archive_id`) USING BTREE,
  INDEX `comment_reversions_user_id_index`(`user_id`) USING BTREE,
  INDEX `comment_reversions_goodpost_index`(`goodpost`) USING BTREE,
  INDEX `comment_reversions_is_hidden_index`(`is_hidden`) USING BTREE,
  INDEX `comment_reversions_ip_index`(`ip`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for ydd_comments
-- ----------------------------
DROP TABLE IF EXISTS `ydd_comments`;
CREATE TABLE `ydd_comments`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `archive_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `goodpost` int(11) NOT NULL DEFAULT 0,
  `is_hidden` int(11) NOT NULL DEFAULT 0,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `ip` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) DEFAULT NULL,
  `updated_at` timestamp(0) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `comments_archive_id_index`(`archive_id`) USING BTREE,
  INDEX `comments_user_id_index`(`user_id`) USING BTREE,
  INDEX `comments_goodpost_index`(`goodpost`) USING BTREE,
  INDEX `comments_is_hidden_index`(`is_hidden`) USING BTREE,
  INDEX `comments_ip_index`(`ip`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for ydd_flinks
-- ----------------------------
DROP TABLE IF EXISTS `ydd_flinks`;
CREATE TABLE `ydd_flinks`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `weburl` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `webname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp(0) DEFAULT NULL,
  `updated_at` timestamp(0) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for ydd_industrynews
-- ----------------------------
DROP TABLE IF EXISTS `ydd_industrynews`;
CREATE TABLE `ydd_industrynews`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `typeid` int(11) NOT NULL,
  `ismake` int(11) NOT NULL,
  `click` int(11) NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `flags` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `write` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `litpic` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dutyadmin` smallint(6) NOT NULL,
  `body` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp(0) DEFAULT NULL,
  `updated_at` timestamp(0) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `industrynews_click_index`(`click`) USING BTREE,
  INDEX `industrynews_typeid_index`(`typeid`) USING BTREE,
  INDEX `industrynews_title_index`(`title`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for ydd_investment_types
-- ----------------------------
DROP TABLE IF EXISTS `ydd_investment_types`;
CREATE TABLE `ydd_investment_types`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) DEFAULT NULL,
  `updated_at` timestamp(0) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `investment_types_type_index`(`type`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for ydd_migrations
-- ----------------------------
DROP TABLE IF EXISTS `ydd_migrations`;
CREATE TABLE `ydd_migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 28 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ydd_migrations
-- ----------------------------
INSERT INTO `ydd_migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `ydd_migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `ydd_migrations` VALUES (3, '2017_02_08_083651_create_archives_table', 1);
INSERT INTO `ydd_migrations` VALUES (4, '2017_02_09_053555_create_arctypes_table', 1);
INSERT INTO `ydd_migrations` VALUES (5, '2017_02_09_062157_create_areas_table', 1);
INSERT INTO `ydd_migrations` VALUES (6, '2017_02_23_171322_create_admins_table', 1);
INSERT INTO `ydd_migrations` VALUES (7, '2017_02_26_215410_create_flinks_table', 1);
INSERT INTO `ydd_migrations` VALUES (8, '2017_02_28_171018_create_asks_table', 1);
INSERT INTO `ydd_migrations` VALUES (9, '2017_02_28_171427_create_answers_table', 1);
INSERT INTO `ydd_migrations` VALUES (10, '2017_02_28_172310_create_comments_table', 1);
INSERT INTO `ydd_migrations` VALUES (11, '2017_03_03_170645_create_phonemanages_table', 1);
INSERT INTO `ydd_migrations` VALUES (12, '2017_03_07_225001_create_notifications_table', 1);
INSERT INTO `ydd_migrations` VALUES (13, '2017_03_26_152406_create_reversions_table', 1);
INSERT INTO `ydd_migrations` VALUES (14, '2017_03_26_153436_create_comment_reversions_table', 1);
INSERT INTO `ydd_migrations` VALUES (15, '2018_04_02_155121_create_brandarticles_table', 1);
INSERT INTO `ydd_migrations` VALUES (16, '2018_04_13_112434_add_type_to_admins_table', 1);
INSERT INTO `ydd_migrations` VALUES (17, '2018_04_19_140506_create_brand_types_table', 1);
INSERT INTO `ydd_migrations` VALUES (18, '2018_04_23_175643_create_investment_types_table', 1);
INSERT INTO `ydd_migrations` VALUES (19, '2018_05_11_151359_add_tzid_to_brandarticles_table', 1);
INSERT INTO `ydd_migrations` VALUES (20, '2018_08_04_143727_create_acreagements_table', 1);
INSERT INTO `ydd_migrations` VALUES (21, '2018_09_18_135309_add_indexpic_to_brandarticles_table', 1);
INSERT INTO `ydd_migrations` VALUES (22, '2018_10_08_175528_create_charge_histories_table', 1);
INSERT INTO `ydd_migrations` VALUES (23, '2018_11_22_113843_create_industrynews_table', 1);
INSERT INTO `ydd_migrations` VALUES (24, '2018_11_23_171855_add_url_to_brandarticles_table', 1);
INSERT INTO `ydd_migrations` VALUES (25, '2018_11_26_144458_add_editor_to_brandarticles_table', 1);
INSERT INTO `ydd_migrations` VALUES (26, '2018_11_27_104444_add_url_to_archives_table', 1);
INSERT INTO `ydd_migrations` VALUES (27, '2018_11_27_134243_add_isedit_to_brandarticles_table', 1);

-- ----------------------------
-- Table structure for ydd_notifications
-- ----------------------------
DROP TABLE IF EXISTS `ydd_notifications`;
CREATE TABLE `ydd_notifications`  (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` int(10) UNSIGNED NOT NULL,
  `notifiable_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp(0) DEFAULT NULL,
  `created_at` timestamp(0) DEFAULT NULL,
  `updated_at` timestamp(0) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `notifications_notifiable_id_notifiable_type_index`(`notifiable_id`, `notifiable_type`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ydd_notifications
-- ----------------------------
INSERT INTO `ydd_notifications` VALUES ('65d13451-66e9-48d5-9eae-43785ccf2c82', 'App\\Notifications\\ArticlePublishedNofication', 1, 'App\\AdminModel\\Admin', '{\"title\":\"232313213213\",\"write\":\"\\u6881\\u674e\\u826f\",\"time\":{\"date\":\"2018-12-16 23:08:18.000000\",\"timezone_type\":3,\"timezone\":\"PRC\"}}', NULL, '2018-12-16 23:08:18', '2018-12-16 23:08:18');

-- ----------------------------
-- Table structure for ydd_password_resets
-- ----------------------------
DROP TABLE IF EXISTS `ydd_password_resets`;
CREATE TABLE `ydd_password_resets`  (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE,
  INDEX `password_resets_token_index`(`token`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for ydd_phonemanages
-- ----------------------------
DROP TABLE IF EXISTS `ydd_phonemanages`;
CREATE TABLE `ydd_phonemanages`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `phoneno` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `address` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `ip` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `host` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referer` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `category` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `cid` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `brandname` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp(0) DEFAULT NULL,
  `updated_at` timestamp(0) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `phonemanages_phoneno_index`(`phoneno`(250)) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for ydd_reversions
-- ----------------------------
DROP TABLE IF EXISTS `ydd_reversions`;
CREATE TABLE `ydd_reversions`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ask_id` int(11) NOT NULL,
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `goodpost` int(11) NOT NULL,
  `is_hidden` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp(0) DEFAULT NULL,
  `updated_at` timestamp(0) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `reversions_ask_id_index`(`ask_id`) USING BTREE,
  INDEX `reversions_answer_id_index`(`answer_id`) USING BTREE,
  INDEX `reversions_user_id_index`(`user_id`) USING BTREE,
  INDEX `reversions_goodpost_index`(`goodpost`) USING BTREE,
  INDEX `reversions_is_hidden_index`(`is_hidden`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for ydd_users
-- ----------------------------
DROP TABLE IF EXISTS `ydd_users`;
CREATE TABLE `ydd_users`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobilephone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brandname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `score` int(11) NOT NULL DEFAULT 0,
  `remain_score` int(11) NOT NULL DEFAULT 0,
  `total_score` int(11) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp(0) DEFAULT NULL,
  `updated_at` timestamp(0) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
