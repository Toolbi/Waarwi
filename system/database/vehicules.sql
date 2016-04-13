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

-- A

(NULL, 'A-level', NULL, 1), -- id = 1
(NULL, 'Abarth', NULL, 1), -- id = 2
(NULL, 'ABC', NULL, 1), -- id = 3
(NULL, 'AC', NULL, 1), -- id = 4
(NULL, 'AC Propulsion', NULL, 1), -- id = 5
(NULL, 'ACMA', NULL, 1), -- id = 6
(NULL, 'Acrea', NULL, 1), -- id = 7
(NULL, 'Acura', NULL, 1), -- id = 8
(NULL, 'Ader', NULL, 1), -- id = 9
(NULL, 'ADK', NULL, 1), -- id = 10
(NULL, 'Adler', NULL, 1), -- id = 11
(NULL, 'Air Tourist', NULL, 1), -- id = 12
(NULL, 'Aixam', NULL, 1), -- id = 13
(NULL, 'Al Araba', NULL, 1), -- id = 14
(NULL, 'Alart', NULL, 1), -- id = 15
(NULL, 'Albion', NULL, 1), -- id = 16
(NULL, 'Alco', NULL, 1), -- id = 17
(NULL, 'Alcyon', NULL, 1), -- id = 18
(NULL, 'Alfa Romeo', NULL, 1), -- id = 19
(NULL, 'Allard', NULL, 1), -- id = 20
(NULL, 'Alldays & Onions', NULL, 1), -- id = 21
(NULL, 'Alphi', NULL, 1), -- id = 22
(NULL, 'Alpina', NULL, 1), -- id = 23
(NULL, 'Alpine', NULL, 1), -- id = 24
(NULL, 'Alvis', NULL, 1), -- id = 25
(NULL, 'AMC', NULL, 1), -- id = 26
(NULL, 'Amede Bollee', NULL, 1), -- id = 27
(NULL, 'American', NULL, 1), -- id = 28
(NULL, 'American Austin', NULL, 1), -- id = 29
(NULL, 'American La France', NULL, 1), -- id = 30
(NULL, 'American Uderslung', NULL, 1), -- id = 31
(NULL, 'Amilcar', NULL, 1), -- id = 32
(NULL, 'AMG', NULL, 1), -- id = 33
(NULL, 'Amphicar', NULL, 1), -- id = 34
(NULL, 'Ann Arbor', NULL, 1), -- id = 35
(NULL, 'Ansaldo', NULL, 1), -- id = 36
(NULL, 'Apal', NULL, 1), -- id = 37
(NULL, 'Arash', NULL, 1), -- id = 38
(NULL, 'Argyll', NULL, 1), -- id = 39
(NULL, 'Ariel', NULL, 1), -- id = 40
(NULL, 'Aries', NULL, 1), -- id = 41
(NULL, 'Arista', NULL, 1), -- id = 42
(NULL, 'Armstrong Siddeley', NULL, 1), -- id = 43
(NULL, 'Arnolt', NULL, 1), -- id = 44
(NULL, 'Aro', NULL, 1), -- id = 45
(NULL, 'Arrol-Johnston', NULL, 1), -- id = 46
(NULL, 'Artega', NULL, 1), -- id = 47
(NULL, 'Arton', NULL, 1), -- id = 48
(NULL, 'Arzens', NULL, 1), -- id = 49
(NULL, 'Asa', NULL, 1), -- id = 50
(NULL, 'Ascari', NULL, 1), -- id = 51
(NULL, 'Asia', NULL, 1), -- id = 52
(NULL, 'ASL', NULL, 1), -- id = 53
(NULL, 'Aster', NULL, 1), -- id = 54
(NULL, 'Aston Martin', NULL, 1), -- id = 55
(NULL, 'Atlas', NULL, 1), -- id = 56
(NULL, 'Auburn', NULL, 1), -- id = 57
(NULL, 'Audi', NULL, 1), -- id = 58
(NULL, 'Audi by FAW', NULL, 1), -- id = 59
(NULL, 'Audibert & Lavirotte', NULL, 1), -- id = 60
(NULL, 'Austin', NULL, 1), -- id = 61
(NULL, 'Austin-Headley', NULL, 1), -- id = 62
(NULL, 'Austro Daimler', NULL, 1), -- id = 63
(NULL, 'Auto Avio', NULL, 1), -- id = 64
(NULL, 'Auto Union', NULL, 1), -- id = 65
(NULL, 'Autobianchi', NULL, 1), -- id = 66
(NULL, 'Autocar', NULL, 1), -- id = 67
(NULL, 'Automoto', NULL, 1), -- id = 68
(NULL, 'Autovia', NULL, 1), -- id = 69
(NULL, 'Autozam', NULL, 1), -- id = 70
(NULL, 'Auverland', NULL, 1), -- id = 71
(NULL, 'Avanti', NULL, 1), -- id = 72

-- B

(NULL, 'B Engineering', NULL, 1), -- id = 73
(NULL, 'Bailey', NULL, 1), -- id = 74
(NULL, 'Baker', NULL, 1), -- id = 75
(NULL, 'Ballot', NULL, 1), -- id = 76
(NULL, 'Bantam', NULL, 1), -- id = 77
(NULL, 'Bardon', NULL, 1), -- id = 78
(NULL, 'Barre', NULL, 1), -- id = 79
(NULL, 'Baudier', NULL, 1), -- id = 80
(NULL, 'BBM', NULL, 1), -- id = 81
(NULL, 'Bedelia', NULL, 1), -- id = 82
(NULL, 'Beijing Automobile Works by (BAIC)', NULL, 1), -- id = 83
(NULL, 'Belga Rise', NULL, 1), -- id = 84
(NULL, 'Belgica', NULL, 1), -- id = 85
(NULL, 'Bellanger', NULL, 1), -- id = 86
(NULL, 'Belsize', NULL, 1), -- id = 87
(NULL, 'Benham', NULL, 1), -- id = 88
(NULL, 'Benjamin', NULL, 1), -- id = 89
(NULL, 'Benteng', NULL, 1), -- id = 90
(NULL, 'Bentley', NULL, 1), -- id = 91
(NULL, 'Benz', NULL, 1), -- id = 92
(NULL, 'Berkeley', NULL, 1), -- id = 93
(NULL, 'Berliet', NULL, 1), -- id = 94
(NULL, 'Berna', NULL, 1), -- id = 95
(NULL, 'Bernardi', NULL, 1), -- id = 96
(NULL, 'Bertone', NULL, 1), -- id = 97
(NULL, 'Bignan', NULL, 1), -- id = 98
(NULL, 'Bill Thomas', NULL, 1), -- id = 99
(NULL, 'Bitter', NULL, 1), -- id = 100
(NULL, 'Bizzarrini', NULL, 1), -- id = 101
(NULL, 'Black', NULL, 1), -- id = 102
(NULL, 'BMW', NULL, 1), -- id = 103
(NULL, 'BMW by Brilliance', NULL, 1), -- id = 104
(NULL, 'Bobby Alba', NULL, 1), -- id = 105
(NULL, 'Bond', NULL, 1), -- id = 106
(NULL, 'Bonnet', NULL, 1), -- id = 107
(NULL, 'Borgward', NULL, 1), -- id = 108
(NULL, 'Brabham', NULL, 1), -- id = 109
(NULL, 'Brasier', NULL, 1), -- id = 110
(NULL, 'Brabus', NULL, 1), -- id = 111
(NULL, 'Breckland', NULL, 1), -- id = 112
(NULL, 'Bremer', NULL, 1), -- id = 113
(NULL, 'Brennabor', NULL, 1), -- id = 114
(NULL, 'Brewster', NULL, 1), -- id = 115
(NULL, 'Bricklin', NULL, 1), -- id = 116
(NULL, 'Brillance', NULL, 1), -- id = 117
(NULL, 'Bristol', NULL, 1), -- id = 118
(NULL, 'Brouhot', NULL, 1), -- id = 119
(NULL, 'Brush', NULL, 1), -- id = 120
(NULL, 'BSA', NULL, 1), -- id = 121
(NULL, 'Bucciali', NULL, 1), -- id = 122
(NULL, 'Buchet', NULL, 1), -- id = 123
(NULL, 'Bufori', NULL, 1), -- id = 124
(NULL, 'Bugatti', NULL, 1), -- id = 125
(NULL, 'Buick', NULL, 1), -- id = 126
(NULL, 'Byd Auto', NULL, 1), -- id = 127

-- C

