<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HelperModel extends Model
{
    protected $table = 'core_helper_table';

    protected $guarded = ['created_at', 'updated_at', 'id'];

    public function getHelperValue($key) {
    	return self::firstOrNew(['key' => $key])->value;
    }

    public function storeHelperValue($key, $value) {
    	$record = self::firstOrNew(['key' => $key]);
    	$record->value = $value;
    	$record->save();
    	return $record;
    }
}
