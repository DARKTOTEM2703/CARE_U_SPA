<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Incluir la conexión a la base de datos
    require_once "db_connection.php";

    // Obtener los datos del formulario
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $service = $_POST['service'];
    $time = $_POST['time'];

    // Validar que los campos no estén vacíos
    if (!empty($email) && !empty($phone) && !empty($service) && !empty($time)) {
        try {
            // Insertar los datos en la tabla "requests"
            $stmt = $pdo->prepare("INSERT INTO requests (email, phone, service, time) VALUES (:email, :phone, :service, :time)");
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':service', $service);
            $stmt->bindParam(':time', $time);
            $stmt->execute();

            // Redirigir con un mensaje de éxito
            header("Location: contact.php?success=1");
            exit();
        } catch (PDOException $e) {
            die("Error al guardar la solicitud: " . $e->getMessage());
        }
    } else {
        // Redirigir con un mensaje de error
        header("Location: contact.php?error=1");
        exit();
    }
}
?>