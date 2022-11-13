<?php $this->view("header", $data); ?>

<section id="form" style="margin-top: 5px;">
	<!--form-->
	<div class="container">
		<div class="row" style="text-align: center;">


			<span style="font-size:18px;color:red;"><?php check_error() ?></span>

			<div class="col-sm-6" style="float: none;display: inline-block;">
				<div class="signup-form">
					<!--sign up form-->
					<h2>Đăng kí tài khoản</h2>
					<form method="post">
						<table>
							<tr>
								<td>Họ tên:</td>
								<td><input name="name" value="<?= isset($_POST['name']) ? $_POST['name'] : ''; ?>" type="text" placeholder="Tên" /></td>
							</tr>
							<tr>
								<td>Email:</td>
								<td>
									<input name="email" value="<?= isset($_POST['email']) ? $_POST['email'] : ''; ?>" type="email" placeholder="Email" />
								</td>
							</tr>
							<tr>
								<td>Mật khẩu:</td>
								<td>
									<input name="password" type="password" placeholder="Mật khẩu" />
								</td>
							</tr>
							<tr>
								<td>Nhập lại mật khẩu:</td>
								<td>
									<input name="password2" type="password" placeholder="Nhập lại mật khẩu" />
								</td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td>
									<button type="submit" class="btn btn-default">Đăng kí</button>

								</td>
							</tr>
						</table>

					</form>
				</div>
				<!--/sign up form-->
			</div>
		</div>
	</div>
</section>
<!--/form-->

<?php $this->view("footer", $data); ?>