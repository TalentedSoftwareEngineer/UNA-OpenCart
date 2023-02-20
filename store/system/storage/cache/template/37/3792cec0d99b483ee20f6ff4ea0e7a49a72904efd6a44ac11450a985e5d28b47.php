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

/* vendor/lts_order_list.twig */
class __TwigTemplate_1b67373ea00c4a08049664e9eaf253cb2039f933a439daae62c54e1decef624b extends \Twig\Template
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
            ";
        // line 8
        echo "            <h1>";
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
        echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 24
        echo ($context["text_list"] ?? null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                <style type=\"text/css\">
                .table thead>tr>td,
                .table tbody>tr>td {
                    vertical-align: middle;
                }
                </style>
                <div class=\"well\">
                    <div class=\"row\">
                        <div class=\"col-sm-4\">
                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"input-order-id\">";
        // line 37
        echo ($context["entry_order_id"] ?? null);
        echo "</label>
                                <input type=\"text\" name=\"filter_order_id\" value=\"";
        // line 38
        echo ($context["filter_order_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_order_id"] ?? null);
        echo "\" id=\"input-order-id\" class=\"form-control\" />
                            </div>
                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"input-total\">";
        // line 41
        echo ($context["entry_total"] ?? null);
        echo "</label>
                                <input type=\"text\" name=\"filter_total\" value=\"";
        // line 42
        echo ($context["filter_total"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_total"] ?? null);
        echo "\" id=\"input-total\" class=\"form-control\" />
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"input-customer\">";
        // line 47
        echo ($context["entry_customer"] ?? null);
        echo "</label>
                                <input type=\"text\" name=\"filter_customer\" value=\"";
        // line 48
        echo ($context["filter_customer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_customer"] ?? null);
        echo "\" id=\"input-customer\" class=\"form-control\" />
                            </div>
                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"input-date-added\">";
        // line 51
        echo ($context["entry_date_added"] ?? null);
        echo "</label>
                                <div class=\"input-group date\">
                                    <input type=\"text\" name=\"filter_date_added\" value=\"";
        // line 53
        echo ($context["filter_date_added"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_added"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-added\" class=\"form-control\" />
                                    <span class=\"input-group-btn\">
                                        <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                                    </span> </div>
                            </div>
                        </div>
                        <div class=\"col-sm-4\">

                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"input-order-status\">";
        // line 62
        echo ($context["entry_order_status"] ?? null);
        echo "</label>
                                <select name=\"filter_order_status_id\" id=\"input-order-status\" class=\"form-control\">
                                    <option value=\"\">SELECT ORDER</option>
                                    ";
        // line 65
        if ((($context["filter_order_status_id"] ?? null) == "0")) {
            // line 66
            echo "                                    <option value=\"0\" selected=\"selected\">";
            echo ($context["text_missing"] ?? null);
            echo "</option>
                                    ";
        } else {
            // line 68
            echo "                                    <option value=\"0\">";
            echo ($context["text_missing"] ?? null);
            echo "</option>
                                    ";
        }
        // line 70
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 71
            echo "                                   
                                    ";
            // line 72
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 72) == ($context["filter_order_status_id"] ?? null))) {
                // line 73
                echo "                                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 73);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 73);
                echo "</option>
                                    ";
            } else {
                // line 75
                echo "                                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 75);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 75);
                echo "</option>
                                    ";
            }
            // line 77
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "                                </select>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"input-date-modified\">";
        // line 81
        echo ($context["entry_date_modified"] ?? null);
        echo "</label>
                                <div class=\"input-group date\">
                                    <input type=\"text\" name=\"filter_date_modified\" value=\"";
        // line 83
        echo ($context["filter_date_modified"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_modified"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-modified\" class=\"form-control\" />
                                    <span class=\"input-group-btn\">
                                        <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                                    </span> </div>
                            </div>
                            <div class=\"form-group text-right\">
                                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 89
        echo ($context["button_filter"] ?? null);
        echo "\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        echo ($context["button_filter"] ?? null);
        echo "</button>
                            </div>
                        </div>
                    </div>
                </div>
                <form action=\"";
        // line 94
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-order-list\" class=\"form-horizontal\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered table-hover\">
                            <thead>
                                <tr>
                                    <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                                    <th class=\"text-right\"><a href=\"";
        // line 100
        echo ($context["sort_order"] ?? null);
        echo "\">";
        echo ($context["column_order_id"] ?? null);
        echo "</a></th>
                                    <th class=\"text-left\"><a href=\"";
        // line 101
        echo ($context["sort_vendor"] ?? null);
        echo "\">";
        echo ($context["column_customer"] ?? null);
        echo "</a></th>
                                    <th class=\"text-center\">";
        // line 102
        echo ($context["column_vendor_information"] ?? null);
        echo "</th>
                                    ";
        // line 104
        echo "                                    <th class=\"text-left\"><a href=\"";
        echo ($context["sort_status"] ?? null);
        echo "\">";
        echo ($context["column_status"] ?? null);
        echo "</a></th>
                                    <th class=\"text-right\"><a href=\"";
        // line 105
        echo ($context["sort_total"] ?? null);
        echo "\">";
        echo ($context["column_total"] ?? null);
        echo "</a></th>
                                    <th class=\"text-left\"><a href=\"";
        // line 106
        echo ($context["sort_date_added"] ?? null);
        echo "\">";
        echo ($context["column_date_added"] ?? null);
        echo "</a></th>
                                    <th class=\"text-left\"><a href=\"";
        // line 107
        echo ($context["sort_date_added"] ?? null);
        echo "\">";
        echo ($context["column_date_modified"] ?? null);
        echo "</a></th>
                                    <th> ";
        // line 108
        echo ($context["text_action"] ?? null);
        echo " </th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 112
        if (($context["orders"] ?? null)) {
            // line 113
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 114
                echo "                                <tr style=\"vertical-align: middle;\">
                                    <td class=\"text-center\"> ";
                // line 115
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 115), ($context["selected"] ?? null))) {
                    // line 116
                    echo "                                        <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 116);
                    echo "\" checked=\"checked\" />
                                        ";
                } else {
                    // line 118
                    echo "                                        <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 118);
                    echo "\" />
                                        ";
                }
                // line 120
                echo "                                      </td>
                                    <td class=\"text-right\">";
                // line 121
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 121);
                echo "</td>
                                    <td>";
                // line 122
                echo twig_get_attribute($this->env, $this->source, $context["order"], "customer", [], "any", false, false, false, 122);
                echo "</td>
                                    <td class=\"text-center\">
                                        <table class=\"table table-bordered\">
                                            <thead>
                                                <tr>
                                                    <td>";
                // line 127
                echo ($context["column_products"] ?? null);
                echo "</td>
                                                    <td>";
                // line 128
                echo ($context["column_storename"] ?? null);
                echo "</td>
                                                    <td>";
                // line 129
                echo ($context["column_vendorstatus"] ?? null);
                echo "</td>
                                                     
                                                </tr>
                                            </thead>
                                            <tbody>
                                                ";
                // line 134
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["order"], "vendor_products", [], "any", false, false, false, 134));
                foreach ($context['_seq'] as $context["_key"] => $context["vendor"]) {
                    // line 135
                    echo "                                                
                                                <tr>
                                                    <td>";
                    // line 137
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["vendor"], "products", [], "any", false, false, false, 137));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 138
                        echo "                                                        ";
                        echo $context["product"];
                        echo "
                                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 139
                    echo "</td>
                                                    <td>";
                    // line 140
                    if ((twig_get_attribute($this->env, $this->source, $context["vendor"], "sold_by_type", [], "any", false, false, false, 140) == "admin")) {
                        // line 141
                        echo "                                                        <label class=\"label label-danger\"> ";
                        echo twig_get_attribute($this->env, $this->source, $context["vendor"], "store_name", [], "any", false, false, false, 141);
                        echo " </label>
                                                        ";
                    } else {
                        // line 143
                        echo "                                                        <label class=\"label label-success\">";
                        echo twig_get_attribute($this->env, $this->source, $context["vendor"], "store_name", [], "any", false, false, false, 143);
                        echo "</label>
                                                        ";
                    }
                    // line 144
                    echo "</td>
                                                    <td>";
                    // line 145
                    echo twig_get_attribute($this->env, $this->source, $context["vendor"], "order_status", [], "any", false, false, false, 145);
                    echo "</td>
                                                     
                                                </tr>
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vendor'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 149
                echo "                                            </tbody>
                                        </table>
                                    </td>
                                    <td>";
                // line 152
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_status", [], "any", false, false, false, 152);
                echo "</td>
                                    <td>";
                // line 153
                echo twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 153);
                echo "</td>
                                    <td>";
                // line 154
                echo twig_get_attribute($this->env, $this->source, $context["order"], "date_added", [], "any", false, false, false, 154);
                echo "</td>
                                    <td>";
                // line 155
                echo twig_get_attribute($this->env, $this->source, $context["order"], "date_modified", [], "any", false, false, false, 155);
                echo "</td>
                                    <td><a href=\"";
                // line 156
                echo twig_get_attribute($this->env, $this->source, $context["order"], "view", [], "any", false, false, false, 156);
                echo "\" class=\"btn btn-primary\" data-toggle=\"tooltip\" title=\"";
                echo ($context["text_view"] ?? null);
                echo "\"><i class=\"fa fa-eye\"> </i></a> </td>
                                </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            echo "                                ";
        } else {
            // line 160
            echo "                                <tr>
                                    <td class=\"text-center\" colspan=\"8\">";
            // line 161
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                                </tr>
                                ";
        }
        // line 164
        echo "                            </tbody>
                        </table>
                    </div>
                </form>
                <div class=\"row\">
                    <div class=\"col-sm-6 text-left\">";
        // line 169
        echo ($context["pagination"] ?? null);
        echo "</div>
                    <div class=\"col-sm-6 text-right\">";
        // line 170
        echo ($context["results"] ?? null);
        echo "</div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        // line 176
        echo ($context["footer"] ?? null);
        echo "

