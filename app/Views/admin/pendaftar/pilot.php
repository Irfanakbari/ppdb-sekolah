<?php

// count data daftar function
function count_data_daftar()
{
    $query = "SELECT * FROM tbl_pendaftar";
    $result = mysqli_query($GLOBALS['conn'], $query);
    $count = mysqli_num_rows($result);
    return $count;
}
