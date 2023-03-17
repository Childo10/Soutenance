<?php 
$title='Liste des absences';
    include('./app/Commun/dashbord_siedbar_DE.php');
?>



<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Liste des absences</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="Ajout_absence" type="button" class="btn btn-primary" >Ajouter une absence </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Numéro du cours</th>
                        <th>Date du cours</th>
                        <th>Numéro d'inscription</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Sexe</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Numéro du cours</th>
                        <th>Date du cours</th>
                        <th>Numéro d'inscription</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Sexe</th>
                        <th>Actions</th>
                        
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                            <td>001544</td>
                            <td>10/05/2022</td>
                            <td>001547</td>
                            <td>AGBO</td>
                            <td>Edwige</td>
                            <td>Masculin</td>
                            <td>
                                <a href="Modifier_absence" type="button" class="btn-sm  btn-circle  btn-warning"><i class="fas fa-edit"></i></a>
                                <a href="" type="button" class="btn-sm  btn-circle btn-danger "><i class="fas fa-times-circle"></i></a>
                            </td>
                           
                        </tr>

                        <tr>
                            <td>001544</td>
                            <td>10/05/2022</td>
                            <td>001547</td>
                            <td>AGBO</td>
                            <td>Edwige</td>
                            <td>Masculin</td>
                            <td>
                                <a href="Modifier_absence" type="button" class="btn-sm  btn-circle  btn-warning"><i class="fas fa-edit"></i></a>
                                <a href="" type="button" class="btn-sm  btn-circle btn-danger "><i class="fas fa-times-circle"></i></a>
                            </td>
                           
                        </tr>


                        <tr>
                            <td>001544</td>
                            <td>10/05/2022</td>
                            <td>001547</td>
                            <td>AGBO</td>
                            <td>Edwige</td>
                            <td>Masculin</td>
                            <td>
                                <a href="Modifier_absence" type="button" class="btn-sm  btn-circle  btn-warning"><i class="fas fa-edit"></i></a>
                                <a href="" type="button" class="btn-sm  btn-circle btn-danger "><i class="fas fa-times-circle"></i></a>
                            </td>
                           
                        </tr>


                        <tr>
                            <td>001544</td>
                            <td>10/05/2022</td>
                            <td>001547</td>
                            <td>AGBO</td>
                            <td>Edwige</td>
                            <td>Masculin</td>
                            <td>
                                <a href="Modifier_absence" type="button" class="btn-sm  btn-circle  btn-warning"><i class="fas fa-edit"></i></a>
                                <a href="" type="button" class="btn-sm  btn-circle btn-danger "><i class="fas fa-times-circle"></i></a>
                            </td>
                           
                        </tr>


                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

<?php 
    include('./app/Commun/dashbord_footer.php');
?>
