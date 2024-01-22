<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%teams}}".
 *
 * @property int $ID
 * @property int|null $sales
 * @property string|null $month
 * @property string|null $teamname
 */
class Teams extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%teams}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sales'], 'integer'],
            [['month', 'teamname'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => Yii::t('app', 'ID'),
            'sales' => Yii::t('app', 'Sales'),
            'month' => Yii::t('app', 'Month'),
            'teamname' => Yii::t('app', 'Teamname'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return TeamsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TeamsQuery(get_called_class());
    }
}
