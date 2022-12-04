const nav = document.getElementById("navSection");

console.log(nav);

const url = window.location.pathname;

let title = "";

if (url.includes("producto")) {
  title = "Producto";
} else if (url.includes("usuario")) {
  title = "Usuario";
} else if (url.includes("proveedor")) {
  title = "Proveedor";
} else if (url.includes("factura")) {
  title = "Factura";
} else if (url.includes("reportes")) {
  title = "Reportes";
} else {
  title = "Pagina no encontrada";
}

console.log(url.includes("factura"));

nav.innerHTML = title;
