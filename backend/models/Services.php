<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "services".
 *
 * @property int $service_id
 * @property string $service_icon
 * @property string $service_tittle
 * @property string $service_content
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 * @property string $created_by
 */
class Services extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'services';
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
            [['service_icon', 'service_tittle', 'service_content', 'status', 'created_at', 'updated_at', 'created_by'], 'required'],
            [['service_content', 'status'], 'string'],
            [['service_icon', 'service_tittle', 'created_by'], 'string', 'max' => 100],
            [['created_at', 'updated_at'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'service_id' => 'Service ID',
            'service_icon' => 'Service Icon',
            'service_tittle' => 'Service Tittle',
            'service_content' => 'Service Content',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
        ];
    }
}
