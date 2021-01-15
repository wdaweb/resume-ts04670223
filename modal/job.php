<h3>新增求職條件</h3>
<hr>
<form action="./api/add.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td style="vertical-align: top;">求職條件</td>
            <td><textarea class="form-control" name="text" style="width: 300px;height:200px;"></textarea></td>
        </tr>
        <tr>
            <td style="vertical-align: top;">簡介</td>
            <td><textarea class="form-control" name="text2" style="width: 300px;height:200px;"></textarea></td>
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