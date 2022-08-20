<?php
function showDateTime($carbon, $format = "d M Y @ H:i"){
    return $carbon->translatedFormat($format);
}
?>