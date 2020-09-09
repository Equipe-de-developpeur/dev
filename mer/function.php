

<?php

/*  CLASS PHP POO */

/* Class pour connexion de l'utilisateur */

class Utilisateur_connection
{
	protected $utilisateur_pseudo;
	protected $utilisateur_password;
	protected $utilisateur_password2;
	protected $utilisateur_erreur;
	
	public function __construct($n, $p)
	{
        $this->utilisateur_pseudo = htmlspecialchars($n);
        $this->utilisateur_password = htmlspecialchars($p);
		$this->utilisateur_password2 = htmlspecialchars($p);
		$vars[':utilisateur_pseudo']=$this->utilisateur_pseudo;
		if(!empty($this->utilisateur_pseudo) && !empty($this->utilisateur_password))
		{
			$this->utilisateur_password=sha1($this->utilisateur_password);
			$vars[':utilisateur_password']=$this->utilisateur_password;
			$sql="SELECT * FROM utilisateur WHERE utilisateur_pseudo =:utilisateur_pseudo AND utilisateur_password =:utilisateur_password";
			$requser=query($sql,$vars);
			$userexist = $requser->rowCount();
			if($userexist == 1)
			{
				if(!isset($_COOKIE['pseudo']) AND !isset($_COOKIE['mot_de_passe']) )
				{
					setcookie('pseudo', $this->utilisateur_pseudo, time() + 365*24*3600, null, null, false, true);
					setcookie('mot_de_passe', $this->utilisateur_password2, time() + 365*24*3600, null, null, false, true);
				}
				$userinfo = fetch_object($requser);
				$_SESSION['utilisateur_id'] = $userinfo->utilisateur_id;
				$_SESSION['utilisateur_pseudo']=$userinfo->utilisateur_pseudo;
				$_SESSION['utilisateur_image']=$userinfo->utilisateur_image;
				$_SESSION['utilisateur_role']=$userinfo->utilisateur_role;
				$_SESSION['utilisateur_email']=$userinfo->utilisateur_email;
			}
			else
			{
				 $this->utilisateur_erreur = " Nom d'utilisateur ou Mot de passe invalide";
				echo '<script language="javascript">';
				echo 'alert("'.$this->utilisateur_erreur.'")';
				echo '</script>';
			}
		}
		else
		{
			 $this->utilisateur_erreur = " Veuillez remplir tous les champs";
			 echo '<script language="javascript">';
			 echo 'alert("'.$this->utilisateur_erreur.'")';
			 echo '</script>';
		}
    }
	
	public function setPseudo($new_utilisateur_pseudo)
	{
		$this->utilisateur_pseudo=$new_utilisateur_pseudo;
	}
	public function setPassword($new_utilisateur_password)
	{
		$this->utilisateur_password=$new_utilisateur_password;
	}
	public function setPassword2($new_utilisateur_password2)
	{
		$this->utilisateur_password2=$new_utilisateur_password2;
	}
	public function setCookies($new_utilisateur_cookie)
	{
		$this->utilisateur_cookie=$new_utilisateur_cookie;
	}
	public function setErreur($new_utilisateur_erreur)
	{
		$this->utilisateur_erreur=$new_utilisateur_erreur;
	}
	public function getErreur()
	{
		echo ' <p> ⛔'.$this->utilisateur_erreur.'</p>';
	}
}


/* Class INSCRIPTION */


class Utilisateur_inscription
{
	protected $utilisateur_pseudo;
	protected $utilisateur_password;
	protected $utilisateur_password2;
	protected $utilisateur_erreur;
	protected $utilisateur_email;
	
