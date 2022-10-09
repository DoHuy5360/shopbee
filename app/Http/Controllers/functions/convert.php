<?php
function toObj($keys, $arr)
{
    $wrap = [];
    $wrap_element = [];
    for ($i = 0; $i < sizeOf($arr); $i++) {
        $wrap_element['id'] = $i+1;
        for ($k = 0; $k < sizeOf($keys); $k++) {
            $wrap_element[$keys[$k]] = $arr[$i][$k];
        }
        $wrap[$i] = $wrap_element;
    }
    return json_decode(json_encode($wrap));
}
