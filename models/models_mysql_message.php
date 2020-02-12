<?php
class models_mysql_message{

    public function insert_m($name, $email, $message, $file){
        $mysqli = new mysqli("localhost", "newuser", "PASSWORD", "dbo");
        if (!($res = $mysqli->query("INSERT new_table (`name`, `email`, `text`, `img`) 
                                VALUES($name, $email, $message, '$file')"))) {
            echo "Запрос INSERT потерпел неудачу: (" . $mysqli->errno . ") " . $mysqli->error;
        }
    }
    public function from_m(){
        $mysqli = new mysqli("localhost", "newuser", "PASSWORD", "dbo");
        $res = $mysqli->query("SELECT `id`, `name`, `email`, `text`, `img` FROM dbo.new_table");

        echo "<div class=\"container\">";
        for ($row_no = $res->num_rows; $row_no >= 0; $row_no--) {
            $res->data_seek($row_no);
            $row = $res->fetch_assoc();


                echo "<div class=\"card\">";

                    echo "<h5 class=\"card-header\">" . $row['name']."(". $row['email']. ")". "</h5>";
                    echo "<div class=\"card-body\"><blockquote class=\"blockquote mb-0\">"
                        . $row['text'];
                    echo '<img class="card-img-top" src="data:image/gif;base64,' . $row['img'] . '" />';
                    echo "</blockquote></div>";
                echo "</div>";



        }
        echo "</div>";

    }

}
