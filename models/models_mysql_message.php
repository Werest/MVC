<?php
class models_mysql_message{

    public function insert_m($name, $email, $message, $file){
        $mysqli = new mysqli("localhost", "newuser", "PASSWORD", "dbo");
        if (!($res = $mysqli->query("INSERT new_table (`name`, `email`, `text`, `img`) 
                                VALUES('$name', '$email', '$message', '$file')"))) {
            echo "Запрос INSERT потерпел неудачу: (" . $mysqli->errno . ") " . $mysqli->error;
        }
    }
    public function from_m(){
        $mysqli = new mysqli("localhost", "newuser", "PASSWORD", "dbo");
        $res = $mysqli->query("SELECT `id`, `name`, `email`, `text`, `img`, `success`, `admin` FROM dbo.new_table");

        $row = array();
        for ($row_no = $res->num_rows; $row_no > 0; $row_no--) {
            $res->data_seek($row_no);
            $row[] = $res->fetch_assoc();
        }

        return $row;
    }

}
