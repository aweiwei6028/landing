<?php
include_once 'header.php';
?>
<div class="main">
    <div class="main_block">
        <div class="main_style1">
            <div class="img_shadow "><img src="include/image/Landingpage/Landingpage_pic-1.png"></div>
            <div class="block_title1">Reminiscing the "Long Tail"</div>
            <div class="block_title2">McLaren 675LT 新車發表</div>
            <div class="main_style_date"></div>
        </div>
    </div><!--
    --><div class="main_block">
        <div class="main_style2">
            <div class="img_shadow"><img src="include/image/Landingpage/Landingpage_pic-2.png"></div>
            <div class="block_title1"><i class="fa fa-car"></i>Urban Outdoor 撒野記趣</div>
            <div class="block_title2">Part II 海洋 ft. Allrood Quattro</div>
            <div class="main_style_date">20 Nov 2015</div>
        </div><!--
        --><div class="main_style2">
            <div class="img_shadow"><img src="include/image/Landingpage/Landingpage_pic-3.png"></div>
            <div class="block_title1"><i class="fa fa-car"></i>Mean Machine 狠角色</div>
            <div class="block_title2">The 55 Ronin:Mercedes Benz CLS 550</div>
            <div class="main_style_date">20 Nov 2015</div>
        </div><!--
        --><div class="main_style2">
            <div class="img_shadow img_shadow_hover"><img src="include/image/Landingpage/Landingpage_pic-4.png"></div>
            <div class="block_title1"><i class="fa fa-car"></i>Gran Turismo 公路壯遊</div>
            <div class="block_title2">Madvnz改版 - 賓利</div>
            <div class="main_style_date">20 Nov 2015</div>
        </div>
    </div>
    <div class="main_block"><!--
    --><div class="main_style3">
            <div class="img_shadow"><img src="include/image/Landingpage/Landingpage_pic-5.png"></div>
            <div class="block_title1"><i class="fa fa-car"></i>Reminiscing the "Long Tail"</div>
            <div class="block_title2">McLaren 675LT 新車發表</div>
            <div class="main_style_date">20 Nov 2015</div>
        </div><!--
        --><div class="main_style3">
            <div class="img_shadow"><img src="include/image/Landingpage/Landingpage_pic-6.png"></div>
            <div class="block_title1"><i class="fa fa-car"></i>Reminiscing the "Long Tail"</div>
            <div class="block_title2">McLaren 675LT 新車發表</div>
            <div class="main_style_date">20 Nov 2015</div>
        </div>
    </div>

</div>
<div class="load_more">顯示更多</div>
<?php
include_once 'foot.php';
?>

<script>
    $(function () {
        $('.menu_search_input').blur(function () {
            $('.menu_search').removeClass("menu_search_focus");
        })
                .focus(function () {
                    $(".menu_search").addClass("menu_search_focus");
                });

        $("main_style1 , main_style2 , main_style3").hover(
                function () {
                    $(this).find('img_shadow_hover');
                },
                function () {
                    $(this).removeClass('img_shadow_hover');
                }
        );
    });
</script>