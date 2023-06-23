<?php
$files = glob("logic/kls/*xls");
foreach ($files as $value) {
    if (is_file($value)) {
        unlink($value);
    }
}

echo
"   <script type='text/javascript'>
    window.location='./admin?adm=da3'; </script>"; // Redirect ke halaman awal