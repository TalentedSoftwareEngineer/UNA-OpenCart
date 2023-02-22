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

/* default/template/account/vendor/lts_review_list.twig */
class __TwigTemplate_db3b10fc2b4e44fb2de321feda6692893bb1feae909046054287f6ce9a1f29fd extends \Twig\Template
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
        echo "\" onclick=\"\$('#filter-review').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i></button>
                <a href=\"";
        // line 7
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 8
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-review').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
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
        echo "        ";
        if (($context["success"] ?? null)) {
            // line 24
            echo "        <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
        ";
        }
        // line 28
        echo "        <div class=\"row\">
            <div id=\"filter-review\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 32
        echo ($context["text_filter"] ?? null);
        echo "</h3>
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"input-product\">";
        // line 36
        echo ($context["entry_product"] ?? null);
        echo "</label>
                            <input type=\"text\" name=\"filter_product\" value=\"";
        // line 37
        echo ($context["filter_product"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_product"] ?? null);
        echo "\" id=\"input-product\" class=\"form-control\" />
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"input-author\">";
        // line 40
        echo ($context["entry_author"] ?? null);
        echo "</label>
                            <input type=\"text\" name=\"filter_author\" value=\"";
        // line 41
        echo ($context["filter_author"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_author"] ?? null);
        echo "\" id=\"input-author\" class=\"form-control\" />
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"input-status\">";
        // line 44
        echo ($context["entry_status"] ?? null);
        echo "</label>
                            <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                                <option value=\"\"></option>
                                ";
        // line 47
        if ((($context["filter_status"] ?? null) == "1")) {
            // line 48
            echo "                                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                ";
        } else {
            // line 50
            echo "                                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                ";
        }
        // line 52
        echo "                                ";
        if ((($context["filter_status"] ?? null) == "0")) {
            // line 53
            echo "                                <option value=\"0\" selected=\"selected\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                ";
        } else {
            // line 55
            echo "                                <option value=\"0\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                ";
        }
        // line 57
        echo "                            </select>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"input-date-added\">";
        // line 60
        echo ($context["entry_date_added"] ?? null);
        echo "</label>
                            <div class=\"input-group date\">
                                <input type=\"text\" name=\"filter_date_added\" value=\"";
        // line 62
        echo ($context["filter_date_added"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_added"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-added\" class=\"form-control\" />
                                <span class=\"input-group-btn\">
                                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                                </span></div>
                        </div>
                        <div class=\"form-group text-right\">
                            <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 68
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
        // line 76
        echo ($context["text_list"] ?? null);
        echo "</h3>
                    </div>
                    <div class=\"panel-body\">
                    ";
        // line 80
        echo "                    <form action=\"";
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-review\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-bordered table-hover\">
                                <thead>
                                    <tr>
                                        <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                                        <td class=\"text-left\">";
        // line 86
        if ((($context["sort"] ?? null) == "pd.name")) {
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
        // line 87
        if ((($context["sort"] ?? null) == "r.author")) {
            echo " <a href=\"";
            echo ($context["sort_author"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_author"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_author"] ?? null);
            echo "\">";
            echo ($context["column_author"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                                        <td class=\"text-right\">";
        // line 88
        if ((($context["sort"] ?? null) == "r.rating")) {
            echo " <a href=\"";
            echo ($context["sort_rating"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_rating"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_rating"] ?? null);
            echo "\">";
            echo ($context["column_rating"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                                        <td class=\"text-left\">";
        // line 89
        if ((($context["sort"] ?? null) == "r.status")) {
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
        // line 90
        if ((($context["sort"] ?? null) == "r.date_added")) {
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
                                        <td class=\"text-right\">";
        // line 91
        echo ($context["column_action"] ?? null);
        echo "</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 95
        if (($context["reviews"] ?? null)) {
            // line 96
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 97
                echo "                                    <tr>
                                        <td class=\"text-center\">";
                // line 98
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["review"], "review_id", [], "any", false, false, false, 98), ($context["selected"] ?? null))) {
                    // line 99
                    echo "                                            <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "review_id", [], "any", false, false, false, 99);
                    echo "\" checked=\"checked\" />
                                            ";
                } else {
                    // line 101
                    echo "                                            <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "review_id", [], "any", false, false, false, 101);
                    echo "\" />
                                            ";
                }
                // line 102
                echo "</td>
                                        <td class=\"text-left\">";
                // line 103
                echo twig_get_attribute($this->env, $this->source, $context["review"], "name", [], "any", false, false, false, 103);
                echo "</td>
                                        <td class=\"text-left\">";
                // line 104
                echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 104);
                echo "</td>
                                        <td class=\"text-right\">";
                // line 105
                echo twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 105);
                echo "</td>
                                        <td class=\"text-left\">";
                // line 106
                echo twig_get_attribute($this->env, $this->source, $context["review"], "status", [], "any", false, false, false, 106);
                echo "</td>
                                        <td class=\"text-left\">";
                // line 107
                echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 107);
                echo "</td>
                                        <td class=\"text-right\"><a href=\"";
                // line 108
                echo twig_get_attribute($this->env, $this->source, $context["review"], "edit", [], "any", false, false, false, 108);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                                    </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            echo "                                    ";
        } else {
            // line 112
            echo "                                    <tr>
                                        <td class=\"text-center\" colspan=\"7\">";
            // line 113
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                                    </tr>
                                    ";
        }
        // line 116
        echo "                                </tbody>
                            </table>
                        </div>
                    </form>
                    <div class=\"row\">
                        <div class=\"col-sm-6 text-left\">";
        // line 121
        echo ($context["pagination"] ?? null);
        echo "</div>
                        <div class=\"col-sm-6 text-right\">";
        // line 122
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
\$('input[name=\\'filter_product\\']').autocomplete({
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
<script type=\"text/javascript\">
<!--
\$('input[name=\\'filter_author\\']').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=account/vendor/lts_review/autherautocompelete&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['author'],
                        value: item['author']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('input[name=\\'filter_author\\']').val(item['label']);
        \$('input[name=\\'filter_author\\']').val(item['value']);
    }
});
//-->
</script>

<script type=\"text/javascript\">
<!--
\$('#button-filter').on('click', function() {
    url = 'index.php?route=account/vendor/lts_review';

    var filter_product = \$('input[name=\\'filter_product\\']').val();

    if (filter_product) {
        url += '&filter_product=' + encodeURIComponent(filter_product);
    }

    var filter_author = \$('input[name=\\'filter_author\\']').val();

    if (filter_author) {
        url += '&filter_author=' + encodeURIComponent(filter_author);
    }

    var filter_status = \$('select[name=\\'filter_status\\']').val();

    if (filter_status !== '') {
        url += '&filter_status=' + encodeURIComponent(filter_status);
    }

    var filter_date_added = \$('input[name=\\'filter_date_added\\']').val();

    if (filter_date_added) {
        url += '&filter_date_added=' + encodeURIComponent(filter_date_added);
    }

    location = url;
});
//-->
</script>
<script type=\"text/javascript\">
<!--
\$('.date').datetimepicker({
    language: '";
        // line 215
        echo ($context["datepicker"] ?? null);
        echo "',
    pickTime: false
});
//-->
</script>
";
        // line 220
        echo ($context["footer"] ?? null);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/account/vendor/lts_review_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  512 => 220,  504 => 215,  408 => 122,  404 => 121,  397 => 116,  391 => 113,  388 => 112,  385 => 111,  374 => 108,  370 => 107,  366 => 106,  362 => 105,  358 => 104,  354 => 103,  351 => 102,  345 => 101,  339 => 99,  337 => 98,  334 => 97,  329 => 96,  327 => 95,  320 => 91,  302 => 90,  284 => 89,  266 => 88,  248 => 87,  230 => 86,  220 => 80,  214 => 76,  203 => 68,  192 => 62,  187 => 60,  182 => 57,  176 => 55,  170 => 53,  167 => 52,  161 => 50,  155 => 48,  153 => 47,  147 => 44,  139 => 41,  135 => 40,  127 => 37,  123 => 36,  116 => 32,  110 => 28,  102 => 24,  99 => 23,  91 => 19,  89 => 18,  84 => 15,  73 => 13,  69 => 12,  64 => 10,  57 => 8,  51 => 7,  47 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/vendor/lts_review_list.twig", "");
    }
}
