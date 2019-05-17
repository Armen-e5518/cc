<?php

namespace api\modules\v1\controllers;


use api\components\AddPart;
use api\modules\v1\models\Products;
use common\models\Participation;
use yii\filters\auth\CompositeAuth;
use yii\filters\auth\HttpBasicAuth;
use yii\filters\auth\HttpBearerAuth;
use yii\filters\auth\QueryParamAuth;
use yii\rest\ActiveController;


/**
 * Class ProductsController
 * @package api\modules\v1\controllers
 */
class ParticipationsController extends ActiveController
{

    public $modelClass = 'beckend\modules\Participation';

    public function actions()
    {
        $actions = parent::actions();
        // disable the "delete", "create", "update", "view" and "options" actions
        unset($actions['delete'], $actions['create'], $actions['update'], $actions['view'], $actions['options']);
        return $actions;
    }

    /**
     * @return array|null
     */
    public function actionAaa()
    {
        return [
            'res' => 1
        ];
    }

    /**
     * @return array
     */
    public function actionAddNew()
    {
        $model = new Participation();
        if (\Yii::$app->request->post() && $model->load(\Yii::$app->request->post(), '')) {
            AddPart::NewPart($model);
            if ($model->save()) {
                return [
                    'return' => 'ok',
                    'timestamp' => strtotime("now"),
                    'result' => $model,
                    'error' => 0,
                    'message' => ''
                ];
            }
            return [
                'return' => 'nok',
                'timestamp' => strtotime("now"),
                'result' => [],
                'error' => 1,
                'message' => $model->getErrors()
            ];
        }
        return [
            'error' => 'M_ERR_1 :'
        ];
    }

///getStatut?id=&amp;where=
    public function actionGetStatus()
    {
        $get = \Yii::$app->request->get();
        if ($get) {
            if ($get['where'] == 'host') {
                $date = Participation::findOne(['idHost' => $get['id']]);
            }
            if ($get['where'] == 'remote)') {
                $date = Participation::findOne(['idRemote' => $get['id']]);
            }
            return [
                'return' => 'ok',
                'timestamp' => strtotime("now"),
                'result' => $date,
                'error' => 0,
                'message' => ''
            ];
        }
        return [
            'error' => 'M_ERR_1 :'
        ];
    }

}