<?php foreach ($data as $k => $v): ?>
	<div class = "col-3">
		<div class="card" style="width: 18rem;">
		  <img src="<?php echo $v['img'];?>" class="card-img-top" alt="...">
		  <div class="card-body">
		    <h5 class="card-title"><?php echo $v['title'];?></h5>
		    <p class="card-text"></p>
		    <a href="./single.php?id=<?php echo $v['id'];?>" class="btn btn-secondary">Go somewhere</a>
		  </div>
		</div>
	</div>
<?php endforeach; ?>