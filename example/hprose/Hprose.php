<?php
/**********************************************************\
|                                                          |
|                          hprose                          |
|                                                          |
| Official WebSite: http://www.hprose.com/                 |
|                   http://www.hprose.org/                 |
|                                                          |
\**********************************************************/

/**********************************************************\
 *                                                        *
 * Hprose.php                                             *
 *                                                        *
 * hprose for php 5.3+                                    *
 *                                                        *
 * LastModified: May 24, 2015                             *
 * Author: Ma Bingyao <andot@hprose.com>                  *
 *                                                        *
\**********************************************************/

spl_autoload_register(function($className) {
    if (substr($className, 0, 6) === "Hprose") {
        include str_replace("\\", "/", $className) . ".php";
        return true;
    }
    return false;
});

if (!function_exists('hprose_serialize')) {
    function hprose_serialize($var, $simple = false) {
        return \Hprose\Formatter::serialize($var, $simple);
    }
}
if (!function_exists('hprose_unserialize')) {
    function hprose_unserialize($data, $simple = false) {
        return \Hprose\Formatter::unserialize($data, $simple);
    }
}