(NULL, 'Cadillac', NULL, 1), -- id = 128
(NULL, 'Campagna', NULL, 1), -- id = 129
(NULL, 'Caparo', NULL, 1), -- id = 130
(NULL, 'Carnation', NULL, 1), -- id = 131
(NULL, 'Cartercar', NULL, 1), -- id = 132
(NULL, 'Case', NULL, 1), -- id = 133
(NULL, 'Caterham', NULL, 1), -- id = 134
(NULL, 'Ceirano', NULL, 1), -- id = 135
(NULL, 'CGE', NULL, 1), -- id = 136
(NULL, 'CGV Charron', NULL, 1), -- id = 137
(NULL, 'Chadwick', NULL, 1), -- id = 138
(NULL, 'Chalmers', NULL, 1), -- id = 139
(NULL, 'Champion', NULL, 1), -- id = 140
(NULL, 'Chana', NULL, 1), -- id = 141
(NULL, 'Chandler', NULL, 1), -- id = 142
(NULL, 'Changfeng', NULL, 1), -- id = 143
(NULL, 'Changhe', NULL, 1), -- id = 144
(NULL, 'Chaparral', NULL, 1), -- id = 145
(NULL, 'Chappe et Gessalin', NULL, 1), -- id = 146
(NULL, 'Checker', NULL, 1), -- id = 147
(NULL, 'Chenard & Walcker', NULL, 1), -- id = 148
(NULL, 'Chery', NULL, 1), -- id = 149
(NULL, 'Chevrolet', NULL, 1), -- id = 150
(NULL, 'Chevron', NULL, 1), -- id = 151
(NULL, 'Chrysler', NULL, 1), -- id = 152
(NULL, 'Chrysler by Beijing', NULL, 1), -- id = 153
(NULL, 'Chrysler Europe', NULL, 1), -- id = 154
(NULL, 'Cime', NULL, 1), -- id = 155
(NULL, 'Citicar', NULL, 1), -- id = 156
(NULL, 'Citroen', NULL, 1), -- id = 157
(NULL, 'Citroen by Dongfeng', NULL, 1), -- id = 158
(NULL, 'Cizeta-Moroder', NULL, 1), -- id = 159
(NULL, 'Clement', NULL, 1), -- id = 160
(NULL, 'Clement Talbot', NULL, 1), -- id = 161
(NULL, 'Clenet', NULL, 1), -- id = 162
(NULL, 'Columbia', NULL, 1), -- id = 163
(NULL, 'Columbia Six', NULL, 1), -- id = 164
(NULL, 'Comarth', NULL, 1), -- id = 165
(NULL, 'Company Developements', NULL, 1), -- id = 166
(NULL, 'Compound', NULL, 1), -- id = 167
(NULL, 'Concept car Ltd', NULL, 1), -- id = 168
(NULL, 'Continental', NULL, 1), -- id = 169
(NULL, 'Corbin', NULL, 1), -- id = 170
(NULL, 'Cord', NULL, 1), -- id = 171
(NULL, 'Corre la Licorne', NULL, 1), -- id = 172
(NULL, 'Coste', NULL, 1), -- id = 173
(NULL, 'Costin', NULL, 1), -- id = 174
(NULL, 'Costtereau', NULL, 1), -- id = 175
(NULL, 'Cottin & Desgouttes', NULL, 1), -- id = 176
(NULL, 'Courage Competition', NULL, 1), -- id = 177
(NULL, 'Cournil', NULL, 1), -- id = 178
(NULL, 'Crestmobile', NULL, 1), -- id = 179
(NULL, 'Cretors', NULL, 1), -- id = 180
(NULL, 'Crossley', NULL, 1), -- id = 181
(NULL, 'Cugnot', NULL, 1), -- id = 182
(NULL, 'Cunningham', NULL, 1), -- id = 183

-- D

(NULL, 'D Aoust', NULL, 1), -- id = 184
(NULL, 'Dacia', NULL, 1), -- id = 185
(NULL, 'Daewoo', NULL, 1), -- id = 186
(NULL, 'Daf', NULL, 1), -- id = 187
(NULL, 'Daihatsu', NULL, 1), -- id = 188
(NULL, 'Daimler', NULL, 1), -- id = 189
(NULL, 'Dansk', NULL, 1), -- id = 190
(NULL, 'Dare', NULL, 1), -- id = 191
(NULL, 'Darmont', NULL, 1), -- id = 192
(NULL, 'Darracq', NULL, 1), -- id = 193
(NULL, 'Dasse', NULL, 1), -- id = 194
(NULL, 'Dauer', NULL, 1), -- id = 195
(NULL, 'Dax', NULL, 1), -- id = 196
(NULL, 'DB', NULL, 1), -- id = 197
(NULL, 'De Cosmo', NULL, 1), -- id = 198
(NULL, 'De Dietrish', NULL, 1), -- id = 199
(NULL, 'De Dion-Bouton', NULL, 1), -- id = 200
(NULL, 'De la Chapelle', NULL, 1), -- id = 201
(NULL, 'De Soto', NULL, 1), -- id = 202
(NULL, 'De Tomaso', NULL, 1), -- id = 203
(NULL, 'Decauville', NULL, 1), -- id = 204
(NULL, 'Dechamps', NULL, 1), -- id = 205
(NULL, 'Delage', NULL, 1), -- id = 206
(NULL, 'Delahaye', NULL, 1), -- id = 207
(NULL, 'Delamare-Debouteville', NULL, 1), -- id = 208
(NULL, 'Delaugere', NULL, 1), -- id = 209
(NULL, 'Delauney Belleville', NULL, 1), -- id = 210
(NULL, 'Delfino', NULL, 1), -- id = 211
(NULL, 'Delin Dellow', NULL, 1), -- id = 212
(NULL, 'Delorean', NULL, 1), -- id = 213
(NULL, 'Denzel', NULL, 1), -- id = 214
(NULL, 'Derby', NULL, 1), -- id = 215
(NULL, 'Desnoyers', NULL, 1), -- id = 216
(NULL, 'Detroit Electric', NULL, 1), -- id = 217
(NULL, 'Devin', NULL, 1), -- id = 218
(NULL, 'DFP', NULL, 1), -- id = 219
(NULL, 'Diatto', NULL, 1), -- id = 220
(NULL, 'DKW', NULL, 1), -- id = 221
(NULL, 'Dodge', NULL, 1), -- id = 222
(NULL, 'Dome', NULL, 1), -- id = 223
(NULL, 'Dongfeng', NULL, 1), -- id = 224
(NULL, 'Donkervoort', NULL, 1), -- id = 225
(NULL, 'Donnet-Zedel', NULL, 1), -- id = 226
(NULL, 'Doran', NULL, 1), -- id = 227
(NULL, 'Dual-Ghia', NULL, 1), -- id = 228
(NULL, 'Dubonnet', NULL, 1), -- id = 229
(NULL, 'Dudly', NULL, 1), -- id = 230
(NULL, 'Duesenberg', NULL, 1), -- id = 231
(NULL, 'Dufaux', NULL, 1), -- id = 232
(NULL, 'DuPont', NULL, 1), -- id = 233
(NULL, 'Durkopp', NULL, 1), -- id = 234
(NULL, 'Duryea', NULL, 1), -- id = 235
(NULL, 'Dutton', NULL, 1), -- id = 236

-- E

(NULL, 'Edfor', NULL, 1), -- id = 237
(NULL, 'Edran', NULL, 1), -- id = 238
(NULL, 'Edsel', NULL, 1), -- id = 239
(NULL, 'Efini', NULL, 1), -- id = 240
(NULL, 'EHP', NULL, 1), -- id = 241
(NULL, 'Elcar', NULL, 1), -- id = 242
(NULL, 'Eldredge', NULL, 1), -- id = 243
(NULL, 'Elf', NULL, 1), -- id = 244
(NULL, 'Elva', NULL, 1), -- id = 245
(NULL, 'EMF', NULL, 1), -- id = 246
(NULL, 'Emgrand', NULL, 1), -- id = 247
(NULL, 'Emme', NULL, 1), -- id = 248
(NULL, 'Empire', NULL, 1), -- id = 249
(NULL, 'Enfield Automotive', NULL, 1), -- id = 250
(NULL, 'English Mechanic', NULL, 1), -- id = 251
(NULL, 'Erskine', NULL, 1), -- id = 252
(NULL, 'Esculape', NULL, 1), -- id = 253
(NULL, 'Essex', NULL, 1), -- id = 254
(NULL, 'Eunos', NULL, 1), -- id = 255
(NULL, 'Evans', NULL, 1), -- id = 256
(NULL, 'Excalibur', NULL, 1), -- id = 257
(NULL, 'Excelsior', NULL, 1), -- id = 258

-- F

(NULL, 'Facel Vega', NULL, 1), -- id = 259
(NULL, 'Falcon Knight', NULL, 1), -- id = 260
(NULL, 'Farman', NULL, 1), -- id = 261
(NULL, 'Fascination', NULL, 1), -- id = 262
(NULL, 'FAW Group', NULL, 1), -- id = 263
(NULL, 'Ferrari', NULL, 1), -- id = 264
(NULL, 'Fiat', NULL, 1), -- id = 265
(NULL, 'Firestone Columbus', NULL, 1), -- id = 266
(NULL, 'Fisker', NULL, 1), -- id = 267
(NULL, 'Flanders 20', NULL, 1), -- id = 268
(NULL, 'Flint', NULL, 1), -- id = 269
(NULL, 'FN', NULL, 1), -- id = 270
(NULL, 'Foday', NULL, 1), -- id = 271
(NULL, 'Fondu', NULL, 1), -- id = 272
(NULL, 'Force', NULL, 1), -- id = 273
(NULL, 'Ford', NULL, 1), -- id = 274
(NULL, 'Ford by Changan', NULL, 1), -- id = 275
(NULL, 'Foster', NULL, 1), -- id = 276
(NULL, 'Foton', NULL, 1), -- id = 277
(NULL, 'Fouillaron', NULL, 1), -- id = 278
(NULL, 'Four Stroke', NULL, 1), -- id = 279
(NULL, 'Franklin', NULL, 1), -- id = 280
(NULL, 'Frazer', NULL, 1), -- id = 281
(NULL, 'Frua', NULL, 1), -- id = 282
(NULL, 'FSO', NULL, 1), -- id = 283
(NULL, 'Fuel vapor', NULL, 1), -- id = 284

-- G

