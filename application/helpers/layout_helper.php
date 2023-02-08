<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

function category($cat, $col)
{
    // print_r($cat);
    if ($cat['is_visible'] == 1) {
?>
        <div class="col-md-<?= $col ?>  ">


            <div class="single-category single-category--type-one text-center">
                <div class="single-category--type-one__image">
                    <a href="<?= base_url('collection/' . $cat['id'] . '/' . url_title($cat['name'], "dash", TRUE)) ?>"><img src="<?= setImage($cat['image_url'], 'uploads/category/') ?>" class="img-fluid" alt="" style="height:350px;"></a>
                    <!-- <span class="floter">UP TO $600 OFF</span> -->
                </div>
                <div class="single-category--type-one__content d-flex align-items-center justify-content-between">
                    <h2 class="title mb-0 dark_color">Shop <?= $cat['name'] ?></h2>
                    <!-- <a href="" class="warranty_label"> <img src="<?= base_url() ?>assets/images/dark-shield.png" alt=""> 10-Year Warranty </a> -->
                </div>
            </div>
        </div>
        <?php
    }
}

function product($pro)
{
    // print_r($pro); 
    if ($pro != '') {
        if ($pro['is_visible'] == true) {
            $img = getRowByMoreId('bc_product_images', array('product_id' => $pro['id']));
        ?>
            <div class="col">
                <div class="single-grid-product">
                    <div class="single-grid-product__image">
                        <div class="product-badge-wrapper">
                            <?php
                            if ($pro['is_bestseller'] == '1') {
                            ?>
                                <span class="onsale dark_color semi-bold">BEST SELLER</span>
                            <?php
                            } else {
                            ?>
                            <?php
                            }
                            ?>
                            <?php
                            if ($pro['is_featured'] == '1') {
                            ?>
                                <!--<span class="onsale dark_color semi-bold bg-warning">FEATURED</span>-->
                            <?php
                            } else {
                            ?>
                            <?php
                            }
                            ?>

                        </div>
                        <a href="<?= base_url('product_details/' . $pro['id'] . '/' . url_title($pro['name'], "dash", TRUE)) ?>" class="image-wrap">
                            <img src="<?= (($img != '') ? setImage($img[0]['image_file'], 'uploads/product/') : setImage('', 'uploads/product/')) ?>" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="single-grid-product__content row">
                        <h3 class="title dark_color col-md-7"><a href="<?= base_url('product_details/' . $pro['id'] . '/' . url_title($pro['name'], "dash", TRUE)) ?>" class="dark_color semi-bold"><?= $pro['name'] ?></a></h3>
                        <a href="<?= base_url('product_details/' . $pro['id'] . '/' . url_title($pro['name'], "dash", TRUE)) ?>" class="favorite-icon dark_color semi-bold col-md-5 text-right">
                            $ <?= (!empty($pro['discounted_price'])) ? $pro['discounted_price'] : $pro['price'] ?> <strike>
                                <?php
                                if (!empty($pro['discounted_price'])) {
                                ?>
                                    <span style="color: #4f5e8d;font-size: 12px;">$ <?= $pro['price'] ?></span>
                                <?php
                                }
                                ?>
                            </strike>
                        </a>
                        <p class="pl-3 pr-3"><?= $pro['sdesc'] ?></p>

                    </div>
                </div>
            </div>
        <?php
        }
    }
}


