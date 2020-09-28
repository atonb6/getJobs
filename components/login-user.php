<section class="login">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="dash-user-home.php">
                    <div class="card login__card">
                        <h1 class="login__card__title">Inicia sesión</h1>
                        <h5 class="login__card__subtitle">Ingresa tus datos para continuar.</h5>

                        <fieldset class="login__card__fieldset d-flex flex-column text-center mx-auto mt-3">

                            <input type="email" placeholder="Email">
                            <input class="mt-3" type="password" placeholder="Password">
                            <button type="submit" class="btn btn--blue mx-auto mt-3 mb-3">Iniciar sesión</button>
<!--                             <input type="checkbox" id="disclaimer" name="disclaimer" value="disclaimer"><label for="disclaimer">Acepto los <a href="#">Términos y Condiciones </a> de GetJobs.</label>
 -->
                        </fieldset>

                        <hr>

                        <div class="row align-items-center justify-content-center mt-2">
                            <div class="col-md-5">
                                <a href="#" class="btn btn--google mr-3 d-flex align-items-center"><img class="btn__logo mr-2" src="dist/img/logo-g.svg">Ingresa con Google</a>

                            </div>
                            <div class="col-md-5">
                                <a href="#" class="btn btn--linkedin d-flex align-items-center"><img class="btn__logo mr-2" src="dist/img/logo-l.svg">Ingresa con LinkedIn</a>

                            </div>
                        </div>
                        <span class="mt-4 text-center login__card__disclaimer-txt">¿Aún no tienes una cuenta? <a href="login-new-user.php">Regístrate aquí</a></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>