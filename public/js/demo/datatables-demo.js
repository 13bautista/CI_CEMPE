/*
$('#myModal').modal('show');
$(document).ready(function () {
  var table = $('#dataTable').DataTable({
    "language": {
      "lengthMenu": "Mostrar _MENU_ registros por pagina",
      "zeroRecords": "No se encontró nada",
      "info": "Pagina _PAGE_ de _PAGES_",
      "infoEmpty": "No hay registros disponibles",
      "infoFiltered": "(Filtrado de _MAX_ rgistros totales)",
      "emptyTable": "No hay datos disponibles en la tabla",
      "loadingRecords": "Cargando...",
      "processing": '<i class="fa fa-spinner fa-spin" style="font-size:24px;color:rgb(75, 183, 245);"></i>',
      "search": "Buscar:",
      "zeroRecords": "No se encontraron registros coincidentes",
      "paginate": {
        "first": "Primero",
        "last": "Ultimo",
        "next": "Siguiente",
        "previous": "Anterior"
      },
      "aria": {
        "sortAscending": ": Ordenar columna ascendente",
        "sortDescending": ": Ordenar columna descendente"
      }
    },
    data: dt,
    "initComplete": function (settings, json) {
      $('#myModal').modal('toggle')
    },
  });
})
*/
$(document).ready(function () {
  $('#dataTable').DataTable({
    data: dt,
    autoWidth: true,
  });
});