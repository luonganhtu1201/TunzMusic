    <?php require_once('./header.php') ?>
    <div class="main-panel">
        <div class="content-wrapper">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Detail Category ---</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <a href="index.php?admin=admin&mod=article&act=list" class="btn btn-primary">Quay lại</a>
			 		<table class="table text-center">
			 			<thead>
			                <th>ID</th>
			                <th>Title</th>
			                <th>Slug</th>
			                <th>Thumbnail</th>
			                <th>Content</th>
			                <th>Created at</th>
			            </thead>
			 			<tr>
			 				<td><?= $article['id'] ?></td>
			 				<td><?= $article['title'] ?></td>
			 				<td><?= $article['slug'] ?></td>
			 				<td><?= $article['thumbnail'] ?></td>
			 				<td><?= $article['content'] ?></td>
			 				<td><?= $article['created_at'] ?></td>
			 			</tr>
			 		</table>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
<?php require_once('./footer.php') ?>