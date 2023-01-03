jQuery(document).on("click", "a.mostrar", function () {
  var id = jQuery(this).data("id");
  jQuery.ajax({
    type: "POST",
    url: baseurl + "base/mostrar",
    data: { id: id },
    dataType: "html",
    beforeSend: function () {
      jQuery("#render-dispaly-data").html(
        '<div class="text-center"><i class="fa fa-spinner fa-pulse fa-5x fa-fw"></i></div>'
      );
    },
    success: function (html) {
      jQuery("#render-dispaly-data").html(html);
      jQuery("#mostrar").modal("show");
    },
    error: function (xhr, ajaxOptions, thrownError) {
      console.log(
        thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText
      );
    },
  });
});

jQuery(document).on("click", "a.actualizar", function () {
  var id = jQuery(this).data("id");
  jQuery.ajax({
    type: "POST",
    url: baseurl + "base/editar",
    data: { id: id },
    dataType: "html",
    beforeSend: function () {
      jQuery("#render-update-data").html(
        '<div class="text-center"><i class="fa fa-spinner fa-pulse fa-5x fa-fw"></i></div>'
      );
    },
    success: function (html) {
      jQuery("#render-update-data").html(html);
      jQuery("#actualizar").modal("show");
    },
    error: function (xhr, ajaxOptions, thrownError) {
      console.log(
        thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText
      );
    },
  });
});

jQuery(document).on("click", "a.eliminar", function () {
  var id = jQuery(this).data("id");
  $("#eliminar").on("shown.bs.modal", function (event) {
    jQuery("#base_id").val(id);
  });
});

jQuery(document).on("click", "button#agregar-base", function () {
  jQuery.ajax({
    type: "POST",
    url: baseurl + "base/guardar",
    data: jQuery("form#agregar-base-form").serialize(),
    dataType: "json",
    beforeSend: function () {
      jQuery("button#agregar-base").button("loading");
    },
    complete: function () {
      jQuery("button#agregar-base").button("reset");
      setTimeout(function () {
        jQuery("span#success-msg").html("");
      }, 5000);
    },
    success: function (json) {
      $(".text-danger").remove();
      if (json["error"]) {
        for (i in json["error"]) {
          var element = $(".input-base-" + i.replace("_", "-"));
          if ($(element).parent().hasClass("input-group")) {
            $(element)
              .parent()
              .after(
                '<div class="text-danger" style="font-size: 14px;">' +
                  json["error"][i] +
                  "</div>"
              );
          } else {
            $(element).after(
              '<div class="text-danger" style="font-size: 14px;">' +
                json["error"][i] +
                "</div>"
            );
          }
        }
      } else {
        jQuery("span#success-msg").html(
          '<div class="alert alert-success">Registro Agregado Satisfactoriamente.</div>'
        );
        jQuery("#dataTable").DataTable().ajax.reload();
        jQuery("form#agregar-base-form")
          .find("textarea, input")
          .each(function () {
            jQuery(this).val("");
          });
        jQuery("#agregar").modal("hide");
      }
    },
    error: function (xhr, ajaxOptions, thrownError) {
      console.log(
        thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText
      );
    },
  });
});

jQuery(document).on("click", "button#eliminar-base", function () {
  var id = jQuery("#base_id").val();
  jQuery.ajax({
    type: "POST",
    url: baseurl + "base/eliminar",
    data: { id: id },
    dataType: "html",
    success: function (html) {
      jQuery("span#success-msg").html("");
      jQuery("#dataTable").DataTable().ajax.reload();
      jQuery("span#success-msg").html(
        '<div class="alert alert-success">Registro eliminado correctamente.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>'
      );
      jQuery("#eliminar").modal("hide");
    },
    error: function (xhr, ajaxOptions, thrownError) {
      console.log(
        thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText
      );
    },
  });
});

jQuery(document).on("click", "button#actualizar-base", function () {
  jQuery.ajax({
    type: "POST",
    url: baseurl + "base/actualizar",
    data: jQuery("form#actualizar-base-form").serialize(),
    dataType: "json",
    beforeSend: function () {
      jQuery("button#actualizar-base").button("loading");
    },
    complete: function () {
      jQuery("button#actualizar-base").button("reset");
      setTimeout(function () {
        jQuery("span#success-msg").html("");
      }, 5000);
    },
    success: function (json) {
      $(".text-danger").remove();
      if (json["error"]) {
        for (i in json["error"]) {
          var element = $(".input-base-" + i.replace("_", "-"));
          if ($(element).parent().hasClass("input-group")) {
            $(element)
              .parent()
              .after(
                '<div class="text-danger" style="font-size: 14px;">' +
                  json["error"][i] +
                  "</div>"
              );
          } else {
            $(element).after(
              '<div class="text-danger" style="font-size: 14px;">' +
                json["error"][i] +
                "</div>"
            );
          }
        }
      } else {
        jQuery("span#success-msg").html(
          '<div class="alert alert-success">Registro Actualizado Correctamente.</div>'
        );
        jQuery("#dataTable").DataTable().ajax.reload();
        jQuery("form#actualizar-base-form")
          .find("textarea, input")
          .each(function () {
            jQuery(this).val("");
          });
        jQuery("#actualizar").modal("hide");
      }
    },
    error: function (xhr, ajaxOptions, thrownError) {
      console.log(
        thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText
      );
    },
  });
});

var options = {
  autoclose: true,
  format: "dd/mm/yyyy",
  language: "es",
  orientation: "auto",
  todayHighlight: true,
};
$(function () {
  $("#divfecharegcartera").datepicker(options);
  $("#divfofadjudicacion").datepicker(options);
  $("#divfechasolicitud").datepicker(options);
  $("#divfechaexp").datepicker(options);
  $("#divfechaos").datepicker(options);
  $("#divfinstalacion").datepicker(options);
  $("#divfcapacitacion").datepicker(options);
  $("#divfservm1").datepicker(options);
  $("#divfservm2").datepicker(options);
  $("input").inputmask();
});
