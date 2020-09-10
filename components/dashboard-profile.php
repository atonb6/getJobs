<article class="dashboard__profile mt-5">
    <div class="row">
        <div class="col-md-10">
            <h1 class="black dashboard__profile__title">Perfil Profesional</h1>
            <form>
                <h3>Currículum Vitae</h3>

                <div class="row justify-content-between align-items-center">
                    <div class="col-md-8">
                        <input type="file" class="custom-file-input mb-3">
                        <a href="#">Descarga tu Currículum</a>
                    </div>

                    <div class="col-md-4">
                        <h6 class="dashboard__profile__help">Máximo 2MB. Formato PDF y Word.</h6>
                    </div>
                </div>

                <hr>

                <div class="row justify-content-between align-items-center mb-3">
                    <div class="col-md-8">
                        <label>Nombres</label></br>
                        <input class="w-100" type="text" id="name" name="name" placeholder="Nombres" required>
                    </div>
                    <div class="col-md-4">
                        <h6 class="dashboard__profile__help">El nombre que verán las empresas al ver tu solicitud de empleo de GetJobs.</h6>
                    </div>
                </div>

                <div class="row justify-content-between align-items-center mb-3">
                    <div class="col-md-8">
                        <label>Apellidos</label></br>
                        <input class="w-100" type="text" id="surname" name="surname" placeholder="Apellidos" required>
                    </div>
                    <div class="col-md-4">
                        <h6 class="dashboard__profile__help">El nombre que verán las empresas al ver tu solicitud de empleo de GetJobs.</h6>
                    </div>
                </div>

                <div class="row justify-content-between align-items-center mb-3">
                    <div class="col-md-8">
                        <label>Fecha de nacimiento</label></br>
                        <input class="w-100" type="date" id="date" name="date" required>
                    </div>
                    <div class="col-md-4">
                        <h6 class="dashboard__profile__help">El nombre que verán las empresas al ver tu solicitud de empleo de GetJobs.</h6>
                    </div>
                </div>


                <div class="row justify-content-between align-items-center mb-3">
                    <div class="col-md-8">
                        <label>Email</label></br>
                        <input class="w-100" type="text" id="email" name="email" placeholder="email@email.cl" required>
                    </div>
                    <div class="col-md-4">
                        <h6 class="dashboard__profile__help">El nombre que verán las empresas al ver tu solicitud de empleo de GetJobs.</h6>
                    </div>
                </div>

                <div class="row justify-content-between align-items-center mb-3">
                    <div class="col-md-8">
                        <label>País</label></br>
                        <div class="position-relative">
                            <select class="w-100" required>
                                <option>Chile</option>
                                <option>Venezuela</option>
                                <option>Argentina</option>
                            </select>
                            <span class="material-icons chevron">
                                expand_more
                            </span>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <h6 class="dashboard__profile__help">El nombre que verán las empresas al ver tu solicitud de empleo de GetJobs.</h6>
                    </div>
                </div>

                <div class="row justify-content-between align-items-center mb-3">
                    <div class="col-md-8">
                            <label>Ciudad</label></br>
                            <div class="position-relative">
                            <select class="w-100" name="Ciudad" required>
                                <option>Seleccione Ciudad</option>
                                <option>Santiago</option>
                                <option>Valparaíso</option>
                            </select>
                            <span class="material-icons chevron">
                                expand_more
                            </span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h6 class="dashboard__profile__help">El nombre que verán las empresas al ver tu solicitud de empleo de GetJobs.</h6>
                    </div>
                </div>

                <div class="row justify-content-between align-items-center mb-3">
                    <div class="col-md-8">
                        <label>Comuna</label></br>
                        <div class="position-relative">
                            <select class="w-100" required>
                                <option>Chile</option>
                                <option>Venezuela</option>
                                <option>Argentina</option>
                            </select>
                            <span class="material-icons chevron">
                                expand_more
                            </span>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <h6 class="dashboard__profile__help">El nombre que verán las empresas al ver tu solicitud de empleo de GetJobs.</h6>
                    </div>
                </div>


                <div class="row justify-content-between align-items-center mb-3">
                    <div class="col-md-8">
                        <label>Dirección</label></br>
                        <input class="w-100" type="text" id="address" name="address" placeholder="Emiliano Cabrera Sandoval 462">

                    </div>
                    <div class="col-md-4">
                        <h6 class="dashboard__profile__help">El nombre que verán las empresas al ver tu solicitud de empleo de GetJobs.</h6>
                    </div>
                </div>




                <div class="row justify-content-between align-items-center mb-3">
                    <div class="col-md-8">
                        <label>URL Linkedin</label></br>
                        <input class="w-100" type="url" id="url" name="url" placeholder="http://linkedin/miperfil">
                    </div>
                    <div class="col-md-4">
                        <h6 class="dashboard__profile__help">El nombre que verán las empresas al ver tu solicitud de empleo de GetJobs.</h6>
                    </div>
                </div>

                <div class="row justify-content-between align-items-center mb-3">
                    <div class="col-md-8">

                        <label>Teléfono de contacto</label></br>
                        <input class="w-100" type="tel" id="phone" name="phone" placeholder="123456789">
                    </div>
                    <div class="col-md-4">
                        <h6 class="dashboard__profile__help">El nombre que verán las empresas al ver tu solicitud de empleo de GetJobs.</h6>
                    </div>
                </div>

                <div class="row justify-content-between align-items-center mb-3">
                    <div class="col-md-8">

                        <label>Genero</label></br>
                        <div class="d-flex align-items-center">
                            <input class="ml-2" type="radio" name="gender" id="male" value="male">
                            <label class="form-check-label ml-2" for="male">
                                Hombre
                            </label>
                            <input class="ml-2" type="radio" id="female" name="gender" value="female">
                            <label class="form-check-label ml-2" for="female">Mujer</label></br>
                            <input class="ml-2" type="radio" id="other" name="gender" value="other">
                            <label class="form-check-label ml-2" for="other">Otro</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h6 class="dashboard__profile__help"></h6>
                    </div>
                </div>

                <div class="row justify-content-between align-items-center mb-3">
                    <div class="col-md-8">
                        <label>Discapacidad</label>
                        <div class="d-flex">
                            <input type="checkbox" id="disclaimer-yes" name="disclaimer" value="disclaimer-yes"><label for="disclaimer-yes">Sí</label>
                            <input type="checkbox" id="disclaimer-no" name="disclaimer" value="disclaimer-no"><label for="disclaimer-no">No</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h6 class="dashboard__profile__help"></h6>
                    </div>
                </div>


                <div class="row justify-content-between align-items-center mb-3">
                    <div class="col-md-8">
                        <label>Ciudad de residencia</label></br>
                        <input class="w-100" type="text" id="region" name="region" placeholder="Valparaíso">
                    </div>
                    <div class="col-md-4">
                        <h6 class="dashboard__profile__help">Punto de contacto para enviarte notificaciones de avisos de empleo y de tus postulaciones.</h6>
                    </div>
                </div>

                <hr>


                <div class="row justify-content-between align-items-center mb-5">
                    <div class="col-md-8">
                        <label>Carrera Técnica o Universitaria</label></br>
                        <input class="w-100" type="text" id="carrera" name="carrera" placeholder="Relaciones Públicas">
                    </div>
                    <div class="col-md-4">
                        <h6 class="dashboard__profile__help">Institución donde se impartieron los estudios.</h6>
                    </div>
                </div>

                <!--  <input type="submit" class="btn btn--blue"> -->

                <div class="row mb-5">
                    <div class="col-md-4 offset-md-5">
                        <button type="submit" class="btn btn--blue">Guardar los cambios</button>
                    </div>
                </div>


            </form>
        </div>
        <div class="col-md-2">
            <?php include('components/banner-vert.php'); ?>
            <?php include('components/banner-vert.php'); ?>
        </div>
    </div>
    <?php include('components/banner.php'); ?>
</article>