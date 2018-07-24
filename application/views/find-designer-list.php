<?php $this->load->view('header');?>
      <div class="search-wrapper-inside">
        <div class="container">
          <div class="search-field"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>
            <input type="text" placeholder="ค้นหาชื่อโปรไฟล์ประเภทงาน">
          </div>
        </div>
      </div>
      <div class="banner"><img class="full-width" src="<?php echo base_url('public');?>/images/find-designer-banner.jpg" alt=""></div>
      <section class="space-sm">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="side-list-wrapper">
                <div class="list-title">
                  <h3>ประเภทนักออกแบบ</h3>
                </div>
                <ul class="lists">
                  <?php foreach($categories['data'] as $k => $v):?>
                    <li class="<?php echo $v['_id'] == $this->uri->segment(3) ? 'active' : '';?>">
                      <a href="<?php echo site_url('designer/list/'.$v['_id']);?>"><?php echo $v['name']['en'];?></a>
                    </li>
                  <?php endforeach;?>
                  <!--<li><a href="">costumer designer</a></li>
                  <li class="active"><a href="">fashion designer</a></li>
                  <li><a href="">fashion styling</a></li>
                  <li><a href="">textile designer</a></li>
                  <li><a href="">graphic designer</a></li>
                  <li><a href="">costumer designer</a></li>
                  <li><a href="">fashion designer</a></li>
                  <li><a href="">fashion styling</a></li>
                  <li><a href="">textile designer</a></li>
                  <li><a href="">graphic designer</a></li>
                  <li><a href="">costumer designer</a></li>
                  <li><a href="">fashion designer</a></li>
                  <li><a href="">fashion styling</a></li>
                  <li><a href="">textile designer</a></li>
                  <li><a href="">graphic designer</a></li>-->
                </ul>
              </div>
            </div>
            <div class="col-md-9">
              <div class="search-profile">
                <div class="row equal">
                  <div class="col-sm-8 notpad-right">
                    <div class="search-field"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                      <input type="text" placeholder="ค้นหาชื่อโปรไฟล์ประเภทงาน">
                    </div>
                  </div>
                  <div class="col-sm-4"><a class="map-btn" href=""><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
                      <p>แสดงแผนที่</p></a></div>
                </div>
              </div>
              <div class="search-result">
                <p>ผลการค้นหาทั้งหมด: <?php echo count($rs['data']);?></p>
              </div>
              <div class="profile-list-wrapper">
                <div class="row equal">
                  <?php foreach($rs['data'] as $k => $v):?>
        
                  <div class="col-sm-6 col-md-4">
                    <div class="profile-card-wrapper">
                      <div class="background-wrapper"><img src="<?php echo base_url('public');?>/images/cover.jpg" alt=""></div>
                      <div class="profile-img"><img src="<?php echo $v['user']['image']['thumbnail'];?>" alt=""></div>
                      <div class="profile-name"> 
                        <p><?php echo $v['user']['firstname'].' '.$v['user']['lastname'];?></p>
                      </div>
                      <div class="profile-tel"><a href=""><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> <?php echo $v['tel'];?></a></div>
                      <div class="assets-list">
                        <p><?php echo $v['category']['name'];?><span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></p>
                        <div class="assets-list-child-wrapper">
                          <div class="assets-list-child">
                            <ul>
                              <?php foreach($v['category'] as $_v):?>
                              <li><a href="<?php echo site_url('designer/list/'.$_v['_id']);?>"><?php echo $_v['name']['th'];?></a></li>
                              <?php endforeach;?>
                              <!--<li><a href="">Graphic Designer</a></li>
                              <li><a href="">Product Designer</a></li>
                              <li><a href="">Other</a></li>-->
                            </ul>
                          </div>
                        </div>
                      </div><a class="btn-big" href="<?php echo site_url('profile/'.$this->uri->segment(3).'/'.$v['_id']);?>">ดูโปรไฟล์</a>
                    </div>
                  </div>
                  <?php endforeach;?>
                  
                  <!--
                  <div class="col-sm-6 col-md-4">
                    <div class="profile-card-wrapper">
                      <div class="background-wrapper"><img src="<?php echo base_url('public');?>/images/cover.jpg" alt=""></div>
                      <div class="profile-img"><img src="<?php echo base_url('public');?>/images/profile-img.jpg" alt=""></div>
                      <div class="profile-name"> 
                        <p>TANYAMANE CHAN-THABURI JEWERY</p>
                      </div>
                      <div class="profile-tel"><a href=""><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> 0944955850</a></div>
                      <div class="assets-list">
                        <p>Fashion Designer<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></p>
                        <div class="assets-list-child-wrapper">
                          <div class="assets-list-child">
                            <ul>
                              <li><a href="">Textile Designer</a></li>
                              <li><a href="">Graphic Designer</a></li>
                              <li><a href="">Product Designer</a></li>
                              <li><a href="">Other</a></li>
                            </ul>
                          </div>
                        </div>
                      </div><a class="btn-big" href="<?php echo site_url('profile');?>">ดูโปรไฟล์</a>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4">
                    <div class="profile-card-wrapper">
                      <div class="background-wrapper"><img src="<?php echo base_url('public');?>/images/cover.jpg" alt=""></div>
                      <div class="profile-img"><img src="<?php echo base_url('public');?>/images/profile-img.jpg" alt=""></div>
                      <div class="profile-name"> 
                        <p>TANYAMANE CHAN-THABURI JEWERY</p>
                      </div>
                      <div class="profile-tel"><a href=""><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> 0944955850</a></div>
                      <div class="assets-list">
                        <p>Fashion Designer<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></p>
                        <div class="assets-list-child-wrapper">
                          <div class="assets-list-child">
                            <ul>
                              <li><a href="">Textile Designer</a></li>
                              <li><a href="">Graphic Designer</a></li>
                              <li><a href="">Product Designer</a></li>
                              <li><a href="">Other</a></li>
                            </ul>
                          </div>
                        </div>
                      </div><a class="btn-big" href="<?php echo site_url('profile');?>">ดูโปรไฟล์</a>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4">
                    <div class="profile-card-wrapper">
                      <div class="background-wrapper"><img src="<?php echo base_url('public');?>/images/cover.jpg" alt=""></div>
                      <div class="profile-img"><img src="<?php echo base_url('public');?>/images/profile-img.jpg" alt=""></div>
                      <div class="profile-name"> 
                        <p>TANYAMANE CHAN-THABURI JEWERY</p>
                      </div>
                      <div class="profile-tel"><a href=""><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> 0944955850</a></div>
                      <div class="assets-list">
                        <p>Fashion Designer<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></p>
                        <div class="assets-list-child-wrapper">
                          <div class="assets-list-child">
                            <ul>
                              <li><a href="">Textile Designer</a></li>
                              <li><a href="">Graphic Designer</a></li>
                              <li><a href="">Product Designer</a></li>
                              <li><a href="">Other</a></li>
                            </ul>
                          </div>
                        </div>
                      </div><a class="btn-big" href="<?php echo site_url('profile');?>">ดูโปรไฟล์</a>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4">
                    <div class="profile-card-wrapper">
                      <div class="background-wrapper"><img src="<?php echo base_url('public');?>/images/cover.jpg" alt=""></div>
                      <div class="profile-img"><img src="<?php echo base_url('public');?>/images/profile-img.jpg" alt=""></div>
                      <div class="profile-name"> 
                        <p>TANYAMANE CHAN-THABURI JEWERY</p>
                      </div>
                      <div class="profile-tel"><a href=""><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> 0944955850</a></div>
                      <div class="assets-list">
                        <p>Fashion Designer<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></p>
                        <div class="assets-list-child-wrapper">
                          <div class="assets-list-child">
                            <ul>
                              <li><a href="">Textile Designer</a></li>
                              <li><a href="">Graphic Designer</a></li>
                              <li><a href="">Product Designer</a></li>
                              <li><a href="">Other</a></li>
                            </ul>
                          </div>
                        </div>
                      </div><a class="btn-big" href="<?php echo site_url('profile');?>">ดูโปรไฟล์</a>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4">
                    <div class="profile-card-wrapper">
                      <div class="background-wrapper"><img src="<?php echo base_url('public');?>/images/cover.jpg" alt=""></div>
                      <div class="profile-img"><img src="<?php echo base_url('public');?>/images/profile-img.jpg" alt=""></div>
                      <div class="profile-name"> 
                        <p>TANYAMANE CHAN-THABURI JEWERY</p>
                      </div>
                      <div class="profile-tel"><a href=""><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> 0944955850</a></div>
                      <div class="assets-list">
                        <p>Fashion Designer<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></p>
                        <div class="assets-list-child-wrapper">
                          <div class="assets-list-child">
                            <ul>
                              <li><a href="">Textile Designer</a></li>
                              <li><a href="">Graphic Designer</a></li>
                              <li><a href="">Product Designer</a></li>
                              <li><a href="">Other</a></li>
                            </ul>
                          </div>
                        </div>
                      </div><a class="btn-big" href="<?php echo site_url('profile');?>">ดูโปรไฟล์</a>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4">
                    <div class="profile-card-wrapper">
                      <div class="background-wrapper"><img src="<?php echo base_url('public');?>/images/cover.jpg" alt=""></div>
                      <div class="profile-img"><img src="<?php echo base_url('public');?>/images/profile-img.jpg" alt=""></div>
                      <div class="profile-name"> 
                        <p>TANYAMANE CHAN-THABURI JEWERY</p>
                      </div>
                      <div class="profile-tel"><a href=""><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> 0944955850</a></div>
                      <div class="assets-list">
                        <p>Fashion Designer<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></p>
                        <div class="assets-list-child-wrapper">
                          <div class="assets-list-child">
                            <ul>
                              <li><a href="">Textile Designer</a></li>
                              <li><a href="">Graphic Designer</a></li>
                              <li><a href="">Product Designer</a></li>
                              <li><a href="">Other</a></li>
                            </ul>
                          </div>
                        </div>
                      </div><a class="btn-big" href="<?php echo site_url('profile');?>">ดูโปรไฟล์</a>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4">
                    <div class="profile-card-wrapper">
                      <div class="background-wrapper"><img src="<?php echo base_url('public');?>/images/cover.jpg" alt=""></div>
                      <div class="profile-img"><img src="<?php echo base_url('public');?>/images/profile-img.jpg" alt=""></div>
                      <div class="profile-name"> 
                        <p>TANYAMANE CHAN-THABURI JEWERY</p>
                      </div>
                      <div class="profile-tel"><a href=""><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> 0944955850</a></div>
                      <div class="assets-list">
                        <p>Fashion Designer<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></p>
                        <div class="assets-list-child-wrapper">
                          <div class="assets-list-child">
                            <ul>
                              <li><a href="">Textile Designer</a></li>
                              <li><a href="">Graphic Designer</a></li>
                              <li><a href="">Product Designer</a></li>
                              <li><a href="">Other</a></li>
                            </ul>
                          </div>
                        </div>
                      </div><a class="btn-big" href="<?php echo site_url('profile');?>">ดูโปรไฟล์</a>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4">
                    <div class="profile-card-wrapper">
                      <div class="background-wrapper"><img src="<?php echo base_url('public');?>/images/cover.jpg" alt=""></div>
                      <div class="profile-img"><img src="<?php echo base_url('public');?>/images/profile-img.jpg" alt=""></div>
                      <div class="profile-name"> 
                        <p>TANYAMANE CHAN-THABURI JEWERY</p>
                      </div>
                      <div class="profile-tel"><a href=""><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> 0944955850</a></div>
                      <div class="assets-list">
                        <p>Fashion Designer<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></p>
                        <div class="assets-list-child-wrapper">
                          <div class="assets-list-child">
                            <ul>
                              <li><a href="">Textile Designer</a></li>
                              <li><a href="">Graphic Designer</a></li>
                              <li><a href="">Product Designer</a></li>
                              <li><a href="">Other</a></li>
                            </ul>
                          </div>
                        </div>
                      </div><a class="btn-big" href="<?php echo site_url('profile');?>">ดูโปรไฟล์</a>
                    </div>
                  </div>
                -->
                </div>

                <?php if(count($rs['data']) > 0):?>
                <a class="seemore" href="">SEE MORE</a>
                <?php endif;?>

              </div>
            </div>
          </div>
        </div>
      </section>
      <?php $this->load->view('footer');?>