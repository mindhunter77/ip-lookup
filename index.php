<!DOCTYPE html>
<html lang="en">
<head>
<title>Just your IP address, nothing else -- really.</title>
<meta name="description" content="No ads, no super-tools, just your ip address.">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="apple-touch-icon" sizes="180x180" href="https://justip-10ad.kxcdn.com/apple-touch-icon.png">
<link rel="icon" type="image/png" href="https://justip-10ad.kxcdn.com/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="https://justip-10ad.kxcdn.com/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="https://justip-10ad.kxcdn.com/manifest.json">
<link rel="mask-icon" href="https://justip-10ad.kxcdn.com/safari-pinned-tab.svg" color="#5bbad5">
<meta name="theme-color" content="#ffffff">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/clipboard.js/1.5.12/clipboard.min.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-83584206-1', 'auto');
  ga('send', 'pageview');

</script>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
	ga('send', 'event', 'action', 'hover', 'fire');
});
</script>
<script type='application/ld+json'> 
{
  "@context": "http://www.schema.org",
  "@type": "Website",
  "name": "Just The IP",
  "alternateName": "Ip address lookup",
  "thumbnailUrl": "https://justip-10ad.kxcdn.com/android-chrome-192x192.png",
  "about": "A simple page that shows your IP address",
  "url": "https://justtheip.com",
  "accountablePerson": "Chris Wilson",
  "datePublished": "2016-09-02",
  "inLanguage": "en",
  "isFamilyFriendly": "True"
}
 </script>
</script>
</head>
<body>
<div class="jumbotron text-center">
<div class="container"><p><h1><small><span class="glyphicon glyphicon-fire" data-toggle="tooltip" data-placement="auto left" title="thought I would spice things up around here, so I added some fire."></span> Your IP Address:</small><h1></p>
<h1><?php require('getip.php');?></h1><button class="btn btn-primary btn-xs" data-clipboard-text="<?php echo $user_ip ;?>">Copy</button>
<script>
var btns = document.querySelectorAll('button');
var clipboard = new Clipboard(btns);
clipboard.on('success', function(e) {
console.log(e);
ga('send', 'event', 'action', 'click', 'copy-text');
});
clipboard.on('error', function(e) {
console.log(e);
});
</script>
</body>
</html>