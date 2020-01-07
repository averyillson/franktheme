$(document).ready(function(){
    quoteBlur();
})


function quoteBlur(){
    $('.quote-main').hover(function(){
        console.log('Quote Hover...');
        $('.quote-main').toggleClass('blurry');
        $('.quote-name').toggleClass('blurry');
        $('.quote-image').toggleClass('blurry');
    });
}