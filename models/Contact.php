<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property integer $contact_id

 * @property string $contact_name
 * @property string $phone
 * @property string $email
 * @property string $subject
 * @property string $message
 * @property integer $active
 * @property string $created_date
 *

 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            
            [['message'], 'string'],
            [['created_date'], 'safe'],
            [['contact_name', 'subject'], 'string', 'max' => 145],
            [['phone', 'email'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'contact_id' => 'Contact ID',
            'contact_name' => 'Contact Name',
            'phone' => 'Phone',
            'email' => 'Email',
            'subject' => 'Subject',
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
        return new ContactQuery(get_called_class());
    }
}
