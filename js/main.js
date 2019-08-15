(function ($) {
  let isTabletOrMobile = false;

  jQuery(document).ready(() => {
    if (window.innerWidth < 1025) isTabletOrMobile = true;

    $(window).resize(() => {
      if (window.innerWidth < 1025) isTabletOrMobile = true;
      else isTabletOrMobile = false;

      // nav not showing after opened on mobile and then window resized
      if (!isTabletOrMobile) $("nav").css("display", "block");
      else {
        $("nav").slideUp(0);
      }
      //else $("nav").css("display", "none");
    });

    $(document).scroll(e => {
      if (window.scrollY > 36) {
        $("header").addClass("pageScrolled");
      } else if (window.scrollY < 5) {
        $("header").removeClass("pageScrolled");
      }
    });

    /*
    if (isTabletOrMobile) {
      $(".menu-item-has-children")
        .children("a:first")
        .append("&nbsp;&nbsp;\u25BF");
    }*/

    $("header").click(e => {
      if ($(e.target).hasClass("site-header"))
        window.scrollTo({
          top: 0,
          left: 0,
          behavior: "smooth"
        });
    });

    $("#mobileNavBtn").click(() => {
      if (!isTabletOrMobile) return;
      $(".menu-item-has-children").removeClass('menuOpened')
      $(".sub-menu").slideUp();
      $("#mobileNavBtn").toggleClass("is-active");
      $("nav")
        .stop()
        .slideToggle();
    });

    $(".menu-item-has-children").click(function (e) {
      if (!isTabletOrMobile) return;
      if (
        $(e.target)
        .parent()
        .hasClass("sub-menu") ||
        $(e.target)
        .parent()
        .parent()
        .hasClass("sub-menu")
      )
        return;
      if (!$(this).hasClass('menuOpened')) {
        e.preventDefault();
        $(this).addClass('menuOpened')
        $(".menu-item-has-children").not(this)
          .find(".sub-menu").slideUp();
        $(".menu-item-has-children").not(this).removeClass('menuOpened')
      }

      $(e.target)
        .parent()
        .find(".sub-menu")
        .stop()
        .slideToggle();
    });
  });
})(jQuery);