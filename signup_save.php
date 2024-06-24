<?php include('index_header.php'); ?>
<body>
<?php
// Verificar si los datos del formulario están establecidos
if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['gender'])) {
    // Obtener los datos del formulario
    $username = $_POST['username'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];

    // Conexión a la base de datos
    $conn = new mysqli('localhost', 'root', '', 'socialdb');

    // Verificar conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Llamar al procedimiento almacenado
    $stmt = $conn->prepare("CALL guardarm(?, ?, ?)");
    if ($stmt) {
        // Especificar los tipos de los parámetros: 's' para string
        $stmt->bind_param( $username, $password, $gender);

        if ($stmt->execute()) {
            echo "Bienvenido.";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error en la preparación del statement: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Por favor, complete todos los campos del formulario.";
}
?>
</body>
</html>
