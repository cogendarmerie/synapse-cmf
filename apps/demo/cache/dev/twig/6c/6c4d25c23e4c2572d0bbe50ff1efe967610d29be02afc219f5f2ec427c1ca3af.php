<?php

/* SynapseAdminBundle:Template:list.html.twig */
class __TwigTemplate_cfda40611af63f832017ce043f3393fbca73ae18c18a8ef0c3023f0055577d9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SynapseAdminBundle::layout.html.twig", "SynapseAdminBundle:Template:list.html.twig", 1);
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
        $__internal_cb4a0301b7d6d4313a9f225ade00ed3c6a9f7b0f0d5e9bba654eff36548f22c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb4a0301b7d6d4313a9f225ade00ed3c6a9f7b0f0d5e9bba654eff36548f22c5->enter($__internal_cb4a0301b7d6d4313a9f225ade00ed3c6a9f7b0f0d5e9bba654eff36548f22c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SynapseAdminBundle:Template:list.html.twig"));

        $__internal_8e3db3e5add4ab3b9064a806f3683473e9dd0ec8aed97574a589b44e96b3ef71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e3db3e5add4ab3b9064a806f3683473e9dd0ec8aed97574a589b44e96b3ef71->enter($__internal_8e3db3e5add4ab3b9064a806f3683473e9dd0ec8aed97574a589b44e96b3ef71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SynapseAdminBundle:Template:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb4a0301b7d6d4313a9f225ade00ed3c6a9f7b0f0d5e9bba654eff36548f22c5->leave($__internal_cb4a0301b7d6d4313a9f225ade00ed3c6a9f7b0f0d5e9bba654eff36548f22c5_prof);

        
        $__internal_8e3db3e5add4ab3b9064a806f3683473e9dd0ec8aed97574a589b44e96b3ef71->leave($__internal_8e3db3e5add4ab3b9064a806f3683473e9dd0ec8aed97574a589b44e96b3ef71_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_2edb796811481423a67f6d85ac387a8cff9ed5ab31bc1043a096189a9df4a80e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2edb796811481423a67f6d85ac387a8cff9ed5ab31bc1043a096189a9df4a80e->enter($__internal_2edb796811481423a67f6d85ac387a8cff9ed5ab31bc1043a096189a9df4a80e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_17974b2cbb69bef52019ffdcfab2cd0500b991f93770906a585a1d85c3389d70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17974b2cbb69bef52019ffdcfab2cd0500b991f93770906a585a1d85c3389d70->enter($__internal_17974b2cbb69bef52019ffdcfab2cd0500b991f93770906a585a1d85c3389d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<div class=\"row\">
  <div class=\"col-md-12\">
    <div class=\"panel\">
      <header class=\"panel-heading composed bg-main\">
        <a href class=\"combo\">
          <i class=\"fa fa-object-group\"></i>
        </a>
        <h3>Templates</h3>
      </header>
      <div class=\"panel-body panel-body-info\">
        <p class=\"info\">
          <span class=\"badge label-info\"><i class=\"fa fa-info\"></i></span>
          This templates are default ones, used when no template is defined for a content. They are the way to define content type global components.
        </p>
      </div>
      <table class=\"table table-advance table-hover\">
        <thead>
          <tr>
            <th>Content type</th>
            <th>Template type</th>
            <th>Active</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["content_types"] ?? $this->getContext($context, "content_types")));
        foreach ($context['_seq'] as $context["_key"] => $context["contentType"]) {
            // line 30
            echo "          <tr>
            <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize($this->getAttribute($context["contentType"], "name", array())), "html", null, true);
            echo "</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["theme"] ?? $this->getContext($context, "theme")), "templateTypes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["templateType"]) {
                // line 37
                echo "          <tr>
            <td>|--</td>
            <td>";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize($this->getAttribute($context["templateType"], "name", array())), "html", null, true);
                echo "</td>
            <td>
            ";
                // line 41
                if ($this->getAttribute($this->getAttribute(($context["templates"] ?? null), $this->getAttribute($context["templateType"], "name", array()), array(), "array", false, true), $this->getAttribute($context["contentType"], "name", array()), array(), "array", true, true)) {
                    // line 42
                    echo "              <span class=\"badge label-success\">
                <i class=\"fa fa-check\"></i>
              </span>
            ";
                } else {
                    // line 46
                    echo "              <span class=\"badge label-danger\">
                <i class=\"fa fa-times\"></i>
              </span>
            ";
                }
                // line 50
                echo "            </td>
            <td class=\"text-right\">
            ";
                // line 52
                if ($this->getAttribute($this->getAttribute(($context["templates"] ?? null), $this->getAttribute($context["templateType"], "name", array()), array(), "array", false, true), $this->getAttribute($context["contentType"], "name", array()), array(), "array", true, true)) {
                    // line 53
                    echo "              <a class=\"btn btn-success btn-sm\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("synapse_admin_template_edition", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["templates"] ?? $this->getContext($context, "templates")), $this->getAttribute($context["templateType"], "name", array()), array(), "array"), $this->getAttribute($context["contentType"], "name", array()), array(), "array"), "id", array()))), "html", null, true);
                    echo "\">
                <i class=\"fa fa-edit\"></i>
              </a>
            ";
                } else {
                    // line 57
                    echo "              <a class=\"btn btn-primary btn-sm\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("synapse_admin_template_init", array("templateType" => $this->getAttribute($context["templateType"], "id", array()), "contentType" => $this->getAttribute($context["contentType"], "id", array()))), "html", null, true);
                    echo "\">
                <i class=\"fa fa-plus\"></i>
              </a>
            ";
                }
                // line 61
                echo "            </td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['templateType'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contentType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "        </tbody>
      </table>
    </div>
  </div>
</div>
";
        
        $__internal_17974b2cbb69bef52019ffdcfab2cd0500b991f93770906a585a1d85c3389d70->leave($__internal_17974b2cbb69bef52019ffdcfab2cd0500b991f93770906a585a1d85c3389d70_prof);

        
        $__internal_2edb796811481423a67f6d85ac387a8cff9ed5ab31bc1043a096189a9df4a80e->leave($__internal_2edb796811481423a67f6d85ac387a8cff9ed5ab31bc1043a096189a9df4a80e_prof);

    }

    public function getTemplateName()
    {
        return "SynapseAdminBundle:Template:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 65,  148 => 64,  140 => 61,  132 => 57,  124 => 53,  122 => 52,  118 => 50,  112 => 46,  106 => 42,  104 => 41,  99 => 39,  95 => 37,  91 => 36,  83 => 31,  80 => 30,  76 => 29,  49 => 4,  40 => 3,  11 => 1,);
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

{% block content %}
<div class=\"row\">
  <div class=\"col-md-12\">
    <div class=\"panel\">
      <header class=\"panel-heading composed bg-main\">
        <a href class=\"combo\">
          <i class=\"fa fa-object-group\"></i>
        </a>
        <h3>Templates</h3>
      </header>
      <div class=\"panel-body panel-body-info\">
        <p class=\"info\">
          <span class=\"badge label-info\"><i class=\"fa fa-info\"></i></span>
          This templates are default ones, used when no template is defined for a content. They are the way to define content type global components.
        </p>
      </div>
      <table class=\"table table-advance table-hover\">
        <thead>
          <tr>
            <th>Content type</th>
            <th>Template type</th>
            <th>Active</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
        {% for contentType in content_types %}
          <tr>
            <td>{{ contentType.name | humanize }}</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          {% for templateType in theme.templateTypes %}
          <tr>
            <td>|--</td>
            <td>{{ templateType.name | humanize }}</td>
            <td>
            {% if templates[templateType.name][contentType.name] is defined %}
              <span class=\"badge label-success\">
                <i class=\"fa fa-check\"></i>
              </span>
            {% else %}
              <span class=\"badge label-danger\">
                <i class=\"fa fa-times\"></i>
              </span>
            {% endif %}
            </td>
            <td class=\"text-right\">
            {% if templates[templateType.name][contentType.name] is defined %}
              <a class=\"btn btn-success btn-sm\" href=\"{{ path('synapse_admin_template_edition', { id: templates[templateType.name][contentType.name].id }) }}\">
                <i class=\"fa fa-edit\"></i>
              </a>
            {% else %}
              <a class=\"btn btn-primary btn-sm\" href=\"{{ path('synapse_admin_template_init', { templateType: templateType.id, contentType: contentType.id }) }}\">
                <i class=\"fa fa-plus\"></i>
              </a>
            {% endif %}
            </td>
          </tr>
          {% endfor %}
        {% endfor %}
        </tbody>
      </table>
    </div>
  </div>
</div>
{% endblock %}
", "SynapseAdminBundle:Template:list.html.twig", "/var/www/html/src/Synapse/Admin/Bundle/Resources/views/Template/list.html.twig");
    }
}
