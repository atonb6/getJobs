  <!-- Footer -->
  <footer>
    <hr>
    <div class="container">
      <div class="row">
        <?php for($x=1; $x<=3; $x++): ?>
        <div class="col-md-3 offset-md-1">
          <h3><strong>Categorías</strong></h3>
          <ul>
            <?php for($i=1; $i<=10; $i++): ?>
            <li><a href="#">Categoría <?php echo $i ?></a></li>
            <?php endfor ?>
          </ul>
        </div>
        <?php endfor ?>
      </div>
    </div>
    <hr class="hr--bottom">
    <p class="text-center copyright">GetJobs 2020</p>
  </footer>

  </body>

  </html>
  <!-- Custom scripts Incluye todo -->
  <script src="dist/js/main.min.js"></script>