<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\base\UserProfile]].
 *
 * @see \common\models\base\UserProfile
 */
class BaseUserProfileQuery extends \common\libs\ClsActiveRecord
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return \common\models\base\UserProfile[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \common\models\base\UserProfile|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}