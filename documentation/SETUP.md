# Setup openCCMSYS #

This is the setup guide for openCCMSYS. It will walk you through cloning the GIT repo, setting up the mySQL database and explain some of the basic features of the system. This guide does not include how to setup a server.

1. Setting up the database
2. Ensuring database connections work

## 1.Setting up the database ##

To properly set up the database please follow /documentation/SQLFORMAT.md, creating the tables and users in order of the document. When setting up the users please remember to **CHANGE THE PASSWORD** and make a note of it, you will need this later on.

## 2. Ensuring database connections work ##

Once you have created the database and tables, goto /app/private/required.php and under $dbp variable for both database connection functions with the corrosponding passwords.
