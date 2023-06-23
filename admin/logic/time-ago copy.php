<div>
    <?php

    // $timestamp =  ($tgl_data);
    function time_since($timestamp)
    {
        date_default_timezone_set('Asia/Jakarta');
        $time_ago = strtotime($timestamp);
        $current_time = time();
        $time_difference = $current_time - $time_ago;
        $second = $time_difference;
        $minutes = round($second / 60);
        $hours = round($second / 3600);
        $days = round($second / 86400);
        $weeks = round($second / 604800);
        $months = round($second / 2629440);
        $years = round($second / 31553280);

        if ($second <= 60) {
            return "Just Now";
            // echo ("Barusan");
        } elseif ($minutes <= 60) {
            if ($minutes == 1) {
                return "One Minute Ago";
                // echo ("Satu Menit Yang Lalu");
            } else {
                return "$minutes Minutes Ago";
                // echo ("$minutes Menit Yang Lalu");
            }
        } elseif ($hours <= 24) {
            if ($hours == 1) {
                return "An Hour Ago";
                // echo ("Satu jam yang lalu");
            } else {
                return "$hours Hour Ago";
                // echo ("$hours Jam yang lalu");
            }
        } elseif ($days <= 7) {
            if ($days == 1) {
                return "yesterday";
                // echo ("Kemarin");
            } else {
                return "$days Days Ago";
                // echo ("$days Hari Yang Lalu");
            }
        } elseif ($weeks <= 4.3) {
            if ($weeks == 1) {
                return "A Week Ago";
                // echo ("Seminggu Yang Lalu");
            } else {
                return "$weeks Weeks Ago";
                // echo ("$weeks Minggu Yang Lalu");
            }
        } elseif ($months <= 12) {
            if ($months == 1) {
                return "A Month Ago";
                // echo ("Sebulan Yang Lalu");
            } else {
                return "$months Months Ago";
                // echo ("$months Bulan Yang Lalu");
            }
        } else {
            if ($years == 1) {
                return "One Year Ago";
                // echo ("Satu Tahun Yang Lalu");
            } else {
                return "$years Years Ago";
                // echo ("$years Tahun Yang Lalu");
            }
        }
    }
    ?>
</div>