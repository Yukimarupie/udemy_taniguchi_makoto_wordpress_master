<?php
// アイキャッチ画像を設定できるように宣言。ファイル名は必ずfunction"s"
add_action('init', function() {
    add_theme_support('post-thumbnails');
}); 