function product_list($pro, $col)
{
    // print_r($pro); 

    if ($pro['is_visible'] == true) {
        $img = getRowByMoreId('bc_product_images', array('product_id' => $pro['id']));
        ?>
        <div class="col-md-<?= $col ?> mb-4">
            <div class="single-grid-product">
                <div class="single-grid-product__image">
                    <div class="product-badge-wrapper">
                        <?php
                        if ($pro['is_bestseller'] == '1') {
                        ?>
                            <span class="onsale dark_color semi-bold">BEST SELLER</span>
                        <?php
                        } else {
                        ?>
                        <?php
                        }
                        ?>
                        <?php
                        if ($pro['is_featured'] == '1') {
                        ?>
                            <span class=" onsale dark_color semi-bold bg-warning">FEATURED</span>
                        <?php
                        } else {
                        ?>
                        <?php
                        }
                        ?>
                    </div>

                    <?php
                    if (!empty($pro['discount_per'])) {
                    ?>
                        <div class="product-badge-wrapper">
                            <span class="discount_badge onsale semi-bold bg-danger text-white"><?= $pro['discount_per'] ?>% off</span>
                        </div>
                    <?php
                    } else {
                    ?>
                    <?php
                    }
                    ?>

                    <a href="<?= base_url('product_details/' . $pro['id'] . '/' . url_title($pro['name'], "dash", TRUE)) ?>" class="image-wrap">
                        <img src="<?= setImage($img[0]['image_file'], 'uploads/product/') ?>" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="single-grid-product__content row p-3">
                    <h3 class="title dark_color col-md-7"><a href="<?= base_url('product_details/' . $pro['id'] . '/' . url_title($pro['name'], "dash", TRUE)) ?>" class="dark_color semi-bold"><?= $pro['name'] ?></a></h3>
                    <a href="<?= base_url('product_details/' . $pro['id'] . '/' . url_title($pro['name'], "dash", TRUE)) ?>" class="favorite-icon dark_color semi-bold col-md-5 text-right">
                        $ <?= (!empty($pro['discounted_price'])) ? $pro['discounted_price'] : $pro['price'] ?> <strike>
                            <?php
                            if (!empty($pro['discounted_price'])) {
                            ?>
                                <span style="color: #4f5e8d;font-size: 12px;">$ <?= $pro['price'] ?></span>
                            <?php
                            }
                            ?>
                        </strike>
                        <!--<span class="text-success"><?= $pro['discount_per'] ?> %</span>-->
                    </a>
                    <p class="  pl-3 pr-3"><?= $pro['sdesc'] ?></p>

                </div>
            </div>
        </div>
        <?php
    }
}
function cartlist()
{

    $ci = &get_instance();
    foreach ($ci->cart->contents() as $items) {
        if ($items['is_visible'] == true) {
            $var = explode('--', $items['variant']);
        ?>
            <div class="minicart-wrapper__items__single">
                <a href="javascript:void(0)" class="close-icon"><i class="pe-7s-close"></i></a>
                <div class="image">
                    <a href="#">
                        <img src="<?= setImage($items['image'], 'uploads/product/'); ?>" class="img-fluid" alt="" style="height:80px;">
                    </a>
                </div>
                <div class="content">
                    <p class="product-title text-uppercase">
                        <a href="#" style="font-size: 13px;">
                            <?= $items['name']; ?><br>
                            <span style="font-size:10px"><?= (($var[1] != '') ? '   ' . $var[1] . ' Size' : ''); ?>
                            </span>
                        </a>
                    </p>
                    <p class="product-calculation">
                        <?php
                        if ($items['discount_price'] != '') {
                        ?>
                            <span class="price">$ <?= $items['discount_price'] ?>
                                <strike><span style="color: #4f5e8d;font-size: 12px;">$ <?= $items['price'] ?></span></strike>
                            </span>
                        <?php
                        } else {
                        ?>
                            <span class="price">$ <?= $items['price'] ?></span>
                        <?php
                        }
                        ?>

                    </p>
                </div>
            </div>
    <?php
        }
    }
}

function review($rev)
{

    echo '	<div class="single-testimonial p-2 m-1">
    
    <div class="single-testimonial__content buy_now  p-4">
    
        <p class="testimonial-text  text-center text-white">' . $rev['text'] . '  </p>

        <p class="testimonial-author  text-white">- ' . $rev['name'] . ' -</p>

    </div>
</div>';
    // <div class="rating">
    //             <i class="fa fa-star ' . (($rev['rating'] == 1) ? 'active' : '') . '"></i>
    //             <i class="fa fa-star ' . (($rev['rating'] <= 2) ? 'active' : '') . '"></i>
    //             <i class="fa fa-star ' . (($rev['rating'] <= 3) ? 'active' : '') . '"></i>
    //             <i class="fa fa-star ' . (($rev['rating'] <= 4) ? 'active' : '') . '"></i>
    //             <i class="fa fa-star ' . (($rev['rating'] <= 5) ? 'active' : '') . '"></i>
    //         </div>
}


function blog_list($pro, $col)
{
    ?>
    <div class="col-md-<?= $col ?> mb-4">
        <div class="single-grid-product">
            <div class="single-grid-product__image">
                <a href="<?= base_url('blog_details/' . $pro['id'] . '/' . url_title($pro['title'], "dash", TRUE)) ?>" class="image-wrap">
                    <img src="<?= base_url('assets/img/cat-default.jpg') ?>" class="img-fluid" alt="">
                </a>
            </div>
            <div class="single-grid-product__content row p-3">
                <h3 class="title dark_color col-md-7"><a href="<?= base_url('blog_details/' . $pro['id'] . '/' . url_title($pro['title'], "dash", TRUE)) ?>" class="dark_color semi-bold"><?= $pro['title'] ?></a></h3>
            </div>
        </div>
    </div>
<?php
}
