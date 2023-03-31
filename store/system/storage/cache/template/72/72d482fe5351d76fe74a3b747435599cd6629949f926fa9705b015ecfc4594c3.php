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

/* default/template/account/vendor/lts_coupon_list.twig */
class __TwigTemplate_c4beaf88e17304c875994e432bd69fddc155b7bde166dac0f2a5d986a4772ef6 extends \Twig\Template
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
                <a href=\"";
        // line 6
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
                <button type=\"button\" form=\"form-coupon\" formaction=\"";
        // line 7
        echo ($context["delete"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-coupon').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
            </div>
            <h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "                <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">";
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
        echo "        ";
        if (($context["success"] ?? null)) {
            // line 23
            echo "        <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
        ";
        }
        // line 27
        echo "        <div class=\"row\">
            <div id=\"filter\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 31
        echo ($context["text_filter"] ?? null);
        echo "</h3>
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"input-name\">";
        // line 35
        echo ($context["entry_name"] ?? null);
        echo "</label>
                            <input type=\"text\" name=\"filter_name\" value=\"";
        // line 36
        echo ($context["filter_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"input-code\">";
        // line 39
        echo ($context["entry_code"] ?? null);
        echo "</label>
                            <input type=\"text\" name=\"filter_code\" value=\"";
        // line 40
        echo ($context["filter_code"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_code"] ?? null);
        echo "\" id=\"input-code\" class=\"form-control\" />
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"input-price\">";
        // line 43
        echo ($context["entry_discount"] ?? null);
        echo "</label>
                            <input type=\"text\" name=\"filter_price\" value=\"";
        // line 44
        echo ($context["filter_price"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_discount"] ?? null);
        echo "\" id=\"input-price\" class=\"form-control\" />
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"entry_date_end\">";
        // line 47
        echo ($context["entry_date"] ?? null);
        echo "</label>
                            <input type=\"date\" name=\"filter_date_end\" value=\"";
        // line 48
        echo ($context["filter_date_end"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date"] ?? null);
        echo "\" id=\"entry_date_end\" class=\"form-control\" />
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"input-status\">";
        // line 51
        echo ($context["entry_status"] ?? null);
        echo "</label>
                            <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                                <option value=\"\"></option>
                                ";
        // line 54
        if ((($context["filter_status"] ?? null) == "1")) {
            // line 55
            echo "                                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                ";
        } else {
            // line 57
            echo "                                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                ";
        }
        // line 59
        echo "                                ";
        if ((($context["filter_status"] ?? null) == "0")) {
            // line 60
            echo "                                <option value=\"0\" selected=\"selected\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                ";
        } else {
            // line 62
            echo "                                <option value=\"0\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                ";
        }
        // line 64
        echo "                            </select>
                        </div>
                        <div class=\"form-group text-right\">
                            <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 67
        echo ($context["button_filter"] ?? null);
        echo "</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-9 col-md-pull-3 col-sm-12\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 75
        echo ($context["text_list"] ?? null);
        echo "</h3>
                    </div>
                    <div class=\"panel-body\">
                        ";
        // line 79
        echo "                        <form action=\"";
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-coupon\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered table-hover\">
                                    <thead>
                                        <tr>
                                            <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                                            <td class=\"text-left\">";
        // line 85
        if ((($context["sort"] ?? null) == "name")) {
            // line 86
            echo "                                                <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                                                ";
        } else {
            // line 88
            echo "                                                <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                                                ";
        }
        // line 89
        echo "</td>
                                            <td class=\"text-left\">";
        // line 90
        if ((($context["sort"] ?? null) == "code")) {
            // line 91
            echo "                                                <a href=\"";
            echo ($context["sort_code"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_code"] ?? null);
            echo "</a>
                                                ";
        } else {
            // line 93
            echo "                                                <a href=\"";
            echo ($context["sort_code"] ?? null);
            echo "\">";
            echo ($context["column_code"] ?? null);
            echo "</a>
                                                ";
        }
        // line 94
        echo "</td>
                                            <td class=\"text-right\">";
        // line 95
        if ((($context["sort"] ?? null) == "discount")) {
            // line 96
            echo "                                                <a href=\"";
            echo ($context["sort_discount"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_discount"] ?? null);
            echo "</a>
                                                ";
        } else {
            // line 98
            echo "                                                <a href=\"";
            echo ($context["sort_discount"] ?? null);
            echo "\">";
            echo ($context["column_discount"] ?? null);
            echo "</a>
                                                ";
        }
        // line 99
        echo "</td>
                                            <td class=\"text-left\">";
        // line 100
        if ((($context["sort"] ?? null) == "date_start")) {
            // line 101
            echo "                                                <a href=\"";
            echo ($context["sort_date_start"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_start"] ?? null);
            echo "</a>
                                                ";
        } else {
            // line 103
            echo "                                                <a href=\"";
            echo ($context["sort_date_start"] ?? null);
            echo "\">";
            echo ($context["column_date_start"] ?? null);
            echo "</a>
                                                ";
        }
        // line 104
        echo "</td>
                                            <td class=\"text-left\">";
        // line 105
        if ((($context["sort"] ?? null) == "date_end")) {
            // line 106
            echo "                                                <a href=\"";
            echo ($context["sort_date_end"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_end"] ?? null);
            echo "</a>
                                                ";
        } else {
            // line 108
            echo "                                                <a href=\"";
            echo ($context["sort_date_end"] ?? null);
            echo "\">";
            echo ($context["column_date_end"] ?? null);
            echo "</a>
                                                ";
        }
        // line 109
        echo "</td>
                                            <td class=\"text-left\">";
        // line 110
        if ((($context["sort"] ?? null) == "status")) {
            // line 111
            echo "                                                <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                                                ";
        } else {
            // line 113
            echo "                                                <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                                                ";
        }
        // line 114
        echo "</td>
                                            <td class=\"text-right\">";
        // line 115
        echo ($context["column_action"] ?? null);
        echo "</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
        // line 119
        if (($context["coupons"] ?? null)) {
            // line 120
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["coupons"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["coupon"]) {
                // line 121
                echo "                                        <tr>
                                            <td class=\"text-center\">";
                // line 122
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["coupon"], "coupon_id", [], "any", false, false, false, 122), ($context["selected"] ?? null))) {
                    // line 123
                    echo "                                                <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["coupon"], "coupon_id", [], "any", false, false, false, 123);
                    echo "\" checked=\"checked\" />
                                                ";
                } else {
                    // line 125
                    echo "                                                <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["coupon"], "coupon_id", [], "any", false, false, false, 125);
                    echo "\" />
                                                ";
                }
                // line 126
                echo "</td>
                                            <td class=\"text-left\">";
                // line 127
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "name", [], "any", false, false, false, 127);
                echo "</td>
                                            <td class=\"text-left\">";
                // line 128
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "code", [], "any", false, false, false, 128);
                echo "</td>
                                            <td class=\"text-right\">";
                // line 129
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "discount", [], "any", false, false, false, 129);
                echo "</td>
                                            <td class=\"text-left\">";
                // line 130
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "date_start", [], "any", false, false, false, 130);
                echo "</td>
                                            <td class=\"text-left\">";
                // line 131
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "date_end", [], "any", false, false, false, 131);
                echo "</td>
                                            <td class=\"text-left\">";
                // line 132
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "status", [], "any", false, false, false, 132);
                echo "</td>
                                            <td class=\"text-right\"><a href=\"";
                // line 133
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "edit", [], "any", false, false, false, 133);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                                        </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 136
            echo "                                        ";
        } else {
            // line 137
            echo "                                        <tr>
                                            <td class=\"text-center\" colspan=\"8\">";
            // line 138
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                                        </tr>
                                        ";
        }
        // line 141
        echo "                                    </tbody>
                                </table>
                            </div>
                        </form>
                        <div class=\"row\">
                            <div class=\"col-sm-6 text-left\">";
        // line 146
        echo ($context["pagination"] ?? null);
        echo "</div>
                            <div class=\"col-sm-6 text-right\">";
        // line 147
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

        var filter_code = \$('input[name=\\'filter_code\\']').val();

        if (filter_code) {
            url += '&filter_code=' + encodeURIComponent(filter_code);
        }

        var filter_price = \$('input[name=\\'filter_price\\']').val();

        if (filter_price) {
            url += '&filter_price=' + encodeURIComponent(filter_price);
        }

        var filter_status = \$('select[name=\\'filter_status\\']').val();

        if (filter_status !== '') {
            url += '&filter_status=' + encodeURIComponent(filter_status);
        }
        var filter_date_end = \$('input[name=\\'filter_date_end\\']').val();

        if (filter_date_end !== '') {
            url += '&filter_date_end=' + encodeURIComponent(filter_date_end);
        }

        location = 'index.php?route=account/vendor/lts_coupon&user_token=";
        // line 188
        echo ($context["user_token"] ?? null);
        echo "' + url;
    });
    //-->
    </script>
    ";
        // line 192
        echo ($context["footer"] ?? null);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/account/vendor/lts_coupon_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  517 => 192,  510 => 188,  466 => 147,  462 => 146,  455 => 141,  449 => 138,  446 => 137,  443 => 136,  432 => 133,  428 => 132,  424 => 131,  420 => 130,  416 => 129,  412 => 128,  408 => 127,  405 => 126,  399 => 125,  393 => 123,  391 => 122,  388 => 121,  383 => 120,  381 => 119,  374 => 115,  371 => 114,  363 => 113,  353 => 111,  351 => 110,  348 => 109,  340 => 108,  330 => 106,  328 => 105,  325 => 104,  317 => 103,  307 => 101,  305 => 100,  302 => 99,  294 => 98,  284 => 96,  282 => 95,  279 => 94,  271 => 93,  261 => 91,  259 => 90,  256 => 89,  248 => 88,  238 => 86,  236 => 85,  226 => 79,  220 => 75,  209 => 67,  204 => 64,  198 => 62,  192 => 60,  189 => 59,  183 => 57,  177 => 55,  175 => 54,  169 => 51,  161 => 48,  157 => 47,  149 => 44,  145 => 43,  137 => 40,  133 => 39,  125 => 36,  121 => 35,  114 => 31,  108 => 27,  100 => 23,  97 => 22,  89 => 18,  87 => 17,  82 => 14,  71 => 12,  67 => 11,  62 => 9,  53 => 7,  47 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/vendor/lts_coupon_list.twig", "");
    }
}
