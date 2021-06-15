<h1>Каталог</h1>



<div class="container">
    <div class="card-deck mb-3 text-center" style="display: flex; justify-content: space-between;">
        <?php
        foreach($data as $row){ ?>
        <div class="card mb-4 box-shadow" style="width: 24%;">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal"><?php echo $row['name'];?></h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title"><?php echo $row['price'];?> <small class="text-muted"> руб.</small></h1>
                <div><?php echo $row['description'];?></div>
                <br>
                <form action="/catalog/addbasket" method="POST">
                    <input type="hidden" name="id_product" value="<?php echo $row['id'];?>">
                    <input type="submit" class="btn btn-lg btn-block btn-outline-primary" value="Добавить в корзину">
                </form>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
