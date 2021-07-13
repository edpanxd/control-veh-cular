function obtenerdatos (id){
parametros= {
    "id" : is
}
$.ajax({
    data:parametros,
    URL:'../vehiculos.php',
    type: 'POST',
    beforeSend:function(){},
    success:function(response){
        console.long(response);
    }
});
}