	public function __construct($n, $p, $q, $r)
	{
        $this->utilisateur_pseudo = htmlspecialchars(ucfirst(strtolower($n)));
        $this->utilisateur_password = htmlspecialchars($p);
		$this->utilisateur_password2 = htmlspecialchars($q);
		$this->utilisateur_email = $r;
		if(filter_var($this->utilisateur_email, FILTER_VALIDATE_EMAIL))
				{
					$vars[':utilisateur_email']=$this->utilisateur_email;
					$sql="SELECT * FROM utilisateur WHERE utilisateur_email =:utilisateur_email";
					$reqemail=query($sql,$vars);
					$emailexist = $reqemail->rowCount();
					if($emailexist == 0)
					{
						$vars2[':utilisateur_pseudo']=$this->utilisateur_pseudo;
						$sql="SELECT * FROM utilisateur WHERE utilisateur_pseudo =:utilisateur_pseudo";
						$reqpseudo=query($sql,$vars2);
						$pseudoexist = $reqpseudo->rowCount();
						if($pseudoexist == 0)
						{
							if($this->utilisateur_password == $this->utilisateur_password2)
							{
								$message="Votre pseudo : $this->utilisateur_pseudo";
							$message.="<br>";
							$message.="Voici votre mot de passe : $this->utilisateur_password ";
							$entete = "Content-type: text/html; charset= utf8\n";
							mail($this->utilisateur_email,'inscription',$message,$entete);
							
								$this->utilisateur_password=sha1($this->utilisateur_password);
								$vars3[':utilisateur_pseudo']=$this->utilisateur_pseudo;
								$vars3[':utilisateur_email']=$this->utilisateur_email;
								$vars3[':utilisateur_password']=$this->utilisateur_password;
								$sql="INSERT INTO utilisateur (utilisateur_pseudo,utilisateur_email,utilisateur_password) VALUES (:utilisateur_pseudo,:utilisateur_email,:utilisateur_password)";
								query($sql,$vars3);
								$erreur = "Votre Compte a été créé, un Email avec votre mot de passe a été envoyé ";
							}
							
							else
							{
								$this->utilisateur_erreur = "Votre password est different ";
								echo '<script language="javascript">';
								echo 'alert("'.$this->utilisateur_erreur.'")';
								echo '</script>';
							}
							
							
							
							
						}
						else
						{
							$this->utilisateur_erreur = "Votre pseudo est dejà utilisé ";
							echo '<script language="javascript">';
							echo 'alert("'.$this->utilisateur_erreur.'")';
							echo '</script>';
						}
						
					}
					else
					{
						$this->utilisateur_erreur = " Adresse mail déjà utilisée";
						echo '<script language="javascript">';
						echo 'alert("'.$this->utilisateur_erreur.'")';
						echo '</script>';
					}
				}
				else
				{
					$this->utilisateur_erreur = " Votre adresse mail n'est pas valide";
					echo '<script language="javascript">';
					echo 'alert("'.$this->utilisateur_erreur.'")';
					echo '</script>';
				}
    }
	
	public function setPseudo($new_utilisateur_pseudo)
	{
		$this->utilisateur_pseudo=$new_utilisateur_pseudo;
	}
	
	public function setErreur($new_utilisateur_erreur)
	{
		$this->utilisateur_erreur=$new_utilisateur_erreur;
	}
	public function getErreur()
	{
		echo ' <p> ⛔'.$this->utilisateur_erreur.'</p>';
	}
}



/* Fonction Procedurale */




function testSession(){
	if(!isset($_SESSION['utilisateur_id']))
	{
		?><script> location.replace("ile.php"); </script><?php
			exit;
	}
}
function passgenerator($nb){
    return substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCEFGHIJKLMNOPQRSTUVWXYZ0123456789'),1, $nb); 
}



function testSession_admin(){
	if(!isset($_SESSION['utilisateur_id']) OR ((isset($_SESSION['utilisateur_role']) AND $_SESSION['utilisateur_role']!="Admin" )))
	{
		
			?><script> location.replace("ile.php"); </script><?php
			exit;
		
	}
}


