<?php
namespace FITCHEF\API;
use FITCHEF\Model\Cliente;
use FITCHEF\Model\Pedido;
use FITCHEF\Model\Carrinho;
use FITCHEF\DAO\DAOPedido;

class PedidoVisualiza{

    public $pedido;
    public $produtos;


    public function __construct(){
        try{
            $DAO = new DAOPedido();
            $this->pedido = $DAO->detalhaPedido($_GET['id']);
            
            $this->produtos = $DAO->listaItens($_GET['id']);
          
           
           

        }catch(\Exception $e){
            echo  $e->getMessage();
            
        
        }
    }
}