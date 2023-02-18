<?php
$ruta = $_SERVER['DOCUMENT_ROOT'] . "/NetBeansProyect/Linio/Model/Conexion/Conexion.php";
$ruta2 = $_SERVER['DOCUMENT_ROOT'] . "/NetBeansProyect/Linio/Model/Entity/Producto.php";
require $ruta;
require $ruta2;
class ProductoDao {
     private static $con;

    function ProductoDAO() {
        self::$con = ConexionDB::saberEstado();
    }

    public function create(Producto $objProducto) {
        $create = "INSERT INTO alumno(nombre,descripcion,imagen) VALUES(?,?,?)";
        try {
            $stmt = self::$con->getCon()->prepare($create);
            $stmt->bind_param('sss', $objProducto->getNombre(), $objProducto->getDescripcion(), $objProducto->getImagen());
            //$stmt->execute();
            if (!$stmt->execute()) {
                echo 'error al insertar datos';
            } else {
                echo 'DATOS GUARDADOS...';
            }
        } catch (Exception $ex) {
            echo 'error: ' . $ex->getMessage();
        } finally {
            $stmt->close();
            self::$con->cerrarConexion();
        }

        return;
    }

    public function delete(Producto $objProducto) {
        $delete = "delete FROM alumno  where codigo=?";
        try {
            $stmt = self::$con->getCon()->prepare($delete);
            $stmt->bind_param('s', $objProducto->getCodigo());
            //$stmt->execute();
            if (!$stmt->execute()) {
                echo 'error al eliminar datos';
            } else {
                echo 'DATOS BORRADOS...';
            }
        } catch (Exception $ex) {
            echo 'error: ' . $ex->getMessage();
        } finally {
            self::$con->cerrarConexion();
        }
    }

    public function find(Producto $objProducto) {
        $find = "select * from alumno where codigo=?";
        $stmt = self::$con->getCon()->prepare($find);
        $stmt->bind_param('s', $objProducto->getCodigo());
        $stmt->execute();
        $result = $stmt->get_result();
        while ($row = $result->fetch_assoc()) {
            $objProducto->setCodigo($row['codigo']);
            $objProducto->setNombre($row['nombre']);
            $objProducto->setEdad($row['edad']);
        } 
         $stmt->close();
        return $objProducto;
    }

    public function findAll() {
        $objProducto = null;
        $SQL_READALL = "select * from alumno";
        $result = self::$con->getCon()->query($SQL_READALL);
        self::$con->cerrarConexion();
        $listaProducto = new ArrayIterator();
        while ($row = mysqli_fetch_array($result)) {
            $objProducto = new Producto();
            $objProducto->setCodigo($row['0']);
            $objProducto->setNombre($row['1']);
            $objProducto->setEdad($row['2']);
            $listaProducto->append($objProducto);
        }
        
        return $listaProducto;
    }
    public function findAll2() {
        $objProducto = null;
        $SQL_READALL = "select * from alumno";
        $result = self::$con->getCon()->query($SQL_READALL);
        self::$con->cerrarConexion();
        $listaProducto = new ArrayIterator();
        while ($row = mysqli_fetch_assoc($result)) {
            $objProducto = new Producto();
            $objProducto->setCodigo($row['codigo']);
            $objProducto->setNombre($row['nombre']);
            $objProducto->setEdad($row['edad']);
            $listaProducto->append($objProducto);
        }
        
        return $listaProducto;
    }

    public function update(Producto $objProducto) {
        $create = "UPDATE alumno set nombre=?,edad=? where codigo=?";
        try {
            $stmt = self::$con->getCon()->prepare($create);
            $stmt->bind_param('sss', $objProducto->getNombre(), $objProducto->getEdad(), $objProducto->getCodigo());
            //$stmt->execute();
            if (!$stmt->execute()) {
                echo 'error al actualizar datos';
            } else {
                echo 'DATOS ACTUALIZADOS...';
            }
        } catch (Exception $ex) {
            echo 'error: ' . $ex->getMessage();
        } finally {
            self::$con->cerrarConexion();
        }

        return;
    }

}
