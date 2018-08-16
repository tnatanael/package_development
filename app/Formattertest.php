<?php

namespace App;

use TNatanael\BrFormatter\BaseModel;

class Formattertest extends BaseModel
{
    protected $table = 'formattertest';

    //Date Attributes
    public $date_attributes = [
        'date'
    ];

    //Datetime Attributes
    public $datetime_attributes = [
        'datetime',
    ];

    //Money Attributes
    public $money_attributes = [
        'money',
    ];

    //Numeric Attributes
    public $numeric_attributes = [
        'numeric'
    ];

    //Boolean Attributes
    public $boolean_attributes = [
        'boolean',
    ];
}
