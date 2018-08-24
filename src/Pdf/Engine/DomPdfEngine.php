<?php
namespace CakePdf\Pdf\Engine;



class DomPdfEngine extends AbstractPdfEngine
{

    /**
     * Generates Pdf from html
     *
     * @return string raw pdf data
     */
    public function output()
    {
        $defaults = [
            'fontCache' => TMP,
            'tempDir' => TMP,
        ];
        $options = (array)$this->getConfig('options') + $defaults;

        $DomPDF = $this->_createInstance($options);
        $DomPDF->setPaper($this->_Pdf->pageSize(), $this->_Pdf->orientation());
        $DomPDF = $this->_render($this->_Pdf, $DomPDF);

        return $this->_output($DomPDF);
    }

    /**
     * Creates the Dompdf instance.
     *
     * @param array $options The engine options.
     * @return 
     */
    protected function _createInstance($options)
    {
        return new DomPdfEngine($options);
    }

    /**
     * Renders the Dompdf instance.
     *
     * @param \CakePdf\Pdf\CakePdf $Pdf The CakePdf instance that supplies the content to render.
     * @param The Dompdf instance to render.
     * @return
     */
    protected function _render($Pdf, $DomPDF)
    {
        $DomPDF->loadHtml($Pdf->html());
        $DomPDF->render();

        return $DomPDF;
    }

    /**
     * Generates the PDF output.
     *
     * @param$DomPDF The Dompdf instance from which to generate the output from.
     * @return string
     */
    protected function _output($DomPDF)
    {
        return $DomPDF->output();
    }
}
