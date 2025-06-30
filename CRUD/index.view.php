<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Tabla de Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light p-4">

    <div class="container">
        <h2 class="mb-4">Usuarios</h2>

        <!-- Botón Agregar -->
        <button class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#modalFormulario">
            Agregar Usuario
        </button>

        <!-- Tabla -->
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Edad</th>
                    <th>Mensaje</th>
                    <th>Sexo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody id="tablaUsuarios">
                <?php
                try {
                    $conection = new PDO('mysql:host=localhost;dbname=crud', 'root', 'admin');
                    $conection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    $stmt = $conection->query("SELECT * FROM users");
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row['nombre']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['apellido']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['correo']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['edad']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['mensaje']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['sexo']) . "</td>";
                        echo "<td>
                            <!-- Botón Editar -->
                            <button class='btn btn-sm btn-warning' 
                                    data-bs-toggle='modal' 
                                    data-bs-target='#modalFormulario'
                                    data-id='" . $row['id'] . "'
                                    data-nombre='" . htmlspecialchars($row['nombre']) . "'
                                    data-apellido='" . htmlspecialchars($row['apellido']) . "'
                                    data-correo='" . htmlspecialchars($row['correo']) . "'
                                    data-edad='" . $row['edad'] . "'
                                    data-mensaje='" . htmlspecialchars($row['mensaje']) . "'
                                    data-sexo='" . $row['sexo'] . "'>
                                Editar
                            </button>

                            <!-- Botón Eliminar -->
                            <a href='index.php?eliminar=" . $row['id'] . "' 
                               class='btn btn-sm btn-danger'
                               onclick='return confirm(\"¿Seguro que deseas eliminar este usuario?\")'>
                                Eliminar
                            </a>
                        </td>";
                        echo "</tr>";
                    }
                } catch (PDOException $e) {
                    echo "Error al mostrar: " . $e->getMessage();
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Modal con Formulario -->
    <div class="modal fade" id="modalFormulario" tabindex="-1" aria-labelledby="modalFormularioLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="formUsuario" action="index.php" method="POST">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalFormularioLabel">Agregar Usuario</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                        <input type="hidden" name="id" id="id" value="">
                        <input type="hidden" name="actualizar" id="actualizar" value="">
                    </div>

                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre">
                        </div>
                        <div class="mb-3">
                            <label for="apellido" class="form-label">Apellido</label>
                            <input type="text" class="form-control" id="apellido" name="apellido">
                        </div>
                        <div class="mb-3">
                            <label for="correo" class="form-label">Correo electrónico</label>
                            <input type="email" class="form-control" id="correo" name="correo">
                        </div>
                        <div class="mb-3">
                            <label for="edad" class="form-label">Edad</label>
                            <input type="number" class="form-control" id="edad" name="edad">
                        </div>
                        <div class="mb-3">
                            <label for="mensaje" class="form-label">Mensaje</label>
                            <textarea class="form-control" id="mensaje" name="mensaje" rows="3"></textarea>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const modal = document.getElementById('modalFormulario');
            const form = document.getElementById('formUsuario');
            const modalTitle = modal.querySelector('.modal-title');

            modal.addEventListener('show.bs.modal', function(event) {
                const button = event.relatedTarget;

                // Si el botón tiene el atributo data-id, es edición
                const isEdit = button.hasAttribute('data-id');

                if (isEdit) {
                    modalTitle.textContent = 'Editar Usuario';
                    form.id.value = button.getAttribute('data-id');
                    form.nombre.value = button.getAttribute('data-nombre');
                    form.apellido.value = button.getAttribute('data-apellido');
                    form.correo.value = button.getAttribute('data-correo');
                    form.edad.value = button.getAttribute('data-edad');
                    form.mensaje.value = button.getAttribute('data-mensaje');

                    const sexo = button.getAttribute('data-sexo');
                    if (sexo === 'Masculino') {
                        document.getElementById('masculino').checked = true;
                    } else if (sexo === 'Femenino') {
                        document.getElementById('femenino').checked = true;
                    }

                    form.actualizar.value = "1";
                } else {
                    modalTitle.textContent = 'Agregar Usuario';
                    form.reset();
                    form.id.value = "";
                    form.actualizar.value = "";
                }
            });
        });
    </script>

</body>

</html>