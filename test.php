<?php

class test
{
    private int $test;

    public function test($val){
        $rep = $val;
        if($val==3){
            $rep =2;
        }
        else{
            $rep = 3;
        }
        return $rep;
    }

}