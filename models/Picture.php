<?php

require_once 'models/Connection.php';

class Picture extends Connection
{

    public function __construct()
    {
    }

    public function addPicture($id_property, $picture_description, $picture_url)
    {
        $sql = "INSERT INTO picture (id_property, picture_description, picture_url) VALUES (?, ?, ?);";
        $this->executerRequete($sql, array($id_property, $picture_description, $picture_url));
    }
    
    public function deletePicture($id_property)
    {
        $sql = "DELETE FROM picture WHERE id_property = ?;";
        $this->executerRequete($sql, array($id_property));


    public function getPicturesOfOneProperty($id_property)
    {
        $sql = "SELECT * FROM picture WHERE id = ?;";
        $stmt = $this->executerRequete($sql, array($id_property));
        $pictures = $stmt->fetchAll();

        return $pictures;

    }
}
