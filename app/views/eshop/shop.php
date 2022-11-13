<?php $this->view("header", $data); ?>

<div id="content">

	<div class="shop">
		<div class="container-full-half">
			<div class="row">
				<div class="col-12 col-md-4 col-lg-3 col-xl-2">
					<div class="shop-sidebar">
						<div class="shop-sidebar__content">
							<div class="shop-sidebar__section -categories">

								<ul>
									<li><a href="<?= ROOT . 'shop'; ?>">All</a></li>
									<?php if (isset($categories) && is_array($categories)) {
										foreach ($categories as $category) { ?>
											<li><a href="<?= ROOT . '/shop/category?cat_find=' . $category->category; ?>"><?= $category->category ?></a></li>
									<?php }
									} ?>
								</ul>
							</div>
							<!-- <div class="shop-sidebar__section -refine">
								<div class="section-title -style1 -medium" style="margin-bottom:1.875em">
									<h2>Refine Search</h2><img src="assets/images/introduction/IntroductionOne/content-deco.png" alt="Decoration" />
								</div>
								<div class="shop-sidebar__section__item">
									<h5>Brand</h5>
									<ul>
										<li>
											<label for="brand-0">
												<input type="checkbox" name="Gucci" id="brand-0" />Gucci
											</label>
										</li>
										<li>
											<label for="brand-1">
												<input type="checkbox" name="Dolce" id="brand-1" />Dolce
											</label>
										</li>
										<li>
											<label for="brand-2">
												<input type="checkbox" name="H&amp;M" id="brand-2" />H&amp;M
											</label>
										</li>
										<li>
											<label for="brand-3">
												<input type="checkbox" name="Kenzo" id="brand-3" />Kenzo
											</label>
										</li>
										<li>
											<label for="brand-4">
												<input type="checkbox" name="Prada" id="brand-4" />Prada
											</label>
										</li>
									</ul>
								</div>
								<div class="shop-sidebar__section__item">
									<h5>Price</h5>
									<ul>
										<li>
											<label for="price-0">
												<input type="checkbox" name="$0.00 - $25.00" id="price-0" />$0.00 - $25.00
											</label>
										</li>
										<li>
											<label for="price-1">
												<input type="checkbox" name="$25.00 - $50.00" id="price-1" />$25.00 - $50.00
											</label>
										</li>
										<li>
											<label for="price-2">
												<input type="checkbox" name="$50.00 - $75.00" id="price-2" />$50.00 - $75.00
											</label>
										</li>
										<li>
											<label for="price-3">
												<input type="checkbox" name="$75.00 - $100.00" id="price-3" />$75.00 - $100.00
											</label>
										</li>
									</ul>
								</div>
							</div> -->
						</div>
					</div>
				</div>
				<div class="col-12 col-md-8 col-lg-9 col-xl-10">
					<!-- <div class="shop-header">
						<div class="shop-header__view">
							<div class="shop-header__view__icon"><a class="active" href="#"><i class="fas fa-th"></i></a><a href="#"><i class="fas fa-bars"></i></a></div>
							<h5 class="shop-header__page">Shop Fullwidth 4 Columns</h5>
						</div>
						<select class="customed-select" name="#">
							<option value="az">A to Z</option>
							<option value="za">Z to A</option>
							<option value="low-high">Low to High Price</option>
							<option value="high-low">High to Low Price</option>
						</select>
					</div> -->
					<div class="shop-products">
						<div class="shop-products__gird">
							<div class="row mx-n1 mx-xl-n3">
								<?php if (isset($products) && is_array($products)) {
									foreach ($products as $product) {
								?>
										<div class="col-6 col-lg-4 col-xl-3 px-1 px-xl-3">
											<div class="product ">

												<div class="product-thumb"><a class="product-thumb__image" href="<?= ROOT . 'product_details/' . $product->slag ?>"><img src="<?= ROOT . $product->image ?>" alt="Product image" /><img src="<?= ROOT . $product->image ?>" alt="Product image" /></a>
													<div class="product-thumb__actions">
														<div class="product-btn"><a class="btn -white product__actions__item -round product-atc" href="<?= ROOT ?>add_to_cart/<?= $product->id ?>"><i class="fas fa-shopping-bag"></i></a>
														</div>

													</div>
												</div>
												<div class="product-content">
													<div class="product-content__header">
														<div class="product-category"><?= $product->catname; ?></div>

													</div><a class="product-name" href="<?= ROOT . 'product_details/' . $product->slag ?>"><?= $product->description; ?></a>
													<div class="product-content__footer">
														<h5 class="product-price--main"><?= number_format($product->price, 0, '.', ',') . ' VNĐ' ?></h5>

													</div>
												</div>
											</div>
										</div>
								<?php
									}
								}
								?>
							</div>
						</div>
						<div class="shop-products__list">
							<div class="row mx-n1 mx-xl-n3">
								<div class="col-12 col-xl-6 px-1 px-xl-3">
									<div class="product-list">
										<div class="product-list-thumb">
											<div class="product-type">
												<h5 class="-new">New</h5>
											</div><a class="product-list-thumb__image" href="/shop/product-detail.html"><img src="assets/images/product/1.png" alt="Product image" /><img src="assets/images/product/2.png" alt="Product image" /></a>
										</div>
										<div class="product-list-content">
											<div class="product-list-content__top">
												<div class="product-category__wrapper">
													<h5 class="product-category">eyes</h5>
													<div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
												</div><a class="product-name" href="/shop/product-detail.html"><?= $product->description; ?></a>
												<div class="product__price">
													<div class="product__price__wrapper">
														<h5 class="product-price--main"></h5>
													</div>
												</div>
											</div>
											<div class="product-list-content__bottom">
												<p class="product-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque ipsa fugiat accusantium reiciendis rem doloribus iste doloremque</p>
												<div class="product-actions">
													<div class="product-btn">
														<div class="add-to-cart "><a class="btn -round -red" href="#"><i class="fas fa-shopping-bag"></i></a>
															<h5>Add to cart</h5>
														</div>
													</div>
													<div class="product-btn"><a class="btn -white product__actions__item -round" href="#"><i class="fas fa-eye"></i></a>
													</div>
													<div class="product-btn"><a class="btn -white product__actions__item -round" href="#"><i class="fas fa-heart"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-12 col-xl-6 px-1 px-xl-3">
									<div class="product-list">
										<div class="product-list-thumb">
											<div class="product-type"></div><a class="product-list-thumb__image" href="/shop/product-detail.html"><img src="assets/images/product/2.png" alt="Product image" /><img src="assets/images/product/3.png" alt="Product image" /></a>
										</div>
										<div class="product-list-content">
											<div class="product-list-content__top">
												<div class="product-category__wrapper">
													<h5 class="product-category">eyes</h5>
													<div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
												</div><a class="product-name" href="/shop/product-detail.html">Velvet Melon High Intensity</a>
												<div class="product__price">
													<div class="product__price__wrapper">
														<h5 class="product-price--main">$38.00</h5>
													</div>
												</div>
											</div>
											<div class="product-list-content__bottom">
												<p class="product-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque ipsa fugiat accusantium reiciendis rem doloribus iste doloremque</p>
												<div class="product-actions">
													<div class="product-btn">
														<div class="add-to-cart "><a class="btn -round -red" href="#"><i class="fas fa-shopping-bag"></i></a>
															<h5>Add to cart</h5>
														</div>
													</div>
													<div class="product-btn"><a class="btn -white product__actions__item -round" href="#"><i class="fas fa-eye"></i></a>
													</div>
													<div class="product-btn"><a class="btn -white product__actions__item -round" href="#"><i class="fas fa-heart"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-12 col-xl-6 px-1 px-xl-3">
									<div class="product-list">
										<div class="product-list-thumb">
											<div class="product-type">
												<h5 class="-sale">-15%</h5>
											</div><a class="product-list-thumb__image" href="/shop/product-detail.html"><img src="assets/images/product/3.png" alt="Product image" /><img src="assets/images/product/4.png" alt="Product image" /></a>
										</div>
										<div class="product-list-content">
											<div class="product-list-content__top">
												<div class="product-category__wrapper">
													<h5 class="product-category">eyes</h5>
													<div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
												</div><a class="product-name" href="/shop/product-detail.html">Leather shopper bag</a>
												<div class="product__price">
													<div class="product__price__wrapper">
														<h5 class="product-price--main">$30.00</h5>
														<h5 class="product-price--discount">$35.00</h5>
													</div>
												</div>
											</div>
											<div class="product-list-content__bottom">
												<p class="product-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque ipsa fugiat accusantium reiciendis rem doloribus iste doloremque</p>
												<div class="product-actions">
													<div class="product-btn">
														<div class="add-to-cart "><a class="btn -round -red" href="#"><i class="fas fa-shopping-bag"></i></a>
															<h5>Add to cart</h5>
														</div>
													</div>
													<div class="product-btn"><a class="btn -white product__actions__item -round" href="#"><i class="fas fa-eye"></i></a>
													</div>
													<div class="product-btn"><a class="btn -white product__actions__item -round" href="#"><i class="fas fa-heart"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-12 col-xl-6 px-1 px-xl-3">
									<div class="product-list">
										<div class="product-list-thumb">
											<div class="product-type"></div><a class="product-list-thumb__image" href="/shop/product-detail.html"><img src="assets/images/product/4.png" alt="Product image" /><img src="assets/images/product/5.png" alt="Product image" /></a>
										</div>
										<div class="product-list-content">
											<div class="product-list-content__top">
												<div class="product-category__wrapper">
													<h5 class="product-category">eyes</h5>
													<div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
												</div><a class="product-name" href="/shop/product-detail.html">Luxe jewel lipstick</a>
												<div class="product__price">
													<div class="product__price__wrapper">
														<h5 class="product-price--main">$38.00</h5>
													</div>
												</div>
											</div>
											<div class="product-list-content__bottom">
												<p class="product-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque ipsa fugiat accusantium reiciendis rem doloribus iste doloremque</p>
												<div class="product-actions">
													<div class="product-btn">
														<div class="add-to-cart "><a class="btn -round -red" href="#"><i class="fas fa-shopping-bag"></i></a>
															<h5>Add to cart</h5>
														</div>
													</div>
													<div class="product-btn"><a class="btn -white product__actions__item -round" href="#"><i class="fas fa-eye"></i></a>
													</div>
													<div class="product-btn"><a class="btn -white product__actions__item -round" href="#"><i class="fas fa-heart"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-12 col-xl-6 px-1 px-xl-3">
									<div class="product-list">
										<div class="product-list-thumb">
											<div class="product-type">
												<h5 class="-sale">-50%</h5>
											</div><a class="product-list-thumb__image" href="/shop/product-detail.html"><img src="assets/images/product/5.png" alt="Product image" /><img src="assets/images/product/6.png" alt="Product image" /></a>
										</div>
										<div class="product-list-content">
											<div class="product-list-content__top">
												<div class="product-category__wrapper">
													<h5 class="product-category">face</h5>
													<div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
												</div><a class="product-name" href="/shop/product-detail.html">Penpoint seamless beauty</a>
												<div class="product__price">
													<div class="product__price__wrapper">
														<h5 class="product-price--main">$20.00</h5>
														<h5 class="product-price--discount">$40.00</h5>
													</div>
												</div>
											</div>
											<div class="product-list-content__bottom">
												<p class="product-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque ipsa fugiat accusantium reiciendis rem doloribus iste doloremque</p>
												<div class="product-actions">
													<div class="product-btn">
														<div class="add-to-cart "><a class="btn -round -red" href="#"><i class="fas fa-shopping-bag"></i></a>
															<h5>Add to cart</h5>
														</div>
													</div>
													<div class="product-btn"><a class="btn -white product__actions__item -round" href="#"><i class="fas fa-eye"></i></a>
													</div>
													<div class="product-btn"><a class="btn -white product__actions__item -round" href="#"><i class="fas fa-heart"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-12 col-xl-6 px-1 px-xl-3">
									<div class="product-list">
										<div class="product-list-thumb">
											<div class="product-type"></div><a class="product-list-thumb__image" href="/shop/product-detail.html"><img src="assets/images/product/7.png" alt="Product image" /><img src="assets/images/product/8.png" alt="Product image" /></a>
										</div>
										<div class="product-list-content">
											<div class="product-list-content__top">
												<div class="product-category__wrapper">
													<h5 class="product-category">face</h5>
													<div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
												</div><a class="product-name" href="/shop/product-detail.html">The Sneaky lips</a>
												<div class="product__price">
													<div class="product__price__wrapper">
														<h5 class="product-price--main">$38.00</h5>
													</div>
												</div>
											</div>
											<div class="product-list-content__bottom">
												<p class="product-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque ipsa fugiat accusantium reiciendis rem doloribus iste doloremque</p>
												<div class="product-actions">
													<div class="product-btn">
														<div class="add-to-cart "><a class="btn -round -red" href="#"><i class="fas fa-shopping-bag"></i></a>
															<h5>Add to cart</h5>
														</div>
													</div>
													<div class="product-btn"><a class="btn -white product__actions__item -round" href="#"><i class="fas fa-eye"></i></a>
													</div>
													<div class="product-btn"><a class="btn -white product__actions__item -round" href="#"><i class="fas fa-heart"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-12 col-xl-6 px-1 px-xl-3">
									<div class="product-list">
										<div class="product-list-thumb">
											<div class="product-type"></div><a class="product-list-thumb__image" href="/shop/product-detail.html"><img src="assets/images/product/8.png" alt="Product image" /><img src="assets/images/product/9.png" alt="Product image" /></a>
										</div>
										<div class="product-list-content">
											<div class="product-list-content__top">
												<div class="product-category__wrapper">
													<h5 class="product-category">face</h5>
													<div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
												</div><a class="product-name" href="/shop/product-detail.html">White Facial Cream</a>
												<div class="product__price">
													<div class="product__price__wrapper">
														<h5 class="product-price--main">$38.00</h5>
													</div>
												</div>
											</div>
											<div class="product-list-content__bottom">
												<p class="product-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque ipsa fugiat accusantium reiciendis rem doloribus iste doloremque</p>
												<div class="product-actions">
													<div class="product-btn">
														<div class="add-to-cart "><a class="btn -round -red" href="#"><i class="fas fa-shopping-bag"></i></a>
															<h5>Add to cart</h5>
														</div>
													</div>
													<div class="product-btn"><a class="btn -white product__actions__item -round" href="#"><i class="fas fa-eye"></i></a>
													</div>
													<div class="product-btn"><a class="btn -white product__actions__item -round" href="#"><i class="fas fa-heart"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-12 col-xl-6 px-1 px-xl-3">
									<div class="product-list">
										<div class="product-list-thumb">
											<div class="product-type"></div><a class="product-list-thumb__image" href="/shop/product-detail.html"><img src="assets/images/product/9.png" alt="Product image" /><img src="assets/images/product/10.png" alt="Product image" /></a>
										</div>
										<div class="product-list-content">
											<div class="product-list-content__top">
												<div class="product-category__wrapper">
													<h5 class="product-category">face</h5>
													<div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
												</div><a class="product-name" href="/shop/product-detail.html">Orange Massage Cream</a>
												<div class="product__price">
													<div class="product__price__wrapper">
														<h5 class="product-price--main">$55.00</h5>
													</div>
												</div>
											</div>
											<div class="product-list-content__bottom">
												<p class="product-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque ipsa fugiat accusantium reiciendis rem doloribus iste doloremque</p>
												<div class="product-actions">
													<div class="product-btn">
														<div class="add-to-cart "><a class="btn -round -red" href="#"><i class="fas fa-shopping-bag"></i></a>
															<h5>Add to cart</h5>
														</div>
													</div>
													<div class="product-btn"><a class="btn -white product__actions__item -round" href="#"><i class="fas fa-eye"></i></a>
													</div>
													<div class="product-btn"><a class="btn -white product__actions__item -round" href="#"><i class="fas fa-heart"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-12 col-xl-6 px-1 px-xl-3">
									<div class="product-list">
										<div class="product-list-thumb">
											<div class="product-type"></div><a class="product-list-thumb__image" href="/shop/product-detail.html"><img src="assets/images/product/10.png" alt="Product image" /><img src="assets/images/product/11.png" alt="Product image" /></a>
										</div>
										<div class="product-list-content">
											<div class="product-list-content__top">
												<div class="product-category__wrapper">
													<h5 class="product-category">lips</h5>
													<div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
												</div><a class="product-name" href="/shop/product-detail.html">Valinta Fairness Massage Cream</a>
												<div class="product__price">
													<div class="product__price__wrapper">
														<h5 class="product-price--main">$27.00</h5>
													</div>
												</div>
											</div>
											<div class="product-list-content__bottom">
												<p class="product-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque ipsa fugiat accusantium reiciendis rem doloribus iste doloremque</p>
												<div class="product-actions">
													<div class="product-btn">
														<div class="add-to-cart "><a class="btn -round -red" href="#"><i class="fas fa-shopping-bag"></i></a>
															<h5>Add to cart</h5>
														</div>
													</div>
													<div class="product-btn"><a class="btn -white product__actions__item -round" href="#"><i class="fas fa-eye"></i></a>
													</div>
													<div class="product-btn"><a class="btn -white product__actions__item -round" href="#"><i class="fas fa-heart"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-12 col-xl-6 px-1 px-xl-3">
									<div class="product-list">
										<div class="product-list-thumb">
											<div class="product-type"></div><a class="product-list-thumb__image" href="/shop/product-detail.html"><img src="assets/images/product/11.png" alt="Product image" /><img src="assets/images/product/12.png" alt="Product image" /></a>
										</div>
										<div class="product-list-content">
											<div class="product-list-content__top">
												<div class="product-category__wrapper">
													<h5 class="product-category">lips</h5>
													<div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
												</div><a class="product-name" href="/shop/product-detail.html">Massage Cream Cucumber</a>
												<div class="product__price">
													<div class="product__price__wrapper">
														<h5 class="product-price--main">$16.00</h5>
													</div>
												</div>
											</div>
											<div class="product-list-content__bottom">
												<p class="product-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque ipsa fugiat accusantium reiciendis rem doloribus iste doloremque</p>
												<div class="product-actions">
													<div class="product-btn">
														<div class="add-to-cart "><a class="btn -round -red" href="#"><i class="fas fa-shopping-bag"></i></a>
															<h5>Add to cart</h5>
														</div>
													</div>
													<div class="product-btn"><a class="btn -white product__actions__item -round" href="#"><i class="fas fa-eye"></i></a>
													</div>
													<div class="product-btn"><a class="btn -white product__actions__item -round" href="#"><i class="fas fa-heart"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-12 col-xl-6 px-1 px-xl-3">
									<div class="product-list">
										<div class="product-list-thumb">
											<div class="product-type"></div><a class="product-list-thumb__image" href="/shop/product-detail.html"><img src="assets/images/product/12.png" alt="Product image" /><img src="assets/images/product/13.png" alt="Product image" /></a>
										</div>
										<div class="product-list-content">
											<div class="product-list-content__top">
												<div class="product-category__wrapper">
													<h5 class="product-category">lips</h5>
													<div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
												</div><a class="product-name" href="/shop/product-detail.html">Matte Walnut &amp; Bamboo Scrub</a>
												<div class="product__price">
													<div class="product__price__wrapper">
														<h5 class="product-price--main">$32.00</h5>
													</div>
												</div>
											</div>
											<div class="product-list-content__bottom">
												<p class="product-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque ipsa fugiat accusantium reiciendis rem doloribus iste doloremque</p>
												<div class="product-actions">
													<div class="product-btn">
														<div class="add-to-cart "><a class="btn -round -red" href="#"><i class="fas fa-shopping-bag"></i></a>
															<h5>Add to cart</h5>
														</div>
													</div>
													<div class="product-btn"><a class="btn -white product__actions__item -round" href="#"><i class="fas fa-eye"></i></a>
													</div>
													<div class="product-btn"><a class="btn -white product__actions__item -round" href="#"><i class="fas fa-heart"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-12 col-xl-6 px-1 px-xl-3">
									<div class="product-list">
										<div class="product-list-thumb">
											<div class="product-type"></div><a class="product-list-thumb__image" href="/shop/product-detail.html"><img src="assets/images/product/13.png" alt="Product image" /><img src="assets/images/product/14.png" alt="Product image" /></a>
										</div>
										<div class="product-list-content">
											<div class="product-list-content__top">
												<div class="product-category__wrapper">
													<h5 class="product-category">lips</h5>
													<div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
												</div><a class="product-name" href="/shop/product-detail.html">Castor Oil BP</a>
												<div class="product__price">
													<div class="product__price__wrapper">
														<h5 class="product-price--main">$24.00</h5>
													</div>
												</div>
											</div>
											<div class="product-list-content__bottom">
												<p class="product-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque ipsa fugiat accusantium reiciendis rem doloribus iste doloremque</p>
												<div class="product-actions">
													<div class="product-btn">
														<div class="add-to-cart "><a class="btn -round -red" href="#"><i class="fas fa-shopping-bag"></i></a>
															<h5>Add to cart</h5>
														</div>
													</div>
													<div class="product-btn"><a class="btn -white product__actions__item -round" href="#"><i class="fas fa-eye"></i></a>
													</div>
													<div class="product-btn"><a class="btn -white product__actions__item -round" href="#"><i class="fas fa-heart"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>


	<?php $this->view("footer", $data); ?>