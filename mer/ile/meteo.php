<!-- https://www.my-meteo.com/meteo-webmaster.html -->

<style>
.widget
{
	margin:auto!important;
}
</style>

<!-- widget meteo Hyeres -->
<?php
$hyeres='<div id="widget_bd49b7b81c917c29035e1ecff5d26192" class="widget">
<span id="l_bd49b7b81c917c29035e1ecff5d26192"><a href="http://www.mymeteo.info/r/hyeres_Q">Hyeres</a></span>
<script type="text/javascript">
(function() {
	var my = document.createElement("script"); my.type = "text/javascript"; my.async = true;
	my.src = "https://services.my-meteo.com/widget/js_design?ville=31460&format=vertical&nb_jours=3&ombre1=000000&c1=ffffff&c2=a9a9a9&c3=ffffff&c4=ffffff&c5=ffffff&police=0&t_icones=5&fond=1&masque=3&x=160&y=442&d=0&id=bd49b7b81c917c29035e1ecff5d26192";
	var z = document.getElementsByTagName("script")[0]; z.parentNode.insertBefore(my, z);
})();
</script>
</div>';
?>
<!-- widget meteo -->



<!-- widget meteo  Bandol -->
<?php
$bandol='<div id="widget_28318cd71a0e8c126345f94e15bf3cc3" class="widget">
<span id="l_28318cd71a0e8c126345f94e15bf3cc3"><a href="http://www.mymeteo.info/r/bandol_g">Bandol</a></span>
<script type="text/javascript">
(function() {
	var my = document.createElement("script"); my.type = "text/javascript"; my.async = true;
	my.src = "https://services.my-meteo.com/widget/js_design?ville=31410&format=vertical&nb_jours=3&ombre1=000000&c1=ffffff&c2=a9a9a9&c3=ffffff&c4=ffffff&c5=ffffff&police=0&t_icones=5&fond=1&masque=3&x=160&y=442&d=0&id=28318cd71a0e8c126345f94e15bf3cc3";
	var z = document.getElementsByTagName("script")[0]; z.parentNode.insertBefore(my, z);
})();
</script>
</div>';
?>
<!-- widget meteo -->


<!-- widget meteo  Six Fours les Plages -->
<?php
$six_fours='<div id="widget_b3859d1d34bf7a587959a1784ff3438d" class="widget">
<span id="l_b3859d1d34bf7a587959a1784ff3438d"><a href="http://www.mymeteo.info/r/six-fours-les-plages_z">Six-Fours</a></span>
<script type="text/javascript">
(function() {
	var my = document.createElement("script"); my.type = "text/javascript"; my.async = true;
	my.src = "https://services.my-meteo.com/widget/js_design?ville=35624&format=vertical&nb_jours=3&ombre1=000000&c1=ffffff&c2=a9a9a9&c3=ffffff&c4=ffffff&c5=ffffff&police=0&t_icones=5&fond=1&masque=3&x=160&y=442&d=0&id=b3859d1d34bf7a587959a1784ff3438d";
	var z = document.getElementsByTagName("script")[0]; z.parentNode.insertBefore(my, z);
})();
</script>
</div>';
?>
<!-- widget meteo -->


<!-- widget meteo  Saint Raphael -->
<?php
$saint_raphael='<div id="widget_c4fddb38ee2aa47fc9582d621b8f21c5" class="widget">
<span id="l_c4fddb38ee2aa47fc9582d621b8f21c5"><a href="http://www.mymeteo.info/r/saint-raphael-83_n">Saint Raphael</a></span>
<script type="text/javascript">
(function() {
	var my = document.createElement("script"); my.type = "text/javascript"; my.async = true;
	my.src = "https://services.my-meteo.com/widget/js_design?ville=9206&format=vertical&nb_jours=3&ombre1=000000&c1=ffffff&c2=a9a9a9&c3=ffffff&c4=ffffff&c5=ffffff&police=0&t_icones=5&fond=1&masque=3&x=160&y=442&d=0&id=c4fddb38ee2aa47fc9582d621b8f21c5";
	var z = document.getElementsByTagName("script")[0]; z.parentNode.insertBefore(my, z);
})();
</script>
</div>';
?>
<!-- widget meteo -->

<!-- widget meteo  La Seyne sur Mer -->
<?php
$seyne_sur_mer='<div id="widget_ad5ec486becbcfcdab50f00145817b37" class="widget">
<span id="l_ad5ec486becbcfcdab50f00145817b37"><a href="http://www.mymeteo.info/r/la-seyne-sur-mer_n">La Seyne-sur-Mer</a></span>
<script type="text/javascript">
(function() {
	var my = document.createElement("script"); my.type = "text/javascript"; my.async = true;
	my.src = "https://services.my-meteo.com/widget/js_design?ville=31507&format=vertical&nb_jours=3&ombre1=000000&c1=ffffff&c2=a9a9a9&c3=ffffff&c4=ffffff&c5=ffffff&police=0&t_icones=5&fond=1&masque=3&x=160&y=442&d=0&id=ad5ec486becbcfcdab50f00145817b37";
	var z = document.getElementsByTagName("script")[0]; z.parentNode.insertBefore(my, z);
})();
</script>
</div>';
?>
<!-- widget meteo -->

<!-- MODAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAL -->
  <!-- The Modal hyeres -->
  <div class="modal" id="hyeres">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Météo de Hyeres</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <?php 
		  echo $hyeres;
		  ?>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
    <!-- The Modal Six_fours -->
  <div class="modal" id="six_fours">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Météo de Six Fours les Plages</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <?php 
		  echo $six_fours;
		  ?>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
    <!-- The Modal Saint Raphael -->
  <div class="modal" id="saint_raphael">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Météo de Saint Raphael</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <?php 
		  echo $saint_raphael;
		  ?>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
    <!-- The Modal bandol -->
  <div class="modal" id="bandol">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Météo de Bandol</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <?php 
		  echo $bandol;
		  ?>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
    <!-- The Modal Seyne sur Mer -->
  <div class="modal" id="seyne_sur_mer">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Météo de la Seyne sur Mer</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <?php 
		  echo $seyne_sur_mer;
		  ?>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
  
  
  
  
  										<script type="text/javascript">
										
	
	// Selection Ville en Ajax									
										
										
	function showTri(str) {
  
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("ile_var").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","ile/traitement_tableau.php?tri="+str,true);
    xmlhttp.send();
  
}									
	// Selection Filtre en Ajax	
	function showVille(str) {
  
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("ile_var").innerHTML = this.responseText;
		document.getElementById("tri").selectedIndex=0;
      }
    };
    xmlhttp.open("GET","ile/traitement_tableau.php?id="+str,true);
    xmlhttp.send();
  
}

	
</script>