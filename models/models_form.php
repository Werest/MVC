<?php


class models_form{
    public $models_mysql_message;
    public function insert_data_from_form(){
//        if(isset())
        if( $name = isset($_POST['name']) &&
            $email = isset($_POST['email']) &&
            $message = isset($_POST['message']) &&
            isset($_FILES['file']['tmp_name'][0])){

            $image = $_FILES['file']['tmp_name'][0];
            $file =  base64_encode(file_get_contents(addslashes($image)));

            $this->models_mysql_message = new models_mysql_message();
            $this->models_mysql_message->insert_m(htmlspecialchars($name), htmlspecialchars($email), htmlspecialchars($message), $file);
        }
    }

    public function get_data_from_mysql(){
        $this->models_mysql_message = new models_mysql_message();
        $this->models_mysql_message->from_m();

    }
}
