<?php
/*
 * @Author        : Qinver
 * @Url           : zibll.com
 * @Date          : 2020-11-11 10:19:48
 * @LastEditTime: 2024-12-22 14:18:00
 * @Email         : 770349780@qq.com
 * @Project       : Zibll子比主题
 * @Description   : 一款极其优雅的Wordpress主题
 * @Read me       : 感谢您使用子比主题，主题源码有详细的注释，支持二次开发。
 * @Remind        : 使用盗版主题会存在各种未知风险。支持正版，从我做起！
 */

zib_require(array(
    'inc/options/options-module',
    'inc/options/upgrade',
));
if (is_admin()) {
    zib_require(array(
        'admin-options',
        'metabox-options',
        'profile-options',
        'action',
    ), false, 'inc/options/');
}

//使用Font Awesome 4
add_filter('csf_fa4', '__return_true');

function zib_csf_custom_icons($icons)
{
    $icons[] = array(
        'title' => '主题内置SVG图标',
        'icons' => array(
            'zibsvg-like',
            'zibsvg-view',
            'zibsvg-comment',
            'zibsvg-quick-reply',
            'zibsvg-time',
            'zibsvg-search',
            'zibsvg-money',
            'zibsvg-right',
            'zibsvg-left',
            'zibsvg-reply',
            'zibsvg-circle',
            'zibsvg-close',
            'zibsvg-add',
            'zibsvg-add-ring',
            'zibsvg-post',
            'zibsvg-posts',
            'zibsvg-huo',
            'zibsvg-favorite',
            'zibsvg-menu',
            'zibsvg-d-qq',
            'zibsvg-d-weibo',
            'zibsvg-d-wechat',
            'zibsvg-d-email',
            'zibsvg-user',
            'zibsvg-theme',
            'zibsvg-signout',
            'zibsvg-set',
            'zibsvg-signup',
            'zibsvg-user_rp',
            'zibsvg-pan_baidu',
            'zibsvg-lanzou',
            'zibsvg-onedrive',
            'zibsvg-tianyi',
            'zibsvg-menu_2',
            'zibsvg-alipay',
            'zibsvg-baidu',
            'zibsvg-dingtalk',
            'zibsvg-xunlei',
            'zibsvg-123pan',
            'zibsvg-alipan',
            'zibsvg-quark',
            'zibsvg-360yunpan',
            'zibsvg-huawei',
            'zibsvg-xiaomi',
            'zibsvg-gitee',
            'zibsvg-xiaohongshu',
            'zibsvg-zhihu',
            'zibsvg-douyin',
            'zibsvg-bilibili',
            'zibsvg-comment-fill',
            'zibsvg-private',
            'zibsvg-hot-fill',
            'zibsvg-hot',
            'zibsvg-topping',
            'zibsvg-topic',
            'zibsvg-plate-fill',
            'zibsvg-extra-points',
            'zibsvg-deduct-points',
            'zibsvg-points',
            'zibsvg-tags',
            'zibsvg-user-auth',
            'zibsvg-vip_1',
            'zibsvg-vip_2',
            'zibsvg-qzone-color',
            'zibsvg-qq-color',
            'zibsvg-weibo-color',
            'zibsvg-poster-color',
            'zibsvg-copy-color',
            'zibsvg-user-color',
            'zibsvg-user-color-2',
            'zibsvg-add-color',
            'zibsvg-home-color',
            'zibsvg-money-color',
            'zibsvg-order-color',
            'zibsvg-gift-color',
            'zibsvg-security-color',
            'zibsvg-trend-color',
            'zibsvg-msg-color',
            'zibsvg-tag-color',
            'zibsvg-comment-color',
            'zibsvg-wallet-color',
            'zibsvg-money-color-2',
            'zibsvg-merchant-color',
            'zibsvg-medal-color',
            'zibsvg-points-color',
            'zibsvg-book-color',
            'zibsvg-ontop-color',
        ),
    );

    $icons = array_reverse($icons);
    return $icons;
}
add_filter('csf_field_icon_add_icons', 'zib_csf_custom_icons');

