<?php
/*
Template Name: Code
*/
get_header();

$p_thumbnail = get_field('project_thumbnail');
$p_title = get_field('project_title');
$p_description =  get_field('project_description');
 ?>
 <head>
   <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Bungee+Shade&family=DM+Serif+Display:ital@0;1&family=Dawning+of+a+New+Day&family=Open+Sans:ital,wght@0,400;1,700&family=Rubik&display=swap" rel="stylesheet">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&family=Playfair+Display&family=Roboto&display=swap" rel="stylesheet">
 </head>

<!-- this is the header -->
<div class="header">
  <div class="header__bg"></div>
    <h1 class="header__left"> Arden </h1>
    <ul class="header__right">
      <?php
        wp_list_pages(array(
       'title_li' => NULL));
       ?>
    </ul>
    <div class="space"></div>
</div>
<!-- end header -->

<body>
<div class="post">
 <!-- Begin custom fields content -->
  <h2> <?php the_field('project_title'); ?> </h2>
  <p> <?php the_field('project_description'); ?> </p>
  <img src="<?php the_field('project_thumbnail'); ?>" alt="" />
  <p>hello hello hello hello  hello hello hello hello  hello hello hello hello  hello hello hello hello hello hello hello hello  hello hello hello hello  hello hello hello hello  hello hello hello hello hello hello hello hello  hello hello hello hello  hello hello hello hello  hello hello hello hello hello hello hello hello  hello hello hello hello  hello hello hello hello  hello hello hello hello hello hello hello hello  hello hello hello hello  hello hello hello hello  hello hello hello hello hello hello hello hello  hello hello hello hello  hello hello hello hello  hello hello hello hello hello hello hello hello  hello hello hello hello  hello hello hello hello  hello hello hello hello hello hello hello hello  hello hello hello hello  hello hello hello hello  hello hello hello hello hello hello hello hello  hello hello hello hello  hello hello hello hello  hello hello hello hello hello hello hello hello  hello hello hello hello  hello hello hello hello  hello hello hello hello hello hello hello hello  hello hello hello hello  hello hello hello hello  hello hello hello hello hello hello hello hello  hello hello hello hello  hello hello hello hello  hello hello hello hello hello hello hello hello  hello hello hello hello  hello hello hello hello  hello hello hello hello hello hello hello hello  hello hello hello hello  hello hello hello hello  hello hello hello hello hello hello hello hello  hello hello hello hello  hello hello hello hello  hello hello hello hello hello hello hello hello  hello hello hello hello  hello hello hello hello  hello hello hello hello hello hello hello hello  hello hello hello hello  hello hello hello hello  hello hello hello hello hello hello hello hello  hello hello hello hello  hello hello hello hello  hello hello hello hello hello hello hello hello  hello hello hello hello  hello hello hello hello  hello hello hello hello hello hello hello hello  hello hello hello hello  hello hello hello hello  hello hello hello hello hello hello hello hello  hello hello hello hello  hello hello hello hello  hello hello hello hello hello hello hello hello  hello hello hello hello  hello hello hello hello  hello hello hello hello hello hello hello hello  hello hello hello hello  hello hello hello hello  hello hello hello hello hello hello hello hello  hello hello hello hello  hello hello hello hello  hello hello hello hello hello hello hello hello  hello hello hello hello  hello hello hello hello  hello hello hello hello hello hello hello hello  hello hello hello hello  hello hello hello hello  hello hello hello hello hello hello hello hello  hello hello hello hello  hello hello hello hello  hello hello hello hello hello hello hello hello  hello hello hello hello  hello hello hello hello  hello hello hello hello hello hello hello hello  hello hello hello hello  hello hello hello hello  hello hello hello hello hello hello hello hello  hello hello hello hello  hello hello hello hello  hello hello hello hello
  </p>
</div>

</body>
<?php
get_footer();
 ?>
