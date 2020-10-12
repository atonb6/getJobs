<article class="dashboard__enterprise__publish__offer mt-4">
    <?php include('components/breadcrumb.php') ?>
    <h1 class="dashboard__profile__title black">Publicación de nueva Oferta de Trabajo</h1>
    <h2 class="mb-3 mt-3">Detalle de la Oferta</h2>

    <form>
        <hr>

        <div class="row justify-content-between mb-3">
            <div class="col-md-6">
                <label class="dashboard__profile__label mt-2">Título<span class="end">*</span></label></br>
                <input class="w-100" type="text" id="title" name="title" placeholder="Título de la oferta" required>

                <label class="dashboard__profile__label mt-2">Publicado Por<span class="end">*</span></label></br>
                <input class="w-100" type="text" id="enterprise" name="enterprise" placeholder="Nombre de la empresa" required>

                <label class="dashboard__profile__label mt-2">Email<span class="end">*</span></label></br>
                <input class="w-100" type="text" id="email" name="email" placeholder="email@email.cl" required>

                <label class="dashboard__profile__label mt-2">Duración de trabajo</label></br>
                <input class="w-100" type="text" id="duration" name="duration" placeholder="Plazo fijo, indefinido, Por Proyecto">

                <div class="mt-3">
                    <input type="checkbox" id="gjexp" name="gjexp" value="gjexp"><label for="gjexp">¿Desea que pueda postular con GetJobs Express?<span data-toggle="tooltip" data-placement="top" title="" data-original-title="Permite al interesado hacer una postulación rápida con preguntas básicas" class="material-icons">
                            help
                        </span></label>
                </div>
            </div>
            <div class="col-md-6">

                <label class="dashboard__profile__label mt-2">Vacantes</label></br>
                <input class="w-100" type="vacancy" id="vacancy" name="vacancy" placeholder="1">

                <label class="dashboard__profile__label mt-2">Teléfono<span class="end">*</span></label></br>
                <input class="w-100" type="tel" id="phone" name="phone" placeholder="Si desea que lo contacten directamente">

                <label class="dashboard__profile__label mt-2">Inicio de contratación</label></br>
                <input class="w-100" type="text" id="contract" name="contract" placeholder="Inmediato, Una semana, Un mes">

                <label class="dashboard__profile__label mt-2">Salario Bruto<span class="end">*</span></label></br>
                <input class="w-100" type="text" id="salary" name="salary" placeholder="$600.000">
                <div class="mt-3">
                    <input type="checkbox" id="public" name="public" value="public"><label for="public">¿Desea hacer público el salario?</label>
                </div>

                <label class="dashboard__profile__label mt-2">Rango salarial Líquido<span class="end">*</span></label></br>
                <div class="position-relative">
                    <select class="w-100 mt-2" required>
                        <option>[min-max]</option>
                        <option>0-$350.000</option>
                        <option>$350.000 - $500.000</option>
                        <option>$500.000 - $700.000</option>
                        <option>$700.000 - $1.000.000</option>
                        <option>$1.000.000 - $1.500.000</option>
                        <option>$1.200.000 - $2.000.000</option>
                        <option>$2.000.000 - $3.000.000</option>
                        <option>$3.000.000 - $5.000.000</option>
                        <option>Más de $5.000.000</option>
                    </select>
                    <span class="material-icons chevron">
                        expand_more
                    </span>
                </div>
                <h6>Recuerde que los usuarios Premium tienen acceso a saber si se encuentran dentro del rango salarial, pero no a saber la renta ofrecida.</h6>


            </div>
        </div>


        <hr class="mt-5 mb-3">

        <h2 class="mb-4">Anuncio</h2>

        <div class="row justify-content-between  mb-3">
            <div class="col-md-6">

                <label class="dashboard__profile__label">Ciudad<span class="end">*</span></label></br>
                <div class="position-relative">
                    <select class="w-100" required>
                        <option>[Elegir]</option>
                        <option>Chile</option>
                        <option>Venezuela</option>
                        <option>Argentina</option>
                    </select>
                    <span class="material-icons chevron">
                        expand_more
                    </span>
                </div>

                <label class="dashboard__profile__label">Área</label></br>
                <div class="position-relative">
                    <select class="w-100" required>
                        <option>[Elegir]</option>
                        <option>Venezuela</option>
                        <option>Argentina</option>
                    </select>
                    <span class="material-icons chevron">
                        expand_more
                    </span>
                </div>

                <label class="dashboard__profile__label">Oferta Privada<span class="end">*</span></label></br>
                <div class="position-relative">
                    <select class="w-100" required>
                        <option>Sí</option>
                        <option>No</option>
                    </select>
                    <span class="material-icons chevron">
                        expand_more
                    </span>
                </div>


                <label class="dashboard__profile__label">Recibir postulaciones por correo</label></br>
                <div class="position-relative">
                    <select class="w-100" required>
                        <option>Sí</option>
                        <option>No</option>
                    </select>
                    <span class="material-icons chevron">
                        expand_more
                    </span>
                </div>

                <label class="dashboard__profile__label">Industria</label></br>
                <div class="position-relative">
                    <select class="w-100" required>
                        <option>[Elegir]</option>
                        <option>Venezuela</option>
                        <option>Argentina</option>
                    </select>
                    <span class="material-icons chevron">
                        expand_more
                    </span>
                </div>


            </div>
            <div class="col-md-6">
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
                <label class="dashboard__profile__label">Región</label></br>
                <div class="position-relative">
                    <select class="w-100" required>
                        <option>[Elegir]</option>
                        <option>Venezuela</option>
                        <option>Argentina</option>
                    </select>
                    <span class="material-icons chevron">
                        expand_more
                    </span>
                </div>
                <label class="dashboard__profile__label">Tipo Trabajo<span class="end">*</span></label></br>
                <div class="position-relative">
                    <select class="w-100" required>
                        <option>[Elegir]</option>
                        <option>Full-time</option>
                        <option>Part-time</option>
                        <option>Part-time & Full-time</option>
                        <option>Freelance</option>
                        <option>Consultor</option>
                    </select>
                    <span class="material-icons chevron">
                        expand_more
                    </span>
                </div>
                <label class="dashboard__profile__label">Ocultar Email</label></br>
                <div class="position-relative">
                    <select class="w-100" required>
                        <option>Sí</option>
                        <option>No</option>
                    </select>
                    <span class="material-icons chevron">
                        expand_more
                    </span>
                </div>
                <label class="dashboard__profile__label">¿Oferta elegible ley inclusión?</label></br>
                <div class="position-relative">
                    <select class="w-100" required>
                        <option>Sí</option>
                        <option>No</option>
                    </select>
                    <span class="material-icons chevron">
                        expand_more
                    </span>
                </div>
                <label class="dashboard__profile__label">Nivel Cargo</label></br>
                <div class="position-relative">
                    <select class="w-100" required>
                        <option>[Elegir]</option>
                        <option>Venezuela</option>
                        <option>Argentina</option>
                    </select>
                    <span class="material-icons chevron">
                        expand_more
                    </span>
                </div>
            </div>
        </div>

        <hr class="mt-5 mb-3">

        <h2 class="mb-4">Preguntas</h2>
        <div class="row">
            <div class="col-md-6">
                <label class="dashboard__profile__label">Solicitar pretensión de renta</label></br>
                <div class="position-relative">
                    <select class="w-100" required>
                        <option>Sí</option>
                        <option>No</option>
                    </select>
                    <span class="material-icons chevron">
                        expand_more
                    </span>
                </div>
            </div>
            <div class="col-md-6">
                <label class="dashboard__profile__label">Solicitar disponibilidad</label></br>
                <div class="position-relative">
                    <select class="w-100" required>
                        <option>Sí</option>
                        <option>No</option>
                    </select>
                    <span class="material-icons chevron">
                        expand_more
                    </span>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-12">
                <input class="mt-2" type="checkbox" id="add" name="add" value="add"><label for="add">¿Desea agregar más preguntas?</label>
            </div>
        </div>
        <h2 class="mb-4 mt-3">Preguntas Opcionales</h2>

        <div class="row mt-3">
            <div class="col-md-6">
                <label class="dashboard__profile__label">Pregunta 1</label></br>
                <textarea class="w-100" placeholder="Ingresa tu pregunta"></textarea>
                <label class="dashboard__profile__label mt-3">Pregunta 2</label></br>
                <textarea class="w-100" placeholder="Ingresa tu pregunta"></textarea>
            </div>
            <div class="col-md-6">
                <label class="dashboard__profile__label">Pregunta 3</label></br>
                <textarea class="w-100" placeholder="Ingresa tu pregunta"></textarea>
                <label class="dashboard__profile__label mt-3">Pregunta 4</label></br>
                <textarea class="w-100" placeholder="Ingresa tu pregunta"></textarea>
            </div>
        </div>

        <hr class="mt-5 mb-3">




        <div class="row mt-3">
            <div class="col-md-12">
                <input class="mt-2" type="checkbox" id="add2" name="add2" value="add2"><label for="add2">¿Desea agregar más beneficios?</label>
                <span class="mt-2 mb-2">Define los beneficios que tu empresa da a los trabajadores</span>
            </div>
        </div>

        <div class="row mt-3 justify-content-center text-center">
            <div class="col-md-4 col-sm-3 col-6">
                <div class="btn btn--benefits mb-2">
                    <span class="material-icons icons-work">
                        computer
                    </span>
                </div>
                <p>La empresa entrega equipo de trabajo</p>
            </div>
            <div class="col-md-4 col-sm-3 col-6">
                <div class="btn btn--benefits mb-2">
                    <span class="material-icons icons-work">
                        pets
                    </span>
                </div>
                <p>Se puede ir con mascotas</p>
            </div>
            <div class="col-md-4 col-sm-3 col-6">
                <div class="btn btn--benefits mb-2">
                    <span class="material-icons icons-work">
                        directions_bike
                    </span>
                </div>
                <p>Estacionamiento de bicicletas</p>
            </div>
            <div class="col-md-4 col-sm-3 col-6">
                <div class="btn btn--benefits mb-2">
                    <span class="material-icons icons-work">
                        wifi
                    </span>
                </div>
                <p>Wifi de alta velocidad y libre</p>
            </div>
            <div class="col-md-4 col-sm-3 col-6">
                <div class="btn btn--benefits mb-2">
                    <span class="material-icons icons-work">
                        fastfood
                    </span>
                </div>
                <p>Snacks y café grátis</p>
            </div>
            <div class="col-md-4 col-sm-3 col-6">
                <div class="btn btn--benefits mb-2">
                    <span class="material-icons icons-work">
                        public
                    </span>
                </div>
                <p>Trabajo 100% Remoto</p>
            </div>
            <div class="col-md-4 col-sm-3 col-6">
                <div class="btn btn--benefits mb-2">
                    <span class="material-icons icons-work">
                        work_outline
                    </span>
                </div>
                <p>Trabajo Remoto Opcional</p>
            </div>
            <div class="col-md-4 col-sm-3 col-6">
                <div class="btn btn--benefits mb-2">
                    <span class="material-icons icon-Uniforme"></span>
                </div>
                <p>Uniforme</p>
            </div>
            <div class="col-md-4 col-sm-3 col-6">
                <div class="btn btn--benefits mb-2">
                    <span class="material-icons">
                        local_dining
                    </span>
                </div>
                <p>Casino</p>
            </div>
            <div class="col-md-4 col-sm-3 col-6">
                <div class="btn btn--benefits mb-2">
                    <span class="material-icons">
                        local_hospital
                    </span>
                </div>
                <p>Mutual de Seguridad</p>
            </div>
            <div class="col-md-4 col-sm-3 col-6">
                <div class="btn btn--benefits mb-2">
                    <span class="material-icons icon-CajaCompensacion"></span> </div>
                <p>Caja de Compensación</p>
            </div>
            <div class="col-md-4 col-sm-3 col-6">
                <div class="btn btn--benefits mb-2">
                    <span class="material-icons">
                        healing
                    </span>
                </div>
                <p>Seguro de salud</p>
            </div>
            <div class="col-md-4 col-sm-3 col-6">
                <div class="btn btn--benefits mb-2">
                    <span class="material-icons">
                        directions_bus
                    </span>
                </div>
                <p>Bus de acercamiento</p>
            </div>
            <div class="col-md-4 col-sm-3 col-6">
                <div class="btn btn--benefits mb-2">
                    <span class="material-icons icon-SeguroVida"></span> </div>
                <p>Seguro de vida</p>
            </div>
            <div class="col-md-4 col-sm-3 col-6">
                <div class="btn btn--benefits mb-2">
                    <span class="material-icons icon-Vestimenta"></span> </div>
                <p>Vestimenta informal</p>
            </div>
            <div class="col-md-4 col-sm-3 col-6">
                <div class="btn btn--benefits mb-2">
                    <span class="material-icons">
                        beach_access
                    </span>
                </div>
                <p>Vacaciones Extra</p>
            </div>
            <div class="col-md-4 col-sm-3 col-6">
                <div class="btn btn--benefits mb-2">
                    <span class="material-icons">
                        watch
                    </span>
                </div>
                <p>Horario Flexible</p>
            </div>
            <div class="col-md-4 col-sm-3 col-6">
                <div class="btn btn--benefits mb-2">
                    <span class="material-icons icon-Dentista"></span> </div>
                <p>Seguro dental</p>
            </div>
            <div class="col-md-4 col-sm-3 col-6">
                <div class="btn btn--benefits mb-2">
                    <span class="material-icons">
                        cake
                    </span>
                </div>
                <p>Día de cumpleaños libre</p>
            </div>
            <div class="col-md-4 col-sm-3 col-6">
                <div class="btn btn--benefits mb-2">
                    <span class="material-icons">
                        event
                    </span>
                </div>
                <p>Días administrativos</p>
            </div>
            <div class="col-md-4 col-sm-3 col-6">
                <div class="btn btn--benefits mb-2">
                    <span class="material-icons">
                        school
                    </span>
                </div>
                <p>Capacitaciones</p>
            </div>
            <div class="col-md-4 col-sm-3 col-6">
                <div class="btn btn--benefits mb-2">
                    <span class="material-icons">
                    directions_car
                    </span>
                </div>
                <p>Estacionamiento</p>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-12">
                <label class="dashboard__profile__label">Descripción Oferta<span class="end">*</span></label></br>
                <textarea class="w-100"></textarea>
            </div>
        </div>

        <hr class="mt-5 mb-5">


        <!--  <input type="submit" class="btn btn--blue"> -->

        <div class="row justify-content-between mb-5 mt-5">
            <div class="col-md-6 text-center">
                <button type="reset" class="btn btn--border-blue">Cancelar Publicación</button>
            </div>
            <div class="col-md-6 text-center">

                <button type="submit" class="btn btn--blue">Finalizar y publicar oferta</button>
            </div>
        </div>


    </form>
    <?php include('components/banner.php'); ?>
    </div>


</article>