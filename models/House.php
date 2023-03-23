<?php

class House extends Property
{
    private $houseAttribute;
    private $property;

    // public function __construct($attribute, $houseAttribute)
    // {
    //     parent::__construct($attribute);
    //     $this->houseAttribute = $houseAttribute;
    // }
    // public function __construct()
    // {
    //     $this->property = new Property;
    // }

    public function addHouse($id_property, $garden, $bonus)
    {
        $sql = "INSERT INTO house (id_property, garden, bonus) VALUES (?, ?, ?);";
        $this->executerRequete($sql, array($id_property, $garden, $bonus));
    }

    public function getAllHouses($id)
    {
        $sql = "SELECT house.id FROM house INNER JOIN property on property.id = house.id WHERE id_user = ?;";
        $stmt = $this->executerRequete($sql, array($id));
        $properties = $stmt->fetchAll();

        return $properties;
    }

    public function getOneHouse($id_property)
    {
        $sql = "SELECT id, id_property FROM house WHERE id_property=? ";
        $result = $this->executerRequete($sql, array($id_property));
        $house = $result->fetch();
        return $house;
    }
}
