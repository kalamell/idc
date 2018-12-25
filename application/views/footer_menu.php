<footer>
        <div class="container">
          <div class="row">
            <div class="col-sm-4">
              <div class="block-wrapper social">
                <h3 class="title">CONTACT US</h3>
                <ul>
                  <li><a href="https://www.facebook.com/dip.bisd">
                      <div class="img-wrapper"><img src="<?php echo base_url();?>public/images/fb-footer-icon.png" alt=""></div><span>/dip.bisd</span></a></li>
                  <li><a href="mailto:thaiidc.dcr@gmail.com">
                      <div class="img-wrapper"><img src="<?php echo base_url();?>public/images/email-footer-icon.png" alt=""></div><span> thaiidc.dcr@gmail.com</span></a></li>
                  <li><a href="tel:022024414">
                      <div class="img-wrapper"><img src="<?php echo base_url();?>public/images/tel-footer-icon.png" alt=""></div><span>02-202-4414-18</span></a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="block-wrapper">
                <h3 class="title">CATEGORIES</h3>
                <ul>
                  <li><a href="<?php echo site_url('knowledge');?>">KNOWLEDGE</a></li>
                  <li><a href="http://www.designernetwork.in.th/designer">FIND DESIGNER </a></li>
                  <li><a href="<?php echo site_url('find-producer');?>">FIND PRODUCER</a></li>
                  <li><a href="<?php echo site_url('find-supplier');?>">FIND SUPPLIER</a></li>
                  <li><a href="<?php echo site_url('news');?>">NEWS&EVENT</a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="block-wrapper">
                <h3 class="title">SERVICE</h3>
                <ul>
                  <li><a href="<?php echo site_url('agency');?>">COLLABORATION AGENCY</a></li>
                  <li><a href="<?php echo site_url('training');?>">TRAINING</a></li>
                  <li><a href="<?php echo site_url('counseling');?>">COUNSELING</a></li>
                  <li><a href="<?php echo site_url('privacy-policy');?>">PRIVACY POLICY</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="copyright"> 
          <p>© 2018 THAI-IDC (Thailand Industrail Design Center). All right reserved</p>
        </div>
      </footer>

      <!-- edit profile Modal-->
      <div class="modal fade" id="editProfileModal" tabindex="-1" role="dialog" aria-labelledby="editProfileModalLabel">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="<?php echo base_url('public');?>/images/close-modal.png" alt=""></span></button>
            </div>
            <div class="modal-body">
              <div class="headtext">
                <h2>แก้ไขข้อมูล</h2>
              </div>
              <div class="form-wrapper editprofile">
                <label class="labelInput" for="username">Username</label>
                <input name="username" type="text" placeholder="Username" value="Thanyamane">
                <label class="labelInput" for="description">คำอธิบาย</label>
                <textarea name="description" placeholder="คำอธิบาย">ร้านธัญญมณี บริษัท เอสเอสเอ็น เซลแอนด์ ดิสทริบิวชั่น จำกัด จำหน่ายและผลิตอัญมณีและเครื่องประดับแท้จากช่างฝีมือโดยผ่านการรับรองคุณภาพสินค้าจาก</textarea>
                <button type="submit"> <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>บันทึกข้อมูล</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- edit Portfolio Modal-->
      <div class="modal fade" id="editPortfolioModal" tabindex="-1" role="dialog" aria-labelledby="editPortfolioModalLabel">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="<?php echo base_url('public');?>/images/close-modal.png" alt=""></span></button>
            </div>
            <div class="modal-body">
              <div class="headtext">
                <h2>ผลงาน</h2>
                <div class="pagemeModal-wrapper">
                  <div class="row">
                    <div class="col-md-6">
                      <form class="uploader" id="file-upload-form">
                        <input id="file-upload" type="file" name="fileUpload" accept="image/*">
                        <label id="file-drag" for="file-upload"><img class="hidden" id="file-image" src="#" alt="Preview">
                          <div id="start"><img src="<?php echo base_url('public');?>/images/upload-img-icon.png" alt="">
                            <div class="upload-text">อัพโหลดรูปภาพ</div>
                            <div class="hidden" id="notimage">กรุณาเลือกรูปภาพ</div><span>ขนาดภาพมากกว่า 2000 X 2000 px</span>
                          </div>
                          <div class="hidden" id="response">
                            <div id="messages"></div>
                            <progress class="progress" id="file-progress" value="0"><span>0</span>%</progress>
                          </div>
                        </label>
                      </form>
                    </div>
                    <div class="col-md-6 notpad-left">
                      <div class="form-wrapper editPortfolio">
                        <input name="username" type="text" placeholder="ชื่อผลงาน">
                        <select name="portfolioType">
                          <option value="0" disabled selected>ประเภทผลงาน</option>
                          <option value="1">graphic designer</option>
                          <option value="2">costumer designer</option>
                          <option value="3">fashion designer</option>
                          <option value="4">fashion styling</option>
                          <option value="5">textile designer</option>
                          <option value="6">graphic designer</option>
                          <option value="7">costumer designer</option>
                          <option value="8">fashion designer</option>
                          <option value="9">fashion styling</option>
                          <option value="10">textile designer</option>
                          <option value="11">graphic designer</option>
                          <option value="12">costumer designer</option>
                          <option value="13">fashion designer</option>
                          <option value="14">fashion styling</option>
                          <option value="15">textile designer</option>
                          <option value="16">graphic designer</option>
                        </select>
                        <textarea name="description" placeholder="รายละเอียดผลงาน"></textarea>
                        <div class="row">
                          <div class="col-sm-6">
                            <label class="calendarInput" for="designDate">
                              <input name="designDate" type="date" placeholder="วันที่ออกแบบ"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                            </label>
                          </div>
                          <div class="col-sm-6">
                            <label class="calendarInput" for="produceDate">
                              <input name="produceDate" type="date" placeholder="วันที่ผลิต"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-sm-offset-3">
                      <div class="row">
                        <div class="col-sm-6">
                          <button type="submit"> <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>บันทึกข้อมูล</button>
                        </div>
                        <div class="col-sm-6 notpad-left">
                          <button type="reset"> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>ลบข้อมูล</button>
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
      
      <!-- edit Product Modal-->
      <div class="modal fade" id="editProductModal" tabindex="-1" role="dialog" aria-labelledby="editProductModalLabel">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="<?php echo base_url('public');?>/images/close-modal.png" alt=""></span></button>
            </div>
            <div class="modal-body">
              <div class="headtext">
                <h2>สินค้า</h2>
                <div class="pagemeModal-wrapper">
                  <div class="row">
                    <div class="col-md-6">
                      <form class="uploader" id="file-upload-form">
                        <input id="file-upload" type="file" name="fileUpload" accept="image/*">
                        <label id="file-drag" for="file-upload"><img class="hidden" id="file-image" src="#" alt="Preview">
                          <div id="start"><img src="<?php echo base_url('public');?>/images/upload-img-icon.png" alt="">
                            <div class="upload-text">อัพโหลดรูปภาพ</div>
                            <div class="hidden" id="notimage">กรุณาเลือกรูปภาพ</div><span>ขนาดภาพมากกว่า 2000 X 2000 px</span>
                          </div>
                          <div class="hidden" id="response">
                            <div id="messages"></div>
                            <progress class="progress" id="file-progress" value="0"><span>0</span>%</progress>
                          </div>
                        </label>
                      </form>
                    </div>
                    <div class="col-md-6 notpad-left">
                      <div class="form-wrapper editPortfolio">
                        <input name="username" type="text" placeholder="ชื่อสินค้า">
                        <select name="portfolioType">
                          <option value="0" disabled selected>ประเภทสินค้า</option>
                          <option value="1">graphic designer</option>
                          <option value="2">costumer designer</option>
                          <option value="3">fashion designer</option>
                          <option value="4">fashion styling</option>
                          <option value="5">textile designer</option>
                          <option value="6">graphic designer</option>
                          <option value="7">costumer designer</option>
                          <option value="8">fashion designer</option>
                          <option value="9">fashion styling</option>
                          <option value="10">textile designer</option>
                          <option value="11">graphic designer</option>
                          <option value="12">costumer designer</option>
                          <option value="13">fashion designer</option>
                          <option value="14">fashion styling</option>
                          <option value="15">textile designer</option>
                          <option value="16">graphic designer</option>
                        </select>
                        <textarea name="description" placeholder="รายละเอียดสินค้า"></textarea>
                        <div class="row">
                          <div class="col-sm-6">
                            <label class="calendarInput" for="designDate">
                              <input name="designDate" type="date" placeholder="วันที่ออกแบบ"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                            </label>
                          </div>
                          <div class="col-sm-6">
                            <label class="calendarInput" for="produceDate">
                              <input name="produceDate" type="date" placeholder="วันที่ผลิต"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                            </label>
                          </div>
                        </div>
                        <input name="username" type="text" placeholder="ราคา">
                      </div>
                    </div>
                    <div class="col-sm-6 col-sm-offset-3">
                      <div class="row">
                        <div class="col-sm-6">
                          <button type="submit"> <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>บันทึกข้อมูล</button>
                        </div>
                        <div class="col-sm-6 notpad-left">
                          <button type="reset"> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>ลบข้อมูล</button>
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
      <!-- edit Article Modal-->
      <div class="modal fade" id="editArticleModal" tabindex="-1" role="dialog" aria-labelledby="editArticleModalLabel">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="<?php echo base_url('public');?>/images/close-modal.png" alt=""></span></button>
            </div>
            <div class="modal-body">
              <div class="headtext">
                <h2>บทความ</h2>
                <div class="pagemeModal-wrapper">
                  <div class="row">
                    <div class="col-md-6">
                      <form class="uploader" id="file-upload-form">
                        <input id="file-upload" type="file" name="fileUpload" accept="image/*">
                        <label id="file-drag" for="file-upload"><img class="hidden" id="file-image" src="#" alt="Preview">
                          <div id="start"><img src="<?php echo base_url('public');?>/images/upload-img-icon.png" alt="">
                            <div class="upload-text">อัพโหลดรูปภาพ</div>
                            <div class="hidden" id="notimage">กรุณาเลือกรูปภาพ</div><span>ขนาดภาพมากกว่า 2000 X 2000 px</span>
                          </div>
                          <div class="hidden" id="response">
                            <div id="messages"></div>
                            <progress class="progress" id="file-progress" value="0"><span>0</span>%</progress>
                          </div>
                        </label>
                      </form>
                    </div>
                    <div class="col-md-6 notpad-left">
                      <div class="form-wrapper editPortfolio">
                        <input name="username" type="text" placeholder="หัวข้อบทความ">
                        <select name="portfolioType">
                          <option value="0" disabled selected>ประเภทบทความ</option>
                          <option value="1">graphic designer</option>
                          <option value="2">costumer designer</option>
                          <option value="3">fashion designer</option>
                          <option value="4">fashion styling</option>
                          <option value="5">textile designer</option>
                          <option value="6">graphic designer</option>
                          <option value="7">costumer designer</option>
                          <option value="8">fashion designer</option>
                          <option value="9">fashion styling</option>
                          <option value="10">textile designer</option>
                          <option value="11">graphic designer</option>
                          <option value="12">costumer designer</option>
                          <option value="13">fashion designer</option>
                          <option value="14">fashion styling</option>
                          <option value="15">textile designer</option>
                          <option value="16">graphic designer</option>
                        </select>
                        <textarea name="description" placeholder="เกี่ยวกับบทความ"></textarea>
                        <div class="articleTag-wrapper">
                          <div class="head-text">
                            <h3>Tag บาทความ<span>*กรุณาเลือกอย่างน้อย 1 รูปแบบ</span></h3>
                          </div>
                          <div class="checkbox-list-wrapper">
                            <div class="checkbox-wrapper sm">
                              <input class="cbx-inp hidden" id="cb1" type="checkbox">
                              <label class="cbx text-center" for="cb1"></label><span>อุตสาหกรรมสิ่งทอ และเครื่องนุ่งห่ม</span>
                            </div>
                            <div class="checkbox-wrapper sm">
                              <input class="cbx-inp hidden" id="cb2" type="checkbox">
                              <label class="cbx text-center" for="cb2"></label><span>อุตสาหกรรมบรรจุภัณฑ์</span>
                            </div>
                            <div class="checkbox-wrapper sm">
                              <input class="cbx-inp hidden" id="cb3" type="checkbox">
                              <label class="cbx text-center" for="cb3"></label><span>อุตสาหกรรมพลาสติก</span>
                            </div>
                            <div class="checkbox-wrapper sm">
                              <input class="cbx-inp hidden" id="cb4" type="checkbox">
                              <label class="cbx text-center" for="cb4"></label><span>อุตสาหกรรมคอมโพสิท</span>
                            </div>
                            <div class="checkbox-wrapper sm">
                              <input class="cbx-inp hidden" id="cb5" type="checkbox">
                              <label class="cbx text-center" for="cb5"></label><span>อุตสาหกรรมเครื่องประดับ</span>
                            </div>
                            <div class="checkbox-wrapper sm">
                              <input class="cbx-inp hidden" id="cb6" type="checkbox">
                              <label class="cbx text-center" for="cb6"></label><span>อุตสาหกรรมเครื่องหนัง</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-sm-offset-3">
                      <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                          <button type="submit"> <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>บันทึกข้อมูล</button>
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
      <!-- edit Portfolio Modal-->
      <div class="modal fade" id="editIdeaModal" tabindex="-1" role="dialog" aria-labelledby="editIdeaModalLabel">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="<?php echo base_url('public');?>/images/close-modal.png" alt=""></span></button>
            </div>
            <div class="modal-body">
              <div class="headtext">
                <h2>ผลงาน</h2>
                <div class="pagemeModal-wrapper">
                  <div class="row">
                    <div class="col-md-6">
                      <form class="uploader" id="file-upload-form">
                        <input id="file-upload" type="file" name="fileUpload" accept="image/*">
                        <label id="file-drag" for="file-upload"><img class="hidden" id="file-image" src="#" alt="Preview">
                          <div id="start"><img src="<?php echo base_url('public');?>/images/upload-img-icon.png" alt="">
                            <div class="upload-text">อัพโหลดรูปภาพ</div>
                            <div class="hidden" id="notimage">กรุณาเลือกรูปภาพ</div><span>ขนาดภาพมากกว่า 2000 X 2000 px</span>
                          </div>
                          <div class="hidden" id="response">
                            <div id="messages"></div>
                            <progress class="progress" id="file-progress" value="0"><span>0</span>%</progress>
                          </div>
                        </label>
                      </form>
                    </div>
                    <div class="col-md-6 notpad-left">
                      <div class="form-wrapper editPortfolio">
                        <input name="username" type="text" placeholder="หัวข้อไอเดีย">
                        <textarea name="description" placeholder="รายละเอียดไอเดีย"></textarea>
                      </div>
                    </div>
                    <div class="col-sm-6 col-sm-offset-3">
                      <div class="row">
                        <div class="col-sm-6">
                          <button type="submit"> <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>บันทึกข้อมูล</button>
                        </div>
                        <div class="col-sm-6 notpad-left">
                          <button type="reset"> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>ลบข้อมูล</button>
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

      <!-- edit Article Modal-->
      <div class="modal fade" id="producerModal" tabindex="-1" role="dialog" aria-labelledby="producerModalLabel">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="supplierModal" tabindex="-1" role="dialog" aria-labelledby="supplierModalLabel">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          
        </div>
      </div>
    </div>

