<section class="resultados-hero">
    <div class="container">
        <div class="row mt-5 mb-4">
            <div class="col-md-12">
                <h3>Resultados de búsqueda</h3>
                <h2>Título de Búsqueda</h2>
            </div>
        </div>

        <form action="#">
            <fieldset class="row justify-content-center">
                <div class="col-md-12">
                    <fieldset class="text-center">
                        <select class="select select--input" name="industria">
                            <option value="value1">industria</option>
                            <option value="value2">Alimentos</option>
                            <option value="value2">Alimentos</option>
                            <option value="value2">Alimentos</option>
                        </select>
                        <select class="select select--input" name="area">
                            <option value="value1">Gerencia General</option>
                            <option value="value1">Gerencia General</option>
                            <option value="value1">Gerencia General</option>
                        </select>
                        <select class="select select--input" name="nivelcargo">
                            <option value="value1">C-Level / Directivos</option>
                            <option value="value2">C-Level / Directivos</option>
                        </select>
                        <select class="select select--input" name="region">
                            <option value="value1">Región</option>
                            <option value="value2">Región de Arica y Parinacota</option>
                            <option value="value2">Región de Arica y Parinacota</option>
                            <option value="value2">Región de Arica y Parinacota</option>
                            <option value="value2">Región de Arica y Parinacota</option>
                        </select>
                        <button class="btn__submit" type="submit">Buscar</button>
                    </fieldset>
                </div>
            </fieldset>
        </form>

<article class="tags">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <hr>
                <?php for ($i = 1; $i <= 15; $i++) : ?>
                <a href="#" class="tags">Título1</a>
                <?php endfor ?>
                <hr>
            </div>
        </div>
    </div>
</article>
        <div class="row">
            <div class="col-md-6">
                <?php for ($i = 1; $i <= 6; $i++) : ?>
                    <?php include('busquedas-cards.php') ?>
                <?php endfor ?>
            </div>
            <div class="col-md-6">
                <?php for ($i = 1; $i <= 6; $i++) : ?>
                    <?php include('busquedas-cards.php') ?>
                <?php endfor ?>
            </div>
        </div>
    </div>
</section>