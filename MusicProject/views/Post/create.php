    <?php require_once('./header.php') ?>
    <div class="main-panel">
        <div class="content-wrapper">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Add New Post</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <a href="?admin=admin&mod=post&act=list" class="btn btn-primary">Quay lại</a>
                    <form action="?admin=admin&mod=post&act=store" method="POST" role="form" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" id="" placeholder="" name="name" required>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" class="form-control" id="" placeholder="" name="description" required>
                        </div>
                        <div class="form-group">
                            <label>Song Lyric</label>
                            <input type="text" class="form-control" id="" placeholder="" name="song_lyric" required>
                        </div>
                        <div class="form-group">
                            <label>View</label>
                            <input type="text" class="form-control" id="" placeholder="" name="view" required>
                        </div>
                        <div class="form-group">
                            <label>Type</label>
                            <select name="category_id" id="category_id" class="form-control">
                                <?php 
                                    foreach ($category as $cate) {
                                 ?>
                              <option value="<?= $cate['id'] ?>"><?= $cate['name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Music</label>
                            <input type="file" name="music" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Avatar</label>
                            <input type="file" name="avatar" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Singer</label>
                            <select name="singer_id" id="singer_id" class="form-control">
                                <?php 
                                    foreach ($singer as $sin) {
                                 ?>
                              <option value="<?= $sin['id'] ?>"><?= $sin['name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" name="user_id" class="form-control" id="" value="<?= $_SESSION['auth']['id']?>" hidden>
                        </div>
                        <button type="submit" class="btn btn-primary">EDIT</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
<?php require_once('./footer.php') ?>