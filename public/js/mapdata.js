var simplemaps_countrymap_mapdata = {
  main_settings: {
    //General settings
    width: "responsive",
    background_transparent: "yes",
    border_color: "#ffffff",

    //State defaults
    state_color: "#D1F2EB",
    state_hover_color: "#76D7C4",
    state_url: "",
    border_size: 1.5,
    all_states_inactive: "no",
    all_states_zoomable: "yes",

    //Advanced settings
    div: "map",
    auto_load: "yes",
    images_directory: "default",
    fade_time: 0.3, //0.1,
  },
  state_specific: {},
};

if (dataOSEdos.length > 1) {
  var x = simplemaps_countrymap_mapdata.state_specific;
  $.each(dataOSEdos, function (data, value) {
    switch (value.ENTIDAD_FEDERATIVA) {
      case "AGUASCALIENTES":
        x["MEX2717"] = {
          name: value.ENTIDAD_FEDERATIVA,
          description: "Órdenes: " + value.COUNT,
        };
        break;
      case "BAJA CALIFORNIA":
        x["MEX2706"] = {
          name: value.ENTIDAD_FEDERATIVA,
          description: "Órdenes: " + value.COUNT,
        };
        break;
      case "BAJA CALIFORNIA SUR":
        x["MEX2707"] = {
          name: value.ENTIDAD_FEDERATIVA,
          description: "Órdenes: " + value.COUNT,
        };
        break;
      case "CAMPECHE":
        x["MEX2722"] = {
          name: value.ENTIDAD_FEDERATIVA,
          description: "Órdenes: " + value.COUNT,
        };
        break;
      case "CHIAPAS":
        x["MEX2735"] = {
          name: value.ENTIDAD_FEDERATIVA,
          description: "Órdenes: " + value.COUNT,
        };
        break;
      case "CHIHUAHUA":
        x["MEX2709"] = {
          name: value.ENTIDAD_FEDERATIVA,
          description: "Órdenes: " + value.COUNT,
        };
        break;
      case "CIUDAD DE MEXICO":
        x["MEX2727"] = {
          name: value.ENTIDAD_FEDERATIVA,
          description: "Órdenes: " + value.COUNT,
        };
        break;

      case "COAHUILA DE ZARAGOZA":
        x["MEX2708"] = {
          name: value.ENTIDAD_FEDERATIVA,
          description: "Órdenes: " + value.COUNT,
        };
        break;
      case "COLIMA":
        x["MEX2718"] = {
          name: value.ENTIDAD_FEDERATIVA,
          description: "Órdenes: " + value.COUNT,
        };
        break;
      case "DURANGO":
        x["MEX2710"] = {
          name: value.ENTIDAD_FEDERATIVA,
          description: "Órdenes: " + value.COUNT,
        };
        break;
      case "GUANAJUATO":
        x["MEX2728"] = {
          name: value.ENTIDAD_FEDERATIVA,
          description: "Órdenes: " + value.COUNT,
        };
        break;
      case "GUERRERO":
        x["MEX2729"] = {
          name: value.ENTIDAD_FEDERATIVA,
          description: "Órdenes: " + value.COUNT,
        };
        break;
      case "HIDALGO":
        x["MEX2730"] = {
          name: value.ENTIDAD_FEDERATIVA,
          description: "Órdenes: " + value.COUNT,
        };
        break;
      case "JALISCO":
        x["MEX2719"] = {
          name: value.ENTIDAD_FEDERATIVA,
          description: "Órdenes: " + value.COUNT,
        };
        break;

      case "MEXICO":
        x["MEX2731"] = {
          name: value.ENTIDAD_FEDERATIVA,
          description: "Órdenes: " + value.COUNT,
        };
        break;
      case "MICHOACAN DE OCAMPO":
        x["MEX2720"] = {
          name: value.ENTIDAD_FEDERATIVA,
          description: "Órdenes: " + value.COUNT,
        };
        break;
      case "MORELOS":
        x["MEX2732"] = {
          name: value.ENTIDAD_FEDERATIVA,
          description: "Órdenes: " + value.COUNT,
        };
        break;
      case "NAYARIT":
        x["MEX2721"] = {
          name: value.ENTIDAD_FEDERATIVA,
          description: "Órdenes: " + value.COUNT,
        };
        break;
      case "NUEVO LEON":
        x["MEX2714"] = {
          name: value.ENTIDAD_FEDERATIVA,
          description: "Órdenes: " + value.COUNT,
        };
        break;
      case "OAXACA":
        x["MEX2723"] = {
          name: value.ENTIDAD_FEDERATIVA,
          description: "Órdenes: " + value.COUNT,
        };
        break;
      case "PUEBLA":
        x["MEX2724"] = {
          name: value.ENTIDAD_FEDERATIVA,
          description: "Órdenes: " + value.COUNT,
        };
        break;
      case "QUERETARO":
        x["MEX2733"] = {
          name: value.ENTIDAD_FEDERATIVA,
          description: "Órdenes: " + value.COUNT,
        };
        break;
      case "QUINTANA ROO":
        x["MEX2736"] = {
          name: value.ENTIDAD_FEDERATIVA,
          description: "Órdenes: " + value.COUNT,
        };
        break;
      case "SAN LUIS POTOSI":
        x["MEX2715"] = {
          name: value.ENTIDAD_FEDERATIVA,
          description: "Órdenes: " + value.COUNT,
        };
        break;
      case "SINALOA":
        x["MEX2711"] = {
          name: value.ENTIDAD_FEDERATIVA,
          description: "Órdenes: " + value.COUNT,
        };
        break;
      case "SONORA":
        x["MEX2712"] = {
          name: value.ENTIDAD_FEDERATIVA,
          description: "Órdenes: " + value.COUNT,
        };
        break;
      case "TABASCO":
        x["MEX2725"] = {
          name: value.ENTIDAD_FEDERATIVA,
          description: "Órdenes: " + value.COUNT,
        };
        break;
      case "TAMAULIPAS":
        x["MEX2716"] = {
          name: value.ENTIDAD_FEDERATIVA,
          description: "Órdenes: " + value.COUNT,
        };
        break;
      case "TLAXCALA":
        x["MEX2726"] = {
          name: value.ENTIDAD_FEDERATIVA,
          description: "Órdenes: " + value.COUNT,
        };
        break;
      case "VERACRUZ DE IGNACIO DE LA LLAVE":
        x["MEX2734"] = {
          name: value.ENTIDAD_FEDERATIVA,
          description: "Órdenes: " + value.COUNT,
        };
        break;
      case "YUCATAN":
        x["MEX2737"] = {
          name: value.ENTIDAD_FEDERATIVA,
          description: "Órdenes: " + value.COUNT,
        };
        break;
      case "ZACATECAS":
        x["MEX2713"] = {
          name: value.ENTIDAD_FEDERATIVA,
          description: "Órdenes: " + value.COUNT,
        };
        break;
      default:
        console.log(value.ENTIDAD_FEDERATIVA, "  Entidad No Válida");
    }
  });
} else {
  var x = [["Clave", "Entidad"]];
}
