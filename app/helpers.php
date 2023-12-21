<?php

use App\Models\Coffee;

function get_setting_value($id){
    $data = Coffee::where('id', $id)->first();
    if(isset($data->value)){
        return $data->value;
    }else{
        return 'empty';
    }
}


?>