function query($sql, $vars = NULL, $debug = false) {
		
	if ($debug==true){
		$sql_debug = $sql;
		if (count($vars)>0){
			foreach($vars as $key => $value){
				// echo $key." : ".$value."<br/>";
				$sql_debug = str_replace($key, "'".str_replace("'", "''", $value)."'", $sql_debug);
			}
		}
		echo "<pre>";print_r($sql_debug);
	}	
	$res = $GLOBALS['conn']->prepare($sql);	
	if ($res === FALSE) {
		return FALSE;
	}

	$result = $res->execute($vars);
	if ($result !== FALSE) {
		return $res;
	}
	
	
	// Erreur
	$error = $res->errorInfo();
	$file = __FILE__;
	$line = __LINE__;
	if ($file || $line){
		//log_sql_error($sql,$error[2]);
		Kill($sql.$error[2], $file, $line);
	}
	
	return(false);
}



function Kill($msg = "", $file = null, $line = null)
{
	if ($msg)
	{	if ($file)
		{	$msg .= " dans {$file}";
			if ($line)
				$msg .= ", ligne {$line}";
		}
		$msg .= " :\n";
	}
	elseif ($file)
	{	$msg = $file;
		if ($line)
			$msg .= ", ligne {$line}";
		$msg .= " :\n";
	}
	die("<font color='red'>".$msg."</font>");
}


function fetch_object($req) {
	return $req->fetchObject();
}

function last_insert_id($table=NULL){
    return $GLOBALS['conn']->lastInsertId($table);
}

function updateDefault($id, $table, $name_id, $tabData, $debug = false){
	$data = $tabData;
	$vars = array();
	foreach($data as $key => $value) {
		if($value=="")
			$value=NULL;
		else
		    $value = trim($value);

		$vars[":".$key] = $value;
	}

	$sql = "SELECT * FROM ".$table." WHERE ".$name_id." = :id ";
	$res = query($sql, array(":id"=>$id));
	if ($row = fetch_object($res)){
		$pack_fields = array();

		foreach($data as $key => $value) {
			$pack_fields[] = "`".$key."` = :".$key;
		}

		$sql = "UPDATE ".$table." SET  ".implode(',', $pack_fields)." WHERE ".$name_id." = :".$name_id."";
		$vars[":".$name_id] = $id;
		query($sql, $vars, $debug);

		
	} else {
		$pack_values = array();
		$champ = array();
		foreach($data as $key => $value) {
			$pack_values[] = ":".$key;
			$champs[] = $key;
		}
		$sql = "INSERT INTO ".$table." (`".implode('`,`',$champs)."`) VALUES (".implode(',', $pack_values).")";
		query($sql, $vars, $debug);
		$id = last_insert_id($table);

	}

	return $id;
}

function debug($variable)
{

    echo '<pre>' . print_r($variable, true) . '</pre>';
}

function str_random($length)
{
    $alphabet = "0123456789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN";
    return substr(str_shuffle(str_repeat($alphabet, $length)), 0, $length);
}

function logged_only()
{

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if (!isset($_SESSION['auth'])) {
        $_SESSION['flash']['danger'] = "Vous n'avez pas le droit d'accéder  cette page ";
        header('Location: login.php');
        exit();
    }
}


function recconect_from_cookie()
{

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if (isset($_COOKIE['remember']) && !isset($_SESSION['auth'])) {
        require 'db.php';
        $remember_token = $_COOKIE['remember'];
        $parts = explode('==', $remember_token);
        $user_id = $parts[0];
        if ($pdo) {
            $req = $pdo->prepare('SELECT * FROM DWTL_connexion WHERE id = ?');
            $req->execute([$user_id]);
            $user = $req->fetch();
        } else {
            print("pdo n'éxiste pas frunnnnd");
        }
        if ($user) {
            $expected = $user_id . '==' . $user->remember_token . sha1($user_id . 'ratonlaveurs');
            if ($expected == $remember_token) {
                if (session_status() == PHP_SESSION_NONE) {
                    session_start();
                }
                $_SESSION['auth'] = $user;
                setcookie('remember', $remember_token, time() + 60 * 60 * 24 * 7);
            }
        }
    } else {
        setcookie('remember', null, -1);
    }
}

