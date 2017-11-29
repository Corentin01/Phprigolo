<?php
session_start(); 
ini_set('display_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('UTC');

define('NOM_DB', 'phprigolo');
define('UTILISATEUR_DB', 'root');
define('MDP_DB', 'lulu');

$dbconnexion = new PDO('mysql:host=localhost;dbname='.NOM_DB, UTILISATEUR_DB, MDP_DB, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

$NbreElementLigne = 3;

$menu['Les helpers'] = array();
$menu['Les helpers']['link'] = '/helpers/';
$menu['Les helpers']['titre'] = 'Les helpers';
$menu['Les helpers']['description'] = 'Exercice sur le PHP';
$menu['Les helpers']['keywords'] = 'php,exo,exercice';
$menu['La classe']= array();
$menu['La classe']['link'] = '/classe/';
$menu['La classe']['titre'] = 'La classe';
$menu['La classe']['description'] = 'Exercice sur le PHP';
$menu['La classe']['keywords'] = 'php,exo,exercice';
$menu['La note'] = array();
$menu['La note']['link'] = '/note/';
$menu['La note']['titre'] = 'La note';
$menu['La note']['description'] = 'Exercice sur le PHP';
$menu['La note']['keywords'] = 'php,exo,exercice';
$menu['Le menu'] = array();
$menu['Le menu']['link'] = '/menu/';
$menu['Le menu']['titre'] = 'Le menu';
$menu['Le menu']['description'] = 'Exercice sur le PHP';
$menu['Le menu']['keywords'] = 'php,exo,exercice';
$menu['Le référencement'] = array();
$menu['Le référencement']['link'] = '/referencement/';
$menu['Le référencement']['titre'] = 'Référencement';
$menu['Le référencement']['description'] = 'Exercice sur le PHP';
$menu['Le référencement']['keywords'] = 'php,exo,exercice';
$menu['Les vignettes'] = array();
$menu['Les vignettes']['link'] = '/vignettes/';
$menu['Les vignettes']['titre'] = 'Les vignettes';
$menu['Les vignettes']['description'] = 'Exercice sur le PHP';
$menu['Les vignettes']['keywords'] = 'php,exo,exercice';
$menu['Le morpion'] = array();
$menu['Le morpion']['link'] = '/morpion/';
$menu['Le morpion']['titre'] = 'Le morpion';
$menu['Le morpion']['description'] = 'Exercice sur le PHP';
$menu['Le morpion']['keywords'] = 'php,exo,exercice';
$menu['Conforama'] = array();
$menu['Conforama']['link'] = '/conforama/';
$menu['Conforama']['titre'] = 'Conforama';
$menu['Conforama']['description'] = 'Exercice sur le PHP';
$menu['Conforama']['keywords'] = 'php,exo,exercice';
$menu['fichierCSV'] = array();
$menu['fichierCSV']['link'] = '/fichier-csv/';
$menu['fichierCSV']['titre'] = 'Fichier CSV';
$menu['fichierCSV']['description'] = 'Exercice sur le PHP';
$menu['fichierCSV']['keywords'] = 'php,exo,exercice';
  ?>
