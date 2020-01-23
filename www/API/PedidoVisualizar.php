<?php
namespace FITCHEF\API;
use FITCHEF\Model\Cliente;
use FITCHEF\Model\Pedido;
use FITCHEF\Model\Carrinho;
use FITCHEF\DAO\DAOPedido;

class PedidoVisualiza{

    public $dados;
    public $produtos;


    public function __construct(){
        try{
            $DAO = new DAOPedido();
            $this->dados = $DAO->detalhaPedido($_GET['id']);
            $this->produtos = $DAO->listaItens($_GET['id']);

        }catch(\Exception $e){
            $this->dados = $e->getMessage();
            
        
        }
    }
}