<?php  

include ('config/app.php');

// Memastikan fungsi select() hanya dideklarasikan jika belum ada
if (!function_exists('select')) {
    function select($query) {
        // LOGIC PANGGIL KONEKSI DATABASE
        global $db;

        $result = mysqli_query($db, $query);
        $rows   = [];

        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

        return $rows;
    }
}

?>