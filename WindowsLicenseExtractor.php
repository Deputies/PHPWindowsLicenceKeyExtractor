<?php

$output = array();
exec("wmic path SoftwareLicensingService get OA3xOriginalProductKey", $output);

// The license key should be the first element in the $output array
$licenseKey = $output[0];

echo "License key: " . $licenseKey;

?>
