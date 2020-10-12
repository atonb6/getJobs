<article class="dashboard__enterprise__applicants dashboard__profile mt-4">
    <?php include('components/breadcrumb.php') ?>
    <h1 class="dashboard__profile__title mt-3 black ">Listado de candidatos (título de cargo)</h1>
    <div class="row">
        <div class="col-md-12">
            <div class="dashboard__enterprise__applicants__info">
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="dashboard__profile__label">Estado</label></br>
                                <div class="position-relative">
                                    <select class="select select--input w-100" name="state">
                                        <option>Todos</option>
                                        <option>Pre Seleccionados</option>
                                        <option>Seleccionados</option>
                                        <option>No Seleccionado</option>
                                        <option>Pendiente</option>
                                    </select>
                                    <span class="material-icons chevron">
                                        expand_more
                                    </span>
                                </div>
                                <label class="dashboard__profile__label">País orígen</label></br>
                                <div class="position-relative">
                                    <select class="select select--input w-100" name="country">
                                        <option>Indiferente</option>
                                    </select>
                                    <span class="material-icons chevron">
                                        expand_more
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">

                                <label class="dashboard__profile__label">Respuestas</label></br>
                                <div class="position-relative">
                                    <select class="select select--input w-100" name="answers">
                                        <option>Todas</option>
                                        <option>Todas</option>
                                        <option>Algunas</option>
                                        <option>Ninguna</option>
                                    </select>
                                    <span class="material-icons chevron">
                                        expand_more
                                    </span>
                                </div>
                                <label class="dashboard__profile__label">Sexo</label></br>
                                <div class="position-relative">
                                    <select class="select select--input w-100" name="sex">
                                        <option>Cualquiera</option>
                                        <option>Hombre</option>
                                        <option>Mujer</option>
                                        <option>Otro</option>
                                    </select>
                                    <span class="material-icons chevron">
                                        expand_more
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-12 d-flex justify-content-between">
                                        <a class="btn btn--blue d-flex align-items-center" href="#"><span class="material-icons mr-2">
                                                bar_chart
                                            </span>Exportar a Excel</a>
                                        <a class="btn btn--yellow d-flex align-items-center black" href="#"><span class="material-icons mr-2">
                                                archive
                                            </span>Exportar CV's en Zip</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <div class="dashboard__enterprise__applicants__info__box">
                            <h2>Título de Cargo</h2>
                            <h4 class="d-flex align-items-center">2019-04-14 19:53:03 / Santiago | <span class="material-icons ml-1">
                                    date_range
                                </span></h4>
                            <h3 class="d-flex align-items-center"><strong>Vistas: </strong>1433 <span class="material-icons ml-1">
                                    visibility
                                </span></h3>
                            <h3 class="d-flex align-items-center"><strong>Candidatos: </strong>112<span class="material-icons ml-1">
                                    account_circle
                                </span></h3>
                            <h3><strong>Sueldo Promedio Candidatos: </strong>$600.000</h3>
                            <h3><strong>Cantidad de preguntas: </strong>0</h3>

                            <label class="dashboard__profile__label mt-3">Ordenar Por</label></br>
                                <div class="position-relative">
                                    <select class="select select--input w-100" name="orderby">
                                        <option>Fecha, Más Nuevos</option>
                                        <option>Fecha, Más Antiguos</option>
                                        <option>Renta Mayor a Menor</option>
                                        <option>Renta Menor a Mayor</option>
                                        <option>Visualizados</option>
                                        <option>No Visualizados</option>
                                    </select>
                                    <span class="material-icons chevron">
                                        expand_more
                                    </span>
                                </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-12">
                    <div class="dashboard__enterprise__published__table__body dashboard__enterprise__applicants__info__box">
                        <table id="dashboard__enterprise__published__table__tbl">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th>Candidato</th>
                                    <th>Detalle Postulación</th>
                                    <th>Status</th>
                                    <th>Visto</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 1; $i <= 4; $i++) : ?>
                                    <tr>
                                        <td><img src="https://placeimg.com/600/600" alt="profile__picture"></td>
                                        <td class="text-center"><a class="btn btn--blue" href="dash-enterprise-cv.php">Ver<span class="ml-3 material-icons ml-1">
                                                    visibility
                                                </span></a></td>
                                        <td>
                                            <h3 class="">
                                                <stron>Nombre de candidato</stron>
                                            </h3>
                                            <h4 class="d-flex align-items-center">Edad: 55 años</h4>
                                            <a href="mailto:correo@gmail.com" class="d-flex align-items-center">correo@gmail.com</a>
                                        </td>
                                        <td>
                                            <h3 class="black"><strong>Fecha:</strong> 2019-06-18</h3>
                                            <h3 class="black"><strong>Disponibilidad:</strong> Inmediata</h3>
                                            <h3 class="black"><strong>Renta:</strong> $600.000</h3>
                                        </td>
                                        <td>
                                            -
                                        </td>
                                        <td>
                                            <div class="position-relative">
                                                <select class="w-100">
                                                    <option>Acción</option>
                                                    <option>Pre-Seleccionar</option>
                                                    <option>No Seleccionar</option>
                                                    <option>Pendiente</option>
                                                </select>
                                                <span class="material-icons chevron">
                                                    expand_more
                                                </span>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endfor ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <?php include('components/banner.php'); ?>
</article>