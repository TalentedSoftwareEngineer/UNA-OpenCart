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

/* default/template/vendor/lts_banner.twig */
class __TwigTemplate_f934646df654e0995fdff1691e4566d026765152338058e0124bf7a3d006f7e9 extends \Twig\Template
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
        echo "<div class=\"vendor-wrap store-banner-logo\">
  <img src=\"";
        // line 2
        echo ($context["banner"] ?? null);
        echo "\" alt=\"\" title=\"\" class=\"img-responsive\"/>
    <div class=\"lts-vendor-info\">
      <div class=\"row\" style=\"height:0px;\">
        <div class=\"col-sm-5\">
          <div class=\"vendor-img\">
            <img src=\"";
        // line 7
        echo ($context["image"] ?? null);
        echo "\" alt=\"\" title=\"\" class=\"img-responsive img-circle\"/>
          </div>
        </div>
      </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "default/template/vendor/lts_banner.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 7,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/vendor/lts_banner.twig", "");
    }
}
