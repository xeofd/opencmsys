# SQL for openCCMSYS #

This is the SQL code for the simple database used to store information for use in openCCMSYS. 
There are three tables in the database, **client**, **client_hardware** and **client_license**. The tables are pretty self explanitory, the **client** table holds your companies clients, the **client_hardware** table holds the hardware you currently have/had in for repair/setup and which client the hardware belonged to and the **client_license** table holds the license for any software that clients have.

---

## Table relationships ##

The **client** table has a **one** to **many** relationship with both **client_hardware** and **client_license** individually, as one client can have many peices of hardware and one client can have many software licenses.

---

## SQL Code to enter into CLI ##

```SQL
CREATE DATABASE openccmsys;
```

```SQL
CREATE TABLE client(
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    company_name VARCHAR(128) NOT NULL,
    contact_number INT(11) NOT NULL,
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
    collection_date DATE NOT NULL,
    return_date DATE,
    job_status TINYINT NOT NULL,
    link VARCHAR(64) NOT NULL,
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
    link VARCHAR(64) NOT NULL,
    client_id INT,
    CONSTRAINT license_fk
    FOREIGN KEY (client_id)
    REFERENCES client(id)
    ON DELETE SET NULL
    ON UPDATE CASCADE
) ENGINE = INNODB;
```

```SQL
CREATE USER 'occmsysro'@'localhost'
    IDENTIFIED WITH mysql_native_password
    BY '{ENTER PASSWORD}';
CREATE USER 'occmsysrw'@'localhost'
    IDENTIFIED WITH mysql_native_password
    BY '{ENTER PASSWORD}';
```

```SQL
GRANT SELECT,INSERT,UPDATE,DELETE,CREATE
    ON openccmsys.*
    TO 'occmsysrw'@'localhost';
GRANT SELECT
    ON openccmsys.*
    TO 'occmsysro'@'localhost';
```
