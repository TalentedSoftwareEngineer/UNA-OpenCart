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

/* default/template/account/vendor/lts_subscription.twig */
class __TwigTemplate_3eb34c1d61470e51b080a44f0c564187d3d1337029fcadd0b9e8c0182279a6c7 extends \Twig\Template
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
             ";
        // line 23
        if (($context["isplan"] ?? null)) {
            echo "   
                 <h3 class=\"panel-title alert alert-success\">";
            // line 24
            echo ($context["paidplan"] ?? null);
            echo " ";
            echo twig_get_attribute($this->env, $this->source, ($context["current_plan"] ?? null), "subscription_commission", [], "any", false, false, false, 24);
            echo "% ";
            echo ($context["days"] ?? null);
            echo "</i></h3>
                 ";
        } else {
            // line 26
            echo "
                  <h3 class=\"panel-title alert alert-danger\">";
            // line 27
            echo ($context["defaultplan"] ?? null);
            echo " ";
            echo ($context["defaultplan_rate"] ?? null);
            echo "% ";
            echo ($context["days"] ?? null);
            echo "</i></h3>
            ";
        }
        // line 29
        echo "        </div>
        <div class=\"panel-body\">
            <h5 class=\"alert alert-danger\">";
        // line 31
        echo ($context["text_plan_info"] ?? null);
        echo "</h5>
            <div class=\"row\">
                ";
        // line 33
        if (($context["subscriptions"] ?? null)) {
            echo "        
                ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["subscriptions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["subscription"]) {
                // line 35
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["subscription"], "status", [], "any", false, false, false, 35) == "1")) {
                    // line 36
                    echo "                <div class=\"col-sm-12 col-md-6 lts_sub\">
                    ";
                    // line 37
                    if ((twig_get_attribute($this->env, $this->source, ($context["current_plan"] ?? null), "subscription_id", [], "any", false, false, false, 37) == twig_get_attribute($this->env, $this->source, $context["subscription"], "subscription_id", [], "any", false, false, false, 37))) {
                        // line 38
                        echo "                    <div class=\"current-plan\"><span class=\"active\">";
                        echo ($context["text_active"] ?? null);
                        echo "</span></div>                
                    <div class=\"lts-title\">
                        <h3>";
                        // line 40
                        echo twig_get_attribute($this->env, $this->source, ($context["current_plan"] ?? null), "subscription_name", [], "any", false, false, false, 40);
                        echo "</h3>
                    </div>
                    <div class=\"subscription-item card-text\">
                        <h1 class=\"subamt\"> ";
                        // line 43
                        echo twig_get_attribute($this->env, $this->source, ($context["current_plan"] ?? null), "subscription_fee", [], "any", false, false, false, 43);
                        echo "</h1>
                        <div class=\"plan-item flex text-center\">
                            <div><strong>";
                        // line 45
                        echo twig_get_attribute($this->env, $this->source, ($context["current_plan"] ?? null), "plan_type", [], "any", false, false, false, 45);
                        echo "</strong> ";
                        echo ($context["text_plan_type"] ?? null);
                        echo "</div>
                        </div>
                        
                        <div class=\"plan-item flex text-center\">
                            <div><strong>";
                        // line 49
                        echo twig_get_attribute($this->env, $this->source, ($context["current_plan"] ?? null), "subscription_fee", [], "any", false, false, false, 49);
                        echo "</strong> ";
                        echo ($context["text_subscription_fee"] ?? null);
                        echo "</div>
                        </div>
                        <div class=\"plan-item flex text-center\">
                            <div><strong>";
                        // line 52
                        echo twig_get_attribute($this->env, $this->source, ($context["current_plan"] ?? null), "subscription_commission", [], "any", false, false, false, 52);
                        echo "%</strong> ";
                        echo ($context["entry_commission"] ?? null);
                        echo "</div>
                        </div>
                    </div>
                    ";
                    } else {
                        // line 56
                        echo "                    <div class=\"lts-title\">
                        <h3>";
                        // line 57
                        echo twig_get_attribute($this->env, $this->source, $context["subscription"], "name", [], "any", false, false, false, 57);
                        echo "</h3>
                    </div>
                    <div class=\"subscription-item card-text\">
                        <h1 class=\"subamt\"> ";
                        // line 60
                        echo twig_get_attribute($this->env, $this->source, $context["subscription"], "subscription_fee", [], "any", false, false, false, 60);
                        echo "</h1>
                        <div class=\"plan-item flex text-center\">
                            <div><strong>";
                        // line 62
                        echo twig_get_attribute($this->env, $this->source, $context["subscription"], "plan_type", [], "any", false, false, false, 62);
                        echo "</strong> ";
                        echo ($context["text_plan_type"] ?? null);
                        echo "</div>
                        </div>
                        
                        <div class=\"plan-item flex text-center\">
                            <div><strong>";
                        // line 66
                        echo twig_get_attribute($this->env, $this->source, $context["subscription"], "subscription_fee", [], "any", false, false, false, 66);
                        echo "</strong> ";
                        echo ($context["text_subscription_fee"] ?? null);
                        echo "</div>
                        </div>
                        <div class=\"plan-item flex text-center\">
                            <div><strong>";
                        // line 69
                        echo twig_get_attribute($this->env, $this->source, $context["subscription"], "subscription_commission", [], "any", false, false, false, 69);
                        echo "%</strong> ";
                        echo ($context["entry_commission"] ?? null);
                        echo "</div>
                        </div>
                    </div>

                    ";
                    }
                    // line 74
                    echo "                    <div class=\"buttons\">
                        ";
                    // line 75
                    if ((twig_get_attribute($this->env, $this->source, ($context["current_plan"] ?? null), "subscription_id", [], "any", false, false, false, 75) == twig_get_attribute($this->env, $this->source, $context["subscription"], "subscription_id", [], "any", false, false, false, 75))) {
                        // line 76
                        echo "                        <div class=\"pull-right\">
                            <a href=\"";
                        // line 77
                        echo twig_get_attribute($this->env, $this->source, $context["subscription"], "view", [], "any", false, false, false, 77);
                        echo "\" class=\"btn buttons_clr\"><i class=\"fa fa-eye\"></i> ";
                        echo ($context["button_view"] ?? null);
                        echo "</a>
                        </div>
                        ";
                    } else {
                        // line 80
                        echo "

                        ";
                        // line 82
                        if (twig_get_attribute($this->env, $this->source, $context["subscription"], "type", [], "any", false, false, false, 82)) {
                            // line 83
                            echo "                       
                        <div class=\"pull-right\">
                            <a href=\"";
                            // line 85
                            echo twig_get_attribute($this->env, $this->source, $context["subscription"], "subscribe", [], "any", false, false, false, 85);
                            echo "\" class=\"btn buttons_clr\">";
                            echo ($context["button_subscribe"] ?? null);
                            echo "</a>
                        </div>
                        ";
                        } else {
                            // line 88
                            echo "                        <div class=\"pull-right\">
                            <button class=\"btn  buttons_clr cart_page\" type=\"button\" onclick=\"cart.add('";
                            // line 89
                            echo twig_get_attribute($this->env, $this->source, $context["subscription"], "product_id", [], "any", false, false, false, 89);
                            echo "','1');\" id=\"cart_page\"><span>";
                            echo ($context["button_subscribe"] ?? null);
                            echo "</span> </button>
                        </div>
                        ";
                        }
                        // line 92
                        echo "                        ";
                    }
                    // line 93
                    echo "                    </div>
                </div>
                ";
                }
                // line 96
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "            </div>
            ";
        }
        // line 99
        echo "        </div>
    </div>

