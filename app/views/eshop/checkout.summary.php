<?php $this->view("header", $data); ?>

<?php

if (isset($errors) && count($errors) > 0) {

	echo "<div>";
	foreach ($errors as $error) {

		echo "<div class='alert alert-danger' style='padding:5px;max-width:500px;margin:auto;text-align:center;'>$error</div>";
	}
	echo "</div>";
}

?>
<section id="cart_items">
	<div class="container">
		<div class="breadcrumbs">
			<ul class="breadcrumb">
				
				<li class="active">Xác nhận thanh toán</li>
			</ul>
		</div>
		<!--/breadcrums-->


		<?php if (is_array($orders)) : ?>

			<div class="register-req">
				<p style="text-align: center;">Vui lòng xác nhận thông tin sau</p>
			</div>
			<br>
			<!--/register-req-->

			<?php foreach ($orders as $order) : ?>
				<?php $order = (object)$order; ?>

				<div class="js-order-details details">

					<!--order details-->
					<div style="display: flex;">
						<table class="table" style="flex: 1;margin: 4px;">

							<tr>
								<th>Country</th>
								<td><?= $order->country ?></td>
							</tr>
							<tr>
								<th>State</th>
								<td><?= $order->state ?></td>
							</tr>
							<tr>
								<th>Delivery Address </th>
								<td><?= $order->address1 ?></td>
							</tr>


						</table>
						<table class="table" style="flex: 1;margin: 4px;">
							<tr>
								<th>Zip/Postal Code</th>
								<td><?= $order->postal_code ?></td>
							</tr>
							<tr>
								<th>Home Phone</th>
								<td><?= $order->home_phone ?></td>
							</tr>
							<tr>
								<th>Mobile Phone</th>
								<td><?= $order->mobile_phone ?></td>
							</tr>
							<tr>
								<th>Ngày</th>
								<td><?= date("Y-m-d") ?></td>
							</tr>

						</table>
					</div>

					<hr>
					<h4>Đơn hàng</h4><br>
					<table class="table" border="1" cellspacing="" width="100%"> 
						<thead>
							<tr>
								<th>Số lượng</th>
								<th>Sản phẩm</th>
								<th>Giá</th>
								<th>Thành tiền</th>
							</tr>
						</thead> <br>
						<?php if (isset($order_details) && is_array($order_details)) : ?>
							<?php foreach ($order_details as $detail) : ?>
								<tbody>
									<tr>
										<td><?= $detail->cart_qty ?></td>
										<td><?= $detail->description ?></td>
										<td><?= $detail->price ?></td>
										<td><?= ($detail->cart_qty * $detail->price) ?></td>
									</tr>
								</tbody>

							<?php endforeach; ?>

						<?php else : ?>
							<div style="text-align: center;">No order details were found for this order</div>
						<?php endif; ?>
					</table>
					<br>
					<h3 class="pull-right">Grand Total: <?= $sub_total ?></h3>
				</div>

			<?php endforeach; ?>


		<?php else : ?>
			<h3 style="text-align: center;">
				Please add some items in the cart first!
			</h3>
		<?php endif; ?>
		<hr style="clear: both;">
		<a href="<?= ROOT ?>checkout">
			<input type="button" class=" btn btn-warning pull-left" value="< Back to checkout" name="">
		</a>
		<br><br>
		<form method="post">
			<input type="submit" class="btn btn-warning pull-right" value="Pay >" name="">
		</form>
	</div>
</section> 
<!--/#cart_items-->

<script type="text/javascript">
	function get_states(id) {

		send_data({
			id: id.trim()
		}, "get_states");
	}

	function send_data(data = {}, data_type) {

		var ajax = new XMLHttpRequest();

		ajax.addEventListener('readystatechange', function() {

			if (ajax.readyState == 4 && ajax.status == 200) {
				handle_result(ajax.responseText);
			}
		});

		ajax.open("POST", "<?= ROOT ?>ajax_checkout/" + data_type + "/" + JSON.stringify(data), true);
		ajax.send();
	}

	function handle_result(result) {

		console.log(result);
		if (result != "") {
			var obj = JSON.parse(result);

			if (typeof obj.data_type != 'undefined') {

				if (obj.data_type == "get_states") {

					var select_input = document.querySelector(".js-state");
					select_input.innerHTML = "<option>-- State / Province / Region --</option>";

					for (var i = 0; i < obj.data.length; i++) {

						select_input.innerHTML += "<option value='" + obj.data[i].id + "'>" + obj.data[i].state + "</option>";
					}
				}
			}

		}


	}
</script>
<?php $this->view("footer", $data); ?>