(NULL, 'Gamage', NULL, 1), -- id = 285
(NULL, 'Gar', NULL, 1), -- id = 286
(NULL, 'Garbaty', NULL, 1), -- id = 287
(NULL, 'Gardner', NULL, 1), -- id = 288
(NULL, 'Garford', NULL, 1), -- id = 289
(NULL, 'Gatso', NULL, 1), -- id = 290
(NULL, 'Gaz', NULL, 1), -- id = 291
(NULL, 'Geely', NULL, 1), -- id = 292
(NULL, 'General Motors', NULL, 1), -- id = 293
(NULL, 'General Motors by Shangai', NULL, 1), -- id = 294
(NULL, 'General Motors Corporation Group', NULL, 1), -- id = 295
(NULL, 'Geo', NULL, 1), -- id = 296
(NULL, 'Georges Irat', NULL, 1), -- id = 297
(NULL, 'Georges Richard', NULL, 1), -- id = 298
(NULL, 'Georges Roy', NULL, 1), -- id = 299
(NULL, 'Germain', NULL, 1), -- id = 300
(NULL, 'Ghia', NULL, 1), -- id = 301
(NULL, 'Gilgliato', NULL, 1), -- id = 302
(NULL, 'Gilbern', NULL, 1), -- id = 303
(NULL, 'Gillet', NULL, 1), -- id = 304
(NULL, 'Gillet-Forest', NULL, 1), -- id = 305
(NULL, 'Ginetta', NULL, 1), -- id = 306
(NULL, 'Gladiator', NULL, 1), -- id = 307
(NULL, 'Glas Isaria', NULL, 1), -- id = 308
(NULL, 'Gleagle', NULL, 1), -- id = 309
(NULL, 'GMC', NULL, 1), -- id = 310
(NULL, 'Gobron-Brillie', NULL, 1), -- id = 311
(NULL, 'Goggomobil', NULL, 1), -- id = 312
(NULL, 'Goliath', NULL, 1), -- id = 313
(NULL, 'Gonow', NULL, 1), -- id = 314
(NULL, 'Gordon Keeble', NULL, 1), -- id = 315
(NULL, 'Gordini', NULL, 1), -- id = 316
(NULL, 'Graf & Stift', NULL, 1), -- id = 317
(NULL, 'Grahm-Paige', NULL, 1), -- id = 318
(NULL, 'Grandin', NULL, 1), -- id = 319
(NULL, 'Great Wall Motors', NULL, 1), -- id = 320
(NULL, 'Gregoire', NULL, 1), -- id = 321
(NULL, 'Guangzhou Automobile Industry (GAC)', NULL, 1), -- id = 322
(NULL, 'Gumpert', NULL, 1), -- id = 323
(NULL, 'Guy', NULL, 1), -- id = 324
(NULL, 'Guyot Speciale', NULL, 1), -- id = 325

-- H

(NULL, 'Hafei', NULL, 1), -- id = 326
(NULL, 'Haima', NULL, 1), -- id = 327
(NULL, 'Hammel', NULL, 1), -- id = 328
(NULL, 'Hanomag', NULL, 1), -- id = 329
(NULL, 'Hansa', NULL, 1), -- id = 330
(NULL, 'Hansen', NULL, 1), -- id = 331
(NULL, 'Hamann Motorsport', NULL, 1), -- id = 332
(NULL, 'Hauser', NULL, 1), -- id = 333
(NULL, 'Haynes', NULL, 1), -- id = 334
(NULL, 'Healey', NULL, 1), -- id = 335
(NULL, 'Herald', NULL, 1), -- id = 336
(NULL, 'Hermes-Mathis', NULL, 1), -- id = 337
(NULL, 'Herreshoff', NULL, 1), -- id = 338
(NULL, 'Hillman', NULL, 1), -- id = 339
(NULL, 'Hindustan', NULL, 1), -- id = 340
(NULL, 'Hino', NULL, 1), -- id = 341
(NULL, 'Hispano-Suiza', NULL, 1), -- id = 342
(NULL, 'Holden', NULL, 1), -- id = 343
(NULL, 'Holmes', NULL, 1), -- id = 344
(NULL, 'Holsman', NULL, 1), -- id = 345
(NULL, 'Hommell', NULL, 1), -- id = 346
(NULL, 'Honda', NULL, 1), -- id = 347
(NULL, 'Honda by Dongfeng', NULL, 1), -- id = 348
(NULL, 'Honda by Guangzhou', NULL, 1), -- id = 349
(NULL, 'Hongqi', NULL, 1), -- id = 350
(NULL, 'Horch', NULL, 1), -- id = 351
(NULL, 'Hotchkiss', NULL, 1), -- id = 352
(NULL, 'HRG', NULL, 1), -- id = 353
(NULL, 'HSV', NULL, 1), -- id = 354
(NULL, 'Huali', NULL, 1), -- id = 355
(NULL, 'Huanghai', NULL, 1), -- id = 356
(NULL, 'Hudson', NULL, 1), -- id = 357
(NULL, 'Hugot', NULL, 1), -- id = 358
(NULL, 'Humber', NULL, 1), -- id = 359
(NULL, 'Hummer', NULL, 1), -- id = 360
(NULL, 'Hupmobile', NULL, 1), -- id = 361
(NULL, 'Hurtu', NULL, 1), -- id = 362
(NULL, 'Huselton', NULL, 1), -- id = 363
(NULL, 'Hyundai', NULL, 1), -- id = 364
(NULL, 'Hyundai by Beijing', NULL, 1), -- id = 365
(NULL, 'Hyundai by Huatai', NULL, 1), -- id = 366

-- I

(NULL, 'Idea', NULL, 1), -- id = 367
(NULL, 'IFA', NULL, 1), -- id = 368
(NULL, 'IHC', NULL, 1), -- id = 369
(NULL, 'Imperia', NULL, 1), -- id = 370
(NULL, 'Imperial', NULL, 1), -- id = 371
(NULL, 'Infiniti', NULL, 1), -- id = 372
(NULL, 'Innocenti', NULL, 1), -- id = 373
(NULL, 'Inter', NULL, 1), -- id = 374
(NULL, 'Inter-State', NULL, 1), -- id = 375
(NULL, 'International Harverter', NULL, 1), -- id = 376
(NULL, 'Invicta', NULL, 1), -- id = 377
(NULL, 'Iran Khodro', NULL, 1), -- id = 378
(NULL, 'Irmscher', NULL, 1), -- id = 379
(NULL, 'Isatis', NULL, 1), -- id = 380
(NULL, 'Isdera', NULL, 1), -- id = 381
(NULL, 'Iso Rivolta', NULL, 1), -- id = 382
(NULL, 'Isotta-Fraschini', NULL, 1), -- id = 383
(NULL, 'Isuzu', NULL, 1), -- id = 384
(NULL, 'Itala', NULL, 1), -- id = 385
(NULL, 'Italdesign Giugiaro', NULL, 1), -- id = 386
(NULL, 'Izhmash JSC', NULL, 1), -- id = 387

-- J

(NULL, 'JAC', NULL, 1), -- id = 388
(NULL, 'Jackson', NULL, 1), -- id = 389
(NULL, 'Jacquot', NULL, 1), -- id = 390
(NULL, 'Jaguar', NULL, 1), -- id = 391
(NULL, 'Jean Piat', NULL, 1), -- id = 392
(NULL, 'Jeanperrin', NULL, 1), -- id = 393
(NULL, 'Jeep', NULL, 1), -- id = 394
(NULL, 'Jeep by Beijing', NULL, 1), -- id = 395
(NULL, 'Jenatzy', NULL, 1), -- id = 396
(NULL, 'Jensen', NULL, 1), -- id = 397
(NULL, 'Jewel', NULL, 1), -- id = 398
(NULL, 'Jiangling by (JMC)', NULL, 1), -- id = 399
(NULL, 'Jiangnan', NULL, 1), -- id = 400
(NULL, 'Jide', NULL, 1), -- id = 401
(NULL, 'Jimenez Motor', NULL, 1), -- id = 402
(NULL, 'Jinbei', NULL, 1), -- id = 403
(NULL, 'Jincheng', NULL, 1), -- id = 404
(NULL, 'Jiotto', NULL, 1), -- id = 405
(NULL, 'Josse Car', NULL, 1), -- id = 406
(NULL, 'Jowett', NULL, 1), -- id = 407
(NULL, 'JPX', NULL, 1), -- id = 408
(NULL, 'Juwel', NULL, 1), -- id = 409
(NULL, 'JVA', NULL, 1), -- id = 410

-- K

(NULL, 'Kaiser', NULL, 1), -- id = 411
(NULL, 'Kamaz', NULL, 1), -- id = 412
(NULL, 'Karns', NULL, 1), -- id = 413
(NULL, 'Karry', NULL, 1), -- id = 414
(NULL, 'Kenny Brown', NULL, 1), -- id = 415
(NULL, 'Kewet', NULL, 1), -- id = 416
(NULL, 'Kia', NULL, 1), -- id = 417
(NULL, 'Kia by Dongfeng', NULL, 1), -- id = 418
(NULL, 'Kiblinger', NULL, 1), -- id = 419
(NULL, 'KIM', NULL, 1), -- id = 420
(NULL, 'King', NULL, 1), -- id = 421
(NULL, 'Kissel', NULL, 1), -- id = 422
(NULL, 'Knight', NULL, 1), -- id = 423
(NULL, 'Knox', NULL, 1), -- id = 424
(NULL, 'Koenigsegg', NULL, 1), -- id = 425
(NULL, 'Kougar', NULL, 1), -- id = 426
(NULL, 'Krieger', NULL, 1), -- id = 427
(NULL, 'Krit', NULL, 1), -- id = 428
(NULL, 'KTM', NULL, 1), -- id = 429
(NULL, 'Kurtis Kraft', NULL, 1), -- id = 430

-- L

