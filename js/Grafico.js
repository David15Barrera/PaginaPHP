// Obtener el elemento canvas del DOM
var canvas = document.getElementById("myChart");

// Crear la instancia del objeto Chart
var ctx = canvas.getContext("2d");
var myChart = new Chart(ctx, {
  type: "pie",
  data: {
    labels: [
      "Petén",
      "Alta Verapaz",
      "Quiché",
      "Jutiapa",
      "Huehuetenango",
      "San Marcos",
      "Retalhuleu",
      "Santa Rosa",
      "Chimaltenango",
      "Escuintla",
      "Quetzaltenango",
      "Otros Departamentos",
    ],
    datasets: [
      {
        label: "Distribución de la Producción Nacional",
        data: [18, 10, 8, 7, 6, 5, 5, 5, 4, 4, 4, 24],
        backgroundColor: [
          "#FF6384",
          "#36A2EB",
          "#FFCE56",
          "#00FF7F",
          "#FFA07A",
          "#6B8E23",
          "#0000FF",
          "#8B008B",
          "#DC143C",
          "#FFD700",
          "#BDB76B",
          "#808080",
        ],
      },
    ],
  },
  options: {
    title: {
      display: true,
      text: "Distribución de la Producción Nacional",
      fontSize: 18,
      fontColor: "#333",
    },
    legend: {
      position: "bottom",
      labels: {
        fontSize: 14,
        fontColor: "#333",
      },
    },
  },
});
