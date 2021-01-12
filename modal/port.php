<h3>新增作品集</h3>
<hr>
<form action="./api/add.php" method="post" enctype="multipart/form-data">
<table>
    <tr>
        <td>作品集圖片:</td>
        <td><input type="file" name="img" id=""></td>
    </tr>
    <tr>
        <td>作品集文字:</td>
        <td><input type="text" name="text" id=""></td>
    </tr>

    <tr>
        <td colspan="2">
            <input type="hidden" name="table" value="<?=$_GET['table'];?>">
            <input type="submit" value="新增">
            <input type="reset" value="重置">
        </td>

    </tr>
</table>
    
    

</form>
