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

/**
 * Description of Module
 *
 * @author vistart <i@vistart.name>
 */
class Module extends \yii\base\Module implements \yii\base\BootstrapInterface
{

    public $id = 'rhoone-task';
    public $controllerNamespace = 'rhoone\task\controllers';
    
    public function bootstrap($app)
    {
        if ($app instanceof \yii\web\Application) {
            $rules = [
                'task' => $this->id . '/task/index',
                'task/<id:\w+>' => $this->id . '/task/detail'
            ];
            $app->getUrlManager()->addRules($rules);
        }
    }

}
