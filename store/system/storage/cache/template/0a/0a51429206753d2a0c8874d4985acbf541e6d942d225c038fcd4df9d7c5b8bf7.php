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

/* vendor/lts_review_list.twig */
class __TwigTemplate_ec0d6bcac8d571308b948d255115335a89c8760921cab24ffeaa7c021a7e14fa extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">
            <div class=\"pull-right\">
            </div>
            <h1>";
        // line 7
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 10
            echo "                    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 10);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 10);
            echo "</a></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "            </ul>
        </div> 
    </div>
    <div class=\"container-fluid\">
        ";
        // line 16
        if (($context["error_warning"] ?? null)) {
            // line 17
            echo "            <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 21
        echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 23
        echo ($context["text_edit"] ?? null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                <form action=\"";
        // line 26
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-review-delete\" class=\"form-horizontal\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered table-hover\">
                            <thead>
                                <tr>
                                    <th class=\"text-center\"><input type=\"checkbox\" name=\"select\"></th>
                                    <th class=\"text-left\"><a href=\"";
        // line 32
        echo ($context["sort_vendor"] ?? null);
        echo "\">";
        echo ($context["column_store_owner"] ?? null);
        echo "</a></th>
                                    <th class=\"text-left\"><a href=\"";
        // line 33
        echo ($context["sort_customer"] ?? null);
        echo "\">";
        echo ($context["column_customer"] ?? null);
        echo "</a></th>
                                    <th class=\"text-left\"><a href=\"";
        // line 34
        echo ($context["sort_name"] ?? null);
        echo "\">";
        echo ($context["column_product"] ?? null);
        echo "</a></th>
                                    <th class=\"text-right\"><a href=\"";
        // line 35
        echo ($context["sort_rating"] ?? null);
        echo "\">";
        echo ($context["column_rating"] ?? null);
        echo "</a></th>
                                    <th class=\"text-left\"><a href=\"";
        // line 36
        echo ($context["sort_rating"] ?? null);
        echo "\">";
        echo ($context["column_status"] ?? null);
        echo "</a></th>
                                    <th class=\"text-right\"><a href=\"";
        // line 37
        echo ($context["sort_date"] ?? null);
        echo "\">";
        echo ($context["column_date"] ?? null);
        echo "</a></th>
                                    <th class=\"text-right\"> ";
        // line 38
        echo ($context["column_action"] ?? null);
        echo " </th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 42
        if (($context["reviews"] ?? null)) {
            // line 43
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 44
                echo "                                        
                                        <tr>
                                            <td class=\"text-center\"><input type=\"checkbox\" name=\"\"></td>
                                            <td class=\"text-left\">";
                // line 47
                echo twig_get_attribute($this->env, $this->source, $context["review"], "store_owner", [], "any", false, false, false, 47);
                echo "</td>
                                            <td class=\"text-left\">";
                // line 48
                echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 48);
                echo "</td>
                                            <td class=\"text-left\">";
                // line 49
                echo twig_get_attribute($this->env, $this->source, $context["review"], "name", [], "any", false, false, false, 49);
                echo "</td>
                                            <td class=\"text-right\">";
                // line 50
                echo twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 50);
                echo "</td>
                                            <td class=\"text-left\">";
                // line 51
                echo twig_get_attribute($this->env, $this->source, $context["review"], "status", [], "any", false, false, false, 51);
                echo "</td>
                                            <td class=\"text-right\">";
                // line 52
                echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 52);
                echo "</td>
                                            <td class=\"text-right\">
                                                ";
                // line 54
                if ((twig_get_attribute($this->env, $this->source, $context["review"], "status", [], "any", false, false, false, 54) == "Enabled")) {
                    // line 55
                    echo "                                                    <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "disapprove", [], "any", false, false, false, 55);
                    echo "\" class=\"btn btn-danger disapprove\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_disapprove"] ?? null);
                    echo "\"><i class=\"fa fa-thumbs-o-down\"></i></a> 
                                                    ";
                } else {
                    // line 57
                    echo "                                                    <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "approve", [], "any", false, false, false, 57);
                    echo "\" class=\"btn btn-success approve\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_approve"] ?? null);
                    echo "\"><i class=\"fa fa-thumbs-o-up\" ></i></a>
                                                    ";
                }
                // line 59
                echo "                                                <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["review"], "view", [], "any", false, false, false, 59);
                echo "\" class=\"btn btn-primary\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_view"] ?? null);
                echo "\"><i class=\"fa fa-eye\"> </i></a> 
                                            </td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "                                ";
        } else {
            // line 64
            echo "                                    <tr>
                                        <td class=\"text-center\" colspan=\"8\">";
            // line 65
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                                    </tr>
                                ";
        }
        // line 67
        echo " 
                            </tbody>
                        </table>
                    </div>
                </form>
                <div class=\"row\">
                    <div class=\"col-sm-6 text-left\">";
        // line 73
        echo ($context["pagination"] ?? null);
        echo "</div>
                    <div class=\"col-sm-6 text-right\">";
        // line 74
        echo ($context["results"] ?? null);
        echo "</div>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "vendor/lts_review_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 74,  233 => 73,  225 => 67,  219 => 65,  216 => 64,  213 => 63,  200 => 59,  192 => 57,  184 => 55,  182 => 54,  177 => 52,  173 => 51,  169 => 50,  165 => 49,  161 => 48,  157 => 47,  152 => 44,  147 => 43,  145 => 42,  138 => 38,  132 => 37,  126 => 36,  120 => 35,  114 => 34,  108 => 33,  102 => 32,  93 => 26,  87 => 23,  83 => 21,  75 => 17,  73 => 16,  67 => 12,  56 => 10,  52 => 9,  47 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "vendor/lts_review_list.twig", "");
    }
}
