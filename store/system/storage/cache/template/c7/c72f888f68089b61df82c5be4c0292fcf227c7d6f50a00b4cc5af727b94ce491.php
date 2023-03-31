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

/* default/template/account/vendor/lts_withdrawal.twig */
class __TwigTemplate_e1db325be89df7d23d0b0a2190b9fc5c954479be4116ce272797a2c6295a3e4c extends \Twig\Template
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
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            echo "                <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 9);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 9);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "                
                <li class=\"display_bal text-danger\">";
        // line 11
        echo ($context["lts_current_amount"] ?? null);
        echo " : ";
        echo ($context["net_current_amount"] ?? null);
        echo "</li>
            </ul>
            <h3 class=\"text-primary\">";
        // line 13
        echo ($context["entry_vendor_total_amount"] ?? null);
        echo " : ";
        echo ($context["vendor_total_amount"] ?? null);
        echo "</h3>
        </div>
    </div>
    <div class=\"loader\" style=\" display:none;\" id=\"withdrawal_loader\">
        <div class=\"sk-cube-grid\">
            <div class=\"sk-cube sk-cube1\"></div>
            <div class=\"sk-cube sk-cube2\"></div>
            <div class=\"sk-cube sk-cube3\"></div>
            <div class=\"sk-cube sk-cube4\"></div>
            <div class=\"sk-cube sk-cube5\"></div>
            <div class=\"sk-cube sk-cube6\"></div>
            <div class=\"sk-cube sk-cube7\"></div>
            <div class=\"sk-cube sk-cube8\"></div>
            <div class=\"sk-cube sk-cube9\"></div>
        </div>
    </div>
    <div class=\"panel panel-default\">
        <div class=\"panel-body\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 32
        echo ($context["heading_title"] ?? null);
        echo "</h3>
            </div>
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">";
        // line 36
        echo ($context["entry_withdrawal_amount"] ?? null);
        echo "</h3>
                </div>
                <div class=\"panel-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6 col-sm-6\">
                            <h4></h4>
                            <table class=\"table table-bordered\">
                                <tr>
                                    <td>";
        // line 44
        echo ($context["lts_current_amount"] ?? null);
        echo " </td>
                                    <td><input type=\"text\" name=\"\" readonly class=\"form-control col-md-3\" value=\"";
        // line 45
        echo ($context["net_current_amount"] ?? null);
        echo "\"></td>
                                </tr>
                                <tr>
                                    <td>";
        // line 48
        echo ($context["lts_pending_amount"] ?? null);
        echo "</td>
                                    <td id='bank_name'><input type=\"\" name=\"\" class=\"form-control\" readonly value=\"";
        // line 49
        echo ($context["pending_amount"] ?? null);
        echo "\"></td>
                                </tr>
                            </table>
                        </div>
                        <div class=\"col-md-6 col-sm-6\">
                            <div class=\"col-md-6\">
                                <span for=\"withdrawal\">";
        // line 55
        echo ($context["min_withdwaral_amount"] ?? null);
        echo "</span>
                                <span><b>";
        // line 56
        echo ($context["min_withdwaral_amoun"] ?? null);
        echo "</b></span>
                            </div>
                            <div class=\"col-md-6\">
                                <span for=\"withdrawal\">";
        // line 59
        echo ($context["max_withdwaral_amount"] ?? null);
        echo "</span>
                                <span><b>";
        // line 60
        echo ($context["max_withdwaral_amoun"] ?? null);
        echo "</b></span>
                            </div>
                            <!-- <form action=\"\" class=\"withdraw_form\"> -->
                                <div class=\"col-sm-2\">
                                    <label style=\"margin-top:40%\" for=\"withdrawal\">";
        // line 64
        echo ($context["entry_withdrawal"] ?? null);
        echo "</label>
                                </div>
                                <div class=\"col-sm-10\">
                                    <input style=\"margin-top:7%\" type=\"text\" min=\"100\" id=\"withdrawal_amount\" name=\"withdrawal_amount\" value=\"\" class=\"form-control\" placeholder=\"";
        // line 67
        echo ($context["entry_withdrawal"] ?? null);
        echo "\">
                                </div>
                                <div class=\"form-group\">
                                    <span id=\"req_money_status\"></span><br>
                                    <button type=\"button\" name=\"submit_form\" id=\"transfer_money\" class=\"btn btn-primary transfer_button\">";
        // line 71
        echo ($context["button_transfer"] ?? null);
        echo "</button>
                                </div>
                            <!-- </form> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"panel panel-default\">
                <div class=\"panel-body\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 81
        echo ($context["transection_history"] ?? null);
        echo "</h3>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered table-hover\">
                            <thead>
                                <tr>
                                    <td class=\"text-left\">";
        // line 87
        echo ($context["from"] ?? null);
        echo "</td>
                                    <td class=\"text-left\">";
        // line 88
        echo ($context["entry_price"] ?? null);
        echo "</td>
                                    <td class=\"text-left\"> ";
        // line 89
        echo ($context["entry_status"] ?? null);
        echo "</td>
                                    <td class=\"text-left\">";
        // line 90
        echo ($context["transection_date"] ?? null);
        echo "</td>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 94
        if (($context["transection_list"] ?? null)) {
            // line 95
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["transection_list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["transection"]) {
                // line 96
                echo "                                <tr>
                                    <td class=\"text-left\">";
                // line 97
                echo ($context["admin"] ?? null);
                echo "</td>
                                    <td class=\"text-left\">";
                // line 98
                echo twig_get_attribute($this->env, $this->source, $context["transection"], "amount", [], "any", false, false, false, 98);
                echo "</td>
                                    ";
                // line 99
                if ((twig_get_attribute($this->env, $this->source, $context["transection"], "payment_processed", [], "any", false, false, false, 99) == 0)) {
                    // line 100
                    echo "                                    <td class=\"text-left\">";
                    echo ($context["transection_status_pending"] ?? null);
                    echo "</td>
                                    <td class=\"text-left\">";
                    // line 101
                    echo twig_get_attribute($this->env, $this->source, $context["transection"], "withdrawal_initiate_date", [], "any", false, false, false, 101);
                    echo "</td>
                                    ";
                } else {
                    // line 103
                    echo "                                    <td class=\"text-left\">";
                    echo ($context["transection_status_receive"] ?? null);
                    echo "</td>
                                    <td class=\"text-left\">";
                    // line 104
                    echo twig_get_attribute($this->env, $this->source, $context["transection"], "payment_initiate_date", [], "any", false, false, false, 104);
                    echo "</td>
                                    ";
                }
                // line 106
                echo "                                </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transection'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "                                ";
        } else {
            // line 109
            echo "                                <tr>
                                    <td class=\"text-center\" colspan=\"8\">";
            // line 110
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                                </tr>
                                ";
        }
        // line 113
        echo "                            </tbody>
                        </table>
                    </div>
                <div class=\"row\">
                    <div class=\"col-sm-6 text-left\">";
        // line 117
        echo ($context["pagination"] ?? null);
        echo "</div>
                     <div class=\"col-sm-6 text-right\">";
        // line 118
        echo ($context["results"] ?? null);
        echo "</div>
                </div>
                </div>
            </div>

            <script type=\"text/javascript\">
            \$('#req_money_status').val(\"ljmfsk\");
            \$('#transfer_money').click(function(e) {
                var amount = \$(\"#withdrawal_amount\").val();

                \$.ajax({
                    type: 'post',
                    dataType: 'json',
                    data: { 'amount': amount },
                    url: 'index.php?route=account/vendor/lts_withdrawal/withdrawal&user_token=";
        // line 132
        echo ($context["user_token"] ?? null);
        echo "',
                    beforeSend: function() {
                        \$('#withdrawal_loader').css('display', 'block');
                    },
                    success: function(result) {
                        // alert('xdcsdc');
                        // console.log(result);
                        \$('#withdrawal_loader').css('display', 'none');
                        \$(\"#withdrawal_amount\").val('');
                        if (result.data_status.status == true) {
                            \$('#req_money_status').html(\"Request Sent Sucessfully\").css('color', 'green');

                        }

                        if (result.data_status.empty_money == true) {
                            \$('#req_money_status').html(result.data_status.empty_money_msg).css('color', 'red');
                        }
                        if (result.data_status.bank_status == false) {
                            \$('#req_money_status').html(result.data_status.bank_detail).css('color', 'red');
                        }
                        if (result.data_status.low_price == true) {
                            \$('#req_money_status').html(result.data_status.low_price_msg).css('color', 'red');
                        }
                       setTimeout(function(){location.reload();},1000);
                    }

                });
            });
            </script>
            ";
        // line 161
        echo ($context["footer"] ?? null);
        echo "
        </div>";
    }

    public function getTemplateName()
    {
        return "default/template/account/vendor/lts_withdrawal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  334 => 161,  302 => 132,  285 => 118,  281 => 117,  275 => 113,  269 => 110,  266 => 109,  263 => 108,  256 => 106,  251 => 104,  246 => 103,  241 => 101,  236 => 100,  234 => 99,  230 => 98,  226 => 97,  223 => 96,  218 => 95,  216 => 94,  209 => 90,  205 => 89,  201 => 88,  197 => 87,  188 => 81,  175 => 71,  168 => 67,  162 => 64,  155 => 60,  151 => 59,  145 => 56,  141 => 55,  132 => 49,  128 => 48,  122 => 45,  118 => 44,  107 => 36,  100 => 32,  76 => 13,  69 => 11,  66 => 10,  55 => 9,  51 => 8,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/vendor/lts_withdrawal.twig", "");
    }
}
