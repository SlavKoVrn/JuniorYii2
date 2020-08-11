<?php

namespace console\controllers;

use common\models\Task;

use yii\console\Controller;
use yii\console\ExitCode;
use yii\db\Migration;

class InputController extends Controller
{
    public function actionIndex()
    {
        $migration=new Migration();

        $migration->truncateTable(Task::tableName());

        $faker = \Faker\Factory::create('ru_RU');

        for ($i=1;$i<=100;$i++){
            $migration->insert(Task::tableName(),[
                'id'=>$i,
                'name'=> $faker->firstName.' '.$faker->lastName,
                'email'=>$faker->email,
                'content'=>$faker->text(),
                'completed'=>$faker->numberBetween(0,1),
                'created_at'=>time(),
                'updated_at'=>time(),
            ]);
        }

        return ExitCode::OK;
    }
}
