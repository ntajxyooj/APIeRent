<?php

namespace app\models;

use Yii;
use \app\models\base\CurrencyTranslate as BaseCurrencyTranslate;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "currency_translate".
 */
class CurrencyTranslate extends BaseCurrencyTranslate
{

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
