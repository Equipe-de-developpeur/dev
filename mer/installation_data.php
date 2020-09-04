<?php
$server = "localhost"; // localisation du serveur MSSQL
$name = "root"; // Login de l'utilisateur
$password = ""; // Password de l'utilisateur
$base = ""; // Nom de la Base de donn�es

$dsn = 'mysql:dbname='.$base.';host='.$server;

$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);

try {
    $GLOBALS['conn'] = new PDO($dsn, $name, $password, $options);
	$database="CREATE DATABASE IF NOT EXISTS mer_ile CHARACTER SET utf8 COLLATE utf8_general_ci";
	$GLOBALS['conn']->exec($database);
	
	$base="mer_ile";
	$dsn = 'mysql:dbname='.$base.';host='.$server;
	
	$GLOBALS['conn'] = new PDO($dsn, $name, $password, $options);
	$GLOBALS['conn']->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$table="CREATE TABLE IF NOT EXISTS `liste_ile` (
			`liste_ile_id` INT NOT NULL AUTO_INCREMENT,
			`liste_ile_nom` VARCHAR(50),
			`liste_ile_ville` VARCHAR(50),
			`liste_ile_ecologie` VARCHAR(255),
			`liste_ile_nombre_de_vote` INT,
			`liste_ile_note_moyenne` INT,
			PRIMARY KEY (`liste_ile_id`)
			)";
	$GLOBALS['conn']->exec($table);
	
	$table2="CREATE TABLE IF NOT EXISTS `ville_proxi` (
			`ville_proxi_id` INT NOT NULL AUTO_INCREMENT,
			`ville_proxi_nom` VARCHAR(50),
			`ville_proxi_lat` FLOAT,
			`ville_proxi_long` FLOAT,
			PRIMARY KEY (`ville_proxi_id`)
			)";
	$GLOBALS['conn']->exec($table2);
	
	$insert="INSERT INTO  `ville_proxi` (`ville_proxi_nom`, `ville_proxi_long`, `ville_proxi_lat`) VALUES
