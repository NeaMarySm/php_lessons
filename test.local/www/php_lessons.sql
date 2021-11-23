DROP database if exists php_lessons;
CREATE database php_lessons;
USE php_lessons;
DROP TABLE if exists gallery;
CREATE TABLE gallery(  
    id int NOT NULL primary key AUTO_INCREMENT,
    `name` varchar(255),
    `file` varchar(255) NOT NULL UNIQUE,
    `size` BIGINT COMMENT 'Bytes',
    view_count INT DEFAULT '0'
) default charset utf8;

INSERT INTO gallery (`name`, `file`, `size`) VALUES
('Aziatskaya-bozhya-korovka','./img/Aziatskaya-bozhya-korovka.jpeg', 51200),
('Bozhya-korovka-2','./img/Bozhya-korovka-2.jpeg', 47104),
('Bozhya-korovka-3','./img/Bozhya-korovka-3.jpeg', 15360),
('Bozhya-korovka-4','./img/Bozhya-korovka-4.jpeg', 19456),
('Bozhya-korovka-5','./img/Bozhya-korovka-5.jpeg', 36864),
('Bozhya-korovka-letit','./img/Bozhya-korovka-letit.jpeg', 53248),
('Dvenadts-bozhya-korovka','./img/Dvenadts-bozhya-korovka.jpeg', 72704),
('Sinyaya-bozhya-korovka','./img/Sinyaya-bozhya-korovka.jpeg', 16384);