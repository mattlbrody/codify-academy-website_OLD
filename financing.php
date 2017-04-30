<?php  include('head.php');  ?>

<body ng-app="financingApp">

  <!-- KISSmetrics tracking snippet -->
  <script type="text/javascript">var _kmq = _kmq || [];
  var _kmk = _kmk || '9c27c877479ebee6d9bdc811c10d0918d4dda8c0';
  function _kms(u){
    setTimeout(function(){
      var d = document, f = d.getElementsByTagName('script')[0],
      s = d.createElement('script');
      s.type = 'text/javascript'; s.async = true; s.src = u;
      f.parentNode.insertBefore(s, f);
    }, 1);
  }
  _kms('//i.kissmetrics.com/i.js');
  _kms('//scripts.kissmetrics.com/' + _kmk + '.2.js');
  </script>

  <?php  include('social.php');  ?>
  <?php  include('header.php');  ?>


    <div ng-view></div>



      <!-- CITY -->
      <!-- <div class="row">
          <h2>Which city would you like to attend?</h2>
          <input type="radio" name="City" value="Manhattan Class"> Manhattan - 25 Broadway, New York, NY 10004
          <br>
          <input type="radio" name="City" value="San Francisco Class"> San Francisco - 156 2nd Street, San Francisco, CA 94105
      </div> -->



    <!-- Main Scripts -->


    <script src="assets/js/jquery.unveilEffects.js"></script>
  <script src="js/retina-1.1.0.js"></script>
  <script src="js/jquery.hoverdir.js"></script>
    <script src="js/owl.carousel.js"></script>
  <script src="js/jquery.hoverex.min.js"></script>
  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/custom.js"></script>
  <!-- LayerSlider script files -->
  <script src="layerslider/js/greensock.js" type="text/javascript"></script>
  <script src="layerslider/js/layerslider.transitions.js" type="text/javascript"></script>
  <script src="layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
  <!-- Google Code for Remarketing Tag -->
  <script type="text/javascript">
      /* <![CDATA[ */
      var google_conversion_id = 909855431;
      var google_custom_params = window.google_tag_params;
      var google_remarketing_only = true;
      /* ]]> */
  </script>
  <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
  </script>
  <noscript>
      <div style="display:inline;">
          <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/909855431/?value=0&amp;guid=ON&amp;script=0"/>
      </div>
  </noscript>
  <!-- Facebook code for Remarketing Tag -->
  <script>
      (function() {
        var _fbq = window._fbq || (window._fbq = []);
        if (!_fbq.loaded) {
          var fbds = document.createElement('script');
          fbds.async = true;
          fbds.src = '//connect.facebook.net/en_US/fbds.js';
          var s = document.getElementsByTagName('script')[0];
          s.parentNode.insertBefore(fbds, s);
          _fbq.loaded = true;
        }
        _fbq.push(['addPixelId', '313066122236538']);
      })();
      window._fbq = window._fbq || [];
      window._fbq.push(['track', 'PixelInitialized', {}]);
  </script>
  <script src="js/phone.js"></script>
      <script src="js/modernizr.js"></script>

      <img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=313066122236538&amp;ev=PixelInitialized" />
  </noscript>

  <script src="js/app.js"></script>
</body>
</html>
