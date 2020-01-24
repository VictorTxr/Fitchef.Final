<?php
namespace FITCHEF\API;
use FITCHEF\Model\Cliente;
use FITCHEF\Model\Pedido;
use FITCHEF\Model\Carrinho;
use FITCHEF\DAO\DAOPedido;
class PedidoCadastrar{
    public $msg;
    function __construct($url){
           
     if (isset($_SESSION['clienteid'])){ 
        $this->efetuarPedido();
        
        header("location:".$url."/pedido/pagamento");
     }else{ 
         
            $_SESSION['url'] = $url."/pedido/finalizar";
            
            header("location: ".$url." /login/cliente");

     }
    }
        
        function efetuarPedido(){ 

            try{ 

                $frete = $_SESSION['frete'];    
                 $obj = new Pedido();
                 $obj->setData('Y-m-d');
                 $obj->setFrete($frete->getValor());
                 $obj->setDias($frete->getPrazoEntrega());

                 $DAO = new DAOPedido();
                 $this->msg = $DAO->cadastrar($obj,$_SESSION['carrinho']);

            }catch(Exception $e){ 
                $this->msg = $e->getMessage();

            }
    }
    }
