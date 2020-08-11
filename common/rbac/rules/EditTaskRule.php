<?php

namespace common\rbac\rules;

use yii\rbac\Rule;

class EditTaskRule extends Rule
{
    public $name = 'editAdmin';

    public function execute($userId, $item, $params)
    {
        if (empty($params['user'])) {
            return false;
        }

        return $params['user']->username == 'admin';
    }
}
