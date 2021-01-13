<h3>新增技能</h3>
<hr>
<form action="./api/add.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>技能圖片:</td>
            <td><input class="form-control" type="file" name="img" id=""></td>
        </tr>
        <tr>
            <td>技能主題:</td>
            <td><input class="form-control" type="text" name="text" id=""></td>
        </tr>
        <tr>
            <td>技能分類:</td>
            <td>
                <select name="class[]">
                    <option value="1" >前端</option>
                    <option value="2" >後端</option>
                    <option value="3" >其他</option>
                </select>
            </td>
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