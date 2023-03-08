<?php 
$title='Liste du déroulement des cours';
    include('dashbord_siedbar_DE.php');
?>



<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Liste du déroulement des cours</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="Ajout_derou_cours_DE.php" type="button" class="btn btn-primary" >Ajouter un déroulement de cours</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Numéro du cours</th>
                        <th>Date du cours</th>
                        <th>Heure réelle de début du cours</th>
                        <th>Heure réelle de fin du cours</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Numéro du cours</th>
                        <th>Date du cours</th>
                        <th>Heure réelle de début du cours</th>
                        <th>Heure réelle de fin du cours</th>
                        <th>Actions</th>
                        
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                            <td>001544</td>
                            <td>05/01/2023</td>
                            <td>17:00</td>
                            <td>19:00</td>
                            <td>
                                <a href="Modifier_filière_DE.php" type="button" class="btn btn-circle  btn-warning"><i class="fas fa-edit"></i></a>
                                <a href="" type="button" class="btn btn-circle btn-danger "><i class="fas fa-times-circle"></i></a>
                            </td>
                           
                        </tr>

                        <tr>
                            <td>001545</td>
                            <td>10/03/2023</td>
                            <td>10:00</td>
                            <td>13:00</td>
                            <td>
                                <a href="Modifier_filière_DE.php" type="button" class="btn btn-circle  btn-warning"><i class="fas fa-edit"></i></a>
                                <a href="" type="button" class="btn btn-circle btn-danger "><i class="fas fa-times-circle"></i></a>
                            </td>
                           
                        </tr>


                        <tr>
                            <td>001547</td>
                            <td>08/01/2023</td>
                            <td>15:00</td>
                            <td>18:00</td>
                            <td>
                                <a href="Modifier_filière_DE.php" type="button" class="btn btn-circle  btn-warning"><i class="fas fa-edit"></i></a>
                                <a href="" type="button" class="btn btn-circle btn-danger "><i class="fas fa-times-circle"></i></a>
                            </td>
                           
                        </tr>


                        <tr>
                            <td>0015441</td>
                            <td>14/03/2023</td>
                            <td>13:00</td>
                            <td>15:00</td>
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
