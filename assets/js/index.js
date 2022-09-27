$(document).ready(function(){
  $.ajax({
    type: 'POST',
    url: 'php/cargar_paises.php'
  })
  .done(function(pais){
    $('#lista_paises').html(lista_paises)
  })
  .fail(function(){
    alert('Hubo un errror al cargar los paises')
  })

  $('#lista_paises').on('change', function(){
    var id = $('#lista_paises').val()
    $.ajax({
      type: 'POST',
      url: 'php/cargar_departamentos.php',
      data: {'id': id}
    })
    .done(function(pais){
      $('#lista_departamentos').html(lista_paises)
    })
    .fail(function(){
      alert('Hubo un errror al cargar los departamentos')
    })
  })
  $('#lista_departamentos').on('change', function(){
    var id = $('#lista_departamentos').val()
    $.ajax({
      type: 'POST',
      url: 'php/cargar_municipios.php',
      data: {'id': id}
    })
    .done(function(departamento){
      $('#lista_municipios').html(lista_departamentos)
    })
    .fail(function(){
      alert('Hubo un errror al cargar los municipios')
    })
  })

})