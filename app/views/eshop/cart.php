<?php $this->view("header", $data); ?>

<div id="content">
    <div class="breadcrumb">
        <div class="container">
            <h2>Giỏ hàng</h2>

        </div>
    </div>
    <div class="shop">
        <div class="container">
            <div class="cart">
                <div class="container">
                    <div class="cart__table">
                        <div class="cart__table__wrapper">
                            <table>
                                <colgroup>
                                    <col style="width: 40%" />
                                    <col style="width: 17%" />
                                    <col style="width: 17%" />
                                    <col style="width: 17%" />
                                    <col style="width: 9%" />
                                </colgroup>
                                <thead>
                                    <tr>
                                        <th>Sản phẩm</th>
                                        <th>Giá</th>
                                        <th>Số lượng</th>
                                        <th>Thành tiền</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($ROWS) : ?>
                                    <?php foreach ($ROWS as $row) : ?>
                                    <tr>
                                        <td>
                                            <div class="cart-product">
                                                <div class="cart-product__image"><img
                                                        src="<?= ROOT ?><?= $row->image ?>" alt="Product image" /></div>
                                                <div class="cart-product__content">
                                                    <h5><?= $row->description ?></h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td><?= number_format($row->price, 0, '.', ',') . ' VNĐ' ?></td>
                                        <td>
                                            <div class="quantity-controller ">
                                                <a class="cart_quantity_down"
                                                    href="<?= ROOT ?>add_to_cart/subtract_quantity/<?= $row->id ?>"> -
                                                </a>
                                                <input oninput="edit_quantity(this.value,'<?= $row->id ?>')"
                                                    class="cart_quantity_input" type="text" name="quantity"
                                                    value="<?= $row->cart_qty ?>" autocomplete="off" size="2">
                                                <a class="cart_quantity_up"
                                                    href="<?= ROOT ?>add_to_cart/add_quantity/<?= $row->id ?>"> +
                                                </a>
                                            </div>
                                        </td>
                                        <td><?= number_format($row->price * $row->cart_qty, 0, '.', ',') . ' VNĐ' ?>
                                        </td>
                                        <td><a delete_id="<?= $row->id ?>"
                                                onclick="delete_item(this.getAttribute('delete_id'))"
                                                href="<?= ROOT ?>add_to_cart/remove/<?= $row->id ?>"><i
                                                    class="fal fa-times"></i></a></td>
                                    </tr>
                                    <?php endforeach; ?>
                                    <?php else : ?>

                                    <div style="font-size: 18px;text-align: center;padding: 6px;">Chưa có sản phẩm trong
                                        giỏ hàng</div>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="cart__table__footer"><a href="<?= ROOT ?>"><i class="fal fa-long-arrow-left"></i>Về
                                trang chủ</a></div>
                    </div>
                    <div class="cart__total">
                        <div class="row">

                            <div class="col-12 col-md-4">
                                <div class="cart__total__content">
                                    <h3>Cart</h3>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <th>Tạm tính</th>
                                                <td><?= number_format($sub_total, 0, '.', ',') . ' VNĐ' ?></td>
                                            </tr>

                                        </tbody>
                                    </table><a class="btn -dark" href="<?= ROOT ?>checkout">Thanh toán</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




</div>
<script type="text/javascript">
function edit_quantity(quantity, id) {

    if (isNaN(quantity))
        return;

    send_data({
        quantity: quantity.trim(),
        id: id.trim()
    }, "edit_quantity");
}

function delete_item(id) {

    send_data({
        id: id.trim()
    }, "delete_item");
}

function send_data(data = {}, data_type) {

    var ajax = new XMLHttpRequest();

    ajax.addEventListener('readystatechange', function() {

        if (ajax.readyState == 4 && ajax.status == 200) {
            handle_result(ajax.responseText);
        }
    });

    ajax.open("POST", "<?= ROOT ?>ajax_cart/" + data_type + "/" + JSON.stringify(data), true);
    ajax.send();
}

function handle_result(result) {

    console.log(result);
    if (result != "") {
        var obj = JSON.parse(result);

        if (typeof obj.data_type != 'undefined') {

            if (obj.data_type == "delete_item") {
                window.location.href = window.location.href;
            } else
            if (obj.data_type == "edit_quantity") {

                window.location.href = window.location.href;
            }
        }

    }


}
</script>
<?php $this->view("footer", $data); ?>