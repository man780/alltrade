<?php
$layoutPath = Yii::$app->assetManager->getPublishedUrl('@frontend/themes/alltrade/assets');
?>
<script type="text/javascript">
$(document).ready(function(){
    var winWidth = $(window).width();
    if (winWidth > 835) {
        var catorginal = '';
        var ii = 0;
        var cat = '';
        var cat1 = ' <span class="ads-izmenit">Изменить</span>'
        $('.menutext').click(function(){
            //$(this).attr('disabled', 'disabled');
            $('.subcategory').html('');
            $('.subsubcategory').html('');
            $('.submenu').css('display', 'none');
            $('.subsubmenu').css('display', 'none');

            doc_w = $(document).width();
            //alert(doc_w);
            doc_h = $(document).height();
            doc_w = (doc_w-doc_w%2)/2;
            //alert(doc_w);
            $('.popup').css('top', 100);
            $('.popup').css('left', doc_w);

            var w = $('.popup').width();
            //alert(w);
            var h = $('.popup').height();
            w = (w-w%2)/2;
            w = -w;
            w = w - 5;
            //alert(w);
            $('.popup').css('margin-left', w);
            $('.popup').css('display', 'block');
        });
        $('.subsubmenu > p').click(function(){
            cat = cat + $(this).html();
            cat = cat + cat1;
            $('.menutext').html(cat);
            $('.popup').css('display', 'none');
            //$('.menutext').removeAttr('disabled');
            $('.submenu').css('display', 'none');
            $('.subsubmenu').css('display', 'none');
            $('#ads-id_category').attr('value', $(this).attr('data-value'));
            $('#ads-id_category').trigger('change');
            ii = 0;
            catorginal = '';
        });
        $('.menup').click(function(){
            cat = '';
            $('.submenu').css('display', 'none');
            $(this).next().css('display','block');
            var value = $(this).html();
            $('.subcategory').html(value);
            $('.subsubcategory').html('');
            $('.subsubmenu').css('display', 'none');
            cat = cat + value + ' / ';
        });
        $('.submenu > p').click(function(){
            $('.subsubmenu').css('display', 'none');
            $(this).next().css('display','block');
            var value = $(this).html();
            $('.subsubcategory').html(value);   
            if (!$(this).next().attr('class') || $.trim($(this).next().html()) == "") {
                var value = $(this).html();
                cat = cat + value;
                cat = cat + cat1;
                $('.menutext').html(cat);
                $('.popup').css('display', 'none');
                //$('.menutext').removeAttr('disabled');
                $('.submenu1').css('display', 'none');
                $('.subsubmenu1').css('display', 'none');
                $('#ads-id_category').attr('value', $(this).attr('data-value'));
                $('#ads-id_category').trigger('change');
                //alert('a');
            }
            else {
                ii++;
                if (ii > 1) {
                    cat = catorginal;
                    //alert(cat);
                }
                else {
                    catorginal = cat;
                }
                cat = cat + $(this).html() + ' / ';
            }
        });
    }
    else {
        //alert(winWidth);
        var class1 = '';
        var catorginal = '';
        var ii = 0;
        var cat = '';
        $('.menutext1, .menutext2').click(function(){
            $('html, body').css('overflow-y', 'hidden');
            $(this).attr('disabled', 'disabled');
            $('.subcategory').html('');
            $('.subsubcategory').html('');
            $('.submenu').css('display', 'none');
            $('.subsubmenu').css('display', 'none');
            $('.popup-850').css('display', 'block');
        });
        $('.menup1').click(function(){
            class1 = $(this).attr('class');
            class1 = class1.replace('menup1 ', '');
            cat = '';
            $('.submenu1').css('display', 'none');
            $(this).next().css('display','block');
            var value = $(this).html();
            var value1 = value + '<span class="ads-nazad-1" onclick="javascript: $(\'.popup-850\').css(\'margin-left\', \'0\');"> Назад</span>';
            $('.subcategory1-1').html(value1);
            $('.subsubcategory1-1').html('');
            $('.subsubmenu1').css('display', 'none');
            $('.popup-850').css('margin-left', '-100%');
            cat = cat + value + ' / ';
        });
        $('.submenu1 > p').click(function(){
            $('.subsubmenu1').css('display', 'none');
            $(this).next().css('display','block');
            var value = $(this).html();
            var value1 = value + '<span class="ads-nazad-2" onclick="javascript: $(\'.popup-850\').css(\'margin-left\', \'-100%\');"> Назад</span>';
            $('.subsubcategory1-1').html(value1);   
            if (!$(this).next().attr('class') || $.trim($(this).next().html()) == "") {
                var value = $(this).html();
                $('.menutext1').html(cat);
                $('.menutext2').html(value);
                $('.popup-850').css('display', 'none');
                $('.menutext').removeAttr('disabled');
                $('.submenu1').css('display', 'none');
                $('.subsubmenu1').css('display', 'none');
                $('#ads-id_category').attr('value', $(this).attr('data-value'));
                $('#ads-id_category').trigger('change');
                $('.popup-850').css('margin-left', '0');
                $('html, body').css('overflow-y', 'auto');
                $('.ads-icon').replaceWith('<div class="ads-icon"></div>');
                $('.ads-icon').addClass(class1);
            }
            else {
                ii++;
                if (ii > 1) {
                    cat = catorginal;
                    //alert(cat);
                }
                else {
                    catorginal = cat;
                }
                cat = cat + $(this).html() + ' / ';
                $('.popup-850').css('margin-left', '-200%');
            }
        });
        $('.subsubmenu1 > p').click(function(){
            var value = $(this).html();
            $('.menutext1').html(cat);
            $('.menutext2').html(value);
            $('.popup-850').css('display', 'none');
            $('.menutext').removeAttr('disabled');
            $('.submenu1').css('display', 'none');
            $('.subsubmenu1').css('display', 'none');
            $('#ads-id_category').attr('value', $(this).attr('data-value'));
            $('#ads-id_category').trigger('change');
            $('.popup-850').css('margin-left', '0');
            $('html, body').css('overflow-y', 'auto');
            $('.ads-icon').replaceWith('<div class="ads-icon"></div>');
            $('.ads-icon').addClass(class1);
            ii = 0;
            catorginal = '';
        });
    }
    $('.popup-850-close').click(function(){
        $('.popup-850').css('display', 'none');
        $('html, body').css('overflow-y', 'auto');
    });
});
</script>
<style type="text/css">
    .popup {
        width: 815px;
        height: 480px;
        background: #fff;
        display: none;
        position: absolute;
        left: 30%;
        top: 200px;
        z-index: 99;
        border: 5px solid #ddd;
    }
    .menu-cont {
        border-right: 1px solid #ddd;
        width: 260px;
        height: 440px;
        padding-left: 5px;
    }
    .submenu{
        display: none;
        position: absolute;
        margin-left: 270px;
        top: 0;
        width: 280px;
        padding: 0;
        border-right: 1px solid #ddd;
        height: 440px;
    }
    .submenu p {
        padding-right: 10px;
    }
    .submenu p:hover {
        color: red
    }
    .subsubmenu{
        display: none;
        position: absolute;
        margin-left: 290px;
        top: 0;
        width: 250px;
    }
    .menu {
        cursor: pointer;
        position: relative;
    }
    .menup {
        width: 235px;
        padding-left: 10px;
     /*    border-right: 1px solid #ddd; */
     border-bottom: 1px dotted #ddd;
    }
    .menup:hover {
        color: red;
    }
    p {
        margin: 0;
    }
    .category {
        width: 245px;
        float: left;
        padding: 10px;
    }
    .subcategory {
        width: 280px;
        float: left;
        padding: 10px;
    }
    .subsubcategory {
        padding: 10px;

    }
    .ads-nazad-1, .ads-nazad-2, .menup, .subcategory1, .subcategory2, .subcategory3, .subcategory4, .subcategory37, .subcategory38, .subcategory39, .subcategory42 {
        position: relative;
    }
    .menup:after, .menup:before, .subcategory1:after, .subcategory1:before, .subcategory2:after, .subcategory2:before, .subcategory3:after, .subcategory3:before, .subcategory4:after, .subcategory4:before, .subcategory37:after, .subcategory37:before, .subcategory38:after, .subcategory38:before, .subcategory39:after, .subcategory39:before, .subcategory42:after, .subcategory42:before {
        left: 95%;
        top: 50%;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
    }

    .menup:after, .subcategory1:after, .subcategory2:after, .subcategory3:after, .subcategory4:after, .subcategory37:after, .subcategory38:after, .subcategory39:after, .subcategory42:after {
        border-color: rgba(255, 255, 255, 0);
        border-left-color: #ffffff;
        border-width: 3px;
        margin-top: -3px;
    }
    .menup:before, .subcategory1:before, .subcategory2:before, .subcategory3:before, .subcategory4:before, .subcategory37:before, .subcategory38:before, .subcategory39:before, .subcategory42:before {
        border-color: rgba(207, 207, 207, 0);
        border-left-color: red;
        border-width: 4px;
        margin-top: -4px;
    }

    .ads-nazad-1:after,
    .ads-nazad-1:before,
    .ads-nazad-2:after,
    .ads-nazad-2:before {
        right: 110%;
        top: 50%;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
    }

    .ads-nazad-1:after,
    .ads-nazad-2:after {
        border-color: rgba(136, 183, 213, 0);
        border-right-color: #ffffff;
        border-width: 3px;
        margin-top: -3px;
    }

    .ads-nazad-1:before,
    .ads-nazad-2:before {
        border-color: rgba(194, 225, 245, 0);
        border-right-color: blue;
        border-width: 4px;
        margin-top: -4px;
    }




    .popup-850 {
        display: none;
        position: fixed;
        left: 0;
        top: 0;
        width: 300%;
        height: 100%;
        background: #fff;
        z-index: 1001;
        overflow-y: auto;
        transition: all 0.5s ease;
    }
    .menu-cont1 {
        width: 33.3%;
        padding-left: 5px;
    }
    .submenu1 {
        display: none;
        position: absolute;
        margin-left: 33.3%;
        top: 0;
        width: 33.3%;
        padding: 0;
        padding-left: 5px;
    }
    .submenu1 p {
        padding-right: 10px;
        width: calc(99% - 20px);
    }
    .submenu1 p:hover {
        color: red
    }
    .subsubmenu1 {
        display: none;
        position: absolute;
        margin-left: 99%;
        top: 0;
        width: 88%;
        padding-left: 5px;
    }
    .menu1 {
        cursor: pointer;
        position: relative;
    }
    .menup1 {
        width: calc(100% - 30px);
        padding-left: 10px;
        border-bottom: 1px dotted #ddd;
    }
    .menup1:hover {
        color: red;
    }
    p {
        margin: 0;
    }
    .category1-1, .subcategory1-1, .subsubcategory1-1 {
        width: calc(33.3% - 20px);
        float: left;
        padding: 10px;
    }
    .menup1 {
        position: relative;
    }
    .menup1:after, .menup1:before {
        left: 96%;
        top: 50%;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
    }
    .menup1:after {
        border-color: rgba(255, 255, 255, 0);
        border-left-color: #ffffff;
        border-width: 3px;
        margin-top: -3px;
    }
    .menup1:before {
        border-color: rgba(207, 207, 207, 0);
        border-left-color: red;
        border-width: 4px;
        margin-top: -4px;
    }
    .menutext {
        cursor: pointer;
    }
    .menutext1 img {
        max-width: 100%;
    }
    .ads-izmenit {
        background: #4CAF50;
        color: #fff;
        border-radius: 5px;
        padding: 5px 10px;
        line-height: 25px;
    }
    .ads-izmenit:hover {
        background: #75D879;
    }
    .form-group-ads1 {
        display: none;
    }
    .menutext1, .menutext2 {
        cursor: pointer;
    }
    .menutext1 {
        font-size: 80%;
        color: #999;
    }
    .ads-icon {
        width: 20px;
        height: 19px;
    }
    .ads-nazad-1, .ads-nazad-2 {
        color: blue;
        cursor: pointer;
        float: right;
    }
    @media (max-width: 852px) {
        .form-group-ads1 {
            display: block;
            padding-left: 10px;
            float: left;
        }
        .form-group-ads {
            display: none;
        }
    }
