$(document).ready( function() {
    //definition of the functions to fire in reverse chronological order
    
function fourthreveal(){
      $("#mouse").addClass("display");
    }
function thirdreveal(){
      $(".block").addClass("opened");
      $("#shadow").addClass("open");
      setTimeout(fourthreveal, 500);
    }
function secondreveal(){
      $(".block").addClass("open");
      setTimeout(thirdreveal, 1000);
    }
function reveal(){
      $(".block").addClass("opening");
      setTimeout(secondreveal, 200);
    }

    //begin sequence, read code backwards
    setInterval(reveal, 1000);
});