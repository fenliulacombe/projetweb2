<?php
class HomeModel extends Model{
    public function index(){
        return;
    }


    public function getCategories(){

    	 $this->query('SELECT * FROM `secteur`');
            $this->execute();
            $row = resultSet();
        return;
    }
}