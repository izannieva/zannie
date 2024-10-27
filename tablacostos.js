
document.addEventListener("DOMContentLoaded", function () {
    const tarifas = {
        paginas: [1, 5, 10, 15],
        fotos: [3, 5, 7],
        color: [1.0, 1.2], 
        resolucion: [1.0, 1.5] 
    };

    function calcularCoste(paginas, fotos, colorFactor, resolucionFactor) {
        const basePrice = 2; 
        return (basePrice * paginas * fotos * colorFactor * resolucionFactor).toFixed(2);
    }

    function generarTablaCostos() {
        const tabla = document.createElement("table");
        tabla.innerHTML = `
            <tr>
                <th>Páginas</th>
                <th>Fotos</th>
                <th>Color</th>
                <th>Resolución</th>
                <th>Coste (€)</th>
            </tr>
        `;

        tarifas.paginas.forEach(paginas => {
            tarifas.fotos.forEach(fotos => {
                tarifas.color.forEach(color => {
                    tarifas.resolucion.forEach(resolucion => {
                        const fila = tabla.insertRow();
                        fila.insertCell().textContent = `${paginas}`;
                        fila.insertCell().textContent = `${fotos}`;
                        fila.insertCell().textContent = color === 1 ? "B/N" : "Color";
                        fila.insertCell().textContent = resolucion === 1 ? "Baja" : "Alta";
                        fila.insertCell().textContent = `${calcularCoste(paginas, fotos, color, resolucion)} €`;
                    });
                });
            });
        });

        return tabla;
    }

    const btnMostrar = document.getElementById("btnMostrarTabla");
    const contenedorTabla = document.getElementById("tablaCostos");

    btnMostrar.addEventListener("click", function () {
        
        if (contenedorTabla.childElementCount === 0) {
            const tabla = generarTablaCostos();
            contenedorTabla.appendChild(tabla);
        }

       
        contenedorTabla.classList.toggle("oculto");
    });
});

