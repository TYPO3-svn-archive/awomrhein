# INDEX
# 
# tx_awomrhein
# tx_awomrhein_attendance
# tx_awomrhein_cat
# tx_awomrhein_certificate
# tx_awomrhein_corporation
# tx_awomrhein_path
# tx_awomrhein_responsible
#
# tx_awomrhein_mm_tx_awomrhein_attendance
# tx_awomrhein_mm_tx_awomrhein_cat
# tx_awomrhein_mm_tx_awomrhein_certificate
# tx_awomrhein_mm_tx_awomrhein_corporation
# tx_awomrhein_mm_tx_awomrhein_responsible
#
# tx_awomrhein_path_mm_tx_awomrhein
# tx_awomrhein_path_mm_tx_awomrhein_cat



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
  areaLevel1 tinytext,
  areaLevel2 tinytext,
  attendance2 tinytext,
  attendance3 tinytext,
  attendance4 tinytext,
  attendance5 tinytext,
  attendance6 tinytext,
  attendance7 tinytext,
  city tinytext,
  country tinytext,
  email tinytext,
  facility tinytext,
  fax tinytext,
  geoupdateprompt text,
  geoupdateforbidden tinyint(3) DEFAULT '0' NOT NULL,
  hidden tinyint(3) DEFAULT '0' NOT NULL,
  lat tinytext NOT NULL,
  lon tinytext NOT NULL,

  phone tinytext,
  seodescription text,
  seokeywords tinytext,
  status int(11) DEFAULT '0' NOT NULL,
  tx_awomrhein_attendance tinyblob,
  tx_awomrhein_cat tinyblob,
  tx_awomrhein_certificate tinyblob,
  tx_awomrhein_corporation int(11) DEFAULT '0' NOT NULL,
  tx_awomrhein_path tinyblob,
  tx_awomrhein_responsible int(11) DEFAULT '0' NOT NULL,
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
  hidden tinyint(4) DEFAULT '0' NOT NULL,
  title tinytext,
  formlabelcss varchar(30) default '',
  icons tinyblob,
  icon_offset_x int(11) DEFAULT '0' NOT NULL,
  icon_offset_y int(11) DEFAULT '0' NOT NULL
  
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
  hidden tinyint(4) DEFAULT '0' NOT NULL,
  
  PRIMARY KEY (uid),
  KEY parent (pid)
);

#
# Table structure for table 'tx_awomrhein_path'
#
CREATE TABLE tx_awomrhein_path (
  uid int(11) NOT NULL auto_increment,
  pid int(11) DEFAULT '0' NOT NULL,
  tstamp int(11) DEFAULT '0' NOT NULL,
  crdate int(11) DEFAULT '0' NOT NULL,
  cruser_id int(11) DEFAULT '0' NOT NULL,
  deleted tinyint(4) DEFAULT '0' NOT NULL,

  sys_language_uid int(11) DEFAULT '0' NOT NULL,
  l10n_parent int(11) DEFAULT '0' NOT NULL,
  l10n_diffsource mediumtext,

  title tinytext,
  short mediumtext NOT NULL,
  bodytext mediumtext NOT NULL,
  url tinytext,

  gpxfile blob,
  geodata longtext,

  tx_awomrhein_cat int(11) DEFAULT '0' NOT NULL,
  icon_lat tinytext NOT NULL,
  icon_lon tinytext NOT NULL,

  color tinytext NOT NULL,
  line_width int(11) DEFAULT '2' NOT NULL,

  tx_awomrhein tinyblob,

  list_title tinytext,
  list_short mediumtext,
  map_title tinytext,
  map_short mediumtext,

  address_start mediumtext NOT NULL,
  address_end mediumtext NOT NULL,

  image tinyblob,
  imagecaption text,
  imageseo text,
  imageheight varchar(10) default '',
  imagewidth varchar(10) default '',
  imageorient int(11) default '0',
  imagecaption text,
  imagecols int(11) default '0' NOT NULL,
  imageborder tinyint(3) default '0' NOT NULL,
  imagecaption_position varchar(6) default '',
  image_link text,
  image_zoom tinyint(3) default '0',
  image_noRows tinyint(3) default '0' NOT NULL,
  image_effects int(11) default '0' NOT NULL,
  image_compression int(11) default '0' NOT NULL,
  image_frames int(11) default '0' NOT NULL,

  hidden tinyint(4) DEFAULT '0' NOT NULL,
  starttime int(11) DEFAULT '0' NOT NULL,
  endtime int(11) DEFAULT '0' NOT NULL,
  fe_group blob,
  
  seo_keywords tinytext,
  seo_description text,

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

#
# Table structure for table 'tx_awomrhein_path_mm_tx_awomrhein'
# 
CREATE TABLE tx_awomrhein_path_mm_tx_awomrhein (
  uid_local int(11) DEFAULT '0' NOT NULL,
  uid_foreign int(11) DEFAULT '0' NOT NULL,
  tablenames varchar(30) DEFAULT '' NOT NULL,
  sorting int(11) DEFAULT '0' NOT NULL,
  sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,
  KEY uid_local (uid_local),
  KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_awomrhein_path_mm_tx_awomrhein_cat'
# 
CREATE TABLE tx_awomrhein_path_mm_tx_awomrhein_cat (
  uid_local int(11) DEFAULT '0' NOT NULL,
  uid_foreign int(11) DEFAULT '0' NOT NULL,
  tablenames varchar(30) DEFAULT '' NOT NULL,
  sorting int(11) DEFAULT '0' NOT NULL,
  sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,
  KEY uid_local (uid_local),
  KEY uid_foreign (uid_foreign)
);