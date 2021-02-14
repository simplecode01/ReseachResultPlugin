<?php
//This for the title and website
get_header();
?>
<?php
while(have_posts()){
    the_post();
    // echo '<h1>'.get_the_title().'</h1>';
    echo the_content();
}
?>
<?php
get_footer();
?>