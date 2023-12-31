<?php

class Book {
	private $title;
	private $author;
	private $publicationYear;
	private $isbn;

	public function __construct($title, $author, $publicationYear, $isbn) {
		$this->title = $title;
		$this->author = $author;
		$this->publicationYear = $publicationYear;
		$this->isbn = $isbn;
	}

     public function __clone() {
        // Generate a new unique ISBN for the cloned book
        $this->isbn = time() . rand(1000, 9999);
    }

    public function getIsbn() {
        return $this->isbn;
    }

    public function getAuthor() {
    	return $this->author;
    }

     public function getTitle() {
        return $this->title;
     }

     public function getPublicationYear() {
     	return $this->publicationYear;
     }


}

class Library {
    private $books = [];

    public function __construct() {
       
    }
    
    public function addBook(Book $book) {
        $message = "";
        if ($this->isIsbnUnique($book->getIsbn())) {
            $this->books[] = $book;
            $message = "Book added successfully.";
        } else {
              $message = "A book with this ISBN already exists.";
        }
         return $message;
    }
        private function isIsbnUnique($isbn) {
        foreach ($this->books as $book) {
            if ($book->getIsbn() === $isbn) {
                return false;
            }
        }
        return true; 
    }
     
    public function removeBook($isbn) {
        foreach ($this->books as $key => $book) {
            if ($book->getIsbn() === $isbn) {
                unset($this->books[$key]);
                echo "Book removed successfully.<br>";
                return;
            }
        }
        echo "No book found with that ISBN.<br>"; 
    }
    
    public function findBook($isbn) {
    	echo "Queried books:" . "<br>";
    	foreach ($this->books as $book) {
             if ($book->getIsbn() === $isbn) {
            echo "Book name is: " . $book->getTitle() . "<br>";
             }
             else {
             	echo "No book found.";
             	break;
             }
    	}
    }

    public function listBooks() {
         
        foreach ($this->books as $book) {
             echo "Book name is: " . $book->getTitle() . "<br>";
             echo "Book Author is: " . $book->getAuthor() . "<br>";
             echo "Book Published Year is: " . $book->getPublicationYear() . "<br>";
             echo "Book ISBN Number: " . $book->getIsbn();
             echo "<hr>";
        }
     }
}

//$Library = new Library();
//$myBook = new Book ("IME Kniga", "Avtor", "9999", "123");
//$myBook2 = new Book ("IME Kniga1", "Avtor", "9999", "12312312");
//$cloneMyBook = clone $myBook;
//$Library->addBook($myBook);
//$Library->addBook($cloneMyBook);
//$Library->addBook($myBook2);
//$Library->removeBook("123");
//$Library->findBook("12312312");
//$Library->listBooks();