(NULL, 'La Buire', NULL, 1), -- id = 431
(NULL, 'Lacoste et Battman', NULL, 1), -- id = 432
(NULL, 'Lacroix De Laville', NULL, 1), -- id = 433
(NULL, 'Lada', NULL, 1), -- id = 434
(NULL, 'Lafayette', NULL, 1), -- id = 435
(NULL, 'Lagonda', NULL, 1), -- id = 436
(NULL, 'Lambert', NULL, 1), -- id = 437
(NULL, 'Lambert', NULL, 1), -- id = 438
(NULL, 'Lamborghini', NULL, 1), -- id = 439
(NULL, 'Lanchester', NULL, 1), -- id = 440
(NULL, 'Lancia', NULL, 1), -- id = 441
(NULL, 'Land Rover', NULL, 1), -- id = 442
(NULL, 'Lanza', NULL, 1), -- id = 443
(NULL, 'Larrousse', NULL, 1), -- id = 444
(NULL, 'Lasalle', NULL, 1), -- id = 445
(NULL, 'Latil', NULL, 1), -- id = 446
(NULL, 'Laurin & Klement', NULL, 1), -- id = 447
(NULL, 'Le Zebre', NULL, 1), -- id = 448
(NULL, 'Lea Francis', NULL, 1), -- id = 449
(NULL, 'Leading Edge', NULL, 1), -- id = 450
(NULL, 'Leblanc', NULL, 1), -- id = 451
(NULL, 'Lenham', NULL, 1), -- id = 452
(NULL, 'Leon Bollee', NULL, 1), -- id = 453
(NULL, 'Lexus', NULL, 1), -- id = 454
(NULL, 'Leyland', NULL, 1), -- id = 455
(NULL, 'Lifan', NULL, 1), -- id = 456
(NULL, 'Lightning Car Company', NULL, 1), -- id = 457
(NULL, 'Ligier', NULL, 1), -- id = 458
(NULL, 'Lincoln', NULL, 1), -- id = 459
(NULL, 'Lindsley', NULL, 1), -- id = 460
(NULL, 'Linon', NULL, 1), -- id = 461
(NULL, 'Lister', NULL, 1), -- id = 462
(NULL, 'Little', NULL, 1), -- id = 463
(NULL, 'Lloyd', NULL, 1), -- id = 464
(NULL, 'LMX', NULL, 1), -- id = 465
(NULL, 'Locomobile', NULL, 1), -- id = 466
(NULL, 'Lohner', NULL, 1), -- id = 467
(NULL, 'Lola', NULL, 1), -- id = 468
(NULL, 'Lombardi', NULL, 1), -- id = 469
(NULL, 'London Taxis', NULL, 1), -- id = 470
(NULL, 'Lotec', NULL, 1), -- id = 471
(NULL, 'Lozier', NULL, 1), -- id = 472
(NULL, 'Luaz', NULL, 1), -- id = 473
(NULL, 'Luc Court', NULL, 1), -- id = 474
(NULL, 'Lumeneo', NULL, 1), -- id = 475
(NULL, 'Lotus', NULL, 1), -- id = 476
(NULL, 'Luxior', NULL, 1), -- id = 477

-- M

(NULL, 'MAF', NULL, 1), -- id = 478
(NULL, 'Magna Steyr', NULL, 1), -- id = 479
(NULL, 'Mahindra', NULL, 1), -- id = 480
(NULL, 'Malicet et Blin', NULL, 1), -- id = 481
(NULL, 'Manic', NULL, 1), -- id = 482
(NULL, 'Mansory', NULL, 1), -- id = 483
(NULL, 'Marathon', NULL, 1), -- id = 484
(NULL, 'Marauder', NULL, 1), -- id = 485
(NULL, 'Marble-Swift', NULL, 1), -- id = 486
(NULL, 'Marcadier', NULL, 1), -- id = 487
(NULL, 'Marchand', NULL, 1), -- id = 488
(NULL, 'Marcos', NULL, 1), -- id = 489
(NULL, 'Marion', NULL, 1), -- id = 490
(NULL, 'Markus', NULL, 1), -- id = 491
(NULL, 'Marmon', NULL, 1), -- id = 492
(NULL, 'Martin', NULL, 1), -- id = 493
(NULL, 'Marussia', NULL, 1), -- id = 494
(NULL, 'Maruti Udyog', NULL, 1), -- id = 495
(NULL, 'Maserati', NULL, 1), -- id = 496
(NULL, 'Mathis', NULL, 1), -- id = 497
(NULL, 'Matra', NULL, 1), -- id = 498
(NULL, 'Maurer-Union', NULL, 1), -- id = 499
(NULL, 'Maximag', NULL, 1), -- id = 500
(NULL, 'Maxwell', NULL, 1), -- id = 501
(NULL, 'Maybach', NULL, 1), -- id = 502
(NULL, 'Mazda', NULL, 1), -- id = 503
(NULL, 'Mazda by Changan', NULL, 1), -- id = 504
(NULL, 'Mc Farlan', NULL, 1), -- id = 505
(NULL, 'McLaren', NULL, 1), -- id = 506
(NULL, 'MCV', NULL, 1), -- id = 507
(NULL, 'Mecanique et moteurs', NULL, 1), -- id = 508
(NULL, 'Mega', NULL, 1), -- id = 509
(NULL, 'Melkus', NULL, 1), -- id = 510
(NULL, 'Menier', NULL, 1), -- id = 511
(NULL, 'Menon', NULL, 1), -- id = 512
(NULL, 'Mercedes', NULL, 1), -- id = 513
(NULL, 'Mercedes-Benz', NULL, 1), -- id = 514
(NULL, 'Mercedes-Benz by Beijing', NULL, 1), -- id = 515
(NULL, 'Mercer', NULL, 1), -- id = 516
(NULL, 'Mercury', NULL, 1), -- id = 517
(NULL, 'Merkur', NULL, 1), -- id = 518
(NULL, 'Messerschmitt', NULL, 1), -- id = 519
(NULL, 'Messier', NULL, 1), -- id = 520
(NULL, 'Metallurgique', NULL, 1), -- id = 521
(NULL, 'Metrocab', NULL, 1), -- id = 522
(NULL, 'Metropolitan', NULL, 1), -- id = 523
(NULL, 'Metz', NULL, 1), -- id = 524
(NULL, 'MG', NULL, 1), -- id = 525
(NULL, 'Michigan', NULL, 1), -- id = 526
(NULL, 'Miesse', NULL, 1), -- id = 527
(NULL, 'Milburn', NULL, 1), -- id = 528
(NULL, 'Minerva', NULL, 1), -- id = 529
(NULL, 'Mini', NULL, 1),-- id = 530
(NULL, 'Mini Jem', NULL, 1),-- id = 531
(NULL, 'Mitchell', NULL, 1),-- id = 532
(NULL, 'Mitsubishi', NULL, 1),-- id = 533
(NULL, 'Mitsubishi by Beijing', NULL, 1),-- id = 534
(NULL, 'Mitsubishi by China Motor', NULL, 1),-- id = 535
(NULL, 'Mitsuoka', NULL, 1),-- id = 536
(NULL, 'Mochet', NULL, 1),-- id = 537
(NULL, 'Monaco-Trossi', NULL, 1),-- id = 538
(NULL, 'Monet-Goyon', NULL, 1),-- id = 539
(NULL, 'Monica', NULL, 1),-- id = 540
(NULL, 'Monotrace', NULL, 1),-- id = 541
(NULL, 'Montier', NULL, 1),-- id = 542
(NULL, 'Moon Motor Car', NULL, 1),-- id = 543
(NULL, 'Moretti', NULL, 1),-- id = 544
(NULL, 'Morgan', NULL, 1),-- id = 545
(NULL, 'Morris', NULL, 1),-- id = 546
(NULL, 'Mors', NULL, 1),-- id = 547
(NULL, 'Moskvitch', NULL, 1),-- id = 548
(NULL, 'Mosquito', NULL, 1),-- id = 549
(NULL, 'Motobloc', NULL, 1),-- id = 550
(NULL, 'Moustique', NULL, 1),-- id = 551
(NULL, 'Mugen', NULL, 1),-- id = 552
(NULL, 'Mullen', NULL, 1),-- id = 553
(NULL, 'Muntz', NULL, 1),-- id = 554
(NULL, 'Myers Motors', NULL, 1),-- id = 555

-- N

(NULL, 'Nagant', NULL, 1),-- id = 556
(NULL, 'Napier', NULL, 1),-- id = 557
(NULL, 'Nash', NULL, 1),-- id = 558
(NULL, 'National', NULL, 1),-- id = 559
(NULL, 'Neckar', NULL, 1),-- id = 560
(NULL, 'Nesselsdorf', NULL, 1),-- id = 561
(NULL, 'Neustadt', NULL, 1),-- id = 562
(NULL, 'New Map', NULL, 1),-- id = 563
(NULL, 'Nissan', NULL, 1),-- id = 564
(NULL, 'Nissan by Dongfeng', NULL, 1),-- id = 565
(NULL, 'Nissan by Zhengzou', NULL, 1),-- id = 566
(NULL, 'Noble', NULL, 1),-- id = 567
(NULL, 'Nota', NULL, 1),-- id = 568
(NULL, 'Nova cars', NULL, 1),-- id = 569
(NULL, 'Northern', NULL, 1),-- id = 570
(NULL, 'NSU', NULL, 1),-- id = 571

-- O

(NULL, 'Oakland', NULL, 1),-- id = 572
(NULL, 'Ohta', NULL, 1),-- id = 573
(NULL, 'Oldsmobile', NULL, 1),-- id = 574
(NULL, 'OM', NULL, 1),-- id = 575
(NULL, 'Omega-Six', NULL, 1),-- id = 576
(NULL, 'Opel', NULL, 1),-- id = 577
(NULL, 'Opel Energy', NULL, 1),-- id = 578
(NULL, 'Orca', NULL, 1),-- id = 579
(NULL, 'Oreca', NULL, 1),-- id = 580
(NULL, 'Orient', NULL, 1),-- id = 581
(NULL, 'Orient Express', NULL, 1),-- id = 582
(NULL, 'Otto', NULL, 1),-- id = 583
(NULL, 'Overland', NULL, 1),-- id = 584

