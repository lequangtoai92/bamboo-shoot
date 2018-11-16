    <script src="<?= base_url();?>html/dist/jquery/jquery-3.2.1.min.js" ></script>
    <script src="<?= base_url();?>html/dist/jquery/jquery-ui-1.12.1.min.js" ></script>
    <script src="<?= base_url();?>html/dist/bootstrap/js/bootstrap.min.js" ></script>
    <script src="<?= base_url();?>html/dist/knockoutjs/knockout-3.4.2.js" ></script>
    <script src="<?= base_url();?>html/dist/md5/md5.js"></script>
    <script src="<?= base_url();?>html/js/default.js" ></script>
    <script src="<?= base_url();?>html/js/modules.menu.js" ></script>
    
    <?php
    if(isset($script)){
        foreach ($script as $value) {
            echo '<script src="'.base_url().'html/js/'.$value.'.js"></script>';
        }
    }
    ?>
    </body>
</html>