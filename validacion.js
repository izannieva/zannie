document.addEventListener("DOMContentLoaded", function () {
    const formularioRegistro = document.getElementById("formulario_registro");
    const formularioLogin = document.getElementById("formulario_login");
    const formularioAlbum = document.getElementById("albumForm");

    if (formularioRegistro) {
        formularioRegistro.addEventListener("submit", validarRegistro);
    }

    if (formularioLogin) {
        formularioLogin.addEventListener("submit", validarLogin);
    }

    if (formularioAlbum) {
        formularioAlbum.addEventListener("submit", validarAlbum);
    }
});


function validarRegistro(event) {
    event.preventDefault();
    let errores = [];
    let mensajeError = "";

   
    const usuario = document.getElementById("registro_usuario").value.trim();
    const contraseña = document.getElementById("registro_contraseña").value.trim();
    const repetirContraseña = document.getElementById("registro_repetir_contraseña").value.trim();
    const email = document.getElementById("registro_email").value.trim();
    const sexo = document.getElementById("registro_genero").value;
    const fechaNacimiento = document.getElementById("registro_fecha_nacimiento").value.trim();
    const ciudad = document.getElementById("registro_ciudad").value.trim();
    const pais = document.getElementById("registro_pais").value.trim();

    limpiarErrores();

   
    if (usuario.length < 3 || usuario.length > 15 || !/^[a-zA-Z][a-zA-Z0-9]*$/.test(usuario)) {
        errores.push("El nombre de usuario debe tener entre 3 y 15 caracteres y empezar con una letra.");
        marcarError("registro_usuario", "El nombre de usuario es inválido.");
    }


    if (contraseña.length < 6 || contraseña.length > 15 || !/[A-Z]/.test(contraseña) || !/[a-z]/.test(contraseña) || !/[0-9]/.test(contraseña)) {
        errores.push("La contraseña debe tener entre 6 y 15 caracteres, incluir una mayúscula, una minúscula y un número.");
        marcarError("registro_contraseña", "La contraseña es inválida.");
    }

    if (contraseña !== repetirContraseña) {
        errores.push("Las contraseñas no coinciden.");
        marcarError("registro_repetir_contraseña", "Las contraseñas deben coincidir.");
    }

    if (!email.includes("@") || email.length < 5) {
        errores.push("El correo electrónico no es válido.");
        marcarError("registro_email", "Correo inválido.");
    }

    
    if (sexo === "") {
        errores.push("Debe seleccionar un género.");
        marcarError("registro_genero", "Seleccione una opción.");
    }

   
    const hoy = new Date();
    const fechaNac = new Date(fechaNacimiento);
    const edad = hoy.getFullYear() - fechaNac.getFullYear();
    if (isNaN(fechaNac) || edad < 18) {
        errores.push("Debes tener al menos 18 años.");
        marcarError("registro_fecha_nacimiento", "Fecha no válida o menor de 18 años.");
    }

   
    if (errores.length > 0) {
        mensajeError = errores.join("\n");
        alert(mensajeError);
    } else {
    
        alert("Registro exitoso");
        document.getElementById("formulario_registro").submit();
    }
}


function validarLogin(event) {
    event.preventDefault();
    let errores = [];
    let mensajeError = "";

   
    const usuario = document.getElementById("login_usuario").value.trim();
    const contraseña = document.getElementById("login_contraseña").value.trim();

    limpiarErrores();

    if (!usuario) {
        errores.push("El nombre de usuario no puede estar vacío.");
        marcarError("login_usuario", "Usuario requerido.");
    }

    if (!contraseña) {
        errores.push("La contraseña no puede estar vacía.");
        marcarError("login_contraseña", "Contraseña requerida.");
    }

    if (errores.length > 0) {
        mensajeError = errores.join("\n");
        alert(mensajeError);
    } else {
        alert("Login exitoso");
        document.getElementById("formulario_login").submit();
    }
}


function validarAlbum(event) {
    event.preventDefault();
    let errores = [];
    let mensajeError = "";

   
    const nombre = document.getElementById("nombre").value.trim();
    const titulo = document.getElementById("titulo").value.trim();
    const email = document.getElementById("email").value.trim();
    const calle = document.getElementById("calle").value.trim();
    const numero = document.getElementById("numero").value.trim();
    const codigoPostal = document.getElementById("codigo_postal").value.trim();
    const localidad = document.getElementById("localidad").value.trim();
    const provincia = document.getElementById("provincia").value.trim();
    const pais = document.getElementById("pais").value.trim();
    const copias = document.getElementById("copias").value.trim();
    const resolucion = document.getElementById("resolucion").value.trim();

    limpiarErrores();

   
    if (nombre.length < 3) {
        errores.push("El nombre completo debe tener al menos 3 caracteres.");
        marcarError("nombre", "Nombre inválido.");
    }

    if (titulo.length < 3) {
        errores.push("El título del álbum debe tener al menos 3 caracteres.");
        marcarError("titulo", "Título inválido.");
    }

    if (!email.includes("@") || email.length < 5) {
        errores.push("El correo electrónico no es válido.");
        marcarError("email", "Correo inválido.");
    }

    if (calle.length < 3) {
        errores.push("La calle debe tener al menos 3 caracteres.");
        marcarError("calle", "Calle inválida.");
    }

    if (!numero) {
        errores.push("El número no puede estar vacío.");
        marcarError("numero", "Número requerido.");
    }

    if (codigoPostal.length < 3) {
        errores.push("El código postal debe tener al menos 3 caracteres.");
        marcarError("codigo_postal", "Código postal inválido.");
    }

    if (localidad.length < 3) {
        errores.push("La localidad debe tener al menos 3 caracteres.");
        marcarError("localidad", "Localidad inválida.");
    }

    if (provincia.length < 3) {
        errores.push("La provincia debe tener al menos 3 caracteres.");
        marcarError("provincia", "Provincia inválida.");
    }

    if (pais.length < 3) {
        errores.push("El país debe tener al menos 3 caracteres.");
        marcarError("pais", "País inválido.");
    }

    if (isNaN(copias) || copias <= 0) {
        errores.push("El número de copias debe ser un número positivo.");
        marcarError("copias", "Número de copias inválido.");
    }

    if (isNaN(resolucion) || resolucion <= 0) {
        errores.push("La resolución debe ser un número positivo.");
        marcarError("resolucion", "Resolución inválida.");
    }

   
    if (errores.length > 0) {
        mensajeError = errores.join("\n");
        alert(mensajeError);
    } else {
        alert("Solicitud de álbum exitosa");
        document.getElementById("albumForm").submit();
    }
}


function marcarError(idCampo, mensaje) {
    const campo = document.getElementById(idCampo);
    const errorSpan = campo.nextElementSibling;
    campo.style.border = "2px solid red";
    if (errorSpan) {
        errorSpan.textContent = mensaje;
        errorSpan.style.color = "red";
    }
}


function limpiarErrores() {
    const errorCampos = document.querySelectorAll(".error-message");
    errorCampos.forEach((span) => (span.textContent = ""));
    const campos = document.querySelectorAll("input, select");
    campos.forEach((campo) => (campo.style.border = ""));
}
