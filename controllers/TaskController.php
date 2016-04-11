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

namespace rhoone\task\controllers;

/**
 * Description of TaskController
 *
 * @author vistart <i@vistart.name>
 */
class TaskController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->renderPartial('index');
    }
    
    public function actionList()
    {
        return $this->renderPartial('list');
    }
}
