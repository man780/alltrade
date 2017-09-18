<script type="text/javascript">
$(document).ready(function(){
    var winWidth = $(window).width();
    if (winWidth > 533) {
    	var viloyatTuman = '';
        $('#viloyatTuman').click(function(){
            $(this).attr('disabled', 'disabled');
            $('.tuman').html('');
            $('.submenuvil').css('display', 'none');
              doc_w = $(document).width();
              doc_h = $(document).height();
              doc_w = (doc_w-doc_w%2)/2;
              doc_h = (doc_h-doc_h%2)/2;
              var top = $(document).scrollTop();
              top = top + 100;
              $('.popupvil').css('top', top);
              $('.popupvil').css('left', doc_w);

              var w = $('.popupvil').width();
              var h = $('.popupvil').height();
              w = (w-w%2)/2;
              h = (h-h%2)/2;
              w = -w;
              h = -h;
              /*h = h - 150;*/
              $('.popupvil').css('margin-left', w);
              //$('.popupvil').css('margin-top', h);
              
              //alert(top);

            
            $('.popupvil').css('display', 'block');
        });

        $('.menupvil').click(function(){
        	viloyatTuman = '';
            $('.submenuvil').css('display', 'none');
            $(this).next().css('display','block');
            var value = $(this).html();
            $('#viloyatrezerv').attr('value', value);
            value = /*value + */'<span style="color: red; cursor: pointer;" onclick="javascript: $(\'#viloyatTuman\').attr(\'value\', $(\'#viloyatrezerv\').attr(\'value\')); $(\'.popupvil\').css(\'display\', \'none\'); $(\'#viloyatTuman\').removeAttr(\'disabled\'); $(\'.submenuvil\').css(\'display\', \'none\');">Искать по всему региону</span>';
            $('.tuman').html(value);
            viloyatTuman = viloyatTuman + $(this).text() + ', ';
        });
        $('.submenuvil > p').click(function(){    
            var value = $(this).html();
            viloyatTuman = viloyatTuman + value;
            $('#viloyatTuman').attr('value', viloyatTuman);
            $('.popupvil').css('display', 'none');
            $('#viloyatTuman').removeAttr('disabled');
            $('.submenuvil').css('display', 'none');
        });
    }
    else {
        //alert(winWidth);
        var viloyatTuman = '';
        $('#viloyatTuman').click(function(){
            $('html, body').css('overflow-y', 'hidden');
            $(this).attr('disabled', 'disabled');
            $('.tuman').html('');
            $('.submenuvil1').css('display', 'none');
            $('.popupvil-550').css('display', 'block');
        });
        $('.menupvil1').click(function(){
            viloyatTuman = '';
            $('.submenuvil1').css('display', 'none');
            $(this).next().css('display','block');
            var value = $(this).html();
            $('#viloyatrezerv').attr('value', value);
            value = /*value + */'<span style="color: red; cursor: pointer;" onclick="javascript: $(\'#viloyatTuman\').attr(\'value\', $(\'#viloyatrezerv\').attr(\'value\')); $(\'#viloyatTuman\').removeAttr(\'disabled\'); $(\'.popupvil-550\').css(\'display\', \'none\'); $(\'.popupvil-550\').css(\'margin-left\', \'0\'); $(\'html, body\').css(\'overflow-y\', \'auto\');">Искать по всему региону</span>';
            $('.tuman').html(value);
            value = value + '<span class="ads-nazad-2" onclick="javascript: $(\'.popupvil-550\').css(\'margin-left\', \'0\');"> Назад</span>';
            $('.tuman1').html(value);
            $('.popupvil-550').css('margin-left', '-100%');
            viloyatTuman = viloyatTuman + $(this).text() + ', ';
        });
        $('.submenuvil1 > p').click(function(){    
            var value = $(this).html();
            viloyatTuman = viloyatTuman + value;
            $('#viloyatTuman').attr('value', viloyatTuman);
            $('.popupvil-550').css('display', 'none');
            $('.popupvil-550').css('margin-left', '0');
            $('#viloyatTuman').removeAttr('disabled');
            $('.submenuvil1').css('display', 'none');
            $('html, body').css('overflow-y', 'auto');
        });
    }
    $('.popupvil-550-close').click(function(){
        $('#viloyatTuman').removeAttr('disabled');
        $('.popupvil-550').css('display', 'none');
        $('html, body').css('overflow-y', 'auto');
    });
})
</script>
<style type="text/css">
    .submenuvil {
        display: none;
        position: absolute;
        margin-left: 260px;
        top: 0;
        width: calc(100% - 260px);
    }
    .submenuvil p {
        border-bottom: 1px dotted #ddd;
    }
    .submenuvil p:hover {
        color: red;
    }
    .menuvil {
        cursor: pointer;
        position: relative;
    }
    .menupvil {
        width: 240px;
        padding-left: 10px;
        border-bottom: 1px dotted #ddd;
    }
    .menupvil:hover {
        color: red;
    }
    .popupvil {
        width: 500px;
        height: 445px;
        background: #fff;
        display: none;
        position: absolute;
        left: 30%;
        top: 1600px;
        z-index: 99;
        border: 5px solid #ddd;
    }
    p {
        margin: 0;
    }
    .viloyat {
        width: 230px;
        float: left;
        padding: 10px;
    }
    .tuman {
        width: 230px;
        float: left;
        padding: 10px;
    }

    .menupvil1 {
        position: relative;
    }
    .menupvil1:after, .menupvil1:before {
        left: 96%;
        top: 50%;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
    }
    .menupvil1:after {
        border-color: rgba(255, 255, 255, 0);
        border-left-color: #ffffff;
        border-width: 3px;
        margin-top: -3px;
    }
    .menupvil1:before {
        border-color: rgba(207, 207, 207, 0);
        border-left-color: red;
        border-width: 4px;
        margin-top: -4px;
    }

    .menupvil {
        position: relative;
    }
    .menupvil:after, .menupvil:before {
        left: 95%;
        top: 50%;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
    }
    .menupvil:after {
        border-color: rgba(255, 255, 255, 0);
        border-left-color: #ffffff;
        border-width: 3px;
        margin-top: -3px;
    }
    .menupvil:before {
        border-color: rgba(207, 207, 207, 0);
        border-left-color: red;
        border-width: 4px;
        margin-top: -4px;
    }

    .ads-nazad-2 {
        position: relative;
        color: blue;
        cursor: pointer;
        float: right;
    }
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
    .ads-nazad-2:after {
        border-color: rgba(136, 183, 213, 0);
        border-right-color: #ffffff;
        border-width: 3px;
        margin-top: -3px;
    }
    .ads-nazad-2:before {
        border-color: rgba(194, 225, 245, 0);
        border-right-color: blue;
        border-width: 4px;
        margin-top: -4px;
    }





    .popupvil-550 {
        display: none;
        position: fixed;
        left: 0;
        top: 0;
        width: 200%;
        height: 100%;
        background: #fff;
        z-index: 1001;
        overflow-y: auto;
        transition: all 0.5s ease;
    }
    .submenuvil1 {
        display: none;
        width: 50%;

        position: absolute;
        margin-left: 50%;
        top: 0;
    }
    .submenuvil1 p {
        border-bottom: 1px dotted #ddd;
        padding-left: 10px;
    }
    .submenuvil1 p:hover {
        color: red;
    }
    .menuvil1 {
        cursor: pointer;
        position: relative;
    }
    .menupvil1 {
        width: calc(100% - 10px);
        padding-left: 10px;
        border-bottom: 1px dotted #ddd;
    }
    .menupvil1:hover {
        color: red;
    }
    p {
        margin: 0;
    }
    .viloyat1, .tuman1 {
        width: calc(50% - 20px);
        float: left;
        padding: 10px;
    }
    .menuvil-cont1 {
        width: 50%;
        height: 100%;
    }
