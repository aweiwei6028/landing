<?php
include_once 'header.php';
?>
<div class="layout_main">
    <div class="layout_title_image">
        <img src="include/image/About.png">
        <div class="layoutA_title">關於我們</div>
    </div>
    <div class="layout_text">
        歡迎來到狂人日誌。僅獻給所有試著在這個數位化年代，惦記著、堅持著那份對純粹機械無止盡熱愛的熱血車狂們。<br><br>
        歡迎來到狂人日誌。僅獻給所有試著在這個數位化年代，惦記著、堅持著那份對純粹機械無止盡熱愛的熱血車狂們。
        歡迎來到狂人日誌。僅獻給所有試著在這個數位化年代，惦記著、堅持著那份對純粹機械無止盡熱愛的熱血車狂們。
        歡迎來到狂人日誌。僅獻給所有試著在這個數位化年代，惦記著、堅持著那份對純粹機械無止盡熱愛的熱血車狂們。
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