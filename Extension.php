<?php

/**
 *  _   __ __ _____ _____ ___  ____  _____
 * | | / // // ___//_  _//   ||  __||_   _|
 * | |/ // /(__  )  / / / /| || |     | |
 * |___//_//____/  /_/ /_/ |_||_|     |_|
 * @link https://vistart.name/
 * @copyright Copyright (c) 2016 vistart
 * @license https://vistart.name/license/
 */

namespace rhoone\task;

use Yii;

/**
 * Description of Extension
 *
 * @author vistart <i@vistart.name>
 */
class Extension extends \rhoone\extension\Extension
{
    public static function id()
    {
        return "task";
    }

    public static function name()
    {
        return "Task";
    }

    public function search($keywords)
    {
        return Yii::$app->runAction('/rhoone-task/task/list');
    }
    
    public static function getDictionary()
    {
        return [
            'task' => [
                'task',
                '任务',
                'タスク',
            ],
        ];
    }

    public static function getModule()
    {
        return [
            'class' => Module::className(),
            'id' => 'rhoone-task',
        ];
    }
}
