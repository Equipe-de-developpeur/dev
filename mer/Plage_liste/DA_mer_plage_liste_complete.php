<?php
include "DA_mer_plage_liste_table.php";
$insert ="INSERT INTO $nom_table1(liste_plage_lieux,liste_plage_villes,liste_plage_liens,liste_plage_distances,liste_plage_actions) 
VALUES
('Ayguade','Hyères','https://www.hyeres-tourisme.com/equipement-loisir/plage-de-layguade/','km','Pavillon bleu'),
('Almanarre Nord','Hyères','https://www.hyeres-tourisme.com/equipement-loisir/plage-de-lalmanarre/','km','Pavillon bleu'),
('La Bergerie','Hyères','https://www.hyeres-tourisme.com/equipement-loisir/plage-de-la-bergerie/','km','Pavillon bleu'),
('Les Salins','Hyères','https://www.hyeres-tourisme.com/equipement-loisir/plage-des-salins/','km','Pavillon bleu'),
('Gigaro','La Croix-Valmer','https://www.plages.tv/detail/plage-de-gigaro-la-croix-valmer-83420','km','Pavillon bleu'),
('La Douane / Le Débarquement','La Croix-Valmer','https://www.plages.tv/detail/plage-du-debarquement-la-croix-valmer-83420','km','Pavillon bleu'),
('L’Argentière','La Londe-les-Maures','https://www.mpmtourisme.com/loisir/plage-argentiere','km','Pavillon bleu'),
('Miramar','La Londe-les-Maures','https://www.mpmtourisme.com/loisir/plage-miramar','km','Pavillon bleu'),
('Tamaris','La Londe-les-Maures','https://www.mpmtourisme.com/loisir/plage-tamaris','km','Pavillon bleu'),
('Sablettes','La-Seyne-sur-Mer','https://www.plages.tv/detail/plage-des-sablettes-mar-vivo-la-seyne-sur-mer-83500','km','Pavillon bleu'),
('Aiguebelle','Le Lavandou','https://www.ot-lelavandou.fr/le-lavandou/les-12-plages-du-lavandou/plage-daiguebelle/','km','Pavillon bleu'),
('Anglade','Le Lavandou','https://www.ot-lelavandou.fr/le-lavandou/les-12-plages-du-lavandou/plage-de-langlade/','km','Pavillon bleu'),
('Cavalière','Le Lavandou','https://www.ot-lelavandou.fr/le-lavandou/les-12-plages-du-lavandou/plage-de-cavaliere/','km','Pavillon bleu'),
('la Fossette','Le Lavandou','https://www.ot-lelavandou.fr/le-lavandou/les-12-plages-du-lavandou/plage-de-la-fossette/','km','Pavillon bleu'),
('Lavandou ville','Le Lavandou','https://www.ot-lelavandou.fr/le-lavandou/les-12-plages-du-lavandou/plage-du-centre-ville/','km','Pavillon bleu'),
('Pramousquier','Le Lavandou','https://www.ot-lelavandou.fr/le-lavandou/les-12-plages-du-lavandou/plage-de-pramousquier/','km','Pavillon bleu'),
('Saint Clair','Le Lavandou','https://www.ot-lelavandou.fr/le-lavandou/les-12-plages-du-lavandou/plage-de-saint-clair/','km','Pavillon bleu'),
('Les Bonnettes','Le Pradet','http://www.lepradet-tourisme.fr/fr/fiche/plage-des-bonnettes/','km','Pavillon bleu'),
('La Garonne','Le Pradet','http://www.lepradet-tourisme.fr/fr/fiche/plage-de-la-garonne/','km','Pavillon bleu'),
('Le Monaco','Le Pradet','http://www.lepradet-tourisme.fr/fr/fiche/plage-du-monaco/','km','Pavillon bleu'),
('Les Oursinières','Le Pradet','http://www.lepradet-tourisme.fr/fr/fiche/plage-des-oursinieres/','km','Pavillon bleu'),
('Canadel','Rayol-Canadel-sur-Mer','https://www.plages.tv/detail/plage-1-rayol-canadel-sur-mer-83820','km','Pavillon bleu'),
('Pramousquier Est','Rayol-Canadel-sur-Mer','https://www.plages.tv/detail/plage-de-pramousquier-rayol-canadel-sur-mer-83820','km','Pavillon bleu'),
('Rayol','Rayol-Canadel-sur-Mer','https://www.plages.tv/detail/plage-2-rayol-canadel-sur-mer-83820','km','Pavillon bleu'),
('La Madrague','Saint-Cyr-sur-Mer','https://www.saintcyrsurmer.com/incontournables/les-plages/la-plage-de-la-madrague/','km','Pavillon bleu'),
('Les Lecques Saint Come Ouest','Saint-Cyr-sur-Mer','https://www.saintcyrsurmer.com/incontournables/les-plages/la-plage-des-lecques/','km','Pavillon bleu'),
('La Coudoulière','Saint-Mandrier-sur-Mer','https://www.plages.tv/detail/plage-de-la-coudouliere-saint-mandrier-sur-mer-83430','km','Pavillon bleu'),
('La Vieille','Saint-Mandrier-sur-Mer','https://www.plages.tv/detail/plage-de-la-vieille-saint-mandrier-sur-mer-83430','km','Pavillon bleu'),
('Touring','Saint-Mandrier-sur-Mer','https://www.plages.tv/detail/plage-touring-saint-mandrier-sur-mer-83430','km','Pavillon bleu'),
('Le Canon','Saint-Mandrier-sur-Mer','https://www.plages.tv/detail/plage-du-canon-saint-mandrier-sur-mer-83430','km','Pavillon bleu'),
('Péguière','Saint-Raphaël','https://www.saint-raphael.com/fr/loisirs/plage-de-la-peguiere-4778909/','km','Pavillon bleu'),
('Veillat','Saint-Raphaël','https://www.saint-raphael.com/fr/loisirs/plage-du-veillat-4778925/','km','Pavillon bleu'),
('Arène Grosse','Saint-Raphaël','https://www.saint-raphael.com/fr/loisirs/plage-d-arene-grosse-4778587/','km','Pavillon bleu'),
('Boulouris','Saint-Raphaël','https://www.saint-raphael.com/fr/saint-raphael/ville/les-quartiers/boulouris','km','Pavillon bleu'),
('Dramont','Saint-Raphaël','https://www.esterel-cotedazur.com/decouvrir/plages/plage-du-debarquement/','km','Pavillon bleu'),
('Camp Long','Saint-Raphaël','https://www.saint-raphael.com/fr/loisirs/plage-du-camp-long-4778734/','km','Pavillon bleu'),
('Agay','Saint-Raphaël','https://www.saint-raphael.com/fr/loisirs/plage-d-agay-4778548/','km','Pavillon bleu'),
('Pourousset','Saint-Raphaël','https://www.saint-raphael.com/fr/loisirs/plage-du-pourrousset-4778998/','km','Pavillon bleu'),
('Baumette','Saint-Raphaël','https://www.saint-raphael.com/fr/loisirs/plage-de-la-baumette-4778895/','km','Pavillon bleu'),
('Anthéor','Saint-Raphaël','https://www.esterel-cotedazur.com/decouvrir/plages/plage-antheor/','km','Pavillon bleu'),
('Garonnette','Sainte-Maxime','https://www.sainte-maxime.com/fr/loisirs/plage-de-la-garonnette-4613684/','km','Pavillon bleu'),
('La Croisette','Sainte-Maxime','https://www.sainte-maxime.com/fr/loisirs/plage-de-la-croisette-4813159/','km','Pavillon bleu'),
('La Nartelle','Sainte-Maxime','https://www.sainte-maxime.com/fr/loisirs/autres-loisirs/sainte-maxime/plage-de-la-nartelle-4613688/','km','Pavillon bleu'),
('Centre-ville','Sainte-Maxime','https://www.sainte-maxime.com/fr/loisirs/plage-du-centre-ville-4613690/','km','Pavillon bleu'),
('Bonnegrace Kennedy','Six-Fours-Les-Plages','https://www.gralon.net/tourisme/plages-france/plage-plage-bonnegrace-kennedy-poste-de-secours-2916.htm','km','Pavillon bleu'),
('Le Cros','Six-Fours-Les-Plages','https://www.plages.tv/detail/plage-du-cros-six-fours-les-plages-83140','km','Pavillon bleu'),
('La Coudouliere','Six-Fours-Les-Plages','https://www.plages.tv/detail/plage-de-la-coudouliere-six-fours-les-plages-83140','km','Pavillon bleu'),
('Les Roches Brunes','Six-Fours-Les-Plages','https://www.plages.tv/detail/plage-des-roches-brunes-six-fours-les-plages-83140','km','Pavillon bleu'),
('Mistral','Toulon','https://www.plages.tv/detail/plage-du-mourillon-anse-les-pins-de-la-source-mistral-et-lido--toulon-83000','km','Pavillon bleu'),
('Plage des Pins','Toulon','https://www.plages.tv/detail/plage-du-mourillon-anse-les-pins-de-la-source-mistral-et-lido--toulon-83000','km','Pavillon bleu'),
('Plage du Lido','Toulon','https://www.plages.tv/detail/plage-du-mourillon-anse-les-pins-de-la-source-mistral-et-lido--toulon-83000','km','Pavillon bleu'),
('Plage de la Source','Toulon','https://www.plages.tv/detail/plage-du-mourillon-anse-les-pins-de-la-source-mistral-et-lido--toulon-83000','km','Pavillon bleu')
";

$connexion->exec($insert);

/*$insert2 ="INSERT INTO $nom_table2(commentaires_plage_textes) 
VALUES
('commentaire avec un insert dans le code')
";

$connexion->exec($insert2);*/

?>