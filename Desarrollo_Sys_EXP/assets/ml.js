// Función que cuenta las visitas usando localStorage
function contarVisitas() {
  // Revisamos si ya existe el contador en el localStorage
  let visitas = localStorage.getItem("visitas");

  if (visitas === null) {
    // Si no existe, inicializamos en 1
    visitas = 1;
  } else {
    // Si ya existe, incrementamos el contador
    visitas = parseInt(visitas) + 1;
  }

  // Guardamos el nuevo contador en localStorage
  localStorage.setItem("visitas", visitas);

  return visitas;
}

// Función que predice el número de visitas futuras usando un modelo de regresión simple
function predecirVisitas(visitas) {
  // Usamos una regresión lineal simple (esto es solo un ejemplo básico)
  // Suponemos que el patrón es el siguiente:
  // y = a*x + b, donde "a" es la pendiente y "b" es la intersección con el eje Y.

  // Datos históricos (aquí solo simulamos que el número de visitas es creciente)
  const datos = [1, 2, 3, 4, 5]; // Días anteriores
  const etiquetas = [1, 2, 3, 4, 5]; // Visitas de esos días

  // A partir de los datos, calculamos la pendiente "a" (para simplificar, tomamos el promedio)
  const a =
    (etiquetas[etiquetas.length - 1] - etiquetas[0]) /
    (datos[etiquetas.length - 1] - datos[0]);
  const b = etiquetas[0] - a * datos[0]; // Calculamos la intersección "b"

  // Predicción de visitas futuras (esto es solo una aproximación)
  const prediccion = a * (datos.length + 1) + b;

  return Math.round(prediccion);
}

// Actualizamos la página con el número de visitas y la predicción
function actualizarPagina() {
  // Contamos las visitas
  const visitas = contarVisitas();
  document.getElementById("contador").textContent = visitas;

  // Predicción de visitas futuras (esto es solo una estimación)
  const prediccion = predecirVisitas(visitas);
  document.getElementById("prediccion").textContent = prediccion;
}

// Ejecutamos la función cuando la página cargue
window.onload = actualizarPagina;
