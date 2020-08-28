<article class="dashboard__perfil mt-5">
    <div class="row">
        <div class="col-md-12">
            <h1 class="black dashboard__perfil__title">Perfil Profesional</h1>
            <form>
                <h3>Currículum Vitae</h3>

                <div class="row justify-content-between">
                    <div class="col-md-3">
                        <input type="file" id="myFile" name="filename">
                    </div>

                    <div class="col-md-3">
                        <h6>Máximo 2MB. Formato PDF y Word.</h6>
                    </div>
                </div>

                <hr>

                <div class="row justify-content-between">
                    <div class="col-md-3">
                        <label>Nombre Completo</label>
                        <input type="text" id="name" name="name" placeholder="Nombre Apellido">
                    </div>
                    <div class="col-md-3">
                        <h6>El nombre que verán las empresas al ver tu solicitud de empleo de GetJobs.</h6>
                    </div>
                </div>

                <div class="row justify-content-between">
                    <div class="col-md-3">
                        <label>Email</label>
                        <input type="text" id="email" name="email" placeholder="email@email.cl">
                    </div>
                    <div class="col-md-3">
                        <h6>Punto de contacto para enviarte notificaciones de avisos de empleo y de tus postulaciones.</h6>
                    </div>
                </div>

                <div class="row justify-content-between">
                    <div class="col-md-3">
                        <label>Celular</label>
                        <input type="number" id="phone" name="phone" placeholder="123456789">
                    </div>
                    <div class="col-md-3">
                        <h6>Punto de contacto para enviarte notificaciones de avisos de empleo y de tus postulaciones.</h6>
                    </div>
                </div>

                <div class="row justify-content-between">
                    <div class="col-md-3">
                        <label>Ciudad de residencia</label>
                        <input type="text" id="region" name="region" placeholder="Valparaíso">
                    </div>
                    <div class="col-md-3">
                        <h6>Punto de contacto para enviarte notificaciones de avisos de empleo y de tus postulaciones.</h6>
                    </div>
                </div>

                <hr>


                <div class="row justify-content-between">
                    <div class="col-md-3">
                        <label>Carrera Técnica o Universitaria</label>
                        <input type="text" id="carrera" name="carrera" placeholder="Relaciones Públicas">
                    </div>
                    <div class="col-md-3">
                        <h6>Punto de contacto para enviarte notificaciones de avisos de empleo y de tus postulaciones.</h6>
                    </div>
                </div>

               <!--  <input type="submit" class="btn btn--blue"> -->

               <button type="submit">Guardar los cambios</button>

            </form>
        </div>
    </div>
    <?php include('components/banner.php'); ?>
</article>