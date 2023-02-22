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

/* default/template/account/vendor/lts_download_list.twig */
class __TwigTemplate_69a076aae5675eb8210980bc23907d4fee1dfe5c30c3a41de37d54b5ee91e876 extends \Twig\Template
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
        echo ($context["lts_column_left"] ?? null);
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
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#vendor-form-download').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
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
            echo "                <li><a href=\"";
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
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">
        ";
        // line 18
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "        <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
        ";
        }
        // line 23
        echo "        ";
        if (($context["success"] ?? null)) {
            // line 24
            echo "        <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
        ";
        }
        // line 28
        echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 30
        echo ($context["text_list"] ?? null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                ";
        // line 34
        echo "                <form action=\"";
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"vendor-form-download\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered table-hover\">
                            <thead>
                                <tr>
                                    <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                                    <td class=\"text-left\">";
        // line 40
        if ((($context["sort"] ?? null) == "dd.name")) {
            // line 41
            echo "                                        <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                                        ";
        } else {
            // line 43
            echo "                                        <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                                        ";
        }
        // line 44
        echo "</td>
                                    <td class=\"text-right\">";
        // line 45
        if ((($context["sort"] ?? null) == "d.date_added")) {
            // line 46
            echo "                                        <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>
                                        ";
        } else {
            // line 48
            echo "                                        <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>
                                        ";
        }
        // line 49
        echo "</td>
                                    <td class=\"text-right\">";
        // line 50
        echo ($context["column_action"] ?? null);
        echo "</td>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 54
        if (($context["downloads"] ?? null)) {
            // line 55
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["downloads"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["download"]) {
                // line 56
                echo "                                <tr>
                                    <td class=\"text-center\">";
                // line 57
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["download"], "download_id", [], "any", false, false, false, 57), ($context["selected"] ?? null))) {
                    // line 58
                    echo "                                        <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["download"], "download_id", [], "any", false, false, false, 58);
                    echo "\" checked=\"checked\" />
                                        ";
                } else {
                    // line 60
                    echo "                                        <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["download"], "download_id", [], "any", false, false, false, 60);
                    echo "\" />
                                        ";
                }
                // line 61
                echo "</td>
                                    <td class=\"text-left\">";
                // line 62
                echo twig_get_attribute($this->env, $this->source, $context["download"], "name", [], "any", false, false, false, 62);
                echo "</td>
                                    <td class=\"text-right\">";
                // line 63
                echo twig_get_attribute($this->env, $this->source, $context["download"], "date_added", [], "any", false, false, false, 63);
                echo "</td>
                                    <td class=\"text-right\"><a href=\"";
                // line 64
                echo twig_get_attribute($this->env, $this->source, $context["download"], "edit", [], "any", false, false, false, 64);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                                </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['download'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "                                ";
        } else {
            // line 68
            echo "                                <tr>
                                    <td class=\"text-center\" colspan=\"6\">";
            // line 69
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                                </tr>
                                ";
        }
        // line 72
        echo "                            </tbody>
                        </table>
                    </div>
                </form>
                <div class=\"row\">
                    <div class=\"col-sm-6 text-left\">";
        // line 77
        echo ($context["pagination"] ?? null);
        echo "</div>
                    <div class=\"col-sm-6 text-right\">";
        // line 78
        echo ($context["results"] ?? null);
        echo "</div>
                </div>
            </div>
        </div>
    </div>
";
        // line 83
        echo ($context["footer"] ?? null);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "default/template/account/vendor/lts_download_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 83,  248 => 78,  244 => 77,  237 => 72,  231 => 69,  228 => 68,  225 => 67,  214 => 64,  210 => 63,  206 => 62,  203 => 61,  197 => 60,  191 => 58,  189 => 57,  186 => 56,  181 => 55,  179 => 54,  172 => 50,  169 => 49,  161 => 48,  151 => 46,  149 => 45,  146 => 44,  138 => 43,  128 => 41,  126 => 40,  116 => 34,  110 => 30,  106 => 28,  98 => 24,  95 => 23,  87 => 19,  85 => 18,  79 => 14,  68 => 12,  64 => 11,  59 => 9,  52 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/vendor/lts_download_list.twig", "");
    }
}
