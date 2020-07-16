<!DOCTYPE html>
<html>
<head>
    <base href="/">
    <link rel="shortcut icon" href="/public/images/star.png"/><?=$this->getMeta();?>
    <?=$this->getMeta();?>
    <link href="/public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="/public/megamenu/css/style.css">
    <link rel="stylesheet" href="/public/megamenu/css/ionicons.min.css">
    <link rel="stylesheet" href="/public/css/flexslider.css" type="text/css" media="screen" />
    <!--Custom-Theme-files-->
    <!--theme-style-->
    <link href="/public/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



</head>
<body>
<!--top-header-->
<div class="top-header">
    <div class="container">
        <div class="top-header-main">
            <div class="col-md-6 top-header-left">
                <div class="drop">
                    <div class="box">
                        <select id="currency" tabindex="4" class="dropdown drop">
                            <?php new \app\widget\currency\Currency();?>
                        </select>
                    </div>
                   <div class="btn-group">
                       <a class="dropdown-toggle" data-toggle="dropdown">Вход/Регистрация<span class="caret"></span> </a>
                          <ul class="dropdown-menu">
                              <?php if(!empty($_SESSION['user'])): ?>
                              <li><a href="#">Добро пожаловать, <?=h($_SESSION['user']['name']);?></a> </li>
                              <li><a href="user/logout">Выход</a> </li>
                              <?php else:?>
                                  <li><a href="user/login">Вход</a> </li>
                                  <li><a href="user/signup">Регистрация</a> </li>
                              <?php endif;?>
                          </ul>
                   </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-6 top-header-left">
                <div class="cart box_1">

                    <a href="cart/show" onclick="getCart(); return false;">
                        <div class="total">
                            <img src="/public/images/cart-1.png" alt="" />
                            <?php if(!empty($_SESSION['cart'])):?>
                                <span   class="simpleCart_total">Товаров: <?=$_SESSION['cart.qty'];?> <p>На сумму: <?=$_SESSION['cart.currency']['symbol_left'] . $_SESSION['cart.sum'] . $_SESSION['cart.currency']['symbol_right'];?></p></span>
                            <?php else: ?>
                            <span   class="simpleCart_total">Корзина пуста</span>
                            <?php endif; ?>
                        </div>
                    </a>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--top-header-->
<!--start-logo-->
<div class="logo">
    <a href="<?=PATH;?>"><h1>СМАРТФОНЫ</h1></a>
</div>
<!--start-logo-->
<!--bottom-header-->
<div class="header-bottom">
    <div class="container">
        <div class="header">
            <div class="col-md-9 header-left">
            <div class="menu-container">
                <div class="menu">
                  <?php new \app\widget\menu\Menu([
                          'tpl'=>WWW . '/menu/menu.php',
                          'container' => 'ul'
                  ]);?>
              </div>
            </div>
            <div class="clearfix"> </div>
            </div>
            <div class="col-md-3 header-right">
                <div class="search-bar">
                    <form action="search" method="get" autocomplete="off">
                        <input type="text" class="typeahead" id="typeahead" name="s">
                        <input type="submit" value="">
                    </form>
                    <!--<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
                    <input type="submit" value="">-->
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!--bottom-header-->
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php if(isset($_SESSION['error'])):?>
                    <div class="alert alert-danger">
                        <?php echo $_SESSION['error']; unset($_SESSION['error']);?>
                    </div>
                <?php endif;?>
                <?php if(isset($_SESSION['success'])):?>
                    <div class="alert alert-success">
                        <?php echo $_SESSION['success']; unset($_SESSION['success']);?>
                    </div>
                <?php endif;?>
            </div>
        </div>
    </div>
    <?=$content;?>
