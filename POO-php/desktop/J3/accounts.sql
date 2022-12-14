DROP TABLE IF EXISTS ACCOUNT_AUTHORIZATION;
DROP TABLE IF EXISTS AUTHORIZATION;
DROP TABLE IF EXISTS ACCOUNT;

CREATE TABLE IF NOT EXISTS AUTHORIZATION (
  ID int(11) NOT NULL AUTO_INCREMENT,
  NAME varchar(50) NOT NULL UNIQUE,
  READONLY tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (ID)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS ACCOUNT (
  ID int(11) NOT NULL AUTO_INCREMENT,
  LOGIN varchar(50) NOT NULL UNIQUE,
  NAME varchar(50) NOT NULL,
  SURNAME varchar(50) NOT NULL,
  EMAIL varchar(50) NOT NULL UNIQUE,
  PASS varchar(50) NOT NULL,
  ISADMIN tinyint(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (ID)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS ACCOUNT_AUTHORIZATION (
  ID int(11) NOT NULL AUTO_INCREMENT,
  ID_AUTHORIZATION int(11) NOT NULL,
  ID_ACCOUNT int(11) NOT NULL,
  PRIMARY KEY (ID),
  CONSTRAINT ACCOUNT_AUTHORIZATION_AUTHORIZATION_FK FOREIGN KEY(ID_AUTHORIZATION) REFERENCES AUTHORIZATION(ID),
  CONSTRAINT ACCOUNT_AUTHORIZATION_ACCOUNT_FK FOREIGN KEY(ID_ACCOUNT) REFERENCES ACCOUNT(ID)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- INSERT INTO ACCOUNT (ID, LOGIN, NAME, SURNAME, EMAIL, PASS, ISADMIN) VALUES (NULL, 'l0', 'n0', 'p0', 'l0@l0.com', SHA1('l0'), 1);

COMMIT;
