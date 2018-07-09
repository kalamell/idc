
      <div class="search-wrapper-inside">
        <div class="container">
          <div class="search-field"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>
            <input type="text" placeholder="ค้นหาชื่อโปรไฟล์ประเภทงาน">
          </div>
        </div>
      </div>
      <div class="banner"><img class="full-width" src="<?php echo base_url('public');?>/images/find-producer-banner.jpg" alt=""></div>
      <section class="space-sm">
        <div class="container">
          <div class="headtext-wrapper">
            <h2 class="headtext">สินค้า / บริการจากผู้ผลิต</h2>
            <p class="breadcrump">อุตสาหกรรมบรรจุภัณฑ์<span>></span>Plastic bottle/cap/cup</p>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="side-list-wrapper">
                <div class="list-title">
                  <h3>อุตสาหกรรม บรรจุภัณฑ์</h3>
                </div>
                <ul class="lists">
                  <li><a href="">PAPER BOX</a></li>
                  <li><a href="">PLASTIC BAG/FLEXIBLE</a></li>
                  <li><a href="">PLASTIC BAG/CAP/CUP</a></li>
                  <li><a href="">LUMINATE TUBE</a></li>
                  <li><a href="">METAL CAN</a></li>
                  <li><a href="">GLASS BOTTLE/JAR</a></li>
                  <li><a href="">LABEL</a></li>
                  <li><a href="">CORRUGATED</a></li>
                  <li><a href="">CARTON</a></li>
                  <li><a href="">LOGISTIC MATERIAL</a></li>
                  <li><a href="">OTHER</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-9">
              <div class="search-profile">
                <div class="row equal">
                  <div class="col-sm-8 notpad-right">
                    <div class="search-field"><span><img src="<?php echo base_url('public');?>/images/search-produce-icon.png" alt=""></span>
                      <input type="text" placeholder="ค้นหาสินค้า">
                    </div>
                  </div>
                  <div class="col-sm-4"><a class="map-btn" href=""><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
                      <p>แสดงแผนที่</p></a></div>
                </div>
              </div>
              <div class="search-result">
                <p>ผลการค้นหาทั้งหมด: <?php echo count($rs['data']);?></p>
              </div>
              <div class="producer-list-wrapper">
                <div class="row equal">
                  <?php foreach($rs['data'] as $k => $v):?>
                  <div class="col-sm-6 col-md-4">
                    <div class="producer-card-wrapper">
                      

                      <a class="producer-img" href="<?php echo site_url('producer/get_supplier_id/'.$v['producer_category']['_id'].'/'.$v['_id']);?>" data-toggle="modal" data-target="#producerModal" data-remote="false">
                        <img src="<?php echo $v['image']['thumbnail'];?>" alt="">
                      </a>
                      <div class="producer-detail">
                        <a class="producer-name" href="<?php echo site_url('producer/get_supplier_id/'.$v['producer_category']['_id'].'/'.$v['_id']);?>" data-toggle="modal" data-target="#producerModal" data-remote="false"><?php echo $v['name'];?></a>
                        <p><?php echo $v['detail'];?></p>
                        <a class="retail" href="<?php echo site_url('producer/get_supplier_id/'.$v['producer_category']['_id'].'/'.$v['_id']);?>" data-toggle="modal" data-target="#producerModal" data-remote="false"><?php echo $v['page']['name'] == '' ? 'Shop' : $v['page']['name'];?></a>
                      </div>
                    </div>
                  </div>
                  <?php endforeach;?>
                  
                  <!-- <div class="col-sm-6 col-md-4">
                    <div class="producer-card-wrapper"><a class="producer-img" href="javascript:void(0)" data-toggle="modal" data-target="#producerModal"><img src="<?php echo base_url('public');?>/images/producer-1.jpg" alt=""></a>
                      <div class="producer-detail"><a class="producer-name" href="javascript:void(0)" data-toggle="modal" data-target="#producerModal">กล่องของขวัญแฮนด์เมด</a>
                        <p>รับออกแบบและผลิต (ODM)<br>ขายปลีก / ส่ง</p><a class="retail" href="javascript:void(0)" data-toggle="modal" data-target="#producerModal">Kongnooayng</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4">
                    <div class="producer-card-wrapper"><a class="producer-img" href="javascript:void(0)" data-toggle="modal" data-target="#producerModal"><img src="<?php echo base_url('public');?>/images/producer-1.jpg" alt=""></a>
                      <div class="producer-detail"><a class="producer-name" href="javascript:void(0)" data-toggle="modal" data-target="#producerModal">กล่องของขวัญแฮนด์เมด</a>
                        <p>รับออกแบบและผลิต (ODM)<br>ขายปลีก / ส่ง</p><a class="retail" href="javascript:void(0)" data-toggle="modal" data-target="#producerModal">Kongnooayng</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4">
                    <div class="producer-card-wrapper"><a class="producer-img" href="javascript:void(0)" data-toggle="modal" data-target="#producerModal"><img src="<?php echo base_url('public');?>/images/producer-1.jpg" alt=""></a>
                      <div class="producer-detail"><a class="producer-name" href="javascript:void(0)" data-toggle="modal" data-target="#producerModal">กล่องของขวัญแฮนด์เมด</a>
                        <p>รับออกแบบและผลิต (ODM)<br>ขายปลีก / ส่ง</p><a class="retail" href="javascript:void(0)" data-toggle="modal" data-target="#producerModal">Kongnooayng</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4">
                    <div class="producer-card-wrapper"><a class="producer-img" href="javascript:void(0)" data-toggle="modal" data-target="#producerModal"><img src="<?php echo base_url('public');?>/images/producer-1.jpg" alt=""></a>
                      <div class="producer-detail"><a class="producer-name" href="javascript:void(0)" data-toggle="modal" data-target="#producerModal">กล่องของขวัญแฮนด์เมด</a>
                        <p>รับออกแบบและผลิต (ODM)<br>ขายปลีก / ส่ง</p><a class="retail" href="javascript:void(0)" data-toggle="modal" data-target="#producerModal">Kongnooayng</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4">
                    <div class="producer-card-wrapper"><a class="producer-img" href="javascript:void(0)" data-toggle="modal" data-target="#producerModal"><img src="<?php echo base_url('public');?>/images/producer-1.jpg" alt=""></a>
                      <div class="producer-detail"><a class="producer-name" href="javascript:void(0)" data-toggle="modal" data-target="#producerModal">กล่องของขวัญแฮนด์เมด</a>
                        <p>รับออกแบบและผลิต (ODM)<br>ขายปลีก / ส่ง</p><a class="retail" href="javascript:void(0)" data-toggle="modal" data-target="#producerModal">Kongnooayng</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4">
                    <div class="producer-card-wrapper"><a class="producer-img" href="javascript:void(0)" data-toggle="modal" data-target="#producerModal"><img src="<?php echo base_url('public');?>/images/producer-1.jpg" alt=""></a>
                      <div class="producer-detail"><a class="producer-name" href="javascript:void(0)" data-toggle="modal" data-target="#producerModal">กล่องของขวัญแฮนด์เมด</a>
                        <p>รับออกแบบและผลิต (ODM)<br>ขายปลีก / ส่ง</p><a class="retail" href="javascript:void(0)" data-toggle="modal" data-target="#producerModal">Kongnooayng</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4">
                    <div class="producer-card-wrapper"><a class="producer-img" href="javascript:void(0)" data-toggle="modal" data-target="#producerModal"><img src="<?php echo base_url('public');?>/images/producer-1.jpg" alt=""></a>
                      <div class="producer-detail"><a class="producer-name" href="javascript:void(0)" data-toggle="modal" data-target="#producerModal">กล่องของขวัญแฮนด์เมด</a>
                        <p>รับออกแบบและผลิต (ODM)<br>ขายปลีก / ส่ง</p><a class="retail" href="javascript:void(0)" data-toggle="modal" data-target="#producerModal">Kongnooayng</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4">
                    <div class="producer-card-wrapper"><a class="producer-img" href="javascript:void(0)" data-toggle="modal" data-target="#producerModal"><img src="<?php echo base_url('public');?>/images/producer-1.jpg" alt=""></a>
                      <div class="producer-detail"><a class="producer-name" href="javascript:void(0)" data-toggle="modal" data-target="#producerModal">กล่องของขวัญแฮนด์เมด</a>
                        <p>รับออกแบบและผลิต (ODM)<br>ขายปลีก / ส่ง</p><a class="retail" href="javascript:void(0)" data-toggle="modal" data-target="#producerModal">Kongnooayng</a>
                      </div>
                    </div>
                  </div> -->
                </div><a class="seemore" href="">SEE MORE</a>
              </div>
            </div>
          </div>
        </div>
      </section>