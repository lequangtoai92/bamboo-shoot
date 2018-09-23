<?php

/**
 * @author Anph - 07/12/2017
 */
function getCountryFromIP() {
//    $ip = '115.73.208.139'; //'77.189.64.249';  //getRealIpAddr();
//    $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
    return getLanguageCodeFromCountrycode('VN');//$details->country);
}

function getLanguageCodeFromCountrycode($countryCode) {
    $arr = array(
        'ZA' => 'af', 'AL' => 'sq', 'AM' => 'hy', 'ES' => 'eu', 'BY' => 'be', 'BG' => 'bg', 'ES' => 'ca', 'HR' => 'hr',
        'CZ' => 'cs', 'DK' => 'da', 'dMV' => 'iv', 'BE' => 'nl', 'NL' => 'nl', 'AU' => 'en', 'BZ' => 'en', 'CA' => 'en',
        'CB' => 'en', 'IE' => 'en', 'JM' => 'en', 'NZ' => 'en', 'PH' => 'en', 'ZA' => 'en', 'TT' => 'en', 'GB' => 'en',
        'US' => 'en', 'ZW' => 'en', 'EE' => 'et', 'FO' => 'fo', 'IR' => 'fa', 'FI' => 'fi', 'BE' => 'fr', 'CA' => 'fr',
        'FR' => 'fr', 'LU' => 'fr', 'MC' => 'fr', 'CH' => 'fr', 'ES' => 'gl', 'GE' => 'ka', 'AT' => 'de', 'DE' => 'de',
        'LI' => 'de', 'LU' => 'de', 'CH' => 'de', 'GR' => 'el', 'IN' => 'gu', 'IL' => 'he', 'IN' => 'hi', 'HU' => 'hu',
        'IS' => 'is', 'ID' => 'id', 'IT' => 'it', 'CH' => 'it', 'JP' => 'ja', 'IN' => 'kn', 'KZ' => 'kk', 'kIN' => 'ok',
        'KR' => 'ko', 'KZ' => 'ky', 'LV' => 'lv', 'LT' => 'lt', 'MK' => 'mk', 'BN' => 'ms', 'MY' => 'ms', 'IN' => 'mr',
        'MN' => 'mn', 'NO' => 'nb', 'NO' => 'nn', 'PL' => 'pl', 'BR' => 'pt', 'PT' => 'pt', 'IN' => 'pa', 'RO' => 'ro',
        'RU' => 'ru', 'IN' => 'sa', 'SK' => 'sk', 'SI' => 'sl', 'AR' => 'es', 'BO' => 'es', 'CL' => 'es', 'CO' => 'es',
        'CR' => 'es', 'DO' => 'es', 'EC' => 'es', 'SV' => 'es', 'GT' => 'es', 'HN' => 'es', 'MX' => 'es', 'NI' => 'es',
        'PA' => 'es', 'PY' => 'es', 'PE' => 'es', 'PR' => 'es', 'ES' => 'es', 'UY' => 'es', 'VE' => 'es', 'KE' => 'sw',
        'FI' => 'sv', 'SE' => 'sv', 'sSY' => 'yr', 'IN' => 'ta', 'RU' => 'tt', 'IN' => 'te', 'TH' => 'th', 'TR' => 'tr',
        'UA' => 'uk', 'PK' => 'ur', 'VN' => 'vi');
    return $arr[$countryCode];
}

function getRealIpAddr() {
    $server = filter_input_array(INPUT_SERVER);
    var_dump($server);
    if (!empty($server['HTTP_CLIENT_IP'])) {   //check ip from share internet
        $ip = $server['HTTP_CLIENT_IP'];
    } elseif (!empty($server['HTTP_X_FORWARDED_FOR'])) {   //to check ip is pass from proxy
        $ip = $server['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $server['REMOTE_ADDR'];
    }
    return $ip;
}

function limitTitle($str){
    return (strlen($str) > 20) ? substr($str, 0, 15).'...' : $str;
}

function resize_img($source, $standardWidth) {
    $info = getimagesize($source);
    //$source = $this->compress_img($source, $info['mime']);
    list($width, $height) = $info;
    $newwidth = $width >= $standardWidth ? $standardWidth : $width;
    $newheight = $width >= $standardWidth ? ($standardWidth / $width * $height) : $height;

    $thumb = new Imagick($source);
    $thumb->resizeImage($newwidth, $newheight, Imagick::FILTER_LANCZOS, 1);
    $thumb->writeImage($source);
    $thumb->destroy();

    return $source;
}

function compress_img($source, $mime) {
    if ($mime == 'image/jpeg') {
        $quality = 70;
        $image = imagecreatefromjpeg($source);
    } elseif ($mime == 'image/png') {
        $quality = 90;
        $image = imagecreatefrompng($source);
    }
    imagejpeg($image, $source, $quality);
    return $source;
}

function load_controller($folder, $controller){
    require_once(APPPATH . 'modules/'.$folder.'/controllers/'.$controller . '.php');
    $controller = new $controller();
    return $controller;
}

function toUTC($date = 'now'){
    // $dateTime = DateTime::createFromFormat('Y-m-d\TH:i:sP', $date);
    $$obj = new DateTime($date);
    $obj->setTimezone(new DateTimeZone('UTC'));
    return  $obj->format('Y-m-d\TH:i:s\Z');
}