for (let i = 0; i < 41; i++) {
    document.getElementsByClassName("lieu")[i].addEventListener("click", displayMap);
    function displayMap() {
        document.getElementsByClassName("carte")[i].innerHTML = "Hello <?php echo $i['lieu_id']; ?>"/*"<iframe width=\"425\" height=\"350\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"<?php echo $i['carte']?>\" style=\"border: 1px solid black\"></iframe><br/><small><a href=\"https://www.openstreetmap.org/?mlat=43.17920&amp;mlon=5.68141#map=17/43.17920/5.68141\" target=\"_blank\">Afficher une carte plus grande</a></small>"*/;
    }
}