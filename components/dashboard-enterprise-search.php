<div class="dashboard__enterprise__search dashboard__enterprise__applicants dashboard__profile mt-4">
    <?php include('components/breadcrumb.php') ?>
    <h1 class="dashboard__profile__title mt-3 black ">Buscador de Talentos</h1>


    <form action="">
        <div class="row mt-3 align-items-center">
            <div class="col-md-10">
                <input class="search__input mr-3 w-100" type="text" placeholder="Buscar mensajes...">
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn--blue  w-100">Buscar</button>
            </div>
        </div>
    </form>

    <div class="row mt-3">
        <div class="col-md-12">
            <div class="row">
                <div class="col select__icon">
                    <!-- <label>Sexo</label> -->
                    <select class="select select--input-filter w-100" name="industria">
                        <option value="value1">Industria</option>
                        <option value="value2">Alimentos</option>
                        <option value="value2">Alimentos</option>
                        <option value="value2">Alimentos</option>
                    </select>
                    <span class="material-icons chevron">
                        expand_more
                    </span>
                </div>

                <div class="col select__icon">
                    <!-- <label>Experiencia</label> -->
                    <select class="select select--input-filter w-100" name="area">
                        <option value="value1">Área</option>
                        <option value="value1">Gerencia General</option>
                        <option value="value1">Gerencia General</option>
                    </select>
                    <span class="material-icons chevron">
                        expand_more
                    </span>
                </div>
                <div class="col select__icon">
                    <!-- <label>Estudios</label> -->
                    <select class="select select--input-filter w-100" name="nivelcargo">
                        <option value="value1">Nivel de Cargo</option>
                        <option value="value2">C-Level / Directivos</option>
                    </select>
                    <span class="material-icons chevron">
                        expand_more
                    </span>
                </div>
                <div class="col select__icon">
                    <!-- <label>Ciudad</label> -->
                    <select class="select select--input-filter w-100" name="region">
                        <option value="value1">Región</option>
                        <option value="value2">Región de Arica y Parinacota</option>
                        <option value="value2">Región de Arica y Parinacota</option>
                        <option value="value2">Región de Arica y Parinacota</option>
                        <option value="value2">Región de Arica y Parinacota</option>
                    </select>
                    <span class="material-icons chevron">
                        expand_more
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-12">
            <div class="dashboard__enterprise__published__table__body dashboard__enterprise__applicants__info__box">
                <table id="dashboard__enterprise__published__table__tbl">
                    <thead>
                        <tr>
                            <th></th>
                            <th></th>
                            <th>Postulante</th>

                            <th>Categoría</th>
                            <th>Categorizar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i = 1; $i <= 4; $i++) : ?>
                        <tr>
                            <td><img src="http://placeimg.com/600/600" alt="profile__picture"></td>
                            <td class="text-center"><a class="btn btn--blue" href="dash-enterprise-cv.php">Ver<span
                                        class="ml-3 material-icons ml-1">
                                        visibility
                                    </span></a></td>
                            <td>
                                <h3 class="">
                                    <stron>Nombre de postulante</stron>
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
    <?php include('components/banner.php'); ?>
</div>
