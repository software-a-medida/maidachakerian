<?php

defined('_EXEC') or die;

$this->dependencies->add(['css', '{$path.plugins}owl_carousel/assets/owl.carousel.min.css']);
$this->dependencies->add(['css', '{$path.plugins}owl_carousel/assets/owl.theme.default.min.css']);
$this->dependencies->add(['js', '{$path.plugins}owl_carousel/owl.carousel.min.js']);
$this->dependencies->add(['css', '{$path.css}Index/index.css']);
$this->dependencies->add(['js', '{$path.js}Index/index.js']);

?>

<main class="home">
    <header class="menu">
        <nav>
            <ul>
                <li><a href="" target="_blank"><i class="fab fa-facebook"></i></a></li>
                <li><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                <li><a href="" target="_blank"><i class="fas fa-phone"></i></a></li>
                <li><a href="" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                <li><a href="" target="_blank"><i class="fab fa-facebook-messenger"></i></a></li>
                <li><a href="" target="_blank"><i class="fas fa-envelope"></i></a></li>
            </ul>
        </nav>
        <nav>
            <ul>
                <li><a href=""><i class="fas fa-credit-card"></i>$ 0.00</a></li>
                <li><a href=""><i class="fas fa-dollar-sign"></i>MXN</a></li>
                <li><a href=""><i class="fas fa-shopping-cart"></i>0 {$lang.products}</a></li>
                <li><a href=""><img src="{$path.images}es.png"></a></li>
                <li><a href=""><img src="{$path.images}en.png"></a></li>
            </ul>
        </nav>
    </header>
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
            <h1>Brazilian Bikinis.</h1>
            <h3>Beach, Clothes & Fashion.</h3>
        </div>
    </section>
    <section class="new_arrivals">
        <h2>{$lang.new_arrivals_1}</h2>
        <p>{$lang.new_arrivals_2}</p>
        <div>
            <div>
                <article>
                    <figure>
                        <img src="{$path.images}new_arrivals_1.png" alt="New arrival">
                        <a href="">Deportivo</a>
                    </figure>
                    <h4>Lorem ipsum dolor</h4>
                    <span>$ 400.00 MXN</span>
                    <a href=""><i class="fas fa-cart-plus"></i>{$lang.view_details}</a>
                </article>
                <article>
                    <figure>
                        <img src="{$path.images}new_arrivals_2.png" alt="New arrival">
                        <a href="">Moda</a>
                    </figure>
                    <h4>Lorem ipsum dolor</h4>
                    <span>$ 850.00 MXN</span>
                    <a href=""><i class="fas fa-cart-plus"></i>{$lang.view_details}</a>
                </article>
                <article>
                    <figure>
                        <img src="{$path.images}new_arrivals_3.png" alt="New arrival">
                        <a href="">Casual</a>
                    </figure>
                    <h4>Lorem ipsum dolor</h4>
                    <span>$ 300.00 MXN</span>
                    <a href=""><i class="fas fa-cart-plus"></i>{$lang.view_details}</a>
                </article>
                <article>
                    <figure>
                        <img src="{$path.images}new_arrivals_4.png" alt="New arrival">
                        <a href="">Sensual</a>
                    </figure>
                    <h4>Lorem ipsum dolor</h4>
                    <span>$ 450.00 MXN</span>
                    <a href=""><i class="fas fa-cart-plus"></i>{$lang.view_details}</a>
                </article>
            </div>
        </div>
    </section>
    <section class="categories">
        <article>
            <figure>
                <img src="{$path.images}categories_1.png" alt="Service">
            </figure>
            <div>
                <h4>Dama.</h4>
                <a href="">{$lang.view_all}</a>
            </div>
        </article>
        <article>
            <figure>
                <img src="{$path.images}categories_2.png" alt="Service">
            </figure>
            <div>
                <h4>Juvenil.</h4>
                <a href="">{$lang.view_all}</a>
            </div>
        </article>
        <article>
            <figure>
                <img src="{$path.images}categories_3.png" alt="Service">
            </figure>
            <div>
                <h4>Niña.</h4>
                <a href="">{$lang.view_all}</a>
            </div>
        </article>
    </section>
    <section class="we_recommend_you">
        <h2>{$lang.we_recommend_you_1}</h2>
        <p>{$lang.we_recommend_you_2}</p>
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
                        <a href=""><i class="fas fa-cart-plus"></i>{$lang.view_details}</a>
                    </div>
                </article>
            </div>
            <div>
                <article>
                    <figure>
                        <img src="{$path.images}we_recommend_you_4.png" alt="We recommend you">
                        <a href="">Deportivo</a>
                    </figure>
                    <div>
                        <h4>Lorem ipsum dolor</h4>
                        <span>$ 450.00 MXN</span>
                        <a href=""><i class="fas fa-cart-plus"></i>{$lang.view_details}</a>
                    </div>
                </article>
                <article>
                    <figure>
                        <img src="{$path.images}we_recommend_you_5.png" alt="We recommend you">
                        <a href="">Moda</a>
                    </figure>
                    <div>
                        <h4>Lorem ipsum dolor</h4>
                        <span>$ 800.00 MXN</span>
                        <a href=""><i class="fas fa-cart-plus"></i>{$lang.view_details}</a>
                    </div>
                </article>
                <article>
                    <figure>
                        <img src="{$path.images}we_recommend_you_6.png" alt="We recommend you">
                        <a href="">Casual</a>
                    </figure>
                    <div>
                        <h4>Lorem ipsum dolor</h4>
                        <span>$ 250.00 MXN</span>
                        <a href=""><i class="fas fa-cart-plus"></i>{$lang.view_details}</a>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <section class="about_us">
        <div>
            <h3>{$lang.about_us_1}</h3>
            <h2>{$lang.about_us_2}</h2>
            <p>{$lang.about_us_3}</p>
            <a href="">{$lang.know_more}</a>
        </div>
        <figure>
            <img src="{$path.images}about_us.png" alt="About us">
        </figure>
    </section>
    <section class="our_specialities">
        <h2>{$lang.our_specialities_1}</h2>
        <p>{$lang.our_specialities_2}</p>
        <div>
            <div>
                <article>
                    <figure>
                        <img src="{$path.images}our_specialities_1.png" alt="Our specialities">
                    </figure>
                    <h4>{$lang.our_specialities_3}</h4>
                    <p>{$lang.our_specialities_4}</p>
                    <a href="">{$lang.quote_now}</a>
                </article>
                <article>
                    <figure>
                        <img src="{$path.images}our_specialities_2.png" alt="Our specialities">
                    </figure>
                    <h4>{$lang.our_specialities_5}</h4>
                    <p>{$lang.our_specialities_6}</p>
                    <a href="">{$lang.quote_now}</a>
                </article>
                <article>
                    <figure>
                        <img src="{$path.images}our_specialities_3.png" alt="Our specialities">
                    </figure>
                    <h4>{$lang.our_specialities_7}</h4>
                    <p>{$lang.our_specialities_8}</p>
                    <a href="">{$lang.quote_now}</a>
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
                <span><i class="fas fa-phone"></i>+52 (012) 345 67 89</span>
                <span><i class="fas fa-envelope"></i>vantas@brazilianbikinis.com</span>
                <span><i class="fas fa-map-marker-alt"></i>Cancún, Quintana roo.</span>
            </div>
        </div>
    </section>
    <section class="magazine">
        <figure>
            <img src="{$path.images}magazine.png" alt="Magazine">
        </figure>
        <div>
            <h3>{$lang.magazine_1}</h3>
            <h2>{$lang.magazine_2}</h2>
            <p>{$lang.magazine_3}</p>
            <a href="">{$lang.read_now}</a>
        </div>
    </section>
    <!-- <footer></footer> -->
</main>
