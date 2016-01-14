<?php
include_once 'header.php';
?>
<div class="layout_main">
    <div class="layout_title_image">
        <img src="include/image/Contact.png">
        <div class="layoutA_title">聯絡我們</div>
    </div>
    <div class="layout_text">
        <div class="contact_left">
            <div class="contact_text">
                如果你自認為是個車狂有滿腹的車經想要跟狂人分享；如果你向來默默耕耘著，用實際行動去證明你對特定車款的狂愛與堅持；如果你也跟我一樣，想把這些心情故事跟更多有著同樣心情的同道中人分享。請讓我有機會把您與愛車的故事傳承下去！
                <br><br><br>This is our legacy, this is mad man diary.
            </div>
            <div class="contact_text2">
                <i class="fa fa-phone"></i><b>0987987987</b> Vincent
            </div>
            <div class="contact_text2">
                <i class="fa fa-envelope"></i><b>Blog@gmail.com</b>
            </div>
        </div>
        <div class="contact_right">
            <input class="contact_input" type="text" placeholder="Name">
            <input class="contact_input" type="text" placeholder="E-mail">
            <input class="contact_input" type="text" placeholder="Website">
            <textarea rows="10" class="contact_input" type="text" placeholder="Comment"></textarea>
            <div class="contact_submit">送出</div>
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