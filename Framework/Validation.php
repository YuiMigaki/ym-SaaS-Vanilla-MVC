<?php
/**
 * FILE TITLE GOES HERE
 *
 * DESCRIPTION OF THE PURPOSE AND USE OF THE CODE
 * MAY BE MORE THAN ONE LINE LONG
 * KEEP LINE LENGTH TO NO MORE THAN 96 CHARACTERS
 *
 * Filename:        Validation.php
 * Location:        FILE_LOCATION
 * Project:         ym-SaaS-Vanilla-MVC
 * Date Created:    2024/08/28
 *
 * Author:          Yui_Migaki
 *
 */

namespace Framework;

class Validation
{
    public static function string($value, $min = 1, $max = INF) {

        if (is_string($value)) {
            $value = trim($value);
            $length = strlen($value);
            return $length >= $min && $length <= $max;
        }

        return false;
    }

    public static function email($value) {
        $value = trim($value);
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }
    public static function match($value1, $value2) {
        $value1 = trim($value1);
        $value2 = trim($value2);

        return $value1 === $value2;
    }
}