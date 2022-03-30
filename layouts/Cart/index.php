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
            <?php if (!empty(Session::get_value('cart'))) : ?>
                <?php foreach(Session::get_value('cart')['products'] as $value) : ?>
                    <article>
                        <figure>
                            <img src="{$path.uploads}<?php echo $value['details']['avatar']; ?>" alt="Cart">
                        </figure>
                        <div>
                            <h4><?php echo $value['details']['name']; ?></h4>
                            <span>{$lang.price}: $ <?php echo $value['details']['price']; ?> MXN - Total: $ <?php echo $value['total']; ?> MXN</span>
                            <span><?php echo $value['amount'] . ' ' . $value['details']['unity']['es']; ?> - <?php echo $value['color']['name']; ?> - <?php echo $value['size']['name']; ?></span>
                            <a data-action="remove" data-id="<?php echo $value['details']['id']; ?>">{$lang.remove_from_cart}</a>
                        </div>
                    </article>
                <?php endforeach; ?>
            <?php else : ?>
                <div>
                    <p>{$lang.empty_shopping_cart}</p>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <section class="total">
        <div class="container">
            <h2>$ <?php echo (!empty(Session::get_value('cart')) ? Session::get_value('cart')['total'] : '0'); ?> MXN.</h2>
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
                    <div class="col-6">
                        <fieldset>
                            <h4>{$lang.address}</h4>
                            <input type="text" name="address">
                        </fieldset>
                    </div>
                    <div class="col-6">
                        <fieldset>
                            <h4>{$lang.area}</h4>
                            <select name="area">
                                <?php foreach(Functions::api(['get_all_areas']) as $value) : ?>
                                    <option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?> $ <?php echo $value['price']; ?> MXN</option>
                                <?php endforeach; ?>
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
                            <a button-close>{$lang.cancel}</a>
                        </fieldset>
                    </div>
                </div>
            </form>
        </main>
    </div>
</section>
