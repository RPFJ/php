<?php
$hierarquia = array(
    array(
        'nome_cargo' => 'CEO',
        'subordinados' => array(
            //Inicio: Diretor Comercial
            array(
                'nome_cargo'=> 'Diretor Comercial',
                'suborinados'=> array(
                    // Inico: Gerente de Vendas
                    array(
                        'nome_cargo'=> 'Gerente de Vendas'
                    )
                    // Termino: Gerente de Vendas
                )
            ),
            // Termino: Diretor COmercial
            //Inicio: Diretor Financeiro
            array(
                'nome_cargo'=> 'Diretor Financeiro',
                'subordinados'=> array(
                    //Inicio: Gerente de Contas a Pagar
                    array(
                        'nome_cargo'=> 'Gerente de contas a Pagar',
                        'subordinados'=> array(
                            //Inicio: Supervisor de pagamentos
                            array(
                                'nome_cargo'=>'Supervisor de pagamentos'
                            )
                            //Termino: Supervisor de pagamentos
                        ) 
                    ),
                    // Termino: Gerente de contas a Pagar
                    //Inicio: Gerente de Compras
                    array(
                        'nome_cargo'=> 'Gerente de Compras',
                        'subordinados'=> array(
                            // Inicio: Supervisor de Suprimentos
                            array(
                                'nome_cargo'=> 'Supervisor de Suprimentos',
                                'subordinados'=> array(
                                    array(
                                        'nome_cargo'=>'Funcionario'
                                    )

                                )
                            )
                            // Termino : Supervisor de Suprimentos
                        )
                    )
                    //Termino: Gerente de Compras
                )
            )
        )
    )
);

function exibe($cargos){

    $html = '<ul>';

    foreach($cargos as $cargo){

        $html .= "<li>";
        $html .= $cargo['nome_cargo']; 

        if(isset($cargo['subordinados'])&& count($cargo['subordinados'] )> 0){
            $html .= exibe($cargo['subordinados']); 
        }

        $html .= "</li>";
    }

    $html .= "</ul>";

    return $html;


}


echo exibe($hierarquia); 

?>