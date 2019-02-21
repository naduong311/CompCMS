CREATE TABLE tx_bcms_domain_model_beacon (

  uid int(11) NOT NULL auto_increment,
  pid int(11) DEFAULT '0' NOT NULL,
  crdate int(11) DEFAULT '0' NOT NULL,
  tstamp int(11) DEFAULT '0' NOT NULL,
  hidden int(11) DEFAULT '0' NOT NULL,
  deleted int(11) DEFAULT '0' NOT NULL,

  uuid varchar(64) DEFAULT '' NOT NULL,
  major int(11) DEFAULT '0' NOT NULL,
  minor int(11) DEFAULT '0' NOT NULL,

  name varchar(255) DEFAULT '' NOT NULL,
  notification_text varchar(255) DEFAULT '' NOT NULL,
  description varchar(255) DEFAULT '' NOT NULL,

  page int(11) DEFAULT '0' NOT NULL,

  PRIMARY KEY (uid),
  KEY parent (pid),
  KEY identifier (uuid,major,minor),
  KEY deleted (deleted)
);

CREATE TABLE tx_bcms_domain_model_tracking (
  uid int(11) NOT NULL auto_increment,
  pid int(11) DEFAULT '0' NOT NULL,
  crdate int(11) DEFAULT '0' NOT NULL,

  beacon int(11) DEFAULT '0' NOT NULL,

  device varchar(255) DEFAULT '' NOT NULL,
  name varchar(64) DEFAULT '' NOT NULL,

  mode int(11) DEFAULT '0' NOT NULL,

  PRIMARY KEY (uid),
  KEY parent (pid),
  KEY beacon (beacon),
  KEY device (device),
  KEY name (name),
  KEY mode (mode)
);

CREATE TABLE tx_bcms_domain_model_comprehensiontest (
  uid int(11) NOT NULL auto_increment,
  pid int(11) DEFAULT '0' NOT NULL,
  crdate int(11) DEFAULT '0' NOT NULL,

  questions int(11) DEFAULT '0' NOT NULL,

  PRIMARY KEY (uid),
  KEY parent (pid)
);

CREATE TABLE tx_bcms_domain_model_question (
  uid int(11) NOT NULL auto_increment,
  pid int(11) DEFAULT '0' NOT NULL,
  crdate int(11) DEFAULT '0' NOT NULL,

  comprehensiontest int(11) DEFAULT '0' NOT NULL,
  choices int(11) DEFAULT '0' NOT NULL,

  question text,

  PRIMARY KEY (uid),
  KEY parent (pid)
);


CREATE TABLE tx_bcms_domain_model_choice (
  uid int(11) NOT NULL auto_increment,
  pid int(11) DEFAULT '0' NOT NULL,
  crdate int(11) DEFAULT '0' NOT NULL,

  question int(11) DEFAULT '0' NOT NULL,
  content text,
  correct tinyint(3) DEFAULT '0' NOT NULL,

  PRIMARY KEY (uid),
  KEY parent (pid)
);

CREATE TABLE tx_bcms_domain_model_answer (
  uid int(11) NOT NULL auto_increment,
  pid int(11) DEFAULT '0' NOT NULL,
  crdate int(11) DEFAULT '0' NOT NULL,

  question int(11) DEFAULT '0' NOT NULL,
  choices int(11) DEFAULT '0' NOT NULL,
  user int(11) DEFAULT '0' NOT NULL,
  correct tinyint(3) DEFAULT '0' NOT NULL,


  PRIMARY KEY (uid),
  KEY parent (pid),
  KEY userkey (user)
);


CREATE TABLE tx_bcms_mm_answer_choices (
  uid_local int(11) DEFAULT '0' NOT NULL,
  uid_foreign int(11) DEFAULT '0' NOT NULL,
  tablenames tinytext,
  sorting int(11) DEFAULT '0' NOT NULL,
  sorting_foreign int(11) DEFAULT '0' NOT NULL,

  PRIMARY KEY (uid_local, uid_foreign)
);