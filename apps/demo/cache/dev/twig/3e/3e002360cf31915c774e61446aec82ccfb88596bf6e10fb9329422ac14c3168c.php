<?php

/* SynapsePageBundle::layout.html.twig */
class __TwigTemplate_821bd0d2566dc2503a4ff9ed27331979db0842701908604c6b2bdb23d08c3f79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SynapseAdminBundle::layout.html.twig", "SynapsePageBundle::layout.html.twig", 1);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SynapseAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a9d274a8dc0f3e666255d1829ca88a7789724aed24f178c6488ac10179b3dbf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9d274a8dc0f3e666255d1829ca88a7789724aed24f178c6488ac10179b3dbf0->enter($__internal_a9d274a8dc0f3e666255d1829ca88a7789724aed24f178c6488ac10179b3dbf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SynapsePageBundle::layout.html.twig"));

        $__internal_17b2ddc75fba215842fa5e16e8f5b9bf0d678dd914307475f8c4226e9203100b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17b2ddc75fba215842fa5e16e8f5b9bf0d678dd914307475f8c4226e9203100b->enter($__internal_17b2ddc75fba215842fa5e16e8f5b9bf0d678dd914307475f8c4226e9203100b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SynapsePageBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9d274a8dc0f3e666255d1829ca88a7789724aed24f178c6488ac10179b3dbf0->leave($__internal_a9d274a8dc0f3e666255d1829ca88a7789724aed24f178c6488ac10179b3dbf0_prof);

        
        $__internal_17b2ddc75fba215842fa5e16e8f5b9bf0d678dd914307475f8c4226e9203100b->leave($__internal_17b2ddc75fba215842fa5e16e8f5b9bf0d678dd914307475f8c4226e9203100b_prof);

    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_801083e42c01803c48ac40eab35a32659476b4ac79de09eea57ca7f939cf095c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_801083e42c01803c48ac40eab35a32659476b4ac79de09eea57ca7f939cf095c->enter($__internal_801083e42c01803c48ac40eab35a32659476b4ac79de09eea57ca7f939cf095c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_185c9910d6dcf3c3f04775986b6ee76c4c0a31c9c24b01c1b6ab4afab2bac784 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_185c9910d6dcf3c3f04775986b6ee76c4c0a31c9c24b01c1b6ab4afab2bac784->enter($__internal_185c9910d6dcf3c3f04775986b6ee76c4c0a31c9c24b01c1b6ab4afab2bac784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 4
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/synapsepage/js/page-menu.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/synapsepage/js/page-admin-theme.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_185c9910d6dcf3c3f04775986b6ee76c4c0a31c9c24b01c1b6ab4afab2bac784->leave($__internal_185c9910d6dcf3c3f04775986b6ee76c4c0a31c9c24b01c1b6ab4afab2bac784_prof);

        
        $__internal_801083e42c01803c48ac40eab35a32659476b4ac79de09eea57ca7f939cf095c->leave($__internal_801083e42c01803c48ac40eab35a32659476b4ac79de09eea57ca7f939cf095c_prof);

    }

    public function getTemplateName()
    {
        return "SynapsePageBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 6,  54 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SynapseAdminBundle::layout.html.twig' %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('bundles/synapsepage/js/page-menu.js') }}\"></script>
  <script src=\"{{ asset('bundles/synapsepage/js/page-admin-theme.js') }}\"></script>
{% endblock %}
", "SynapsePageBundle::layout.html.twig", "/var/www/html/src/Synapse/Page/Bundle/Resources/views/layout.html.twig");
    }
}
