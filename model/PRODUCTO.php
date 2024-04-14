<?php
class Producto extends Conectar{
    public function insert_producto($prod_name){
        $conectar = parent::Conexion();
        $sql="INSERT INTO producto (name) VALUES(?);";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$prod_name);
        $sql->execute();

        $sql2="SELECT currval('producto_code_seq') AS prod_id;";
        $sql2=$conectar->prepare($sql2);
        $sql2->execute();
        return $resultado=$sql2->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insert_img($prod_id,$img_dt){
        $conectar = parent::Conexion();
        $sql="INSERT INTO img_dt (p_code,img_dt) VALUES (?,?);";
        $sql=$conectar->prepare($sql);
        $sql->bindParam(1,$prod_id);
        $sql->bindParam(2,$img_dt);
        $sql->execute();
    }
}
?>