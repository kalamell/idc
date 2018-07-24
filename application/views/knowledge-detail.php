
      
      <?php $this->load->view('header');?>

      <div class="search-wrapper-inside">
        <div class="container">
          <div class="search-field"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>
            <input type="text" placeholder="ค้นหาชื่อโปรไฟล์ประเภทงาน">
          </div>
        </div>
      </div>
      <section class="section-wrapper">
        <div class="container">
          <div class="row">
            <div class="col-md-8">

              <?php
              $rs = $rs['data'][0];
              ?>

              <div class="detail-wrapper">
                <h2 class="title-detail"><?php echo $rs['title'];?></h2>
                <p class="date"><?php echo date('d m Y', strtotime($rs['create_date']));?> |<span class="type"> Knowledge</span></p><img class="img-responsive" src="<?php echo $rs['image']['full'];?>" alt="">

                <?php echo $rs['detail'];?>
                
                <!--<p>ไวกิ้งอาข่า ผลไม้แหม็บ ผลักดัน ฮาโลวีนอีแต๋น สถาปัตย์ แบดสเปก ป่าไม้ วานิลลาสเตชันแอร์เซนเซอร์ ไทยแลนด์ซูฮกธัมโมเฝอ ทัวร์นาเมนท์เซ็นเตอร์เซอร์วิดีโอ แม็กกาซีนวอลนัทสจ๊วตชินบัญชรเทคโนแครต การันตี ก่อนหน้าเบอร์รีเพรียวบาง แพนด้าโหงวแอร์ แอโรบิคโจ๋เอ็กซ์เพรสไลน์ออยล์ แพกเกจ อาร์พีจีสต๊อกบ๊อกซ์ติ่มซำซิมโฟนี เนิร์สเซอรี วอร์รูมโรแมนติคหลวงปู่ชัวร์เทียมทาน โพลารอยด์ปัจฉิมนิเทศ เยนจิ๊กโก๋ สตรอเบอรีอาร์พีจีกีวีอพาร์ตเมนต์นิว เตี๊ยมนอมินีโอเพ่นแคชเชียร์กัมมันตะ ฮ็อตด็อกแบนเนอร์วานิลาชีส โนติสคาสิโน รอยัลตี้ดีเจเฉิ่ม ออดิทอเรียมโปรเจ็กเตอร์ ไดเอ็ต ดีพาร์ทเมนท์ทรูไฮไลต์ฮากกาอุปัทวเหตุ หงวน จังโก้ ซิมโฟนี่ ติ่มซำ บัสชีสทรูเพลย์บอย หงวนคอลัมน์น็อกแดรี่ ซื่อบื้อแอสเตอร์พาร์ทเนอร์แยมโรล ซาร์ดีนอพาร์ตเมนต์ ชิฟฟอนซากุระไฮเวย์ แอปเปิลเทรนด์สตีล วิลล์ เมจิก สตีลแอนด์โพลารอยด์โบกี้ไทม์ อุปัทวเหตุดราม่าไนน์เนิร์สเซอรี่ อมาตยาธิปไตยโมเดิร์นสปาโมจิ เยอบีราเอ๋จิ๊กซอว์สวีทแทกติค สเตชันมอลล์ก๋ากั่นแตงโม ราเม็งมอนสเตอร์แจ็กพอตฟีเวอร์ออยล์ นิวส์กฤษณ์แมคเคอเรลสปิริตโกเต็กซ์ วิภัชภาค เมี่ยงคำวอล์ก ซาร์สปายตู้เซฟโบว์พาร์ทเนอร์ แตงกวาเซลส์แมนอีโรติกเวิร์ลด์ แจ็กเก็ตมาเฟียสหัสวรรษฟลุค เบอร์เกอร์สังโฆ เอ๋อโปรโมเตอร์แมนชั่นฮากกา ดีพาร์ตเมนท์ ฮิชัตเตอร์ซาร์เซนเซอร์หงวน คอร์รัปชั่นแอดมิสชันมวลชนเปโซ เลคเชอร์ ถูกต้องช็อคสโตร์ช็อคด็อกเตอร์ โปรเจกต์ดยุกเชฟ เลคเชอร์เครป สแตนเลสเซ็กส์ดีเจแบล็คแอสเตอร์ เฟรมติ๋มวอล์คโค้ช บูติค วีซ่านอมินีตรวจทานสเปก ไฟลต์ เกรดสตีล กฤษณ์คอนเซ็ปต์บ๊วยแซวแฟรี่ โกเต็กซ์ โซลาร์โพสต์อัตลักษณ์ โกลด์โบว์ สตาร์ทผ้าห่มอึมครึมคีตกวี ติงต๊อง ไอซ์โปรโมเตอร์ ฮัลโหลชัวร์ ยูวี แตงโมแรงดูดโปรความหมายแมชีน เทคโนแครตศึกษาศาสตร์คอนแท็คพาวเวอร์ โอเพ่น</p><img class="img-responsive" src="<?php echo base_url();?>public/images/detail-img-2.jpg" alt="">
                <p>มาร์เก็ตรีพอร์ทแฟ้บซาบะพิซซ่า เกมส์พอเพียงผลไม้ผ้าห่ม รีพอร์ทออดิทอเรียม บ๊อบพ่อค้าโฮมเชอร์รี่นินจา เกสต์เฮาส์ฮ็อตด็อก แลนด์ กุนซือ เย้ว รีสอร์ต พันธุวิศวกรรมโปรโมทวิลเลจแฟร์บิ๊ก สะเด่าวอลซ์ดีพาร์ตเมนท์รีสอร์ท ชาร์ปง่าวตาปรือมือถืออยุติธรรม บ๊อกซ์งี้เอ็กซ์โปเทเลกราฟแหม็บ โฮปโกลด์บูติกแซลมอน มอบตัว พรีเมียมเอนทรานซ์ โบว์ ไฮเอนด์แคป แฟลชวัจนะ เกมส์ เพรียวบางแพลนรีพอร์ทออกแบบแมมโบ้ มาร์เก็ตติ้งแจมรุมบ้า คอมเมนต์ ทัวร์ละอ่อนคีตกวีรูบิกถ่ายทำ อาร์ติสต์ ง่าวแก๊สโซฮอล์วัจนะบิ๊กวาริชศาสตร์ โซนวิลล์โกเต็กซ์ไอซียูแฮมเบอร์เกอร์ ชัตเตอร์คอร์ป คำตอบมายองเนส ยนตรกรรมสตรอเบอร์รีหยวนลิมูซีน วอล์คแจ็กเก็ตพ่อค้าแฟ็กซ์ โจ๋วโรกาสผลไม้ติวแอสเตอร์ เบนโตะเอนทรานซ์พาสตาบาลานซ์ เกรย์วอลซ์ศิลปากรทาวน์เฮาส์ โต๋เต๋พาเหรดใช้งานเรซินโอ้ย โซลาร์ตุ๊กตุ๊ก คลับอะสตริงกาญจน์ โกเต็กซ์หลินจือสเตชั่นคัตเอาต์ แซลมอนสตาร์ทไอซ์สคริปต์ เนิร์สเซอรี่อุปนายิกาบาร์บีคิวภควัมบดี ฮันนีมูนว้าว ฮันนีมูนมาร์ตโปลิศเซ็กซี่ ทรูน็อคว้อยโบรชัวร์หมิง เปโซการันตีแอปเปิลอวอร์ด ตัวเอง บอยคอตต์แชมเปญเท็กซ์พาวเวอร์ ไฮไลต์ โปรโมทมิวสิควานิลาราเมนเบบี้ น็อคพอเพียงเบนโตะซูมวอลล์ ทิปเพทนาการโปลิศ ซีนคำตอบไนน์คีตราชัน หมั่นโถวว่ะสปิริต ฮาราคีรีบึม กาญจนาภิเษกเปียโนสติ๊กเกอร์ไอติม ทีวีเลสเบี้ยน กัมมันตะเมจิค รูบิกรีไซเคิลเซลส์ก่อนหน้า โต๋เต๋ซัพพลายเออร์เลคเชอร์เคส ฮองเฮาซีดานซิม ราเม็งเซนเซอร์แอดมิสชันเป่ายิงฉุบ ฟรังก์ไตรมาสวอล์คซินโดรม พุทธภูมิอีแต๋นอ่วม เกมส์ เรตติ้งพรีเซ็นเตอร์ กุนซือโชว์รูมเทเลกราฟแคมเปญเดโม ราชบัณฑิตยสถานโอเปอเรเตอร์เฟอร์รี่ ปิยมิตร โลชั่น เปโซเบนโตะซ้อบาร์บี้ ง่าวเซฟตี้ควีนมอยส์เจอไรเซอร์โจ๋ เหมยกรีน โหลนโปรโมท อะ เอ๋อพาสตา เธควัคค์โมหจริต สกายตุ๊กตุ๊กกฤษณ์แซนด์วิช คลาสสิกเต๊ะแคนยอน ดีมานด์ เบบี้หม่านโถว วอลซ์ออยล์</p>
              -->
              </div>
              <div class="social-share"><a href=""><img src="<?php echo base_url();?>public/images/fb-share.png" alt=""></a><a href=""><img src="<?php echo base_url();?>public/images/tw-share.png" alt=""></a><a href=""><img src="<?php echo base_url();?>public/images/other-share.png" alt=""></a></div>
            </div>
            <div class="col-md-4 side-content">
              <div class="box-sub">
                <h2>TREND DESIGN</h2><a href="<?php echo site_url('knowledge-trend');?>"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
              </div>

              <?php $no = 1; foreach($knowledgecategory['Train Design'] as $k => $v):?>

                <div class="block-wrapper half"><a href="<?php echo site_url('knowledge-detail/'.$v['category']['_id'].'/'.$v['_id']);?>">
                    <div class="responsive-img-sm noreadmore"><img src="<?php echo $v['image']['thumbnail'];?>" alt=""></div></a>
                  <div class="text-wrapper"><a class="title" href=""><?php echo $v['title'];?></a>
                    <h4 class="publish-date"><?php echo date('d m Y', strtotime($v['create_date']));?> | Knowledge</h4>
                  </div>
                </div>

              <?php if ($no == 5) break; ?>
              <?php $no++; endforeach;?>

              <!--

              <div class="block-wrapper half"><a href="">
                  <div class="responsive-img-sm noreadmore"><img src="<?php echo base_url();?>public/images/thumbnail.png" alt=""></div></a>
                <div class="text-wrapper"><a class="title" href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                  <h4 class="publish-date">26 มกราคม 2561 | Knowledge</h4>
                </div>
              </div>
              <div class="block-wrapper half"><a href="">
                  <div class="responsive-img-sm noreadmore"><img src="<?php echo base_url();?>public/images/thumbnail.png" alt=""></div></a>
                <div class="text-wrapper"><a class="title" href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                  <h4 class="publish-date">26 มกราคม 2561 | Knowledge</h4>
                </div>
              </div>
            -->

              <div class="box-sub">
                <h2>VIDEO</h2><a href="<?php echo site_url('knowledge-video');?>"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
              </div>
               <?php $no = 1; foreach($knowledgecategory['Video'] as $k => $v):?>
                <div class="block-wrapper half"><a href="<?php echo site_url('knowledge-detail/'.$v['category']['_id'].'/'.$v['_id']);?>">
                    <div class="responsive-img-sm noreadmore"><img src="<?php echo $v['image']['thumbnail'];?>" alt=""></div></a>
                  <div class="text-wrapper"><a class="title" href="<?php echo site_url('knowledge-detail/'.$v['category']['_id'].'/'.$v['_id']);?>"><?php echo $v['title'];?></a>
                    <h4 class="publish-date"><?php echo date('d m Y', strtotime($v['create_date']));?> | Knowledge</h4>
                  </div>
                </div>
                <?php if ($no == 5) break; ?>
                <?php $no++; endforeach;?>
              
            </div>
          </div>
        </div>
      </section>

      <?php $this->load->view('footer');?>
     