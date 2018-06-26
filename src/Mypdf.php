<?php

namespace Uspdev\Pdfgen {


    class Mypdf extends \setasign\Fpdi\TcpdfFpdi
    {
        public function Header()
        {
            $this->Image($this->header_logo, '', '', $this->header_logo_width);
        }

        public function mySetFooterData($img, $width, $html)
        {
            $this->footerImg = $img;
            $this->footerImgWidth = $width; // para o logo USP é 25
            $this->footerHtml = $html;
        }

        public function Footer()
        {
            $this->setLineStyle(array('width' => 0.5, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => $this->footer_line_color));
            $this->SetTextColorArray($this->footer_text_color);
            $this->writeHTMLCell(0, 0, '', '', $this->footerHtml, 'T', 0, 0, true, 'C');

            // para imagem
            $x = 210 - $this->footerImgWidth - 20;
            $y = 297 - $this->getFooterMargin() + 1;// vamos abaixar um pouco a imagem
            $this->Image($this->footerImg, $x, $y, $this->footerImgWidth);
        }
    }
}



