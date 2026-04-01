CREATE TABLE zakaznici (
    id_zakaznik INT PRIMARY KEY AUTO_INCREMENT,
    jmeno TEXT
);

CREATE TABLE objednavky (
    id_objednavky INT PRIMARY KEY AUTO_INCREMENT,
    produkt TEXT,
    FOREIGN KEY (zakaznik) REFERENCES zakaznici(id_zakaznik)
);



INSERT INTO objednavky (produkt, zakaznik) VALUES
('Dron pod vodu', 1),
('Sluchátka', 1),
('Telefon', 1),
('Dron pod vodu', 2),
('Sluchátka', 2),
('Telefon', 3);