-- P

(NULL, 'Packard', NULL, 1),-- id = 585
(NULL, 'Pagani', NULL, 1),-- id = 586
(NULL, 'Paige', NULL, 1),-- id = 587
(NULL, 'Panhard et Levassor', NULL, 1),-- id = 588
(NULL, 'Panoz', NULL, 1),-- id = 589
(NULL, 'Panther', NULL, 1),-- id = 590
(NULL, 'Parradine', NULL, 1),-- id = 591
(NULL, 'Pars Khodro', NULL, 1),-- id = 592
(NULL, 'Paterson', NULL, 1),-- id = 593
(NULL, 'Pathfinder', NULL, 1),-- id = 594
(NULL, 'Pawl', NULL, 1),-- id = 595
(NULL, 'Peerless', NULL, 1),-- id = 596
(NULL, 'Pegaso', NULL, 1),-- id = 597
(NULL, 'Pennington', NULL, 1),-- id = 598
(NULL, 'Penske Racing', NULL, 1),-- id = 589
(NULL, 'Peroda', NULL, 1),-- id = 600
(NULL, 'Perry', NULL, 1),-- id = 601
(NULL, 'Peugeot', NULL, 1),-- id = 602
(NULL, 'Peugeot by Dongfeng', NULL, 1),-- id = 603
(NULL, 'Philos', NULL, 1),-- id = 604
(NULL, 'Pic-Pic', NULL, 1),-- id = 605
(NULL, 'Piccolo', NULL, 1),-- id = 606
(NULL, 'Pieper', NULL, 1),-- id = 607
(NULL, 'Pierce Arrow', NULL, 1),-- id = 608
(NULL, 'Pierron', NULL, 1),-- id = 609
(NULL, 'Pilain', NULL, 1),-- id = 610
(NULL, 'Pilbeam', NULL, 1),-- id = 611
(NULL, 'Pilot', NULL, 1),-- id = 612
(NULL, 'Pininfarina', NULL, 1),-- id = 613
(NULL, 'Pipe', NULL, 1),-- id = 614
(NULL, 'Plymouth', NULL, 1),-- id = 615
(NULL, 'PM', NULL, 1),-- id = 616
(NULL, 'Pontiac', NULL, 1),-- id = 617
(NULL, 'Pope-Hartfort', NULL, 1),-- id = 618
(NULL, 'Pope-Toledo', NULL, 1),-- id = 619
(NULL, 'Pope-Waverly', NULL, 1),-- id = 620
(NULL, 'Popp', NULL, 1),-- id = 621
(NULL, 'Porsche', NULL, 1),-- id = 622
(NULL, 'Praga', NULL, 1),-- id = 623
(NULL, 'Pratt-Elkhart', NULL, 1),-- id = 624
(NULL, 'Premier', NULL, 1),-- id = 625
(NULL, 'Prince', NULL, 1),-- id = 626
(NULL, 'Prinetti & Stucchi', NULL, 1),-- id = 627
(NULL, 'Prost', NULL, 1),-- id = 628
(NULL, 'Proton', NULL, 1),-- id = 629
(NULL, 'Protos', NULL, 1),-- id = 630
(NULL, 'PSA', NULL, 1),-- id = 631
(NULL, 'Pullman', NULL, 1),-- id = 632
(NULL, 'Puma', NULL, 1),-- id = 633
(NULL, 'Pyeonghwa', NULL, 1),-- id = 634

-- Q

(NULL, 'Quantum', NULL, 1), -- id = 635
(NULL, 'Queen', NULL, 1), -- id = 636
(NULL, 'Qvale', NULL, 1), -- id = 637

-- R

(NULL, 'Raceabout', NULL, 1), -- id = 638
(NULL, 'Railton', NULL, 1), -- id = 639
(NULL, 'Rally', NULL, 1), -- id = 640
(NULL, 'Rambler', NULL, 1), -- id = 641
(NULL, 'Ranger', NULL, 1), -- id = 642
(NULL, 'Rauch & Lang', NULL, 1), -- id = 643
(NULL, 'Ravel', NULL, 1), -- id = 644
(NULL, 'Rayton Fissore', NULL, 1), -- id = 645
(NULL, 'RCH', NULL, 1), -- id = 646
(NULL, 'RECC', NULL, 1), -- id = 647
(NULL, 'Reliable Dayton', NULL, 1), -- id = 648
(NULL, 'Reliant', NULL, 1), -- id = 649
(NULL, 'Renault', NULL, 1), -- id = 650 -- Jussqu'ici tout est bon
(NULL, 'Reo', NULL, 1), -- id = 651
(NULL, 'ReVere', NULL, 1), -- id = 652
(NULL, 'Reyonnah', NULL, 1), -- id = 653
(NULL, 'Rheda', NULL, 1), -- id = 654
(NULL, 'Rickenbacker', NULL, 1), -- id = 655
(NULL, 'Riley', NULL, 1), -- id = 656
(NULL, 'Ripert', NULL, 1), -- id = 657
(NULL, 'Rinspeed', NULL, 1), -- id = 658
(NULL, 'Rochdale', NULL, 1), -- id = 659
(NULL, 'Rochet', NULL, 1), -- id = 660
(NULL, 'Rochet-Scneider', NULL, 1), -- id = 661
(NULL, 'Rockne', NULL, 1), -- id = 662
(NULL, 'Roewe', NULL, 1), -- id = 663
(NULL, 'Rolland-Pilain', NULL, 1), -- id = 664
(NULL, 'Rolls-Royce', NULL, 1), -- id = 665
(NULL, 'Rolux', NULL, 1), -- id = 666
(NULL, 'Rom Carmel', NULL, 1), -- id = 667
(NULL, 'Rondeau', NULL, 1), -- id = 668
(NULL, 'Roper', NULL, 1), -- id = 669
(NULL, 'Rosengart', NULL, 1), -- id = 670
(NULL, 'Rossion', NULL, 1), -- id = 671
(NULL, 'Rover', NULL, 1), -- id = 672
(NULL, 'Rovin', NULL, 1), -- id = 673
(NULL, 'Royal Enfield', NULL, 1), -- id = 674
(NULL, 'Royal Star', NULL, 1), -- id = 675
(NULL, 'Rumpf', NULL, 1), -- id = 676
(NULL, 'Russo-Baltique', NULL, 1), -- id = 677
(NULL, 'Ruxton', NULL, 1), -- id = 678

-- S

(NULL, 'Saab', NULL, 1), -- id = 679
(NULL, 'Sabra', NULL, 1), -- id = 680
(NULL, 'Sage', NULL, 1), -- id = 681
(NULL, 'Saipa', NULL, 1), -- id = 682
(NULL, 'Salmson', NULL, 1), -- id = 683
(NULL, 'Samsung', NULL, 1), -- id = 684
(NULL, 'San', NULL, 1), -- id = 685
(NULL, 'Sandfort', NULL, 1), -- id = 686
(NULL, 'Santa Matilde', NULL, 1), -- id = 687
(NULL, 'Santana', NULL, 1), -- id = 688
(NULL, 'SARA', NULL, 1), -- id = 689
(NULL, 'Saturn', NULL, 1), -- id = 690
(NULL, 'Sauter', NULL, 1), -- id = 691
(NULL, 'Saxon', NULL, 1), -- id = 692
(NULL, 'Sbarro', NULL, 1), -- id = 693
(NULL, 'Scania', NULL, 1), -- id = 694
(NULL, 'SCAR', NULL, 1), -- id = 695
(NULL, 'SCAT', NULL, 1), -- id = 696
(NULL, 'Schuppan', NULL, 1), -- id = 697
(NULL, 'Scion', NULL, 1), -- id = 698 -- bon
(NULL, 'Scott Sociable', NULL, 1), -- id = 699
(NULL, 'Scearchmont', NULL, 1), -- id = 700
(NULL, 'Sears', NULL, 1), -- id = 701
(NULL, 'Seat', NULL, 1), -- id = 702
(NULL, 'Secma', NULL, 1), -- id = 703
(NULL, 'Secqueville-Hoyau', NULL, 1), -- id = 704
(NULL, 'Sefac', NULL, 1), -- id = 705
(NULL, 'Selden', NULL, 1), -- id = 706
(NULL, 'Senechal', NULL, 1), -- id = 707
(NULL, 'Serpollet', NULL, 1), -- id = 708
(NULL, 'Shanghai Maple Auto by (SMA)', NULL, 1), -- id = 709
(NULL, 'Sharp Arrow', NULL, 1), -- id = 710
(NULL, 'Shelby SuperCars', NULL, 1), -- id = 711
(NULL, 'ShuangHuan', NULL, 1), -- id = 712
(NULL, 'Siata', NULL, 1), -- id = 713
(NULL, 'Siddeley', NULL, 1), -- id = 714
(NULL, 'Sigma', NULL, 1), -- id = 715
(NULL, 'Sima-Violet', NULL, 1), -- id = 716
(NULL, 'Simca', NULL, 1), -- id = 717
(NULL, 'Simplex', NULL, 1), -- id = 718
(NULL, 'Simson Supra', NULL, 1), -- id = 719
(NULL, 'Singer', NULL, 1), -- id = 720
(NULL, 'Sipani', NULL, 1), -- id = 721
(NULL, 'Sizaire freres', NULL, 1), -- id = 722
(NULL, 'Sizaire-Berwick', NULL, 1), -- id = 723
(NULL, 'Sizaire-Naudin', NULL, 1), -- id = 724
(NULL, 'Skoda', NULL, 1), -- id = 725
(NULL, 'Smart', NULL, 1), -- id = 726
(NULL, 'Smith', NULL, 1), -- id = 727
(NULL, 'Snoeck', NULL, 1), -- id = 728
(NULL, 'Societe Manufacurierie d''Armes', NULL, 1), -- id = 729
(NULL, 'Soncin', NULL, 1), -- id = 730
(NULL, 'Sovam', NULL, 1), -- id = 731
(NULL, 'SPA', NULL, 1), -- id = 732
(NULL, 'Spectre', NULL, 1), -- id = 733
(NULL, 'Speedwell', NULL, 1), -- id = 734
(NULL, 'Springuel', NULL, 1), -- id = 735
(NULL, 'Spyker', NULL, 1), -- id = 736
(NULL, 'Ssangyong', NULL, 1), -- id = 737
(NULL, 'St. Louis', NULL, 1), -- id = 738
(NULL, 'Standard', NULL, 1), -- id = 739
(NULL, 'Standard Electric', NULL, 1), -- id = 740
(NULL, 'Stanguellini', NULL, 1), -- id = 741
(NULL, 'Stanley Motor Carriage Company', NULL, 1), -- id = 742
(NULL, 'Star', NULL, 1), -- id = 743
(NULL, 'Stearns', NULL, 1), -- id = 744
(NULL, 'Stellite', NULL, 1), -- id = 745
(NULL, 'Stephens', NULL, 1), -- id = 746
(NULL, 'Sterling', NULL, 1), -- id = 747
(NULL, 'Stevens Duryea', NULL, 1), -- id = 748
(NULL, 'Steyr Puch', NULL, 1), -- id = 749
(NULL, 'Stoddard-Dayton', NULL, 1), -- id = 750
(NULL, 'Studebaker', NULL, 1), -- id = 751
(NULL, 'Stutz', NULL, 1), -- id = 752
(NULL, 'Subaru', NULL, 1), -- id = 753
(NULL, 'Success', NULL, 1), -- id = 754
(NULL, 'Suere', NULL, 1), -- id = 755
(NULL, 'Sunbeam', NULL, 1), -- id = 756 -- 756
(NULL, 'Suzuki', NULL, 1), -- id = 757
(NULL, 'Suzuki by Changan', NULL, 1), -- id = 758
(NULL, 'Suzuki by Changhe', NULL, 1), -- id = 759
(NULL, 'Swallow', NULL, 1), -- id = 760
(NULL, 'Swift', NULL, 1), -- id = 761 -- bon

