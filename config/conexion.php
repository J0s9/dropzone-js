<?php
    class Conectar{
        protected $dbh;

        public function __construct()
        {
            $this->Conexion();
        }

        protected function Conexion(){
            try{
                $conexion = $this->dbh = new PDO("pgsql:host=dpg-code3sgl6cac73biguv0-a.oregon-postgres.render.com;dbname=dropzone_js","root","x4PEjeKubDTD0uLArnPNrT38R1vyFg6A");
                return $this->dbh;
            }catch(Exception $e){
                echo "Error al conectar DB: ". $e->getMessage();
                die();
            }
        }
    }

try{
    $conexion = new Conectar();
}catch(Exception $e){
    echo   "Error: ". $e->getMessage();
}
?>