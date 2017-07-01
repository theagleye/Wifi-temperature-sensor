-- Mysql, in mariadb, in xampp
CREATE TABLE temps(
	id int(11) NOT NULL,
    temp int(11) NOT NULL,
    day timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- making the column 'id' primary key
ALTER TABLE temps
	ADD PRIMARY KEY (id);

-- auto increment for table data id
ALTER TABLE temps
	MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
