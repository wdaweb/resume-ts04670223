<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">編輯帳號</h4>
                </div>
                <div class="card-body">
                  <form method="post" action="./api/edit.php">
                  <?php
                $rows=$Admin->all();

                foreach($rows as $row){
                    
                    
                    ?>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">帳號</label>
                          <input type="text"  name="acc[]" value="<?=$row['acc'];?>" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">密碼</label>
                          <input type="text" name="pw[]" value="<?=$row['pw'];?>" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">刪除</label>
                          <input type="checkbox" name="del[]" value="<?=$row['id'];?>">
                        </div>
                      </div>
                      <input type="hidden" name="id[]" value="<?=$row['id'];?>">
                    </div>
                    <?php
                    }
                ?>
                <input type="hidden" name="table" value="re_admin">
                    <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>