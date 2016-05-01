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
 * Description of Dictionary
 *
 * @author vistart <i@vistart.name>
 */
class Dictionary extends \rhoone\extension\Dictionary
{

    public function getDictionary()
    {
        return [
            [
                0 => 'task',
                '任务',
                'タスク',
            ],
        ];
    }
}
