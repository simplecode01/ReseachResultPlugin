<?php
//This is archive
get_header();
?>
<h1>Reseacher Result Archive</h1>
<?php
while(have_posts()){
    the_post();
    echo '<a href="'.get_the_permalink().'">'.get_the_title().'</a><br>';
}
?>
<br>
<br>
<?php
get_footer();
?>