function connexion(){
    require("connect_pdo.php");
$bdd = new PDO('mysql:host=modencvefoad.mysql.db;dbname=modencvefoad' , 'modencvefoad' , 'Formation83');
if(isset($_POST['submit']))
{   
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $email1 = htmlspecialchars($_POST['email1']);
    $email2 = htmlspecialchars($_POST['email2']);
    $mdp1   = sha1($_POST['mdp1']);
    $mdp2   = sha1($_POST['mdp2']);
    
    $formation = $_POST['formation'];
    $ref = htmlspecialchars($_POST['ref']);


    if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['pseudo']) AND !empty($_POST['email1']) AND !empty($_POST['email2']) AND !empty($_POST['mdp1']) AND !empty($_POST['mdp2']) AND !empty($_POST['formation']) AND !empty($_POST['ref']))
    {
        $pseudolenght = strlen($pseudo);
        if($pseudolenght <= 255)
        {
            if($email1 == $email2)
            {
                if(filter_var($email1, FILTER_VALIDATE_EMAIL))
                {
                    $reqemail = $bdd->prepare("SELECT * FROM DWTL_connexion WHERE email =?");
                    $reqemail->execute(array($email1));
                    $emailexist = $reqemail->rowCount();
                    if($emailexist == 0)
                    {
                        $reqpseudo = $bdd->prepare("SELECT * FROM DWTL_connexion WHERE pseudo =?");
                        $reqpseudo->execute(array($pseudo));
                        $pseudoexist = $reqpseudo->rowCount();
                        if($pseudoexist == 0)
                        {
                            if($mdp1 == $mdp2)
                             {      
                                $key = str_random(60);
                                $insertmbr = $bdd->prepare("INSERT INTO DWTL_connexion SET prenom = ?, nom =?, pseudo = ?, email = ?, mdp = ?, confirmkey = ?, formation = ?, ref = ? ");
                                $insertmbr->execute(array($nom, $prenom, $pseudo, $email1, $mdp1, $key, $formation, $ref));
                                $user_id = $bdd->lastinsertid();
                                mail($_POST['email1'], 'Confirmation de votre compte', "Afin de valider votre compte merci de cliquer sur ce lien\n\nhttps://formations.mode83.net/DWAM/dwtl_blog/php/confirmation.php?id=$user_id&confirmkey=$key");

                                $erreur = "Votre compte a bien été créé ! ";
                                header("loaction: php/connexion.php");
                            }
                             else
                             {
                                 $erreur = "Vos mots de passes ne correspondent pas !";
                             }
                        }
                        else
                        {
                            $erreur = "Ce pseudo existe déjà !";
                        }
                    }
                    else
                    {
                        $erreur = "Adresse Email déjà utilisé !";
                    }
                }
                else
                {
                    $erreur = "Votre adresse mail n'est pas valide !";
                }
            }
            else
            {
                $erreur = "Vos adresses Email ne correspondent pas";
            }
        }
        else
        {
            $erreur = "Votre pseudo ne doit pas dépasser les 255 caractères !";
        }
    }
    else
    {
        $erreur = "Tous les champs doivent être complétés !";
    }
}
}


