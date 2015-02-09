$(function(){
$(".slide_btn").on("click", function() {
    $(this).toggleClass("active");//開いた時、ボタンにクラスを追加
    $(".slide_box").slideToggle("fast");//”slow”、”normal”、”fast”
});
 
$(".fade_btn").on("click", function() {
    $(this).toggleClass("active");//開いた時、ボタンにクラスを追加
    $(".fade_box").fadeToggle("slow");//”slow”、”normal”、”fast
});
})
