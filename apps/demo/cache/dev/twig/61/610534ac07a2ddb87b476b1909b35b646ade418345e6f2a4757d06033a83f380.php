<?php

/* SynapseDemoThemeBundle:Template:page.html.twig */
class __TwigTemplate_e93d7c0adf150f3c54aa6c08042843fdd64697f320c360640fcf3b5a3f728a88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SynapseDemoThemeBundle::layout.html.twig", "SynapseDemoThemeBundle:Template:page.html.twig", 1);
        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SynapseDemoThemeBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f5197dcbb31c9dd74789ee13e17628312a328b147cbd76bd65d4b46ed5c395ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5197dcbb31c9dd74789ee13e17628312a328b147cbd76bd65d4b46ed5c395ed->enter($__internal_f5197dcbb31c9dd74789ee13e17628312a328b147cbd76bd65d4b46ed5c395ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SynapseDemoThemeBundle:Template:page.html.twig"));

        $__internal_c0584fb97d286d4b76b9c7496d351337214b82a2fa937609df9357c31ca64610 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0584fb97d286d4b76b9c7496d351337214b82a2fa937609df9357c31ca64610->enter($__internal_c0584fb97d286d4b76b9c7496d351337214b82a2fa937609df9357c31ca64610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SynapseDemoThemeBundle:Template:page.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5197dcbb31c9dd74789ee13e17628312a328b147cbd76bd65d4b46ed5c395ed->leave($__internal_f5197dcbb31c9dd74789ee13e17628312a328b147cbd76bd65d4b46ed5c395ed_prof);

        
        $__internal_c0584fb97d286d4b76b9c7496d351337214b82a2fa937609df9357c31ca64610->leave($__internal_c0584fb97d286d4b76b9c7496d351337214b82a2fa937609df9357c31ca64610_prof);

    }

    // line 3
    public function block_meta($context, array $blocks = array())
    {
        $__internal_d6357db1b84e8a4d098f2ab07e88aebb456bcde03954c087a1e0740c52a971e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6357db1b84e8a4d098f2ab07e88aebb456bcde03954c087a1e0740c52a971e8->enter($__internal_d6357db1b84e8a4d098f2ab07e88aebb456bcde03954c087a1e0740c52a971e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        $__internal_fccf2e2a11745a3020ea837c760804f1265c63e2334ac4f84bd5996d6349af4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fccf2e2a11745a3020ea837c760804f1265c63e2334ac4f84bd5996d6349af4b->enter($__internal_fccf2e2a11745a3020ea837c760804f1265c63e2334ac4f84bd5996d6349af4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        // line 4
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? $this->getContext($context, "page")), "meta", array()));
        foreach ($context['_seq'] as $context["meta_name"] => $context["meta_content"]) {
            // line 5
            echo "      <meta name=\"";
            echo twig_escape_filter($this->env, $context["meta_name"], "html", null, true);
            echo "\" content=\"";
            echo twig_escape_filter($this->env, $context["meta_content"], "html", null, true);
            echo "\">
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['meta_name'], $context['meta_content'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  <title>";
        echo twig_escape_filter($this->env, (( !twig_test_empty($this->getAttribute($this->getAttribute(($context["page"] ?? $this->getContext($context, "page")), "meta", array()), "title", array(), "array"))) ? ($this->getAttribute($this->getAttribute(($context["page"] ?? $this->getContext($context, "page")), "meta", array()), "title", array(), "array")) : ($this->getAttribute(($context["page"] ?? $this->getContext($context, "page")), "title", array()))), "html", null, true);
        echo "</title>
";
        
        $__internal_fccf2e2a11745a3020ea837c760804f1265c63e2334ac4f84bd5996d6349af4b->leave($__internal_fccf2e2a11745a3020ea837c760804f1265c63e2334ac4f84bd5996d6349af4b_prof);

        
        $__internal_d6357db1b84e8a4d098f2ab07e88aebb456bcde03954c087a1e0740c52a971e8->leave($__internal_d6357db1b84e8a4d098f2ab07e88aebb456bcde03954c087a1e0740c52a971e8_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_323b23a034ac2d6e24ef221c7e3f18d4424c550251ba707463d3e078b55597e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_323b23a034ac2d6e24ef221c7e3f18d4424c550251ba707463d3e078b55597e4->enter($__internal_323b23a034ac2d6e24ef221c7e3f18d4424c550251ba707463d3e078b55597e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_fa89df415d68c5af280531c5e6c798709a01a4a7e1f53c5673110ad667549bdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa89df415d68c5af280531c5e6c798709a01a4a7e1f53c5673110ad667549bdc->enter($__internal_fa89df415d68c5af280531c5e6c798709a01a4a7e1f53c5673110ad667549bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "  ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "
  ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context);
        echo "
";
        
        $__internal_fa89df415d68c5af280531c5e6c798709a01a4a7e1f53c5673110ad667549bdc->leave($__internal_fa89df415d68c5af280531c5e6c798709a01a4a7e1f53c5673110ad667549bdc_prof);

        
        $__internal_323b23a034ac2d6e24ef221c7e3f18d4424c550251ba707463d3e078b55597e4->leave($__internal_323b23a034ac2d6e24ef221c7e3f18d4424c550251ba707463d3e078b55597e4_prof);

    }

    public function getTemplateName()
    {
        return "SynapseDemoThemeBundle:Template:page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 12,  88 => 11,  79 => 10,  66 => 7,  55 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SynapseDemoThemeBundle::layout.html.twig' %}

{% block meta %}
  {% for meta_name, meta_content in page.meta %}
      <meta name=\"{{ meta_name }}\" content=\"{{ meta_content }}\">
  {% endfor %}
  <title>{{ page.meta['title'] is not empty ? page.meta['title'] : page.title }}</title>
{% endblock %}

{% block content %}
  {{ parent() }}
  {{ dump() }}
{% endblock %}
", "SynapseDemoThemeBundle:Template:page.html.twig", "/var/www/html/src/Synapse/Demo/Bundle/ThemeBundle/Resources/views/Template/page.html.twig");
    }
}
