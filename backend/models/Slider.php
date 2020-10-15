<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "slider".
 *
 * @property int $slider_id
 * @property string $slider_content
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 * @property string $created_by
 * @property string $slider_file
 */
class Slider extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'slider';
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
            [['slider_id', 'slider_content', 'status', 'created_at', 'updated_at', 'created_by', 'slider_file'], 'required'],
            [['slider_id'], 'integer'],
            [['slider_content'], 'string'],
            [['status', 'updated_at', 'created_by', 'slider_file'], 'string', 'max' => 100],
            [['created_at'], 'string', 'max' => 50],
            [['slider_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'slider_id' => 'Slider ID',
            'slider_content' => 'Slider Content',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'slider_file' => 'Slider File',
        ];
    }
}
