<?php 
    include("connect.php");

    $user_id = $_POST['user_id'];
    $news_id = $_POST['news_id'] + 1;

    $sql = "SELECT * FROM user_news";
    $result = mysqli_query($conn, $sql);
    $user_news = mysqli_fetch_all($result, MYSQLI_NUM);

    $sum = 0;

    for ($i = 0; $i < count($user_news); $i++) {
        if ($user_news[$i][1] == $user_id && $user_news[$i][2] == $news_id) {
            $sum++;
        }
    }          
    
    if ($sum == 0) {
        $query = "INSERT INTO user_news (user_id, news_id) VALUES ( '" . $user_id . "', '" . $news_id . "')";
        $result = mysqli_query($conn, $query); 
    } else {
        $query = "DELETE FROM user_news WHERE user_id = '". $user_id ."' AND news_id =  '". $news_id ."' ";
        $result = mysqli_query($conn, $query); 
    }

    header("Location: newspagenew.php");
    die;
?>
