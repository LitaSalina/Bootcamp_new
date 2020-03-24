<div class="container">
<h2>humore page</h2>
<div class="jokes">
<ul>
    <?php
        foreach ($humor as $joke) {
            echo '<div class="joke">';
            echo '  <img src="' . $joke->image .'" alt="">';
            echo '  <h4><a href="?page=humor&id=' . $joke->id . '">' . $joke->title . '</a></h4>';
            echo '  <h6>' . $joke->def . '</h6>';
            echo '  <p>' . $joke->type . '</p>';
            echo '  <p>' . $joke->text . '</p>';
            echo '</div>';
        }
    ?>
</ul>
</div>
</div>
