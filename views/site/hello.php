<h2><?php echo $varInView;?></h2>

<div>
	<?php foreach($arrayInView as $item): ?>
	<p>
		<a href="<?= yii\helpers\Url::to(['site/view', 'id' => $item->id])?>"><?php echo $item->title ?></a>
	</p>
<?php endforeach ?>
</div>