//定义文件夹
function zib_csf_custom_csf_override()
{
    return 'inc/csf-framework';
}
add_filter('csf_override', 'zib_csf_custom_csf_override');

//自定义css、js
function zib_csf_add_custom_wp_enqueue()
{
    // Style
    wp_enqueue_style('csf_custom_css', get_template_directory_uri() . '/inc/csf-framework/assets/css/style.min.css', array(), THEME_VERSION);
    // Script
    wp_enqueue_script('csf_custom_js', get_template_directory_uri() . '/inc/csf-framework/assets/js/main.min.js', array('jquery'), THEME_VERSION);
}
add_action('csf_enqueue', 'zib_csf_add_custom_wp_enqueue');

//获取主题设置链接
function zib_get_admin_csf_url($tab = '')
{
    $tab                = trim(strip_tags($tab));
    $tab_array          = explode("/", $tab);
    $tab_array_sanitize = array();
    foreach ($tab_array as $tab_i) {
        $tab_array_sanitize[] = sanitize_title($tab_i);
    }
    $tab_attr = esc_attr(implode("/", $tab_array_sanitize));
    $url      = add_query_arg('page', 'zibll_options', admin_url('admin.php'));
    $url      = $tab ? $url . '#tab=' . $tab_attr : $url;
    return esc_url($url);
}

//获取及设置压缩后的posts_meta
if (!function_exists('of_get_posts_meta')) {
    function of_get_posts_meta($name, $key, $default = false, $post_id = '')
    {
        global $post;
        $post_id  = $post_id ? $post_id : $post->ID;
        $get_mate = get_post_meta($post_id, $name, true);
        if (isset($get_mate[$key])) {
            return $get_mate[$key];
        }
        return $default;
    }
}

if (!function_exists('of_set_posts_meta')) {
    function of_set_posts_meta($post_id, $name, $key, $value)
    {
        if (!$name) {
            return false;
        }
        global $post;
        $post_id        = $post_id ? $post_id : $post->ID;
        $get_mate       = get_post_meta($post_id, $name, true);
        $get_mate       = (array) $get_mate;
        $get_mate[$key] = $value;
        return update_post_meta($post_id, $name, $get_mate);
    }
}

//备份主题数据
function zib_options_backup($type = '自动备份')
{
    $prefix  = 'zibll_options';
    $options = get_option($prefix);

    $options_backup = get_option($prefix . '_backup');
    if (!$options_backup) {
        $options_backup = array();
    }

    $time                  = current_time('Y-m-d H:i:s');
    $options_backup[$time] = array(
        'time' => $time,
        'type' => $type,
        'data' => $options,
    );

    //保留20次数据，删除多余的
    if (count($options_backup) > 20) {
        $options_backup = array_slice($options_backup, -20);
    }

    return update_option($prefix . '_backup', $options_backup);
}

function zib_csf_reset_to_backup()
{
    zib_options_backup('重置全部 自动备份');
}
add_action('csf_zibll_options_reset_before', 'zib_csf_reset_to_backup');

function zib_csf_reset_section_to_backup()
{
    zib_options_backup('重置选区 自动备份');
}
add_action('csf_zibll_options_reset_section_before', 'zib_csf_reset_section_to_backup');

//主题更新自动备份
function zib_new_zibll_to_backup()
{
    $prefix         = 'zibll_options';
    $options_backup = get_option($prefix . '_backup');
    $time           = false;

    if ($options_backup) {
        $options_backup = array_reverse($options_backup);
        foreach ($options_backup as $key => $val) {
            if ('更新主题 自动备份' == $val['type']) {
                $time = $key;
                break;
            }
        }
    }
    if (!$time || (floor((strtotime(current_time("Y-m-d H:i:s")) - strtotime($time)) / 3600) > 240)) {
        zib_options_backup('更新主题 自动备份');
        //更新主题刷新所有缓存
        wp_cache_flush();
    }
}
add_action('zibll_update_notices', 'zib_new_zibll_to_backup');

