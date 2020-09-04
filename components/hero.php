<section class="hero">
	<div class="hero__slider">

		<picture class="hero__slider__img">
			<source media="(max-width: 549px)" srcset="./dist/img/fbg.jpg">
			<source media="(min-width: 550px)" srcset="./dist/img/fbg.jpg">
			<img class="hero__slider__img__img-base" src="./dist/img/fbg.jpg" alt="Hero">
		</picture>


		<!-- 		<picture class="hero__slider__img">
			<source media="(max-width: 549px)" srcset="./dist/img/herob.jpg">
			<source media="(min-width: 550px)" srcset="./dist/img/herob.jpg">
			<img class="hero__slider__img__img-base" src="./dist/img/herob.jpg" alt="Hero">
		</picture>

		<picture class="hero__slider__img">
			<source media="(max-width: 549px)" srcset="./dist/img/heroc.jpg">
			<source media="(min-width: 550px)" srcset="./dist/img/heroc.jpg">
			<img class="hero__slider__img__img-base" src="./dist/img/heroc.jpg" alt="Hero">
		</picture>

		<picture class="hero__slider__img">
			<source media="(max-width: 549px)" srcset="./dist/img/herod.jpg">
			<source media="(min-width: 550px)" srcset="./dist/img/herod.jpg">
			<img class="hero__slider__img__img-base" src="./dist/img/herod.jpg" alt="Hero">
		</picture>

		<picture class="hero__slider__img">
			<source media="(max-width: 549px)" srcset="./dist/img/heroe.jpg">
			<source media="(min-width: 550px)" srcset="./dist/img/heroe.jpg">
			<img class="hero__slider__img__img-base" src="./dist/img/heroe.jpg" alt="Hero">
		</picture> -->

	</div>
	<div class="container">
		<div class="row justify-content-center text-center">
			<div class="col-md-8 absolute center-absolute hero__forms">
				<form action="results.php">
					<img class="hero__logo" src="./dist/img/logo.svg" alt="Logo">
					<h1 class="hero__title">Tu Plataforma Colaborativa e Inclusiva de Búsqueda de trabajo</h1>

					<fieldset class="text-center mt-5 search-icon position-relative">
						<input class="input input--select" type="text" placeholder="Puesto, empresa o palabra clave" results>
						<select class="select select--input" name="search">
							<option value="value1">En todo Chile</option>
							<option value="value2">Visbiri</option>
						</select>
						<span class="material-icons chevron">
								expand_more
							</span>
						<button class="btn__submit" type="submit">Buscar trabajo</button>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</section>