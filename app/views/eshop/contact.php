<?php $this->view("header", $data); ?>

<div class="breadcrumb">
    <div class="container">
        <h2>Liên hệ</h2>

    </div>
</div>
<div class="contact">
    <div class="container">
        <div class="row">

            <div class="col-12 col-md-6">
                <h3 class="contact-title">Thông tin liên lạc</h3>
                <div class="contact-info__item">
                    <div class="contact-info__item__icon"><i class="fas fa-map-marker-alt"></i></div>
                    <div class="contact-info__item__detail">
                        <h3>Địa chỉ</h3>
                        <p>Đường 3/2, phường Xuân Khánh, Ninh Kiều, Cần Thơ</p>
                    </div>
                </div>
                <div class="contact-info__item">
                    <div class="contact-info__item__icon"><i class="fas fa-phone-alt"></i></div>
                    <div class="contact-info__item__detail">
                        <h3>Số điện thoại</h3>
                        <p>+84 794 201 716 | +84 791 33 011</p>
                    </div>
                </div>
                <div class="contact-info__item">
                    <div class="contact-info__item__icon"><i class="far fa-envelope"></i></div>
                    <div class="contact-info__item__detail">
                        <h3>Email</h3>
                        <p>Eliah@gmail.com</p>
                    </div>
                </div>
                <div class="contact-info__item">
                    <div class="contact-info__item__icon"><i class="far fa-clock"></i></div>
                    <div class="contact-info__item__detail">
                        <h3>Mở cửa:</h3>
                        <p>Mỗi ngày: 8.00am - 10.00.pm</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <?php if (is_array($errors) && count($errors) > 0) : ?>
                <?php foreach ($errors as $error) : ?>
                <div class="status alert alert-danger" style=""><?= $error ?></div>
                <?php endforeach; ?>
                <?php endif; ?>
                <?php if (isset($_GET['success'])) : ?>
                <div class="status alert alert-success" style="">Message sent successfully</div>
                <?php endif; ?>
                <h3 class="contact-title">Liên hệ</h3>
                <div class="contact-form">
                    <form id="main-contact-form" name="contact-form" method="post">

                        <div class="input-validator">
                            <input type="text" name="name" class="form-control" required="required"
                                placeholder="Họ Và Tên" value="<?= isset($POST['name']) ? $POST['name'] : '' ?>">
                        </div>
                        <div class="input-validator">
                            <input type="email" name="email" class="form-control" required="required"
                                placeholder="Email" value="<?= isset($POST['email']) ? $POST['email'] : '' ?>">
                        </div>
                        <div class="input-validator">
                            <input type="text" name="subject" class="form-control" required="required"
                                placeholder="Chủ đề" value="<?= isset($POST['subject']) ? $POST['subject'] : '' ?>">
                        </div>
                        <div class="input-validator">
                            <textarea name="message" id="message" required="required" class="form-control" rows="8"
                                placeholder="Ghi chú ở đây !"><?= isset($POST['subject']) ? $POST['subject'] : '' ?></textarea>
                        </div>
                        <div>
                            <input type="submit" class="btn btn-primary pull-right" value="Gửi">
                        </div>
                    </form>
                </div>
            </div>
            <!-- <div class="col-12">
				<iframe class="contact-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26544.761428132653!2d105.83081260286463!3d21.01523825635793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab9bd9861ca1%3A0xe7887f7b72ca17a9!2zSMOgIE7hu5lpLCBIb8OgbiBLaeG6v20sIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1594639675485!5m2!1svi!2s" width="100%" height="450" frameborder="0" allowfullscreen=""></iframe>
			</div> -->
        </div>
    </div>
</div>
<?php $this->view("footer", $data); ?>