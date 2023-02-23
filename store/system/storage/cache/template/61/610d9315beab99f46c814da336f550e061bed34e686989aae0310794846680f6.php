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

/* default/template/account/vendor/lts_review_form.twig */
class __TwigTemplate_aa7252afb3df078e532810479cb0778039d66499f0a2f3dd3ea0c72e2c1d34ab extends \Twig\Template
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
                <button type=\"submit\" form=\"form-review\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
                <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
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
    <div class=\"container-fluid\"> ";
        // line 16
        if (($context["error_warning"] ?? null)) {
            // line 17
            echo "        <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
        ";
        }
        // line 21
        echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 23
        echo ($context["text_form"] ?? null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                <form action=\"";
        // line 26
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-review\" class=\"form-horizontal\">
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-author\">";
        // line 28
        echo ($context["entry_author"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"name\" value=\"";
        // line 30
        echo ($context["author"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_author"] ?? null);
        echo "\" id=\"input-author\" class=\"form-control\" />
                            ";
        // line 31
        if (($context["error_author"] ?? null)) {
            // line 32
            echo "                            <div class=\"text-danger\">";
            echo ($context["error_author"] ?? null);
            echo "</div>
                            ";
        }
        // line 33
        echo " </div>
                    </div>
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-product\"><span data-toggle=\"tooltip\" title=\"";
        // line 36
        echo ($context["help_product"] ?? null);
        echo "\">";
        echo ($context["entry_product"] ?? null);
        echo "</span></label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"product\" value=\"";
        // line 38
        echo ($context["product"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_product"] ?? null);
        echo "\" id=\"input-product\" class=\"form-control\" />
                            <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 39
        echo ($context["product_id"] ?? null);
        echo "\" />
                            ";
        // line 40
        if (($context["error_product"] ?? null)) {
            // line 41
            echo "                            <div class=\"text-danger\">";
            echo ($context["error_product"] ?? null);
            echo "</div>
                            ";
        }
        // line 42
        echo " </div>
                    </div>
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-text\">";
        // line 45
        echo ($context["entry_text"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <textarea name=\"text\" cols=\"60\" rows=\"8\" placeholder=\"";
        // line 47
        echo ($context["entry_text"] ?? null);
        echo "\" id=\"input-text\" class=\"form-control\">";
        echo ($context["text"] ?? null);
        echo "</textarea>
                            ";
        // line 48
        if (($context["error_text"] ?? null)) {
            // line 49
            echo "                            <div class=\"text-danger\">";
            echo ($context["error_text"] ?? null);
            echo "</div>
                            ";
        }
        // line 50
        echo " </div>
                    </div>
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 53
        echo ($context["entry_rating"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <label class=\"radio-inline\"> ";
        // line 55
        if ((($context["rating"] ?? null) == 1)) {
            // line 56
            echo "                                <input type=\"radio\" name=\"rating\" value=\"1\" checked=\"checked\" />
                                1
                                ";
        } else {
            // line 59
            echo "                                <input type=\"radio\" name=\"rating\" value=\"1\" />
                                1
                                ";
        }
        // line 61
        echo " </label>
                            <label class=\"radio-inline\"> ";
        // line 62
        if ((($context["rating"] ?? null) == 2)) {
            // line 63
            echo "                                <input type=\"radio\" name=\"rating\" value=\"2\" checked=\"checked\" />
                                2
                                ";
        } else {
            // line 66
            echo "                                <input type=\"radio\" name=\"rating\" value=\"2\" />
                                2
                                ";
        }
        // line 68
        echo " </label>
                            <label class=\"radio-inline\"> ";
        // line 69
        if ((($context["rating"] ?? null) == 3)) {
            // line 70
            echo "                                <input type=\"radio\" name=\"rating\" value=\"3\" checked=\"checked\" />
                                3
                                ";
        } else {
            // line 73
            echo "                                <input type=\"radio\" name=\"rating\" value=\"3\" />
                                3
                                ";
        }
        // line 75
        echo " </label>
                            <label class=\"radio-inline\"> ";
        // line 76
        if ((($context["rating"] ?? null) == 4)) {
            // line 77
            echo "                                <input type=\"radio\" name=\"rating\" value=\"4\" checked=\"checked\" />
                                4
                                ";
        } else {
            // line 80
            echo "                                <input type=\"radio\" name=\"rating\" value=\"4\" />
                                4
                                ";
        }
        // line 82
        echo " </label>
                            <label class=\"radio-inline\"> ";
        // line 83
        if ((($context["rating"] ?? null) == 5)) {
            // line 84
            echo "                                <input type=\"radio\" name=\"rating\" value=\"5\" checked=\"checked\" />
                                5
                                ";
        } else {
            // line 87
            echo "                                <input type=\"radio\" name=\"rating\" value=\"5\" />
                                5
                                ";
        }
        // line 89
        echo " </label>
                            ";
        // line 90
        if (($context["error_rating"] ?? null)) {
            // line 91
            echo "                            <div class=\"text-danger\">";
            echo ($context["error_rating"] ?? null);
            echo "</div>
                            ";
        }
        // line 92
        echo " </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-date-added\">";
        // line 95
        echo ($context["entry_date_added"] ?? null);
        echo "</label>
                        <div class=\"col-sm-3\">
                            <div class=\"input-group datetime\">
                                <input type=\"text\" name=\"date_added\" value=\"";
        // line 98
        echo ($context["date_added"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_added"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD HH:mm:ss\" id=\"input-date-added\" class=\"form-control\" />
                                <span class=\"input-group-btn\">
                                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                                </span> </div>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 105
        echo ($context["entry_status"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <select name=\"status\" id=\"input-status\" class=\"form-control\">
                                ";
        // line 108
        if (($context["status"] ?? null)) {
            // line 109
            echo "                                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                <option value=\"0\">";
            // line 110
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                ";
        } else {
            // line 112
            echo "                                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                <option value=\"0\" selected=\"selected\">";
            // line 113
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                ";
        }
        // line 115
        echo "                            </select>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<script type=\"text/javascript\">
<!--
\$('.datetime').datetimepicker({
    language: '";
        // line 125
        echo ($context["datepicker"] ?? null);
        echo "',
    pickDate: true,
    pickTime: true
});
//-->
</script>
<script type=\"text/javascript\">
<!--
\$('input[name=\\'product\\']').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=account/vendor/lts_review/autocomplete&filter_name=' + encodeURIComponent(request),
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
        \$('input[name=\\'product\\']').val(item['label']);
        \$('input[name=\\'product_id\\']').val(item['value']);
    }
});
//-->
</script>
";
        // line 155
        echo ($context["footer"] ?? null);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/account/vendor/lts_review_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  369 => 155,  336 => 125,  324 => 115,  319 => 113,  314 => 112,  309 => 110,  304 => 109,  302 => 108,  296 => 105,  284 => 98,  278 => 95,  273 => 92,  267 => 91,  265 => 90,  262 => 89,  257 => 87,  252 => 84,  250 => 83,  247 => 82,  242 => 80,  237 => 77,  235 => 76,  232 => 75,  227 => 73,  222 => 70,  220 => 69,  217 => 68,  212 => 66,  207 => 63,  205 => 62,  202 => 61,  197 => 59,  192 => 56,  190 => 55,  185 => 53,  180 => 50,  174 => 49,  172 => 48,  166 => 47,  161 => 45,  156 => 42,  150 => 41,  148 => 40,  144 => 39,  138 => 38,  131 => 36,  126 => 33,  120 => 32,  118 => 31,  112 => 30,  107 => 28,  102 => 26,  96 => 23,  92 => 21,  84 => 17,  82 => 16,  77 => 13,  66 => 11,  62 => 10,  57 => 8,  51 => 7,  47 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/vendor/lts_review_form.twig", "");
    }
}
