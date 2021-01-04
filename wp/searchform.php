<div class="search-button">
    <svg class="before-search search-close" xmlns="http://www.w3.org/2000/svg" width="15.28" height="15.28" viewBox="0 0 14.28 15.28" style="&#10; ">
        <defs>
            <style>
                .cls-1{fill:none;stroke:#000;stroke-linejoin:round;stroke-miterlimit:10;stroke-width:1.5px}
            </style>
        </defs>
        <g id="zoom-2" transform="translate(-.25 -.25)">
            <path id="Linha_335" d="M3.733 3.733L0 0" class="cls-1" transform="translate(11.267 11.267)"/>
            <circle id="Elipse_72" cx="6" cy="6" r="6" class="cls-1" transform="translate(1 1)"/>
        </g>
    </svg>
    <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <span class="screen-reader-text d-none"><?php echo _x('Sarch for:', 'label', 'oentusiasta')?></span>
        <label>
            <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Procure por algo', 'placeholder', 'oentusiasta' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
        </label>
        <button type="submit" class="search-submit"><span class="screen-reader-text"><?php echo _x( 
        '
            <svg class="after-search" xmlns="http://www.w3.org/2000/svg" width="15.28" height="15.28" viewBox="0 0 14.28 15.28" style="&#10; ">
                <defs>
                    <style>
                        .cls-1{fill:none;stroke:#000;stroke-linejoin:round;stroke-miterlimit:10;stroke-width:1.5px}
                    </style>
                </defs>
                <g id="zoom-2" transform="translate(-.25 -.25)">
                    <path id="Linha_335" d="M3.733 3.733L0 0" class="cls-1" transform="translate(11.267 11.267)"/>
                    <circle id="Elipse_72" cx="6" cy="6" r="6" class="cls-1" transform="translate(1 1)"/>
                </g>
            </svg>
        '
    , 'submit button', 'oentusiasta' ); ?></span></button>
    </form>
</div>