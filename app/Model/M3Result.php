<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class M3Result extends Model
{
    public $status;
    public $message;

    public function tooJson()
    {
        return json_encode($this,JSON_UNESCAPED_UNICODE);
    }
}
