jQuery(function($) {
  
  function filterProjects(x, y) {
    $("." + x).click(function() {
      
      var $this = $(this);
      
      if ($this.hasClass("active-filter")) {
        setTimeout(function() {
          // Then reset everything.
          $(".fs-leaders").css("min-height", "1px");
          $this.removeClass("active-filter");
          $(".fs-leadership-person").fadeIn("fast");
        }, 100);
      } else {
        setTimeout(function() {
          // Make sure the page doesn't deform.
          var $height = $(".fs-leaders").css("height");
          $(".fs-leaders").css("min-height", $height);
          // reset all filters.
          $(".filter").removeClass("active-filter");
          $this.addClass("active-filter");
          // Show everything so we can hide it
          $(".hidden").css("display", "block");
          $('.fs-leadership-person').not('.' + y).fadeOut("slow");
          $('.fs-leadership-person').not('.' + y).addClass("hidden");
        }, 100);
      }
    });
  }
  
  filterProjects("Corporate-Market", "Corporate");
  filterProjects("Industrial-Market", "Industrial");
  filterProjects("Residential-Market", "Residential");
  filterProjects("Institutional-Market", "Institutional");

});


jQuery(function($) {

  jQuery('.fs-leadership-person').each(function() {
    var _sCurrClasses = jQuery(this).attr('class');
    jQuery(this).attr('class', _sCurrClasses.replace(/,/g, ' '));
  });

});
