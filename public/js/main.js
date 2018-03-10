$(document).ready(function(){
    $("#mainButton1").click(function(){
        $("#main1").hide(500);
        $("#main2").show(1000);
        $(".changing").animate({left: "-=350px"}, 1500)
    });
 
    $("#mainButton2").click(function(){
        $("#main2").hide(500);
        $("#main1").show(1000);
        $(".changing").animate({left: "+=350px"}, 1500)    
       
    });
 });