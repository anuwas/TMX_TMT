<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "quick_contact".
 *
 * @property integer $quick_contact_id
  * @property integer $interestcont_id
 * @property string $name
 * @property string $phone
 * @property string $email
 * @property string $interest
 * @property string $message
 * @property integer $active
 * @property string $created_date
 *
  * @property InterestCont $interestCont
 */
class Quickcon extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'quick_contact';
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
			 [['interestcont_id'], 'exist', 'skipOnError' => true, 'targetClass' => InterestCont::className(), 'targetAttribute' => ['interestcont_id' => 'interestcont_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'quick_contact_id' => 'Quick Contact ID',
			'interestcont_id' => 'Interest Contact ID',
            'name' => 'Name',
            'phone' => 'Phone',
            'email' => 'Email',
			'interest' => 'Interest',
            'message' => 'Message',
            'active' => 'Active',
            'created_date' => 'Created Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
	 
	  public function getInterestCont()
    {
        return $this->hasOne(InterestCont::className(), ['interestcont_id' => 'interestcont_id']);
    }

   
    /**
     * @inheritdoc
     * @return QuickconQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new QuickconQuery(get_called_class());
    }
}
