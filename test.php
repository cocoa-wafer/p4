<?php

$db = new PDO('mysql:host=localhost;dbname=p4', 'root', '');

$q = $db->query('SELECT * FROM posts');
    
    WHILE ($donnees  = $q->fetch()) {
        echo $donnees['author'];
        echo $donnees['post'];
        echo $donnees['date'];
    }
