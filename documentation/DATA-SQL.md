# openCCMSYS database mySQL

This is the mySQL code that is used for setting up the database for the openCCMSYS system. This file will help you create the tables and users within mySQL to allow the system to work properly.

If you follow the creation of tables and users within this document you should have no issues with setting up the database, a second way to create the database is to run the setup program under /die-app within the project if it is available when you set up the system.

## SQL Code to enter into CLI ##

```SQL
CREATE DATABASE openccmsys;
```

```SQL
CREATE TABLE client(
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    company_name VARCHAR(128) NOT NULL,
    contact_number INT(13) NOT NULL,
    component_total INT,
    license_total INT
) ENGINE = INNODB;
```

```SQL
CREATE TABLE client_hardware(
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    make VARCHAR(128) NOT NULL,
    model VARCHAR(128) NOT NULL,
    user VARCHAR(64) NOT NULL,
    issue VARCHAR(2048) NOT NULL,
    initial_contact DATE NOT NULL,
    recent_contact DATE,
    pickup_date DATE NOT NULL,
    return_date DATE,
    job_active TINYINT,
    job_status TINYINT NOT NULL,
    page_id VARCHAR(24) NOT NULL,
    client_id INT,
    CONSTRAINT component_fk
    FOREIGN KEY (client_id)
    REFERENCES client(id)
    ON DELETE SET NULL
    ON UPDATE CASCADE
) ENGINE = INNODB;
```

```SQL
CREATE TABLE client_license(
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    software VARCHAR(128) NOT NULL,
    user VARCHAR(64) NOT NULL,
    license_key VARCHAR(512) NOT NULL,
    use_date DATE NOT NULL,
    useage_count INT,
    download_link VARCHAR(128),
    page_id VARCHAR(24) NOT NULL,
    client_id INT,
    CONSTRAINT license_fk
    FOREIGN KEY (client_id)
    REFERENCES client(id)
    ON DELETE SET NULL
    ON UPDATE CASCADE
) ENGINE = INNODB;
```

```SQL
CREATE TABLE user(
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    name VARCHAR(64) NOT NULL,
    password VARCHAR(128) NOT NULL,
    creation_date DATE NOT NULL,
    type TINYINT NOT NULL
) ENGINE = INNODB;
```

```SQL
CREATE TABLE syssettings(
    user_accounts TINYINT NOT NULL,
) ENGINE = INNODB;
```

```SQL
CREATE USER 'occmsysro'@'localhost'
    IDENTIFIED WITH mysql_native_password
    BY 'tvtE$pLH8yyh';
CREATE USER 'occmsysrw'@'localhost'
    IDENTIFIED WITH mysql_native_password
    BY 'tvtE$pLH8yyh';
```

```SQL
GRANT SELECT,INSERT,UPDATE,DELETE,CREATE
    ON openccmsys.*
    TO 'occmsysrw'@'localhost';
GRANT SELECT
    ON openccmsys.*
    TO 'occmsysro'@'localhost';
```
