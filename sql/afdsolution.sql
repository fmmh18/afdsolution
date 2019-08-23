/*
 Navicat Premium Data Transfer

 Source Server         : MariaDB(XAMPP)
 Source Server Type    : MariaDB
 Source Server Version : 100406
 Source Host           : localhost:3306
 Source Schema         : afdsolution

 Target Server Type    : MariaDB
 Target Server Version : 100406
 File Encoding         : 65001

 Date: 23/08/2019 08:22:20
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for cliente
-- ----------------------------
DROP TABLE IF EXISTS `cliente`;
CREATE TABLE `cliente`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `imagem` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `link` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` int(1) NULL DEFAULT NULL,
  `facebook` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `instagram` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `linkedin` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of cliente
-- ----------------------------
INSERT INTO `cliente` VALUES (1, 'GL Lima Terceirização', 'assets/images/cliente/logo-at-120.png', 'http://gllimaterceirizacao.com.br/', 1, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for contato
-- ----------------------------
DROP TABLE IF EXISTS `contato`;
CREATE TABLE `contato`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `assunto` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `mensagem` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `data` date NULL DEFAULT NULL,
  `status` int(1) NULL DEFAULT NULL,
  `telefone` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for galeria
-- ----------------------------
DROP TABLE IF EXISTS `galeria`;
CREATE TABLE `galeria`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `descricao` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `ordem` int(11) NULL DEFAULT NULL,
  `status` int(1) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of galeria
-- ----------------------------
INSERT INTO `galeria` VALUES (1, 'assets/images/carrousel/social-media.jpg', NULL, 1, 1);
INSERT INTO `galeria` VALUES (2, 'assets/images/carrousel/site.jpg', NULL, 2, 1);

-- ----------------------------
-- Table structure for menu
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(80) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `link` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` int(1) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES (1, 'Home', '#home', 1);
INSERT INTO `menu` VALUES (2, 'Sobre', '#sobre', 0);
INSERT INTO `menu` VALUES (3, 'Portifólio', '#portifolio', 1);
INSERT INTO `menu` VALUES (4, 'Contato', '#contato', 1);

-- ----------------------------
-- Table structure for servico
-- ----------------------------
DROP TABLE IF EXISTS `servico`;
CREATE TABLE `servico`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `descricao` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `status` int(1) NULL DEFAULT NULL,
  `icon` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of servico
-- ----------------------------
INSERT INTO `servico` VALUES (1, 'Criação e Administração de Sites', 'Criação de sites utilizando HTML5, CSS3, Bootstrap 4, PHP 7 e MySQL', 1, 'assets/images/icons/responsive.png');
INSERT INTO `servico` VALUES (2, 'Redes Sociais', 'Criação de fan pages no facebook, perfil no instagram e Linkedin entre outros.', 1, 'assets/images/icons/share.png');
INSERT INTO `servico` VALUES (3, 'Manutenção e venda', 'Manunteção de Computadores e Notebooks, vendas de componentes e acessórios.', 1, 'assets/images/icons/wrench.png');

SET FOREIGN_KEY_CHECKS = 1;
