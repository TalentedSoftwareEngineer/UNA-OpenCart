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
class __TwigTemplate_f015589e866105a3f994a34f6bc0bf7fd8920ee64193410278cd08270c6d6f1e extends \Twig\Template
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
                <button type=\"button\" form=\"form-product\" formaction=\"";
        // line 8
        echo ($context["delete"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-product').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
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
    <div class=\"container-fluid\">";
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
        echo "           ";
        if (($context["success"] ?? null)) {
            echo "  
        <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            // line 24
            echo ($context["success"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
          ";
        }
        // line 28
        echo "        
        ";
        // line 29
        if (($context["error_success"] ?? null)) {
            // line 30
            echo "        <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["error_success"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>
        ";
        }
        // line 33
        echo "          
            <!-- <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button> -->
        ";
        // line 36
        echo "        <div class=\"row\">
            <div id=\"filter-mads\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 40
        echo ($context["text_filter"] ?? null);
        echo "</h3>
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"input-name\">";
        // line 44
        echo ($context["entry_name"] ?? null);
        echo "</label>
                            <input type=\"text\" name=\"filter_name\" value=\"";
        // line 45
        echo ($context["filter_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"input-model\">";
        // line 48
        echo ($context["entry_model"] ?? null);
        echo "</label>
                            <input type=\"text\" name=\"filter_model\" value=\"";
        // line 49
        echo ($context["filter_model"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_model"] ?? null);
        echo "\" id=\"input-model\" class=\"form-control\" />
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"input-price\">";
        // line 52
        echo ($context["entry_price"] ?? null);
        echo "</label>
                            <input type=\"text\" name=\"filter_price\" value=\"";
        // line 53
        echo ($context["filter_price"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_price"] ?? null);
        echo "\" id=\"input-price\" class=\"form-control\" />
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"input-quantity\">";
        // line 56
        echo ($context["entry_quantity"] ?? null);
        echo "</label>
                            <input type=\"text\" name=\"filter_quantity\" value=\"";
        // line 57
        echo ($context["filter_quantity"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_quantity"] ?? null);
        echo "\" id=\"input-quantity\" class=\"form-control\" />
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"input-status\">";
        // line 60
        echo ($context["entry_status"] ?? null);
        echo "</label>
                            <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                                <option value=\"\"></option>
                                ";
        // line 63
        if ((($context["filter_status"] ?? null) == "1")) {
            // line 64
            echo "                                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                ";
        } else {
            // line 66
            echo "                                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                ";
        }
        // line 68
        echo "                                ";
        if ((($context["filter_status"] ?? null) == "0")) {
            // line 69
            echo "                                <option value=\"0\" selected=\"selected\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                ";
        } else {
            // line 71
            echo "                                <option value=\"0\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                ";
        }
        // line 73
        echo "                            </select>
                        </div>
                        <div class=\"form-group text-right\">
                            <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 76
        echo ($context["button_filter"] ?? null);
        echo "</button>
                        </div>
                    </div>
                </div>
            </div>
            ";
        // line 82
        echo "            <div class=\"col-md-9 col-md-pull-3 col-sm-12\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 85
        echo ($context["text_list"] ?? null);
        echo "</h3>
                    </div>
                    <div class=\"panel-body\">
                        <form action=\"";
        // line 88
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-product\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered table-hover\">
                                    <thead>
                                        <tr>
                                            <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                                            <td class=\"text-center\">";
        // line 94
        echo ($context["column_image"] ?? null);
        echo "</td>
                                            <td class=\"text-left\">";
        // line 95
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
        // line 96
        if ((($context["sort"] ?? null) == "p.model")) {
            echo " <a href=\"";
            echo ($context["sort_model"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_model"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_model"] ?? null);
            echo "\">";
            echo ($context["column_model"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                                            <td class=\"text-right\">";
        // line 97
        if ((($context["sort"] ?? null) == "p.price")) {
            echo " <a href=\"";
            echo ($context["sort_price"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_price"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_price"] ?? null);
            echo "\">";
            echo ($context["column_price"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                                            <td class=\"text-right\">";
        // line 98
        if ((($context["sort"] ?? null) == "p.quantity")) {
            echo " <a href=\"";
            echo ($context["sort_quantity"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_quantity"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_quantity"] ?? null);
            echo "\">";
            echo ($context["column_quantity"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                                            <td class=\"text-left\">";
        // line 99
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
                                            <td class=\"text-right\">";
        // line 100
        echo ($context["column_action"] ?? null);
        echo "</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
        // line 104
        if (($context["products"] ?? null)) {
            // line 105
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 106
                echo "                                        <tr>
                                            <td class=\"text-center\">
                                                ";
                // line 108
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 108), ($context["selected"] ?? null))) {
                    // line 109
                    echo "                                                <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 109);
                    echo "\" checked=\"checked\" />
                                                ";
                } else {
                    // line 111
                    echo "                                                <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 111);
                    echo "\" />
                                                ";
                }
                // line 112
                echo "</td>
                                            <td class=\"text-center\">";
                // line 113
                if (twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 113)) {
                    echo " <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 113);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 113);
                    echo "\" class=\"img-thumbnail\" /> ";
                } else {
                    echo " <span class=\"img-thumbnail list\"><i class=\"fa fa-camera fa-2x\"></i></span> ";
                }
                echo "</td>
                                            <td class=\"text-left\">";
                // line 114
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 114);
                echo "</td>
                                            <td class=\"text-left\">";
                // line 115
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 115);
                echo "</td>
                                            <td class=\"text-right\">
                                                ";
                // line 117
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 117)) {
                    echo " <span style=\"text-decoration: line-through;\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 117);
                    echo "</span><br />
                                                <div class=\"text-danger\" data-toggle=\"popover\" title=\"";
                    // line 118
                    echo ($context["text_calculator"] ?? null);
                    echo "\" data-content=\"";
                    echo ($context["text_admin_commission"] ?? null);
                    echo " </br> ";
                    echo ($context["text_getway_charge"] ?? null);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 118);
                    echo "</div>
                                                ";
                } else {
                    // line 120
                    echo "                                                <div class=\"text\" data-toggle=\"popover\" title=\"";
                    echo ($context["text_calculator"] ?? null);
                    echo "\" data-content=\"";
                    echo ($context["text_admin_commission"] ?? null);
                    echo " 
                              ,
                               ";
                    // line 122
                    echo ($context["text_getway_charge"] ?? null);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 122);
                    echo "</div>
                                                ";
                }
                // line 124
                echo "                                            </td>
                                            <td class=\"text-right\">";
                // line 125
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 125) <= 0)) {
                    echo " <span class=\"label label-warning\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 125);
                    echo "</span> ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 125) <= 5)) {
                    echo " <span class=\"label label-danger\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 125);
                    echo "</span> ";
                } else {
                    echo " <span class=\"label label-success\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 125);
                    echo "</span> ";
                }
                echo "</td>
                                            <td class=\"text-left\"><kbd>";
                // line 126
                echo twig_get_attribute($this->env, $this->source, $context["product"], "status", [], "any", false, false, false, 126);
                echo "</kbd></td>
                                            <td class=\"text-right\"><a href=\"";
                // line 127
                echo twig_get_attribute($this->env, $this->source, $context["product"], "edit", [], "any", false, false, false, 127);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                                        </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            echo "                                        ";
        } else {
            // line 131
            echo "                                        <tr>
                                            <td class=\"text-center\" colspan=\"8\">";
            // line 132
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                                        </tr>
                                        ";
        }
        // line 135
        echo "                                    </tbody>
                                </table>
                            </div>
                        </form>
                        <div class=\"row\">
                            <div class=\"col-sm-6 text-left\">";
        // line 140
        echo ($context["pagination"] ?? null);
        echo "</div>
                            <div class=\"col-sm-6 text-right\">";
        // line 141
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
 
    \$('button[form=\\'form-product\\']').on('click', function(e) {
        \$('#form-product').attr('action', \$(this).attr('formaction'));
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

\$('input[name=\\'filter_model\\']').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=account/vendor/lts_product/autocomplete&filter_model=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['model'],
                        value: item['product_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('input[name=\\'filter_model\\']').val(item['label']);
    }
});
//-->
</script>
";
        // line 236
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
        return array (  595 => 236,  497 => 141,  493 => 140,  486 => 135,  480 => 132,  477 => 131,  474 => 130,  463 => 127,  459 => 126,  443 => 125,  440 => 124,  433 => 122,  425 => 120,  414 => 118,  408 => 117,  403 => 115,  399 => 114,  387 => 113,  384 => 112,  378 => 111,  372 => 109,  370 => 108,  366 => 106,  361 => 105,  359 => 104,  352 => 100,  334 => 99,  316 => 98,  298 => 97,  280 => 96,  262 => 95,  258 => 94,  249 => 88,  243 => 85,  238 => 82,  230 => 76,  225 => 73,  219 => 71,  213 => 69,  210 => 68,  204 => 66,  198 => 64,  196 => 63,  190 => 60,  182 => 57,  178 => 56,  170 => 53,  166 => 52,  158 => 49,  154 => 48,  146 => 45,  142 => 44,  135 => 40,  129 => 36,  125 => 33,  118 => 30,  116 => 29,  113 => 28,  106 => 24,  101 => 23,  93 => 19,  91 => 18,  86 => 15,  75 => 13,  71 => 12,  66 => 10,  57 => 8,  51 => 7,  47 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/vendor/lts_mads_list.twig", "");
    }
}
