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
          <h4 class="card-title">USERS ---</h4>
          <div class="row">
            <div class="col-12">
              <div class="table-responsive">
                <a href="?admin=admin&mod=user&act=create" class="btn btn-primary mb-3">Add New User</a>
                <table id="order-listing" class="table text-center">
                    <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Avatar</th>
                        <th>Action</th>
                    </thead>
                    <?php foreach ($users as $us) {
                       ?>
                       <tr>
                        <td><?= $us['id'] ?></td>
                        <td><?= $us['name'] ?></td>
                        <td><?= $us['email'] ?></td>
                        <td>
                            <img src="<?= "public/uploads/".$us['avatar'] ?>" width="100px" height="100px">
                        </td>
                        <td>
                            <a href="?admin=admin&mod=user&act=detail&id=<?= $us['id'] ?>" class="btn btn-primary">Detail</a>
                            <a href="?admin=admin&mod=user&act=edit&id=<?= $us['id'] ?>" class="btn btn-success">Edit</a>
                            <a href="?admin=admin&mod=user&act=delete&id=<?= $us['id'] ?>" class="btn btn-danger" <?php if ($_SESSION['auth']['permission'] == 0 ) {
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