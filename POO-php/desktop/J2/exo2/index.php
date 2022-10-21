<?php

require_once "ToolBox/Figure.php";
require_once "ToolBox/Point.php";
require_once "ToolBox/Segment.php";
require_once "Model/Rectangle.php";

use Exo2\Model\Rectangle;
use Exo2\ToolBox\Point;
use Exo2\ToolBox\Segment;

$p = new Point("rose","point A",0.00,0.00);
echo $p;
echo $p->draw();

$p1 = new Point("rose", "Point B",0.00,4.8);
$p2 = new Point("rose","Point C", 5,0);



$s = new Segment("noir","Mon Premier Segment Super Sympa",[$p,$p1]);
$s = new Segment("noir","Longueure de mon suepr resctangle",[$p,$p2]);

$rect = new Rectangle("violet","Mon Premier Rectangle Top délire maga groove");
echo $s;
echo $s->draw();