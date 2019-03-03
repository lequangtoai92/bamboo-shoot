<div class="content-body container">
  <div class="row">
    <div class="content-sup col-md-9" id="introView">
      <div class="item item-intro" v-for="item in items">
        <div class="info">
          <div class="title-info" v-on:click="goToContent(item.BV100)">
            <h4>{{item.BV150}}</h4>
          </div>

          <div class="content-info">
            <p>{{item.BV153}}</p>
          </div>

        </div>
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