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

/* @CoreHome/_logo.twig */
class __TwigTemplate_58703a6cdbb24faccf32f3226fc048e6 extends Template
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
        yield "<span id=\"logo\" class=\"logo brand-logo ";
        if ((array_key_exists("centeredLogo", $context) && (isset($context["centeredLogo"]) || array_key_exists("centeredLogo", $context) ? $context["centeredLogo"] : (function () { throw new RuntimeError('Variable "centeredLogo" does not exist.', 1, $this->source); })()))) {
            yield "center";
        }
        yield "\">
    ";
        // line 2
        if (( !array_key_exists("logoLink", $context) ||  !Matomo\Dependencies\Twig\Extension\CoreExtension::testEmpty((isset($context["logoLink"]) || array_key_exists("logoLink", $context) ? $context["logoLink"] : (function () { throw new RuntimeError('Variable "logoLink" does not exist.', 2, $this->source); })())))) {
            // line 3
            yield "    <a href=\"";
            yield \Piwik\piwik_escape_filter($this->env, ((array_key_exists("logoLink", $context)) ? (Matomo\Dependencies\Twig\Extension\CoreExtension::default((isset($context["logoLink"]) || array_key_exists("logoLink", $context) ? $context["logoLink"] : (function () { throw new RuntimeError('Variable "logoLink" does not exist.', 3, $this->source); })()), "index.php")) : ("index.php")), "html", null, true);
            yield "\" tabindex=\"-1\"
       title=\"";
            // line 4
            if ((isset($context["isCustomLogo"]) || array_key_exists("isCustomLogo", $context) ? $context["isCustomLogo"] : (function () { throw new RuntimeError('Variable "isCustomLogo" does not exist.', 4, $this->source); })())) {
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_PoweredBy"), "html", null, true);
                yield " ";
            }
            yield "Matomo";
            if ( !(isset($context["isCustomLogo"]) || array_key_exists("isCustomLogo", $context) ? $context["isCustomLogo"] : (function () { throw new RuntimeError('Variable "isCustomLogo" does not exist.', 4, $this->source); })())) {
                yield " # ";
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_OpenSourceWebAnalytics"), "html", null, true);
            }
            yield "\"
    >
    ";
        }
        // line 7
        yield "    ";
        if ((isset($context["hasSVGLogo"]) || array_key_exists("hasSVGLogo", $context) ? $context["hasSVGLogo"] : (function () { throw new RuntimeError('Variable "hasSVGLogo" does not exist.', 7, $this->source); })())) {
            // line 8
            yield "        <img src='";
            yield \Piwik\piwik_escape_filter($this->env, (isset($context["logoSVG"]) || array_key_exists("logoSVG", $context) ? $context["logoSVG"] : (function () { throw new RuntimeError('Variable "logoSVG" does not exist.', 8, $this->source); })()), "html", null, true);
            yield "?matomo' tabindex=\"3\"
             alt=\"";
            // line 9
            if ((isset($context["isCustomLogo"]) || array_key_exists("isCustomLogo", $context) ? $context["isCustomLogo"] : (function () { throw new RuntimeError('Variable "isCustomLogo" does not exist.', 9, $this->source); })())) {
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_PoweredBy"), "html", null, true);
                yield " ";
            }
            yield "Matomo\"
             class=\"";
            // line 10
            if ( !(isset($context["isCustomLogo"]) || array_key_exists("isCustomLogo", $context) ? $context["isCustomLogo"] : (function () { throw new RuntimeError('Variable "isCustomLogo" does not exist.', 10, $this->source); })())) {
                yield "default-piwik-logo";
            }
            yield "\" />
    ";
        } else {
            // line 12
            yield "        <img src='";
            if (((array_key_exists("useLargeLogo", $context)) ? (Matomo\Dependencies\Twig\Extension\CoreExtension::default((isset($context["useLargeLogo"]) || array_key_exists("useLargeLogo", $context) ? $context["useLargeLogo"] : (function () { throw new RuntimeError('Variable "useLargeLogo" does not exist.', 12, $this->source); })()), false)) : (false))) {
                yield \Piwik\piwik_escape_filter($this->env, (isset($context["logoLarge"]) || array_key_exists("logoLarge", $context) ? $context["logoLarge"] : (function () { throw new RuntimeError('Variable "logoLarge" does not exist.', 12, $this->source); })()), "html", null, true);
            } else {
                yield \Piwik\piwik_escape_filter($this->env, (isset($context["logoHeader"]) || array_key_exists("logoHeader", $context) ? $context["logoHeader"] : (function () { throw new RuntimeError('Variable "logoHeader" does not exist.', 12, $this->source); })()), "html", null, true);
            }
            yield "?matomo' alt=\"";
            if ((isset($context["isCustomLogo"]) || array_key_exists("isCustomLogo", $context) ? $context["isCustomLogo"] : (function () { throw new RuntimeError('Variable "isCustomLogo" does not exist.', 12, $this->source); })())) {
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_PoweredBy"), "html", null, true);
                yield " ";
            }
            yield "Matomo\" />
    ";
        }
        // line 14
        yield "        ";
        if (( !array_key_exists("logoLink", $context) ||  !Matomo\Dependencies\Twig\Extension\CoreExtension::testEmpty((isset($context["logoLink"]) || array_key_exists("logoLink", $context) ? $context["logoLink"] : (function () { throw new RuntimeError('Variable "logoLink" does not exist.', 14, $this->source); })())))) {
            // line 15
            yield "    </a>
    ";
        }
        // line 17
        yield "</span>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@CoreHome/_logo.twig";
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
        return array (  110 => 17,  106 => 15,  103 => 14,  88 => 12,  81 => 10,  74 => 9,  69 => 8,  66 => 7,  52 => 4,  47 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<span id=\"logo\" class=\"logo brand-logo {% if centeredLogo is defined and centeredLogo %}center{% endif %}\">
    {% if logoLink is not defined or logoLink is not empty %}
    <a href=\"{{ logoLink|default('index.php') }}\" tabindex=\"-1\"
       title=\"{% if isCustomLogo %}{{ 'General_PoweredBy'|translate }} {% endif %}Matomo{% if not isCustomLogo %} # {{ 'General_OpenSourceWebAnalytics'|translate }}{% endif %}\"
    >
    {% endif %}
    {% if hasSVGLogo %}
        <img src='{{ logoSVG }}?matomo' tabindex=\"3\"
             alt=\"{% if isCustomLogo %}{{ 'General_PoweredBy'|translate }} {% endif %}Matomo\"
             class=\"{% if not isCustomLogo %}default-piwik-logo{% endif %}\" />
    {% else %}
        <img src='{% if useLargeLogo|default(false) %}{{ logoLarge }}{% else %}{{ logoHeader }}{% endif %}?matomo' alt=\"{% if isCustomLogo %}{{ 'General_PoweredBy'|translate }} {% endif %}Matomo\" />
    {% endif %}
        {% if logoLink is not defined or logoLink is not empty %}
    </a>
    {% endif %}
</span>
", "@CoreHome/_logo.twig", "/var/www/html/wp-content/plugins/matomo/app/plugins/CoreHome/templates/_logo.twig");
    }
}
