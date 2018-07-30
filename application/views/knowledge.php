

      <div class="search-wrapper-inside">
        <div class="container">
          <div class="search-field"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>
            <input type="text" placeholder="ค้นหาคลังรวมไอเดีย และเทรนด์" name="s"  value="<?php echo $this->input->get('s', TRUE);?>" id="txt-search">
          </div>
        </div>
      </div>

      <div class="banner"><img class="full-width" src="<?php echo base_url();?>public/images/knowledge-banner.jpg" alt=""></div>
      <section class="section-wrapper">
        <div class="container">
          <h2 class="header-text">knowledge</h2>
          <div class="box-sub">
            <h2>KNOWLEDGE</h2>
          </div>
          <div class="row equal">

            <?php 
            foreach($knowledge['data'][0]['knowledges'] as $k => $v) {
              ?>
              <div class="col-md-4 col-sm-6">
                <div class="block-wrapper">
                  <a href="<?php echo site_url('knowledge-detail/'.$v['category']['_id'].'/'.$v['_id']);?>">
                    <div class="responsive-img-sm"><img src="<?php echo $v['image']['thumbnail'];?>" alt=""></div></a><a class="title" href=""><?php echo $v['title'];?></a>
                  <h4 class="publish-date"><?php echo date('d/m/Y', strtotime($v['create_date']));?></h4>
                  <p class="detail"><?php echo $v['subtitle'];?></p><a class="readmore" href="<?php echo site_url('knowledge-detail/'.$v['_id']);?>">อ่านบทความ</a>
                </div>
              </div>

              

              <?php 
            }
            ?>

           

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
                <h2>TREND DESIGN</h2><a href="<?php echo site_url('knowledge-trend');?>"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
              </div>

              <?php $no = 1; foreach($knowledgecategory['Train Design'] as $k => $v):?>
              <div class="block-wrapper half">
                <div class="row">
                  <div class="col-xs-6"><a href="<?php echo site_url('knowledge-detail/'.$v['category']['_id'].'/'.$v['_id']);?>">
                      <div class="responsive-img-sm"><img src="<?php echo $v['image']['thumbnail'];?>" alt=""></div></a></div>
                  <div class="col-xs-6">
                    <div class="text-wrapper"><a class="title" href="<?php echo site_url('knowledge-detail/'.$v['category']['_id'].'/'.$v['_id']);?>"><?php echo $v['title'];?></a>
                      <h4 class="publish-date"><?php echo date('d m Y', strtotime($v['create_date']));?> | Knowledge</h4>
                      <p class="detail"><?php echo $v['subtitle'];?></p><a class="readmore" href="<?php echo site_url('knowledge-detail/'.$v['category']['_id'].'/'.$v['_id']);?>">อ่านบทความ</a>
                    </div>
                  </div>
                </div>
              </div>
              <?php if ($no == 5) {
                break;
              }
              ?>
            <?php $no++; endforeach;?>

            </div>

            <div class="col-md-6">
              <div class="box-sub">
                <h2>VIDEO</h2><a href="<?php echo site_url('knowledge-video');?>"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
              </div>

              <?php $no = 1; foreach($knowledgecategory['Video'] as $k => $v):?>
              <div class="block-wrapper half">
                <div class="row">
                  <div class="col-xs-6"><a href="<?php echo site_url('knowledge-detail/'.$v['category']['_id'].'/'.$v['_id']);?>">
                      <div class="responsive-img-sm"><img src="<?php echo $v['image']['thumbnail'];?>" alt=""></div></a></div>
                  <div class="col-xs-6">
                    <div class="text-wrapper"><a class="title" href="<?php echo site_url('knowledge-detail/'.$v['category']['_id'].'/'.$v['_id']);?>"><?php echo $v['title'];?></a>
                      <h4 class="publish-date"><?php echo date('d m Y', strtotime($v['create_date']));?> | Knowledge</h4>
                      <p class="detail"><?php echo $v['subtitle'];?></p><a class="readmore" href="<?php echo site_url('knowledge-detail/'.$v['category']['_id'].'/'.$v['_id']);?>">อ่านบทความ</a>
                    </div>
                  </div>
                </div>
              </div>
              <?php if ($no == 5) {
                break;
              }
              ?>
            <?php $no++; endforeach;?>
            </div>

            <div class="clearfix"></div>

            <div class="col-md-6">
              <div class="box-sub">
                <h2>TRAINING</h2><a href="<?php echo site_url('knowledge-training');?>"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
              </div>

              <?php $no = 1; foreach($knowledgecategory['Training'] as $k => $v):?>
              <div class="block-wrapper half">
                <div class="row">
                  <div class="col-xs-6"><a href="<?php echo site_url('knowledge-detail/'.$v['category']['_id'].'/'.$v['_id']);?>">
                      <div class="responsive-img-sm"><img src="<?php echo $v['image']['thumbnail'];?>" alt=""></div></a></div>
                  <div class="col-xs-6">
                    <div class="text-wrapper"><a class="title" href="<?php echo site_url('knowledge-detail/'.$v['category']['_id'].'/'.$v['_id']);?>"><?php echo $v['title'];?></a>
                      <h4 class="publish-date"><?php echo date('d m Y', strtotime($v['create_date']));?> | Knowledge</h4>
                      <p class="detail"><?php echo $v['subtitle'];?></p><a class="readmore" href="<?php echo site_url('knowledge-detail/'.$v['category']['_id'].'/'.$v['_id']);?>">อ่านบทความ</a>
                    </div>
                  </div>
                </div>
              </div>
              <?php if ($no == 5) {
                break;
              }
              ?>
            <?php $no++; endforeach;?>
            </div>


          </div>
        </div>
      </section>
      
