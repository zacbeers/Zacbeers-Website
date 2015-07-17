$(document).ready( function() {
    //definition of the functions to fire in reverse chronological order
  function startscroll(){
      $("#mouse").removeClass("hideScrolling");
      $("#mouse").addClass("startScrolling");
    }
  function hidescroll(){
      $("#mouse").removeClass("preScrolling");
      $("#mouse").addClass("hideScrolling");
      setTimeout(startscroll, 200);
    }
    function prescroll(){
      $("#mouse").removeClass("doneScrolling");
      $("#mouse").addClass("preScrolling");
      setTimeout(hidescroll, 200);
    }
  
  function unscroll(){
      $("#mouse").removeClass("scrolling");
      $("#mouse").addClass("doneScrolling");
    setTimeout(prescroll, 300);
    }
    function scroll(){
      $("#mouse").removeClass("startScrolling");
      $("#mouse").addClass("scrolling");
      setTimeout(unscroll, 500);
    }

    //begin sequence, read code backwards
    setInterval(scroll, 3000);
});