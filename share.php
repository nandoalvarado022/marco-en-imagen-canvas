<?php 
    $id=$_GET["id"];

?>

<html>
<head>
    <title>Personaliza tu foto con el marco de Carnaval</title>
    <!-- You can use Open Graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
    <meta property="og:url"           content="share.html" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Personaliza tu foto con el marco de Carnaval" />
    <meta property="og:description"   content="Personaliza tu foto con el marco de Carnaval" />
    <meta property="og:image"         content="share.php?id=<?php print $id?>.png" />
</head>
<body>

    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1";
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>