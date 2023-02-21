<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* default/template/account/vendor/lts_map.twig */
class __TwigTemplate_67278cb1adb2489e657ae945d62e812ac3efb750d5b2904f280630876f1eeb7f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"panel panel-default\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\"><i class=\"fa fa-globe\"></i> ";
        // line 3
        echo ($context["heading_title"] ?? null);
        echo "</h3>
  </div>
  <div class=\"panel-body\">
    <div id=\"vmap\" style=\"width: 100%; height: 260px;\"></div>
  </div>
</div>
 
<script type=\"text/javascript\"><!--
\$(document).ready(function() {
\t 
\t\$.ajax({
\t\turl: 'index.php?route=account/vendor/lts_map/map',
\t\tdataType: 'json',
\t\tsuccess: function(json) {
\t\t\t
\t\t\tdata = [];
\t\t\tfor(i in json) {
\t\t\t\tdata[i] =json[i]['total'];\t\t\t 

\t\t\t}\t
\t\t\t 
\t\t\tconsole.log(data)\t;
\t\t\t\t\$('#vmap').vectorMap({
\t\t\t\tmap: 'world_en',
\t\t\t\tbackgroundColor: '#FFFFFF',
\t\t\t\tborderColor: '#FFFFFF',
\t\t\t\tcolor: '#9FD5F1',
\t\t\t\thoverOpacity: 0.7,
\t\t\t\tselectedColor: '#666666',
\t\t\t\tenableZoom: true,
\t\t\t\tshowTooltip: true,
\t\t\t\tvalues: data,
\t\t\t\tnormalizeFunction: 'polynomial',
\t\t\t\tonLabelShow: function(event, label, code) {\t

\t\t\t\t\t 
\t\t\t\t\tif (json[code]) {\t\t

\t\t\t\t\t\tlabel.html('<strong>' + label.text() + '</strong><br />' + '";
        // line 41
        echo ($context["text_order"] ?? null);
        echo " ' + json[code]['total'] + '<br />' + '";
        echo ($context["text_sale"] ?? null);
        echo " ' + json[code]['amount']);\t\t\t\t\t\t
\t\t\t\t }
\t\t\t\t\t 
\t\t\t\t}
\t\t\t});\t\t\t
\t\t},
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
\t});\t\t\t
});
//--></script> ";
    }

    public function getTemplateName()
    {
        return "default/template/account/vendor/lts_map.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 41,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/vendor/lts_map.twig", "");
    }
}
