<?php


class Helpers{

    public static function getDays(){
        
        $days = range(1,31);
        $html = "<select name='day'>";
        foreach($days as $day){
            $html .="<option value='$day'>$day</option>";
        }

        $html .="</select>";
        echo $html;
    }

    public static function getMonths(){
        
        $months = range(1,12);
        
        
        $html = "<select name='months'>";
        foreach($months as $month){
            $str_month = date('F',mktime(0,0,0,$month,1,1900));
            $strl_month = strtolower($str_month);
            $html .="<option value='$strl_month'>$str_month</option>";
        }

        $html .="</select>";
        echo $html;
    }

    public static function getYears(){
        $years = range(date('Y',time()),1900);
        $html = "<select name='year'>";
        foreach($years as $year){
            $html .="<option value='$year'>$year</option>";
        }

        $html .="</select>";
        echo $html;
    }

}