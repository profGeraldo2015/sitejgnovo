$(document).ready(function() {
//    var HeightTela = $(window).height();
//    $('.slide').height(HeightTela);

});

function LoadFrete() {

    var cep_destino = $('#cep_destino').val();
  
    $.ajax({
        url: 'ajax/a_frete.php',
        type: 'POST',
        dataType: 'html',
        cache: false,
        data: {cep_destino: cep_destino},
        success: function (data) {
            
            //console.log(data);
            
            console.log('Valor = ' + data);

            //$('#txt_valor').val(data);

            //var val_prod = $('#valor_pro').val();

            //val_prod = val_prod.replace(',', '.');
            
            data = data.replace('.', ',');

            //var total = parseFloat(data);

            $('#txt_valor').val(data);


        }, beforeSend: function (data) {
            
        }, error: function (jqXHR, textStatus, errorThrown) {
            console.log('Erro');

        }
    });


}

function lecard(){

    const sectionCards = document.querySelector("section.cards");

    const card = document.querySelector("div.card");

    
}
