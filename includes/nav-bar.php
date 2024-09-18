<?php
// PHP store URL in a $
$currentUrl = $_SERVER['PHP_SELF'];
?>

<nav class="navbar navbar-expand navbar-dark bg-dark ">
    <?php $autor = 'DI'; ?>
    <a class="navbar-brand ms-4" href="#" onclick="document.getElementById('audio').play(); return false;"><?php echo $autor; ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-start" id="navbarSupportedContent">
        <?php
        // PHP break Elements into Element
        foreach ($navElements as $navElement) {
            // PHP insert 'active' by selecting curent page URL
            $activeClass = ($currentUrl == $navElement['link']) ? 'active' : '';
        ?>
            <a class="nav-link <?php echo $activeClass; ?> " href="<?php echo $navElement['link']; ?>">
                <?php echo $navElement['title']; ?>

            </a>
        <?php
        }
        ?>

    </div>
    <?php include './includes/search-form.php' ?>
</nav>

<!-- Audio file for fun -->
<audio id="audio" src="./audio/audio.mp3"></audio>