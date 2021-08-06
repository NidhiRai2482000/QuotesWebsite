<html>
    <body>
        <?php

        $link = mysqli_connect('localhost', 'root', '', 'testdb');
        $quote=$_POST['quote'];
        $author=$_POST['author'];
        $sql = "INSERT into newquote(quote,author) values ('{$quote}','{$author}');";
        $result = mysqli_query($link,$sql); 
        echo'
        <script> alert("quote was sent successfully, we will review it and publish soon");
                window.location.href="main.html";
        </script>
        ';
        ?>
    </body>
</html>