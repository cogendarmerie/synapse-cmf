<?php

/* SynapseAdminBundle:Template:edit.html.twig */
class __TwigTemplate_991c079dc891c2cb86f4f812af7dc43befb39c0259f2c9bfaf35f05491b47b71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SynapseAdminBundle::layout.html.twig", "SynapseAdminBundle:Template:edit.html.twig", 1);
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
        $__internal_a02b232fde94df57ce95c7fd11be7673c23513d51ea12ffbe8eb721b8f4d42f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a02b232fde94df57ce95c7fd11be7673c23513d51ea12ffbe8eb721b8f4d42f1->enter($__internal_a02b232fde94df57ce95c7fd11be7673c23513d51ea12ffbe8eb721b8f4d42f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SynapseAdminBundle:Template:edit.html.twig"));

        $__internal_d2652dd947254d0acc0e0c4e153a4a0308b71cd4b4cb62a7547387f528707631 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2652dd947254d0acc0e0c4e153a4a0308b71cd4b4cb62a7547387f528707631->enter($__internal_d2652dd947254d0acc0e0c4e153a4a0308b71cd4b4cb62a7547387f528707631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SynapseAdminBundle:Template:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "SynapseAdminBundle:Form:synapse_admin_form_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a02b232fde94df57ce95c7fd11be7673c23513d51ea12ffbe8eb721b8f4d42f1->leave($__internal_a02b232fde94df57ce95c7fd11be7673c23513d51ea12ffbe8eb721b8f4d42f1_prof);

        
        $__internal_d2652dd947254d0acc0e0c4e153a4a0308b71cd4b4cb62a7547387f528707631->leave($__internal_d2652dd947254d0acc0e0c4e153a4a0308b71cd4b4cb62a7547387f528707631_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_f95a858306680b72f103986529885b065382db2720065f916a3f9ecd4e7c54ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f95a858306680b72f103986529885b065382db2720065f916a3f9ecd4e7c54ac->enter($__internal_f95a858306680b72f103986529885b065382db2720065f916a3f9ecd4e7c54ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_8fa7c89fd537bb386842fd1553ab4518a8182af69a290a587dd9888ed2fe4ebe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fa7c89fd537bb386842fd1553ab4518a8182af69a290a587dd9888ed2fe4ebe->enter($__internal_8fa7c89fd537bb386842fd1553ab4518a8182af69a290a587dd9888ed2fe4ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "  <div class=\"row\">
    <div class=\"col-md-12\">
      <ul class=\"breadcrumb\">
        <li>
          <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("synapse_admin_template_list");
        echo "\">
            <i class=\"fa fa-object-group\"></i>
            Templates
          </a>
        </li>
        <li class=\"active\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize($this->getAttribute($this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "templateType", array()), "name", array())), "html", null, true);
        echo "</li>
        <li class=\"active\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize($this->getAttribute($this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "contentType", array()), "name", array())), "html", null, true);
        echo "</li>
        <li class=\"active\">edit</li>
      </ul>
    </div>
  </div>

  ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
  <div class=\"row-fluid synapse-theme-form synapse-template-form\">
    <div class=\"col-fill\">
      <div class=\"panel\">
        <header class=\"panel-heading composed bg-main\">
          <a href class=\"combo\">
            <i class=\"fa fa-object-group\"></i>
          </a>
          <h3>Edit template <b>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize($this->getAttribute($this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "templateType", array()), "name", array())), "html", null, true);
        echo "</b> for <b>";
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize($this->getAttribute($this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "contentType", array()), "name", array())), "html", null, true);
        echo "</b> content type</h3>
        </header>
        <div class=\"panel-body\">
          ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
      </div>
    </div>
    <div class=\"col-fix\">
      <div class=\"button-bar\" data-spy=\"affix\" data-offset-top=\"55\">
        <a class=\"btn btn-big btn-warning\" href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("synapse_admin_template_list");
        echo "\">
          <i class=\"fa fa-times\"></i>
          <span>Cancel</span>
        </a>
        <button class=\"btn btn-big btn-primary\" type=\"submit\">
          <i class=\"fa fa-2x fa-check\"></i>
          Submit
        </button>
      </div>
    </div>
  </div>
  ";
        // line 50
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_8fa7c89fd537bb386842fd1553ab4518a8182af69a290a587dd9888ed2fe4ebe->leave($__internal_8fa7c89fd537bb386842fd1553ab4518a8182af69a290a587dd9888ed2fe4ebe_prof);

        
        $__internal_f95a858306680b72f103986529885b065382db2720065f916a3f9ecd4e7c54ac->leave($__internal_f95a858306680b72f103986529885b065382db2720065f916a3f9ecd4e7c54ac_prof);

    }

    public function getTemplateName()
    {
        return "SynapseAdminBundle:Template:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 50,  107 => 39,  98 => 33,  90 => 30,  79 => 22,  70 => 16,  66 => 15,  58 => 10,  52 => 6,  43 => 5,  33 => 1,  31 => 3,  11 => 1,);
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

{% form_theme form 'SynapseAdminBundle:Form:synapse_admin_form_layout.html.twig' %}

{% block content %}
  <div class=\"row\">
    <div class=\"col-md-12\">
      <ul class=\"breadcrumb\">
        <li>
          <a href=\"{{ path('synapse_admin_template_list') }}\">
            <i class=\"fa fa-object-group\"></i>
            Templates
          </a>
        </li>
        <li class=\"active\">{{ template.templateType.name | humanize }}</li>
        <li class=\"active\">{{ template.contentType.name | humanize }}</li>
        <li class=\"active\">edit</li>
      </ul>
    </div>
  </div>

  {{ form_start(form) }}
  <div class=\"row-fluid synapse-theme-form synapse-template-form\">
    <div class=\"col-fill\">
      <div class=\"panel\">
        <header class=\"panel-heading composed bg-main\">
          <a href class=\"combo\">
            <i class=\"fa fa-object-group\"></i>
          </a>
          <h3>Edit template <b>{{ template.templateType.name | humanize }}</b> for <b>{{ template.contentType.name | humanize }}</b> content type</h3>
        </header>
        <div class=\"panel-body\">
          {{ form_widget(form) }}
        </div>
      </div>
    </div>
    <div class=\"col-fix\">
      <div class=\"button-bar\" data-spy=\"affix\" data-offset-top=\"55\">
        <a class=\"btn btn-big btn-warning\" href=\"{{ path('synapse_admin_template_list') }}\">
          <i class=\"fa fa-times\"></i>
          <span>Cancel</span>
        </a>
        <button class=\"btn btn-big btn-primary\" type=\"submit\">
          <i class=\"fa fa-2x fa-check\"></i>
          Submit
        </button>
      </div>
    </div>
  </div>
  {{ form_end(form) }}
{% endblock %}
", "SynapseAdminBundle:Template:edit.html.twig", "/var/www/html/src/Synapse/Admin/Bundle/Resources/views/Template/edit.html.twig");
    }
}
