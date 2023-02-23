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

/* default/template/account/vendor/lts_option_list.twig */
class __TwigTemplate_cc5b150bc4fa87fc9f2db511c133ccab442ef5763483cd79f0dc02e4814d77f0 extends \Twig\Template
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
            <div class=\"pull-right\">
                <a href=\"";
        // line 6
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
                <button type=\"button\" form=\"vendor-form-option\" formaction=\"";
        // line 7
        echo ($context["delete"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#vendor-form-option').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
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
            ";
        // line 33
        echo "            <div class=\"panel-body\">
                <form action=\"";
        // line 34
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"vendor-form-option\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered table-hover\">
                            <thead>
                                <tr>
                                    <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                                    <td class=\"text-left\">";
        // line 40
        if ((($context["sort"] ?? null) == "od.name")) {
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
        if ((($context["sort"] ?? null) == "o.sort_order")) {
            // line 46
            echo "                                        <a href=\"";
            echo ($context["sort_sort_order"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_sort_order"] ?? null);
            echo "</a>
                                        ";
        } else {
            // line 48
            echo "                                        <a href=\"";
            echo ($context["sort_sort_order"] ?? null);
            echo "\">";
            echo ($context["column_sort_order"] ?? null);
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
        if (($context["options"] ?? null)) {
            // line 55
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 56
                echo "                                <tr>
                                    <td class=\"text-center\">";
                // line 57
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["option"], "option_id", [], "any", false, false, false, 57), ($context["selected"] ?? null))) {
                    // line 58
                    echo "                                        <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "option_id", [], "any", false, false, false, 58);
                    echo "\" checked=\"checked\" />
                                        ";
                } else {
                    // line 60
                    echo "                                        <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "option_id", [], "any", false, false, false, 60);
                    echo "\" />
                                        ";
                }
                // line 61
                echo "</td>
                                    <td class=\"text-left\">";
                // line 62
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 62);
                echo "</td>
                                    <td class=\"text-right\">";
                // line 63
                echo twig_get_attribute($this->env, $this->source, $context["option"], "sort_order", [], "any", false, false, false, 63);
                echo "</td>
                                    <td class=\"text-right\"><a href=\"";
                // line 64
                echo twig_get_attribute($this->env, $this->source, $context["option"], "edit", [], "any", false, false, false, 64);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                                </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "                                ";
        } else {
            // line 68
            echo "                                <tr>
                                    <td class=\"text-center\" colspan=\"4\">";
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
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/account/vendor/lts_option_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 83,  252 => 78,  248 => 77,  241 => 72,  235 => 69,  232 => 68,  229 => 67,  218 => 64,  214 => 63,  210 => 62,  207 => 61,  201 => 60,  195 => 58,  193 => 57,  190 => 56,  185 => 55,  183 => 54,  176 => 50,  173 => 49,  165 => 48,  155 => 46,  153 => 45,  150 => 44,  142 => 43,  132 => 41,  130 => 40,  121 => 34,  118 => 33,  113 => 30,  109 => 28,  101 => 24,  98 => 23,  90 => 19,  88 => 18,  82 => 14,  71 => 12,  67 => 11,  62 => 9,  53 => 7,  47 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/vendor/lts_option_list.twig", "");
    }
}
