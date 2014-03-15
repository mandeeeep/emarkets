<div class="middle">
    <div class="m_left">
        <fieldset>
            <legend>So! Where to?</legend>
            <table>
                <ul>
                    <tr>
                        <td><li><a href="<?= $path ?>intro.php">Home</a></li></td>
                    <td><li><a href="<?= $path ?>search.php">Search</a></li></td>
                    <td><li><a href="<?= $path ?>aboutus.php">About Us</a></li></td>
                    </tr>
                </ul>
            </table>
        </fieldset>
    </div>

    <div class="m_user">
        <fieldset><legend>Howdy!
                <?php
                require "includes/connect.php";
                session_start();
                if (isset($_SESSION[email])) {
                    $em=$_SESSION['email'];
                    $q = "SELECT first_name FROM registration WHERE email='$em'";
//                    echo $_SESSION[email];
                    $result = mysql_query($q, $connect);
                    $nam = mysql_fetch_array($result);
                    echo $nam[0];
                } else {
                    echo "Guest";
                }
                ?></legend>
            <table>
                <tr><ul>
                    <td><li><a href="<?= $path ?>profile.php">Profile</a></li></td>
                    <td><li><a href="<?= $path ?>mem_items.php">My Items</a></li></td>
                    <td><li><a href="<?= $path ?>insert_item.php">Insert Items</a></li></td>
                    <td><li><a href="<?= $path ?>setting.php">Settings</a></li></td>
                </ul></tr>
            </table>
        </fieldset>
    </div>

    <div class="m_middle">
        <fieldset><legend>Member? Get in!</legend>
            <ul>
                <li><a href="<?= $path ?>login_mem.php">Okay! </a></li>
            </ul>
        </fieldset>
    </div>

    <div class="m_reg">
        <fieldset><legend>Not a member?</legend>
            <ul>
                <li><a href="<?= $path ?>reg.php">Join in!</a></li>
            </ul>
        </fieldset>
    </div>

    <div class="m_right">
        <fieldset><legend>I am tired!</legend>
            <ul>
                <li><a href="<?= $path ?>logout.php">Gotta Go!</a></li>
            </ul>
        </fieldset>
    </div>
</div>
