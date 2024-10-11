<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../models/Arbol.php';

class ArbolesController {
    private $model;

    public function __construct($db) {
        $this->model = new Arbol($db);
    }

    public function index() {
        $arboles = $this->model->readAll();
        require __DIR__ . '/../views/arboles/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->fuente = $_POST['fuente'];
            $this->model->especie = $_POST['especie'];
            $this->model->edad = $_POST['edad'];
            $this->model->numArbol = $_POST['numArbol'];
            $this->model->diametro = $_POST['diametro'];
            $this->model->altura = $_POST['altura'];
            $this->model->codigoSitio = $_POST['codigoSitio'];
            $this->model->fechaPlan = $_POST['fechaPlan'];

            if ($this->model->create()) {
                header("Location: index.php");
                exit();
            } else {
                echo "Error al guardar el árbol.";
            }
        }

        require __DIR__ . '/../views/arboles/create.php';
    }

    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->idArbol = $id;
            $this->model->fuente = $_POST['fuente'];
            $this->model->especie = $_POST['especie'];
            $this->model->edad = $_POST['edad'];
            $this->model->numArbol = $_POST['numArbol'];
            $this->model->diametro = $_POST['diametro'];
            $this->model->altura = $_POST['altura'];
            $this->model->codigoSitio = $_POST['codigoSitio'];
            $this->model->fechaPlan = $_POST['fechaPlan'];

            if ($this->model->update()) {
                header("Location: index.php");
                exit();
            } else {
                echo "Error al actualizar el árbol.";
            }
        } else {
            $this->model->idArbol = $id;
            $arbol = $this->model->readOne();
            require __DIR__ . '/../views/arboles/edit.php';
        }
    }

    public function delete($id) {
        $this->model->idArbol = $id;
        if ($this->model->delete()) {
            header("Location: index.php");
            exit();
        } else {
            echo "Error al eliminar el árbol.";
        }
    }
}
?>
