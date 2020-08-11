<?php

namespace console\controllers;

use common\rbac\Rbac;
use common\rbac\rules\EditTaskRule;
use Yii;
use yii\console\Controller;

class RbacController extends Controller
{
    public function actionInit()
    {
        $auth = Yii::$app->authManager;
        $auth->removeAll();

        $rule = new EditTaskRule();
        $auth->add($rule);

        $editTask = $auth->createPermission(Rbac::EDIT_TASK);
        $editTask->ruleName = $rule->name;
        $auth->add($editTask);

        $user = $auth->createRole('user');
        $auth->add($user);
        $auth->addChild($user, $editTask);
    }
}