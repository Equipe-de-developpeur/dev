
	    function voteMedia(ile_id, vote, numStar, starWidth, starHeight) {
        $('#' + ile_id + ' .star_bar #' + vote).removeAttr('onclick'); // enleve clic pour eviter les multi clic
        $('.box' + ile_id).html('<img src="vote_ile/design/loader-small.gif" alt="" />'); // icon de chargement
        var data = {ile_id: ile_id, vote: vote}; // Creation JSON pour l'envoi par AJAX
        $.ajax({ // JQuery Ajax
            type: 'POST',
            url: 'vote_ile/etoile.php', // Redirection URL pour la mise en place des nouvelles données
            data: data, // Envoi du Data
            dataType: 'json',
            timeout: 3000,
            success: function(data) {
                $('.box' + ile_id).html('<div style="font-size: medium; color: green"><p>Merci pour votre vote</p></div>'); // Renvoi un message de success
                // Mise à jour des votes et moyenne
				var vote= 'vote';
				if(data.nbrvote!=1)
				{
					vote='votes';
				}	
                $('.resultMedia' + ile_id).html('<div style="font-size: medium; color: grey; margin-top:1vw;"><p>Rating: ' + data.avg + '/' + numStar + ' (' + data.nbrvote + ' '+ vote + ')</p></div>');
                // Calcul background et enleve le mouseover
                var nbrPixelsInDiv = numStar * starWidth;
                var numEnlightedPX = Math.round(nbrPixelsInDiv * data.avg / numStar);
                $('#' + ile_id + ' .star_bar').attr('style', 'width:' + nbrPixelsInDiv + 'px; height:' + starHeight + 'px; background: linear-gradient(to right, #ffc600 0%,#ffc600 ' + numEnlightedPX + 'px,#ccc ' + numEnlightedPX + 'px,#ccc 100%);');
                $.each($('#' + ile_id + ' .star_bar > div'), function () {
                    $(this).removeAttr('onmouseover onclick');
                });
            },
            error: function() {
                $('#box').text('ERREUR');
            }
        });
    }
     
    function overStar(ile_id, myvote, numStar) {
        for ( var i = 1; i <= numStar; i++ ) {
            if (i <= myvote) $('#' + ile_id + ' .star_bar #' + i).attr('class', 'star_hover');
            else $('#' + ile_id + ' .star_bar #' + i).attr('class', 'star');
        }
    }
     
    function outStar(ile_id, myvote, numStar) {
        for ( var i = 1; i <= numStar; i++ ) {
            $('#' + ile_id + ' .star_bar #' + i).attr('class', 'star');
        }
    }