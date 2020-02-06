$(document).ready(function(){
    quoteBlur();
    toggleNavigation();
})


function quoteBlur(){
    $('.quote-main').hover(function(){
        console.log('Quote Hover...');
        $('.quote-main').toggleClass('blurry');
        $('.quote-name').toggleClass('blurry');
        $('.quote-image').toggleClass('blurry');
    });
}

function toggleNavigation() {
    $('#site-navigation-toggle').click(function(){
        $('.nav-container').addClass('open');
        $('body').addClass('hold');
    });
    $('#site-navigation-close').click(function(){
        $('.nav-container').removeClass('open');
        $('body').removeClass('hold');
    });

}