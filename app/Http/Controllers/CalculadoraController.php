<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{

    public function index()
    {
        return view('calculadora.index');
    }

    public function segundaDose(Request $request)
    {
        $vacina = $request->marcaVacina;
        $data = $request->primeiraDose;
        
        //Dias de espera para tomar a segunda dose de acordo com cada vacina.
        $astraZeneca = 56;
        $coronavac = 28;
        $jansenReforco = 61;
        $pfizer = 56;

        // Este switch/case verifica qual vacina foi a selecionada, chama o método calcularSegundaDose e atribui
        // os dias que precisam para calcular a data da terceira dose.
        if($data != 'null' && $vacina != 'null'){
            switch ($vacina) {
                case 'AztraZeneca':
                    $segundaDose = $this->calcularSegundaDose($astraZeneca, $data);
                    $status = true;
                    break;

                case 'Coronavac':
                    $segundaDose = $this->calcularSegundaDose($coronavac, $data);
                    $status = true;
                    break;

                case 'Jansen':
                    $segundaDose = $this->calcularSegundaDose($jansenReforco, $data);
                    $status = true;
                    break;

                case 'Pfizer':
                    $segundaDose = $this->calcularSegundaDose($pfizer, $data);
                    $status = true;
                    break;
                default:
                    $segundaDose = 'Por favor, selecione uma das vacinas liberadas.';
                    $status = false;
                    break;
            }
        }

        return json_encode(['resultado' => $segundaDose, 'vacina' => $vacina, 'data' => $data, 'status' => $status]);        
    }

    public function calcularSegundaDose(int $vacina, string $datainicio)
    {
        ini_set('date.timezone','America/Sao_Paulo');
        $datatermino = date('d-m-Y', strtotime("+".$vacina."days", strtotime($datainicio)));

        return $datatermino;
    }

    public function terceiraDose(Request $request)
    {
        $prazo = 120;
        $prazoImuno = 28;
        $data = $request->dataSegundaDose;

        // // Neste echo é possível verificar que os dados do $request estão vazios.
        // echo 'Data: '.$request->dataSegundaDose.'<br>Prazo: '.$prazo . '<br>Prazo Imuno:' . $prazoImuno;
        // exit();
        
        // Aparentemente, o $data está vindo com valor null, o que acaba gerando erro no cálculo.

        ini_set('date.timezone','America/Sao_Paulo');
        $dataTerceiraDose = date('d-m-Y', strtotime("+".$prazo."days", strtotime($data)));
        $dataTerceiraDoseImuno = date('d-m-Y', strtotime("+".$prazoImuno."days", strtotime($data)));

        return json_encode(['resultado' => $dataTerceiraDose, 'resultadoImuno' => $dataTerceiraDoseImuno, 'data' => $data]);
    }

}