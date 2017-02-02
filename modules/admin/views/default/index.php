<h1>Админка</h1>
<a href="<?= yii\helpers\Url::to('admin/default/create')?>" class="btn btn-primary">Создать</a>
<table class="table">
	<thead>
		<tr>
			<td>#</td>
			<td>Название</td>
			<td>Действия</td>
		</tr>
	</thead>

	<tbody>
		<?php foreach($model as $item):?>
			<tr>
				<td><?= $item->id ?></td>
				<td><?= $item->title ?></td>
				<td>
					<a href="<?= yii\helpers\Url::to(['admin/default/edit', 'id' => $item->id])?>">Редактировать</a>
					|
					<a href="<?= yii\helpers\Url::to(['admin/default/delete', 'id' => $item->id])?>">Удалить</a>
				</td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>