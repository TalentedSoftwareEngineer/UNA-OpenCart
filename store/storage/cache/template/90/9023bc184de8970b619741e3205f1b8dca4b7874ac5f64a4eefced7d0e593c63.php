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

/* default/template/account/vendor/lts_attribute_list.twig */
class __TwigTemplate_d196ed27f367dde95f29150bb44274c8c91bc12e654680bf98b1e195ac3ed29d extends \Twig\Template
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
        echo ($context["lts_column_left"] ?? null);
        echo "
<div id=\"content\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">
            <div class=\"pull-right\"><a href=\"";
        // line 5
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-attribute').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
            </div>
            <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "                <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">
        ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "        <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
        ";
        }
        // line 22
        echo "        ";
        if (($context["success"] ?? null)) {
            // line 23
            echo "        <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
        ";
        }
        // line 27
        echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 29
        echo ($context["text_list"] ?? null);
        echo "</h3>
            </div>
            ";
        // line 32
        echo "            <div class=\"panel-body\">
                <form action=\"";
        // line 33
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-attribute\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered table-hover\">
                            <thead>
                                <tr>
                                    <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                                    <td class=\"text-left\">";
        // line 39
        if ((($context["sort"] ?? null) == "ad.name")) {
            // line 40
            echo "                                        <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                                        ";
        } else {
            // line 42
            echo "                                        <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                                        ";
        }
        // line 43
        echo "</td>
                                    <td class=\"text-left\">";
        // line 44
        if ((($context["sort"] ?? null) == "attribute_group")) {
            // line 45
            echo "                                        <a href=\"";
            echo ($context["sort_attribute_group"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_attribute_group"] ?? null);
            echo "</a>
                                        ";
        } else {
            // line 47
            echo "                                        <a href=\"";
            echo ($context["sort_attribute_group"] ?? null);
            echo "\">";
            echo ($context["column_attribute_group"] ?? null);
            echo "</a>
                                        ";
        }
        // line 48
        echo "</td>
                                    <td class=\"text-right\">";
        // line 49
        if ((($context["sort"] ?? null) == "a.sort_order")) {
            // line 50
            echo "                                        <a href=\"";
            echo ($context["sort_sort_order"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_sort_order"] ?? null);
            echo "</a>
                                        ";
        } else {
            // line 52
            echo "                                        <a href=\"";
            echo ($context["sort_sort_order"] ?? null);
            echo "\">";
            echo ($context["column_sort_order"] ?? null);
            echo "</a>
                                        ";
        }
        // line 53
        echo "</td>
                                    <td class=\"text-right\">";
        // line 54
        echo ($context["column_action"] ?? null);
        echo "</td>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 58
        if (($context["attributes"] ?? null)) {
            // line 59
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                // line 60
                echo "                                <tr>
                                    <td class=\"text-center\">";
                // line 61
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["attribute"], "attribute_id", [], "any", false, false, false, 61), ($context["selected"] ?? null))) {
                    // line 62
                    echo "                                        <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "attribute_id", [], "any", false, false, false, 62);
                    echo "\" checked=\"checked\" />
                                        ";
                } else {
                    // line 64
                    echo "                                        <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "attribute_id", [], "any", false, false, false, 64);
                    echo "\" />
                                        ";
                }
                // line 65
                echo "</td>
                                    <td class=\"text-left\">";
                // line 66
                echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 66);
                echo "</td>
                                    <td class=\"text-left\">";
                // line 67
                echo twig_get_attribute($this->env, $this->source, $context["attribute"], "attribute_group", [], "any", false, false, false, 67);
                echo "</td>
                                    <td class=\"text-right\">";
                // line 68
                echo twig_get_attribute($this->env, $this->source, $context["attribute"], "sort_order", [], "any", false, false, false, 68);
                echo "</td>
                                    <td class=\"text-right\"><a href=\"";
                // line 69
                echo twig_get_attribute($this->env, $this->source, $context["attribute"], "edit", [], "any", false, false, false, 69);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                                </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "                                ";
        } else {
            // line 73
            echo "                                <tr>
                                    <td class=\"text-center\" colspan=\"5\">";
            // line 74
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                                </tr>
                                ";
        }
        // line 77
        echo "                            </tbody>
                        </table>
                    </div>
                </form>
                <div class=\"row\">
                    <div class=\"col-sm-6 text-left\">";
        // line 82
        echo ($context["pagination"] ?? null);
        echo "</div>
                    <div class=\"col-sm-6 text-right\">";
        // line 83
        echo ($context["results"] ?? null);
        echo "</div>
                </div>
            </div>
        </div>
    </div>
";
        // line 88
        echo ($context["footer"] ?? null);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/account/vendor/lts_attribute_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 88,  276 => 83,  272 => 82,  265 => 77,  259 => 74,  256 => 73,  253 => 72,  242 => 69,  238 => 68,  234 => 67,  230 => 66,  227 => 65,  221 => 64,  215 => 62,  213 => 61,  210 => 60,  205 => 59,  203 => 58,  196 => 54,  193 => 53,  185 => 52,  175 => 50,  173 => 49,  170 => 48,  162 => 47,  152 => 45,  150 => 44,  147 => 43,  139 => 42,  129 => 40,  127 => 39,  118 => 33,  115 => 32,  110 => 29,  106 => 27,  98 => 23,  95 => 22,  87 => 18,  85 => 17,  79 => 13,  68 => 11,  64 => 10,  59 => 8,  52 => 6,  46 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/vendor/lts_attribute_list.twig", "");
    }
}
