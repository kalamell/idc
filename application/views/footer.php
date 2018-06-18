<?php $this->load->view('footer_menu');?>




</div>

      <?php if ($this->uri->segment(1) == 'profile'):?>
      <!-- edit profile Modal-->
      <div class="modal fade" id="editProfileModal" tabindex="-1" role="dialog" aria-labelledby="editProfileModalLabel">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="./images/close-modal.png" alt=""></span></button>
            </div>
            <div class="modal-body">
              <div class="headtext">
                <h2>แก้ไขข้อมูล</h2>
              </div>
              <div class="form-wrapper editprofile">
                <label class="labelInput" for="username">Username</label>
                <input name="username" type="text" placeholder="Username" value="Thanyamane">
                <label class="labelInput" for="description">คำอธิบาย</label>
                <textarea name="description" placeholder="คำอธิบาย">ร้านธัญญมณี บริษัท เอสเอสเอ็น เซลแอนด์ ดิสทริบิวชั่น จำกัด จำหน่ายและผลิตอัญมณีและเครื่องประดับแท้จากช่างฝีมือโดยผ่านการรับรองคุณภาพสินค้าจาก</textarea>
                <button type="submit"> <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>บันทึกข้อมูล</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php endif;?>
    
    <!-- Login Modal-->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="<?php echo base_url();?>public/images/close-modal.png" alt=""></span></button>
          </div>
          <div class="modal-body">
            <ul class="tabs" role="tablist">
              <li class="active" role="presentation"><a href="#loginTab" aria-controls="loginTab" role="tab" data-toggle="tab">
                   เข้าสู่ระบบ</a></li>
              <li role="presentation"><a href="#registerTab" aria-controls="registerTab" role="tab" data-toggle="tab">
                   สมัครสมาชิก</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="loginTab" role="tabpanel">
                <div class="login-tab-wrapper"><img class="logo" src="<?php echo base_url();?>public/images/logo-y.png" alt="">
                  <div class="hero-text">
                    <h3>ค้นหาไอเดียและเทรนวงการออกแบบอุตสาหกรรม</h3>
                    <p>เข้าร่วมกับ ID-SOCIETY.com เพื่อโปรเจคของคุณให้เป็นจริง</p>
                  </div>
                  <div class="form-wrapper"><a class="login-fb-btn" href=""> <img class="img-responsive" src="<?php echo base_url();?>public/images/login-fb.png" alt=""></a>
                    <p class="textline">หรือ</p>
                    <input type="text" placeholder="Email">
                    <input type="password" placeholder="Password">
                    <button type="submit">เข้าสู่ระบบ</button>
                    <div class="forget-password"><a href="">ลืมรหัสผ่าน</a></div>
                    <div class="term-wrapper">
                      <p>การเข้าใช้งานหมายถึงคุณ<br>ยอมรับเงื่อนไขการใช้งาน และนโยบายความเป็นส่วนตัว<br>ของ ID-SOCIETY.com</p>
                    </div>
                  </div>
                  <div class="descript-wrapper">
                    <p>เข้าร่วมกับ ID-SOCIETY.com เพื่อนำเสนอสินค้า / บริการ<br>ใน Social Platform ในรูปแบบใหม่ ที่ทุกไอเดียนำไปสู่การสร้างจริงได้<br>ลงทะเบียนเปิดโปรไฟล์เพจฟรี</p>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="registerTab" role="tabpanel"> 
                <div class="register-tab-wrapper"><img class="logo" src="<?php echo base_url();?>public/images/logo-y.png" alt="">
                  <div class="hero-text">
                    <h3>ค้นหาไอเดียและเทรนวงการออกแบบอุตสาหกรรม</h3>
                    <p>เข้าร่วมกับ ID-SOCIETY.com เพื่อโปรเจคของคุณให้เป็นจริง</p>
                  </div>
                  <div class="form-wrapper">
                    <input type="text" placeholder="Email">
                    <input type="text" placeholder="Username">
                    <input type="password" placeholder="Password">
                    <div class="checkbox-wrapper">
                      <input class="cbx-inp hidden" id="chk" checked="checked" type="checkbox">
                      <label class="cbx text-center" for="chk"></label><span>ยอมรับเงื่อนไขการใช้งาน และนโยบาย<br>ความเป็นส่วนตัวของ ID-SOCIETY.com</span>
                    </div>
                    <div class="capcha-wrapper"><img class="img-responsive" src="<?php echo base_url();?>public/images/capcha.gif" alt=""></div>
                    <button type="submit">ลงทะเบียน</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="<?php echo base_url();?>public/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>public/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>public/vendors/slick/slick.min.js"></script>
    <script src="<?php echo base_url();?>public/js/main.js"></script>

    <script type="text/javascript">
      $(function() {
        $("#producerModal").on('show.bs.modal', function(e) {
          var link = $(e.relatedTarget);
          $(this).find('.modal-content').load(link.attr('href'), function() {
            /*$('.slider-single').resize();
            $('.slider-nav').resize();*/
            $('#producerModal .slider-single').slick({
              slidesToShow: 1,
              slidesToScroll: 1,
              arrows: false,
              fade: false,
              adaptiveHeight: true,
              infinite: false,
              useTransform: true,
              speed: 400,
              cssEase: 'cubic-bezier(0.77, 0, 0.18, 1)',
            });



            $('#producerModal .slider-nav')
              .on('init', function (event, slick) {
                $('#producerModal .slider-nav .slick-slide.slick-current').addClass('is-active');
              })
              .slick({
                slidesToShow: 4,
                slidesToScroll: 4,
                dots: false,
                focusOnSelect: false,
                infinite: false,
                responsive: [{
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 5,
                    slidesToScroll: 5,
                  }
                }, {
                  breakpoint: 640,
                  settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4,
                  }
                }, {
                  breakpoint: 420,
                  settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                  }
                }]
              });

            $('#producerModal .slider-single').on('afterChange', function (event, slick, currentSlide) {
            $('#producerModal .slider-nav').slick('slickGoTo', currentSlide);
              var currrentNavSlideElem = '.slider-nav .slick-slide[data-slick-index="' + currentSlide + '"]';
              $('#producerModal .slider-nav .slick-slide.is-active').removeClass('is-active');
              $(currrentNavSlideElem).addClass('is-active');
            });

            $('#producerModal .slider-nav').on('click', '.slick-slide', function (event) {
              event.preventDefault();
              var goToSingleSlide = $(this).data('slick-index');

              $('#producerModal .slider-single').slick('slickGoTo', goToSingleSlide);
            });

            $('#producerModal .slide-prev').on('click', function(){
              $('#producerModal .slider-single').slick("slickPrev");
              $('#producerModal .slider-nav').slick("slickPrev");
            });
            $('#producerModal .slide-next').on('click', function(){
              $('#producerModal .slider-single').slick("slickNext");
              $('#producerModal .slider-nav').slick("slickNext");
            });
          });   
        })


        $("#supplierModal").on('show.bs.modal', function(e) {
          var link = $(e.relatedTarget);
          $(this).find('.modal-content').load(link.attr('href'), function() {
            /*$('.slider-single').resize();
            $('.slider-nav').resize();*/
            $('#supplierModal .slider-single').slick({
              slidesToShow: 1,
              slidesToScroll: 1,
              arrows: false,
              fade: false,
              adaptiveHeight: true,
              infinite: false,
              useTransform: true,
              speed: 400,
              cssEase: 'cubic-bezier(0.77, 0, 0.18, 1)',
            });



            $('#supplierModal .slider-nav')
              .on('init', function (event, slick) {
                $('#supplierModal .slider-nav .slick-slide.slick-current').addClass('is-active');
              })
              .slick({
                slidesToShow: 4,
                slidesToScroll: 4,
                dots: false,
                focusOnSelect: false,
                infinite: false,
                responsive: [{
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 5,
                    slidesToScroll: 5,
                  }
                }, {
                  breakpoint: 640,
                  settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4,
                  }
                }, {
                  breakpoint: 420,
                  settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                  }
                }]
              });

            $('#supplierModal .slider-single').on('afterChange', function (event, slick, currentSlide) {
            $('#supplierModal .slider-nav').slick('slickGoTo', currentSlide);
              var currrentNavSlideElem = '.slider-nav .slick-slide[data-slick-index="' + currentSlide + '"]';
              $('#supplierModal .slider-nav .slick-slide.is-active').removeClass('is-active');
              $(currrentNavSlideElem).addClass('is-active');
            });

            $('#supplierModal .slider-nav').on('click', '.slick-slide', function (event) {
              event.preventDefault();
              var goToSingleSlide = $(this).data('slick-index');

              $('#supplierModal .slider-single').slick('slickGoTo', goToSingleSlide);
            });

            $('#supplierModal .slide-prev').on('click', function(){
              $('#supplierModal .slider-single').slick("slickPrev");
              $('#supplierModal .slider-nav').slick("slickPrev");
            });
            $('#supplierModal .slide-next').on('click', function(){
              $('#supplierModal .slider-single').slick("slickNext");
              $('#supplierModal .slider-nav').slick("slickNext");
            });
          });   
        })


        
      })
    </script>

    <script>
    // Initiate Facebook JS SDK
    window.fbAsyncInit = function() {
      FB.init({
        appId   : '<?php echo $this->config->item('facebook_app_id'); ?>', // Your app id
        cookie  : true,  // enable cookies to allow the server to access the session
        xfbml   : false,  // disable xfbml improves the page load time
        version : 'v2.5', // use version 2.4
        status  : true // Check for user login status right away
      });
      FB.getLoginStatus(function(response) {
        console.log('getLoginStatus', response);
        loginCheck(response);
      });
    };
    // Check login status
    function statusCheck(response)
    {
      console.log('statusCheck', response.status);
      if (response.status === 'connected')
      {
        $('.login').hide();
        $('.form').fadeIn();
      }
      else if (response.status === 'not_authorized')
      {
        // User logged into facebook, but not to our app.
      }
      else
      {
        // User not logged into Facebook.
      }
    }
    // Get login status
    function loginCheck()
    {
      FB.getLoginStatus(function(response) {
        console.log('loginCheck', response);
        statusCheck(response);
      });
    }
    // Here we run a very simple test of the Graph API after login is
    // successful.  See statusChangeCallback() for when this call is made.
    function getUser()
    {
      FB.api('/me', function(response) {
        console.log('getUser', response);
      });
    }
    $(function(){
      // Trigger login
      $('.login').on('click', 'button', function() {
        FB.login(function(){
          loginCheck();
        }, {scope: '<?php echo implode(",", $this->config->item('facebook_permissions')); ?>'});
      });
      $('.form').on('submit', '.post-to-wall', function(e) {
        e.preventDefault();
        var formdata = $(this).serialize();
        $.ajax({
          url: '/example/post',
          data: formdata,
          type: 'POST',
          dataType: 'json',
          success: function(response) {
            console.log(response);
            if (response.id)
            {
              $('.form').html('<p>Post submitted successfully.</p>');
            }
            else
            {
              $('.form').html('<p>Something happened, please try again!.</p>');
            }
          }
        })
      });
    });
    (function(d, s, id){
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) {return;}
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>
  </body>
</html>