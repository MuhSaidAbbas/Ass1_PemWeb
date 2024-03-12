<?php 

    include 'header.php';
    ?>

    <form action="welcome_post.php" method="post">
        Username: <input type="text" name='Nama'><br>
        Password: <input type="password" name='pw'><br>
        <input name='btnSubmit' type="submit" onclick="active" link='transaksi.php'><br>
    </form>

<?php

    include 'footer.php';

?>
