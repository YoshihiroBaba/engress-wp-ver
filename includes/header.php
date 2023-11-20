<?php wp_body_open(); ?>

<header class="l-header">
    <div class="l-header__inner">
        <div class="l-header__left">
            <h1 class="l-header__logo">
                <a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/logo (2).png" alt="" class="header__logo-img" /></a>
            </h1>
            <?php
            $menu_name = 'place_global';
            $locations = get_nav_menu_locations();
            $menu =  wp_get_nav_menu_object($locations[$menu_name]);
            $menu_items = wp_get_nav_menu_items($menu->term_id);
            ?>
            <nav class="l-header__gnav">
                <?php foreach ($menu_items as $item) : ?>
                    <a href="<?php echo esc_attr($item->url); ?>" class="l-header__gnav__item"><?php echo esc_html($item->title); ?></a>
                <?php endforeach; ?>
            </nav><!-- /.c-gnav -->
        </div><!-- /.l-header__left -->
        <div class="l-header__burger">
            <nav class="l-header__gnav--burger">
                <?php foreach ($menu_items as $item) : ?>
                    <a href="<?php echo esc_attr($item->url); ?>" class="l-header__gnav__item"><?php echo esc_html($item->title); ?></a>
                <?php endforeach; ?>
            </nav><!-- /.c-gnav -->
            <div class="l-header__right--burger">
                <a href="<?php echo esc_url(home_url('/home/contact')); ?>" type="button" class="c-btn__doc-request c-btn__doc-request--header">資料請求</a>
                <a href="<?php echo esc_url(home_url('/home/contact')); ?>" type="button" class="c-btn__contact">お問い合わせ</a>
                <div class="l-header__info">
                    <p class="l-header__info__time">平日08:00〜20:00</p>
                    <div class="c-tel">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/パス 29.png" alt="" class="c-tel__logo" />
                        <p class="c-tel__number">0123-456-7890</p>
                    </div>
                </div><!-- /.l-header__info -->
            </div> <!-- /.l-header__right -->
        </div> <!-- /.l-header__burger -->
        <div class="l-header__right">
            <div class="l-header__info">
                <p class="l-header__info__time">平日08:00〜20:00</p>
                <div class="c-tel">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/パス 29.png" alt="" class="c-tel__logo" />
                    <p class="c-tel__number">0123-456-7890</p>
                </div>
            </div><!-- /.l-header__info -->
            <a href="<?php echo esc_url(home_url('/home/contact')); ?>" type="button" class="c-btn__doc-request c-btn__doc-request--header">資料請求</a>
            <a href="<?php echo esc_url(home_url('/home/contact')); ?>" type="button" class="c-btn__contact">お問い合わせ</a>
        </div> <!-- /.l-header__right -->
        <button class="c-burger-icon" id="c-burger-icon">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
    <!-- /.l-header__inner -->
</header>
