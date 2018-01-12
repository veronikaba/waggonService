<?php
function myFunctionIcon($number, $status)
{

    if ($status == 'COMPLETED') {

        switch ($number) {
            case 2:
                return 'icons/zweiblau';
                break;
            case 3:
                return 'icons/dreiblau';
                break;
            case 4:
                return 'icons/vierblau';
                break;
            case 5:
                return 'icons/fünfblau';
                break;
        }
    } elseif ($status == 'APPROVED') {
        switch ($number) {
            case 2:
                return 'icons/zweiblau';
                break;
            case 3:
                return 'icons/drei';
                break;
            case 4:
                return 'icons/vier';
                break;
            case 5:
                return 'icons/fünf';
                break;
        }
    } elseif ($status == 'WORK_IN_PROGRESS') {
        switch ($number) {
            case 2:
                return 'icons/zweiblau';
                break;
            case 3:
                return 'icons/dreiblau';
                break;
            case 4:
                return 'icons/vier';
                break;
            case 5:
                return 'icons/fünf';
                break;
        }
    }elseif ($status == 'CREATED') {
        switch ($number) {
            case 2:
                return 'icons/zwei';
                break;
            case 3:
                return 'icons/drei';
                break;
            case 4:
                return 'icons/vier';
                break;
            case 5:
                return 'icons/fünf';
                break;
        }
    }elseif ($status == 'WORK_COMPLETED') {
        switch ($number) {
            case 2:
                return 'icons/zweiblau';
                break;
            case 3:
                return 'icons/dreiblau';
                break;
            case 4:
                return 'icons/vierblau';
                break;
            case 5:
                return 'icons/fünf';
                break;
        }
    }
}
?>