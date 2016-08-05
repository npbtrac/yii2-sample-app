<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\base\User]].
 *
 * @see \common\models\base\User
 */
class BaseUserQuery extends \common\libs\ClsActiveRecord
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return \common\models\base\User[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \common\models\base\User|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}