function zib_zibll_update_cache_flush()
{
    //在线更新主题前，先刷新全部缓存
    wp_cache_flush();
}
add_action('wp_ajax_zibll_update_file', 'zib_zibll_update_cache_flush', 5);

//定期自动备份
function zib_csf_save_section_to_backup()
{
    $prefix         = 'zibll_options';
    $options_backup = get_option($prefix . '_backup');
    $time           = false;

    if ($options_backup) {
        $options_backup = array_reverse($options_backup);
        foreach ($options_backup as $key => $val) {
            if ('定期自动备份' == $val['type']) {
                $time = $key;
                break;
            }
        }
    }
    if (!$time || (floor((strtotime(current_time("Y-m-d H:i:s")) - strtotime($time)) / 3600) > 600)) {
        zib_options_backup('定期自动备份');
    }
}
add_action('csf_zibll_options_saved', 'zib_csf_save_section_to_backup');

//保存主题时候保存必要的wp设置
function zib_save_zibll_wp_options()
{
    $version = get_option('Zibll_version');

    if (!$version) {
        //首次安装主题的必要设置
        update_option('default_comments_page', 'oldest');
        update_option('comment_order', 'asc');
        update_option('comment_registration', 1);
        update_option('require_name_email', 1);
        update_option('thread_comments', 1);
        update_option('thread_comments_depth', 3);

        update_option('medium_size_w', 800);
        update_option('medium_size_h', 800);
    }

    $theme_data = wp_get_theme();
    //Zibll_version 不可加入zib聚合
    update_option('Zibll_version', $theme_data['Version']);

    /**
     * 刷新固定连接
     */
    flush_rewrite_rules();
}
add_action("csf_zibll_options_saved", 'zib_save_zibll_wp_options');

//主题更新后发送通知
function zib_notice_update()
{
    $version    = get_option('Zibll_version');
    $theme_data = wp_get_theme();
    if ($version && version_compare($version, $theme_data['Version'], '<')) {
        $up = get_option('zibll_new_version'); //不能使用zib_get_option
        do_action('zibll_update_notices', $theme_data['Version']);

        $up_desc = !empty($up['update_description']) ? '<p>' . $up['update_description'] . '</p>' : '';
        $con     = '<div class="notice notice-success is-dismissible">
				<h2 style="color:#fd4c73;"><i class="fa fa-heart fa-fw"></i> 恭喜您！Zibll子比主题已更新</h2>
                ' . $up_desc . '
                <p>欢迎使用zibll子比主题V' . THEME_VERSION . '，使用前请务必先配置好伪静态和固定链接，否则会出现404错误！<a target="_bank" style="color:#217ff9;" href="https://www.zibll.com/3025.html">查看官网教程</a></p>
                <p><a target="_bank" style="color:#217ff9;box-shadow:none !important;" href="https://www.zibll.com/375.html">看一下更新了哪些新功能？</a></p>
                <p>更新主题请务必<b style="color:#ff321d;">清空缓存、刷新CDN</b>，再保存一下<a href="' . zib_get_admin_csf_url() . '">主题设置</a>，保存主题设置后此通知会自动关闭</p>
                <p><a class="button" style="margin: 2px;" href="' . zib_get_admin_csf_url() . '">体验新功能</a><a class="button" style="margin: 2px;" href="' . zib_get_admin_csf_url('文档更新') . '">查看主题文档</a><a target="_blank" class="button" style="margin: 2px;" href="https://www.zibll.com/375.html">查看更新日志</a></p>
			</div>';
        echo $con;
    }
}
add_action('admin_notices', 'zib_notice_update');

