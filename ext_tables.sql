# INDEX
# 
# tx_awomrhein
# tx_awomrhein_attendance
# tx_awomrhein_cat
# tx_awomrhein_certificate
# tx_awomrhein_corporation
# tx_awomrhein_responsible
#
# tx_awomrhein_mm_tx_awomrhein_attendance
# tx_awomrhein_mm_tx_awomrhein_cat
# tx_awomrhein_mm_tx_awomrhein_certificate
# tx_awomrhein_mm_tx_awomrhein_corporation
# tx_awomrhein_mm_tx_awomrhein_responsible



#
# Table structure for table 'tx_awomrhein'
#
CREATE TABLE tx_awomrhein (
  uid int(11) unsigned DEFAULT '0' NOT NULL auto_increment,
  pid int(11) unsigned DEFAULT '0' NOT NULL,
  tstamp int(11) unsigned DEFAULT '0' NOT NULL,
  crdate int(11) unsigned DEFAULT '0' NOT NULL,
  cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
  deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,

  bodytext mediumtext NOT NULL,
  bookedup tinyint(4) unsigned DEFAULT '0' NOT NULL,
  bookingurl tinytext,
  category tinytext,
  day1 tinytext,
  day2 tinytext,
  day3 tinytext,
  day4 tinytext,
  day5 tinytext,
  description text,
  details tinytext,
  externalid tinytext,
  eventbegin int(11) unsigned DEFAULT '0' NOT NULL,
  eventend int(11) unsigned DEFAULT '0' NOT NULL,
  fe_group int(11) DEFAULT '0' NOT NULL,
  hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
  hours1 tinytext,
  hours2 tinytext,
  hours3 tinytext,
  hours4 tinytext,
  hours5 tinytext,
  keywords text,
  location1 tinytext,
  location2 tinytext,
  location3 tinytext,
  location4 tinytext,
  location5 tinytext,
  price1 tinytext,
  price2 tinytext,
  price3 tinytext,
  skills tinytext,
  spaceoftime tinytext
  staff1 text,
  staff2 text,
  title tinytext,
  tx_awomrhein_attendance text,
  tx_awomrhein_cat text,
  tx_awomrhein_certificate text,
  tx_awomrhein_corporation text,
  tx_awomrhein_responsible text,
  
  PRIMARY KEY (uid),
  KEY parent (pid)
);

#
# tx_awomrhein_attendance
#
CREATE TABLE tx_awomrhein_attendance (
  uid int(11) unsigned DEFAULT '0' NOT NULL auto_increment,
  pid int(11) unsigned DEFAULT '0' NOT NULL,
  tstamp int(11) unsigned DEFAULT '0' NOT NULL,
  crdate int(11) unsigned DEFAULT '0' NOT NULL,
  cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
  deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
  title tinytext,
  uid_parent int(11) DEFAULT '0' NOT NULL,
  hidden tinyint(4) DEFAULT '0' NOT NULL,
  
  PRIMARY KEY (uid),
  KEY parent (pid)
);

#
# tx_awomrhein_cat
#
CREATE TABLE tx_awomrhein_cat (
  uid int(11) unsigned DEFAULT '0' NOT NULL auto_increment,
  pid int(11) unsigned DEFAULT '0' NOT NULL,
  tstamp int(11) unsigned DEFAULT '0' NOT NULL,
  crdate int(11) unsigned DEFAULT '0' NOT NULL,
  cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
  deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
  title tinytext,
  uid_parent int(11) DEFAULT '0' NOT NULL,
  hidden tinyint(4) DEFAULT '0' NOT NULL,
  
  PRIMARY KEY (uid),
  KEY parent (pid)
);

#
# tx_awomrhein_certificate
#
CREATE TABLE tx_awomrhein_certificate (
  uid int(11) unsigned DEFAULT '0' NOT NULL auto_increment,
  pid int(11) unsigned DEFAULT '0' NOT NULL,
  tstamp int(11) unsigned DEFAULT '0' NOT NULL,
  crdate int(11) unsigned DEFAULT '0' NOT NULL,
  cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
  deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
  title tinytext,
  uid_parent int(11) DEFAULT '0' NOT NULL,
  hidden tinyint(4) DEFAULT '0' NOT NULL,
  
  PRIMARY KEY (uid),
  KEY parent (pid)
);

