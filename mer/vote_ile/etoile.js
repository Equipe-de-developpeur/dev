
	    function voteMedia(ile_id, vote, numStar, starWidth, starHeight) {
        $('#' + ile_id + ' .star_bar #' + vote).removeAttr('onclick'); // Remove the onclick attribute: prevent multi-click
        $('.box' + ile_id).html('<img src="vote_ile/design/loader-small.gif" alt="" />'); // Display a processing icon
        var data = {ile_id: ile_id, vote: vote}; // Create JSON which will be send via Ajax
        $.ajax({ // JQuery Ajax
            type: 'POST',
            url: 'vote_ile/etoile.php', // URL to the PHP file which will insert new value in the database
            data: data, // We send the data string
            dataType: 'json',
            timeout: 3000,
            success: function(data) {
                $('.box' + ile_id).html('<div style="font-size: medium; color: green"><p>Merci pour votre vote</p></div>'); // Return "Thank you for rating"
                // We update the rating score and number of votes
				var vote= 'vote';
				if(data.nbrvote!=1)
				{
					vote='votes';
				}	
                $('.resultMedia' + ile_id).html('<div style="font-size: medium; color: grey; margin-top:1vw;"><p>Rating: ' + data.avg + '/' + numStar + ' (' + data.nbrvote + ' '+ vote + ')</p></div>');
                // We recalculate the star bar with new selected stars and unselected stars
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