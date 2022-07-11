<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer_data extends Model
{
    public $table = 'customer_datas';
    public $primarykey = 'id';
    public $incrementing = true;
}
