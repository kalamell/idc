
      <div class="search-wrapper-inside">
        <div class="container">
          <div class="search-field"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>
            <input type="text" placeholder="ค้นหาชื่อโปรไฟล์ประเภทงาน">
          </div>
        </div>
      </div>
      <div class="banner"><img class="full-width" src="<?php echo base_url('public');?>/images/news-event-banner.jpg" alt=""></div>
      <section class="section-wrapper">
        <div class="container">
          <h2 class="header-text">exhibition</h2>
          <div class="box-sub">
            <h2>EXHIBITION</h2>
          </div>
          <div class="row equal">
            <?php foreach($news['Exhibitions']['data']['data'] as $n => $v):?>
            <div class="col-md-4 col-sm-6">
              <div class="block-wrapper"><a href="<?php echo site_url('news/'.$v['category']['_id'].'/'.$v['_id']);?>">
                  <div class="responsive-img-sm"><img src="<?php echo $v['image']['thumbnail'];?>" alt=""></div></a><a class="title" href="<?php echo site_url('news-detail');?>"><?php echo $v['title'];?></a>
                <h4 class="publish-date"><?php echo date('d m Y', strtotime($v['create_date']));?> | News</h4>
                <p class="detail"><?php echo $v['subtitle'];?></p><a class="readmore" href="<?php echo site_url('news/'.$v['category']['_id'].'/'.$v['_id']);?>">อ่านบทความ</a>
              </div>
            </div>
            <?php endforeach;?>
            <!-- <div class="col-md-4 col-sm-6">
              <div class="block-wrapper"><a href="<?php echo site_url('news-detail');?>">
                  <div class="responsive-img-sm"><img src="<?php echo base_url('public');?>/images/thumbnail.png" alt=""></div></a><a class="title" href="<?php echo site_url('news-detail');?>">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                <h4 class="publish-date">26 มกราคม 2561 | News</h4>
                <p class="detail">มหภาคแคนยอน ผู้นำเทียมทาน โอ้ยซังเต สุริยยาตร์โทรโฮมคอร์รัปชันเย้ว เอสเพรสโซพาสเจอร์ไรส์ เซอร์ไพรส์ดั๊มพ์รุมบ้าก่อนหน้า จิ๊กโปรเจ็กต์อุรังคธาตุ อินเตอร์เคส บ๊อกซ์จิ๊กโก๋วินแพ็ค สไตรค์พุดดิ้งนอมินีฮัม ว้อดก้าแบล็ควอร์รูมราเม็ง คีตกวีแฟล็ตปิกอัพฟลุต เสกสรรค์ ละตินชนะเลิศกุนซือบู๊ บุ๋นด็อกเตอร์เอ๋ โฮมสมิติเวชแครกเกอร์อุตสาหการต่อยอด</p><a class="readmore" href="<?php echo site_url('news-detail');?>">อ่านบทความ</a>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="block-wrapper"><a href="<?php echo site_url('news-detail');?>">
                  <div class="responsive-img-sm"><img src="<?php echo base_url('public');?>/images/thumbnail.png" alt=""></div></a><a class="title" href="<?php echo site_url('news-detail');?>">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                <h4 class="publish-date">26 มกราคม 2561 | News</h4>
                <p class="detail">มหภาคแคนยอน ผู้นำเทียมทาน โอ้ยซังเต สุริยยาตร์โทรโฮมคอร์รัปชันเย้ว เอสเพรสโซพาสเจอร์ไรส์ เซอร์ไพรส์ดั๊มพ์รุมบ้าก่อนหน้า จิ๊กโปรเจ็กต์อุรังคธาตุ อินเตอร์เคส บ๊อกซ์จิ๊กโก๋วินแพ็ค สไตรค์พุดดิ้งนอมินีฮัม ว้อดก้าแบล็ควอร์รูมราเม็ง คีตกวีแฟล็ตปิกอัพฟลุต เสกสรรค์ ละตินชนะเลิศกุนซือบู๊ บุ๋นด็อกเตอร์เอ๋ โฮมสมิติเวชแครกเกอร์อุตสาหการต่อยอด</p><a class="readmore" href="<?php echo site_url('news-detail');?>">อ่านบทความ</a>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="block-wrapper"><a href="<?php echo site_url('news-detail');?>">
                  <div class="responsive-img-sm"><img src="<?php echo base_url('public');?>/images/thumbnail.png" alt=""></div></a><a class="title" href="<?php echo site_url('news-detail');?>">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                <h4 class="publish-date">26 มกราคม 2561 | News</h4>
                <p class="detail">มหภาคแคนยอน ผู้นำเทียมทาน โอ้ยซังเต สุริยยาตร์โทรโฮมคอร์รัปชันเย้ว เอสเพรสโซพาสเจอร์ไรส์ เซอร์ไพรส์ดั๊มพ์รุมบ้าก่อนหน้า จิ๊กโปรเจ็กต์อุรังคธาตุ อินเตอร์เคส บ๊อกซ์จิ๊กโก๋วินแพ็ค สไตรค์พุดดิ้งนอมินีฮัม ว้อดก้าแบล็ควอร์รูมราเม็ง คีตกวีแฟล็ตปิกอัพฟลุต เสกสรรค์ ละตินชนะเลิศกุนซือบู๊ บุ๋นด็อกเตอร์เอ๋ โฮมสมิติเวชแครกเกอร์อุตสาหการต่อยอด</p><a class="readmore" href="<?php echo site_url('news-detail');?>">อ่านบทความ</a>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="block-wrapper"><a href="<?php echo site_url('news-detail');?>">
                  <div class="responsive-img-sm"><img src="<?php echo base_url('public');?>/images/thumbnail.png" alt=""></div></a><a class="title" href="<?php echo site_url('news-detail');?>">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                <h4 class="publish-date">26 มกราคม 2561 | News</h4>
                <p class="detail">มหภาคแคนยอน ผู้นำเทียมทาน โอ้ยซังเต สุริยยาตร์โทรโฮมคอร์รัปชันเย้ว เอสเพรสโซพาสเจอร์ไรส์ เซอร์ไพรส์ดั๊มพ์รุมบ้าก่อนหน้า จิ๊กโปรเจ็กต์อุรังคธาตุ อินเตอร์เคส บ๊อกซ์จิ๊กโก๋วินแพ็ค สไตรค์พุดดิ้งนอมินีฮัม ว้อดก้าแบล็ควอร์รูมราเม็ง คีตกวีแฟล็ตปิกอัพฟลุต เสกสรรค์ ละตินชนะเลิศกุนซือบู๊ บุ๋นด็อกเตอร์เอ๋ โฮมสมิติเวชแครกเกอร์อุตสาหการต่อยอด</p><a class="readmore" href="<?php echo site_url('news-detail');?>">อ่านบทความ</a>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="block-wrapper"><a href="<?php echo site_url('news-detail');?>">
                  <div class="responsive-img-sm"><img src="<?php echo base_url('public');?>/images/thumbnail.png" alt=""></div></a><a class="title" href="<?php echo site_url('news-detail');?>">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                <h4 class="publish-date">26 มกราคม 2561 | News</h4>
                <p class="detail">มหภาคแคนยอน ผู้นำเทียมทาน โอ้ยซังเต สุริยยาตร์โทรโฮมคอร์รัปชันเย้ว เอสเพรสโซพาสเจอร์ไรส์ เซอร์ไพรส์ดั๊มพ์รุมบ้าก่อนหน้า จิ๊กโปรเจ็กต์อุรังคธาตุ อินเตอร์เคส บ๊อกซ์จิ๊กโก๋วินแพ็ค สไตรค์พุดดิ้งนอมินีฮัม ว้อดก้าแบล็ควอร์รูมราเม็ง คีตกวีแฟล็ตปิกอัพฟลุต เสกสรรค์ ละตินชนะเลิศกุนซือบู๊ บุ๋นด็อกเตอร์เอ๋ โฮมสมิติเวชแครกเกอร์อุตสาหการต่อยอด</p><a class="readmore" href="<?php echo site_url('news-detail');?>">อ่านบทความ</a>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="block-wrapper"><a href="<?php echo site_url('news-detail');?>">
                  <div class="responsive-img-sm"><img src="<?php echo base_url('public');?>/images/thumbnail.png" alt=""></div></a><a class="title" href="<?php echo site_url('news-detail');?>">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                <h4 class="publish-date">26 มกราคม 2561 | News</h4>
                <p class="detail">มหภาคแคนยอน ผู้นำเทียมทาน โอ้ยซังเต สุริยยาตร์โทรโฮมคอร์รัปชันเย้ว เอสเพรสโซพาสเจอร์ไรส์ เซอร์ไพรส์ดั๊มพ์รุมบ้าก่อนหน้า จิ๊กโปรเจ็กต์อุรังคธาตุ อินเตอร์เคส บ๊อกซ์จิ๊กโก๋วินแพ็ค สไตรค์พุดดิ้งนอมินีฮัม ว้อดก้าแบล็ควอร์รูมราเม็ง คีตกวีแฟล็ตปิกอัพฟลุต เสกสรรค์ ละตินชนะเลิศกุนซือบู๊ บุ๋นด็อกเตอร์เอ๋ โฮมสมิติเวชแครกเกอร์อุตสาหการต่อยอด</p><a class="readmore" href="<?php echo site_url('news-detail');?>">อ่านบทความ</a>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="block-wrapper"><a href="<?php echo site_url('news-detail');?>">
                  <div class="responsive-img-sm"><img src="<?php echo base_url('public');?>/images/thumbnail.png" alt=""></div></a><a class="title" href="<?php echo site_url('news-detail');?>">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                <h4 class="publish-date">26 มกราคม 2561 | News</h4>
                <p class="detail">มหภาคแคนยอน ผู้นำเทียมทาน โอ้ยซังเต สุริยยาตร์โทรโฮมคอร์รัปชันเย้ว เอสเพรสโซพาสเจอร์ไรส์ เซอร์ไพรส์ดั๊มพ์รุมบ้าก่อนหน้า จิ๊กโปรเจ็กต์อุรังคธาตุ อินเตอร์เคส บ๊อกซ์จิ๊กโก๋วินแพ็ค สไตรค์พุดดิ้งนอมินีฮัม ว้อดก้าแบล็ควอร์รูมราเม็ง คีตกวีแฟล็ตปิกอัพฟลุต เสกสรรค์ ละตินชนะเลิศกุนซือบู๊ บุ๋นด็อกเตอร์เอ๋ โฮมสมิติเวชแครกเกอร์อุตสาหการต่อยอด</p><a class="readmore" href="<?php echo site_url('news-detail');?>">อ่านบทความ</a>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="block-wrapper"><a href="<?php echo site_url('news-detail');?>">
                  <div class="responsive-img-sm"><img src="<?php echo base_url('public');?>/images/thumbnail.png" alt=""></div></a><a class="title" href="<?php echo site_url('news-detail');?>">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                <h4 class="publish-date">26 มกราคม 2561 | News</h4>
                <p class="detail">มหภาคแคนยอน ผู้นำเทียมทาน โอ้ยซังเต สุริยยาตร์โทรโฮมคอร์รัปชันเย้ว เอสเพรสโซพาสเจอร์ไรส์ เซอร์ไพรส์ดั๊มพ์รุมบ้าก่อนหน้า จิ๊กโปรเจ็กต์อุรังคธาตุ อินเตอร์เคส บ๊อกซ์จิ๊กโก๋วินแพ็ค สไตรค์พุดดิ้งนอมินีฮัม ว้อดก้าแบล็ควอร์รูมราเม็ง คีตกวีแฟล็ตปิกอัพฟลุต เสกสรรค์ ละตินชนะเลิศกุนซือบู๊ บุ๋นด็อกเตอร์เอ๋ โฮมสมิติเวชแครกเกอร์อุตสาหการต่อยอด</p><a class="readmore" href="<?php echo site_url('news-detail');?>">อ่านบทความ</a>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="block-wrapper"><a href="<?php echo site_url('news-detail');?>">
                  <div class="responsive-img-sm"><img src="<?php echo base_url('public');?>/images/thumbnail.png" alt=""></div></a><a class="title" href="<?php echo site_url('news-detail');?>">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                <h4 class="publish-date">26 มกราคม 2561 | News</h4>
                <p class="detail">มหภาคแคนยอน ผู้นำเทียมทาน โอ้ยซังเต สุริยยาตร์โทรโฮมคอร์รัปชันเย้ว เอสเพรสโซพาสเจอร์ไรส์ เซอร์ไพรส์ดั๊มพ์รุมบ้าก่อนหน้า จิ๊กโปรเจ็กต์อุรังคธาตุ อินเตอร์เคส บ๊อกซ์จิ๊กโก๋วินแพ็ค สไตรค์พุดดิ้งนอมินีฮัม ว้อดก้าแบล็ควอร์รูมราเม็ง คีตกวีแฟล็ตปิกอัพฟลุต เสกสรรค์ ละตินชนะเลิศกุนซือบู๊ บุ๋นด็อกเตอร์เอ๋ โฮมสมิติเวชแครกเกอร์อุตสาหการต่อยอด</p><a class="readmore" href="<?php echo site_url('news-detail');?>">อ่านบทความ</a>
              </div>
            </div> -->
          </div>
          <div class="paginage" style="display: none;"><a href=""><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></a>
            <ul>
              <li><a href="">1</a></li>
              <li><a href="">2</a></li>
              <li><a href="">3</a></li>
            </ul><a href=""><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="box-sub">
                <h2>NEWS</h2><a href="<?php echo site_url('news');?>"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
              </div>

              <?php foreach($news['News']['data']['data'] as $n => $v):?>
              <div class="block-wrapper half">
                <div class="row">
                  <div class="col-xs-6">
                    <a href="<?php echo site_url('news/'.$v['category']['_id'].'/'.$v['_id']);?>">
                      <div class="responsive-img-sm"><img src="<?php echo $v['image']['thumbnail'];?>" alt=""></div></a></div>
                  <div class="col-xs-6">
                    <div class="text-wrapper"><a class="title" href="<?php echo site_url('news-detail');?>"><?php echo $v['title'];?></a>
                      <h4 class="publish-date"><?php echo date('d m Y', strtotime($v[
                        'create_date']));?> | News</h4>
                      <p class="detail"><?php echo $v['subtitle'];?></p><a class="readmore" href="<?php echo site_url('news/'.$v['category']['_id'].'/'.$v['_id']);?>">อ่านบทความ</a>
                    </div>
                  </div>
                </div>
              </div>
              <?php endforeach;?>


              <!-- <div class="block-wrapper half">
                <div class="row">
                  <div class="col-xs-6"><a href="<?php echo site_url('news-detail');?>">
                      <div class="responsive-img-sm"><img src="<?php echo base_url('public');?>/images/thumbnail.png" alt=""></div></a></div>
                  <div class="col-xs-6">
                    <div class="text-wrapper"><a class="title" href="<?php echo site_url('news-detail');?>">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                      <h4 class="publish-date">26 มกราคม 2561 | News</h4>
                      <p class="detail">มหภาคแคนยอน ผู้นำเทียมทาน โอ้ยซังเต สุริยยาตร์โทรโฮมคอร์รัปชันเย้ว เอสเพรสโซพาสเจอร์ไรส์ เซอร์ไพรส์ดั๊มพ์รุมบ้าก่อนหน้า จิ๊กโปรเจ็กต์อุรังคธาตุ อินเตอร์เคส บ๊อกซ์จิ๊กโก๋วินแพ็ค สไตรค์พุดดิ้งนอมินีฮัม ว้อดก้าแบล็ควอร์รูมราเม็ง คีตกวีแฟล็ตปิกอัพฟลุต เสกสรรค์ ละตินชนะเลิศกุนซือบู๊ บุ๋นด็อกเตอร์เอ๋ โฮมสมิติเวชแครกเกอร์อุตสาหการต่อยอด</p><a class="readmore" href="<?php echo site_url('news-detail');?>">อ่านบทความ</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="block-wrapper half">
                <div class="row">
                  <div class="col-xs-6"><a href="<?php echo site_url('news-detail');?>">
                      <div class="responsive-img-sm"><img src="<?php echo base_url('public');?>/images/thumbnail.png" alt=""></div></a></div>
                  <div class="col-xs-6">
                    <div class="text-wrapper"><a class="title" href="<?php echo site_url('news-detail');?>">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                      <h4 class="publish-date">26 มกราคม 2561 | News</h4>
                      <p class="detail">มหภาคแคนยอน ผู้นำเทียมทาน โอ้ยซังเต สุริยยาตร์โทรโฮมคอร์รัปชันเย้ว เอสเพรสโซพาสเจอร์ไรส์ เซอร์ไพรส์ดั๊มพ์รุมบ้าก่อนหน้า จิ๊กโปรเจ็กต์อุรังคธาตุ อินเตอร์เคส บ๊อกซ์จิ๊กโก๋วินแพ็ค สไตรค์พุดดิ้งนอมินีฮัม ว้อดก้าแบล็ควอร์รูมราเม็ง คีตกวีแฟล็ตปิกอัพฟลุต เสกสรรค์ ละตินชนะเลิศกุนซือบู๊ บุ๋นด็อกเตอร์เอ๋ โฮมสมิติเวชแครกเกอร์อุตสาหการต่อยอด</p><a class="readmore" href="<?php echo site_url('news-detail');?>">อ่านบทความ</a>
                    </div>
                  </div>
                </div>
              </div> -->
            </div>
            <div class="col-md-6">
              <div class="box-sub">
                <h2>EVENT</h2><a href="<?php echo site_url('news-event');?>"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
              </div>

              <?php foreach($news['Events']['data']['data'] as $n => $v):?>
              <div class="block-wrapper half">
                <div class="row">
                  <div class="col-xs-6">
                    <a href="<?php echo site_url('news/'.$v['category']['_id'].'/'.$v['_id']);?>">
                      <div class="responsive-img-sm"><img src="<?php echo $v['image']['thumbnail'];?>" alt=""></div></a></div>
                  <div class="col-xs-6">
                    <div class="text-wrapper"><a class="title" href="<?php echo site_url('news-detail');?>"><?php echo $v['title'];?></a>
                      <h4 class="publish-date"><?php echo date('d m Y', strtotime($v[
                        'create_date']));?> | News</h4>
                      <p class="detail"><?php echo $v['subtitle'];?></p><a class="readmore" href="<?php echo site_url('news/'.$v['category']['_id'].'/'.$v['_id']);?>">อ่านบทความ</a>
                    </div>
                  </div>
                </div>
              </div>
              <?php endforeach;?>


              <!-- <div class="block-wrapper half">
                <div class="row">
                  <div class="col-xs-6"><a href="<?php echo site_url('news-detail');?>">
                      <div class="responsive-img-sm noreadmore"><img src="<?php echo base_url('public');?>/images/thumbnail.png" alt=""></div></a></div>
                  <div class="col-xs-6">
                    <div class="text-wrapper"><a class="title" href="<?php echo site_url('news-detail');?>">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                      <h4 class="publish-date">26 มกราคม 2561 | News</h4>
                      <p class="detail">มหภาคแคนยอน ผู้นำเทียมทาน โอ้ยซังเต สุริยยาตร์โทรโฮมคอร์รัปชันเย้ว เอสเพรสโซพาสเจอร์ไรส์ เซอร์ไพรส์ดั๊มพ์รุมบ้าก่อนหน้า จิ๊กโปรเจ็กต์อุรังคธาตุ อินเตอร์เคส บ๊อกซ์จิ๊กโก๋วินแพ็ค สไตรค์พุดดิ้งนอมินีฮัม ว้อดก้าแบล็ควอร์รูมราเม็ง คีตกวีแฟล็ตปิกอัพฟลุต เสกสรรค์ ละตินชนะเลิศกุนซือบู๊ บุ๋นด็อกเตอร์เอ๋ โฮมสมิติเวชแครกเกอร์อุตสาหการต่อยอด</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="block-wrapper half">
                <div class="row">
                  <div class="col-xs-6"><a href="<?php echo site_url('news-detail');?>">
                      <div class="responsive-img-sm noreadmore"><img src="<?php echo base_url('public');?>/images/thumbnail.png" alt=""></div></a></div>
                  <div class="col-xs-6">
                    <div class="text-wrapper"><a class="title" href="<?php echo site_url('news-detail');?>">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                      <h4 class="publish-date">26 มกราคม 2561 | News</h4>
                      <p class="detail">มหภาคแคนยอน ผู้นำเทียมทาน โอ้ยซังเต สุริยยาตร์โทรโฮมคอร์รัปชันเย้ว เอสเพรสโซพาสเจอร์ไรส์ เซอร์ไพรส์ดั๊มพ์รุมบ้าก่อนหน้า จิ๊กโปรเจ็กต์อุรังคธาตุ อินเตอร์เคส บ๊อกซ์จิ๊กโก๋วินแพ็ค สไตรค์พุดดิ้งนอมินีฮัม ว้อดก้าแบล็ควอร์รูมราเม็ง คีตกวีแฟล็ตปิกอัพฟลุต เสกสรรค์ ละตินชนะเลิศกุนซือบู๊ บุ๋นด็อกเตอร์เอ๋ โฮมสมิติเวชแครกเกอร์อุตสาหการต่อยอด</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="block-wrapper half">
                <div class="row">
                  <div class="col-xs-6"><a href="<?php echo site_url('news-detail');?>">
                      <div class="responsive-img-sm noreadmore"><img src="<?php echo base_url('public');?>/images/thumbnail.png" alt=""></div></a></div>
                  <div class="col-xs-6">
                    <div class="text-wrapper"><a class="title" href="<?php echo site_url('news-detail');?>">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                      <h4 class="publish-date">26 มกราคม 2561 | News</h4>
                      <p class="detail">มหภาคแคนยอน ผู้นำเทียมทาน โอ้ยซังเต สุริยยาตร์โทรโฮมคอร์รัปชันเย้ว เอสเพรสโซพาสเจอร์ไรส์ เซอร์ไพรส์ดั๊มพ์รุมบ้าก่อนหน้า จิ๊กโปรเจ็กต์อุรังคธาตุ อินเตอร์เคส บ๊อกซ์จิ๊กโก๋วินแพ็ค สไตรค์พุดดิ้งนอมินีฮัม ว้อดก้าแบล็ควอร์รูมราเม็ง คีตกวีแฟล็ตปิกอัพฟลุต เสกสรรค์ ละตินชนะเลิศกุนซือบู๊ บุ๋นด็อกเตอร์เอ๋ โฮมสมิติเวชแครกเกอร์อุตสาหการต่อยอด</p>
                    </div>
                  </div>
                </div>
              </div> -->
            </div>
          </div>
        </div>
      </section>
