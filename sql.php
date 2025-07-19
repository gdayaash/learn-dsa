<?php

SELECT * FROM wp_employee;

SELECT * FROM wp_employee where Age = 14;

UPDATE wp_employee SET AGE = 14 where personId= 12;

CREATE TABLE wp_employee(Name varchar(255), Age int, Address varchar(255), Country varchar(255));

INSERT INTO wp_employee VALUES ('DAYAASH', 24, 'S.S COLONY', 'INDIA');

select * from wp_employee where Age < 30;

?>