</style>
<div class="form-group-ads">
    <div class="menutext">
        <? if ($cateName): ?>
            <?=$cateName?>
            <span class="ads-izmenit">Изменить</span>
        <? else: ?>
            <img src="<?=$layoutPath?>/images/category.png">
        <? endif ?>
    </div>
</div>
<div class="popup">
    <div>
        <div class="category">Категория</div>
        <div class="subcategory"></div>
        <div class="subsubcategory"></div>
    </div>
    <div style="clear: both;"></div>
    <div style="border-bottom: 1px solid #ddd;"></div>
    
    <div class="menu">
        <div class="menu-cont">
        <?$i=1;?>
        <?$j=1;?>
        <?foreach($categories['parentCat'] as $parent):?>
            
                <p class="menup category<?=$i;?>"><?=$parent['name'];?></p>
                <?$i++;?>
                <div class="submenu">
                    <?foreach($categories['bottomCat'][$parent['id']] as $key => $cat):?>
                        <p data-value="<?=$cat['id']?>" class="subcategory<?=$j;?>"><?=$cat['name'];?></p>
                        <?$j++;?>
                        <div class="subsubmenu">
                        <?foreach($categories['categories'] as $item):?>
                            <?if($item['id_parent'] == $cat['id']):?>
                            <p data-value="<?=$item['id']?>"><?=$item['name'];?></p>
                            <?endif;?>
                        <?endforeach;?> 
                        </div>
                    <?endforeach;?>                    
                </div>
        <?endforeach;?>
        </div>
    </div>
    <div class="ads-close" onclick="javascript: $('.popup').css('display', 'none'); //$('.menutext').removeAttr('disabled');"></div>
