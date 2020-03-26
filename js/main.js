(function($) {
  let isTabletOrMobile = false;

  jQuery(document).ready(() => {
    if (window.innerWidth < 1025) isTabletOrMobile = true;
    if (window.scrollY > 164) {
      $("header").addClass("show-logo");
    }

    $(document).scroll(e => {
      /*if (window.scrollY > 36) {
        $("header").addClass("pageScrolled");
      } else if (window.scrollY < 5) {
        $("header").removeClass("pageScrolled");
      }*/
      if (window.scrollY > 164) {
        $("header").addClass("show-logo");
      } else {
        $("header").removeClass("show-logo");
      }
    });

    $("header").click(e => {
      if ($(e.target).hasClass("site-header"))
        window.scrollTo({
          top: 0,
          left: 0,
          behavior: "smooth"
        });
    });

    $("#search-btn").click(() => {
      $("#search-box")
        .stop()
        .slideToggle(200, () => {
          if (!$("#search-box").is(":hidden")) {
            $("#search-box-input").focus();
          }
        });
    });

    $("#mobileNavBtn").click(() => {
      if (!isTabletOrMobile) return;
      $(".menu-item-has-children").removeClass("menuOpened");
      $(".sub-menu").slideUp();
      $("#mobileNavBtn").toggleClass("is-active");
      $("nav")
        .stop()
        .slideToggle();
    });

    $("#mobile-nav-open-btn").click(() => {
      console.log("test");
      $("#mobile-nav").addClass("opened");
    });

    $("#mobile-nav-close-btn").click(() => {
      $("#mobile-nav").removeClass("opened");
    });

    $("#desktop-search-box-btn").click(() => {
      $("#desktop-search-box").slideToggle(200);
    });

    $("#mobile-search-box-btn").click(() => {
      $("#mobile-search-box").slideToggle(200);
    });
  });
})(jQuery);
