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
                <h2>{$lang.categories}</h2>
                <select name="categories">
                    <optgroup>
                        <option value="all">{$lang.all_categories}</option>
                    </optgroup>
                    <optgroup>
                        <?php foreach(Functions::api(['get_main_1_categories']) as $value) : ?>
                            <option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>
                        <?php endforeach; ?>
                    </optgroup>
                    <optgroup>
                        <?php foreach(Functions::api(['get_main_2_categories']) as $value) : ?>
                            <option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>
                        <?php endforeach; ?>
                    </optgroup>
                    <optgroup>
                        <?php foreach(Functions::api(['get_main_3_categories']) as $value) : ?>
                            <option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>
                        <?php endforeach; ?>
                    </optgroup>
                    <optgroup>
                        <?php foreach(Functions::api(['get_size_categories']) as $value) : ?>
                            <option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>
                        <?php endforeach; ?>
                    </optgroup>
                    <optgroup>
                        <?php foreach(Functions::api(['get_color_categories']) as $value) : ?>
                            <option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>
                        <?php endforeach; ?>
                    </optgroup>
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
                <button type="submit">{$lang.search}</button>
            </fieldset>
        </form>
    </section>
    <section class="products">
        <div>
            <div>
                <?php $counter = 0; ?>
                <?php foreach(Functions::api(['get_all_products']) as $value) : ?>
                    <?php $counter = $counter + 1; ?>
                    <article style="<?php echo (($counter > 3) ? 'margin-top:50px;' : ''); ?>">
                        <figure>
                            <img src="{$path.uploads}<?php echo $value['avatar']; ?>" alt="Product">
                            <a href="/products"><?php echo Functions::categories([$value['categories'], '2', 'resume', '{$lang.categories}']); ?></a>
                        </figure>
                        <div>
                            <h4><?php echo $value['name']; ?></h4>
                            <span>$ <?php echo $value['price']; ?> MXN</span>
                            <p><?php echo Functions::description([$value['description'], 100]); ?></p>
                            <span><?php echo Functions::categories([$value['categories'], '5', 'resume', '{$lang.colors}']); ?> / <?php echo Functions::categories([$value['categories'], '4', 'all']); ?></span>
                            <a data-button-modal="details" data-id="<?php echo $value['id']; ?>"><i class="fas fa-cart-plus"></i>{$lang.view_details}</a>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>
