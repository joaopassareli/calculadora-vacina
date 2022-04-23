@extends('layout')

    <img class="logo" src="{{ asset('images/Logo_Imuniza_Trans_Peq.png') }}" alt="Logo da ação Imuniza Marília" >

@section('cabecalho')
    Consulte a data de Vacinação contra o Coronavírus
@endsection

@section('conteudo')

    <div id="card-area">
        <div class="container">
            
            <div class="row" id="div-principal">

                {{-- CARD SEGUNDA DOSE --}}
                <div class="col-md-4">
                    <div class="card" id="card-segunda-dose">
                        <h3>Segunda Dose</h3>
                        <div class="card-body">
                            <form name="segundaDose" id="segundaDose">

                                <img class="img-responsive" src="{{ asset('images/ampola_vacina.jpg') }}" alt="Imagem da Ampola da Vacina"> 

                                <div class="form-group">
                                    <label class="label-padrao" for="marcaVacina">Qual a vacina tomada:</label>
                                    <select class="input-padrao" name="marcaVacina" id="marcaVacina">
                                        <option selected value="null" style="text-align: center">Selecione</option>
                                        <option value="AztraZeneca">AztraZeneca</option>
                                        <option value="Coronavac">Coronavac</option>
                                        <option value="Jansen">Jansen - Reforço</option>
                                        <option value="Pfizer">Pfizer</option>
                                    </select>
                                </div>       
                                
                                <div class="form-group">
                                    <label class="label-padrao"  for="primeiraDose">Data da 1ª Dose:</label>
                                    <input type="date" class="input-padrao" name="primeiraDose" id="primeiraDose" placeholder="Formato dd/mm/aaaa" style="text-align: center">
                                </div>

                                <input type="submit" form="segundaDose" class="btn-segunda-dose" value="Consultar">

                                <div name="respostaCalculo" id="respostaCalculo" hidden></div>
                            </form>
                        </div>
                    </div>
                </div>


                {{-- CARD TERCEIRA DOSE --}}
                <div class="col-md-4">
                    <div class="card" id="card-terceira-dose">
                        <h3>Terceira Dose</h3>
                        <div class="card-body">
                            <form name="terceiraDose" id="terceiraDose">
                                <img class="img-responsive" src="{{ asset('images/ampola_vacina.jpg') }}" alt="Imagem da Ampola da Vacina">

                                <div class="form-group">
                                    <label class="label-padrao" for="dataSegundaDose">Data da 2ª Dose:</label>
                                    <input type="date" class="input-padrao" name="dataSegundaDose" id="dataSegundaDose" placeholder="Formato dd/mm/aaaa" style="text-align: center">
                                </div>

                                <input class="btn-terceira-dose" type="submit" form="terceiraDose" value="Consultar">

                                <div name="respostaTerceiraDose" id="respostaTerceiraDose" type="date" hidden></div>
                            </form>
                        </div>
                    </div>
                </div>


                {{-- CARD QUARTA DOSE --}}
                <div class="col-md-4">   
                    <div class="card" id="card-quarta-dose">
                        <h3>Quarta Dose</h3>
                        <div class="card-body">
                            <form name="terceiraDose" id="terceiraDose">
                                <img src="{{ asset('images/construcao.png') }}" alt="" style="width: 300px; height: 200px">
                            </form>
                        </div>
                    </div>
                </div>
            
            
            </div>
        </div>
    </div>

    {{-- Chamada dos scripts que serão utilizados para atualizar com as informações das próximas vacinas --}}
    <script src="{{ asset('js/jQuery/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>

@endsection

@section('rodape')
    <p class="contato"><img class="logo-whatsapp" src="{{ asset('images/whatsapp-logo.png') }}" alt="Logo do Whatsapp">(14) 98208-1155 /  <img class="logo-whatsapp" src="{{ asset('images/whatsapp-logo.png') }}" alt="Logo do Whatsapp">(14) 98208-2255 / (14) 3402-6509</p>

    <p class="copyright"><strong>&copy; Copyright</strong> Secretaria Municipal de Tecnologia da Informação, Prefeitura de Marília - 2022</p>
    <img class="logo-prefeitura" src="{{ asset('images/logo_PMM.png') }}" alt="Logo da Prefeitura de Marília">
@endsection