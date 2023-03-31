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

/* default/template/account/vendor/lts_column_left.twig */
class __TwigTemplate_c6f181c5d4ea480e2f4500594838a7d1fad180e4c8e1ec44da15a0ae93bc5969 extends \Twig\Template
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
        echo "<nav id=\"column-left\">
  <div id=\"navigation\">
    <span class=\"fa fa-bars\"></span> ";
        // line 3
        echo ($context["text_navigation"] ?? null);
        echo "
  </div>
  <ul id=\"menu\">
    ";
        // line 6
        $context["i"] = 0;
        // line 7
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menus"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 8
            echo "      <li id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["menu"], "id", [], "any", false, false, false, 8);
            echo "\">
        ";
            // line 9
            if (twig_get_attribute($this->env, $this->source, $context["menu"], "href", [], "any", false, false, false, 9)) {
                // line 10
                echo "          <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "href", [], "any", false, false, false, 10);
                echo "\">
            <i class=\"fa ";
                // line 11
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "icon", [], "any", false, false, false, 11);
                echo " fw\"></i> ";
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "name", [], "any", false, false, false, 11);
                echo "
          </a>
        ";
            } else {
                // line 14
                echo "          <a href=\"#collapse";
                echo ($context["i"] ?? null);
                echo "\"
            data-toggle=\"collapse\"
            class=\"parent collapsed\">
            <i class=\"fa ";
                // line 17
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "icon", [], "any", false, false, false, 17);
                echo " fw\"></i> ";
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "name", [], "any", false, false, false, 17);
                echo "
          </a>
        ";
            }
            // line 20
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, $context["menu"], "children", [], "any", false, false, false, 20)) {
                // line 21
                echo "          <ul id=\"collapse";
                echo ($context["i"] ?? null);
                echo "\" class=\"collapse\">
            ";
                // line 22
                $context["j"] = 0;
                // line 23
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["menu"], "children", [], "any", false, false, false, 23));
                foreach ($context['_seq'] as $context["_key"] => $context["children_1"]) {
                    // line 24
                    echo "              <li>
                ";
                    // line 25
                    if (twig_get_attribute($this->env, $this->source, $context["children_1"], "href", [], "any", false, false, false, 25)) {
                        // line 26
                        echo "                  <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["children_1"], "href", [], "any", false, false, false, 26);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["children_1"], "name", [], "any", false, false, false, 26);
                        echo "</a>
                ";
                    } else {
                        // line 28
                        echo "                  <a href=\"#collapse";
                        echo ($context["i"] ?? null);
                        echo "-";
                        echo ($context["j"] ?? null);
                        echo "\"
                    data-toggle=\"collapse\"
                    class=\"parent collapsed\">
                    ";
                        // line 31
                        echo twig_get_attribute($this->env, $this->source, $context["children_1"], "name", [], "any", false, false, false, 31);
                        echo "
                  </a>
                ";
                    }
                    // line 34
                    echo "
                ";
                    // line 35
                    if (twig_get_attribute($this->env, $this->source, $context["children_1"], "children", [], "any", false, false, false, 35)) {
                        // line 36
                        echo "                  <ul id=\"collapse";
                        echo ($context["i"] ?? null);
                        echo "-";
                        echo ($context["j"] ?? null);
                        echo "\" class=\"collapse\">
                    ";
                        // line 37
                        $context["k"] = 0;
                        // line 38
                        echo "                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["children_1"], "children", [], "any", false, false, false, 38));
                        foreach ($context['_seq'] as $context["_key"] => $context["children_2"]) {
                            // line 39
                            echo "                      <li>
                        ";
                            // line 40
                            if (twig_get_attribute($this->env, $this->source, $context["children_2"], "href", [], "any", false, false, false, 40)) {
                                // line 41
                                echo "                          <a href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["children_2"], "href", [], "any", false, false, false, 41);
                                echo "\">
                            ";
                                // line 42
                                echo twig_get_attribute($this->env, $this->source, $context["children_2"], "name", [], "any", false, false, false, 42);
                                echo "
                          </a>
                        ";
                            } else {
                                // line 45
                                echo "                          <a href=\"#collapse-";
                                echo ($context["i"] ?? null);
                                echo "-";
                                echo ($context["j"] ?? null);
                                echo "-";
                                echo ($context["k"] ?? null);
                                echo "\"
                            data-toggle=\"collapse\"
                            class=\"parent collapsed\">
                            ";
                                // line 48
                                echo twig_get_attribute($this->env, $this->source, $context["children_2"], "name", [], "any", false, false, false, 48);
                                echo "
                          </a>
                        ";
                            }
                            // line 51
                            echo "                        ";
                            if (twig_get_attribute($this->env, $this->source, $context["children_2"], "children", [], "any", false, false, false, 51)) {
                                // line 52
                                echo "                          <ul id=\"collapse-";
                                echo ($context["i"] ?? null);
                                echo "-";
                                echo ($context["j"] ?? null);
                                echo "-";
                                echo ($context["k"] ?? null);
                                echo "\"
                            class=\"collapse\">
                            ";
                                // line 54
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["children_2"], "children", [], "any", false, false, false, 54));
                                foreach ($context['_seq'] as $context["_key"] => $context["children_3"]) {
                                    // line 55
                                    echo "                              <li>
                                <a href=\"";
                                    // line 56
                                    echo twig_get_attribute($this->env, $this->source, $context["children_3"], "href", [], "any", false, false, false, 56);
                                    echo "\">
                                  ";
                                    // line 57
                                    echo twig_get_attribute($this->env, $this->source, $context["children_3"], "name", [], "any", false, false, false, 57);
                                    echo "
                                </a>
                              </li>
                            ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children_3'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 61
                                echo "                          </ul>
                        ";
                            }
                            // line 63
                            echo "                      </li>
                      ";
                            // line 64
                            $context["k"] = (($context["k"] ?? null) + 1);
                            // line 65
                            echo "                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children_2'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 66
                        echo "                  </ul>
                ";
                    }
                    // line 68
                    echo "              </li>
              ";
                    // line 69
                    $context["j"] = (($context["j"] ?? null) + 1);
                    // line 70
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children_1'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                echo "          </ul>
        ";
            }
            // line 73
            echo "      </li>
      ";
            // line 74
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 75
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "  </ul>
  <div id=\"stats\">
    <ul>
      <li>
        <div>
          ";
        // line 81
        echo ($context["text_complete_status"] ?? null);
        echo "
          <span class=\"pull-right\">";
        // line 82
        echo ($context["complete_status"] ?? null);
        echo "%</span>
        </div>
        <div class=\"progress\">
          <div class=\"progress-bar progress-bar-success\"
            role=\"progressbar\"
            aria-valuenow=\"";
        // line 87
        echo ($context["complete_status"] ?? null);
        echo "\"
            aria-valuemin=\"0\"
            aria-valuemax=\"100\"
            style=\"width: ";
        // line 90
        echo ($context["complete_status"] ?? null);
        echo "%\">
            <span class=\"sr-only\">";
        // line 91
        echo ($context["complete_status"] ?? null);
        echo "%</span>
          </div>
        </div>
      </li>
      <li>
        <div>
          ";
        // line 97
        echo ($context["text_processing_status"] ?? null);
        echo "
          <span class=\"pull-right\">";
        // line 98
        echo ($context["processing_status"] ?? null);
        echo "%</span>
        </div>
        <div class=\"progress\">
          <div class=\"progress-bar progress-bar-warning\"
            role=\"progressbar\"
            aria-valuenow=\"";
        // line 103
        echo ($context["processing_status"] ?? null);
        echo "\"
            aria-valuemin=\"0\"
            aria-valuemax=\"100\"
            style=\"width: ";
        // line 106
        echo ($context["processing_status"] ?? null);
        echo "%\">
            <span class=\"sr-only\">";
        // line 107
        echo ($context["processing_status"] ?? null);
        echo "%</span>
          </div>
        </div>
      </li>
      <li>
        <div>
          ";
        // line 113
        echo ($context["text_other_status"] ?? null);
        echo "
          <span class=\"pull-right\">";
        // line 114
        echo ($context["other_status"] ?? null);
        echo "%</span>
        </div>
        <div class=\"progress\">
          <div class=\"progress-bar progress-bar-danger\"
            role=\"progressbar\"
            aria-valuenow=\"";
        // line 119
        echo ($context["other_status"] ?? null);
        echo "\"
            aria-valuemin=\"0\"
            aria-valuemax=\"100\"
            style=\"width: ";
        // line 122
        echo ($context["other_status"] ?? null);
        echo "%\">
            <span class=\"sr-only\">";
        // line 123
        echo ($context["other_status"] ?? null);
        echo "%</span>
          </div>
        </div>
      </li>
    </ul>
  </div>
</nav>
";
    }

    public function getTemplateName()
    {
        return "default/template/account/vendor/lts_column_left.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 123,  350 => 122,  344 => 119,  336 => 114,  332 => 113,  323 => 107,  319 => 106,  313 => 103,  305 => 98,  301 => 97,  292 => 91,  288 => 90,  282 => 87,  274 => 82,  270 => 81,  263 => 76,  257 => 75,  255 => 74,  252 => 73,  248 => 71,  242 => 70,  240 => 69,  237 => 68,  233 => 66,  227 => 65,  225 => 64,  222 => 63,  218 => 61,  208 => 57,  204 => 56,  201 => 55,  197 => 54,  187 => 52,  184 => 51,  178 => 48,  167 => 45,  161 => 42,  156 => 41,  154 => 40,  151 => 39,  146 => 38,  144 => 37,  137 => 36,  135 => 35,  132 => 34,  126 => 31,  117 => 28,  109 => 26,  107 => 25,  104 => 24,  99 => 23,  97 => 22,  92 => 21,  89 => 20,  81 => 17,  74 => 14,  66 => 11,  61 => 10,  59 => 9,  54 => 8,  49 => 7,  47 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/vendor/lts_column_left.twig", "");
    }
}
