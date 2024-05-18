<?php
class Book {
     // TODO: Add properties as Private
    private $title;
    private $availableCopies;

     // TODO: Initialize properties
    public function __construct($title, $availableCopies) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    // TODO: Add getTitle method
    public function getTitle() {
        return $this->title;
    }

    // TODO: Add getAvailableCopies method
    public function getAvailableCopies() {
        return $this->availableCopies;
    }

     // TODO: Add borrowBook method
    public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            return true;
        }
        return false;
    }

    // TODO: Add returnBook method
    public function returnBook() {
        $this->availableCopies++;
    }
}

class Member {
    // TODO: Add properties as Private
    private $name;

    // TODO: Initialize properties
    public function __construct($name) {
        $this->name = $name;
    }

     // TODO: Add getName method
    public function getName() {
        return $this->name;
    }

     // TODO: Add borrowBook method
    public function borrowBook($book) {
        $book->borrowBook();
    }

     // TODO: Add returnBook method
    public function returnBook($book) {
        $book->returnBook();
    }
}


// Usage

// You have to create  2 books and 2 members. Members One should borrow  book 1 and Member Two should borrow  book 2.

// TODO: Create 2 books with the following properties
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

// TODO: Create 2 members with the following properties
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

// TODO: Apply Borrow book method to each member
$member1->borrowBook($book1);
$member2->borrowBook($book2);

// TODO: Print Available Copies with their names:
echo "Available Copies of '" . $book1->getTitle() . "': " . $book1->getAvailableCopies() . "\n"."<br>";
echo "Available Copies of '" . $book2->getTitle() . "': " . $book2->getAvailableCopies() . "\n";
?>
