<?php 
    include("connect.php");
    $user_id = $_POST['user_id'];
    $book_id = $_POST['book_id'] + 1;

    $sql = "SELECT * FROM user_book";
    $result = mysqli_query($conn, $sql);
    $user_book = mysqli_fetch_all($result, MYSQLI_NUM);

    $sum = 0;

    for ($i = 0; $i < count($user_book); $i++) {
        if ($user_book[$i][1] == $user_id && $user_book[$i][2] == $book_id) {
            $sum++;
        }
    }          
    
    if ($sum == 0) {
        $query = "INSERT INTO user_book (user_id, book_id) VALUES ( '" . $user_id . "', '" . $book_id . "')";
        $result = mysqli_query($conn, $query); 
    } else {
        $query = "DELETE FROM user_book WHERE user_id = '". $user_id ."' AND book_id =  '". $book_id ."' ";
        $result = mysqli_query($conn, $query); 
    }
    
    header("Location: bookspagenew.php");
    die;
?>
