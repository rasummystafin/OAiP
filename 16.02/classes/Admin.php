<?php
require_once 'User.php';
class Admin extends User {
    private $usersList = [];
    public function __construct($name, $email, $age) {
        parent::__construct($name, $email, $age);
    }
    
    public function cUser($name, $email, $age) {
        $newUser = new User($name, $email, $age);
        $this->usersList[] = $newUser;
        return $newUser;
    }
    public function getUinfo($id) {
        if (isset($this->usersList[$id])) {
            $user = $this->usersList[$id];
            return $user->getUserMassa();
        } else {
            echo "Пользователя с айди $id нету<br>";
            return null;
        }
    }

    public function UserVise() {
        if (empty($this->usersList)) {
            return;
        }
        foreach ($this->usersList as $id => $user) {
            echo "пользователь $id<br>";
            echo "имя " . $user->getName() . "<br>";
            echo "пoчтa " . $user->getEmail() . "<br>";
            echo "возраст: " . $user->getAge() . "<br>";
        }
    }
}
?>