-- T

(NULL, 'Talbot', NULL, 1), -- id = 762
(NULL, 'Tata', NULL, 1), -- id = 763
(NULL, 'Tatra', NULL, 1), -- id = 764
(NULL, 'Tesla', NULL, 1), -- id = 765
(NULL, 'Th. Schneider', NULL, 1), -- id = 766
(NULL, 'Think', NULL, 1), -- id = 767
(NULL, 'Thomas', NULL, 1), -- id = 768
(NULL, 'Thompson Motor Company', NULL, 1), -- id = 769
(NULL, 'Thompson', NULL, 1), -- id = 770
(NULL, 'Tianjin', NULL, 1), -- id = 771
(NULL, 'Theodore', NULL, 1), -- id = 772
(NULL, 'Tofas', NULL, 1), -- id = 773
(NULL, 'Toledo', NULL, 1), -- id = 774
(NULL, 'Tomcar', NULL, 1), -- id = 775
(NULL, 'Tommy Kaira', NULL, 1), -- id = 776
(NULL, 'Touring', NULL, 1), -- id = 777
(NULL, 'Toyota', NULL, 1), -- id = 778
(NULL, 'Toyota by Guangzhou', NULL, 1), -- id = 779
(NULL, 'Toyota by Tianjin', NULL, 1), -- id = 780
(NULL, 'Trabant', NULL, 1), -- id = 781
(NULL, 'Tracta Trident', NULL, 1), -- id = 782
(NULL, 'Trident', NULL, 1), -- id = 783
(NULL, 'Triumph', NULL, 1), -- id = 784
(NULL, 'Trojan', NULL, 1), -- id = 785
(NULL, 'Troller', NULL, 1), -- id = 786
(NULL, 'Trucker', NULL, 1), -- id = 787
(NULL, 'Turcat-Mery', NULL, 1), -- id = 788
(NULL, 'Turicum', NULL, 1), -- id = 789
(NULL, 'TVD', NULL, 1), -- id = 790
(NULL, 'TVR', NULL, 1), -- id = 791
(NULL, 'Tyrrell', NULL, 1), -- id = 792

-- U

(NULL, 'UAZ', NULL, 1), -- id = 793
(NULL, 'Ultima', NULL, 1), -- id = 794
(NULL, 'Umm', NULL, 1), -- id = 795
(NULL, 'Unic', NULL, 1), -- id = 796
(NULL, 'US Long Distance', NULL, 1), -- id = 797

-- V

(NULL, 'Vabis', NULL, 1), -- id = 798
(NULL, 'Vallee', NULL, 1), -- id = 799
(NULL, 'Van Diemen', NULL, 1), -- id = 800
(NULL, 'Vanden Plas', NULL, 1), -- id = 801
(NULL, 'Vauxhall', NULL, 1), -- id = 802
(NULL, 'Vector', NULL, 1), -- id = 803
(NULL, 'Velam', NULL, 1), -- id = 804
(NULL, 'Vermorel', NULL, 1), -- id = 805
(NULL, 'Vessa', NULL, 1), -- id = 806
(NULL, 'Victor', NULL, 1), -- id = 807
(NULL, 'Vincke', NULL, 1), -- id = 808
(NULL, 'Vinot-Deguingand', NULL, 1), -- id = 809
(NULL, 'Vision', NULL, 1), -- id = 810
(NULL, 'Vivinus', NULL, 1), -- id = 811
(NULL, 'Voisin', NULL, 1), -- id = 812
(NULL, 'Venturi', NULL, 1), -- id = 813
(NULL, 'Volkswagen', NULL, 1), -- id = 814
(NULL, 'Volkswagen by FAW', NULL, 1), -- id = 815
(NULL, 'Volkswagen by Shanghai', NULL, 1), -- id = 816
(NULL, 'Volvo', NULL, 1), -- id = 817 -- bonne valeur

-- W

(NULL, 'Waltham', NULL, 1),-- id = 818
(NULL, 'Wanderer', NULL, 1), -- id = 819
(NULL, 'Warsawa', NULL, 1), -- id = 820
(NULL, 'Wartburg', NULL, 1), -- id = 821
(NULL, 'Washington', NULL, 1),-- id = 822
(NULL, 'Wayne', NULL, 1),-- id = 823
(NULL, 'Weber', NULL, 1),-- id = 824
(NULL, 'Westcott', NULL, 1),-- id = 825
(NULL, 'Westfield', NULL, 1),-- id = 826
(NULL, 'Whippet', NULL, 1),-- id = 827
(NULL, 'White', NULL, 1),-- id = 828
(NULL, 'Wiesmann', NULL, 1),-- id = 829
(NULL, 'Wills Sainte Claire', NULL, 1),-- id = 830
(NULL, 'Willys', NULL, 1),-- id = 831
(NULL, 'Willys Overland Crossley', NULL, 1),-- id = 832
(NULL, 'Willys-Knight', NULL, 1),-- id = 833
(NULL, 'Willys-Overland', NULL, 1),-- id = 834
(NULL, 'Winton', NULL, 1),-- id = 835
(NULL, 'Wolseley', NULL, 1),-- id = 836
(NULL, 'Woodill', NULL, 1),-- id = 837
(NULL, 'Woods Electric', NULL, 1),-- id = 838
(NULL, 'Worth', NULL, 1),-- id = 839
(NULL, 'WR', NULL, 1),-- id = 840
(NULL, 'WSK', NULL, 1),-- id = 841
(NULL, 'Wuling', NULL, 1),-- id = 842

-- X

(NULL, 'Xedos', NULL, 1),-- id = 843

-- Y

(NULL, 'Yamaha', NULL, 1),-- id = 844
(NULL, 'Yes', NULL, 1),-- id = 845
(NULL, 'Yulon', NULL, 1),-- id = 846
(NULL, 'Yunque', NULL, 1),-- id = 847

-- Z

(NULL, 'Zastava', NULL, 1),-- id = 848
(NULL, 'Zaz', NULL, 1),-- id = 849
(NULL, 'Zender', NULL, 1),-- id = 850
(NULL, 'Zenvo', NULL, 1),-- id = 851
(NULL, 'Zenghua', NULL, 1),-- id = 852
(NULL, 'Zil', NULL, 1),-- id = 853
(NULL, 'Zis', NULL, 1),-- id = 854
(NULL, 'Zotye', NULL, 1),-- id = 855
(NULL, 'Zündapp', NULL, 1); -- id = 856


-- --------------------------------------------------------

--
-- Contenu de la table `tbl_vechicle_types`
--

INSERT INTO `tbl_vechicle_types` (`vechicle_type_id`, `vechicle_type_name`, `vechicle_image`, `category_id`, `vechicle_createdate`, `isactive`) VALUES

(NULL, 'MiTo', '0', 19, NULL, 1), -- 19 = Alfa Romeo
(NULL, 'Giulietta', '0', 19, NULL, 1),
(NULL, '159/159 SW', '0', 19, NULL, 1),
(NULL, 'Brera/Spider', '0', 19, NULL, 1),
(NULL, '8C', '0', 19, NULL, 1),

