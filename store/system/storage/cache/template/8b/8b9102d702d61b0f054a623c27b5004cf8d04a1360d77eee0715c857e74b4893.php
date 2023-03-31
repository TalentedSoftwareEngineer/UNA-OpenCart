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
class __TwigTemplate_a884c164fbc6d8a32726f295fe5c783dcad7cf6394e8d7510dbca6b4851c8710 extends \Twig\Template
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

              <div class=\"form-group\">
                  <label class=\"control-label\" for=\"input-status\">";
        // line 48
        echo ($context["entry_status"] ?? null);
        echo "</label>
                  <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                    <option value=\"\"></option>
                    ";
        // line 51
        if ((($context["filter_status"] ?? null) == "1")) {
            // line 52
            echo "                      <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 54
            echo "                      <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                    ";
        }
        // line 56
        echo "                    ";
        if ((($context["filter_status"] ?? null) == "0")) {
            // line 57
            echo "                      <option value=\"0\" selected=\"selected\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 59
            echo "                      <option value=\"0\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    ";
        }
        // line 61
        echo "                  </select>
              </div>
              <div class=\"form-group text-right\">
                <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 64
        echo ($context["button_filter"] ?? null);
        echo "</button>
              </div>
            </div>
          </div>
        </div>
        ";
        // line 70
        echo "        <div class=\"col-md-9 col-md-pull-3 col-sm-12\">
          <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 73
        echo ($context["text_list"] ?? null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                <form action=\"";
        // line 76
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-mads\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered table-hover\">
                            <thead>
                                <tr>
                                    <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                                    <td class=\"text-center\">";
        // line 82
        echo ($context["column_image"] ?? null);
        echo "</td>
                                    <td class=\"text-left\">";
        // line 83
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
        // line 84
        echo ($context["column_category"] ?? null);
        echo "</td>
                                    <td class=\"text-right\">";
        // line 85
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
        // line 86
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
        // line 87
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
        // line 88
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
        // line 89
        echo ($context["column_action"] ?? null);
        echo "</td>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 93
        if (($context["mads"] ?? null)) {
            // line 94
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["mads"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["mads_item"]) {
                // line 95
                echo "                                <tr>
                                  <td class=\"text-center\">
                                    ";
                // line 97
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["mads_item"], "product_id", [], "any", false, false, false, 97), ($context["selected"] ?? null))) {
                    // line 98
                    echo "                                      <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["mads_item"], "product_id", [], "any", false, false, false, 98);
                    echo "\" checked=\"checked\" />
                                    ";
                } else {
                    // line 100
                    echo "                                      <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["mads_item"], "product_id", [], "any", false, false, false, 100);
                    echo "\" />
                                    ";
                }
                // line 102
                echo "                                  </td>
                                  <td class=\"text-center\">";
                // line 103
                if (twig_get_attribute($this->env, $this->source, $context["mads_item"], "image", [], "any", false, false, false, 103)) {
                    echo " <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["mads_item"], "image", [], "any", false, false, false, 103);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["mads_item"], "name", [], "any", false, false, false, 103);
                    echo "\" class=\"img-thumbnail\" /> ";
                } else {
                    echo " <span class=\"img-thumbnail list\"><i class=\"fa fa-camera fa-2x\"></i></span> ";
                }
                echo "</td>
                                  <td class=\"text-left\">";
                // line 104
                echo twig_get_attribute($this->env, $this->source, $context["mads_item"], "name", [], "any", false, false, false, 104);
                echo "</td>
                                  <td class=\"text-left\">";
                // line 105
                echo twig_get_attribute($this->env, $this->source, $context["mads_item"], "category_name", [], "any", false, false, false, 105);
                echo "</td>
                                  <td class=\"text-right\">";
                // line 106
                if ((twig_get_attribute($this->env, $this->source, $context["mads_item"], "total_sellers_accepted", [], "any", false, false, false, 106) <= 0)) {
                    echo " <span class=\"label label-warning\">";
                    echo twig_get_attribute($this->env, $this->source, $context["mads_item"], "total_sellers_accepted", [], "any", false, false, false, 106);
                    echo "</span> ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["mads_item"], "total_sellers_accepted", [], "any", false, false, false, 106) <= 5)) {
                    echo " <span class=\"label label-danger\">";
                    echo twig_get_attribute($this->env, $this->source, $context["mads_item"], "total_sellers_accepted", [], "any", false, false, false, 106);
                    echo "</span> ";
                } else {
                    echo " <span class=\"label label-success\">";
                    echo twig_get_attribute($this->env, $this->source, $context["mads_item"], "total_sellers_accepted", [], "any", false, false, false, 106);
                    echo "</span> ";
                }
                echo "</td>
                                  <td class=\"text-right\">";
                // line 107
                if ((twig_get_attribute($this->env, $this->source, $context["mads_item"], "sold_quantity", [], "any", false, false, false, 107) <= 0)) {
                    echo " <span class=\"label label-warning\">";
                    echo twig_get_attribute($this->env, $this->source, $context["mads_item"], "sold_quantity", [], "any", false, false, false, 107);
                    echo "</span> ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["mads_item"], "sold_quantity", [], "any", false, false, false, 107) <= 5)) {
                    echo " <span class=\"label label-danger\">";
                    echo twig_get_attribute($this->env, $this->source, $context["mads_item"], "sold_quantity", [], "any", false, false, false, 107);
                    echo "</span> ";
                } else {
                    echo " <span class=\"label label-success\">";
                    echo twig_get_attribute($this->env, $this->source, $context["mads_item"], "sold_quantity", [], "any", false, false, false, 107);
                    echo "</span> ";
                }
                echo "</td>
                                  <td class=\"text-left\"><kbd>";
                // line 108
                echo twig_get_attribute($this->env, $this->source, $context["mads_item"], "status", [], "any", false, false, false, 108);
                echo "</kbd></td>
                                  <td class=\"text-left\">\$ ";
                // line 109
                echo twig_get_attribute($this->env, $this->source, $context["mads_item"], "earnings", [], "any", false, false, false, 109);
                echo "</td>
                                  <td class=\"text-right\"><a href=\"";
                // line 110
                echo twig_get_attribute($this->env, $this->source, $context["mads_item"], "edit", [], "any", false, false, false, 110);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                                </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mads_item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "                                ";
        } else {
            // line 114
            echo "                                <tr>
                                    <td class=\"text-center\" colspan=\"8\">";
            // line 115
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                                </tr>
                                ";
        }
        // line 118
        echo "                            </tbody>
                        </table>
                    </div>
                </form>
                <div class=\"row\">
                    <div class=\"col-sm-6 text-left\">";
        // line 123
        echo ($context["pagination"] ?? null);
        echo "</div>
                    <div class=\"col-sm-6 text-right\">";
        // line 124
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

    var filter_status = \$('select[name=\\'filter_status\\']').val();

    if (filter_status !== '') {
        url += '&filter_status=' + encodeURIComponent(filter_status);
    }

    location = 'index.php?route=account/vendor/lts_mads&' + url;
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
            url: 'index.php?route=account/vendor/lts_mads/autocomplete&filter_name=' + encodeURIComponent(request),
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
        // line 181
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
        return array (  510 => 181,  450 => 124,  446 => 123,  439 => 118,  433 => 115,  430 => 114,  427 => 113,  416 => 110,  412 => 109,  408 => 108,  392 => 107,  376 => 106,  372 => 105,  368 => 104,  356 => 103,  353 => 102,  347 => 100,  341 => 98,  339 => 97,  335 => 95,  330 => 94,  328 => 93,  321 => 89,  303 => 88,  285 => 87,  267 => 86,  249 => 85,  245 => 84,  227 => 83,  223 => 82,  214 => 76,  208 => 73,  203 => 70,  195 => 64,  190 => 61,  184 => 59,  178 => 57,  175 => 56,  169 => 54,  163 => 52,  161 => 51,  155 => 48,  146 => 44,  142 => 43,  135 => 39,  129 => 35,  126 => 33,  119 => 31,  117 => 30,  114 => 29,  107 => 25,  102 => 24,  94 => 20,  92 => 19,  86 => 15,  75 => 13,  71 => 12,  66 => 10,  57 => 8,  51 => 7,  47 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/vendor/lts_mads_list.twig", "");
    }
}
