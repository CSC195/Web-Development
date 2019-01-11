DROP DATABASE IF EXISTS accounts;
CREATE DATABASE accounts;
USE accounts;

GRANT SELECT, INSERT, UPDATE, DELETE
ON *
TO mgs_user@localhost
IDENTIFIED BY 'pa55word';

CREATE TABLE Users (
    UserID              BIGINT              NOT NULL                AUTO_INCREMENT,
    UserFirstName       VARCHAR(60)         NOT NULL,
    UserLastName        VARCHAR(60)         NOT NULL,
    UserZipcode         INT                 NOT NULL,
    UserEmail           VARCHAR(60)         NOT NULL,
    PRIMARY KEY(UserID)

);

 CREATE UNIQUE INDEX user_idx ON Users (
    UserEmail
);

CREATE TABLE Accounts (
    AccountID				BIGINT				NOT NULL			AUTO_INCREMENT,
	UserEmail		        VARCHAR(60)		NOT NULL,
	UserPwd			        VARCHAR(20)		NOT NULL,
	PRIMARY KEY(AccountID),
	CONSTRAINT accountsFkuseremail
		FOREIGN KEY (UserEmail) REFERENCES Users (UserEmail)
);