(NULL, 'V8 Vantage & Roadster', '0', 55, NULL, 1), -- 55 = Aston Martin
(NULL, 'DB9 & Volante', '0', 55, NULL, 1),
(NULL, 'Vanquish S', '0', 55, NULL, 1),

(NULL, 'A1', '0', 58, NULL, 1), -- 58 Audi
(NULL, 'A3', '0', 58, NULL, 1),
(NULL, 'A3 Cabriolet', '0', 58, NULL, 1),
(NULL, 'A4', '0', 58, NULL, 1),
(NULL, 'A4 Allroad', '0', 58, NULL, 1),
(NULL, 'A5/A5 Sportback', '0', 58, NULL, 1),
(NULL, 'A6', '0', 58, NULL, 1),
(NULL, 'A6 Allroad', '0', 58, NULL, 1),
(NULL, 'A8', '0', 58, NULL, 1),
(NULL, 'Q5', '0', 58, NULL, 1),
(NULL, 'Q7', '0', 58, NULL, 1),
(NULL, 'S3', '0', 58, NULL, 1),
(NULL, 'S4', '0', 58, NULL, 1),
(NULL, 'S5/RS5', '0', 58, NULL, 1),
(NULL, 'S6/RS6', '0', 58, NULL, 1),
(NULL, 'TT', '0', 58, NULL, 1),
(NULL, 'R8', '0', 58, NULL, 1),

(NULL, 'Continental GT/GTC', '0', 91, NULL, 1), -- 91 = Bentley
(NULL, 'Continental Flying Spur', '0', 91, NULL, 1),
(NULL, 'Arnage', '0', 91, NULL, 1),
(NULL, 'Azure', '0', 91, NULL, 1),
(NULL, 'Brooklands', '0', 91, NULL, 1),

(NULL, 'Série 1', '0', 103, NULL, 1), -- 103 BMW
(NULL, 'Série 1 Coupé/Cabrio', '0', 103, NULL, 1),
(NULL, 'Série 3', '0', 103, NULL, 1),
(NULL, 'Série 3 Coupé et CC', '0', 103, NULL, 1),
(NULL, 'Série 5', '0', 103, NULL, 1),
(NULL, 'Série 5 GT', '0', 103, NULL, 1),
(NULL, 'Série 6', '0', 103, NULL, 1),
(NULL, 'Série 7', '0', 103, NULL, 1),
(NULL, 'X1', '0', 103, NULL, 1),
(NULL, 'X5', '0', 103, NULL, 1),
(NULL, 'X6', '0', 103, NULL, 1),
(NULL, 'Z4 Roadster', '0', 103, NULL, 1),
(NULL, 'M3', '0', 103, NULL, 1),
(NULL, 'M5', '0', 103, NULL, 1),
(NULL, 'X5 M', '0', 103, NULL, 1),
(NULL, 'X6 M', '0', 103, NULL, 1),

(NULL, 'Veyron', '0', 125, NULL, 1), -- 125 = Bugatti

(NULL, 'BLS', '0', 128, NULL, 1), -- 128 = Cadillac
(NULL, 'CTS', '0', 128, NULL, 1),
(NULL, 'STS', '0', 128, NULL, 1),
(NULL, 'SRX', '0', 128, NULL, 1),
(NULL, 'XLR', '0', 128, NULL, 1),
(NULL, 'Escalade', '0', 128, NULL, 1),
(NULL, 'Seville', '0', 128, NULL, 1),

(NULL, 'Matiz', '0', 150, NULL, 1), -- 150 = Chevrolet
(NULL, 'Aveo', '0', 150, NULL, 1),
(NULL, 'Lacetti', '0', 150, NULL, 1),
(NULL, 'Nubira', '0', 150, NULL, 1),
(NULL, 'Epica', '0', 150, NULL, 1),
(NULL, 'Captiva', '0', 150, NULL, 1),
(NULL, 'Evanda', '0', 150, NULL, 1),
(NULL, 'Kalos', '0', 150, NULL, 1),
(NULL, 'Rezzo', '0', 150, NULL, 1),

(NULL, 'PT Cruiser', '0', 152, NULL, 1), -- 152 = Chrysler
(NULL, '300C', '0', 152, NULL, 1),
(NULL, 'Voyager', '0', 152, NULL, 1),
(NULL, 'Crossfire', '0', 152, NULL, 1),

(NULL, 'C1', '0', 157, NULL, 1), -- 157 = Citroen
(NULL, 'C3', '0', 157, NULL, 1),
(NULL, 'DS3', '0', 157, NULL, 1),
(NULL, 'C3 Picasso', '0', 157, NULL, 1),
(NULL, 'Nemo Combi', '0', 157, NULL, 1),
(NULL, 'Berlingo', '0', 157, NULL, 1),
(NULL, 'C4/C4 Coupé', '0', 157, NULL, 1),
(NULL, 'C4 Picasso/Grand Picasso', '0', 157, NULL, 1),
(NULL, 'C5/C5 Tourer', '0', 157, NULL, 1),
(NULL, 'C6', '0', 157, NULL, 1),
(NULL, 'C8', '0', 157, NULL, 1),
(NULL, 'C-Crosser', '0', 157, NULL, 1),

(NULL, 'Cuore', '0', 188, NULL, 1), -- 188 = Daihatsu
(NULL, 'Trevis', '0', 188, NULL, 1), 
(NULL, 'Sirion', '0', 188, NULL, 1), 
(NULL, 'Materia', '0', 188, NULL, 1), 
(NULL, 'Copen', '0', 188, NULL, 1), 
(NULL, 'Terios', '0', 188, NULL, 1), 

(NULL, 'Caliber', '0', 222, NULL, 1), -- 222 = Dodge
(NULL, 'Viper', '0', 222, NULL, 1), 

(NULL, 'California', '0', 264, NULL, 1), -- 264 = Ferrari
(NULL, 'F 430/F430 Spider', '0', 264, NULL, 1),
(NULL, '599 GTB', '0', 264, NULL, 1),
(NULL, '612 Scaglietti', '0', 264, NULL, 1),
(NULL, 'Enzo', '0', 264, NULL, 1),

(NULL, 'Panda', '0', 265, NULL, 1), -- 265 = Fiat
(NULL, '500/500C', '0', 265, NULL, 1),
(NULL, 'Punto Evo', '0', 265, NULL, 1),
(NULL, 'Idea', '0', 265, NULL, 1),
(NULL, 'Sedici', '0', 265, NULL, 1),
(NULL, 'Doblo', '0', 265, NULL, 1),
(NULL, 'Qubo', '0', 265, NULL, 1),
(NULL, 'Bravo', '0', 265, NULL, 1),
(NULL, 'Croma SW', '0', 265, NULL, 1),
(NULL, 'Ulysse', '0', 265, NULL, 1),

(NULL, 'Ka', '0', 274, NULL, 1), -- 274 = Ford
(NULL, 'Fiesta', '0', 274, NULL, 1), 
(NULL, 'Fusion', '0', 274, NULL, 1), 
(NULL, 'Focus', '0', 274, NULL, 1), 
(NULL, 'Focus C-C', '0', 274, NULL, 1), 
(NULL, 'Focus C-Max', '0', 274, NULL, 1), 
(NULL, 'Mondeo', '0', 274, NULL, 1), 
(NULL, 'S-Max', '0', 274, NULL, 1), 
(NULL, 'Galaxy', '0', 274, NULL, 1), 
(NULL, 'Ranger', '0', 274, NULL, 1), 
(NULL, 'Mustang GT', '0', 274, NULL, 1), 
(NULL, 'GT', '0', 274, NULL, 1), 

(NULL, 'Jazz', '0', 347, NULL, 1), -- 347 = Honda
(NULL, 'Civic', '0', 347, NULL, 1), 
(NULL, 'Civic Type R', '0', 347, NULL, 1), 
(NULL, 'FR-V', '0', 347, NULL, 1), 
(NULL, 'Accord', '0', 347, NULL, 1), 
(NULL, 'CR-V', '0', 347, NULL, 1), 
(NULL, 'S2000', '0', 347, NULL, 1), 
(NULL, 'Legend', '0', 347, NULL, 1), 

(NULL, 'H1', '0', 360, NULL, 1), -- 360 = Hummer
(NULL, 'H2', '0', 360, NULL, 1), 
(NULL, 'H3', '0', 360, NULL, 1), 

(NULL, 'Atos Prime', '0', 364, NULL, 1), -- 364 = Hyundai
(NULL, 'Getz', '0', 364, NULL, 1), 
(NULL, 'Matrix', '0', 364, NULL, 1), 
(NULL, 'Coupé', '0', 364, NULL, 1), 
(NULL, 'Sonata', '0', 364, NULL, 1), 
(NULL, 'Azera', '0', 364, NULL, 1), 
(NULL, 'Trajet', '0', 364, NULL, 1), 
(NULL, 'Tucson', '0', 364, NULL, 1), 
(NULL, 'Santa Fe', '0', 364, NULL, 1), 
(NULL, 'Terracan', '0', 364, NULL, 1), 

(NULL, 'D-Max', '0', 384, NULL, 1), -- 379 = Isuzu

(NULL, 'X-Type', '0', 391, NULL, 1), -- 391 = Jaguar
(NULL, 'S-Type', '0', 391, NULL, 1), 
(NULL, 'XJ', '0', 391, NULL, 1), 
(NULL, 'XK', '0', 391, NULL, 1), 

(NULL, 'Cherokee', '0', 394, NULL, 1), -- 394 = Jeep
(NULL, 'Grand Cherokee', '0', 394, NULL, 1), 
(NULL, 'Wrangler', '0', 394, NULL, 1), 

