<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\base\AuthAssignment]].
 *
 * @see \common\models\base\AuthAssignment
 */
class BaseAuthAssignmentQuery extends \common\libs\ClsActiveRecord
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return \common\models\base\AuthAssignment[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \common\models\base\AuthAssignment|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}