<?
	use yii\helpers\Url;
	use \backend\models\Category;
	use \backend\models\Companies;
    use frontend\models\RatingCompanies;
    use frontend\models\Subscribe;

    $categories = Category::getCategoryListByCompanyId($id);
    $company = Companies::getCompany($id);

    $user_id = \Yii::$app->user->id;

    $voteAll = RatingCompanies::find()->where(['id_company' => $id])->count();
    $user_rating = RatingCompanies::find()->select('star')->where(['id_company' => $id, 'id_user' => $user_id])->one();
    $stars = RatingCompanies::find()->select('star')->where(['id_company' => $id])->all();
    $starsAll = 0;
    foreach ($stars as $key => $star) {
        $starsAll = $starsAll + $star->star;
    }

    
    $starWidth = 17;//ширина одной звезды

    if ($voteAll) {
        $rating = ($starsAll/$voteAll); //Старый рейтинг
        $rating = round($rating, 2);
    }
    else {
        $rating = 0;
    }
    $ratingResCss = $rating*$starWidth;

    $id_user = \Yii::$app->user->id;
    $id_shop = $company->id;

    $subscribe = Subscribe::find()->where(['id_user' => $id_user, 'id_shop' => $id_shop])->count();
    $subscribeID = Subscribe::find()->select('id')->where(['id_user' => $id_user, 'id_shop' => $id_shop])->one();
    $subscribeID = $subscribeID->id;

?>
<div class="philips-rating">
    <div class="philips-rating-name">
        Магазин: <b><?=$company->name;?></b>
    </div>
    <div class="philips-rating-name-rat">
        Рейтинг:
    </div>

    <?if(Yii::$app->user->isGuest):?>
        <div class="philips-rating-name-rat">
            <div id="ratingBar">
                <div id="rating-none">
                    <div id="ratZero"></div>
                    <div id="ratDone" style="width: <?=$ratingResCss?>px"></div>
                </div>
                <div id="ratBlocks"></div>
                <div id="ratStat">Рейтинг: <strong><?=$rating;?></strong> Голосов: <strong><?=$voteAll;?></strong></div>
            </div>
        </div>
    <?else:?>
        <div class="philips-rating-name-rat">
            <div id="ratingBar">
                <div id="rating">
                    <div id="ratZero"></div>
                    <div id="ratDone"></div>
                    <div id="ratHover"></div>
                </div>
                <div id="ratBlocks"></div>
                <div id="ratStat"></div>
            </div>
        </div>
    <?endif;?>


    <div class="prodovespotpisatsiya">
        <div class="prodovespotpisatsiya1">
            Связаться с продавцом
        </div>
        <div class="prodovespotpisatsiya2">
            <div class="elect11">Подписаться в магазин</div>
        </div>
    </div>
    <div class="philips-rating-name">
        Адрес: <b><?=$company->address?></b>
    </div>
    <div class="philips-rating-name">
        Телефон: <b><?=$company->phone;?></b>
    </div>
    <div class="philips-rating-name">
        <?if(Yii::$app->user->isGuest):?>
            <div class="elect11">Подписаться в магазин</div>
        <?else:?>
            <div class="subscribe <? if ($subscribe > 0) { echo "subscribe-true"; } else { echo "subscribe-false"; }?>" data-deleteid="<?=$subscribeID?>"><? if ($subscribe > 0) { echo "Удалить подписку"; } else { echo "Подписаться в магазин"; }?></div>
        <?endif;?>
    </div>
    <div class="clear"></div>
