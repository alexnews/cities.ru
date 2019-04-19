<?php 
$p = (int) $_GET['p'];
$page_link = $_SERVER["PHP_SELF"] ;
$title = "Cheat Sheet";
$page_title ="Cheat Sheet";


if ($p==1) {
    $title = "MySQL";
    $file = "csv/mysql.csv";
} elseif ($p==2) {
    $title = "MSSQL";
    $file = "csv/mssql.csv";
} elseif ($p==3) {
    $title = "Cassandra";
    $file = "csv/cassandra.csv";   
} elseif ($p==4) {
    $title = "MongoDB";
    $file = "csv/mongodb.csv";     
} elseif ($p==5) {
    $title = "PostgeSQL";
    $file = "csv/postgresql.csv";
} elseif ($p==6) {
    $title = "CouchBase";
    $file = "csv/couchbase.csv"; 
} elseif ($p==7) {
    $title = "Redis";
    $file = "csv/redis.csv"; 
} elseif ($p==8) {
    $title = "HBASE";
    $file = "csv/hbase.csv"; 
} elseif ($p==11) {
    $title = "Git";
    $file = "csv/git.csv";
} elseif ($p==12) {
    $title = "Docker";
    $file = "csv/docker.csv";    
};

require_once("inc/head.php"); 
require_once("inc/menu.php"); 
?>
        
        <!--================Home Gallery Area =================-->
        <section class="home_gallery_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2><?php echo $page_title; ?> for <?php echo $title; ?></h2>
        			<p>Nobody can remember everything. (c) So I'm using this <?php echo $title; ?> cheet list for remind myself some commans</p>
        		</div>

        		<div class="isotope_fillter">
        			<ul class="gallery_filter list">
						<li class="active" data-filter="*"><a href="cheatsheet.php#">All</a></li>
						<li data-filter=".mysql"><a href="cheatsheet.php#">MySQL</a></li>
						<li data-filter=".mssql"><a href="cheatsheet.php#">MS SQL</a></li>
						<li data-filter=".cassandra"><a href="cheatsheet.php#">Cassandra</a></li>
						<li data-filter=".mongodb"><a href="cheatsheet.php#">MongoDB</a></li>
                        <li data-filter=".postgresql"><a href="cheatsheet.php#">PostgreSQL</a></li>
                        <li data-filter=".couchbase"><a href="cheatsheet.php#">CouchBase</a></li>                        
                        <li data-filter=".git"><a href="cheatsheet.php#">Git</a></li>
                        <li data-filter=".hbase"><a href="cheatsheet.php#">HBASE</a></li> 
                        <li data-filter=".redis"><a href="cheatsheet.php#">Redis</a></li> 
					</ul>
        		</div>
        	</div>
        	<div class="container">
        		<div class="gallery_f_inner row imageGallery1">
                    <div class="col-lg-4 col-md-4 col-sm-6 couchbase">
                        <div class="h_gallery_item">
                            <div class="g_img_item">
                                <img class="img-fluid" src="images/couchbase.jpg" alt="">
                                <a class="light" href="images/couchbase.jpg"><img src="img/gallery/icon.png" alt=""></a>
                            </div>
                            <div class="g_item_text">
                                <h4><a href="cheatsheet.php?p=6">CouchBase</a></h4>
                                <p>distributed multi-model NoSQL document-oriented database</p>
                            </div>
                        </div>
                    </div>
        			<div class="col-lg-4 col-md-4 col-sm-6 mongodb">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
        						<img class="img-fluid" src="images/mongodb.jpg" alt="">
        						<a class="light" href="images/mongodb.jpg"><img src="img/gallery/icon.png" alt=""></a>
        					</div>
        					<div class="g_item_text">
        						<h4><a href="cheatsheet.php?p=4">MongoDB</a></h4>
        						<p>Most popular NO SQL</p>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-4 col-sm-6 cassandra">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
        						<img class="img-fluid" src="images/cassandradb.jpg" alt="">
        						<a class="light" href="images/cassandradb.jpg"><img src="img/gallery/icon.png" alt="Cassandra"></a>
        					</div>
        					<div class="g_item_text">
        						<h4><a href="cheatsheet.php?p=3">Cassandra</a></h4>
        						<p>Apache Cassandra DB<</p>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-4 col-sm-6 mssql">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
        						<img class="img-fluid" src="images/mssql.jpg" alt="">
        						<a class="light" href="images/mssql.jpg"><img src="img/gallery/icon.png" alt="MS SQL"></a>
        					</div>
        					<div class="g_item_text">
        						<h4><a href="cheatsheet.php?p=2">MS SQL</a></h4>
        						<p>MicroSoft SQL Server</p>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-4 col-sm-6 mysql">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
        						<img class="img-fluid" src="images/mysql.jpg" alt="">
        						<a class="light" href="images/mysql.jpg"><img src="img/gallery/icon.png" alt="MySQL"></a>
        					</div>
        					<div class="g_item_text">
        						<h4><a href="cheatsheet.php?p=1">MySQL</a></h4>
        						<p>Most popular RDBMS</p>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-4 col-sm-6 postgresql">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
        						<img class="img-fluid" src="images/postgresql.jpg" alt="">
        						<a class="light" href="images/postgresql.jpg"><img src="img/gallery/icon.png" alt=""></a>
        					</div>
        					<div class="g_item_text">
        						<h4><a href="cheatsheet.php?p=5">PostgreSQL</a></h4>
        						<p>postgresql</p>
        					</div>
        				</div>
        			</div>
                    <div class="col-lg-4 col-md-4 col-sm-6 git">
                        <div class="h_gallery_item">
                            <div class="g_img_item">
                                <img class="img-fluid" src="images/git.jpg" alt="">
                                <a class="light" href="images/git.jpg"><img src="img/gallery/icon.png" alt=""></a>
                            </div>
                            <div class="g_item_text">
                                <h4><a href="cheatsheet.php?p=11">Git</a></h4>
                                <p>Version Control</p>
                            </div>
                        </div>
                    </div>
        			<div class="col-lg-4 col-md-4 col-sm-6 hbase">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
        						<img class="img-fluid" src="images/hbase.jpg" alt="">
        						<a class="light" href="images/hbase.jpg"><img src="img/gallery/icon.png" alt=""></a>
        					</div>
        					<div class="g_item_text">
        						<h4><a href="cheatsheet.php?p=8">HBASE</a></h4>
        						<p>HBASE</p>
        					</div>
        				</div>
        			</div>
                    <div class="col-lg-4 col-md-4 col-sm-6 redis">
                        <div class="h_gallery_item">
                            <div class="g_img_item">
                                <img class="img-fluid" src="images/redis.jpg" alt="">
                                <a class="light" href="images/redis.jpg"><img src="img/gallery/icon.png" alt=""></a>
                            </div>
                            <div class="g_item_text">
                                <h4><a href="cheatsheet.php?p=7">Redis</a></h4>
                                <p>Cache server</p>
                            </div>
                        </div>
                    </div>
        		</div>
        		<div class="more_btn">
        			<a class="main_btn" href="cheatsheet.php#">Load More Items</a>
        		</div>
        	</div>
        </section>
        <!--================End Home Gallery Area =================-->

            <section class="sample-text-area">
                <div class="container">
<?php
$i=0;
echo "<div class=\"progress-table\">\n";
$f = fopen($file, "r");
while (($line = fgetcsv($f)) !== false) {

    $row = $line[0];    // We need to get the actual row (it is the first element in a 1-element array)
    $row1 = $line[1];    // We need to get the actual row (it is the first element in a 1-element array)
    $row2 = $line[2];    // We need to get the actual row (it is the first element in a 1-element array)
    if ($i==0){
        echo "<div class=\"table-head\">";
        echo "<div class=\"percentage\">";
        print_r($row);
        echo "</div><div class=\"percentage\">\n";
        print_r($row1);
        echo "</div><div class=\"percentage\">\n";
        print_r($row2);
        echo "</div></div>\n";
        $i++;
    } else {
        echo "<div class=\"table-row\">";
        echo "<div class=\"percentage\">";
        print_r($row);
        echo "</div><div class=\"percentage\">\n";
        print_r($row1);
        echo "</div><div class=\"percentage\">\n";
        print_r($row2);
        echo "</div></div>\n";
    };
};
fclose($f);
echo "\n</div>";
?>
            </div>
        </section>
        
<?php 
require_once("inc/foot.php");
?> 