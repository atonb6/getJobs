<article class="dashboard__profile mt-5">
    <div class="row">
        <div class="col-md-10">
            <h1 class="black dashboard__profile__title">Getjobs Express</h1>
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

                </hr>

                <article class="results__info__block">
                    <!-- <h2 class="mt-4">Preguntas</h2> -->

                    <h3 class="mt-4 mb-2">Carta de presentación</h3>
                    <h6 class="dashboard__profile__help mt-3 mb-3">Pequeña descripción de tus habilidades y capacidades laborales, así como de tus logros sobresalientes</h6>


                    <textarea name="" id="" cols="100%" rows="5" maxlength="1000"></textarea>
                    <h6 class="dashboard__profile__help text-right mb-3">Hasta 1000 caracteres.</h6>
                    
                    <h3 class="mt-4 mb-2">¿Cual piensas seria tu aporte que generaría valor a la empresa?</h3>
                    <h6 class="dashboard__profile__help mt-3 mb-3">Cuentanos que podrías aportar dentro de tus capacidades, forma de trabajo o experiencia.</h6>


                    <textarea name="" id="" cols="100%" rows="5" maxlength="1000"></textarea>
                    <h6 class="dashboard__profile__help text-right mb-3">Hasta 1000 caracteres.</h6>

                </article>

                <!--  <input type="submit" class="btn btn--blue"> -->

                <div class="row mb-5 justify-content-end mt-5">
                    <div class="col-md-4 text-right">
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