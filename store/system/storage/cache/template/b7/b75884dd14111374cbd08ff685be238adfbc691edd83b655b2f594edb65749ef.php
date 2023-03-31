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

/* vendor/lts_withdrawallist.twig */
class __TwigTemplate_4446b05443cede7c0776194f9b7350e561196ba8ed6c742365a138d08e779e22 extends \Twig\Template
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
        echo ($context["text_list"] ?? null);
        echo "</h1>
             
        </div>
    </div>
    <div class=\"container-fluid\">
        ";
        // line 10
        if (($context["error_warning"] ?? null)) {
            // line 11
            echo "        <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
        ";
        }
        // line 15
        echo "        ";
        if (($context["success"] ?? null)) {
            // line 16
            echo "        <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
        ";
        }
        // line 20
        echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 22
        echo ($context["text_list"] ?? null);
        echo "</h3>
            </div>

            <div class=\"panel-body\">
        <div class=\"row\">
          <div class=\"col-md-5\">
              <div class=\"form-group\">             
              <label class=\"control-label\" for=\"input-order-id\">";
        // line 29
        echo ($context["entry_withdrawal_id"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_withdrawal_id\" value=\"";
        // line 30
        echo ($context["filter_withdrawal_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_withdrawal_id"] ?? null);
        echo "\" id=\"input-withdrawal-id\" class=\"form-control\" />
            </div>
          </div>

          <div class=\"col-md-5\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-date-added\">";
        // line 36
        echo ($context["entry_vendor_name"] ?? null);
        echo "</label>
                
                  <input type=\"text\" name=\"filter_vendor_name\" value=\"";
        // line 38
        echo ($context["filter_vendor_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_vendor_name"] ?? null);
        echo "\" id=\"filter_vendor_name\" class=\"form-control\" />          </div>
               
          </div>
          <div class=\"col-md-2\">
              <div class=\"form-group\">
                <button type=\"button\" id=\"button-filter\" data-toggle=\"tooltip\" title=\"";
        // line 43
        echo ($context["button_filter"] ?? null);
        echo "\" class=\"btn btn-default\" style=\"margin-top:21px\"><i class=\"fa fa-filter\"></i> ";
        echo ($context["button_filter"] ?? null);
        echo "</button>
              </div>
          </div>
        </div>
      </div>
            <div class=\"panel-body\">
                <div class=\"table-responsive\" style=\"overflow-x: hidden\">
                    <table class=\"table table-bordered\">
                        <thead>
                            <tr>
                                  <td class=\"text-left\">";
        // line 53
        if ((($context["sort"] ?? null) == "withdrawal_id")) {
            echo " <a href=\"";
            echo ($context["sort_withdrawal"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["entry_withdrawal_id"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_withdrawal"] ?? null);
            echo "\">";
            echo ($context["entry_withdrawal_id"] ?? null);
            echo "</a> ";
        }
        echo "</td>                                 
                                <!-- <td class=\"text-center\">";
        // line 54
        echo ($context["entry_withdrawal_id"] ?? null);
        echo "</td> -->
                                <td class=\"text-center\">";
        // line 55
        echo ($context["entry_vendor_id"] ?? null);
        echo "</td>
                                <td class=\"text-center\">";
        // line 56
        echo ($context["entry_vendor_name"] ?? null);
        echo "</td>
                                <td class=\"text-center\">";
        // line 57
        echo ($context["entry_amount"] ?? null);
        echo "</td>
                                <td class=\"text-center\">";
        // line 58
        echo ($context["column_status"] ?? null);
        echo "</td>
                                <td class=\"text-center\"> ";
        // line 59
        echo ($context["action"] ?? null);
        echo "</td>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["withdrawal_data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["withdrawal_list"]) {
            echo "                               
                             
                           <!--  <tr id=\"";
            // line 65
            echo twig_get_attribute($this->env, $this->source, $context["withdrawal_list"], "vendor_id", [], "any", false, false, false, 65);
            echo "\" data-withdrwal=";
            echo json_encode($context["withdrawal_list"]);
            echo "> -->
                            <tr>
                                <td class=\"text-center\">";
            // line 67
            echo twig_get_attribute($this->env, $this->source, $context["withdrawal_list"], "withdrawal_id", [], "any", false, false, false, 67);
            echo " </td>
                                <td class=\"text-center\" id=\"vendor_id\">";
            // line 68
            echo twig_get_attribute($this->env, $this->source, $context["withdrawal_list"], "vendor_id", [], "any", false, false, false, 68);
            echo " </td>
                                <td class=\"text-center\">";
            // line 69
            echo twig_get_attribute($this->env, $this->source, $context["withdrawal_list"], "vendor_name", [], "any", false, false, false, 69);
            echo " </td>
                                <td class=\"text-center\">";
            // line 70
            echo twig_get_attribute($this->env, $this->source, $context["withdrawal_list"], "amount", [], "any", false, false, false, 70);
            echo "</td>
                                <td class=\"text-center\">";
            // line 71
            echo twig_get_attribute($this->env, $this->source, $context["withdrawal_list"], "payment_processed", [], "any", false, false, false, 71);
            echo "</td>
                                ";
            // line 72
            if ((twig_get_attribute($this->env, $this->source, $context["withdrawal_list"], "payment_processed", [], "any", false, false, false, 72) == "Pending")) {
                // line 73
                echo "                                <td class=\"text-center\"><a style=\"margin-left:-50px; margin-right: -50px;\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["withdrawal_list"], "pay", [], "any", false, false, false, 73);
                echo "\" class=\"btn btn-primary\" data-toggle=\"tooltip\" title=\"";
                echo ($context["text_transection"] ?? null);
                echo "\">";
                echo ($context["transef_money"] ?? null);
                echo "</a></td>
                                ";
            } else {
                // line 75
                echo "                                <td class=\"text-center\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["withdrawal_list"], "view", [], "any", false, false, false, 75);
                echo "\" class=\"btn btn-primary\" data-toggle=\"tooltip\" title=\"";
                echo ($context["text_view"] ?? null);
                echo "\"><i class=\"fa fa-eye\"></i></a></td>
                                ";
            }
            // line 77
            echo "                            </tr> 
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['withdrawal_list'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "                        </tbody>
                    </table>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-6 text-left\">";
        // line 83
        echo ($context["pagination"] ?? null);
        echo "</div>
                    <div class=\"col-sm-6 text-right\">";
        // line 84
        echo ($context["results"] ?? null);
        echo "</div>
                </div>
            </div>
        </div>
    </div>

    <script type=\"text/javascript\"><!--
    \$('#button-filter').on('click', function() {
      url = '';
     
      var filter_withdrawal_id = \$('input[name=\\'filter_withdrawal_id\\']').val();

      if (filter_withdrawal_id) {
        url += '&filter_withdrawal_id=' + encodeURIComponent(filter_withdrawal_id);
      }       

      var filter_vendor_name = \$('input[name=\\'filter_vendor_name\\']').val();

      if (filter_vendor_name) {
        url += '&filter_vendor_name=' + encodeURIComponent(filter_vendor_name);
      }       
      location = 'index.php?route=vendor/lts_withdrawalform&user_token=";
        // line 105
        echo ($context["user_token"] ?? null);
        echo "'+url;
    });

    //--></script>
    ";
        // line 109
        echo ($context["footer"] ?? null);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "vendor/lts_withdrawallist.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 109,  274 => 105,  250 => 84,  246 => 83,  240 => 79,  233 => 77,  225 => 75,  215 => 73,  213 => 72,  209 => 71,  205 => 70,  201 => 69,  197 => 68,  193 => 67,  186 => 65,  179 => 63,  172 => 59,  168 => 58,  164 => 57,  160 => 56,  156 => 55,  152 => 54,  134 => 53,  119 => 43,  109 => 38,  104 => 36,  93 => 30,  89 => 29,  79 => 22,  75 => 20,  67 => 16,  64 => 15,  56 => 11,  54 => 10,  46 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "vendor/lts_withdrawallist.twig", "");
    }
}