function Article_sand($id_photo)
{
    global $errors;

    if (!empty($_POST)) {
        require 'db.php';
        // || !preg_match('/^[a-z0-9-Z-é]+$/' , $_POST['titre_article'])
        if (empty($_POST['titre_article'])) {

            $errors['titre'] = "Veuillez rentrer un titre";
        } else {
            $req = $pdo->prepare('SELECT id_articles FROM DWTL_articles WHERE titre = ?');
            $req->execute([$_POST['titre_article']]);
            $article = $req->fetch();

            if ($article) {
                $errors['titre'] = "Un article ayant un même titre existe déjà";
            }
        }


        if (empty($_POST['corp_article'])) {

            $errors['corps'] = "Nous n'avons pas pu trouver de texte dans le corps de l'article";
        }

        if (empty($errors)) {

            $req = $pdo->prepare('INSERT INTO DWTL_articles SET titre = ? , contenu = ?,court = ?, categories = ?,membre_posteur = ?,date = ?');
            $now = date('Y-m-d H:i:s');
            $court = $rest = substr($_POST['corp_article'], 0, 450);
            $court = $court . '...';
            $req->execute([$_POST['titre_article'], $_POST['corp_article'], $court, $_POST['categorie'], $_SESSION['id'], $now]);
            $req = $pdo->prepare('SELECT * FROM DWTL_articles WHERE titre = ?');
            $req->execute([$_POST['titre_article']]);

            $article = $req->fetch();
            $_SESSION['current_article'] = $article;


            if (isset($_POST['publie'])) {
                $req = $pdo->prepare('UPDATE DWTL_articles SET publique = ? WHERE id_articles = ?');
                $req->execute(['on', $article->id_articles]);
            } else {
                $req = $pdo->prepare('UPDATE DWTL_articles SET publique = ? WHERE id_articles = ?');
                $req->execute(['', $article->id_articles]);
            }
        }


        if (isset($_FILES[$id_photo]) and !empty($_FILES[$id_photo]['name'])) {

            $tailleMax = 2097152;
            $extensionValides = array('jpg', 'jpeg', 'gif', 'png');
            if ($_FILES[$id_photo]['size'] <= $tailleMax) {
                $extensionUpload = strtolower(substr(strrchr($_FILES[$id_photo]['name'], '.'), 1));
                if (in_array($extensionUpload, $extensionValides)) {
                    $path = "../img/photo_article/". $_SESSION['current_article']->id_articles .".". $extensionUpload;
                    $resultat = move_uploaded_file($_FILES[$id_photo]['tmp_name'], $path);
                    if ($resultat) {
                        require 'db.php';
                        $req = $pdo->prepare('UPDATE DWTL_articles SET image = :image WHERE id_articles = :id');
                        $req->execute(array(
                            'image' => $_SESSION['current_article']->id_articles . "." . $extensionUpload,
                            'id' => $_SESSION['current_article']->id_articles
                        ));
                    }
					
                }
            }
        }

        return $errors;
    }
}

function connect_from_session($pseudo)
{
    if (!isset($_SESSION['auth'])) {
        require_once 'db.php';
        $req = $pdo->prepare('SELECT * FROM DWTL_connexion WHERE pseudo = ?');
        $req->execute([$pseudo]);
        $user = $req->fetch();
        if ($user) {
            $_SESSION['auth'] = $user;
        } else {
            echo "aucun DWTL_connexion n'ayant ce pseudo n'éxiste dans la base de donné";
        }
    }
}

// Fonction qui affiche UN article en prenant en parametre ces référence
function show_post($id,$titre, $court, $image, $categorie, $membre_posteur, $date)
{
?>

            <div class="col-lg-4">
                <div class="post">
                    <div class="container-fluid">
                        <div class="row visu_post_head">
                            <div><?php echo "Le : " . $date; ?></div>
                            <div><?php echo "Par : " . $membre_posteur; ?></div>
                        </div>
                    </div>
                    <div class="visu_post_main" style="background-image:url('https://formations.mode83.net/DWAM/dwtl_blog/img/photo_article/<?php echo $image; ?>')">

                        <div class="visu_post_col">
                            <div class="visu_post_titre">
                                <?php echo $titre; ?>
                            </div>
                            <div class="text-center my-n1" style="font-weight:bold;">________________</div>
                            <div class="visu_post_apercu">
                                <?php echo $court; ?>
                            </div>
                            <div class="visu_post_bouton">
                                <div class="custombtn_around">
                                    <a href="<?php echo "https://formations.mode83.net/DWAM/dwtl_blog/php/Visualiser_article.php?id=$id";?>"><button class="mybutton">Voir l'article</button></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

<?php
}

