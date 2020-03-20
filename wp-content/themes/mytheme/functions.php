<?php
	
function load_style()
{
	wp_register_style( 'bootstrap',  get_template_directory_uri() . '/css/bootstrap.min.css','', false, 'all' );
	wp_enqueue_style( 'bootstrap');

	wp_register_style( 'silder',  get_template_directory_uri() . '/css/style_slider.css','', false, 'all' );
	wp_enqueue_style( 'silder');
}

add_action( 'wp_enqueue_scripts','load_style' );

function load_js()
{
	wp_register_script( 'js',get_template_directory_uri().'/js/bootstrap.min.js', 'jquery', false, true );
	wp_enqueue_script( 'js');

	wp_register_script( 'silderjs',get_template_directory_uri().'/js/slider.js', 'jquery', false, true );
	wp_enqueue_script( 'silderjs');

}

add_action( 'wp_enqueue_scripts','load_js' );

add_theme_support( 'menus' ); 
add_theme_support( 'widgets');

register_nav_menus( 

	array(
		'top-menu' => 'Top Menu',
		'mobile-menu' => 'Moble Menu Location'
	)
 );

function my_silde()
{
	register_sidebar( 
		array(
			'name' =>'Page SideBar',
			'id' =>'page-sidebar',
			'befor_title' =>'<h4 class="widget-title">',
			'after_title'=>'</h4>'
		)
	 );

	register_sidebar( 
		array(
			'name' =>'Blog SideBar',
			'id' =>'blog-sidebar',
			'befor_title' =>'<h4 class="widget-title">',
			'after_title'=>'</h4>'
		)
	 );
}
add_action( 'widgets_init','my_silde');
add_image_size( 'blog-large',  800, 300, true);



// function pagination_tdc() {
//    if( is_singular() )
//    return;
//    global $wp_query;
//    /** Ngừng thực thi nếu có ít hơn hoặc chỉ có 1 bài viết */
//    if( $wp_query->max_num_pages <= 1 )
//    return;
//    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
//    $max = intval( $wp_query->max_num_pages );

//    /** Thêm page đang được lựa chọn vào mảng*/
//    if ( $paged >= 1 )
//    $links[] = $paged;
//    /** Thêm những trang khác xung quanh page được chọn vào mảng */
//    if ( $paged >= 3 ) {
//           $links[] = $paged - 1;
//           $links[] = $paged - 2;
//     }

//     if ( ( $paged + 2 ) <= $max ) {
//           $links[] = $paged + 2;
//           $links[] = $paged + 1;
//      }

// /** Hiển thị thẻ đầu tiên \n để xuống dòng code */
//  echo '<ul class="pagination">' . "\n";

//  /** Hiển thị link về trang trước */
//  if ( get_previous_posts_link() )
//  printf( '<li>%s</li>' . "\n", get_previous_posts_link('Trước') );

//  /** Nếu đang ở trang 1 thì nó sẽ hiển thị đoạn này */
//  if ( ! in_array( 1, $links ) ) {
//  $class = 1 == $paged ? ' class="active"' : '';
//  printf( '<li %s><a rel="nofollow" class="page larger" href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
//  if ( ! in_array( 2, $links ) )
//  echo '<li>…</li>';
//  }

//  /** Hiển thị khi đang ở một trang nào đó đang được lựa chọn */
//  sort( $links );
//  foreach ( (array) $links as $link ) {
//  $class = $paged == $link ? ' class="active"' : '';
//  printf( '<li%s><a rel="nofollow" class="page larger" href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
//  }

//  /** Hiển thị khi đang ở trang cuối cùng */
//  if ( ! in_array( $max, $links ) ) {
//  if ( ! in_array( $max - 1, $links ) )
//  echo '<li>…</li>' . "\n";
//  $class = $paged == $max ? ' class="active"' : '';
//  printf( '<li%s><a rel="nofollow" class="page larger" href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
//  }

//  /** Hiển thị link về trang sau */
//  if ( get_next_posts_link() )
//  printf( '<li>%s</li>' . "\n", get_next_posts_link('Sau') );
//  echo '</ul>' . "\n";
// }

add_action('wp_ajax_login','login_form');
add_action( 'wp_ajax_nopriv_login','login_form');

function login_form()
{
	global $wpdb;



	$formdata =[];

	wp_parse_str( $_POST['login'], $formdata );

	$sql = "select * from wp_users  where user_login =%d ";

	$data = $wpdb->get_row( $wpdb->prepare($sql,$formdata['username']), ARRAY_A);
     print_r($data);

	




	// $wpdb->insert('wp_users',array('user_login' =>$formdata['username'],'user_pass' =>$formdata['password'])); 
	// $jsi = json_encode($formdata);
	
	// wp_send_json_success($jsi);
		
}

function login_fontend()
{
	
	global $wpdb,$error;

	$sql = "select * from wp_users where user_login =%s";

	$result = $wpdb->get_row($wpdb->prepare($sql,$_POST['username']));

	if(empty($result)){

			$error = 'Tài khoản không tồn tại'; 

	}else{

    	$user = wp_authenticate($_POST['username'], $_POST['password']);


	    if(!is_wp_error( $user )){
	    	echo 1;
	    }else
	    {
	    	echo 2;
	    }

   }
     

}

add_action( 'admin_post_nopriv_login_form_hidden', 'login_fontend' );
add_action( 'admin_post_login_form_hidden', 'login_fontend' );


function validation_form()
{
	$errors = new WP_Error();

	if ( isset( $_POST[ 'username' ] ) && $_POST[ 'username' ] !== '' ) {
	  $errors->add( 'username', 'username khong duoc de trong' );
	}
	if ( isset( $_POST[ 'password' ] ) && $_POST[ 'password' ] == '' ) {
	  $errors->add('password', 'password khong duoc de trong' );
	}	

	return $error;
}


function register_form() {
	global $wpdb ,$error;

$error = validation_form();

if(empty($error->$error))
{
		$sql = array(
		'user_login' => sanitize_user( $_POST['username']),
		'user_pass' =>wp_hash_password($_POST['password']),
		'user_email' => $_POST['email'], 
	);

	if($wpdb->insert('wp_users',$sql)){
			wp_redirect( 'login');
	}else{
		echo"loi";
	}
}
 

return $errors;
}

// Use your hidden "action" field value when adding the actions
add_action( 'admin_post_nopriv_register_form_hidden', 'register_form' );
add_action( 'admin_post_register_form_hidden', 'register_form' );



