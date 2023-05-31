SELECT s.nom AS nom_salle, e.nom AS nom_etage
FROM salles s
JOIN etages e ON s.etage_id = e.id;