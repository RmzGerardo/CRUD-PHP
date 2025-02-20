<!DOCTYPE html>
<html lang="en">

<head>
    <title>Persona</title>

    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
        crossorigin="anonymous" />
</head>

<body>
    <div class="container">
        <div class="row justify-content-center p-5">
            <div class="col-sm-6">
                <h5>Formulario</h5>
                <hr />
                <form action="javascript:void(0);" onsubmit="app.guardar()">
                    <input type="hidden" id="id" />
                    <label for="nombres">Nombres</label>
                    <input
                        type="text"
                        class="form-control"
                        id="nombres"
                        placeholder="Nombres Apellidos"
                        autofocus
                        required />
                    <label for="email">Email</label>
                    <input
                        type="email"
                        class="form-control"
                        id="email"
                        placeholder="email@email.com"
                        required />
                    <label for="email">Edad</label>
                    <input
                        type="number"
                        class="form-control"
                        id="edad"
                        placeholder="18"
                        min="18"
                        max="99"
                        required />


                    <label for="estatus">Estatus</label>
                    <input type="
                    type = " text"
                        class="form-control"
                        id="estatus"
                        placeholder="Estatus en la empresa"
                        autofocus
                        required />
                    <br>

                    <div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <button type="reset" class="btn btn-danger">Cancelar</button>
                    </div>
                </form>
                <br />
                <h5>Listado</h5>
                <hr />
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombres</th>
                            <th>Email</th>
                            <th>Edad</th>
                            <th>Estatus</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody id="tbody"></tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="../assets/code.js"></script>
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
        crossorigin="anonymous"></script>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy"
        crossorigin="anonymous"></script>
</body>

</html>