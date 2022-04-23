
// -- SEGUNDA DOSE  --
//Função que paga os dados do form, enviam para o controller e 
//devolvem para impressão na tela da próxima data para vacinação

$('#segundaDose').submit(function(e){
    e.preventDefault();

    $('#respostaCalculo').html('');

    var dataForm = $('#segundaDose').serialize();
    var data = $('#primeiraDose').val();

    var isValidDate = function(data) {
        return !!new Date(data).getTime();
    }
    if(isValidDate(data) === false){
        console.log(data);
        return alert("A data informada não é válida!");
    }

    getCalculoSegundaDose(dataForm);
});

function getCalculoSegundaDose(dataForm) {

    var url = window.location;

    $.ajax({
        url: url.origin+'/segundaDose', 
        type: 'GET',
        data: dataForm,
        dataType: 'json',
        success: function(result){
            var data = result.data.split('-').reverse().join('/');
            var resultado = result.resultado.replace(/-/g, "/");

            $('#respostaCalculo').attr('hidden', false);
            $('#respostaCalculo').prepend('<div>Como você tomou a primeira dose em <strong>' + data + '</strong>, você poderá tomar a segunda dose da <strong>' + result.vacina +'</strong> a partir de <strong>' + resultado +  '. </strong></div>');
            
        },
        error: function(){
            $('#respostaCalculo').prepend('<div class="alert alert-warning mt-2 alignb="center">Não foi possível realizar o cálculo, por favor, tente novamente fornecendo a Vacina e Data da Vacinação.</div>');
        }
    });
}


// -- TERCEIRA DOSE  --

$('#terceiraDose').submit(function(e){
    e.preventDefault();

    $('#respostaTerceiraDose').html('');

    var dataForm1 = $('#terceiraDose').serialize();
    var data2Dose = $('#dataSegundaDose').val();

    var isValidDate = function(data2Dose) {
        return !!new Date(data2Dose).getTime();
    }
    if(isValidDate(data2Dose) === false){
        return alert("A data informada não é válida!");
    }

    getCalculoTerceiraDose(dataForm1);

});

function getCalculoTerceiraDose(dataForm1){

    var url = window.location;    

    $.ajax({
        url: url.origin+'/terceiraDose',
        type: 'GET',
        data: dataForm1,
        dataType: 'json',
        success: function(result){
            var data = result.data.split('-').reverse().join('/');
            var resultado = result.resultado.replace(/-/g, "/");
            var resultadoImuno = result.resultadoImuno.replace(/-/g, "/");

            $('#respostaTerceiraDose').attr('hidden', false);
            $('#respostaTerceiraDose').prepend('<div>Como você tomou a segunda dose em <strong> ' + data + ' </strong>, você poderá tomar a terceira dose a partir de <strong>' + resultado +  '</strong>. Porém, caso seja paciente <strong>imunossuprimido</strong>, poderá tomar a terceira dose a partir de <strong>' + resultadoImuno + '.</strong></div>');
        },
        error: function(){
            $('#respostaTerceiraDose').prepend('<div class="alert alert-warning mt-2 alignb="center">Não foi possível realizar o cálculo, por favor, tente novamente fornecendo a data da segunda dose.</div>');
        }
    });
}