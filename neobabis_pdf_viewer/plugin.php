<?php

/**
 * Plugin Name: Neobabis PDF Viewer
 * Author: Neokazis Charalampos
 * Author URI: https://neobabis.gr
 * Description: Simple PDF Viewer with shortcode: [nbPDF url="PdfUrl" width="100%" height="700px"]. Use external Pdf url or url from media. Optional parameters: width + height
 * Version: 1.0
 */

function nb_pdf_viewer_shortcpde($atts)
{
    $atts = shortcode_atts(array(
        'url' => '',
        'width' => '100%',
        'height' => '700px'
    ), $atts);
    $output = '';
    if ($atts['url'] != '') :
        $output .= '<div class="nb_pdf_container">';
        $output .= '<iframe src="https://docs.google.com/viewer?url=' . $atts['url'] . '&embedded=true" style="width: ' . $atts['width'] . '; height: ' . $atts['height'] . ';" frameborder="0"></iframe>';
        $output .= '</div>';
    endif;
    return $output;
}
add_shortcode('nbPDF', 'nb_pdf_viewer_shortcpde');
