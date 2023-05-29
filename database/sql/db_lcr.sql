/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.4.24-MariaDB : Database - db_lcr
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_lcr` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_lcr`;

/*Table structure for table `companies` */

DROP TABLE IF EXISTS `companies`;

CREATE TABLE `companies` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `system` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bg_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `developer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `companies` */

insert  into `companies`(`id`,`name`,`system`,`logo`,`bg_image`,`address`,`developer`,`created_at`,`updated_at`) values 
(1,'LGU KALIBO','LCR Management Information System','logo.png','bg.jpg','KALIBO AKLAN',NULL,NULL,'2023-03-30 02:58:04');

/*Table structure for table `court_decree_orders` */

DROP TABLE IF EXISTS `court_decree_orders`;

CREATE TABLE `court_decree_orders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `lcr_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `register_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_citizenship` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `petitioner_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `petitioner_citizenship` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `court_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `special_proceeding_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_issued` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `judge_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `encoder` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `court_decree_orders` */

insert  into `court_decree_orders`(`id`,`lcr_no`,`register_date`,`document_type`,`subject_name`,`subject_citizenship`,`petitioner_name`,`petitioner_citizenship`,`court_name`,`special_proceeding_no`,`date_issued`,`judge_name`,`remarks`,`encoder`,`created_at`,`updated_at`) values 
(2,'122','2022-11-18','Ea quibusdam ipsum m','Placeat consectetur','Quis iure vero nulla','Carter Holcomb','Do minima autem eos','Animi laboriosam q','Nemo ullamco qui tem','2016-10-17','Ross Barton','Aliquid at sunt enim',NULL,'2023-05-24 02:44:14','2023-05-24 02:44:14'),
(3,'797','1993-09-04','Dolorum itaque quo d','Quia ut velit aliqui','Reprehenderit optio','Hadley Dillard','Consequatur Saepe a','Unde nostrum labore ','Rerum optio molesti','1982-08-20','Raja Wilkinson','Ratione nisi molesti','1','2023-05-24 03:58:40','2023-05-24 03:58:40');

/*Table structure for table `deaths` */

DROP TABLE IF EXISTS `deaths`;

CREATE TABLE `deaths` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `lcr_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `register_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deceased_first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deceased_middle_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deceased_last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sex` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `civil_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `residence` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `occupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `death_date_time_day` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `death_date_time_month` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `death_date_time_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `death_date_time_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `death_place` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `death_cause` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `certifying_officer_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `certifying_officer_designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `encoder` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `deaths` */

insert  into `deaths`(`id`,`lcr_no`,`register_date`,`deceased_first_name`,`deceased_middle_name`,`deceased_last_name`,`sex`,`age`,`age_type`,`civil_status`,`nationality`,`residence`,`occupation`,`death_date_time_day`,`death_date_time_month`,`death_date_time_year`,`death_date_time_time`,`death_place`,`death_cause`,`certifying_officer_name`,`certifying_officer_designation`,`remarks`,`encoder`,`created_at`,`updated_at`) values 
(1,'55','1979-02-04','Hayes','Barbara Levine','Harrison','F','28','hrs','S','98','Nulla earum consecte','Nemo qui ducimus pe','4','10','2014','6:00PM','Veniam quibusdam el','Aut excepturi enim q','Culpa aliqua Conseq','Sed in quas tenetur ','Labore dolores sit f','1','2023-05-24 09:40:08','2023-05-24 09:49:34');

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `fetal_deaths` */

DROP TABLE IF EXISTS `fetal_deaths`;

CREATE TABLE `fetal_deaths` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `lcr_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `register_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deceased_first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deceased_middle_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deceased_last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sex` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `civil_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `residence` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `occupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `death_date_time_day` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `death_date_time_month` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `death_date_time_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `death_date_time_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `death_place` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `death_cause` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `certifying_officer_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `certifying_officer_designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `encoder` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `fetal_deaths` */

