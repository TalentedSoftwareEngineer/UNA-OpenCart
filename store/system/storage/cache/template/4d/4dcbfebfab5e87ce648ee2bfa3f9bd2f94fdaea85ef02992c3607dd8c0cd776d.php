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

/* vendor/lts_product_list.twig */
class __TwigTemplate_384aa35687d54cf4d94523b1c28eecefb06a13c1f02802038e3e6a413e0cf80c extends \Twig\Template
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
                <!-- <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_filter"] ?? null);
        echo "\" onclick=\"\$('#filter-product').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i></button>  -->               
            </div>
            <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <ul class=\"breadcrumb\"> 
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "                    <li><a href=\"";
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
            echo "            <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 22
        echo "        ";
        if (($context["success"] ?? null)) {
            // line 23
            echo "            <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["text_success"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 27
        echo "
        <div class=\"well\">
             <i class=\"fa fa-filter\"></i> ";
        // line 29
        echo ($context["text_filter"] ?? null);
        echo "</h3>
            <div class=\"row\">

                <div class=\"col-sm-4\">
                    <div class=\"form-group\">
                      <label class=\"control-label\" for=\"input-name\">";
        // line 34
        echo ($context["entry_name"] ?? null);
        echo "</label>
                      <input type=\"text\" name=\"filter_name\" value=\"";
        // line 35
        echo ($context["filter_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                    </div>
                    <div class=\"form-group\">
                      <label class=\"control-label\" for=\"input-store-owner\">";
        // line 38
        echo ($context["entry_store_owner"] ?? null);
        echo "</label>
                      <input type=\"text\" name=\"filter_store_owner\" value=\"";
        // line 39
        echo ($context["filter_store_owner"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_store_owner"] ?? null);
        echo "\" id=\"input-model\" class=\"form-control\" />
                    </div>

                </div>
                <div class=\"col-sm-4\">
                    
                    
                    <div class=\"form-group\">
                      <label class=\"control-label\" for=\"input-model\">";
        // line 47
        echo ($context["entry_model"] ?? null);
        echo "</label>
                      <input type=\"text\" name=\"filter_model\" value=\"";
        // line 48
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
                 
                </div>
                <div class=\"col-sm-4\">

                    <div class=\"form-group\">
                       <label class=\"control-label\" for=\"input-quantity\">";
        // line 60
        echo ($context["entry_quantity"] ?? null);
        echo "</label>
                       <input type=\"text\" name=\"filter_quantity\" value=\"";
        // line 61
        echo ($context["filter_quantity"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_quantity"] ?? null);
        echo "\" id=\"input-quantity\" class=\"form-control\" />
                    </div>

                    <div class=\"form-group\">
                      <label class=\"control-label\" for=\"input-status\">";
        // line 65
        echo ($context["entry_status"] ?? null);
        echo "</label>
                      <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                        <option value=\"\"></option>
                        

                          ";
        // line 70
        if ((($context["filter_status"] ?? null) == "1")) {
            // line 71
            echo "
                        
                        <option value=\"1\" selected=\"selected\">";
            // line 73
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                        

                          ";
        } else {
            // line 77
            echo "
                        
                        <option value=\"1\">";
            // line 79
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                        

                          ";
        }
        // line 83
        echo "                          ";
        if ((($context["filter_status"] ?? null) == "0")) {
            // line 84
            echo "
                        
                        
                        <option value=\"0\" selected=\"selected\">";
            // line 87
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                        
                        

                          ";
        } else {
            // line 92
            echo "
                        
                        
                        <option value=\"0\">";
            // line 95
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                        

                          ";
        }
        // line 99
        echo "

                      
                      
                        
                      
                      
                      </select>
                    </div>
                    <div class=\"form-group text-right\">
                      <button type=\"button\" id=\"button-filter\" data-toggle=\"tooltip\" title=\"";
        // line 109
        echo ($context["button_filter"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i>";
        echo ($context["button_filter"] ?? null);
        echo "</button>
                    </div>
                </div>
            </div>
        </div>




        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 120
        echo ($context["text_list"] ?? null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                <form action=\"";
        // line 123
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-product\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered table-hover\">
                            <thead>
                                <tr>
                                    <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                                    <td class=\"text-center\">";
        // line 129
        echo ($context["column_image"] ?? null);
        echo "</td>
                                    
                                    <td class=\"text-left\">";
        // line 131
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
                                    <td class=\"text-left\"><a href=\"";
        // line 132
        echo ($context["sort_store_owner"] ?? null);
        echo "\">";
        echo ($context["column_store_owner"] ?? null);
        echo "</a></td>
                                    <td class=\"text-left\">";
        // line 133
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
        // line 134
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
        // line 135
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
        // line 136
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
        // line 137
        echo ($context["column_action"] ?? null);
        echo "</td>
                                </tr>
                            </thead>
                            <tbody>

                                ";
        // line 142
        if (($context["products"] ?? null)) {
            // line 143
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 144
                echo "                                    
                                        <tr>
                                            <td class=\"text-center\">";
                // line 146
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 146), ($context["selected"] ?? null))) {
                    // line 147
                    echo "                                                <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 147);
                    echo "\" checked=\"checked\" />
                                            ";
                } else {
                    // line 149
                    echo "                                                <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 149);
                    echo "\" />
                                                ";
                }
                // line 150
                echo "</td>
                                            
                                            <td class=\"text-center\">";
                // line 152
                if (twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 152)) {
                    echo " <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 152);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 152);
                    echo "\" class=\"img-thumbnail\" /> ";
                } else {
                    echo " <span class=\"img-thumbnail list\"><i class=\"fa fa-camera fa-2x\"></i></span> ";
                }
                echo "</td>
                                            <td class=\"text-left\">";
                // line 153
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 153);
                echo "</td>
                                            <td class=\"text-left\">";
                // line 154
                echo twig_get_attribute($this->env, $this->source, $context["product"], "store_owner", [], "any", false, false, false, 154);
                echo "</td>
                                          
                                            <td class=\"text-left\">";
                // line 156
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 156);
                echo "</td>
                                            <td class=\"text-right\">";
                // line 157
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 157)) {
                    echo " <span style=\"text-decoration: line-through;\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 157);
                    echo "</span><br/>
                                                    <div class=\"text-danger\">";
                    // line 158
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 158);
                    echo "</div>
                                                    ";
                } else {
                    // line 160
                    echo "                                                        ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 160);
                    echo "
                                                        ";
                }
                // line 161
                echo "</td>
                                            <td class=\"text-right\">";
                // line 162
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 162) <= 0)) {
                    echo " <span class=\"label label-warning\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 162);
                    echo "</span> ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 162) <= 5)) {
                    echo " <span class=\"label label-danger\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 162);
                    echo "</span> ";
                } else {
                    echo " <span class=\"label label-success\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 162);
                    echo "</span> ";
                }
                echo "</td>
                                            <td class=\"text-left\"><kbd> ";
                // line 163
                echo twig_get_attribute($this->env, $this->source, $context["product"], "status", [], "any", false, false, false, 163);
                echo " </kbd> </td>
                                            <td class=\"text-right\">
                                                 ";
                // line 165
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "status", [], "any", false, false, false, 165) == "Approve")) {
                    // line 166
                    echo "                                                    <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "disapprove", [], "any", false, false, false, 166);
                    echo "\" class=\"btn btn-danger disapprove\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["text_disapprove"] ?? null);
                    echo "\"><i class=\"fa fa-thumbs-o-down\"></i></a> 
                                                ";
                } else {
                    // line 168
                    echo "                                                    <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "approve", [], "any", false, false, false, 168);
                    echo "\" class=\"btn btn-success approve\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["text_approve"] ?? null);
                    echo "\"><i class=\"fa fa-thumbs-o-up\" ></i></a>
                                                ";
                }
                // line 170
                echo "                                                <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "edit", [], "any", false, false, false, 170);
                echo "\" class=\"btn btn-primary\" data-toggle=\"tooltip\" title=\"";
                echo ($context["text_edit"] ?? null);
                echo "\"><i class=\"fa fa-pencil\"></i></a>

                                               

                                            </td>
                                                    </tr>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 177
            echo "                                                        ";
        } else {
            // line 178
            echo "                                                            <tr>
                                                                <td class=\"text-center\" colspan=\"8\">";
            // line 179
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                                                            </tr>
                                                            ";
        }
        // line 182
        echo "                                                            </tbody>

                                                        </table>
                                                    </div>
                                                </form>
                                                <div class=\"row\">
                                                    <div class=\"col-sm-6 text-left\">";
        // line 188
        echo ($context["pagination"] ?? null);
        echo "</div>
                                                    <div class=\"col-sm-6 text-right\">";
        // line 189
        echo ($context["results"] ?? null);
        echo "</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
