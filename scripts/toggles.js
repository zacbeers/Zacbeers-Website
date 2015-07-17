$(document).ready(function() {
   $("#openNav").click(function() {
        $("#menu").addClass("opened");
        $("#menuGhost").addClass("opened");
    });
    $("#menuText").click(function() {
        $("#menu").addClass("opened");
        $("#menuGhost").addClass("opened");
    });
    $("#closeNav").click(function() {
        $("#menu").removeClass("opened");
        $("#menuGhost").removeClass("opened");
    });
    $("#menuGhost").click(function() {
        $("#menu").removeClass("opened");
        $("#menuGhost").removeClass("opened");
    });
 });