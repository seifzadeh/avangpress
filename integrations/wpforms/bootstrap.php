<?php

avangpress_register_integration( 'wpforms', 'Avangpress_WPForms_Integration', true );

function _avangpress_wpforms_register_field() {
    if( ! class_exists( 'WPForms_Field' ) ) {
        return;
    }

    new Avangpress_WPForms_Field();
}

add_action( 'init', '_avangpress_wpforms_register_field' );
