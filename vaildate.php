<?php
    //最初は送信ボタンを押していない
    $movie='';
    //POST送信がされたら
if($_SERVER['REQUEST_METHOD'] ==='POST'){
    //ポストの内容を確認し入力値が正しいかどうかを検証
    $movie=$_POST['movie'];
    if(mb_strlen($movie) === 0){
        $err ='文字を入力してください。';
    }else  if(mb_strlen($movie) >= 20){
        $err ='20文字以内で入力してください。';
    }
}
?>

<html>
    <head>
        <!-- <meta charset="UTF-8"> -->
        <style type="text/css">
            .center{text-align:center;}
            input{margin:5px;}
        </style>
    </head>
<body>
    <div class ="center">
        <h1>入力フォームを検証しよう</h1>
    <p>
    <?php
        //入力内容に誤りがあればエラーメッセージを、
        //正しければ「あなたの好きな映画は〇〇です。」と表示
        if(isset($err)){
            echo $err;
        }else{
            echo 'あなたの好きな映画は'.$movie.'です。';
        }
    ?>
    </p>
    <form action="" method="POST">
    <lavel>好きな映画</lavel>
    <input type="text" name="movie"><br>
    <input type="submit" value="送信">
    </form>
</div>
    </body>
</html>