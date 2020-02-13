<?php
require_once 'models/models_mysql_message.php';

$login = 'admin';
$password_admin = '123';


if(isset($_POST['login'])  && isset($_POST['password'])){
    if($_POST['login']==$login && $_POST['password'] == $password_admin){
        setcookie("login", $_POST['login'], time() + 31440);
        setcookie("password", $_POST['password'], time() + 31440);

        $models_form = new models_mysql_message();
        $result = $models_form->from_m();

        echo "<div class=\"container\">";


        foreach($result as $arrays) {
            if($arrays['success'] == 'y'){
                echo "<div class=\"card p-3 \">";

                echo "<h5 class=\"card-header\">" . $arrays['name'] . "(" . $arrays['email'] . ")" . "</h5> <button type=\"button\" class=\"btn btn-primary\">Edit</button>";
                echo "<div class=\"card-body\"><blockquote class=\"blockquote mb-0\">"
                    . $arrays['text'];
                echo '<img  class="card-img-top" src="data:image/gif;base64,' . $arrays['img'] . '" />';
                echo "</blockquote></div>";
                echo "</div>";
            }
        }


        echo "</div>";
    }

}

if($_COOKIE['login'] != $login && $_COOKIE['password'] != $password_admin){
    ?>
    <div class="container">
        <form method="post">
            <div class="form-group">
                <label for="exampleInputLogin1">Login</label>
                <input type="Login" class="form-control" id="exampleInputLogin1" aria-describedby="LoginHelp" placeholder="Enter Login" name="login" value="<?php if(strlen($_COOKIE['login'])> 0) { echo $_COOKIE['login']; }?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" value="<?php if(strlen($_COOKIE['password'])> 0) {echo $_COOKIE['password'];}?>">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <?php
}