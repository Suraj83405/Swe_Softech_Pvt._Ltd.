function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn"); // Use getElementById instead of getElementsByClassName
  
  if (dots.style.display === "none") {
      // If "dots" is hidden, show the dots and switch button text to "Read More"
      dots.style.display = "inline";
      btnText.innerHTML = "Read More";
      moreText.style.display = "none";
  } else {
      // If "dots" is visible, hide the dots and show the rest of the text
      dots.style.display = "none";
      btnText.innerHTML = "Read Less";
      moreText.style.display = "inline";
  }
}

	/* Project Performance */
  
$.fn.jQuerySimpleCounter = function( options ) {
  var settings = $.extend({
      start:  0,
      end:    100,
      easing: 'swing',
      duration: 400,
      complete: ''
  }, options );

  var thisElement = $(this);

  $({count: settings.start}).animate({count: settings.end}, {
      duration: settings.duration,
      easing: settings.easing,
      step: function() {
          var mathCount = Math.ceil(this.count);
          thisElement.text(mathCount);
      },
      complete: settings.complete
  });
};


$('#number1').jQuerySimpleCounter({end: 12,duration: 5000});
$('#number2').jQuerySimpleCounter({end: 55,duration: 5000});
$('#number3').jQuerySimpleCounter({end: 359,duration: 2500});
$('#number4').jQuerySimpleCounter({end: 246,duration: 3500});


