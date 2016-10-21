<?php /* @var $urls */
    /* @var $host */
    echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <?php foreach($urls as $url): ?>
        <url>
            <loc><?= $host.$url['loc'] ?></loc>
            <?php if(isset($url['lastmod'])): ?>
                <lastmod><?= date(DATE_W3C, $url['lastmod']) ?></lastmod>
            <?php endif; ?>
        </url>
    <?php endforeach; ?>
</urlset>
