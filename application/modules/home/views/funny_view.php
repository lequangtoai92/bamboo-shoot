<div class="content-body container">
  <div class="row">
    <div class="content-sup col-md-9" id="firstTable">
      <input hidden id="input_type" v-model="input_type" value="<?php 
        if (isset($data['type_story'])){
          echo $data['type_story'];
        }
      ?>">
      <div class="item item-in-here" v-for="item in items">
        <div class="avatar">
          <a href="/u/nhantambin">
            <img src="https://viblo.asia/images/mm.png">
          </a>
          <div class="bottom-avatar">
            <span class="star">****</span>
            <span class="position">cu ly</span>
            <span class="posts">123</span>
          </div>
        </div>

        <div class="info">
          <div class="meta-info">
            <div class="meta-info-name">
              <a href="/u/nhantambin">{{item.BV154}}</a>
            </div>
            <div class="meta-info-time">
              <span>{{render_ddMMyyyy  (item.BV155)}}</span>
            </div>
          </div>

          <div class="title-info" v-on:click="goToContent(item.BV100)">
            <h4>{{item.BV150}}</h4>
          </div>

          <div class="content-info">
            <p v-html="item.ND150"></p>
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
              </i>{{item.DG150}}
            </span>
            <span class="comment-item">
              <i class="far fa-thumbs-down item-tooltip">
                <span class="tooltiptext">Lượt chọn chán</span>
              </i>{{item.DG152}}
            </span>
            <span class="comment-item">
              <i class="far fa-comment-dots item-tooltip">
                <span class="tooltiptext">Lượt bình luận</span>
              </i>{{item.DG154}}
            </span>
            <span class="comment-item">
              <i class="fas fa-exclamation-triangle item-tooltip">
                <span class="tooltiptext">Lượt báo cáo</span>
              </i>(7)
            </span>
          </div>
        </div>
        <hr class="hr-end">
      </div>
    </div>
    <div class="content-sub col-md-3">
      <div class="item-right">
        <h4>Bảng vàng tác giả</h4>
        <a href="#">Nhẫn tâm bin</a>
        <a href="#">Mắt bão</a>
        <a href="#">Bão ảnh</a>
        <a href="#">Nanh trắng</a>
      </div>
      <p><img src="<?=base_url();?>html/images/image.jpg" height="310" width="255" alt="thẻ img" /></p>
      <div class="item-right">
          <h4>Bảng vàng tác phẩm</h4>
          <a href="#">Đồi thông 2 mộ</a>
          <a href="#">Đêm trong căn nhà hoang</a>
          <a href="#">Chú mèo cô đơn</a>
          <a href="#">2 con heo con</a>
        </div>
    </div>

  </div>
</div>