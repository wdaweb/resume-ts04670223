<h3>新增大頭貼</h3>
<hr>
<form action="./api/add.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>大頭貼圖片:</td>
            <td><input class="form-control" type="file" name="img" id=""></td>
        </tr>
        <tr>
            <td>姓名:</td>
            <td><input class="form-control" type="text" name="text" id=""></td>
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