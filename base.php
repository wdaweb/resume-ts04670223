<?php
date_default_timezone_set("Asia/Taipei");
session_start();


class DB{

    protected $table;
    protected $dsn="mysql:host=localhost;dbname=s1090422;charset=utf8";
    protected $pdo;

    function __construct($table){
        $this->table=$table;
        $this->pdo=new PDO($this->dsn,'root','');

    }

    function all(...$arg){
        $sql="select * from $this->table ";

        if(isset($arg[0])){
            if(is_array($arg[0])){
                foreach($arg[0] as $key => $value){
                    $tmp[]=sprintf("`%s`='%s'",$key,$value);
                }

                $sql .= " where ".implode(" && ",$tmp);

            }else{
                $sql .= $arg[0];
            }
        }

        if(isset($arg[1])){
            $sql .= $arg[1];
        }

        return $this->pdo->query($sql)->fetchAll();

    }
    function count(...$arg){
        $sql="select count(*) from $this->table ";

        if(isset($arg[0])){
            if(is_array($arg[0])){
                foreach($arg[0] as $key => $value){
                    $tmp[]=sprintf("`%s`='%s'",$key,$value);
                }

                $sql .= " where ".implode(" && ",$tmp);

            }else{
                $sql .= $arg[0];
            }
        }

        if(isset($arg[1])){
            $sql .= $arg[1];
        }

        return $this->pdo->query($sql)->fetchColumn();
    }
    function find($id){
        $sql="select * from $this->table ";

        if(is_array($id)){
            foreach($id as $key => $value){
                $tmp[]=sprintf("`%s`='%s'",$key,$value);
            }

            $sql .= " where ".implode(" && ",$tmp);

        }else{
            $sql .= " where `id`='$id'";
        }
        

        return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    }
    function del($id){
        $sql="delete from $this->table ";

        if(is_array($id)){
            foreach($id as $key => $value){
                $tmp[]=sprintf("`%s`='%s'",$key,$value);
            }

            $sql .= " where ".implode(" && ",$tmp);

        }else{
            $sql .= " where `id`='$id'";
        }
        

        return $this->pdo->exec($sql);
    }
    function save($arr){
        if(isset($arr['id'])){
            //update
            foreach($arr as $key => $value){
                $tmp[]=sprintf("`%s`='%s'",$key,$value);
            }

            $sql="update $this->table set ".implode(',',$tmp)." where `id`='{$arr['id']}'";
        }else{
            //insert

            $sql="insert into $this->table (`".implode("`,`",array_keys($arr))."`) values('".implode("','",$arr)."')";
        }
        return $this->pdo->exec($sql);
    }
    function q($sql){
        return $this->pdo->query($sql)->fetchAll();
    }


}

function to($url){
    header("location:".$url);
}


$Aut=new DB("re_aut");
$Admin=new DB("re_admin");
$Menu=new DB("re_menu");
$Education=new DB("re_education");
$Experience=new DB("re_experience");
$Port=new DB("re_port");
$Skill=new DB("re_skill");
$Connection=new DB("re_connection");
$Headshot=new DB("re_headshot");
$Me=new DB("re_me");
$Job=new DB("re_job");


?>