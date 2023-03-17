<?php 
    $title='Modifier une filière';
    include('./app/Commun/dashbord_siedbar_SDG.php');
?>


<div class="container">

<div class="card o-hidden col-lg-8 offset-lg-2 offset-md-0 border-0 shadow-lg my-5">
    <div class="card-body p-0 ">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-12">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Modifier une filière</h1>
                    </div>
                    <form class="user">
                        <div class="form-group row">
                            <div class="col-md-6 col-12">
                                <input type="number" class="form-control " name="codefil" id="codefil"
                                    placeholder="0015451">
                            </div>

                            <div class="col-md-6 mt-1">
                                <input type="text"  name="libfil" class="form-control "
                                    id="libfil" placeholder="AB">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class=" col-md-8 col-sm-6 offset-md-2 offset-0 mb-lg-0  text-center">
                            <input type="submit" value="Enregistrer" class="mb-1 mb-md-0  btn btn-primary">
                            </input>

                                <input type="reset"  class=" btn btn-danger ">
                                    
                                </input>
                            </div>
                        </div>
                        
                        
                        <hr>
                    </form>
                    <div class="text-center">
                        <a class="small" href="Liste_filiere">Liste des filières</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>


<?php 
    include('./app/Commun/dashbord_footer.php');
?>