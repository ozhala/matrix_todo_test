<?php


class DB {

    public $pdo;

    public function __construct(Closure $fn)
    {
        $fn();
        try {
            $this->pdo = new PDO(DB_CONFIG, DB_USER, DB_PASSWORD);
        } catch (PDOException $perr) {
         
        } 
    }


    public function get_data()
    {
        $sql_select = "SELECT * FROM tasks";
        $query = $this->pdo->prepare($sql_select);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }


    public function get_statistics()
    {
        $stat_array = [];
        $sql_select = "SELECT COUNT(*) AS amount FROM tasks AS t1
            UNION ALL
            SELECT COUNT(*) FROM tasks AS t2 WHERE t2.status = 1
            UNION ALL
            SELECT COUNT(*) FROM tasks AS t3 WHERE t3.status = 0
            ";
        $query = $this->pdo->prepare($sql_select);
        $query->execute();
        $fetch = $query->fetchAll(PDO::FETCH_COLUMN);

        $stat_array["total"] = $fetch[0];
        $stat_array["completed"] = $fetch[1];
        $stat_array["remaining"] = $fetch[2];

        return $stat_array;

    }



    public function create($request)
	{
        $title = $request['title'];
        $type = $request['type'];
        $article = $request['article'];

        $sql = "INSERT INTO tasks VALUES (null, ?, ?, ?, 0, NOW(), NOW())";
        $query = $this->pdo->prepare($sql);
        $query->execute([$title, $type, $article]);

        echo 1;
	}

 



}