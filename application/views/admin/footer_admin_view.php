<script src="<?= base_url();?>dist/jquery/jquery-3.2.1.min.js" ></script>
    <script src="<?= base_url();?>dist/jquery/jquery-ui-1.12.1.min.js" ></script>
    <script src="<?= base_url();?>dist/bootstrap/js/bootstrap.min.js" ></script>
    <script src="<?= base_url();?>dist/bootstrap/js/popper.min.js" ></script>
    <script src="<?= base_url();?>dist/knockoutjs/knockout-3.4.2.js" ></script>
    <script src="<?= base_url();?>dist/md5/md5.js"></script>
    <script src="<?= base_url();?>js/default.js" ></script>
    <script src="<?= base_url();?>js/module.menu.js" ></script>
    
    <?php
    if(isset($script)){
        foreach ($script as $value) {
            echo '<script src="'.base_url().'js/'.$value.'.js"></script>';
        }
    }
    ?>
    </body>
</html>