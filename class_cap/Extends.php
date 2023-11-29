<?php
//Class abstract product
abstract class Product {
     protected $name;
	abstract public function asdname();
	public function setName($name) {
		$this->name = $name;
	}
	public function getName() {
		return $this->name;
	}
}
//Class book
class Book extends Product {
  public function asdname(){ }
  private $stranici;
  private $price;
  public function __construct($name, $stranici, $price) {
  	 $this->stranici = $stranici;
  	 $this->price = $price;
  	 $this->setName($name);
  }
   
   public function __toString() {
        return "Book Name: " . $this->getName() . ", Pages: " . $this->stranici . "\n";
    }

     public function getPrice() {
        return $this->price;
    }
}
class Cart {
	private $products;
    public function __construct() {
        $this->products = [];
    }
    public function addProduct(Product $product) {
        $this->products[] = $product;
    }
    public function listCart() {
    	if (!empty($this->products)) {
    	foreach ($this->products as $product) {
    		 echo $product . "<br>";
    	}
    	}
    	else {
    		echo "No items in cart";
    	}
    }
    public function getTotalPrice() {
        $totalPrice = 0;
        foreach ($this->products as $product) {
            $totalPrice += $product->getPrice();
        }
        return $totalPrice;
    }
    public function checkCart() {
        echo "<pre>";
        var_dump($this->products);
        echo "</pre>";
    }
}
$cart_obj = new Cart();

//$book_obj = new Book("PHP Uroci", "128", "20");
//$cart_obj->addProduct($book_obj);
//$cart_obj->listCart();

//Payment Class
class Payment {
    private $cart;
    private $paymentType;

    public function __construct(Cart $cart, PaymentType $paymentType) {
         $this->cart = $cart;
         $this->paymentType = $paymentType;
    }

    public function proceedPayment() {
        $totalPrice = $this->cart->getTotalPrice();
        echo "Total Price: " . $totalPrice . "lv.<br>";
        echo "Payment Method: " . $this->paymentType->value . "<br>";
        echo "Payment Processed Successfully!";
    }
}
enum PaymentType: string {
    case CreditCard = 'creditcard';
    case PayPal = 'paypal';
    case Bitcoin = 'bitcoin';
}


//$payment_obj = new Payment($cart_obj, PaymentType::CreditCard);
//$payment_obj->proceedPayment();