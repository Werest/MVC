<?php


class models_form{
    public $models_mysql_message;
    public function insert_data_from_form(){
//        if(isset())
        if( isset($_POST['name']) &&
            isset($_POST['email']) &&
            isset($_POST['message']) &&
                (filesize($_FILES['file']['tmp_name'][0]) > 0)){


            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            $image = $_FILES['file']['tmp_name'][0];
            $file =  base64_encode(file_get_contents(addslashes($image)));

            $this->models_mysql_message = new models_mysql_message();
            $this->models_mysql_message->insert_m(htmlspecialchars($name), htmlspecialchars($email), htmlspecialchars($message), $file);
        }
    }
}
