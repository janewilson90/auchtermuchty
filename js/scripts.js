(function() {
  $(function() {
    var grid, nhsLength, privateLength, treatmentLength;
    treatmentLength = $(".treatment-item").length;
    nhsLength = $(".treatment-item.nhs").length;
    privateLength = $(".treatment-item.private").length;
    $(".treatment-btn[data-filter='.nhs']").find(".treatment-badge").text(nhsLength);
    $(".treatment-btn[data-filter='.private']").find(".treatment-badge").text(privateLength);
    $(".treatment-btn[data-filter='*']").find(".treatment-badge").text(treatmentLength);
    grid = $(".treatment-grid");
    grid.isotope({
      filter: '*',
      itemSelector: '.treatment-item',
      animationOptions: {
        duration: 750,
        easing: 'linear',
        queue: false
      }
    });
    $(".treatment-btn").click(function() {
      var selector;
      $(".treatment-btn .current").removeClass("current");
      $(this).addClass("current");
      selector = $(this).attr("data-filter");
      grid.isotope({
        filter: selector,
        itemSelector: '.treatment-item',
        animationOptions: {
          duration: 750,
          easing: 'linear',
          queue: false
        }
      });
      return false;
    });
  });

}).call(this);
