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

/* vendor/lts_mail_form.twig */
class __TwigTemplate_daa18d103609b20efb7227e80e28d912bc63bfc27f78ebdfc94e44ba562f82fb extends \Twig\Template
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
        <button id=\"button-send\" type=\"submit\" form=\"vendor-mail\" data-loading-text=\"";
        // line 6
        echo ($context["text_loading"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_send"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-envelope\"></i></button>
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
            echo "        <li><a href=\"";
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
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-envelope\"></i> ";
        // line 19
        echo ($context["heading_title"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form class=\"form-horizontal\" action=\"";
        // line 22
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" id=\"vendor-mail\">
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-to\">";
        // line 24
        echo ($context["entry_to"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"too_id\" id=\"input-to\" class=\"form-control\">
                ";
        // line 27
        if (($context["too"] ?? null)) {
            // line 28
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["too"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["to"]) {
                // line 29
                echo "                    ";
                if ((($context["too_id"] ?? null) == twig_get_attribute($this->env, $this->source, $context["to"], "too_id", [], "any", false, false, false, 29))) {
                    // line 30
                    echo "                      <option value=\"";
                    echo ($context["too_id"] ?? null);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["to"], "name", [], "any", false, false, false, 30);
                    echo "</option>
                    ";
                } else {
                    // line 32
                    echo "                         <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["to"], "too_id", [], "any", false, false, false, 32);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["to"], "name", [], "any", false, false, false, 32);
                    echo "</option>
                    ";
                }
                // line 34
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['to'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "                ";
        }
        // line 36
        echo "              </select>
            </div>
          </div>

          
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-subject\">";
        // line 42
        echo ($context["entry_subject"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"subject\" value=\"";
        // line 44
        echo ($context["subject"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_subject"] ?? null);
        echo "\" id=\"input-subject\" class=\"form-control\" />
               ";
        // line 45
        if (($context["error_subject"] ?? null)) {
            // line 46
            echo "              \t<div class=\"text-danger\">";
            echo ($context["error_subject"] ?? null);
            echo "</div>
              ";
        }
        // line 48
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-message\">";
        // line 51
        echo ($context["entry_message"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"message\" placeholder=\"";
        // line 53
        echo ($context["entry_message"] ?? null);
        echo "\" id=\"input-message\" data-toggle=\"summernote\" data-lang=\"";
        echo ($context["summernote"] ?? null);
        echo "\" class=\"form-control\">";
        echo ($context["message"] ?? null);
        echo "</textarea>
               ";
        // line 54
        if (($context["error_message"] ?? null)) {
            // line 55
            echo "              \t<div class=\"text-danger\">";
            echo ($context["error_message"] ?? null);
            echo "</div>
              ";
        }
        // line 57
        echo "            </div>
          </div>
          <div class=\"form-group\">
          \t<label class=\"col-sm-2 control-label\">";
        // line 60
        echo ($context["entry_status"] ?? null);
        echo "</label>
          \t<div class=\"col-sm-10\">
          \t\t<select name=\"status\" class=\"form-control\">
          \t\t";
        // line 63
        if (($context["status"] ?? null)) {
            // line 64
            echo "          \t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
          \t\t\t<option value=\"0\">";
            // line 65
            echo ($context["text_disabled"] ?? null);
            echo "</option>
          \t\t";
        } else {
            // line 67
            echo "          \t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
          \t\t\t<option value=\"0\" selected=\"selected\">";
            // line 68
            echo ($context["text_disabled"] ?? null);
            echo "</option>
          \t\t";
        }
        // line 70
        echo "          \t\t</select>
          \t</div>
          \t
          </div>

        </form>
      </div>
    </div>
  </div>
  <link href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\" />
  <link href=\"view/javascript/codemirror/theme/monokai.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/xml.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/formatting.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
  <link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script> 
";
        // line 88
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "vendor/lts_mail_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 88,  224 => 70,  219 => 68,  214 => 67,  209 => 65,  204 => 64,  202 => 63,  196 => 60,  191 => 57,  185 => 55,  183 => 54,  175 => 53,  170 => 51,  165 => 48,  159 => 46,  157 => 45,  151 => 44,  146 => 42,  138 => 36,  135 => 35,  129 => 34,  121 => 32,  113 => 30,  110 => 29,  105 => 28,  103 => 27,  97 => 24,  92 => 22,  86 => 19,  78 => 13,  67 => 11,  63 => 10,  58 => 8,  52 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "vendor/lts_mail_form.twig", "");
    }
}
