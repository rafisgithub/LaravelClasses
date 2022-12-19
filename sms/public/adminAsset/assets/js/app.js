

$(function() {
	"use strict";

  // Tooltops

    $(function () {
        $('[data-bs-toggle="tooltip"]').tooltip();
    })


	$(function() {
		for (var e = window.location, o = $(".sidebar-wrapper .tab-content a").filter(function() {
				return this.href == e
			}).addClass("active");

			o.is("a");)
			
			o = o.parent("").parent("").addClass("active show");
			console.log(o[0].id.toString())
			var tab = "#" + o[0].id.toString()
			$("[data-bs-target='" + tab + "']").addClass('active')
			
		}); 



    $(".nav-toggle-icon").on("click", function() {
		$(".wrapper").toggleClass("toggled")
	})

    $(".mobile-toggle-icon").on("click", function() {
		$(".wrapper").addClass("toggled")
	})


	$(".search-toggle-icon").on("click", function() {
		$(".top-header .navbar form").addClass("full-searchbar")
	})
	$(".search-close-icon").on("click", function() {
		$(".top-header .navbar form").removeClass("full-searchbar")
	})


	$(".chat-toggle-btn").on("click", function() {
		$(".chat-wrapper").toggleClass("chat-toggled")
	}), $(".chat-toggle-btn-mobile").on("click", function() {
		$(".chat-wrapper").removeClass("chat-toggled")
	}), $(".email-toggle-btn").on("click", function() {
		$(".email-wrapper").toggleClass("email-toggled")
	}), $(".email-toggle-btn-mobile").on("click", function() {
		$(".email-wrapper").removeClass("email-toggled")
	}), $(".compose-mail-btn").on("click", function() {
		$(".compose-mail-popup").show()
	}), $(".compose-mail-close").on("click", function() {
		$(".compose-mail-popup").hide()
	})


	$(document).ready(function() {
		$(window).on("scroll", function() {
			$(this).scrollTop() > 300 ? $(".back-to-top").fadeIn() : $(".back-to-top").fadeOut()
		}), $(".back-to-top").on("click", function() {
			return $("html, body").animate({
				scrollTop: 0
			}, 600), !1
		})
	})


	// switcher 

	$("#LightTheme").on("click", function() {
		$("html").attr("class", "light-theme")
	}),

	$("#DarkTheme").on("click", function() {
		$("html").attr("class", "dark-theme")
	}),

	$("#SemiDarkTheme").on("click", function() {
		$("html").attr("class", "semi-dark")
	}),

	$("#MinimalTheme").on("click", function() {
		$("html").attr("class", "minimal-theme")
	})


	$("#headercolor1").on("click", function() {
		$("html").addClass("color-header headercolor1"), $("html").removeClass("headercolor2 headercolor3 headercolor4 headercolor5 headercolor6 headercolor7 headercolor8")
	}), $("#headercolor2").on("click", function() {
		$("html").addClass("color-header headercolor2"), $("html").removeClass("headercolor1 headercolor3 headercolor4 headercolor5 headercolor6 headercolor7 headercolor8")
	}), $("#headercolor3").on("click", function() {
		$("html").addClass("color-header headercolor3"), $("html").removeClass("headercolor1 headercolor2 headercolor4 headercolor5 headercolor6 headercolor7 headercolor8")
	}), $("#headercolor4").on("click", function() {
		$("html").addClass("color-header headercolor4"), $("html").removeClass("headercolor1 headercolor2 headercolor3 headercolor5 headercolor6 headercolor7 headercolor8")
	}), $("#headercolor5").on("click", function() {
		$("html").addClass("color-header headercolor5"), $("html").removeClass("headercolor1 headercolor2 headercolor4 headercolor3 headercolor6 headercolor7 headercolor8")
	}), $("#headercolor6").on("click", function() {
		$("html").addClass("color-header headercolor6"), $("html").removeClass("headercolor1 headercolor2 headercolor4 headercolor5 headercolor3 headercolor7 headercolor8")
	}), $("#headercolor7").on("click", function() {
		$("html").addClass("color-header headercolor7"), $("html").removeClass("headercolor1 headercolor2 headercolor4 headercolor5 headercolor6 headercolor3 headercolor8")
	}), $("#headercolor8").on("click", function() {
		$("html").addClass("color-header headercolor8"), $("html").removeClass("headercolor1 headercolor2 headercolor4 headercolor5 headercolor6 headercolor7 headercolor3")
	})


	new PerfectScrollbar(".iconmenu")
    new PerfectScrollbar(".textmenu")


	new PerfectScrollbar(".header-message-list")
    new PerfectScrollbar(".header-notifications-list")






});