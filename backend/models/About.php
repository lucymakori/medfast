<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "about".
 *
 * @property int $about_id
 * @property string $about_icon
 * @property string $about_tittle
 * @property string $about_content
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 * @property string $created_by
 */
class About extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'about';
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
            [['about_icon', 'about_tittle', 'about_content', 'status', 'created_at', 'updated_at', 'created_by'], 'required'],
            [['about_content', 'status'], 'string'],
            [['about_icon', 'about_tittle', 'created_at', 'updated_at', 'created_by'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'about_id' => 'About ID',
            'about_icon' => 'About Icon',
            'about_tittle' => 'About Tittle',
            'about_content' => 'About Content',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
        ];
    }
}
