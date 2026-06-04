<?php
abstract class Shape {
    abstract public function calculateArea();
    
    public function getName() {
        return get_class($this);
    }
}

class Circle extends Shape {
    private $radius;
    
    public function __construct($radius) {
        $this->radius = $radius;
    }
    
    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
}

class Rectangle extends Shape {
    private $width;
    private $height;
    
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
    
    public function calculateArea() {
        return $this->width * $this->height;
    }
}

class Triangle extends Shape {
    private $base;
    private $height;
    
    public function __construct($base, $height) {
        $this->base = $base;
        $this->height = $height;
    }
    
    public function calculateArea() {
        return 0.5 * $this->base * $this->height;
    }
}

$shapes = [
    new Circle(5),
    new Rectangle(4, 6),
    new Triangle(8, 3)
];

foreach ($shapes as $shape) {
    echo "Фигура " . $shape->getName() . "<br>";
    echo "Площадь " . number_format($shape->calculateArea(), 2) . "<br>";
    echo "<br>";
}
?>


<?php
class BankAccount {
    protected $balance;
    
    public function __construct($initialBalance = 0) {
        $this->balance = $initialBalance;
    }
    
    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
            echo "Внесено {$amount}. Баланс {$this->balance}<br>";
        } else {
            echo "Ошибка сумма должна быть положительной<br>";
        }
    }
    
    public function withdraw($amount) {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
            echo "Снято {$amount}. Баланс {$this->balance}<br>";
        } else {
            echo "Ошибка: недостаточно средств!<br>";
        }
    }
    
    public function getBalance() {
        return $this->balance;
    }
}

class SavingsAccount extends BankAccount {
    private $interestRate;
    
    public function __construct($initialBalance = 0, $interestRate = 5) {
        parent::__construct($initialBalance);
        $this->interestRate = $interestRate;
    }
    
    public function addInterest() {
        $interest = $this->balance * ($this->interestRate / 100);
        $this->balance += $interest;
        echo "Начислены проценты {$interest}. Новый баланс {$this->balance}<br>";
    }
}

class CreditAccount extends BankAccount {
    private $creditLimit;
    
    public function __construct($initialBalance = 0, $creditLimit = 1000) {
        parent::__construct($initialBalance);
        $this->creditLimit = $creditLimit;
    }
    
    public function withdraw($amount) {
        if ($amount > 0 && ($this->balance - $amount) >= -$this->creditLimit) {
            $this->balance -= $amount;
            echo "Снято {$amount}. Баланс: {$this->balance}<br>";
        } else {
            echo "Ошибка превышен кредитный лимит<br>";
        }
    }
}

echo "<br>";
$account = new BankAccount(100);
$account->deposit(50);
$account->withdraw(80);
$account->withdraw(100);

$savings = new SavingsAccount(1000, 10);
$savings->deposit(500);
$savings->addInterest();

$credit = new CreditAccount(100, 500);
$credit->withdraw(200);
$credit->withdraw(400);
echo "Текущий баланс {$credit->getBalance()}<br>";
?>



<?php
abstract class Transport {
    protected $speed;
    
    public function __construct($speed = 0) {
        $this->speed = $speed;
    }
    
    abstract public function move();
    
    public function getSpeed() {
        return $this->speed;
    }
}

class Car extends Transport {
    public function move() {
        return "Автомобиль едет по дороге со скоростью {$this->speed} км/ч";
    }
}

class Bike extends Transport {
    public function move() {
        return "Велосипедист крутит педали со скоростью {$this->speed} км/ч";
    }
}

class Plane extends Transport {
    public function move() {
        return "Самолет летит в небе со скоростью {$this->speed} км/ч";
    }
}

$transports = [
    new Car(120),
    new Bike(25),
    new Plane(850)
];

foreach ($transports as $transport) {
    echo $transport->move() . "<br>";
}
?>



<?php
abstract class Product {
    protected $price;
    protected $name;
    
    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }
    
    public function getPrice() {
        return $this->price;
    }
    
    public function getName() {
        return $this->name;
    }
    
    abstract public function getFinalPrice();
}

class PhysicalProduct extends Product {
    private $deliveryCost;
    
    public function __construct($name, $price, $deliveryCost = 500) {
        parent::__construct($name, $price);
        $this->deliveryCost = $deliveryCost;
    }
    
    public function getFinalPrice() {
        return $this->price + $this->deliveryCost;
    }
}

class DigitalProduct extends Product {
    public function getFinalPrice() {
        return $this->price;
    }
}

class DiscountedProduct extends Product {
    private $discountPercent;
    
    public function __construct($name, $price, $discountPercent = 10) {
        parent::__construct($name, $price);
        $this->discountPercent = $discountPercent;
    }
    
    public function getFinalPrice() {
        return $this->price * (1 - $this->discountPercent / 100);
    }
}

$products = [
    new PhysicalProduct("Ноутбук", 50000, 800),
    new DigitalProduct("Электронная книга", 1500),
    new DiscountedProduct("Куртка", 8000, 25),
    new PhysicalProduct("Стул", 3000, 500),
    new DigitalProduct("Антивирус", 2000),
    new DiscountedProduct("Чайник", 2500, 15)
];

echo "<br>";
$total = 0;
foreach ($products as $product) {
    $finalPrice = $product->getFinalPrice();
    echo "Товар {$product->getName()}<br>";
    echo "Цена {$product->getPrice()} руб.<br>";
    echo "Итоговая цена {$finalPrice} руб.<br>";
    echo "<br>";
    $total += $finalPrice;
}

echo "Общая стоимость заказа: {$total} руб.<br>";
?>