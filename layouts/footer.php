<?php defined('_EXEC') or die; ?>

        <section class="modal fullscreen" data-modal="details">
            <div class="content">
                <main>
                    <form name="details" class="container">
                        <div>
                            <figure id="details_gallery_one">
                                <img alt="Gallery">
                            </figure>
                            <figure id="details_gallery_two">
                                <img alt="Gallery">
                            </figure>
                            <figure id="details_gallery_three">
                                <img alt="Gallery">
                            </figure>
                            <figure id="details_gallery_four">
                                <img alt="Gallery">
                            </figure>
                            <figure id="details_gallery_five">
                                <img alt="Gallery">
                            </figure>
                            <figure id="details_gallery_six">
                                <img alt="Gallery">
                            </figure>
                        </div>
                        <h2 id="details_name">Hola</h2>
                        <span id="details_main_categories"></span>
                        <span id="details_price"></span>
                        <p id="details_description"></p>
                        <div style="margin-top:40px;">
                            <fieldset>
                                <h4>{$lang.color}</h4>
                                <select id="details_color_categories" name="color"></select>
                            </fieldset>
                            <fieldset>
                                <h4>{$lang.size}</h4>
                                <select id="details_size_categories" name="size"></select>
                            </fieldset>
                            <fieldset>
                                <h4>{$lang.amount} (<span id="details_unity"></span>)</h4>
                                <input id="details_amount" type="number" name="amount" value="1">
                            </fieldset>
                        </div>
                        <div>
                            <a button-close>{$lang.cancel}</a>
                            <button type="submit"><i class="fas fa-cart-plus"></i>{$lang.add_to_cart}</button>
                        </div>
                    </form>
                </main>
            </div>
        </section>
        <section data-ajax-loader>
            <div></div>
        </section>
        <footer class="menu">
            <p>Copyright <i class="fa-solid fa-copyright"></i> <?php echo Configuration::$web_page; ?> 2022. {$lang.all_right_reserved} {$lang.development_by} <a href="https://codemonkey.com.mx" target="_blank">CodeMonkey.com.mx.</a></p>
        </footer>
        <script src="{$path.js}jquery-3.4.1.min.js"></script>
        <script src="{$path.js}valkyrie.js?v=1.0"></script>
        <script src="{$path.js}scripts.js?v=1.1"></script>
        <script src="https://kit.fontawesome.com/1a4cb37d83.js" crossorigin="anonymous"></script>
        {$dependencies.js}
        {$dependencies.other}
    </body>
</html>
