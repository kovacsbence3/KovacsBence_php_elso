<?php
    class MonitorClass
    {
        private $connection;

        public function __construct(){
            $this->connection = new mysqli("localhost","root","","monitorok");
        }

        function getALL(){
            $sql = "SELECT * FROM monitorok";
            $result = $this->connection->query($sql);
            return $result->fetch_all(MYSQLI_ASSOC);
       }

       function create($monitorok){
        $sql = "INSERT INTO monitorok (Típus,Kiadás éve,Készlet,Ár,Eladott darab)
                VALUES  (?,?,?,?,?)";
        $stmt = $this->connection->prepare($sql);
        $Típus= $monitorok['Típus'];
        $Kiadáséve= $monitorok['Kiadás éve'];
        $Készlet= $monitorok['Készlet'];
        $Ár= $monitorok['Ár'];
        $Eladottdarab= $monitorok['Eladott darab'];
        $stmt->bind_param("sssss", $Típus, $Kiadáséve, $Készlet, $Ár, $Eladottdarab);
        $stmt->execute();
    
    }
    }
?>