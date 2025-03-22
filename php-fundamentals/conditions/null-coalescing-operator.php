<?php
// echo $age ?? "Unknown";

// echo isset($age) ? $age : "Unknown";

$age = null;
echo !is_null($age) ? $age : "Unknown";