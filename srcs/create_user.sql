CREATE USER 'kek'@'localhost' IDENTIFIED BY 'pep';
GRANT ALL PRIVILEGES ON *.* TO 'kek'@'localhost';
CREATE DATABASE wordpress;
CREATE USER 'pep'@'localhost' IDENTIFIED BY 'kek';
GRANT ALL ON wordpress.* TO 'pep'@'localhost';
FLUSH PRIVILEGES;
