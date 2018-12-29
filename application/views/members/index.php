<?php if(isset($ok)):?><div class="alert alert-info"><?php echo $ok?></div><?php endif;?>
<?php if(isset($error)):?><div class="alert alert-danger"><?php echo $error?></div><?php endif;?>
<div class="container">
<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div> 
<?php if($this->session->flashdata('flash')): ?>
<?php endif; ?>
<div class="row mt-4">
</div>
<div class="row mt-12">
  <div class="col-md-6">
    <a href="<?php echo site_url()?>/city" class="btn btn-info">1.CRUD City</a>
    <a href="<?php echo site_url()?>/company" class="btn btn-info">2.CRUD Company</a>
    <a href="<?=base_url(); ?>members/tambah" class="btn btn-success">Add Data</a>
  </div>
  <div class="col-md-6">
    <form action="" method="post" enctype="multipart/form-data" class="form-inline">
    <div class="form-group">
      <input type="file" class="form-control" name="csv">
    </div>
    <button id="save" class="btn btn-info">Import Csv</button>
    </form>
  </div>
</div>

	<div class="row mt-2">
		<div class="col-md-12">
			<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Fullname</th>
      <th scope="col">Email</th>
      <th scope="col">Company</th>
      <th scope="col">City</th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  	<?php $i=1; ?>
  	<?php foreach($members as $mbr) : ?>
    <tr>
      <th><?= $i; ?></th> 
      <td><?= $mbr['fullname']; ?></td>
      <td><?= $mbr['email']; ?></td>
      <td><?= $mbr['name']; ?></td>
      <td><?= $mbr['cityname']; ?>, <?= $mbr['country']; ?></td>
      <td><a href="<?= base_url(); ?>members/edit/<?= $mbr['id']; ?>" class='btn btn-warning'>Edit</a></td>
      <td><a href="<?=base_url(); ?>members/detail/<?= $mbr['id']; ?>" class='btn btn-info'>Detail</a></td>
      <td><a href="<?= base_url(); ?>members/hapus/<?= $mbr['id']; ?>" class='btn btn-danger'>Delete</a></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
  </tbody>
</table>
		</div>
	</div>
</div>