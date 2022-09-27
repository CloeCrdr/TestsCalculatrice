<?php

require_once("./classes/user.php;");

$utilisateur = new User("cloe.cordeiro@outlook.com", "Gaspar Cordeiro", "Cloé", 27);
var_dump($utilisateur->isValid());

$utilisateur2 = new User("cloe.cordeiro.com", "Gaspar Cordeiro", "Cloé", 17);
var_dump($utilisateur2->isValid());

$utilisateur2 = new User("cloe.cordeiro.com", "", "Cloé", 17);
var_dump($utilisateur2->isValid());

$utilisateur2 = new User("cloe.cordeiro.com", "Gaspar Cordeiro", "", 18);
var_dump($utilisateur2->isValid());