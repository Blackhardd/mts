jQuery(document).ready(function($){
    $('.header-navigation-trigger > button').on('click', function(){
        $(this).find('.icon-hamburger').toggleClass('icon-hamburger--collapsed')
    })
})