  <?php  include('head.php');  ?>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KHFWQQX"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  
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

  <!-- Header / Nav -->
  <?php  include('header.php');  ?>

  <div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1 contact">Contact us</h1>
            </div>
        </div>
    </div>
  </div>
  <div class="container">
  	<h1 style="text-align:center;">Your Message Has Been Sent!<h1>
  </div>
<div class="container contactfooter">
    <div class="row">
        <div class="col-md-6 col-md-offset-2">
            <div class="well well-sm">
                <form method="post" action="mail.php">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="name">
                                  Name</label>
                              <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input name="contactname" type="text" class="form-control" id="name" placeholder="Enter Name" required="required" />
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="email">
                                  Email Address</label>
                              <div class="input-group">
                                  <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                  </span>
                                  <input name="contactemail" type="email" class="form-control" id="email" placeholder="Enter Email" required="required" /></div>
                          </div>
                          <div class="form-group">
                              <label for="name">
                                  Type Your Message</label>
                              <textarea style="padding:5px;" name="contactmessage" id="message" class="form-control" rows="9" cols="25" required="required"
                                  placeholder="What's on your mind Now?"></textarea>
                          </div>
                      </div>
                      <div class="col-md-4">
                          <button type="submit" name="submit" class="button large ls-l btn-group-justified" id="btnContactUs">
                              Send Message</button>
                      </div>
                  </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
          <form>
            <legend style="color:#1abc9c;"><span class="glyphicon glyphicon-globe"></span> Our Offices</legend>
            <address>
                535 Mission st.<br>
                San Francisco, CA 94105 <br>
                <a href="tel:4159803589"><i class="fa fa-phone"></i> (415) 980-3589</a>
            </address>
            <address>
            <address>
                <strong>Sam Brody - Admissions Mentor</strong><br>
                <a href="mailto:sambrody@codifyacademy.com">sambrody@codifyacademy.com</a>
            </address>
            <address>
                <strong>Matt Brody - Student Mentor</strong><br>
                <a href="mailto:mattbrody@codifyacademy.com">mattbrody@codifyacademy.com</a>
            </address>
            <address>
                <strong>Chris Brody - Student Mentor</strong><br>
                <a href="mailto:chrisbrody@codifyacademy.com">chrisbrody@codifyacademy.com</a>
            </address>
            <div class="contactSocial">
              <a href="https://www.facebook.com/codifyacad" target="_blank" title="Codify Academy - Facebook">
                <i class="fa fa-facebook-square fa-3x"></i>
              </a>
              <a href="https://twitter.com/CodifyAcad" target="_blank" title="Codify Academy - Twitter">
                <i class="fa fa-twitter fa-3x"></i>
              </a>
            </div>
          </form>
        </div>
    </div>
</div>

  <?php include('footer.php');?>

</body>
</html>
