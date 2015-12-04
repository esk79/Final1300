/**
 * Created by EvanKing on 11/27/15.
 */

$(document).ready(function(){
    setOnClick();
});

function setOnClick() {
 $("ul li a").click(function(e){
     e.preventDefault();
     var id = e.currentTarget.id + "-area";

     $("html body").animate({
         scrollTop: $(id).offset().top - 40
     }, 1000)
    })
}