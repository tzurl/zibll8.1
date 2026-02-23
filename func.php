<?php
CSF::createMetabox('Mario', array(
    'title'     => '附加选项',
    'post_type' => array('post', 'plate', 'forum_post'),
    'context'   => 'advanced',
    'data_type' => 'unserialize',
));

CSF::createSection('Mario', array(
    'fields' => array(
        array(
            'title'   => __('开启文章角标'),
            'id'      => 'Mario_edit',
            'type'    => 'switcher',
            'label'   => '角标',
            'desc'   => '填哪个显示哪个，不想要的留空就行',
            'default' => false
        ),
        array(  
    'dependency' => array('Mario_edit', '!=', ''),  
    'title'   => __('左上角标内容'),  
    'id'      => 'right_text',  
    'type'    => 'text',  
    'default' => '左角标',  
),  

array(  
    'dependency' => array('Mario_edit', '!=', ''),  
    'title'   => __('字体颜色'),  
    'id'      => 'right_text_color',  
    'type'    => 'color',  
    'default' => '#ffffff', // 假设默认字体颜色是白色  
    'desc'    => '选择左上角标内容的字体颜色',  
                                            
),
array(  
    'dependency' => array('Mario_edit', '!=', ''),  
    'title'   => __('渐变背景颜色'),  
    'id'      => 'right_color',  
    'type'    => 'textarea',  
    'default' => 'linear-gradient(25deg, #eabe7b 10%, #f5e3c7 70%, #edc788 100%);',  
    'desc'    => '请输入CSS渐变颜色值，例如：<br>'.
        '<br>黄色  linear-gradient(25deg, #eabe7b 10%, #f5e3c7 70%, #edc788 100%);' .
        '<br><div class="color-preview" style="background: linear-gradient(25deg, #eabe7b 10%, #f5e3c7 70%, #edc788 100%); width: 100px; height: 50px;"></div>' .
        '<br>红色  linear-gradient(135deg, #fd7a64 10%, #fb2d2d 100%);' .
        '<br><div class="color-preview" style="background: linear-gradient(135deg, #fd7a64 10%, #fb2d2d 100%); width: 100px; height: 50px;"></div>' .
        '<br>蓝色  linear-gradient(135deg, #59c3fb 10%, #268df7 100%);' .
        '<br><div class="color-preview" style="background: linear-gradient(135deg, #59c3fb 10%, #268df7 100%); width: 100px; height: 50px;"></div>' .
        '<br>绿色  linear-gradient(135deg, #60e464 10%, #5cb85b 100%);' .
        '<br><div class="color-preview" style="background: linear-gradient(135deg, #60e464 10%, #5cb85b 100%); width: 100px; height: 50px;"></div>' .
        '<br>青色  linear-gradient(140deg, #039ab3 10%, #58dbcf 90%);' .
        '<br><div class="color-preview" style="background: linear-gradient(140deg, #039ab3 10%, #58dbcf 90%); width: 100px; height: 50px;"></div>',
    
),



        array(
            'dependency' => array('Mario_edit', '!=', ''),
            'title'   => __('右上角标内容'),
            'id'      => 'left_text',
            'type'    => 'text',
            'default' => '右角标',
        ),
        

array(  
    'dependency' => array('Mario_edit', '!=', ''),  
    'title'   => __('字体颜色'),  
    'id'      => 'left_text_color',  
    'type'    => 'color',  
    'default' => '#ffffff', // 假设默认字体颜色是白色  
    'desc'    => '选择左上角标内容的字体颜色',  
),
   array(  
    'dependency' => array('Mario_edit', '!=', ''),  
    'title'   => __('渐变背景颜色'),  
    'id'      => 'left_color',  
    'type'    => 'textarea', // 使用textarea来允许多行输入  
    'default' => 'linear-gradient(25deg, #eabe7b 10%, #f5e3c7 70%, #edc788 100%);', // 提供一个默认的渐变颜色值  
    'desc'    => '请输入CSS渐变颜色值，例如：<br>黄色  linear-gradient(25deg, #eabe7b 10%, #f5e3c7 70%, #edc788 100%);
                                             <br>红色  linear-gradient(135deg, #fd7a64 10%, #fb2d2d 100%);
                                             <br>蓝色  linear-gradient(135deg, #59c3fb 10%, #268df7 100%);
                                             <br>绿色  linear-gradient(135deg, #60e464 10%, #5cb85b 100%);
                                             <br>青色  linear-gradient(140deg, #039ab3 10%, #58dbcf 90%);',  
),

        array(
            'dependency' => array('Mario_edit', '!=', ''),
            'title'   => __('封面底部内容'),
            'id'      => 'bottom_text',
            'type'    => 'text',
            'default' => '封面底部',
        ),
        
array(  
    'dependency' => array('Mario_edit', '!=', ''),  
    'title'   => __('字体颜色'),  
    'id'      => 'bottom_text_color',  
    'type'    => 'color',  
    'default' => '#ffffff', // 假设默认字体颜色是白色  
    'desc'    => '选择左上角标内容的字体颜色',  
),
array(  
    'dependency' => array('Mario_edit', '!=', ''),  
    'title'   => __('渐变背景颜色'),  
    'id'      => 'bottom_color',  
    'type'    => 'textarea', // 使用textarea来允许多行输入  
    'default' => 'linear-gradient(25deg, #eabe7b 10%, #f5e3c7 70%, #edc788 100%);', // 提供一个默认的渐变颜色值  
    'desc'    => '请输入CSS渐变颜色值，例如：<br>黄色  linear-gradient(25deg, #eabe7b 10%, #f5e3c7 70%, #edc788 100%);
                                             <br>红色  linear-gradient(135deg, #fd7a64 10%, #fb2d2d 100%);
                                             <br>蓝色  linear-gradient(135deg, #59c3fb 10%, #268df7 100%);
                                             <br>绿色  linear-gradient(135deg, #60e464 10%, #5cb85b 100%);
                                             <br>青色  linear-gradient(140deg, #039ab3 10%, #58dbcf 90%);',  
),

    ),
));
/*
 * 定义用于显示用户ID的函数
 * 'but'是配合函数赋予class样式'but'在子比主题内通常是按钮样式可配合c-blue或jb-pink赋予色彩
 * c系列为透明背景，颜色有c-blue、c-blue-2、c-cyan、c-gray、c-green、c-green-2、c-purple、c-purple-2、c-red、c-red-2、c-theme、c-white、c-yellow、c-yellow-2
 * jb系列为非透明渐变色背景，颜色有pay-tag、jb-red、jb-pink、jb-yellow、jb-blue、jb-cyan、jb-green、jb-purple、jb-vip1、jb-vip2
 */
function ZbTool_user_id_to_desc($desc, $user_id) {
    // 初始化变量
    $day       = true; // 可以根据需要进行动态设置
    $uid       = true; // 可以根据需要进行动态设置
    $pay_price = true; // 可以根据需要进行动态设置
    $demo      = false; // 可以根据需要进行动态设置

    // 初始化输出变量
    $output = [];

    // 判断 uid 为 true
    if ($uid) {
        $icon   = '<svg class="icon" aria-hidden="true"><use xlink:href="#icon-tag-color"></use></svg>'; // 图标 可自行更换
        $but    = 'UID：' . esc_html($user_id);
        $class  = 'c-red';
        $output[] = '<span class="but ' . esc_attr($class) . '">' . $icon . $but . '</span>';
    }

    // 判断 day 为 true
    if ($day) {
        $icon  = ''; // 图标 如果有需要的话
        $but   = zib_get_user_join_day_desc($user_id, 'but c-cyan'); // 获取用户加入天数描述
        $class = '';
        $output[] = $but;
    }

    // 判断 pay_price 为 true
    if ($pay_price) {
        $icon   = ''; // 图标 可自行更换
        $but    = zibpay_get_user_pay_price($user_id, 'pay_price');
        $class  = 'jb-vip2';
        $output[] = '<span class="but ' . esc_attr($class) . '">总消费：' . esc_html($but) . '</span>';
    }

    // 判断 demo 为 true
    if ($demo) {
        $icon   = ''; // 图标 可自行更换
        $but    = '我是添加样式的演示~';
        $class  = 'c-purple';
        $output[] = '<span class="but ' . esc_attr($class) . '">' . esc_html($but) . '</span>';
    }

    // 将生成的内容添加到原始描述
    $desc = implode(' ', $output) . ' ' . $desc;

    return $desc;
}

// 添加过滤器
add_filter('user_page_header_desc', 'ZbTool_user_id_to_desc', 10, 2);
add_filter('author_header_identity', 'ZbTool_user_id_to_desc', 10, 2);
// 禁止wordpress生成略缩图
function DearLicy_image( $sizes ){
  unset( $sizes[ 'thumbnail' ]);
  unset( $sizes[ 'medium' ]);
  unset( $sizes[ 'medium_large' ] );
  unset( $sizes[ 'large' ]);
  unset( $sizes[ 'full' ] );
  unset( $sizes['1536x1536'] );
  unset( $sizes['2048x2048'] );
  return $sizes;
}
add_filter( 'intermediate_image_sizes_advanced', 'DearLicy_image' );
//签订合同代码//
// 引入SweetAlert2 插件的样式
function load_sweetalert_scripts() {
    wp_enqueue_style( 'sweetalert2', '/css/sweetalert2.min.css' );
    wp_enqueue_script( 'sweetalert2', '/js/sweetalert2.min.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'load_sweetalert_scripts' );

// 在后台创建插件页面
function agreement_plugin_page() {
    global $post; // 添加全局变量$post，用于获取当前页面的ID

    // 设置一个签署成功的变量名
    $success = '<p style="color:green;text-align: center;background: rgba(136, 136, 136, .1);padding: 5px;">您已经成功签署本内容！</p>';

    // 检查当前用户是否已登录
    $is_logged_in = is_user_logged_in();

    $current_user_id = get_current_user_id();

    // 获取当前页面的ID
    $page_id = isset($post->ID) ? $post->ID : '';

    // 检查当前用户是否已签订协议
    $agreement_checked = get_user_meta($current_user_id, 'agreement_checked_' . $page_id, true);

    // 如果用户点击提交按钮且勾选了同意协议复选框，则更新用户元数据，并显示成功签署提示信息
    if (isset($_POST['submit']) && isset($_POST['agreement_checkbox'])) {
        update_user_meta($current_user_id, 'agreement_checked_' . $page_id, true);
        $agreement_checked = true; // 更新变量的值为true
    }
    
    if ($agreement_checked || (isset($_POST['submit']) && isset($_POST['agreement_checkbox']))) {
        echo $success;
        return; // 在签署成功后直接返回，无需执行下面的代码
    }
    

    echo '<form method="post" id="agreement-form" style="text-align: center;background: rgba(136, 136, 136, .1);padding: 5px;">';
    echo '<div style="display: inline-flex;">';

    // 如果当前用户未登录则调用登录框到按钮上
    if (!$is_logged_in) {
        echo '<button class="newadd-btns hover-show but nowave jb-blue radius" style="border-radius: 5px"><a href="javascript:;" class="signin-loader">登录</a></button>';
    } else {
        echo '<input type="checkbox" style="height: 20px;width: 20px;margin-right: 5px;" name="agreement_checkbox" id="agreement_checkbox"> 我已阅读并同意上述内容<br>';
        echo '<input type="hidden" name="page_id" value="' . $page_id . '">'; // 添加一个隐藏字段保存当前页面的ID
        echo '<input type="submit" class="newadd-btns hover-show but nowave jb-blue radius" style="border-radius: 5px;line-height: 0.5;margin-left: 5px;" name="submit" value="确认">';
    }

    echo '</div>';
    echo '</form>';

    // 添加 JavaScript 来进行表单验证
    echo '<script>
        document.getElementById("agreement-form").addEventListener("submit", function(event) {
            if (!document.getElementById("agreement_checkbox").checked) {
                event.preventDefault();
                Swal.fire({
                    icon: "error",
                    title: "提交失败",
                    text: "请您先勾选本内容后再提交！",
                    confirmButtonText: "确定"
                });
            }
        });
    </script>';
}

// 注册短代码并调用插件页面
function agreement_shortcode() {
    ob_start();
    agreement_plugin_page(); // 调用插件页面函数
    return ob_get_clean();
}
add_shortcode('agreement', 'agreement_shortcode');
//夸夸功能
function kuakua(){
   echo'<link rel="stylesheet" type="text/css" href="这里放CSS文件路径">
   <a class="but btn-input-expand input-image mr6" id="kuakua" href="javascript:;">
     <svg class="icon" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" role="img">  
  <image href="https://img.alicdn.com/imgextra/i1/2210123621994/O1CN01l8aHPC1QbIizxVngJ_!!2210123621994.png" width="14px" height="14px" />  
</svg>  
<span class="hide-sm">夸夸</span>
   </a>
   <div class="kuakua-div" style="width: 9999px;height: 99999px;background: #000;z-index: 1031;position: fixed;top: 0;left: 0;opacity: .6;display:none"></div>
   <div class="kuakua-first-box">
           <div class="kuakua-ei">
       <span class="kuakua-close" title="关闭">
             <div>
                 <svg fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" id="close" class="sc-eCImPb iRFNEp"><g fill="none" fill-rule="evenodd" stroke="currentColor"><path d="M7.99 7.99L1 1l6.99 6.99L1 14.98l6.99-6.99zm0 0L15 15 7.99 7.99 14.98 1 7.99 7.99z" stroke="currentColor"></path></g></svg>
             </div>
         </span>
       <div>
         <div class="kuakua-column">
           <section class="kuakua-headerIcon"><svg class="icon kuakua-icon" aria-hidden="true">
             <image href="https://img.alicdn.com/imgextra/i1/2210123621994/O1CN01l8aHPC1QbIizxVngJ_!!2210123621994.png" width="65px" height="60px" /></svg>
           </section>
           <span size="16" color="black4" class="kuakua-headerTitle">夸夸</span>
         </div>
       </div>
       <div  style="position: relative;display: block;">
         <div>
           <section class="kuakua-modal-body">
             <section class="kuakua-contentBox">
                 <span size="18" color="black4" class="kuakua-comment">还有吗！没看够！</span>
               <button type="button" class="kuakua-cancelBtn">换一换</button>
             </section>
             <button type="button" class="kuakua-confirmBtn">夸夸TA</button>
           </section>
           </div>
       </div>
     </div>
   </div>
   <script>
       $(function(){
       $(".kuakua-cancelBtn").click(function() {
         $.getJSON("https://21lhz.cn/cdn/api/yiyanapi.php?encode=kuakua",function(data){
           $(".kuakua-comment").html(data.text);
           $("#comment").text(data.text);
         });
       });
     });
     $(".kuakua-confirmBtn").click(function() {
       $("#submit").trigger("click");
       $(".kuakua-first-box").hide(150);//隐藏速度
       $(".kuakua-div").hide(150);//隐藏速度
       });
     $("#kuakua").click(function (e) {//
         /*阻止冒泡事件*/
         $(".kuakua-first-box").show(150);//显示速度
       $(".kuakua-div").show(150);//显示速度
       $.getJSON("https://21lhz.cn/cdn/api/yiyanapi.php?encode=kuakua",function(data){
         $(".kuakua-comment").html(data.text);
         $("#comment").text(data.text);
       });
       e = window.event || e;
       if (e.stopPropagation) {
         e.stopPropagation();
       } else {
           e.cancelBubble = true;
       }
     });
     $(".kuakua-close").click(function () {
       $(".kuakua-first-box").hide(150);//隐藏速度
       $(".kuakua-div").hide(150);//隐藏速度
       $("#comment").text("");
     });
       </script>';
}