<div class="container">
    <div class="row">
        <div class="col">
            <h2>you are welcome to sign up:</h2>
        </div>
    </div>

    <?php
    if ($errors) {
        echo '<div class="row">';
        echo '  <div class="col-6">';
        echo '      <div class="alert">';
        echo '          <h4 class="warning"> ops.. unfortunately the application form is not accepted by the database..</h4>';
        echo '              <ul>';
        foreach ($errors as $error) {
            echo '<li>' . $error . '</li>';
        }
        echo '              </ul>';
        echo '       </div>';
        echo '   </div>';
        echo '</div>';
    }
    ?>

    <form action="?page=registration" method="POST">
        <div class="row">            
            <div id="reg-email" class="col-6">
                <input type="text" class="form-control" id="email-input" name="email" onfocus="this.value=''" value="enter your e-mail..">
            </div>
        </div>
        <div class="row">
            <div id="reg-first-name" class="col-6">
                <input type="text" class="form-control" id="first-name-input" name="first-name" onfocus="this.value=''" value="your first name..">
            </div>
        </div>
        <div class="row">
            <div id="reg-last-name" class="col-6">
                <input type="text" class="form-control" id="last-name-input" name="last-name" onfocus="this.value=''" value="your last name..">
            </div>
        </div>
        <div class="row">
            <div class="col-6" id="reg-password">
                <input type="password" class="form-control" id="password-input" name="password" onfocus="this.value=''" value="password..">
            </div>
        </div>
        <div class="row">
            <div class="col-6" id="reg-password2">
                <input type="password" class="form-control" id="password2-input" name="password2" onfocus="this.value=''" value="the same password again..">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <input type="submit" value="register" class="btn btn-success">
            </div>
        </div>
    </form>
</div>