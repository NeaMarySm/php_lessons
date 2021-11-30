USE php_lessons;

DROP Table IF EXISTS users;
CREATE Table users (
    id SERIAL PRIMARY KEY,
    username varchar(120) NOT NULL UNIQUE,
    email varchar(150) NOT NULL UNIQUE,
    password_hash varchar(255) NOT NULL,
    created_at DATETIME DEFAULT NOW()
) default charset utf8;

DROP Table IF EXISTS goods;
CREATE Table goods (
    id SERIAL PRIMARY KEY,
    `name` VARCHAR(120),
    price DECIMAL NOT NULL
) default charset utf8;

INSERT INTO goods (`name`, `price`) VALUES 
('big box', 266),
('small box', 115),
('envelope', 22),
('paper bag', 40),
('red hat', 324);