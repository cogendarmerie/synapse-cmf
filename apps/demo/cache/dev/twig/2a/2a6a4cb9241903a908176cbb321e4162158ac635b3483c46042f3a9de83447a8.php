<?php

/* SynapsePageBundle:Admin/Page:edit.html.twig */
class __TwigTemplate_b66eb56cc22c98f1866a5faca53a4f91c3b766353e7a78f11e291f2e6723d85e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SynapsePageBundle::layout.html.twig", "SynapsePageBundle:Admin/Page:edit.html.twig", 1);
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
        $__internal_b0d6161f729ac470bb9d4d6bd1ccda8b19260ea1fee4f3bad793de7d95b40fe9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0d6161f729ac470bb9d4d6bd1ccda8b19260ea1fee4f3bad793de7d95b40fe9->enter($__internal_b0d6161f729ac470bb9d4d6bd1ccda8b19260ea1fee4f3bad793de7d95b40fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SynapsePageBundle:Admin/Page:edit.html.twig"));

        $__internal_79ec8ac2f8e97eb4e845be9eb00dd680127411b0ead6feccb236edd2a6270832 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79ec8ac2f8e97eb4e845be9eb00dd680127411b0ead6feccb236edd2a6270832->enter($__internal_79ec8ac2f8e97eb4e845be9eb00dd680127411b0ead6feccb236edd2a6270832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SynapsePageBundle:Admin/Page:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "SynapseAdminBundle:Form:synapse_admin_form_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0d6161f729ac470bb9d4d6bd1ccda8b19260ea1fee4f3bad793de7d95b40fe9->leave($__internal_b0d6161f729ac470bb9d4d6bd1ccda8b19260ea1fee4f3bad793de7d95b40fe9_prof);

        
        $__internal_79ec8ac2f8e97eb4e845be9eb00dd680127411b0ead6feccb236edd2a6270832->leave($__internal_79ec8ac2f8e97eb4e845be9eb00dd680127411b0ead6feccb236edd2a6270832_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_292000af2fd816fa7dc56e5074b1eb42c37f7123786d38733ca66e98b6615cb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_292000af2fd816fa7dc56e5074b1eb42c37f7123786d38733ca66e98b6615cb8->enter($__internal_292000af2fd816fa7dc56e5074b1eb42c37f7123786d38733ca66e98b6615cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e74b0e84e30c07ec46ae89feaabf3e95369fd229a012c379de735dbbc16a0f90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e74b0e84e30c07ec46ae89feaabf3e95369fd229a012c379de735dbbc16a0f90->enter($__internal_e74b0e84e30c07ec46ae89feaabf3e95369fd229a012c379de735dbbc16a0f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "  <div class=\"row\">
    <div class=\"col-md-12\">
      <ul class=\"breadcrumb\">
        <li>
          <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("synapse_admin_page_list");
        echo "\">
            <i class=\"fa fa-files-o\"></i>
            Pages
          </a>
        </li>
        <li class=\"active\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? $this->getContext($context, "page")), "name", array()), "html", null, true);
        echo "</li>
        <li class=\"active\">edit</li>
      </ul>
    </div>
  </div>

  ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

  <div class=\"row-fluid\">
    <div class=\"col-fill row\">

      ";
        // line 27
        echo "      <div id=\"form-general\" class=\"panel col-md-6\">
        <header class=\"panel-heading composed bg-main\">
          <a href class=\"combo\">
            <i class=\"fa fa-file-text-o\"></i>
          </a>
          <h3>General</h3>
        </header>
        <div class=\"panel-body\">
          ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'row');
        echo "
          ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "online", array()), 'row');
        echo "
        </div>
      </div>

      ";
        // line 41
        echo "      <div id=\"form-meta\" class=\"panel col-md-6\">
        <header class=\"panel-heading composed bg-main\">
          <a href class=\"combo\">
            <i class=\"fa fa-sitemap\"></i>
          </a>
          <h3>Metadata</h3>
        </header>
        <div class=\"panel-body\">
          ";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "meta", array()), 'row');
        echo "
        </div>
      </div>

      ";
        // line 54
        echo "      <div id=\"form-content\" class=\"synapse-theme-form panel col-md-12\">
        <header class=\"panel-heading composed bg-main\">
          <a href class=\"combo\">
            <i class=\"fa fa-scribd\"></i>
          </a>
          <h3>Content</h3>
        </header>
        ";
        // line 61
        if ($this->getAttribute(($context["form"] ?? null), "synapse", array(), "any", true, true)) {
            // line 62
            echo "          ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "synapse", array()), 'widget');
            echo "
        ";
        } else {
            // line 64
            echo "          <div class=\"panel-body panel-body-info\">
            <p class=\"info\">
              <span class=\"badge label-warning\"><i class=\"fa fa-warning\"></i></span>
              You don't have any active theme, you won't be able to display the page. Create a theme and at least a template to apply one to this content.
            </p>
          </div>
        ";
        }
        // line 71
        echo "      </div>

    </div>
    <div class=\"col-fix\">
      <div class=\"button-bar\" data-spy=\"affix\" data-offset-top=\"55\">
        <a class=\"btn btn-big btn-warning\" href=\"";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("synapse_admin_page_list");
        echo "\">
          <i class=\"fa fa-times\"></i>
          <span>Cancel</span>
        </a>
        ";
        // line 80
        $context["void"] = $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "submit", array()), "setRendered", array(0 => true), "method");
        // line 81
        echo "        <button class=\"btn btn-big btn-success\" type=\"submit\"
          id=\"";
        // line 82
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
  </div>
  ";
        // line 90
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_e74b0e84e30c07ec46ae89feaabf3e95369fd229a012c379de735dbbc16a0f90->leave($__internal_e74b0e84e30c07ec46ae89feaabf3e95369fd229a012c379de735dbbc16a0f90_prof);

        
        $__internal_292000af2fd816fa7dc56e5074b1eb42c37f7123786d38733ca66e98b6615cb8->leave($__internal_292000af2fd816fa7dc56e5074b1eb42c37f7123786d38733ca66e98b6615cb8_prof);

    }

    public function getTemplateName()
    {
        return "SynapsePageBundle:Admin/Page:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 90,  166 => 82,  163 => 81,  161 => 80,  154 => 76,  147 => 71,  138 => 64,  132 => 62,  130 => 61,  121 => 54,  114 => 49,  104 => 41,  97 => 36,  93 => 35,  83 => 27,  75 => 21,  66 => 15,  58 => 10,  52 => 6,  43 => 5,  33 => 1,  31 => 3,  11 => 1,);
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
  <div class=\"row\">
    <div class=\"col-md-12\">
      <ul class=\"breadcrumb\">
        <li>
          <a href=\"{{ path('synapse_admin_page_list') }}\">
            <i class=\"fa fa-files-o\"></i>
            Pages
          </a>
        </li>
        <li class=\"active\">{{ page.name }}</li>
        <li class=\"active\">edit</li>
      </ul>
    </div>
  </div>

  {{ form_start(form) }}

  <div class=\"row-fluid\">
    <div class=\"col-fill row\">

      {# General #}
      <div id=\"form-general\" class=\"panel col-md-6\">
        <header class=\"panel-heading composed bg-main\">
          <a href class=\"combo\">
            <i class=\"fa fa-file-text-o\"></i>
          </a>
          <h3>General</h3>
        </header>
        <div class=\"panel-body\">
          {{ form_row(form.name) }}
          {{ form_row(form.online) }}
        </div>
      </div>

      {# Metas #}
      <div id=\"form-meta\" class=\"panel col-md-6\">
        <header class=\"panel-heading composed bg-main\">
          <a href class=\"combo\">
            <i class=\"fa fa-sitemap\"></i>
          </a>
          <h3>Metadata</h3>
        </header>
        <div class=\"panel-body\">
          {{ form_row(form.meta) }}
        </div>
      </div>

      {# Content #}
      <div id=\"form-content\" class=\"synapse-theme-form panel col-md-12\">
        <header class=\"panel-heading composed bg-main\">
          <a href class=\"combo\">
            <i class=\"fa fa-scribd\"></i>
          </a>
          <h3>Content</h3>
        </header>
        {% if form.synapse is defined %}
          {{ form_widget(form.synapse) }}
        {% else %}
          <div class=\"panel-body panel-body-info\">
            <p class=\"info\">
              <span class=\"badge label-warning\"><i class=\"fa fa-warning\"></i></span>
              You don't have any active theme, you won't be able to display the page. Create a theme and at least a template to apply one to this content.
            </p>
          </div>
        {% endif %}
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
  </div>
  {{ form_end(form) }}
{% endblock %}
", "SynapsePageBundle:Admin/Page:edit.html.twig", "/var/www/html/src/Synapse/Page/Bundle/Resources/views/Admin/Page/edit.html.twig");
    }
}
