<?php
include_once "../base.php";

$subs=$Education->all(['parent'=>$_GET['id']]);

?>
<h3>編輯學歷介紹</h3>
<hr>
<form action="./api/edu_editsub.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>學歷介紹:</td>
            <td>刪除</td>
        </tr>
        <?php
        foreach($subs as $sub){

            ?>
        <tr>
            <td><input type="text" name="text[]" value="<?=$sub['text'];?>"></td>
            <td><input type="checkbox" name="del[]" value="<?=$sub['id'];?>"></td>
            <input type="hidden" name="id[]" value="<?=$sub['id'];?>">
        </tr>
        <?php
    }
    ?>
        <tr id="btn">
            <td colspan="2">
                <input type="hidden" name="table" value="<?= $_GET['table']; ?>">
                <input type="hidden" name="parent" value="<?= $_GET['id']; ?>">
                <input type="submit" value="修改確定">
                <input type="reset" value="重置">
                <input type="button" value="更多學歷介紹" onclick="more()">
            </td>
        </tr>
    </table>
</form>

<script>
function more(){
    let str=`
    <tr>
    <td><textarea name="text2[]" style="width: 300px;height:200px;"></textarea></td>
    </tr>
    `
    $("#btn").before(str)
}

</script>