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

/* vendor/lts_vendor_category.twig */
class __TwigTemplate_5755b396434bab5f630c68e7e7cff7ffc941c84b77e9b55a449dfefdcbb3686a extends \Twig\Template
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
        ";
        // line 8
        echo "
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
        echo "     ";
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
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-money\"></i> ";
        // line 31
        echo ($context["heading_title"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 34
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-commission\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
               <thead>
                  <tr>
                     <th>";
        // line 39
        echo ($context["column_store_owner"] ?? null);
        echo "</th>
                     <th>";
        // line 40
        echo ($context["column_category"] ?? null);
        echo "</th>
                     <th>";
        // line 41
        echo ($context["column_order"] ?? null);
        echo "</th>
                     <th>";
        // line 42
        echo ($context["column_status"] ?? null);
        echo "</th>
                     <th>";
        // line 43
        echo ($context["column_action"] ?? null);
        echo "</th>
                  </tr>
              </thead>
              <tbody>
                  ";
        // line 47
        if (($context["categories"] ?? null)) {
            // line 48
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 49
                echo "                       <tr> 
                        <td>";
                // line 50
                echo twig_get_attribute($this->env, $this->source, $context["category"], "store_owner", [], "any", false, false, false, 50);
                echo "</td>
                        <td>";
                // line 51
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 51);
                echo "</td>
                        <td>";
                // line 52
                echo twig_get_attribute($this->env, $this->source, $context["category"], "sort_order", [], "any", false, false, false, 52);
                echo "</td>
                        <td>";
                // line 53
                echo twig_get_attribute($this->env, $this->source, $context["category"], "status", [], "any", false, false, false, 53);
                echo "</td>
                        <td class=\"text-left\">
                          ";
                // line 55
                if ((twig_get_attribute($this->env, $this->source, $context["category"], "status", [], "any", false, false, false, 55) == "Enabled")) {
                    // line 56
                    echo "                            <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "disapprove", [], "any", false, false, false, 56);
                    echo "\" class=\"btn btn-danger disapprove\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["text_disapprove"] ?? null);
                    echo "\"><i class=\"fa fa-thumbs-o-down\"></i></a> 
                          ";
                } else {
                    // line 58
                    echo "                            <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "approve", [], "any", false, false, false, 58);
                    echo "\" class=\"btn btn-success approve\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["text_approve"] ?? null);
                    echo "\"><i class=\"fa fa-thumbs-o-up\" ></i></a>
                          ";
                }
                // line 60
                echo "                          <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "edit", [], "any", false, false, false, 60);
                echo "\" class=\"btn btn-primary\" data-toggle=\"tooltip\" title=\"";
                echo ($context["text_edit"] ?? null);
                echo "\"><i class=\"fa fa-pencil\"></i></a>
                        </td>
                           
                     </tr>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "
                  ";
        }
        // line 66
        echo " 
               </tbody>
            </table>
          </div>
          <div class=\"row\">
                    <div class=\"col-sm-6 text-left\">";
        // line 71
        echo ($context["pagination"] ?? null);
        echo "</div>
                    <div class=\"col-sm-6 text-right\">";
        // line 72
        echo ($context["results"] ?? null);
        echo "</div>
                </div>
        </form>
      </div>
    </div>
</div>
";
        // line 78
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "vendor/lts_vendor_category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 78,  213 => 72,  209 => 71,  202 => 66,  198 => 65,  184 => 60,  176 => 58,  168 => 56,  166 => 55,  161 => 53,  157 => 52,  153 => 51,  149 => 50,  146 => 49,  141 => 48,  139 => 47,  132 => 43,  128 => 42,  124 => 41,  120 => 40,  116 => 39,  108 => 34,  102 => 31,  98 => 29,  90 => 25,  87 => 24,  79 => 20,  77 => 19,  71 => 15,  60 => 13,  56 => 12,  51 => 10,  47 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "vendor/lts_vendor_category.twig", "");
    }
}