<script type=\"text/javascript\"><!--
// IE and Edge fix!
    \$('.approve').click(function () {
        var pid = \$(this).attr(\"data\");
        \$.ajax({
            url: 'index.php?route=vendor/lts_product/approve&user_token=";
        // line 199
        echo ($context["user_token"] ?? null);
        echo "&product_id=' + pid,
            dataType: 'json',
            success: function (json) {
                \$('.fa-thumbs-o-up').addClass('disable');

                \$('#content').load('index.php?route=vendor/lts_product&user_token=";
        // line 204
        echo ($context["user_token"] ?? null);
        echo "');

            }
        });
    });


    \$('.disapprove').click(function () {
        var pid = \$(this).attr(\"data\");
        \$.ajax({
            url: 'index.php?route=vendor/lts_product/disapprove&user_token=";
        // line 214
        echo ($context["user_token"] ?? null);
        echo "&product_id=' + pid,
            dataType: 'json',
            success: function (json) {
                \$('.fa-thumbs-o-up').addClass('disable');

            }
        });
    });

    //--></script>

    <script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
    var url = '';

    var filter_name = \$('input[name=\\'filter_name\\']').val();

    if (filter_name) {
        url += '&filter_name=' + encodeURIComponent(filter_name);
    }

    var filter_store_owner = \$('input[name=\\'filter_store_owner\\']').val();

    if (filter_store_owner) {
        url += '&filter_store_owner=' + encodeURIComponent(filter_store_owner);
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

    location = 'index.php?route=vendor/lts_product&user_token=";
        // line 265
        echo ($context["user_token"] ?? null);
        echo "' + url;
});
//--></script> 
  <script type=\"text/javascript\"><!--
// IE and Edge fix!
\$('button[form=\\'form-product\\']').on('click', function(e) {
    \$('#form-product').attr('action', \$(this).attr('formaction'));
});
  
\$('input[name=\\'filter_name\\']').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 277
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
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

\$('input[name=\\'filter_store_owner\\']').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=vendor/lts_vendor/autocomplete&user_token=";
        // line 297
        echo ($context["user_token"] ?? null);
        echo "&filter_store_owner=' +  encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['filter_store_owner'],
                        value: item['vendor_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('input[name=\\'filter_store_owner\\']').val(item['label']);
    }
});
//--></script></div>
";
        // line 314
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "vendor/lts_product_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  692 => 314,  672 => 297,  649 => 277,  634 => 265,  580 => 214,  567 => 204,  559 => 199,  546 => 189,  542 => 188,  534 => 182,  528 => 179,  525 => 178,  522 => 177,  506 => 170,  498 => 168,  490 => 166,  488 => 165,  483 => 163,  467 => 162,  464 => 161,  458 => 160,  453 => 158,  447 => 157,  443 => 156,  438 => 154,  434 => 153,  422 => 152,  418 => 150,  412 => 149,  406 => 147,  404 => 146,  400 => 144,  395 => 143,  393 => 142,  385 => 137,  367 => 136,  349 => 135,  331 => 134,  313 => 133,  307 => 132,  289 => 131,  284 => 129,  275 => 123,  269 => 120,  253 => 109,  241 => 99,  234 => 95,  229 => 92,  221 => 87,  216 => 84,  213 => 83,  206 => 79,  202 => 77,  195 => 73,  191 => 71,  189 => 70,  181 => 65,  172 => 61,  168 => 60,  156 => 53,  152 => 52,  143 => 48,  139 => 47,  126 => 39,  122 => 38,  114 => 35,  110 => 34,  102 => 29,  98 => 27,  90 => 23,  87 => 22,  79 => 18,  77 => 17,  71 => 13,  60 => 11,  56 => 10,  51 => 8,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "vendor/lts_product_list.twig", "");
    }
}
