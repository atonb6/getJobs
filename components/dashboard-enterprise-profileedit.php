<article class="dashboard__profile mt-5">
    <div class="row">
        <div class="col-md-10">
            <h1 class="black dashboard__profile__title">Perifl Empresa</h1>

            <form>

                <h3>Logo empresa</h3>
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
                        <input type="file" class="d-flex custom-file-input profilepicture mb-3">
                    </div>
                    <div class="col-md-4">
                        <h6 class="dashboard__profile__help">La foto de fondo de tu perfil</h6>
                    </div>
                </div>

                <hr>

                <div class="row justify-content-between align-items-center mb-3">
                    <div class="col-md-12">
                        <label class="dashboard__profile__label">Nombre Empresa<span class="end">*</span></label></br>
                        <input class="w-100" type="text" id="enterprise" name="enterprise" placeholder="Empresa" required>
                    </div>
                </div>

                <div class="row justify-content-between align-items-center mb-3">
                    <div class="col-md-12">
                        <label class="dashboard__profile__label">País<span class="end">*</span></label></br>
                        <div class="position-relative">
                            <select class="w-100" required>
                                <option>Santiago</option>
                                <option>Sodoma</option>
                                <option>Gomorra</option>
                            </select>
                            <span class="material-icons chevron">
                                expand_more
                            </span>
                        </div>

                    </div>
                </div>
                <div class="row justify-content-between align-items-center mb-3">
                    <div class="col-md-12">
                        <label class="dashboard__profile__label">Ciudad<span class="end">*</span></label></br>
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
                </div>

                <div class="row justify-content-between align-items-center mb-3">
                    <div class="col-md-12">
                        <label class="dashboard__profile__label">Rubro<span class="end">*</span></label></br>
                        <input class="w-100" type="text" id="rubro" name="rubro" placeholder="Rubro" required>
                    </div>
                </div>


                <div class="row justify-content-between align-items-center mb-3">
                    <div class="col-md-12">
                        <label class="dashboard__profile__label">URL</label></br>
                        <input class="w-100" type="urlenterprise" id="urlenterprise" name="urlenterprise" placeholder="www.miempresa.cl">
                    </div>
                </div>

                <hr class="mt-5 mb-5">

                
                <div class="row justify-content-between align-items-center mb-3">
                    <div class="col-md-12">
                        <label class="dashboard__profile__label">Resumen</label></br>
                        <textarea class="w-100"></textarea>
                    </div>
                </div>

                <!--  <input type="submit" class="btn btn--blue"> -->

                <div class="row mb-5 mt-5">
                    <div class="col-md-4 offset-md-5">
                        <button type="submit" class="btn btn--blue">Guardar los cambios</button>
                    </div>
                </div>

                <a href="#">Dar de baja la cuenta</a>


            </form>
        </div>
        <div class="col-md-2">
            <?php include('components/banner-vert.php'); ?>
            <?php include('components/banner-vert.php'); ?>
        </div>
    </div>
    <?php include('components/banner.php'); ?>
</article>