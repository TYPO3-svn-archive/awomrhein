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

  address1 tinytext,
  address2 tinytext,
  attendance2 tinytext,
  attendance3 tinytext,
  attendance4 tinytext,
  attendance5 tinytext,
  attendance6 tinytext,
  attendance7 tinytext,
  city tinytext,
  description tinytext,
  email tinytext,
  facility tinytext,
  fax tinytext,
  hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
  keywords tinytext,
  lat text NOT NULL,
  lon text NOT NULL,
  phone tinytext,
  status int(11) unsigned DEFAULT '0' NOT NULL,
  tx_awomrhein_attendance tinytext,
  tx_awomrhein_cat tinytext,
  tx_awomrhein_certificate tinytext,
  tx_awomrhein_corporation tinytext,
  tx_awomrhein_responsible tinytext,
  url tinytext,
  zip tinytext,

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
