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
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li class="active">Check out</li>
			</ol>
		</div>
		<!--/breadcrums-->


		<?php if (is_array($ROWS)) : ?>

			<div class="register-req">
				<p>Fileds with a * are required</p>
			</div>
			<!--/register-req-->

			<?php

			$address1 		= "";
			$address2 		= "";
			$postal_code 	= "";
			$country 		= "";
			$state 			= "";
			$home_phone 	= "";
			$mobile_phone 	= "";
			$message 	= "";

			if (isset($POST_DATA)) {

				extract($POST_DATA);
			}

			?>


			<form method="post">
				<div class="checkout__form">
					<!-- <div class="checkout__form__contact">
                        <div class="checkout__form__contact__title">
                          <h5 class="checkout-title">Contact information</h5>
                          <p> Already have an account?<a href="#">Login</a></p>
                        </div>
                        <div class="input-validator">
                          <input type="text" name="contact" placeholder="Email or mobile phone number"/>
                        </div>
                        <label class="checkbox-label" for="subcribe-news">
                          <input type="checkbox" id="subcribe-news" name="subcribeNews"/>Keep me up to dateon news and exclusive offers
                        </label>
                      </div> -->
					<div class="checkout__form__shipping">
						<h5 class="checkout-title">Địa chỉ giao hàng</h5>
						<br>
						<div class="row">
							<div class="col-12 col-md-6">
								<div class="input-validator">
									<label>Địa chỉ <span>*</span>
										<input type="text" name="address1" value="<?= $address1 ?>" />
									</label>
								</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="input-validator">
									<label>Zip Code<span>*</span>
										<input type="text" name="postal_code" value="<?= $postal_code ?>" />
									</label>
								</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="input-validator">
									<label>Country<span>*</span>
										<select name="country" class="js-country" oninput="get_states(this.value)" required>
											<?php if ($country == "") {
												echo "<option>-- Country --</option>";
											} else {
												echo "<option value='$country' >$country</option>";
											} ?>
											<?php if (isset($countries) && $countries) : ?>
												<?php foreach ($countries as $row) : ?>

													<option value="<?= $row->country ?>"><?= $row->country ?></option>

												<?php endforeach; ?>
											<?php endif; ?>
										</select>
									</label>
								</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="input-validator">
									<label>State<span>*</span>
										<select name="state" value="<?= $state ?>" class="js-state" required>
											<?php if ($state == "") {
												echo "<option>-- State / Province / Region --</option>";
											} else {
												echo "<option>$state</option>";
											} ?>


										</select><br><br>
									</label>
								</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="input-validator">
									<label>Home phone<span>*</span>
										<input type="text" name="home_phone" value="<?= $home_phone ?>" />
									</label>
								</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="input-validator">
									<label>Mobile phone<span>*</span>
										<input type="text" name="mobile_phone" value="<?= $mobile_phone ?>" />
									</label>
								</div>
							</div>
							

							<label class="checkbox-label">
								<input type="submit" class="btn btn-warning pull-right" value="Tiếp theo" />
							</label>
						</div>
					</div>
				</div>
			</form>

		<?php else : ?>
			<h3 style="text-align: center;">
				Chưa có sản phẩm trong giỏ hàng
			</h3>
		<?php endif; ?>

		<a href="<?= ROOT ?>cart">
			<input type="button" class="btn btn-warning pull-left" value="< Quay lại giỏ hàng" name="">
		</a>
	</div>
</section>
<!--/#cart_items-->

<script type="text/javascript">
	function get_states(country) {

		send_data({
			id: country.trim()
		}, "get_states");
	}

	function send_data(data = {}, data_type) {

		var ajax = new XMLHttpRequest();

		ajax.addEventListener('readystatechange', function() {

			if (ajax.readyState == 4 && ajax.status == 200) {
				handle_result(ajax.responseText);
			}
		});

		var info = {};
		info.data_type = data_type;
		info.data = data;

		ajax.open("POST", "<?= ROOT ?>ajax_checkout", true);
		ajax.send(JSON.stringify(info));
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

						select_input.innerHTML += "<option value='" + obj.data[i].state + "'>" + obj.data[i].state + "</option>";
					}
				}
			}

		}


	}
</script>
<?php $this->view("footer", $data); ?>