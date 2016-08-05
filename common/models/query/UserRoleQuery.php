<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\base\UserRole]].
 *
 * @see \common\models\base\UserRole
 */
class BaseUserRoleQuery extends \common\libs\ClsActiveRecord
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return \common\models\base\UserRole[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \common\models\base\UserRole|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}