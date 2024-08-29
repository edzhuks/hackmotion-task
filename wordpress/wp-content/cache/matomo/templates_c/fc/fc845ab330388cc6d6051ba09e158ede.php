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

/* @TagManager/gettingStarted.twig */
class __TwigTemplate_500df28c803d5e5fb025ccfd4d1313c8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@TagManager/tagmanager.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["title"] = ('' === $tmp = \Matomo\Dependencies\Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("TagManager_GettingStarted"));
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->loadTemplate("@TagManager/tagmanager.twig", "@TagManager/gettingStarted.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "<div
    vue-entry=\"TagManager.GettingStarted\"
    can-edit=\"";
        // line 8
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("canEdit", $context)) ? (Matomo\Dependencies\Twig\Extension\CoreExtension::default((isset($context["canEdit"]) || array_key_exists("canEdit", $context) ? $context["canEdit"] : (function () { throw new RuntimeError('Variable "canEdit" does not exist.', 8, $this->source); })()), null)) : (null))), "html", null, true);
        yield "\"
></div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@TagManager/gettingStarted.twig";
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
        return array (  61 => 8,  57 => 6,  53 => 5,  48 => 1,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@TagManager/tagmanager.twig' %}

{% set title %}{{ 'TagManager_GettingStarted'|translate|e }}{% endset %}

{% block content %}
<div
    vue-entry=\"TagManager.GettingStarted\"
    can-edit=\"{{ canEdit|default(null)|json_encode }}\"
></div>
{% endblock %}
", "@TagManager/gettingStarted.twig", "/var/www/html/wp-content/plugins/matomo/app/plugins/TagManager/templates/gettingStarted.twig");
    }
}
