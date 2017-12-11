$(function ()
{
    // AjaxでPOST通信実施のためのCSRFToken追加。
    $.ajaxSetup ({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    //削除ボタン押下時アラート
    $('.btn-danger').click(function()
    {
        if (!confirm('削除してもよろしいですか？')) {
            return false;
        }
    });
})