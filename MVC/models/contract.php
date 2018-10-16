<?php
class ContractModel extends Model{
    public function index(){
        // $this->query('SELECT * FROM shares ORDER BY create_date DESC');
        // $rows = $this->resultSet();
        // return $rows;
        return;
    }

    public function add(){
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if($post['submit']){
            //insert into Mysql 
            $this->query('INSERT INTO shares (title, body, link, user_id) VALUES (:title, :body, :link, :user_id)');
            $this->bind(':title', $post['title']);
            $this->bind(':body', $post['link']);
            $this->bind(':link', $post['link']);
            $this->bind(':user_id', 1);
            $this->execute();

            // verify 
            if($this->lastInsertId()){
                //redirect
                echo 'haha';
                header('location:'.ROOT_URL.'share');
            }

        }
        return;
    }

    public function delete(){
        $get = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);
        if(isset($get['id'])){
            $delete_id = $get['id'];
            $this->query("DELETE FROM shares WHERE id = :id");
            $this->bind(":id", $delete_id);
            $this->execute();
            header('location:'.ROOT_URL.'share');
        }
        return;
    }
}