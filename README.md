# smsn

http://host/path?sender=@@SENDER@@&isi=@@SMS@@

CREATE TABLE inbox (
  id int(4) NOT NULL auto_increment,
  sender varchar(23) NOT NULL default '',
  isi varchar(160) NOT NULL default '',
  PRIMARY KEY  (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;  

