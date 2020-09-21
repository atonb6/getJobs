<article class="dashboard__enterprise__publish__offer mt-4">
    <?php include('components/breadcrumb.php') ?>
    <h1 class="dashboard__profile__title black">Publicación de nueva Oferta de Trabajo</h1>
    <h2 class="mb-3 mt-3">Detalle de la Oferta</h2>

    <form>
        <hr>

        <div class="row justify-content-between align-items-center mb-3">
            <div class="col-md-6">
                <label class="dashboard__profile__label mt-2">Título<span class="end">*</span></label></br>
                <input class="w-100" type="text" id="title" name="title" placeholder="Título de la oferta" required>

                <label class="dashboard__profile__label mt-2">Publicado Por<span class="end">*</span></label></br>
                <input class="w-100" type="text" id="enterprise" name="enterprise" placeholder="Nombre de la empresa" required>

                <label class="dashboard__profile__label mt-2">Email<span class="end">*</span></label></br>
                <input class="w-100" type="text" id="email" name="email" placeholder="email@email.cl" required>

                <label class="dashboard__profile__label mt-2">Duración de trabajo</label></br>
                <input class="w-100" type="text" id="duration" name="duration" placeholder="Plazo fijo, indefinido, Por Proyecto">

            </div>
            <div class="col-md-6">

                <label class="dashboard__profile__label mt-2">Vacantes</label></br>
                <input class="w-100" type="vacancy" id="vacancy" name="vacancy" placeholder="1">

                <label class="dashboard__profile__label mt-2">Teléfono<span class="end">*</span></label></br>
                <input class="w-100" type="tel" id="phone" name="phone" placeholder="Si desea que lo contacten directamente">

                <label class="dashboard__profile__label mt-2">Inicio de contratación</label></br>
                <input class="w-100" type="text" id="contract" name="contract" placeholder="Inmediato, Una semana, Un mes">

                <label class="dashboard__profile__label mt-2">Salario</label></br>
                <input class="w-100" type="text" id="salary" name="salary" placeholder="$600.000">

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
                        <option>Venezuela</option>
                        <option>Argentina</option>
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
                <input class="mt-2" type="checkbox" id="add" name="add" value="add"><label for="add">¿Desea agregar mas preguntas?</label>
                <input class="mt-2" type="checkbox" id="add2" name="add2" value="add2"><label for="add2">¿Desea agregar mas beneficios?</label>
                <span class="mt-2">Define los beneficios que tu empresa da a los trabajadores</span>
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

        <div class="row mb-5 mt-5">
            <div class="col-md-4 offset-md-5">
                <button type="submit" class="btn btn--blue">Guardar los cambios</button>
            </div>
        </div>


    </form>
    <?php include('components/banner.php'); ?>
    </div>

    
</article>