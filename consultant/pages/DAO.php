<?php
//define will be put in config file
define("DB_HOST", "localhost");
define("DB_NAME", "globalmigration_db");
define("DB_USER", "root");
define("DB_PASS", "");
class Database {

    public static $conn;
    //public static $obj_myrow;
    public static $obj_myrows;
    public static $int_num_rows;
    public static $str_mysql_error;
    //public static $int_num_affected_rows;
    public static $int_mysql_insert_id;
    public static $obj_result;

    function __construct($host = DB_HOST, $db = DB_NAME, $user = DB_USER, $password = DB_PASS) {
        self::GetConnection($host, $db, $user, $password);
    }

    public static function GetConnection($host = DB_HOST, $db = DB_NAME, $user = DB_USER, $password = DB_PASS) {
        try {
            if (self::$conn == null) {
                self::$conn = new PDO("mysql:host=" . $host . ";dbname=" . $db, $user, $password);
                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                //self::$conn->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'UTF-8'");
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return self::$conn;
    }

    public static function StartTransactions() {
        try {
            self::GetConnection();
            self::$conn->beginTransaction();
        } catch (PDOException $e) {
            echo "Cannot start SQL transactions";
            die();
        }
    }

    public static function Query($str_sql, $arr_parameters, $bln_die_on_error) {
        global $arr_errors;

        try {
            self::$str_mysql_error = self::$int_num_rows = self::$int_mysql_insert_id = self::$obj_myrows = '';

            $str_sql = trim($str_sql);

            self::GetConnection();

            if ($arr_parameters == '') { // just in case empty string is passed for second parameter
                $arr_parameters = array();
            }
            //FW20130626 French chars should work - fix to set euro charset
            //$obj_result1 = self::$conn->prepare("SET NAMES latin1");
            //$obj_result1->execute();
            //FW20130626
            //$this->conn->query($str_sql); - need to move away from this as execute is more secure - IF you use the $arr_parameters !!
            //If you have a LIKE operator in you statement, then sql should be : '... LIKE ?...' and $arr_parameters = array('test%')
            self::$obj_result = self::$conn->prepare($str_sql);
            self::$obj_result->setFetchMode(PDO::FETCH_ASSOC);
            self::$obj_result->execute($arr_parameters);
            // $int_num_rows represents num rows when select / delete / update etc
            // Please note : http://php.net/manual/en/pdostatement.rowcount.php
            // Here is says rowCount() does not work for select, but i have tested it and it does. - Shaakir 22082013
            // Only pitfall i see is common (My)SQL problem of returning 0 if the data being updated is same as in DB already.
            self::$int_num_rows = self::$obj_result->rowCount();

            if (preg_match("/^(select|describe|pragma|show)/i", $str_sql)) {
                self::$obj_myrows = self::$obj_result->fetchAll(); //if you going to use foreach
                return self::$obj_myrows;
            } else if (preg_match("/^(delete|insert|update)/i", $str_sql)) {
                if (preg_match("/^(insert)/i", $str_sql)) {
                    self::$int_mysql_insert_id = self::$conn->lastInsertId(); //incase it was insert command
                }
                return self::$int_num_rows;
            }
        } catch (PDOException $e) {
           

            if ($bln_die_on_error) {
                print "<br />" . $e->getMessage();
               
                
                die();
            } else {
                self::$str_mysql_error = $e->getMessage() . $str_sql;
                return false;
            }
        }
    }

   
    public static function CommitSql() {
        try {
            self::GetConnection();
            self::$conn->commit();
        } catch (PDOException $e) {
            echo "Cannot commit SQL transactions";
            die();
        }
    }

    public static function RollbackSql() {
        try {
            self::GetConnection();
            self::$conn->rollBack();
        } catch (PDOException $e) {
            echo "Cannot rollBack SQL transactions";
            die();
        }
    }

 

}

/*Below is how you will implement the class above
 * Usage of the class 
 * 
 */


#Select Example
$str_sql_select = "SELECT * FROM `users` ";
$arr_data_objects = Database::Query($str_sql_select, array(), true);

foreach ($arr_data_objects as $data_object) {
    echo $data_object['username']." ".$data_object['firstname']." <br/>";
}
//var_dump($arr_data_objects);

//var_dump();

$data_post_array = array(
                        'username' =>  'Test1',
                        'password' =>  'PassTest',
                        'firstname' =>  'Testfname',
                        'surname' =>  'TestSurname',
                        'email' =>  'test@globalimsa.com',
                        'mobile_no' =>  '0000000000',
                        'level' =>  '1',
                        'status' =>  '0',
                        'time' => strtotime("now")
                        );


#Insert Example
$str_sql_insert = "INSERT INTO users(username, password, firstname, surname, email, mobile_no, level, status, time)
                   VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)";

$data = array(
            $data_post_array['username'], 
            $data_post_array['password'],
            $data_post_array['firstname'], 
            $data_post_array['surname'], 
            $data_post_array['email'],
            $data_post_array['mobile_no'], 
            $data_post_array['level'],
            $data_post_array['status'], 
            $data_post_array['time']
        );

$insert_data_objects = Database::Query($str_sql_insert, $data, true);

if ($insert_data_objects == true) {
    echo "The data was inserted.";
} else {
    echo "The data was not inseted.";
}