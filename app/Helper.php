<?php

namespace App;
class Helper {

    static function general(){
        return \App\Models\GeneraleSettings::orderBy('id', 'DESC')->first();
    }

    static function footer(){
        return \App\Models\Footer::orderBy('id', 'DESC')->first();
    }


}

?>
