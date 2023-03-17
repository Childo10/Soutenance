<?php 
$title='Liste des étudiants';
    include('./app/Commun/dashbord_siedbar_SDG.php');
?>



<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Liste des étudiants</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="Ajout_etudiant" type="button" class="btn btn-primary" >Ajouter un étudiant</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Matricule</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Sexe</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Matricule</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Sexe</th>
                        <th>Actions</th>
                        
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                            <td>001544</td>
                            <td>Clément</td>
                            <td>Gbodja</td>
                            <td>Masculin</td>
                            <td>
                                <a href="Modifier_etudiant" type="button" class="btn-sm  btn-circle  btn-warning"><i class="fas fa-edit"></i></a>
                                <a href="#" type="button" class="btn-sm  btn-circle btn-danger "><i class="fas fa-times-circle"></i></a>
                            </td>
                           
                        </tr>

                        <tr>
                            <td>001544</td>
                            <td>Clément</td>
                            <td>Gbodja</td>
                            <td>Masculin</td>
                            <td>
                                <a href="Modifier_etudiant" type="button" class="btn-sm  btn-circle  btn-warning"><i class="fas fa-edit"></i></a>
                                <a href="#" type="button" class="btn-sm  btn-circle btn-danger "><i class="fas fa-times-circle"></i></a>
                            </td>
                           
                        </tr>


                        <tr>
                            <td>001544</td>
                            <td>Clément</td>
                            <td>Gbodja</td>
                            <td>Masculin</td>
                            <td>
                                <a href="Modifier_etudiant" type="button" class="btn-sm btn-circle  btn-warning"><i class="fas fa-edit"></i></a>
                                <a href="#" type="button" class="btn-sm  btn-circle btn-danger "><i class="fas fa-times-circle"></i></a>
                            </td>
                           
                        </tr>


                        <tr>
                            <td>001544</td>
                            <td>Clément</td>
                            <td>Gbodja</td>
                            <td>Masculin</td>
                            <td>
                                <a href="Modifier_etudiant" type="button" class="btn-sm  btn-circle  btn-warning"><i class="fas fa-edit"></i></a>
                                <a href="#" type="button" class="btn-sm  btn-circle btn-danger "><i class="fas fa-times-circle"></i></a>
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
