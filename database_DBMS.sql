drop database `DBMS`;
CREATE DATABASE `DBMS`;
use `DBMS`;
DROP TABLE IF EXISTS `aboutme`;

CREATE TABLE `aboutme` (
  `id` int(9) NOT NULL,
  `body` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `aboutme` VALUES (3,'I am a good listener :).Sed pellentesque eros neque, at finibus dolor vestibulum nec. Nullam pellentesque neque rhoncus dignissim pretium. In lacinia ac arcu non vehicula. Nullam rhoncus et augue vitae condimentum. Duis bibendum bibendum faucibus. Duis pellentesque nisl in magna scelerisque, a dapibus eros vehicula. Vivamus suscipit, justo id blandit faucibus, ante nibh varius felis, sed tincidunt metus ante at neque. Nam volutpat justo vulputate euismod efficitur. Vivamus laoreet erat vitae velit hendrerit imperdiet ut vitae nisi. Nam et sem venenatis, rutrum diam ac, tincidunt eros. Vivamus sit amet turpis eu nisi facilisis placerat a eget lorem. '),(4,'Sed pellentesque eros neque, at finibus dolor vestibulum nec. Nullam pellentesque neque rhoncus dignissim pretium. In lacinia ac arcu non vehicula. Nullam rhoncus et augue vitae condimentum. Duis bibendum bibendum faucibus. Duis pellentesque nisl in magna scelerisque, a dapibus eros vehicula. Vivamus suscipit, justo id blandit faucibus, ante nibh varius felis, sed tincidunt metus ante at neque. Nam volutpat justo vulputate euismod efficitur. Vivamus laoreet erat vitae velit hendrerit imperdiet ut vitae nisi. Nam et sem venenatis, rutrum diam ac, tincidunt eros. Vivamus sit amet turpis eu nisi facilisis placerat a eget lorem.        ');




DROP TABLE IF EXISTS `blogs`;

CREATE TABLE `blogs` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `user` mediumint(9) DEFAULT NULL,
  `title` varchar(100) NOT NULL,
  `heading` varchar(200) NOT NULL,
  `profile` varchar(200) NOT NULL,
  `body` longtext NOT NULL,
  `image` varchar(200) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;


INSERT INTO `blogs` VALUES (1,3,'IIIT Allahabad','IIIT Allahabad - Best place for IT','iit2015124.ac.in','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur at egestas ex. Fusce convallis orci at elit volutpat vehicula. Suspendisse sed laoreet enim. Suspendisse et dui congue, commodo risus et, venenatis metus. Vivamus nec mollis eros, vitae tempus sapien. Etiam condimentum imperdiet quam sit amet pharetra. Sed ante nulla, consectetur at nisl sollicitudin, elementum consequat tellus. Proin accumsan nunc id erat lacinia placerat. Maecenas eget eros felis. Proin facilisis dolor purus, vitae dictum nisi pretium eget. Ut eget fringilla tortor. Phasellus vel feugiat odio. Proin sit amet rhoncus enim, sed consectetur ex. Sed iaculis tincidunt orci, vitae mollis purus ullamcorper eget. Fusce euismod nisl eu diam pellentesque, id pulvinar augue mollis. Aliquam vestibulum suscipit turpis, non pulvinar tellus placerat vel. ','images/users/img7.jpg','2017-04-26 11:21:22'),(2,3,'DBMS PROJECT','CMS (Content Management System)','iit2015124.ac.in','Vehicula auctor enim. Nunc tincidunt tristique tincidunt. Nullam maximus quis metus sagittis laoreet. Sed a quam vel augue interdum faucibus sed a elit. Cras sodales mattis dapibus. Vivamus vehicula elit quis dictum aliquet. Vestibulum congue convallis lacus, at vehicula metus ultrices Pellentesque. Etiam gravida sed orci sed consequat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed sed ex ut purus facilisis rhoncus sed ac enim. Aenean commodo sagittis neque lacinia tincidunt. Cras eget odio quis ipsum hendrerit ultrices id nec nulla. Curabitur accumsan et turpis eu rutrum.\r\n\r\nSed pellentesque eros neque, at finibus dolor vestibulum nec. Nullam pellentesque neque rhoncus dignissim pretium. In lacinia ac arcu non vehicula. Nullam rhoncus et augue vitae condimentum. Duis bibendum bibendum faucibus. Duis pellentesque nisl in magna scelerisque, a dapibus eros vehicula. Vivamus suscipit, justo id blandit faucibus, ante nibh varius felis, sed tincidunt metus ante at neque. Nam volutpat justo vulputate euismod efficitur. Vivamus laoreet erat vitae velit hendrerit imperdiet ut vitae nisi. Nam et sem venenatis, rutrum diam ac, tincidunt eros. Vivamus sit amet turpis eu nisi facilisis placerat a eget lorem.\r\n\r\nMaecenas eu metus nibh. Suspendisse dolor tellus, dapibus quis volutpat eget, ultrices semper dui. Praesent scelerisque condimentum purus, quis placerat purus efficitur eget. Suspendisse id ex quis nunc tincidunt mattis. Pellentesque leo arcu, tempor vitae ipsum sed, cursus auctor justo. Nunc ornare tristique ante at egestas. Vestibulum tincidunt neque augue, ut vestibulum ipsum aliquam eu. Suspendisse facilisis urna sit amet mi varius, sed tristique libero fringilla. Nulla vehicula, augue at egestas venenatis, odio erat viverra erat, scelerisque gravida lorem odio quis mauris. Maecenas gravida magna ac nulla malesuada, eu iaculis diam pellentesque. Pellentesque metus lectus, tempor eu accumsan eget, tempor eget massa. Sed ex mi, accumsan sit amet leo vel, bibendum aliquam urna. Etiam at augue massa. ','images/users/image10.jpg','2017-04-26 11:31:48');




DROP TABLE IF EXISTS `location`;

CREATE TABLE `location` (
  `id` int(9) NOT NULL,
  `country` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `institution` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `location` VALUES (3,'India','Allahabad','IIIT - Allahabad'),(4,'','','');




DROP TABLE IF EXISTS `pages`;

CREATE TABLE `pages` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `user` mediumint(9) NOT NULL,
  `slug` varchar(300) NOT NULL,
  `label` varchar(100) NOT NULL,
  `title` varchar(200) NOT NULL,
  `header` varchar(300) NOT NULL,
  `body` longtext NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user` (`user`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;




INSERT INTO `pages` VALUES (1,1,'home','Home','Home','Welcome to AtomCMS 2.0','<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>'),(2,3,'about-us','About','About Us','About AtomCMS','<img style=\"float:right; width:320px; height:240px; margin-left:10px;\" src=\"images/sample.jpg\">\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.');




DROP TABLE IF EXISTS `personal`;

CREATE TABLE `personal` (
  `id` mediumint(9) NOT NULL,
  `nick` varchar(200) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `birth` varchar(100) DEFAULT NULL,
  `image` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




INSERT INTO `personal` VALUES (3,'aayu','12345678','12-12-1997','images/users/goyal.jpg'),(4,'Rajjo','','','images/users/rajat1.jpg');





DROP TABLE IF EXISTS `social`;

CREATE TABLE `social` (
  `id` int(9) NOT NULL,
  `fb` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




INSERT INTO `social` VALUES (3,'https://www.facebook.com/profile.php?id=100009460799605','https://www.facebook.com/profile.php?id=100009460799605','https://www.facebook.com/profile.php?id=100009460799605'),(4,'','','');




DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `first` varchar(200) NOT NULL,
  `last` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `username` varchar(60) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;




INSERT INTO `users` VALUES (1,'Deepak','Yadav','yDeepak1889','1d604727e18296781623a6877c260c1f'),(2,'Deepak','Yadav','1d604727e18296781623a6877c260c1f','yDeepak1889'),(3,'Aayush','Goyal','1503eda8d9579434aeb8d217f5f03dcf','Aayush123'),(4,'Rajat bir','Singh','5f4dcc3b5aa765d61d8327deb882cf99','Rjt');



