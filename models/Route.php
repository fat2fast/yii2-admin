<?php

namespace fat2fast\admin\models;

use yii\base\Model;

/**
 * Route
 *
 * @author Misbahul D Munir <misbahuldmunir@gmail.com>
 * @since 1.0
 */
class Route extends Model
{
    const PREFIX_ADVANCED = '@';
    const PREFIX_BASIC = '/';
    /**
     * @var string Route value. 
     */
    public $name;

    public $data;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return[
            [['name'], 'required'],
        ];
    }

    public function save()
    {
        
    }
}