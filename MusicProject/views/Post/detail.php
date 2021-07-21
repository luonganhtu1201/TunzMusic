    <?php require_once('./header.php') ?>
    <div class="main-panel">
        <div class="content-wrapper">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Detail Post ---</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <a href="index.php?admin=admin&mod=post&act=list" class="btn btn-primary">Quay lại</a>
                    <table class="w-100 table-striped table-dark text-center mt-5">
                        <thead>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Avatar</th>
                            <th>Music</th>
                            <th>Lyric</th>
                        </thead>
                        <tr>
                            <td><?= $post['id'] ?></td>
                            <td><?= $post['name'] ?></td>
                            <td><?= $post['description'] ?></td>
                            <td><img src="<?= "public/uploads/".$post['avatar'] ?>" width="100px" height="100px" style="border-radius: 50%;"></td>
                            <td>
                                <audio controls>
                                    <source src="<?= "public/uploads/Music".$post['music']?>" type="audio/mpeg">
                                </audio>
                            </td>
                            <td><?= $post['song_lyric']?></td>
                        </tr>
                    </table>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
<?php require_once('./footer.php') ?>