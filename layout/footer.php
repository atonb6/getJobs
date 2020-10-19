  <!-- Footer -->
  <footer>
    <div class="container">
      <hr>

      <div class="row justify-content-center align-items-center links">
        <div class="col-md-3 col-sm-6">
          <ul>
            <li><a href="#">Políticas de privacidad</a></li>
            <li><a href="#">Términos y condiciones</a></li>
            <li><a href="#">Mapa del sitio</a></li>
            <li><a href="" data-toggle="modal" data-target="#contact">Contáctanos</a></li>
          </ul>
        </div>
        <div class="col-md-6 col-sm-2">
          <ul class="d-flex flex-row flex-sm-column flex-md-row justify-content-md-end social-links mt-3 mt-sm-0">
            <li class="ml-sm-3"><a href="#" target="_blank"><span class="icon-facebook2"></span></a></li>
            <li class="ml-3"><a href="#" target="_blank"><span class="icon-instagram"></span></a></li>
            <li class="ml-3"><a href="#" target="_blank"><span class="icon-linkedin"></span></a></li>
<!--             <li class="ml-3"><a href="#" target="_blank"><span class="icon-whatsapp"></span></a></li> -->
            <li class="ml-3"><a href="#" target="_blank"><span class="icon-twitter"></span></a></li>
   <!--          <li class="ml-3"><a href="#" target="_blank"><span class="icon-youtube"></span></a></li> -->
          </ul>
        </div>
      </div>


      <div class="modal fade gj-modal " id="contact" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="contactLabel">Contáctenos</h5>
            </div>
            <div class="modal-body dashboard__profile">
              <form>
                <label class="dashboard__profile__label">Motivo<span class="end">*</span></label></br>
                <div class="position-relative">
                  <select class="w-100" required>
                    <option>Problemas con el sitio</option>
                    <option>Denunciar oferta</option>
                    <option>Problemas con mis pagos</option>
                    <option>Otros problemas</option>
                  </select>
                  <span class="material-icons chevron">
                    expand_more
                  </span>
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Mensaje:</label>
                  <textarea class="form-control" id="message-text"></textarea>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn--blue" data-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn--blue">Enviar mensaje</button>
            </div>
          </div>
        </div>
      </div>

      <hr>
      <p class="text-center copyright">GetJobs 2020</p>
    </div>
  </footer>

  </body>

  </html>
  <!-- Custom scripts Incluye todo -->
  <script src="dist/js/main.min.js"></script>