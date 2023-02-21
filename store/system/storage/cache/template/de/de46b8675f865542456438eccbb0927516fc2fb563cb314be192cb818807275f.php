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

/* vendor/lts_excel.twig */
class __TwigTemplate_f822ac8149916e7b38089b272f6ce08f9acc831b607da22b71a99de2c8406d21 extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "
";
        // line 2
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <h1>";
        // line 6
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
\t  ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            echo "        <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 9);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 9);
            echo "</a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
\t";
        // line 15
        if (($context["error_warning"] ?? null)) {
            // line 16
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 20
        echo "\t";
        if (($context["success"] ?? null)) {
            // line 21
            echo "    <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 25
        echo "    <div class=\"panel panel-default card\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title card-header\"><i class=\"fa fa-list\"></i> ";
        // line 27
        echo ($context["text_product_export"] ?? null);
        echo "</h3>
      </div>
\t  
      <div class=\"panel-body card-body\">
\t  \t\t
\t  <form action=\"";
        // line 32
        echo ($context["export"] ?? null);
        echo "\"  method=\"post\" enctype=\"multipart/form-data\" id=\"form-export\">
\t  <div class=\"well card mb-3 p-3\">
\t   <h4 class=\"panel-title\" style=\" padding: 0px 0px 20px 0px; \"> ";
        // line 34
        echo ($context["text_product_export"] ?? null);
        echo "</h4>
\t\t <div class=\"row\">

\t\t\t\t<div class=\"col-sm-6\" style=\"text-align:left;\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"control-label col-form-label\" for=\"input-name\" >";
        // line 39
        echo ($context["entry_vendor"] ?? null);
        echo "</label>
\t\t\t\t\t\t<select name=\"vendor_id\" id=\"input-status\" class=\"form-control\">
\t\t\t\t\t\t\t<option value=\"\" >";
        // line 41
        echo ($context["text_none"] ?? null);
        echo " </option>
\t\t\t\t\t\t\t ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vendors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["vendor_id"]) {
            // line 43
            echo "\t\t\t                 \t <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["vendor_id"], "vendor_id", [], "any", false, false, false, 43);
            echo "\" >";
            echo twig_get_attribute($this->env, $this->source, $context["vendor_id"], "store_name", [], "any", false, false, false, 43);
            echo "</option>
\t\t\t\t\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vendor_id'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "\t\t                </select>
\t\t\t\t\t
\t\t            </div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"col-sm-6\" style=\"text-align:left;\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"control-label col-form-label\" for=\"input-name\" >";
        // line 52
        echo ($context["entry_language"] ?? null);
        echo "</label>
\t\t                <select name=\"language\" id=\"input-status\" class=\"form-control\">
\t\t\t\t\t\t \t";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo " 
\t\t                 \t\t <option value=\"";
            // line 55
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 55);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, $context["language"], "default", [], "any", false, false, false, 55)) {
                echo " selected  ";
            }
            echo " >";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 55);
            echo "</option>
\t\t\t\t\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "\t\t                </select>
\t              </div>
\t\t\t    </div>
\t\t\t\t
\t\t\t\t
\t\t\t\t<div class=\"col-sm-12\" style=\"text-align:left;\">
\t\t\t\t  <div class=\"form-group\">
\t\t\t\t  \t<input type=\"submit\" value=\"";
        // line 64
        echo ($context["button_export"] ?? null);
        echo "\" class=\"btn btn-primary\" title=\"";
        echo ($context["button_export"] ?? null);
        echo "\" class=\"button_add\">
\t\t\t\t\t
\t\t\t\t  </div>
\t\t\t\t</div>
              </div>
            </div>
\t\t</form>     
      </div>
    </div>
  </div>

";
        // line 75
        echo ($context["footer"] ?? null);
        echo " 
</style>";
    }

    public function getTemplateName()
    {
        return "vendor/lts_excel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 75,  187 => 64,  178 => 57,  164 => 55,  158 => 54,  153 => 52,  144 => 45,  133 => 43,  129 => 42,  125 => 41,  120 => 39,  112 => 34,  107 => 32,  99 => 27,  95 => 25,  87 => 21,  84 => 20,  76 => 16,  74 => 15,  68 => 11,  57 => 9,  53 => 8,  48 => 6,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "vendor/lts_excel.twig", "");
    }
}