</div>
<div class="clear"></div>
<div class="philipscontainer">
    <div class="philipsmenu">
        <ul>
            <a href="<?=Url::to(['/eshop/shop', 'id' => $id])?>" class="aeshop">
                <li>Главная</li>
            </a>
            <li>
                <span>Товары</span><div class="philips-sub"><div class="line"></div><div class="line"></div><div class="line"></div></div>
                <ul class="philipsmenusub">
                    <?foreach($categories as $category1):?>
                        <?if($category1['id_parent'] == 0):?>
                            <li>
                                <a href="<?=Url::to(['/eshop/category', 'id' => $id, 'id_cat' => $category1['id']])?>" class="aeshop"><p><?=$category1['name']?></p></a>
                                <ul class="philipsmenusub1">
                                    <?foreach($categories as $category2):?>
                                        <?if($category1['id'] == $category2['id_parent']):?>
                                            <li>
                                                <a href="<?=Url::to(['/eshop/category', 'id' => $id, 'id_cat' => $category2['id']])?>" class="aeshop"><p><?=$category2['name']?></p></a>
                                                <ul class="philipsmenusub2">
                                                    <?foreach($categories as $category3):?>
                                                        <?if($category2['id'] == $category3['id_parent']):?>
                                                            <li>
                                                                <a href="<?=Url::to(['/eshop/category', 'id' => $id, 'id_cat' => $category3['id']])?>" class="aeshop"><p><?=$category3['name']?></p></a>
                                                                <ul class="philipsmenusub3">
                                                                    <?foreach($categories as $category4):?>
                                                                        <?if($category3['id'] == $category4['id_parent']):?>
                                                                            <li>
                                                                                <a href="<?=Url::to(['/eshop/category', 'id' => $id, 'id_cat' => $category4['id']])?>" class="aeshop"><p><?=$category4['name']?></p></a>
                                                                            </li>
                                                                        <?endif;?>
                                                                    <?endforeach;?>
                                                                </ul>
                                                            </li>
                                                        <?endif;?>
                                                    <?endforeach;?>
                                                </ul>
                                            </li>
                                        <?endif;?>
                                    <?endforeach;?>
                                </ul>
                            </li>
                        <?endif;?>
                    <?endforeach;?>
                </ul>
            </li>
            <a href="<?=Url::to(['/eshop/discount', 'id' => $id])?>" class="aeshop">
                <li>Скидки</li>
            </a>
            <a href="<?=Url::to(['/eshop/leader', 'id' => $id])?>" class="aeshop">
                <li>Лидеры продаж</li>
            </a>
            <a href="<?=Url::toRoute(['/eshop/novelty', 'id' => $id]);?>" class="aeshop">
                <li>Новинки</li>
            </a>
            <a href="<?=Url::toRoute(['/eshop/reviews', 'id' => $id]);?>" class="aeshop">
                <li>Отзывы</li>
            </a>
            <a href="<?=Url::toRoute(['/eshop/about', 'id' => $id]);?>" class="aeshop">
                <li>О магазине</li>
            </a>
            <a href="<?=Url::toRoute(['/eshop/contact', 'id' => $id]);?>" class="aeshop">
                <li>Контакты</li>
            </a>
        </ul>
    </div>
    <div class="clear"></div>
    <div class="philipsmenu-800">
        <div class="philips-sub-800">
            <div class="line-800"></div>
            <div class="line-800"></div>
            <div class="line-800"></div>
        </div>
        <div class="philipsmenu-800-nameshop">
            <b><?=$company->name;?></b>
        </div>
    </div>
