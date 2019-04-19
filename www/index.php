<?php 

$title = "Alex Kargin website";
require_once('inc/head.php'); 
require_once('inc/me.php');
?>


        

        
        <!--================Welcome Area =================-->
        <section class="welcome_area p_120">
        	<div class="container">
        		<div class="row welcome_inner">
        			<div class="col-lg-6">
        				<div class="welcome_text">
        					<h4>About Myself</h4>
        					<p>Over eight years experience as a Database Administrator and Development working with MySQL/MariaDB, five years working with MongoDB, two years with PostgreSQL, one year with Oracle Databases and MS SQL on multiply UNIX/Linux and Microsoft Server platforms with MS SQL 2012-2016. Over two years experience as a System Engineer working with multiply UNIX/Linux and Microsoft Server platforms, systems/network architecture, installation, implementation, integration, security and administration with a programming background on php/python. Two years experience of applying MicroServices with Docker and Kubernetes to the QA/UAT/Development environment. Free years working with reporting, creating KPI reports through procedures. Knowledge of Big Data structure like Hadoop, Hive, Pig Latin and NoSQL Database Cassandra.</p>
        					<div class="row">
        						<div class="col-md-4">
        							<div class="wel_item">
        								<i class="lnr lnr-database"></i>
        								<h4>11</h4>
        								<p>Years of Mysql</p>
        							</div>
        						</div>
        						<div class="col-md-4">
        							<div class="wel_item">
        								<i class="lnr lnr-book"></i>
        								<h4>16</h4>
        								<p>Years of IT</p>
        							</div>
        						</div>
        						<div class="col-md-4">
        							<div class="wel_item">
        								<i class="lnr lnr-diamond"></i>
        								<h4>5</h4>
        								<p>Projects</p>
        							</div>
        						</div>
        					</div>
        					<div class="row">
        						<div class="col-md-4">
        							<div class="wel_item">
        								<i class="lnr lnr-users"></i>
        								<h4><?php echo $today ?></h4>
        								<p>Today views</p>
        							</div>
        						</div>
        						<div class="col-md-4">
        							<div class="wel_item">
        								<i class="lnr lnr-users"></i>
        								<h4><?php echo $total ?></h4>
        								<p>Total views</p>
        							</div>
        						</div>
        						<div class="col-md-4">
        							<div class="wel_item">
        								<i class="lnr lnr-user"></i>
        								<h4><?php echo $views ?></h4>
        								<p>On site</p>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-6">
        				<div class="tools_expert">
        					<div class="skill_main">
								<div class="skill_item">
									<h4>After Effects <span class="counter">85</span>%</h4>
									<div class="progress_br">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"></div>
										</div>
									</div>
								</div>
								<div class="skill_item">
									<h4>MySQL <span class="counter">90</span>%</h4>
									<div class="progress_br">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
										</div>
									</div>
								</div>
								<div class="skill_item">
									<h4>Docker <span class="counter">50</span>%</h4>
									<div class="progress_br">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
										</div>
									</div>
								</div>
								<div class="skill_item">
									<h4>MSSQL <span class="counter">45</span>%</h4>
									<div class="progress_br">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"></div>
										</div>
									</div>
								</div>
								<div class="skill_item">
									<h4>PHP <span class="counter">70</span>%</h4>
									<div class="progress_br">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
										</div>
									</div>
								</div>
								<div class="skill_item">
									<h4>Python <span class="counter">50</span>%</h4>
									<div class="progress_br">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
										</div>
									</div>
								</div>
								<div class="skill_item">
									<h4>devOps <span class="counter">65</span>%</h4>
									<div class="progress_br">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%;"></div>
										</div>
									</div>
								</div>
							</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Welcome Area =================-->
        
        <!--================My Tabs Area =================-->
        <section class="mytabs_area p_120">
        	<div class="container">
        		<div class="tabs_inner">
					<ul class="nav nav-tabs" id="myTab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="home-tab" data-toggle="tab" href="/index.php#home" role="tab" aria-controls="home" aria-selected="true">My Experiences</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="profile-tab" data-toggle="tab" href="/index.php#profile" role="tab" aria-controls="profile" aria-selected="false">My Education</a>
						</li>
					</ul>
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
							<ul class="list">
								<li>
									<span></span>
									<div class="media">
										<div class="d-flex">
											<p>Nov 2015 to Present</p>
										</div>
										<div class="media-body">
											<h4><a href="https://managedmaint.com" rel="_nofollow">Managed Maintenance Inc</a></h4>
											<p>Data Engineer <br>Boca Raton, Florida</p>
										</div>
									</div>
								</li>
								<li>
									<span></span>
									<div class="media">
										<div class="d-flex">
											<p>May 2014 - Nov 2015</p>
										</div>
										<div class="media-body">
											<h4><a href="https://liveintent.com" rel="_nofollow">LiveIntent Inc</a></h4>
											<p>Database Engineer <br>New York</p>
										</div>
									</div>
								</li>
								<li>
								<span></span>
									<div class="media">
										<div class="d-flex">
											<p>Oct 2010 - May 2014</p>
										</div>
										<div class="media-body">
											<h4><a href="http://apostille.us" rel="_nofollow">A&M Logos International Inc</a></h4>
											<p>Database Architect <br>New York</p>
										</div>
									</div>
								</li>
							</ul>
						</div>
						<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
							<ul class="list">
								<li>
									<span></span>
									<div class="media">
										<div class="d-flex">
											<p>March 2017 to present</p>
										</div>
										<div class="media-body">
											<h4>Colorlib</h4>
											<p>Senior Web Developer <br>Santa monica, Los angeles</p>
										</div>
									</div>
								</li>
								<li>
									<span></span>
									<div class="media">
										<div class="d-flex">
											<p>March 2017 to present</p>
										</div>
										<div class="media-body">
											<h4>Colorlib</h4>
											<p>Senior Web Developer <br>Santa monica, Los angeles</p>
										</div>
									</div>
								</li>
								<li>
								<span></span>
									<div class="media">
										<div class="d-flex">
											<p>March 2017 to present</p>
										</div>
										<div class="media-body">
											<h4>Colorlib</h4>
											<p>Senior Web Developer <br>Santa monica, Los angeles</p>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
        		</div>
        	</div>
        </section>
        <!--================End My Tabs Area =================-->
        
        <!--================Feature Area =================-->
        <section class="feature_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2>My Expertise</h2>
        		</div>
        		<div class="feature_inner row">
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
        					<i class="flaticon-city"></i>
        					<h4><a href="cheatsheet.php?p=1">MySQL</a></h4>
        					<p>MySQL is the world's most popular open source database. With its proven performance, reliability, and ease-of-use</p>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
        					<i class="flaticon-skyline"></i>
        					<h4>Business Analytics</h4>
        					<p>is “the study of data through statistical and operations analysis, the formation of predictive models, application of optimization techniques.</p>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
        					<i class="flaticon-sketch"></i>
        					<h4><a href="cheatsheet.php?p=12">Docker</a></h4>
        					<p>is a container technology for Linux that allows a developer to package up an application with all of the parts it needs.</p>
        				</div>
        			</div>
        		</div>
                        <div class="main_title">

                        </div>
                        <div class="feature_inner row">
                                <div class="col-lg-4 col-md-6">
                                        <div class="feature_item">
                                                <i class="flaticon-city"></i>
                                                <h4>MariaDB</h4>
                                                <p>MariaDB, the most popular Open Source SQL database management system since MySQL acquisition by Oracle Corporation, is developed, distributed, and supported by community.</p>
                                        </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                        <div class="feature_item">
                                                <i class="flaticon-skyline"></i>
                                                <h4>devOps</h4>
                                                <p>DevOps is the combination of cultural philosophies, practices, and tools that increases an organization's ability to deliver applications and services at high velocity.<!--: evolving and improving products at a faster pace than organizations using traditional software development and infrastructure management processes.--></p>
                                        </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                        <div class="feature_item">
                                                <i class="flaticon-sketch"></i>
                                                <h4>MS SQL</h4>
                                                <p>MS SQL Server is a relational database management system (RDBMS) developed by Microsoft. This product is built for the basic function of storing retrieving data as required by other applications. It can be run either on the same computer or on another across a network.</p>
                                        </div>
                                </div>
                        </div>

        	</div>
        </section>
        <!--================End Feature Area =================-->
        
        <!--================Home Gallery Area =================-->
        <section class="home_gallery_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h1>Positions</h1>
        			<h2>Managed Maintenance Inc</h2>
        			<h3>Database Engineer</h3>
        			<h5>November 2015 - Present</h5>
        			<p>Normalize RDBMS; Participated in the development of new products; Creation of Data Warehouse (OLAP) with Triggers, Procedures, and ETL scripts; Support of ETL processes through bash and T-SQL language; Architect and administrate MySQL/MariaDB/MongoDB/MSSQL; Developing and supporting production, QA and development MySQL databases; Responsible monitoring and optimizing database performance and capacity planning; Importing/Exporting data from and to xml/csv/txt/tsv files with and without ETL; Trace the slow running queries and optimize SQL queries for improved performance and availability; Managing server instances (AWS RDS), disaster recovery, replication and cluster; Developing and supporting database replication and clustering, and plan and execute for database scalability; Working with application engineers, developers and the QA team as well as applications support teams in the maintenance and care of the Linux Network and Database infrastructure; Applying Docker/Containerization technologies; Supporting Redis; Supporting Business with Data Analytics queries;</p>
        			<h2>LiveIntent Inc</h2>
        			<h4>MySQL DBA/Developer</h4>
        			<p>Participated in the development of new product; Analyzing current environment & languageing workable in-house solutions; Understand core systems and data processes for normalization, data validation, data aggregation, and customized reporting and migrations to the new product; Identifying & building tools to assist in database and transactional processing (i.e. Store Procedures, Triggers, etc.); Worked on language and development of Relational Database Management System (RDBMS) and reduce the redundancy by data normalization. Migrated high-volume fields from MySQL to the Elasticsearch in order to get easy access and high speed users search; Traces the slow running queries and optimize SQL queries for improved performance and availability; Managing MySQL servers instances (AWS), disaster recovery and replication; Creating Data Warehouse with Triggers, Procedures and ETL; Creating Data Marts through views for different departments</p>
        		</div>
        		<div class="isotope_fillter">
        			<ul class="gallery_filter list">
						<li class="active" data-filter="*"><a href="/index.php#">All</a></li>
						<li data-filter=".rdbms"><a href="/index.php#">RDBMS</a></li>
						<li data-filter=".devops"><a href="/index.php#">DevOps</a></li>
						<li data-filter=".bigdata"><a href="/index.php#">Big Data</a></li>
						<li data-filter=".language"><a href="/index.php#">Language</a></li>
					</ul>
        		</div>
        	</div>
        	<div class="container">
        		<div class="gallery_f_inner row imageGallery1" style="position: relative; height: 930px;">
        			<div class="col-lg-4 col-md-4 col-sm-6 rdbms print" style="position: absolute; left: 0px; top: 0px;">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
        						<img class="img-fluid" src="images/mysql.jpg" alt="">
        						<a class="light" href="images/mysql.jpg"><img src="assets/icon.png" alt=""></a>
        					</div>
        					<div class="g_item_text">
        						<h4>MySQL</h4>
        						<p>Most popular</p>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-4 col-sm-6 rdbms print" style="position: absolute; left: 0px; top: 0px;">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
        						<img class="img-fluid" src="images/mssql.jpg" alt="">
        						<a class="light" href="images/mssql.jpg"><img src="assets/icon.png" alt=""></a>
        					</div>
        					<div class="g_item_text">
        						<h4>MS SQL</h4>
        						<p>Microsoft SQL Server</p>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-4 col-sm-6 rdbms" style="position: absolute; left: 390px; top: 0px;">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
        						<img class="img-fluid" src="images/mariadb.jpg" alt="">
        						<a class="light" href="images/mariadb.jpg"><img src="assets/icon.png" alt=""></a>
        					</div>
        					<div class="g_item_text">
        						<h4>MariaDB</h4>
        						<p>Open Source RDBMS</p>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-4 col-sm-6 rdbms print" style="position: absolute; left: 780px; top: 0px;">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
        						<img class="img-fluid" src="images/perconadb.jpg" alt="">
        						<a class="light" href="images/perconadb.jpg"><img src="assets/icon.png" alt=""></a>
        					</div>
        					<div class="g_item_text">
        						<h4>Percona DB</h4>
        						<p>Most Stable DB</p>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-4 col-sm-6 rdbms print" style="position: absolute; left: 0px; top: 465px;">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
        						<img class="img-fluid" src="images/auroradb.jpg" alt="">
        						<a class="light" href="images/auroradb.jpg"><img src="assets/icon.png" alt=""></a>
        					</div>
        					<div class="g_item_text">
        						<h4>AuroraDB</h4>
        						<p>Amazon RDBMS</p>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-4 col-sm-6 bigdata language" style="position: absolute; left: 390px; top: 465px;">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
        						<img class="img-fluid" src="images/mongodb.jpg" alt="">
        						<a class="light" href="images/mongodb.jpg"><img src="assets/icon.png" alt=""></a>
        					</div>
        					<div class="g_item_text">
        						<h4>MongoDB</h4>
        						<p>Most popular NO SQL</p>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-4 col-sm-6 bigdata" style="position: absolute; left: 780px; top: 465px;">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
        						<img class="img-fluid" src="images/cassandradb.jpg" alt="">
        						<a class="light" href="images/cassandradb.jpg"><img src="assets/icon.png" alt=""></a>
        					</div>
        					<div class="g_item_text">
        						<h4>Cassandra</h4>
        						<p>Apache Cassandra DB</p>
        					</div>
        				</div>
        			</div>
         			<div class="col-lg-4 col-md-4 col-sm-6 bigdata" style="position: absolute; left: 780px; top: 465px;">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
        						<img class="img-fluid" src="images/hbase.jpg" alt="">
        						<a class="light" href="images/hbase.jpg"><img src="assets/icon.png" alt=""></a>
        					</div>
        					<div class="g_item_text">
        						<h4>HBASE</h4>
        						<p></p>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-4 col-sm-6 bigdata" style="position: absolute; left: 780px; top: 465px;">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
        						<img class="img-fluid" src="images/couchbase.jpg" alt="">
        						<a class="light" href="images/couchbase.jpg"><img src="assets/icon.png" alt=""></a>
        					</div>
        					<div class="g_item_text">
        						<h4>Couchbase</h4>
        						<p>distributed multi-model NoSQL document-oriented database</p>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-4 col-sm-6 bigdata" style="position: absolute; left: 780px; top: 465px;">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
        						<img class="img-fluid" src="images/redis.jpg" alt="">
        						<a class="light" href="images/redis.jpg"><img src="assets/icon.png" alt=""></a>
        					</div>
        					<div class="g_item_text">
        						<h4>Redis</h4>
        						<p>Cache server</p>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-4 col-sm-6 language" style="position: absolute; left: 780px; top: 465px;">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
        						<img class="img-fluid" src="images/php.jpg" alt="">
        						<a class="light" href="images/php.jpg"><img src="assets/icon.png" alt=""></a>
        					</div>
        					<div class="g_item_text">
        						<h4>PHP</h4>
        						<p>Web language</p>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-4 col-sm-6 language" style="position: absolute; left: 780px; top: 465px;">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
        						<img class="img-fluid" src="images/python.jpg" alt="">
        						<a class="light" href="images/python.jpg"><img src="assets/icon.png" alt=""></a>
        					</div>
        					<div class="g_item_text">
        						<h4>Python</h4>
        						<p>High-level programming language</p>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-4 col-sm-6 language" style="position: absolute; left: 780px; top: 465px;">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
        						<img class="img-fluid" src="images/tsql.jpg" alt="">
        						<a class="light" href="images/tsql.jpg"><img src="assets/icon.png" alt=""></a>
        					</div>
        					<div class="g_item_text">
        						<h4>T-SQL</h4>
        						<p>Language of SQL</p>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-4 col-sm-6 devops" style="position: absolute; left: 780px; top: 465px;">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
        						<img class="img-fluid" src="images/git.jpg" alt="">
        						<a class="light" href="images/git.jpg"><img src="assets/icon.png" alt=""></a>
        					</div>
        					<div class="g_item_text">
        						<h4>Git</h4>
        						<p>Version Control</p>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-4 col-sm-6 devops" style="position: absolute; left: 780px; top: 465px;">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
        						<img class="img-fluid" src="images/jenkins.jpg" alt="">
        						<a class="light" href="images/jenkins.jpg"><img src="assets/icon.png" alt=""></a>
        					</div>
        					<div class="g_item_text">
        						<h4>Jenkins</h4>
        						<p>Automation server</p>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-4 col-sm-6 devops" style="position: absolute; left: 780px; top: 465px;">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
        						<img class="img-fluid" src="images/maven.jpg" alt="">
        						<a class="light" href="images/maven.jpg"><img src="assets/icon.png" alt=""></a>
        					</div>
        					<div class="g_item_text">
        						<h4>Maven</h4>
        						<p>software project management</p>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-4 col-sm-6 devops" style="position: absolute; left: 780px; top: 465px;">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
        						<img class="img-fluid" src="images/docker.jpg" alt="">
        						<a class="light" href="images/docker.jpg"><img src="assets/icon.png" alt=""></a>
        					</div>
        					<div class="g_item_text">
        						<h4>Docker</h4>
        						<p>Container Platform</p>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-4 col-sm-6 devops" style="position: absolute; left: 780px; top: 465px;">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
        						<img class="img-fluid" src="images/kubernetes.jpg" alt="">
        						<a class="light" href="images/kubernetes.jpg"><img src="assets/icon.png" alt=""></a>
        					</div>
        					<div class="g_item_text">
        						<h4>Kubernetes</h4>
        						<p>Container Scheduling and Management</p>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-4 col-sm-6 devops" style="position: absolute; left: 780px; top: 465px;">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
        						<img class="img-fluid" src="images/nagios.jpg" alt="">
        						<a class="light" href="images/nagios.jpg"><img src="assets/icon.png" alt=""></a>
        					</div>
        					<div class="g_item_text">
        						<h4>Nagios</h4>
        						<p>IT Infrastructure Monitoring</p>
        					</div>
        				</div>
        			</div>
        			
        			<div class="col-lg-4 col-md-4 col-sm-6 devops" style="position: absolute; left: 780px; top: 465px;">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
        						<img class="img-fluid" src="images/selenium.jpg" alt="">
        						<a class="light" href="images/selenium.jpg"><img src="assets/icon.png" alt=""></a>
        					</div>
        					<div class="g_item_text">
        						<h4>Selenium</h4>
        						<p>Automates Browsers</p>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-4 col-sm-6 devops" style="position: absolute; left: 780px; top: 465px;">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
        						<img class="img-fluid" src="images/puppet.jpg" alt="">
        						<a class="light" href="images/puppet.jpg"><img src="assets/icon.png" alt=""></a>
        					</div>
        					<div class="g_item_text">
        						<h4>Puppet</h4>
        						<p>Configuration managment tools</p>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-4 col-sm-6 devops" style="position: absolute; left: 780px; top: 465px;">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
        						<img class="img-fluid" src="images/ansible.jpg" alt="">
        						<a class="light" href="images/ansible.jpg"><img src="assets/icon.png" alt=""></a>
        					</div>
        					<div class="g_item_text">
        						<h4>Ansible</h4>
        						<p>Simple IT Automation</p>
        					</div>
        				</div>
        			</div>        			
        		</div>
        		<div class="more_btn">
        			<a class="main_btn" href="/index.php#">Load More Items</a>
        		</div>
        	</div>
        </section>
        <!--================End Home Gallery Area =================-->

<?php require_once('inc/recommendations.php'); ?>


        
<?php require_once('inc/foot.php'); ?>