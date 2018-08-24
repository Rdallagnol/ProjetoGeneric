<?php
namespace CakePdf\Pdf\Engine;


class TcpdfEngine extends AbstractPdfEngine
{

    /**
     * Generates Pdf from html
     *
     * @return string raw pdf data
     */
    public function output()
    {
        $TCPDF = new TcpdfEngine($this->_Pdf->orientation(), 'mm', $this->_Pdf->pageSize());
        $TCPDF->AddPage();
        $TCPDF->writeHTML($this->_Pdf->html());

        return $TCPDF->Output('', 'S');
    }
}
