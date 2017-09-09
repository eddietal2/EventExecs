$(document).ready(function(){

  $(window).scroll(function(){
    $(".logo").css({
      "opacity": "0",
      "transition": "0.5s",
    })
  });

  $(".eventdaymgt").hover(function(){
    $(this).css({
      'opacity' : '0'
    })
  },
  function(){
    $(this).css({
      'opacity' : '1'
    })
  }
)

  // NAVIGATION CONTACT BUTTON ANIMATION
  $(".contactButton").hover(function(){
    $(this).css({
      "background-color" : "rgba(247,78,71,1)",
      "transition" : "0.3s"
    })
    $(".contactButton > a").css({
      "color" : "white"
    })
  },
  function(){
    $(this).css({
      "background-color":"rgba(247,78,71,0.7)"
    })
    $(".contactButton > a").css({
      "color" : "black"
    })
  });

  // FA ICONS ANIMATION
  $(".fa").hover(function(){
    $(this).css({
      "transform" : "scale(1.5)"
    })
  },
  function(){
    $(this).css({
      "transform" : "scale(1.0)"
    })
  });

  // CONTACT FORM BUTTON ANIMATION
  $(".contactFormButton").hover(function(){
    $(this).css({
      "transform" : "scale(1.1)",
      "transition" : "0.2s",
      "background-color" : "rgba(255,255,255,0.95)",
      "color" : "black"
    })
  },
  function(){
    $(this).css({
      "transform" : "scale(1.0)",
      "background-color" : "black",
      "color" : "rgba(245,245,245,0.9)"
    })
  });

  // INPUT FIELDS ANIMATION
  $(".inputFields").hover(function(){
    $(this).css({
      "transform" : "scale(1.1)",
      "transition" : "0.2s",
      "background-color" : "",
      "color" : "#f7c200",
      "box-shadow" : "1px 1px 10px 1px rgba(0,0,0,0.5)"
    })
  },
  function(){
    $(this).css({
      "transform" : "scale(1.0)",
      "background-color" : "rgba(0,0,0,0.5)",
      "color" : "#f7c200",
      "box-shadow" : "1px 1px 10px 1px rgba(0,0,0,0)"
    })
  });
  $("textarea").hover(function(){
    $(this).css({
      "transform" : "scale(1.1)",
      "transition" : "0.2s",
      "background-color" : "",
      "color" : "#f7c200",
      "box-shadow" : "1px 1px 10px 1px rgba(0,0,0,0.5)"
    })
  },
  function(){
    $(this).css({
      "transform" : "scale(1.0)",
      "background-color" : "rgba(0,0,0,0.5)",
      "color" : "#f7c200",
      "box-shadow" : "1px 1px 10px 1px rgba(0,0,0,0)"
    })
  });


  $(".navbar li")
    .hover(function(){
      $(this).css({
        "box-shadow" : "inset 1px 1px 10px -2px rgba(0,0,0,0.3)"
      })
    },
    function(){
      $(this).css({
      "box-shadow" : "inset 1px 1px 10px 1px rgba(0,0,0,0)"
      })
      .animate({transition: "0.2s"});
    })

});
