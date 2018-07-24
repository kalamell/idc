<?php $this->load->view('header');?>
      <div class="search-wrapper-inside">
        <div class="container">
          <div class="search-field"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>
            <input type="text" placeholder="ค้นหาชื่อโปรไฟล์ประเภทงาน">
          </div>
        </div>
      </div>
      <div class="banner"><img class="full-width" src="<?php echo base_url('public');?>/images/find-supplier-banner.jpg" alt=""></div>
      <section class="section-wrapper">
        <div class="container">
          <h2 class="header-text">find supplier</h2>
          <div class="row equal">
            <?php foreach($rs['data'] as $k => $v):?>
            <div class="col-md-4 col-sm-6">
              <div class="block-wrapper"><a href="<?php echo site_url('supplier/list/'.$v['_id']);?>">
                  <div class="responsive-img-large"><img src="<?php echo $v['image']['thumbnail'];?>" alt="">
                    <div class="text-wrapper">
                      <p><?php echo $v['name']['en'];?></p>
                      <p><?php echo $v['name']['th'];?></p>
                    </div>
                  </div></a></div>
            </div>
            <?php endforeach;?>
            
            <!-- <div class="col-md-4 col-sm-6">
              <div class="block-wrapper"><a href="<?php echo site_url('find-supplier-list');?>">
                  <div class="responsive-img-large"><img src="<?php echo base_url('public');?>/images/producer-3.png" alt="">
                    <div class="text-wrapper">
                      <p>PACKAGING</p>
                      <p>อุตสาหกรรมบรรจุภัณฑ์</p>
                    </div>
                  </div></a></div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="block-wrapper"><a href="<?php echo site_url('find-supplier-list');?>">
                  <div class="responsive-img-large"><img src="<?php echo base_url('public');?>/images/producer-2.png" alt="">
                    <div class="text-wrapper">
                      <p>PLASTIC</p>
                      <p>อุตสาหกรรมพลาสติก</p>
                    </div>
                  </div></a></div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="block-wrapper"><a href="<?php echo site_url('find-supplier-list');?>">
                  <div class="responsive-img-large"><img src="<?php echo base_url('public');?>/images/product-4.png" alt="">
                    <div class="text-wrapper">
                      <p>COMPOSITE</p>
                      <p>อุตสาหกรรมคอมโพสิท</p>
                    </div>
                  </div></a></div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="block-wrapper"><a href="<?php echo site_url('find-supplier-list');?>">
                  <div class="responsive-img-large"><img src="<?php echo base_url('public');?>/images/product-5.png" alt="">
                    <div class="text-wrapper">
                      <p>JAWELRY</p>
                      <p>อุตสาหกรรมเครื่องประดับ</p>
                    </div>
                  </div></a></div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="block-wrapper"><a href="<?php echo site_url('find-supplier-list');?>">
                  <div class="responsive-img-large"><img src="<?php echo base_url('public');?>/images/product-6.png" alt="">
                    <div class="text-wrapper">
                      <p>LEATHER</p>
                      <p>อุตสาหกรรมเครื่องหนัง</p>
                    </div>
                  </div></a></div>
            </div> -->
          </div>
        </div>
      </section>
      
      <?php $this->load->view('footer');?>