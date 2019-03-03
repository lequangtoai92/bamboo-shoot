<div class="content-body container">
  <div class="row">
    <div class="content-sup col-md-9" id="firstTable">
      <input hidden id="input_type" v-model="input_type" value="<?php 
        if (isset($data['type_story'])){
          echo $data['type_story'];
        } else {
          echo 0;
        }
      ?>">
      <div class="item-in-here">
        <div class="item item-article" v-for="item in items">
          <!-- <div class="avatar">
          <a v-bind:href="'/bamboo-shoot/account/user?userName=1'">
            <img src="<?=base_url();?>html/images/avatar/mm.png">
          </a>
          <div class="bottom-avatar">
            <span class="star">****</span>
            <span class="position">cu ly</span>
            <span class="posts">123</span>
          </div>
        </div> -->

          <?php echo $this->load->view('include/article/article_home'); ?>

          <!-- <div class="info">
          <div class="meta-info">
            <div class="meta-info-name">
              <a v-bind:href="'/bamboo-shoot/account/user?userName=1'">{{item.BV154}}</a>
            </div>
            <div class="meta-info-time">
              <span>{{render_ddMMyyyy  (item.BV155)}}</span>
            </div>
          </div>

          <div class="title-info" v-on:click="goToContent(item.BV100)">
            <h4>{{item.BV150}}</h4>
            <div class="title-tag">
              <span>{{(item.BV158)}}</span>
            </div>
          </div>

          <div class="content-info">
            <p>{{item.BV153}}</p>
          </div>

          <div class="comment-info">
            <span class="comment-item">
              <i class="far fa-eye item-tooltip">
                <span class="tooltiptext">Số lượt xem</span>
              </i>(314)
            </span>
            <span class="comment-item">
              <i class="far fa-thumbs-up item-tooltip">
                <span class="tooltiptext">Lượt chọn hay</span>
              </i>(253)
            </span>
            <span class="comment-item">
              <i class="far fa-thumbs-down item-tooltip">
                <span class="tooltiptext">Lượt chọn chán</span>
              </i>(12)
            </span>
            <span class="comment-item">
              <i class="far fa-comment-dots item-tooltip">
                <span class="tooltiptext">Lượt bình luận</span>
              </i>(86)
            </span>
            <span class="comment-item">
              <i class="fas fa-exclamation-triangle item-tooltip">
                <span class="tooltiptext">Lượt báo cáo</span>
              </i>(7)
            </span>
          </div>
        </div> -->
          <hr class="hr-end">
        </div>
      </div>

    </div>
    <div class="content-sub col-md-3">
      <?php echo $this->load->view('include/article/item_right'); ?>
    </div>

  </div>
</div>