<?php

/* SynapsePageBundle:Admin/PageMenu:page_menu.html.twig */
class __TwigTemplate_f38fda90ab0fc220831497dc97340271375051f505fb0f9b2e38f9cb9def4420 extends Twig_Template
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
        $__internal_60726ea6c9fc2ef13f28835bb6ff3e05e2a7211434b74cbf55706afeed6d08fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60726ea6c9fc2ef13f28835bb6ff3e05e2a7211434b74cbf55706afeed6d08fd->enter($__internal_60726ea6c9fc2ef13f28835bb6ff3e05e2a7211434b74cbf55706afeed6d08fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SynapsePageBundle:Admin/PageMenu:page_menu.html.twig"));

        $__internal_8c94c0047acc16233b8a68c0ca4a38e89324314c1ed0193881840548fc0ecbe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c94c0047acc16233b8a68c0ca4a38e89324314c1ed0193881840548fc0ecbe2->enter($__internal_8c94c0047acc16233b8a68c0ca4a38e89324314c1ed0193881840548fc0ecbe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SynapsePageBundle:Admin/PageMenu:page_menu.html.twig"));

        // line 1
        echo "<div class=\"navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
  <ul class=\"nav navbar-nav\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["page_menu"] ?? $this->getContext($context, "page_menu")));
        foreach ($context['_seq'] as $context["label"] => $context["link"]) {
            // line 4
            echo "      <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "label", array()), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "  </ul>
</div>
";
        
        $__internal_60726ea6c9fc2ef13f28835bb6ff3e05e2a7211434b74cbf55706afeed6d08fd->leave($__internal_60726ea6c9fc2ef13f28835bb6ff3e05e2a7211434b74cbf55706afeed6d08fd_prof);

        
        $__internal_8c94c0047acc16233b8a68c0ca4a38e89324314c1ed0193881840548fc0ecbe2->leave($__internal_8c94c0047acc16233b8a68c0ca4a38e89324314c1ed0193881840548fc0ecbe2_prof);

    }

    public function getTemplateName()
    {
        return "SynapsePageBundle:Admin/PageMenu:page_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  33 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
  <ul class=\"nav navbar-nav\">
    {% for label, link in page_menu %}
      <li><a href=\"{{ link.url }}\">{{ link.label }}</a></li>
    {% endfor %}
  </ul>
</div>
", "SynapsePageBundle:Admin/PageMenu:page_menu.html.twig", "/var/www/html/src/Synapse/Page/Bundle/Resources/views/Admin/PageMenu/page_menu.html.twig");
    }
}