('Seillons-Source-d\'Argens', 5.88362, 43.4964),
('Néoules', 6.01667, 43.3),
('Solliès-Toucas', 6.01667, 43.2),
('Cogolin', 6.53333, 43.25),
('Villecroze', 6.26667, 43.5833),
('Le Cannet-des-Maures', 6.35, 43.4),
('Claviers', 6.56667, 43.6),
('La Londe-les-Maures', 6.23333, 43.1333),
('Pontevès', 6.05, 43.5667),
('Brue-Auriac', 5.95, 43.5333),
('Régusse', 6.13333, 43.65),
('Plan-d\'Aups-Sainte-Baume', 5.7175, 43.33),
('Figanières', 6.5, 43.5667),
('Sainte-Maxime', 6.63333, 43.3),
('Solliès-Pont', 6.05, 43.1833),
('Rians', 5.75, 43.6167),
('Saint-Cyr-sur-Mer', 5.71667, 43.1833),
('Mazaugues', 5.91667, 43.3333),
('Cabasse', 6.23333, 43.4167),
('Nans-les-Pins', 5.78333, 43.3667),
('Cavalaire-sur-Mer', 6.53333, 43.1667),
('Flassans-sur-Issole', 6.21667, 43.3667),
('Ramatuelle', 6.61667, 43.2167),
('Le Thoronet', 6.3, 43.45),
('Saint-Zacharie', 5.71667, 43.3833),
('Le Bourguet', 6.51667, 43.7833),
('La Garde', 6.01056, 43.1248),
('Puget-sur-Argens', 6.68333, 43.45),
('Sanary-sur-Mer', 5.8, 43.1167),
('Bras', 5.95, 43.4667),
('Hyères', 6.11667, 43.1167),
('La Valette-du-Var', 5.98333, 43.1333),
('Méounes-lès-Montrieux', 5.96667, 43.2833),
('Ollioules', 5.85, 43.1333),
('Sillans-la-Cascade', 6.18333, 43.5667),
('Saint-Maximin-la-Sainte-Baume', 5.86667, 43.45),
('Saint-Antonin-du-Var', 6.28695, 43.5067),
('Callian', 6.75, 43.6333),
('Solliès-Ville', 6.03333, 43.1833),
('Rayol-Canadel-sur-Mer', 6.46167, 43.1587),
('La Celle', 6.03333, 43.4),
('Le Plan-de-la-Tour', 6.55, 43.3333),
('Vins-sur-Caramy', 6.15, 43.4333),
('Flayosc', 6.4, 43.5333),
('Bauduen', 6.18333, 43.7333),
('Camps-la-Source', 6.08333, 43.3833),
('Bargemon', 6.53333, 43.6167),
('Tanneron', 6.88333, 43.5833),
('Fox-Amphoux', 6.1, 43.5833),
('Aups', 6.23333, 43.6167),
('Taradeau', 6.43333, 43.45),
('Saint-Julien', 5.90695, 43.6912),
('La Martre', 6.6, 43.7667),
('Lorgues', 6.36667, 43.4833),
('Arcs', 6.48333, 43.45),
('Roquebrune-sur-Argens', 6.63333, 43.4333),
('Entrecasteaux', 6.23333, 43.5167),
('Callas', 6.53333, 43.5833),
('Ollières', 5.83333, 43.4833),
('Rougiers', 5.85, 43.3833),
('Pourcieux', 5.78333, 43.4667),
('Évenos', 5.85, 43.1667),
('Carnoules', 6.18333, 43.3),
('Le Pradet', 6.01667, 43.1),
('Bargème', 6.56667, 43.7333),
('Bormes-les-Mimosas', 6.33333, 43.15),
('Seillans', 6.63333, 43.6333),
('Pourrières', 5.73333, 43.5),
('Pignans', 6.21667, 43.3),
('Carqueiranne', 6.08333, 43.0833),
('Tavernes', 6.01667, 43.6),
('Adrets-de-l\'Estérel', 6.81417, 43.5256),
('Fayence', 6.68333, 43.6167),
('Six-Fours-les-Plages', 5.83945, 43.0934),
('Châteauvieux', 6.575, 43.775),
('Carcès', 6.18333, 43.4667),
('Vidauban', 6.43333, 43.4167),
('Garéoult', 6.05, 43.3333),
('Varages', 5.96667, 43.6),
('Draguignan', 6.46667, 43.5333),
('Saint-Martin', 5.88478, 43.5892),
('Esparron', 5.85, 43.5917),
('Barjols', 6, 43.55),
('Montauroux', 6.76667, 43.6167),
('Saint-Paul-en-Forêt', 6.68333, 43.5667),
('Moissac-Bellevue', 6.16667, 43.65),
('Le Val', 6.08333, 43.4333),
('Trans-en-Provence', 6.48333, 43.5),
('Le Muy', 6.55, 43.4667),
('Fréjus', 6.73611, 43.4339),
('Correns', 6.08333, 43.4833),
('Signes', 5.86667, 43.3),
('La Roquebrussanne', 5.98333, 43.3333),
('Riboux', 5.75, 43.3),
('Châteauvert', 6.01667, 43.5),
('Montmeyan', 6.06667, 43.65),
('Montferrat', 6.48333, 43.6167),
('Vérignon', 6.26667, 43.65),
('Cuers', 6.06667, 43.2333),
('Grimaud', 6.51667, 43.2667),
('Besse-sur-Issole', 6.16667, 43.35),
('Mons', 6.71667, 43.6833),
('Comps-sur-Artuby', 6.5, 43.7167),
('La Crau', 6.06667, 43.15),
('Tourrettes', 6.70223, 43.6234),
('Le Lavandou', 6.36667, 43.1333),
('Salernes', 6.23333, 43.55),
('Salles-sur-Verdon', 6.2, 43.7667),
('Gassin', 6.58333, 43.2167),
('Baudinard-sur-Verdon', 6.13445, 43.7164),
('Forcalqueiret', 6.08333, 43.3333),
('La Motte', 6.51667, 43.4833),
('Toulon', 5.93333, 43.1167),
('La Môle', 6.46667, 43.2),
('Puget-Ville', 6.13333, 43.2833),
('Le Beausset', 5.8, 43.2),
('La Verdière', 5.93333, 43.6333),
('La Cadière-d\'Azur', 5.76667, 43.2),
('Belgentier', 6, 43.25),
('Châteaudouble', 6.45, 43.5833),
('Aiguines', 6.25, 43.7667),
('Tourtour', 6.3, 43.5833),
('Brignoles', 6.06667, 43.4),
('Saint-Raphaël', 6.76667, 43.4167),
('Collobrières', 6.3, 43.2333),
('Sainte-Anastasie-sur-Issole', 6.13333, 43.3333),
('La Garde-Freinet', 6.46667, 43.3167),
('La Croix-Valmer', 6.56667, 43.2),
('Rocbaron', 6.08333, 43.3),
('Le Luc', 6.31667, 43.3833),
('La Bastide', 6.61667, 43.7333),
('Brenon', 6.55, 43.7667),
('Artignosc-sur-Verdon', 6.1, 43.7),
('Montfort-sur-Argens', 6.11667, 43.4667),
('Artigues', 5.8, 43.6),
('Gonfaron', 6.28333, 43.3167),
('Cotignac', 6.15, 43.5333),
('Tourves', 5.93333, 43.4),
('Saint-Tropez', 6.63333, 43.2667),
('Pierrefeu-du-Var', 6.13333, 43.2167),
('Le Revest-les-Eaux', 6.56667, 43.3667),
('La Farlède', 6.03333, 43.1667),
('Saint-Mandrier-sur-Mer', 5.93333, 43.0667),
('Le Castellet', 5.77667, 43.2028),
('Bandol', 5.75, 43.1333),
('Ampus', 6.38333, 43.6),
('La Seyne-sur-Mer', 5.88333, 43.1),
('La Roque-Esclapon', 6.63333, 43.7167),
('Vinon-sur-Verdon', 5.8, 43.7167),
('Bagnols-en-Forêt', 6.7, 43.5333),
('Mayons', 6.36667, 43.3167),
('Trigance', 6.45, 43.7667),
('Ginasservis', 5.85, 43.6667);
";
	
	$GLOBALS['conn']->exec($insert);
	
} catch (PDOException $e) {
    echo 'Connexion impossible au serveur : ' . $e->getMessage();
}






?>