 <html>
    <head>
        <title>JClass</title>
        <meta charset="UTF-8">
        <link href ="static/css/Style.css" rel="stylesheet" media="screen">
             
    </head>

    <body>

             <h3>1. Escaping from HTML</h3>
                        <?php
                                    $highlight=true; 
                        ?>
                                    <p<?php if ($highlight) :?> class="highlight" <?php else: ?> class="usual" <?php endif;?>>This is a paragraph styled by if-php.</p>
                            
                        ?>

            <h3>3. Heredoc in arguments example</h3>    
<?php
var_dump(array(<<<EOD
foobar!
EOD
));
 ?>
                <h3>4. Heredoc and variables</h3>    
                <?php
                /* Более сложный heredoc пример с переменными. */
                class foo
                {
                    var $foo;
                    var $bar;

                    function foo()
                    {
                        $this->foo = 'Something';
                        $this->bar = array('first', 'second', 'third');
                    }
                }

                $foo = new foo();
                $name = 'Vera';


                echo <<<EOT
                My name is "$name". I am printing $foo->foo.
                Now, I am printing the {$foo->bar[0]} element of the array.
                This should print a capital 'A': \x41
EOT;
?>

 <h3>Web Pages and URL</h3>    
                <?php  $linkName = "Second Page"  ?>
                <?php  $id = 5; ?>
                <?php  $companyName = "Google & Google"; ?>

                   <a href="SecondPage.php?id=<?php echo $id; 
                   ?>&companyName=<?php echo rawurlencode($companyName); ?> "><?php  echo $linkName; ?></a>

 <h3>HTML encoding</h3>
<?php  $linkText = "<Click> & and learn more "; ?>
 <a href=""><?php echo htmlspecialchars($linkText);?> </a>

<br/> 


    </body>
</html>