<?php

namespace app\controllers;

use Yii;
use app\models\Menu;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MenuController implements the CRUD actions for Menu model.
 */
class MenuController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Menu models.
     * @return mixed
     */
    public function actionIndex()
    {
        $this->layout = 'DashboardLayout';

        if(\Yii::$app->user->isGuest)
              return $this->redirect(['/user/login']);
          else
          {
        $dataProvider = new ActiveDataProvider([
            'query' => Menu::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }
}
    /**
     * Displays a single Menu model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {

            $this->layout = 'DashboardLayout';
         if(\Yii::$app->user->isGuest)
              return $this->redirect(['/user/login']);
          else
          {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }
}

    /**
     * Creates a new Menu model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $this->layout = 'DashboardLayout';

        if(\Yii::$app->user->isGuest)
              return $this->redirect(['/user/login']);
          else
          {
        $model = new Menu();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }
}

    /**
     * Updates an existing Menu model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $this->layout = 'DashboardLayout';
        if(\Yii::$app->user->isGuest)
              return $this->redirect(['/user/login']);
          else
          {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }
}

    /**
     * Deletes an existing Menu model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->layout = 'DashboardLayout';
        if(\Yii::$app->user->isGuest)
              return $this->redirect(['/user/login']);
          else
          {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }
}

    /**
     * Finds the Menu model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Menu the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        $this->layout = 'DashboardLayout';
        if(\Yii::$app->user->isGuest)
              return $this->redirect(['/user/login']);
          else
          {
        if (($model = Menu::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
}