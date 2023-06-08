$(document).ready(function(){

    $nav=$('.nav')  
    $togleCollapse=$('.toggle-icon i')
    $togglemenu=$('.nav .nav-menu')
    $toggleitems=$('.nav .nav-items')

    $togleCollapse.click(function(){
        $nav.toggleClass('collapse');
        
    })
    

    $('.owl-carousel').owlCarousel({
        loop: true,
        autoplay: true,
        sutoplayTimeout: 3000
    });


})