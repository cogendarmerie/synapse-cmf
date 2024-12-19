<?php

/* SynapsePageBundle:Admin/Page:create.html.twig */
class __TwigTemplate_74d8c6de0c2b7acbcd5599df78570feddb4f1d32843a15b91e0c6c9d0747b5e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SynapsePageBundle::layout.html.twig", "SynapsePageBundle:Admin/Page:create.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SynapsePageBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_212aefb7ddcb5c1acd7e151ccf7d038b8de2f1962501be18ab1bd0175a8190b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_212aefb7ddcb5c1acd7e151ccf7d038b8de2f1962501be18ab1bd0175a8190b9->enter($__internal_212aefb7ddcb5c1acd7e151ccf7d038b8de2f1962501be18ab1bd0175a8190b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SynapsePageBundle:Admin/Page:create.html.twig"));

        $__internal_33a56077291927be6df81aaae5483e56f1eed9b8296fbda61ff577ec7353c4c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33a56077291927be6df81aaae5483e56f1eed9b8296fbda61ff577ec7353c4c5->enter($__internal_33a56077291927be6df81aaae5483e56f1eed9b8296fbda61ff577ec7353c4c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SynapsePageBundle:Admin/Page:create.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "SynapseAdminBundle:Form:synapse_admin_form_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_212aefb7ddcb5c1acd7e151ccf7d038b8de2f1962501be18ab1bd0175a8190b9->leave($__internal_212aefb7ddcb5c1acd7e151ccf7d038b8de2f1962501be18ab1bd0175a8190b9_prof);

        
        $__internal_33a56077291927be6df81aaae5483e56f1eed9b8296fbda61ff577ec7353c4c5->leave($__internal_33a56077291927be6df81aaae5483e56f1eed9b8296fbda61ff577ec7353c4c5_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_e40900288f2cf9e0148e7ed18dc75e29339f38086425d8e3229fa415f989d9d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e40900288f2cf9e0148e7ed18dc75e29339f38086425d8e3229fa415f989d9d1->enter($__internal_e40900288f2cf9e0148e7ed18dc75e29339f38086425d8e3229fa415f989d9d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_45de3f9bae27faf90ef8be8d5805c5809400d87439fadd52e334c4e37afec5d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45de3f9bae27faf90ef8be8d5805c5809400d87439fadd52e334c4e37afec5d7->enter($__internal_45de3f9bae27faf90ef8be8d5805c5809400d87439fadd52e334c4e37afec5d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

  <div class=\"row-fluid\">
    <div class=\"col-fill\">
      <div class=\"panel\">
        <header class=\"panel-heading composed bg-main\">
          <a href class=\"combo\">
            <i class=\"fa fa-file-text-o\"></i>
          </a>
          <h3>New page</h3>
        </header>
        <div class=\"panel-body\">
          ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'row');
        echo "
          ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array()), 'row');
        echo "
          ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'row');
        echo "
          ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "path", array()), 'row');
        echo "
        </div>
      </div>
    </div>
    <div class=\"col-fix\">
      <div class=\"button-bar\" data-spy=\"affix\" data-offset-top=\"55\">
        <a class=\"btn btn-big btn-warning\" href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("synapse_admin_page_list");
        echo "\">
          <i class=\"fa fa-times\"></i>
          <span>Cancel</span>
        </a>
        ";
        // line 31
        $context["void"] = $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "submit", array()), "setRendered", array(0 => true), "method");
        // line 32
        echo "        <button class=\"btn btn-big btn-success\" type=\"submit\"
          id=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "submit", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "submit", array()), "vars", array()), "full_name", array()), "html", null, true);
        echo "\"
        >
          <i class=\"fa fa-2x fa-check\"></i>
          Submit
        </button>
      </div>
    </div>
  ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_45de3f9bae27faf90ef8be8d5805c5809400d87439fadd52e334c4e37afec5d7->leave($__internal_45de3f9bae27faf90ef8be8d5805c5809400d87439fadd52e334c4e37afec5d7_prof);

        
        $__internal_e40900288f2cf9e0148e7ed18dc75e29339f38086425d8e3229fa415f989d9d1->leave($__internal_e40900288f2cf9e0148e7ed18dc75e29339f38086425d8e3229fa415f989d9d1_prof);

    }

    public function getTemplateName()
    {
        return "SynapsePageBundle:Admin/Page:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 40,  101 => 33,  98 => 32,  96 => 31,  89 => 27,  80 => 21,  76 => 20,  72 => 19,  68 => 18,  52 => 6,  43 => 5,  33 => 1,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SynapsePageBundle::layout.html.twig' %}

{% form_theme form 'SynapseAdminBundle:Form:synapse_admin_form_layout.html.twig' %}

{% block content %}
  {{ form_start(form) }}

  <div class=\"row-fluid\">
    <div class=\"col-fill\">
      <div class=\"panel\">
        <header class=\"panel-heading composed bg-main\">
          <a href class=\"combo\">
            <i class=\"fa fa-file-text-o\"></i>
          </a>
          <h3>New page</h3>
        </header>
        <div class=\"panel-body\">
          {{ form_row(form.name) }}
          {{ form_row(form.parent) }}
          {{ form_row(form.title) }}
          {{ form_row(form.path) }}
        </div>
      </div>
    </div>
    <div class=\"col-fix\">
      <div class=\"button-bar\" data-spy=\"affix\" data-offset-top=\"55\">
        <a class=\"btn btn-big btn-warning\" href=\"{{ path('synapse_admin_page_list') }}\">
          <i class=\"fa fa-times\"></i>
          <span>Cancel</span>
        </a>
        {% set void = form.submit.setRendered(true) %}
        <button class=\"btn btn-big btn-success\" type=\"submit\"
          id=\"{{ form.submit.vars.id }}\" name=\"{{ form.submit.vars.full_name }}\"
        >
          <i class=\"fa fa-2x fa-check\"></i>
          Submit
        </button>
      </div>
    </div>
  {{ form_end(form) }}
{% endblock %}
", "SynapsePageBundle:Admin/Page:create.html.twig", "/var/www/html/src/Synapse/Page/Bundle/Resources/views/Admin/Page/create.html.twig");
    }
}
