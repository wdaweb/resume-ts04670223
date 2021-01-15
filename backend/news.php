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
                    <a class="nav-link active" href="#profile" data-toggle="tab">
                      <i class="material-icons">bug_report</i>自傳
                      <div class="ripple-container"></div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#me" data-toggle="tab">
                      <i class="material-icons">code</i>關於我
                      <div class="ripple-container"></div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="#headshot" data-toggle="tab">
                      <i class="material-icons">bug_report</i>大頭貼
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
                  <li class="nav-item">
                    <a class="nav-link" href="#menu" data-toggle="tab">
                      <i class="material-icons">cloud</i> 選單
                      <div class="ripple-container"></div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#skill" data-toggle="tab">
                      <i class="material-icons">cloud</i> 技能
                      <div class="ripple-container"></div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#connection" data-toggle="tab">
                      <i class="material-icons">cloud</i> 聯絡我
                      <div class="ripple-container"></div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#job" data-toggle="tab">
                      <i class="material-icons">cloud</i> 求職條件
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
                    <thead class="text-warning">
                      <th>顯示</th>
                      <th>自傳</th>
                      <th>排序</th>
                      <th>編輯</th>
                    </thead>
                    <tbody>
                      <?php

                      $aut = $Aut->all(' order by `rank` ');
                      foreach ($aut as $key => $poster) {
                      ?>
                        <tr>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="sh[]" value="<?= $poster['id']; ?>" <?= ($poster['sh'] == 1) ? 'checked' : ''; ?>>
                                <span class="form-check-sign">
                                  <span class="check"></span>
                                </span>
                              </label>
                            </div>
                          </td>
                          <td><textarea class="form-control" name="text[]" rows="5" style="width: 95%;height:150px"><?= $poster['text']; ?></textarea></td>
                          <input type="hidden" name="id[]" value="<?= $poster['id']; ?>">
                          <input type="hidden" name="table" value="re_aut">
                          <td>
                            <?php
                            if ($key != 0) {
                            ?>
                              <input class="btn btn-warning" type="button" value="往上" onclick="sw('re_aut',<?= $poster['id']; ?>,<?= $aut[$key - 1]['id']; ?>)">
                            <?php
                            }
                            ?>
                            <?php
                            if ($key != (count($aut) - 1)) {
                            ?>
                              <input class="btn btn-warning" type="button" value="往下" onclick="sw('re_aut',<?= $poster['id']; ?>,<?= $aut[$key + 1]['id']; ?>)">
                            <?php
                            }
                            ?>
                          </td>
                          <td class="td-actions text-right">
                            <button type="submit" rel="tooltip" title="Edit" class="btn btn-warning btn-link btn-sm">
                              <i class="material-icons">edit</i>
                            </button>
                            <button type="submit" name="del[]" value="<?= $poster['id']; ?>" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                              <i class="material-icons">close</i>
                            </button>
                          </td>
                        </tr>

                      <?php
                      }
                      ?>
                      <tr>
                        <td width="200px"><input class="btn btn-warning btn-block" type="button" onclick="op('#cover','#cvr','./modal/select.php')" value="新增"></td>
                        <td>
                          <button type="submit" rel="tooltip" title="All Edit" class="btn btn-warning btn-link btn-sm">
                            <i class="material-icons">edit</i>
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </form>
              </div>
              <div class="tab-pane" id="me">
                <form method="post" action="./api/edit.php">
                  <table class="table">
                    <thead class="text-warning">
                      <th>顯示</th>
                      <th>關於我</th>
                      <th>排序</th>
                      <th>編輯</th>
                    </thead>
                    <tbody>
                      <?php
                      $me = $Me->all(' order by `rank` ');

                      foreach ($me as $key => $poster) {
                      ?>
                        <tr>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="sh[]" value="<?= $poster['id']; ?>" <?= ($poster['sh'] == 1) ? 'checked' : ''; ?>>
                                <span class="form-check-sign">
                                  <span class="check"></span>
                                </span>
                              </label>
                            </div>
                          </td>
                          <td><textarea class="form-control" name="text[]" rows="5" style="width: 95%;height:150px"><?= $poster['text']; ?></textarea></td>
                          <td>
                            <?php
                            if ($key != 0) {
                            ?>
                              <input class="btn btn-warning" type="button" value="往上" onclick="sw('re_me',<?= $poster['id']; ?>,<?= $me[$key - 1]['id']; ?>)">
                            <?php
                            }
                            ?>
                            <?php
                            if ($key != (count($me) - 1)) {
                            ?>
                              <input class="btn btn-warning" type="button" value="往下" onclick="sw('re_me',<?= $poster['id']; ?>,<?= $me[$key + 1]['id']; ?>)">
                            <?php
                            }
                            ?>
                          </td>
                          <input type="hidden" name="id[]" value="<?= $poster['id']; ?>">
                          <input type="hidden" name="table" value="re_me">
                          <td class="td-actions text-right">
                            <button type="submit" rel="tooltip" title="Edit" class="btn btn-warning btn-link btn-sm">
                              <i class="material-icons">edit</i>
                            </button>
                            <button type="submit" name="del[]" value="<?= $poster['id']; ?>" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                              <i class="material-icons">close</i>
                            </button>
                          </td>
                        </tr>
                      <?php
                      }
                      ?>
                      <tr>
                        <td width="200px"><input class="btn btn-warning btn-block" type="button" onclick="op('#cover','#cvr','./modal/me.php?table=re_me')" value="新增"></td>
                        <td>
                          <button type="submit" rel="tooltip" title="All Edit" class="btn btn-warning btn-link btn-sm">
                            <i class="material-icons">edit</i>
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </form>
              </div>
              <div class="tab-pane" id="headshot">
                <form method="post" action="./api/edit.php">
                  <table class="table">
                    <thead class="text-warning">
                      <th>顯示</th>
                      <th>大頭貼圖片</th>
                      <th>姓名</th>
                      <th>排序</th>
                      <th>編輯</th>
                    </thead>
                    <tbody>
                      <?php
                      $headshot = $Headshot->all(' order by `rank` ');
                      foreach ($headshot as $key => $poster) {
                      ?>
                        <tr>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="sh[]" value="<?= $poster['id']; ?>" <?= ($poster['sh'] == 1) ? 'checked' : ''; ?>>
                                <span class="form-check-sign">
                                  <span class="check"></span>
                                </span>
                              </label>
                            </div>
                          </td>
                          <td><img src="./front/img/portfolio/<?= $poster['img']; ?>" style="width:100px;height:100px"></td>
                          <td><input class="form-control" type="text" name="text[]" value="<?= $poster['text']; ?>" style="width:50%"></td>
                          <td>
                            <?php
                            if ($key != 0) {
                            ?>
                              <input class="btn btn-warning" type="button" value="往上" onclick="sw('re_headshot',<?= $poster['id']; ?>,<?= $headshot[$key - 1]['id']; ?>)">
                            <?php
                            }
                            ?>
                            <?php
                            if ($key != (count($headshot) - 1)) {
                            ?>
                              <input class="btn btn-warning" type="button" value="往下" onclick="sw('re_headshot',<?= $poster['id']; ?>,<?= $headshot[$key + 1]['id']; ?>)">
                            <?php
                            }
                            ?>
                          </td>
                          <input type="hidden" name="id[]" value="<?= $poster['id']; ?>">
                          <input type="hidden" name="table" value="re_headshot">
                          <td class="td-actions text-right">
                            <button type="submit" rel="tooltip" title="Edit" class="btn btn-warning btn-link btn-sm">
                              <i class="material-icons">edit</i>
                            </button>
                            <button type="submit" name="del[]" value="<?= $poster['id']; ?>" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                              <i class="material-icons">close</i>
                            </button>
                          </td>
                        </tr>
                      <?php
                      }
                      ?>
                      <tr>
                        <td width="200px">
                          <input class="btn btn-warning btn-block" type="button" onclick="op('#cover','#cvr','./modal/headshot.php?table=re_headshot')" value="新增">
                        </td>
                        <td>
                          <button type="submit" rel="tooltip" title="All Edit" class="btn btn-warning btn-link btn-sm">
                            <i class="material-icons">edit</i>
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </form>
              </div>
              <div class="tab-pane" id="messages">
                <form method="post" action="./api/edit.php">
                  <table class="table">
                    <thead class="text-warning">
                      <th>顯示</th>
                      <th>學校</th>
                      <th>簡介</th>
                      <th>排序</th>
                      <th>編輯</th>
                    </thead>
                    <tbody>
                      <?php
                      $Edu = $Education->all(' order by `rank` ');

                      foreach ($Edu as $key => $poster) {
                      ?>
                        <tr>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="sh[]" value="<?= $poster['id']; ?>" <?= ($poster['sh'] == 1) ? 'checked' : ''; ?>>
                                <span class="form-check-sign">
                                  <span class="check"></span>
                                </span>
                              </label>
                            </div>
                          </td>
                          <td><input class="form-control" type="text" name="text[]" value="<?= $poster['text']; ?>" style="width:50%"></td>
                          <td><input class="form-control" type="text" name="text2[]" value="<?= $poster['text2']; ?>" style="width:50%"></td>
                          <td>
                            <?php
                            if ($key != 0) {
                            ?>
                              <input class="btn btn-warning" type="button" value="往上" onclick="sw('re_education',<?= $poster['id']; ?>,<?= $Edu[$key - 1]['id']; ?>)">
                            <?php
                            }
                            ?>
                            <?php
                            if ($key != (count($Edu) - 1)) {
                            ?>
                              <input class="btn btn-warning" type="button" value="往下" onclick="sw('re_education',<?= $poster['id']; ?>,<?= $Edu[$key + 1]['id']; ?>)">
                            <?php
                            }
                            ?>
                          </td>
                          <input type="hidden" name="id[]" value="<?= $poster['id']; ?>">
                          <input type="hidden" name="table" value="re_education">
                          <td class="td-actions text-right">
                            <button type="submit" rel="tooltip" title="Edit" class="btn btn-warning btn-link btn-sm">
                              <i class="material-icons">edit</i>
                            </button>
                            <button type="submit" name="del[]" value="<?= $poster['id']; ?>" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                              <i class="material-icons">close</i>
                            </button>
                          </td>
                        </tr>
                      <?php
                      }
                      ?>
                      <tr>
                        <td width="200px"><input class="btn btn-warning btn-block" type="button" onclick="op('#cover','#cvr','./modal/edu.php?table=re_education')" value="新增"></td>
                        <td>
                          <button type="submit" rel="tooltip" title="All Edit" class="btn btn-warning btn-link btn-sm">
                            <i class="material-icons">edit</i>
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </form>
              </div>
              <div class="tab-pane" id="settings">
                <form method="post" action="./api/edit.php">
                  <table class="table">
                    <thead class="text-warning">
                      <th>顯示</th>
                      <th>公司</th>
                      <th>簡介</th>
                      <th>排序</th>
                      <th>編輯</th>
                    </thead>
                    <tbody>
                      <?php
                      $Ex = $Experience->all(' order by `rank` ');

                      foreach ($Ex as $key => $poster) {
                      ?>
                        <tr>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="sh[]" value="<?= $poster['id']; ?>" <?= ($poster['sh'] == 1) ? 'checked' : ''; ?>>
                                <span class="form-check-sign">
                                  <span class="check"></span>
                                </span>
                              </label>
                            </div>
                          </td>
                          <td><input class="form-control" type="text" name="text[]" value="<?= $poster['text']; ?>" style="width:50%"></td>
                          <td><input class="form-control" type="text" name="text2[]" value="<?= $poster['text2']; ?>" style="width:50%"></td>
                          <td>
                            <?php
                            if ($key != 0) {
                            ?>
                              <input class="btn btn-warning" type="button" value="往上" onclick="sw('re_experience',<?= $poster['id']; ?>,<?= $Ex[$key - 1]['id']; ?>)">
                            <?php
                            }
                            ?>
                            <?php
                            if ($key != (count($Ex) - 1)) {
                            ?>
                              <input class="btn btn-warning" type="button" value="往下" onclick="sw('re_experience',<?= $poster['id']; ?>,<?= $Ex[$key + 1]['id']; ?>)">
                            <?php
                            }
                            ?>
                          </td>
                          <input type="hidden" name="id[]" value="<?= $poster['id']; ?>">
                          <input type="hidden" name="table" value="re_experience">
                          <td class="td-actions text-right">
                            <button type="submit" rel="tooltip" title="Edit" class="btn btn-warning btn-link btn-sm">
                              <i class="material-icons">edit</i>
                            </button>
                            <button type="submit" name="del[]" value="<?= $poster['id']; ?>" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                              <i class="material-icons">close</i>
                            </button>
                          </td>
                        </tr>
                      <?php
                      }
                      ?>
                      <tr>
                        <td width="200px"><input class="btn btn-warning btn-block" type="button" onclick="op('#cover','#cvr','./modal/ex.php?table=re_experience')" value="新增"></td>
                        <td>
                          <button type="submit" rel="tooltip" title="All Edit" class="btn btn-warning btn-link btn-sm">
                            <i class="material-icons">edit</i>
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </form>
              </div>
              <div class="tab-pane" id="port">
                <form method="post" action="./api/edit.php">
                  <table class="table">
                    <thead class="text-warning">
                      <th>顯示</th>
                      <th>作品圖片</th>
                      <th>作品主題</th>
                      <th>作品分類</th>
                      <th>作品簡介</th>
                      <th>連結</th>
                      <th>排序</th>
                      <th>編輯</th>
                    </thead>
                    <tbody>
                      <?php
                      $po = $Port->all(' order by `rank` ');
                      foreach ($po as $key => $poster) {
                      ?>
                        <tr>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="sh[]" value="<?= $poster['id']; ?>" <?= ($poster['sh'] == 1) ? 'checked' : ''; ?>>
                                <span class="form-check-sign">
                                  <span class="check"></span>
                                </span>
                              </label>
                            </div>
                          </td>
                          <td><img src="./front/img/portfolio/<?= $poster['img']; ?>" style="width:100px;height:100px"></td>
                          <td><input class="form-control" type="text" name="text[]" value="<?= $poster['text']; ?>" style="width:50%"></td>
                          <td>
                            <select name="class[]">
                              <option value="1" <?= ($poster['class'] == 1) ? "selected" : ''; ?>>前端</option>
                              <option value="2" <?= ($poster['class'] == 2) ? "selected" : ''; ?>>後端</option>
                              <option value="3" <?= ($poster['class'] == 3) ? "selected" : ''; ?>>其他</option>
                            </select>
                            <!-- <input type="text" name="class[]" value="" style="width:50%"> -->
                          </td>
                          <td><input class="form-control" type="text" name="text2[]" value="<?= $poster['text2']; ?>" style="width:50%"></td>
                          <td><input class="form-control" type="text" name="href[]" value="<?= $poster['href']; ?>"></td>
                          <td>
                            <?php
                            if ($key != 0) {
                            ?>
                              <input class="btn btn-warning" type="button" value="往上" onclick="sw('re_port',<?= $poster['id']; ?>,<?= $po[$key - 1]['id']; ?>)">
                            <?php
                            }
                            ?>
                            <?php
                            if ($key != (count($po) - 1)) {
                            ?>
                              <input class="btn btn-warning" type="button" value="往下" onclick="sw('re_port',<?= $poster['id']; ?>,<?= $po[$key + 1]['id']; ?>)">
                            <?php
                            }
                            ?>
                          </td>
                          <input type="hidden" name="id[]" value="<?= $poster['id']; ?>">
                          <input type="hidden" name="table" value="re_port">
                          <td class="td-actions text-right">
                            <button type="submit" rel="tooltip" title="Edit" class="btn btn-warning btn-link btn-sm">
                              <i class="material-icons">edit</i>
                            </button>
                            <button type="submit" name="del[]" value="<?= $poster['id']; ?>" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                              <i class="material-icons">close</i>
                            </button>
                          </td>
                        </tr>
                      <?php
                      }
                      ?>
                      <tr>
                        <td width="200px">
                          <input class="btn btn-warning btn-block" type="button" onclick="op('#cover','#cvr','./modal/port.php?table=re_port')" value="新增">
                        </td>
                        <td>
                          <button type="submit" rel="tooltip" title="All Edit" class="btn btn-warning btn-link btn-sm">
                            <i class="material-icons">edit</i>
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </form>
              </div>
              <div class="tab-pane" id="menu">
                <form method="post" action="./api/edit.php">
                  <table class="table">
                    <thead class="text-warning">
                      <th>顯示</th>
                      <th>內容</th>
                      <th>連結</th>
                      <th>排序</th>
                      <th>編輯</th>
                    </thead>
                    <tbody>
                      <?php

                      $menu = $Menu->all(' order by `rank` ');
                      foreach ($menu as $key => $poster) {
                      ?>
                        <tr>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="sh[]" value="<?= $poster['id']; ?>" <?= ($poster['sh'] == 1) ? 'checked' : ''; ?>>
                                <span class="form-check-sign">
                                  <span class="check"></span>
                                </span>
                              </label>
                            </div>
                          </td>
                          <td><input class="form-control" type="text" name="text[]" value="<?= $poster['text']; ?>"></td>
                          <td><input class="form-control" type="text" name="href[]" value="<?= $poster['href']; ?>"></td>
                          <td>
                            <?php
                            if ($key != 0) {
                            ?>
                              <input class="btn btn-warning" type="button" value="往上" onclick="sw('re_menu',<?= $poster['id']; ?>,<?= $menu[$key - 1]['id']; ?>)">
                            <?php
                            }
                            ?>
                            <?php
                            if ($key != (count($menu) - 1)) {
                            ?>
                              <input class="btn btn-warning" type="button" value="往下" onclick="sw('re_menu',<?= $poster['id']; ?>,<?= $menu[$key + 1]['id']; ?>)">
                            <?php
                            }
                            ?>
                          </td>
                          <input type="hidden" name="id[]" value="<?= $poster['id']; ?>">
                          <input type="hidden" name="table" value="re_menu">
                          <td class="td-actions text-right">
                            <button type="submit" rel="tooltip" title="Edit" class="btn btn-warning btn-link btn-sm">
                              <i class="material-icons">edit</i>
                            </button>
                            <button type="submit" name="del[]" value="<?= $poster['id']; ?>" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                              <i class="material-icons">close</i>
                            </button>
                          </td>
                        </tr>

                      <?php
                      }
                      ?>
                      <tr>
                        <td width="200px"><input class="btn btn-warning btn-block" type="button" onclick="op('#cover','#cvr','./modal/menu.php?table=re_menu')" value="新增"></td>
                        <td>
                          <button type="submit" rel="tooltip" title="All Edit" class="btn btn-warning btn-link btn-sm">
                            <i class="material-icons">edit</i>
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </form>
              </div>
              <div class="tab-pane" id="skill">
                <form method="post" action="./api/edit.php">
                  <table class="table">
                    <thead class="text-warning">
                      <th>顯示</th>
                      <th>技能圖片</th>
                      <th>技能主題</th>
                      <th>技能分類</th>
                      <th>排序</th>
                      <th>編輯</th>
                    </thead>
                    <tbody>
                      <?php
                      $skill = $Skill->all(' order by `rank` ');
                      foreach ($skill as $key => $poster) {
                      ?>
                        <tr>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="sh[]" value="<?= $poster['id']; ?>" <?= ($poster['sh'] == 1) ? 'checked' : ''; ?>>
                                <span class="form-check-sign">
                                  <span class="check"></span>
                                </span>
                              </label>
                            </div>
                          </td>
                          <td><img src="./front/img/portfolio/<?= $poster['img']; ?>" style="width:100px;height:100px"></td>
                          <td><input class="form-control" type="text" name="text[]" value="<?= $poster['text']; ?>" style="width:50%"></td>
                          <td>
                            <select name="class[]">
                              <option value="1" <?= ($poster['class'] == 1) ? "selected" : ''; ?>>前端</option>
                              <option value="2" <?= ($poster['class'] == 2) ? "selected" : ''; ?>>後端</option>
                              <option value="3" <?= ($poster['class'] == 3) ? "selected" : ''; ?>>其他</option>
                            </select>
                            <!-- <input type="text" name="class[]" value="" style="width:50%"> -->
                          </td>
                          <td>
                            <?php
                            if ($key != 0) {
                            ?>
                              <input class="btn btn-warning" type="button" value="往上" onclick="sw('re_skill',<?= $poster['id']; ?>,<?= $skill[$key - 1]['id']; ?>)">
                            <?php
                            }
                            ?>
                            <?php
                            if ($key != (count($skill) - 1)) {
                            ?>
                              <input class="btn btn-warning" type="button" value="往下" onclick="sw('re_skill',<?= $poster['id']; ?>,<?= $skill[$key + 1]['id']; ?>)">
                            <?php
                            }
                            ?>
                          </td>
                          <input type="hidden" name="id[]" value="<?= $poster['id']; ?>">
                          <input type="hidden" name="table" value="re_skill">
                          <td class="td-actions text-right">
                            <button type="submit" rel="tooltip" title="Edit" class="btn btn-warning btn-link btn-sm">
                              <i class="material-icons">edit</i>
                            </button>
                            <button type="submit" name="del[]" value="<?= $poster['id']; ?>" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                              <i class="material-icons">close</i>
                            </button>
                          </td>
                        </tr>
                      <?php
                      }
                      ?>
                      <tr>
                        <td width="200px">
                          <input class="btn btn-warning btn-block" type="button" onclick="op('#cover','#cvr','./modal/skill.php?table=re_skill')" value="新增">
                        </td>
                        <td>
                          <button type="submit" rel="tooltip" title="All Edit" class="btn btn-warning btn-link btn-sm">
                            <i class="material-icons">edit</i>
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </form>
              </div>
              <div class="tab-pane" id="connection">
                <form method="post" action="./api/edit.php">
                  <table class="table">
                    <thead class="text-warning">
                      <th>顯示</th>
                      <th>圖示</th>
                      <th>聯絡方式</th>
                      <th>內容</th>
                      <th>連結</th>
                      <th>排序</th>
                      <th>編輯</th>
                    </thead>
                    <tbody>
                      <?php
                      $connection = $Connection->all(' order by `rank` ');

                      foreach ($connection as $key => $poster) {
                      ?>
                        <tr>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="sh[]" value="<?= $poster['id']; ?>" <?= ($poster['sh'] == 1) ? 'checked' : ''; ?>>
                                <span class="form-check-sign">
                                  <span class="check"></span>
                                </span>
                              </label>
                            </div>
                          </td>
                          <td>
                          <input class="form-control" type="text" name="icon[]" value="<?= $poster['icon']; ?>" style="width:50%">
                          </td>
                          <td><input class="form-control" type="text" name="text[]" value="<?= $poster['text']; ?>" style="width:50%"></td>
                          <td><input class="form-control" type="text" name="text2[]" value="<?= $poster['text2']; ?>" style="width:50%"></td>
                          <td><input class="form-control" type="text" name="href[]" value="<?= $poster['href']; ?>"></td>
                          <td>
                            <?php
                            if ($key != 0) {
                            ?>
                              <input class="btn btn-warning" type="button" value="往上" onclick="sw('re_connection',<?= $poster['id']; ?>,<?= $connection[$key - 1]['id']; ?>)">
                            <?php
                            }
                            ?>
                            <?php
                            if ($key != (count($connection) - 1)) {
                            ?>
                              <input class="btn btn-warning" type="button" value="往下" onclick="sw('re_connection',<?= $poster['id']; ?>,<?= $connection[$key + 1]['id']; ?>)">
                            <?php
                            }
                            ?>
                          </td>
                          <input type="hidden" name="id[]" value="<?= $poster['id']; ?>">
                          <input type="hidden" name="table" value="re_connection">
                          <td class="td-actions text-right">
                            <button type="submit" rel="tooltip" title="Edit" class="btn btn-warning btn-link btn-sm">
                              <i class="material-icons">edit</i>
                            </button>
                            <button type="submit" name="del[]" value="<?= $poster['id']; ?>" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                              <i class="material-icons">close</i>
                            </button>
                          </td>
                        </tr>
                      <?php
                      }
                      ?>
                      <tr>
                        <td width="200px"><input class="btn btn-warning btn-block" type="button" onclick="op('#cover','#cvr','./modal/connection.php?table=re_connection')" value="新增"></td>
                        <td>
                          <button type="submit" rel="tooltip" title="All Edit" class="btn btn-warning btn-link btn-sm">
                            <i class="material-icons">edit</i>
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </form>
              </div>
              <div class="tab-pane" id="job">
                <form method="post" action="./api/edit.php">
                  <table class="table">
                    <thead class="text-warning">
                      <th>顯示</th>
                      <th>求職條件</th>
                      <th>簡介</th>
                      <th>排序</th>
                      <th>編輯</th>
                    </thead>
                    <tbody>
                      <?php
                      $job = $Job->all(' order by `rank` ');

                      foreach ($job as $key => $poster) {
                      ?>
                        <tr>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="sh[]" value="<?= $poster['id']; ?>" <?= ($poster['sh'] == 1) ? 'checked' : ''; ?>>
                                <span class="form-check-sign">
                                  <span class="check"></span>
                                </span>
                              </label>
                            </div>
                          </td>
                          <td><input class="form-control" type="text" name="text[]" value="<?= $poster['text']; ?>" style="width:50%"></td>
                          <td><input class="form-control" type="text" name="text2[]" value="<?= $poster['text2']; ?>" style="width:50%"></td>
                          <td>
                            <?php
                            if ($key != 0) {
                            ?>
                              <input class="btn btn-warning" type="button" value="往上" onclick="sw('re_job',<?= $poster['id']; ?>,<?= $job[$key - 1]['id']; ?>)">
                            <?php
                            }
                            ?>
                            <?php
                            if ($key != (count($job) - 1)) {
                            ?>
                              <input class="btn btn-warning" type="button" value="往下" onclick="sw('re_job',<?= $poster['id']; ?>,<?= $job[$key + 1]['id']; ?>)">
                            <?php
                            }
                            ?>
                          </td>
                          <input type="hidden" name="id[]" value="<?= $poster['id']; ?>">
                          <input type="hidden" name="table" value="re_job">
                          <td class="td-actions text-right">
                            <button type="submit" rel="tooltip" title="Edit" class="btn btn-warning btn-link btn-sm">
                              <i class="material-icons">edit</i>
                            </button>
                            <button type="submit" name="del[]" value="<?= $poster['id']; ?>" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                              <i class="material-icons">close</i>
                            </button>
                          </td>
                        </tr>
                      <?php
                      }
                      ?>
                      <tr>
                        <td width="200px"><input class="btn btn-warning btn-block" type="button" onclick="op('#cover','#cvr','./modal/job.php?table=re_job')" value="新增"></td>
                        <td>
                          <button type="submit" rel="tooltip" title="All Edit" class="btn btn-warning btn-link btn-sm">
                            <i class="material-icons">edit</i>
                          </button>
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