<?php
    $jahuty = new \Jahuty\Client("kn2Kj5ijmT2pH6ZKqAQyNexUqKeRM4VG6DDgWN1lIcc");
?>
<h1>
  Welcome to Jahuty!
</h1>
<p>
    <?php echo $jahuty->snippets->render(1); ?>
</p>
