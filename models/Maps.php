<?php

namespace app\models;

use Yii;
use \app\models\base\Maps as BaseMaps;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "maps".
 */
class Maps extends BaseMaps
{
    public $search;

    public function behaviors()
    {
        return ArrayHelper::merge(
            parent::behaviors(),
            [
                # custom behaviors
            ]
        );
    }

    public function rules()
    {
        return ArrayHelper::merge(
            parent::rules(),
            [
                # custom validation rules
            ]
        );
    }
}
