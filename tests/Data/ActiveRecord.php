<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace Yiisoft\ActiveRecord\Tests\Data;

/**
 * ActiveRecord is ...
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class ActiveRecord extends \Yiisoft\ActiveRecord\ActiveRecord
{
    public static $db;

    public static function getDb()
    {
        return self::$db;
    }
}
