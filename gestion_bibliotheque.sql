DROP TABLE IF EXISTS books_command;
DROP TABLE IF EXISTS books;
DROP TABLE IF EXISTS command;
DROP TABLE IF EXISTS administrator;
DROP TABLE IF EXISTS users;

CREATE TABLE users(
    id INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    name VARCHAR(250) NOT NULL,
    email VARCHAR(250) NOT NULL,
    password VARCHAR(250) NOT NULL
);

CREATE TABLE administrator(
    id INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    name VARCHAR(250) NOT NULL,
    code VARCHAR(200) NOT NULL UNIQUE,
    email VARCHAR(250) NOT NULL,
    password VARCHAR(250) NOT NULL
);

CREATE TABLE command(
    id INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    id_user INTEGER NOT NULL,
    id_admin INTEGER NOT NULL DEFAULT 1,
    duration DATE NOT NULL,
    FOREIGN KEY (id_user) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (id_admin) REFERENCES administrator(id)
);

CREATE TABLE books(
    id INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    title VARCHAR(100) NOT NULL,
    author VARCHAR(100) NOT NULL,
    Descriptions TEXT,
    profil VARCHAR(250) NOT NULL,
    id_admin INTEGER NOT NULL DEFAULT 1,
    FOREIGN KEY (id_admin) REFERENCES administrator(id)
);

CREATE TABLE books_command (
    id INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    id_books INTEGER NOT NULL,
    id_command INTEGER NOT NULL,
    FOREIGN KEY (id_books) REFERENCES books(id) ON DELETE CASCADE,
    FOREIGN KEY (id_command) REFERENCES command(id)
);

INSERT INTO users(name, email, password) VALUES ('nasaina','nasaina@gmail.com', '1234'),
                                                ('fiankinana', 'fy@gmail.com', 'azerty'),
                                                ('ando', 'ando@gmail.com', '12345');

INSERT INTO administrator(name, code, email, password) VALUES ("admin", "SECURITY", "admin@gmail.com", "admin");

-- INSERT INTO books (title, author, Descriptions, id_admin, profil)
--     VALUES ('Josse le tigre et les poissons', 'Nart', 'histoir de vie', 1, '/jose.jpg'),
--            ('le vent se lève', 'Irata', 'pendant la 2eme guerre au japon', 1, '/le-vent-se-leve-affiche.jpg'),
--            ('le tombeau des luciolles', 'Wong', 'histor de 2 orphelin', 1, '/toombeau.jpg'),
--            ('Je veux manger ton pancreas', 'tojimari', 'nouveau monde et dimonsion', 1, '/je-veux-manger-ton-pancreas-dvd-anime.webp'),
--            ('La Dona', 'Katachi', 'voie du silence', 1, '/112190493.webp'),
--            ('Your Name', 'Itadori', 'le passée et le présent', 1, '/images.jpg'),
--            ('Les enfants du temps', 'Hayater', 'la seul saison', 1, 'enfat_temp.jpg');



-- INSERT INTO books (title, author, Descriptions)
--     VALUES ('zombi island', 'Yaito', 'attaque de zombie mutante');

INSERT INTO books_command(id_books, id_command) VALUES (1, 1),
                                                       (3, 2),
                                                       (5, 3);

INSERT INTO command(id_user, id_admin, duration) VALUES (1, 1, '2024-09-03'),
                                                        (2, 1, '2024-09-04'),
                                                        (1, 1, '2024-09-04');

SELECT * FROM users;
SELECT * FROM books;
SELECT * FROM administrator;
SELECT * FROM command;
SELECT * FROM  books_command;



SELECT u.name as Emprinteur, b.title AS Titre, c.duration AS Duree
    FROM command as c 
    JOIN users as u ON  u.id = c.id_user
    JOIN books_command as bc ON bc.id_command = c.id
    JOIN books as b ON bc.id_books = b.id; 


-- SELECT b.title, b.author, b.Descriptions, ( SELECT * FROM books_command as bc WHERE bc.id_books = ) AS Status 
--     FROM books as b
--     JOIN books_command as bc  ON bc.id_books =  b.id


SELECT b.title, b.author, b.Descriptions,
    CASE
        WHEN bc.id_books IS NOT NULL THEN 'Commandé'
        ELSE 'Non Commandé'
    END AS statut_commande
    FROM books as b  
    LEFT JOIN books_command as bc ON bc.id_books = b.id;