<div class="content-body container" id="id_feedback">
    <div class="row">
        <div class="content-left col-11">
            <textarea class="form-control" rows="2" id="content_feedback" placeholder="Nội dung góp ý"></textarea>
        </div>
        <div class="content-right col-1 footer-save form-group">
            <button type="button" class="btn btn-primary save-content" v-on:click="sendFeedBack">Gửi</button>
        </div>
    </div>
    <hr>
    <div  v-for="item in items" class="content-feedback-result">
        <p>{{item.FC150}}</p>
        <div class="daytime">
            <span>{{item.FD151}}</span>
        </div>
    </div>

</div>