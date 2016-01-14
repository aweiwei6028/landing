<?php
include_once 'header.php';
?>
<div class="layout_main">
    <div class="layout_title_image">
        <img src="include/image/Category_News_Layout A_B_C/Category_News_Layout A_1.png">
        <div class="layoutA_title">Reminiscing the "Long Tail"<br>McLaren 675LT 新車發表</div>
    </div>
    <div class="single_content">
        <p>
            一個悶熱的下午，一場恍如隔世的相遇，<br>
            明明是2015的台北內湖，一切彷彿倒流回1997，McLaren在Le Mans大賽勇往直前的畫面。<br><br>
            一個悶熱的下午，一場恍如隔世的相遇，<br>
            明明是2015的台北內湖，一切彷彿倒流回1997，McLaren在Le Mans大賽勇往直前的畫面。
        </p>
        <p>
            <img class="size_medium" src="include/image/Category_News_Layout A_B_C/Category_News_Layout A_2.png">
            <img class="size_medium" src="include/image/Category_News_Layout A_B_C/Category_News_Layout A_3.png">
        </p>
        <img class="size_full" src="include/image/Category_News_Layout A_B_C/Category_News_Layout A_4.png">
        <p>
            一個悶熱的下午，一場恍如隔世的相遇，<br>
            明明是2015的台北內湖，一切彷彿倒流回1997，McLaren在Le Mans大賽勇往直前的畫面。<br><br>
            一個悶熱的下午，一場恍如隔世的相遇，<br>
            明明是2015的台北內湖，一切彷彿倒流回1997，McLaren在Le Mans大賽勇往直前的畫面。
        </p>
        <p>
            <img class="size_medium" src="include/image/Category_News_Layout A_B_C/Category_News_Layout A_5.png">
            <img class="size_medium" src="include/image/Category_News_Layout A_B_C/Category_News_Layout A_6.png">
            <img class="size_medium" src="include/image/Category_News_Layout A_B_C/Category_News_Layout A_5.png">
            <img class="size_medium" src="include/image/Category_News_Layout A_B_C/Category_News_Layout A_6.png">
        </p>
        <img class="size_full" src="include/image/Category_News_Layout A_B_C/Category_News_Layout A_9.png">
    </div>
    <div class="layout_share">
        分享<img src="include/image/Oval2f.png">
    </div>
    <div class="hash_tag">
        <div class="hash_tag_block">hash tag</div>
        <div class="hash_tag_block">hash tag</div>
        <div class="hash_tag_block">hash tag</div>
        <div class="hash_tag_block">hash tag</div>
    </div>
    <div class="next_prev">
        <div class="next_prev_block">
            <div class="next_prev_title">上一篇 - </div>
            <div class="next_prev_text">個性化高級跑車</div>
        </div>
        <div class="next_prev_block">
            <div class="next_prev_title">下一篇 - </div>
            <div class="next_prev_text">悲喜與共</div>
        </div>
    </div>
    <div class="related">
        <div class="related_title">相關文章</div>
        <div class="related_detail">
            <div class="related_block">
                <div class="related_block_img"><img src="include/image/Category_News_Layout A_B_C/Category_News_Layout A_10.png"></div>
                <div class="related_block_date">16 Jan 2015</div>
                <div class="related_block_text">Reminiscing the "Long Tail"<br>McLaren 675LT 新車發表</div>
            </div>
            <div class="related_block">
                <div class="related_block_img"><img src="include/image/Category_News_Layout A_B_C/Category_News_Layout A_11.png"></div>
                <div class="related_block_date">16 Jan 2015</div>
                <div class="related_block_text">Reminiscing the "Long Tail"<br>McLaren 675LT 新車發表</div>
            </div>
            <div class="related_block">
                <div class="related_block_img"><img src="include/image/Category_News_Layout A_B_C/Category_News_Layout A_12.png"></div>
                <div class="related_block_date">16 Jan 2015</div>
                <div class="related_block_text">Reminiscing the "Long Tail"<br>McLaren 675LT 新車發表</div>
            </div>
        </div>
    </div>
</div>
<?php
include_once 'foot.php';
?>

<script>

    $(function () {
        $(window).load(function () {
            var h1 = $(".layout_title_image").height() / 2;
            var h2 = $(".layoutA_title").height() / 2.2;
            $(".layoutA_title").css('top', h1 - h2 + 'px');
        });

    });

</script>