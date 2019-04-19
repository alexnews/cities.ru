<?php
$site="http://www.cities.ru";
header('Content-type: application/xml');

echo "<?xml version='1.0' encoding='UTF-8'?>"."\n";
echo "<urlset xmlns='http://www.sitemaps.org/schemas/sitemap/0.9'>"."\n";


?>

   <url>
      <loc><?php echo $site; ?></loc>
      <lastmod><? echo date("Y-m-d"); ?></lastmod>
      <changefreq>daily</changefreq>
      <priority>0.9</priority>
   </url>
   <url>
      <loc><?php echo $site; ?>/about-us.php</loc>
      <lastmod><? echo date("Y-m-d"); ?></lastmod>
      <changefreq>daily</changefreq>
      <priority>0.9</priority>
   </url>
   <url>
      <loc><?php echo $site; ?>/services.php</loc>
      <lastmod><? echo date("Y-m-d"); ?></lastmod>
      <changefreq>daily</changefreq>
      <priority>0.9</priority>
   </url>
   <url>
      <loc><?php echo $site; ?>/contact.php</loc>
      <lastmod><? echo date("Y-m-d"); ?></lastmod>
      <changefreq>daily</changefreq>
      <priority>0.9</priority>
   </url>
<?php
/*
    require_once('inc/db.php');
    $query = "SELECT `id` FROM `country`";
    $data = $conn->query($query)->fetchAll();
    foreach ($data as $row) {
      $id=$row['id'];
      echo "  <url>\n";
      echo "    <loc>$site</loc>\n";
      echo "    <lastmod>".date("Y-m-d")."</lastmod>\n";
      echo "    <changefreq>weekly</changefreq>\n";
      echo "    <priority>0.6</priority>\n";
      echo "  </url>\n";
    };
*/
?>
</urlset>
