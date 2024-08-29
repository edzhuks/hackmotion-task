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

/* @Events/_actionEvent.twig */
class __TwigTemplate_b97a8835204a5bb1eb95aa953babcf10 extends Template
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
        yield "<li class=\"action\" title=\"";
        yield $this->env->getFunction('postEvent')->getCallable()("Live.renderActionTooltip", (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 1, $this->source); })()), (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 1, $this->source); })()));
        yield "\">
    <div>
        ";
        // line 3
        if ( !Matomo\Dependencies\Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "pageTitle", [], "any", true, true, false, 3)) ? (Matomo\Dependencies\Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "pageTitle", [], "any", false, false, false, 3), false)) : (false)))) {
            // line 4
            yield "            <span class=\"truncated-text-line\">";
            yield $this->env->getFilter('rawSafeDecoded')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 4, $this->source); })()), "pageTitle", [], "any", false, false, false, 4));
            yield "</span>
        ";
        }
        // line 6
        yield "        <img src='plugins/Morpheus/images/event.svg' title='";
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Events_Event"), "html", null, true);
        yield "' class=\"action-list-action-icon event\">
        <span class=\"truncated-text-line event\">";
        // line 7
        yield $this->env->getFilter('rawSafeDecoded')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 7, $this->source); })()), "eventCategory", [], "any", false, false, false, 7));
        yield "
            - ";
        // line 8
        yield $this->env->getFilter('rawSafeDecoded')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 8, $this->source); })()), "eventAction", [], "any", false, false, false, 8));
        yield " ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "eventName", [], "any", true, true, false, 8)) {
            yield "- ";
            yield $this->env->getFilter('rawSafeDecoded')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 8, $this->source); })()), "eventName", [], "any", false, false, false, 8));
        }
        yield " ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "eventValue", [], "any", true, true, false, 8)) {
            yield "[";
            yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 8, $this->source); })()), "eventValue", [], "any", false, false, false, 8), "html", null, true);
            yield "]";
        }
        yield "</span>
        ";
        // line 9
        if ( !Matomo\Dependencies\Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 9, $this->source); })()), "url", [], "any", false, false, false, 9))) {
            // line 10
            yield "            ";
            if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["previousAction"] ?? null), "url", [], "any", true, true, false, 10)) ? (Matomo\Dependencies\Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["previousAction"] ?? null), "url", [], "any", false, false, false, 10), false)) : (false)) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 10, $this->source); })()), "url", [], "any", false, false, false, 10))) {
                // line 11
                yield "                            ";
            } else {
                // line 13
                yield "                ";
                if ((((is_string($__internal_compile_0 = Matomo\Dependencies\Twig\Extension\CoreExtension::lower($this->env->getCharset(), Matomo\Dependencies\Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 13, $this->source); })()), "url", [], "any", false, false, false, 13)))) && is_string($__internal_compile_1 = "javascript:") && str_starts_with($__internal_compile_0, $__internal_compile_1)) || (is_string($__internal_compile_2 = Matomo\Dependencies\Twig\Extension\CoreExtension::lower($this->env->getCharset(), Matomo\Dependencies\Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source,                 // line 14
(isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 14, $this->source); })()), "url", [], "any", false, false, false, 14)))) && is_string($__internal_compile_3 = "vbscript:") && str_starts_with($__internal_compile_2, $__internal_compile_3))) || (is_string($__internal_compile_4 = Matomo\Dependencies\Twig\Extension\CoreExtension::lower($this->env->getCharset(), Matomo\Dependencies\Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source,                 // line 15
(isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 15, $this->source); })()), "url", [], "any", false, false, false, 15)))) && is_string($__internal_compile_5 = "data:") && str_starts_with($__internal_compile_4, $__internal_compile_5)))) {
                    // line 16
                    yield "                    ";
                    yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 16, $this->source); })()), "url", [], "any", false, false, false, 16), "html", null, true);
                    yield "
                ";
                } else {
                    // line 18
                    yield "                    <a href=\"";
                    yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('safelink')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 18, $this->source); })()), "url", [], "any", false, false, false, 18)), "html_attr");
                    yield "\" rel=\"noreferrer noopener\" target=\"_blank\" class=\"truncated-text-line\">
                        ";
                    // line 19
                    yield \Piwik\piwik_escape_filter($this->env, Matomo\Dependencies\Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 19, $this->source); })()), "url", [], "any", false, false, false, 19), ["http://" => "", "https://" => ""]), "html", null, true);
                    yield "
                    </a>
                ";
                }
                // line 22
                yield "            ";
            }
            // line 23
            yield "        ";
        }
        // line 24
        yield "    </div>
</li>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Events/_actionEvent.twig";
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
        return array (  112 => 24,  109 => 23,  106 => 22,  100 => 19,  95 => 18,  89 => 16,  87 => 15,  86 => 14,  84 => 13,  81 => 11,  78 => 10,  76 => 9,  61 => 8,  57 => 7,  52 => 6,  46 => 4,  44 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<li class=\"action\" title=\"{{ postEvent('Live.renderActionTooltip', action, visitInfo) }}\">
    <div>
        {% if action.pageTitle|default(false) is not empty %}
            <span class=\"truncated-text-line\">{{ action.pageTitle|rawSafeDecoded }}</span>
        {% endif %}
        <img src='plugins/Morpheus/images/event.svg' title='{{ 'Events_Event'|translate }}' class=\"action-list-action-icon event\">
        <span class=\"truncated-text-line event\">{{ action.eventCategory|rawSafeDecoded }}
            - {{ action.eventAction|rawSafeDecoded }} {% if action.eventName is defined %}- {{ action.eventName|rawSafeDecoded }}{% endif %} {% if action.eventValue is defined %}[{{ action.eventValue }}]{% endif %}</span>
        {% if action.url is not empty %}
            {% if previousAction.url|default(false) == action.url %}
                {# For events, do not show (url) if the Event URL is the same as the URL last displayed #}
            {% else %}
                {% if action.url|trim|lower starts with 'javascript:' or
                action.url|trim|lower starts with 'vbscript:' or
                action.url|trim|lower starts with 'data:' %}
                    {{ action.url }}
                {% else %}
                    <a href=\"{{ action.url|safelink|e('html_attr') }}\" rel=\"noreferrer noopener\" target=\"_blank\" class=\"truncated-text-line\">
                        {{ action.url|replace({'http://': '', 'https://': ''}) }}
                    </a>
                {% endif %}
            {% endif %}
        {% endif %}
    </div>
</li>
", "@Events/_actionEvent.twig", "/var/www/html/wp-content/plugins/matomo/app/plugins/Events/templates/_actionEvent.twig");
    }
}
