<?php
    session_start();

    function hitung($nilai1, $nilai2, $opr)
    {
        $nilai1 = (int)$nilai1;
        $nilai2 = (int)$nilai2;

        if($opr == '+')
        {
            return $nilai1 + $nilai2;
        } 
        else if($opr == '-')
        {
            return $nilai1 - $nilai2;
        }
        else if($opr == 'X')
        {
            return $nilai1 * $nilai2;
        }
        else if($opr == '/')
        {
            return $nilai1 / $nilai2;
        }
    }

    function add_session_hist($nilai1, $nilai2, $opr, $hasil)
    {
        $new_calc = [$nilai1, $nilai2, $opr, $hasil];

        if(!isset($_SESSION['history']))
        {
            $_SESSION['history'] = [$new_calc];
        }
        else
        {
            array_push($_SESSION['history'], $new_calc);
        }

        return count($_SESSION['history']);
    }
?>