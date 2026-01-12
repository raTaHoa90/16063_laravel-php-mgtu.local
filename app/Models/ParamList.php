<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParamList extends Model
{
    const
        TYPE_TEXT_LIST = 0,
        TYPE_COLOR_LIST = 1,
        TYPE_IMAGE_LIST = 2,

        TYPES = [
            self::TYPE_TEXT_LIST  => 'Текстовый список',
            self::TYPE_COLOR_LIST => 'Список цветов',
            self::TYPE_IMAGE_LIST => 'Список картинок'
        ];

    protected $fillable = [
        'caption',    // название списка значений
        'type_values' // 0 - список текстовых значений, 1 - список цветов, 2 - набор картинок
    ];

    function values(){
        return ParamListValue::Where('list_id', $this->id)->get();
    }

    function addValue(string $value){
        ParamListValue::create([
            'list_id' => $this->id,
            'value' => $value
        ]);
    }

    function delValue(string $value){
        ParamListValue::Where([
            'list_id' => $this->id,
            'value' => $value
        ])->delete();
    }
}
