<?php
$start              = $after_fetch['start_job'];
$start_explode      = explode('-', $start);
$start_year_e       = $start_explode['0'];
$start_month_e      = $start_explode['1'];
$start_day_e        = $start_explode['2'];
if ($start_month_e == "01") {
    $month_name = "Jan";
}
elseif ($start_month_e == "02") {
    $month_name = "Feb";
}
elseif ($start_month_e == "03") {
    $month_name = "Mar";
}
elseif ($start_month_e == "04") {
    $month_name = "Apr";
}
elseif ($start_month_e == "05") {
    $month_name = "May";
}
elseif ($start_month_e == "06") {
    $month_name = "Jun";
}
elseif ($start_month_e == "07") {
    $month_name = "July";
}
elseif ($start_month_e == "08") {
    $month_name = "Aug";
}
elseif ($start_month_e == "09") {
    $month_name = "Sep";
}
elseif ($start_month_e == "10") {
    $month_name = "Oct";
}
elseif ($start_month_e == "11") {
    $month_name = "Nov";
}
else {
    $month_name = "Dec";
}

$end                = $after_fetch['end_job'];
$end_explode        = explode('-', $end);
$end_year_e         = $end_explode['0'];
$end_month_e        = $end_explode['1'];
$end_day_e          = $end_explode['2'];
if ($end_month_e == "01") {
$end_month_name = "Jan";
}
elseif ($end_month_e == "02") {
$end_month_name = "Feb";
}
elseif ($end_month_e == "03") {
$end_month_name = "Mar";
}
elseif ($end_month_e == "04") {
$end_month_name = "Apr";
}
elseif ($end_month_e == "05") {
$end_month_name = "May";
}
elseif ($end_month_e == "06") {
$end_month_name = "Jun";
}
elseif ($end_month_e == "07") {
$end_month_name = "July";
}
elseif ($end_month_e == "08") {
$end_month_name = "Aug";
}
elseif ($end_month_e == "09") {
$end_month_name = "Sep";
}
elseif ($end_month_e == "10") {
$end_month_name = "Oct";
}
elseif ($end_month_e == "11") {
$end_month_name = "Nov";
}
else {
    $end_month_name = "Dec";
}
