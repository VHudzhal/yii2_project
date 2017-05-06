<?php
/**
 * Created by PhpStorm.
 * User: Vladymyrlem
 * Date: 04.05.2017
 * Time: 17:05
 */

namespace app\models;


use yii\db\ActiveRecord;

class UserForm extends ActiveRecord
{
    public static function tableName()
    {
        return 'users_list';

    }
}