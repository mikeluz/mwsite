<?php
function mw_copyright($startYear) {
    $currentYear = date('Y');
    if ($startYear < $currentYear) {
        $currentYear = date('y');
        return "&copy; $startYear&ndash;$currentYear" . " Mercy Wizard Industries";
    } else {
        return "&copy; $startYear" . " Mercy Wizard Industries";
    }
}
echo mw_copyright(2015);
?>