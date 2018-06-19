<?php

namespace Uspdev\Pdfgen {
    /*
     * Gera documento pdf a partir de template e objeto de dados
     */

    class Pdfgen
    {
        public function setTemplate($tpl)
        {
            $this->tpl = $tpl;
        }

        /*
         * @param array() $data É um array contendo objetos ou arrays associativos
         * se for objeto coloca direto no template
         * se for array associativo:
         * - o array tem de conter um objeto ou array de objetos
         * - o nome tem de começar com 'bloco_'
         * - o template tem de ter um bloco com mesmo nome do array associativo
         * - o bloco do template recebe um objeto com o nome do array sem o 'bloco_' inicial
         */
        public function setData($data)
        {
            $this->data = $data;
        }

        public function setHeaderImg($img, $width)
        {
            $this->headerImg = $img;
            $this->headerImgWidth = $width;
        }

        public function setFooter($footer)
        {
            $this->footer = $footer;
        }

        public function setFooterImg($img, $width)
        {
            $this->footerImg = $img;
            $this->footerImgWidth = $width;
        }

        public function parse()
        {
            $tpl = new \raelgc\view\Template($this->tpl);

            foreach ($this->data as $k => $prop) {
                /*                switch ($prop) {
                                    case is_object($prop):
                                        $tpl->$k = $prop;
                                        break;
                                    case (is_array($prop) && substr($k, 0, 6) == 'bloco_'):
                                        $obj = substr($k, 6);
                                        foreach ($prop as $val) {
                                            $tpl->$obj = $val;
                                            $tpl->block($k);
                                        }
                                        break;
                                    default:
                                        $tpl->$k = $prop;
                                        break;
                                }*/
                if (is_object($prop)) {
                    $tpl->$k = $prop;
                }
                if (is_array($prop) && substr($k, 0, 6) == 'bloco_') {
                    $obj = substr($k, 6);

                    foreach ($prop as $val) {
                        if (is_object($val)) {
                            try {
                                $tpl->$obj = $val;
                                $tpl->block($k);
                            } catch (Exception $e) {
                                echo $e;
                            }
                        } else if (is_array($val)) {
                            foreach ($val as $k => $v) {
                                $tpl->$k = $v;
                            }
                        }
                    }
                }
                if (!is_array($prop) && !is_object($prop)) {
                    $tpl->$k = $prop;
                }

            }
            $this->html = $tpl->parse();
            return $this->html;
        }

        public
        function getHTML()
        {
            if (empty($this->html)) {
                $this->parse();
            }

            $dom = new \DOMDocument();
            $dom->preserveWhiteSpace = false;
            $dom->formatOutput = true;
            $dom->loadHTML($this->html);
            $body = $dom->getElementsByTagName('body')->item(0);

            // vamos colocar a figura do cabeçalho
            if (!empty($this->headerImg)) {
                $header = $dom->createElement('img');
                $header->setAttribute('src', $this->headerImg);
                $header->setAttribute('width', $this->headerImgWidth * 4);
                $body->insertBefore($header, $body->firstChild);
            }

            // vamos colocar o rodapé (figura e texto)
            if (!empty($this->footer)) {
                $html = $dom->saveHTML();
                $footer = '<hr/><div class="footer">' . $this->footer . '</div>';
                $html = str_replace('</body>', $footer . '</body>', $html);
            } else {
                $html = $dom->saveHTML();
            }

            return $html;
        }

        public function pdfBuild($dest = 'I')
        {
            if (empty($this->html)) {
                $this->parse();
            }

            $pdf = new Mypdf(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

            $pdf->SetMargins(20, 30, 20); //PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT

            if ($this->headerImg) {
                $pdf->SetHeaderData($this->headerImg, $this->headerImgWidth); //logo, width
                $pdf->SetHeaderMargin(10); // diferente do padrão
            } else {
                $pdf->setPrintHeader(false);
            }

            if ($this->footer) {
                $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', 6));
                $pdf->setFooterData(array(128, 128, 128), array(128, 128, 128)); // text color, line color

                $pdf->mySetFooterData($this->footerImg, $this->footerImgWidth, $this->footer);
                $pdf->SetFooterMargin(15); // diferente do padrão
            } else {
                $pdf->setPrintFooter(false);
            }

            $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO); // se não setar o pdf fica esticado (com mais espaço entre linhas)
            $pdf->AddPage();
            $pdf->writeHTML($this->html, true, 0, true, 0);
            $pdf->Output('document.pdf', $dest);
        }
    }
}

namespace {

    function sexo($sexo, $m, $f)
    {
        if (strtolower($sexo) == 'm') return $m;
        if (strtolower($sexo) == 'f') return $f;
        return '';
    }

    function tipo($tipo, $m, $d) // mestrado ou doutorado
    {
        if (strtolower($tipo) == 'm') return $m;
        if (strtolower($tipo) == 'd') return $d;
        return '';
    }
}

