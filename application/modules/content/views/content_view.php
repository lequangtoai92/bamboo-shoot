<div class="content-body container">
    <div class="row" id="content_item">
        <div class="content-sup col-md-9" v-for="item in items">
            <div class="header">
                <h2>{{item.BV150}}</h2>
            </div>
            <div class="body">
                <div class="img-first"><img src="<?= base_url(); ?>images/image.jpg" /></div>
                <p v-html="item.ND150"></p>
                <div class="author">
                    <span>{{item.BV154}} - {{item.BV156}}</span>
                </div>
            </div>
            <div class=row>
                <div class="btn-to-fb col-md-6">
                    <!-- <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="standard" -->
                    <div class="fb-like" data-href="https://docsach.000webhostapp.com/content?storyId=16" data-layout="standard"
                        data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                </div>
                <div class="btn-to-img col-md-6">
                    <button class="btn btn-success">Hay</button>
                    <button class="btn btn-warning">Chán</button>
                    <!-- <button class="btn btn-info">Hình ảnh trong bài</button> -->
                </div>
            </div>
            <hr>
            <div class="question">
                <h4>Các câu hỏi mẹ có thể hỏi và trả lời với con</h4>
                <div class="auto-question" v-for="question in listQuestion">
                    <h6>{{question.CH150}}</h6>
                    <p>{{question.CH151}}</p>
                </div>
                <!-- <div class="auto-question">
                    <h6>2. Bạn chó đã làm gì bạn mèo đen?</h6>
                    <p>Bạn chó đã lấy thức ăn của mèo đen, không cho mèo đen ăn cơm trưa, làm cho bạn mèo bị đói bụng</p>
                </div>
                <div class="auto-question">
                    <h6>3. Bạn mèo trắng đã làm gì để giúp bạn mèo đen?</h6>
                    <p>Bạn mèo trắng đã đứng ra bảo vệ mèo đe, bạn ý lấy lại thức ăn từ bạn chó, đánh bạn chó 1 trận, rồi cấm ko cho bạn chó ức hiếp bạn mèo đen nữa</p>
                </div> -->
            </div>
            <hr>
            <div class="footer">
                <h4>Bình luận</h4>
                <div class="comment-send">
                    <textarea class="form-control" rows="2" v-model="comment" placeholder="Bình luận"></textarea>
                    <div class="button">
                        <button class="btn btn-primary" v-on:click="sendComment">Gửi</button>
                    </div>
                </div>
                <div class="comment" v-for="comment in listComment">
                    <h6>{{comment.TK151}}</h6>
                    <p>{{comment.BL150}}</p>
                </div>
                <!-- <div class="comment">
                    <h6>Nguyễn Văn A</h6>
                    <p>Tội nghiệp cho chú mèo con trong bài, toàn bị bạn bè ức hiếp</p>
                </div>
                <div class="comment">
                    <h6>Nguyễn Văn A</h6>
                    <p>Chú mèo thật là mạnh mẽ, đã đứng lên để bảo vệ bạn mèo đen khỏi bị ức hiếp của các bạn chó</p>
                </div>
                <div class="comment">
                    <h6>Nguyễn Văn A</h6>
                    <p>Bài viết được </p>
                </div> -->
            </div>
            <div class="fb-comments" data-href="https://docsach.000webhostapp.com/content?storyId=16" data-numposts="8"></div>
            <!-- <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-numposts="8"></div> -->
        </div>
        <div class="content-sub col-md-3">
            <p><img src="<?= base_url(); ?>images/image.jpg" height="310" width="255" alt="thẻ img" /></p>
        </div>

    </div>
</div>