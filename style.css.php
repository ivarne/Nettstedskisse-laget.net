<?php
/*
* Dette er style fila.
* For å gjøre det lettere å skifte farger har jeg satt opp noen standard farger
* og parser fila gjennom php før den brukes
*/

header('Content-Type: text/css');
$farge1='#EE0000';
$farge2='#9D0200';
$farge3='#DDB70A';
$farge4='#4E5A0E';
$farge5='#FDF5D0';
$farge6='#75900D';

?>
/*
#9D0200
#EE0000
#DDB70A
#4E5A0E

#FDF5D0
#75900D
#F3E87F

background: #FFFFFF; /* for non-css3 browsers * /
filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#FDF5D0', endColorstr='#FFFFFF'); /* for IE * /
background: -webkit-gradient(linear, left top, left bottom, from(#FDF5D0), to(#FFFFFF)); /* for webkit browsers *m/
background: -moz-linear-gradient(top,  #FDF5D0,  #FFFFFF); /* for firefox 3.6+ * /

*/

div.header{
   background: #EE0000;
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#9D0200', endColorstr='#EE0000'); /* for IE */
	-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#9D0200, endColorstr=#EE0000)";
	background: url("data:image/svg+xml,%3C%3Fxml%20version%3D%221.0%22%20encoding%3D%22utf-8%22%3F%3E%0D%0A%3Csvg%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%0D%0A%3Cdefs%3E%0D%0A%20%20%3ClinearGradient%20id%3D%22grad%22%20x1%3D%220%22%20y1%3D%220%22%20x2%3D%220%22%20y2%3D%22100%25%22%3E%0D%0A%20%20%20%20%3Cstop%20offset%3D%220%22%20stop-color%3D%22%239D0200%22%20%2F%3E%0D%0A%20%20%20%20%3Cstop%20offset%3D%221%22%20stop-color%3D%22%23EE0000%22%20%2F%3E%0D%0A%20%20%3C%2FlinearGradient%3E%0D%0A%3C%2Fdefs%3E%0D%0A%3Crect%20x%3D%220%22%20y%3D%220%22%20width%3D%22100%25%22%20height%3D%22100%25%22%20style%3D%22fill%3Aurl(%23grad)%22%20%2F%3E%0D%0A%3C%2Fsvg%3E");/* Opera i form av et SVG bilde*/
	background: -moz-linear-gradient(top,  <?php echo $farge2?>, <?php echo $farge1?> ); /* for firefox 3.6+ */
   background: -webkit-gradient(linear, left top, left bottom, from(#9D0200), to(#EE0000)); /* for webkit browsers */
   margin-bottom:30px;
   padding-bottom:30px;
}


/* begin css tabs */
.tabnav { /* general settings */
   position:relative;
   margin: 0 0 0 0; /* set margins as desired */
   font: 30px verdana, arial, sans-serif; /* set font as desired */
   list-style-type: none;
   padding: 0px 0px 4px 20px; /* THIRD number must change with respect to padding-top (X) below */
}

.tabnav li { 
float:left;
padding: 4px 4px; /* set padding (tab size) as desired; FIRST number must change with respect to padding-top (X) above */
}
.tabnav a{
   text-decoration:none;
}

.tabnav:hover > li.active > a{
   background-color: #75900D;
}
.tabnav > li > a { 
padding: 4px 4px; 
color: #666;
background-color: #75900D; /* set unselected tab background color as desired */
-moz-border-radius:10px 10px 0px 0px;
-webkit-border-radius:10px 10px 0px 0px;
border-radius:10px 10px 0px 0px;
}

.tabnav li.active >a{
   color:#000;
   background-color: #FDF5D0;
}

.tabnav li:hover > a{ /* settings for hover effect */
background: <?php echo $farge5?>!important; /* set desired hover color */
}

.tabnav ul {
   display:none;
   position:absolute;
   font: 14px verdana, arial, sans-serif; /* set font as desired */
   list-style-type: none;
   top:44px;
   padding:10px 20px;
   left:10px;
   min-width:60%;
   background:<?php echo $farge5 ?>;
   -moz-border-radius:20px;
   -webkit-border-radius:20px;
   border-radius:20px;
}
.tabnav ul li{
   background:transparent !important;
   display:inline;
   position:relative;
   border:2px 2px solid #75900D;
   padding:0px;
}
.tabnav ul a{
   padding:10px 15px;
}

/*Vis undermenye for den aktive taben*/
.tabnav li.active ul{
   display:block;
}
/* Men skjul undermenyen for den aktive taben nå musa er over menyen*/
.tabnav:hover li.active ul{
   display:none;
}
/*Og vis heller den undermenyen som musa er over*/
.tabnav li:hover ul{
   display:block !important;
}

/* end css tabs */