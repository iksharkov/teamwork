<?php include '/inc/env.php'; ?>
<!DOCTYPE html>
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="no-js ie8 lt-ie9" lang="en"> <![endif]-->
<!--[if IE 9]> <html class="no-js eq-ie9 ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <base href="<?php echo $basehref; ?>">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/styles1.css">
    <link rel="stylesheet" href="css/styles2.css">
    <?php if($page_title == 'Contacts') { ?>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCXSvNhrGGECmJMZKs3Ewbz32jVRvLTTq4&language=en"></script>
    <?php } ?>
    <script type="text/javascript">
        var currentPage = '<?php echo $page_title; ?>';
    </script>
</head>
<body>
    <div class="wrapper clearfix" role="main">
     <div class="logo ::after">
         <h1>Gridzilla</h1>
     </div>
     <input class="search-input" type="search" name="q" placeholder="Enter your search...">
     <div class="menu">
         <ul><a href="index.php">HOME</a></ul>
         <ul><a href="about.php">ABOUT</a></ul>
         <ul><a href="blog.php">BLOG</a></ul>
         <ul><a href="contacts.php">CONTACT</a></ul>
     </div>