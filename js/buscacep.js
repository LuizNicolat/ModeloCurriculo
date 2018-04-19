$(document).ready(function() {

            //capturando o clique no botao
        jQuery('button[name="buscacep"]').click(function(){

            $( "#numero" ).focus();

            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#rua").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#uf").val("");
                $("#ibge").val("");
            }

            recebeCep = jQuery('input[name="cep"]').val();

            //Nova variável "cep" somente com dígitos.
                var cep = recebeCep.replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#rua").val("...");
                        $("#bairro").val("...");
                        $("#cidade").val("...");
                        $("#uf").val("...");
                        $("#ibge").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("//viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#rua").val(dados.logradouro);
                                $("#bairro").val(dados.bairro);
                                $("#cidade").val(dados.localidade);
                                $("#uf").val(dados.uf);
                                $("#ibge").val(dados.ibge);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }



        })//final do click do cep


    jQuery('#juridico').click(function(){
        $("#cpf").html("CNPJ");
        $("#rg").html("I.E.");
//    $("#LabelID").html("some value");
    }) //radio juridico

    jQuery('#fisico').click(function(){
        $("#cpf").html("CPF");
        $("#rg").html("RG");
//    $("#LabelID").html("some value");
    }) //radio fisico

//    jQuery('input[name="cadastrar"]').click(function(){
//
//        nome,
//        sobrenome,
//        FJ,
//        CGCCNPJ,
//        RGIE,
//        DTNASC,
//        CEP,
//        Rua,
//        bairro,
//        Localidade,
//        UF,
//        IBGE,
//        numero,
//        fone1,
//        fone2
//
//        usuario = jQuery('input[name="user"]').val();
//		senha = jQuery('input[name="senha"]').val();
//
//    }) //click cadastrar
})
