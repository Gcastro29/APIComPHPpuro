<?php

$data = [];

//ROTAS DO REQUEST E VALIDAÇÕES
    if(isset($_GET['Produtos'])){
        switch ($_GET['Produtos']){

            case 'CamisaSocial':
                $data['status'] = 'Ativo';
                $data['produto'] = 'Camisa';
                $data['Fabricante'] = 'Zant Roupas';
                $data['Tecido'] = 'malha lisa';
                $data['Valor'] = 'R$50,00';
                break;

            case 'CamisaApolo':
                $data['status'] = 'Ativo';
                $data['produto'] = 'Camisa Apolo';
                $data['Fabricante'] = 'Veste Bem Roupas';
                $data['Tecido'] = 'malha fina';
                $data['Valor'] = 'R$20,00';
                break;
            
            case 'CalcaJeans':
                $data['status'] = 'Inativo';
                $data['produto'] = 'Calça Jeans';
                $data['Fabricante'] = 'JeansLife';
                $data['Tecido'] = 'Jeans tradicional';
                $data['Valor'] = 'R$60,00';
                break;

             
            case 'ProdutosDisponiveis':
              
                $data[] = new stdClass();
                $data['produtoUm'] = 'CamisaSocial';
                $data['produtoDois'] = 'CamisaApolo'; 
                $data['produtoTres'] = 'CalsaJeans';
              
                break;

            default:
                $data['status'] = 'Requisição API com erro!!!';
                break;
        }
   
    } else{
        $data['status'] = 'ERROR';
    }

    //Emitir a resposta da API
    response($data);

    //construção da response
    function response($data_response){
        header('Content-Type:application/json');
        echo json_encode($data_response);
    }




?>