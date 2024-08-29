<?php

use Matomo\Dependencies\Twig\Environment;
use Matomo\Dependencies\Twig\Error\LoaderError;
use Matomo\Dependencies\Twig\Error\RuntimeError;
use Matomo\Dependencies\Twig\Extension\CoreExtension;
use Matomo\Dependencies\Twig\Extension\SandboxExtension;
use Matomo\Dependencies\Twig\Markup;
use Matomo\Dependencies\Twig\Sandbox\SecurityError;
use Matomo\Dependencies\Twig\Sandbox\SecurityNotAllowedTagError;
use Matomo\Dependencies\Twig\Sandbox\SecurityNotAllowedFilterError;
use Matomo\Dependencies\Twig\Sandbox\SecurityNotAllowedFunctionError;
use Matomo\Dependencies\Twig\Source;
use Matomo\Dependencies\Twig\Template;

/* @CustomDimensions/_visitorDetails.twig */
class __TwigTemplate_96a72657a9f9b65fa0cdad9bab3e7e2a extends Template
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
        if ((isset($context["customDimensions"]) || array_key_exists("customDimensions", $context) ? $context["customDimensions"] : (function () { throw new RuntimeError('Variable "customDimensions" does not exist.', 1, $this->source); })())) {
            // line 2
            yield "    <div class=\"visitorCustomDimensions\">
    ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Matomo\Dependencies\Twig\Extension\CoreExtension::filter($this->env, (isset($context["customDimensions"]) || array_key_exists("customDimensions", $context) ? $context["customDimensions"] : (function () { throw new RuntimeError('Variable "customDimensions" does not exist.', 3, $this->source); })()), function ($__customDimension__) use ($context, $macros) { $context["customDimension"] = $__customDimension__; return (Matomo\Dependencies\Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["customDimension"], "value", [], "any", false, false, false, 3)) > 0); }));
            foreach ($context['_seq'] as $context["_key"] => $context["customDimension"]) {
                // line 4
                yield "        <br/>
        <abbr class=\"visitorLogTooltip\" title=\"";
                // line 5
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CustomDimensions_CustomDimensionId", CoreExtension::getAttribute($this->env, $this->source, $context["customDimension"], "id", [], "any", false, false, false, 5)), "html", null, true);
                yield "\">";
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('truncate')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["customDimension"], "name", [], "any", false, false, false, 5), 30), "html", null, true);
                yield ":</abbr>
        ";
                // line 6
                yield $this->env->getFilter('rawSafeDecoded')->getCallable()($this->env->getFilter('truncate')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["customDimension"], "value", [], "any", false, false, false, 6), 50));
                yield "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customDimension'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            yield "    </div>
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@CustomDimensions/_visitorDetails.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  64 => 8,  56 => 6,  50 => 5,  47 => 4,  43 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if customDimensions %}
    <div class=\"visitorCustomDimensions\">
    {% for customDimension in customDimensions|filter(customDimension => customDimension.value|length > 0) %}
        <br/>
        <abbr class=\"visitorLogTooltip\" title=\"{{ 'CustomDimensions_CustomDimensionId'|translate(customDimension.id) }}\">{{ customDimension.name|truncate(30) }}:</abbr>
        {{ customDimension.value|truncate(50)|rawSafeDecoded }}
    {% endfor %}
    </div>
{% endif %}", "@CustomDimensions/_visitorDetails.twig", "/var/www/html/wp-content/plugins/matomo/app/plugins/CustomDimensions/templates/_visitorDetails.twig");
    }
}
