<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tmtvendor".
 *
 * @property integer $vendor_id
 
 * @property string $name
 * @property string $phone
 * @property string $email
 * @property string $comment
 * @property string $firmname
 * @property string $website
 * @property string $business_type
 * @property integer $active
 * @property string $created_date
 *
 
 */
class Tmtvendor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tmtvendor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['comment'], 'string'],
            [['created_date'], 'safe'],
            [['name', 'firmname', 'website', 'business_type'], 'string', 'max' => 255],
            [['phone', 'email'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'vendor_id' => 'Vendor ID',
            'name' => 'Name',
            'phone' => 'Phone',
            'email' => 'Email',
            'comment' => 'Address',
			'firmname' => 'Firm Name',
			'website' => 'Website',
			'business_type' => 'Business Type',
            'active' => 'Active',
            'created_date' => 'Created Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
   
    /**
     * @inheritdoc
     * @return TmtvendorQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TmtvendorQuery(get_called_class());
    }
}
