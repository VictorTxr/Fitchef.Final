<?php
namespace FITCHEF\API;
use FITCHEF\Model\Cliente;
use FITCHEF\Model\Pedido;
use FITCHEF\Model\Carrinho;
use FITCHEF\DAO\DAOPedido;

class PedidoListar{

    public $lista;

    function __construct(){

        $obj = new DAOPedido();
        
        $this->lista = $obj->listarPedidoCliente($_SESSION['clienteid']);
        
    }



 
}