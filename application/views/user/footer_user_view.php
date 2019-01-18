    <div class="content-footer">
        <div class="row">
            <div class="col-3 footer-col footer-one">
                <h2>Liên kết</h2>
                <ul class="list-group">
                    <li class="li-footer">Facebook</li>
                    <li class="li-footer">Google</li>
                    <li class="li-footer">Youtube</li>
                </ul>
            </div>
            <div class="col-3 footer-col footer-two">
                <h2>Bản di động</h2>
                <ul class="list-group">
                    <li class="li-footer">Androi</li>
                    <li class="li-footer">IOS</li>
                </ul>
            </div>
            <div class="col-3 footer-col footer-three">
                <h2>Liên hệ</h2>
                <ul class="list-group">
                    <li class="li-footer">0927628492</li>
                    <li class="li-footer">toailq9229@gmail.com</li>
                </ul>
            </div>
            <div class="col-3 footer-col footer-four">
                <h2>Phản hồi</h2>
                <ul class="list-group">
                    <li class="li-footer">Phản hồi chất lượng</li>
                    <li class="li-footer">Góp ý - đánh giá</li>
                </ul>
            </div>
            <div class="address">
                <p></p>
                <p></p>
                <p></p>
            </div>
        </div>
    </div>
    <?php echo $this->load->view('include/dialog/dg_showContent'); ?>
    <?php echo $this->load->view('include/dialog/modify_password'); ?>
    <!-- <script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script> -->
    <script type="text/javascript" src="<?= base_url();?>html/dist/jquery/jquery-3.2.1.min.js" ></script>
    <script type="text/javascript" src="<?= base_url();?>html/dist/jquery/jquery-ui-1.12.1.min.js" ></script>
    <script type="text/javascript" src="<?= base_url();?>html/dist/bootstrap/js/bootstrap.min.js" ></script>
    <script type="text/javascript" src="<?= base_url();?>html/dist/tinymce/js/tinymce/tinymce.min.js" ></script>
    
    <!-- <script src="https://fb.me/react-0.14.3.min.js"></script>
    <script src="https://fb.me/react-with-addons-0.14.3.min.js"></script>
    <script src="https://fb.me/react-dom-0.14.3.min.js"></script> -->

    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>

    <script type="text/javascript" src="<?= base_url();?>html/dist/bootstrap/js/popper.min.js" ></script>
    <!-- <script type="text/javascript" src="<?= base_url();?>html/dist/knockoutjs/knockout-3.4.2.js" ></script> -->
    <script type="text/javascript" src="<?= base_url();?>html/dist/md5/md5.js"></script>
    <script type="text/javascript" src="<?= base_url();?>html/js/default.js" ></script>
    <script type="text/javascript" src="<?= base_url();?>html/js/module.menu.js" ></script>
    <script type="text/javascript" src="<?= base_url();?>html/js/module.login.js" ></script>
    <script type="text/javascript" src="<?= base_url();?>html/js/modules.pagination.js" ></script>
    
    <?php
    if(isset($script)){
        foreach ($script as $value) {
            echo '<script src="'.base_url().'html/js/'.$value.'.js"></script>';
        }
    }
    ?>
    </body>
</html>