insert  into `fetal_deaths`(`id`,`lcr_no`,`register_date`,`deceased_first_name`,`deceased_middle_name`,`deceased_last_name`,`sex`,`age`,`age_type`,`civil_status`,`nationality`,`residence`,`occupation`,`death_date_time_day`,`death_date_time_month`,`death_date_time_year`,`death_date_time_time`,`death_place`,`death_cause`,`certifying_officer_name`,`certifying_officer_designation`,`remarks`,`encoder`,`created_at`,`updated_at`) values 
(1,'286','1986-11-16','Clinton','Gabriel Elliott','Trevino','F','15','hrs','S','10','Odit assumenda quo v','Quasi accusamus ipsa','24','10','1983','2PM','Ullamco asperiores e','Deserunt modi dignis','Possimus et vero du','Quisquam error nisi ','Ab aspernatur at com','1','2023-05-24 09:55:18','2023-05-24 09:55:18');

/*Table structure for table `legal_instruments` */

DROP TABLE IF EXISTS `legal_instruments`;

CREATE TABLE `legal_instruments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `lcr_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `register_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `execution_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `applicant_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `applicant_citizenship` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `applicant_birth_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `applicant_birth_place` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cause_for_loss` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `affiant_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `affiant_citizenship_former` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `affiant_citizenship_acquired` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acknowledge_parent_names` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acknowledge_parent_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acknowledge_parent_place` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `encoder` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `legal_instruments` */

insert  into `legal_instruments`(`id`,`lcr_no`,`register_date`,`document_type`,`execution_date`,`applicant_name`,`applicant_citizenship`,`applicant_birth_date`,`applicant_birth_place`,`cause_for_loss`,`affiant_name`,`affiant_citizenship_former`,`affiant_citizenship_acquired`,`acknowledge_parent_names`,`acknowledge_parent_date`,`acknowledge_parent_place`,`remarks`,`encoder`,`created_at`,`updated_at`) values 
(1,'689','2016-09-25','Et quia labore sed d','2008-04-18','Voluptatum magni vol','Nemo non corrupti f','2022-11-18','Veniam quod debitis','Fugiat est saepe es','Beatae inventore odi','Debitis assumenda qu','Reprehenderit commod','In magna eiusmod tem','19-Sep-2007','Dolores et dolorem i','Saepe facilis obcaec','1','2023-05-24 10:18:33','2023-05-24 10:18:33');

/*Table structure for table `list_barangays` */

DROP TABLE IF EXISTS `list_barangays`;

CREATE TABLE `list_barangays` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `region_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `municity_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `index` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urban_rural` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `population` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `list_barangays` */

/*Table structure for table `list_municities` */

DROP TABLE IF EXISTS `list_municities`;

CREATE TABLE `list_municities` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `region_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `index` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `list_municities` */

/*Table structure for table `list_provinces` */

DROP TABLE IF EXISTS `list_provinces`;

CREATE TABLE `list_provinces` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `region_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `index` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `list_provinces` */

/*Table structure for table `list_regions` */

DROP TABLE IF EXISTS `list_regions`;

CREATE TABLE `list_regions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `index` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `list_regions` */

/*Table structure for table `live_births` */

DROP TABLE IF EXISTS `live_births`;

