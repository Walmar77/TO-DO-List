<h2><?php echo $varInView;?></h2>

<div>
	<?php foreach($arrayInView as $item): ?>
	<p>
		<a href="/site/view<?=$item->id?>"><?php echo $item->title ?></a>
	</p>
<?php endforeach ?>
</div>