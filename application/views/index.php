


      <div class="banner"><img class="full-width" src="<?php echo base_url();?>public/images/banner.jpg" alt="">
        <div class="search-wrapper">
          <input type="text" placeholder="ผู้ผลิต/ผู้จำหน่าย/นักออกแบบหรือไอดีที่ต้องการค้นหา">
          <button type="submit">ค้นหา</button>
        </div>
      </div>
      <section class="section-wrapper first-block">
        <div class="container">
          <h2 class="header-text">Knowledge</h2>
          <div class="row equal">
            <div class="col-md-4 col-sm-6"> 
              <div class="head-img orange"><img src="<?php echo base_url();?>public/images/knowledge-head.png" alt="">
                <div class="text-wrapper">
                  <p>KNOWLEDGE</p>
                  <p>บทความอื่น</p>
                </div>
              </div>
            </div>

            <?php 
            foreach($knowledge['data'][0]['knowledges'] as $k => $v) {
              ?>
              <div class="col-md-4 col-sm-6">
                <div class="block-wrapper">
                  <a href="<?php echo site_url('knowledge-detail/'.$v['category']['_id'].'/'.$v['_id']);?>">
                    <div class="responsive-img-sm"><img src="<?php echo $v['image']['thumbnail'];?>" alt=""></div></a><a class="title" href="<?php echo site_url('knowledge-detail/'.$v['category']['_id'].'/'.$v['_id']);?>"><?php echo $v['title'];?></a>
                  <h4 class="publish-date"><?php echo date('d/m/Y', strtotime($v['create_date']));?></h4>
                  <p class="detail"><?php echo $v['subtitle'];?></p>
                  <a class="readmore" href="<?php echo site_url('knowledge-detail/'.$v['category']['_id'].'/'.$v['_id']);?>">อ่านบทความ</a>
                </div>
              </div>

              <?php 
            }
            ?>
          </div>
        </div>
      </section>
      <section class="section-wrapper">
        <div class="container">
          <h2 class="header-text">find designer</h2>
          <div class="row equal">
            <?php 
            //print_r($designer['data']);
            ?>

            <?php foreach($designer['data'] as $k => $v):?>
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
            
            
          </div>
        </div>
      </section>
      <section class="section-wrapper">
        <div class="container">
          <h2 class="header-text">find producer</h2>
          <div class="row equal">

            <?php foreach($producer['data'] as $k => $v):?>
              <div class="col-md-4 col-sm-6">
              <div class="head-img"><a href="<?php echo site_url('producer/list/'.$v['_id']);?>"><img src="<?php echo $v['image']['thumbnail'];?>" alt="">
                  <div class="text-wrapper">
                    <p><?php echo $v['name']['en'];?></p>
                    <p><?php echo $v['name']['th'];?></p>
                  </div></a></div>
            </div>

            <?php endforeach;?>
            
            <!--

            <div class="col-md-4 col-sm-6">
              <div class="block-wrapper"><a href="">
                  <div class="responsive-img-sm"><img src="<?php echo base_url();?>public/images/thumbnail.png" alt=""></div></a><a class="title" href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                <h4 class="publish-date">26 มกราคม 2561</h4>
                <p class="detail">มหภาคแคนยอน ผู้นำเทียมทาน โอ้ยซังเต สุริยยาตร์โทรโฮมคอร์รัปชันเย้ว เอสเพรสโซพาสเจอร์ไรส์ เซอร์ไพรส์ดั๊มพ์รุมบ้าก่อนหน้า จิ๊กโปรเจ็กต์อุรังคธาตุ อินเตอร์เคส บ๊อกซ์จิ๊กโก๋วินแพ็ค สไตรค์พุดดิ้งนอมินีฮัม ว้อดก้าแบล็ควอร์รูมราเม็ง คีตกวีแฟล็ตปิกอัพฟลุต เสกสรรค์ ละตินชนะเลิศกุนซือบู๊ บุ๋นด็อกเตอร์เอ๋ โฮมสมิติเวชแครกเกอร์อุตสาหการต่อยอด</p>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="head-img"><img src="<?php echo base_url();?>public/images/producer-2.png" alt="">
                <div class="text-wrapper">
                  <p>PLASTIC PRODUCER</p>
                  <p>ผู้ผลิตสินค้าอุตสาหกรรมพลาสติก</p>
                </div>
              </div>
            </div>

            <div class="col-md-4 col-sm-6">
              <div class="head-img"><a href=""><img src="<?php echo base_url();?>public/images/producer-3.png" alt="">
                  <div class="text-wrapper">
                    <p>TEXTILE PRODUCER</p>
                    <p>ผู้ผลิตสินค้าอุตสาหกรรมสิ่งทอและเครื่องนุ่งห่ม</p>
                  </div></a></div>
            </div>

            <div class="col-md-4 col-sm-6">
              <div class="block-wrapper"><a href="">
                  <div class="responsive-img-sm"><img src="<?php echo base_url();?>public/images/thumbnail.png" alt=""></div></a><a class="title" href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                <h4 class="publish-date">26 มกราคม 2561</h4>
                <p class="detail">มหภาคแคนยอน ผู้นำเทียมทาน โอ้ยซังเต สุริยยาตร์โทรโฮมคอร์รัปชันเย้ว เอสเพรสโซพาสเจอร์ไรส์ เซอร์ไพรส์ดั๊มพ์รุมบ้าก่อนหน้า จิ๊กโปรเจ็กต์อุรังคธาตุ อินเตอร์เคส บ๊อกซ์จิ๊กโก๋วินแพ็ค สไตรค์พุดดิ้งนอมินีฮัม ว้อดก้าแบล็ควอร์รูมราเม็ง คีตกวีแฟล็ตปิกอัพฟลุต เสกสรรค์ ละตินชนะเลิศกุนซือบู๊ บุ๋นด็อกเตอร์เอ๋ โฮมสมิติเวชแครกเกอร์อุตสาหการต่อยอด</p>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="block-wrapper"><a href="">
                  <div class="responsive-img-sm"><img src="<?php echo base_url();?>public/images/thumbnail.png" alt=""></div></a><a class="title" href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                <h4 class="publish-date">26 มกราคม 2561</h4>
                <p class="detail">มหภาคแคนยอน ผู้นำเทียมทาน โอ้ยซังเต สุริยยาตร์โทรโฮมคอร์รัปชันเย้ว เอสเพรสโซพาสเจอร์ไรส์ เซอร์ไพรส์ดั๊มพ์รุมบ้าก่อนหน้า จิ๊กโปรเจ็กต์อุรังคธาตุ อินเตอร์เคส บ๊อกซ์จิ๊กโก๋วินแพ็ค สไตรค์พุดดิ้งนอมินีฮัม ว้อดก้าแบล็ควอร์รูมราเม็ง คีตกวีแฟล็ตปิกอัพฟลุต เสกสรรค์ ละตินชนะเลิศกุนซือบู๊ บุ๋นด็อกเตอร์เอ๋ โฮมสมิติเวชแครกเกอร์อุตสาหการต่อยอด</p>
              </div>
            </div>
          
            <div class="col-sm-12">
              <div class="block-wrapper"><a href="">
                  <div class="responsive-img-md big"><img src="<?php echo base_url();?>public/images/more-producer.png" alt="">
                    <div class="text-wrapper nohover">
                      <p>MORE DESIGNER</p>
                      <p>ผู้ผลิตสินค้าวัตถุดิบอุตสาหกรรมด้านอื่น  </p>
                    </div>
                  </div></a></div>
            </div>

          -->
          </div>
        </div>
      </section>
      <section class="section-wrapper">
        <div class="container">
          <h2 class="header-text">find material supplier</h2>
          <div class="row equal">
            <?php foreach($supplier['data'] as $k => $v):?>
              <div class="col-md-4 col-sm-6">
              <div class="head-img"><a href="<?php echo site_url('supplier/list/'.$v['_id']);?>"><img src="<?php echo $v['image']['thumbnail'];?>" alt="">
                  <div class="text-wrapper">
                    <p><?php echo $v['name']['en'];?></p>
                    <p><?php echo $v['name']['th'];?></p>
                  </div></a></div>
            </div>

            <?php endforeach;?>


            <!--<div class="col-md-4 col-sm-6">
              <div class="head-img"><img src="<?php echo base_url();?>public/images/composite.-supplier.png" alt="">
                <div class="text-wrapper">
                  <p>COMPOSITE SUPPLIER</p>
                  <p>สินค้าวัตถุดิบอุตสาหกรรมคอมโพสิท</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="head-img"><img src="<?php echo base_url();?>public/images/composite.-supplier.png" alt="">
                <div class="text-wrapper">
                  <p>COMPOSITE SUPPLIER</p>
                  <p>สินค้าวัตถุดิบอุตสาหกรรมคอมโพสิท</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="block-wrapper"><a href="">
                  <div class="responsive-img-sm"><img src="<?php echo base_url();?>public/images/thumbnail.png" alt=""></div></a><a class="title" href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                <h4 class="publish-date">26 มกราคม 2561</h4>
                <p class="detail">มหภาคแคนยอน ผู้นำเทียมทาน โอ้ยซังเต สุริยยาตร์โทรโฮมคอร์รัปชันเย้ว เอสเพรสโซพาสเจอร์ไรส์ เซอร์ไพรส์ดั๊มพ์รุมบ้าก่อนหน้า จิ๊กโปรเจ็กต์อุรังคธาตุ อินเตอร์เคส บ๊อกซ์จิ๊กโก๋วินแพ็ค สไตรค์พุดดิ้งนอมินีฮัม ว้อดก้าแบล็ควอร์รูมราเม็ง คีตกวีแฟล็ตปิกอัพฟลุต เสกสรรค์ ละตินชนะเลิศกุนซือบู๊ บุ๋นด็อกเตอร์เอ๋ โฮมสมิติเวชแครกเกอร์อุตสาหการต่อยอด</p>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="block-wrapper"><a href="">
                  <div class="responsive-img-sm"><img src="<?php echo base_url();?>public/images/thumbnail.png" alt=""></div></a><a class="title" href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                <h4 class="publish-date">26 มกราคม 2561</h4>
                <p class="detail">มหภาคแคนยอน ผู้นำเทียมทาน โอ้ยซังเต สุริยยาตร์โทรโฮมคอร์รัปชันเย้ว เอสเพรสโซพาสเจอร์ไรส์ เซอร์ไพรส์ดั๊มพ์รุมบ้าก่อนหน้า จิ๊กโปรเจ็กต์อุรังคธาตุ อินเตอร์เคส บ๊อกซ์จิ๊กโก๋วินแพ็ค สไตรค์พุดดิ้งนอมินีฮัม ว้อดก้าแบล็ควอร์รูมราเม็ง คีตกวีแฟล็ตปิกอัพฟลุต เสกสรรค์ ละตินชนะเลิศกุนซือบู๊ บุ๋นด็อกเตอร์เอ๋ โฮมสมิติเวชแครกเกอร์อุตสาหการต่อยอด</p>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="head-img"><img src="<?php echo base_url();?>public/images/composite.-supplier.png" alt="">
                <div class="text-wrapper">
                  <p>COMPOSITE SUPPLIER</p>
                  <p>สินค้าวัตถุดิบอุตสาหกรรมคอมโพสิท</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="block-wrapper"><a href="">
                  <div class="responsive-img-sm"><img src="<?php echo base_url();?>public/images/thumbnail.png" alt=""></div></a><a class="title" href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                <h4 class="publish-date">26 มกราคม 2561</h4>
                <p class="detail">มหภาคแคนยอน ผู้นำเทียมทาน โอ้ยซังเต สุริยยาตร์โทรโฮมคอร์รัปชันเย้ว เอสเพรสโซพาสเจอร์ไรส์ เซอร์ไพรส์ดั๊มพ์รุมบ้าก่อนหน้า จิ๊กโปรเจ็กต์อุรังคธาตุ อินเตอร์เคส บ๊อกซ์จิ๊กโก๋วินแพ็ค สไตรค์พุดดิ้งนอมินีฮัม ว้อดก้าแบล็ควอร์รูมราเม็ง คีตกวีแฟล็ตปิกอัพฟลุต เสกสรรค์ ละตินชนะเลิศกุนซือบู๊ บุ๋นด็อกเตอร์เอ๋ โฮมสมิติเวชแครกเกอร์อุตสาหการต่อยอด</p>
              </div>
            </div>
          -->

            <div class="col-sm-12">
              <div class="block-wrapper"><a href="<?php echo site_url('find-designer');?>">
                  <div class="responsive-img-md big orange"><img src="<?php echo base_url();?>public/images/more-supplier.png" alt="">
                    <div class="text-wrapper">
                      <p>MORE DESIGNER</p>
                      <p>ผู้ผลิตสินค้าวัตถุดิบอุตสาหกรรมด้านอื่น  </p>
                    </div>
                  </div></a></div>
            </div>
          </div>
        </div>
      </section>
      
      