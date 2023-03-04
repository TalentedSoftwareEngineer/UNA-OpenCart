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

/* default/template/account/vendor/lts_setting.twig */
class __TwigTemplate_58eabb0d52e4557decfc8a3c41ab0f41b28505b34138f26f59cff115409108c5 extends \Twig\Template
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
            echo "                <li><a href=\"";
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
        echo "            </ul>
        </div>
    </div>
    ";
        // line 13
        if (($context["error_warning"] ?? null)) {
            // line 14
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 18
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 19
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
    ";
        }
        // line 21
        echo "    <div class=\"panel panel-default\">
         <div class=\"panel-body\">
            <div class=\"row\">
                <div class=\"col-sm-12 lts-products\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading clearfix\"><b><span>";
        // line 26
        echo ($context["text_payment_details"] ?? null);
        echo "</span></b>
                            <div class=\"pull-right\">
                                <button type=\"submit\" form=\"form-vendor-setting\" data-toggle=\"tooltip\" title=\"";
        // line 28
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
                                <a href=\"";
        // line 29
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
                            </div><br><br> 
                    <form method=\"post\" action=\"";
        // line 31
        echo ($context["action"] ?? null);
        echo "\" enctype=\"multipart/form-data\" class=\"form-horizontal\" id=\"form-vendor-setting\">
                        <ul class=\"nav nav-tabs\" id=\"\">
                            <li class=\"active\"><a href=\"#tab-paypal\" data-toggle=\"tab\">";
        // line 33
        echo ($context["tab_paypal"] ?? null);
        echo "</a></li>
                            <li><a href=\"#tab-bank-transfer\" data-toggle=\"tab\">";
        // line 34
        echo ($context["tab_bank_transfer"] ?? null);
        echo " </a></li>
                             
                        </ul>
                        <div class=\"tab-content\">
                            <div class=\"tab-pane active\" id=\"tab-paypal\">
                                <div class=\"form-group required\">
                                    <label class=\"col-sm-2 control-label\" for=\"input-paypal\">";
        // line 40
        echo ($context["entry_paypal"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"text\" name=\"paypal\" value=\"";
        // line 42
        echo ($context["paypal"] ?? null);
        echo "\" class=\"form-control\" placeholder=\"";
        echo ($context["entry_paypal"] ?? null);
        echo "\">
                                        ";
        // line 43
        if (($context["error_paypal"] ?? null)) {
            // line 44
            echo "                                        <div class=\"text-danger\">";
            echo ($context["error_paypal"] ?? null);
            echo "</div>
                                        ";
        }
        // line 46
        echo "                                    </div>
                                </div>
                            </div>
                            <div class=\"tab-pane\" id=\"tab-bank-transfer\">
                                <div class=\"form-group required\">
                                    <label class=\"col-sm-2 control-label\" for=\"account-holder\">";
        // line 51
        echo ($context["entry_account_holder"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"text\" name=\"account_holder\" value=\"";
        // line 53
        echo ($context["account_holder"] ?? null);
        echo "\" class=\"form-control\" placeholder=\"";
        echo ($context["entry_account_holder"] ?? null);
        echo "\">
                                        ";
        // line 54
        if (($context["error_account_holder"] ?? null)) {
            // line 55
            echo "                                        <div class=\"text-danger\">";
            echo ($context["error_account_holder"] ?? null);
            echo "</div>
                                        ";
        }
        // line 57
        echo "                                    </div>
                                </div>
                                <div class=\"form-group required\">
                                    <label class=\"col-sm-2 control-label\" for=\"bankname\">";
        // line 60
        echo ($context["entry_bankname"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"text\" name=\"bankname\" value=\"";
        // line 62
        echo ($context["bankname"] ?? null);
        echo "\" class=\"form-control\" placeholder=\"";
        echo ($context["entry_bankname"] ?? null);
        echo "\">
                                        ";
        // line 63
        if (($context["error_bankname"] ?? null)) {
            // line 64
            echo "                                        <div class=\"text-danger\">";
            echo ($context["error_bankname"] ?? null);
            echo "</div>
                                        ";
        }
        // line 66
        echo "                                    </div>
                                </div>
                                <div class=\"form-group required\">
                                    <label class=\"col-sm-2 control-label\" for=\"accountno\">";
        // line 69
        echo ($context["entry_accountno"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"text\" name=\"accountno\" value=\"";
        // line 71
        echo ($context["accountno"] ?? null);
        echo "\" class=\"form-control\" placeholder=\"";
        echo ($context["entry_accountno"] ?? null);
        echo "\">
                                        ";
        // line 72
        if (($context["error_accountno"] ?? null)) {
            // line 73
            echo "                                        <div class=\"text-danger\">";
            echo ($context["error_accountno"] ?? null);
            echo "</div>
                                        ";
        }
        // line 75
        echo "                                    </div>
                                </div>
                                <div class=\"form-group required\">
                                    <label class=\"col-sm-2 control-label\" for=\"ifsc\">";
        // line 78
        echo ($context["entry_ifsc"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"text\" name=\"ifsc\" value=\"";
        // line 80
        echo ($context["ifsc"] ?? null);
        echo "\" class=\"form-control\" placeholder=\"";
        echo ($context["entry_ifsc"] ?? null);
        echo "\">
                                        ";
        // line 81
        if (($context["error_ifsc"] ?? null)) {
            // line 82
            echo "                                        <div class=\"text-danger\">";
            echo ($context["error_ifsc"] ?? null);
            echo "</div>
                                        ";
        }
        // line 84
        echo "                                    </div>
                                </div>
                            </div>                             
                        </div>
                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type=\"text/javascript\">
    <!--
    \$('select[name=\\'country_id\\']').on('change', function() {
        \$.ajax({
            url: 'index.php?route=account/vendor/lts_store/country&country_id=' + this.value,
            dataType: 'json',

            success: function(json) {
                html = '<option value=\"\">";
        // line 103
        echo ($context["text_select"] ?? null);
        echo "</option>';
                if (json['zone'] && json['zone'] != '') {
                    for (i = 0; i < json['zone'].length; i++) {
                        html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                        if (json['zone'][i]['zone_id'] == '";
        // line 108
        echo ($context["zone_id"] ?? null);
        echo "') {
                            html += ' selected=\"selected\"';
                        }

                        html += '>' + json['zone'][i]['name'] + '</option>';
                    }
                } else {

                    console.log(json);
                    html += '<option value=\"0\" selected=\"selected\">";
        // line 117
        echo ($context["text_none"] ?? null);
        echo "</option>';
                }
                \$('select[name=\\'zone_id\\']').html(html);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });

    \$('select[name=\\'country_id\\']').trigger('change');

    //-->
    </script>
    ";
        // line 131
        echo ($context["footer"] ?? null);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/account/vendor/lts_setting.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 131,  289 => 117,  277 => 108,  269 => 103,  248 => 84,  242 => 82,  240 => 81,  234 => 80,  229 => 78,  224 => 75,  218 => 73,  216 => 72,  210 => 71,  205 => 69,  200 => 66,  194 => 64,  192 => 63,  186 => 62,  181 => 60,  176 => 57,  170 => 55,  168 => 54,  162 => 53,  157 => 51,  150 => 46,  144 => 44,  142 => 43,  136 => 42,  131 => 40,  122 => 34,  118 => 33,  113 => 31,  106 => 29,  102 => 28,  97 => 26,  90 => 21,  84 => 19,  81 => 18,  73 => 14,  71 => 13,  66 => 10,  55 => 8,  51 => 7,  46 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/vendor/lts_setting.twig", "");
    }
}
