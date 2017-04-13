<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[ClientLogo]].
 *
 * @see ClientLogo
 */
class ClientLogoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return ClientLogo[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return ClientLogo|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
