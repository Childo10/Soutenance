<?php 
$title='Paramètres du profil(Directeur des études)';
    include('./app/Commun/dashbord_siedbar_DE.php');
	if(isset($_SESSION['users']['0']['id_utilisateur']) and !empty($_SESSION['users']['0']['id_utilisateur'])){
		
         }
	
	?>

   
<div class="container">
		<div class="main-body">
			<div class="row">
				<div class="col-lg-4">
					<div class="card">
						<div class="card-body">
							<div class="d-flex flex-column align-items-center text-center">
								<img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
								<div class="mt-3">
									<h4><?=$_SESSION['users']['0']['nom']?> <?=$_SESSION['users']['0']['prenom']?></h4>
									<p class="text-secondary mb-1">Directeur des études</p>
									<p class="text-muted font-size-sm">Cotonou,Bénin</p>
									<div class="row  gx-1">
										<button class="btn btn-primary offset-md-1 col-md-5  btn-sm">Modifier</button>
										<button class="btn btn-danger offset-md-1 col-md-5  btn-sm ">Supprimer</button>
									</div>
									
								</div>
							</div>
			
						</div>
					</div>
				</div>
				<div class="col-lg-8">
					<form class="card" method="post" action="/soutenance/directeur_etudes/dashbord/edit_profil_traitement">
					
				  
					
						<div class="card-body">
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0 font-weight-bold">Nom</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" name="nom" class="form-control <?= isset($_SESSION['errors']['nom']) ? 'is-invalid' : ''?>" value= "<?=$_SESSION['users']['0']['nom']?>">
									<?php
                                    if(isset($_SESSION['errors']['nom'])){ 
                                    ?>
                                    <div class="invalid-feedback">
                                        <?=$_SESSION['errors']['nom']?>
                                    </div>
                                    <?php
                                    }
                                    ?>
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0 font-weight-bold">Prenom</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" name="prenom" class="form-control <?= isset($_SESSION['errors']['prenom']) ? 'is-invalid' : ''?>" value="<?=$_SESSION['users']['0']['prenom']?>">
									<?php
                                    if(isset($_SESSION['errors']['prenom'])){ 
                                    ?>
                                    <div class="invalid-feedback">
                                        <?=$_SESSION['errors']['prenom']?>
                                    </div>
                                    <?php
                                    }
                                    ?>
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0 font-weight-bold">Nom utilisateur</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" name="nom_utilisateur" class="form-control <?= isset($_SESSION['errors']['nom_utilisateur']) ? 'is-invalid' : ''?>" value="<?=$_SESSION['users']['0']['nom_utilisateur']?>">
									<?php
                                    if(isset($_SESSION['errors']['nom_utilisateur'])){ 
                                    ?>
                                    <div class="invalid-feedback">
                                        <?=$_SESSION['errors']['nom_utilisateur']?>
                                    </div>
                                    <?php
                                    }
                                    ?>
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0 font-weight-bold">Email</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="email"  name="email" class="form-control <?= isset($_SESSION['errors']['email']) ? 'is-invalid' : ''?>" value="<?=$_SESSION['users']['0']['email']?>">
									<?php
                                    if(isset($_SESSION['errors']['email'])){ 
                                    ?>
                                    <div class="invalid-feedback">
                                        <?=$_SESSION['errors']['email']?>
                                    </div>
                                    <?php
                                    }
                                    ?>
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0 font-weight-bold">Type de profil</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" name="profil" class="form-control" value="<?=$_SESSION['users']['0']['profil']?>">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-3"></div>
								<div class="col-sm-6 text-secondary">
									<input type="submit" class="btn btn-primary px-4" name="button" value="Enregistrer">
								</div>
							</div>
						</div>
					</form>
					
				</div>
			</div>
		</div>
	</div>



	<?php
	unset($_SESSION['errors']);
    include('./app/Commun/dashbord_footer.php');
?>
   

     