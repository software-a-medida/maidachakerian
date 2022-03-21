<?php

defined('_EXEC') or die;

$this->dependencies->add(['css', '{$path.css}Contact/index.css?v=1.0']);
$this->dependencies->add(['js', '{$path.js}Contact/index.js?v=1.0']);

?>

<main class="contact">
    <section class="home"></section>
    <section class="contact">
        <h2>{$lang.contact_1}</h2>
        <p>{$lang.contact_2}</p>
        <form name="contact">
            <div class="row">
                <div class="col-12">
                    <fieldset>
                        <h4>{$lang.fullname}</h4>
                        <input type="text" name="fullname">
                    </fieldset>
                </div>
                <div class="col-6">
                    <fieldset>
                        <h4>{$lang.email}</h4>
                        <input type="email" name="email">
                    </fieldset>
                </div>
                <div class="col-6">
                    <fieldset>
                        <h4>{$lang.phone}</h4>
                        <input type="text" name="phone">
                    </fieldset>
                </div>
                <div class="col-12">
                    <fieldset>
                        <button type="submit">{$lang.send_us_an_email}</button>
                    </fieldset>
                </div>
            </div>
        </form>
    </section>
    <section class="social_media">
        <a href="tel:+521234567890" target="_blank">
            <i class="fas fa-phone"></i>
            <span>+52 (123) 456 78 90</span>
        </a>
        <a href="https://api.whatsapp.com/send?phone=+520123456789" target="_blank">
            <i class="fab fa-whatsapp"></i>
            <span>+52 (123) 456 78 90</span>
        </a>
        <a href="https://facebook.com/" target="_blank">
            <i class="fab fa-facebook-messenger"></i>
            <span>@maidachakerian</span>
        </a>
        <a href="https://facebook.com/" target="_blank">
            <i class="fab fa-facebook"></i>
            <span>@maidachakerian</span>
        </a>
        <a href="https://instagram.com/" target="_blank">
            <i class="fab fa-instagram"></i>
            <span>@maidachakerian</span>
        </a>
    </section>
</main>
