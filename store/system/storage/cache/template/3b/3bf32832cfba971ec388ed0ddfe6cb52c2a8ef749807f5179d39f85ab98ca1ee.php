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

/* vendor/lts_pincode_list.twig */
class __TwigTemplate_2e50cb4748f6c77588034723adcf46998410abbc4495c0ea8171eea957560bb6 extends \Twig\Template
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
        echo " ";
        echo ($context["column_left"] ?? null);
        echo " 
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <a href=\"";
        // line 6
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"button\" form=\"form-product\" formaction=\"";
        // line 7
        echo ($context["delete"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-pincode').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>

        </div>
      <h1>";
        // line 10
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 13);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 13);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
      ";
        // line 19
        if (($context["error_warning"] ?? null)) {
            // line 20
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 24
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 25
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 29
        echo "    
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-money\"></i> ";
        // line 32
        echo ($context["text_list"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 35
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-pincode\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
               <thead>
                  <tr>
                     <th class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /> </th>
                     <th class=\"text-left\">";
        // line 41
        echo ($context["column_name"] ?? null);
        echo "</th>
                     <th class=\"text-left\">";
        // line 42
        echo ($context["column_country"] ?? null);
        echo "</th>
                     <th class=\"text-left\">";
        // line 43
        echo ($context["column_state"] ?? null);
        echo "</th>
                     <th class=\"text-left\">";
        // line 44
        echo ($context["column_status"] ?? null);
        echo "</th>
                     <th class=\"text-right\">";
        // line 45
        echo ($context["column_action"] ?? null);
        echo "</th>
                  </tr>
              </thead>
              <tbody>
                  ";
        // line 49
        if (($context["pincodes"] ?? null)) {
            // line 50
            echo "                     ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pincodes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["pincode"]) {
                // line 51
                echo "                     <tr> 
                        <td class=\"text-center\">";
                // line 52
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["pincode"], "pincode_id", [], "any", false, false, false, 52), ($context["selected"] ?? null))) {
                    // line 53
                    echo "                          <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["pincode"], "pincode_id", [], "any", false, false, false, 53);
                    echo "\" checked=\"checked\" />";
                } else {
                    // line 54
                    echo "                          <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["pincode"], "pincode_id", [], "any", false, false, false, 54);
                    echo "\" />";
                }
                // line 55
                echo "                        </td>
                        <td class=\"text-left\">";
                // line 56
                echo twig_get_attribute($this->env, $this->source, $context["pincode"], "name", [], "any", false, false, false, 56);
                echo "</td>
                        <td class=\"text-left\">";
                // line 57
                echo twig_get_attribute($this->env, $this->source, $context["pincode"], "country", [], "any", false, false, false, 57);
                echo "</td> 
                        <td class=\"text-left\">";
                // line 58
                echo twig_get_attribute($this->env, $this->source, $context["pincode"], "state", [], "any", false, false, false, 58);
                echo "</td> 
                        <td class=\"text-left\">";
                // line 59
                echo twig_get_attribute($this->env, $this->source, $context["pincode"], "status", [], "any", false, false, false, 59);
                echo "</td>
                        <td class=\"text-right\">
                           <a href=\"";
                // line 61
                echo twig_get_attribute($this->env, $this->source, $context["pincode"], "edit", [], "any", false, false, false, 61);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                        </td>
                           
                     </tr>
                     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pincode'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "                  ";
        }
        echo " 
               </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 72
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 73
        echo ($context["results"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
</div>
";
        // line 78
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "vendor/lts_pincode_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 78,  220 => 73,  216 => 72,  206 => 66,  195 => 61,  190 => 59,  186 => 58,  182 => 57,  178 => 56,  175 => 55,  170 => 54,  165 => 53,  163 => 52,  160 => 51,  155 => 50,  153 => 49,  146 => 45,  142 => 44,  138 => 43,  134 => 42,  130 => 41,  121 => 35,  115 => 32,  110 => 29,  102 => 25,  99 => 24,  91 => 20,  89 => 19,  83 => 15,  72 => 13,  68 => 12,  63 => 10,  53 => 7,  47 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "vendor/lts_pincode_list.twig", "");
    }
}
