/*
Name: Manu Sugunakumar
App Name: lba9_users.sql
Course Code: INFT1206-05
Date: April 3,2023
*/
GRANT ALL ON users TO faculty;

-- DROP'ping tables clear out any existing data
DROP TABLE IF EXISTS users;

-- CREATE the table, NOTE: All of the fields in the users database table should be mandatory
CREATE TABLE users(
    id VARCHAR(20) PRIMARY KEY,
    password VARCHAR(15) NOT NULL,
    first_name VARCHAR(20) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    email_address VARCHAR(255) NOT NULL,
    enrol_date DATE NOT NULL,
    last_access DATE NOT NULL
);

-- INSERT data into the tables, all fields mut be filled as thye are set to NOT NULL
INSERT INTO users
    VALUES(
        'jdoe',
        'testpass',
        'John',
        'Doe',
        'jdoe@durhamcollege.ca',
        '2023-1-1',
        '2023-2-1'
    );
INSERT INTO users
    VALUES(
        'sugunakumarm',
        '100748877',
        'Manu',
        'Sugunakumar',
        'manu.sugunakumar@dcmail.ca',
        '2023-1-21',
        '2023-3-18'
    );
INSERT INTO users
    VALUES(
        'robot',
        '123456789',
        'Roboto',
        'Bot',
        'robot@outlook.com',
        '2023-2-12',
        '2023-3-26'
    );