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
});