<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParamListValue extends Model {
    protected $table = 'param_list_values';
    protected $fillable = [
        'list_id',  // ссылка на список значений
        'value'     // значение в списке
    ];
}
