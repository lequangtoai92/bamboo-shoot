function checkNull(string) {
    if (!!string && string.trim().length == 0) {
        return false;
    } else {
        return string;
    }
}

function getUrlParameter(sParam) {
    var sPageURL = window.location.search.substring(1),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
        }
    }
};

//input: Date object -> dd-MM-yyyy
function get_ddMMyyyy(value) {
    if (value == 'now'){
        return 'Mới xong';
    } else if (value !== null) {
        var date = value.substr(0, 10).split("-");
        return date[2] + "-" + date[1] + "-" + date[0];
    }
}

function convert_age(data){
    if (!!data){
        if (data == 1){
            return 'Mần';
        } else if (data == 2){
            return 'Chồi';
        } else if (data == 3) {
            return 'Lá';
        } else {
            return 'Măng non';
        }
    }
}

function showLoading() {
    $(".table-striped").click(function(){
        $(".box-loading").css('visibility', 'visible');
      });
}

function hideLoading() {
    $(".car").click(function(){
        $(".box-loading").css('visibility', 'hidden');
      })
}

function notLogin(){
    alert("Hãy bổ sung thông tin để sử dụng chức năng này");
}