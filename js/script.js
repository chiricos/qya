$(document).on('ready',function()
{/*
    $('.page').hide();
    $('.page').eq(0).show();
    $('.page').eq(0).addClass('animation-pages');
    $('.one').addClass('border-p');
    $('.one').on('click',function()
    {
        $('.page').hide();
        $('.page').eq(0).show();
        $('.page').eq(0).removeClass('animation-pages');
        $('.page').eq(0).addClass('animation-pages');
        $('.page-number p').removeClass('border-p');
        $(this).addClass('border-p');
    });
    $('.two').on('click',function()
    {
        $('.page').hide();
        $('.page').eq(1).show();
        $('.page').eq(1).removeClass('animation-pages');
        $('.page').eq(1).addClass('animation-pages');
        $('.page-number p').removeClass('border-p');
        $(this).addClass('border-p');
    });
    $('.three').on('click',function()
    {
        $('.page').hide();
        $('.page').eq(2).show();
        $('.page').eq(2).removeClass('animation-pages');
        $('.page').eq(2).addClass('animation-pages');
        $('.page-number p').removeClass('border-p');
        $(this).addClass('border-p');
    });

    $('.four').on('click',function()
    {
        $('.page').hide();
        $('.page').eq(3).show();
        $('.page').eq(3).removeClass('animation-pages');
        $('.page').eq(3).addClass('animation-pages');
        $('.page-number p').removeClass('border-p');
        $(this).addClass('border-p');
    });
    $('.five').on('click',function()
    {
        $('.page').hide();
        $('.page').eq(4).show();
        $('.page').eq(4).removeClass('animation-pages');
        $('.page').eq(4).addClass('animation-pages');
        $('.page-number p').removeClass('border-p');
        $(this).addClass('border-p');
    });
    $('.six').on('click',function()
    {
        $('.page').hide();
        $('.page').eq(5).show();
        $('.page').eq(5).removeClass('animation-pages');
        $('.page').eq(5).addClass('animation-pages');
        $('.page-number p').removeClass('border-p');
        $(this).addClass('border-p');
    });*/

    /*===============================
    * MENU RESPONSIVE
    * =============================*/




    $('#menu-responsive').on('click',function()
    {
        $('.menu-mobile ').removeClass('hidden');
    });

    $('.close').on('click',function()
    {
        $('.menu-mobile ').addClass('hidden');
    });

    $(window).load(function() {
        $('.flexslider').flexslider(
            {

            });
    });

    $('.pop-up-video2 spam').on('click',function()
    {
       $('.pop-up-video2').addClass('hidden');
    });

    $('.boton-2').on('click',function()
    {
        $('.pop-up-video2').removeClass('hidden');
    });

    $('.pop-up-video1 spam').on('click',function()
    {
        $('.pop-up-video1').addClass('hidden');
    });

    $('.boton-1').on('click',function()
    {
        $('.pop-up-video1').removeClass('hidden');
    });
});
