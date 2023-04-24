<?php
    session_start();
    $title="Inscription - Directeur des études";
    include('./app/Commun/header.php');
    $data=[];
    if (isset($_SESSION['data']) && !empty($_SESSION['data'])){
        $data= $_SESSION['data'];
    }
    
?>

<body>

 <div class="container">

<div class="card o-hidden col-lg-8 offset-lg-2 offset-md-0 border-0 shadow-sm my-5 bg-primary text-white">
    <div class="card-body p-0 ">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-12 p-5">
                <h5> Merci de votre inscription, veuillez consulter votre boite email pour valider votre compte.
            </div>
        </h3>
           
        </div>
    </div>
</div>

</div>

<?php
session_destroy();
    include('./app/Commun/dashbord_footer.php');
?>