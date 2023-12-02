CREATE DATABASE minglemovie ;

CREATE TABLE categorie (
   id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    description VARCHAR(255)
);


CREATE TABLE movie ( 
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    year_of_release int,
    duration int,
    country VARCHAR(255),
    categorie_id int,
    FOREIGN KEY (categorie_id) REFERENCES categorie(id)
);

CREATE TABLE `user` (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    is_admin boolean
);
CREATE TABLE review (
     id INT AUTO_INCREMENT PRIMARY KEY,
    description VARCHAR(255),
    nomber_of_stars int,
    user_id int,
    movie_id int,
    FOREIGN KEY (user_id) REFERENCES `user`(id),
    FOREIGN KEY (movie_id) REFERENCES movie(id)

);
CREATE TABLE status (
    id INT AUTO_INCREMENT PRIMARY KEY,
    status VARCHAR(255),
    user_id int,
    movie_id int,
    FOREIGN KEY (user_id) REFERENCES `user`(id),
    FOREIGN KEY (movie_id) REFERENCES movie(id)

);
    CREATE TABLE cast (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255)

    );

CREATE TABLE movie_cast (
     id INT AUTO_INCREMENT PRIMARY KEY,
    role VARCHAR(50),
    cast_id int,
    movie_id int,
    FOREIGN KEY (cast_id) REFERENCES `cast`(id),
    FOREIGN KEY (movie_id) REFERENCES movie(id)

);


