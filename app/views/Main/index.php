<!--banner-starts-->
<div class="bnr" id="home">
    <div  id="top" class="callbacks_container">
        <ul class="rslides" id="slider4">
            <li>
                <img src="/public/images/bnr-1.jpg" alt=""/>
            </li>
            <li>
                <img src="/public/images/bnr-2.jpg" alt=""/>
            </li>
            <li>
                <img src="/public/images/bnr-3.jpg" alt=""/>
            </li>
        </ul>
    </div>
    <div class="clearfix"> </div>
</div>
<!--banner-ends-->

<!--about-starts-->
<?php if($brands): ?>
<div class="about">
    <div class="container">
        <div class="about-top grid-1">
            <?php foreach ($brands as $brand) : ?>
            <div class="col-md-3 col-sm-6 col-xs-12 about-left">
                <figure class="effect-bubba">
                    <img class="img-responsive" src="public/images/<?=$brand->img;?>" alt="Responsive image"/>
                    <figcaption>
                        <h2><?=$brand->title;?></h2>
                        <p><?=$brand->description;?></p>
                    </figcaption>
                </figure>
            </div>
            <?php endforeach;?>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<?php endif;?>
<!--about-end-->
<!--product-starts-->
<?php if($hits) : ?>
<?php $curr=\ishop\App::$app->getProperty('currency');?>
<div class="product">
    <div class="container">

        <div class="product-top">
            <div class="product-one"> <div class="">
                <?php foreach($hits as $hit):?>
                <div class="col-md-3 col-sm-6 col-xs-12 product-left" style="padding-bottom: 15px;">
                    <div class="product-main simpleCart_shelfItem">
                        <a href="product/<?=$hit->alias;?>" class="mask"><img class="img-responsive zoom-img" src="/public/images/<?=$hit->img;?>" alt="" /></a>
                        <div class="product-bottom">
                            <h3><a href="product/<?=$hit->alias;?>"><?=$hit->title;?></a></h3>
                            <h4>
                                <a data-id="<?=$hit->id;?>" class="add-to-cart-link" href="cart/add?id<?=$hit->id;?>"><i></i></a> <span class=" item_price"><?=$curr['symbol_left'];?> <?=$hit->price*$curr['value'];?><?=$curr['symbol_right'];?></span>
                                <?php if($hit->old_price): ?>
                                <small><del><?=$curr['symbol_left'];?><?=$hit->old_price*$curr['value'];?><?=$curr['symbol_right'];?></del></small>
                                <?php endif;?>
                            </h4>
                        </div>
                        <div class="srch">
                            <span>до -50%</span>
                        </div>
                    </div>
                </div>
                <?php endforeach;?></div>
                <div class="clearfix"></div>

            </div>

        </div>
    </div>
</div>
<?php endif;?>
<!--product-end-->