CREATE TABLE tymy (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nazev VARCHAR(100) NOT NULL,
    mesto VARCHAR(100) NOT NULL
);

CREATE TABLE hraci (
    id INT AUTO_INCREMENT PRIMARY KEY,
    jmeno VARCHAR(100) NOT NULL,
    pozice VARCHAR(50),
    tym_id INT,
    FOREIGN KEY (tym_id) REFERENCES tymy(id)
);

CREATE TABLE zapasy (
    id INT AUTO_INCREMENT PRIMARY KEY,
    domaci_tym_id INT NOT NULL,
    hostujici_tym_id INT NOT NULL,
    datum DATE NOT NULL,
    skore_domaci INT,
    skore_hoste INT,
    FOREIGN KEY (domaci_tym_id) REFERENCES tymy(id),
    FOREIGN KEY (hostujici_tym_id) REFERENCES tymy(id)
);
