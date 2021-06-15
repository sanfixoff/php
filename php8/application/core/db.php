<?php
    class DB {

        private static function getDb() {
            static $db = null;
            if (is_null($db)) {
                $db = @mysqli_connect(HOST, USER, PASS, NAME) or die("Could not connect: " . mysqli_connect_error());
            }
            return $db;
        }


        static function getAssocResult($sql){
            $result = @mysqli_query(self::getDb(), $sql) or die(mysqli_error(self::getDb()));
            $array_result = [];
            while ($row = $result->fetch_assoc()) {
                $array_result[] = $row;
            }

            return $array_result;
        }


        static function insertData($sql) {
            $result = @mysqli_query(self::getDb(), $sql) or die(mysqli_error(self::getDb()));
            return $result;
        }


        static function getOneResult($sql){
            $result = @mysqli_query(self::getDb(), $sql) or die(mysqli_error(self::getDb()));
            return $result->fetch_assoc();
        }


        static function executeSql($sql){
            $result = @mysqli_query(self::getDb(), $sql) or die(mysqli_error(self::getDb()));
            return mysqli_affected_rows(self::getDb());
        }




}
