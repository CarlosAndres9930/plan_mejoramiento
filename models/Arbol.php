<?php
class Arbol {
    private $conn;
    private $table_name = "arboles";

    public $idArbol;
    public $fuente;
    public $especie;
    public $edad;
    public $numArbol;
    public $diametro;
    public $altura;
    public $codigoSitio;
    public $fechaPlan;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create() {
        $query = "INSERT INTO " . $this->table_name . " SET
            fuente = :fuente,
            especie = :especie,
            edad = :edad,
            numArbol = :numArbol,
            diametro = :diametro,
            altura = :altura,
            codigoSitio = :codigoSitio,
            fechaPlan = :fechaPlan";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':fuente', $this->fuente);
        $stmt->bindParam(':especie', $this->especie);
        $stmt->bindParam(':edad', $this->edad);
        $stmt->bindParam(':numArbol', $this->numArbol);
        $stmt->bindParam(':diametro', $this->diametro);
        $stmt->bindParam(':altura', $this->altura);
        $stmt->bindParam(':codigoSitio', $this->codigoSitio);
        $stmt->bindParam(':fechaPlan', $this->fechaPlan);

        return $stmt->execute();
    }

    public function readAll() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function readOne() {
        $query = "SELECT * FROM " . $this->table_name . " WHERE idArbol = :idArbol";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':idArbol', $this->idArbol);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update() {
        $query = "UPDATE " . $this->table_name . " SET
            fuente = :fuente,
            especie = :especie,
            edad = :edad,
            numArbol = :numArbol,
            diametro = :diametro,
            altura = :altura,
            codigoSitio = :codigoSitio,
            fechaPlan = :fechaPlan
            WHERE idArbol = :idArbol";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':fuente', $this->fuente);
        $stmt->bindParam(':especie', $this->especie);
        $stmt->bindParam(':edad', $this->edad);
        $stmt->bindParam(':numArbol', $this->numArbol);
        $stmt->bindParam(':diametro', $this->diametro);
        $stmt->bindParam(':altura', $this->altura);
        $stmt->bindParam(':codigoSitio', $this->codigoSitio);
        $stmt->bindParam(':fechaPlan', $this->fechaPlan);
        $stmt->bindParam(':idArbol', $this->idArbol);

        return $stmt->execute();
    }

    public function delete() {
        $query = "DELETE FROM " . $this->table_name . " WHERE idArbol = :idArbol";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':idArbol', $this->idArbol);
        return $stmt->execute();
    }
}
?>
