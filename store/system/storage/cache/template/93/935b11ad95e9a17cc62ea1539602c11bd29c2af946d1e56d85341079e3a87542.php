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

/* default/template/account/vendor/lts_mads_list.twig */
class __TwigTemplate_bac787a36483b10fdbed341fb6f6600fff1ac0b1cf745cdbc0d053f97e33ef16 extends \Twig\Template
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
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_filter"] ?? null);
        echo "\" onclick=\"\$('#filter-mads').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i></button>                
                <a href=\"";
        // line 7
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>                 
                <button type=\"button\" form=\"form-mads\" formaction=\"";
        // line 8
        echo ($context["delete"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-mads').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
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
            echo "                <li><a href=\"";
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
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">
      ";
        // line 19
        if (($context["error_warning"] ?? null)) {
            // line 20
            echo "        <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
      ";
        }
        // line 24
        echo "      ";
        if (($context["success"] ?? null)) {
            echo "  
        <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            // line 25
            echo ($context["success"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
      ";
        }
        // line 29
        echo "        
      ";
        // line 30
        if (($context["error_success"] ?? null)) {
            // line 31
            echo "        <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["error_success"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>
      ";
        }
        // line 33
        echo "          
        ";
        // line 35
        echo "      <div class=\"row\">
        <div id=\"filter-mads\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
          <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 39
        echo ($context["text_filter"] ?? null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-name\">";
        // line 43
        echo ($context["entry_title"] ?? null);
        echo "</label>
                <input type=\"text\" name=\"filter_name\" value=\"";
        // line 44
        echo ($context["filter_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              </div>
              <div class=\"form-group text-right\">
                <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 47
        echo ($context["button_filter"] ?? null);
        echo "</button>
              </div>
            </div>
          </div>
        </div>
        ";
        // line 53
        echo "        <div class=\"col-md-9 col-md-pull-3 col-sm-12\">
          <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 56
        echo ($context["text_list"] ?? null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                <form action=\"";
        // line 59
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-mads\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered table-hover\">
                            <thead>
                                <tr>
                                    <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                                    <td class=\"text-center\">";
        // line 65
        echo ($context["column_image"] ?? null);
        echo "</td>
                                    <td class=\"text-left\">";
        // line 66
        if ((($context["sort"] ?? null) == "pd.name")) {
            echo " <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                                    <td class=\"text-left\">";
        // line 67
        echo ($context["column_category"] ?? null);
        echo "</td>
                                    <td class=\"text-right\">";
        // line 68
        if ((($context["sort"] ?? null) == "p.total_sellers_accepted")) {
            echo " <a href=\"";
            echo ($context["sort_total_sellers_accepted"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_total_sellers_accepted"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_total_sellers_accepted"] ?? null);
            echo "\">";
            echo ($context["column_total_sellers_accepted"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                                    <td class=\"text-right\">";
        // line 69
        if ((($context["sort"] ?? null) == "p.sold_quantity")) {
            echo " <a href=\"";
            echo ($context["sort_sold_quantity"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_sold_quantity"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_sold_quantity"] ?? null);
            echo "\">";
            echo ($context["column_sold_quantity"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                                    <td class=\"text-left\">";
        // line 70
        if ((($context["sort"] ?? null) == "p.status")) {
            echo " <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                                    <td class=\"text-left\">";
        // line 71
        if ((($context["sort"] ?? null) == "p.earnings")) {
            echo " <a href=\"";
            echo ($context["sort_earnings"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_earnings"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_earnings"] ?? null);
            echo "\">";
            echo ($context["column_earnings"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                                    <td class=\"text-right\">";
        // line 72
        echo ($context["column_action"] ?? null);
        echo "</td>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 76
        if (($context["products"] ?? null)) {
            // line 77
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 78
                echo "                                <tr>
                                    <td class=\"text-center\">
                                      ";
                // line 80
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 80), ($context["selected"] ?? null))) {
                    // line 81
                    echo "                                        <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 81);
                    echo "\" checked=\"checked\" />
                                      ";
                } else {
                    // line 83
                    echo "                                        <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 83);
                    echo "\" />
                                      ";
                }
                // line 85
                echo "                                    </td>
                                    <td class=\"text-center\">";
                // line 86
                if (twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 86)) {
                    echo " <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 86);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 86);
                    echo "\" class=\"img-thumbnail\" /> ";
                } else {
                    echo " <span class=\"img-thumbnail list\"><i class=\"fa fa-camera fa-2x\"></i></span> ";
                }
                echo "</td>
                                    <td class=\"text-left\">";
                // line 87
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 87);
                echo "</td>
                                    <td class=\"text-left\">";
                // line 88
                echo twig_get_attribute($this->env, $this->source, $context["product"], "commission", [], "any", false, false, false, 88);
                echo "</td>
                                    <td class=\"text-right\">
                                        <div class=\"text\" data-toggle=\"popover\" title=\"";
                // line 90
                echo ($context["text_calculator"] ?? null);
                echo "\" data-content=\"";
                echo ($context["text_admin_commission"] ?? null);
                echo " , ";
                echo ($context["text_getway_charge"] ?? null);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 90);
                echo "</div>
                                    </td>
                                    <td class=\"text-right\">";
                // line 92
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 92) <= 0)) {
                    echo " <span class=\"label label-warning\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 92);
                    echo "</span> ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 92) <= 5)) {
                    echo " <span class=\"label label-danger\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 92);
                    echo "</span> ";
                } else {
                    echo " <span class=\"label label-success\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 92);
                    echo "</span> ";
                }
                echo "</td>
                                    <td class=\"text-left\"><kbd>";
                // line 93
                echo twig_get_attribute($this->env, $this->source, $context["product"], "status", [], "any", false, false, false, 93);
                echo "</kbd></td>
                                    <td class=\"text-right\"><a href=\"";
                // line 94
                echo twig_get_attribute($this->env, $this->source, $context["product"], "edit", [], "any", false, false, false, 94);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                                </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "                                ";
        } else {
            // line 98
            echo "                                <tr>
                                    <td class=\"text-center\" colspan=\"8\">";
            // line 99
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                                </tr>
                                ";
        }
        // line 102
        echo "                            </tbody>
                        </table>
                    </div>
                </form>
                <div class=\"row\">
                    <div class=\"col-sm-6 text-left\">";
        // line 107
        echo ($context["pagination"] ?? null);
        echo "</div>
                    <div class=\"col-sm-6 text-right\">";
        // line 108
        echo ($context["results"] ?? null);
        echo "</div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
 
<script type=\"text/javascript\">
<!--
\$('#button-filter').on('click', function() {
    var url = '';

    var filter_name = \$('input[name=\\'filter_name\\']').val();

    if (filter_name) {
        url += '&filter_name=' + encodeURIComponent(filter_name);
    }

    var filter_model = \$('input[name=\\'filter_model\\']').val();

    if (filter_model) {
        url += '&filter_model=' + encodeURIComponent(filter_model);
    }

    var filter_price = \$('input[name=\\'filter_price\\']').val();

    if (filter_price) {
        url += '&filter_price=' + encodeURIComponent(filter_price);
    }

    var filter_quantity = \$('input[name=\\'filter_quantity\\']').val();

    if (filter_quantity) {
        url += '&filter_quantity=' + encodeURIComponent(filter_quantity);
    }

    var filter_status = \$('select[name=\\'filter_status\\']').val();

    if (filter_status !== '') {
        url += '&filter_status=' + encodeURIComponent(filter_status);
    }

    location = 'index.php?route=account/vendor/lts_product&' + url;
});
//-->
</script>
<script type=\"text/javascript\">
<!--
 
\$('button[form=\\'form-mads\\']').on('click', function(e) {
    \$('#form-mads').attr('action', \$(this).attr('formaction'));
});

\$('input[name=\\'filter_name\\']').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=account/vendor/lts_product/autocomplete&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['product_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('input[name=\\'filter_name\\']').val(item['label']);
    }
});
//-->
</script>
";
        // line 183
        echo ($context["footer"] ?? null);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/account/vendor/lts_mads_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  479 => 183,  401 => 108,  397 => 107,  390 => 102,  384 => 99,  381 => 98,  378 => 97,  367 => 94,  363 => 93,  347 => 92,  336 => 90,  331 => 88,  327 => 87,  315 => 86,  312 => 85,  306 => 83,  300 => 81,  298 => 80,  294 => 78,  289 => 77,  287 => 76,  280 => 72,  262 => 71,  244 => 70,  226 => 69,  208 => 68,  204 => 67,  186 => 66,  182 => 65,  173 => 59,  167 => 56,  162 => 53,  154 => 47,  146 => 44,  142 => 43,  135 => 39,  129 => 35,  126 => 33,  119 => 31,  117 => 30,  114 => 29,  107 => 25,  102 => 24,  94 => 20,  92 => 19,  86 => 15,  75 => 13,  71 => 12,  66 => 10,  57 => 8,  51 => 7,  47 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/vendor/lts_mads_list.twig", "");
    }
}
