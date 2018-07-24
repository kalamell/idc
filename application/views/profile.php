<?php $this->load->view('header');?>

      <div class="profile-wrapper">
        <div class="cover-wrapper"><img src="<?php echo base_url('public');?>/images/cover.jpg" alt="">
          <!--<label class="uploadCover" for="uploadCover"><span class="glyphicon glyphicon-camera" aria-hidden="true"></span>
            <input id="uploadCover" type="file" style="display:none">
          </label>-->
          <div class="backdrop-custom"></div>
        </div>
        <div class="profile-head-bar">
          <div class="container">
            <div class="row">
              <div class="col-sm-5 col-md-3">
                <div class="profile-img-wrapper"><img src="<?php echo base_url('public');?>/images/profile-img.jpg" alt="">
                  <!--<label class="uploadProfileImg" for="uploadProfileImg"><span class="glyphicon glyphicon-camera" aria-hidden="true"></span>
                    <input id="uploadProfileImg" type="file" style="display:none">
                  </label>-->
                  <div class="backdrop-custom"></div>
                </div>
              </div>
              <div class="col-sm-7 col-md-9">
                <div class="profile-tabs">
                  <ul role="tablist">
                    <li class="active" role="presentation"><a href="#companyTab" aria-controls="companyTab" role="tab" data-toggle="tab">บริษัท</a></li>
                    <li role="presentation"><a href="#articleTab" aria-controls="articleTab" role="tab" data-toggle="tab">บทความ</a></li>
                    <li role="presentation"><a href="#videoTab" aria-controls="videoTab" role="tab" data-toggle="tab">วิดีโอ</a></li>
                    <li role="presentation"><a href="#trendTab" aria-controls="trendTab" role="tab" data-toggle="tab">เทรนด์</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="profile-content">
            <div class="row">
              <div class="col-md-3">
                <div class="profile-side-detail">
                  <div class="profile-name">
                    <h3><?php echo $r['data'][0]['user']['firstname'].' '.$r['data'][0]['user']['lastname'];?></h3>
                  </div>
                  <div class="profile-detail-block">
                    <h4>ข้อมูล</h4>
                    <p><?php echo $r['data'][0]['user']['firstname'].' '.$r['data'][0]['user']['lastname'];?></p>

                    <div class="contact-me">
                      <div class="list-wrapper"> 
                        <div class="icon-wrapper"><img src="<?php echo base_url('public');?>/images/pageme-tel-icon.png" alt=""></div>
                        <div class="text-wrapper"><a href="tel:<?php echo $r['data'][0]['tel'];?>"><?php echo $r['data'][0]['tel'];?></a></div>
                      </div>
                      <!--<div class="list-wrapper"> 
                        <div class="icon-wrapper"><img src="<?php echo base_url('public');?>/images/pageme-web-icon.png" alt=""></div>
                        <div class="text-wrapper"><a href="">m.tarad.com/shop/thanyamane</a></div>
                      </div>
                      <div class="list-wrapper"> 
                        <div class="icon-wrapper"><img src="<?php echo base_url('public');?>/images/pageme-fb-icon.png" alt=""></div>
                        <div class="text-wrapper"><a href="">m.tarad.com/shop/thanyamane</a></div>
                      </div>
                      <div class="list-wrapper"> 
                        <div class="icon-wrapper"><img src="<?php echo base_url('public');?>/images/pageme-map-icon.png" alt=""></div>
                        <div class="text-wrapper">
                          <p>แผนที่</p>
                          <p>29/1 ซอยศรีจันทร์6 ตลาดอำเภอเมืองจันทบุรี จันทบุรี</p>
                        </div>
                      </div>
                    -->
                    </div>


                    <!--<a class="btn-big" href="javascript:void(0)" data-toggle="modal" data-target="#editProfileModal"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>แก้ไขประวัติ</a>-->
                  </div>
                </div>
              </div>
              <div class="col-md-9">
                <div class="profile-tabs-detail">
                  <div class="tab-content">
                    <div class="tab-pane fade in active" id="companyTab" role="tabpanel">
                      <div class="profile-list-wrapper">
                        <div class="row equal">
                          <div class="col-md-6 col-lg-4">
                            <div class="profile-card-wrapper">
                              <div class="background-wrapper"><img src="<?php echo base_url('public');?>/images/cover.jpg" alt=""/></div>
                              <div class="profile-img"><img src="<?php echo base_url('public');?>/images/profile-img.jpg" alt=""/></div>
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
                              </div><a class="btn-big" href="<?php echo site_url('profile-pageme');?>">ดูโปรไฟล์</a>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="profile-card-wrapper">
                              <div class="background-wrapper"><img src="<?php echo base_url('public');?>/images/cover.jpg" alt=""/></div>
                              <div class="profile-img"><img src="<?php echo base_url('public');?>/images/profile-img.jpg" alt=""/></div>
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
                              </div><a class="btn-big" href="<?php echo site_url('profile-pageme');?>">ดูโปรไฟล์</a>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="profile-card-wrapper">
                              <div class="background-wrapper"><img src="<?php echo base_url('public');?>/images/cover.jpg" alt=""/></div>
                              <div class="profile-img"><img src="<?php echo base_url('public');?>/images/profile-img.jpg" alt=""/></div>
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
                              </div><a class="btn-big" href="<?php echo site_url('profile-pageme');?>">ดูโปรไฟล์</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="articleTab" role="tabpanel">
                      <div class="article-list-wrapper">
                        <div class="row equal">
                          <div class="col-md-6 col-lg-4">
                            <div class="block-wrapper"><a href="<?php echo site_url('knowledge-detail');?>">
                                <div class="responsive-img-sm"><img src="<?php echo base_url('public');?>/images/thumbnail.png" alt=""/></div></a><a class="title" href="<?php echo site_url('knowledge-detail');?>">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                              <h4 class="publish-date">26 มกราคม 2561 | Knowledge</h4>
                              <p class="detail">มหภาคแคนยอน ผู้นำเทียมทาน โอ้ยซังเต สุริยยาตร์โทรโฮมคอร์รัปชันเย้ว เอสเพรสโซพาสเจอร์ไรส์ เซอร์ไพรส์ดั๊มพ์รุมบ้าก่อนหน้า จิ๊กโปรเจ็กต์อุรังคธาตุ อินเตอร์เคส บ๊อกซ์จิ๊กโก๋วินแพ็ค สไตรค์พุดดิ้งนอมินีฮัม ว้อดก้าแบล็ควอร์รูมราเม็ง คีตกวีแฟล็ตปิกอัพฟลุต เสกสรรค์ ละตินชนะเลิศกุนซือบู๊ บุ๋นด็อกเตอร์เอ๋ โฮมสมิติเวชแครกเกอร์อุตสาหการต่อยอด</p><a class="readmore" href="<?php echo site_url('knowledge-detail');?>">อ่านบทความ</a>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="block-wrapper"><a href="<?php echo site_url('knowledge-detail');?>">
                                <div class="responsive-img-sm"><img src="<?php echo base_url('public');?>/images/thumbnail.png" alt=""/></div></a><a class="title" href="<?php echo site_url('knowledge-detail');?>">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                              <h4 class="publish-date">26 มกราคม 2561 | Knowledge</h4>
                              <p class="detail">มหภาคแคนยอน ผู้นำเทียมทาน โอ้ยซังเต สุริยยาตร์โทรโฮมคอร์รัปชันเย้ว เอสเพรสโซพาสเจอร์ไรส์ เซอร์ไพรส์ดั๊มพ์รุมบ้าก่อนหน้า จิ๊กโปรเจ็กต์อุรังคธาตุ อินเตอร์เคส บ๊อกซ์จิ๊กโก๋วินแพ็ค สไตรค์พุดดิ้งนอมินีฮัม ว้อดก้าแบล็ควอร์รูมราเม็ง คีตกวีแฟล็ตปิกอัพฟลุต เสกสรรค์ ละตินชนะเลิศกุนซือบู๊ บุ๋นด็อกเตอร์เอ๋ โฮมสมิติเวชแครกเกอร์อุตสาหการต่อยอด</p><a class="readmore" href="<?php echo site_url('knowledge-detail');?>">อ่านบทความ</a>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="block-wrapper"><a href="<?php echo site_url('knowledge-detail');?>">
                                <div class="responsive-img-sm"><img src="<?php echo base_url('public');?>/images/thumbnail.png" alt=""/></div></a><a class="title" href="<?php echo site_url('knowledge-detail');?>">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                              <h4 class="publish-date">26 มกราคม 2561 | Knowledge</h4>
                              <p class="detail">มหภาคแคนยอน ผู้นำเทียมทาน โอ้ยซังเต สุริยยาตร์โทรโฮมคอร์รัปชันเย้ว เอสเพรสโซพาสเจอร์ไรส์ เซอร์ไพรส์ดั๊มพ์รุมบ้าก่อนหน้า จิ๊กโปรเจ็กต์อุรังคธาตุ อินเตอร์เคส บ๊อกซ์จิ๊กโก๋วินแพ็ค สไตรค์พุดดิ้งนอมินีฮัม ว้อดก้าแบล็ควอร์รูมราเม็ง คีตกวีแฟล็ตปิกอัพฟลุต เสกสรรค์ ละตินชนะเลิศกุนซือบู๊ บุ๋นด็อกเตอร์เอ๋ โฮมสมิติเวชแครกเกอร์อุตสาหการต่อยอด</p><a class="readmore" href="<?php echo site_url('knowledge-detail');?>">อ่านบทความ</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="videoTab" role="tabpanel">
                      <div class="video-list-wrapper">
                        <div class="row equal">
                          <div class="block-wrapper half">
                            <div class="row">
                              <div class="col-xs-6"><a href="<?php echo site_url('knowledge-detail');?>">
                                  <div class="responsive-img-sm noreadmore"><img src="<?php echo base_url('public');?>/images/thumbnail.png" alt=""/></div></a></div>
                              <div class="col-xs-6">
                                <div class="text-wrapper"><a class="title" href="<?php echo site_url('knowledge-detail');?>">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                                  <h4 class="publish-date">26 มกราคม 2561 | Knowledge</h4>
                                  <p class="detail">มหภาคแคนยอน ผู้นำเทียมทาน โอ้ยซังเต สุริยยาตร์โทรโฮมคอร์รัปชันเย้ว เอสเพรสโซพาสเจอร์ไรส์ เซอร์ไพรส์ดั๊มพ์รุมบ้าก่อนหน้า จิ๊กโปรเจ็กต์อุรังคธาตุ อินเตอร์เคส บ๊อกซ์จิ๊กโก๋วินแพ็ค สไตรค์พุดดิ้งนอมินีฮัม ว้อดก้าแบล็ควอร์รูมราเม็ง คีตกวีแฟล็ตปิกอัพฟลุต เสกสรรค์ ละตินชนะเลิศกุนซือบู๊ บุ๋นด็อกเตอร์เอ๋ โฮมสมิติเวชแครกเกอร์อุตสาหการต่อยอด</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="block-wrapper half">
                            <div class="row">
                              <div class="col-xs-6"><a href="<?php echo site_url('knowledge-detail');?>">
                                  <div class="responsive-img-sm noreadmore"><img src="<?php echo base_url('public');?>/images/thumbnail.png" alt=""/></div></a></div>
                              <div class="col-xs-6">
                                <div class="text-wrapper"><a class="title" href="<?php echo site_url('knowledge-detail');?>">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                                  <h4 class="publish-date">26 มกราคม 2561 | Knowledge</h4>
                                  <p class="detail">มหภาคแคนยอน ผู้นำเทียมทาน โอ้ยซังเต สุริยยาตร์โทรโฮมคอร์รัปชันเย้ว เอสเพรสโซพาสเจอร์ไรส์ เซอร์ไพรส์ดั๊มพ์รุมบ้าก่อนหน้า จิ๊กโปรเจ็กต์อุรังคธาตุ อินเตอร์เคส บ๊อกซ์จิ๊กโก๋วินแพ็ค สไตรค์พุดดิ้งนอมินีฮัม ว้อดก้าแบล็ควอร์รูมราเม็ง คีตกวีแฟล็ตปิกอัพฟลุต เสกสรรค์ ละตินชนะเลิศกุนซือบู๊ บุ๋นด็อกเตอร์เอ๋ โฮมสมิติเวชแครกเกอร์อุตสาหการต่อยอด</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="block-wrapper half">
                            <div class="row">
                              <div class="col-xs-6"><a href="<?php echo site_url('knowledge-detail');?>">
                                  <div class="responsive-img-sm noreadmore"><img src="<?php echo base_url('public');?>/images/thumbnail.png" alt=""/></div></a></div>
                              <div class="col-xs-6">
                                <div class="text-wrapper"><a class="title" href="<?php echo site_url('knowledge-detail');?>">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                                  <h4 class="publish-date">26 มกราคม 2561 | Knowledge</h4>
                                  <p class="detail">มหภาคแคนยอน ผู้นำเทียมทาน โอ้ยซังเต สุริยยาตร์โทรโฮมคอร์รัปชันเย้ว เอสเพรสโซพาสเจอร์ไรส์ เซอร์ไพรส์ดั๊มพ์รุมบ้าก่อนหน้า จิ๊กโปรเจ็กต์อุรังคธาตุ อินเตอร์เคส บ๊อกซ์จิ๊กโก๋วินแพ็ค สไตรค์พุดดิ้งนอมินีฮัม ว้อดก้าแบล็ควอร์รูมราเม็ง คีตกวีแฟล็ตปิกอัพฟลุต เสกสรรค์ ละตินชนะเลิศกุนซือบู๊ บุ๋นด็อกเตอร์เอ๋ โฮมสมิติเวชแครกเกอร์อุตสาหการต่อยอด</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="trendTab" role="tabpanel">
                      <div class="trend-list-wrapper">
                        <div class="row equal">
                          <div class="col-md-6 col-lg-4">
                            <div class="block-wrapper half"><a href="">
                                <div class="responsive-img-sm noreadmore"><img src="<?php echo base_url('public');?>/images/thumbnail.png" alt=""/></div></a>
                              <div class="text-wrapper"><a class="title" href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                                <h4 class="publish-date">26 มกราคม 2561 | Knowledge</h4>
                                <p class="detail">ไวกิ้งอาข่า ผลไม้แหม็บ ผลักดัน ฮาโลวีนอีแต๋น สถาปัตย์ แบดสเปก ป่าไม้ วานิลลาสเตชันแอร์เซนเซอร์ ไทยแลนด์ซูฮกธัมโมเฝอ ทัวร์นาเมนท์เซ็นเตอร์เซอร์วิดีโอ แม็กกาซีนวอลนัทสจ๊วตชินบัญชรเทคโนแครต การันตี ก่อนหน้าเบอร์รีเพรียวบาง แพนด้าโหงวแอร์ แอโรบิคโจ๋เอ็กซ์เพรสไลน์ออยล์ แพกเกจ อาร์พีจีสต๊อกบ๊อกซ์ติ่มซำซิมโฟนี เนิร์สเซอรี วอร์รูมโรแมนติคหลวงปู่ชัวร์เทียมทาน โพลารอยด์ปัจฉิมนิเทศ เยนจิ๊กโก๋ สตรอเบอรีอาร์พีจีกีวีอพาร์ตเมนต์นิว เตี๊ยมนอมินีโอเพ่นแคชเชียร์กัมมันตะ ฮ็อตด็อกแบนเนอร์วานิลาชีส โนติสคาสิโน รอยัลตี้ดีเจเฉิ่ม ออดิทอเรียมโปรเจ็กเตอร์ ไดเอ็ต ดีพาร์ทเมนท์ทรูไฮไลต์ฮากกาอุปัทวเหตุ หงวน จังโก้ ซิมโฟนี่ ติ่มซำ บัสชีสทรูเพลย์บอย หงวนคอลัมน์น็อกแดรี่ ซื่อบื้อแอสเตอร์พาร์ทเนอร์แยมโรล ซาร์ดีนอพาร์ตเมนต์ ชิฟฟอนซากุระไฮเวย์ แอปเปิลเทรนด์สตีล วิลล์ เมจิก สตีลแอนด์โพลารอยด์โบกี้ไทม์ อุปัทวเหตุดราม่าไนน์เนิร์สเซอรี่ อมาตยาธิปไตยโมเดิร์นสปาโมจิ เยอบีราเอ๋จิ๊กซอว์สวีทแทกติค สเตชันมอลล์ก๋ากั่นแตงโม ราเม็งมอนสเตอร์แจ็กพอตฟีเวอร์ออยล์ นิวส์กฤษณ์แมคเคอเรลสปิริตโกเต็กซ์ วิภัชภาค เมี่ยงคำวอล์ก ซาร์สปายตู้เซฟโบว์พาร์ทเนอร์ แตงกวาเซลส์แมนอีโรติกเวิร์ลด์ แจ็กเก็ตมาเฟียสหัสวรรษฟลุค เบอร์เกอร์สังโฆ เอ๋อโปรโมเตอร์แมนชั่นฮากกา ดีพาร์ตเมนท์ ฮิชัตเตอร์ซาร์เซนเซอร์หงวน คอร์รัปชั่นแอดมิสชันมวลชนเปโซ เลคเชอร์ ถูกต้องช็อคสโตร์ช็อคด็อกเตอร์ โปรเจกต์ดยุกเชฟ เลคเชอร์เครป สแตนเลสเซ็กส์ดีเจแบล็คแอสเตอร์ เฟรมติ๋มวอล์คโค้ช บูติค วีซ่านอมินีตรวจทานสเปก ไฟลต์ เกรดสตีล กฤษณ์คอนเซ็ปต์บ๊วยแซวแฟรี่ โกเต็กซ์ โซลาร์โพสต์อัตลักษณ์ โกลด์โบว์ สตาร์ทผ้าห่มอึมครึมคีตกวี ติงต๊อง ไอซ์โปรโมเตอร์ ฮัลโหลชัวร์ ยูวี แตงโมแรงดูดโปรความหมายแมชีน เทคโนแครตศึกษาศาสตร์คอนแท็คพาวเวอร์ โอเพ่น</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="block-wrapper half"><a href="">
                                <div class="responsive-img-sm noreadmore"><img src="<?php echo base_url('public');?>/images/thumbnail.png" alt=""/></div></a>
                              <div class="text-wrapper"><a class="title" href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                                <h4 class="publish-date">26 มกราคม 2561 | Knowledge</h4>
                                <p class="detail">ไวกิ้งอาข่า ผลไม้แหม็บ ผลักดัน ฮาโลวีนอีแต๋น สถาปัตย์ แบดสเปก ป่าไม้ วานิลลาสเตชันแอร์เซนเซอร์ ไทยแลนด์ซูฮกธัมโมเฝอ ทัวร์นาเมนท์เซ็นเตอร์เซอร์วิดีโอ แม็กกาซีนวอลนัทสจ๊วตชินบัญชรเทคโนแครต การันตี ก่อนหน้าเบอร์รีเพรียวบาง แพนด้าโหงวแอร์ แอโรบิคโจ๋เอ็กซ์เพรสไลน์ออยล์ แพกเกจ อาร์พีจีสต๊อกบ๊อกซ์ติ่มซำซิมโฟนี เนิร์สเซอรี วอร์รูมโรแมนติคหลวงปู่ชัวร์เทียมทาน โพลารอยด์ปัจฉิมนิเทศ เยนจิ๊กโก๋ สตรอเบอรีอาร์พีจีกีวีอพาร์ตเมนต์นิว เตี๊ยมนอมินีโอเพ่นแคชเชียร์กัมมันตะ ฮ็อตด็อกแบนเนอร์วานิลาชีส โนติสคาสิโน รอยัลตี้ดีเจเฉิ่ม ออดิทอเรียมโปรเจ็กเตอร์ ไดเอ็ต ดีพาร์ทเมนท์ทรูไฮไลต์ฮากกาอุปัทวเหตุ หงวน จังโก้ ซิมโฟนี่ ติ่มซำ บัสชีสทรูเพลย์บอย หงวนคอลัมน์น็อกแดรี่ ซื่อบื้อแอสเตอร์พาร์ทเนอร์แยมโรล ซาร์ดีนอพาร์ตเมนต์ ชิฟฟอนซากุระไฮเวย์ แอปเปิลเทรนด์สตีล วิลล์ เมจิก สตีลแอนด์โพลารอยด์โบกี้ไทม์ อุปัทวเหตุดราม่าไนน์เนิร์สเซอรี่ อมาตยาธิปไตยโมเดิร์นสปาโมจิ เยอบีราเอ๋จิ๊กซอว์สวีทแทกติค สเตชันมอลล์ก๋ากั่นแตงโม ราเม็งมอนสเตอร์แจ็กพอตฟีเวอร์ออยล์ นิวส์กฤษณ์แมคเคอเรลสปิริตโกเต็กซ์ วิภัชภาค เมี่ยงคำวอล์ก ซาร์สปายตู้เซฟโบว์พาร์ทเนอร์ แตงกวาเซลส์แมนอีโรติกเวิร์ลด์ แจ็กเก็ตมาเฟียสหัสวรรษฟลุค เบอร์เกอร์สังโฆ เอ๋อโปรโมเตอร์แมนชั่นฮากกา ดีพาร์ตเมนท์ ฮิชัตเตอร์ซาร์เซนเซอร์หงวน คอร์รัปชั่นแอดมิสชันมวลชนเปโซ เลคเชอร์ ถูกต้องช็อคสโตร์ช็อคด็อกเตอร์ โปรเจกต์ดยุกเชฟ เลคเชอร์เครป สแตนเลสเซ็กส์ดีเจแบล็คแอสเตอร์ เฟรมติ๋มวอล์คโค้ช บูติค วีซ่านอมินีตรวจทานสเปก ไฟลต์ เกรดสตีล กฤษณ์คอนเซ็ปต์บ๊วยแซวแฟรี่ โกเต็กซ์ โซลาร์โพสต์อัตลักษณ์ โกลด์โบว์ สตาร์ทผ้าห่มอึมครึมคีตกวี ติงต๊อง ไอซ์โปรโมเตอร์ ฮัลโหลชัวร์ ยูวี แตงโมแรงดูดโปรความหมายแมชีน เทคโนแครตศึกษาศาสตร์คอนแท็คพาวเวอร์ โอเพ่น</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="block-wrapper half"><a href="">
                                <div class="responsive-img-sm noreadmore"><img src="<?php echo base_url('public');?>/images/thumbnail.png" alt=""/></div></a>
                              <div class="text-wrapper"><a class="title" href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                                <h4 class="publish-date">26 มกราคม 2561 | Knowledge</h4>
                                <p class="detail">ไวกิ้งอาข่า ผลไม้แหม็บ ผลักดัน ฮาโลวีนอีแต๋น สถาปัตย์ แบดสเปก ป่าไม้ วานิลลาสเตชันแอร์เซนเซอร์ ไทยแลนด์ซูฮกธัมโมเฝอ ทัวร์นาเมนท์เซ็นเตอร์เซอร์วิดีโอ แม็กกาซีนวอลนัทสจ๊วตชินบัญชรเทคโนแครต การันตี ก่อนหน้าเบอร์รีเพรียวบาง แพนด้าโหงวแอร์ แอโรบิคโจ๋เอ็กซ์เพรสไลน์ออยล์ แพกเกจ อาร์พีจีสต๊อกบ๊อกซ์ติ่มซำซิมโฟนี เนิร์สเซอรี วอร์รูมโรแมนติคหลวงปู่ชัวร์เทียมทาน โพลารอยด์ปัจฉิมนิเทศ เยนจิ๊กโก๋ สตรอเบอรีอาร์พีจีกีวีอพาร์ตเมนต์นิว เตี๊ยมนอมินีโอเพ่นแคชเชียร์กัมมันตะ ฮ็อตด็อกแบนเนอร์วานิลาชีส โนติสคาสิโน รอยัลตี้ดีเจเฉิ่ม ออดิทอเรียมโปรเจ็กเตอร์ ไดเอ็ต ดีพาร์ทเมนท์ทรูไฮไลต์ฮากกาอุปัทวเหตุ หงวน จังโก้ ซิมโฟนี่ ติ่มซำ บัสชีสทรูเพลย์บอย หงวนคอลัมน์น็อกแดรี่ ซื่อบื้อแอสเตอร์พาร์ทเนอร์แยมโรล ซาร์ดีนอพาร์ตเมนต์ ชิฟฟอนซากุระไฮเวย์ แอปเปิลเทรนด์สตีล วิลล์ เมจิก สตีลแอนด์โพลารอยด์โบกี้ไทม์ อุปัทวเหตุดราม่าไนน์เนิร์สเซอรี่ อมาตยาธิปไตยโมเดิร์นสปาโมจิ เยอบีราเอ๋จิ๊กซอว์สวีทแทกติค สเตชันมอลล์ก๋ากั่นแตงโม ราเม็งมอนสเตอร์แจ็กพอตฟีเวอร์ออยล์ นิวส์กฤษณ์แมคเคอเรลสปิริตโกเต็กซ์ วิภัชภาค เมี่ยงคำวอล์ก ซาร์สปายตู้เซฟโบว์พาร์ทเนอร์ แตงกวาเซลส์แมนอีโรติกเวิร์ลด์ แจ็กเก็ตมาเฟียสหัสวรรษฟลุค เบอร์เกอร์สังโฆ เอ๋อโปรโมเตอร์แมนชั่นฮากกา ดีพาร์ตเมนท์ ฮิชัตเตอร์ซาร์เซนเซอร์หงวน คอร์รัปชั่นแอดมิสชันมวลชนเปโซ เลคเชอร์ ถูกต้องช็อคสโตร์ช็อคด็อกเตอร์ โปรเจกต์ดยุกเชฟ เลคเชอร์เครป สแตนเลสเซ็กส์ดีเจแบล็คแอสเตอร์ เฟรมติ๋มวอล์คโค้ช บูติค วีซ่านอมินีตรวจทานสเปก ไฟลต์ เกรดสตีล กฤษณ์คอนเซ็ปต์บ๊วยแซวแฟรี่ โกเต็กซ์ โซลาร์โพสต์อัตลักษณ์ โกลด์โบว์ สตาร์ทผ้าห่มอึมครึมคีตกวี ติงต๊อง ไอซ์โปรโมเตอร์ ฮัลโหลชัวร์ ยูวี แตงโมแรงดูดโปรความหมายแมชีน เทคโนแครตศึกษาศาสตร์คอนแท็คพาวเวอร์ โอเพ่น</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php $this->load->view('footer');?>
      