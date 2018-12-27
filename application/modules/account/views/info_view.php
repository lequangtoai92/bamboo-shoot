<div class="content-body container">
	<div class="row">
		<div class="content-sup col-md-9" id="content_item">
			<div class="header">
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
			</div>
			<div class="body">
				<h4>Tiểu sử</h4>
				<p id="inset_content"></p>
			</div>
			<div class=row>
				<div class="btn-to-fb col-md-6">
					<div class="fb-like"
						data-href="https://developers.facebook.com/docs/plugins/"
						data-layout="button_count" data-action="like"
						data-size="small" data-show-faces="true"
						data-share="true"></div>
				</div>
				<div class="btn-to-img col-md-6">
					<button class="btn btn-success">Hay</button>
					<button class="btn btn-warning">Chán</button>
				</div>
			</div>
			<hr>
			<div class="question">
				<h4>Các bài viết</h4>
				<div class="list-story">
					<div class="info">
						<div class="meta-info">
							<div class="meta-info-name">
								<a href="/u/nhantambin">{{item.BV154}}</a>
							</div>
							<div class="meta-info-time">
								<span>{{item.BV155}}</span>
							</div>
						</div>

						<div class="title-info" v-on:click="goToContent(item.BV100)">
							<h4>{{item.BV150}}</h4>
							<div class="title-tag">
								<span>{{item.BV158}}</span>
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
				</div>
			</div>
			<hr>
			<div class="footer">
				<h4>Bình luận</h4>
				<div class="comment">
					<h6>Nguyễn Văn A</h6>
					<p>Bài viết rất hay và có tính sáng tạo</p>
				</div>
				<div class="comment">
					<h6>Nguyễn Văn A</h6>
					<p>Tội nghiệp cho chú mèo con trong bài, toàn bị bạn bè ức
						hiếp</p>
				</div>
				<div class="comment">
					<h6>Nguyễn Văn A</h6>
					<p>Chú mèo thật là mạnh mẽ, đã đứng lên để bảo vệ bạn mèo
						đen khỏi bị ức hiếp của các bạn chó</p>
				</div>
				<div class="comment">
					<h6>Nguyễn Văn A</h6>
					<p>Bài viết được </p>
				</div>
			</div>
		</div>
		<div class="content-sub col-md-3">
			<p><img src="<?= base_url(); ?>images/image.jpg" height="310"
				width="255" alt="thẻ img" /></p>
		</div>

	</div>
</div>