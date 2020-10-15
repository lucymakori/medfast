<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "home".
 *
 * @property int $home_id
 * @property string $home_icon
 * @property string $home_tittle
 * @property string $home_content
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 * @property string $created_by
 */
class Home extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'home';
    }
       public function behaviors()
    {
        return [
            \yii\behaviors\TimestampBehavior::className(),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['home_icon', 'home_tittle', 'home_content', 'status', 'created_at', 'updated_at', 'created_by'], 'required'],
            [['home_content', 'status'], 'string'],
            [['home_icon', 'home_tittle', 'created_by'], 'string', 'max' => 100],
            [['created_at', 'updated_at'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'home_id' => 'Home ID',
            'home_icon' => 'Home Icon',
            'home_tittle' => 'Home Tittle',
            'home_content' => 'Home Content',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
        ];
    }
}
