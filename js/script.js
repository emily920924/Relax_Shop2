$(document).ready(function(){
      $('.bxslider').bxSlider();
      $('#MenuIcon').click(function(){
        if($('#PrimaryNavigation').hasClass('switch')){
          //條件正確時執行
          //顯示
        $('#PrimaryNavigation').slideDown();
        $('#PrimaryNavigation').removeClass('switch');
      }else{
        //條件不正確實執行
        //隱藏
        $('#PrimaryNavigation').slideUp();
        $('#PrimaryNavigation').addClass('switch');
      }
      });
      $(window).scroll(function(){
        var window_scroll = $(window).scrollTop();
        // $('p').text(window_scroll);
        if(window_scroll > 200){
            $('#PageTop').fadeIn();
        }else{
            $('#PageTop').fadeOut();
        }
      });
      $('#PageTop>a').click(function(){
        $('body').animate({
          scrollTop:0,
        },1000);
      });

      $('#NewBtn').click(function(){
        $('body').animate({
          scrollTop: $('#News').offset().top
        },1000);
      });
      $('#PopularBtn').click(function(){
        $('body').animate({
          scrollTop: $('#Popular').offset().top
        },1000);
      });
      $('#SalesBtn').click(function(){
        $('body').animate({
          scrollTop: $('#Taster').offset().top
        },1000);
      });
});
