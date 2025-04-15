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
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">DMCA</li>
                                </ol>
                            </nav>
                        </div>
                        <article class="article-infor">
                            <h1 class="h2-heading">DMCA takedown request requirements</h1>
                            <p>We take the intellectual property rights of others seriously and require that our Users
                                do
                                the same. The Digital Millennium Copyright Act (DMCA) established a process for
                                addressing
                                claims of copyright infringement. If you own a copyright or have authority to act on
                                behalf
                                of a copyright owner and want to report a claim that a third party is infringing that
                                material on or through GitLab's services, please submit a DMCA report on our Contact
                                page,
                                and we will take appropriate action.</p>
                            <p>&nbsp;</p>
                            <h2 class="h4-heading">DMCA Report requirements</h2>

                            <ul>
                                <li>A description of the copyrighted work that you claim is being infringed;</li>
                                <li>A description of the material you claim is infringing and that you want removed or
                                    access to which you want disabled and the URL or other location of that material;
                                </li>
                                <li>Your name, title (if acting as an agent), address, telephone number, and email
                                    address;</li>
                                <li>The following statement: <i>"I have a good faith belief that the use of the
                                        copyrighted material I am complaining of is not authorized by the copyright
                                        owner, its agent, or the law (e.g., as a fair use)"</i>;</li>
                                <li>The following statement: <i>"The information in this notice is accurate and, under
                                        penalty of perjury, I am the owner, or authorized to act on behalf of the owner,
                                        of the copyright or of an exclusive right that is allegedly infringed"</i>;</li>
                                <li>An electronic or physical signature of the owner of the copyright or a person
                                    authorized to act on the owner's behalf.</li>
                            </ul>
                            <p>&nbsp;</p>
                            <p>Your DMCA take down request should be submit here: <a
                                    href="mail:<?=$contactEmail?>"><?=$contactEmail?></a></p>
                            <p>We will then review your DMCA request and take proper actions, including removal of the
                                content from the website. </p>
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