</div>
<div class="philipsmenu-800-menu">
    <div class="philipsmenu-800-menu-menu">
        <div class="menu-categories">
            <b>Меню магазина</b>
        </div>
        <ul style="margin-left: 10px;">
            <a href="<?=Url::to(['/eshop/shop', 'id' => $id])?>">
                <li>Главная</li>
            </a>
            <a href="<?=Url::to(['/eshop/discount', 'id' => $id])?>">
                <li>Скидки</li>
            </a>
            <a href="<?=Url::to(['/eshop/leader', 'id' => $id])?>">
                <li>Лидеры продаж</li>
            </a>
            <a href="<?=Url::toRoute(['/eshop/novelty', 'id' => $id]);?>">
                <li>Новинки</li>
            </a>
            <a href="<?=Url::toRoute(['/eshop/reviews', 'id' => $id]);?>">
                <li>Отзывы</li>
            </a>
            <a href="<?=Url::toRoute(['/eshop/about', 'id' => $id]);?>">
                <li>О магазине</li>
            </a>
            <a href="<?=Url::toRoute(['/eshop/contact', 'id' => $id]);?>">
                <li>Контакты</li>
            </a>
        </ul>
        <div class="menu-categories">
            <b>Товары</b>
        </div>
        <ul class="philipsmenusub01">
            <?foreach($categories as $category1):?>
                <?if($category1['id_parent'] == 0):?>
                    <li>
                        <span class="submenu-name submenu-name-plus"><?=$category1['name']?></span>
                        <ul class="philipsmenusub11">
                            <?foreach($categories as $category2):?>
                                <?if($category1['id'] == $category2['id_parent']):?>
                                    <li>
                                        <a href="<?=Url::to(['/eshop/category', 'id' => $id])?>" class="aeshop"><?=$category2['name']?></a>
                                        <ul class="philipsmenusub21">
                                            <?foreach($categories as $category3):?>
                                                <?if($category2['id'] == $category3['id_parent']):?>
                                                    <li>
                                                        <a href="<?=Url::to(['/eshop/category', 'id' => $id])?>" class="aeshop"><?=$category3['name']?></a>
                                                        <ul class="philipsmenusub31">
                                                            <?foreach($categories as $category4):?>
                                                                <?if($category3['id'] == $category4['id_parent']):?>
                                                                    <li>
                                                                        <a href="<?=Url::to(['/eshop/category', 'id' => $id])?>" class="aeshop"><?=$category4['name']?></a>
                                                                    </li>
                                                                <?endif;?>
                                                            <?endforeach;?>
                                                        </ul>
                                                    </li>
                                                <?endif;?>
                                            <?endforeach;?>
                                        </ul>
                                    </li>
                                <?endif;?>
                            <?endforeach;?>
                        </ul>
                    </li>
                <?endif;?>
            <?endforeach;?>
        </ul>
    </div>
    <div class="leftmenu-inner-bg1"></div>
</div>
<script type="text/javascript">
    $(function(){
        var topPos = $('.philipscontainer').offset().top;
        $(window).scroll(function() {
            var top = $(document).scrollTop();

            if (top > topPos) {
                $('.philipscontainer').addClass('fixed');
            }
            else {
                $('.philipscontainer').removeClass('fixed');
            }
        });
        $('#rating-none').click(function(){
            $('.product-popup-cart-guest').css('display', 'block');
        });
    });
</script>
<script type="text/javascript">
    <?if(!(Yii::$app->user->isGuest)):?>
        $(function(){
            var count = 0;
            var starsAll = <?=$starsAll?>;//Всего звезд
            var voteAll = <?=$voteAll?>;//Всего голосов
            var idShop = <?=$id?>;//id статьи
            var starWidth = 17;//ширина одной звезды
            <? if ($user_rating->star): ?>
                var ratingUser = <?=$user_rating->star;?>;
            <? else: ?>
                var ratingUser = 0;
            <? endif; ?>

            var rating = (starsAll/voteAll); //Старый рейтинг
            rating = Math.round(rating*100)/100;
            if(isNaN(rating)){
                rating = 0;
            }
            var ratingResCss = ratingUser*starWidth; //старый рейтинг в пикселях

            $("#ratDone").css("width", ratingResCss);   
            $("#ratStat").html("Рейтинг: <strong>"+rating+"</strong> Голосов: <strong>"+voteAll+"</strong>");
            
            var coords;
            var stars;  //кол-во звезд при наведении
            var ratingNew;  //Новое количество звезд

            $("#rating").mousemove(function(e){
                var offset = $("#rating").offset();
                coords = e.clientX - offset.left; //текушая координата
                stars = Math.ceil(coords/starWidth); 
                starsCss = stars*starWidth;
                $("#ratHover").css("width", starsCss).attr("title", stars+" из 5");
            });
            $("#rating").mouseout(function(){
                $("#ratHover").css("width", 0);
            });
            $("#rating").click(function(){

                var aaa = ratingUser - stars;
                var starsNew = starsAll - aaa;
                <? if ($user_rating->star): ?>
                    voteAll = voteAll;
                <? else: ?>
                    if (count == 0) {
                        voteAll = voteAll + 1;
                        count++;
                    }
                <? endif; ?>
                
                var ratingNew = starsNew/voteAll;

                ratingNew = Math.round(ratingNew*100)/100;

                $.ajax({
                    type: "GET",
                    url: "/eshop/rating",
                    data: {"id": idShop, "id_user": <?=$user_id?>,"rating": stars},
                    cache: false,
                    success: function(response){
                        if(response == "ok"){
                            var newRat = response+"px";
                            $("#ratDone").css('width', starsCss);
                            $("#ratStat").html("Рейтинг: <strong>"+ratingNew+"</strong> Голосов: <strong>"+voteAll+"</strong>");
                        }else{
                            $("#ratStat").text(response);
                        }
                    }
                });
                return false;
            });
        });
    <? endif; ?>
