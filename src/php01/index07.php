<?php

function t_s($teihen, $height)
{
    $s = $teihen * $height / 2;
    print $s . "<br />";
}

function s_s($width, $height)
{
    $s = $width * $height;
    print $s . "<br />";
}

function d_s($u_b, $l_b, $height)
{
    $s = ($u_b + $l_b) * $height / 2;
    print $s . "<br />";
}

t_s(4, 10);
s_s(10, 10);
d_s(5, 10, 10);