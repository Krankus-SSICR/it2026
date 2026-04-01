
CREATE TABLE filmy (
    id INT PRIMARY KEY,
    nazev VARCHAR(100),
    rok INT
);

CREATE TABLE hodnoceni (
    id INT PRIMARY KEY,
    film_id INT,
    uzivatel VARCHAR(50),
    hodnoceni INT
);