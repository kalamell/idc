      <header>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="header-wrapper">
                <div class="row equal">
                  <div class="col-xs-4">
                    <div class="logo-wrapper"><a href="<?php echo site_url();?>"><img class="img-responsive" src="<?php echo base_url();?>public/images/logo.png" alt=""></a></div>
                  </div>
                  <div class="col-xs-8">
                    <div class="hidden-xs hidden-sm">
                      
                    </div>
                    <div class="header-assets hidden-xs hidden-sm">
                      <a href="https://play.google.com/store/apps/details?id=com.weable2.android.thai_idc" target="_blank" class="mobile-app"><img src="<?php echo base_url();?>public/images/android.png" alt=""></a>
                      <a href="https://itunes.apple.com/us/app/thai-idc/id1414803157?mt=8" target="_blank" class="mobile-app"><img src="<?php echo base_url();?>public/images/ios.png" alt=""></a>

                      <?php if ($this->session->userdata('login')):?>
                        
                        <a class="profile-name" href="javascript:void(0)" data-toggle="modal" data-target="#editProfileModal">สวัสดี <?php echo $this->session->userdata('name');?><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a>
      
                      <?php else:?>
                        <a class="profile-name" href="javascript:void(0)" data-toggle="modal" data-target="#loginModal">เข้าสู่ระบบ<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a>
      
                      <?php endif;?>
                      <a class="search-top" href=""><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a></div>
                    <div class="hamburger hamburger--slider hidden-md hidden-lg">
                      <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="main-menu">
                  <ul>
                          <li><a href="<?php echo site_url('knowledge');?>">KNOWLEDGE</a></li>
                          <li><a href="<?php echo site_url('find-designer');?>">FIND DESIGNER</a></li>
                          <li><a href="<?php echo site_url('find-producer');?>">FIND PRODUCER</a></li>
                          <li><a href="<?php echo site_url('find-supplier');?>">FIND SUPPLIER</a></li>
                          <li><a href="<?php echo site_url('news');?>">NEWS&amp;EVENT</a></li>
                          <li><a href="<?php echo site_url('counseling');?>">SERVICE</a></li>
                          <li><a href="<?php echo site_url('contact');?>">CONTACT</a></li>
                          <li class="hidden-sm hidden-md hidden-lg">
                            <a href="https://play.google.com/store/apps/details?id=com.weable2.android.thai_idc" target="_blank" class="mobile-app"><img src="<?php echo base_url();?>public/images/android.png" alt=""></a>
                            <a href="https://itunes.apple.com/us/app/thai-idc/id1414803157?mt=8" target="_blank" class="mobile-app"><img src="<?php echo base_url();?>public/images/ios.png" alt=""></a>
                            </li>

                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>