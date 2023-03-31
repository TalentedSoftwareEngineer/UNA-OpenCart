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

/* default/template/vendor/lts_profile.twig */
class __TwigTemplate_f84e4d15cb8b7b341dbdc0ffa42622e023c9fa91ce09233f764339ac541393c0 extends \Twig\Template
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
        echo "<div class=\"col-sm-3 vendor-content\">
  <div class=\"vendor-profile\">
    <div class=\"vendor-logo text-center\">
      <img src=\"";
        // line 4
        echo ($context["logo"] ?? null);
        echo "\" alt=\"\" title=\"\" class=\"img-responsive\" />
    </div>
    <div class=\"vendor-name text-center black-text\">";
        // line 6
        echo ($context["store_name"] ?? null);
        echo "</div>
    

  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/vendor/lts_profile.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 6,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/vendor/lts_profile.twig", "");
    }
}
