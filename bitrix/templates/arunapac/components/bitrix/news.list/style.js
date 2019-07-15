
    //Обработка клика на стрелку вправо
    $(document).on('click', ".carousel-control-next",function(){
        var carusel = $(this).parents('.carousel');
        right_carusel(carusel);
        return false;
    });
//Обработка клика на стрелку влево
$(document).on('click',".carousel-control-prev",function(){
    var carusel = $(this).parents('.carousel');
    left_carusel(carusel);
    return false;
});
function right_carusel(carusel){
    var block_width = $(carusel).find('.carousel-block').outerWidth();
    $(carusel).find(".carousel-items .carousel-block").eq(-1).clone().prependTo($(carusel).find(".carousel-items"));
    $(carusel).find(".carousel-items").css({"left":"-"+block_width+"px"});
    $(carusel).find(".carousel-items .carousel-block").eq(-1).remove();
    $(carusel).find(".carousel-items").animate({left: "0px"}, 200);

}
function left_carusel(carusel){
    var block_width = $(carusel).find('.carousel-block').outerWidth();
    $(carusel).find(".carousel-items").animate({left: "-"+ block_width +"px"}, 200, function(){
        $(carusel).find(".carousel-items .carousel-block").eq(0).clone().appendTo($(carusel).find(".carousel-items"));
        $(carusel).find(".carousel-items .carousel-block").eq(0).remove();
        $(carusel).find(".carousel-items").css({"left":"0px"});
    });
}

$(function() {
//Раскомментируйте строку ниже, чтобы включить автоматическую прокрутку карусели
    auto_right('.carousel:first');
})

// Автоматическая прокрутка
function auto_right(carusel){
    setInterval(function(){
        if (!$(carusel).is('.hover'))
            right_carusel(carusel);
    }, 3000)
}
// Навели курсор на карусель
$(document).on('mouseenter', '#carouselExampleControls', function(){$(this).addClass('hover')})
//Убрали курсор с карусели
$(document).on('mouseleave', '#carouselExampleControls', function(){$(this).removeClass('hover')})

// Появление стрелок
$("#carouselExampleControls").hover(seen, invisible);
function seen(){$(".carousel-control-next-icon").fadeIn(100);$(".carousel-control-prev-icon").fadeIn(100);}
function invisible(){$(".carousel-control-next-icon").fadeOut(100);$(".carousel-control-prev-icon").fadeOut(100);}

