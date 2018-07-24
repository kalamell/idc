<div class="modal-header">
  <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="<?php echo base_url('public');?>/images/close-modal.png" alt=""></span></button>
</div>
<div class="modal-body">
  <div class="block-modal-wrapper">
    <div class="row">
      <div class="col-md-6">
        <div class="slide-wrapper">
          <div class="slider slider-single">

            <?php foreach($rs['data'][0]['image_list'] as $img):?>
              <div class="img-wrapper"><img src="<?php echo $img['full'];?>" alt=""></div>
            <?php endforeach;?>

          </div>
          <div class="slider slider-nav">
            <?php foreach($rs['data'][0]['image_list'] as $img):?>
              <div class="img-wrapper"><img src="<?php echo $img['full'];?>" alt=""></div>
            <?php endforeach;?>
            
          </div>
          <div class="slide-nav"><span class="slide-prev glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="slide-next glyphicon glyphicon-chevron-right" aria-hidden="true"></span></div>
        </div>
      </div>
      <div class="col-md-6 notpad-left">
        <div class="text-detail">
          <h2><?php echo $rs['data'][0]['name'];?></h2>
          <p class="breadcrump">อุตสาหกรรมบรรจุภัณฑ์<span>></span>Paperbox</p>
          <p><?php echo $rs['data'][0]['detail'];?></p>
          <div class="divider"></div>
          <h2>สินค้าจากทางร้าน</h2>
          <div class="row shop-name">
            <div class="col-xs-8">
              <p><img src="<?php echo base_url('public');?>/images/retail-black-icon.png" alt=""><span><?php echo $rs['data'][0]['page']['name'];?></span></p>
            </div>
            <div class="col-xs-4"><a class="green-btn" href="">ดูโปรไฟล์</a></div>
          </div><a class="green-btn" href="">ติดต่อสอบถามข้อมูลหรือสั่งสินค้า</a>
          <div class="divider"></div>
          <h2>สินค้าอื่นของร้าน <?php echo $rs['data'][0]['page']['name'];?></h2>
          <div class="row other-product">
            <div class="col-xs-6 col-sm-3"><a class="product-wrapper" href="">
                <div class="img-wrapper"><img src="<?php echo base_url('public');?>/images/supplier-other-product.png" alt=""></div>
                <p class="product-name">กล่องอเนกประสงค์</p></a></div>
            <div class="col-xs-6 col-sm-3"><a class="product-wrapper" href="">
                <div class="img-wrapper"><img src="<?php echo base_url('public');?>/images/supplier-other-product.png" alt=""></div>
                <p class="product-name">กล่องอเนกประสงค์</p></a></div>
          </div>
          <div class="divider"></div>
          <h2>สินค้าอื่นในหมวด Paper box</h2>
          <div class="row other-product">
            <div class="col-xs-6 col-sm-3"><a class="product-wrapper" href="">
                <div class="img-wrapper"><img src="<?php echo base_url('public');?>/images/supplier-other-product.png" alt=""></div>
                <p class="product-name">กล่องอเนกประสงค์</p></a></div>
            <div class="col-xs-6 col-sm-3"><a class="product-wrapper" href="">
                <div class="img-wrapper"><img src="<?php echo base_url('public');?>/images/supplier-other-product.png" alt=""></div>
                <p class="product-name">กล่องอเนกประสงค์</p></a></div>
            <div class="col-xs-6 col-sm-3"><a class="product-wrapper" href="">
                <div class="img-wrapper"><img src="<?php echo base_url('public');?>/images/supplier-other-product.png" alt=""></div>
                <p class="product-name">กล่องอเนกประสงค์</p></a></div>
            <div class="col-xs-6 col-sm-3"><a class="product-wrapper" href="">
                <div class="img-wrapper"><img src="<?php echo base_url('public');?>/images/supplier-other-product.png" alt=""></div>
                <p class="product-name">กล่องอเนกประสงค์</p></a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>