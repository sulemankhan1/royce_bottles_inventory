<!-- Footer Section Start -->
  <footer class="footer">
    <div class="footer-body">
      <ul class="left-panel list-inline mb-0 p-0">

      </ul>
      <div class="right-panel">
        ©<script>
          document.write(new Date().getFullYear())

          </script>
          <a href="#">Alphinex Solutions</a>
      </div>
    </div>
  </footer>
  <!-- Footer Section End -->
</main>

<!-- Wrapper End-->

  <!-- Library Bundle Script -->
  <script src="<?= base_url('assets/js/core/libs.min.js') ?>"></script>

  <!-- External Library Bundle Script -->
  <script src="<?= base_url('assets/js/core/external.min.js') ?>"></script>

  <!-- datatable button js -->
  <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>


  <!-- AOS Animation Plugin-->
  <script src="<?= base_url('assets/vendor/aos/dist/aos.js') ?>"></script>

  <!-- App Script -->
  <script src="<?= base_url('assets/js/hope-ui.js') ?>" defer></script>

  <?php

    if(isset($scripts) && !empty($scripts))
    {

      foreach ($scripts as $key => $v) {

  ?>

      <script src="<?= base_url('assets/js/'.$v) ?>"></script>

  <?php

      }

    }
   ?>

</body>

</html>
