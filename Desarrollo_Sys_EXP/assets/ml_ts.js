// Función para contar las visitas en la página (simulada)
function contarVisitas() {
  let visitas2 = localStorage.getItem("visitas");

  if (visitas2 === null) {
    visitas2 = 1; // Si no hay visitas guardadas, inicializamos en 1
  } else {
    visitas2 = parseInt(visitas2) + 1;
  }

  localStorage.setItem("visitas", visitas2);
  return visitas2;
}

// Datos históricos (visitas pasadas por días)
const visitasPasadas = [1, 2, 3, 4, 5]; // Días anteriores
const etiquetas = [1, 2, 3, 4, 5]; // Visitas en esos días

// Preparamos los datos para TensorFlow.js
function prepararDatos() {
  const xs = tf.tensor(visitasPasadas); // Datos de entrada (días)
  const ys = tf.tensor(etiquetas); // Datos de salida (visitas)

  return { xs, ys };
}

// Crear y entrenar el modelo de regresión
async function crearModelo() {
  // Crear un modelo secuencial
  const modelo = tf.sequential();

  // Añadir una capa densa de regresión (una sola capa con una neurona)
  modelo.add(tf.layers.dense({ units: 1, inputShape: [1] }));

  // Compilar el modelo con una función de pérdida y un optimizador
  modelo.compile({
    loss: "meanSquaredError", // Error cuadrático medio
    optimizer: "sgd", // Descenso de gradiente estocástico
  });

  // Preparar los datos
  const { xs, ys } = prepararDatos();

  // Entrenar el modelo
  await modelo.fit(xs, ys, {
    epochs: 100, // Número de épocas
    verbose: 0, // No mostrar el progreso
  });

  console.log("Modelo entrenado");
  return modelo;
}

// Función para hacer predicciones con el modelo entrenado
async function predecirVisitas(modelo, visitasFuturas) {
  // Convertimos las visitas futuras en un tensor
  const tensorDeEntrada = tf.tensor(visitasFuturas);

  // Usamos el modelo para predecir las visitas futuras
  const prediccion = modelo.predict(tensorDeEntrada);

  // Convertimos la predicción a un valor numérico
  const prediccionValor = (await prediccion.array())[0][0];

  return Math.round(prediccionValor); // Redondeamos la predicción para mostrarla
}

// Función que ejecuta todo el proceso
async function actualizarPagina() {
  // Contamos las visitas actuales
  const visitas = contarVisitas();
  document.getElementById("contador_ts").textContent = visitas;

  // Creamos y entrenamos el modelo
  const modelo = await crearModelo();

  // Hacemos la predicción de las visitas futuras (día siguiente)
  const prediccion = await predecirVisitas(modelo, [visitas + 1]);
  document.getElementById("prediccion_ts").textContent = prediccion;
}

// Ejecutar la función al cargar la página
window.onload = actualizarPagina;
