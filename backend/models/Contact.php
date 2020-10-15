<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property int $contact_id
 * @property string $contact_icon
 * @property string $contact_content
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 * @property string $created_by
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contact';
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
            [['contact_icon', 'contact_content', 'status', 'created_at', 'updated_at', 'created_by'], 'required'],
            [['contact_content', 'status'], 'string'],
            [['contact_icon', 'created_by'], 'string', 'max' => 100],
            [['created_at', 'updated_at'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'contact_id' => 'Contact ID',
            'contact_icon' => 'Contact Icon',
            'contact_content' => 'Contact Content',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
        ];
    }
}
