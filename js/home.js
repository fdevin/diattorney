$(document).ready(function() {
    var owl = $('.dell-hero-owl');
    owl.owlCarousel({
        items: 1,
        nav: false,
        onInitialized  : counter,
        onTranslated : counter
    });
    $(".dell-hero-owl-next").click(function() {
        owl.trigger('next.owl.carousel');
    });
    $(".dell-hero-owl-prev").click(function() {
        owl.trigger('prev.owl.carousel');
    });
    function counter(event) {
        var element   = event.target;
        var items     = event.item.count;
        var item      = event.item.index + 1;
       $('#counter').html(item+" / "+items)
    }
    $('.dell-clients-owl').owlCarousel({
        margin: 24,
        responsive : {
            0 : {
                items: 1,
                dots: true
            },
            768 : {
                items: 2,
                dots: true
            },
            992 : {
                items: 3,
                dots: false,
                nav: true,
                navText: ["<img src='img/icons/owl-back.svg' width='48' alt='Prev' />","<img src='img/icons/owl-next.svg' width='48' alt='Next' />"]
            }
        }
    });
});