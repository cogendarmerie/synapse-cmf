<?php

/* SynapseDemoThemeBundle:Component:free-jumbotron.html.twig */
class __TwigTemplate_fade05bc141a5cd4655f9c5cfe9e980a0fab8147e53255960b4c062a0a954879 extends Twig_Template
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
        $__internal_a004912b6fec28903efc086b3f940dfc90fd1dcb3202246fe27ff92c6df73bc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a004912b6fec28903efc086b3f940dfc90fd1dcb3202246fe27ff92c6df73bc1->enter($__internal_a004912b6fec28903efc086b3f940dfc90fd1dcb3202246fe27ff92c6df73bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SynapseDemoThemeBundle:Component:free-jumbotron.html.twig"));

        $__internal_9e40ac48188f6897a5fe0a976d103a9371796b8f80172c268a72de5780035daf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e40ac48188f6897a5fe0a976d103a9371796b8f80172c268a72de5780035daf->enter($__internal_9e40ac48188f6897a5fe0a976d103a9371796b8f80172c268a72de5780035daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SynapseDemoThemeBundle:Component:free-jumbotron.html.twig"));

        // line 1
        echo "<div class=\"container\">
  <h1 class=\"display-3\">Hello, Synapse ";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(($context["content"] ?? $this->getContext($context, "content")), "title", array()), "html", null, true);
        echo " !</h1>
  <p>";
        // line 3
        echo ($context["html"] ?? $this->getContext($context, "html"));
        echo "</p>
  <p><a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Learn more &raquo;</a></p>
</div>
";
        
        $__internal_a004912b6fec28903efc086b3f940dfc90fd1dcb3202246fe27ff92c6df73bc1->leave($__internal_a004912b6fec28903efc086b3f940dfc90fd1dcb3202246fe27ff92c6df73bc1_prof);

        
        $__internal_9e40ac48188f6897a5fe0a976d103a9371796b8f80172c268a72de5780035daf->leave($__internal_9e40ac48188f6897a5fe0a976d103a9371796b8f80172c268a72de5780035daf_prof);

    }

    public function getTemplateName()
    {
        return "SynapseDemoThemeBundle:Component:free-jumbotron.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 3,  28 => 2,  25 => 1,);
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
  <h1 class=\"display-3\">Hello, Synapse {{ content.title }} !</h1>
  <p>{{ html|raw }}</p>
  <p><a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Learn more &raquo;</a></p>
</div>
", "SynapseDemoThemeBundle:Component:free-jumbotron.html.twig", "/var/www/html/src/Synapse/Demo/Bundle/ThemeBundle/Resources/views/Component/free-jumbotron.html.twig");
    }
}
