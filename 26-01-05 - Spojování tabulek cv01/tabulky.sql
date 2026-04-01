CREATE TABLE zakaznici (
    id_zakaznik INT AUTO_INCREMENT PRIMARY KEY,
    jmeno TEXT,
    email TEXT
);

CREATE TABLE objednavky (
    id_objednavka INT PRIMARY KEY AUTO_INCREMENT,
    produkt TEXT,
    zakaznik INT,
    FOREIGN KEY (zakaznik) REFERENCES zakaznici(id_zakaznik)
)