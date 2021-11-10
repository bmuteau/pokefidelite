<?php

namespace Application;

class HelperFunctions
{
    public function __construct()
    {
    }

    public static function isAccountExist(string $email): bool
    {
        global $db;
        $connect = $db->connect();
        if ($connect != null) {
            $stm = $connect->prepare("SELECT * FROM users WHERE email = ? ");
            $stm->execute(array($email));
            if ($stm->fetch()) {
                $db->disconnect();
                return true;
            }
            $db->disconnect();
        }
        return false;
    }
    public static function createAccount(string $email, string $fname, string $lname, string $password, string $postal)
    {
        if (self::isAccountExist($email)) {
            return 1; // email existe deja
        }
        global $db;
        $connect = $db->connect();
        if ($connect != null) {
            $stm = $connect->prepare("INSERT INTO users(crdate, email, password, fname, lname, postalcode) VALUES (?,?,?,?,?,?)");
            $stm->execute(array(
                time(),
                $email,
                password_hash($password, PASSWORD_DEFAULT),
                $fname,
                $lname,
                $postal,
            ));
            $db->disconnect();
            if (self::isAccountExist($email)) {
                return 0; // aucun probleme
            }
            return 3; // erreur a la creation
        }
        return 2; // pas de connexion a la bdd
    }
    public static function isConnected(): bool
    {
        if (isset($_SESSION['admin']) && isset($_SESSION['id']) && isset($_SESSION['email']) && isset($_SESSION['fname']) && isset($_SESSION['lname']) && isset($_SESSION['postalcode']) && isset($_SESSION['password'])) {
            return true;
        }
        return false;
    }
    public static function disconnected()
    {
        if (isset($_SESSION['id'])) {
            unset($_SESSION['id']);
        }
        if (isset($_SESSION['email'])) {
            unset($_SESSION['email']);
        }
        if (isset($_SESSION['fname'])) {
            unset($_SESSION['fname']);
        }
        if (isset($_SESSION['lname'])) {
            unset($_SESSION['lname']);
        }
        if (isset($_SESSION['postalcode'])) {
            unset($_SESSION['postalcode']);
        }
        if (isset($_SESSION['password'])) {
            unset($_SESSION['password']);
        }
        if (isset($_SESSION['admin'])) {
            unset($_SESSION['admin']);
        }
    }
    public static function connexion(string $email, string $password)
    {
        global $db;
        $connect = $db->connect();
        if ($connect != null) {
            $stm = $connect->prepare("SELECT * FROM users WHERE email=? ");
            $stm->execute(array($email));
            $stmresult = $stm->fetch();
            if ($stmresult) {
                if (password_verify($password, $stmresult['password'])) {
                    $_SESSION['email'] = $stmresult['email'];
                    $_SESSION['id'] = $stmresult['id'];
                    $_SESSION['fname'] = $stmresult['fname'];
                    $_SESSION['lname'] = $stmresult['lname'];
                    $_SESSION['postalcode'] = $stmresult['postalcode'];
                    $_SESSION['password'] = $password;
                    $_SESSION['admin'] = $stmresult['admin'];
                    return 0; // tout est ok
                } else {
                    return 1; // password incorect
                }
            }
            return 2; // email erronné
        }
        return 3; // erreur avec de connexion avec la DB 
    }
}
