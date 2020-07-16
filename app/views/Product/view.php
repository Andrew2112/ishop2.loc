<!--start-breadcrumbs-->
<div class="breadcrumbs">
    <div class="container">
        <div class="breadcrumbs-main">
            <ol class="breadcrumb">
                <?=$breadcrumbs;?>
            </ol>
        </div>
    </div>
</div>
<!--end-breadcrumbs-->
<!--start-single-->
<div class="single contact">
    <div class="container">
        <div class="single-main">
            <div class="col-md-9 single-main-left">
                <div class="sngl-top">
                    <div class="col-md-5 single-top-left">
                        <?php if ($gallery):?>
                        <div class="flexslider">
                            <ul class="slides">
                                <?php foreach ($gallery as $item) :?>
                                <li data-thumb="/public/images/<?=$item->img;?>">
                                    <div class="thumb-image"> <img src="/public/images/<?=$item->img;?>" data-imagezoom="true" class="img-responsive" alt=""/> </div>
                                </li>
                                <?php endforeach;?>
                            </ul>
                        </div>
                        <?php else:?>
                              <img src="/public/images/<?=$product->img ;?>">
                        <?php endif;?>

                    </div>
                    <?php
                    $curr=\ishop\App::$app->getProperty('currency');
                    $cats=\ishop\App::$app->getProperty('cats');
                    ?>
                    <div class="col-md-7 single-top-right">
                        <div class="single-para simpleCart_shelfItem">
                            <h2><?=$product->title;?></h2>
                            <div class="star-on">
                                <ul class="star-footer">
                                    <li><a href="#"><i> </i></a></li>
                                    <li><a href="#"><i> </i></a></li>
                                    <li><a href="#"><i> </i></a></li>
                                    <li><a href="#"><i> </i></a></li>
                                    <li><a href="#"><i> </i></a></li>
                                </ul>
                                <div class="review">
                                    <a href="#"> 1 customer review </a>

                                </div>
                                <div class="clearfix"> </div>
                            </div>

                            <h5 class="item_price" id="base-price" data-base="<?=$product->price*$curr['value'];?>"><?=$curr['symbol_left'];?> <?=$product->price*$curr['value'];?><?=$curr['symbol_right'];?></h5>
                            <?php if($product->old_price): ?>
                                <small><del><?=$curr['symbol_left'];?><?=$product->old_price*$curr['value'];?><?=$curr['symbol_right'];?></del></small>
                            <?php endif;?>
                            <p><?=$product->content;?></p>
                            <?php if($mods) : ?>
                            <div class="available">
                                <ul>
                                    <li>Цвет
                                        <select>
                                            <option value="">Выбрать цвет</option>
                                            <?php foreach ($mods as $modification):?>
                                            <option data-title="<?=$modification->title;?>" data-price="<?=$modification->price*$curr['value'];?>" value="<?=$modification->id;?>"><?=$modification->title;?></option>
                                         <?php endforeach;?>
                                        </select>
                                    </li>

                                    <div class="clearfix"> </div>
                                </ul>
                            </div>
                            <?php endif;?>
                            <ul class="tag-men">
                                <li><span>Категория</span>
                                    <span>: <a href="category/<?=$cats[$product->category_id]['alias'];?>"><?=$cats[$product->category_id]['title'];?></a></span></li>

                            </ul>
                            <div class="quantity">
                                <input type="number" size="4" value="1" name="quantity" min="1" step="1" class="input-text qty text">
                            </div>
                            <a id="productAdd" data-id="<?=$product->id;?>" href="cart/add?id=<?=$product->id;?>" class="add-cart item_add add-to-cart-link">Добавить в корзину</a>

                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>

                <!-------------Akkordeon-->
                <div class="panel-group" id="accordion">
                    <!-- 1 панель -->
                    <div class="panel panel-default">
                        <!-- Заголовок 1 панели -->
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    <img src="/public/images/arrow.png" alt=""> ОПИСАНИЕ</a>
                            </h4>
                        </div>
                        <!-------------Akkordeon-->
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <!-- Содержимое 1 панели -->
                            <div class="panel-body">
                                <div class="panel-group" id="accordion">
                                    <!-- 1 панель -->
                                    <div id="collapseOne_inner" class="panel-collapse collapse in">
                                        <p><?=$product->description;?> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 2 панель -->
                    <div class="panel panel-default">
                        <!-- Заголовок 2 панели -->
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                    <img src="/public/images/arrow.png" alt=""> ДОПОЛНИТЕЛЬНАЯ ИНФОРМАЦИЯ</a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <!-- Содержимое 2 панели -->
                            <div class="panel-body">
                                <p><?=$product->content;?></p>
                            </div>
                        </div>
                    </div>
                    <!-- 3 панель -->
                    <div class="panel panel-default">
                        <!-- Заголовок 3 панели -->
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><img src="/public/images/arrow.png" alt=""> УСЛОВИЯ ОПЛАТЫ И ДОСТАВКИ</a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <!-- Содержимое 3 панели -->
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad animi aspernatur autem culpa dignissimos dolorem ea esse id impedit, libero nemo nisi praesentium qui quidem tempore ut vero voluptatem?</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad animi aspernatur autem culpa dignissimos dolorem ea esse id impedit, libero nemo nisi praesentium qui quidem tempore ut vero voluptatem?</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad animi aspernatur autem culpa dignissimos dolorem ea esse id impedit, libero nemo nisi praesentium qui quidem tempore ut vero voluptatem?</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--
                <div class="tabs">
                    <ul class="menu_drop">
                        <li class="item1"><a href="#"><img src="/public/images/arrow.png" alt="">ОПИСАНИЕ</a>
                            <ul>
                                <li class="subitem1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</li>
                                <li class="subitem2"><a href="#"> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</a></li>
                                <li class="subitem3"><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </a></li>
                            </ul>
                        </li>
                        <li class="item2"><a href="#"><img src="/public/images/arrow.png" alt="">Additional information</a>
                            <ul>
                                <li class="subitem2"><a href="#"> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</a></li>
                                <li class="subitem3"><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </a></li>
                            </ul>
                        </li>
                        <li class="item3"><a href="#"><img src="/public/images/arrow.png" alt="">Reviews (10)</a>
                            <ul>
                                <li class="subitem1"><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</a></li>
                                <li class="subitem2"><a href="#"> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</a></li>
                                <li class="subitem3"><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </a></li>
                            </ul>
                        </li>
                        <li class="item4"><a href="#"><img src="/public/images/arrow.png" alt="">Helpful Links</a>
                            <ul>
                                <li class="subitem2"><a href="#"> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</a></li>
                                <li class="subitem3"><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </a></li>
                            </ul>
                        </li>
                        <li class="item5"><a href="#"><img src="/public/images/arrow.png" alt="">Make A Gift</a>
                            <ul>
                                <li class="subitem1"><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</a></li>
                                <li class="subitem2"><a href="#"> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</a></li>
                                <li class="subitem3"><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </a></li>
                            </ul>
                        </li>
                    </ul>
                </div>-->
                <?php /*if ($related):?>
                <div class="latestproducts">
                    <div class="product-one">
                        <h3>Вам может понравиться</h3>
                        <?php foreach ($related as $item):?>
                        <div class="col-md-4 product-left p-left">
                            <div class="product-main simpleCart_shelfItem">
                                <a href="product/<?=$item['alias'];?>" class="mask"><img class="img-responsive zoom-img" src="/public/images/<?=$item['img'];?>" alt="" /></a>
                                <div class="product-bottom">
                                    <h3><a href="product/<?=$item['alias'];?>"><?=$item['title'];?></a></h3>
                                    <h4>
                                        <a class="item_add add-to-cart-link" href="cart/add?id=<?=$item['id'];?>"data-id="<?=$item['id'];?>"><i></i></a>
                                        <span class=" item_price"><?=$curr['symbol_left'];?> <?=$item['price']*$curr['value'];?><?=$curr['symbol_right'];?></span>
                                        <?php if($item['old_price']): ?>
                                            <small><del><?=$curr['symbol_left'];?><?=$item['old_price']*$curr['value'];?><?=$curr['symbol_right'];?></del></small>
                                        <?php endif;?>
                                    </h4>
                                </div>
                                <div class="srch">
                                    <span>до -50%</span>
                                </div>
                            </div>
                        </div>
                        <?php endforeach ;?>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <?php endif;*/?>
                <?php if ($recentlyViewed):?>
                    <div class="latestproducts">
                        <div class="product-one">
                            <h3>Недавно просмотренные:</h3>
                            <?php foreach ($recentlyViewed as $item):?>
                                <div class="col-md-4 product-left p-left">
                                    <div class="product-main simpleCart_shelfItem">
                                        <a href="product/<?=$item['alias'];?>" class="mask"><img class="img-responsive zoom-img" src="/public/images/<?=$item['img'];?>" alt="" /></a>
                                        <div class="product-bottom">
                                            <h3><a href="product/<?=$item['alias'];?>"> <?=$item['title'];?> </a></h3>
                                            <h4>
                                                <a class="item_add add-to-cart-link" href="cart/add?id=<?=$item['id'];?>"data-id="<?=$item['id'];?>"><i></i></a>
                                                <span class=" item_price"><?=$curr['symbol_left'];?> <?=$item['price']*$curr['value'];?><?=$curr['symbol_right'];?></span>
                                                <?php if($item['old_price']): ?>
                                                    <small><del><?=$curr['symbol_left'];?><?=$item['old_price']*$curr['value'];?><?=$curr['symbol_right'];?></del></small>
                                                <?php endif;?>
                                            </h4>
                                        </div>
                                        <div class="srch">
                                            <span>до -50%</span>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ;?>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                <?php endif;?>
            </div>
            <div class="col-md-3 single-right">
                <div class="w_sidebar">
                    <?php /*new \app\widget\filter\Filter()*/;?>
                    <?php if ($related):?>
                        <div class="latestproducts">
                            <div class="product-one">
                                <h3><b>Вам может понравиться</b></h3>
                                <?php foreach ($related as $item):?>
                                    <div class="col-md-12 product-left p-left">
                                        <div class="product-main simpleCart_shelfItem">
                                            <a href="product/<?=$item['alias'];?>" class="mask"><img class="img-responsive zoom-img" src="/public/images/<?=$item['img'];?>" alt="" /></a>
                                            <div class="product-bottom">
                                                <h3><a href="product/<?=$item['alias'];?>"><?=$item['title'];?></a></h3>
                                                <h4>
                                                    <a class="item_add add-to-cart-link" href="cart/add?id=<?=$item['id'];?>"data-id="<?=$item['id'];?>"><i></i></a>
                                                    <span class=" item_price"><?=$curr['symbol_left'];?> <?=$item['price']*$curr['value'];?><?=$curr['symbol_right'];?></span>
                                                    <?php if($item['old_price']): ?>
                                                        <small><del><?=$curr['symbol_left'];?><?=$item['old_price']*$curr['value'];?><?=$curr['symbol_right'];?></del></small>
                                                    <?php endif;?>
                                                </h4>
                                            </div>
                                            <div class="srch">
                                                <span>до -50%</span>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach ;?>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    <?php endif;?>


                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!--end-single-->