<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "client_logo".
 *
 * @property integer $client_logo_id
 * @property string $filename
 * @property string $title
 * @property string $created_date
 * @property integer $active
 */
class ClientLogo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'client_logo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['filename'], 'string'],
            [['created_date'], 'safe'],
            [['active'], 'integer'],
            [['title'], 'string', 'max' => 145],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'client_logo_id' => 'Client Logo ID',
            'filename' => 'Filename',
            'title' => 'Title',
            'created_date' => 'Created Date',
            'active' => 'Active',
        ];
    }

    /**
     * @inheritdoc
     * @return ClientLogoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ClientLogoQuery(get_called_class());
    }
}
