<?php


class DbLetturaArticoli {
    public string $databaseDSN;
    public string $user;
    public string $password;
    public string $pdo;
    
    
    public function __construct($dbUrl,$u,$p) {
        $this->databaseDSN = $dbUrl;
        $this->user=$u;
        $this->password=$p;
    }
    function selectData() {
       
        
        try {
            $pdo= new PDO($this->databaseDSN, $this->user,$this->password);
            
            $sqlSelectArticles="Select id,titoloArticolo,contenutoArticolo from articoli";

            
            $stmt=$pdo->query($sqlSelectArticles);
           $articles=$stmt->fetchAll(PDO::FETCH_ASSOC);

           return $articles;        

        } catch(Exception $e) {
            echo $e->getMessage();
        }
        
    }
    function selectArticleById($id) {
        
        try {
            $pdo= new PDO($this->databaseDSN, $this->user,$this->password);
            
            $sqlSelectArticles="Select id,titoloArticolo,contenutoArticolo from articoli where id=".$id;

            
            $stmt=$pdo->query($sqlSelectArticles);
           $articles=$stmt->fetchAll(PDO::FETCH_ASSOC);

           return $articles;        

        } catch(Exception $e) {
            echo $e->getMessage();
        }
    }
    

}