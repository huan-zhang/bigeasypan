<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="google-site-verification" content="o3jPCEtOuwXe80BiF5Huxw5RMyLaNa1hGElSBrWCm_A" />

	<title><?php echo get_bloginfo("name"); ?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap-responsive.css" >
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php  wp_head();?>
</head>

<body>
	<div class="blog-masthead">
		<div class="container-fluid">
			<nav class="blog-nav">
				<a class="blog-nav-item active" href="<?php bloginfo( 'wpurl' );?>"><?php echo bloginfo("name");?></a>
				<?php foreach(get_categories(array('parent'=>1, 'hide_empty'=>true)) as $cat) : ?>
				<a class="blog-nav-item" href="<?php echo esc_url(get_category_link($cat->cat_ID)); ?>" ><?php echo $cat->name; ?></a>
				<?php endforeach; ?>
				<?php wp_list_pages( '&title_li=' ); ?>
			</nav>
		</div>
	</div>
	
	<div class="container">
	<!-- 
		<div class="blog-header">
			<h1 class="blog-title"><a href="<?php bloginfo( 'wpurl' );?>"><?php echo get_bloginfo("name"); ?></a></h1>
			<p class="lead blog-description"><?php echo get_bloginfo( 'description' ); ?></p>
		</div>
	 -->