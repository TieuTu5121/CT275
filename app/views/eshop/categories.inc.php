<div class="category-two">
    <div class="category-two-slider">
        <?php if (isset($categories) && is_array($categories)) { 
                foreach ($categories as $category) {
            ?>
        <a style="text-decoration: none;" href="<?= ROOT.'shop/category?cat_find='. $category->category ?>">
            <div class="slider-item">
                <div class="category-two__item">
                    <h3><?= $category->category?></h3>
                </div>
            </div>
        </a>
        <?php   }
            } ?>
    </div>

</div>