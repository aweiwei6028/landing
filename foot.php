<div class="footer">
    <div class="footer_logo_block">
        <div class="footer_logo">LOGO</div>
        <div class="logo_title">
            歡迎來到狂人日誌。僅獻給所有試著在這個數位化年代，惦記著、堅持著那份對純粹機械無止盡熱愛的熱血車狂們。
        </div>
        <div class="facebook_icon"><i class="fa fa-facebook-square"></i></div>
    </div>
    <div class="footer_menu">
        <div class="footer_menu_list">關於我們</div>
        <div class="footer_menu_list">
            文章分類
            <div class="footer_menu_list_detail">
                <div class="footer_menu_list_detail_block">車壇紀聞</div>
                <div class="footer_menu_list_detail_block">試駕映象</div>
                <div class="footer_menu_list_detail_block">人車關係</div>
                <div class="footer_menu_list_detail_block">情境式車輛介紹</div>
                <div class="footer_menu_list_detail_block">公路壯遊</div>
            </div>
        </div>
        <div class="footer_menu_list">
            聯絡我們
            <div class="footer_contact">0987-987987</div>
            <div class="footer_contact">blog@blog.com</div>
        </div>
    </div>
    <div class="copy_right">Copyright @2015 All rights reserved. 版權所有 不得轉載</div>
</div>
</body>

</html>
<script type="text/javascript" src="include/js/jquery.js"></script>
<script type="text/javascript" src="include/js/jquery-ui.min.js"></script>
<script>
    $(function() {
        isMobile = false; //initiate as false
        // device detection
        if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent)
                || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0, 4))) {
            isMobile = true;
        }
        if (isMobile === false) {
            $(window).resize(function() {
                location.reload();
            });
        }
        if (isMobile === true || $(window).width() < 1256) {

            $('.mobile_menu').click(function() {
                if (!$(this).hasClass("open")) {
                    $(this).addClass("open");
                    $(".menu_control").slideDown(300);
                    $(this).find("i").removeClass("fa-bars");
                    $(this).find("i").addClass("fa-times");
                } else {
                    $(this).removeClass("open");
                    $(".menu_control").slideUp(100);
                    $(this).find("i").removeClass("fa-times");
                    $(this).find("i").addClass("fa-bars");
                }
            });
            $('.show_second').click(function() {
                if (!$(this).hasClass("open")) {
                    $(".head_menu_list_block").slideDown(300);
                    $(this).addClass("open");
                } else {
                    $(".head_menu_list_block").slideUp(100);
                    $(this).removeClass("open");
                }
            });

        } else {
            $('.head_menu_block').click(function() {
                if (!$(this).hasClass("head_menu_block_choose")) {
                    $('.head_menu_block').removeClass("head_menu_block_choose");
                    $(this).addClass("head_menu_block_choose");
                    if ($(this).hasClass("show_second")) {
                        $(".head_menu_list_block").slideDown(300);
                    } else {
                        $(".head_menu_list_block").slideUp(100);
                    }
                }
            });
            $('.head_menu_list').click(function() {
                if (!$(this).hasClass("head_menu_list_choose")) {
                    $('.head_menu_list').removeClass("head_menu_list_choose");
                    $(this).addClass("head_menu_list_choose");
                }
            });
            $(document).on("click", function(e) {
                if ($(e.target).is(".head_menu_block") === false && $(e.target).is(".head_menu_list") === false && $(e.target).is(".head_menu_list_block") === false) {
                    $(".head_menu_list_block").slideUp(100);
                    $(".show_second").removeClass("head_menu_block_choose");
                }
            });
            $('.head_logo').click(function() {
                var href = "index.php";
                window.location.href = href;
            });
        }


        $('.menu_search_input').blur(function() {
            $('.menu_search').removeClass("menu_search_focus");
        })
                .focus(function() {
            $(".menu_search").addClass("menu_search_focus");
        });
    });

</script>