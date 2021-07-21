    <?php require_once('./header.php') ?>
    <div class="main-panel">
        <div class="content-wrapper">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Detail User ---</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <a href="index.php?admin=admin&mod=user&act=list" class="btn btn-primary">Quay lại</a>
			 		<table class="table text-center">
			 			<thead>
			                <th>ID</th>
			                <th>Name</th>
			                <th>Email</th>
			                <th>Avatar</th>
			                <th>Created At</th>
			            </thead>
			 			<tr>
			 				<td><?= $user['id'] ?></td>
			 				<td><?= $user['name'] ?></td>
			 				<td><?= $user['email'] ?></td>
			 				<td><?= $user['avatar'] ?></td>
			 				<td><?= $user['created_at'] ?></td>
			 			</tr>
			 		</table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
<?php require_once('./footer.php') ?>