CREATE TABLE kategorie (
    id_kategorie INT AUTO_INCREMENT PRIMARY KEY,
    nazev TEXT
);

CREATE TABLE produkty (
    id_produkt INT AUTO_INCREMENT PRIMARY KEY,
    nazev TEXT,
    kategorie_produktu INT,
    FOREIGN KEY (kategorie_produktu) REFERENCES kategorie(id_kategorie)
);