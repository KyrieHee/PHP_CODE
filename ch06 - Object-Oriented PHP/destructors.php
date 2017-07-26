<?php
    class Book
    {
        private $title;
        private $isbn;
        private $copies;
        #__construct() 函数创建一个新的 SimpleXMLElement 对象。如果成功，则该函数返回一个对象。如果失败，则返回 false。
        function __construct($isbn)
        {
            echo "<p>Book class instance created.</p>";
        }
        #当类需要被删除或者销毁这个类的时候自动加载__destruct这个方法
        function __destruct()
        {
            echo "<p>Book class instance destroyed.</p>";
        }
    }

    $book = new Book("0615303889");
?>
