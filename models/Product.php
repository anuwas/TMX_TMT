<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property integer $product_id
 * @property string $product_title
 * @property string $product_heading
 * @property string $filename
 * @property string $product_short_desc
 * @property string $product_long_desc
 * @property integer $active
 * @property string $created_date
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_title', 'product_heading', 'filename', 'product_short_desc', 'product_long_desc'], 'required'],
            [['product_short_desc', 'product_long_desc'], 'string'],
            [['active'], 'integer'],
            [['created_date'], 'safe'],
            [['product_title', 'filename'], 'string', 'max' => 255],
            [['product_heading'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'product_id' => 'Product ID',
            'product_title' => 'Product Title',
            'product_heading' => 'Product Heading',
            'filename' => 'Filename',
            'product_short_desc' => 'Product Short Desc',
            'product_long_desc' => 'Product Long Desc',
            'active' => 'Active',
            'created_date' => 'Created Date',
        ];
    }

    /**
     * @inheritdoc
     * @return ProductQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ProductQuery(get_called_class());
    }
}
