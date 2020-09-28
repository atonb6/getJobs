<section class="login login--new">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="dash-user-home.php">
                    <div class="card login__card">
                        <h1 class="login__card__title">Crear Usuario</h1>
                        <h5 class="login__card__subtitle">Ingresa tus datos</h5>

                        <fieldset class="login__card__fieldset d-flex flex-column text-center mx-auto mt-3">

                            <div class="row text-left">
                                <div class="col-md-6">
                                    <input class="mt-3" type="text" placeholder="Nombre" required>
                                    <input class="mt-3" type="date" placeholder="Fecha de Nacimiento"  required>
                                    <input class="mt-3" type="email" placeholder="Email"  required>
                                    <input class="mt-3" type="email" placeholder="confirmar Email"  required>
                                    <input class="mt-3" type="text" placeholder="Rut"  required>
                                </div>
                                <div class="col-md-6">
                                    <input class="mt-3" type="text" placeholder="Apellido"  required>
                                    <input class="mt-3" type="password" placeholder="Password"  required>
                                    <input class="mt-3" type="password" placeholder="Confirmar Password"  required>
                                    <input class="mt-3" type="number" placeholder="Número telefónico"  required>
                                </div>
                            </div>


                            <button type="submit" class="btn btn--blue mx-auto mt-3 mb-3">Crear Usuario</button>
                            <input type="checkbox" id="disclaimer" name="disclaimer" value="disclaimer"><label for="disclaimer">Acepto los &nbsp<a href="#"> Términos y Condiciones </a>&nbsp de GetJobs.</label>

                        </fieldset>

                        <hr>

                        <div class="row align-items-center justify-content-center mt-2">
                            <div class="col-md-5">
                                <a href="#" class="btn btn--google mr-3 d-flex align-items-center"><img class="btn__logo mr-2" src="dist/img/logo-g.svg">Crear con Google</a>

                            </div>
                            <div class="col-md-5">
                                <a href="#" class="btn btn--linkedin d-flex align-items-center"><img class="btn__logo mr-2" src="dist/img/logo-l.svg">Crear  con LinkedIn</a>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>