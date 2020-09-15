

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
			$sql="SELECT * FROM WD_utilisateur WHERE utilisateur_pseudo =:utilisateur_pseudo AND utilisateur_password =:utilisateur_password";
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
					$sql="SELECT * FROM WD_utilisateur WHERE utilisateur_email =:utilisateur_email";
					$reqemail=query($sql,$vars);
					$emailexist = $reqemail->rowCount();
					if($emailexist == 0)
					{
						$vars2[':utilisateur_pseudo']=$this->utilisateur_pseudo;
						$sql="SELECT * FROM WD_utilisateur WHERE utilisateur_pseudo =:utilisateur_pseudo";
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
								$sql="INSERT INTO WD_utilisateur (utilisateur_pseudo,utilisateur_email,utilisateur_password) VALUES (:utilisateur_pseudo,:utilisateur_email,:utilisateur_password)";
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


/* Class Changement MDP PROFIL */


class Changement_mdp
{
	protected $utilisateur_id;
	protected $utilisateur_password;
	protected $utilisateur_password2;
	protected $utilisateur_email;
	public $utilisateur_erreur;
	public $utilisateur_message;
	
	public function __construct($n,$p,$q)
	{
		$this->utilisateur_id=$n;
		$this->utilisateur_password=$p;
		$this->utilisateur_password2=$q;
		
		
			if($this->utilisateur_password == $this->utilisateur_password2)
			{
				$this->utilisateur_password=sha1($this->utilisateur_password);
				$vars2['utilisateur_password']=$this->utilisateur_password;
				if(updateDefault($this->utilisateur_id,"WD_utilisateur","utilisateur_id",$vars2))
				{
					$sql="SELECT utilisateur_email FROM WD_utilisateur WHERE utilisateur_id=:utilisateur_id";
					$vars[':utilisateur_id']=$this->utilisateur_id;
					$exe=query($sql,$vars);
					$resultat=fetch_object($exe);
					$this->utilisateur_email=$resultat->utilisateur_email;
					$message='<br> Vous avez bien changé votre Mot de Passe';
					$entete = "Content-type: text/html; charset= utf8\n";
					mail($this->utilisateur_email,'Changement MDP',$message,$entete);
					$this->utilisateur_message="Mot de passe Modifié";
				}
			}
			else
				{
					$this->utilisateur_erreur="Les Mots de passe sont differents";
				}
		
	}
	public function getErreur()
	{
		echo '<div class="alert alert-danger" role="alert" style="margin:auto; width:50%; margin-top:1vw;"> '.$this->utilisateur_erreur.'</div>';
	}
	public function getMessage()
	{
		echo '<div class="alert alert-success" role="alert" style="margin:auto; width:50%; margin-top:1vw;">'.$this->utilisateur_message.'</div>';
	}
}


/* Recuperation MDP */

class Recuperation_mdp
{

	protected $utilisateur_code;
	protected $utilisateur_password;
	protected $utilisateur_password2;
	protected $utilisateur_email;
	public $utilisateur_erreur;
	
	public function __construct($n,$p,$q)
	{
		$this->utilisateur_code=$n;
		$this->utilisateur_password=$p;
		$this->utilisateur_password2=$q;
			if($this->utilisateur_password == $this->utilisateur_password2)
			{
				$sql="SELECT * FROM WD_recuperation WHERE code_recuperation=:code_recuperation";
					$vars[':code_recuperation']=$this->utilisateur_code;
					$exe=query($sql,$vars);
					$codeexist = $exe->rowCount();
					if($codeexist==1)
					{
						$resultat=fetch_object($exe);
						$this->utilisateur_email=$resultat->utilisateur_email;
						$sql="UPDATE WD_utilisateur SET  utilisateur_password=:utilisateur_password WHERE utilisateur_email=:utilisateur_email";
						$this->utilisateur_password=sha1($this->utilisateur_password);
						$vars2[':utilisateur_email']=$this->utilisateur_email;
						$vars2['utilisateur_password']=$this->utilisateur_password;
						$exe=query($sql,$vars2);
						if($exe)
						{
							$message='<br> Vous avez bien changé votre Mot de Passe';
							$entete = "Content-type: text/html; charset= utf8\n";
							mail($this->utilisateur_email,'Changement MDP',$message,$entete);
							$sql=" DELETE FROM `WD_recuperation` WHERE `recuperation`.`utilisateur_email` = :utilisateur_email ";
							$vars3[':utilisateur_email']=$this->utilisateur_email;
							query($sql,$vars3);
							header('Location: ile.php');
						}
					}
					else
					{
						$this->utilisateur_erreur="Code de Recuperation incorrect";
					}
			}
			else
				{
					$this->utilisateur_erreur="Les Mots de passe sont differents";
				}
	}
	public function getErreur()
	{
		echo '<p style="color:red; margin-top: 1vw;">⛔ '.$this->utilisateur_erreur.'</p>';
	}
}


/* Class RECUPERATION CODE */

class Recuperation_code
{
	protected $utilisateur_email;
	public $utilisateur_erreur;
	
	public function __construct ($n)
	{
		$this->utilisateur_email = $n;
		$sql="SELECT * FROM WD_utilisateur WHERE utilisateur_email=:utilisateur_email";
		$vars[':utilisateur_email']=$this->utilisateur_email;
		$exe=query($sql,$vars);
		$emailexist = $exe->rowCount();
		if($emailexist==1)
		{
			$code=passgenerator(10);
			$message="Voici votre code de récuperation: $code ";
			$message.='<br> <a href="localhost/mer/traitement_MDP.php?code='.$code.'" target="_blank">Cliquez ici pour changer le mot de passe</a>';
			$entete = "Content-type: text/html; charset= utf8\n";
			if(mail($this->utilisateur_email,'Récuperation MDP',$message,$entete))
			{
				$sql="SELECT * FROM WD_recuperation WHERE utilisateur_email=:utilisateur_email";
				$exe=query($sql,$vars);
				$emailexist = $exe->rowCount();
				if($emailexist==1)
				{
					$sql2="UPDATE WD_recuperation SET  code_recuperation=:code_recuperation WHERE utilisateur_email=:utilisateur_email";
					$vars[':code_recuperation']=$code;
					query($sql2,$vars);
				}
				else
				{
					$sql2="INSERT INTO `WD_recuperation` (`recuperation_id`, `code_recuperation`, `utilisateur_email`) VALUES (NULL, :code_recuperation, :utilisateur_email)";
					$vars[':code_recuperation']=$code;
					query($sql2,$vars);
				}
				header('Location: traitement_MDP.php');
				
			}
			else
			{
				$this->utilisateur_erreur="Echec de l'envoi de Mail Veuillez rééssayer plus tard";
			}
		}
		else
		{
			$this->utilisateur_erreur= "Email Incorrect";
		}
	}
	
	public function getErreur()
	{
		echo ' <p style="margin-top: 1vw; color:red;"> ⛔'.$this->utilisateur_erreur.'</p>';
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





