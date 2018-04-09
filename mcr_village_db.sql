/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : 127.0.0.1:3306
Source Database       : mcr_village_db

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-04-09 16:22:04
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for mcr_api
-- ----------------------------
DROP TABLE IF EXISTS `mcr_api`;
CREATE TABLE `mcr_api` (
  `id` bigint(255) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mcr_api
-- ----------------------------
INSERT INTO `mcr_api` VALUES ('1', 'api-key', 'api', 'active');

-- ----------------------------
-- Table structure for mcr_log
-- ----------------------------
DROP TABLE IF EXISTS `mcr_log`;
CREATE TABLE `mcr_log` (
  `id` bigint(255) unsigned NOT NULL AUTO_INCREMENT,
  `api_key` varchar(255) DEFAULT NULL,
  `user_id` bigint(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `path` text,
  `datetime` datetime DEFAULT NULL,
  `unix` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `msg` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mcr_log
-- ----------------------------

-- ----------------------------
-- Table structure for mcr_place
-- ----------------------------
DROP TABLE IF EXISTS `mcr_place`;
CREATE TABLE `mcr_place` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `province_code` varchar(255) DEFAULT NULL,
  `pref_city_code` varchar(255) DEFAULT NULL,
  `district_county_code` varchar(255) DEFAULT NULL,
  `town_subdistrict_code` varchar(255) DEFAULT NULL,
  `village_code` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `chinese_simplified` varchar(255) DEFAULT NULL,
  `chinese_pinyin` varchar(255) DEFAULT NULL,
  `alt_spelling_internal` varchar(255) DEFAULT NULL,
  `alt_spelling_oversea` varchar(255) DEFAULT NULL,
  `previously_known_as` varchar(255) DEFAULT NULL,
  `previously_administered` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mcr_place
-- ----------------------------
INSERT INTO `mcr_place` VALUES ('1', 'GD', 'JM', 'PJ', 'HS', '01', 'Baishi ', 'Village', '白石村', 'Báishí cūn', 'baisi, basi,biasi', 'baixi,baaisi', '', 'haixin');
INSERT INTO `mcr_place` VALUES ('2', 'GD', 'JM', 'PJ', 'HS', '02', 'Shuanglong ', 'Village', '双龙村', 'Shuānglóng cūn', 'xuanglong,shuanglong', 'doublelong,shuanlong', 'kata', '');
INSERT INTO `mcr_place` VALUES ('3', 'GD', 'JM', 'PJ', 'HS', '03', 'Zilai ', 'Village', '紫莱村', 'Zǐlái cūn', 'zicai,zilai', 'cicai,cilai', '', '');
INSERT INTO `mcr_place` VALUES ('4', 'GD', 'JM', 'PJ', 'HS', '04', 'Shuinan', 'Village', '水南村', 'Shuǐ náncūn', 'shunnan', 'shuinnan', 'gongta', 'peita');
INSERT INTO `mcr_place` VALUES ('5', 'GD', 'JM', 'PJ', 'HS', '05', 'Baisha', 'Village', '白沙村', '\"Báishācūn', null, null, null, null);
INSERT INTO `mcr_place` VALUES ('6', 'GD', 'JM', 'PJ', 'HS', '06', 'Licun', 'Village', '里村村', 'Lǐcūn cūn', 'lichun,licun', 'Lǐcūn', '', '');
INSERT INTO `mcr_place` VALUES ('7', 'GD', 'JM', 'PJ', 'HS', '07', 'Dongfeng', 'Village', '东风村', 'Dōngfēng cūn', 'dongfen', 'denfen,dongfeng', 'gongda', 'algo');
INSERT INTO `mcr_place` VALUES ('8', 'GD', 'JM', 'PJ', 'HS', '08', 'Qunxing', 'Village', '群星村', 'Qúnxīng cūn', 'qinxing,qxin', 'tixin,qunhun', '', '');
INSERT INTO `mcr_place` VALUES ('9', 'GD', 'JM', 'PJ', 'HS', '09', 'Huangbian', 'Village', '篁边村', 'Huángbiān cūn', 'huanban,huanbaan,hunban', 'huangbian', '', '');
INSERT INTO `mcr_place` VALUES ('10', 'GD', 'JM', 'PJ', 'HS', '10', 'Bachong', 'Village', '耙冲村', 'Bàchōng cūn', 'bacong,baceng', 'gazeng', '', '');
INSERT INTO `mcr_place` VALUES ('11', 'GD', 'JM', 'PJ', 'HS', '11', 'Lianhe', 'Village', '联合村', 'Liánhé cūn', 'lianhe', '', '', '');
INSERT INTO `mcr_place` VALUES ('12', 'GD', 'JM', 'PJ', 'HS', '12', 'Huangzhuang', 'Village', '篁庄村', 'Huángzhuāng cūn', 'huangzan,huangcun', 'hanzang', 'motana', '');
INSERT INTO `mcr_place` VALUES ('13', 'GD', 'JM', 'PJ', 'HS', '01', 'Wufu', 'Community', '五福社区', '', 'vufu,lexi', 'wufu', '', '');
INSERT INTO `mcr_place` VALUES ('14', 'GD', 'JM', 'PJ', 'HS', '02', 'Tianlong', 'Community', '天龙社区', '', 'tanlong', 'dongfeng', '', '');
INSERT INTO `mcr_place` VALUES ('15', 'GD', 'JM', 'PJ', 'HS', '03', 'Dongfeng', 'Community', '东风社区', '', 'dada', 'dongfeng', '', 'alala');
INSERT INTO `mcr_place` VALUES ('16', 'GD', 'JM', 'PJ', 'HS', '04', 'Longxi', 'Community', '龙溪社区', '', 'xilong,longxi', 'rongxi,rongqi,rongbi', '', '');
INSERT INTO `mcr_place` VALUES ('17', 'GD', 'JM', 'PJ', 'HS', '05', 'Yifu', 'Community', '怡福社区', '', 'yifu', '', '', '');
INSERT INTO `mcr_place` VALUES ('18', 'GD', 'JM', 'PJ', 'HS', '06', 'Yude', 'Community', '育德社区', '', 'dongfeng', 'yude,yede', 'gongda', '');
INSERT INTO `mcr_place` VALUES ('19', 'GD', 'JM', 'PJ', 'HS', '07', 'Shizhong', 'Community', '石冲社区', '', 'sizong', 'sicong', '', '');
INSERT INTO `mcr_place` VALUES ('20', 'GD', 'JM', 'PJ', 'HS', '08', 'Yikang', 'Community', '怡康社区', '', 'dada,lexi', '', '', 'mosi');
INSERT INTO `mcr_place` VALUES ('21', 'GD', 'JM', 'PJ', 'CL', '01', 'Tangbian ', 'Community', '塘边社区', 'Táng biān shèqū', 'tangbian', 'tanban', '', '');
INSERT INTO `mcr_place` VALUES ('22', 'GD', 'JM', 'PJ', 'CL  ', '02', 'Zhishan ', 'Community', '芝山社区', 'Zhīshān shèqū', 'zisan,zhishan', '', '', 'kaimen');
INSERT INTO `mcr_place` VALUES ('23', 'GD', 'JM', 'PJ', 'CL  ', '03', 'Fugang ', 'Community', '富冈社区', 'Fùgāng shèqū', '', 'fuguan', '', '');
INSERT INTO `mcr_place` VALUES ('24', 'GD', 'JM', 'PJ', 'CL  ', '04', 'Lubian ', 'Community', '卢边社区', 'Lúbiān shèqū', 'liban,luban,liban,liiban,liiba,lubian,lubuan', 'liban', '', '');
INSERT INTO `mcr_place` VALUES ('25', 'GD', 'JM', 'PJ', 'CL  ', '05', 'Tanbian ', 'Community', '坦边社区', 'Tǎnbiān shèqū', '', '', 'huncheng', '');
INSERT INTO `mcr_place` VALUES ('26', 'GD', 'JM', 'PJ', 'CL  ', '06', 'Zhigang ', 'Community', '豸冈社区', 'Zhìgǎng shèqū', 'zhigan', 'ciguang', '', 'kaicun');
INSERT INTO `mcr_place` VALUES ('27', 'GD', 'JM', 'PJ', 'TX', '01', 'Liangxi ', 'Village', '良溪村', 'Liángxī cūn', 'laixi', 'langxi', '', '');
INSERT INTO `mcr_place` VALUES ('28', 'GD', 'JM', 'PJ', 'TX', '02', 'Wudong ', 'Village', '五洞村', 'Wǔdòng cūn', 'wodong,wudong', 'wudan', '', '');
INSERT INTO `mcr_place` VALUES ('29', 'GD', 'JM', 'PJ', 'TX', '03', 'Beida ', 'Village', '北达村', 'Běidá cūn', 'bada', 'dada', '', 'kunshan');
INSERT INTO `mcr_place` VALUES ('30', 'GD', 'JM', 'PJ', 'TX', '04', 'Tianxiang ', 'Village', '天乡村', 'Tiānxiāng cūn', '', '', 'nuocheng', '');
INSERT INTO `mcr_place` VALUES ('31', 'GD', 'JM', 'PJ', 'TX', '05', 'Heshan ', 'Village', '河山村', '\"Héshān cūn', '', '', 'nuocheng', '');
INSERT INTO `mcr_place` VALUES ('32', 'GD', 'JM', 'PJ', 'TX', '06', 'Sanhe ', 'Village', '三和村', 'Sānhé cūn', 'shuanhe', 'shanhe,shuanhe', '', 'pita');
INSERT INTO `mcr_place` VALUES ('33', 'GD', 'JM', 'PJ', 'TX', '07', 'Huling ', 'Village', '虎岭村', 'Hǔlǐng cūn', 'hilin', '', '', '');
INSERT INTO `mcr_place` VALUES ('34', 'GD', 'JM', 'PJ', 'TX', '08', 'Dalin ', 'Village', '大林村', 'Dàlín cūn', 'hunling,huling', 'hulingcun', '', '');
INSERT INTO `mcr_place` VALUES ('35', 'GD', 'JM', 'PJ', 'TX', '09', 'Zhoujun ', 'Village', '周郡村', 'Zhōu jùn cūn', '', 'zoujun', '', '');
INSERT INTO `mcr_place` VALUES ('36', 'GD', 'JM', 'PJ', 'TX', '10', 'Zhongxin ', 'Village', '中心村', 'Zhōngxīn cūn', '', '', 'natou', '');
INSERT INTO `mcr_place` VALUES ('37', 'GD', 'JM', 'PJ', 'TX', '11', 'Xinchang ', 'Village', '新昌村', 'Xīnchāng cūn', 'xincang', '', 'mutan', '');
INSERT INTO `mcr_place` VALUES ('38', 'GD', 'JM', 'PJ', 'TX', '12', 'Gongtian ', 'Village', '弓田村', 'Gōngtián cūn', 'tiangong', 'gongtian', '', 'putian');
INSERT INTO `mcr_place` VALUES ('39', 'GD', 'JM', 'PJ', 'TX', '13', 'Shafu ', 'Village', '沙富村', 'Shāfù cūn', 'safu,shanfu,xafu,zafu,kashu', 'kashu,zafu', '', '');
INSERT INTO `mcr_place` VALUES ('40', 'GD', 'JM', 'PJ', 'TX', '14', 'Jingkou ', 'Village', '迳口村', 'Jìngkǒu cūn', '', '', '', '');
INSERT INTO `mcr_place` VALUES ('41', 'GD', 'JM', 'PJ', 'TX', '15', 'Liantang ', 'Village', '莲塘村', 'Liántáng cūn', 'liantan', 'dada', 'zitan', 'hunbian');
INSERT INTO `mcr_place` VALUES ('42', 'GD', 'JM', 'PJ', 'TX', '16', 'Tongjing ', 'Village', '桐井村', 'Tóngjǐng cūn', '', 'tonji', '', '');
INSERT INTO `mcr_place` VALUES ('43', 'GD', 'JM', 'PJ', 'TX', '17', 'Lexi ', 'Village', '乐溪村', 'Lèxī cūn', 'laixi', 'lexi', '', '');
INSERT INTO `mcr_place` VALUES ('44', 'GD', 'JM', 'PJ', 'TX', '18', 'Luojiang ', 'Village', '罗江村', 'Luōjiāng cūn', 'tonji', '', 'baitou', '');
INSERT INTO `mcr_place` VALUES ('45', 'GD', 'JM', 'PJ', 'TX', '19', 'Renhou ', 'Village', '仁厚村', 'Rénhòu cūn', 'renhou', 'runhou', '', '');
INSERT INTO `mcr_place` VALUES ('46', 'GD', 'JM', 'PJ', 'TX', '20', 'Hengjiang ', 'Village', '横江村', 'Héngjiāng cūn', '', 'hongjiang', '', '');
INSERT INTO `mcr_place` VALUES ('47', 'GD', 'JM', 'PJ', 'TX', '21', 'Sanbao ', 'Village', '三堡村', 'Sān bǎo cūn', 'shanbao,xuanbao,zanbao,dunbao', 'xianbao', '', 'mutun');
INSERT INTO `mcr_place` VALUES ('48', 'GD', 'JM', 'PJ', 'TX', '22', 'Shijiao ', 'Village', '石滘村', 'Shíjiào cūn', 'xijiao', '', '', '');
INSERT INTO `mcr_place` VALUES ('49', 'GD', 'JM', 'PJ', 'HT', '01', 'Kangxi ', 'Village', '康溪村', 'Kāngxī cūn', '', 'kanxi', 'liangbian', '');
