(function($) {
  let isTabletOrMobile = false;

  $("noscript").remove();

  jQuery(document).ready(() => {
    if (window.innerWidth < 1025) isTabletOrMobile = true;
    if (window.scrollY > 164) {
      $("header").addClass("show-logo");
    }

    $(document).scroll(e => {
      if (window.scrollY > 164) {
        $("header").addClass("show-logo");
      } else {
        $("header").removeClass("show-logo");
      }
    });

    if (
      window.location.pathname == "/wordpress/" ||
      window.location.pathname == "/" ||
      window.location.pathname == ""
    ) {
      $(document).scroll(e => {
        if (isTabletOrMobile) {
          let z = [];
          $(".post").each(function() {
            let a = $(this).offset().top;
            let b = window.scrollY + $(window).innerHeight() / 2 - 100;
            z.push(Math.abs(a - b));
          });
          let key = z.indexOf(Math.min.apply(null, z));
          $(".post").removeClass("activate");
          $(".post")
            .eq(key)
            .addClass("activate");
        }
      });
    }

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
      $("#mobile-nav").addClass("opened");
      $(document.body).addClass("navOpened");
    });

    $("#mobile-nav-close-btn").click(() => {
      $("#mobile-nav").removeClass("opened");
      $(document.body).removeClass("navOpened");
    });

    $("#desktop-search-box-btn").click(() => {
      $("#desktop-search-box").slideToggle(200);
    });

    $("#mobile-search-box-btn").click(() => {
      $("#mobile-search-box").slideToggle(200);
    });
  });
})(jQuery);
