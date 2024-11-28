<?php

class gestorVuelos {
    private $conn;
    private $stmt;

    public function __construct() {
        include "conexion.php";
        $this->conn = $conexion;
    }

    public function fetch_aeropuertos() {
        try {
            $this->stmt = $this->conn->prepare("SELECT * FROM aeropuerto");
            $this->stmt->execute();
            return $this->stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        } catch (mysqli_sql_exception $e) {
            throw new Exception("Error al acceder a la base de datos: " . $e->getMessage());
        }
    }

    public function fetch_provincias() {
        try {
            $this->stmt = $this->conn->prepare("SELECT * FROM provincia");
            $this->stmt->execute();
            return $this->stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        } catch (mysqli_sql_exception $e) {
            throw new Exception("Error al acceder a la base de datos: " . $e->getMessage());
        }
    }

    public function fetch_vuelos() {
        try {
            $this->stmt = $this->conn->prepare("SELECT 
            v.idVuelo
            aeroOrigen.nombre as nombreAeropuertoOrigen
            aeroDestino.nombre as nombreAeropuertoDestino
            v.fecha
            v.precio
            a.nombre as nombreAerolinea
            FROM vuelos v
            JOIN aeropuerto aeroOrigen ON aeroOrigen.idAeropuerto = v.idAeropuertoOrigen
            JOIN aeropuerto aeroDestino ON aeroDestino.idAeropuerto = v.idAeropuertoDestino
            JOIN aerolinea a ON a.idAerolinea = v.idAerolinea");

            $this->stmt->execute();
            return $this->stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        } catch (mysqli_sql_exception $e) {
            throw new Exception("Error al acceder a la base de datos: " . $e->getMessage());
        }
    }

    public function insertar_vuelo($idAeroOrigen, $idAeroDestino, $fecha, $precio, $idAerolinea) {
        try {
            $this->stmt = $this->conn->prepare("INSERT INTO
            vuelo(idAeropuertoOrigen, idAeropuertoDestino, fecha, precio, idAerolinea)
            VALUES (?,?,?,?,?)");
            $this->stmt->bind_param("iisdi", $idAeroOrigen, $idAeroDestino, $fecha, $precio, $idAerolinea);
            $this->stmt->execute();
            return $this->stmt->affected_rows;
        } catch (mysqli_sql_exception $e) {
            throw new Exception("Error al añadir el vuelo: " . $e->getMessage());
        }
    }
}