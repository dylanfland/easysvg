$svg = new EasySVG();
$svg->setFontSVG($svgFont->filename);
$svg->setFontSize(100);
$svg->setFontColor('#000000');
$svg->setLineHeight(0);
$svg->setUseKerning(true);
$svg->addText($demoText);
list($textWidth, $textHeight) = $svg->textDimensions($demoText);
$svgHeight = 200;
$pathHeight = 100;
$svgWidth = $textWidth * ($pathHeight / $textHeight);
$svg->addAttribute("viewbox", "0 0 $textWidth $textHeight");
$svg->addAttribute("height", $svgHeight."px");
$svg->addAttribute("width", $svgWidth."px");
$svg->addAttribute("height", $pathHeight."px");
$svg->addAttribute("preserveAspectRatio","none");