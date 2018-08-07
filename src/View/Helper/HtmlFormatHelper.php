<?php



/* /app/View/Helper/LinkHelper.php (using other helpers) */
namespace App\View\Helper;
use Cake\View\Helper;

class HtmlFormatHelper extends Helper {
    // public $helpers = array('Html');


    public function safeHtml($html)
    {
        preg_match_all('#<(?!meta|img|br|hr|input\b)\b([a-z]+)(?: .*)?(?<![/|/ ])>#iU', $html, $result);
        $openedtags = $result[1];
        preg_match_all('#</([a-z]+)>#iU', $html, $result);
        $closedtags = $result[1];
        $len_opened = count($openedtags);
        if (count($closedtags) == $len_opened) {
            return $html;
        }
        $openedtags = array_reverse($openedtags);
        for ($i = 0; $i < $len_opened; $i++) {
            if (!in_array($openedtags[$i], $closedtags)) {
                $html .= '</' . $openedtags[$i] . '>';
            } else {
                unset($closedtags[array_search($openedtags[$i], $closedtags)]);
            }
        }

        $tagsPermitidas = "<html><body><b><br><em><i><li><ol><p><s><span><thead><tbody><table><tr><td><u><ul><h1><h2><h3><h4><h5><h6><pre><img>";
    
        $html = strip_tags($html, $tagsPermitidas);

        return $html;
    }
    public function output($args)
    {}

}
