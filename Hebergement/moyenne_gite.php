<?php 
    include 'config_bdd_gite.php'; ?>
    
<?php
session_start(); 
// La variable $note_feuille est égale à la valeur postée, récolte de toutes les informations postées via le formulaire.
    $note_feuille = (int)$_POST['note-feuille'];
    $id = $_POST['id'];
    $note_gite_moyenne = (int)$_POST['note_moyenne'];
    $nombre_note = (int)$_POST['nombre_note'];
    $note_add = $_POST['note_add'];
    // Si il y a une note postée
    if(isset($_POST['note-feuille'])){
        $note_moyenne =  $note_gite_moyenne;
        // On ajoute la valeur postée à la valeur totale des notés cumulées
        $note_add += $note_feuille;
        // Le nombre de notes postées s'incrémente de 1.
        $nombre_note ++ ;
        // Calcul de la note moyenne grâce aux informations récoltées précedemment. 
                round($note_moyenne = ($note_add/$nombre_note) );
                // Requête SQL permettant de mettre à jour les information permettant de calculer la note moyenne ainsi que la note moyenne enregistrée. 
                $req = $bdd->prepare("UPDATE gites SET note_moyenne = $note_moyenne, note_add = $note_add, nombre_note = $nombre_note WHERE id = $id");
                if($req->execute(array(
                    'note_moyenne' =>$note_moyenne,
                    'note_add' => $note_add,
                    'nombre_note' => $nombre_note,
                    'id' => $id,
                ))){
                    // On enregistre l'identifiant de l'utilisateur connecté dans une variable afin de stocker les informations dans la table note nous permettant l'affichage de la note postée.
                    $user = $_SESSION['auth']['id'];
                    // Requête SQL permettant d'insérer les informations dans la table note.
                    $req= $bdd->prepare("INSERT INTO note (id_gite, id_users, note) VALUES ($id, $user, $note_feuille)");
                    $req->execute(array(
                        'id_gite' => $id,
                        'id_users' => $user,
                        'note' => $note_feuille,
                    ));
                    // Quand les valeurs sont enregistrées, affiche un message succes disant que la note a bien été enregistrée.
                    $_SESSION['flash']['success'] = 'Votre note a bien été prise en compte';
                    // Recharge la page gite.php
                    header('Location:gite.php');
                }else{
                    // Sinon recharge la page gite.php en affichant un message d'erreur disant qu'un problème est survenu.
                    header('Location:gite.php');
            $_SESSION['flash']['danger'] = 'Un problème est survenu';
                }
               
        }
        
    
        else{
            header('Location:gite.php');
            $_SESSION['flash']['danger'] = 'Un problème est survenu';
    }
      
    
    
    
    
?>