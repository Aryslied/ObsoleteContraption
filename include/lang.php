<?php

//i18n file

session_start();

$available_langs = array('en','fr');

if(isset($_GET['lang']) && $_GET['lang'] != ''){
  // check if the language is one we support
  if(in_array($_GET['lang'], $available_langs))
  {
    $_SESSION['lang'] = $_GET['lang']; // Set session
  }else if(!isset($_SESSION['lang']) && !in_array($_SESSION['lang'], $available_langs)){
    $_SESSION['lang'] = 'fr';
  }
}

$lang=$_SESSION['lang'];

$translations = array(
  'en' => array(
    'english' => 'English',
    'french' => 'French',
    'title' => 'Plymouth Harbour\'s unofficial website',
    'contact' => 'Contact us',
    'konami' => 'Up Up Down Down Left Right Left Right B A Start',
	'mentionlegaltitle' => 'Legal notice',
    //menu
    'home' => 'Home',
    'about' => 'About',
    'history' => 'History',
    'visit' => 'Visit',
    'boats' => 'Our boats',
    'sea' => 'At sea',
    //about.php
    'aboutTitle' => 'About the harbour',
    'aboutText1' => 'Plymouth harbour is located at the south of England, at the mouth of the rivers Plym and Tamar, in the Sound bay.',
    'aboutAlt1' => 'Plymouth in 2015',
    //boat.php
    'boatTitle' => 'Our boats',
    'boatText1' => 'A lot of boats are present all year in the harbour.',
	'displayboatlist' => 'Show/hide the list of the boats',
	'displayboat2' => ' of Plymouth harbour.',
    //history.php
    'historyTitle' => 'The harbour history',
    'historySubitle1' => 'The harbour in 1910',
	'historySubitle2' => 'An old map of the coast',
    'historySubitle3' => 'The harbour today',
    'historyText1' => 'Thousand-year-old city Plymouth has the greater shipyard in England : Devonport.',
    'historyAlt1' => 'Plymouth long ago',
    'historyAlt2' => 'Plymouth in 1910',
    'historyAlt3' => 'Plymouth in 2015',
	//visit.php
	'barbicantitle' => 'The Barbican & Sutton harbour',
	'barbicantext' => 'A tiny cozy disctrict with all amenities you need to have a good time, from cafés to gift shops.',
	'hoetext' => 'Plymouth Hoe is one of the most beautiful natural harbours of England.',
	'royal' => 'The Royal William yard',
	'royaltext' => 'Former building of the Royal Naval, the Royal William is nowadays a place of friendliness and entertaining.',
	//atsea.php
	'sea0' => 'Sea pictures',
	'sea1' => 'Rich ecosystem',
	'sea1text' => 'Come dive among the fish off the Barbican harbor',
	'sea2' => 'Pleasure boat',
	'sea2text' => 'You can rent pleasure boats in Plymouth, for periods of 1/2 day to 1 week',
	'sea3' => 'On the beach...',
	'sea3text' => 'Enjoy a nice summer day lying on the sandy beaches of Plymouth',
	'sea4' => '... at twilight',
	'sea4text' => 'A breathtaking view as the sun sets on the horizon',
	'sea5' => 'Glaucus Atlanticus',
	'sea5text' => "This rare and protected species of 'sea swallows' was seen off Plymouth",
	'sea6' => 'Whales',
	'sea6text' => 'If you are lucky, you may see a whale !',
	'sea7' => 'Sailing',
	'sea7text' => 'Sailboat races are held each year in the Channel',
	'sea8' => 'Dugongs',
	'sea8text' => "If you do not know them, it's time to feel attached with these adorable animals",
	//info_legales.php
	'mention' => 'Legal notice',
	'close' => 'Close this window',
	'cadre' => "This website has been created for a Web exam for Montpellier Supagro school. We didn't own the rights for the use of the images and it is booked for a personal and private use only."
  ),
  'fr' => array(
    'english' => 'Anglais',
    'french' => 'Français',
    'title' => 'Site non officiel du port de Plymouth',
    'contact' => 'Nous contacter',
    'konami' => 'Haut Haut Bas Bas Gauche Droite Gauche Droite B A Start',
	'mentionlegaltitle' => 'Mentions légales',
    //menu
    'home' => 'Accueil',
    'about' => 'À propos',
    'history' => 'Histoire',
    'visit' => 'Visiter',
    'boats' => 'Nos bâteaux',
    'sea' => 'En mer',
    //about.php
    'aboutTitle' => 'A propos du port',
    'aboutText1' => 'Le port de Plymouth se situe au sud de l\'Angleterre, à l\'embouchure des fleuves Plym et Tamar. Il est situé dans une baie, le Sound.',
    'aboutAlt1' => 'Plymouth en 2015',
    //boat.php
    'boatTitle' => 'Nos bâteaux',
    'boatText1' => 'De nombreux bâteaux sont présents à l\'année sur le port.',
	'displayboatlist' => 'Afficher/masquer la liste des bâteaux',
	'displayboat2' => ' du port de Plymouth.',
    //history.php
    'historyTitle' => 'Histoire du port',
    'historySubitle1' => 'Le port en 1910',
	'historySubitle2' => 'Une ancienne carte de la côte',
    'historySubitle3' => 'Le port aujourd\'hui',
    'historyText1' => 'Vielle de plus d\'un millénaire, la ville de Plymouth abrite le plus grand chantier naval d\'Angleterre, Devonport.',
    'historyAlt1' => 'Plymouth autrefois',
    'historyAlt2' => 'Plymouth en 1910',
    'historyAlt3' => 'Plymouth en 2015',
	//visit.php
	'barbicantitle' => 'Le port de Barbican et Sutton',
	'barbicantext' => 'Un petit quartier sympathique et cosy où toutes les commodités sont réunies, des cafés aux boutiques de souvenirs.',
	'hoetext' => "Plymouth Hoe est un des plus beaux ports naturels d'Angleterre.",
	'royal' => 'La cour du Royal William',
	'royaltext' => 'Ancien bâtiment naval royal, le Royal William est désormais un lieu de convivialité et de divertissement.',
	//atsea.php
	'sea0' => 'Quelques images de la mer...',
	'sea1' => 'Un écosystème riche',
	'sea1text' => 'Venez plonger au milieu des poissons au large du port Barbican',
	'sea2' => 'Bâteau de plaisance',
	'sea2text' => 'Vous pouvez louer des bâteaux de plaisance à Plymouth, pour des durées de 1/2 journée à 1 semaine',
	'sea3' => 'Sur la plage...',
	'sea3text' => "Profitez d'une belle journée d'été allongé sur les plages de sable de Plymouth",
	'sea4' => '... au crépuscule',
	'sea4text' => "Une vue imprenable quand le soleil se couche à l'horizon",
	'sea5' => 'Un Glaucus Atlanticus',
	'sea5text' => "Cette espèce rare et protégée d' 'hirondelles de mer' a été vue au large de Plymouth",
	'sea6' => 'Une baleine',
	'sea6text' => 'Si vous êtes chaceux, vous verrez peut-être une baleine !',
	'sea7' => 'A la voile',
	'sea7text' => 'Des courses de voiliers sont organisées chaque année dans la Manche',
	'sea8' => 'Dugongs',
	'sea8text' => "Si vous ne les connaissez pas, c'est le moment de vous attacher à ces adorables bêtes",
	//info_legales.php
	'mention' => 'Mentions légales',
	'close' => 'Fermer la fenêtre',
	'cadre' => "Ce site a été créé dans le cadre d'une évaluation Web pour l'école de Montpellier Supagro. Nous n'avons pas acheté le droit des images du site et il est réservé à un usage strictement personnel et informel."
  )
);

//TODO is it useful?
//$translations['fr-fr']=$translations['fr'];
//$translations['en-us']=$translations['en'];
//$translations['en-gb']=$translations['en'];

//Get the locale

/*
if (isset ($_GET['lang']))
{
  $lang = htmlspecialchars($_GET['lang'],ENT_QUOTES);
  if ($lang != 'en' && $lang != 'fr' ) {
		$lang = 'fr';
  }
  }
elseif (isset ($_SERVER['HTTP_ACCEPT_LANGUAGE']) AND preg_match("/^fr/", $_SERVER['HTTP_ACCEPT_LANGUAGE']))
{
	$lang = 'fr';
}
else
{
	$lang = 'en';
}
*/

?>