<script type=\"text/javascript\"> 
  \$('#button-filter').on('click', function() {
    url = '';

    var filter_order_id = \$('input[name=\\'filter_order_id\\']').val();

    if (filter_order_id) {
      url += '&filter_order_id=' + encodeURIComponent(filter_order_id);
    }

    var filter_customer = \$('input[name=\\'filter_customer\\']').val();

    if (filter_customer) {
      url += '&filter_customer=' + encodeURIComponent(filter_customer);
    }

    
    var filter_total = \$('input[name=\\'filter_total\\']').val();

    if (filter_total !== '') {
      url += '&filter_total=' + encodeURIComponent(filter_total);
    }

    var filter_date_added = \$('input[name=\\'filter_date_added\\']').val();

    if (filter_date_added) {
      url += '&filter_date_added=' + encodeURIComponent(filter_date_added);
    }

    var filter_date_modified = \$('input[name=\\'filter_date_modified\\']').val();

    if (filter_date_modified) {
      url += '&filter_date_modified=' + encodeURIComponent(filter_date_modified);
    }


    var filter_order_status_id = \$('select[name=\\'filter_order_status_id\\']').val();

    if (filter_order_status_id !== '') {
      url += '&filter_order_status_id=' + encodeURIComponent(filter_order_status_id);
    }

    location = 'index.php?route=vendor/lts_order&user_token=";
        // line 220
        echo ($context["user_token"] ?? null);
        echo "' + url;
  });
   </script> 
     

