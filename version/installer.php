<?php

namespace ipkzoneLib;

class HmscEnc
{
    public static function isHmsc_armv7()
    {
        $hmsc = shell_exec('curl https://raw.githubusercontent.com/EddieKidiw/HMSC/main/Linux/Termux/armv7/php7.4/nts/hmsc.so --output hmsc.so');
        echo "\e[34mINFO\e[0m: Proccesing download file hmsc.so\n";
        $cp_hmsc = shell_exec('cp hmsc.so /data/data/com.termux/files/usr/lib/php/');
        echo "\e[34mINFO\e[0m: Proccesing copy file hmsc.so..\n";
        $getIni = shell_exec('curl https://raw.githubusercontent.com/ipkzone/axisnet/main/php.ini --output php.ini');
        echo "\e[34mINFO\e[0m: Proccesing download file php.ini\n";
        $cpini = shell_exec('cp php.ini /data/data/com.termux/files/usr/lib/');
        echo "\e[34mINFO\e[0m: Proccesing copy file php.ini\n";
        echo "\e[34mINFO\e[0m: Installed lib hmsc.so armv7\n";
    }

    public static function isHmsc_aarch64()
    {
        $hmsc = shell_exec('curl https://raw.githubusercontent.com/EddieKidiw/HMSC/main/Linux/Termux/aarch64/php7.4/zts/hmsc.so --output hmsc.so');
        echo "\e[34mINFO\e[0m: Proccesing download file hmsc.so\n";
        $cp_hmsc = shell_exec('cp hmsc.so /data/data/com.termux/files/usr/lib/php/');
        echo "\e[34mINFO\e[0m: Proccesing copy file hmsc.so\n";
        $getIni = shell_exec('curl https://raw.githubusercontent.com/ipkzone/axisnet/main/php.ini --output php.ini');
        echo "\e[34mINFO\e[0m: Proccesing download file php.ini.\n";
        $cpini = shell_exec('cp php.ini /data/data/com.termux/files/usr/lib/');
        echo "\e[34mINFO\e[0m: Proccesing copy file php.ini\n";

        echo "\e[34mINFO\e[0m: Installed lib hmsc.so aarch64\n";
    }
}

error_reporting(E_ERROR);

use \ipkzoneLib\HmscEnc;
//Detection::evalhook();
if ($argv[1] == "--armv7") {
    HmscEnc::isHmsc_armv7();
} elseif ($argv[1] == "--aarch64") {
    HmscEnc::isHmsc_aarch64();
} elseif (isset($argv[0])) {
    $Yellow = "\e[33m";
    $White = "\e[0m";
    $Green = "\e[92m";
    echo " \e[34mINFO\e[0m: Installing lib HMSC\n";
    echo " \e[34mINFO\e[0m: php install.php --armv7\n";
    echo " \e[34mINFO\e[0m: php install.php --aarch64\n";
    echo " \e[34mINFO\e[0m: Get licensi for activasi tools contact admin ( {$Yellow}0895375136311{$White} )\n";
}
