GRANT ALL ON automobiles TO faculty;

-- DROP'ping tables clear out any existing data
DROP TABLE IF EXISTS automobiles;

-- CREATE the table, NOTE: All of the fields in the automobiles database table should be mandatory
CREATE TABLE automobiles(
	id INTEGER PRIMARY KEY,
	make VARCHAR(15) NOT  NULL,
	model VARCHAR(20) NOT NULL,
	year INTEGER NOT NULL,
	owner VARCHAR(30) NOT NULL,
	msrp DECIMAL(9, 2) NOT NULL,
	purchase_date DATE NOT NULL
);

-- INSERT data into the tables, all fields mut be filled as thye are set to NOT NULL
INSERT INTO automobiles(id, make, model, year, owner, msrp, purchase_date) VALUES(
	1,
	'Mitsubishi',
	'Lancer',
	2008,
	'Kelli Gibson',
	4431.00,
	'2007-10-10');
INSERT INTO automobiles(id, make, model, year, owner, msrp, purchase_date) VALUES(
	2,
	'Dodge',
	'Challenger',
	2015,
	'Noelle Varnham',
	26995.00,
	'2014-9-21');
INSERT INTO automobiles(id, make, model, year, owner, msrp, purchase_date) VALUES(
	3,
	'Chevrolet',
	'Corvette',
	2010,
	'Shirlee Everest',
	58580.00,
	'2009-12-17');
INSERT INTO automobiles(id, make, model, year, owner, msrp, purchase_date) VALUES(
	4,
	'Hummer',
	'H3',
	2010,
	'Rosanna Elliston',
	42485.00,
	'2012-05-16');
INSERT INTO automobiles(id, make, model, year, owner, msrp, purchase_date) VALUES(
	5,
	'Honda',
	'Civic Type R',
	2023,
	' Isabella Snyder ',
	44390.00,
	'2023-10-04');
	
-- SELECT statement to display make model year and msrp
SELECT make, model, year, msrp FROM automobiles
	ORDER BY year ASC;

-- UPDATE the table to display the car under id 1 to have the owner set to my name
UPDATE automobiles
SET owner = 'Manu Sugunakumar'
WHERE id = 1;

-- DELETE from the table the car under id 4 because it is my least favourite car
DELETE FROM automobiles
WHERE id = 4;