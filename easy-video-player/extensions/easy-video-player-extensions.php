<?php

function easy_video_player_display_extensions()
{
    //echo '<div class="wrap">';
    //echo '<h2>' .__('Easy Video Player Extensions', 'easy-video-player') . '</h2>';
    echo '<link type="text/css" rel="stylesheet" href="'.EASY_VIDEO_PLAYER_URL.'/extensions/easy-video-player-extensions.css" />' . "\n";
    
    $extensions_data = array();

    $extension_1 = array(
        'name' => 'MediaElement Skin 1',
        'thumbnail' => EASY_VIDEO_PLAYER_URL.'/extensions/images/evp-mediaelement-skin-1.png',
        'description' => 'A clean skin for the Easy video player MediaElement template',
        'page_url' => 'https://noorsplugin.com/wordpress-video-plugin/',
    );
    array_push($extensions_data, $extension_1);
    
    //Display the list
    $output = '';
    foreach ($extensions_data as $extension) {
        $output .= '<div class="easy_video_player_extensions_item_canvas">';

        $output .= '<div class="easy_video_player_extensions_item_thumb">';
        $img_src = $extension['thumbnail'];
        $output .= '<img src="' . $img_src . '" alt="' . $extension['name'] . '">';
        $output .= '</div>'; //end thumbnail

        $output .='<div class="easy_video_player_extensions_item_body">';
        $output .='<div class="easy_video_player_extensions_item_name">';
        $output .= '<a href="' . $extension['page_url'] . '" target="_blank">' . $extension['name'] . '</a>';
        $output .='</div>'; //end name

        $output .='<div class="easy_video_player_extensions_item_description">';
        $output .= $extension['description'];
        $output .='</div>'; //end description

        $output .='<div class="easy_video_player_extensions_item_details_link">';
        $output .='<a href="'.$extension['page_url'].'" class="easy_video_player_extensions_view_details" target="_blank">View Details</a>';
        $output .='</div>'; //end detils link      
        $output .='</div>'; //end body

        $output .= '</div>'; //end canvas
    }
    echo $output;
    
    //echo '</div>';//end of wrap
}
