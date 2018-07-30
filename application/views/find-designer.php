
      <div class="search-wrapper-inside">
        <div class="container">
          <div class="search-field"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>
            <input type="text" placeholder="ค้นหา Designer">
          </div>
        </div>
      </div>
      <div class="banner"><img class="full-width" src="<?php echo base_url('public');?>/images/find-designer-banner.jpg" alt=""></div>
      <section class="section-wrapper">
        <div class="container">
          <h2 class="header-text">find designer</h2>
          <div class="row equal">
            <?php foreach($rs['data'] as $k => $v):?>
            <div class="col-md-4 col-sm-6">
              <div class="block-wrapper"><a href="<?php echo site_url('designer/list/'.$v['_id']);?>">
                  <div class="responsive-img-md"><img src="<?php echo $v['image']['thumbnail'];?>" alt="">
                    <div class="text-wrapper">
                      <p><?php echo $v['name']['en'];?></p>
                      <p><?php echo $v['name']['th'];?></p>
                    </div>
                  </div></a></div>
            </div>
          <?php endforeach;?>
            <!--
            <div class="col-md-4 col-sm-6">
              <div class="block-wrapper"><a href="<?php echo site_url('find-designer-list');?>">
                  <div class="responsive-img-md"><img src="<?php echo base_url('public');?>/images/thumbnail.png" alt="">
                    <div class="text-wrapper">
                      <p>GRAPHIC DESIGNER</p>
                      <p>นักออกแบบด้านกราฟฟิค</p>
                    </div>
                  </div></a></div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="block-wrapper"><a href="<?php echo site_url('find-designer-list');?>">
                  <div class="responsive-img-md"><img src="<?php echo base_url('public');?>/images/thumbnail.png" alt="">
                    <div class="text-wrapper">
                      <p>GRAPHIC DESIGNER</p>
                      <p>นักออกแบบด้านกราฟฟิค</p>
                    </div>
                  </div></a></div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="block-wrapper"><a href="<?php echo site_url('find-designer-list');?>">
                  <div class="responsive-img-md"><img src="<?php echo base_url('public');?>/images/thumbnail.png" alt="">
                    <div class="text-wrapper">
                      <p>GRAPHIC DESIGNER</p>
                      <p>นักออกแบบด้านกราฟฟิค</p>
                    </div>
                  </div></a></div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="block-wrapper"><a href="<?php echo site_url('find-designer-list');?>">
                  <div class="responsive-img-md"><img src="<?php echo base_url('public');?>/images/thumbnail.png" alt="">
                    <div class="text-wrapper">
                      <p>GRAPHIC DESIGNER</p>
                      <p>นักออกแบบด้านกราฟฟิค</p>
                    </div>
                  </div></a></div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="block-wrapper"><a href="<?php echo site_url('find-designer-list');?>">
                  <div class="responsive-img-md"><img src="<?php echo base_url('public');?>/images/thumbnail.png" alt="">
                    <div class="text-wrapper">
                      <p>GRAPHIC DESIGNER</p>
                      <p>นักออกแบบด้านกราฟฟิค</p>
                    </div>
                  </div></a></div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="block-wrapper"><a href="<?php echo site_url('find-designer-list');?>">
                  <div class="responsive-img-md"><img src="<?php echo base_url('public');?>/images/thumbnail.png" alt="">
                    <div class="text-wrapper">
                      <p>GRAPHIC DESIGNER</p>
                      <p>นักออกแบบด้านกราฟฟิค</p>
                    </div>
                  </div></a></div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="block-wrapper"><a href="<?php echo site_url('find-designer-list');?>">
                  <div class="responsive-img-md"><img src="<?php echo base_url('public');?>/images/thumbnail.png" alt="">
                    <div class="text-wrapper">
                      <p>GRAPHIC DESIGNER</p>
                      <p>นักออกแบบด้านกราฟฟิค</p>
                    </div>
                  </div></a></div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="block-wrapper"><a href="<?php echo site_url('find-designer-list');?>">
                  <div class="responsive-img-md"><img src="<?php echo base_url('public');?>/images/thumbnail.png" alt="">
                    <div class="text-wrapper">
                      <p>GRAPHIC DESIGNER</p>
                      <p>นักออกแบบด้านกราฟฟิค</p>
                    </div>
                  </div></a></div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="block-wrapper"><a href="<?php echo site_url('find-designer-list');?>">
                  <div class="responsive-img-md"><img src="<?php echo base_url('public');?>/images/thumbnail.png" alt="">
                    <div class="text-wrapper">
                      <p>GRAPHIC DESIGNER</p>
                      <p>นักออกแบบด้านกราฟฟิค</p>
                    </div>
                  </div></a></div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="block-wrapper"><a href="<?php echo site_url('find-designer-list');?>">
                  <div class="responsive-img-md"><img src="<?php echo base_url('public');?>/images/thumbnail.png" alt="">
                    <div class="text-wrapper">
                      <p>GRAPHIC DESIGNER</p>
                      <p>นักออกแบบด้านกราฟฟิค</p>
                    </div>
                  </div></a></div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="block-wrapper"><a href="<?php echo site_url('find-designer-list');?>">
                  <div class="responsive-img-md"><img src="<?php echo base_url('public');?>/images/thumbnail.png" alt="">
                    <div class="text-wrapper">
                      <p>GRAPHIC DESIGNER</p>
                      <p>นักออกแบบด้านกราฟฟิค</p>
                    </div>
                  </div></a></div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="block-wrapper"><a href="<?php echo site_url('find-designer-list');?>">
                  <div class="responsive-img-md"><img src="<?php echo base_url('public');?>/images/thumbnail.png" alt="">
                    <div class="text-wrapper">
                      <p>GRAPHIC DESIGNER</p>
                      <p>นักออกแบบด้านกราฟฟิค</p>
                    </div>
                  </div></a></div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="block-wrapper"><a href="<?php echo site_url('find-designer-list');?>">
                  <div class="responsive-img-md"><img src="<?php echo base_url('public');?>/images/thumbnail.png" alt="">
                    <div class="text-wrapper">
                      <p>GRAPHIC DESIGNER</p>
                      <p>นักออกแบบด้านกราฟฟิค</p>
                    </div>
                  </div></a></div>
            </div>
          -->
          </div>
        </div>
      </section>
     