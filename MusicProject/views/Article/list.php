<?php require_once('./header.php') ?>
<div class="main-panel">
    <?php 
    if(isset($_COOKIE['success'])){
        ?>
        <div class="alert alert-info">
            <strong><?=$_COOKIE['success']?></strong>
        </div>
    <?php } ?>
    <?php 
    if(isset($_COOKIE['error'])){
        ?>
        <div class="alert alert-danger">
            <strong><?=$_COOKIE['error']?></strong>
        </div>
    <?php } ?>
    <div class="content-wrapper">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">ARTICLE ---</h4>
          <div class="row">
            <div class="col-12">
              <div class="table-responsive">
                <a href="index.php?admin=admin&mod=article&act=create" class="btn btn-primary mb-3">Add New Article</a>
                <table id="order-listing" class="table">
                    <thead>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </thead>
                    <?php foreach ($articles as $art) {
                       ?>
                       <tr>
                        <td><?= $art ['id'] ?></td>
                        <td><?= $art['title'] ?></td>
                        <td>
                            <?= $art['content'] ?>
                        </td>
                        <td><?= $art['created_at'] ?></td>
                        <td>
                            <a href="index.php?admin=admin&mod=article&act=detail&id=<?= $art ['id'] ?>" class="btn btn-primary">Detail</a>
                            <a href="index.php?admin=admin&mod=article&act=edit&id=<?= $art ['id'] ?>" class="btn btn-success">Edit</a>
                            <a href="index.php?admin=admin&mod=article&act=delete&id=<?= $art ['id'] ?>" class="btn btn-danger" <?php if ($_SESSION['auth']['permission'] == 0 ) {
                              echo 'style="display: none;"';
                          } ?>>Delete</a>
                      </td>
                  </tr>
              <?php } ?>      
          </table>
      </div>
  </div>
</div>
</div>
</div>
</div>
<?php require_once('./footer.php') ?>