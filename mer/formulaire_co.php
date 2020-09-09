
<style>


.light-blue.darken-3
{
	-webkit-animation-name: color-transition;
	animation-name: color-transition;
	-webkit-animation-duration: 25s;
	animation-duration: 25s;
	-webkit-animation-direction: alternate;
	animation-direction: alternate;
	-webkit-animation-iteration-count: infinite;
	animation-iteration-count: infinite;
	/*default value for timing-function is ease, we'll specify linear to keep the same timing through out*/
	-webkit-animation-timing-function: linear;
	animation-timing-function: linear;
}


@-webkit-keyframes color-transition {
	0% {
		background-color: #4C6085;
	}
	33% {
		background-color: #80D39B;
	}
	66% {
		background-color: #BE3E82;
	}
	100% {
		background-color: #4C6085;
	}
}

@keyframes color-transition {
	0% {
		background-color: #4C6085;
	}
	33% {
		background-color: #80D39B;
	}
	66% {
		background-color: #BE3E82;
	}
	100% {
		background-color: #4C6085;
	}
}
</style>
<?php 

// CONNEXION
if(isset($_REQUEST['submitco']))
	{
		$utilisateur= new Utilisateur_connection($_REQUEST['utilisateur_pseudo'],$_REQUEST['utilisateur_password']);
		
		
	}
		
// INSCRIPTION	
if(isset($_REQUEST['submit_sign']))
	{
		$utilisateur_new= new Utilisateur_inscription($_REQUEST['utilisateur_pseudo'],$_REQUEST['utilisateur_password'],$_REQUEST['utilisateur_password2'],$_REQUEST['utilisateur_email']);
		
		
	}
		
	?>


<!--Modal: Login / Register Form-->
<div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog cascading-modal" role="document">
    <!--Content-->
    <div class="modal-content">

      <!--Modal cascading tabs-->
      <div class="modal-c-tabs">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user mr-1"></i>
              Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fas fa-user-plus mr-1"></i>
              Register</a>
          </li>
        </ul>

        <!-- Tab panels -->
        <div class="tab-content">
          <!--Panel 7-->
          <div class="tab-pane fade in show active" id="panel7" role="tabpanel">
			<form method="POST" action="">
            <!--Body-->
            <div class="modal-body mb-1">
              <div class="md-form form-sm mb-5">
                <i class="fas fa-user-circle prefix"></i>
                <input name="utilisateur_pseudo" type="text" id="modalLRInput10" class="form-control form-control-sm validate" placeholder="Pseudo" value="<?php if(isset($_COOKIE['pseudo'])){echo $_COOKIE['pseudo'];} ?>" required >
              </div>

              <div class="md-form form-sm mb-4">
                <i class="fas fa-lock prefix"></i>
                <input name ="utilisateur_password" type="password" id="modalLRInput11" class="form-control form-control-sm validate" placeholder="Password" value="<?php if(isset($_COOKIE['mot_de_passe'])){echo $_COOKIE['mot_de_passe'];} ?>" required >
              </div>
			  <?php
									if(isset($utilisateur))
									{
										$utilisateur->getErreur();
									}
									?>
              <div class="text-center mt-2">
                <button type="submit" name="submitco" class="btn btn-info">Log in <i class="fas fa-sign-in ml-1"></i></button>
              </div>
            </div>
            <!--Footer-->
            <div class="modal-footer">
              
              <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
            </div>
</form>
          </div>
          <!--/.Panel 7-->

          <!--Panel 8-->
          <div class="tab-pane fade" id="panel8" role="tabpanel">
<form method="POST" action="">
            <!--Body-->
            <div class="modal-body">
				<div class="md-form form-sm mb-5">
					<i class="fas fa-user-circle prefix"></i>
					<input name="utilisateur_pseudo" type="text" id="modalLRInput14" class="form-control form-control-sm validate" placeholder="Pseudo"  required >
				</div>
              <div class="md-form form-sm mb-5">
                <i class="fas fa-envelope prefix"></i>
                <input name="utilisateur_email" type="email" id="modalLRInput12" class="form-control form-control-sm validate" placeholder="email" required >
                
              </div>

              <div class="md-form form-sm mb-5">
                <i class="fas fa-lock prefix"></i>
                <input name="utilisateur_password" type="password" id="modalLRInput13" class="form-control form-control-sm validate" placeholder="Password" required>
                
              </div>

              <div class="md-form form-sm mb-4">
                <i class="fas fa-lock prefix"></i>
                <input name="utilisateur_password2" type="password" id="modalLRInput14" class="form-control form-control-sm validate" placeholder="Repeat Password" required>
                
              </div>
				<?php
									if(isset($utilisateur_new))
									{
										$utilisateur_new->getErreur();
									}
									?>
              <div class="text-center form-sm mt-2">
                <button name="submit_sign" type="submit" class="btn btn-info">Sign up <i class="fas fa-sign-in ml-1"></i></button>
              </div>

            </div>
            <!--Footer-->
            <div class="modal-footer">
              
              <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
            </div>
		</form>
          </div>
          <!--/.Panel 8-->
        </div>

      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
