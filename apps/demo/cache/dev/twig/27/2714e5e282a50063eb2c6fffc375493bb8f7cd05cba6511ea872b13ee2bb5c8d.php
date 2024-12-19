<?php

/* SynapsePageBundle::base.html.twig */
class __TwigTemplate_299cdfea1de9514deec7796b44614b54701a5baf02de2b870274ec29d189fc02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SynapseAdminBundle::base.html.twig", "SynapsePageBundle::base.html.twig", 1);
        $this->blocks = array(
            'menu_elements' => array($this, 'block_menu_elements'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SynapseAdminBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c97761dd04e2dc7e2e57fb654750182112c7c16d30e35ab5d73dd4deb52802a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c97761dd04e2dc7e2e57fb654750182112c7c16d30e35ab5d73dd4deb52802a7->enter($__internal_c97761dd04e2dc7e2e57fb654750182112c7c16d30e35ab5d73dd4deb52802a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SynapsePageBundle::base.html.twig"));

        $__internal_0683966c6659a7e374d9b92ae24412106987573a6ccebc2efc97788407e5dc7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0683966c6659a7e374d9b92ae24412106987573a6ccebc2efc97788407e5dc7a->enter($__internal_0683966c6659a7e374d9b92ae24412106987573a6ccebc2efc97788407e5dc7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SynapsePageBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c97761dd04e2dc7e2e57fb654750182112c7c16d30e35ab5d73dd4deb52802a7->leave($__internal_c97761dd04e2dc7e2e57fb654750182112c7c16d30e35ab5d73dd4deb52802a7_prof);

        
        $__internal_0683966c6659a7e374d9b92ae24412106987573a6ccebc2efc97788407e5dc7a->leave($__internal_0683966c6659a7e374d9b92ae24412106987573a6ccebc2efc97788407e5dc7a_prof);

    }

    // line 3
    public function block_menu_elements($context, array $blocks = array())
    {
        $__internal_554db7b5beff6456f930a42129dde6fba8fa0570bff742514c36e69a835b8f13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_554db7b5beff6456f930a42129dde6fba8fa0570bff742514c36e69a835b8f13->enter($__internal_554db7b5beff6456f930a42129dde6fba8fa0570bff742514c36e69a835b8f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_elements"));

        $__internal_49b87f8ca4296c4c81fb514bc90d04280e8e492de8f809c8ec5cb38082429c8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49b87f8ca4296c4c81fb514bc90d04280e8e492de8f809c8ec5cb38082429c8c->enter($__internal_49b87f8ca4296c4c81fb514bc90d04280e8e492de8f809c8ec5cb38082429c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_elements"));

        // line 4
        echo "  <li class=\"menu-item\">
    <a class=\"menu-link\" href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("synapse_admin_page_list");
        echo "\">
      <i class=\"icon fa fa-files-o\"></i>
      <span class=\"menu-label\">Pages</span>
    </a>
  </li>
  ";
        // line 10
        $this->displayParentBlock("menu_elements", $context, $blocks);
        echo "
";
        
        $__internal_49b87f8ca4296c4c81fb514bc90d04280e8e492de8f809c8ec5cb38082429c8c->leave($__internal_49b87f8ca4296c4c81fb514bc90d04280e8e492de8f809c8ec5cb38082429c8c_prof);

        
        $__internal_554db7b5beff6456f930a42129dde6fba8fa0570bff742514c36e69a835b8f13->leave($__internal_554db7b5beff6456f930a42129dde6fba8fa0570bff742514c36e69a835b8f13_prof);

    }

    public function getTemplateName()
    {
        return "SynapsePageBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 10,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SynapseAdminBundle::base.html.twig' %}

{% block menu_elements %}
  <li class=\"menu-item\">
    <a class=\"menu-link\" href=\"{{ path('synapse_admin_page_list') }}\">
      <i class=\"icon fa fa-files-o\"></i>
      <span class=\"menu-label\">Pages</span>
    </a>
  </li>
  {{ parent() }}
{% endblock %}
", "SynapsePageBundle::base.html.twig", "/var/www/html/src/Synapse/Page/Bundle/Resources/views/base.html.twig");
    }
}
