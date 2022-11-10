<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

function getUserAuth(){
    $get_user = Auth::user()->code;
    
}

?>