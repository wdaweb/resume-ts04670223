<h3>新增經歷</h3>
<hr>
<form action="./api/add.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td style="vertical-align: top;">經歷</td>
            <td><textarea name="text" style="width: 300px;height:200px;"></textarea></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="hidden" name="table" value="<?= $_GET['table']; ?>">
                <input type="submit" value="新增">
                <input type="reset" value="重置">
            </td>

        </tr>
    </table>



</form>