<script>
\$(document).ready(function() {
    \$('.cart_page').on('click', function() {
        var cart = '";
        // line 105
        echo ($context["cart_url"] ?? null);
        echo "';
        // window.location.href=cart;
        setTimeout(function()
         { window.location.href = cart; }, 500);
    })
});
</script>
";
        // line 112
        echo ($context["footer"] ?? null);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/account/vendor/lts_subscription.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 112,  298 => 105,  290 => 99,  286 => 97,  280 => 96,  275 => 93,  272 => 92,  264 => 89,  261 => 88,  253 => 85,  249 => 83,  247 => 82,  243 => 80,  235 => 77,  232 => 76,  230 => 75,  227 => 74,  217 => 69,  209 => 66,  200 => 62,  195 => 60,  189 => 57,  186 => 56,  177 => 52,  169 => 49,  160 => 45,  155 => 43,  149 => 40,  143 => 38,  141 => 37,  138 => 36,  135 => 35,  131 => 34,  127 => 33,  122 => 31,  118 => 29,  109 => 27,  106 => 26,  97 => 24,  93 => 23,  89 => 21,  83 => 19,  80 => 18,  72 => 14,  70 => 13,  65 => 10,  54 => 8,  50 => 7,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/vendor/lts_subscription.twig", "");
    }
}
