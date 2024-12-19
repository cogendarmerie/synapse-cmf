<?php

/* SynapseAdminBundle:Template:create.html.twig */
class __TwigTemplate_d07224cec939294dae947a749e4d24daee2cddf0c878fb2b46b6bfb3361a19e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SynapseAdminBundle::layout.html.twig", "SynapseAdminBundle:Template:create.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SynapseAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f5ed50a470a8c4b4fe66f1912dab68e9c716533a68bb90c8e14d4a726738ff36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5ed50a470a8c4b4fe66f1912dab68e9c716533a68bb90c8e14d4a726738ff36->enter($__internal_f5ed50a470a8c4b4fe66f1912dab68e9c716533a68bb90c8e14d4a726738ff36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SynapseAdminBundle:Template:create.html.twig"));

        $__internal_c1a34ca347d3f06238cbce6c938a7fe9745485808be548d20ff1769f9078951f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1a34ca347d3f06238cbce6c938a7fe9745485808be548d20ff1769f9078951f->enter($__internal_c1a34ca347d3f06238cbce6c938a7fe9745485808be548d20ff1769f9078951f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SynapseAdminBundle:Template:create.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5ed50a470a8c4b4fe66f1912dab68e9c716533a68bb90c8e14d4a726738ff36->leave($__internal_f5ed50a470a8c4b4fe66f1912dab68e9c716533a68bb90c8e14d4a726738ff36_prof);

        
        $__internal_c1a34ca347d3f06238cbce6c938a7fe9745485808be548d20ff1769f9078951f->leave($__internal_c1a34ca347d3f06238cbce6c938a7fe9745485808be548d20ff1769f9078951f_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_87f37e355bcbe6a4588d523659cf3e5ee2bb1f1210b8dc8277a9a7aec8719cff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87f37e355bcbe6a4588d523659cf3e5ee2bb1f1210b8dc8277a9a7aec8719cff->enter($__internal_87f37e355bcbe6a4588d523659cf3e5ee2bb1f1210b8dc8277a9a7aec8719cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_723934adc718482e7169cdc172c6f360d4949814d73454dba60a01966302f66e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_723934adc718482e7169cdc172c6f360d4949814d73454dba60a01966302f66e->enter($__internal_723934adc718482e7169cdc172c6f360d4949814d73454dba60a01966302f66e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
  <div class=\"row-fluid\">
    <div class=\"col-fill\">
      <div class=\"panel\">
        <header class=\"panel-heading composed bg-main\">
          <a href class=\"combo\">
            <i class=\"fa fa-object-group\"></i>
          </a>
          <h3>Init skeleton</h3>
          <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("synapse_admin_page_list");
        echo "\" class=\"combo\">
            <i class=\"fa fa-times\"></i>
            <span>Cancel</span>
          </a>
        </header>
        <div class=\"panel-body\">
          ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "content_type", array()), 'row');
        echo "
          ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "template_type", array()), 'row');
        echo "
        </div>
      </div>
    </div>
    <div class=\"col-fix\">
      <div class=\"button-bar\" data-spy=\"affix\" data-offset-top=\"55\">
        <a class=\"btn btn-big btn-warning\" href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("synapse_admin_skeleton_list");
        echo "\">
          <i class=\"fa fa-times\"></i>
          <span>Cancel</span>
        </a>
        <button type=\"submit\" class=\"btn btn-big btn-success\">
          <i class=\"fa fa-check\"></i>
          Init
        </button>
      </div>
    </div>
  </div>
  ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_723934adc718482e7169cdc172c6f360d4949814d73454dba60a01966302f66e->leave($__internal_723934adc718482e7169cdc172c6f360d4949814d73454dba60a01966302f66e_prof);

        
        $__internal_87f37e355bcbe6a4588d523659cf3e5ee2bb1f1210b8dc8277a9a7aec8719cff->leave($__internal_87f37e355bcbe6a4588d523659cf3e5ee2bb1f1210b8dc8277a9a7aec8719cff_prof);

    }

    public function getTemplateName()
    {
        return "SynapseAdminBundle:Template:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 39,  87 => 28,  78 => 22,  74 => 21,  65 => 15,  52 => 6,  43 => 5,  33 => 1,  31 => 3,  11 => 1,);
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

{% form_theme form 'bootstrap_3_layout.html.twig' %}

{% block content %}
  {{ form_start(form) }}
  <div class=\"row-fluid\">
    <div class=\"col-fill\">
      <div class=\"panel\">
        <header class=\"panel-heading composed bg-main\">
          <a href class=\"combo\">
            <i class=\"fa fa-object-group\"></i>
          </a>
          <h3>Init skeleton</h3>
          <a href=\"{{ path('synapse_admin_page_list') }}\" class=\"combo\">
            <i class=\"fa fa-times\"></i>
            <span>Cancel</span>
          </a>
        </header>
        <div class=\"panel-body\">
          {{ form_row(form.content_type) }}
          {{ form_row(form.template_type) }}
        </div>
      </div>
    </div>
    <div class=\"col-fix\">
      <div class=\"button-bar\" data-spy=\"affix\" data-offset-top=\"55\">
        <a class=\"btn btn-big btn-warning\" href=\"{{ path('synapse_admin_skeleton_list') }}\">
          <i class=\"fa fa-times\"></i>
          <span>Cancel</span>
        </a>
        <button type=\"submit\" class=\"btn btn-big btn-success\">
          <i class=\"fa fa-check\"></i>
          Init
        </button>
      </div>
    </div>
  </div>
  {{ form_end(form) }}
{% endblock %}
", "SynapseAdminBundle:Template:create.html.twig", "/var/www/html/src/Synapse/Admin/Bundle/Resources/views/Template/create.html.twig");
    }
}
