<?php

defined('_EXEC') or die;

$this->dependencies->add(['css', '{$path.css}Index/index.css?v=1.0']);
$this->dependencies->add(['js', '{$path.js}Index/index.js?v=1.0']);
$this->dependencies->add(['css', '{$path.plugins}owl_carousel/assets/owl.carousel.min.css']);
$this->dependencies->add(['css', '{$path.plugins}owl_carousel/assets/owl.theme.default.min.css']);
$this->dependencies->add(['js', '{$path.plugins}owl_carousel/owl.carousel.min.js']);

?>

<main class="home">
    <section class="home">
        <div id="home_left" class="owl-carousel owl-theme">
            <div class="item" style="background-image: url('{$path.images}home_1.png')"></div>
            <div class="item" style="background-image: url('{$path.images}home_2.png')"></div>
            <div class="item" style="background-image: url('{$path.images}home_3.png')"></div>
            <div class="item" style="background-image: url('{$path.images}home_4.png')"></div>
            <div class="item" style="background-image: url('{$path.images}home_5.png')"></div>
            <div class="item" style="background-image: url('{$path.images}home_6.png')"></div>
            <div class="item" style="background-image: url('{$path.images}home_7.png')"></div>
            <div class="item" style="background-image: url('{$path.images}home_8.png')"></div>
        </div>
        <div id="home_right" class="owl-carousel owl-theme">
            <div class="item" style="background-image: url('{$path.images}home_9.png')"></div>
            <div class="item" style="background-image: url('{$path.images}home_10.png')"></div>
            <div class="item" style="background-image: url('{$path.images}home_11.png')"></div>
            <div class="item" style="background-image: url('{$path.images}home_12.png')"></div>
            <div class="item" style="background-image: url('{$path.images}home_13.png')"></div>
            <div class="item" style="background-image: url('{$path.images}home_14.png')"></div>
            <div class="item" style="background-image: url('{$path.images}home_15.png')"></div>
            <div class="item" style="background-image: url('{$path.images}home_16.png')"></div>
        </div>
        <div class="logotype">
            <h1><?php echo Configuration::$web_page; ?></h1>
            <h3><?php echo Configuration::$web_description; ?></h3>
        </div>
    </section>
    <section class="new_arrivals">
        <h2>{$lang.new_arrivals_1}</h2>
        <p>{$lang.new_arrivals_2}</p>
        <div>
            <div>
                <?php $counter = 0; ?>
                <?php foreach(Functions::api(['get_new_arrivals_products']) as $value) : ?>
                    <?php $counter = $counter + 1; ?>
                    <article style="<?php echo (($counter > 4) ? 'margin-top:50px;' : ''); ?>">
                        <figure>
                            <img src="{$path.uploads}<?php echo $value['avatar']; ?>" alt="New arrival">
                            <a href="/products"><?php echo Functions::array_to_hash_string([$value['categories'], '2', 'one', 'string']); ?></a>
                        </figure>
                        <h4><?php echo $value['name']; ?></h4>
                        <span>$ <?php echo $value['price'] . ' ' . $value['currency']; ?></span>
                        <p><?php echo Functions::string_to_short([$value['description'], 100]); ?></p>
                        <span><?php echo Functions::array_to_hash_string([$value['categories'], '5', 'resumed', 'string', '{$lang.colors}']) . ' ' . Functions::array_to_hash_string([$value['categories'], '4', 'all', 'string']); ?></span>
                        <a data-button-modal="details" data-id="<?php echo $value['id']; ?>"><i class="fas fa-cart-plus"></i>{$lang.view_details}</a>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- <section class="categories">
        <?php foreach(Functions::api(['get_main_1_categories']) as $value) : ?>
            <article>
                <figure>
                    <img src="{$path.uploads}<?php echo $value['avatar']; ?>" alt="Category">
                </figure>
                <div>
                    <h4><?php echo $value['name']; ?></h4>
                    <a href="/products">{$lang.view_all}</a>
                </div>
            </article>
        <?php endforeach; ?>
    </section> -->
    <section class="we_recommend_you">
        <h2>{$lang.we_recommend_you_1}</h2>
        <p>{$lang.we_recommend_you_2}</p>
        <div>
            <div>
                <?php $counter = 0; ?>
                <?php foreach(Functions::api(['get_we_recommend_you_products']) as $value) : ?>
                    <?php $counter = $counter + 1; ?>
                    <article style="<?php echo (($counter > 3) ? 'margin-top:50px;' : ''); ?>">
                        <figure>
                            <img src="{$path.uploads}<?php echo $value['avatar']; ?>" alt="We recommend you">
                            <a href="/products"><?php echo Functions::array_to_hash_string([$value['categories'], '2', 'one', 'string']); ?></a>
                        </figure>
                        <div>
                            <h4><?php echo $value['name']; ?></h4>
                            <span>$ <?php echo $value['price'] . ' ' . $value['currency']; ?></span>
                            <p><?php echo Functions::string_to_short([$value['description'], 100]); ?></p>
                            <span><?php echo Functions::array_to_hash_string([$value['categories'], '5', 'resumed', 'string', '{$lang.colors}']) . ' ' . Functions::array_to_hash_string([$value['categories'], '4', 'all', 'string']); ?></span>
                            <a data-button-modal="details" data-id="<?php echo $value['id']; ?>"><i class="fas fa-cart-plus"></i>{$lang.view_details}</a>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <section class="view_all_shop">
        <div>
            <h3>{$lang.view_all_shop_1}</h3>
            <h2><?php echo Configuration::$web_page; ?></h2>
            <p>{$lang.view_all_shop_2}</p>
            <a href="/products">{$lang.view_all_shop}</a>
        </div>
        <figure>
            <img src="{$path.images}view_all_shop.png" alt="About us">
        </figure>
    </section>
    <section class="our_specialities">
        <h2>{$lang.our_specialities_1}</h2>
        <p>{$lang.our_specialities_2}</p>
        <div>
            <div>
                <article>
                    <figure>
                        <img src="{$path.images}our_specialities_1.png" alt="Our speciality">
                    </figure>
                    <h4>{$lang.our_specialities_3}</h4>
                    <p>{$lang.our_specialities_4}</p>
                </article>
                <article>
                    <figure>
                        <img src="{$path.images}our_specialities_2.png" alt="Our speciality">
                    </figure>
                    <h4>{$lang.our_specialities_5}</h4>
                    <p>{$lang.our_specialities_6}</p>
                </article>
                <article>
                    <figure>
                        <img src="{$path.images}our_specialities_3.png" alt="Our speciality">
                    </figure>
                    <h4>{$lang.our_specialities_7}</h4>
                    <p>{$lang.our_specialities_8}</p>
                </article>
            </div>
        </div>
    </section>
    <section class="contact_us">
        <figure>
            <img src="{$path.images}contact_us.png" alt="Contact us">
        </figure>
        <div>
            <div>
                <span><i class="fas fa-phone"></i><?php echo Configuration::$contact_phone; ?></span>
                <span><i class="fas fa-envelope"></i><?php echo Configuration::$contact_email; ?></span>
                <span><i class="fas fa-map-marker-alt"></i><?php echo Configuration::$contact_location; ?></span>
                <a href="/contact">{$lang.contact_us}</a>
            </div>
        </div>
    </section>
    <section class="about_us">
        <figure>
            <img src="{$path.images}about_us.png" alt="About us">
        </figure>
        <div>
            <h3>{$lang.about_us_1}</h3>
            <h2><?php echo Configuration::$web_page; ?></h2>
            <p>{$lang.about_us_2}</p>
            <a href="/about">{$lang.know_more}</a>
        </div>
    </section>
</main>
