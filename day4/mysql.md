# Database Mysql

## Basic define
<p>DB : Database </p>
<p>Table : Table </p>
<p>Row : Row </p>
<p>Column : Field </p>

## Basic commands
<p> show all database </p>
<pre>SHOW DATABASES;
</pre>

<p> select db </p>
<pre>use {name}; </pre>

<p> action </p>
<pre>
SELECT , UPDATE, DELETE, INSERT
</pre>


<p>create db </p>
<pre>
CREATE DATABASE { databasename };
</pre>

<p>create table </p>
<pre>
CREATE TABLE table_name (
    column1 datatype,
    column2 datatype,
    column3 datatype,
   ....
);
</pre>

<p> insert first value </p>
<pre>
INSERT INTO table_name (column1, column2, column3, ...)
VALUES (value1, value2, value3, ...);
</pre>

## Data type
<p><b>CHAR</b></p>
<p><b>BINARY</b></p>
<p><b>VARCHAR</b></p>
<p><b>VARBINARY</b></p>
<p><b>TINYBLOB</b></p>
<p><b>TINYTEXT</b></p>
<p><b>TEXT</b></p>
<p><b>BLOB</b></p>
<p><b>MEDIUMTEXT</b></p>
<p><b>MEDIUMBLOB</b></p>
<p><b>LONGTEXT</b></p>
<p><b>...</b></p>

<pre>
INSERT INTO table_name (column1, column2, column3, ...)
VALUES (1, "2", 3.5, ...);
</pre>

## Query Data
<pre>
SELECT * FROM { table }
</pre>

### with conditions
<pre>
SELECT column1, column2, ...
FROM table_name
WHERE condition;
</pre>
#### Example
<pre>
SELECT column1, column2, ...
FROM table_name
WHERE id > 3;
</pre>

## Query multiple Conditions
#### AND
<pre>
SELECT column1, column2, ...
FROM table_name
WHERE id > 3
AND delete_at = null
</pre>
#### OR
<pre>
SELECT column1, column2, ...
FROM table_name
WHERE id > 3
OR delete_at = null
</pre>

## Update
<pre>
UPDATE table_name
SET column1 = value1, column2 = value2, ...
WHERE condition;
</pre>

## Delete
<pre>
DELETE FROM table_name WHERE condition;
</pre>

