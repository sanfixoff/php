
<div class="row">
    <div class="col-md-4 order-md-2 mb-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Ваша корзина</span>
            <span class="badge badge-secondary badge-pill">3</span>
        </h4>
        <ul class="list-group mb-3">

            <?php if (is_array($data)) {
                foreach ($data as $item) { ?>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0"><?php echo $item['name'];?></h6>
                        </div>
                        <span class="text-muted"><?php echo BASKET::getTotalProduct($item['id']) ?> руб. </span>
                    </li>
                <?php }
            } ?>

            <li class="list-group-item d-flex justify-content-between">
                <span><?php echo BASKET::getTotal() ?> Руб.</span>
                <strong><?php echo BASKET::getTotal() ?> Руб.</strong>
            </li>
        </ul>
    </div>


    <div class="col-md-8 order-md-1">
        <h4 class="mb-3">Оформление заказа</h4>
        <form class="needs-validation" novalidate="" method="POST" action="/order/create/">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="firstName">Ваше имя:</label>
                    <input type="text" class="form-control" name="firstName" id="firstName" placeholder="" value="" required="">
                    <div class="invalid-feedback">
                        Valid first name is required.
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="lastName">Ваша фамилия:</label>
                    <input type="text" class="form-control" name="lastName" id="lastName" placeholder="" value="" required="">
                    <div class="invalid-feedback">
                        Valid last name is required.
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="username">Ваш логин:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">@</span>
                    </div>
                    <input type="text" class="form-control" name="login" id="username" placeholder="Username" required="">
                    <div class="invalid-feedback" style="width: 100%;">
                        Your username is required.
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="email">Ваша почта: </label>
                <input type="email" class="form-control" name="email" id="email" placeholder="you@example.com">
                <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                </div>
            </div>

            <div class="mb-3">
                <label for="email">Ваш телефон: </label>
                <input type="email" class="form-control" name="phone" id="phone" placeholder="348762">
                <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                </div>
            </div>

            <div class="mb-3">
                <label for="address">Ваш адресс:</label>
                <input type="text" class="form-control" name="address" id="address" placeholder="1234 Main St" required="">
                <div class="invalid-feedback">
                    Please enter your shipping address.
                </div>
            </div>

            <div class="mb-3">
                <label for="address">Комментарий:</label>
                <input type="text" class="form-control" name="comment" id="comment" placeholder="some text" required="">
                <div class="invalid-feedback">
                    Please enter your shipping address.
                </div>
            </div>

            <button class="btn btn-primary btn-lg btn-block" type="submit">Оформить заказ</button>
        </form>
    </div>
</div>