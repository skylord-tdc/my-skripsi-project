<?php
$files = glob("logic/e-raport/*xls");
foreach ($files as $value) {
    if (is_file($value)) {
        unlink($value);
    }
}

echo
"   <script type='text/javascript'>
    window.location='./admin?adm=wb/sistem-akademik'; </script>"; // Redirect ke halaman awal