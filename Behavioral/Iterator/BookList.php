<?php

namespace DesignPatterns\Behavioral\Iterator;
use Countable;

class BookList implements Countable, Iterator
{
    private array $books = [];
    private int $currentIndex = 0;

    public function addBook(Book $book)
    {
        $this->books[] = $book;
    }

    public function removeBook(Book $bookToRemove)
    {
        foreach ($this->books as $key => $book) {
            if ($book->getAuthorAndTitle() === $bookToRemove->getAutrhorAndTitle()) {
                unset($this->books[$book]);
            } 
        }

        $this->books = array_values($this->books);
         
    }


}