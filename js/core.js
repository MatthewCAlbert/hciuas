'use strict'

//core function
var Strings = {
    create : (function() {
            var regexp = /{([^{]+)}/g;

            return function(str, o) {
                 return str.replace(regexp, function(ignore, key){
                       return (key = o[key]) == null ? '' : key;
                 });
            }
    })()
};
String.prototype.create = function(o) {
    return Strings.create(this, o);
}

//Soft Alert function
function SoftAlert(){}
SoftAlert.open = function(id){
    $(".soft-alert#"+id).addClass('open');
    $("body").css("overflow","hidden");
}
SoftAlert.close = function(id){
    $(".soft-alert#"+id).removeClass('open');
    $("body").css("overflow","auto");
}

function MobileNav(){}

MobileNav.toggle = function(){
    if( $('header nav').hasClass('active') ){
        $('header nav').slideUp(300);
        $('header nav').removeClass('active');
        $('body').css('overflow','auto');
        $('.dark-cover').fadeOut(300);
    }else{
        $('header nav').slideDown(300);
        $('header nav').addClass('active');
        $('body').css('overflow','hidden');
        $('.dark-cover').fadeIn(300);
    }
}