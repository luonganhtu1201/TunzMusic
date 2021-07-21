    <?php require_once('./header.php') ?>
    <div class="main-panel">
        <div class="content-wrapper">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Update Category ---</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <a href="index.php?admin=admin&mod=category&act=list" class="btn btn-primary">Quay lại</a>
                    <form action="?admin=admin&mod=category&act=update" method="POST" role="form" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="hidden" class="form-control" id="" placeholder="" name="id" value="<?= $category['id'] ?>">
                            <input type="text" class="form-control" id="" placeholder="" name="name" value="<?= $category['name'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" class="form-control" id="" placeholder="" name="description" value="<?= $category['description'] ?>" required>
                        </div>
                        <button type="submit" class="btn btn-primary">UPDATE</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
<?php require_once('./footer.php') ?>