    
    <div class="content-footer">
        <div class="row">
            <div class="col-8 footer-col footer-one">
                <p>Liên hệ: toailq9229@gmail.com - 0927628492</p>
            </div>
            <div class="col-2 footer-col footer-two">
                <h2 href="<?php echo base_url() . 'intro' ?>">Giới thiệu</h2>
            </div>
        </div>
    </div>
    <?php echo $this->load->view('include/dialog/dg_login'); ?>
    <!-- <script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script> -->
    <script type="text/javascript" src="<?= base_url();?>html/dist/jquery/jquery-3.2.1.min.js" ></script>
    <script type="text/javascript" src="<?= base_url();?>html/dist/jquery/jquery-ui-1.12.1.min.js" ></script>
    <script type="text/javascript" src="<?= base_url();?>html/dist/bootstrap/js/bootstrap.min.js" ></script>
    <script type="text/javascript" src="<?= base_url();?>html/dist/bootstrap/js/popper.min.js" ></script>
    <script type="text/javascript" src="<?= base_url();?>html/dist/tinymce/js/tinymce/tinymce.min.js" ></script>
    
    <!-- <script src="https://fb.me/react-0.14.3.min.js"></script>
    <script src="https://fb.me/react-with-addons-0.14.3.min.js"></script>
    <script src="https://fb.me/react-dom-0.14.3.min.js"></script> -->

    <!-- <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script> -->
    <script type="text/javascript" src="<?= base_url();?>html/dist/vue/vue.js"></script>

    <script type="text/javascript" src="<?= base_url();?>html/dist/bootstrap/js/popper.min.js" ></script>
    <!-- <script type="text/javascript" src="<?= base_url();?>html/dist/knockoutjs/knockout-3.4.2.js" ></script> -->
    <script type="text/javascript" src="<?= base_url();?>html/dist/md5/md5.js"></script>
    <script type="text/javascript" src="<?= base_url();?>html/js/default.js" ></script>
    <script type="text/javascript" src="<?= base_url();?>html/js/module.menu.js" ></script>
    <script type="text/javascript" src="<?= base_url();?>html/js/module.login.js" ></script>
    <script type="text/javascript" src="<?= base_url();?>html/js/modules.pagination.js" ></script>
    <!-- <script type="text/javascript" src="<?= base_url();?>html/js/module.home.vue" ></script> -->
    
    <?php
    if(isset($script)){
        foreach ($script as $value) {
            echo '<script src="'.base_url().'html/js/'.$value.'.js"></script>';
        }
    }
    ?>
    </body>
</html>