<?php

namespace app\modules\admin\controllers;

use yii;
use yii\web\Controller;
use app\models\MyList;
use yii\web\NotFoundHttpException;

class DefaultController extends Controller {

	public function actionIndex() {
		$array = MyList::getAll();
		return $this->render('index', ['model' => $array]);
	}

	public function actionEdit($id) {
		$one = MyList::getOne($id);

		if($_POST['MyList']) {
			$one->title = $_POST['MyList']['title'];
			$one->discription = $_POST['MyList']['discription'];
			//$one->attributes = $_POST['MyList'];
			if($one->validate() && $one->save()) {
				return $this->redirect(['index']);
			}
		}

		return $this->render('edit', ['one' => $one]);
	}

	public function actionCreate() {
		$model = new MyList();

		if($_POST['MyList']) {
			$model->title = $_POST['MyList']['title'];
			$model->discription = $_POST['MyList']['discription'];
			if($model->validate() && $model->save()) {
				return $this->redirect(['index']);
			}
		}

		return $this->render('create', ['model' => $model]);
	}

	public function actionDelete($id) {
		$model = MyList::getOne($id);
		$model->delete();
		return $this->redirect(['index']);
	}
}