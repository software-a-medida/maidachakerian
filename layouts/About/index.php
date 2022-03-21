<?php

defined('_EXEC') or die;

$this->dependencies->add(['css', '{$path.css}About/index.css?v=1.0']);
$this->dependencies->add(['js', '{$path.js}About/index.js?v=1.0']);

?>

<main class="about">
    <section class="home"></section>
    <section class="about">
        <h2>{$lang.about_1}</h2>
        <p>{$lang.about_2}</p>
        <figure>
            <img src="{$path.images}logotype_black.png" alt="Logotype">
        </figure>
    </section>
</main>
