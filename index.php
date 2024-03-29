<?php
session_start();
?>
<html lang="en-US"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Begin Jekyll SEO tag v2.7.1 -->
<title>JustClick | Its just about a Click</title>
<meta name="generator" content="Jekyll v3.9.0">
<meta property="og:title" content="omgamer.github.io">
<meta property="og:locale" content="en_US">
<link rel="canonical" href="http://itsjustclick.me/">
<meta property="og:url" content="http://itsjustclick.me/">
<meta property="og:site_name" content="JustClick">
<meta name="twitter:card" content="summary">
<meta property="twitter:title" content="omgamer.github.io">
<script type="application/ld+json">
{"url":"http://itsjustclick.me/","@type":"WebSite","headline":"omgamer.github.io","name":"JustClick","@context":"https://schema.org"}</script>
<!-- End Jekyll SEO tag -->


    <link rel="stylesheet" href="/assets/css/style.css?v=15e16a65f21a9a6564cc62bc9e9b6956f9cfdae3">
    <script src="/assets/js/scale.fix.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
  <body>
    <div class="wrapper">
      <header class="without-description">
          <?php
          if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
              echo "<a href='login.php'>Log in</a>";
          }
          else{
              echo htmlspecialchars($_SESSION["username"]);
              echo '<a href="logout.php" class="btn btn-danger ml-3">Logout</a>';
          }
          ?>

        <h1>JustClick</h1>
        
        <p class="view"><a href="https://github.com/omgamer/JustClick">View the Project on GitHub <small></small></a></p>
        <ul>
        
          <li><a href="https://github.com/omgamer/JustClick">View On <strong>GitHub</strong></a></li>
        </ul>
      </header>
      <section>

      <h1 id="omgamergithubio">work in progress</h1>


      </section>
    </div>
    <footer>
    
      <p>Project maintained by <a href="https://github.com/omgamer">JustClick Staff</a></p>
    
      <p></p>
    </footer>
    <!--[if !IE]><script>fixScale(document);</script><![endif]-->
  

</body></html>
