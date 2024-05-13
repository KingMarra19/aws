CREATE TABLE utente (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    password VARCHAR(100) NOT NULL
);


INSERT INTO utente (nome, password) VALUES ('ruben', MD5('scopacasa')), ('riccardo', MD5('andronaco'));
