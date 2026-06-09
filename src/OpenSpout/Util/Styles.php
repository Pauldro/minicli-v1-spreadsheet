<?php namespace Pauldro\Minicli\Spreadsheet\OpenSpout\Util;
// Open Spout
use OpenSpout\Writer\Common\Creator\Style\BorderBuilder;
use OpenSpout\Common\Entity\Style\Color;
use OpenSpout\Common\Entity\Style\Border;
use OpenSpout\Common\Entity\Style\Style;


class Styles {
    public static function generateColumnHeaderStyles() : Style
    {
        $border = new BorderBuilder();
        $border->setBorderBottom(Color::BLACK, Border::WIDTH_THICK, Border::STYLE_SOLID);
        $border->build();

        $style = new Style();
        $style->setBorder($border->build());
        $style->setFontBold();
        $style->setFontSize(14);
        return $style;
    }
}