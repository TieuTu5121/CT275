<?php $this->view("header",$data); ?>


<section id="main-content">
    <section class="wrapper">
        <div style="min-height: 300px;max-width: 1000px;margin: auto;">

            <style type="text/css">
            .col-md-6 {
                color: #293444;
            }

            #user_text {
                color: #6e93ce;
            }

            p {
                color: #6e93ce;
            }

            .details {

                background-color: #eee;
                box-shadow: 0px 0px 10px #aaa;
                width: 100%;
                position: absolute;
                min-height: 100px;
                left: 0px;
                padding: 10px;
                z-index: 2;
            }

            .hide {
                display: none;
            }
            </style>

            <!--profile data-->
            <?php if(is_object($profile_data)): ?>


            <!-- WHITE PANEL - TOP USER -->

            <div class="white-header" style="color:grey">
                <h5>MY ACCOUNT</h5>
            </div>
            <br />
            <p><img src="<?=ASSETS . THEME ?>admin/img/ui-zac.jpg" class="img-circle" width="80"></p>
            <p><b><?=$profile_data->name?></b></p>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <p id="user_text" class="small mt">MEMBER SINCE <?=date("jS M Y",strtotime($profile_data->date))?></p>
                </div>
                <div class="col-md-6">
                    <p id="user_text" class="small mt">TOTAL SPEND</p>
                </div>

            </div>
            <hr style="color:#888">




            <!--end profile data-->

            <br><br style="clear: both;">
            <?php if(is_array($orders)):?>

            <table class="table">
                <thead>
                    <tr>
                        <th>Mã đơn</th>
                        <th>Ngày đặt</th>
                        <th>Tổng thanh toán</th>
                        <th>Địa chỉ giao hàng</th>
                        <th>Tỉnh/Thành Phố</th>
                        <th>Số điện thoại</th>
                        <th>...</th>
                    </tr>
                </thead>
                <tbody onclick="show_details(event)">
                    <?php foreach($orders as $order):?>

                    <tr style="position: relative;">
                        <td><?=$order->id?></td>
                        <td><?=date("jS M Y H:i a",strtotime($order->date))?></td>
                        <td><?=$order->total?> VNĐ</td>
                        <td><?=$order->delivery_address?></td>
                        <td><?=$order->state?></td>
                        <td><?=$order->mobile_phone?></td>
                        <td>
                            <i class="fa fa-arrow-down"></i>
                            <div class="js-order-details details hide">
                                <a style="float: right;cursor: pointer;">Đóng</a>
                                <h3>Đơn hàng #<?=$order->id?></h3>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Số lượng</th>
                                            <th>Sản phẩm</th>
                                            <th>Thành tiền</th>
                                            <th>Tổng</th>
                                        </tr>
                                    </thead>
                                    <?php if(isset($order->details) && is_array($order->details)):?>
                                    <?php foreach($order->details as $detail):?>
                                    <tbody>
                                        <tr>
                                            <td><?=$detail->qty?></td>
                                            <td><?=$detail->description?></td>
                                            <td><?=$detail->amount?></td>
                                            <td><?=$detail->total?></td>
                                        </tr>
                                    </tbody>

                                    <?php endforeach;?>

                                    <?php else: ?>
                                    <div>No order details were found for this order</div>
                                    <?php endif;?>
                                </table>
                                <h3 class="pull-right">Tổng thanh toán: <?=$order->grand_total?></h3>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>

            <?php else: ?>
            <h3 style="text-align: center;">Người dùng này chưa có đơn hàng nào</h3>
            <?php endif;?>

            <?php else: ?>
            <h3 style="text-align: center;">Sorry! that profile could not be found</h3>
            <?php endif;?>

        </div>
    </section>
</section>

<script type="text/javascript">
function show_details(e) {

    var row = e.target.parentNode;
    if (row.tagName != "TR")
        row = row.parentNode;

    var details = row.querySelector(".js-order-details");

    //get all rows
    var all = e.currentTarget.querySelectorAll(".js-order-details");
    for (var i = 0; i < all.length; i++) {
        if (all[i] != details) {
            all[i].classList.add("hide");
        }
    }

    if (details.classList.contains("hide")) {
        details.classList.remove("hide");
    } else {
        details.classList.add("hide");
    }
}
</script>
<?php $this->view("footer",$data); ?>