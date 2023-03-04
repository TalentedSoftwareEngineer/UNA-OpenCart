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

/* default/template/vendor/lts_visit.twig */
class __TwigTemplate_a6dd0e0598ad0558468439e4cdefbab1261738bca46389b71d9e1b024228efe5 extends \Twig\Template
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
<div id=\"container\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
 
    ";
        // line 9
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"m-vendor-wrap mv-dashboard-wrap\">
        <div class=\"row\">
        <h3 class=\"text-danger text-center\">Welocome to ";
        // line 19
        echo ($context["vendor_name"] ?? null);
        echo "</h3><br>
          <div class=\"col-sm-9\">            
      <h4 class=\"text-primary\">";
        // line 21
        echo ($context["vendor_name"] ?? null);
        echo " All Products</h4><br>
            <div class=\"row\">
              <div class=\"col-sm-3\">
                <div class=\"form-group input-group input-group-sm\">
                  <label class=\"input-group-addon\" for=\"input-sort\">";
        // line 25
        echo ($context["text_sort"] ?? null);
        echo "</label>
                  <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
                  ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["sorts"]);
        foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
            // line 28
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 28) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                // line 29
                echo "                  <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 29);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 29);
                echo "</option>
                  ";
            } else {
                // line 31
                echo "                  <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 31);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 31);
                echo "</option>
                  ";
            }
            // line 33
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                </select>
                </div>
              </div>
              <div class=\"col-sm-3\">
                <div class=\"form-group input-group input-group-sm\">
                  <label class=\"input-group-addon\" for=\"input-limit\">";
        // line 39
        echo ($context["text_limit"] ?? null);
        echo "</label>
                  <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
                  ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["limits"]);
        foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
            // line 42
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 42) == ($context["limit"] ?? null))) {
                // line 43
                echo "                  <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 43);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 43);
                echo "</option>
                  ";
            } else {
                // line 45
                echo "                  <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 45);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 45);
                echo "</option>
                  ";
            }
            // line 47
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                </select>
                </div>
              </div>
            </div>

            ";
        // line 53
        if (($context["products"] ?? null)) {
            // line 54
            echo "             <div class=\"row\">
              ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 56
                echo "               <div class=\"product-layout col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                 <div class=\"product-thumb transition\">
                   <div class=\"image\"><a href=\"";
                // line 58
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 58);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 58);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 58);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 58);
                echo "\" class=\"img-responsive\" /></a></div>
                   <div>
                   <div class=\"caption\">
                     <h4><a href=\"";
                // line 61
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 61);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 61);
                echo "</a></h4>
                     <p>";
                // line 62
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 62);
                echo "</p>
                     ";
                // line 63
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 63)) {
                    // line 64
                    echo "                     <p class=\"price\">
                       ";
                    // line 65
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 65)) {
                        // line 66
                        echo "                       ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 66);
                        echo "
                       ";
                    } else {
                        // line 68
                        echo "                       <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 68);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 68);
                        echo "</span>
                       ";
                    }
                    // line 70
                    echo "                       ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 70)) {
                        // line 71
                        echo "                       <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 71);
                        echo "</span>
                       ";
                    }
                    // line 73
                    echo "                     </p>
                     ";
                }
                // line 74
                echo "                     
                     ";
                // line 75
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 75)) {
                    // line 76
                    echo "                     <div class=\"rating\">
                       ";
                    // line 77
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 78
                        echo "                       ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 78) < $context["i"])) {
                            // line 79
                            echo "                       <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                       ";
                        } else {
                            // line 81
                            echo "                       <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                       ";
                        }
                        // line 83
                        echo "                       ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 84
                    echo "                     </div>
                     ";
                }
                // line 85
                echo "                     
                   </div>
                   <div class=\"button-group\">                  
                      <button type=\"button\" onclick=\"cart.add('";
                // line 88
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 88);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 88);
                echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
                echo ($context["button_cart"] ?? null);
                echo "</span></button>

                     <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 90
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 90);
                echo "');\"><i class=\"fa fa-heart\"></i></button>
                     <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 91
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 91);
                echo "');\"><i class=\"fa fa-exchange\"></i></button>
                   </div>
                 </div>
                 </div>
               </div> 
               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "             </div>
            <div class=\"row\">
\t\t        \t<div class=\"col-sm-6 text-left links\">";
            // line 99
            echo ($context["pagination"] ?? null);
            echo "</div>
\t\t        \t<div class=\"col-sm-6 text-right results\">";
            // line 100
            echo ($context["results"] ?? null);
            echo "</div>
\t\t      \t</div>
            ";
        } else {
            // line 103
            echo "            <br />
            <h4 class=\"text-center\">";
            // line 104
            echo ($context["text_no_result"] ?? null);
            echo "</h4>
            ";
        }
        // line 106
        echo "          </div>
        </div>
      </div>
      ";
        // line 109
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    
  <script>
    \$('#content .product-list').attr('class', 'product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12');
  </script>
</div>
";
        // line 116
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/vendor/lts_visit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  360 => 116,  350 => 109,  345 => 106,  340 => 104,  337 => 103,  331 => 100,  327 => 99,  323 => 97,  309 => 91,  303 => 90,  294 => 88,  289 => 85,  285 => 84,  279 => 83,  275 => 81,  271 => 79,  268 => 78,  264 => 77,  261 => 76,  259 => 75,  256 => 74,  252 => 73,  244 => 71,  241 => 70,  233 => 68,  227 => 66,  225 => 65,  222 => 64,  220 => 63,  216 => 62,  210 => 61,  198 => 58,  194 => 56,  190 => 55,  187 => 54,  185 => 53,  178 => 48,  172 => 47,  164 => 45,  156 => 43,  153 => 42,  149 => 41,  144 => 39,  137 => 34,  131 => 33,  123 => 31,  115 => 29,  112 => 28,  108 => 27,  103 => 25,  96 => 21,  91 => 19,  82 => 16,  79 => 15,  76 => 14,  73 => 13,  70 => 12,  67 => 11,  64 => 10,  62 => 9,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/vendor/lts_visit.twig", "");
    }
}
