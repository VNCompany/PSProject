<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/defines.php";

class DbContext {
    private $pdo;

    public function __construct() {
        $this->pdo = new PDO("mysql:host=localhost;dbname=prosmart;charset=utf8", MYSQL_USER, MYSQL_PASSWORD);
    }

    public function feedback($name, $email, $message) {
        $query = $this->pdo->prepare("INSERT INTO appeals (name, email, message) VALUES (?, ?, ?);");
        $query->execute([$name, $email, $message]);
    }

    public function getStatus($phone) {
        $query = $this->pdo->prepare("SELECT * FROM history WHERE phone = ? ORDER BY date DESC LIMIT 1;");
        $query->execute([$phone]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}

$__dbContext = null;
function dbContext() {
    global $__dbContext;
    if (!isset($__dbContext))
        $__dbContext = new DbContext();
    return $__dbContext;
}