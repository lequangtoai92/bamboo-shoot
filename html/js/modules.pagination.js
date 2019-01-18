$.fn.doPagination = function (total_row, url, limit, callback) {
    limit = +limit;
    // var rowss = +$(this).find('.rowss').val() || 0;
    var rowss = total_row;
    if (rowss <= limit) {
        //        self.parseDate('.get-moment', 'DD/MM/YYYY HH:MM:SS');
        $("#image").addClass('fade');
        return false;
    } else {
        $("#image").removeClass('fade');
    }
    var $container = $(this),
            // target = $container.find('.target').val(),
            target = url,
            pageCnt = Math.ceil(rowss / limit);
    //reset
    $container.find('a, span').remove();
    $container.removeClass('page-last');
    //generate all page link
    $container.addClass('page-first')    //btnFirst->btnPrev-> spnFst
            .append($('<a>', {lang: target + '&start=0', class: 'func go-page-first inuse', num: '1'})
                    .append($('<span>', {class: 'fa fa-angle-double-right fa-lg'})))
            .append($('<a>', {lang: target + '', class: 'func prev inuse', num: '-1'})
                    .append($('<span>', {class: 'fa fa-angle-right fa-lg'})))
            .append($('<span>', {class: 'spn first hidden', html: '...'}));

    for (var i = 1; i <= pageCnt; i++) //show top 3 tag
        // $container.append($('<a>', {lang: target + '&start=' + ((i - 1) * limit + 1), class: 'gopgno' + (i === 1 ? ' active' : '') + (i <= 5 ? ' inuse' : ' hidden'), html: i, num: i + ''}));
        $container.append($('<a>', {lang: target + '&start=' + ((i - 1) * limit), class: 'gopgno' + (i === 1 ? ' active' : '') + (i <= 5 ? ' inuse' : ' hidden'), html: i, num: i + ''}));
    //hide when not top 3 tag
    $container// spnLst->btnNext->btnLast
            .append($('<span>', {class: 'spn last' + (pageCnt < 4 ? ' hidden' : ''), html: '...'}))
            // .append($('<a>', {lang: target + '&start=' + (limit + 1), class: 'func next inuse', num: '2'})
            .append($('<a>', {lang: target + '&start=' + (limit), class: 'func next inuse', num: '2'})
                    .append($('<span>', {class: 'fa fa-angle-right fa-lg'})))
            // .append($('<a>', {lang: target + '&start=' + ((pageCnt - 1) * limit + 1), class: 'func go-page-last inuse', num: pageCnt + ''})
            .append($('<a>', {lang: target + '&start=' + ((pageCnt - 1) * limit), class: 'func go-page-last inuse', num: pageCnt + ''})
                    .append($('<span>', {class: 'fa fa-angle-double-right fa-lg'})));

    //init event listener
    $container.on('click', 'a', function () {
        var $self = $(this),
                pgNo = +$self.attr('num'),
                $containerCls = 'bb-pagination image page-' + (pgNo === 1 ? 'first' : (pgNo === pageCnt ? 'last' : 'no')),
                prevOffset = pgNo > 1 ? (pgNo - 2) * limit + 1 : 1,
                nextOffset = pgNo < pageCnt ? pgNo * limit + 1 : (pageCnt - 1) * limit + 1;
        //1. update $container class state
        $container.attr('class', $containerCls);
        //2. update next. prev link
        $container.find('a.prev').attr('num', (pgNo - 1))
                .attr('lang', target + '&start=' + prevOffset);
        $container.find('a.next').attr('num', (pgNo + 1))
                .attr('lang', target + '&start=' + nextOffset);
        //3. update page active
        $container.find('a[num="' + pgNo + '"].gopgno').addClass('active').siblings().removeClass('active');
        //4. colect 6tag around
        $container.find('a:not(.func)').removeClass('inuse');
        $container.find(
                'a[num="' + (pgNo - 3) + '"].gopgno,' +
                'a[num="' + (pgNo - 2) + '"].gopgno, ' +
                'a[num="' + (pgNo - 1) + '"].gopgno,' +
                'a[num="' + pgNo + '"].gopgno,' +
                'a[num="' + (pgNo + 1) + '"].gopgno, ' +
                'a[num="' + (pgNo + 2) + '"].gopgno, ' +
                'a[num="' + (pgNo + 3) + '"].gopgno').addClass('inuse');
        //5. show/hide inuse tag
        $container.find('a.inuse').removeClass('hidden');
        $container.find('a:not(.inuse)').addClass('hidden');
        //6. show/hide span ...
        if (pgNo - 3 > 1)
            $container.find('.spn.first').removeClass('hidden');
        else
            $container.find('.spn.first').addClass('hidden');
        if (pgNo + 3 < pageCnt)
            $container.find('.spn.last').removeClass('hidden');
        else
            $container.find('.spn.last').addClass('hidden');
        //7. fire ajax get target page data
        showLoading();    
        $.ajax({
            type: "GET",
            url: $self.attr('lang'),
            data: {},
            dataType: 'json',
            success: function (res) {
                hideLoading();
                if (res.status === 'success') {
                    //                            $container.prev().html(res.html);
                    callback(res, pgNo);
                    $('.digit').text(function () {//update 0,000
                        var txt = $(this).text().replace(/,/g, '');
                        return txt.replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
                    });
                    //                            self.parseDate('.get-moment', 'DD/MM/YYYY HH:MM:SS');
                }
            }
        });
    });
}
