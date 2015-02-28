<?php
/*
Title: Book information
Post Type: book
*/

piklist('field', array(
   'type'         => 'text',
   'field'        => 'book_author',
   'label'        => __('Author(s)','sage'),
   'columns'      => 12,
));

piklist('field', array(
   'type'         => 'text',
   'field'        => 'book_website',
   'label'        => __('Website', 'sage'),
   'columns'      => 12
));

$book_publisher = array(
   'type'         => 'text',
   'field'        => 'book_publisher',
   'label'        => __('Publisher','sage'),
   'columns'      => 6
);

$book_isbn = array(
   'type'         => 'text',
   'field'        => 'book_isbn',
   'label'        => __('ISBN', 'sage'),
   'columns'      => 6
);
piklist('field', array(
   'type'         => 'group',
   'field'        => 'book_publisher_isbn',
   'fields'       => array(
         $book_publisher,
         $book_isbn,
   )
));
