<?php defined('_EXEC') or die; ?>

        <section class="modal fullscreen" data-modal="details">
            <div class="content">
                <main>
                    <form name="details" class="container">
                        <div>
                            <figure>
                                <img src="{$path.images}home_1.png" alt="Gallery">
                            </figure>
                            <figure>
                                <img src="{$path.images}home_2.png" alt="Gallery">
                            </figure>
                            <figure>
                                <img src="{$path.images}home_3.png" alt="Gallery">
                            </figure>
                            <figure>
                                <img src="{$path.images}we_recommend_you_1.png" alt="Gallery">
                            </figure>
                            <figure>
                                <img src="{$path.images}we_recommend_you_2.png" alt="Gallery">
                            </figure>
                            <figure>
                                <img src="{$path.images}we_recommend_you_3.png" alt="Gallery">
                            </figure>
                        </div>
                        <h2>Lorem ipsum dolor.</h2>
                        <span>Moda / $ 500.00 MXN</span>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate.</p>
                        <div>
                            <fieldset>
                                <h4>{$lang.size}</h4>
                                <select name="size">
                                    <option value="">CH</option>
                                    <option value="">M</option>
                                    <option value="">XL</option>
                                </select>
                            </fieldset>
                            <fieldset>
                                <h4>{$lang.color}</h4>
                                <select name="color">
                                    <option value="">Negro</option>
                                </select>
                            </fieldset>
                            <fieldset>
                                <h4>{$lang.amount}</h4>
                                <input type="number" name="amount" value="1">
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
        <footer class="menu">
            <p>Copyright <i class="fa-solid fa-copyright"></i> Maida Chakerian 2022. {$lang.all_right_reserved} {$lang.development_by} <a href="https://codemonkey.com.mx" target="_blank">codemonkey.com.mx.</a></p>
        </footer>
        <script src="{$path.js}jquery-3.4.1.min.js"></script>
        <script src="{$path.js}valkyrie.js?v=1.0"></script>
        <script src="{$path.js}scripts.js?v=1.0"></script>
        <script src="https://kit.fontawesome.com/1a4cb37d83.js" crossorigin="anonymous"></script>
        {$dependencies.js}
        {$dependencies.other}
    </body>
</html>
