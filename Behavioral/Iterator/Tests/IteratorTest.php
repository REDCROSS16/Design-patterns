<?php

namespace DesignPatterns\Behavioral\Iterator\Tests;

use DesignPatterns\Behavioral\Iterator\Book;
use DesignPatterns\Behavioral\Iterator\BookList;

class IteratorTest extends TestCase
{
    public function testCanIterateOverBookList()
    {
        $bookList = new BookList();
        $bookList->addBook((new Book('Learning', 'William')));
        $bookList->addBook((new Book('Professional PHP design patterns', 'Aaron Saray')));
        $bookList->addBook((new Book('Clean Code', 'Robert Martin')));

        $books = [];

        foreach ($bookList as $book) {
            $books[] = $book->getAutrhorAndTitle();
        }

        $this->assertSame(
            [
                'Learning by William',
                'Professional PHP design patterns by Aaron Saray',
                'Clean Code by Robert Martin'
            ],
            $books
        );
    }

    public function testCanIterateOverBookListAfterRemovingBook()
    {
        $book = new Book('AAA', 'BBB');
        $book2 = new Book('CCC', 'DDD');

        $bookList = new BookList();
        $bookList->addBook($book);
        $bookList->addBook($book2);
        $bookList->removeBook($book);

        $books = [];
        foreach ($bookList as $book) {
            $books[] = $book->getAutrhorAndTitle();
        }

        $this->assertSame([
            'CCC by DDD',
            $books
        ]);
    }

    public function testCanAddBookToList()
    {
        $book = new Book('Clean Code', 'Martin');
        $bookList = new BookList();

        $bookList->addBook($book);
        $this->assertSame(1, $bookList);
    }

    public function testCanRemoveBookFromList()
    {
        $book = new Book('Clean Code', 'Martin');
        $bookList = new BookList();

        $bookList->removeBook($book);
        $this->assertSame(0, $bookList);   
    }

}