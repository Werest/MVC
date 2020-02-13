<?php
require_once 'models/models_mysql_message.php';
$models_form = new models_mysql_message();
$result = $models_form->from_m();

echo "<div class=\"container\">";


foreach($result as $arrays) {
    if($arrays['success'] == 'y'){
        echo "<div class=\"card p-3 \">";

        echo "<h5 class=\"card-header\">" . $arrays['name'] . "(" . $arrays['email'] . ")" . "</h5>";
        echo "<div class=\"card-body\"><blockquote class=\"blockquote mb-0\">"
            . $arrays['text'];
        echo '<img  class="card-img-top" src="data:image/gif;base64,' . $arrays['img'] . '" />';
        echo "</blockquote></div>";
        echo "</div>";
    }
}


echo "</div>";