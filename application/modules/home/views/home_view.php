<div class="content-body container">
  <div class="row">
    <div class="content-sup col-md-9" id="firstTable">

      <div class="item" v-for="item in items">
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
              <!-- <span>{{item.BV155}}</span>setTime(item.BV155) -->
            </div>
          </div>

          <div class="title-info" v-on:click="goToContent(item.BV100)">
            <h4>{{item.BV150}}</h4>
            <div class="title-tag">
              <span>{{rendder_virtues(item.BV158)}}</span>
              <!-- <span>thông minh</span> -->
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
        </div>
        <hr class="hr-end">
      </div>
    </div>
    <div class="content-sub col-md-3">
      <p><img src="<?=base_url();?>images/image.jpg" height="310" width="255"
        alt="thẻ img" /></p>
    </div>

  </div>
</div>