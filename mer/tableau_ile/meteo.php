<!-- https://www.my-meteo.com/meteo-webmaster.html -->



<!-- widget meteo Hyeres -->
<?php
$hyeres='<div id="widget_859563fa347ef3d2dc0ebd0be15834be">
<span id="l_859563fa347ef3d2dc0ebd0be15834be"><a href="http://www.mymeteo.info/r/hyeres_Q">Hyeres</a></span>
<script type="text/javascript">
(function() {
	var my = document.createElement("script"); my.type = "text/javascript"; my.async = true;
	my.src = "https://services.my-meteo.com/widget/js_design?ville=31460&format=petit-horizontal&nb_jours=3&ombre1=000000&c1=ffffff&c2=a9a9a9&c3=ffffff&c4=ffffff&c5=ffffff&police=0&t_icones=2&fond=1&masque=3&x=476&y=80&d=0&id=859563fa347ef3d2dc0ebd0be15834be";
	var z = document.getElementsByTagName("script")[0]; z.parentNode.insertBefore(my, z);
})();
</script>
</div>';
?>
<!-- widget meteo -->



<!-- widget meteo  Bandol -->
<?php
$bandol='<div id="widget_cefc72b417156a0f54a1c0d1cdddf663">
<span id="l_cefc72b417156a0f54a1c0d1cdddf663"><a href="http://www.mymeteo.info/r/bandol_g">Bandol</a></span>
<script type="text/javascript">
(function() {
	var my = document.createElement("script"); my.type = "text/javascript"; my.async = true;
	my.src = "https://services.my-meteo.com/widget/js_design?ville=31410&format=petit-horizontal&nb_jours=3&ombre1=000000&c1=ffffff&c2=a9a9a9&c3=ffffff&c4=ffffff&c5=ffffff&police=0&t_icones=2&fond=1&masque=3&x=476&y=80&d=0&id=cefc72b417156a0f54a1c0d1cdddf663";
	var z = document.getElementsByTagName("script")[0]; z.parentNode.insertBefore(my, z);
})();
</script>
</div>';
?>
<!-- widget meteo -->


<!-- widget meteo  Six Fours les Plages -->
<?php
$six_fours='<div id="widget_1ff849af2c50745830cfc85b5ac60c59">
<span id="l_1ff849af2c50745830cfc85b5ac60c59"><a href="http://www.mymeteo.info/r/six-fours-les-plages_z">Six Fours</a></span>
<script type="text/javascript">
(function() {
	var my = document.createElement("script"); my.type = "text/javascript"; my.async = true;
	my.src = "https://services.my-meteo.com/widget/js_design?ville=35624&format=petit-horizontal&nb_jours=3&ombre1=000000&c1=ffffff&c2=a9a9a9&c3=ffffff&c4=ffffff&c5=ffffff&police=0&t_icones=2&fond=1&masque=3&x=476&y=80&d=0&id=1ff849af2c50745830cfc85b5ac60c59";
	var z = document.getElementsByTagName("script")[0]; z.parentNode.insertBefore(my, z);
})();
</script>
</div>';
?>
<!-- widget meteo -->


<!-- widget meteo  Saint Raphael -->
<?php
$saint_raphael='<div id="widget_c3dcf90a53cebd84f83eeb0028f34190">
<span id="l_c3dcf90a53cebd84f83eeb0028f34190"><a href="http://www.mymeteo.info/r/saint-raphael-83_n">Saint Raphael</a></span>
<script type="text/javascript">
(function() {
	var my = document.createElement("script"); my.type = "text/javascript"; my.async = true;
	my.src = "https://services.my-meteo.com/widget/js_design?ville=9206&format=petit-horizontal&nb_jours=3&ombre1=000000&c1=ffffff&c2=a9a9a9&c3=ffffff&c4=ffffff&c5=ffffff&police=0&t_icones=2&fond=1&masque=3&x=476&y=80&d=0&id=c3dcf90a53cebd84f83eeb0028f34190";
	var z = document.getElementsByTagName("script")[0]; z.parentNode.insertBefore(my, z);
})();
</script>
</div>';
?>
<!-- widget meteo -->

<!-- widget meteo  La Seyne sur Mer -->
<?php
$seyne_sur_mer='<div id="widget_d2f0941ad5fd3ce5dcd235ecd5f31d4b">
<span id="l_d2f0941ad5fd3ce5dcd235ecd5f31d4b"><a href="http://www.mymeteo.info/r/la-seyne-sur-mer_n">La Seyne sur Mer</a></span>
<script type="text/javascript">
(function() {
	var my = document.createElement("script"); my.type = "text/javascript"; my.async = true;
	my.src = "https://services.my-meteo.com/widget/js_design?ville=31507&format=petit-horizontal&nb_jours=3&ombre1=000000&c1=ffffff&c2=a9a9a9&c3=ffffff&c4=ffffff&c5=ffffff&police=0&t_icones=2&fond=1&masque=3&x=476&y=80&d=0&id=d2f0941ad5fd3ce5dcd235ecd5f31d4b";
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
										
	// Selection des Villes									
$(document).ready(function(){
        $("[name='ville'] option").click(function(){
        	var selectValue = $("[name='ville'] option:selected").val();
            if(selectValue){
				
				
				location.replace('ville.php?id='+selectValue);
            }
        });
    });

	// Selection des Filtres
$(document).ready(function(){
        $("[name='tri'] option").click(function(){
        	var selectValue = $("[name='tri'] option:selected").val();
            if(selectValue){
				
				
				location.replace('ville.php?tri='+selectValue);
            }
        });
    });	
	
</script>