// fonction qui récupère dans un tableau la liste de tout les id actuel de la table article 
// puis une boucle parcours la table avec tout les identifiants récupéré
// récupére le contenu intégrale d'un article puis le donne a la fonction showpost
function init_show_post()
{
    $ok = 'yes';
    if ($ok) {
        require 'db.php';
		$articleParPage=12;
        $sql="SELECT id_articles FROM DWTL_articles WHERE publique='on'";
		$exe_pagination=query($sql);
		$articlesTotal=$exe_pagination->rowCount();
		$pages_totales=ceil($articlesTotal/$articleParPage);
		if(isset($_REQUEST['page']) AND !empty($_REQUEST['page']) AND $_REQUEST['page']>0 AND $_REQUEST['page']<=$pages_totales)
		{
			$_REQUEST['page']=intval($_REQUEST['page']);
			$page_courante=$_REQUEST['page'];
		}
		else
		{
			$page_courante=1;
			
			if(isset($_REQUEST['page']) AND $_REQUEST['page']>$page_courante)
			{
				
				?><script> location.replace("https://formations.mode83.net/DWAM/dwtl_blog/accueil_publique.php?page=<?php echo $page_courante; ?>"); </script><?php
			}
			
		}
		$depart=($page_courante-1)*$articleParPage;
		$sql.=' ORDER BY DWTL_articles.date DESC LIMIT '.$depart.','.$articleParPage;
		$exe=query($sql);
		

		echo '<div class="row" >';
        while($list_id=fetch_object($exe)) {
			$sql="	SELECT * 
			FROM DWTL_articles
			INNER JOIN DWTL_connexion ON DWTL_articles.membre_posteur=DWTL_connexion.id
			WHERE id_articles=:id_articles";
            $exe2=query($sql, array(':id_articles'=>$list_id->id_articles));
			$recup=fetch_object($exe2);
           

                $recup->date=date("d/m/Y", strtotime($recup->date));
				
				show_post($recup->id_articles,$recup->titre, $recup->court, $recup->image, $recup->categories, $recup->pseudo, $recup->date);
            
        }
		echo'</div><br>';
		echo '<div style="text-align:center">';
  
	   
	   
	   if($page_courante==1 AND $pages_totales>1)
	   {
		   $i=$page_courante+1;
		   ?><a href="https://formations.mode83.net/DWAM/dwtl_blog/accueil_publique.php?page=<?php echo $i ?>"> Page Suivante </a>
		   <?php
	   }
		else if ($page_courante==$pages_totales AND $page_courante>1)
		{
			$i=$page_courante-1;
			?><a href="https://formations.mode83.net/DWAM/dwtl_blog/accueil_publique.php?page=<?php echo $i ?>"> Page Précédente </a>
			<?php
		   
		}
		else if($page_courante!=1 AND $pages_totales!=$page_courante)
		{
			$i=$page_courante-1;
			?><a href="https://formations.mode83.net/DWAM/dwtl_blog/accueil_publique.php?page=<?php echo $i ?>"> Page Précédente </a>
			<?php 
			echo '......';
			echo $page_courante;
			echo '......';
			$i=$page_courante+1;
		   ?><a href="https://formations.mode83.net/DWAM/dwtl_blog/accueil_publique.php?page=<?php echo $i ?>"> Page Suivante </a>
		   <?php
		}
   echo '</div><br>'; 

    }
}