(NULL, 'Picanto', '0', 417, NULL, 1), -- 417 = Kia
(NULL, 'Rio', '0', 417, NULL, 1),
(NULL, 'Cerato', '0', 417, NULL, 1),
(NULL, 'Carens', '0', 417, NULL, 1),
(NULL, 'Carnival', '0', 417, NULL, 1),
(NULL, 'Magentis', '0', 417, NULL, 1),
(NULL, 'Opirus', '0', 417, NULL, 1),
(NULL, 'Sorento', '0', 417, NULL, 1),
(NULL, 'Sportage', '0', 417, NULL, 1),

(NULL, '110', '0', 434, NULL, 1), -- 434 = Lada
(NULL, '111', '0', 434, NULL, 1),
(NULL, '112', '0', 434, NULL, 1),
(NULL, 'Niva', '0', 434, NULL, 1),

(NULL, 'Gallardo', '0', 439, NULL, 1), -- 439 = Lamborghini
(NULL, 'Murciélago LP 640', '0', 439, NULL, 1),

(NULL, 'Musa', '0', 441, NULL, 1), -- 441 = Lancia
(NULL, 'Ypsilon', '0', 441, NULL, 1),
(NULL, 'Lybra', '0', 441, NULL, 1),
(NULL, 'Thesis', '0', 441, NULL, 1),
(NULL, 'Phedra', '0', 441, NULL, 1),

(NULL, 'IS', '0', 454, NULL, 1), -- 454 = Lexus
(NULL, 'GS', '0', 454, NULL, 1), 
(NULL, 'LS', '0', 454, NULL, 1), 
(NULL, 'RX', '0', 454, NULL, 1), 
(NULL, 'SC', '0', 454, NULL, 1), 

(NULL, 'Classe A', '0', 513, NULL, 1), -- 513 = Mercedes
(NULL, 'Classe B', '0', 513, NULL, 1), 
(NULL, 'Classe C', '0', 513, NULL, 1), 
(NULL, 'Classe C Coupé Sport', '0', 513, NULL, 1), 
(NULL, 'SLK', '0', 513, NULL, 1), 
(NULL, 'CLK', '0', 513, NULL, 1), 
(NULL, 'Classe E', '0', 513, NULL, 1), 
(NULL, 'CLS', '0', 513, NULL, 1), 
(NULL, 'Classe R', '0', 513, NULL, 1), 
(NULL, 'Classe S', '0', 513, NULL, 1), 
(NULL, 'CL', '0', 513, NULL, 1), 
(NULL, 'SL', '0', 513, NULL, 1), 
(NULL, 'Classe M', '0', 513, NULL, 1), 
(NULL, 'Classe GL', '0', 513, NULL, 1), 
(NULL, 'Classe G', '0', 513, NULL, 1), 
(NULL, 'SLK 55 AMG', '0', 513, NULL, 1), 
(NULL, 'SLK 63 AMG', '0', 513, NULL, 1), 
(NULL, 'E 63 AMG', '0', 513, NULL, 1), 
(NULL, 'CLS 63 AMG', '0', 513, NULL, 1), 
(NULL, 'R 63 AMG', '0', 513, NULL, 1), 
(NULL, 'ML 63 AMG', '0', 513, NULL, 1), 
(NULL, 'G 55 AMG', '0', 513, NULL, 1), 
(NULL, 'S 65 AMG', '0', 513, NULL, 1), 
(NULL, 'CL 65 AMG', '0', 513, NULL, 1), 
(NULL, 'SL 65 AMG', '0', 513, NULL, 1), 
(NULL, 'SLR', '0', 513, NULL, 1), 

(NULL, 'Agila', '0', 577, NULL, 1), -- 577 = Opel
(NULL, 'Tigra Twintop', '0', 577, NULL, 1),
(NULL, 'Corsa', '0', 577, NULL, 1),
(NULL, 'Meriva', '0', 577, NULL, 1),
(NULL, 'Astra', '0', 577, NULL, 1),
(NULL, 'Astra GTC', '0', 577, NULL, 1),
(NULL, 'Astra Twintop', '0', 577, NULL, 1),
(NULL, 'Zafira', '0', 577, NULL, 1),
(NULL, 'Vectra', '0', 577, NULL, 1),
(NULL, 'Signum', '0', 577, NULL, 1),
(NULL, 'Antara', '0', 577, NULL, 1),
(NULL, 'GT', '0', 577, NULL, 1),

(NULL, '107', '0', 602, NULL, 1), -- 602 = Peugeot
(NULL, '1007', '0', 602, NULL, 1), 
(NULL, '206 Plus', '0', 602, NULL, 1), 
(NULL, '207', '0', 602, NULL, 1), 
(NULL, '207 SW', '0', 602, NULL, 1), 
(NULL, '207 CC', '0', 602, NULL, 1), 
(NULL, 'Bipper Tepee', '0', 602, NULL, 1), 
(NULL, 'Partner Tepee', '0', 602, NULL, 1), 
(NULL, '308 & 308 SW', '0', 602, NULL, 1), 
(NULL, '308 CC', '0', 602, NULL, 1), 
(NULL, '407 & 407 SW', '0', 602, NULL, 1), 
(NULL, '407 Coupé', '0', 602, NULL, 1), 
(NULL, '607', '0', 602, NULL, 1), 
(NULL, '807', '0', 602, NULL, 1), 
(NULL, '3008', '0', 602, NULL, 1), 
(NULL, '4007', '0', 602, NULL, 1), 
(NULL, '5008', '0', 602, NULL, 1), 

(NULL, 'Twingo', '0', 650, NULL, 1), -- 650 = Renault
(NULL, 'Wind', '0', 650, NULL, 1), 
(NULL, 'Clio Campus', '0', 650, NULL, 1), 
(NULL, 'Clio/Clio Estate', '0', 650, NULL, 1), 
(NULL, 'Modus/Grand Modus', '0', 650, NULL, 1), 
(NULL, 'Kango & Estate', '0', 650, NULL, 1), 
(NULL, 'Mégane Coupé', '0', 650, NULL, 1), 
(NULL, 'Mégane CC', '0', 650, NULL, 1), 
(NULL, 'Scénic/Grand SCénic', '0', 650, NULL, 1), 
(NULL, 'Fluence', '0', 650, NULL, 1), 
(NULL, 'Laguna', '0', 650, NULL, 1), 
(NULL, 'Koléos', '0', 650, NULL, 1), 
(NULL, 'Espace/Grand Espace', '0', 650, NULL, 1),  

(NULL, 'Wagon R+', '0', 757, NULL, 1), -- 129 = Suzuki
(NULL, 'Swift', '0', 757, NULL, 1),
(NULL, 'Ignis', '0', 757, NULL, 1),
(NULL, 'Jimmy', '0', 757, NULL, 1),
(NULL, 'SX4', '0', 757, NULL, 1),
(NULL, 'Grand Vitara', '0', 757, NULL, 1),

(NULL, 'IQ', '0', 778, NULL, 1), -- 778 = Toyota
(NULL, 'Aygo', '0', 778, NULL, 1),
(NULL, 'Yaris', '0', 778, NULL, 1),
(NULL, 'Urban Cruiser', '0', 778, NULL, 1),
(NULL, 'Auris', '0', 778, NULL, 1),
(NULL, 'Verso', '0', 778, NULL, 1),
(NULL, 'Prius III', '0', 778, NULL, 1),
(NULL, 'Avensis', '0', 778, NULL, 1),
(NULL, 'Rav 4', '0', 778, NULL, 1),
(NULL, 'Land Cruiser', '0', 778, NULL, 1),
(NULL, 'Land Cruiser SW', '0', 778, NULL, 1),
(NULL, 'Hilux', '0', 778, NULL, 1),


(NULL, 'Fox', '0', 814, NULL, 1), -- 814 = Volkswagen
(NULL, 'Polo', '0', 814, NULL, 1), 
(NULL, 'Golf', '0', 814, NULL, 1), 
(NULL, 'Golf SW', '0', 814, NULL, 1), 
(NULL, 'Golf Plus', '0', 814, NULL, 1), 
(NULL, 'Touran', '0', 814, NULL, 1), 
(NULL, 'Jetta', '0', 814, NULL, 1), 
(NULL, 'Eos', '0', 814, NULL, 1), 
(NULL, 'New-Beetle', '0', 814, NULL, 1), 
(NULL, 'Scirocco', '0', 814, NULL, 1), 
(NULL, 'Passat & Passat SW', '0', 814, NULL, 1), 
(NULL, 'Passat CC', '0', 814, NULL, 1), 
(NULL, 'Phaeton', '0', 814, NULL, 1), 
(NULL, 'Sharan', '0', 814, NULL, 1), 
(NULL, 'Tiguan', '0', 814, NULL, 1), 
(NULL, 'Touareg', '0', 814, NULL, 1), 
(NULL, 'Caravelle', '0', 814, NULL, 1), 
(NULL, 'Crafter', '0', 814, NULL, 1), 
(NULL, 'Transporter', '0', 814, NULL, 1),
 
(NULL, 'C 30', '0', 817, NULL, 1), -- 817 = Volvo
(NULL, 'S40/V50', '0', 817, NULL, 1), 
(NULL, 'S60', '0', 817, NULL, 1), 
(NULL, 'C70', '0', 817, NULL, 1), 
(NULL, 'V70/XC70', '0', 817, NULL, 1), 
(NULL, 'S80', '0', 817, NULL, 1), 
(NULL, 'XC90', '0', 817, NULL, 1), 

(NULL, 'Roadster', '0', 829, NULL, 1), -- 829 = Wiesmann
(NULL, 'GT', '0', 829, NULL, 1);



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
