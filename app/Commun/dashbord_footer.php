  <!-- Footer -->
  <footer class="sticky-footer bg-white">
    <div class="container my-auto">
      <div class="copyright text-center mt-5">
        <span>Copyright &copy; Gestion d'école 2023 </span>
      </div>
    </div>
  </footer>
  <!-- End of Footer -->
  <script>
    // Code JavaScript pour les papillons et le message
    document.addEventListener("DOMContentLoaded", function(event) {
      const alertMessage = document.querySelector(".alert-message");
      setTimeout(function() {
        alertMessage.classList.add("hide");
      }, 8000);
    });
  </script>


  <!-- Bootstrap core JavaScript-->
  <script src="<?= CHEMIN_PROJET ?>public/vendors/jquery/jquery.min.js"></script>
  <script src="<?= CHEMIN_PROJET ?>public/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= CHEMIN_PROJET ?>/public/vendors/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= CHEMIN_PROJET ?>public/js/sb-admin-2.min.js"></script>
  <!-- Page level plugins -->
  <script src="<?= CHEMIN_PROJET ?>public/vendors/datatables/jquery.dataTables.js"></script>
  <script src="<?= CHEMIN_PROJET ?>public/vendors/datatables/dataTables.bootstrap4.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?= CHEMIN_PROJET ?>public/js/demo/datatables-demo.js"></script>

  
  </body>

  </html>