<h3>新增技能</h3>
<hr>
<form action="./api/addPh.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>技能圖片:</td>
            <td><input class="form-control" type="file" name="img" id=""></td>
        </tr>

        <tr>
            <td>
                <input class="btn btn-primary" type="submit" value="新增">
            </td>
            <td>
                <input class="btn btn-primary" type="reset" value="重置">
            </td>
            <input type="hidden" name="table" value="<?= $_GET['table']; ?>">
        </tr>
    </table>



</form>