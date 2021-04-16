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
    })
})