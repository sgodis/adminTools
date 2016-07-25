<?php

namespace app\utils;

use Yii;

class DomainUtil
{
    public static function getDomainLink($server, $uri, $isSsl = false)
    {
        if ($uri != '') {
            if ($uri[0] != '/') $uri = '/' . $uri;
        }
        $domain = Yii::$app->params['domains'][$server];
        if ($domain == '') return $uri;

        $protocol = $isSsl ? "https" : "http";
        return "$protocol://$domain$uri";
    }
}