CREATE TABLE `live_births` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `lcr_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `register_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `child_first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `child_middle_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `child_last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sex` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth_date_time_day` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth_date_time_month` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth_date_time_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth_date_time_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth_place` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth_order` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_middle_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_nationality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_religion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_middle_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_nationality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_religion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parents_marriage_day` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parents_marriage_month` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parents_marriage_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parents_marriage_place` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `encoder` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `live_births` */

insert  into `live_births`(`id`,`lcr_no`,`register_date`,`child_first_name`,`child_middle_name`,`child_last_name`,`sex`,`birth_date`,`birth_date_time_day`,`birth_date_time_month`,`birth_date_time_year`,`birth_date_time_time`,`birth_place`,`birth_type`,`birth_order`,`mother_first_name`,`mother_middle_name`,`mother_last_name`,`mother_age`,`mother_nationality`,`mother_religion`,`father_first_name`,`father_middle_name`,`father_last_name`,`father_age`,`father_nationality`,`father_religion`,`parents_marriage_day`,`parents_marriage_month`,`parents_marriage_year`,`parents_marriage_place`,`remarks`,`encoder`,`created_at`,`updated_at`) values 
(1,'836','2023-05-24','Summer','Austin Barr','Mcgee','Molestias consequunt','1986-09-29','','','','2PM','KALIBO','TWIN','1st','Knox','Yolanda Collins','Potts','45','FIL','CATOLIC','Amity','Ocean Russell','Nunez','40','Fil','ROMAN CATHOLIC','6','2','1988','Aut sit veritatis ex','Cillum facilis non h','1','2023-05-24 12:07:44','2023-05-24 12:12:33');

/*Table structure for table `marriage_licenses` */

DROP TABLE IF EXISTS `marriage_licenses`;

CREATE TABLE `marriage_licenses` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `register_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filing_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `posting_period_from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `posting_period_to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `husband_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `husband_birthdate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `husband_nationality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `husband_civil_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `husband_residence` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wife_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wife_birthdate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wife_nationality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wife_civil_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wife_residence` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marriage_license_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marriage_license_date_issue` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marriage_license_date_expiry` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marriage_license_date_release` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `encoder` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `marriage_licenses` */

insert  into `marriage_licenses`(`id`,`register_no`,`filing_date`,`posting_period_from`,`posting_period_to`,`husband_name`,`husband_birthdate`,`husband_nationality`,`husband_civil_status`,`husband_residence`,`wife_name`,`wife_birthdate`,`wife_nationality`,`wife_civil_status`,`wife_residence`,`marriage_license_no`,`marriage_license_date_issue`,`marriage_license_date_expiry`,`marriage_license_date_release`,`remarks`,`encoder`,`created_at`,`updated_at`) values 
(2,'157','1977-11-13','2002-01-18','2005-07-06','Nobis a ut nisi nemo','1989-06-18','Atque expedita moles','Do saepe voluptate e','Illum atque quibusd','Voluptas irure in di','1973-07-12','Quibusdam doloribus ','Consectetur voluptas','Quia cupiditate ex t','Repellendus Volupta','2017-02-16','2014-12-02','1977-08-05','Dolore repellendus ','1','2023-05-26 04:17:04','2023-05-26 04:17:04');

/*Table structure for table `marriages` */

DROP TABLE IF EXISTS `marriages`;

