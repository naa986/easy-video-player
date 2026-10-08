<?php

function easy_video_player_display_addons()
{
    echo '<div class="wrap">';
    echo '<h2>' .__('Easy Video Player Add-ons', 'easy-video-player') . '</h2>';
    
    $addons_data = array();

    $addon_1 = array(
        'name' => 'MediaElement Skin 1',
        'thumbnail' => EASY_VIDEO_PLAYER_URL.'/addons/images/evp-mediaelement-skin-1.png',
        'description' => 'A clean skin for the Easy video player MediaElement template',
        'page_url' => 'https://noorsplugin.com/wordpress-video-plugin/',
    );
    array_push($addons_data, $addon_1);
    
    $addon_2 = array(
        'name' => 'User Only Videos',
        'thumbnail' => EASY_VIDEO_PLAYER_URL.'/addons/images/evp-user-only-videos.png',
        'description' => 'Restrict videos to WordPress users or users with specific roles',
        'page_url' => 'https://noorsplugin.com/easy-video-player-user-only-videos/',
    );
    array_push($addons_data, $addon_2);
    
    $addon_3 = array(
        'name' => 'Video Schema',
        'thumbnail' => EASY_VIDEO_PLAYER_URL.'/addons/images/evp-schema.png',
        'description' => 'Help search engines discover your videos by adding schema data',
        'page_url' => 'https://noorsplugin.com/easy-video-player-schema/',
    );
    array_push($addons_data, $addon_3);
    
    $addon_4 = array(
        'name' => 'Disable Right Click',
        'thumbnail' => EASY_VIDEO_PLAYER_URL.'/addons/images/evp-disable-right-click.png',
        'description' => 'Disable right click on the Easy Video Player',
        'page_url' => 'https://noorsplugin.com/easy-video-player-disable-right-click/',
    );
    array_push($addons_data, $addon_4);
    
    $addon_5 = array(
        'name' => 'Player Template 1',
        'thumbnail' => EASY_VIDEO_PLAYER_URL.'/addons/images/evp-template-1.png',
        'description' => 'Display videos using player template 1',
        'page_url' => 'https://noorsplugin.com/easy-video-player-template-1/',
    );
    array_push($addons_data, $addon_5);
    
    $addon_6 = array(
        'name' => 'Player Template Native',
        'thumbnail' => EASY_VIDEO_PLAYER_URL.'/addons/images/evp-template-native.png',
        'description' => 'Display videos using native player',
        'page_url' => 'https://noorsplugin.com/easy-video-player-template-native/',
    );
    array_push($addons_data, $addon_6);
    
    //Display the list
    $output = '';
    foreach ($addons_data as $addon) {
        $output .= '<div class="easy_video_player_addons_item_canvas">';

        $output .= '<div class="easy_video_player_addons_item_thumb">';
        $img_src = $addon['thumbnail'];
        $output .= '<img src="' . $img_src . '" alt="' . $addon['name'] . '">';
        $output .= '</div>'; //end thumbnail

        $output .='<div class="easy_video_player_addons_item_body">';
        $output .='<div class="easy_video_player_addons_item_name">';
        $output .= '<a href="' . $addon['page_url'] . '" target="_blank">' . $addon['name'] . '</a>';
        $output .='</div>'; //end name

        $output .='<div class="easy_video_player_addons_item_description">';
        $output .= $addon['description'];
        $output .='</div>'; //end description

        $output .='<div class="easy_video_player_addons_item_details_link">';
        $output .='<a href="'.$addon['page_url'].'" class="easy_video_player_addons_view_details" target="_blank">View Details</a>';
        $output .='</div>'; //end detils link      
        $output .='</div>'; //end body

        $output .= '</div>'; //end canvas
    }
    echo $output;
    
    echo '</div>';//end of wrap
}
