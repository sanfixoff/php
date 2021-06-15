<?php
class ModelCatalog extends Model{

    public function get_data(){

        $result = [];
        $sql = 'SELECT * FROM products';
        $result = DB::getAssocResult($sql);
        return $result;

    }



}
