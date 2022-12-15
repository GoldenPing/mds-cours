<?php

require_once "ToolBox/Figure.php";
require_once "ToolBox/Point.php";
require_once "ToolBox/Segment.php";
require_once "ToolBox/Polygone.php";
require_once "Model/Rectangle.php";
require_once "Model/Cercle.php";

use Exo2\Model\Cercle;
use Exo2\Model\Rectangle;
use Exo2\ToolBox\Point;
use Exo2\ToolBox\Segment;

$p = new Point("rose","point A",0.00,0.00);
echo $p;
echo $p->draw();

$p1 = new Point("rose", "Point B",0.00,4.8);
$p2 = new Point("rose","Point C", 5,0);



$s = new Segment("noir","Mon Premier Segment Super Sympa",[$p,$p1]);
$s1 = new Segment("noir","Longueure de mon suepr resctangle",[$p,$p2]);
echo $s;
echo $s->draw();

$rect = new Rectangle("noir","Rectangle 1",[$s,$s1]);
echo $rect;
echo $rect->draw();

$cercle = new Cercle("yellow","Cercle en Bas",$p,$s);
echo $cercle;
echo $cercle->draw();