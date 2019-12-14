<?php

function sluggify($string, $separator = '-', $maxLength = 96)
{
    $title = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $string);
    $title = preg_replace('%[^-/+|\w ]%', '', $title);
    $title = strtolower(trim(substr($title, 0, $maxLength), '-'));
    $title = preg_replace('/[\/_|+ -]+/', $separator, $title);

    return $title;
}

function  upload($pictures, $mode) {
    $day = date('d');
    $month = date('m');
    $year = date('Y');

    $filePath = 'uploads/'. $year .'/'. $month .'/'. $day;
    $filePath = str_replace('\\', '/', $filePath);

    if (!file_exists($filePath)) {
        mkdir($filePath, '0775', true);
    }

    if ($mode == 1) {
        $name = $pictures->getClientOriginalName();
        $pictures->move($filePath, $name);

        return $filePath.'/'.$name;
    } elseif ($mode == 2) {
        $pictures_arr[] = null;

        foreach ($pictures as $picture) {
            $name = $picture->getClientOriginalName();
            $picture->move($filePath, $name);

            $pictures_arr[] =$filePath .'/'. $name;
        }

        $pictures_arr = array_filter($pictures_arr);

        return json_encode($pictures_arr);
    }
}
