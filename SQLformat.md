# SQL for openCCMSYS #

This is the SQL code for the simple database used to store information for use in openCCMSYS. 
There are three tables in the database, **clients**, **client_hardware** and **client_licenses**. The tables are pretty self explanitory, the **clients** table holds your companies clients, the **client_hardware** table holds the hardware you currently have/had in for repair/setup and which client the hardware belonged to and the **client_licenses** table holds the license for any software that clients have.

---

#### Table relationships ###
The **clients** table has a *one* to *many* relationship with both **client_hardware** and **client_licenses** individually, as one client can have many peices of hardware and one client can have many software licenses.

---

## SQL Code to enter into CLI ##

```
CREATE DATABASE openccmsys;
```

```
CREATE TABLE clients(
    client_id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    client_company_name VARCHAR(128) NOT NULL,
    client_contact_number INT(11) NOT NULL,
    client_component_total INT NOT NULL,
    client_license_total INT NOT NULL
) ENGINE = INNODB;
```

```
CREATE TABLE client_hardware(
    client_hardware_id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    client_hardware_make VARCHAR(128) NOT NULL,
    client_hardware_model VARCHAR(128) NOT NULL,
    client_hardware_user VARCHAR(64) NOT NULL,
    client_hardware_issue VARCHAR(2048) NOT NULL,
    client_hardware_initial_contact DATE NOT NULL,
    client_hardware_recent_contacct DATE NOT NULL,
    client_hardware_collection_date DATE NOT NULL,
    client_hardware_return_date DATE NOT NULL,
    client_hardware_is_active TINYINT NOT NULL,
    client_hardware_link VARCHAR(64) NOT NULL,
    client_id INT,
    CONSTRAINT component_fk
    FOREIGN KEY (client_id)
    REFERENCES clients(client_id)
) ENGINE = INNODB;
```

```
CREATE TABLE client_licenses(
    client_license_id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    client_license_software VARCHAR(128) NOT NULL,
    client_license_original_user VARCHAR(64) NOT NULL,
    client_license_original_pc VARCHAR(128) NOT NULL,
    client_license_recent_user VARCHAR(64) NOT NULL,
    client_license_recent_pc VARCHAR(128) NOT NULL,
    client_license_key VARCHAR(512) NOT NULL,
    client_license_first_use DATE NOT NULL,
    client_license_recent_use DATE NOT NULL,
    client_license_link VARCHAR(64) NOT NULL,
    client_id INT,
    CONSTRAINT license_fk
    FOREIGN KEY (client_id)
    REFERENCES clients(client_id)
) ENGINE = INNODB;
```

```
CREATE USER 'occmsysro'@'localhost'
    IDENTIFIED BY '{ENTER PASSWORD}';
CREATE USER 'occmsysrw'@'localhost'
    IDENTIFIED BY '{ENTER PASSWORD}';
```

```
GRANT SELECT,INSERT,UPDATE,DELETE,CREATE
    ON openccmsys.*
    TO 'occmsysrw'@'localhost';
GRANT SELECT
    ON openccmsys.*
    TO 'occmsysro'@'localhost';
```