<?php

/* SynapseDemoThemeBundle:Component:free.html.twig */
class __TwigTemplate_6666dfe90e54ddaa8eed2d8ff03740994bdb04e1d151a7b18fa21189693149df extends Twig_Template
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
        $__internal_3a2022f438561f0185dd2cee88a11ebbed89e848732b0fd7765114867c08e996 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a2022f438561f0185dd2cee88a11ebbed89e848732b0fd7765114867c08e996->enter($__internal_3a2022f438561f0185dd2cee88a11ebbed89e848732b0fd7765114867c08e996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SynapseDemoThemeBundle:Component:free.html.twig"));

        $__internal_cb223781cb221ace574f273570f4428771e42e78000c605fe3a02c7d3c56a84b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb223781cb221ace574f273570f4428771e42e78000c605fe3a02c7d3c56a84b->enter($__internal_cb223781cb221ace574f273570f4428771e42e78000c605fe3a02c7d3c56a84b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SynapseDemoThemeBundle:Component:free.html.twig"));

        // line 1
        echo "<div class=\"col-md-4\">
  <h2>A Free component</h2>
  <p>";
        // line 3
        echo twig_include($this->env, $context, "SynapseCmfBundle:Component:free.html.twig", array("html" => ($context["html"] ?? $this->getContext($context, "html"))));
        echo "</p>
  <p><a class=\"btn btn-secondary\" href=\"#\" role=\"button\">View details &raquo;</a></p>
  ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context);
        echo "
</div>
";
        
        $__internal_3a2022f438561f0185dd2cee88a11ebbed89e848732b0fd7765114867c08e996->leave($__internal_3a2022f438561f0185dd2cee88a11ebbed89e848732b0fd7765114867c08e996_prof);

        
        $__internal_cb223781cb221ace574f273570f4428771e42e78000c605fe3a02c7d3c56a84b->leave($__internal_cb223781cb221ace574f273570f4428771e42e78000c605fe3a02c7d3c56a84b_prof);

    }

    public function getTemplateName()
    {
        return "SynapseDemoThemeBundle:Component:free.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-md-4\">
  <h2>A Free component</h2>
  <p>{{ include('SynapseCmfBundle:Component:free.html.twig', { 'html': html }) }}</p>
  <p><a class=\"btn btn-secondary\" href=\"#\" role=\"button\">View details &raquo;</a></p>
  {{ dump() }}
</div>
", "SynapseDemoThemeBundle:Component:free.html.twig", "/var/www/html/src/Synapse/Demo/Bundle/ThemeBundle/Resources/views/Component/free.html.twig");
    }
}
