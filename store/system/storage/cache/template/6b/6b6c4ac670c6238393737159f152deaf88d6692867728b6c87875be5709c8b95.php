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

/* default/template/account/vendor/lts_dashboard.twig */
class __TwigTemplate_77beb20baf9454e4c051a311d6d468a0b8350d17d761a2d002c8f0f163201c99 extends \Twig\Template
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
<div id=\"content\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">
            <h1>";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 8
            echo "                <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 8);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 8);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "            </ul>
        </div>
    </div>
    ";
        // line 13
        if (($context["error_warning"] ?? null)) {
            // line 14
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 18
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 19
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
    ";
        }
        // line 21
        echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-money\"></i> ";
        // line 23
        echo ($context["text_"] ?? null);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
            <div class=\"row\">
                <div class=\"col-sm-6 col-md-3\">
                    <div class=\"tile tile-primary\">
                        <div class=\"tile-heading\">Total Products </div>
                        <div class=\"tile-body\">
                            <i class=\"fa fa-product-hunt\" aria-hidden=\"true\"></i>
                            <h1 class=\"pull-right\">";
        // line 32
        echo ($context["product_total"] ?? null);
        echo "</h1>
                        </div>
                        <div class=\"tile-footer\"> <a class=\"ac\" href=\"";
        // line 34
        echo ($context["add_product"] ?? null);
        echo "\">Add New Product</a></div>
                    </div>
                </div>
                <div class=\"col-sm-6 col-md-3\">
                    <div class=\"tile tile-primary\">
                        <div class=\"tile-heading\">Total Orders</div>
                        <div class=\"tile-body\">
                            <i class=\"fa fa-shopping-cart\"></i>
                            <h1 class=\"pull-right\">
                                ";
        // line 43
        echo ($context["order_total"] ?? null);
        echo "
                            </h1>
                        </div>
                        <div class=\"tile-footer\"> <a class=\"ac\" href=\"";
        // line 46
        echo ($context["view_order"] ?? null);
        echo "\">View All</a></div>
                    </div>
                </div>
                <div class=\"col-sm-6 col-md-3\">
                    <div class=\"tile tile-primary\">
                        <div class=\"tile-heading\">Total Sale</div>
                        <div class=\"tile-body\">
                            <i class=\"fa fa-credit-card\"></i>
                            <h1 class=\"pull-right\">
                                ";
        // line 55
        echo ($context["sales"] ?? null);
        echo "
                            </h1>
                        </div>
                        <div class=\"tile-footer\"> <a class=\"ac\" href=\"";
        // line 58
        echo ($context["view_sale"] ?? null);
        echo "\">View All</a></div>
                    </div>
                </div>
                <div class=\"col-sm-6 col-md-3\">
                    ";
        // line 62
        echo ($context["customer"] ?? null);
        echo "
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-12 col-md-6\">
                    ";
        // line 67
        echo ($context["map"] ?? null);
        echo "
                </div>
                <div class=\"col-sm-12 col-md-6\">
                    ";
        // line 70
        echo ($context["chart"] ?? null);
        echo "
                </div>
            </div>
        </div>
    </div>";
        // line 74
        echo ($context["chat"] ?? null);
        echo "
    ";
        // line 75
        echo ($context["footer"] ?? null);
        echo "
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/account/vendor/lts_dashboard.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 75,  173 => 74,  166 => 70,  160 => 67,  152 => 62,  145 => 58,  139 => 55,  127 => 46,  121 => 43,  109 => 34,  104 => 32,  92 => 23,  88 => 21,  82 => 19,  79 => 18,  71 => 14,  69 => 13,  64 => 10,  53 => 8,  49 => 7,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/vendor/lts_dashboard.twig", "");
    }
}
