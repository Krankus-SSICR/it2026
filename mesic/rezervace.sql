USE it2026;
CREATE TABLE rezervace (
    rezervace_id INT PRIMARY KEY AUTO_INCREMENT,
    id_host INT,
    datum_prijezdu DATE,
    datum_odjezdu DATE,
    pocet_dospelych INT,
    pocet_deti INT,
    FOREIGN KEY (id_host) REFERENCES hoste(host_id)
);