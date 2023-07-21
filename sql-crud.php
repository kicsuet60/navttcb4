Microsoft Windows [Version 10.0.19045.3208]
(c) Microsoft Corporation. All rights reserved.

C:\xampp\mysql\bin>mysql -u root -p
Enter password:
Welcome to the MariaDB monitor.  Commands end with ; or \g.
Your MariaDB connection id is 8
Server version: 10.4.24-MariaDB mariadb.org binary distribution

Copyright (c) 2000, 2018, Oracle, MariaDB Corporation Ab and others.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

MariaDB [(none)]> CREATE DATABASE nbstudent;
Query OK, 1 row affected (0.002 sec)

MariaDB [(none)]> show databases
    -> show databases;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'show databases' at line 2
MariaDB [(none)]> show databases;
+------------------------------+
| Database                     |
+------------------------------+
| nbstudent                    |
+------------------------------+
64 rows in set (0.001 sec)

MariaDB [(none)]> DROP DATABASE nbstudent;
Query OK, 0 rows affected (0.002 sec)

MariaDB [(none)]> CREATE DATABASE nbstudent;
Query OK, 1 row affected (0.001 sec)

MariaDB [(none)]> use nbstudent;
Database changed
MariaDB [nbstudent]> CREATE TABLE persons (
    ->     PersonID int,
    ->     LastName varchar(255),
    ->     FirstName varchar(255),
    ->     Address varchar(255),
    ->     City varchar(255)
    -> );
Query OK, 0 rows affected (0.235 sec)

MariaDB [nbstudent]> DESCRIBE persons;
+-----------+--------------+------+-----+---------+-------+
| Field     | Type         | Null | Key | Default | Extra |
+-----------+--------------+------+-----+---------+-------+
| PersonID  | int(11)      | YES  |     | NULL    |       |
| LastName  | varchar(255) | YES  |     | NULL    |       |
| FirstName | varchar(255) | YES  |     | NULL    |       |
| Address   | varchar(255) | YES  |     | NULL    |       |
| City      | varchar(255) | YES  |     | NULL    |       |
+-----------+--------------+------+-----+---------+-------+
5 rows in set (0.006 sec)

MariaDB [nbstudent]> CREATE TABLE customer
    -> (
    -> CustID int(11) NOT NULL AUTO_INCREMENT,
    -> CustName varchar(50) NOT NULL,
    -> Age int(11) NOT NULL,
    -> City char(50),
    -> Salary numeric,
    -> PRIMARY KEY(CustID)
    -> );
Query OK, 0 rows affected (0.268 sec)

MariaDB [nbstudent]> DESCRIBE customer;
+----------+---------------+------+-----+---------+----------------+
| Field    | Type          | Null | Key | Default | Extra          |
+----------+---------------+------+-----+---------+----------------+
| CustID   | int(11)       | NO   | PRI | NULL    | auto_increment |
| CustName | varchar(50)   | NO   |     | NULL    |                |
| Age      | int(11)       | NO   |     | NULL    |                |
| City     | char(50)      | YES  |     | NULL    |                |
| Salary   | decimal(10,0) | YES  |     | NULL    |                |
+----------+---------------+------+-----+---------+----------------+
5 rows in set (0.006 sec)

MariaDB [nbstudent]> INSERT INTO customer
    -> (CustID, CustName, Age, City, Salary)
    -> VALUES
    -> (NULL, 'AAhad', 26, 'Meeka', 9000),
    -> (NULL, 'Ali', 19, 'Karachi', 11000),
    -> (NULL, 'Arif', 31, 'Yanbu', 6000),
    -> (NULL, 'Asif', 42, 'Lahore', 10000);
Query OK, 4 rows affected (0.089 sec)
Records: 4  Duplicates: 0  Warnings: 0

MariaDB [nbstudent]> SELECT * FROM customer;
+--------+----------+-----+---------+--------+
| CustID | CustName | Age | City    | Salary |
+--------+----------+-----+---------+--------+
|      1 | AAhad    |  26 | Meeka   |   9000 |
|      2 | Ali      |  19 | Karachi |  11000 |
|      3 | Arif     |  31 | Yanbu   |   6000 |
|      4 | Asif     |  42 | Lahore  |  10000 |
+--------+----------+-----+---------+--------+
4 rows in set (0.000 sec)

MariaDB [nbstudent]> INSERT INTO customer
    -> (CustID, CustName, Age, City, Salary)
    -> VALUES
    -> (NULL, 'AAhad', 26, 'Meeka', 9000),
    -> (NULL, 'Ali', 19, 'Karachi', 11000),
    -> (NULL, 'Arif', 31, 'Yanbu', 6000),
    -> (NULL, 'Asif', 42, 'Lahore', 10000);
Query OK, 4 rows affected (0.074 sec)
Records: 4  Duplicates: 0  Warnings: 0

MariaDB [nbstudent]> SELECT * FROM customer;
+--------+----------+-----+---------+--------+
| CustID | CustName | Age | City    | Salary |
+--------+----------+-----+---------+--------+
|      1 | AAhad    |  26 | Meeka   |   9000 |
|      2 | Ali      |  19 | Karachi |  11000 |
|      3 | Arif     |  31 | Yanbu   |   6000 |
|      4 | Asif     |  42 | Lahore  |  10000 |
|      5 | AAhad    |  26 | Meeka   |   9000 |
|      6 | Ali      |  19 | Karachi |  11000 |
|      7 | Arif     |  31 | Yanbu   |   6000 |
|      8 | Asif     |  42 | Lahore  |  10000 |
+--------+----------+-----+---------+--------+
8 rows in set (0.000 sec)

MariaDB [nbstudent]> UPDATE customer
    -> SET CustName = 'Yasir', Age= 17
    -> WHERE CustID = 1;
Query OK, 1 row affected (0.037 sec)
Rows matched: 1  Changed: 1  Warnings: 0

MariaDB [nbstudent]> SELECT * FROM customer;
+--------+----------+-----+---------+--------+
| CustID | CustName | Age | City    | Salary |
+--------+----------+-----+---------+--------+
|      1 | Yasir    |  17 | Meeka   |   9000 |
|      2 | Ali      |  19 | Karachi |  11000 |
|      3 | Arif     |  31 | Yanbu   |   6000 |
|      4 | Asif     |  42 | Lahore  |  10000 |
|      5 | AAhad    |  26 | Meeka   |   9000 |
|      6 | Ali      |  19 | Karachi |  11000 |
|      7 | Arif     |  31 | Yanbu   |   6000 |
|      8 | Asif     |  42 | Lahore  |  10000 |
+--------+----------+-----+---------+--------+
8 rows in set (0.000 sec)

MariaDB [nbstudent]> DELETE FROM customer
    -> WHERE CustID = 7;
Query OK, 1 row affected (0.053 sec)

MariaDB [nbstudent]> SELECT * FROM customer;
+--------+----------+-----+---------+--------+
| CustID | CustName | Age | City    | Salary |
+--------+----------+-----+---------+--------+
|      1 | Yasir    |  17 | Meeka   |   9000 |
|      2 | Ali      |  19 | Karachi |  11000 |
|      3 | Arif     |  31 | Yanbu   |   6000 |
|      4 | Asif     |  42 | Lahore  |  10000 |
|      5 | AAhad    |  26 | Meeka   |   9000 |
|      6 | Ali      |  19 | Karachi |  11000 |
|      8 | Asif     |  42 | Lahore  |  10000 |
+--------+----------+-----+---------+--------+
7 rows in set (0.000 sec)

MariaDB [nbstudent]>









