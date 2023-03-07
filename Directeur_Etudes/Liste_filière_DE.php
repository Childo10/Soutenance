<?php 
$title='Liste des filières';
    include('dashbord_siedbar_DE.php');
?>



<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Liste des filières</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="Ajout_filière_DE.php" type="button" class="btn btn-primary" >Ajouter une filière</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Code filière</th>
                        <th>Libellé de la filière</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Code filière</th>
                        <th>Libellé de la filière</th>
                        <th>Actions</th>
                        
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                            <td>001544</td>
                            <td>Maths</td>
                            <td>
                                <a href="Modifier_filière_DE.php" type="button" class="btn btn-circle  btn-warning"><i class="fas fa-edit"></i></a>
                                <a href="" type="button" class="btn btn-circle btn-danger "><i class="fas fa-times-circle"></i></a>
                            </td>
                           
                        </tr>

                        <tr>
                            <td>001545</td>
                            <td>SVT</td>
                            <td>
                                <a href="Modifier_filière_DE.php" type="button" class="btn btn-circle  btn-warning"><i class="fas fa-edit"></i></a>
                                <a href="" type="button" class="btn btn-circle btn-danger "><i class="fas fa-times-circle"></i></a>
                            </td>
                           
                        </tr>


                        <tr>
                            <td>001547</td>
                            <td>PCT</td>
                            <td>
                                <a href="Modifier_filière_DE.php" type="button" class="btn btn-circle  btn-warning"><i class="fas fa-edit"></i></a>
                                <a href="" type="button" class="btn btn-circle btn-danger "><i class="fas fa-times-circle"></i></a>
                            </td>
                           
                        </tr>


                        <tr>
                            <td>0015441</td>
                            <td>Anglais</td>
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
