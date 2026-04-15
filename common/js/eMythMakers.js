$(document).ready(function () {
  // sticky-menu
  $(window).scroll(function () {
    if ($(window).scrollTop() > 20) {
      $(".sticky-menu").addClass("sticky");
    } else {
      $(".sticky-menu").removeClass("sticky");
    }
  });
  // search-top-js
  $(document).ready(function () {
    $(".fa-search").click(function () {
      $(".search-box").toggle();
      $("input[type='text']").focus();
    });
  });
  //BackToTop
  $(document).ready(function () {
    $(window).scroll(function () {
      if ($(this).scrollTop() > 50) {
        $("#back_to_top").fadeIn();
      } else {
        $("#back_to_top").fadeOut();
      }
    });
    // scroll body to 0px on click
    $("#back_to_top").click(function () {
      $("#back-to-top").tooltip("hide");
      $("body,html").animate(
        {
          scrollTop: 0,
        },
        800,
      );
      return false;
    });

    $("#back_to_top").tooltip("show");
  });
  // back-to
  var btn = $("#button");
  $(window).scroll(function () {
    if ($(window).scrollTop() > 300) {
      btn.addClass("show");
    } else {
      btn.removeClass("show");
    }
  });
  btn.on("click", function (e) {
    e.preventDefault();
    $("html, body").animate({ scrollTop: 0 }, "300");
  });
  // toggle menubar
  $(document).ready(function () {
    $("#menuToggle").on("click", function () {
      $("#dropdownMenu").toggleClass("active");
      if ($("#dropdownMenu").hasClass("active")) {
        $(this).find("i").removeClass("fa-bars").addClass("fa-xmark");
      } else {
        $(this).find("i").addClass("fa-bars").removeClass("fa-xmark");
      }
    });
  });
  // language
  $(document).ready(function () {
    $(".lang-btn").click(function () {
      $(".lang-btn").removeClass("active");
      $(this).addClass("active");
    });
  });

  //Search
  $(".menu-search").click(function (event) {
    event.preventDefault();
    $(".search_block").toggle("show hide");
  });
  $("a.close-search").click(function (e) {
    e.preventDefault();
    $(".search_block").toggle("show hide");
  });
  $(".menu-left").click(function (e) {
    e.preventDefault();
    $(".MobileMenu, .menu-left i").toggleClass("show hide");
    $("body, .most_last_news_details, .most_read_details").toggleClass("no-scrollbar");
  });
  // mobilel menu js
  $(".mobile-topbar .bars i").on("click", function () {
    $(".mobile-menu-overlay,.mobile-menu-main").addClass("active");
    return false;
  });
  $(".close-mobile-menu,.mobile-menu-overlay").on("click", function () {
    $(".mobile-menu-overlay,.mobile-menu-main").removeClass("active");
  });
  $(document).ready(function () {
    $(".accordion-click").click(function () {
      let submenu = $(this).closest(".sub-mobile-menu").find("ul");
      $(".sub-mobile-menu ul").not(submenu).slideUp(300);
      $(".accordion-click i").not($(this).find("i")).removeClass("fa-angle-up").addClass("fa-angle-down");
      if (submenu.is(":visible")) {
        submenu.slideUp(300);
        $(this).find("i").removeClass("fa-angle-up").addClass("fa-angle-down");
      } else {
        submenu.slideDown(300);
        $(this).find("i").removeClass("fa-angle-down").addClass("fa-angle-up");
      }
    });
  });
});
