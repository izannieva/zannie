document.addEventListener("DOMContentLoaded", () => {
    // Función para mostrar mensajes de error
    function mostrarError(elemento, mensaje) {
        const errorDiv = elemento.nextElementSibling;
        elemento.classList.add("error");
        errorDiv.textContent = mensaje;
    }

    // Función para limpiar errores
    function limpiarError(elemento) {
        elemento.classList.remove("error");
        const errorDiv = elemento.nextElementSibling;
        errorDiv.textContent = "";
    }

    // Validación de campos de texto
    function validarTexto(texto, minimo, maximo, regex) {
        return texto.length >= minimo && texto.length <= maximo && regex.test(texto);
    }

    // Validación de formulario de registro
    document.getElementById("formRegistro").addEventListener("submit", function(event) {
        const usuario = document.getElementById("registroUsuario");
        const password = document.getElementById("registroPassword");
        const repetirPassword = document.getElementById("registroRepetirPassword");
        const email = document.getElementById("email");
        const fechaNacimiento = document.getElementById("fechaNacimiento");

        limpiarError(usuario);
        limpiarError(password);
        limpiarError(repetirPassword);
        limpiarError(email);
        limpiarError(fechaNacimiento);

        let isValid = true; // Para controlar si el formulario es válido

        // Nombre de usuario
        const usuarioRegex = /^[a-zA-Z][a-zA-Z0-9]{2,14}$/;
        if (!validarTexto(usuario.value, 3, 15, usuarioRegex)) {
            mostrarError(usuario, "El nombre de usuario debe tener entre 3 y 15 caracteres y empezar con una letra.");
            isValid = false; // Marca como no válido
        }

        // Contraseña
        const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d_-]{6,15}$/;
        if (!validarTexto(password.value, 6, 15, passwordRegex)) {
            mostrarError(password, "La contraseña debe tener entre 6 y 15 caracteres, incluir mayúsculas, minúsculas y un número.");
            isValid = false;
        }

        // Repetir Contraseña
        if (password.value !== repetirPassword.value) {
            mostrarError(repetirPassword, "Las contraseñas no coinciden.");
            isValid = false;
        }

        // Email
        const emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        if (!emailRegex.test(email.value)) {
            mostrarError(email, "Ingrese un correo electrónico válido.");
            isValid = false;
        }

        // Fecha de nacimiento
        const fechaUsuario = new Date(fechaNacimiento.value);
        const fechaMinima = new Date();
        fechaMinima.setFullYear(fechaMinima.getFullYear() - 18);

        if (isNaN(fechaUsuario) || fechaUsuario > fechaMinima) {
            mostrarError(fechaNacimiento, "Debe tener al menos 18 años.");
            isValid = false;
        }

        // Prevenir el envío si hay errores
        if (!isValid) {
            event.preventDefault(); // Evita el envío si no es válido
        }
    });
});
