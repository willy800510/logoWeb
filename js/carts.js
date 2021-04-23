$(document).ready(function(){
    $(".payPick").click(function() {
        var chooseBtnText = $(this).next('label').text();
        $('#payPicked').text(chooseBtnText);
        // console.log(chooseBtnText);
    });
    if($("input[name='Checkbox[]']").prop("checked",true)){
        $("#CheckAll").click()
    }
    $("#CheckAll").click(function(){
        if($("#CheckAll").prop("checked")){
            $("input[name='Checkbox[]']").prop("checked",true);
        }else{
            $("input[name='Checkbox[]']").prop("checked",false);
        }
    });
    $('.addcarts').click(function(){
        var imgSrc = $(this).siblings().children('img').attr('src');
        var productImg = imgSrc.replace('images/','')
        var number = 1 + Math.floor(Math.random() * 11);
        $(this).parent().parent('.reco-logo').remove();
        // 新增指購物車
        $('#cartLists').prepend(
           $('<ul/>')
           .addClass('row bg-white align-items-center mt-1 mx-1 p-2 rounded')
           .append(
               $('<div/>')
               .addClass('col-1 text-center px-0')
               .append('<input type="checkbox" name="Checkbox[]" checked="true">'),
               $('<img/>')
               .addClass('logoIcon col-2 px-1')
               .attr('src',imgSrc),
               $('<input/>')
               .attr('type','hidden')
               .attr('name','productImg')
               .attr('value',imgSrc),
               $('<div/>')
               .addClass('d-flex flex-column col-8 py-3')
               .append(
                    $('<div/>')
                    .addClass('d-flex justify-content-around')
                    .append(
                        $('<div/>')
                        .addClass('text-center p-2')
                        .append(
                            $('<h6/>')
                            .html('商品規格'),
                            $('<li/>')
                            .html('png,ai')
                        ),
                        $('<div/>')
                        .addClass('text-center p-2')
                        .append(
                            $('<h6/>')
                            .html('金額'),
                            $('<li/>')
                            .html('NT$200'),
                            $('<input/>')
                            .attr('type','hidden')
                            .attr('name','price')
                            .attr('value','200'),
                        ),
                        $('<div/>')
                        .addClass('p-2 d-none d-md-block')
                        .append(
                            $('<h6/>')
                            .addClass('text-center')
                            .html('其他'),
                            $('<span/>')
                            .addClass('font-weight-lighter text-black-50 text-center pt-3')
                            .html('備註說明:備註說明備註說明備註說明')
                        ),
                    ),
                    $('<span/>')
                    .addClass('font-weight-lighter text-black-50 text-center pt-3 d-block d-md-none')
                    .html('備註說明:備註說明備註說明備註說明')
                ),
                $('<span/>')
                .addClass('btn col-1 px-0 clear')
                .html('<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/></svg>')
            )
        )
        // 新增推薦
        $('#recom-lists').append(
            $('<div/>')
            .addClass('col-6 col-md-4 col-lg-3 p-1 reco-logo')
            .append(
                $('<div/>')
                .addClass('d-flex flex-column justify-content-between p-3 bg-cloud rounded logoDpSm lgdp')
                .append(
                    $('<a/>')
                    .addClass('d-inline-block m-auto pt-3')
                    .attr('data-toggle','modal')
                    .attr('data-target','#logoDisplay')
                    .append(
                        $('<img/>')
                        .attr('src','images/logo'+number+'.svg')
                    ),
                    $('<button/>')
                    .addClass('btn btn-outline-logoColor mt-3 addcarts')
                    .attr('type','submit')
                    .html('加入購物袋')
                )
            )
        )
    });
    $('.clear').click(function(){
        $(this).parent('ul').remove();
    })
})