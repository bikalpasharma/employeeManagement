CREATE TABLE userlist (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    firstName VARCHAR(100) NOT NULL,
    lastName VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL,
    contact INT(10) NOT NULL,
    address VARCHAR(255) NOT NULL,
    gender VARCHAR(255) NOT NULL,
    birthday DATE,
    password VARCHAR(255) NOT NULL
);