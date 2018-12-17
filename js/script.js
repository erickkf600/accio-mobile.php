/*MENU MOBILE*/
$(document).ready(function(){
    $(".menu-icon").click(function(){
        $("#undnav").toggleClass("mostrar");
    });
});
/*hamburger menu*/
function myFunction(x) {
    x.classList.toggle("change");
}

$(document).ready(function(){
    $("#item1").click(function(){
        $("#sub1").slideToggle("slow");
    });
    $("#item2").click(function(){
        $("#sub2").slideToggle("slow");
    });
    $("#item3").click(function(){
        $("#sub3").slideToggle("slow");
    });
    $("#item4").click(function(){
        $("#sub4").slideToggle("slow");
    });
    $("#item5").click(function(){
        $("#sub5").slideToggle("slow");
    });
});
/*SLIDES*/
$(document).ready(function() {
    $('.categorias').slick({
        slidesToShow: 7,
        slidesToScroll: 3,
        autoplay: true,
        autoplaySpeed: 1500,
        infinite: true,
        arrows: false,
        responsive: [
        {breakpoint: 1024,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 3}
            },
            {breakpoint: 480,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1}
            }
        ]

            });
});