<?php $this->view("header", $data); ?>

<div id="content">
	<?php $this->view("slider.inc", $data); ?>
	<?php $this->view("categories.inc", $data); ?>
	<div class="product-tab -style-2">
		<div class="container">
			<div class="product-tab__header">
				<h5>Sản phẩm</h5>
				
			</div>
			<div class="product-tab__content">
				<div class="product-tab__content__wrapper">
					<div class="row mx-n1 mx-md-n3">
						<?php if (isset($products) && is_array($products)) {
							foreach ($products as $product) {
						?>
								<div class="col-6 col-md-3 px-1 px-md-3">
									<div class="product ">
										<div class="product-type">
											<h5 class="-new">New</h5>
										</div>
										<div class="product-thumb"><a class="product-thumb__image" href="<?= ROOT.'product_details/'. $product->slag?>"><img src="<?= ROOT.$product->image ?>" alt="Product image" /><img src="<?= ROOT.$product->image ?>" alt="Product image" /></a>
											<div class="product-thumb__actions">
												<div class="product-btn"><a class="btn -white product__actions__item -round product-atc" href="<?=ROOT?>add_to_cart/<?=$product->id?>"><i class="fas fa-shopping-bag"></i></a>
												</div>
												<!-- <div class="product-btn"><a class="btn -white product__actions__item -round product-qv" href="#"><i class="fas fa-eye"></i></a>
												</div>
												<div class="product-btn"><a class="btn -white product__actions__item -round" href="#"><i class="fas fa-heart"></i></a>
												</div> -->
											</div>
										</div>
										<div class="product-content">
											<div class="product-content__header">
												<div class="product-category"><?= $product->catname?></div>
												<div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
											</div><a class="product-name" href="<?= ROOT . 'product_details/'. $product->slag ?>"><?= $product->description?></a>
											<div class="product-content__footer">
												<h5 class="product-price--main"><?= number_format($product->price,0, '.',',').' VNĐ'?></h5>
												
											</div>
										</div>
									</div>
								</div>
						<?php }
						}  ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $this->view("footer", $data); ?>