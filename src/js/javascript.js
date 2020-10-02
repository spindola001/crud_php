$( '#formCadastro' ).on( 'submit', function( event ) {
    event.preventDefault();
    var dados = $(this).serialize();

    $.ajax({
        url: '/test/src/controllers/CadastroController.php',
        method: 'post',
        dataType: 'html',
        data: dados,
        success:function(dados){
            $('#result').removeClass('d-none').show().html(dados);
        }
    })
});

$('.deletar').on('click', function(event){
    event.preventDefault();

    var link = $(this).attr('href');
    
    if(confirm("Deseja mesmo deletar este usuário?")){
            var dados = $(this).serialize();
        
            $.ajax({
                url:link,
                method: 'delete',
                dataType: 'html',
                data: dados,
                success:function(dados){
                    $('#result').removeClass('d-none').show().html(dados);
                }
            });
    }else{
        return false;
    }
})


