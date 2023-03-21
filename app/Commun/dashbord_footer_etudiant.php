<footer class="footer position-absolute bottom-2 py-2 w-100">
        <div class="container">
                <div class="container my-auto">
                    <div class="copyright text-center mt-5">
                        <span>Copyright &copy; Gestion d'école 2023 </span>
                    </div>
                </div>
        </div>
      </footer>
    </div>
  </main>
  <!--   Core JS Files   -->
  <script src="/soutenance/public/js/core/popper.min.js"></script>
  <script src="/soutenance/public/js/core/bootstrap.min.js"></script>
  <script src="/soutenance/public/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="/soutenance/public/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="/soutenance/public/js/material-dashboard.min.js?v=3.0.4"></script>
</body>

</html>