<?php
$files = glob("logic/tmp/*xls");
foreach ($files as $value) {
    if (is_file($value)) {
        unlink($value);
    }
}

echo
"   <script type='text/javascript'>
    window.location='./admin?adm=da2'; </script>"; // Redirect ke halaman awal