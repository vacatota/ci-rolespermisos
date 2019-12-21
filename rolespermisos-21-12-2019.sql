/*
 Navicat Premium Data Transfer

 Source Server         : LocalH
 Source Server Type    : MySQL
 Source Server Version : 50637
 Source Host           : localhost:3306
 Source Schema         : ci-rolespermisos

 Target Server Type    : MySQL
 Target Server Version : 50637
 File Encoding         : 65001

 Date: 21/12/2019 10:59:59
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for empresas
-- ----------------------------
DROP TABLE IF EXISTS `empresas`;
CREATE TABLE `empresas`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `subtitulo` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NULL DEFAULT NULL,
  `direccion` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_spanish2_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of empresas
-- ----------------------------
INSERT INTO `empresas` VALUES (1, 'XYZ', 'Ventas', 'Quito');

-- ----------------------------
-- Table structure for funcionalidades
-- ----------------------------
DROP TABLE IF EXISTS `funcionalidades`;
CREATE TABLE `funcionalidades`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NULL DEFAULT NULL,
  `empresaId` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `fk_funcionalidades_empresas1_idx`(`empresaId`) USING BTREE,
  CONSTRAINT `fk_funcionalidades_empresas1` FOREIGN KEY (`empresaId`) REFERENCES `empresas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_spanish2_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of funcionalidades
-- ----------------------------
INSERT INTO `funcionalidades` VALUES (1, 'Enviar tareas', 1);
INSERT INTO `funcionalidades` VALUES (2, 'Realizar evaluaciones', 1);
INSERT INTO `funcionalidades` VALUES (3, 'Enviar Foros', 1);
INSERT INTO `funcionalidades` VALUES (4, 'Activar Foros', 1);
INSERT INTO `funcionalidades` VALUES (5, 'Activar evaluaciones', 1);

-- ----------------------------
-- Table structure for funcionalidadesRolesUsuarios
-- ----------------------------
DROP TABLE IF EXISTS `funcionalidadesRolesUsuarios`;
CREATE TABLE `funcionalidadesRolesUsuarios`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rolUsuarioId` int(11) NOT NULL,
  `funcionalidadId` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `fk_rolFuncionalidad_rolesUsuarios1_idx`(`rolUsuarioId`) USING BTREE,
  INDEX `fk_rolFuncionalidad_funcionalidades1_idx`(`funcionalidadId`) USING BTREE,
  CONSTRAINT `fk_rolFuncionalidad_funcionalidades1` FOREIGN KEY (`funcionalidadId`) REFERENCES `funcionalidades` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_rolFuncionalidad_rolesUsuarios1` FOREIGN KEY (`rolUsuarioId`) REFERENCES `rolesUsuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_spanish2_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of funcionalidadesRolesUsuarios
-- ----------------------------
INSERT INTO `funcionalidadesRolesUsuarios` VALUES (1, 6, 1);
INSERT INTO `funcionalidadesRolesUsuarios` VALUES (2, 6, 2);
INSERT INTO `funcionalidadesRolesUsuarios` VALUES (3, 1, 3);
INSERT INTO `funcionalidadesRolesUsuarios` VALUES (4, 2, 4);
INSERT INTO `funcionalidadesRolesUsuarios` VALUES (5, 2, 5);

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NULL DEFAULT NULL,
  `empresaId` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `fk_roles_empresas1_idx`(`empresaId`) USING BTREE,
  CONSTRAINT `fk_roles_empresas1` FOREIGN KEY (`empresaId`) REFERENCES `empresas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_spanish2_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES (1, 'Estudiante', 1);
INSERT INTO `roles` VALUES (2, 'Profesores', 1);
INSERT INTO `roles` VALUES (3, 'Nuevo Rol', 1);
INSERT INTO `roles` VALUES (4, 'SuperAdministrador', 1);

-- ----------------------------
-- Table structure for rolesUsuarios
-- ----------------------------
DROP TABLE IF EXISTS `rolesUsuarios`;
CREATE TABLE `rolesUsuarios`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rolId` int(11) NOT NULL,
  `usuarioId` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `fk_rolesUsuarios_roles_idx`(`rolId`) USING BTREE,
  INDEX `fk_rolesUsuarios_usuarios1_idx`(`usuarioId`) USING BTREE,
  CONSTRAINT `fk_rolesUsuarios_roles` FOREIGN KEY (`rolId`) REFERENCES `roles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_rolesUsuarios_usuarios1` FOREIGN KEY (`usuarioId`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8 COLLATE = utf8_spanish2_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of rolesUsuarios
-- ----------------------------
INSERT INTO `rolesUsuarios` VALUES (1, 1, 1);
INSERT INTO `rolesUsuarios` VALUES (2, 2, 5);
INSERT INTO `rolesUsuarios` VALUES (6, 1, 16);
INSERT INTO `rolesUsuarios` VALUES (7, 2, 17);

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cedula` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `nombres` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `apellidos` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `correo` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `alias` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `clave` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `empresaId` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `fk_usuarios_empresas1_idx`(`empresaId`) USING BTREE,
  CONSTRAINT `fk_usuarios_empresas1` FOREIGN KEY (`empresaId`) REFERENCES `empresas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 20 CHARACTER SET = utf8 COLLATE = utf8_spanish2_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES (1, '666', 'Armando', 'Catota', 'armando.catota@hotmail.com', 'vaco', '202cb962ac59075b964b07152d234b70', 1);
INSERT INTO `usuarios` VALUES (2, '555', 'Eduardo', 'Sol', 'edaurdo@gmail.com', 'edu', 'd41d8cd98f00b204e9800998ecf8427e', NULL);
INSERT INTO `usuarios` VALUES (5, '', 'Otro', 'Usuario', 'otro', 'hkhkh', 'd41d8cd98f00b204e9800998ecf8427e', NULL);
INSERT INTO `usuarios` VALUES (16, '233454332', 'Maria', 'Conde', 'maria.conde@gmail.com', 'maria', '28fe82bab3bdec8eab119a2f30298802', NULL);
INSERT INTO `usuarios` VALUES (17, '10343533', 'Pedro', 'Mieles', 'pedro@gmail.com', 'pedro', '2c3f4a45e701984d5bceaac83af293b3', NULL);

SET FOREIGN_KEY_CHECKS = 1;
