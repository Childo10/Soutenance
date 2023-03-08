<?php 
$title='Liste des matières';
    include('dashbord_siedbar_DE.php');
?>



<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Liste des matières</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="Ajout_matière_DE.php" type="button" class="btn btn-primary" >Ajouter une matière</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Code matière</th>
                        <th>Libellé de la matière</th>
                        <th>coefficient</th>
                        <th>Nombre maximum d'étudiants</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Code matière</th>
                        <th>Libellé de la matière</th>
                        <th>coefficient</th>
                        <th>Nombre maximum d'étudiants</th>
                        <th>Actions</th>
                        
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                            <td>001544</td>
                            <td>Maths</td>
                            <td>055474</td>
                            <td>150</td>
                            <td>
                                <a href="Modifier_filière_DE.php" type="button" class="btn btn-circle  btn-warning"><i class="fas fa-edit"></i></a>
                                <a href="" type="button" class="btn btn-circle btn-danger "><i class="fas fa-times-circle"></i></a>
                            </td>
                           
                        </tr>

                        <tr>
                            <td>001545</td>
                            <td>SVT</td>
                            <td>055476</td>
                            <td>150</td>
                            <td>
                                <a href="Modifier_filière_DE.php" type="button" class="btn btn-circle  btn-warning"><i class="fas fa-edit"></i></a>
                                <a href="" type="button" class="btn btn-circle btn-danger "><i class="fas fa-times-circle"></i></a>
                            </td>
                           
                        </tr>


                        <tr>
                            <td>001547</td>
                            <td>PCT</td>
                            <td>055444</td>
                            <td>150</td>
                            <td>
                                <a href="Modifier_filière_DE.php" type="button" class="btn btn-circle  btn-warning"><i class="fas fa-edit"></i></a>
                                <a href="" type="button" class="btn btn-circle btn-danger "><i class="fas fa-times-circle"></i></a>
                            </td>
                           
                        </tr>


                        <tr>
                            <td>0015441</td>
                            <td>Anglais</td>
                            <td>055484</td>
                            <td>150</td>
                            <td>
                                <a href="Modifier_filière_DE.php" type="button" class="btn btn-circle  btn-warning"><i class="fas fa-edit"></i></a>
                                <a href="" type="button" class="btn btn-circle btn-danger "><i class="fas fa-times-circle"></i></a>
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
    include('dashbord_footer_DE.php');
?>
