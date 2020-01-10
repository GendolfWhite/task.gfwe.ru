/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 80015
 Source Host           : localhost:3306
 Source Schema         : task

 Target Server Type    : MySQL
 Target Server Version : 80015
 File Encoding         : 65001

 Date: 10/01/2020 15:00:18
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for doers
-- ----------------------------
DROP TABLE IF EXISTS `doers`;
CREATE TABLE `doers`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Уникальный ID исполнителя',
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'ФИО исполнителя',
  `position` int(11) NOT NULL COMMENT 'id должности из таблицы \"Должности\" [Зависимость от positions.id]',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `position`(`position`) USING BTREE,
  CONSTRAINT `position` FOREIGN KEY (`position`) REFERENCES `positions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for positions
-- ----------------------------
DROP TABLE IF EXISTS `positions`;
CREATE TABLE `positions`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Уникальный ID должности',
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'Название должности',
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `name`(`name`) USING BTREE COMMENT 'Название должности должно быть уникальным.'
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for statuses
-- ----------------------------
DROP TABLE IF EXISTS `statuses`;
CREATE TABLE `statuses`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Уникальный ID исполнителя',
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT 'Название статуса',
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `name`(`name`) USING BTREE COMMENT 'Название статуса должно быть уникальным.'
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for tasks
-- ----------------------------
DROP TABLE IF EXISTS `tasks`;
CREATE TABLE `tasks`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Уникальный ID задачи',
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'Наименование задачи',
  `doer` int(11) NOT NULL COMMENT 'id исполнителя из таблицы \"Исполнители\" [Зависимость от doers.id]',
  `status` int(11) NOT NULL DEFAULT 1 COMMENT 'id статуса выполнения задачи из таблицы \"Статусы задачи\" [Зависимость от statuses.id]',
  `description` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT 'Описание задачи.',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `doer`(`doer`) USING BTREE,
  INDEX `status`(`status`) USING BTREE,
  CONSTRAINT `doer` FOREIGN KEY (`doer`) REFERENCES `doers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `status` FOREIGN KEY (`status`) REFERENCES `statuses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