</style>
	
<div class="form-group">
	<label for="viloyatTuman">Выберите Регион</label>
    <input id="viloyatTuman" type="text" value="<?=$value;?>">
    <input type="hidden" id="viloyatrezerv">
</div>

<div class="popupvil">        
    <div>
        <div class="viloyat">Области</div>
        <div class="tuman"></div>
    </div>
    <div style="clear: both;"></div>
    <div style="border-bottom: 1px solid #ddd;"></div>
    
    <div class="menuvil">
        <div style="border-right: 1px solid #ddd; width: 250px; height: 390px;">
            <?foreach($viloyats as $viloyat):?>
                <p class="menupvil" data-value="<?=$viloyat['id_vil'];?>"><?=$viloyat['name'];?></p>
                <div class="submenuvil">
                    <?foreach($tumans as $key => $tuman):?>
                    	<?if($tuman['id_vil'] == $viloyat['id_vil']):?>
                        <p data-value="<?=$tuman['id_tuman']?>"><?=$tuman['name'];?></p>
                        <?endif;?>
                    <?endforeach;?>                    
                </div>
            <?endforeach;?>
        </div>
    </div>
    <div class="ads-close" onclick="javascript: $('.popupvil').css('display', 'none'); $('#viloyatTuman').removeAttr('disabled');"></div>
</div>

<div class="popupvil-550">        
    <div>
        <div class="viloyat1">
            Области
            <span style="color: red; cursor: pointer; float: right" class="popupvil-550-close">Выход</span>
        </div>
        <div class="tuman1"></div>
    </div>
    <div style="clear: both;"></div>
    <div style="border-bottom: 1px solid #ddd;"></div>
    
    <div class="menuvil1">
        <div class="menuvil-cont1">
            <?foreach($viloyats as $viloyat):?>
                <p class="menupvil1" data-value="<?=$viloyat['id_vil'];?>"><?=$viloyat['name'];?></p>
                <div class="submenuvil1">
                    <?foreach($tumans as $key => $tuman):?>
                        <?if($tuman['id_vil'] == $viloyat['id_vil']):?>
                        <p data-value="<?=$tuman['id_tuman']?>"><?=$tuman['name'];?></p>
                        <?endif;?>
                    <?endforeach;?>                    
                </div>
            <?endforeach;?>
        </div>
    </div>
</div>