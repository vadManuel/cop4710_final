<?php

session_start();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <link rel='icon' type='image/png' href='../media/favicon.png' />
        <link rel='manifest' href='../manifest.json' />
        <meta name='viewport' content='width=device-width, initial-scale=1'>

        <title>Register</title>
        <link href='../style/custom.css' rel='stylesheet' type='text/css'>
    </head>
    <body class='outer'>
        <div class='middle'>
            <div class='d-flex flex-column align-items-center justify-content-center flex-nowrap' style='height:100%'>
                <!-- Judge the professor for not letting me use bootstrap -->
                <a href='../' style='text-decoration:none;'>
                    <img style='height:140px;' src='../media/hua_logo.png' alt='' />
                </a>
                <!-- <div class='fs-14' style='padding-top:1rem;color:#8F9BB3;font-weight:bold;'>Sign In</div> -->
                
                <form action='../calls/register.php' method='post' autocomple='off' class='d-flex flex-column auth-form-container' style='padding:1rem 2rem;margin-top:3rem;'>
                    <input class='auth-input fullwidth fs-12' type='username' name='username' placeholder='+ Username' id='username' required>
                    <input class='auth-input fullwidth fs-12' style='margin-top:1rem;' type='email' name='email' placeholder='+ Email' id='email' required>
                    <input class='auth-input fullwidth fs-12' style='margin-top:1rem;' type='password' name='password' placeholder='+ Password' id='password' minlength='8' maxlength='20' required>

                    
                    <p class='fs-10 d-flex justify-content-end flex-row flex-wrap' style='color:red;margin-top:5px;'>
                        <span id='foo' style='display:none;'><?php echo $_SESSION['display_error']; ?></span>
                    </p> 

                    <?php
                        if (isset($_SESSION['display_error']) && !empty($_SESSION['display_error'])) {
                            echo '<script>document.getElementById("foo").style = "display:block"</script>';
                            // echo '<script>
                            //     window.setTimeout(() => { document.getElementById("foo").style = "display:block" }, 5000)
                            // </script>';
                        }
                    ?>

                    <button class='auth-button fullwidth fs-14' style='margin-top:4rem;border-radius:3px;' type='submit'>Sign Up</button>
                    <p class='fs-10' style='color:gray;text-align:center;margin-top:2rem;'>Already have an account? <a class='anchor' href='./signin.php'>Sign In</a></p>
                </form>
            </div>
        </div>
    </body>
</html>

<?php unset($_SESSION['display_error']); ?>
