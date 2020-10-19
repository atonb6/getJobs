<article class="dashboard__profile mt-5">
    <div class="row">
        <div class="col-md-10">
            <h1 class="black dashboard__profile__title">Mi Perfil</h1>

            <form>

                <h3>Foto de Perfil</h3>
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-8">
                        <input type="file" class="d-flex custom-file-input profilepicture mb-3">
                    </div>
                    <div class="col-md-4">
                        <h6 class="dashboard__profile__help">La foto con la que te veran los demás usuarios y empresas</h6>
                    </div>
                </div>

                <h3>Foto de Fondo</h3>
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-8">
                        <input type="file" class="d-flex custom-file-input bgpicture mb-3">
                    </div>
                    <div class="col-md-4">
                        <h6 class="dashboard__profile__help">La foto de fondo de tu perfil</h6>
                    </div>
                </div>

                <h3>Currículum Vitae</h3>

                <div class="row justify-content-between align-items-center">
                    <div class="col-md-8">
                        <input type="file" class="d-flex custom-file-input mb-3">
                        <a href="#">Descarga tu Currículum</a>
                    </div>

                    <div class="col-md-4">
                        <h6 class="dashboard__profile__help">Máximo 2MB. Formato PDF y Word.</h6>
                    </div>
                </div>

                <hr>

                <div class="row justify-content-between align-items-center mb-3">
                    <div class="col-md-8">
                        <label class="dashboard__profile__label">Nombres<span class="end">*</span></label></br>
                        <input class="w-100" type="text" id="name" name="name" placeholder="Nombres" required>
                    </div>
                    <div class="col-md-4">
                        <h6 class="dashboard__profile__help">El nombre que verán las empresas al ver tu solicitud de empleo de GetJobs.</h6>
                    </div>
                </div>

                <div class="row justify-content-between align-items-center mb-3">
                    <div class="col-md-8">
                        <label class="dashboard__profile__label">Apellidos<span class="end">*</span></label></br>
                        <input class="w-100" type="text" id="surname" name="surname" placeholder="Apellidos" required>
                    </div>
                    <div class="col-md-4">
                        <h6 class="dashboard__profile__help">El nombre que verán las empresas al ver tu solicitud de empleo de GetJobs.</h6>
                    </div>
                </div>

                <div class="row justify-content-between align-items-center mb-3">
                    <div class="col-md-8">
                        <label class="dashboard__profile__label">Rut<span class="end">*</span></label></br>
                        <input class="w-100" type="text" id="rut" name="rut" placeholder="Rut" required>
                    </div>
                    <div class="col-md-4">
                        <h6 class="dashboard__profile__help">El nombre que verán las empresas al ver tu solicitud de empleo de GetJobs.</h6>
                    </div>
                </div>


                <div class="row justify-content-between align-items-center mb-3">
                    <div class="col-md-8">
                        <label class="dashboard__profile__label">Fecha de nacimiento<span class="end">*</span></label></br>
                        <input class="w-100" type="date" id="date" name="date" required>
                    </div>
                    <div class="col-md-4">
                        <h6 class="dashboard__profile__help">El nombre que verán las empresas al ver tu solicitud de empleo de GetJobs.</h6>
                    </div>
                </div>


                <div class="row justify-content-between align-items-center mb-3">
                    <div class="col-md-8">
                        <label class="dashboard__profile__label">Email<span class="end">*</span></label></br>
                        <input class="w-100" type="text" id="email" name="email" placeholder="email@email.cl" required>
                    </div>
                    <div class="col-md-4">
                        <h6 class="dashboard__profile__help">El nombre que verán las empresas al ver tu solicitud de empleo de GetJobs.</h6>
                    </div>
                </div>

                <div class="row justify-content-between align-items-center mb-3">
                    <div class="col-md-8">
                        <label class="dashboard__profile__label">País<span class="end">*</span></label></br>
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
                        <label class="dashboard__profile__label">Ciudad</label><span class="end">*</span></br>
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
                        <label class="dashboard__profile__label">Comuna</label><span class="end">*</span></br>
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
                        <label class="dashboard__profile__label">Dirección</label></br>
                        <input class="w-100" type="text" id="address" name="address" placeholder="Emiliano Cabrera Sandoval 462">

                    </div>
                    <div class="col-md-4">
                        <h6 class="dashboard__profile__help">El nombre que verán las empresas al ver tu solicitud de empleo de GetJobs.</h6>
                    </div>
                </div>




                <div class="row justify-content-between align-items-center mb-3">
                    <div class="col-md-8">
                        <label class="dashboard__profile__label">URL Linkedin</label></br>
                        <input class="w-100" type="url" id="url" name="url" placeholder="http://linkedin/miperfil">
                    </div>
                    <div class="col-md-4">
                        <h6 class="dashboard__profile__help">El nombre que verán las empresas al ver tu solicitud de empleo de GetJobs.</h6>
                    </div>
                </div>

                <div class="row justify-content-between align-items-center mb-3">
                    <div class="col-md-8">

                        <label class="dashboard__profile__label">Teléfono de contacto<span class="end">*</span></label></br>
                        <input class="w-100" type="tel" id="phone" name="phone" placeholder="123456789">
                    </div>
                    <div class="col-md-4">
                        <h6 class="dashboard__profile__help">El nombre que verán las empresas al ver tu solicitud de empleo de GetJobs.</h6>
                    </div>
                </div>

                <div class="row align-items-center mb-3">
                    <div class="col-md-8">

                        <label class="dashboard__profile__label">Género</label><span class="end">*</span></br>
                        
                        <div class="d-flex justify-content-between">
                        <div>
                            <input class="dashboard__profile__radio" type="radio" name="gender" id="male" value="male">
                            <label class="form-check-label ml-2" for="male">Hombre</label>
                        </div>
                        <div>
                        <input class="dashboard__profile__radio" type="radio" id="female" name="gender" value="female">
                            <label class="form-check-label ml-2" for="female">Mujer</label></br>
                        </div>

                        <div>
                        <input class="dashboard__profile__radio" type="radio" id="other" name="gender" value="other">
                            <label class="form-check-label ml-2" for="other">Otro</label>
                        </div>

                        <div>
                        <input class="dashboard__profile__radio" type="radio" id="hide" name="gender" value="hide">
                            <label class="form-check-label ml-2" for="hide">Prefiero no decir</label>
                        </div>

                        </div>

                    </div>


                    <div class="col-md-4">
                        <h6 class="dashboard__profile__help"></h6>
                    </div>
                </div>

                <div class="row justify-content-between align-items-center mb-3">
                    <div class="col-md-8">
                        <label class="dashboard__profile__label">Perfil asociado a la Inclusión Laboral <a href="#">(Ley 21.015)</a><span class="end">*</span></label>
                        <div class="d-flex">
                            <input type="checkbox" id="disclaimer-yes" name="disclaimer" value="disclaimer-yes"><label for="disclaimer-yes">Sí</label>
                            <input type="checkbox" id="disclaimer-no" name="disclaimer" value="disclaimer-no"><label for="disclaimer-no">No</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h6 class="dashboard__profile__help"></h6>
                    </div>
                </div>


                <hr class="mt-5 mb-5">

                <h2 class="mb-4">Educación y experiencia</h2>

                <div class="row justify-content-between align-items-center mb-3">
                    <div class="col-md-8">
                        <label class="dashboard__profile__label">Universidad o Institución<span class="end">*</span></label></br>
                        <div class="position-relative">
                            <select class="w-100" required>
                                <option>Seleccionar</option>
                                <option>Otro</option>
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
                        <label class="dashboard__profile__label">Si seleccionó otro, cuál.<span class="end">*</span></label></br>
                        <input class="w-100" type="text" id="other" name="other" placeholder="Relaciones Públicas">
                    </div>
                    <div class="col-md-4">
                        <h6 class="dashboard__profile__help">Institución donde se impartieron los estudios.</h6>
                    </div>
                </div>

                <div class="row justify-content-between align-items-center mb-3">
                    <div class="col-md-8">
                        <label class="dashboard__profile__label">Carrera Técnica o Universitaria<span class="end">*</span></label></br>
                        <input class="w-100" type="text" id="carrera" name="carrera" placeholder="Relaciones Públicas">
                    </div>
                    <div class="col-md-4">
                        <h6 class="dashboard__profile__help">Institución donde se impartieron los estudios.</h6>
                    </div>
                </div>

                <div class="row justify-content-between align-items-center mb-3">
                    <div class="col-md-8">
                        <label class="dashboard__profile__label">Nivel Educacional</label></br>
                        <div class="position-relative">
                            <select class="w-100" required>
                                <option>Seleccionar</option>
                                <option>Básico</option>
                                <option>Enseñanza media</option>
                                <option>Técnico profesional</option>
                                <option>Profesional incompleto</option>
                                <option>Profesional completo</option>
                                <option>Diplomado</option>
                                <option>Magister</option>
                                <option>Doctorado</option>
                                <option>MBA</option>
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
                        <label class="dashboard__profile__label">Educación</label></br>
                        <textarea class="w-100"></textarea>
                    </div>
                    <div class="col-md-4">
                        <h6 class="dashboard__profile__help">Breve Resumen educativo.</h6>
                    </div>
                </div>


                <div class="row justify-content-between align-items-center mb-3">
                    <div class="col-md-8">
                        <label class="dashboard__profile__label">Experiencia Laboral</label></br>
                        <textarea class="w-100"></textarea>
                    </div>
                    <div class="col-md-4">
                        <h6 class="dashboard__profile__help">Institución donde se impartieron los estudios.</h6>
                    </div>
                </div>

                <div class="row justify-content-between align-items-center mb-3">
                    <div class="col-md-8">
                        <label class="dashboard__profile__label">Otros Cursos o Certificaciones</label></br>
                        <textarea class="w-100"></textarea>
                    </div>
                    <div class="col-md-4">
                        <h6 class="dashboard__profile__help">Institución donde se impartieron los estudios.</h6>
                    </div>
                </div>

                <div class="row justify-content-between align-items-center mb-3">
                    <div class="col-md-8">
                        <label class="dashboard__profile__label">Sobre tí</label></br>
                        <textarea class="w-100"></textarea>
                    </div>
                    <div class="col-md-4">
                        <h6 class="dashboard__profile__help">Escribe un breve resumen sobre tí.</h6>
                    </div>
                </div>

                <div class="row justify-content-between align-items-center mb-3">
                    <div class="col-md-8">
                        <label class="dashboard__profile__label">Años de Experiencia</label></br>
                        <div class="position-relative">
                            <select class="w-100" required>
                                <option>0-2 años</option>
                                <option>2-4 años</option>
                                <option>4-6 años</option>
                                <option>6-8 años</option>
                                <option>8-10 años</option>
                                <option>10 o +</option>
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

                <hr class="mt-5 mb-5">

                <h2 class="mb-4">Disponibilidad y Preferencias</h2>

                <div class="row justify-content-between align-items-center mb-3">
                    <div class="col-md-8">
                        <label class="dashboard__profile__label">Disponibilidad</label></br>
                        <div class="position-relative">
                            <select class="w-100" required>
                                <option>Inmediata</option>
                                <option>1 mes</option>
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
                        <label class="dashboard__profile__label">Pretensiones de Renta Líquida</label><span class="end">*</span></br>
                        <input class="w-100" type="number" id="salary" name="salary" placeholder="600000">

                    </div>
                    <div class="col-md-4">
                        <h6 class="dashboard__profile__help">El nombre que verán las empresas al ver tu solicitud de empleo de GetJobs.</h6>
                    </div>
                </div>



                <hr class="mt-5 mb-5">

                <h2 class="mb-4">Privacidad</h2>


                <div class="row justify-content-between mb-3">
                    <div class="col-md-6">

                        <label class="dashboard__profile__label">Compartir CV en Internet</label><span class="end">*</span></br>
                        <div class="d-flex align-items-center">
                            <input class="ml-2 dashboard__profile__radio" type="radio" name="selection" id="yes" value="yes">
                            <label class="form-check-label ml-2" for="yes">
                                Sí
                            </label>
                            <input class="ml-2 dashboard__profile__radio" type="radio" id="no" name="selection" value="no">
                            <label class="form-check-label ml-2" for="no">No</label></br>
                        </div>
                        <h6 class="dashboard__profile__help mt-3">Seleccionando Sí, tu CV queda público en Internet.</h6>
                    </div>

                    <div class="col-md-6">

                        <label class="dashboard__profile__label">Datos Anónimos a Empleadores</label><span class="end">*</span></br>
                        <div class="d-flex align-items-center">
                            <input class="ml-2 dashboard__profile__radio" type="radio" name="selection" id="yes" value="yes">
                            <label class="form-check-label ml-2" for="yes">
                                Si
                            </label>
                            <input class="ml-2 dashboard__profile__radio" type="radio" id="no" name="selection" value="no">
                            <label class="form-check-label ml-2" for="no">No</label></br>
                        </div>
                        <h6 class="dashboard__profile__help mt-3">Seleccionando Sí, datos de contacto serán mostrados solo si usted lo aprueba</h6>
                    </div>

                </div>


                <!--  <input type="submit" class="btn btn--blue"> -->

                <div class="row mb-5 mt-5">
                    <div class="col-md-4 offset-md-5">
                        <button type="submit" class="btn btn--blue">Guardar los cambios</button>
                    </div>
                </div>

                <a href="#">Dar de baja mi cuenta</a>


            </form>
        </div>
        <div class="col-md-2">
            <?php include('components/banner-vert.php'); ?>
            <?php include('components/banner-vert.php'); ?>
        </div>
    </div>
    <?php include('components/banner.php'); ?>
</article>