<?php 
session_start();
require_once($_SERVER['DOCUMENT_ROOT'] . '/_config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>DMCA - <?=$websiteTitle?></title>
    
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="robots" content="index,follow" />
    <meta http-equiv="content-language" content="en" />
    <meta name="description"
        content="<?=$websiteTitle?> is a Free anime streaming website which you can watch English Subbed and Dubbed Anime online with No Account and Daily update. WATCH NOW!" />
    <meta name="keywords"
        content="anime to watch, watch anime,anime online, free anime online, online anime, anime streaming, stream anime online, english anime, english dubbed anime" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?=$websiteUrl?>/dmca" />
    <meta property="og:title" content="DMCA - <?=$websiteTitle?>" />
    <meta property="og:image" content="<?=$banner?>" />
    <meta property="og:description"  content="<?=$websiteTitle?> is a Free anime streaming website which you can watch English Subbed and Dubbed Anime online with No Account and Daily update. WATCH NOW!" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <link rel="apple-touch-icon" href="<?=$websiteUrl?>/public/logo/apple-touch-icon.png">
    <link rel="shortcut icon" href="<?=$websiteUrl?>/public/logo/favicon.png?v=<?=$version?>" type="image/x-icon"/>
    <link rel="apple-touch-icon" sizes="180x180" href="<?=$websiteUrl?>/public/logo/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=$websiteUrl?>/public/logo/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=$websiteUrl?>/public/logo/favicon-16x16.png">
    <link rel="mask-icon" href="<?=$websiteUrl?>/public/logo/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="icon" sizes="192x192" href="<?=$websiteUrl?>/public/logo/touch-icon-192x192.png?v=<?=$version?>">
    <link rel="stylesheet" href="<?=$websiteUrl?>/src/assets/css/styles.min.css?v=<?=$version?>">
    <link rel="stylesheet" href="<?=$websiteUrl?>/src/assets/css/min.css?v=<?=$version?>">
    <script>
    setTimeout(function() {
    const cssFiles = [
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css',
        'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css'
    ];
    const firstLink = document.getElementsByTagName('link')[0];
    cssFiles.forEach(file => {
        const link = document.createElement('link');
        link.rel = 'stylesheet';
        link.href = `${file}?v=<?=$version?>`;
        link.type = 'text/css';
        firstLink.parentNode.insertBefore(link, firstLink);
                });
        }, 500);
    </script>

    <noscript>
        <link rel="stylesheet" type="text/css"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
        <link rel="stylesheet" type="text/css"
            href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" />
    </noscript>


    <link rel="stylesheet" href="<?=$websiteUrl?>/src/assets/css/search.css">
    <script src="<?=$websiteUrl?>/src/assets/js/search.js"></script>
</head>

<body>
    <div id="sidebar_menu_bg"></div>

    <div id="wrapper">
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/src/component/header.php'); ?>
        <div class="clearfix"></div>
        <div id="main-wrapper" class="layout-page layout-page-infor">
            <div class="information_page">
                <div class="container">
                    <div class="information_page-wrap medium-page">
                        <div class="prebreadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?=$websiteUrl?>">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Terms and Conditions</li>
                                </ol>
                            </nav>
                        </div>
                        <article class="article-infor">
                            <h1 class="h2-heading"><?=$websiteTitle?> Anime Website Terms and Conditions of Use</h1>

                            <h2 class="h4-heading">1. Terms</h2>

                            <p>By accessing this Website, accessible from <?=$websiteUrl?>, you are agreeing to be bound
                                by these Website Terms and Conditions of Use and agree that you are responsible for the
                                agreement with any applicable local laws. If you disagree with any of these terms, you
                                are prohibited from accessing this site. The materials contained in this Website are
                                protected by copyright and trade mark law.</p>

                            <h2 class="h4-heading">2. Use License</h2>

                            <p>Permission is granted to temporarily download one copy of the materials on <?=$websiteTitle?> Anime's
                                Website for personal, non-commercial transitory viewing only. This is the grant of a
                                license, not a transfer of title, and under this license you may not:</p>

                            <ul>
                                <li>modify or copy the materials;</li>
                                <li>use the materials for any commercial purpose or for any public display;</li>
                                <li>attempt to reverse engineer any software contained on <?=$websiteTitle?> Anime's Website;</li>
                                <li>remove any copyright or other proprietary notations from the materials; or</li>
                                <li>transferring the materials to another person or "mirror" the materials on any other
                                    server.</li>
                            </ul>

                            <p>This will let <?=$websiteTitle?> Anime to terminate upon violations of any of these restrictions. Upon
                                termination, your viewing right will also be terminated and you should destroy any
                                downloaded materials in your possession whether it is printed or electronic format.
                                These Terms of Service has been created with the help of the <a
                                    href="https://www.termsofservicegenerator.net">Terms Of Service Generator</a> and
                                the <a href="https://www.generateprivacypolicy.com">Privacy Policy Generator</a>.</p>

                            <h2 class="h4-heading">3. Disclaimer</h2>

                            <p>All the materials on <?=$websiteTitle?> Anime’s Website are provided "as is". <?=$websiteTitle?> Anime makes no
                                warranties, may it be expressed or implied, therefore negates all other warranties.
                                Furthermore, <?=$websiteTitle?> Anime does not make any representations concerning the accuracy or
                                reliability of the use of the materials on its Website or otherwise relating to such
                                materials or any sites linked to this Website.</p>

                            <h2 class="h4-heading">4. Limitations</h2>

                            <p><?=$websiteTitle?> Anime or its suppliers will not be hold accountable for any damages that will arise
                                with the use or inability to use the materials on <?=$websiteTitle?> Anime’s Website, even if <?=$websiteTitle?>
                                Anime or an authorize representative of this Website has been notified, orally or
                                written, of the possibility of such damage. Some jurisdiction does not allow limitations
                                on implied warranties or limitations of liability for incidental damages, these
                                limitations may not apply to you.</p>

                            <h2 class="h4-heading">5. Revisions and Errata</h2>

                            <p>The materials appearing on <?=$websiteTitle?> Anime’s Website may include technical, typographical, or
                                photographic errors. <?=$websiteTitle?> Anime will not promise that any of the materials in this
                                Website are accurate, complete, or current. <?=$websiteTitle?> Anime may change the materials
                                contained on its Website at any time without notice. <?=$websiteTitle?> Anime does not make any
                                commitment to update the materials.</p>

                            <h2 class="h4-heading">6. Links</h2>

                            <p><?=$websiteTitle?> Anime has not reviewed all of the sites linked to its Website and is not responsible
                                for the contents of any such linked site. The presence of any link does not imply
                                endorsement by <?=$websiteTitle?> Anime of the site. The use of any linked website is at the user’s
                                own risk.</p>

                            <h2 class="h4-heading">7. Site Terms of Use Modifications</h2>

                            <p><?=$websiteTitle?> Anime may revise these Terms of Use for its Website at any time without prior
                                notice. By using this Website, you are agreeing to be bound by the current version of
                                these Terms and Conditions of Use.</p>

                            <h2 class="h4-heading">8. Your Privacy</h2>

                            <p>Please read our Privacy Policy.</p>

                            <h2 class="h4-heading">9. Governing Law</h2>

                            <p>Any claim related to <?=$websiteTitle?> Anime's Website shall be governed by the laws of bq without
                                regards to its conflict of law provisions.</p>
                        </article>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/src/component/footer.php'); ?>
    </div>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
        <script type="text/javascript" src="<?=$websiteUrl?>/src/assets/js/app.js"></script>
        <script type="text/javascript" src="<?=$websiteUrl?>/src/assets/js/comman.js"></script>
        <script type="text/javascript" src="<?=$websiteUrl?>/src/assets/js/movie.js"></script>
        <link rel="stylesheet" href="<?=$websiteUrl?>/src/assets/css/jquery-ui.css">
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script type="text/javascript" src="<?=$websiteUrl?>/src/assets/js/function.js"></script>

</body>

</html>