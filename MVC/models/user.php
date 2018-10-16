<?php
class UserModel extends Model{
    // public function Index(){
    //     $this->query('SELECT * FROM users');
    //     $rows = $this->resultSet();
    //     return $rows;
    // }

    public function register(){
        // sanitize POST
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $password = md5($post['password']);
        if($post['submit']){
            //die('SUBMITED'); //Print a message and exit the current script:
            //insert into Mysql 
            $this->query('INSERT INTO users (name, email, password) VALUES (:name, :email, :password)');
            $this->bind(':name', $post['name']);
            $this->bind(':email', $post['email']);
            $this->bind(':password', $password);
            $this->execute();

            // verify 
            if($this->lastInsertId()){
                //redirect
                header('location:'.ROOT_URL);
            }
        }
        return;
    }

    public function login(){
        // sanitize POST
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $password = md5($post['password']);

        if($post['submit']){
            die('SUBMITED'); //Print a message and exit the current script:
            //insert into Mysql 
            $this->query('INSERT INTO users (name, email, password) VALUES (:name, :email, :password)');
            $this->bind(':name', $post['name']);
            $this->bind(':email', $post['email']);
            $this->bind(':password', $password);
            $this->execute();

            // verify 
            if($this->lastInsertId()){
                //redirect
                header('location:'.ROOT_URL.'user/login.php');
            }
        }
        return;
    }

    public function registerprovider()
    {
        return;
    }
    public function registerfreelancer()
    {
        return;
    }


}