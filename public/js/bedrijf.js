$(document).ready(function(){
    $(".rating-star").click(function(){
        var forVal = $(this).attr("for");
        $("#ratingInput").attr("value", forVal.substring(forVal.length-1));
        console.log($("#ratingInput").attr("value"));
    });
});