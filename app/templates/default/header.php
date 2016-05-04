<?php
/**
 * Sample layout.
 */
use Helpers\Assets;
use Helpers\Hooks;
use Helpers\Url;

//initialise hooks
$hooks = Hooks::get();
?>
<!DOCTYPE html>
<html lang="<?php echo LANGUAGE_CODE; ?>">
<head>

	<!-- Site meta -->
	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php
    //hook for plugging in meta tags
    $hooks->run('meta');
    ?>
	<title><?php echo $data['title'].' - '.SITETITLE; //SITETITLE defined in app/Core/Config.php ?></title>

	<!-- CSS -->
	<?php
   // Assets::css([
       // '//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'
       // Url::templatePath().'css/style.css',
  //  ]);
       echo(' <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css">
        <script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>');
    //hook for plugging in css
   // $hooks->run('css');
    ?>

</head>

<style>

    .demo-layout-transparent .mdl-layout__header,
    .demo-layout-transparent .mdl-layout__drawer-button {
        /* This background is dark, so we set text to white. Use 87% black instead if
           your background is light. */
        color: white;
    }
</style>

<div class="demo-layout-transparent mdl-layout mdl-js-layout">
    <header class="mdl-layout__header mdl-layout__header--transparent">
        <div class="mdl-layout__header-row" style="
         background: black;
    ">
            <!-- Title -->
            <span class="mdl-layout-title">Title</span>
            <!-- Add spacer, to align navigation to the right -->
            <div class="mdl-layout-spacer"></div>
            <!-- Navigation -->
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="">Link</a>
                <a class="mdl-navigation__link" href="">Link</a>
                <a class="mdl-navigation__link" href="">Link</a>
                <a class="mdl-navigation__link" href="">Link</a>
            </nav>
        </div>
    </header>
    <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">Title</span>
        <nav class="mdl-navigation">
            <a class="mdl-navigation__link" href="">Link</a>
            <a class="mdl-navigation__link" href="">Link</a>
            <a class="mdl-navigation__link" href="">Link</a>
            <a class="mdl-navigation__link" href="">Link</a>
        </nav>
    </div>
    <main class="mdl-layout__content">

<body>

