<?php
/**
 * Created by JetBrains PhpStorm.
 * User: murod
 * Date: 6/10/16
 * Time: 5:50 PM
 * To change this template use File | Settings | File Templates.
 */
//vd($categories, false);
\backend\assets\AppAsset::register($this);
?>

<script type="text/javascript">
$(document).ready(function(){
    var cat = '';
    $('.menutext').click(function(){
        $(this).attr('disabled', 'disabled');
        $('.subcategory').html('');
        $('.subsubcategory').html('');
        $('.submenu').css('display', 'none');
        $('.subsubmenu').css('display', 'none');

          doc_w = $(document).width();
          doc_h = $(document).height();
          doc_w = (doc_w-doc_w%2)/2;
          /*doc_h = (doc_h-doc_h%2)/2;*/
          $('.popup').css('top', 100);
          $('.popup').css('left', doc_w);

          var w = $('.popup').width();
          var h = $('.popup').height();
          w = (w-w%2)/2;
          h = (h-h%2)/2;
          w = -w;
          h = -h;
          /*h = h - 150;*/
          $('.popup').css('margin-left', w);
          /*$('.popup').css('margin-top', h);*/

        $('.popup').css('display', 'block');
    });
    $('.subsubmenu > p').click(function(){
        cat = cat + $(this).html();
        $('.menutext').attr('value', cat);
        $('.popup').css('display', 'none');
        $('.menutext').removeAttr('disabled');
        $('.submenu').css('display', 'none');
        $('.subsubmenu').css('display', 'none');
        $('#ads-id_category').attr('value', $(this).attr('data-value'));
        $('#ads-id_category').trigger('change');
    });
    $('.menup').click(function(){
        cat = '';
        $('.submenu').css('display', 'none');
        $(this).next().css('display','block');
        var value = $(this).html();
        $('.subcategory').html(value);
        $('.subsubcategory').html('');
        $('.subsubmenu').css('display', 'none');
        cat = cat + value + ', ';
    });
    $('.submenu > p').click(function(){
        $('.subsubmenu').css('display', 'none');
        $(this).next().css('display','block');
        var value = $(this).html();
        $('.subsubcategory').html(value);   
        if (!$(this).next().attr('class') || $.trim($(this).next().html()) == "") {
            var value = $(this).html();
            cat = cat + value;
            $('.menutext').attr('value', cat);
            $('.popup').css('display', 'none');
            $('.menutext').removeAttr('disabled');
            $('.submenu').css('display', 'none');
            $('.subsubmenu').css('display', 'none');
            $('#ads-id_category').attr('value', $(this).attr('data-value'));
            $('#ads-id_category').trigger('change');
        }
        else {
            cat = cat + $(this).html() + ', ';
        }
    });
})
</script>
<style type="text/css">
    .submenu{
        display: none;
        position: absolute;
        margin-left: 310px;
        top: 0;
        width: 280px !important;
        padding: 0 !important;
        border-right: 1px solid #ddd;
        height: 410px;
    }
    .submenu p:hover {
        color: red
    }
    .subsubmenu{
        display: none;
        position: absolute;
        margin-left: 290px;
        top: 0;
        width: 290px;
    }
    .menu {
        cursor: pointer;
        position: relative;
    }
    .menup {
        width: 275px;
        padding-left: 10px;
     /*    border-right: 1px solid #ddd; */
     border-bottom: 1px dotted #ddd;
    }
    .menup:hover {
        color: red;
    }
    .popup {
        width: 900px;
        height: 450px;
        background: #fff;
        display: none;
        position: absolute;
        left: 30%;
        top: 200px;
        z-index: 99;
        border: 5px solid #ddd;
    }
    p {
        margin: 0;
    }
    .category {
        width: 280px;
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
    .menup, .subcategory1, .subcategory2, .subcategory3, .subcategory4, .subcategory37, .subcategory38, .subcategory39, .subcategory42 {
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
</style>

<input type="text" name="" class="menutext" value="<?=$cateName;?>">
<div class="popup">
    
    <div>
        <div class="category">Категория</div>
        <div class="subcategory"></div>
        <div class="subsubcategory"></div>
    </div>
    <div style="clear: both;"></div>
    <div style="border-bottom: 1px solid #ddd;"></div>
    
    <div class="menu">
        <div style="border-right: 1px solid #ddd; width: 300px; height: 410px;">
        <?$i=1;?>
        <?$j=1;?>
        <?foreach($categories['parentCat'] as $parent):?>

                <p class="menup category<?=$i;?>">
                    <input type="checkbox" value="<?=$parent['id']?>">
                    <?=$parent['name'];?></p>
                <?$i++;?>
                <div class="submenu">
                    <?if(!is_array($categories['bottomCat'][$parent['id']])) continue;?>
                    <?foreach($categories['bottomCat'][$parent['id']] as $key => $cat):?>
                        <input type="checkbox" value="<?=$cat['id']?>">
                        <p data-value="<?=$cat['id']?>" class="subcategory<?=$j;?>"><?=$cat['name'];?></p>
                        <?$j++;?>
                        <div class="subsubmenu">
                        <?foreach($categories['categories'] as $item):?>
                            <?if($item['id_parent'] == $cat['id']):?>
                                <input type="checkbox" value="<?=$item['id']?>">
                            <p data-value="<?=$item['id']?>"><?=$item['name'];?></p>
                            <?endif;?>
                        <?endforeach;?>
                        </div>
                    <?endforeach;?>
                </div>
        <?endforeach;?>
        </div>

    </div>
    <div class="ads-close" onclick="javascript: $('.popup').css('display', 'none'); $('.menutext').removeAttr('disabled');"></div>
</div>