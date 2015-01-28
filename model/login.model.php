<?php

class Login_Model extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function redirect() {
        header('refresh: 5; ' . URL . 'index/check');
        echo '&nbsp Redirecting in 5 seconds.<br>';
        echo "&nbsp If redirect fails, please click this link to go back. <a href=" . URL . "index/check>return</a>";
    }

    public function userLogin() {
        // check database for a match
        switch ($_POST['type']) {
            case "0":
                $sth = $this->dbh->prepare('SELECT * FROM studenten WHERE leerlingnummer = :leerlingnummer AND wachtwoord = MD5(:password)');
                $sth->execute(array(
                    ':leerlingnummer' => $_POST['username'],
                    ':password' => $_POST['password']
                ));

                $count = $sth->rowCount();

                if ($count > 0) {
                    $sth = $this->dbh->prepare("SELECT * FROM studenten WHERE leerlingnummer = :leerlingnummer");
                    $sth->execute(array(
                        ':leerlingnummer' => $_POST['username']
                    ));

                    foreach ($sth as $row) {
                       $username = $row['leerlingnummer'];
                    }
                } else {
                    echo '&nbsp No match!<br>';
                    $this->redirect();
                }
                break;
            case 1:
                $sth = $this->dbh->prepare('SELECT * FROM leraren WHERE id = :username AND wachtwoord = MD5(:password)');
                $sth->execute(array(
                    ':username' => $_POST['username'],
                    ':password' => $_POST['password']
                ));

                $count = $sth->rowCount();

                if ($count > 0) {
                    $sth = $this->dbh->prepare("SELECT * FROM leraren WHERE id = :username");
                    $sth->execute(array(
                        ':username' => $_POST['username']
                    ));

                    foreach ($sth as $row) {
                       $username = $row['id'];
                    }
                } else {
                    echo '&nbsp No match!<br>';
                    $this->redirect();
                }
                break;
            case 2:
                $sth = $this->dbh->prepare('SELECT * FROM bedrijven WHERE bedrijf_id = :username AND wachtwoord = MD5(:password)');
                $sth->execute(array(
                    ':username' => $_POST['username'],
                    ':password' => $_POST['password']
                ));

                $count = $sth->rowCount();

                if ($count > 0) {
                    $sth = $this->dbh->prepare("SELECT * FROM bedrijven WHERE bedrijf_id = :username");
                    $sth->execute(array(
                        ':username' => $_POST['username']
                    ));

                    foreach ($sth as $row) {
                       $username = $row['bedrijf_id'];
                    }
                } else {
                    echo '&nbsp No match!<br>';
                    $this->redirect();
                }
                break;
                
        }
        
        Session::set('user_id', $username);
        Session::set('role', $_POST['type']);

        header('location: ' . URL . 'index');
    }

    public function userCreate() {
        $sth = $this->dbh->prepare('SELECT * FROM users WHERE voornaam = :username');
        $sth->execute(array(
            ':voornaam' => $_POST['username'],
        ));

        $count = $sth->rowCount();

        if ($count > 0) {
            echo '&nbsp Username already in use.';
            $this->redirect();
        } else {
            $sth = $this->dbh->prepare("INSERT INTO users (user_id, name, username, password, email, role, date)
            VALUES (NULL, :name, :username, MD5(:password1), :email, :role,  CURDATE())");
            $sth->execute(array(
                ':name' => $_POST['name'],
                ':username' => $_POST['username'],
                ':password1' => $_POST['password1'],
                ':email' => $_POST['email'],
                ':role' => 'user'
            ));

            echo '&nbsp User created, login with created user.<br>';
            $this->redirect();
        }
    }

}
