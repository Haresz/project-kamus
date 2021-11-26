<?php 
$conn = mysqli_connect("localhost", "root", "", "kamusjawa");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function cari($keyword){
    $query = "SELECT * FROM kosakata 
                WHERE 
            indonesia LIKE '%$keyword%'OR
            ngoko LIKE '%$keyword%'OR
            krama_madya LIKE '%$keyword%' OR
            krama_inggil LIKE '%$keyword%'
            ";
    return query($query);
}



?>