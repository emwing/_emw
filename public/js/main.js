$(document).ready(function() {
// homepage animation variables
  var curtainContainer = $("#curtainContainer");
  var svgElements = $(".introSVGs");
  var introText = $("#introText");
  var introH1 = $("#intro h1");
  var introH3 = $("#intro h3");
  var decoHzLine = $(".decoHzLine");
  var scrDnDv = $("#scrollDownDiv");
  var scrDnLk = $("#scrollDownLink");
  var scrDnSVG = $("#scrollDownSVG");
  var scrollHint = $("#scrollHint");
  var mobileCheckbox = $(':checkbox'); // find the mobile menu checkbox
  var isMobile = false; // device detection initiates as false
  if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) {
    isMobile = true;
  }


// GENERAL FUNCTIONS
  // fullpage initialization
    function fullPage() {
      $("#fullpage").fullpage({
        licenseKey: '0869D384-A937425E-9B5237B8-148861A9',
        autoScrolling: true,
        easingcss3: "cubic-bezier(0.645, 0.045, 0.355, 1)",
        scrollingSpeed: 1000,
        anchors: ["welcome","myWork","aboutMe","contactMe"],
        animateAnchor: false,
        afterLoad: function(anchorLink, index, state) {
          var loadedSection = $(this);
          var sectionIndex = index.index;
          if (sectionIndex == 0) {
            sectionOut("#work");
            sectionOut("#about");
            sectionOut("#contact");
          } else if (sectionIndex == 1) {
            sectionIn("#work");
          } else if (sectionIndex == 2) {
            sectionIn("#about");
          } else if (sectionIndex == 3) {
            scrollOut(); // hide scrollHint
            sectionIn("#contact");
            socMedIn();
            sectionOut("#work");
            sectionOut("#about");
          }
        },
        onLeave: function(origin, destination, index) {
          var leaveSection = $(this);
          var originIndex = origin.index;
          var destIndex = destination.index;
          if (originIndex == "1") {
            sectionOut("#work");
          } else if (originIndex == "2") {
            sectionOut("#about");
          } else if (originIndex == "3") {
            scrollIn();
            sectionOut("#contact");
          }
        },
        // afterLoad: function(anchorLink, index) {},
        // afterRender: function() {
        //   $(".section").each(function(i) {
        //     var num = i;
        //     $(this).addClass("fp-section-" + num)
        //   })
        // }
      });
    } // ends fullPage set as a function


  // run this function to raise curtain div on page load, then hide the curtain container to allow interaction with site
    function raiseCurtain() {
      curtainContainer.delay(300).addClass("raise");
      introIn();
      scrollIn();
      setTimeout( function() {
        curtainContainer.css({"display" : "none", "z-index" : "1"});
      }, 1500);
    }


  // get the viewport height and adjust content containers to fit and rerun function each time window orientation or size changes
    (function() {
      function size() {
        var theminwidth = Math.min(document.documentElement.clientWidth, window.screen.width, window.innerWidth);
        var theminheight = Math.min(document.documentElement.clientHeight, window.screen.height, window.innerHeight);
        var wMinush = theminwidth - theminheight;
        var hMinusW = theminheight - theminwidth;
      // fix background gradient svg's height to not change when mobile address bar hides
        $('html body #bgGradientSVG').css('height', theminheight + "px");
      // if portrait, adjust homepage imgContainers to center after animation...
        if (theminheight > theminwidth) {
          $(".imgContainer").css("left", "7.5%");
        }
      // fix pages' scroll down widths so the svg won't be wider than the text
        if(scrDnDv.length > 0) {
          var scrDnLkWidth = scrDnLk.width();
          var scrollWidth = scrDnLkWidth + 4;
          scrDnDv.css("width", scrollWidth + "px");
          scrDnSVG.css("width", scrollWidth + "px");
        }

      } // ends size()
      $(window).resize(size);
      size();
    }());  // ends function for height correction


// GSAP timeline functions
  // slide in intro svg (play only once)
    function introIn() {
      var tl = new TimelineMax();
      tl.staggerFrom(svgElements, 0.6, {
        x: "100%",
        ease: CustomEase.create("custom", "M0,0 C0,0 0.018,0.196 0.058,0.32 0.09,0.424 0.106,0.483 0.148,0.581 0.181,0.66 0.211,0.711 0.26,0.78 0.301,0.838 0.363,0.906 0.42,0.938 0.478,0.97 0.57,1.014 0.708,1.014 0.783,1.014 1,1 1,1")
      }, 0.05)
      .from(introH1, 0.8, {
        autoAlpha: 0,
        x: "-100%",
        ease: CustomEase.create("custom", "M0,0 C0,0 0.018,0.196 0.058,0.32 0.09,0.424 0.106,0.483 0.148,0.581 0.181,0.66 0.211,0.711 0.26,0.78 0.301,0.838 0.363,0.906 0.42,0.938 0.478,0.97 0.57,1.014 0.708,1.014 0.783,1.014 1,1 1,1")
      }, "-=1.5")
      .staggerFrom(decoHzLine, 0.6, {
        strokeDashoffset: 150
      }, 0.3, "-=1")
      .from(introH3, 0.8, {
        autoAlpha: 0,
        y: "-20",
        transformOrigin: "center",
        ease: CustomEase.create("custom", "M0,0 C0,0 0.018,0.196 0.058,0.32 0.09,0.424 0.106,0.483 0.148,0.581 0.181,0.66 0.211,0.711 0.26,0.78 0.301,0.838 0.363,0.906 0.42,0.938 0.478,0.97 0.57,1.014 0.708,1.014 0.783,1.014 1,1 1,1")
      }, "-=0.25");
      tl.restart();
    }


  // show and hide scroll hint
    function scrollIn() {
      var tl = new TimelineMax();
      tl.from(scrollHint, 0.6, { // scrollHint var in main.js
        y: "150%",
        ease: Power2.easeOut
      }, "+=1"); // wait until introIn animation "finishes"
      tl.restart();
    }
    function scrollOut() {
      var tl = new TimelineMax();
      tl.to(scrollHint, 0.6, { // scrollHint var in main.js
        y: "150%",
        ease: Power2.easeOut
      }, "+=1");
      tl.restart().timeScale(3);
    }


    // scrollDown in
      function scrollDownIn() {
        var tl = new TimelineMax();
        tl.from(scrDnDv, 0.6, {
          autoAlpha: 0,
          y: "-50",
          transformOrigin: "center",
          ease: CustomEase.create("custom", "M0,0 C0,0 0.018,0.196 0.058,0.32 0.09,0.424 0.106,0.483 0.148,0.581 0.181,0.66 0.211,0.711 0.26,0.78 0.301,0.838 0.363,0.906 0.42,0.938 0.478,0.97 0.57,1.014 0.708,1.014 0.783,1.014 1,1 1,1")
        });
      }


  // reveal section
    function sectionIn(section) {
      var tl = new TimelineMax();
      tl.to(section + " .textContainer", 0.8, {
        autoAlpha: 1,
        x: "0%",
        ease: CustomEase.create("custom", "M0,0 C0,0 0.018,0.196 0.058,0.32 0.09,0.424 0.106,0.483 0.148,0.581 0.181,0.66 0.211,0.711 0.26,0.78 0.301,0.838 0.363,0.906 0.42,0.938 0.478,0.97 0.57,1.014 0.708,1.014 0.783,1.014 1,1 1,1")
      }, "-=1.5")
      .from(section + " .textContainer a.button", 0.6, {
        autoAlpha: 0,
        y: "-50",
        transformOrigin: "center",
        ease: CustomEase.create("custom", "M0,0 C0,0 0.018,0.196 0.058,0.32 0.09,0.424 0.106,0.483 0.148,0.581 0.181,0.66 0.211,0.711 0.26,0.78 0.301,0.838 0.363,0.906 0.42,0.938 0.478,0.97 0.57,1.014 0.708,1.014 0.783,1.014 1,1 1,1")
      }, "-=0.5")
      .to(section + " .imgContainer", 1, {
        autoAlpha: 1,
        x: "0%",
        scale: 1,
        ease: CustomEase.create("custom", "M0,0 C0,0 0.018,0.196 0.058,0.32 0.09,0.424 0.106,0.483 0.148,0.581 0.181,0.66 0.211,0.711 0.26,0.78 0.301,0.838 0.363,0.906 0.42,0.938 0.478,0.97 0.57,1.014 0.708,1.014 0.783,1.014 1,1 1,1")
      }, 0)
      .to(section + " .imgContainer .colorBlock", 2, {
        scaleY: 0.01,
        y: "-100%",
        ease: CustomEase.create("custom", "M0,0 C0,0 0.018,0.196 0.058,0.32 0.09,0.424 0.106,0.483 0.148,0.581 0.181,0.66 0.211,0.711 0.26,0.78 0.301,0.838 0.363,0.906 0.42,0.938 0.478,0.97 0.57,1.014 0.708,1.014 0.783,1.014 1,1 1,1")
      }, 0);
      tl.restart();
    }
  // hide section
    function sectionOut(section) {
      var tl = new TimelineMax();
      tl.to(section + " .textContainer", 0.8, {
        autoAlpha: 0,
        x: "-100%",
        ease: CustomEase.create("custom", "M0,0 C0,0 0.018,0.196 0.058,0.32 0.09,0.424 0.106,0.483 0.148,0.581 0.181,0.66 0.211,0.711 0.26,0.78 0.301,0.838 0.363,0.906 0.42,0.938 0.478,0.97 0.57,1.014 0.708,1.014 0.783,1.014 1,1 1,1")
      }, "-=1.5")
      .to(section + " .imgContainer", 1, {
        autoAlpha: 0,
        x: "100%",
        scale: 0,
        ease: CustomEase.create("custom", "M0,0 C0,0 0.018,0.196 0.058,0.32 0.09,0.424 0.106,0.483 0.148,0.581 0.181,0.66 0.211,0.711 0.26,0.78 0.301,0.838 0.363,0.906 0.42,0.938 0.478,0.97 0.57,1.014 0.708,1.014 0.783,1.014 1,1 1,1")
      }, 0)
      .to(section + " .imgContainer .colorBlock", 2.5, {
        scaleY: 1,
        y: "0%",
        ease: CustomEase.create("custom", "M0,0 C0,0 0.018,0.196 0.058,0.32 0.09,0.424 0.106,0.483 0.148,0.581 0.181,0.66 0.211,0.711 0.26,0.78 0.301,0.838 0.363,0.906 0.42,0.938 0.478,0.97 0.57,1.014 0.708,1.014 0.783,1.014 1,1 1,1")
      }, "-=1");
      tl.restart();
    }

  // contact section social media links
    function socMedIn() {
      var tl = new TimelineMax();
      tl.staggerFrom(".connectIcons", 0.6, {
        autoAlpha: 0,
        y: "-50",
        transformOrigin: "center",
        ease: CustomEase.create("custom", "M0,0 C0,0 0.018,0.196 0.058,0.32 0.09,0.424 0.106,0.483 0.148,0.581 0.181,0.66 0.211,0.711 0.26,0.78 0.301,0.838 0.363,0.906 0.42,0.938 0.478,0.97 0.57,1.014 0.708,1.014 0.783,1.014 1,1 1,1")
      }, 0.05, "+=0.8");
    }



// CALL FUNCTIONS
  // target only homepage and run these functions
    if ($("#fullpage").length > 0) {
      var scene = document.getElementById("introSVG");
      var parallax = new Parallax(scene);
      fullPage();
      raiseCurtain();
      // window.location.hash = "#intro";
    }

  // target only pages and run these functions
    if (scrDnDv.length > 0) {
      setTimeout( function() {
        scrDnDv.removeClass("hideMe");
        scrollDownIn();
      }, 200);
    }

  // close the mobile menu when link clicked (needed for homepage contact section)
    $(".sectionNav").click(function(e) {
      var linkHref = $(this).attr("href");
      // e.preventDefault();
      if ($(":checked").length) {
        mobileCheckbox.prop("checked", false);
      }
    });

  // animate page scroll down to next section on scrollDown div click
    $("#scrollDownLink").click(function(e) {
      var linkHref = $(this).attr('href');
      $('html, body').animate( {
        scrollTop: $(linkHref).offset().top }, 600);
      e.preventDefault();
    });


  // if mobile device, hide curtainContainer, otherwise run function to raise it
  //   if (isMobile == true) {
  //     curtainContainer.css({"display" : "none", "z-index" : "1"});
  //   } else {
  //     raiseCurtain();
  //   }


});  // ends document ready