CREATE TABLE `marriages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `register_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `register_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `husband_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `husband_age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `husband_nationality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `husband_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `husband_residence` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `husband_fathers_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `husband_fathers_nationality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `husband_mothers_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `husband_mothers_nationality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wife_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wife_age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wife_nationality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wife_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wife_residence` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wife_fathers_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wife_fathers_nationality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wife_mothers_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wife_mothers_nationality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marriage_place` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marriage_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `encoder` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `marriages` */

insert  into `marriages`(`id`,`register_date`,`register_no`,`husband_name`,`husband_age`,`husband_nationality`,`husband_status`,`husband_residence`,`husband_fathers_name`,`husband_fathers_nationality`,`husband_mothers_name`,`husband_mothers_nationality`,`wife_name`,`wife_age`,`wife_nationality`,`wife_status`,`wife_residence`,`wife_fathers_name`,`wife_fathers_nationality`,`wife_mothers_name`,`wife_mothers_nationality`,`marriage_place`,`marriage_date`,`remarks`,`encoder`,`created_at`,`updated_at`) values 
(2,'2018-08-29','28','Et est temporibus do','Et suscipit facere e','Et enim ex quaerat i','Quia qui ut fugiat ','Qui maxime atque vit','Est aliqua Sit cul','Distinctio Modi deb','Sit numquam quo exc','Sint quasi aliquam ','Ipsum error est ea','Praesentium laborum','Dolore do explicabo','Quam eiusmod cupidat','Quos vitae do minus ','Reprehenderit volupt','Sequi consequatur e','Quod eveniet quae e','Non corporis ipsum l','Nobis eiusmod mollit','1975-08-17','Voluptas quasi sint ','1','2023-05-26 03:29:54','2023-05-26 03:29:54');

/*Table structure for table `menu_bars` */

DROP TABLE IF EXISTS `menu_bars`;

CREATE TABLE `menu_bars` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ordering` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inactive` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `menu_bars` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2019_08_19_000000_create_failed_jobs_table',1),
(4,'2019_12_14_000001_create_personal_access_tokens_table',1),
(5,'2022_12_09_190100_create_offices_table',1),
(6,'2022_12_16_120755_create_permission_tables',1),
(7,'2023_02_16_113509_create_menu_bars_table',1),
(8,'2023_02_16_113527_create_sub_menu_bars_table',1),
(9,'2023_02_26_203422_create_list_barangays_table',1),
(10,'2023_02_26_203547_create_list_municities_table',1),
(11,'2023_02_26_203602_create_list_provinces_table',1),
(12,'2023_02_26_203617_create_list_regions_table',1),
(13,'2023_03_22_142551_create_companies_table',1),
(14,'2023_05_23_192620_create_marriage_licenses_table',1),
(15,'2023_05_23_193404_create_deaths_table',1),
(16,'2023_05_23_194922_create_fetal_deaths_table',1),
(17,'2023_05_23_195012_create_live_births_table',1),
(18,'2023_05_23_195758_create_legal_instruments_table',1),
(19,'2023_05_23_200516_create_court_decree_orders_table',1),
(20,'2023_05_23_200937_create_marriages_table',1);

/*Table structure for table `model_has_permissions` */

DROP TABLE IF EXISTS `model_has_permissions`;

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `model_has_permissions` */

/*Table structure for table `model_has_roles` */

DROP TABLE IF EXISTS `model_has_roles`;

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `model_has_roles` */

/*Table structure for table `office_user` */

DROP TABLE IF EXISTS `office_user`;

CREATE TABLE `office_user` (
  `office_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `office_user_office_id_foreign` (`office_id`),
  KEY `office_user_user_id_foreign` (`user_id`),
  CONSTRAINT `office_user_office_id_foreign` FOREIGN KEY (`office_id`) REFERENCES `offices` (`id`),
  CONSTRAINT `office_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `office_user` */

/*Table structure for table `offices` */

DROP TABLE IF EXISTS `offices`;

CREATE TABLE `offices` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `offices` */

insert  into `offices`(`id`,`code`,`name`,`author_id`,`created_at`,`updated_at`) values 
(1,'itss','Information Technology Services Section',NULL,'2023-05-23 21:57:23','2023-05-23 21:57:23'),
(2,'omm','Office of Municipal Mayor',NULL,'2023-05-23 21:57:23','2023-05-23 21:57:23');

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `permissions` */

DROP TABLE IF EXISTS `permissions`;

CREATE TABLE `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `permissions` */

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

/*Table structure for table `role_has_permissions` */

DROP TABLE IF EXISTS `role_has_permissions`;

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `role_has_permissions` */

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `roles` */

/*Table structure for table `sub_menu_bars` */

DROP TABLE IF EXISTS `sub_menu_bars`;

CREATE TABLE `sub_menu_bars` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ordering` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inactive` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `menu_bar_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sub_menu_bars_menu_bar_id_index` (`menu_bar_id`),
  CONSTRAINT `sub_menu_bars_menu_bar_id_foreign` FOREIGN KEY (`menu_bar_id`) REFERENCES `menu_bars` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `sub_menu_bars` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `office_id` int(10) unsigned DEFAULT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `avatar` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`fullname`,`office_id`,`username`,`email`,`is_active`,`avatar`,`email_verified_at`,`password`,`remember_token`,`created_at`,`updated_at`) values 
(1,'Administrator',1,'admin','francisco12rosel@gmail.com',1,NULL,NULL,'$2y$10$Mt0SPy0h2HXPhK41bTJbTuwRMiDvdujR3DSzEI53ZXd9gNmNRWybS',NULL,'2023-05-23 21:57:23','2023-05-23 21:57:23');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
