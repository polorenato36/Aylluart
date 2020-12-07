<!DOCTYPE html>
<html>
<head>

</head>
<body>

<form method = "Post" action="UNO.php">
        Nombre de usuario : <input type = "text" name="usuario"><br>
        Contraseña : <input type = "password" name="contraseña"><br>
            <input type= "submit" name= "enviar">
</form>
<?php
{
    protected $ventas, $temporal_compra, $detalle_venta, $productos, $configuracion;

    public function _construct()
    {
        $this->ventas = new VentasModel();
        $this->detalle_venta = new DetalleVentaModel();
        $this->configuracion = new ConfiguracionModel();
        helper(['form']);
    }

    public function index()
    {
        $compras = $this->compras->where('activo', $activo)->findAll();
        $data = ['titulo'=> 'Compras','compras'=> $compras];

        echo view('header');
        echo view('compras/compras');
        echo view('footer');
    }
}