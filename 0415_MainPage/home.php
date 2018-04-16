<?php
    require("page.php");
    $MainPage = new page();
    $MainPage->content = "
        <section>
        <h2>Welcome to the home of Sandy shopping Center.</h2>
        <p>Enjoy your shopping.</p>
        </section>
    ";
    $MainPage->Display();

