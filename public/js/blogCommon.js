$(function ()
{
    //削除ボタン押下時アラート
    $('.btn-danger').click(function()
    {
        if (!confirm('削除してもよろしいですか？')) {
            return false;
        }
    });
})