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
    <div  v-for="itemr in itemrs" class="content-feedback-result">
        <p>{{itemr.content}}</p>
        <div class="daytime">
            <span>{{itemr.data}}</span>
        </div>
    </div>

</div>