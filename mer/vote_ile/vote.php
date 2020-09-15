	<style>
    .star { display: inline-block; background: url("vote_ile/design/dauphingris.png") no-repeat; width: 30px; height: 32px }
    .star_hover { display: inline-block; background: url("vote_ile/design/dauphinbleu.png") no-repeat;  width: 30px; height: 32px }
	
	@media screen and (max-device-width:1024px)
	{
		.col-md-12
		{
			margin-top:3vw;
		}
	}
    </style>
    
     
    <div class="row" style="background-color:transparent;">
    <div class="col-md-12">
    <br /><br />
    <?php
    function starBar($numStar, $ile_id, $starWidth, $starHeight) {
        $nbrPixelsInDiv = $numStar * $starWidth; // Calcul largeur de la Div en px
        
        // Recuperation du nombre de vote , et leur valeur pour en faire une moyenne
		$sql="SELECT vote, utilisateur_id FROM wd_vote_ile WHERE ile_id=:ile_id";
		$vars[':ile_id']=$ile_id;
		$exe=query($sql,$vars);
		$nbrvote=0;
		$average=0;
		while($resultat=fetch_object($exe))
		{
			if(isset($_SESSION['utilisateur_id']) AND $resultat->utilisateur_id == $_SESSION['utilisateur_id'])
			{
				$novote=1;
				
			}
			$average = $average + $resultat->vote;
			$nbrvote=$nbrvote + 1;
		}
		if($nbrvote > 0 )
		{
			$average=round(($average / $nbrvote),2);
		}
		
		if(isset($novote))
		{
			$deja_vote='<p style="font-size:medium; color:green;">Vous avez déja voté</p>';
		}
		else if (!isset($_SESSION['utilisateur_id']))
		{
			$deja_vote='<p style="font-size:medium; color:green;">Pour voter, veuillez vous connecter</p>';
		}
		else
		{
			$deja_vote='<p style="font-size:medium; color:green;">Donnez votre avis</p>';
		}
		
        //Nombre de px à colorier en jaune
        $numEnlightedPX = round($nbrPixelsInDiv * $average / $numStar, 0);
        
        $getJSON = array('numStar' => $numStar, 'ile_id' => $ile_id); // Creation du JSON avec le nombre de dauphin et ile_id
        $getJSON = json_encode($getJSON);
        $starBar = '<div id="'.$ile_id.'">';
        $starBar .= '<div class="star_bar" style="width:'.$nbrPixelsInDiv.'px; height:'.$starHeight.'px; background: linear-gradient(to right, #ffc600 0px,#ffc600 '.$numEnlightedPX.'px,#ccc '.$numEnlightedPX.'px,#ccc '.$nbrPixelsInDiv.'px);" rel='.$getJSON.'>';
        for ($i=1; $i<=$numStar; $i++) {
            $starBar .= '<div title="'.$i.'/'.$numStar.'" id="'.$i.'" class="star"';
            if( !isset($novote) AND isset($_SESSION['utilisateur_id'])) $starBar .= ' onmouseover="overStar('.$ile_id.', '.$i.', '.$numStar.'); return false;" onmouseout="outStar('.$ile_id.', '.$i.', '.$numStar.'); return false;" onclick="voteMedia('.$ile_id.', '.$i.', '.$numStar.', '.$starWidth.', '.$starHeight.'); return false;"';
            $starBar .= '></div>';
        }
        $starBar .= '</div>';
        $starBar .= '<div class="resultMedia'.$ile_id.'" style="font-size: medium; color: grey; margin-top:1vw;">'; // Affichage de la moyenne du vote et du nombre de vote
        if ($nbrvote == 0) $starBar .= 'Aucun vote';
		else if ($nbrvote == 1) $starBar .= '<p>Rating: ' . $average . '/' . $numStar . ' (' . $nbrvote . ' vote)</p>';
        else $starBar .= 'Rating: ' . $average . '/' . $numStar . ' (' . $nbrvote . ' votes)';
        $starBar .= '</div>';
        $starBar .= '<div class="box'.$ile_id.'">'.$deja_vote.'</div>';
        $starBar .= '</div>';
        return $starBar;
    }
    echo starBar(5, $_SESSION['ile_id'], 30, 32); // 5 dauphins, utilisateur_id, width, height
    ?>
    </div>
    </div>
     
    <script type="text/javascript" src="vote_ile/etoile.js"></script>
     
