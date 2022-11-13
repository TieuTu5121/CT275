<?php $this->view("header", $data); ?>
<div class="container">
	<div class="breadcrumbs">
		<ul class="breadcrumb">

			<li class="active">Login</li>
		</ul>
	</div>

	<section id="form" style="margin-top: 5px;">
		<div class="container">
			<div class="row" style="text-align: center;">

				<span style="font-size:18px;color:red;"><?php check_error() ?></span>

				<div class="col-sm-4 col-sm-offset-1" style="float: none;display: inline-block;">
					<div class="login-form">
						<h2>Đăng nhập</h2>
						<form method="post">
							<table>
								<tr>
									<td>Email</td>
									<td>
										<input type="email" name="email" value="<?= isset($_POST['email']) ? $_POST['email'] : ''; ?>" placeholder="Email Address" />

									</td>
								</tr>
								<tr>
									<td>Password</td>
									<td>
										<input type="password" name="password" value="<?= isset($_POST['password']) ? $_POST['password'] : ''; ?>" placeholder="Password" />

									</td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td> <button type="submit" class="btn btn-default">Login</button></td>
								</tr>
							</table>


						</form>
						<br>
						<a href="<?= ROOT ?>signup">Chưa có tài khoản? Đăng kí ngay</a>
					</div>
				</div>

			</div>
		</div>
	</section>
</div>

<?php $this->view("footer", $data); ?>