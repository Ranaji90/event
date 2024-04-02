 <!-- === back-to-top End === -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="public/js/jquery-3.4.1.js"></script>
      <!-- jQuery  for scroll me js -->
      <script src='public/js/jquery-min.js'></script>
      <!-- popper  -->
      <script src="public/js/popper.min.js"></script>
      <!--  bootstrap -->
      <script src="public/js/bootstrap.min.js"></script>
      <!-- Appear JavaScript -->
      <script src="public/js/appear.js"></script>
      <!-- Jquery-migrate JavaScript -->
      <script src='public/js/jquery-migrate.min.js'></script>
      <!-- countdownTimer JavaScript -->
      <script src='public/js/jQuery.countdownTimer.min.js'></script>
      <!-- Tox-progress JavaScript -->
      <script src='public/js/tox-progress.min.js'></script>
      <!-- Popper JavaScript -->
      <script src='public/js/popper.min.js'></script>
      <!-- Owl.carousel JavaScript -->
      <script src='public/js/owl.carousel.min.js'></script>
      <!-- Countdown JavaScript -->
      <script src='public/js/countdown.js'></script>
      <!-- Jquery.countTo JavaScript -->
      <script src='public/js/jquery.countTo.js'></script>
      <!-- Magnific-popup JavaScript -->
      <script src='public/js/jquery.magnific-popup.min.js'></script>
      <!-- Isotope.pkgd.min JavaScript -->
      <script src='public/js/isotope.pkgd.min.js'></script>
      <!-- Wow JavaScript -->
      <script src='public/js/wow.min.js'></script>
      <!--  Custom JavaScript -->
      <script src="public/js/custom.js"></script>
      <!-- REVOLUTION JS FILES -->
      <script src="public/revslider/js/revolution.tools.min.js"></script>
      <script src="public/revslider/js/rs6.min.js"></script>
        <script>
          
          var revapi5,
            tpj;
          jQuery(function() {
            tpj = jQuery;
            if(tpj("#rev_slider_5_1").revolution == undefined){
              revslider_showDoubleJqueryError("#rev_slider_5_1");
            }else{
              revapi5 = tpj("#rev_slider_5_1").show().revolution({
                jsFileLocation:"js/",
                sliderLayout:"fullwidth",
                visibilityLevels:"1240,1024,778,480",
                gridwidth:"1600,1024,778,480",
                gridheight:"700,768,560,400",
                spinner:"spinner0",
                editorheight:"700,768,560,400",
                responsiveLevels:"1240,1024,778,480",
                disableProgressBar:"on",
                navigation: {
                  onHoverStop:false,
                  arrows: {
                    enable:true,
                    style:"custom",
                    left: {
                      h_offset:30
                    },
                    right: {
                      h_offset:30
                    }
                  }
                },
                fallbacks: {
                  allowHTML5AutoPlayOnAndroid:true
                },
              });
            }
            
          });
        </script>