</div>


<div class="form-group-ads1">
    <table cellspacing="0" cellpadding="0" width="100%">
        <tr>
            <td width="20">
                <div class="ads-icon"></div>
            </td>
            <td>
                <div class="menutext1">
                    <? if ($cateName): ?>
                        <?=$cateName?>
                        <span class="ads-izmenit">Изменить</span>
                    <? else: ?>
                        <img src="<?=$layoutPath?>/images/category.png">
                    <? endif ?>
                </div>
                <div class="menutext2">
                    
                </div>
            </td>
        </tr>
    </table>
</div>
<div class="clear"></div>
<div class="popup-850">
    <div>
        <div class="category1-1">
            Категория
            <span style="color: red; cursor: pointer; float: right" class="popup-850-close">Выход</span>
        </div>
        <div class="subcategory1-1"></div>
        <div class="subsubcategory1-1"></div>
    </div>
    <div style="clear: both;"></div>
    <div style="border-bottom: 1px solid #ddd;"></div>
    
    <div class="menu1">
        <div class="menu-cont1">
        <?$i=1;?>
        <?$j=1;?>
        <?foreach($categories['parentCat'] as $parent):?>
            
                <p class="menup1 category<?=$i;?>"><?=$parent['name'];?></p>
                <?$i++;?>
                <div class="submenu1">
                    <?foreach($categories['bottomCat'][$parent['id']] as $key => $cat):?>
                        <p data-value="<?=$cat['id']?>" class="subcategory<?=$j;?>"><?=$cat['name'];?></p>
                        <?$j++;?>
                        <div class="subsubmenu1">
                        <?foreach($categories['categories'] as $item):?>
                            <?if($item['id_parent'] == $cat['id']):?>
                            <p data-value="<?=$item['id']?>"><?=$item['name'];?></p>
                            <?endif;?>
                        <?endforeach;?> 
                        </div>
                    <?endforeach;?>                    
                </div>
        <?endforeach;?>
        </div>
    </div>
</div>