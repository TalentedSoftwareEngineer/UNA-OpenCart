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

/* vendor/lts_mail_list.twig */
class __TwigTemplate_e75cd569e9c5b6002434635c9d29d8cbfe07840258060d3214cf20d06893067a extends \Twig\Template
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
        <button type=\"button\" form=\"form-vendor-mail\" formaction=\"";
        // line 7
        echo ($context["delete"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-vendor-mail').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
        </div>
      <h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">    
        <h3 class=\"panel-title\"><i class=\"fa fa-envelope\"></i> ";
        // line 20
        echo ($context["heading_title"] ?? null);
        echo "</h3>
      </div>
      
      <div class=\"panel-body\">
        <form action=\"";
        // line 24
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-vendor-mail\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
               <thead>
                  <tr>
                     <th class=\"text-center\"><input type=\"checkbox\" name=\"select[]\"></th>
                     <th>";
        // line 30
        echo ($context["column_too"] ?? null);
        echo "</th>
                     <th>";
        // line 31
        echo ($context["column_subject"] ?? null);
        echo "</th>
                     <th>";
        // line 32
        echo ($context["column_date_added"] ?? null);
        echo "</th>
                     <th>";
        // line 33
        echo ($context["column_action"] ?? null);
        echo "</th>
                  </tr>
              </thead>
              <tbody>
                  ";
        // line 37
        if (($context["mails"] ?? null)) {
            // line 38
            echo "                     ";
            $context["i"] = 1;
            // line 39
            echo "                     ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["mails"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["mail"]) {
                // line 40
                echo "                     <tr> 
                        <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 41
                echo twig_get_attribute($this->env, $this->source, $context["mail"], "mail_id", [], "any", false, false, false, 41);
                echo "\"></td>
                        <td>";
                // line 42
                echo twig_get_attribute($this->env, $this->source, $context["mail"], "too", [], "any", false, false, false, 42);
                echo "</td>
                        <td>";
                // line 43
                echo twig_get_attribute($this->env, $this->source, $context["mail"], "subject", [], "any", false, false, false, 43);
                echo "</td>
                        <td>";
                // line 44
                echo twig_get_attribute($this->env, $this->source, $context["mail"], "date_added", [], "any", false, false, false, 44);
                echo "</td>
                        <td class=\"text-left\">
                           <a href=\"";
                // line 46
                echo twig_get_attribute($this->env, $this->source, $context["mail"], "edit", [], "any", false, false, false, 46);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                        </td>
                           
                     </tr>

                     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "                  ";
        }
        echo " 
               </tbody>
            </table>
          </div>
        </form>
      </div>
    </div>
</div>
";
        // line 60
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "vendor/lts_mail_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 60,  167 => 52,  155 => 46,  150 => 44,  146 => 43,  142 => 42,  138 => 41,  135 => 40,  130 => 39,  127 => 38,  125 => 37,  118 => 33,  114 => 32,  110 => 31,  106 => 30,  97 => 24,  90 => 20,  82 => 14,  71 => 12,  67 => 11,  62 => 9,  53 => 7,  47 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "vendor/lts_mail_list.twig", "");
    }
}
