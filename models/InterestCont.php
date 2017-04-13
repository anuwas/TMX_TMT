<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "interestcont_email".
 *
 * @property integer $interestcont_id
 * @property string $interestcont_name
 * @property string $interestcont_email
 * @property integer $active
 * @property string $created_date
 *
 * @property Quickcon[] $quickcons
 */
class InterestCont extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'interestcont_email';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['interestcont_name', 'interestcont_email'], 'required'],
            [['active'], 'integer'],
            [['created_date'], 'safe'],
            [['interestcont_name', 'interestcont_email'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'interestcont_id' => 'InterestContact ID',
            'interestcont_name' => 'InterestContact Name',
            'interestcont_email' => 'InterestContact Email',
            'active' => 'Active',
            'created_date' => 'Created Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQuickcons()
    {
        return $this->hasMany(Quickcon::className(), ['interestcont_id' => 'interestcont_id']);
    }

    /**
     * @inheritdoc
     * @return InterestContQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new InterestContQuery(get_called_class());
    }
}
