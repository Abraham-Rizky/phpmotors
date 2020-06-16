<img src="/phpmotors/images/site/logo.png" alt="PHP Motors Logo">
<?php if(isset($cookieFirstname)){
    echo "<span>Welcome, $cookieFirstname</span>";
} ?>


<?php
    if (isset($_SESSION['loggedin'])) {
        echo '<a id="account" href="/phpmotors/accounts/index.php?action=Logout" title="Logout from your session">Logout</a>';
    } else {
        echo '<a id="account" href="/phpmotors/accounts/?action=login" title="Go to your account">My Account</a>';
    }
?>