<div class="content-body container">
  <div class="row">
    <div class="content-sup col-md-9" id="firstTable">
      <input hidden id="input_type" v-model="input_type" value="<?php 
        if (isset($data['type_story'])){
          echo $data['type_story'];
        }
      ?>">
      <div class="item-in-here">
      <div class="item item-article" v-for="item in items">
      <?php echo $this->load->view('include/article/article_home'); ?>
        <hr class="hr-end">
      </div>
      </div>
    </div>
    <div class="content-sub col-md-3">
      <?php echo $this->load->view('include/article/item_right'); ?>
    </div>

  </div>
</div>