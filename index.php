<?php

  // Initialisation de l'environnement
  include('./config/config_init.php');
  include('./models/Member.class.php');

  // Gestion de Routing
  if (isset($_GET['action']) && file_exists(_CTRL_.str_replace('.', '', $_GET['action']).'.php'))
      include(_CTRL_.$_GET['action'].'.php');

  if (isset($_GET['page']) && file_exists(_CTRL_.str_replace('.', '', $_GET['page']).'.php')){
      include(_CTRL_.$_GET['page'].'.php');
  }
  else
  {
      include(_CTRL_.'home.php');
  }

  // Affichage des templates
  $smarty->display(_TPL_ . 'header.tpl');

  if (isset($_GET['page']) && file_exists(_TPL_.'pages/'.str_replace('.', '', $_GET['page']).'.tpl'))
      $smarty->display(_TPL_.'pages/'.$_GET['page'].'.tpl');
  else
      $smarty->display(_TPL_ . 'pages/home.tpl');

  $smarty->display(_TPL_ . 'footer.tpl');


?>
