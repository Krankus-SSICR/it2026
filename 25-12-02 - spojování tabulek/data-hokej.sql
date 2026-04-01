INSERT INTO tymy (nazev, mesto) VALUES
('HC Kometa Brno', 'Brno'),
('HC Sparta Praha', 'Praha'),
('HC Oceláři Třinec', 'Třinec'),
('HC Dynamo Pardubice', 'Pardubice');

INSERT INTO hraci (jmeno, pozice, tym_id) VALUES
('Petr Novák', 'útočník', 1),
('Jan Svoboda', 'obránce', 1),
('Milan Dvořák', 'brankář', 2),
('Karel Horák', 'útočník', 2),
('Lukáš Veselý', 'obránce', 3),
('Ondřej Kříž', 'útočník', 4);

INSERT INTO zapasy (domaci_tym_id, hostujici_tym_id, datum, skore_domaci, skore_hoste) VALUES
(1, 2, '2025-11-01', 3, 2),
(3, 4, '2025-11-05', 1, 4),
(2, 3, '2025-11-10', 2, 2);
