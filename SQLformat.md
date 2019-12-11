# SQL for openCCMSYS #

This is the SQL code for the simple database used to store information for use in openCCMSYS. 
There are three tables in the database, **clients**, **client_components** and **client_licenses**. The tables are pretty self explanitory, the **clients** table holds your company clients, the **client_components** holds the hardware you currently have/had in for repair/setup and which client the hardware belonged to and the **client_licenses** table holds the license for any software that clients have.
---
#### Table relationships ###
The **clients** table has a *one* to *many* relationship with both **client_components** and **client_licenses** individually, as one client can have many peices of hardware and one client can have many software licenses.
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
    client_component_total INT(1024) NOT NULL,
    client_license_total INT(1024) NOT NULL
) ENGINE = INNODB;
```

```
CREATE TABLE client_component(
    client_component_id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    client_component VARCHAR(256) NOT NULL,
    client_component_user VARCHAR(256) NOT NULL,
    client_company_contact VARCHAR(256) NOT NULL,
    client_problem_description VARCHAR(1024) NOT NULL,
    client_first_contact DATE NOT NULL,
    client_collection_date DATE NOT NULL,
    client_drop_off_date DATE NOT NULL,
    client_id INT,
    CONSTRAINT component_fk
    FOREIGN KEY (client_id)
    REFERENCES clients(client_id)
) ENGINE = INNODB;
```

```
CREATE TABLE client_software(
    client_software_id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    client_software_name VARCHAR(128) NOT NULL,
    client_software_user VARCHAR(256) NOT NULL,
    client_software_pc VARCHAR(256) NOT NULL,
    client_software_key VARCHAR(512) NOT NULL,
    client_software_first_use DATE NOT NULL,
    client_id INT,
    CONSTRAINT license_fk
    FOREIGN KEY (client_id)
    REFERENCES clients(client_id)
) ENGINE = INNODB;
```