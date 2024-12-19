<?php

/* SynapsePageBundle:Form:synapse_admin_form_layout.html.twig */
class __TwigTemplate_11a7b50eb4ccebb4c5a871a3edbf40a869f97b36311d363968bd43b79705312a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SynapseAdminBundle:Form:synapse_admin_form_layout.html.twig", "SynapsePageBundle:Form:synapse_admin_form_layout.html.twig", 1);
        $this->blocks = array(
            'page_menu_row' => array($this, 'block_page_menu_row'),
            'page_menu_item_row' => array($this, 'block_page_menu_item_row'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SynapseAdminBundle:Form:synapse_admin_form_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bfdf1d969fdef20b3da5150035e7aad6b9f2c792dd0eacd5108d80dbd4cb70cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfdf1d969fdef20b3da5150035e7aad6b9f2c792dd0eacd5108d80dbd4cb70cb->enter($__internal_bfdf1d969fdef20b3da5150035e7aad6b9f2c792dd0eacd5108d80dbd4cb70cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SynapsePageBundle:Form:synapse_admin_form_layout.html.twig"));

        $__internal_5c200b80c9ab314475decc7292eec261f2fee12c26479d17162bbb7ee5a1b26b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c200b80c9ab314475decc7292eec261f2fee12c26479d17162bbb7ee5a1b26b->enter($__internal_5c200b80c9ab314475decc7292eec261f2fee12c26479d17162bbb7ee5a1b26b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SynapsePageBundle:Form:synapse_admin_form_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfdf1d969fdef20b3da5150035e7aad6b9f2c792dd0eacd5108d80dbd4cb70cb->leave($__internal_bfdf1d969fdef20b3da5150035e7aad6b9f2c792dd0eacd5108d80dbd4cb70cb_prof);

        
        $__internal_5c200b80c9ab314475decc7292eec261f2fee12c26479d17162bbb7ee5a1b26b->leave($__internal_5c200b80c9ab314475decc7292eec261f2fee12c26479d17162bbb7ee5a1b26b_prof);

    }

    // line 3
    public function block_page_menu_row($context, array $blocks = array())
    {
        $__internal_4271dbe54f15a4ab7d07cfbe58b174e9d1162cc8ce7afd80ebdb1a748148d925 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4271dbe54f15a4ab7d07cfbe58b174e9d1162cc8ce7afd80ebdb1a748148d925->enter($__internal_4271dbe54f15a4ab7d07cfbe58b174e9d1162cc8ce7afd80ebdb1a748148d925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_menu_row"));

        $__internal_e167e10c8367e8c5920be9a8864b48376213a23f13e344907a921a6acdd29cba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e167e10c8367e8c5920be9a8864b48376213a23f13e344907a921a6acdd29cba->enter($__internal_e167e10c8367e8c5920be9a8864b48376213a23f13e344907a921a6acdd29cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_menu_row"));

        // line 4
        echo "  <div class=\"synapse-page-menu\">
    ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "data", array()), 'row');
        echo "
    <a href=\"\" class=\"btn btn-default add-page-menu\"><i class=\"fa fa-plus\"></i></a>
  </div>
";
        
        $__internal_e167e10c8367e8c5920be9a8864b48376213a23f13e344907a921a6acdd29cba->leave($__internal_e167e10c8367e8c5920be9a8864b48376213a23f13e344907a921a6acdd29cba_prof);

        
        $__internal_4271dbe54f15a4ab7d07cfbe58b174e9d1162cc8ce7afd80ebdb1a748148d925->leave($__internal_4271dbe54f15a4ab7d07cfbe58b174e9d1162cc8ce7afd80ebdb1a748148d925_prof);

    }

    // line 10
    public function block_page_menu_item_row($context, array $blocks = array())
    {
        $__internal_3323b8008f9832fdbd00bd6a55aa0e71f985c46302fa6cbfa844e85f9497be03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3323b8008f9832fdbd00bd6a55aa0e71f985c46302fa6cbfa844e85f9497be03->enter($__internal_3323b8008f9832fdbd00bd6a55aa0e71f985c46302fa6cbfa844e85f9497be03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_menu_item_row"));

        $__internal_a5e17eb5e0643adb0d2059e2109a16eaf60242747322b0704eb0cc99ac61d321 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5e17eb5e0643adb0d2059e2109a16eaf60242747322b0704eb0cc99ac61d321->enter($__internal_a5e17eb5e0643adb0d2059e2109a16eaf60242747322b0704eb0cc99ac61d321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_menu_item_row"));

        // line 11
        echo "  <div class=\"row page-menu-item\" id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "\">
    <div class=\"col-md-3\">";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "label", array()), 'widget');
        echo "</div>
    <div class=\"col-md-8\">";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "page", array()), 'widget');
        echo "</div>
    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "position", array()), 'widget');
        echo "
    <div class=\"col-md-1\">
      <a href=\"\" role=\"delete\" class=\"btn btn-default\">
        <i class=\"fa fa-times\"></i>
      </a>
    </div>
  </div>
";
        
        $__internal_a5e17eb5e0643adb0d2059e2109a16eaf60242747322b0704eb0cc99ac61d321->leave($__internal_a5e17eb5e0643adb0d2059e2109a16eaf60242747322b0704eb0cc99ac61d321_prof);

        
        $__internal_3323b8008f9832fdbd00bd6a55aa0e71f985c46302fa6cbfa844e85f9497be03->leave($__internal_3323b8008f9832fdbd00bd6a55aa0e71f985c46302fa6cbfa844e85f9497be03_prof);

    }

    public function getTemplateName()
    {
        return "SynapsePageBundle:Form:synapse_admin_form_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 14,  85 => 13,  81 => 12,  76 => 11,  67 => 10,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SynapseAdminBundle:Form:synapse_admin_form_layout.html.twig' %}

{% block page_menu_row %}
  <div class=\"synapse-page-menu\">
    {{ form_row(form.data) }}
    <a href=\"\" class=\"btn btn-default add-page-menu\"><i class=\"fa fa-plus\"></i></a>
  </div>
{% endblock %}

{% block page_menu_item_row %}
  <div class=\"row page-menu-item\" id=\"{{ form.vars.id }}\">
    <div class=\"col-md-3\">{{ form_widget(form.label) }}</div>
    <div class=\"col-md-8\">{{ form_widget(form.page) }}</div>
    {{ form_widget(form.position) }}
    <div class=\"col-md-1\">
      <a href=\"\" role=\"delete\" class=\"btn btn-default\">
        <i class=\"fa fa-times\"></i>
      </a>
    </div>
  </div>
{% endblock %}

", "SynapsePageBundle:Form:synapse_admin_form_layout.html.twig", "/var/www/html/src/Synapse/Page/Bundle/Resources/views/Form/synapse_admin_form_layout.html.twig");
    }
}
