
    <div class="row justify-content-center">

        <div class="card me-3 container-fluid" style="width: 35rem;">
            <div class="card-body" id="card1">
                <div class="alert alert-primary" align="center" id="cardSegundaDose">
                    <br><strong><h2>
                        SEGUNDA DOSE
                    </h2></strong><br>
                </div> 

                <form name="segundaDose" id="segundaDose">  
                    <center>
                        <img class="img-responsive" src="{{ asset('images/ampola_vacina.jpg') }}"  alt="Ampola Vacina" width="200" height="200">
                    </center>

                    <div class="form-group row">
                        <div class="select form-group col-6">
                            <label for="marcaVacina" class="mb-3 mt-3">Qual a vacina tomada:</label>
                            <select class="form-control" name="marcaVacina" id="marcaVacina">
                                <option selected value="null">Selecione uma Opção</option>
                                <option value="AztraZeneca">AztraZeneca</option>
                                <option value="Coronavac">Coronavac</option>
                                <option value="Jansen">Jansen - Reforço</option>
                                <option value="Pfizer">Pfizer</option>
                            </select>
                        </div>

                        
                        <div class="row col-5">
                            <label class="mb-3 mt-3" for="primeiraDose">Data da 1ª Dose:</label>
                            <input type="date" class="form-control text-center col-6" name="primeiraDose" id="primeiraDose" placeholder="Formato dd/mm/aaaa">
                        </div>
                        

                        <div class="mt-3 text-center">
                            <input type="submit" form="segundaDose" class="btn btn-primary btn-lg" value="Consultar">
                        </div>

                        <div name="respostaCalculo" id="respostaCalculo"></div>
                    </div>
                </form>
            </div>
        </div>

        {{--     
            INÍCIO DO CARD DA TERCEIRA DOSE
        --}}

        <div class="card container-fluid" style="width: 35rem;">
            <div class="card-body">    
                <div class="alert alert-warning mb-3" align="center" id="cardTerceiraDose">
                    <br><strong><h2>
                        TERCEIRA DOSE
                    </h2></strong><br>
                </div> 

                <form name="terceiraDose" id="terceiraDose">
                    <center>
                        <img src="{{ asset('images/ampola_vacina.jpg') }}" alt="Ampola Vacina" width="200" height="200">
                    </center>

                    <div class="form-group row">    
                        <div class="col-5">
                            <label class="mb-3 mt-3" for="dataSegundaDose">Data da 2ª Dose:</label>
                            <input type="date" class="form-control text-center col-6" name="dataSegundaDose" id="dataSegundaDose" placeholder="Formato dd/mm/aaaa">
                        </div>
                        
                        <div class="mt-3 text-center">
                            <input type="submit" form="terceiraDose" class="btn btn-warning btn-lg" value="Consultar">
                        </div>

                        <div name="respostaTerceiraDose" id="respostaTerceiraDose" type="date"></div>

                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- Chamada dos scripts que serão utilizados para atualizar com as informações das próximas vacinas --}}
    <script src="{{ asset('js/jQuery/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
