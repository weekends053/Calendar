<?php
    class Calendar{
        public function showDay($date,$month){

            $date = "2021-$month-$date";
            $unixTimestamp = strtotime($date);
            //Get the day of the week using PHP's date function.
            $dayOfWeek = date("l", $unixTimestamp);
            //Print out the day that our date fell on.
            return $dayOfWeek ;
        }

    }