const app = new (function () {
    this.tbody = document.getElementById("tbody");
    this.id = document.getElementById("id");
    this.nombres = document.getElementById("nombres");
    this.email = document.getElementById("email");
    this.edad = document.getElementById("edad");
    this.esatus = document.getElementById("estatus");

    this.listado = () => {
        fetch("../controllers/listado.php")
            .then((res) => res.json())
            .then((data) => {
                console.log(data);
                this.tbody.innerHTML = "";
                data.forEach((item) => {
                    this.tbody.innerHTML += `
              <tr>
                <td>${item.id}</td>
                <td>${item.nombres}</td>
                <td>${item.email}</td>
                <td>${item.edad}</td>
                <td>${item.estatus}</td>    
                <td>
                </td>
              </tr>
            `;
                });
            })
            .catch((error) => console.log(error));
    };
    this.guardar = () => {
        var form = new FormData();
        form.append("nombres", this.nombres.value);
        form.append("email", this.email.value);
        form.append("edad", this.edad.value);
        form.append("id", this.id.value);
        if (this.id.value === "") {
            fetch("../controllers/guardar.php", {
                method: "POST",
                body: form,
            })
                .then((res) => res.json())
                .then((data) => {
                    alert("Creado con exito");
                    this.listado();
                    this.limpiar();
                })
                .catch((error) => console.log(error));
        } else {
            fetch("../controllers/actualizar.php", {
                method: "POST",
                body: form,
            })
                .then((res) => res.json())
                .then((data) => {
                    alert("Actualizado con exito");
                    this.listado();
                    this.limpiar();
                })
                .catch((error) => console.log(error));
        }
    };
    this.editar = (id) => {
        var form = new FormData();
        form.append("id", id);
        fetch("../controllers/editar.php", {
            method: "POST",
            body: form,
        })
            .then((res) => res.json())
            .then((data) => {
                this.id.value = data.id;
                this.nombres.value = data.nombres;
                this.email.value = data.email;
                this.edad.value = data.edad;
            })
            .catch((error) => console.log(error));
    };
    this.eliminar = (id) => {
        var form = new FormData();
        form.append("id", id);
        fetch("../controllers/eliminar.php", {
            method: "POST",
            body: form,
        })
            .then((res) => res.json())
            .then((data) => {
                alert("Eliminado con exito");
                this.listado();
            })
            .catch((error) => console.log(error));
    };
    this.limpiar = () => {
        this.id.value = "";
        this.nombres.value = "";
        this.email.value = "";
        this.edad.value = "";
    };
})();
app.listado();
