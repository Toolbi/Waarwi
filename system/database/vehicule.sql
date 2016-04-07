-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 05 Avril 2016 à 22:11
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `waarwi3`

USE waarwi3;
-- ---------------------------------------------------------------------------------------


DROP TABLE `tbl_category`;
DROP TABLE `tbl_vechicle_types`;
--
-- Structure de la table `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
  `category_id` int(15) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(56) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_active` int(2) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Structure de la table `tbl_vechicle_types`
--

CREATE TABLE IF NOT EXISTS `tbl_vechicle_types` (
  `vechicle_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `vechicle_type_name` varchar(40) DEFAULT NULL,
  `vechicle_image` varchar(64) NOT NULL,
  `category_id` int(14) NOT NULL,
  `vechicle_createdate` varchar(40) DEFAULT NULL,
  `isactive` int(2) NOT NULL,
  PRIMARY KEY (`vechicle_type_id`),
  KEY `tbl_category_tbl_vechicle_types` (`category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Structure de la table `tbl_vehicle`
--

CREATE TABLE IF NOT EXISTS `tbl_vehicle` (
  `vechicle_id` int(11) NOT NULL AUTO_INCREMENT,
  `vechicle_type_id` int(11) DEFAULT NULL,
  `vechicle_number` varchar(40) DEFAULT NULL,
  `vechicle_logo` varchar(50) NOT NULL,
  `vechiclecomfort` varchar(255) NOT NULL,
  `user_id` int(12) NOT NULL,
  `vechicle_createdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`vechicle_id`),
  KEY `tbl_vechicle_types_tbl_vehicle` (`vechicle_type_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


-- ------------------------------------------------------------------------------------


--
-- Contenu de la table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `created_date`, `is_active`) VALUES

(NULL, 'Abarth', NULL, 1), -- id = 1
(NULL, 'AC', NULL, 1), -- id = 2
(NULL, 'Acura', NULL, 1), -- id = 3
(NULL, 'Alfa Romeo', NULL, 1), -- id = 4
(NULL, 'Allard', NULL, 1), -- id = 5
(NULL, 'Alpina', NULL, 1), -- id = 6
(NULL, 'Alpine', NULL, 1), -- id = 7
(NULL, 'Alvis', NULL, 1), -- id = 8
(NULL, 'AMC', NULL, 1), -- id = 9
(NULL, 'AMG', NULL, 1), -- id = 10
(NULL, 'Aston Martin', NULL, 1), -- id = 11
(NULL, 'Auburn', NULL, 1), -- id = 12
(NULL, 'Audi', NULL, 1), -- id = 13
(NULL, 'Austin', NULL, 1), -- id = 14
(NULL, 'Ballot', NULL, 1), -- id = 15
(NULL, 'Bentley', NULL, 1), -- id = 16
(NULL, 'Benz', NULL, 1), -- id = 17
(NULL, 'Bertone', NULL, 1), -- id = 18
(NULL, 'BMW', NULL, 1), -- id = 19
(NULL, 'Brabham', NULL, 1), -- id = 20
(NULL, 'Brabus', NULL, 1), -- id = 21
(NULL, 'Bristol', NULL, 1), -- id = 22
(NULL, 'Bugatti', NULL, 1), -- id = 23
(NULL, 'Buick', NULL, 1), -- id = 24
(NULL, 'Cadillac', NULL, 1), -- id = 25
(NULL, 'Chana', NULL, 1), -- id = 26
(NULL, 'Chery', NULL, 1), -- id = 27
(NULL, 'Chevrolet', NULL, 1), -- id = 28
(NULL, 'Chrysler', NULL, 1), -- id = 29
(NULL, 'Chrysler Europe', NULL, 1), -- id = 30
(NULL, 'Citroen', NULL, 1), -- id = 31
(NULL, 'Daewoo', NULL, 1), -- id = 32
(NULL, 'Daihatsu', NULL, 1), -- id = 33
(NULL, 'Daimler', NULL, 1), -- id = 34
(NULL, 'De Dion-Bouton', NULL, 1), -- id = 35
(NULL, 'De Tomaso', NULL, 1), -- id = 36
(NULL, 'Delage', NULL, 1), -- id = 37
(NULL, 'Delahaye', NULL, 1), -- id = 38
(NULL, 'DKW', NULL, 1), -- id = 39
(NULL, 'Dodge', NULL, 1), -- id = 40
(NULL, 'Ferrari', NULL, 1), -- id = 41
(NULL, 'Fiat', NULL, 1), -- id = 42
(NULL, 'Ford', NULL, 1), -- id = 43
(NULL, 'Frua', NULL, 1), -- id = 44
(NULL, 'Ghia', NULL, 1), -- id = 45
(NULL, 'GMC', NULL, 1), -- id = 46
(NULL, 'Gordini', NULL, 1), -- id = 47
(NULL, 'Hamann Motorsport', NULL, 1), -- id = 48
(NULL, 'Hillman', NULL, 1), -- id = 49
(NULL, 'Hispano-Suiza', NULL, 1), -- id = 50
(NULL, 'Holden', NULL, 1), -- id = 51
(NULL, 'Honda', NULL, 1), -- id = 52
(NULL, 'Horch', NULL, 1), -- id = 53
(NULL, 'Hotchkiss', NULL, 1), -- id = 54
(NULL, 'Humber', NULL, 1), -- id = 55
(NULL, 'Hummer', NULL, 1), -- id = 56
(NULL, 'Hyundai', NULL, 1), -- id = 57
(NULL, 'Idea', NULL, 1), -- id = 58
(NULL, 'Imperial', NULL, 1), -- id = 59
(NULL, 'Infiniti', NULL, 1), -- id = 60
(NULL, 'Isuzu', NULL, 1), -- id = 61
(NULL, 'Italdesign Giugiaro', NULL, 1), -- id = 62
(NULL, 'Jaguar', NULL, 1), -- id = 63
(NULL, 'Jeep', NULL, 1), -- id = 64
(NULL, 'Jowett', NULL, 1), -- id = 65
(NULL, 'Kia', NULL, 1), -- id = 66
(NULL, 'Kiblinger', NULL, 1), -- id = 67
(NULL, 'Kurtis Kraft', NULL, 1), -- id = 68
(NULL, 'Lada', NULL, 1), -- id = 69
(NULL, 'Lamborghini', NULL, 1), -- id = 70
(NULL, 'Lancia', NULL, 1), -- id = 71
(NULL, 'Land Rover', NULL, 1), -- id = 72
(NULL, 'Larrousse', NULL, 1), -- id = 73
(NULL, 'Lexus', NULL, 1), -- id = 74
(NULL, 'Ligier', NULL, 1), -- id = 75
(NULL, 'Lincoln', NULL, 1), -- id = 76
(NULL, 'Lola', NULL, 1), -- id = 77
(NULL, 'Lotus', NULL, 1), -- id = 78
(NULL, 'Mansory', NULL, 1), -- id = 79
(NULL, 'Maserati', NULL, 1), -- id = 80
(NULL, 'Mathis', NULL, 1), -- id = 81
(NULL, 'Matra', NULL, 1), -- id = 82
(NULL, 'Maybach', NULL, 1), -- id = 83
(NULL, 'Mazda', NULL, 1), -- id = 84
(NULL, 'McLaren', NULL, 1), -- id = 85
(NULL, 'Mercedes', NULL, 1), -- id = 86
(NULL, 'Mercedes-Benz', NULL, 1), -- id = 87
(NULL, 'Mercer', NULL, 1), -- id = 88
(NULL, 'Mercury', NULL, 1), -- id = 89
(NULL, 'MG', NULL, 1), -- id = 90
(NULL, 'Mini', NULL, 1),-- id = 91
(NULL, 'Mitsubishi', NULL, 1),-- id = 92
(NULL, 'Morgan', NULL, 1),-- id = 93
(NULL, 'Nissan', NULL, 1),-- id = 94
(NULL, 'NSU', NULL, 1),-- id = 95
(NULL, 'Oldsmobile', NULL, 1),-- id = 96
(NULL, 'Opel', NULL, 1),-- id = 97
(NULL, 'Packard', NULL, 1),-- id = 98
(NULL, 'Panhard et Levassor', NULL, 1),-- id = 99
(NULL, 'Parradine', NULL, 1),-- id = 100
(NULL, 'Paterson', NULL, 1),-- id = 101
(NULL, 'Pawl', NULL, 1),-- id = 102
(NULL, 'Peugeot', NULL, 1),-- id = 103
(NULL, 'Pininfarina', NULL, 1),-- id = 104
(NULL, 'Plymouth', NULL, 1),-- id = 105
(NULL, 'Pontiac', NULL, 1),-- id = 106
(NULL, 'Porsche', NULL, 1),-- id = 107
(NULL, 'Prost', NULL, 1),-- id = 108
(NULL, 'Proton', NULL, 1),-- id = 109
(NULL, 'RCH', NULL, 1), -- id = 110
(NULL, 'Renault', NULL, 1), -- id = 111
(NULL, 'Rinspeed', NULL, 1), -- id = 112
(NULL, 'Rolls-Royce', NULL, 1), -- id = 113
(NULL, 'Rover', NULL, 1), -- id = 114
(NULL, 'Saab', NULL, 1), -- id = 115
(NULL, 'Salmson', NULL, 1), -- id = 116
(NULL, 'san', NULL, 1), -- id = 117
(NULL, 'Santana', NULL, 1), -- id = 118
(NULL, 'Saturn', NULL, 1), -- id = 119
(NULL, 'Sbarro', NULL, 1), -- id = 120
(NULL, 'Seat', NULL, 1), -- id = 121
(NULL, 'Simca', NULL, 1), -- id = 122
(NULL, 'Skoda', NULL, 1), -- id = 123
(NULL, 'Smart', NULL, 1), -- id = 124
(NULL, 'Spyker', NULL, 1), -- id = 125
(NULL, 'Studebaker', NULL, 1), -- id = 126
(NULL, 'Subaru', NULL, 1), -- id = 127
(NULL, 'Sunbeam', NULL, 1), -- id = 128
(NULL, 'Suzuki', NULL, 1), -- id = 129
(NULL, 'Talbot', NULL, 1), -- id = 130
(NULL, 'Tata', NULL, 1), -- id = 131
(NULL, 'Tatra', NULL, 1), -- id = 132
(NULL, 'Theodore', NULL, 1), -- id = 133
(NULL, 'Touring', NULL, 1), -- id = 134
(NULL, 'Toyota', NULL, 1), -- id = 135
(NULL, 'Triumph', NULL, 1), -- id = 136
(NULL, 'TVR', NULL, 1), -- id = 137
(NULL, 'Tyrrell', NULL, 1), -- id = 138
(NULL, 'Vauxhall', NULL, 1), -- id = 139
(NULL, 'Venturi', NULL, 1), -- id = 140
(NULL, 'Volkswagen', NULL, 1), -- id = 141
(NULL, 'Volvo', NULL, 1), -- id = 142
(NULL, 'Wiesmann', NULL, 1); -- id = 143

-- --------------------------------------------------------

--
-- Contenu de la table `tbl_vechicle_types`
--

INSERT INTO `tbl_vechicle_types` (`vechicle_type_id`, `vechicle_type_name`, `vechicle_image`, `category_id`, `vechicle_createdate`, `isactive`) VALUES

(NULL, 'MiTo', '0', 4, NULL, 1), -- 4 = Alfa Romeo
(NULL, 'Giulietta', '0', 4, NULL, 1),
(NULL, '159/159 SW', '0', 4, NULL, 1),
(NULL, 'Brera/Spider', '0', 4, NULL, 1),
(NULL, '8C', '0', 4, NULL, 1),

(NULL, 'V8 Vantage & Roadster', '0', 11, NULL, 1),
(NULL, 'DB9 & Volante', '0', 11, NULL, 1),
(NULL, 'Vanquish S', '0', 11, NULL, 1),

(NULL, 'A1', '0', 13, NULL, 1), -- 13 Audi
(NULL, 'A3', '0', 13, NULL, 1),
(NULL, 'A3 Cabriolet', '0', 13, NULL, 1),
(NULL, 'A4', '0', 13, NULL, 1),
(NULL, 'A4 Allroad', '0', 13, NULL, 1),
(NULL, 'A5/A5 Sportback', '0', 13, NULL, 1),
(NULL, 'A6', '0', 13, NULL, 1),
(NULL, 'A6 Allroad', '0', 13, NULL, 1),
(NULL, 'A8', '0', 13, NULL, 1),
(NULL, 'Q5', '0', 13, NULL, 1),
(NULL, 'Q7', '0', 13, NULL, 1),
(NULL, 'S3', '0', 13, NULL, 1),
(NULL, 'S4', '0', 13, NULL, 1),
(NULL, 'S5/RS5', '0', 13, NULL, 1),
(NULL, 'S6/RS6', '0', 13, NULL, 1),
(NULL, 'TT', '0', 13, NULL, 1),
(NULL, 'R8', '0', 13, NULL, 1),

(NULL, 'Continental GT/GTC', '0', 16, NULL, 1),
(NULL, 'Continental Flying Spur', '0', 16, NULL, 1),
(NULL, 'Arnage', '0', 16, NULL, 1),
(NULL, 'Azure', '0', 16, NULL, 1),
(NULL, 'Brooklands', '0', 16, NULL, 1),

(NULL, 'Série 1', '0', 19, NULL, 1), -- 19 BMW
(NULL, 'Série 1 Coupé/Cabrio', '0', 19, NULL, 1),
(NULL, 'Série 3', '0', 19, NULL, 1),
(NULL, 'Série 3 Coupé et CC', '0', 19, NULL, 1),
(NULL, 'Série 5', '0', 19, NULL, 1),
(NULL, 'Série 5 GT', '0', 19, NULL, 1),
(NULL, 'Série 6', '0', 19, NULL, 1),
(NULL, 'Série 7', '0', 19, NULL, 1),
(NULL, 'X1', '0', 19, NULL, 1),
(NULL, 'X5', '0', 19, NULL, 1),
(NULL, 'X6', '0', 19, NULL, 1),
(NULL, 'Z4 Roadster', '0', 19, NULL, 1),
(NULL, 'M3', '0', 19, NULL, 1),
(NULL, 'M5', '0', 19, NULL, 1),
(NULL, 'X5 M', '0', 19, NULL, 1),
(NULL, 'X6 M', '0', 19, NULL, 1),

(NULL, 'Veyron', '0', 23, NULL, 1),

(NULL, 'BLS', '0', 25, NULL, 1),
(NULL, 'CTS', '0', 25, NULL, 1),
(NULL, 'STS', '0', 25, NULL, 1),
(NULL, 'SRX', '0', 25, NULL, 1),
(NULL, 'XLR', '0', 25, NULL, 1),
(NULL, 'Escalade', '0', 25, NULL, 1),
(NULL, 'Seville', '0', 25, NULL, 1),

(NULL, 'Matiz', '0', 28, NULL, 1),
(NULL, 'Aveo', '0', 28, NULL, 1),
(NULL, 'Lacetti', '0', 28, NULL, 1),
(NULL, 'Nubira', '0', 28, NULL, 1),
(NULL, 'Epica', '0', 28, NULL, 1),
(NULL, 'Captiva', '0', 28, NULL, 1),
(NULL, 'Evanda', '0', 28, NULL, 1),
(NULL, 'Kalos', '0', 28, NULL, 1),
(NULL, 'Rezzo', '0', 28, NULL, 1),

(NULL, 'PT Cruiser', '0', 29, NULL, 1), -- 29 = Chrysler
(NULL, '300C', '0', 29, NULL, 1),
(NULL, 'Voyager', '0', 29, NULL, 1),
(NULL, 'Crossfire', '0', 29, NULL, 1),

(NULL, 'C1', '0', 31, NULL, 1), -- 31 = Citroen
(NULL, 'C3', '0', 31, NULL, 1),
(NULL, 'DS3', '0', 31, NULL, 1),
(NULL, 'C3 Picasso', '0', 31, NULL, 1),
(NULL, 'Nemo Combi', '0', 31, NULL, 1),
(NULL, 'Berlingo', '0', 31, NULL, 1),
(NULL, 'C4/C4 Coupé', '0', 31, NULL, 1),
(NULL, 'C4 Picasso/Grand Picasso', '0', 31, NULL, 1),
(NULL, 'C5/C5 Tourer', '0', 31, NULL, 1),
(NULL, 'C6', '0', 31, NULL, 1),
(NULL, 'C8', '0', 31, NULL, 1),
(NULL, 'C-Crosser', '0', 31, NULL, 1),

(NULL, 'Cuore', '0', 33, NULL, 1), -- 32 = Daihatsu
(NULL, 'Trevis', '0', 33, NULL, 1), 
(NULL, 'Sirion', '0', 33, NULL, 1), 
(NULL, 'Materia', '0', 33, NULL, 1), 
(NULL, 'Copen', '0', 33, NULL, 1), 
(NULL, 'Terios', '0', 33, NULL, 1), 

(NULL, 'Caliber', '0', 40, NULL, 1), -- 40 = Dodge
(NULL, 'Viper', '0', 40, NULL, 1), 

(NULL, 'California', '0', 41, NULL, 1), -- 41 = Ferrari
(NULL, 'F 430/F430 Spider', '0', 41, NULL, 1),
(NULL, '599 GTB', '0', 41, NULL, 1),
(NULL, '612 Scaglietti', '0', 41, NULL, 1),
(NULL, 'Enzo', '0', 41, NULL, 1),

(NULL, 'Panda', '0', 42, NULL, 1), -- 42 = Fiat
(NULL, '500/500C', '0', 42, NULL, 1),
(NULL, 'Punto Evo', '0', 42, NULL, 1),
(NULL, 'Idea', '0', 42, NULL, 1),
(NULL, 'Sedici', '0', 42, NULL, 1),
(NULL, 'Doblo', '0', 42, NULL, 1),
(NULL, 'Qubo', '0', 42, NULL, 1),
(NULL, 'Bravo', '0', 42, NULL, 1),
(NULL, 'Croma SW', '0', 42, NULL, 1),
(NULL, 'Ulysse', '0', 42, NULL, 1),

(NULL, 'Ka', '0', 43, NULL, 1), -- 43 = Ford
(NULL, 'Fiesta', '0', 43, NULL, 1), 
(NULL, 'Fusion', '0', 43, NULL, 1), 
(NULL, 'Focus', '0', 43, NULL, 1), 
(NULL, 'Focus C-C', '0', 43, NULL, 1), 
(NULL, 'Focus C-Max', '0', 43, NULL, 1), 
(NULL, 'Mondeo', '0', 43, NULL, 1), 
(NULL, 'S-Max', '0', 43, NULL, 1), 
(NULL, 'Galaxy', '0', 43, NULL, 1), 
(NULL, 'Ranger', '0', 43, NULL, 1), 
(NULL, 'Mustang GT', '0', 43, NULL, 1), 
(NULL, 'GT', '0', 43, NULL, 1), 

(NULL, 'Jazz', '0', 52, NULL, 1), -- 52 = Honda
(NULL, 'Civic', '0', 52, NULL, 1), 
(NULL, 'Civic Type R', '0', 52, NULL, 1), 
(NULL, 'FR-V', '0', 52, NULL, 1), 
(NULL, 'Accord', '0', 52, NULL, 1), 
(NULL, 'CR-V', '0', 52, NULL, 1), 
(NULL, 'S2000', '0', 52, NULL, 1), 
(NULL, 'Legend', '0', 52, NULL, 1), 

(NULL, 'H1', '0', 56, NULL, 1), -- 56 = Hummer
(NULL, 'H2', '0', 56, NULL, 1), 
(NULL, 'H3', '0', 56, NULL, 1), 

(NULL, 'Atos Prime', '0', 57, NULL, 1), -- 57 = Hyundai
(NULL, 'Getz', '0', 57, NULL, 1), 
(NULL, 'Matrix', '0', 57, NULL, 1), 
(NULL, 'Coupé', '0', 57, NULL, 1), 
(NULL, 'Sonata', '0', 57, NULL, 1), 
(NULL, 'Azera', '0', 57, NULL, 1), 
(NULL, 'Trajet', '0', 57, NULL, 1), 
(NULL, 'Tucson', '0', 57, NULL, 1), 
(NULL, 'Santa Fe', '0', 57, NULL, 1), 
(NULL, 'Terracan', '0', 57, NULL, 1), 

(NULL, 'D-Max', '0', 61, NULL, 1), -- 61 = Isuzu

(NULL, 'X-Type', '0', 63, NULL, 1), -- 63 = Jaguar
(NULL, 'S-Type', '0', 63, NULL, 1), 
(NULL, 'XJ', '0', 63, NULL, 1), 
(NULL, 'XK', '0', 63, NULL, 1), 

(NULL, 'Cherokee', '0', 64, NULL, 1), -- 64 = Jeep
(NULL, 'Grand Cherokee', '0', 64, NULL, 1), 
(NULL, 'Wrangler', '0', 64, NULL, 1), 

(NULL, 'Picanto', '0', 66, NULL, 1), -- 66 = Kia
(NULL, 'Rio', '0', 66, NULL, 1),
(NULL, 'Cerato', '0', 66, NULL, 1),
(NULL, 'Carens', '0', 66, NULL, 1),
(NULL, 'Carnival', '0', 66, NULL, 1),
(NULL, 'Magentis', '0', 66, NULL, 1),
(NULL, 'Opirus', '0', 66, NULL, 1),
(NULL, 'Sorento', '0', 66, NULL, 1),
(NULL, 'Sportage', '0', 66, NULL, 1),

(NULL, '110', '0', 69, NULL, 1), -- 69 = Lada
(NULL, '111', '0', 69, NULL, 1),
(NULL, '112', '0', 69, NULL, 1),
(NULL, 'Niva', '0', 69, NULL, 1),

(NULL, 'Gallardo', '0', 70, NULL, 1), -- 70 = Lamborghini
(NULL, 'Murciélago LP 640', '0', 70, NULL, 1),

(NULL, 'Musa', '0', 71, NULL, 1), -- 71 = Lancia
(NULL, 'Ypsilon', '0', 71, NULL, 1),
(NULL, 'Lybra', '0', 71, NULL, 1),
(NULL, 'Thesis', '0', 71, NULL, 1),
(NULL, 'Phedra', '0', 71, NULL, 1),

(NULL, 'IS', '0', 74, NULL, 1), -- 74 = Lexus
(NULL, 'GS', '0', 74, NULL, 1), 
(NULL, 'LS', '0', 74, NULL, 1), 
(NULL, 'RX', '0', 74, NULL, 1), 
(NULL, 'SC', '0', 74, NULL, 1), 

(NULL, 'Classe A', '0', 86, NULL, 1), -- 86 = Mercedes
(NULL, 'Classe B', '0', 86, NULL, 1), 
(NULL, 'Classe C', '0', 86, NULL, 1), 
(NULL, 'Classe C Coupé Sport', '0', 86, NULL, 1), 
(NULL, 'SLK', '0', 86, NULL, 1), 
(NULL, 'CLK', '0', 86, NULL, 1), 
(NULL, 'Classe E', '0', 86, NULL, 1), 
(NULL, 'CLS', '0', 86, NULL, 1), 
(NULL, 'Classe R', '0', 86, NULL, 1), 
(NULL, 'Classe S', '0', 86, NULL, 1), 
(NULL, 'CL', '0', 86, NULL, 1), 
(NULL, 'SL', '0', 86, NULL, 1), 
(NULL, 'Classe M', '0', 86, NULL, 1), 
(NULL, 'Classe GL', '0', 86, NULL, 1), 
(NULL, 'Classe G', '0', 86, NULL, 1), 
(NULL, 'SLK 55 AMG', '0', 86, NULL, 1), 
(NULL, 'SLK 63 AMG', '0', 86, NULL, 1), 
(NULL, 'E 63 AMG', '0', 86, NULL, 1), 
(NULL, 'CLS 63 AMG', '0', 86, NULL, 1), 
(NULL, 'R 63 AMG', '0', 86, NULL, 1), 
(NULL, 'ML 63 AMG', '0', 86, NULL, 1), 
(NULL, 'G 55 AMG', '0', 86, NULL, 1), 
(NULL, 'S 65 AMG', '0', 86, NULL, 1), 
(NULL, 'CL 65 AMG', '0', 86, NULL, 1), 
(NULL, 'SL 65 AMG', '0', 86, NULL, 1), 
(NULL, 'SLR', '0', 86, NULL, 1), 

(NULL, 'Agila', '0', 97, NULL, 1), -- 97 = Opel
(NULL, 'Tigra Twintop', '0', 97, NULL, 1),
(NULL, 'Corsa', '0', 97, NULL, 1),
(NULL, 'Meriva', '0', 97, NULL, 1),
(NULL, 'Astra', '0', 97, NULL, 1),
(NULL, 'Astra GTC', '0', 97, NULL, 1),
(NULL, 'Astra Twintop', '0', 97, NULL, 1),
(NULL, 'Zafira', '0', 97, NULL, 1),
(NULL, 'Vectra', '0', 97, NULL, 1),
(NULL, 'Signum', '0', 97, NULL, 1),
(NULL, 'Antara', '0', 97, NULL, 1),
(NULL, 'GT', '0', 97, NULL, 1),

(NULL, '107', '0', 103, NULL, 1), -- 103 = Peugeot
(NULL, '1007', '0', 103, NULL, 1), 
(NULL, '206 Plus', '0', 103, NULL, 1), 
(NULL, '207', '0', 103, NULL, 1), 
(NULL, '207 SW', '0', 103, NULL, 1), 
(NULL, '207 CC', '0', 103, NULL, 1), 
(NULL, 'Bipper Tepee', '0', 103, NULL, 1), 
(NULL, 'Partner Tepee', '0', 103, NULL, 1), 
(NULL, '308 & 308 SW', '0', 103, NULL, 1), 
(NULL, '308 CC', '0', 103, NULL, 1), 
(NULL, '407 & 407 SW', '0', 103, NULL, 1), 
(NULL, '407 Coupé', '0', 103, NULL, 1), 
(NULL, '607', '0', 103, NULL, 1), 
(NULL, '807', '0', 103, NULL, 1), 
(NULL, '3008', '0', 103, NULL, 1), 
(NULL, '4007', '0', 103, NULL, 1), 
(NULL, '5008', '0', 103, NULL, 1), 

(NULL, 'Twingo', '0', 111, NULL, 1), -- 111 = Renault
(NULL, 'Wind', '0', 111, NULL, 1), 
(NULL, 'Clio Campus', '0', 111, NULL, 1), 
(NULL, 'Clio/Clio Estate', '0', 111, NULL, 1), 
(NULL, 'Modus/Grand Modus', '0', 111, NULL, 1), 
(NULL, 'Kango & Estate', '0', 111, NULL, 1), 
(NULL, 'Mégane Coupé', '0', 111, NULL, 1), 
(NULL, 'Mégane CC', '0', 111, NULL, 1), 
(NULL, 'Scénic/Grand SCénic', '0', 111, NULL, 1), 
(NULL, 'Fluence', '0', 111, NULL, 1), 
(NULL, 'Laguna', '0', 111, NULL, 1), 
(NULL, 'Koléos', '0', 111, NULL, 1), 
(NULL, 'Espace/Grand Espace', '0', 111, NULL, 1),  

(NULL, 'Wagon R+', '0', 71, NULL, 1), -- 129 = Suzuki
(NULL, 'Swift', '0', 71, NULL, 1),
(NULL, 'Ignis', '0', 71, NULL, 1),
(NULL, 'Jimmy', '0', 71, NULL, 1),
(NULL, 'SX4', '0', 71, NULL, 1),
(NULL, 'Grand Vitara', '0', 71, NULL, 1),

(NULL, 'IQ', '0', 135, NULL, 1), -- 135 = Toyota
(NULL, 'Aygo', '0', 135, NULL, 1),
(NULL, 'Yaris', '0', 135, NULL, 1),
(NULL, 'Urban Cruiser', '0', 135, NULL, 1),
(NULL, 'Auris', '0', 135, NULL, 1),
(NULL, 'Verso', '0', 135, NULL, 1),
(NULL, 'Prius III', '0', 135, NULL, 1),
(NULL, 'Avensis', '0', 135, NULL, 1),
(NULL, 'Rav 4', '0', 135, NULL, 1),
(NULL, 'Land Cruiser', '0', 135, NULL, 1),
(NULL, 'Land Cruiser SW', '0', 135, NULL, 1),
(NULL, 'Hilux', '0', 135, NULL, 1),


(NULL, 'Fox', '0', 141, NULL, 1), -- 141 = Volkswagen
(NULL, 'Polo', '0', 141, NULL, 1), 
(NULL, 'Golf', '0', 141, NULL, 1), 
(NULL, 'Golf SW', '0', 141, NULL, 1), 
(NULL, 'Golf Plus', '0', 141, NULL, 1), 
(NULL, 'Touran', '0', 141, NULL, 1), 
(NULL, 'Jetta', '0', 141, NULL, 1), 
(NULL, 'Eos', '0', 141, NULL, 1), 
(NULL, 'New-Beetle', '0', 141, NULL, 1), 
(NULL, 'Scirocco', '0', 141, NULL, 1), 
(NULL, 'Passat & Passat SW', '0', 141, NULL, 1), 
(NULL, 'Passat CC', '0', 141, NULL, 1), 
(NULL, 'Phaeton', '0', 141, NULL, 1), 
(NULL, 'Sharan', '0', 141, NULL, 1), 
(NULL, 'Tiguan', '0', 141, NULL, 1), 
(NULL, 'Touareg', '0', 141, NULL, 1), 
(NULL, 'Caravelle', '0', 141, NULL, 1), 
(NULL, 'Crafter', '0', 141, NULL, 1), 
(NULL, 'Transporter', '0', 141, NULL, 1),
 
(NULL, 'C 30', '0', 142, NULL, 1), -- 142 = Volvo
(NULL, 'S40/V50', '0', 142, NULL, 1), 
(NULL, 'S60', '0', 142, NULL, 1), 
(NULL, 'C70', '0', 142, NULL, 1), 
(NULL, 'V70/XC70', '0', 142, NULL, 1), 
(NULL, 'S80', '0', 142, NULL, 1), 
(NULL, 'XC90', '0', 142, NULL, 1), 

(NULL, 'Roadster', '0', 143, NULL, 1), -- 143 = Wiesmann
(NULL, 'GT', '0', 143, NULL, 1);



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
