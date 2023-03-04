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

/* default/template/account/vendor/lts_category_list.twig */
class __TwigTemplate_e5bf80905666eb62a2257465ab065833e38d8c3815b049aa05bd802b183e4229 extends \Twig\Template
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
                <!--  <a href=\"";
        // line 7
        echo ($context["repair"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_rebuild"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-refresh\"></i></a> -->
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 8
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#vendor-form-category').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
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
        echo "         ";
        if (($context["error_delete_msg"] ?? null)) {
            // line 25
            echo "        <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["error_delete_msg"] ?? null);
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
            echo " <div class=\"alert alert-danger
        alert-dismissible\"><i class=\"fa fa-check-circle\"></i>";
            // line 31
            echo ($context["error_success"] ?? null);
            echo "<button type=\"button\" class=\"close\"
        data-dismiss=\"alert\">&times;</button> </div>
        ";
        }
        // line 34
        echo "        
        ";
        // line 35
        if (($context["success"] ?? null)) {
            echo "            
        <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            // line 36
            echo ($context["success"] ?? null);
            echo "           
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>  
        </div>
        ";
        }
        // line 40
        echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 42
        echo ($context["text_list"] ?? null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                ";
        // line 46
        echo "                <form action=\"";
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"vendor-form-category\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered table-hover\">
                            <thead>
                                <tr>
                                    <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                                    <td class=\"text-left\">";
        // line 52
        if ((($context["sort"] ?? null) == "name")) {
            // line 53
            echo "                                        <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                                        ";
        } else {
            // line 55
            echo "                                        <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                                        ";
        }
        // line 56
        echo "</td>
                                     
                                    <td class=\"text-right\">";
        // line 58
        echo ($context["column_status"] ?? null);
        echo "</td>
                                </tr>
                            </thead>
                             <tbody>
                ";
        // line 62
        if (($context["categories"] ?? null)) {
            // line 63
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 64
                echo "                <tr>
                  <td class=\"text-center\">";
                // line 65
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 65), ($context["selected"] ?? null))) {
                    // line 66
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 66);
                    echo "\" checked=\"checked\" />
                    ";
                } else {
                    // line 68
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 68);
                    echo "\" />
                    ";
                }
                // line 69
                echo "</td>
                  <td class=\"text-left\">";
                // line 70
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 70);
                echo "</td>    

                 
                  ";
                // line 73
                if ((twig_get_attribute($this->env, $this->source, $context["category"], "vendor_id", [], "any", false, false, false, 73) > 0)) {
                    // line 74
                    echo "
                  ";
                    // line 75
                    if (((twig_get_attribute($this->env, $this->source, $context["category"], "vendor_id", [], "any", false, false, false, 75) == ($context["cur_vendor_id"] ?? null)) && (twig_get_attribute($this->env, $this->source, $context["category"], "approved", [], "any", false, false, false, 75) > 0))) {
                        echo "                   
                  <td class=\"text-right\" style=\"color:blue\">";
                        // line 76
                        echo ($context["text_self_vendor_approved"] ?? null);
                        echo "<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "edit", [], "any", false, false, false, 76);
                        echo "\" class=\"btn btn-primary\" data-toggle=\"tooltip\" title=\"";
                        echo ($context["text_edit"] ?? null);
                        echo "\"><i class=\"fa fa-pencil\"></i></a></td>
                  ";
                    } elseif (((twig_get_attribute($this->env, $this->source,                     // line 77
$context["category"], "vendor_id", [], "any", false, false, false, 77) == ($context["cur_vendor_id"] ?? null)) && (twig_get_attribute($this->env, $this->source, $context["category"], "approved", [], "any", false, false, false, 77) <= 0))) {
                        // line 78
                        echo "                  <td class=\"text-right\" style=\"color:red\">";
                        echo ($context["text_self_vendor_approval"] ?? null);
                        echo " <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "edit", [], "any", false, false, false, 78);
                        echo "\" class=\"btn btn-primary\" data-toggle=\"tooltip\" title=\"";
                        echo ($context["text_edit"] ?? null);
                        echo "\"><i class=\"fa fa-pencil\"></i></a></td>
                  ";
                    } else {
                        // line 80
                        echo "                  <td class=\"text-right\">";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "vendor_status", [], "any", false, false, false, 80);
                        echo "</td>
                  ";
                    }
                    // line 82
                    echo "                  ";
                } else {
                    echo " 
                 
                  <td class=\"text-right\">";
                    // line 84
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "status", [], "any", false, false, false, 84);
                    echo "</td>              
                  
                  ";
                }
                // line 87
                echo "                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "                ";
        } else {
            // line 90
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"4\">";
            // line 91
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                </tr>
                ";
        }
        // line 94
        echo "              </tbody>
                        </table>
                    </div>
                   
                </form>
                <div class=\"row\">
                    <div class=\"col-sm-6 text-left\">";
        // line 100
        echo ($context["pagination"] ?? null);
        echo "</div>
                    <div class=\"col-sm-6 text-right\">";
        // line 101
        echo ($context["results"] ?? null);
        echo "</div>
                </div>
            </div>
        </div>
    </div>
";
        // line 106
        echo ($context["footer"] ?? null);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/account/vendor/lts_category_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  310 => 106,  302 => 101,  298 => 100,  290 => 94,  284 => 91,  281 => 90,  278 => 89,  271 => 87,  265 => 84,  259 => 82,  253 => 80,  243 => 78,  241 => 77,  233 => 76,  229 => 75,  226 => 74,  224 => 73,  218 => 70,  215 => 69,  209 => 68,  203 => 66,  201 => 65,  198 => 64,  193 => 63,  191 => 62,  184 => 58,  180 => 56,  172 => 55,  162 => 53,  160 => 52,  150 => 46,  144 => 42,  140 => 40,  133 => 36,  129 => 35,  126 => 34,  120 => 31,  116 => 30,  113 => 29,  105 => 25,  102 => 24,  94 => 20,  92 => 19,  86 => 15,  75 => 13,  71 => 12,  66 => 10,  59 => 8,  53 => 7,  47 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/vendor/lts_category_list.twig", "");
    }
}
