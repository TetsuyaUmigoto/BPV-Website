<?php
class Login_Model extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function redirect()
    {
        header('refresh: 5; '.URL.'index/check');
        echo '&nbsp Redirecting in 5 seconds.<br>';
    	echo "&nbsp If redirect fails, please click this link to go back. <a href=".URL."index/check>return</a>";
    }

    public function userLogin()
    {
        // check database for a match
        $sth = $this->dbh->prepare('SELECT * FROM users WHERE username = :username AND password = MD5(:password)');
        $sth->execute(array(
            ':username' => $_POST['username'],
            ':password' => $_POST['password']
            ));

        $count =  $sth->rowCount();

        if($count > 0)
        {
            $sth = $this->dbh->prepare("SELECT * FROM users WHERE username = :username");
            $sth->execute(array(
                ':username' => $_POST['username']
                ));

            foreach($sth as $row)
            {
                $row['role'];
                $row['user_id'];
            }

            Session::set('username', $_POST['username']);
            Session::set('user_id', $row['user_id']);
            Session::set('role', $row['role']);

            header('location: '.URL.'index');
        }
        else
        {
            echo '&nbsp No match!<br>';
            $this->redirect();
        }
    }
	
    public function userCreate()
    {
        $sth = $this->dbh->prepare('SELECT * FROM users WHERE username = :username');
        $sth->execute(array(
            ':username' => $_POST['username'],
            ));
		
        $count =  $sth->rowCount();
		
        if($count > 0)
        {
            echo '&nbsp Username already in use.';
            $this->redirect();
        }
        else
        {	
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