<?php


class Afterlogin
{

    public static function status($wert){

        if($wert == 'In Klärung')
        {
            return '<span style="color:darkorange;" class="glyphicon glyphicon-alert"></span>';
        }

        else if($wert == 'abgeschlossen'){
            return '<span style="color:green;" class="glyphicon glyphicon glyphicon-ok "></span>';
        }
    }



}