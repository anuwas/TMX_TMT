<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "feedback".
 *
 * @property integer $feedback_id
 
 * @property string $name
 * @property string $phone
 * @property string $email
 * @property string $role
 * @property string $message
 * @property integer $active
 * @property string $created_date
 *
 
 */
class Feedback extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'feedback';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
           
            [['message'], 'string'],
            [['created_date'], 'safe'],
            [['name'], 'string', 'max' => 255],
            [['phone', 'role', 'email'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'feedback_id' => 'Feedback ID',
            'name' => 'Name',
            'phone' => 'Phone',
            'email' => 'Email',
			'role' => 'Role',
            'message' => 'Message',
            'active' => 'Active',
            'created_date' => 'Created Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
   
    /**
     * @inheritdoc
     * @return ContactQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new FeedbackQuery(get_called_class());
    }
}
