<section class="tags">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <hr>
                <ul class="row">
                    <?php for ($i = 1; $i <= 15; $i++) : ?>
                        <li class="tags__btn mr-2 mt-1 d-flex align-items-center">Título <?php echo $i ?> <button type="button" class="close ml-2" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button></li>
                    <?php endfor ?>
                </ul>
                <hr>
            </div>
        </div>
    </div>
</section>