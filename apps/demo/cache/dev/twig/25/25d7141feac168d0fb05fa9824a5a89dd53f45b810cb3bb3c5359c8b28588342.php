<?php

/* SynapseDemoThemeBundle:Component:static-logo.html.twig */
class __TwigTemplate_a1f98ff3e23826a2aead5601ef7aacaa9d3d4ae0680ed940ebf32246ad728c8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0672b45a0bc8c72e476a08d5416b1141c635dfb26abbb5f5479eaee5bebdc750 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0672b45a0bc8c72e476a08d5416b1141c635dfb26abbb5f5479eaee5bebdc750->enter($__internal_0672b45a0bc8c72e476a08d5416b1141c635dfb26abbb5f5479eaee5bebdc750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SynapseDemoThemeBundle:Component:static-logo.html.twig"));

        $__internal_5b22a27f7e29b4f35166b94b52415b4c8c28b474be9d4d9a52bb57df9c1a83f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b22a27f7e29b4f35166b94b52415b4c8c28b474be9d4d9a52bb57df9c1a83f2->enter($__internal_5b22a27f7e29b4f35166b94b52415b4c8c28b474be9d4d9a52bb57df9c1a83f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SynapseDemoThemeBundle:Component:static-logo.html.twig"));

        // line 1
        echo "<div class=\"container\">
  <img src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/synapsecmf/images/logo_synapse.svg"), "html", null, true);
        echo "\" alt=\"Logo Synapse\">
</div>
";
        
        $__internal_0672b45a0bc8c72e476a08d5416b1141c635dfb26abbb5f5479eaee5bebdc750->leave($__internal_0672b45a0bc8c72e476a08d5416b1141c635dfb26abbb5f5479eaee5bebdc750_prof);

        
        $__internal_5b22a27f7e29b4f35166b94b52415b4c8c28b474be9d4d9a52bb57df9c1a83f2->leave($__internal_5b22a27f7e29b4f35166b94b52415b4c8c28b474be9d4d9a52bb57df9c1a83f2_prof);

    }

    public function getTemplateName()
    {
        return "SynapseDemoThemeBundle:Component:static-logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
  <img src=\"{{ asset('/bundles/synapsecmf/images/logo_synapse.svg') }}\" alt=\"Logo Synapse\">
</div>
", "SynapseDemoThemeBundle:Component:static-logo.html.twig", "/var/www/html/src/Synapse/Demo/Bundle/ThemeBundle/Resources/views/Component/static-logo.html.twig");
    }
}