//主题首次新安装通知
function zib_notice_new_install()
{
    $version = get_option('Zibll_version');
    if (!$version) {
        $theme_version = wp_get_theme()['Version'];
        do_action('zibll_new_install_notices', $theme_version);

        $con = '<div class="notice notice-success is-dismissible">
				<h2 style="color:#fd4c73;"><i class="fa fa-heart fa-fw"></i> 感谢您使用子比主题</h2>
                <p>使用zibll子比主题请务必先配置好伪静态和固定链接，否则会出现404错误！<a target="_bank" style="color:#217ff9;" href="https://www.zibll.com/3025.html">查看官网教程</a></p>
                <p><a class="button" style="margin: 2px;" href="' . zib_get_admin_csf_url('文档更新') . '">查看主题文档</a><a target="_blank" class="button" style="margin: 2px;" href="https://www.zibll.com/375.html">查看更新日志</a></p>
			</div>';
        echo $con;
    }
}
add_action('admin_notices', 'zib_notice_update');

//伪静态检测通知
function zib_notice_permalink_structure()
{
    if (!get_option('permalink_structure')) {
        $con = '<div class="notice notice-error is-dismissible">
            <h2 style="color:#f73d3f;"><i class="dashicons-before dashicons-admin-settings"></i> 请完成固定链接设置</h2>
            <p>您的网站还未完成固定链接配置，部分页面会出现404错误，请先完成伪静态和固定链接设置</p>
            <p><a class="button button-primary" style="margin: 2px;" href="' . admin_url('options-permalink.php') . '">立即设置</a><a target="_blank" class="button" style="margin: 2px;" href="https://www.zibll.com/3025.html">查看官网教程</a></p>
        </div>';
        echo $con;
    }
}
add_action('admin_notices', 'zib_notice_permalink_structure');

//自动授权
function zib_auto_aut()
{
    $auto_key     = '7_7';
    $option       = zib_get_option('theme_auto_aut');
    $option_index = !empty($option[$auto_key]) ? $option[$auto_key] : 0;
    $index        = 1 + 2; //自动尝试的次数

    if (aut_required() && $option_index < $index) {
        $ajax_url = admin_url('admin-ajax.php', 'relative');
        $con      = '<script type="text/javascript">
        (function ($, window, document) {
            $(document).ready(function ($) {
                console.log("开始自动授权验证");
                var html = \'<div><div style="position: fixed;top: 0;right: 0;z-index: 9999999;width: 100%;height: 100%;background: rgba(0, 0, 0, 0.6);"></div><div style="position: fixed;top: 6em;right: -1px;z-index: 10000000;"><div style="background: linear-gradient(135deg,rgb(255, 163, 180),rgb(253, 54, 110));margin-bottom: .6em;color: #fff;padding: 1em 3em;box-shadow: -3px 3px 15px rgba(0, 0, 0, 0.2);" class="a-bg"><i><i class="fa fa-spinner fa-spin fa-fw" style="position: absolute;left: 10px;top: 24px;font-size: 20px;"></i></i><div style="font-size: 1.1em;margin-bottom: 6px;">感谢您使用子比主题</div><div class="a-text">正在为您自动授权，请稍后...</div></div></div></div>\';
                var _html = $(html);
                $("body").append(_html);
                $.post("' . $ajax_url . '", {
                    action: "admin_curl_aut"
                }, function (n) {
                    var msg = n.msg;
                    var error = n.error;
                    _html.find(".a-text").html(msg);
                    if (!error) {
                        _html.find(".a-bg").css("background", "linear-gradient(135deg,rgb(124, 191, 251),rgb(10, 105, 227))");
                    }
                    setTimeout(function () {
                        location.reload();
                    }, 100);
                }, "json");
            });
        })(jQuery, window, document);
        </script>';
        echo $con;
        zib_update_option('theme_auto_aut', [$auto_key => ($option_index + 1)]);
    }
}
add_action('admin_notices', 'zib_auto_aut', 99);
