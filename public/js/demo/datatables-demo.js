$(document).ready(function () {
  var table = $("#dataTable").DataTable({
    language: {
      decimal: "",
      emptyTable: "No hay información",
      info: "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
      infoEmpty: "Mostrando 0 to 0 of 0 Entradas",
      infoFiltered: "(Filtrado de _MAX_ total entradas)",
      infoPostFix: "",
      thousands: ",",
      lengthMenu: "Mostrar _MENU_ Entradas",
      loadingRecords: "Cargando...",
      processing: "Procesando...",
      search: "Buscar:",
      zeroRecords: "Sin resultados encontrados",
      paginate: {
        first: "Primero",
        last: "Ultimo",
        next: "Siguiente",
        previous: "Anterior",
      },
    },
    binfo: false,
    order: [[1, "desc"]],
    ajax: {
      url: baseurl + "home/getDataTable",
      type: "POST",
    },
    pageLength: 10,
    columns: [
      {
        //"bVisible": false, "aTargets": [0] // ID
      },
      null, // COMPENDIO
      null, // CONCEPTO
      null, // PROVEEDOR
      null, // MARCA
      null, // MODELO
      null, // SERIE
      null, // REGISTRO CARTERA
      null, // OFICIO ADJUDICACION
      null, // ORDEN SUMINISTRO
      {
        mRender: function (data, type, row) {
          var bindHtml = "";
          bindHtml +=
            '<a data-toggle="modal"     data-target="#mostrar"      href="javascript:void(0);" title="Ver"                  class="mostrar ml-1 btn-ext-small btn btn-sm btn-info"      data-id="' +
            row[0] +
            '"><i class="fas fa-eye"></i></a>';
          bindHtml +=
            '<a data-toggle="modal"     data-target="#actualizar"   href="javascript:void(0);" title="Editar/Actualizar"    class="actualizar ml-1 btn-ext-small btn btn-sm btn-primary"   data-id="' +
            row[0] +
            '"><i class="fas fa-edit"></i></a>';
          bindHtml +=
            '<a data-toggle="modal"     data-target="#eliminar"     href="javascript:void(0);" title="Eliminar"             class="eliminar ml-1 btn-ext-small btn btn-sm btn-danger"    data-id="' +
            row[0] +
            '"><i class="fas fa-times"></i></a>';
          return bindHtml;
        },
      },
    ],
    dom: '<"float-left"f>rt<"row"<"col-sm-4"i><"col-sm-4"p>>',
  });

  $("#agregar").on("hidden.bs.modal", function (event) {
    $(this).find("form").trigger("reset");
  });
});
