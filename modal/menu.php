<h3>新增選單</h3>
<hr>
<form action="./api/add.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td >內容</td>
            <td><input class="form-control" name="text" ></td>
        </tr>
        <tr>
            <td >連結</td>
            <td><input class="form-control" name="href" ></td>
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