<?php require_once("includes/header.php"); ?>
<section id="content">
<h3>Welcome to your new Avalampch Dev Box!</h3>
<p>This box is all ready for you to develop a brand new website!</p>

<h3>File Structure</h3>
<strong>Avalampch</strong>
<ul>
    <li>ansible (<em>This is where the anisible configuration files live</em>)</li>
    <li>assets
        <ul>
            <li>css
                <ul>
                    <li>main.css (<em>this is where you should put your custom css</em>)</li>
                </ul>
            </li>
            <li>images (<em>This is where your images will be located</em>)</li>
            <li>javascript
                <ul>
                    <li>main.js (<em>this is where you should put your custom js</em>)</li>
                </ul>
            </li>
        </ul>
    </li>
    <li>includes
        <ul>
            <li>footer.php</li>
            <li>header.php</li>
            <li>nav.php</li>
            <li>sidebar.php</li>
            <li><em>These files are included using PHP.</em></li>
        </ul>
    </li>
    <li>index.php</li>
    <li>README.md</li>
    <li>Vagrantfile</li>
</ul>

</section><section id="sidebar">
    <?php require_once("includes/sidebar.php"); ?>
</section>
<?php require_once("includes/footer.php"); ?>