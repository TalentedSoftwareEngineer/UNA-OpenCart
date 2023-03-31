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

/* vendor/lts_subscription_list.twig */
class __TwigTemplate_9c65ff451ff95a1c375fbd2fc8c5385c61216d43b577afea4a0c24229438b7d6 extends \Twig\Template
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
        echo "') ? \$('#form-subscription-list').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>

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
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-money\"></i> ";
        // line 31
        echo ($context["text_"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 34
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-subscription-list\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
               <thead>
                  <tr>
                     <th class=\"text-center\"><input type=\"checkbox\" name=\"select[]\"></th>
                     <th class=\"text-left\"><a href=\"";
        // line 40
        echo ($context["sort_name"] ?? null);
        echo "\">";
        echo ($context["column_name"] ?? null);
        echo "</a></th>
                     <th class=\"text-left\">";
        // line 41
        echo ($context["column_status"] ?? null);
        echo "</th>
                     <th class=\"text-right\">";
        // line 42
        echo ($context["column_action"] ?? null);
        echo "</th>
                  </tr>
              </thead>
              <tbody>
                  ";
        // line 46
        if (($context["subscriptions"] ?? null)) {
            // line 47
            echo "                     ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["subscriptions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["subscription"]) {
                // line 48
                echo "                     <tr> 
                        <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 49
                echo twig_get_attribute($this->env, $this->source, $context["subscription"], "subscription_id", [], "any", false, false, false, 49);
                echo "\"></td>
                        <td class=\"text-left\">";
                // line 50
                echo twig_get_attribute($this->env, $this->source, $context["subscription"], "name", [], "any", false, false, false, 50);
                echo "</td>
                        <td class=\"text-left\">";
                // line 51
                echo twig_get_attribute($this->env, $this->source, $context["subscription"], "status", [], "any", false, false, false, 51);
                echo "</td>
                        <td class=\"text-right\">
                           <a href=\"";
                // line 53
                echo twig_get_attribute($this->env, $this->source, $context["subscription"], "edit", [], "any", false, false, false, 53);
                echo "\" class=\"btn btn-primary\" data-toggle=\"tooltip\" title=\"";
                echo ($context["text_edit"] ?? null);
                echo "\"><i class=\"fa fa-pencil\"></i></a>
                        </td>
                     </tr>
                     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "                   ";
        } else {
            // line 58
            echo "                    <tr>
                      <td class=\"text-center\" colspan=\"8\">";
            // line 59
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                    </tr>
                  ";
        }
        // line 61
        echo " 
               </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
            <div class=\"col-sm-6 text-left\">";
        // line 67
        echo ($context["pagination"] ?? null);
        echo "</div>
             <div class=\"col-sm-6 text-right\">";
        // line 68
        echo ($context["results"] ?? null);
        echo "</div>
          </div>
      </div>
    </div>
</div>
";
        // line 73
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "vendor/lts_subscription_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 73,  205 => 68,  201 => 67,  193 => 61,  187 => 59,  184 => 58,  181 => 57,  169 => 53,  164 => 51,  160 => 50,  156 => 49,  153 => 48,  148 => 47,  146 => 46,  139 => 42,  135 => 41,  129 => 40,  120 => 34,  114 => 31,  110 => 29,  102 => 25,  99 => 24,  91 => 20,  89 => 19,  83 => 15,  72 => 13,  68 => 12,  63 => 10,  53 => 7,  47 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "vendor/lts_subscription_list.twig", "");
    }
}