</script>
<div class="clear"></div>
<style type="text/css">
    .product-popup-cart-guest {
        display: none;
    }
</style>
<div class="product-popup-cart-guest">
    <div class="product-overlay"></div>
    <div class="product-form-popup">
        <div class="popup-content">
            <h4>Оценка магазина доступна после авторизации</h4>
            <p><a href="<?=Url::toRoute('/user/login')?>" class="a">Войти</a></p>
            <h4>Если у вас нет аккаунта зарегистрируйтесь</h4>
            <p><a href="<?=Url::toRoute('/user/register')?>" class="a">Регистрация</a></p>
        </div>
        <div class="product-close"></div>
    </div>
</div>

<div class="product-popup-cart-elect">
    <div class="product-overlay"></div>
    <div class="product-form-popup">
        <div class="popup-content">
            <h4>Чтобы подписаться в магазин авторизуйтесь</h4>
            <p><a href="<?=Url::toRoute('/user/login')?>" class="a">Войти</a></p>
            <h4>Если у вас нет аккаунта зарегистрируйтесь</h4>
            <p><a href="<?=Url::toRoute('/user/register')?>" class="a">Регистрация</a></p>
        </div>
        <div class="product-close"></div>
    </div>
</div>

<script type="text/javascript">
    $(function(){
        $('.elect11').click(function(){
            $('.product-popup-cart-elect').css('display', 'block');
        });
        <?if(!(Yii::$app->user->isGuest)):?>
            $('.subscribe').click(function(){

                var shopClass = $(this).attr('class').split(' ');
                var userID = <?=Yii::$app->user->id?>;
                var shopID = <?=$company->id;?>;
                var shopDelete = $(this).attr('data-deleteid');
                shopClass = shopClass[1];

                if (shopClass == 'subscribe-false') {
                    $.ajax({
                        url: '/eshop/subscribeadd',
                        type: 'get',
                        data: {
                            id_user: userID,
                            id_shop: shopID
                        },
                        success: function (data) {
                            if(data){
                                $('.subscribe').attr('data-deleteid', data);
                                $('.subscribe').removeClass('subscribe-false');
                                $('.subscribe').addClass('subscribe-true');
                                $('.subscribe').html('Удалить подписку');
                            }
                        }
                    });
                }

                if (shopClass == 'subscribe-true') {
                    $.ajax({
                        url: '/eshop/subscribedelete',
                        type: 'get',
                        data: {
                            id_user: userID,
                            id_delete: shopDelete
                        },
                        success: function (data) {
                            if(data == 'ok'){
                                $('.subscribe').removeClass('subscribe-true');
                                $('.subscribe').addClass('subscribe-false');
                                $('.subscribe').html('Подписаться в магазин');
                            }
                        }
                    });
                }

            });
        <? endif; ?>
    });
</script>