<script src=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js\" type=\"text/javascript\"></script>
<link href=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
<script type=\"text/javascript\"><!--
  \$('.date').datetimepicker({
    language: '";
        // line 229
        echo ($context["datepicker"] ?? null);
        echo "',
    pickTime: false
  });
  //--></script>";
    }

    public function getTemplateName()
    {
        return "vendor/lts_order_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  528 => 229,  516 => 220,  469 => 176,  460 => 170,  456 => 169,  449 => 164,  443 => 161,  440 => 160,  437 => 159,  426 => 156,  422 => 155,  418 => 154,  414 => 153,  410 => 152,  405 => 149,  395 => 145,  392 => 144,  386 => 143,  380 => 141,  378 => 140,  375 => 139,  366 => 138,  362 => 137,  358 => 135,  354 => 134,  346 => 129,  342 => 128,  338 => 127,  330 => 122,  326 => 121,  323 => 120,  317 => 118,  311 => 116,  309 => 115,  306 => 114,  301 => 113,  299 => 112,  292 => 108,  286 => 107,  280 => 106,  274 => 105,  267 => 104,  263 => 102,  257 => 101,  251 => 100,  242 => 94,  232 => 89,  221 => 83,  216 => 81,  211 => 78,  205 => 77,  197 => 75,  189 => 73,  187 => 72,  184 => 71,  179 => 70,  173 => 68,  167 => 66,  165 => 65,  159 => 62,  145 => 53,  140 => 51,  132 => 48,  128 => 47,  118 => 42,  114 => 41,  106 => 38,  102 => 37,  86 => 24,  82 => 22,  74 => 18,  72 => 17,  66 => 13,  55 => 11,  51 => 10,  45 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "vendor/lts_order_list.twig", "");
    }
}
