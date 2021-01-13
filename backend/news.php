<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="card">
          <div class="card-header card-header-tabs card-header-primary">
            <div class="nav-tabs-navigation">
              <div class="nav-tabs-wrapper">
                <span class="nav-tabs-title">履歷表:</span>
                <ul class="nav nav-tabs" data-tabs="tabs">
                  <li class="nav-item">
                    <a class="nav-link active" href="#profile" data-toggle="tab">
                      <i class="material-icons">bug_report</i>自傳
                      <div class="ripple-container"></div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#messages" data-toggle="tab">
                      <i class="material-icons">code</i>學歷
                      <div class="ripple-container"></div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#settings" data-toggle="tab">
                      <i class="material-icons">cloud</i> 經歷
                      <div class="ripple-container"></div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#port" data-toggle="tab">
                      <i class="material-icons">cloud</i> 作品集
                      <div class="ripple-container"></div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="tab-content">
              <div class="tab-pane active" id="profile">
                <form method="post" action="./api/edit.php">
                  <table class="table">
                    <thead class="text-primary">
                      <th>顯示</th>
                      <th>自傳</th>
                      <th>編輯</th>
                    </thead>
                    <tbody>
                      <?php

                      $rows = $Aut->all();
                      foreach ($rows as $row) {
                      ?>
                        <tr>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="sh[]" value="<?= $row['id']; ?>" <?= ($row['sh'] == 1) ? 'checked' : ''; ?>>
                                <span class="form-check-sign">
                                  <span class="check"></span>
                                </span>
                              </label>
                            </div>
                          </td>
                          <td><textarea name="text[]" rows="5" style="width: 95%;height:150px"><?= $row['text']; ?></textarea></td>
                          <input type="hidden" name="id[]" value="<?= $row['id']; ?>">
                          <input type="hidden" name="table" value="aut">
                          <td class="td-actions text-right">
                            <button type="submit" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                              <i class="material-icons">edit</i>
                            </button>
                            <button type="submit" name="del[]" value="<?= $row['id']; ?>" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                              <i class="material-icons">close</i>
                            </button>
                          </td>
                        </tr>

                      <?php
                      }
                      ?>
                      <tr>
                        <td width="200px"><input class="btn btn-primary btn-block" type="button" onclick="op('#cover','#cvr','./modal/aut.php?table=aut')" value="新增"></td>
                      </tr>
                    </tbody>
                  </table>
                </form>
              </div>
              <div class="tab-pane" id="messages">
                <form method="post" action="./api/edit.php">
                  <table class="table">
                    <thead class="text-primary">
                      <th>顯示</th>
                      <th>學校</th>
                      <th>編輯</th>
                    </thead>
                    <tbody>
                      <?php
                      $Edu = $Education->all();

                      foreach ($Edu as $row) {
                      ?>
                        <tr>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="sh[]" value="<?= $row['id']; ?>" <?= ($row['sh'] == 1) ? 'checked' : ''; ?>>
                                <span class="form-check-sign">
                                  <span class="check"></span>
                                </span>
                              </label>
                            </div>
                          </td>
                          <td><input type="text" name="text[]" value="<?= $row['text']; ?>" style="width:50%"></td>
                          <input type="hidden" name="id[]" value="<?= $row['id']; ?>">
                          <input type="hidden" name="table" value="education">
                          <td class="td-actions text-right">
                            <button type="submit" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                              <i class="material-icons">edit</i>
                            </button>
                            <button type="submit" name="del[]" value="<?= $row['id']; ?>" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                              <i class="material-icons">close</i>
                            </button>
                          </td>
                        </tr>
                      <?php
                      }
                      ?>
                      <tr>
                        <td width="200px"><input class="btn btn-primary btn-block" type="button" onclick="op('#cover','#cvr','./modal/edu.php?table=education')" value="新增"></td>
                      </tr>
                    </tbody>
                  </table>
                </form>
              </div>
              <div class="tab-pane" id="settings">
                <form method="post" action="./api/edit.php">
                  <table class="table">
                    <thead class="text-primary">
                      <th>顯示</th>
                      <th>公司</th>
                      <th>編輯</th>
                    </thead>
                    <tbody>
                      <?php
                      $Ex = $Experience->all();

                      foreach ($Ex as $row) {
                      ?>
                        <tr>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="sh[]" value="<?= $row['id']; ?>" <?= ($row['sh'] == 1) ? 'checked' : ''; ?>>
                                <span class="form-check-sign">
                                  <span class="check"></span>
                                </span>
                              </label>
                            </div>
                          </td>
                          <td><input type="text" name="text[]" value="<?= $row['text']; ?>" style="width:50%"></td>
                          <input type="hidden" name="id[]" value="<?= $row['id']; ?>">
                          <input type="hidden" name="table" value="experience">
                          <td class="td-actions text-right">
                            <button type="submit" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                              <i class="material-icons">edit</i>
                            </button>
                            <button type="submit" name="del[]" value="<?= $row['id']; ?>" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                              <i class="material-icons">close</i>
                            </button>
                          </td>
                        </tr>
                      <?php
                      }
                      ?>
                      <tr>
                        <td width="200px"><input class="btn btn-primary btn-block" type="button" onclick="op('#cover','#cvr','./modal/ex.php?table=experience')" value="新增"></td>
                      </tr>
                    </tbody>
                  </table>
                </form>
              </div>
              <div class="tab-pane" id="port">
                <form method="post" action="./api/edit.php">
                  <table class="table">
                    <thead class="text-primary">
                      <th>顯示</th>
                      <th>作品圖片</th>
                      <th>作品主題</th>
                      <th>作品分類</th>
                      <th>作品簡介</th>
                      <th>編輯</th>
                    </thead>
                    <tbody>
                      <?php
                      $po = $Port->all();
                      foreach ($po as $row) {
                      ?>
                        <tr>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="sh[]" value="<?= $row['id']; ?>" <?= ($row['sh'] == 1) ? 'checked' : ''; ?>>
                                <span class="form-check-sign">
                                  <span class="check"></span>
                                </span>
                              </label>
                            </div>
                          </td>
                          <td><img src="./front/img/portfolio/<?= $row['img']; ?>" style="width:100px;height:100px"></td>
                          <td><input type="text" name="text[]" value="<?= $row['text']; ?>" style="width:50%"></td>
                          <td>
                            <select>
                              <option name="class[]" value="<?= $row['class']; ?>"><?= $row['class']; ?></option>
                              <option name="class[]" value="<?= $row['class']; ?>"><?= $row['class']; ?></option>
                              <option name="class[]" value="<?= $row['class']; ?>"><?= $row['class']; ?></option>
                            </select>
                            <!-- <input type="text" name="class[]" value="" style="width:50%"> -->
                          </td>
                          <td><input type="text" name="text2[]" value="<?= $row['text2']; ?>" style="width:50%"></td>
                          <input type="hidden" name="id[]" value="<?= $row['id']; ?>">
                          <input type="hidden" name="table" value="port">
                          <td class="td-actions text-right">
                            <button type="submit" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                              <i class="material-icons">edit</i>
                            </button>
                            <button type="submit" name="del[]" value="<?= $row['id']; ?>" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                              <i class="material-icons">close</i>
                            </button>
                          </td>
                        </tr>
                      <?php
                      }
                      ?>
                      <tr>
                        <td>
                          <button type="submit" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                            <i class="material-icons">edit</i>
                          </button>
                        </td>
                        <td width="200px">
                          <input class="btn btn-primary btn-block" type="button" onclick="op('#cover','#cvr','./modal/port.php?table=port')" value="新增">
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </form>
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
      <li class="header-title">Images</li>
      <li class="active">
        <a class="img-holder switch-trigger" href="javascript:void(0)">
          <img src="../assets/img/sidebar-1.jpg" alt="">
        </a>
      </li>
      <li>
        <a class="img-holder switch-trigger" href="javascript:void(0)">
          <img src="../assets/img/sidebar-2.jpg" alt="">
        </a>
      </li>
      <li>
        <a class="img-holder switch-trigger" href="javascript:void(0)">
          <img src="../assets/img/sidebar-3.jpg" alt="">
        </a>
      </li>
      <li>
        <a class="img-holder switch-trigger" href="javascript:void(0)">
          <img src="../assets/img/sidebar-4.jpg" alt="">
        </a>
      </li>
      <li class="button-container">
        <a href="https://www.creative-tim.com/product/material-dashboard" target="_blank" class="btn btn-primary btn-block">Free Download</a>
      </li>
      <!-- <li class="header-title">Want more components?</li>
            <li class="button-container">
                <a href="https://www.creative-tim.com/product/material-dashboard-pro" target="_blank" class="btn btn-warning btn-block">
                  Get the pro version
                </a>
            </li> -->
      <li class="button-container">
        <a href="https://demos.creative-tim.com/material-dashboard/docs/2.1/getting-started/introduction.html" target="_blank" class="btn btn-default btn-block">
          View Documentation
        </a>
      </li>
      <li class="button-container github-star">
        <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
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