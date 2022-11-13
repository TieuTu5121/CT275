<?php $this->view("header", $data); ?>


<div class="shop">
  <div class="container">
    <div class="product-detail__wrapper">
      <div class="row">
        <div class="col-12 col-md-6">
          <div class="product-detail__slide-two">
            <div class="product-detail__slide-two__big">
              <div class="slider__item"><img src="<?= ROOT . $product->image ?>" alt="Product image" /></div>
              <div class="slider__item"><img src="<?= ROOT . $product->image2 ?>" alt="Product image" /></div>
              <div class="slider__item"><img src="<?= ROOT . $product->image3 ?>" alt="Product image" /></div>
              <div class="slider__item"><img src="<?= ROOT . $product->image4 ?>" alt="Product image" /></div>
            </div>
            <div class="product-detail__slide-two__small">
              <div class="slider__item"><img src="<?= ROOT . $product->image ?>" alt="Product image" /></div>
              <div class="slider__item"><img src="<?= ROOT . $product->image2 ?>" alt="Product image" /></div>
              <div class="slider__item"><img src="<?= ROOT . $product->image3 ?>" alt="Product image" /></div>
              <div class="slider__item"><img src="<?= ROOT . $product->image4 ?>" alt="Product image" /></div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="product-detail__content">
            <div class="product-detail__content">
              <div class="product-detail__content__header">
                <h5><?= $product->catname; ?></h5>
                <h2><?= $product->description; ?></h2>
              </div>

              <h3><?= number_format($product->price, 0, '.', ',') . ' VNĐ' ?></h3>
              <div class="divider"></div>
              <div class="product-detail__content__footer">

                <div class="product-detail__controller">
                 
                  <div class="add-to-cart -dark"><a class="btn -round -red" href="#"><i class="fas fa-shopping-bag"></i></a>
                    <a href="<?= ROOT .'add_to_cart/'. $product->id ?>">
                      <h5>Add to cart</h5>
                    </a>
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
<div class="product-slide">
  <div class="container">
    <div class="section-title -center" style="margin-bottom: 1.875em">
      <h2>Sản phẩm cùng loại</h2>
    </div>
    <div class="product-slider">
      <div class="product-slide__wrapper">
        <?php if (isset($relative_products) && is_array($relative_products)) {
          foreach ($relative_products as $product) {
        ?>

            <div class="product-slide__item">
              <div class="product ">

                <div class="product-thumb"><a class="product-thumb__image" href="<?= ROOT . 'product_details/' . $product->slag ?>"><img src="<?= ROOT . $product->image ?>" alt="Product image" /><img src="<?= ROOT . $product->image ?>" /></a>
                  <div class="product-thumb__actions">
                    <div class="product-btn"><a class="btn -white product__actions__item -round product-atc" href="#"><i class="fas fa-shopping-bag"></i></a>
                    </div>
                    <div class="product-btn"><a class="btn -white product__actions__item -round product-qv" href="#"><i class="fas fa-eye"></i></a>
                    </div>
                    <div class="product-btn"><a class="btn -white product__actions__item -round" href="#"><i class="fas fa-heart"></i></a>
                    </div>
                  </div>
                </div>
                <div class="product-content">
                  <div class="product-content__header">
                    <div class="product-category"><?= $product->catname ?></div>
                   
                  </div><a class="product-name" href="<?= ROOT . 'product_details/' . $product->slag ?>"><?= $product->description; ?></a>
                  <div class="product-content__footer">
                    <h5 class="product-price--main"><?= number_format($product->price, 0, '.', ',') . ' VNĐ' ?></h5>

                  </div>
                </div>
              </div>
            </div>
        <?php
          }
        } ?>
      </div>
    </div>
  </div>
</div>



<?php $this->view("footer", $data); ?>