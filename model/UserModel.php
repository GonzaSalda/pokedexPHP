<?php

class UserModel {

    private $database;

    public function __construct($database) {
        $this->database = $database;
    }

    public function crearUsuario($data) {
        // Preparar la consulta SQL para insertar un nuevo usuario en la tabla correspondiente
        $sql = "INSERT INTO usuario (nombre, fecha_nacimiento, sexo, pais, ciudad, email, password, username, img_profile) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?,?)";

        // Preparar los valores a insertar en la consulta
        $values = array(
            $data['nombre'],
            $data['fecha_nacimiento'],
            $data['sexo'],
            $data['pais'],
            $data['ciudad'],
            $data['email'],
            $data['password'],
            $data['username'],
            $data['img_profile'],
        );

        $imgProfile = $_FILES['img_profile']['tmp_name'];
        $destination = './public/img/' . $_FILES['img_profile']['name'];
        move_uploaded_file($imgProfile, $destination);

        // Actualizar el valor de $data['img_profile'] con la ruta completa del archivo en el servidor
        $data['img_profile'] = $destination;

        // Ejecutar la consulta preparada con los valores
        $stmt = $this->database->prepare($sql);
        $stmt->bind_param('sssssssss', ...$values);
        $stmt->execute();

        // Verificar si la inserción fue exitosa
        if ($stmt->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function login($username, $password) {
        $query = "SELECT * FROM usuario WHERE username = '$username' AND password = '$password'";
        $result = $this->database->query($query);
        return ($result->num_rows > 0);
    }
}