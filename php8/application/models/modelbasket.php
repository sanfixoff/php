<?php
class ModelBasket extends Model{

    public function get_data(){

        return BASKET::getBasket();

    }



}
