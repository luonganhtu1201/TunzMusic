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
          <h4 class="card-title">CATEGORIES ---</h4>
          <div class="row">
            <div class="col-12">
              <div class="table-responsive">
                <a href="index.php?admin=admin&mod=category&act=create" class="btn btn-primary mb-3">Add New Category</a>
                <table id="order-listing" class="table">
                    <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Description</th>
                        <th>Action</th>
                    </thead>
                    <?php foreach ($categories as $cate) {
                       ?>
                       <tr>
                        <td><?= $cate ['id'] ?></td>
                        <td><?= $cate['name'] ?></td>
                        <td>
                            <?= $cate['slug'] ?>
                        </td>
                        <td><?= $cate['description'] ?></td>
                        <td>
                            <a href="index.php?admin=admin&mod=category&act=detail&id=<?= $cate ['id'] ?>" class="btn btn-primary">Detail</a>
                            <a href="index.php?admin=admin&mod=category&act=edit&id=<?= $cate ['id'] ?>" class="btn btn-success">Edit</a>
                            <a href="index.php?admin=admin&mod=category&act=delete&id=<?= $cate ['id'] ?>" class="btn btn-danger" <?php if ($_SESSION['auth']['permission'] == 0 ) {
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