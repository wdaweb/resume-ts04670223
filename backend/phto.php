<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="card">
          <div class="card-header card-header-tabs card-header-warning">
            <div class="nav-tabs-navigation">
              <div class="nav-tabs-wrapper">
                <span class="nav-tabs-title">履歷表:</span>
                <ul class="nav nav-tabs" data-tabs="tabs">
                  <li class="nav-item">
                    <a class="nav-link active" href="#all" data-toggle="tab">
                      <i class="material-icons">bug_report</i>All
                      <div class="ripple-container"></div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#headshot" data-toggle="tab">
                      <i class="material-icons">bug_report</i>大頭貼
                      <div class="ripple-container"></div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#port" data-toggle="tab">
                      <i class="material-icons">cloud</i> 作品集
                      <div class="ripple-container"></div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#skill" data-toggle="tab">
                      <i class="material-icons">cloud</i> 技能
                      <div class="ripple-container"></div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="tab-content">
              <div class="tab-pane active" id="all">
                <div class="d-flex flex-wrap col-12">
                  <?php
                  $headshot = $Headshot->all(' order by `rank` ');
                  foreach ($headshot as $key => $poster) {
                  ?>
                    <form method="post" action="./api/edit.php">
                      <div class="col-3">

                        <img src="./front/img/portfolio/<?= $poster['img']; ?>" style="width:100px;height:100px">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="sh[]" value="<?= $poster['id']; ?>" <?= ($poster['sh'] == 1) ? 'checked' : ''; ?>>
                            <span class="form-check-sign">
                              <span class="check"></span>
                            </span>
                          </label>

                        </div>
                        <input type="hidden" name="id[]" value="<?= $poster['id']; ?>">
                        <input type="hidden" name="table" value="re_headshot">
                        <div width="200px">
                          <input type="button" class="btn btn-warning" value="更換圖片" onclick="op('#cover','#cvr','./modal/upload.php?table=re_headshot&id=<?= $poster['id']; ?>')">
                        </div>
                      </div>
                    </form>
                  <?php
                  }
                  ?>
                  <?php
                  $po = $Port->all(' order by `rank` ');
                  foreach ($po as $key => $poster) {
                  ?>
                    <form method="post" action="./api/edit.php">
                      <div class="col-3">

                        <img src="./front/img/portfolio/<?= $poster['img']; ?>" style="width:100px;height:100px">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="sh[]" value="<?= $poster['id']; ?>" <?= ($poster['sh'] == 1) ? 'checked' : ''; ?>>
                            <span class="form-check-sign">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>
                        <input type="hidden" name="id[]" value="<?= $poster['id']; ?>">
                        <input type="hidden" name="table" value="re_port">
                        <div width="200px">
                          <input type="button" class="btn btn-warning" value="更換圖片" onclick="op('#cover','#cvr','./modal/upload.php?table=re_port&id=<?= $poster['id']; ?>')">
                        </div>
                      </div>
                    </form>
                  <?php
                  }
                  ?>
                  <?php
                  $skill = $Skill->all(' order by `rank` ');
                  foreach ($skill as $key => $poster) {
                  ?>
                    <form method="post" action="./api/edit.php">
                      <div class="col-3">

                        <img src="./front/img/portfolio/<?= $poster['img']; ?>" style="width:100px;height:100px">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="sh[]" value="<?= $poster['id']; ?>" <?= ($poster['sh'] == 1) ? 'checked' : ''; ?>>
                            <span class="form-check-sign">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>
                        <input type="hidden" name="id[]" value="<?= $poster['id']; ?>">
                        <input type="hidden" name="table" value="re_skill">
                        <div width="200px">
                          <input type="button" class="btn btn-warning" value="更換圖片" onclick="op('#cover','#cvr','./modal/upload.php?table=re_skill&id=<?= $poster['id']; ?>')">
                        </div>
                      </div>
                    </form>
                  <?php
                  }
                  ?>

                </div>
                <div class="dropdown">
                  <button class="btn btn-warning dropdown-toggle btn-block" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    選擇新增項目
                  </button>
                  <div class="dropdown-menu btn-block" aria-labelledby="dropdownMenuButton">
                  <input class="dropdown-item btn-block" type="button" onclick="op('#cover','#cvr','./modal/phto/headshot.php?table=re_headshot')" value="新增大頭貼圖片">
                  <input class="dropdown-item btn-block" type="button" onclick="op('#cover','#cvr','./modal/phto/port.php?table=re_port')" value="新增作品集圖片">
                  <input class="dropdown-item btn-block" type="button" onclick="op('#cover','#cvr','./modal/phto/skill.php?table=re_skill')" value="新增技能圖片">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="headshot">
                <div class="d-flex flex-wrap col-12">
                  <?php
                  $headshot = $Headshot->all(' order by `rank` ');
                  foreach ($headshot as $key => $poster) {
                  ?>
                    <form method="post" action="./api/edit.php">
                      <div class="col-3">

                        <img src="./front/img/portfolio/<?= $poster['img']; ?>" style="width:100px;height:100px">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="sh[]" value="<?= $poster['id']; ?>" <?= ($poster['sh'] == 1) ? 'checked' : ''; ?>>
                            <span class="form-check-sign">
                              <span class="check"></span>
                            </span>
                          </label>

                        </div>
                        <input type="hidden" name="id[]" value="<?= $poster['id']; ?>">
                        <input type="hidden" name="table" value="re_headshot">
                        <div width="200px">
                          <input type="button" class="btn btn-warning" value="更換圖片" onclick="op('#cover','#cvr','./modal/upload.php?table=re_headshot&id=<?= $poster['id']; ?>')">
                        </div>
                      </div>
                    </form>
                  <?php
                  }
                  ?>
                  <input class="btn btn-warning btn-block" type="button" onclick="op('#cover','#cvr','./modal/phto/headshot.php?table=re_headshot')" value="新增">
                </div>
              </div>
              <div class="tab-pane" id="port">
                <div class="d-flex flex-wrap col-12">
                  <?php
                  $po = $Port->all(' order by `rank` ');
                  foreach ($po as $key => $poster) {
                  ?>
                    <form method="post" action="./api/edit.php">
                      <div class="col-3">

                        <img src="./front/img/portfolio/<?= $poster['img']; ?>" style="width:100px;height:100px">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="sh[]" value="<?= $poster['id']; ?>" <?= ($poster['sh'] == 1) ? 'checked' : ''; ?>>
                            <span class="form-check-sign">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>
                        <input type="hidden" name="id[]" value="<?= $poster['id']; ?>">
                        <input type="hidden" name="table" value="re_port">
                        <div width="200px">
                          <input type="button" class="btn btn-warning" value="更換圖片" onclick="op('#cover','#cvr','./modal/upload.php?table=re_port&id=<?= $poster['id']; ?>')">
                        </div>
                      </div>
                    </form>
                  <?php
                  }
                  ?>
                  <input class="btn btn-warning btn-block" type="button" onclick="op('#cover','#cvr','./modal/phto/port.php?table=re_port')" value="新增">

                </div>
              </div>
              <div class="tab-pane" id="skill">
                <div class="d-flex flex-wrap col-12">
                  <?php
                  $skill = $Skill->all(' order by `rank` ');
                  foreach ($skill as $key => $poster) {
                  ?>
                    <form method="post" action="./api/edit.php">
                      <div class="col-3">

                        <img src="./front/img/portfolio/<?= $poster['img']; ?>" style="width:100px;height:100px">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="sh[]" value="<?= $poster['id']; ?>" <?= ($poster['sh'] == 1) ? 'checked' : ''; ?>>
                            <span class="form-check-sign">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>
                        <input type="hidden" name="id[]" value="<?= $poster['id']; ?>">
                        <input type="hidden" name="table" value="re_skill">
                        <div width="200px">
                          <input type="button" class="btn btn-warning" value="更換圖片" onclick="op('#cover','#cvr','./modal/upload.php?table=re_skill&id=<?= $poster['id']; ?>')">
                        </div>
                      </div>
                    </form>
                  <?php
                  }
                  ?>
                  <input class="btn btn-warning btn-block" type="button" onclick="op('#cover','#cvr','./modal/phto/skill.php?table=re_skill')" value="新增">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<div class="fixed-plugin">
  <div class="dropdown show-dropdown">
    <a href="#" data-toggle="dropdown">
      <i class="fa fa-cog fa-2x"> </i>
    </a>
    <ul class="dropdown-menu">
      <li class="header-title"> Sidebar Filters</li>
      <li class="adjustments-line">
        <a href="javascript:void(0)" class="switch-trigger active-color">
          <div class="badge-colors ml-auto mr-auto">
            <span class="badge filter badge-purple" data-color="purple"></span>
            <span class="badge filter badge-azure" data-color="azure"></span>
            <span class="badge filter badge-green" data-color="green"></span>
            <span class="badge filter badge-warning" data-color="orange"></span>
            <span class="badge filter badge-danger" data-color="danger"></span>
            <span class="badge filter badge-rose active" data-color="rose"></span>
          </div>
          <div class="clearfix"></div>
        </a>
      </li>
      <li class="header-title">Thank you for 95 shares!</li>
      <li class="button-container text-center">
        <button id="twitter" class="btn btn-round btn-twitter"><i class="fa fa-twitter"></i> &middot; 45</button>
        <button id="facebook" class="btn btn-round btn-facebook"><i class="fa fa-facebook-f"></i> &middot; 50</button>
        <br>
        <br>
      </li>
    </ul>
  </div>
</div>