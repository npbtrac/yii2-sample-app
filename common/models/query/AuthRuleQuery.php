<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\base\AuthRule]].
 *
 * @see \common\models\base\AuthRule
 */
class BaseAuthRuleQuery extends \common\libs\ClsActiveRecord
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return \common\models\base\AuthRule[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \common\models\base\AuthRule|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}