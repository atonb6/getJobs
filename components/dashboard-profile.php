<article class="dashboard__profile mt-5">
    <div class="row">
        <div class="col-md-10">
            <h1 class="black dashboard__profile__title">Perfil Profesional</h1>
            <form>
                <h3>Currículum Vitae</h3>

                <div class="row justify-content-between">
                    <div class="col-md-8">
                        <input type="file" class="custom-file-input">
                        <a href="#">Descarga tu Currículum</a>
                    </div>

                    <div class="col-md-4">
                        <h6>Máximo 2MB. Formato PDF y Word.</h6>
                    </div>
                </div>

                <hr>

                <div class="row justify-content-between">
                    <div class="col-md-8">
                        <label>Nombres</label>
                        <input type="text" id="name" name="name" placeholder="Nombres" required>

                        <label>Apellidos</label>
                        <input type="text" id="surname" name="surname" placeholder="Apellidos" required>

                        <label>Fecha de nacimiento</label>
                        <input type="date" id="date" name="date" required>


                    </div>
                    <div class="col-md-4">
                        <h6>El nombre que verán las empresas al ver tu solicitud de empleo de GetJobs.</h6>
                    </div>
                </div>

                <div class="row justify-content-between">
                    <div class="col-md-8">
                        <label>Email</label>
                        <input type="text" id="email" name="email" placeholder="email@email.cl" required>

                        <label>Dirección</label>
                        <input type="text" id="address" name="address" placeholder="Emiliano Cabrera Sandoval 831">

                        <label>Comuna</label>
                        <select required>
                            <option>Seleccione Comuna</option>
                            <option>Santiago Centro</option>
                            <option>Buin</option>
                        </select>


                        <label>Ciudad</label>
                        <select required>
                            <option>Seleccione Ciudad</option>
                            <option>Santiago</option>
                            <option>Valparaíso</option>
                        </select>

                        <label>País</label>
                        <select required>
                            <option>Chile</option>
                            <option>Venezuela</option>
                            <option>Argentina</option>
                        </select>

                        <label>URL Linkedin</label>
                        <input type="url" id="url" name="url" placeholder="http://linkedin/miperfil">

                        <div class="col-md-8">

                            <label>Teléfono de contacto</label>
                            <input type="tel" id="phone" name="phone" placeholder="123456789">


                            <label>Genero</label>
                            <input type="radio" id="male" name="gender" value="male">
                            <label for="male">Hombre</label><br>
                            <input type="radio" id="female" name="gender" value="female">
                            <label for="female">Mujer</label><br>
                            <input type="radio" id="other" name="gender" value="other">
                            <label for="other">Otro</label>


                            <label>Discapacidad</label>
                            <input type="checkbox" id="disclaimer-yes" name="disclaimer" value="disclaimer-yes"><label for="disclaimer-yes">Sí</label>
                            <input type="checkbox" id="disclaimer-no" name="disclaimer" value="disclaimer-no"><label for="disclaimer-no">No</label>
                        </div>



                    </div>
                    <div class="col-md-4">
                        <h6>Punto de contacto para enviarte notificaciones de avisos de empleo y de tus postulaciones.</h6>
                    </div>
                </div>

                <div class="row justify-content-between">

                    <div class="col-md-4">
                        <h6>Punto de contacto para enviarte notificaciones de avisos de empleo y de tus postulaciones.</h6>
                    </div>
                </div>

                <div class="row justify-content-between">
                    <div class="col-md-8">
                        <label>Ciudad de residencia</label>
                        <input type="text" id="region" name="region" placeholder="Valparaíso">
                    </div>
                    <div class="col-md-4">
                        <h6>Punto de contacto para enviarte notificaciones de avisos de empleo y de tus postulaciones.</h6>
                    </div>
                </div>

                <hr>


                <div class="row justify-content-between">
                    <div class="col-md-8">
                        <label>Carrera Técnica o Universitaria</label>
                        <input type="text" id="carrera" name="carrera" placeholder="Relaciones Públicas">
                    </div>
                    <div class="col-md-4">
                        <h6>Punto de contacto para enviarte notificaciones de avisos de empleo y de tus postulaciones.</h6>
                    </div>
                </div>

                <!--  <input type="submit" class="btn btn--blue"> -->

                <button type="submit">Guardar los cambios</button>

            </form>
        </div>
        <div class="col-md-2">
            <?php include('components/banner-vert.php'); ?>
            <?php include('components/banner-vert.php'); ?>
        </div>
    </div>
    <?php include('components/banner.php'); ?>
</article>