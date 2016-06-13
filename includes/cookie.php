<?php
if(ISSET($_COOKIE['jr-visit'])){
    $cookie=true;
    setcookie("visited","wlkm",time()+1209600);
}else{
    $cookie=false;
    setcookie("jr-visit","wlkm",time()+1209600);
}

$words=array();
$words['email']="email";
$words['lemail']="l'email";
$words['emails']="emails";
$words['mEmail']="EMAIL";
$words['mlEmail']="L'EMAIL";
$words['mEmails']="EMAILS";
$words['veille']="pige";
$words['mVeille']="PIGE";

$words['determinant']="l'";
$words['Determinant']="L'";
$words['DETERMINANT']="L'";
$words['email']="email";
$words['emails']="emails";
$words['Email']="Email";
$words['Emails']="Emails";
$words['EMAIL']="EMAIL";
$words['EMAILS']="EMAILS";

?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-31434082-15', 'auto');
  ga('send', 'pageview');

</script>
