INSERT INTO zakaznici (jmeno, email) VALUES
('Anna Nováková', 'anna.novakova@email.cz'),
('Petr Svoboda', 'petr.svoboda@email.cz'),
('Jana Dvořáková', 'jana.dvorakova@email.cz'),
('Tomáš Kučera', 'tomas.kucera@email.cz'),
('Kateřina Jelínková', 'katerina.jelinkova@email.cz'),
('Martin Pokorný', 'martin.pokorny@email.cz'),
('Lucie Králová', 'lucie.kralova@email.cz'),
('David Horák', 'david.horak@email.cz'),
('Tereza Němcová', 'tereza.nemcova@email.cz'),
('Filip Veselý', 'filip.vesely@email.cz');

INSERT INTO objednavky (produkt, zakaznik) VALUES
('Notebook XYZ', 1), -- Anna Nováková
('Bezdrátová myš', 2), -- Petr Svoboda
('Kávovar Deluxe', 1), -- Anna Nováková (druhá objednávka)
('Sada kuchyňských nožů', 3), -- Jana Dvořáková
('Sportovní hodinky', 4), -- Tomáš Kučera
('Pánská košile', 5), -- Kateřina Jelínková
('Kniha: Tajemství kódu', 6), -- Martin Pokorný
('Sada LEGO kostek', 7), -- Lucie Králová
('Monitor 27 palců', 8), -- David Horák
('Sluneční brýle', 10); -- Filip Veselý