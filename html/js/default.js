function checkNull(string) {
    if (string.trim().length == 0) {
        return false;
    } else {
        return string;
    }
}

function renderTimePublic(data) {
    return data;
}

//input: Date object -> dd-MM-yyyy
function get_ddMMyyyy(value) {
    if (value !== null) {
        var date = value.substr(0, 10).split("-");
        return date[2] + "-" + date[1] + "-" + date[0];
    }
}

function showLoading() {
    $('.faci-loading').addClass('open');
    $('.lg-login').addClass('invisible');
    $('.img-loading').removeClass('d-none');
}

function hideLoading() {
    $('.faci-loading').removeClass('open');
    $('.lg-login').removeClass('invisible');
    $('.img-loading').addClass('d-none');
}