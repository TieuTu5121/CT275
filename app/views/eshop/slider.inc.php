<div class="slider style-1 slider-arrow-middle">
	<div class="slider__carousel">
		<?php if (isset($slider) && is_array($slider)) {
			$num = 1;
			foreach ($slider as $item) {
				$num++;
		?>
				<div class="slider__carousel__item slider-<?= $num; ?>">
					<div class="container">
						<div class="slider-background"><img class="slider-background" src="<?= ROOT . $item->image ?>" alt="Slider background" /></div>
						<div class="slider-content">
							<h1 class="slider-content__title" data-animation-in="fadeInUp" data-animation-delay="0.2"><?= $item->header1_text; ?>
							</h1>
							<h5 class="slider-content__subtitle" data-animation-in="fadeInUp" data-animation-delay="0.1"><?= $item->header2_text; ?></h5>
							<p class="slider-content__subtitle" data-animation-in="fadeInUp" data-animation-delay="0.1"><?= $item->text; ?></p>
							<div data-animation-in="fadeInUp" data-animation-out="fadeInDown" data-animation-delay="0.4"><a class="btn -red" href="<?= $item->link; ?>">Xem</a>
							</div>
						</div>
					</div>
				</div>
		<?php
			}
		} ?>
	</div>
</div>