<?php
namespace CakePdf\Pdf\Engine;



class MpdfEngine extends AbstractPdfEngine
{

    /**
     * Generates Pdf from html
     *
     * @return string raw pdf data
     */
    public function output()
    {
        $orientation = $this->_Pdf->orientation() === 'landscape' ? 'L' : 'P';
        $format = $this->_Pdf->pageSize();
        if (is_string($format)
            && $orientation === 'L'
            && strpos($format, '-L') === false
        ) {
            $format .= '-' . $orientation;
        }

        $options = [
            'mode' => $this->_Pdf->encoding(),
            'format' => $format,
            'orientation' => $orientation,
            'tempDir' => TMP,
        ];
        $options = array_merge($options, (array)$this->getConfig('options'));

        $Mpdf = $this->_createInstance($options);
        $Mpdf->WriteHTML($this->_Pdf->html());

        return $Mpdf->Output('', STRING_RETURN);
    }

    /**
     * Creates the Mpdf instance.
     *
     * @param array $options The engine options.
     * @return 
     */
    protected function _createInstance($options)
    {
        return new MpdfEngine($options);
    }
}