function init_display_post(){
    if(isset($_GET['id'])){
        $id_article = $_GET['id'];
        require_once 'db.php';
        $req = $pdo->prepare('SELECT * FROM DWTL_articles WHERE id_articles = ?');
        $req->execute([$id_article]);
        $article = $req->fetch();
		$article->date=date("d/m/Y H:i:s", strtotime($article->date));
        $id_membre_posteur = $article->membre_posteur;

            $req = $pdo->prepare('SELECT pseudo FROM DWTL_connexion WHERE id = ?');
            $req->execute([$id_membre_posteur]);

            $nom_membre_posteur = $req->fetch();

        display_post($article->titre, $article->court,$article->contenu, $article->image, $article->categories, $nom_membre_posteur->pseudo, $article->date);
        
    }else{
        echo "Erreur il n'y pas d'id d'article a afficher :(;";
    }
}

function display_post($titre, $court,$contenu, $image, $categorie, $membre_posteur, $date){
?>
    <div class="article">
                    <div class="article_main">
                        <div class="article_title">
                            <?php echo $titre;?>
                        </div>
                        <div class="article_ref">
                            <div class="label"><?php echo 'Créé le : '.$date;?></div>
                            <div class="label" ><?php echo 'Par : '. $membre_posteur;?></div>
                        </div>
                        <div class="article_corps">
                            <!-- <div class="image"style="background-image:url('https://formations.mode83.net/DWAM/dwtl_blog/img/photo_article/<?php echo $image;?>');background-position:center;background-size:cover;"> -->
                            <img src="https://formations.mode83.net/DWAM/dwtl_blog/img/photo_article/<?php echo $image;?>" alt="image_article" />
                            <p><?php echo $contenu;?></p>
                        </div>
                        <div class="article_footer">
                        <div class="label d-inline-block"style="margin-top:10px;"><?php echo "Cet article est classé comme : ".$categorie;?></div>
                        </div>
                    </div>
                </div>

                <?php
}

function init_display_preview(){
    require 'db.php';
    // $req = $pdo->prepare('SELECT COUNT(*) AS NbNews FROM DWTL_articles');
    // $req->execute();

    // $nb_article = $req->fetch();

    $req = $pdo->prepare('SELECT id_articles FROM DWTL_articles WHERE publique="on" ORDER BY date DESC LIMIT 0,4');
    $req->execute();
    $list_id = $req->fetchAll();

    $compteur = 0;
    foreach ($list_id as $value) {
 
        $req = $pdo->prepare('SELECT * FROM DWTL_articles WHERE id_articles = ? ');
        $req->execute([$value->id_articles]);

        $article = $req->fetch();
		$article->date=date("d/m/Y H:i:s", strtotime($article->date));
        $id_membre_posteur = $article->membre_posteur;

        $req = $pdo->prepare('SELECT pseudo FROM DWTL_connexion WHERE id = ?');
        $req->execute([$id_membre_posteur]);

        $nom_membre_posteur = $req->fetch();
        if ($article->publique == 'on') {

            show_preview($article->id_articles,$article->titre, $article->court, $article->image, $article->categories, $nom_membre_posteur->pseudo, $article->date);
        }
    }

}

function show_preview($id,$titre, $court, $image, $categorie, $membre_posteur, $date){
    ?><a title="Cliquez pour ouvrir l'article !" href="<?php echo "Visualiser_article.php?id=$id";?>">
    <div class="preview">
    <div class="container-fluid">
        <div class="row visu_preview_head">
            <div><?php echo "Le : " . $date; ?></div>
            <div><?php echo "Par : " . $membre_posteur; ?></div>
        </div>
    </div>
    <div class="visu_preview_main " style="background-image:url('https://formations.mode83.net/DWAM/dwtl_blog/img/photo_article/<?php echo $image; ?>')">

        <div class="visu_preview_col d-flex flex-column justify-content-center">
            <div class="visu_preview_titre">
                <?php echo $titre; ?>
            </div>
        
        </div>

    </div>
	</div></a>

<?php
}