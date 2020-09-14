<?php 
    include 'config_bdd_gite.php'; ?>
    
<?php
session_start();
    $note_feuille = (int)$_POST['note-feuille'];
    $id = $_POST['id'];
    $note_gite_moyenne = (int)$_POST['note_moyenne'];
    $nombre_note = (int)$_POST['nombre_note'];
    $note_add = $_POST['note_add'];
    if(isset($_POST['note-feuille'])){
        $note_moyenne =  $note_gite_moyenne;
        $note_add += $note_feuille;
        $nombre_note ++ ;
                round($note_moyenne = ($note_add/$nombre_note) );
                
                $req = $bdd->prepare("UPDATE gites SET note_moyenne = $note_moyenne, note_add = $note_add, nombre_note = $nombre_note WHERE id = $id");
                if($req->execute(array(
                    'note_moyenne' =>$note_moyenne,
                    'note_add' => $note_add,
                    'nombre_note' => $nombre_note,
                    'id' => $id,
                ))){
                    $user = $_SESSION['auth']['id'];
                    $req= $bdd->prepare("INSERT INTO note (id_gite, id_users, note) VALUES ($id, $user, $note_feuille)");
                    $req->execute(array(
                        'id_gite' => $id,
                        'id_users' => $user,
                        'note' => $note_feuille,
                    ));
                    $_SESSION['flash']['success'] = 'Votre note a bien été prise en compte';
                    header('Location:gite.php');
                }else{
                    header('Location:gite.php');
            $_SESSION['flash']['danger'] = 'Un problème est survenu';
                }
               
        }
        
    
        else{
            header('Location:gite.php');
            $_SESSION['flash']['danger'] = 'Un problème est survenu';
    }
      
    
    
    
    
?>