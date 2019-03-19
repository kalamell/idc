      <div class="search-wrapper-inside">
        <div class="container">
          <div class="search-field"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>
            <input type="text" placeholder="ค้นหาชื่อโปรไฟล์ประเภทงาน">
          </div>
        </div>
      </div>
      <section class="section-wrapper">
        <div class="container">
          <?php echo form_open('counseling/do_submit');?>
          <h2 class="header-text">ขอคำปรึกษา</h2>
          <div class="row">
            <div class="col-md-6">
              <div class="consultation-wrapper">
                <div class="gray-label"> 
                  <h2>GET FREE CONSULTATION</h2>
                </div>
                <p class="detail">ทางทีมงาน Designer Network ยินดีให้คำปรึกษาแก่ท่านผู้สนใจ นักออกแบบ ผู้เชี่ยวชาญ และผู้ผลิตทุกท่าน หากท่านต้องการคำปรึกษาจากเรา ไม่ว่าจะเป็นเรื่องงานออกแบบ เทคโนโลยี ข้อมูลอุตสาหกรรมการออกแบบ ช่องทางการทำการตลาดเป็นต้น ท่านสามารถกรอกข้อมูลเพื่อรับบริการให้คำปรึกษาได้ที่นี่ หรือที่ Line @whx4725g (มี @ ด้านหน้า) </p><img class="qrcode img-responsive" src="<?php echo base_url();?>public/images/qrcode.png" alt="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="consult-form-wrapper">
                <div class="row">
                  <div class="col-sm-2">
                    <label for="fullname">ชื่อ-นามสกุล</label>
                  </div>
                  <div class="col-sm-10">
                    <input id="fullname" name="fullname" type="text" placeholder="ชื่อ-นามสกุล">
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-2">
                    <label for="email">อีเมล์</label>
                  </div>
                  <div class="col-sm-10">
                    <input id="email" name="email" type="text" placeholder="example@gmail.com">
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-2">
                    <label for="tel">เบอร์ติดต่อ</label>
                  </div>
                  <div class="col-sm-4">
                    <input id="tel" name="mobile" maxlength="10" type="text" placeholder="08XXXXXXXX">
                  </div>
                  <div class="col-sm-2 notpad-right">
                    <label for="lineID">LINE</label>
                  </div>
                  <div class="col-sm-4 notpad-left">
                    <input id="lineID" name="line" type="text" placeholder="LINE ID">
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-2">
                    <label for="subject">หัวข้อ</label>
                  </div>
                  <div class="col-sm-10">
                    <textarea id="subject" name="subject" rows="10" placeholder="ข้อความ"></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-offset-2 col-sm-5">
                    <button type="submit" class="btn-send">ส่งคำปรึกษา</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php echo form_close();?>
        </div>
      </section>

      <?php if ($this->session->flashdata('send')):?>
      <script>
        alert('ส่งข้อมูลเรียบร้อย')
      </script>
      <?php endif;?>