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
            self::TYPE_COLOR_LIST => 'Цветовой список',
            self::TYPE_IMAGE_LIST => 'Список картинок'
        ];

    protected $fillable = [
        'caption',    // название списка значений
        'type_values' // 0 - список текстовых значений, 1 - список цветов, 2 - набор картинок
    ];

    function values(){
        return ParamListValue::Where('list_id', $this->id)->orderBy('id')->get();
    }

    function countValues(): int{
        return ParamListValue::Where('list_id', $this->id)->count();
    }

    function addValue(string $value): ParamListValue {
        return ParamListValue::create([
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

    function type(){
        return static::TYPES[$this->type_values] ?? '???';
    }

    function hasUsed(){
        $count = ProductParam::where('list_id', $this->id)
            ->whereIn('type_param', ProductParam::TYPES_OF_LIST)
            ->count();
        return $count > 0;
    }

    function hasColorList(): bool {
        return $this->type_values == static::TYPE_COLOR_LIST;
    }

    function hasImageList(): bool {
        return $this->type_values == static::TYPE_IMAGE_LIST;
    }
}
