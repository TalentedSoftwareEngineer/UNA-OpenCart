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

/* default/template/account/vendor/lts_commission.twig */
class __TwigTemplate_7491a6c0c3b9f4c99ba8c30d7b183c88087b98a5a49b3cca617e86c9610318f0 extends \Twig\Template
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
        echo "  ";
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
            echo "        <li><a href=\"";
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
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 14
        if (($context["error_warning"] ?? null)) {
            // line 15
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 19
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 20
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 24
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 26
        echo ($context["text_list"] ?? null);
        echo "</h3>
      </div>

      <div class=\"panel-body\">
        <div class=\"row\">
          <div class=\"col-md-10\">
              <div class=\"form-group\">             
              <label class=\"control-label\" for=\"input-order-id\">";
        // line 33
        echo ($context["column_order_id"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_order_id\" value=\"";
        // line 34
        echo ($context["filter_order_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["column_order_id"] ?? null);
        echo "\" id=\"input-order-id\" class=\"form-control\" />
            </div>
          </div> 
                     
          <div class=\"col-md-2\">
              <div class=\"form-group\">
                <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\" style=\"margin-top:21px\"><i class=\"fa fa-filter\"></i> ";
        // line 40
        echo ($context["button_filter"] ?? null);
        echo "</button>
              </div>
          </div>
        </div>
      </div>
      <div class=\"panel-body\">
           
            ";
        // line 48
        echo "

              <div class=\"table-responsive\">
              <table class=\"table table-bordered table-hover\">
                <thead>
                <tr>
                   <th class=\"text-left\">";
        // line 54
        if ((($context["sort"] ?? null) == "lc.order_id")) {
            echo " <a href=\"";
            echo ($context["sort_order"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_order_id"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_order"] ?? null);
            echo "\">";
            echo ($context["column_order_id"] ?? null);
            echo "</a> ";
        }
        echo "</th>
                   <td class=\"text-left\">";
        // line 55
        if ((($context["sort"] ?? null) == "name")) {
            echo " <a href=\"";
            echo ($context["sort_product"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_product"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_product"] ?? null);
            echo "\">";
            echo ($context["column_product"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                  <!-- <th class=\"text-center\">";
        // line 56
        echo ($context["column_order_id"] ?? null);
        echo "</th> -->
                  <!-- <th class=\"text-left\">";
        // line 57
        echo ($context["column_product"] ?? null);
        echo "</th> -->
                  <th class=\"text-right\">";
        // line 58
        echo ($context["column_quantity"] ?? null);
        echo "</th>
                  <th class=\"text-right\">";
        // line 59
        echo ($context["column_total"] ?? null);
        echo "</th>
                  <th class=\"text-right\">";
        // line 60
        echo ($context["column_commission"] ?? null);
        echo "</th>
                  <th class=\"text-right\">";
        // line 61
        echo ($context["column_price"] ?? null);
        echo "</th>
                </tr>
                </thead>
                  <tbody>
                    ";
        // line 65
        if (($context["commissions"] ?? null)) {
            // line 66
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["commissions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["commission"]) {
                // line 67
                echo "                        <tr>
                          <td class=\"text-center\">";
                // line 68
                echo twig_get_attribute($this->env, $this->source, $context["commission"], "order_id", [], "any", false, false, false, 68);
                echo "</td>
                          <td class=\"text-left\">";
                // line 69
                echo twig_get_attribute($this->env, $this->source, $context["commission"], "name", [], "any", false, false, false, 69);
                echo "</td>
                          <td class=\"text-right\">";
                // line 70
                echo twig_get_attribute($this->env, $this->source, $context["commission"], "quantity", [], "any", false, false, false, 70);
                echo "</td>
                          <td class=\"text-right\">";
                // line 71
                echo twig_get_attribute($this->env, $this->source, $context["commission"], "total", [], "any", false, false, false, 71);
                echo "</td>                           
                          <td class=\"text-right\">";
                // line 72
                echo twig_get_attribute($this->env, $this->source, $context["commission"], "amount", [], "any", false, false, false, 72);
                echo "</td>
                          <td class=\"text-right\">";
                // line 73
                echo twig_get_attribute($this->env, $this->source, $context["commission"], "price", [], "any", false, false, false, 73);
                echo "</td>
                        
                        </tr>

                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "
                    ";
        } else {
            // line 80
            echo "
                          <tr>
                            <td class=\"text-right\">";
            // line 82
            echo ($context["text_result"] ?? null);
            echo "</td>
                           
                          </tr>

                    ";
        }
        // line 87
        echo "                        
                  </tbody>
              </table>
            </div>



            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 95
        echo ($context["pagination"] ?? null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 96
        echo ($context["results"] ?? null);
        echo "</div>
            </div>
          </div>
        </div>
      </div>
  
    <script type=\"text/javascript\"><!--
    \$('#button-filter').on('click', function() {
      url = '';
   
      var filter_order_id = \$('input[name=\\'filter_order_id\\']').val();

      if (filter_order_id) {
        url += '&filter_order_id=' + encodeURIComponent(filter_order_id);
      }  
       

       
      location = 'index.php?route=account/vendor/lts_commission'+url;
    });

    //--></script>

    ";
        // line 119
        echo ($context["footer"] ?? null);
        echo "
</div> 
";
    }

    public function getTemplateName()
    {
        return "default/template/account/vendor/lts_commission.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 119,  274 => 96,  270 => 95,  260 => 87,  252 => 82,  248 => 80,  244 => 78,  233 => 73,  229 => 72,  225 => 71,  221 => 70,  217 => 69,  213 => 68,  210 => 67,  205 => 66,  203 => 65,  196 => 61,  192 => 60,  188 => 59,  184 => 58,  180 => 57,  176 => 56,  158 => 55,  140 => 54,  132 => 48,  122 => 40,  111 => 34,  107 => 33,  97 => 26,  93 => 24,  85 => 20,  82 => 19,  74 => 15,  72 => 14,  66 => 10,  55 => 8,  51 => 7,  46 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/vendor/lts_commission.twig", "");
    }
}
