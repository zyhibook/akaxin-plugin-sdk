<?php
class DBHelper
{
    public $db;
    public $dbName;
    public $tableName  = "wood";
    public $u2Type     = "u2_msg";
    public $groupType  = "group_msg";
    public static $instance = null;

    protected function __construct()
    {
        $conf = getConf();
        $this->dbName = "openzaly_wood_{$conf["db_safe_prefix"]}.db";
        $this->db = new \PDO("sqlite:./".$this->dbName);
        $this->checkDBExists();
    }

    public static function getInstance()
    {
        if(!self::$instance) {
            self::$instance = new DBHelper();
        }
        return self::$instance;
    }

    public function checkDBExists(){
        $createDBString = " CREATE TABLE IF NOT EXISTS ". $this->tableName ."(".
        " _id INTEGER PRIMARY KEY, ".
        " site_user_id VARCHAR(100)  NOT NULL  DEFAULT '',".
        " site_user_photo VARCHAR(100)  NOT NULL  DEFAULT '',".
        " game_result VARCHAR(10) NOT NULL DEFAULT '',".
        " chat_session_id VARCHAR(100)  NOT NULL ,".
        " create_time DATETIME ".
        " );";
        $this->db->exec($createDBString);
    }

    /**
     * 写入数据表
     * @param $siteSessionId
     * @param $chatSessionId
     * @param $guessNum
     * @return mixed
     *
     * @author 尹少爷 2018.6.11
     */
    public function insertGameResult($siteUserId, $siteUserPhoto, $chatSessionId, $gameResult)
    {
        try{
            $createTime = date('Y-m-d H:i:s', time());
            $sql = "insert into  `$this->tableName`(site_user_id, site_user_photo, chat_session_id, game_result, create_time) values(?, ?, ?, ?, ?)";
            $prepare = $this->db->prepare($sql);
            $prepare->bindParam(1, $siteUserId, \PDO::PARAM_STR);
            $prepare->bindParam(2, $siteUserPhoto, \PDO::PARAM_STR);
            $prepare->bindParam(3, $chatSessionId, \PDO::PARAM_STR);
            $prepare->bindParam(4, $gameResult, \PDO::PARAM_STR);
            $prepare->bindParam(5, $createTime, \PDO::PARAM_STR);
            return $prepare->execute();
        }catch (Exception $ex) {
            error_log($ex->getMessage());
        }
    }

}
