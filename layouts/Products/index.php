<?php

defined('_EXEC') or die;

$this->dependencies->add(['css', '{$path.css}Products/index.css?v=1.0']);
$this->dependencies->add(['js', '{$path.js}Products/index.js?v=1.0']);

?>

<main class="products">
    <section class="home"></section>
    <section class="filters">
        <h2>{$lang.online_shop_1}</h2>
        <p>{$lang.online_shop_2}</p>
        <form name="filters" class="container">
            <fieldset>
                <h2>{$lang.size}</h2>
                <select name="size">
                    <option value="all">{$lang.all_sizes}</option>
                </select>
            </fieldset>
            <fieldset>
                <h2>{$lang.price_range}</h2>
                <div>
                    <input type="number" name="price_1" value="1">
                    <span>{$lang.to}</span>
                    <input type="number" name="price_2" value="100">
                    <span>MXN</span>
                </div>
            </fieldset>
            <fieldset>
                <h2>{$lang.category}</h2>
                <select name="category">
                    <option value="all">{$lang.all_categories}</option>
                </select>
            </fieldset>
            <fieldset>
                <button type="submit">{$lang.search}</button>
            </fieldset>
        </form>
    </section>
    <section class="products">
        <div>
            <div>
                <article>
                    <figure>
                        <img src="{$path.images}we_recommend_you_1.png" alt="We recommend you">
                        <a href="">Deportivo</a>
                    </figure>
                    <div>
                        <h4>Lorem ipsum dolor</h4>
                        <span>$ 500.00 MXN</span>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                        <span>CH - M - XL</span>
                        <a href=""><i class="fas fa-cart-plus"></i>{$lang.view_details}</a>
                    </div>
                </article>
                <article>
                    <figure>
                        <img src="{$path.images}we_recommend_you_2.png" alt="We recommend you">
                        <a href="">Moda</a>
                    </figure>
                    <div>
                        <h4>Lorem ipsum dolor</h4>
                        <span>$ 600.00 MXN</span>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                        <span>CH - M - XL</span>
                        <a href=""><i class="fas fa-cart-plus"></i>{$lang.view_details}</a>
                    </div>
                </article>
                <article>
                    <figure>
                        <img src="{$path.images}we_recommend_you_3.png" alt="We recommend you">
                        <a href="">Casual</a>
                    </figure>
                    <div>
                        <h4>Lorem ipsum dolor</h4>
                        <span>$ 400.00 MXN</span>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                        <span>CH - M - XL</span>
                        <a href=""><i class="fas fa-cart-plus"></i>{$lang.view_details}</a>
                    </div>
                </article>
            </div>
            <div>
                <article>
                    <figure>
                        <img src="{$path.images}we_recommend_you_1.png" alt="We recommend you">
                        <a href="">Deportivo</a>
                    </figure>
                    <div>
                        <h4>Lorem ipsum dolor</h4>
                        <span>$ 500.00 MXN</span>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                        <span>CH - M - XL</span>
                        <a href=""><i class="fas fa-cart-plus"></i>{$lang.view_details}</a>
                    </div>
                </article>
                <article>
                    <figure>
                        <img src="{$path.images}we_recommend_you_2.png" alt="We recommend you">
                        <a href="">Moda</a>
                    </figure>
                    <div>
                        <h4>Lorem ipsum dolor</h4>
                        <span>$ 600.00 MXN</span>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                        <span>CH - M - XL</span>
                        <a href=""><i class="fas fa-cart-plus"></i>{$lang.view_details}</a>
                    </div>
                </article>
                <article>
                    <figure>
                        <img src="{$path.images}we_recommend_you_3.png" alt="We recommend you">
                        <a href="">Casual</a>
                    </figure>
                    <div>
                        <h4>Lorem ipsum dolor</h4>
                        <span>$ 400.00 MXN</span>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                        <span>CH - M - XL</span>
                        <a href=""><i class="fas fa-cart-plus"></i>{$lang.view_details}</a>
                    </div>
                </article>
            </div>
            <div>
                <article>
                    <figure>
                        <img src="{$path.images}we_recommend_you_1.png" alt="We recommend you">
                        <a href="">Deportivo</a>
                    </figure>
                    <div>
                        <h4>Lorem ipsum dolor</h4>
                        <span>$ 500.00 MXN</span>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                        <span>CH - M - XL</span>
                        <a href=""><i class="fas fa-cart-plus"></i>{$lang.view_details}</a>
                    </div>
                </article>
                <article>
                    <figure>
                        <img src="{$path.images}we_recommend_you_2.png" alt="We recommend you">
                        <a href="">Moda</a>
                    </figure>
                    <div>
                        <h4>Lorem ipsum dolor</h4>
                        <span>$ 600.00 MXN</span>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                        <span>CH - M - XL</span>
                        <a href=""><i class="fas fa-cart-plus"></i>{$lang.view_details}</a>
                    </div>
                </article>
                <article>
                    <figure>
                        <img src="{$path.images}we_recommend_you_3.png" alt="We recommend you">
                        <a href="">Casual</a>
                    </figure>
                    <div>
                        <h4>Lorem ipsum dolor</h4>
                        <span>$ 400.00 MXN</span>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                        <span>CH - M - XL</span>
                        <a href=""><i class="fas fa-cart-plus"></i>{$lang.view_details}</a>
                    </div>
                </article>
            </div>
            <div>
                <article>
                    <figure>
                        <img src="{$path.images}we_recommend_you_1.png" alt="We recommend you">
                        <a href="">Deportivo</a>
                    </figure>
                    <div>
                        <h4>Lorem ipsum dolor</h4>
                        <span>$ 500.00 MXN</span>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                        <span>CH - M - XL</span>
                        <a href=""><i class="fas fa-cart-plus"></i>{$lang.view_details}</a>
                    </div>
                </article>
                <article>
                    <figure>
                        <img src="{$path.images}we_recommend_you_2.png" alt="We recommend you">
                        <a href="">Moda</a>
                    </figure>
                    <div>
                        <h4>Lorem ipsum dolor</h4>
                        <span>$ 600.00 MXN</span>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                        <span>CH - M - XL</span>
                        <a href=""><i class="fas fa-cart-plus"></i>{$lang.view_details}</a>
                    </div>
                </article>
                <article>
                    <figure>
                        <img src="{$path.images}we_recommend_you_3.png" alt="We recommend you">
                        <a href="">Casual</a>
                    </figure>
                    <div>
                        <h4>Lorem ipsum dolor</h4>
                        <span>$ 400.00 MXN</span>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                        <span>CH - M - XL</span>
                        <a href=""><i class="fas fa-cart-plus"></i>{$lang.view_details}</a>
                    </div>
                </article>
            </div>
        </div>
    </section>
</main>
