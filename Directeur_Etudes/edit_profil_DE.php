<?php 
$title='Paramètres du profil(Directeur des études)';
    include('dashbord_siedbar_DE.php');
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
									<h4>Michel Houedanou</h4>
									<p class="text-secondary mb-1">Directeur des études</p>
									<p class="text-muted font-size-sm">Cotonou,Bénin</p>
									<button class="btn btn-primary">Changer l'avatar de profil</button>
								</div>
							</div>
			
						</div>
					</div>
				</div>
				<div class="col-lg-8">
					<form class="card" action="">
						<div class="card-body">
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0 font-weight-bold">Nom complet</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="Michel Houedanou">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0 font-weight-bold">Nom utilisateur</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="Michel10">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0 font-weight-bold">Email</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="michelhouedanou@.gmail.com">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0 font-weight-bold">Type de profil</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="Directeur des études">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-3"></div>
								<div class="col-sm-9 text-secondary">
									<input type="button" class="btn btn-primary px-4" value="Enregistrer">
								</div>
							</div>
						</div>
					</form>
					
				</div>
			</div>
		</div>
	</div>

	<?php 
    include('dashbord_footer_DE.php');
?>
   

     