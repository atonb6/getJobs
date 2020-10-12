<article class="dashboard__enterprise__applicants dashboard__profile mt-4">
    <?php include('components/breadcrumb.php') ?>
    <h1 class="dashboard__profile__title mt-3 black ">Listado de Cv's guardados</h1>
    <div class="row">
        <div class="col-md-12">
            <div class="dashboard__enterprise__applicants__info">
                <div class="row align-items-center mt-3">
                    <div class="col-md-12">

                        <label class="dashboard__profile__label">Elegir Categoría</label></br>
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
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="row justify-content-end">
                                    <a class="btn btn--blue d-flex align-items-center" href="#"><span class="material-icons mr-2">
                                            bar_chart
                                        </span>Exportar a Excel</a>
                                </div>
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

                                    <th>Categoría</th>
                                    <th>Categorizar</th>
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
                                            -
                                        </td>
                                        <td>
                                            <div class="position-relative">
                                                <select class="w-100">
                                                    <option>Categorizar</option>
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