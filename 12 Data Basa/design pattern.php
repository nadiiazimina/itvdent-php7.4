<?php

//Singleton pattern
//Задача - единый экземпляр класса, можно вызвать только внутри класса
//PDO - умееет делать fetch и умеет делать execute

//Bilder pattern

//Fluent interface pattern - возможность вызывать друг за лругом методы

class Builder
{
    private $select = [];
    private $from;
    private $where = [];
    private $orwhere = [];
    private $andwhere = [];
    private $order = [];

    const ASC = "asc";
    const DESC = "desc";


    public function select(array $select)
    {
        foreach($select as $item)
        {
            if(!is_string($item))
            {
                throw new Exception("Невалидное занчение для $select");
            }
        }
        $this->select = array_unique(array_merge($select, $this->select));

        return $this;
    }

    public function from(string $from): self
    {
        if($this->from)
        {
            throw new Exception("$from нужно определить ровно один раз");
        }

        $this->from = $from;

        return $this;
    }

    public function where(array $where)
    {
        if($this->where)
        {
            throw new Exception("$where нужно определить ровно один раз");
        }

        $this->where = $where;

        return $this;
    }

    public function andWhere(array $andWhere)
    {
        $this->andWhere = array_unique(array_merge($this->andWhere, $where));

        return $this;
    }

    public function orWhere(array $orWhere)
    {
        $this->orWhere = array_unique(array_merge($this->orWhere, $where));

        return $this;
    }

    public function orderBy(string $column, string $order)
    {
        if(!mb_strlen($column) || !mb_strlen($order))
        {
            throw new Exception("Невалидное значение для $order|$column");
        } elseif(in_array($order,[self::ASC, self::DESC]))
        {
            throw new Exception("Невалидное значение для $order");
        }

        $this->order[$column] = $order;

        return $this;
    }

    public function buildQuery(): string
    {
        if(!$this->select)
        {
            throw new Exception("$select не может быть пустой");
        }

        if(!$this->from)
        {
            throw new Exception("$from не может быть пустой");
        }

        $sql = "";
        $sql.= "SELECT" .implode("," ,$this->select);
        $sql.= "FROM" .$this->from;

        $where = [];
        if($this -> where)
        {
            $where["AND"] = $this->where;
        }

        if($this -> andWhere)
        {
            $where["AND"] = array_merge($where["AND"] ?? [],$this->andWhere);
        }

        if(isset($where["AND"]))
        {
            $sql = "WHERE" .implode("AND ", $where["AND"]);
            if($this->orWhere)
            {
                $sql.= implode("OR", $this->orWhere);
            }
        }elseif($this->orWhere)
        {
            $sql .= "WHERE" .implode(" OR ", $where["AND"]);
        }

        if($this->order)
        {
            $sql.="ORDER BY ";
            $orders = [];
            foreach($this->order as $colName=>$order)
            {
                $orders[]= $colName." ".$order;
            }

            $sql.=implode("," , $orders);
        }

        return $sql;
    }

}
    // $b = new Builder();
    // $query = $b
    //     ->select(["id"])
    //     ->from("user")
    //     ->where("id = 1")
    //     ->andWhere("name = 'Nadiia'")
    //     ->buildQuery();

    $builder = new Builder();
    $query = $builder
        ->select(["id"])
        ->from(["user"])
        ->where(["id = 1"])
        ->buildQuery();

        var_dump($query);



// class DB
// {
//     //создаем свойства которые не должны меняться
//     private static $instance;
//     private static $connection;

//     private function __construct()
//     {
//         static::$connection = new PDO(
//             "mysql:host=localhost; dbname=lesson12",
//             "root",
//             ""
//         );
//     }

//     public static function getInstance(): self
//     {
//         if(!static::$instance)
//         {
//             static::$instance = new static();
//         }

//         return static::$instance;
//     }

//     public function getConnection(): PDO
//     {
//         return static::$connection;
//     }

//     private function __clone()
//     {

//     }

//     // private function __wakeup()
//     // {
        
//     // }
// }

// $db = DB::getInstance();
// $connection = $db->getConnection();
// $users1 = $connection->query("SELECT * FROM user WHERE id = 1")->fetchAll();
// echo "<pre>";
// var_dump($users1);

// $connection->query("UPDATE user SET name = 'nadiia1' WHERE id =1")->execute();
// $users1 = $connection->query("SELECT * FROM user WHERE id = 1")->fetchAll();

// var_dump($users1);


