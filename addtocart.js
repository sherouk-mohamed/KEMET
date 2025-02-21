$(document)-ready(function(){
var cartcountvalue = 0 ; 
var cartcount = $('.cart .count')
$(cartcount).text(cartcountValue);
$('.cart__btn').on ('click' , function() {
    var cartbtn = this ; 
    var cartcountpostion = $(cartcount).offset();
    var btnpostion = $(this).offsett();
    var leftpsos = 
    cartcountpostion.left < btnpostion.left 
    ? btnpostion.left - (btnpostion.left - cartcountpostion.left) 
    : cartcountpostion-left;
var toppos = 
cartcountpostion.top < btnposition-top 
? cartcountpostion.top 
: cartcountpostion.top;
$(cartbtn) 
.append("<span class= ' count'>1</span>");
$(cartbtn).find(".count"). each (function(i, count){
    $(count).offset({
        left: leftpsos, 
        top: toppos, 
    })
    .animate(
        {
            opcity: 0 
        },
        800,
        function() {
            $(this).remove();
            cartcountvalue++;
            $(cartcount).text(cartcountvalue)
        }
    )
})

})
})               