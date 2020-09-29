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
                    <input type="checkbox" id="gjexp" name="gjexp" value="gjexp"><label for="gjexp">¿Desea que pueda postular con GetJob Express?<span data-toggle="tooltip" data-placement="top" title="" data-original-title="Permite al interesado hacer una postulación rápida con preguntas básicas" class="material-icons">
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

                <label class="dashboard__profile__label mt-2">Salario Bruto</label></br>
                <input class="w-100" type="text" id="salary" name="salary" placeholder="$600.000">
                <div class="mt-3">
                    <input type="checkbox" id="public" name="public" value="public"><label for="public">¿Desea hacer público el salario?</label>
                </div>

                <label class="dashboard__profile__label mt-2">Rango salarial Líquido*</br>
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
            <div class="col-md-4">
                <div class="btn btn--benefits mb-2">
                    <span class="material-icons icons-work">
                        computer
                    </span>
                </div>
                <p>La empresa entrega equipo de trabajo</p>
            </div>
            <div class="col-md-4">
                <div class="btn btn--benefits mb-2">
                    <span class="material-icons icons-work">
                        pets
                    </span>
                </div>
                <p>Se puede ir con mascotas</p>
            </div>
            <div class="col-md-4">
                <div class="btn btn--benefits mb-2">
                    <span class="material-icons icons-work">
                        directions_bike
                    </span>
                </div>
                <p>Estacionamiento de bicicletas</p>
            </div>
            <div class="col-md-4">
                <div class="btn btn--benefits mb-2">
                    <span class="material-icons icons-work">
                        wifi
                    </span>
                </div>
                <p>Wifi de alta velocidad y libre</p>
            </div>
            <div class="col-md-4">
                <div class="btn btn--benefits mb-2">
                    <span class="material-icons icons-work">
                        fastfood
                    </span>
                </div>
                <p>Snacks y café grátis</p>
            </div>
            <div class="col-md-4">
                <div class="btn btn--benefits mb-2">
                    <span class="material-icons icons-work">
                        public
                    </span>
                </div>
                <p>Trabajo 100% Remoto</p>
            </div>
            <div class="col-md-4">
                <div class="btn btn--benefits mb-2">
                    <span class="material-icons icons-work">
                        work_outline
                    </span>
                </div>
                <p>Trabajo Remoto Opcional</p>
            </div>
            <div class="col-md-4">
                <div class="btn btn--benefits mb-2">
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDQ0OC4wMDEgNDQ4IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIgNTEyIiB4bWw6c3BhY2U9InByZXNlcnZlIiBjbGFzcz0iIj48Zz48cGF0aCB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGQ9Im0yMjQgNjcuMzEyNS0xMi42ODc1IDEyLjY4NzVoMjUuMzc1em0wIDAiIGZpbGw9IiMyMTI1MjkiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD48cGF0aCB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGQ9Im00NDggMjAwdi0xMTkuNzU3ODEyYy4wMjczNDQtNi41MzkwNjMtMy45Njg3NS0xMi40MTc5NjktMTAuMDU0Njg4LTE0LjgwMDc4MmwtMTAyLjAxNTYyNC0zMy4wMzEyNWMtLjgwMDc4Mi0uMjgxMjUtMS42NDA2MjYtLjQxNzk2OC0yLjQ4ODI4Mi0uNDEwMTU2aC0yLjQwMjM0NGwtNjkuNzI2NTYyIDYxLjk4NDM3NWMtMy4xNjc5NjkgMi44MDg1OTQtNy45NzI2NTYgMi42Njc5NjktMTAuOTY4NzUtLjMyODEyNWwtMi4yNDYwOTQtMi4yNDYwOTQgNy45MDIzNDQgMzAwLjM4MjgxM2MuMDU4NTk0IDIuMTkxNDA2LS43ODkwNjIgNC4zMTI1LTIuMzQzNzUgNS44NjMyODFsLTI0IDI0Yy0zLjEyNSAzLjEyNS04LjE4NzUgMy4xMjUtMTEuMzEyNSAwbC0yNC0yNGMtMS41NTA3ODEtMS41NTA3ODEtMi4zOTg0MzgtMy42NzE4NzUtMi4zNDM3NS01Ljg2MzI4MWw3LjkwNjI1LTMwMC4zODI4MTMtMi4yNSAyLjI0NjA5NGMtMi45OTIxODggMi45OTYwOTQtNy44MDA3ODEgMy4xMzY3MTktMTAuOTY4NzUuMzI4MTI1bC02OS43MjY1NjItNjEuOTg0Mzc1aC0yLjM5ODQzOGMtLjc4NTE1Ni0uMDExNzE5LTEuNTY2NDA2LjEwNTQ2OS0yLjMxMjUuMzQzNzVsLTEwMi42NDg0MzggMzMuMjU3ODEyYy01Ljg3NSAyLjQ4MDQ2OS05LjY2Nzk2ODIgOC4yNjE3MTktOS42MDE1NjIgMTQuNjQwNjI2djExOS43NTc4MTJoNjR2LTQ4aDE2djI5NmgyODh2LTI5NmgxNnY0OHptMCAwIiBmaWxsPSIjMjEyNTI5IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIj48L3BhdGg+PHBhdGggeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiBkPSJtMjI0IDQwNC42ODc1IDE1LjkxNDA2Mi0xNS45MTAxNTYtNy43MDcwMzEtMjkyLjc3NzM0NGgtMTYuNDE0MDYybC03LjcwMzEyNSAyOTIuNzc3MzQ0em0wIDAiIGZpbGw9IiMyMTI1MjkiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD48cGF0aCB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGQ9Im0xMzAuODI0MjE5IDIyLjkxNDA2MiA2MC44NTU0NjkgNTQuMDkzNzUgMjAuMzQzNzUtMjAuMzQzNzUtNjYuNTc0MjE5LTUzLjI2MTcxOHptMCAwIiBmaWxsPSIjMjEyNTI5IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIj48L3BhdGg+PHBhdGggeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiBkPSJtMjI0IDQ1Ljc1MzkwNiA1Ny4xOTE0MDYtNDUuNzUzOTA2aC0xMTQuMzgyODEyem0wIDAiIGZpbGw9IiMyMTI1MjkiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD48cGF0aCB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGQ9Im0yNTYuMzIwMzEyIDc3LjAwNzgxMiA2MC44NTU0NjktNTQuMDkzNzUtMTQuNjIxMDkzLTE5LjUxMTcxOC02Ni41NzgxMjYgNTMuMjYxNzE4em0wIDAiIGZpbGw9IiMyMTI1MjkiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD48L2c+PC9zdmc+" />
                </div>
                <p>Uniforme</p>
            </div>
            <div class="col-md-4">
                <div class="btn btn--benefits mb-2">
                    <span class="material-icons">
                        local_dining
                    </span>
                </div>
                <p>Casino</p>
            </div>
            <div class="col-md-4">
                <div class="btn btn--benefits mb-2">
                    <span class="material-icons">
                        local_hospital
                    </span>
                </div>
                <p>Mutual de Seguridad</p>
            </div>
            <div class="col-md-4">
                <div class="btn btn--benefits mb-2">
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDY0IDY0IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIgNTEyIiB4bWw6c3BhY2U9InByZXNlcnZlIj48Zz48ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxnPjxnPjxwYXRoIGQ9Im01MiA2M2MtNi4wNjUgMC0xMS00LjkzNS0xMS0xMXM0LjkzNS0xMSAxMS0xMSAxMSA0LjkzNSAxMSAxMS00LjkzNSAxMS0xMSAxMXoiIGZpbGw9IiMyMTI1MjkiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiPjwvcGF0aD48L2c+PC9nPjxnPjxnPjxwYXRoIGQ9Im0xMiAyM2MtNi4wNjUgMC0xMS00LjkzNS0xMS0xMXM0LjkzNS0xMSAxMS0xMSAxMSA0LjkzNSAxMSAxMS00LjkzNSAxMS0xMSAxMXoiIGZpbGw9IiMyMTI1MjkiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiPjwvcGF0aD48L2c+PC9nPjxnPjxwYXRoIGQ9Im01OCAyOWMtMS4zMDIgMC0yLjQwMi44MzktMi44MTYgMmgtOS4yMzVjLS4zOTMtNS41MjEtMy45OTItMTAuMTU3LTguOTQ5LTEyLjA2MXYtMi45MzljMC0uNTUxLjQ0OC0xIDEtMWg4djZoMTR2LTEwaDMuNDE0bC0xMC40MTQtMTAuNDE0LTEwLjQxNCAxMC40MTRoMy40MTR2MmgtOGMtMS42NTQgMC0zIDEuMzQ2LTMgM3YyLjMzMmMtLjY1MS0uMTQzLTEuMzE5LS4yMzMtMi0uMjgxdi05LjIzNWMxLjE2MS0uNDE0IDItMS41MTQgMi0yLjgxNiAwLTEuNjU0LTEuMzQ2LTMtMy0zcy0zIDEuMzQ2LTMgM2MwIDEuMzAyLjgzOSAyLjQwMiAyIDIuODE2djkuMjM1Yy0uNjgxLjA0OC0xLjM0OS4xMzgtMiAuMjgxdi00LjMzMmMwLTEuNjU0LTEuMzQ2LTMtMy0zaC0zLjA1MWMuMDMuMzMuMDUxLjY2Mi4wNTEgMXMtLjAyMS42Ny0uMDUxIDFoMy4wNTFjLjU1MiAwIDEgLjQ0OSAxIDF2NC45MzljLTQuOTU3IDEuOTA0LTguNTU2IDYuNTQtOC45NDkgMTIuMDYxaC05LjIzNWMtLjQxNC0xLjE2MS0xLjUxNC0yLTIuODE2LTItMS42NTQgMC0zIDEuMzQ2LTMgM3MxLjM0NiAzIDMgM2MxLjMwMiAwIDIuNDAyLS44MzkgMi44MTYtMmg5LjIzNWMuMzkzIDUuNTIxIDMuOTkzIDEwLjE1NyA4Ljk0OSAxMi4wNjF2Ni45MzljMCAuNTUxLS40NDggMS0xIDFoLTV2LTJoMi4zODhsLTIuNjY3LThoLTE3LjQ0MmwtMi42NjcgOGgyLjM4OHYxMmgxOHYtOGg1YzEuNjU0IDAgMy0xLjM0NiAzLTN2LTYuMzMyYy42NTEuMTQzIDEuMzE5LjIzMyAyIC4yODF2OS4yMzVjLTEuMTYxLjQxNC0yIDEuNTE0LTIgMi44MTYgMCAxLjY1NCAxLjM0NiAzIDMgM3MzLTEuMzQ2IDMtM2MwLTEuMzAyLS44MzktMi40MDItMi0yLjgxNnYtOS4yMzVjLjY4MS0uMDQ4IDEuMzQ5LS4xMzggMi0uMjgxdjQuMzMyYzAgMS42NTQgMS4zNDYgMyAzIDNoMy4wNTFjLS4wMy0uMzMtLjA1MS0uNjYyLS4wNTEtMXMuMDIxLS42Ny4wNTEtMWgtMy4wNTFjLS41NTIgMC0xLS40NDktMS0xdi00LjkzOWM0Ljk1Ny0xLjkwNCA4LjU1Ni02LjU0IDguOTQ5LTEyLjA2MWg5LjIzNWMuNDE0IDEuMTYxIDEuNTE0IDIgMi44MTYgMiAxLjY1NCAwIDMtMS4zNDYgMy0zcy0xLjM0Ni0zLTMtM3ptLTUtMjUuNTg2IDUuNTg2IDUuNTg2aC0uNTg2djEwaC0xMHYtMTBoLS41ODZ6bS00OC4yNzkgNDEuNTg2aDE0LjU1OWwxLjMzMyA0aC0xNy4yMjV6bS4yNzkgNmg2djEwaC02em04IDEwdi0xMGg2djEwem0xOS01NmMuNTUyIDAgMSAuNDQ5IDEgMXMtLjQ0OCAxLTEgMS0xLS40NDktMS0xIC40NDgtMSAxLTF6bS0yNiAyOGMtLjU1MiAwLTEtLjQ0OS0xLTFzLjQ0OC0xIDEtMSAxIC40NDkgMSAxLS40NDggMS0xIDF6bTIxLTUuMzk1YzAtMS45ODggMS42MTctMy42MDUgMy42MDUtMy42MDVoMi43ODljMS45ODkgMCAzLjYwNiAxLjYxNyAzLjYwNiAzLjYwNSAwIC40NzQtLjEuOTM2LS4yNzkgMS4zNjktLjI3OS0uNjA1LS43NTYtMS4xMS0xLjM3OS0xLjQyMmwtMy4zNDItMS42Ny0zLjM0MiAxLjY3MWMtLjYyMy4zMTItMS4xLjgxNy0xLjM3OSAxLjQyMi0uMTc4LS40MzMtLjI3OS0uODk1LS4yNzktMS4zN3ptMTEuNjczIDE0LjM2MmMtMS40MTIuOTQ5LTMuMDQgMS41OTItNC43ODkgMS44N2wyLjk2Ni00Ljg0NWMuODM4LjgwOSAxLjQ3MSAxLjgyMiAxLjgyMyAyLjk3NXptLTUuNjczLS41MTV2LTQuMzY0Yy43OS4xMTUgMS41MzkuMzYzIDIuMjI4LjcyNHptLTQtOS40NTJ2LTEuNzY0YzAtLjM4MS4yMTItLjcyNC41NTMtLjg5NGwyLjQ0Ny0xLjIyNCAyLjQ0NyAxLjIyNGMuMzQxLjE3LjU1My41MTMuNTUzLjg5NHYxLjc2NGMwIDEuNjU0LTEuMzQ2IDMtMyAzcy0zLTEuMzQ2LTMtM3ptMiA5LjQ1Mi0yLjIyOC0zLjY0Yy42ODktLjM2MSAxLjQzOC0uNjA5IDIuMjI4LS43MjR6bS0zLjg1LTIuNDU5IDIuOTY2IDQuODQ1Yy0xLjc0OS0uMjc4LTMuMzc2LS45MjEtNC43ODktMS44Ny4zNTItMS4xNTQuOTg1LTIuMTY2IDEuODIzLTIuOTc1em00Ljg1IDIwLjAwN2MtLjU1MiAwLTEtLjQ0OS0xLTFzLjQ0OC0xIDEtMSAxIC40NDkgMSAxLS40NDggMS0xIDF6bTguMzM3LTE4LjM4OGMtLjkyMy0yLjI2My0yLjczOC00LjAzNi00Ljk2Ny00Ljk0NC45MTEtLjgzOCAxLjQ5OS0yLjAwMyAxLjU5My0zLjMxMmwxLjA5NS0xLjY0MmMuNjE2LS45MjQuOTQxLTIgLjk0MS0zLjEwOS4wMDEtMy4wOS0yLjUxNC01LjYwNS01LjYwNC01LjYwNWgtMi43ODljLTMuMDkxIDAtNS42MDYgMi41MTUtNS42MDYgNS42MDUgMCAxLjExLjMyNSAyLjE4NS45NDEgMy4xMDlsMS4wOTUgMS42NDJjLjA5NCAxLjMwOC42ODIgMi40NzQgMS41OTMgMy4zMTItMi4yMjkuOTA3LTQuMDQ0IDIuNjgxLTQuOTY3IDQuOTQ0LTIuMjU0LTIuMTgzLTMuNjYyLTUuMjM0LTMuNjYyLTguNjEyIDAtNi42MTcgNS4zODMtMTIgMTItMTJzMTIgNS4zODMgMTIgMTJjMCAzLjM3OC0xLjQwOCA2LjQyOS0zLjY2MyA4LjYxMnptMTcuNjYzLTcuNjEyYy0uNTUyIDAtMS0uNDQ5LTEtMXMuNDQ4LTEgMS0xIDEgLjQ0OSAxIDEtLjQ0OCAxLTEgMXoiIGZpbGw9IiMyMTI1MjkiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiPjwvcGF0aD48cGF0aCBkPSJtNTMgNDcuMTg0di0yLjE4NGgtMnYyaC0ydjNjMCAxLjY1NCAxLjM0NiAzIDMgMyAuNTUyIDAgMSAuNDQ5IDEgMXYxaC0xYy0uNTUyIDAtMS0uNDQ5LTEtMXYtMWgtMnYxYzAgMS4zMDIuODM5IDIuNDAyIDIgMi44MTZ2Mi4xODRoMnYtMmgydi0zYzAtMS42NTQtMS4zNDYtMy0zLTMtLjU1MiAwLTEtLjQ0OS0xLTF2LTFoMWMuNTUyIDAgMSAuNDQ5IDEgMXYxaDJ2LTFjMC0xLjMwMi0uODM5LTIuNDAyLTItMi44MTZ6IiBmaWxsPSIjMjEyNTI5IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIj48L3BhdGg+PHBhdGggZD0ibTcgMTVoMnYyYzAgMS4xMDMuODk3IDIgMiAyaDJjMS4xMDMgMCAyLS44OTcgMi0ydi0yaDJjMS4xMDMgMCAyLS44OTcgMi0ydi0yYzAtMS4xMDMtLjg5Ny0yLTItMmgtMnYtMmMwLTEuMTAzLS44OTctMi0yLTJoLTJjLTEuMTAzIDAtMiAuODk3LTIgMnYyaC0yYy0xLjEwMyAwLTIgLjg5Ny0yIDJ2MmMwIDEuMTAzLjg5NyAyIDIgMnptMC00aDR2LTRoMnY0bDQgLjAwM3YxLjk5N2gtNHY0aC0ydi00aC00eiIgZmlsbD0iIzIxMjUyOSIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiI+PC9wYXRoPjwvZz48L2c+PC9nPjwvc3ZnPg==" />
                </div>
                <p>Caja de compensación</p>
            </div>
            <div class="col-md-4">
                <div class="btn btn--benefits mb-2">
                    <span class="material-icons">
                        healing
                    </span>
                </div>
                <p>Seguro de salud</p>
            </div>
            <div class="col-md-4">
                <div class="btn btn--benefits mb-2">
                    <span class="material-icons">
                        directions_bus
                    </span>
                </div>
                <p>Bus de acercamiento</p>
            </div>
            <div class="col-md-4">
                <div class="btn btn--benefits mb-2">
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDU4IDU2IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIgNTEyIiB4bWw6c3BhY2U9InByZXNlcnZlIiBjbGFzcz0iIj48Zz48IS0tIEdlbmVyYXRvcjogU2tldGNoIDUxLjMgKDU3NTQ0KSAtIGh0dHA6Ly93d3cuYm9oZW1pYW5jb2RpbmcuY29tL3NrZXRjaCAtLT48dGl0bGUgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4wMzQgLSBMaWZlIEluc3VyYW5jZTwvdGl0bGU+PGRlc2MgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj5DcmVhdGVkIHdpdGggU2tldGNoLjwvZGVzYz48ZGVmcyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjwvZGVmcz48ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGlkPSJQYWdlLTEiIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIiBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGlkPSIwMzQtLS1MaWZlLUluc3VyYW5jZSIgZmlsbD0iIzAwMDAwMCIgZmlsbC1ydWxlPSJub256ZXJvIj48cGF0aCBkPSJNMTMsNTYgTDI0LDU2IEwyNCw0OCBMMTMsNDggTDEzLDU2IFogTTIwLDUxIEwyMSw1MSBDMjEuNTUyMjg0Nyw1MSAyMiw1MS40NDc3MTUzIDIyLDUyIEMyMiw1Mi41NTIyODQ3IDIxLjU1MjI4NDcsNTMgMjEsNTMgTDIwLDUzIEMxOS40NDc3MTUzLDUzIDE5LDUyLjU1MjI4NDcgMTksNTIgQzE5LDUxLjQ0NzcxNTMgMTkuNDQ3NzE1Myw1MSAyMCw1MSBaIiBpZD0iU2hhcGUiIGZpbGw9IiMyMTI1MjkiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD48cGF0aCBkPSJNMjIsNDYgTDIyLDQ0LjE0IEMyMi4wMzI3MDAzLDQyLjIyNjI4MzIgMjEuNDE1ODA4Nyw0MC4zNTc5ODI3IDIwLjI1LDM4Ljg0IEMxOS42Mzk4ODExLDM4LjAyMTg4NDggMTguODAxMzU4MiwzNy40MDI1NjA4IDE3Ljg0LDM3LjA2IEMxNS40ODk1ODk3LDM2LjA5OTc5OTUgMTMuMzI5MTM4LDM0LjcyODM1MjkgMTEuNDYsMzMuMDEgQzEwLjUyMzcwNzksMzIuMjQwMDc5NSA5LjE3OTYwMzUzLDMyLjIxOTMzNzEgOC4yMiwzMi45NiBDOC41Nzk4ODg2OSwzMy41MDE4Nzc1IDguOTk1NDg0MzYsMzQuMDA0NjE0MiA5LjQ2LDM0LjQ2IEwxNC4wMiwzOS4wMyBDMTQuNDA3NzIzNiwzOS40MjAwMzc1IDE0LjQwNzcyMzYsNDAuMDQ5OTYyNSAxNC4wMiw0MC40NCBDMTMuODM1NjA4OSw0MC42MzE3ODEgMTMuNTgxMDQ1MSw0MC43NDAxNjU5IDEzLjMxNSw0MC43NDAxNjU5IEMxMy4wNDg5NTQ5LDQwLjc0MDE2NTkgMTIuNzk0MzkxMSw0MC42MzE3ODEgMTIuNjEsNDAuNDQgTDguMDQsMzUuODggQzYuOTcxOTY5MjMsMzQuODA2OTc2MSA2LjExNjg5MjM2LDMzLjU0MTMyNjYgNS41MiwzMi4xNSBMMy4yOCwyNi45MyBDMy4wOTQxMjc2NiwyNi40OTI5NjU0IDIuNjY0OTE4MzgsMjYuMjA5NDUxIDIuMTksMjYuMjEgQzEuNzg2NDUxMTcsMjYuMjEwOTc4NyAxLjQxMDk0NDk4LDI2LjQxNjU3ODEgMS4xOTI3MjIyNCwyNi43NTYwMzU3IEMwLjk3NDQ5OTUwNywyNy4wOTU0OTMzIDAuOTQzMzUyMDAyLDI3LjUyMjQ2NjIgMS4xMSwyNy44OSBMNS4wMywzNi41MiBDNS40NTc5NTIxMywzNy40NjYyOTQ1IDYuMDU0MzA3MDgsMzguMzI2OTQzMiA2Ljc5LDM5LjA2IEwxMy43Myw0NiBMMjIsNDYgWiIgaWQ9IlNoYXBlIiBmaWxsPSIjMjEyNTI5IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIj48L3BhdGg+PHBhdGggZD0iTTM0LDQ4IEwzNCw1NiBMNDUsNTYgTDQ1LDQ4IEwzNCw0OCBaIE0zOCw1MyBMMzcsNTMgQzM2LjQ0NzcxNTMsNTMgMzYsNTIuNTUyMjg0NyAzNiw1MiBDMzYsNTEuNDQ3NzE1MyAzNi40NDc3MTUzLDUxIDM3LDUxIEwzOCw1MSBDMzguNTUyMjg0Nyw1MSAzOSw1MS40NDc3MTUzIDM5LDUyIEMzOSw1Mi41NTIyODQ3IDM4LjU1MjI4NDcsNTMgMzgsNTMgWiIgaWQ9IlNoYXBlIiBmaWxsPSIjMjEyNTI5IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIj48L3BhdGg+PHBhdGggZD0iTTU1LjgxLDI2LjIxIEM1NS4zMzUwODE2LDI2LjIwOTQ1MSA1NC45MDU4NzIzLDI2LjQ5Mjk2NTQgNTQuNzIsMjYuOTMgTDUyLjQ4LDMyLjE1IEM1MS44ODMxMDc2LDMzLjU0MTMyNjYgNTEuMDI4MDMwOCwzNC44MDY5NzYxIDQ5Ljk2LDM1Ljg4IEw0NS4zOSw0MC40NCBDNDUuMjA1NjA4OSw0MC42MzE3ODEgNDQuOTUxMDQ1MSw0MC43NDAxNjU5IDQ0LjY4NSw0MC43NDAxNjU5IEM0NC40MTg5NTQ5LDQwLjc0MDE2NTkgNDQuMTY0MzkxMSw0MC42MzE3ODEgNDMuOTgsNDAuNDQgQzQzLjU5MjI3NjQsNDAuMDQ5OTYyNSA0My41OTIyNzY0LDM5LjQyMDAzNzUgNDMuOTgsMzkuMDMgTDQ4LjU0LDM0LjQ2IEM0OS4wMDQ2NjQ4LDM0LjAwMTEwNzggNDkuNDIwMjQyNiwzMy40OTUwNDEzIDQ5Ljc4LDMyLjk1IEM0OC44MTgwODIxLDMyLjIxMjIxMiA0Ny40NzM5NDIzLDMyLjIzNzEwMzUgNDYuNTQsMzMuMDEgQzQ0LjY3MDg2MiwzNC43MjgzNTI5IDQyLjUxMDQxMDMsMzYuMDk5Nzk5NSA0MC4xNiwzNy4wNiBDMzkuMTk4NjQxOCwzNy40MDI1NjA4IDM4LjM2MDExODksMzguMDIxODg0OCAzNy43NSwzOC44NCBDMzYuNTg0MTkxMyw0MC4zNTc5ODI3IDM1Ljk2NzI5OTcsNDIuMjI2MjgzMiAzNiw0NC4xNCBMMzYsNDYgTDQ0LjI3LDQ2IEw1MS4yMSwzOS4wNiBDNTEuOTQ1NjkyOSwzOC4zMjY5NDMyIDUyLjU0MjA0NzksMzcuNDY2Mjk0NSA1Mi45NywzNi41MiBMNTYuODksMjcuODkgQzU3LjA1NjY0OCwyNy41MjI0NjYyIDU3LjAyNTUwMDUsMjcuMDk1NDkzMyA1Ni44MDcyNzc4LDI2Ljc1NjAzNTcgQzU2LjU4OTA1NSwyNi40MTY1NzgxIDU2LjIxMzU0ODgsMjYuMjEwOTc4NyA1NS44MSwyNi4yMSBaIiBpZD0iU2hhcGUiIGZpbGw9IiMyMTI1MjkiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD48cGF0aCBkPSJNNDMuOTUsMjEuMzIgQzQzLjc5NDQwOTQsMjEuNzIyMzQzNSA0My40MTEyODQ2LDIxLjk5MDkyNTkgNDIuOTgsMjIgQzQyLjUzOTM5ODQsMjEuOTkyMTk3OCA0Mi4xNTY2NDQzLDIxLjY5NDk1MjcgNDIuMDQsMjEuMjcgTDQwLjk4LDE3LjU2IEwzOC45NiwyNC4yOSBDMzguODI5Njc3OSwyNC43MTExMjM1IDM4LjQ0MDgyNTYsMjQuOTk4NzEyMiAzOCwyNSBMMzcuOTYsMjUgQzM3LjUwMjg0OTQsMjQuOTgyNjgyMSAzNy4xMTU3NDI2LDI0LjY1NzM0NzYgMzcuMDIsMjQuMjEgTDM0LjkzLDE0LjQyIEwzMy45NywxOC4yNCBDMzMuODU5NzA3MiwxOC42ODYxMjI0IDMzLjQ1OTU1MzYsMTguOTk5NjQ0OCAzMywxOSBMMjcuNzIsMTkgTDI2Ljk1LDIxLjMyIEMyNi43OTY2Nzc2LDIxLjcyNDExMzMgMjYuNDEyMTc0OSwyMS45OTM2NjE2IDI1Ljk4LDIyIEMyNS41MzkzOTg0LDIxLjk5MjE5NzggMjUuMTU2NjQ0MywyMS42OTQ5NTI3IDI1LjA0LDIxLjI3IEwyMy45OCwxNy41NiBMMjEuOTYsMjQuMjkgQzIxLjgxODY5MzYsMjQuNzIwNTQ1MSAyMS40MTMwNjAzLDI1LjAwODU0NDggMjAuOTYsMjUgQzIwLjUwMjg0OTQsMjQuOTgyNjgyMSAyMC4xMTU3NDI2LDI0LjY1NzM0NzYgMjAuMDIsMjQuMjEgTDE3LjkzLDE0LjQyIEwxNi45NywxOC4yNCBDMTYuODU5NzA3MiwxOC42ODYxMjI0IDE2LjQ1OTU1MzYsMTguOTk5NjQ0OCAxNiwxOSBMOS4yNywxOSBDMTAuNTM1NzQ1NiwyMC43NDk2Nzg5IDEyLjAyMTI2NDUsMjIuMzI5MzAzMSAxMy42OSwyMy43IEMxNC4yMSwyNC4xNyAxNC43MywyNC42MyAxNS4yMSwyNS4wOSBDMTguMDgsMjcuODMgMjYuNjEsMzQuNzcgMjksMzYuNzEgQzMxLjM5LDM0Ljc3IDM5LjkyLDI3LjgzIDQyLjc5LDI1LjA5IEM0My4yNywyNC42MyA0My43OSwyNC4xNyA0NC4zMSwyMy43IEM0NS45ODEwOTAzLDIyLjMzMTgyMzQgNDcuNDY2OTE0NCwyMC43NTE4NzQ3IDQ4LjczLDE5IEw0NC43MiwxOSBMNDMuOTUsMjEuMzIgWiIgaWQ9IlNoYXBlIiBmaWxsPSIjMjEyNTI5IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIj48L3BhdGg+PHBhdGggZD0iTTE3LjAzLDkuNzYgQzE3LjEzNzYxNzgsOS4zMDM2OTI4OCAxNy41NTEzODE0LDguOTg2MDU2MTYgMTguMDIsOSBDMTguNDgyOTY5Niw5LjAxMjkxMDgzIDE4Ljg3ODIyMzEsOS4zMzgxNzE0NiAxOC45OCw5Ljc5IEwyMS4xNiwxOS45OCBMMjMuMDQsMTMuNzEgQzIzLjE1NjgxMTIsMTMuMjc1MTM1OCAyMy41NjAxNjk1LDEyLjk3OTg5NDIgMjQuMDEsMTMgQzI0LjQ1NDMyOCwxMy4wMDMzNzY4IDI0Ljg0MjMyNzQsMTMuMzAxNTIzNyAyNC45NiwxMy43MyBMMjYuMDcsMTcuNjIgQzI2LjIyODI1NjEsMTcuMjQ2MDYyNiAyNi41OTM5NTkzLDE3LjAwMjI2MDUgMjcsMTcgTDMyLjIyLDE3IEwzNC4wMyw5Ljc2IEMzNC4wNTY3Mjk1LDkuNjUwNDYyNyAzNC4xMDA2MDQyLDkuNTQ1ODM4NTMgMzQuMTYsOS40NSBDMzQuMzUzNzE1Niw5LjE2NjAwMzA0IDM0LjY3NjIzNzksOC45OTcyNDE0MiAzNS4wMiw5IEMzNS40ODI5Njk2LDkuMDEyOTEwODMgMzUuODc4MjIzMSw5LjMzODE3MTQ2IDM1Ljk4LDkuNzkgTDM4LjE2LDE5Ljk4IEw0MC4wNCwxMy43MSBDNDAuMTcwMzIyMSwxMy4yODg4NzY1IDQwLjU1OTE3NDQsMTMuMDAxMjg3OCA0MSwxMyBMNDEuMDEsMTMgQzQxLjQ1NDMyOCwxMy4wMDMzNzY4IDQxLjg0MjMyNzQsMTMuMzAxNTIzNyA0MS45NiwxMy43MyBMNDMuMDcsMTcuNjIgQzQzLjIyODI1NjEsMTcuMjQ2MDYyNiA0My41OTM5NTkzLDE3LjAwMjI2MDUgNDQsMTcgTDQ5Ljg0LDE3IEM1MC42Mzg1OTczLDE1LjE2ODg1MjIgNTEuMDM0MjAxNSwxMy4xODc0MjA5IDUxLDExLjE5IEM1MSw0LjE4IDQ2LjkyLC0xLjE3NzQ0MzU2ZS0xNiA0MC4wNywtMS4xNzc0NDM1NmUtMTYgQzM1Ljg0NDgxMjIsLTAuMDE0MjkxODUyNyAzMS45NDU2MTIyLDIuMjY4NTQwMzcgMjkuODksNS45NiBDMjkuNzAwOTA0NSw2LjI3MDU2MDI1IDI5LjM2MzU5OTgsNi40NjAwOTIyNiAyOSw2LjQ2MDA5MjI2IEMyOC42MzY0MDAyLDYuNDYwMDkyMjYgMjguMjk5MDk1NSw2LjI3MDU2MDI1IDI4LjExLDUuOTYgQzI2LjA1NDM4NzgsMi4yNjg1NDAzNyAyMi4xNTUxODc4LC0wLjAxNDI5MTg1MjcgMTcuOTMsMS4yMTQ1MjMyN2UtMTUgQzExLjA4LC0xLjE3NzQ0MzU2ZS0xNiA3LDQuMTggNywxMS4xOSBDNi45NjU3OTg1MiwxMy4xODc0MjA5IDcuMzYxNDAyNzEsMTUuMTY4ODUyMiA4LjE2LDE3IEwxNS4yMiwxNyBMMTcuMDMsOS43NiBaIiBpZD0iU2hhcGUiIGZpbGw9IiMyMTI1MjkiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD48cGF0aCBkPSJNMSwxNyBDMC40NDc3MTUyNSwxNyAwLDE3LjQ0NzcxNTMgMCwxOCBDLTEuMTEwMjIzMDJlLTE2LDE4LjU1MjI4NDcgMC40NDc3MTUyNSwxOSAxLDE5IEw5LjI3LDE5IEM4Ljg0MTI4Njg1LDE4LjM2NzY1MjcgOC40Njk4MTU3NiwxNy42OTgzMzU0IDguMTYsMTcgTDEsMTcgWiIgaWQ9IlNoYXBlIiBmaWxsPSIjMjEyNTI5IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIj48L3BhdGg+PHBhdGggZD0iTTU3LDE3IEw0OS44NCwxNyBDNDkuNTMwMTg0MiwxNy42OTgzMzU0IDQ5LjE1ODcxMzIsMTguMzY3NjUyNyA0OC43MywxOSBMNTcsMTkgQzU3LjU1MjI4NDcsMTkgNTgsMTguNTUyMjg0NyA1OCwxOCBDNTgsMTcuNDQ3NzE1MyA1Ny41NTIyODQ3LDE3IDU3LDE3IFoiIGlkPSJTaGFwZSIgZmlsbD0iIzIxMjUyOSIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPjwvZz48L2c+PC9nPjwvc3ZnPg==" />
                </div>
                <p>Seguro de vida</p>
            </div>
            <div class="col-md-4">
                <div class="btn btn--benefits mb-2">
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDI5NS41MjYgMjk1LjUyNiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgY2xhc3M9IiI+PGc+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+Cgk8cGF0aCBkPSJNMTQ3Ljc2Myw0NC4wNzRjMTIuODAxLDAsMjMuODU4LTguMTYyLDI3LjgzLTIwLjE2OWMtNy41NzgsMi4wODYtMTcuMjM3LDMuMzQ1LTI3LjgzLDMuMzQ1ICAgYy0xMC41OTIsMC0yMC4yNTEtMS4yNTktMjcuODI4LTMuMzQ1QzEyMy45MDUsMzUuOTExLDEzNC45NjEsNDQuMDc0LDE0Ny43NjMsNDQuMDc0eiIgZmlsbD0iIzIxMjUyOSIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPgoJPHBhdGggZD0iTTI5NS4xNTgsNTguODM5Yy0wLjYwOC0xLjcwNi0xLjg3My0zLjEwOS0zLjUyMS0zLjg3M2wtNTYuMzQzLTI2LjAxYy0xMS45ODUtNC4wNi0yNC4xOTUtNy4yNjctMzYuNTI0LTkuNjExICAgYy0wLjQzNC0wLjA4NS0wLjg2Ni0wLjEyNi0xLjI5Mi0wLjEyNmMtMy4wNTIsMC01Ljc4NSwyLjEwNy02LjQ2NSw1LjE5N2MtNC41MDIsMTkuODItMjIuMDQ3LDM0LjY1OS00My4yNTEsMzQuNjU5ICAgYy0yMS4yMDMsMC0zOC43NDktMTQuODM4LTQzLjI1LTM0LjY1OWMtMC42ODgtMy4wOS0zLjQxNi01LjE5Ny02LjQ2Ni01LjE5N2MtMC40MjYsMC0wLjg1OCwwLjA0MS0xLjI5MiwwLjEyNiAgIGMtMTIuMzI4LDIuMzQ0LTI0LjUzOCw1LjU1MS0zNi41NDIsOS42MTFMMy44ODksNTQuOTY1Yy0xLjY1OCwwLjc2NC0yLjkzMiwyLjE2Ny0zLjUxMSwzLjg3MyAgIGMtMC41OTksMS43MjYtMC40OTEsMy41ODksMC4zNTMsNS4yMTdsMjQuNDYsNDguMjcyYzEuMTQ1LDIuMjkxLDMuNDc0LDMuNjY2LDUuOTM4LDMuNjY2YzAuNjM2LDAsMS4yODEtMC4wOTIsMS45MTctMC4yODMgICBsMjcuMTY3LTguMDUydjE2MS45N2MwLDMuNjc4LDMuMDAxLDYuNjc4LDYuNjg5LDYuNjc4aDE2MS43MjNjMy42NzgsMCw2LjY3LTMuMDAxLDYuNjctNi42NzhWMTA3LjY2bDI3LjE4Niw4LjA1MiAgIGMwLjYzNiwwLjE5MSwxLjI4LDAuMjgzLDEuOTE1LDAuMjgzYzIuNDU5LDAsNC43NzktMS4zNzUsNS45NC0zLjY2NmwyNC40NjktNDguMjcyQzI5NS42MjksNjIuNDI4LDI5NS43NDcsNjAuNTY1LDI5NS4xNTgsNTguODM5eiAgICIgZmlsbD0iIzIxMjUyOSIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjwvZz48L3N2Zz4=" />
                </div>
                <p>Vestimenta informal</p>
            </div>
            <div class="col-md-4">
                <div class="btn btn--benefits mb-2">
                    <span class="material-icons">
                        beach_access
                    </span>
                </div>
                <p>Vacaciones Extra</p>
            </div>
            <div class="col-md-4">
                <div class="btn btn--benefits mb-2">
                    <span class="material-icons">
                        watch
                    </span>
                </div>
                <p>Horario Flexible</p>
            </div>
            <div class="col-md-4">
                <div class="btn btn--benefits mb-2">
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTIiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxnPjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0ibTM0Ni4wNjEgNDU3Ljc5aC0zOC4yMDJsLTIxLjc5OC0zOS44NTh2LTYzLjM1M2gtNjAuMTIydjYzLjM1M2wtMjEuNzk4IDM5Ljg1OGgtMzguMjAyYy04LjI4NCAwLTE1IDYuNzE2LTE1IDE1czYuNzE2IDE1IDE1IDE1aDE4MC4xMjJjOC4yODQgMCAxNS02LjcxNiAxNS0xNXMtNi43MTYtMTUtMTUtMTV6IiBmaWxsPSIjMjEyNTI5IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIj48L3BhdGg+PHBhdGggZD0ibTQ5Ni40MzEgMzQ1LjA1Ny0xMzEuMjMxLTc5LjQ4NWMtMS4zMjctLjgwNC0yLjcxOC0xLjQ4Ni00LjE0LTIuMDk3di0xNzYuOTI4YzAtMTIuODg1LTMuODI1LTI1LjI0NS0xMS4wNjItMzUuNzQ2LTE4LjI4Mi0yNi41MjgtNTQuNzk2LTM0LjQ2OC04My4xMjctMTguMDY5bC0xNy40OTggMTAuMTI2Yy0xNy4yOTItMTMuMTIzLTQyLjA0Ni0xMS44MDYtNTcuODI2IDMuOTc1bC0yMC4xMjYgMjAuMTI2Yy00LjUyIDQuNTItNC41MiAxMS44NDggMCAxNi4zNjhsNTYuNDU5IDU2LjQ1OWM0LjUyIDQuNTIgMTEuODQ4IDQuNTIgMTYuMzY4IDBsMjAuMTI2LTIwLjEyNmMxNC43ODMtMTQuNzgzIDE2Ljg3LTM3LjQzOSA2LjI4OS01NC40NjFsMTEuMjM1LTYuNTAyYzE0Ljg3Ni04LjYwNyAzMy45MzktNC41OTkgNDMuMzk4IDkuMTI4IDMuNzcxIDUuNDcyIDUuNzY0IDExLjk0NiA1Ljc2NCAxOC43MjN2MTc0LjA0MmgtMTM3Yy0xMS45ODMgMC0yMy4wNTUtNi4xMDQtMjkuMDQzLTE2LjAxMWwtMTAyLjQxMS0xNjkuNDM4Yy05LjI2Ni0xNS4zMy0yOS44MDctMjAuNTcxLTQ1Ljg1MS0xMS42OTlsLS4wMjcuMDE1Yy0xNi4wMDMgOC44NDktMjEuNDc4IDI4LjM5NC0xMi4yMzYgNDMuNjg1bDEyMS43NDYgMjAxLjQyNmM1Ljk4OCA5LjkwNyAxNy4wNiAxNi4wMTEgMjkuMDQzIDE2LjAxMWgxNzIuNDQxYzYuMzYyIDAgMTIuNTkzIDEuNzI4IDE3Ljk2NSA0Ljk4MmwxMTQuODEzIDY5LjU0MWMxNS42MjUgOS40NjQgMzYuMzI5IDUuMDU2IDQ2LjI1OS05Ljg0OSA5Ljk0NC0xNC45MjYgNS4zMTgtMzQuNzE5LTEwLjMyOC00NC4xOTZ6bS0xNjUuMjk0LTg0LjQ2N2MuMDEtLjA4LjAyLS4wOTYuMDMxIDB6IiBmaWxsPSIjMjEyNTI5IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIj48L3BhdGg+PC9nPjwvZz48L3N2Zz4=" />
                </div>
                <p>Seguro dental</p>
            </div>
            <div class="col-md-4">
                <div class="btn btn--benefits mb-2">
                    <span class="material-icons">
                        cake
                    </span>
                </div>
                <p>Día de cumpleaños libre</p>
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