</div>
<!--information-starts-->
<div class="information">
    <div class="container">
        <div class="infor-top">
            <div class="col-md-3 infor-left">
                <h3>Мы в соцсетях</h3>
                <ul>
                    <li><a href="#"><span class="fb"></span><h6>Facebook</h6></a></li>
                    <li><a href="#"><span class="twit"></span><h6>Twitter</h6></a></li>
                    <li><a href="#"><span class="google"></span><h6>Google+</h6></a></li>
                </ul>
            </div>
            <div class="col-md-3 infor-left">
                <h3>Авторизация / Регистрация</h3>
                <ul>
                    <li><a href="user/login"><p>Вход</p></a> </li>
                    <li><a href="user/signup"><p>Регистрация</p></a> </li>
                </ul>
            </div>
            <div class="col-md-3 infor-left">
                <h3>Способы оплаты</h3>
                <ul>
                    <li><span class="maestro" title="" data-toggle="tooltip" data-original-title="Maestro">
                            <img src="/public/images/maestro.png" alt=""></span>

                    <span class="mastercard" title="" data-toggle="tooltip" data-original-title="MasterCard">
                        <img src="/public/images/master.png" alt=""></span>

                    <span class="visa" title="" data-toggle="tooltip" data-original-title="Visa">
                        <img src="/public/images/visa.png" alt=""></span></li>

                   <li><span class="mir" title="" data-toggle="tooltip" data-original-title="&quot;МИР&quot;">
                           <img src="/public/images/mir.png" alt=""></span>

                       <span class="cash" title="" data-toggle="tooltip" data-original-title="Наличные">
                           <img src="/public/images/cash.png" alt=""></span>

                       <span class="webmoney" title="" data-toggle="tooltip" data-original-title="WebMoney">
                           <img src="/public/images/webmoney.png" alt=""></span></li>
                </ul>
            </div>
            <div class="col-md-3 infor-left">
                <h3>Магазин</h3>
                <ul>
                <li><a href="#"><p>Смартфоны</p></a></li>
                    <li><h4>The company name,
                    Glasglow Dr 40 Fe 72.</h4></li>
                    <li><h5>+955 123 4567</h5></li>
                    <li> <p><a href="mailto:example@email.com">contact@example.com</a></p></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--information-end-->
<!--footer-starts-->

<!--footer-end-->
<!--Модальное окно-->
<div class="modal fade" id="cart" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Корзина</h4>
            </div>
            <div class="modal-body">
                <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Продолжить покупки</button>
                <a href="cart/view" type="button" class="btn btn-primary">Оформить заказ</a>
                <button type="button" class="btn btn-danger" onclick="clearCart()">Очистить корзину</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="preloader"><img src="/public/images/ring.svg" alt=""></div>
<?php $curr=\ishop\App::$app->getProperty('currency');?>
<script>
    let path='<?=PATH;?>',
        course=<?=$curr['value'];?>,
        symboleLeft='<?=$curr['symbol_left'];?>',
        symboleRight='<?=$curr['symbol_right'];?>';
</script>
<!--jQuery(necessary for Bootstrap's JavaScript plugins)-->
<script src="/public/js/jquery-1.11.0.min.js"></script>
<script src="/public/js/bootstrap.min.js"></script>
<script src="/public/js/validator.js"></script>
<script src="/public/js/typeahead.bundle.js"></script>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>


<!--dropdown-->
<script src="/public/js/jquery.easydropdown.js"></script>
<!--Slider-Starts-Here-->
<script src="/public/js/responsiveslides.min.js"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
        // Slideshow 4
        $("#slider4").responsiveSlides({
            auto: true,
            pager: true,
            nav: true,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });

    });
</script>
<!--End-slider-script-->
<script src="/public/megamenu/js/megamenu.js"></script>
<script src="/public/js/main.js"></script>

<script src="/public/js/imagezoom.js"></script>
<script defer src="/public/js/jquery.flexslider.js"></script>
<script>
    // Can also be used with $(document).ready()
    $(window).load(function() {
        $('.flexslider').flexslider({
            animation: "slide",
            controlNav: "thumbnails"
        });
    });
</script>
<script type="text/javascript">
    $(function() {

        let menu_ul = $('.menu_drop > li > ul'),
            menu_a  = $('.menu_drop > li > a');

        menu_ul.hide();

        menu_a.click(function(e) {
            e.preventDefault();
            if(!$(this).hasClass('active')) {
                menu_a.removeClass('active');
                menu_ul.filter(':visible').slideUp('normal');
                $(this).addClass('active').next().stop(true,true).slideDown('normal');
            } else {
                $(this).removeClass('active');
                $(this).next().stop(true,true).slideUp('normal');
            }
        });

    });
</script>

<?php
$logs = \R::getDatabaseAdapter()
    ->getDatabase()
    ->getLogger();
?>






</body>
</html>