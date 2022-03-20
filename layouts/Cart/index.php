<?php

defined('_EXEC') or die;

$this->dependencies->add(['css', '{$path.css}Cart/index.css?v=1.0']);
$this->dependencies->add(['js', '{$path.js}Cart/index.js?v=1.0']);

?>

<main class="cart">
    <section class="home"></section>
    <section class="cart">
        <h2>{$lang.cart_1}</h2>
        <p>{$lang.cart_2}</p>
        <div class="container">
            <article>
                <figure>
                    <img src="{$path.images}we_recommend_you_1.png" alt="Cart">
                </figure>
                <div>
                    <h4>Lorem ipsum dolor.</h4>
                    <span>{$lang.price}: $ 500.00 MXN - Total: $ 500.00 MXN</span>
                    <span>1 {$lang.piece} - Negro - CH</span>
                    <a data-action="remove">{$lang.remove_from_cart}</a>
                </div>
            </article>
            <article>
                <figure>
                    <img src="{$path.images}we_recommend_you_2.png" alt="Cart">
                </figure>
                <div>
                    <h4>Lorem ipsum dolor.</h4>
                    <span>{$lang.price}: $ 600.00 MXN - Total: $ 600.00 MXN</span>
                    <span>1 {$lang.piece} - Lila - CH</span>
                    <a data-action="remove">{$lang.remove_from_cart}</a>
                </div>
            </article>
            <article>
                <figure>
                    <img src="{$path.images}we_recommend_you_3.png" alt="Cart">
                </figure>
                <div>
                    <h4>Lorem ipsum dolor.</h4>
                    <span>{$lang.price}: $ 400.00 MXN - Total: $ 400.00 MXN</span>
                    <span>1 {$lang.piece} - Azul - CH</span>
                    <a data-action="remove">{$lang.remove_from_cart}</a>
                </div>
            </article>
        </div>
    </section>
    <section class="total">
        <div class="container">
            <h2>$ 1,500.00 MXN</h2>
            <a data-button-modal="payment">{$lang.pay_now}</a>
        </div>
    </section>
</main>
<section class="modal fullscreen" data-modal="payment">
    <div class="content">
        <main>
            <form name="payment">
                <div class="row">
                    <div class="col-6">
                        <fieldset>
                            <h4>{$lang.firstname}</h4>
                            <input type="text" name="firstname">
                        </fieldset>
                    </div>
                    <div class="col-6">
                        <fieldset>
                            <h4>{$lang.lastname}</h4>
                            <input type="text" name="lastname">
                        </fieldset>
                    </div>
                    <div class="col-8">
                        <fieldset>
                            <h4>{$lang.address}</h4>
                            <input type="text" name="address">
                        </fieldset>
                    </div>
                    <div class="col-4">
                        <fieldset>
                            <h4>{$lang.area}</h4>
                            <select name="area">
                                <option value="">México, Quintana roo.</option>
                                <option value="">México, Yucatán.</option>
                                <option value="">México, Campeche.</option>
                                <option value="">México, CDMX.</option>
                            </select>
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
                            <a data-action="payment">{$lang.credit_debit_card}</a>
                            <a data-action="payment">{$lang.transfer}</a>
                            <a data-action="payment">{$lang.oxxo}</a>
                            <a button-close>{$lang.cancel}</a>
                        </fieldset>
                    </div>
                </div>
            </form>
        </main>
    </div>
</section>
