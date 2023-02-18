<?php

$ruta = $_SERVER['DOCUMENT_ROOT'] . "/NetBeansProyect/CRUD_FUL/Model.Dao/ProductoDao.php";
require $ruta;

class ProductoController {

    public function Index() {
        $objProductoDao = new ProductoDao();
        return $objProductoDao->findAll();
    }

    public function Index2() {
        $objProductoDao = new ProductoDao();
        return $objProductoDao->findAll2();
    }

    public function Find() {
        $codigo = $_REQUEST['codigo'];
        $objProductoDao = new ProductoDao();
        $objProductoDao->setCodigo($codigo);
        $objProductoDao = new ProductoDao();
        return $objProductoDao->find($objProducto);
    }

    public function Create() {
        $codigo = $_REQUEST['txtcodigo'];
        $nombre = $_REQUEST['txtnombre'];
        $edad = $_REQUEST['txtedad'];
        $objProductoDao = new ProductoDao();
        $objProductoDao->setCodigo($codigo);
        $objProductoDao->setNombre($nombre);
        $objProductoDao->setEdad($edad);

        $objProductoDao = new ProductoDao();
        return $objProductoDao->create($objProducto);
    }

    public function Update() {
        $codigo = $_REQUEST['txtcodigo'];
        $nombre = $_REQUEST['txtnombre'];
        $edad = $_REQUEST['txtedad'];
        $objProductoDao = new ProductoDao();
        $objProductoDao->setCodigo($codigo);
        $objProductoDao->setNombre($nombre);
        $objProductoDao->setEdad($edad);

        $objProductoDao = new ProductoDao();
        return $objProductoDao->update($objProducto);
    }

    public function Delete() {
        $codigo = $_REQUEST['txtcodigo'];
        $objProductoDao = new ProductoDao();
        $objProductoDao->setCodigo($codigo);
        $objProductoDao = new ProductoDao();
        return $objProductoDao->delete($objProducto);
    }

}
