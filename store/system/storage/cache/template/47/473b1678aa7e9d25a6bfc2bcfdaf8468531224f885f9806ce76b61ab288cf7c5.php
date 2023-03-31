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

/* vendor/lts_commission.twig */
class __TwigTemplate_b09a5f062888adaf6ea7fcdd895415c6e1173b3bc25d8abee21c4e9d0f394bae extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
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
        // line 15
        if (($context["error_warning"] ?? null)) {
            // line 16
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 20
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 21
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 25
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 27
        echo ($context["text_list"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <div class=\"row\">
          <div class=\"col-md-5\">
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

          <div class=\"col-md-5\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-date-added\">";
        // line 40
        echo ($context["column_date_added"] ?? null);
        echo "</label>
                <div class=\"input-group date\" style=\"margin-top:-2px;\">
                  <input type=\"text\" name=\"filter_date_added\" value=\"";
        // line 42
        echo ($context["filter_date_added"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["column_date_added"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-added\" class=\"form-control\" />
                  <span class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                  </span> 
                </div>
              </div>
          </div>
          <div class=\"col-md-2\">
              <div class=\"form-group\">
                <button type=\"button\" id=\"button-filter\" data-toggle=\"tooltip\" title=\"";
        // line 51
        echo ($context["button_filter"] ?? null);
        echo "\" class=\"btn btn-default\" style=\"margin-top:21px\"><i class=\"fa fa-filter\"></i> ";
        echo ($context["button_filter"] ?? null);
        echo "</button>
              </div>
          </div>
        </div>
      </div>
      <div class=\"panel-body\">
        <form action=\"\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-commission\" class=\"commission_distribute\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                  <tr>
                    <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                    <td class=\"text-left\">";
        // line 63
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
        echo "</td>

                    <td class=\"text-left\">";
        // line 65
        if ((($context["sort"] ?? null) == "store_owner")) {
            echo " <a href=\"";
            echo ($context["sort_customer"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_store_owner"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_customer"] ?? null);
            echo "\">";
            echo ($context["column_store_owner"] ?? null);
            echo "</a> ";
        }
        echo "</td>                   

                    <td class=\"text-left\">";
        // line 67
        echo ($context["column_store_name"] ?? null);
        echo "</td>

                    <td class=\"text-left\">";
        // line 69
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
                    
                    <td class=\"text-left\">";
        // line 71
        echo ($context["column_price"] ?? null);
        echo "</td>

                    <td class=\"text-center\">";
        // line 73
        echo ($context["column_quantity"] ?? null);
        echo "</td>
                   
                    <td class=\"text-left\">";
        // line 75
        if ((($context["sort"] ?? null) == "total")) {
            echo " <a href=\"";
            echo ($context["sort_product_total"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_total"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_product_total"] ?? null);
            echo "\">";
            echo ($context["column_total"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                    

                    <td class=\"text-left\">";
        // line 78
        if ((($context["sort"] ?? null) == "lc.amount")) {
            echo " <a href=\"";
            echo ($context["sort_admin_commission"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_commission"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_admin_commission"] ?? null);
            echo "\">";
            echo ($context["column_commission"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                     
                    <td class=\"text-left\">";
        // line 80
        if ((($context["sort"] ?? null) == "lc.date_added")) {
            echo " <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a> ";
        }
        echo "</td>

                    <!-- <td class=\"text-left\">";
        // line 82
        if ((($context["sort"] ?? null) == "o.date_modified")) {
            echo " <a href=\"";
            echo ($context["sort_date_modified"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_modified"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_date_modified"] ?? null);
            echo "\">";
            echo ($context["column_date_modified"] ?? null);
            echo "</a> ";
        }
        echo "</td> -->
                    <!-- <td class=\"text-center\">";
        // line 83
        echo ($context["column_action"] ?? null);
        echo "</td> -->
                  </tr>
                </thead>

               <!-- <thead>
                  <tr>  -->  
                             
                     <!-- <th class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /> </th> -->
                    <!-- ";
        // line 91
        echo " -->
                     <!-- <th class=\"text-left\">";
        // line 92
        echo ($context["column_order_id"] ?? null);
        echo "</th>
                     <th class=\"text-left\">";
        // line 93
        echo ($context["column_store_owner"] ?? null);
        echo "</th>
                     <th class=\"text-left\">";
        // line 94
        echo ($context["column_store_name"] ?? null);
        echo "</th>
                     
                     <th class=\"text-left\">";
        // line 96
        echo ($context["column_product"] ?? null);
        echo "</th>
                     <th class=\"text-center\">";
        // line 97
        echo ($context["column_price"] ?? null);
        echo "</th>
                     <th class=\"text-center\">";
        // line 98
        echo ($context["column_quantity"] ?? null);
        echo "</th>
                     <th class=\"text-center\">";
        // line 99
        echo ($context["column_total"] ?? null);
        echo "</th>
                     <th class=\"text-center\">";
        // line 100
        echo ($context["column_commission"] ?? null);
        echo "</th>
                     <th class=\"text-center\">";
        // line 101
        echo ($context["column_date_added"] ?? null);
        echo "</th> -->
                     <!-- ";
        // line 102
        echo " -->
                  <!-- </tr> -->
              <!-- </thead> -->
              <tbody>
                  ";
        // line 106
        if (($context["vendor_commissions"] ?? null)) {
            // line 107
            echo "                     ";
            $context["i"] = 1;
            // line 108
            echo "                     ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vendor_commissions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["commission"]) {
                // line 109
                echo "                      
                     <tr> 
                         <td class=\"text-center\">
                          ";
                // line 112
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["commission"], "vendor_commission_id", [], "any", false, false, false, 112), ($context["selected"] ?? null))) {
                    // line 113
                    echo "                            <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["commission"], "vendor_commission_id", [], "any", false, false, false, 113);
                    echo "\" checked=\"checked\" />
                          ";
                } else {
                    // line 115
                    echo "                            <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["commission"], "vendor_commission_id", [], "any", false, false, false, 115);
                    echo "\" />
                          ";
                }
                // line 117
                echo "                         </td>
                       ";
                // line 119
                echo "                        <td class=\"text-left\">";
                echo twig_get_attribute($this->env, $this->source, $context["commission"], "order_id", [], "any", false, false, false, 119);
                echo "</td>
                        <td class=\"text-left\">";
                // line 120
                echo twig_get_attribute($this->env, $this->source, $context["commission"], "store_owner", [], "any", false, false, false, 120);
                echo "</td>
                        <td class=\"text-left\">";
                // line 121
                echo twig_get_attribute($this->env, $this->source, $context["commission"], "store_name", [], "any", false, false, false, 121);
                echo "</td>                      
                        <td class=\"text-left\">";
                // line 122
                echo twig_get_attribute($this->env, $this->source, $context["commission"], "name", [], "any", false, false, false, 122);
                echo "</td>
                        <td class=\"text-right\">";
                // line 123
                echo twig_get_attribute($this->env, $this->source, $context["commission"], "price", [], "any", false, false, false, 123);
                echo "</td>
                        <td class=\"text-right\">";
                // line 124
                echo twig_get_attribute($this->env, $this->source, $context["commission"], "quantity", [], "any", false, false, false, 124);
                echo "</td>
                        <td class=\"text-right\">";
                // line 125
                echo twig_get_attribute($this->env, $this->source, $context["commission"], "total", [], "any", false, false, false, 125);
                echo "</td>
                        <td class=\"text-right\">";
                // line 126
                echo twig_get_attribute($this->env, $this->source, $context["commission"], "amount", [], "any", false, false, false, 126);
                echo "</td>
                        <td class=\"text-left\">";
                // line 127
                echo twig_get_attribute($this->env, $this->source, $context["commission"], "date_added", [], "any", false, false, false, 127);
                echo "</td>                       
                        ";
                // line 132
                echo " 
                     </tr>
                     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            echo "                   ";
        } else {
            // line 136
            echo "                    <tr>
                      <td class=\"text-center\" colspan=\"8\">";
            // line 137
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                    </tr>
                  ";
        }
        // line 139
        echo " 
               </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
            <div class=\"col-sm-6 text-left\">";
        // line 145
        echo ($context["pagination"] ?? null);
        echo "</div>
             <div class=\"col-sm-6 text-right\">";
        // line 146
        echo ($context["results"] ?? null);
        echo "</div>
          </div>
      </div>
    </div>
</div>
<script type=\"text/javascript\">
\$('.commission_distribute').submit(function(e){
e.preventDefault();

}); 
</script>

<script type=\"text/javascript\"><!--
    \$('#button-filter').on('click', function() {
      url = '';
      
      var filter_order_id = \$('input[name=\\'filter_order_id\\']').val();

      if (filter_order_id) {
        url += '&filter_order_id=' + encodeURIComponent(filter_order_id);
      }

      // var filter_customer = \$('input[name=\\'filter_customer\\']').val();

      // if (filter_customer) {
      //   url += '&filter_customer=' + encodeURIComponent(filter_customer);
      // }      
     

      var filter_date_added = \$('input[name=\\'filter_date_added\\']').val();

      if (filter_date_added) {
        url += '&filter_date_added=' + encodeURIComponent(filter_date_added);
      }       
      location = 'index.php?route=vendor/lts_commission&user_token=";
        // line 180
        echo ($context["user_token"] ?? null);
        echo "'+url;
    });

    //--></script> 

    <script src=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js\" type=\"text/javascript\"> </script>
<link href=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
<script type=\"text/javascript\"><!--
  \$('.date').datetimepicker({
    language: '";
        // line 189
        echo ($context["datepicker"] ?? null);
        echo "',
    pickTime: false
  });
  //--></script>
";
        // line 193
        echo ($context["footer"] ?? null);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "vendor/lts_commission.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  520 => 193,  513 => 189,  501 => 180,  464 => 146,  460 => 145,  452 => 139,  446 => 137,  443 => 136,  440 => 135,  432 => 132,  428 => 127,  424 => 126,  420 => 125,  416 => 124,  412 => 123,  408 => 122,  404 => 121,  400 => 120,  395 => 119,  392 => 117,  386 => 115,  380 => 113,  378 => 112,  373 => 109,  368 => 108,  365 => 107,  363 => 106,  357 => 102,  353 => 101,  349 => 100,  345 => 99,  341 => 98,  337 => 97,  333 => 96,  328 => 94,  324 => 93,  320 => 92,  317 => 91,  306 => 83,  288 => 82,  269 => 80,  250 => 78,  230 => 75,  225 => 73,  220 => 71,  201 => 69,  196 => 67,  177 => 65,  158 => 63,  141 => 51,  127 => 42,  122 => 40,  111 => 34,  107 => 33,  98 => 27,  94 => 25,  86 => 21,  83 => 20,  75 => 16,  73 => 15,  66 => 10,  55 => 8,  51 => 7,  46 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "vendor/lts_commission.twig", "");
    }
}