#
# tx_awomrhein_corporation
#
CREATE TABLE tx_awomrhein_corporation (
  uid int(11) unsigned DEFAULT '0' NOT NULL auto_increment,
  pid int(11) unsigned DEFAULT '0' NOT NULL,
  tstamp int(11) unsigned DEFAULT '0' NOT NULL,
  crdate int(11) unsigned DEFAULT '0' NOT NULL,
  cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
  deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
  title tinytext,
  uid_parent int(11) DEFAULT '0' NOT NULL,
  hidden tinyint(4) DEFAULT '0' NOT NULL,
  
  PRIMARY KEY (uid),
  KEY parent (pid)
);

#
# tx_awomrhein_responsible
#
CREATE TABLE tx_awomrhein_responsible (
  uid int(11) unsigned DEFAULT '0' NOT NULL auto_increment,
  pid int(11) unsigned DEFAULT '0' NOT NULL,
  tstamp int(11) unsigned DEFAULT '0' NOT NULL,
  crdate int(11) unsigned DEFAULT '0' NOT NULL,
  cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
  deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
  title tinytext,
  uid_parent int(11) DEFAULT '0' NOT NULL,
  hidden tinyint(4) DEFAULT '0' NOT NULL,
  
  PRIMARY KEY (uid),
  KEY parent (pid)
);

#
# tx_awomrhein_mm_tx_awomrhein_attendance
#
CREATE TABLE tx_awomrhein_mm_tx_awomrhein_attendance (
  uid_local int(11) unsigned DEFAULT '0' NOT NULL,
  uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
  tablenames varchar(30) DEFAULT '' NOT NULL,
  sorting         int(11) unsigned DEFAULT '0' NOT NULL,
  sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,
  KEY uid_local (uid_local),
  KEY uid_foreign (uid_foreign)
);

#
# tx_awomrhein_mm_tx_awomrhein_cat
#
CREATE TABLE tx_awomrhein_mm_tx_awomrhein_cat (
  uid_local int(11) unsigned DEFAULT '0' NOT NULL,
  uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
  tablenames varchar(30) DEFAULT '' NOT NULL,
  sorting         int(11) unsigned DEFAULT '0' NOT NULL,
  sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,
  KEY uid_local (uid_local),
  KEY uid_foreign (uid_foreign)
);

#
# tx_awomrhein_mm_tx_awomrhein_certificate
#
CREATE TABLE tx_awomrhein_mm_tx_awomrhein_certificate (
  uid_local int(11) unsigned DEFAULT '0' NOT NULL,
  uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
  tablenames varchar(30) DEFAULT '' NOT NULL,
  sorting         int(11) unsigned DEFAULT '0' NOT NULL,
  sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,
  KEY uid_local (uid_local),
  KEY uid_foreign (uid_foreign)
);

#
# tx_awomrhein_mm_tx_awomrhein_corporation
#
CREATE TABLE tx_awomrhein_mm_tx_awomrhein_corporation (
  uid_local int(11) unsigned DEFAULT '0' NOT NULL,
  uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
  tablenames varchar(30) DEFAULT '' NOT NULL,
  sorting         int(11) unsigned DEFAULT '0' NOT NULL,
  sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,
  KEY uid_local (uid_local),
  KEY uid_foreign (uid_foreign)
);

#
# tx_awomrhein_mm_tx_awomrhein_responsible
#
CREATE TABLE tx_awomrhein_mm_tx_awomrhein_responsible (
  uid_local int(11) unsigned DEFAULT '0' NOT NULL,
  uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
  tablenames varchar(30) DEFAULT '' NOT NULL,
  sorting         int(11) unsigned DEFAULT '0' NOT NULL,
  sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,
  KEY uid_local (uid_local),
  KEY uid_foreign (uid_foreign)
);
