  <?php
    include('../../espace_membre/connect_pdo.php');
    if($_POST) {
    	$ile_id = $_REQUEST['ile_id'];
    	$vote = $_REQUEST['vote'];
    	
    	
		$sql='INSERT INTO wd_vote_ile (ile_id, vote, utilisateur_id) VALUES (:ile_id, :vote, :utilisateur_id)';
		$vars['ile_id']=$ile_id;
		$vars['vote']=$vote;
		$vars['utilisateur_id']=$_SESSION['utilisateur_id'];
		$exe=query($sql,$vars);
		
    	$sql="SELECT vote FROM wd_vote_ile WHERE ile_id=:ile_id";
		$vars2[':ile_id']=$ile_id;
		$exe=query($sql,$vars2);
		$nbrvote=0;
		$average=0;
		while($resultat=fetch_object($exe))
		{
			
			$average = $average + $resultat->vote;
			$nbrvote=$nbrvote + 1;
		}
		if($nbrvote > 0 )
		{
			$average=round(($average / $nbrvote),2);
		}	
    	$dataBack = array('avg' => $average, 'nbrvote' => $nbrvote);
    	$dataBack = json_encode($dataBack);
    	
    	echo $dataBack;
    }
    ?>