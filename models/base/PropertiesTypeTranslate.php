<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace app\models\base;

use Yii;

/**
 * This is the base-model class for table "properties_type_translate".
 *
 * @property integer $id
 * @property string $name
 * @property string $language
 * @property integer $properties_type_id
 *
 * @property \app\models\PropertiesType $propertiesType
 * @property string $aliasModel
 */
abstract class PropertiesTypeTranslate extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'properties_type_translate';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'properties_type_id'], 'required'],
            [['properties_type_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['language'], 'string', 'max' => 45],
            [['properties_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => \app\models\PropertiesType::className(), 'targetAttribute' => ['properties_type_id' => 'id']]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('models', 'ID'),
            'name' => Yii::t('models', 'Name'),
            'language' => Yii::t('models', 'Language'),
            'properties_type_id' => Yii::t('models', 'Properties Type ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPropertiesType()
    {
        return $this->hasOne(\app\models\PropertiesType::className(), ['id' => 'properties_type_id']);
    }




}