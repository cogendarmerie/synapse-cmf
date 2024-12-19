<?php

/* SynapseCmfBundle:Component:menu.html.twig */
class __TwigTemplate_653fc44030d8b9ced25dc66ebc54758d135a87a1ef1d85164467406d113c2ae2 extends Twig_Template
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
        $__internal_2c263fc330b111bed41a9e7519a4ed343104f3f1896db32c7e28ea33ffa65673 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c263fc330b111bed41a9e7519a4ed343104f3f1896db32c7e28ea33ffa65673->enter($__internal_2c263fc330b111bed41a9e7519a4ed343104f3f1896db32c7e28ea33ffa65673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SynapseCmfBundle:Component:menu.html.twig"));

        $__internal_79ee4a6f6ba90b7454b8a4b97798f1dde1bed9da24f82f27f1b2965476bcbc25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79ee4a6f6ba90b7454b8a4b97798f1dde1bed9da24f82f27f1b2965476bcbc25->enter($__internal_79ee4a6f6ba90b7454b8a4b97798f1dde1bed9da24f82f27f1b2965476bcbc25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SynapseCmfBundle:Component:menu.html.twig"));

        // line 1
        echo "<div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
  <ul class=\"nav navbar-nav\">
  ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menu"] ?? $this->getContext($context, "menu")));
        foreach ($context['_seq'] as $context["label"] => $context["link"]) {
            // line 4
            echo "    ";
            if (twig_test_empty($this->getAttribute($context["link"], "children", array()))) {
                // line 5
                echo "      <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "</a></li>
    ";
            } else {
                // line 7
                echo "      <li class=\"dropdown\">
        <a href=\"";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "url", array()), "html", null, true);
                echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
          ";
                // line 9
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo " <span class=\"caret\"></span>
        </a>
        <ul class=\"dropdown-menu\">
        ";
                // line 12
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["link"], "children", array()));
                foreach ($context['_seq'] as $context["label"] => $context["child"]) {
                    // line 13
                    echo "          <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "url", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                    echo "</a></li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['label'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 15
                echo "        </ul>
      </li>
    ";
            }
            // line 18
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "  </ul>
</div>
";
        
        $__internal_2c263fc330b111bed41a9e7519a4ed343104f3f1896db32c7e28ea33ffa65673->leave($__internal_2c263fc330b111bed41a9e7519a4ed343104f3f1896db32c7e28ea33ffa65673_prof);

        
        $__internal_79ee4a6f6ba90b7454b8a4b97798f1dde1bed9da24f82f27f1b2965476bcbc25->leave($__internal_79ee4a6f6ba90b7454b8a4b97798f1dde1bed9da24f82f27f1b2965476bcbc25_prof);

    }

    public function getTemplateName()
    {
        return "SynapseCmfBundle:Component:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 19,  77 => 18,  72 => 15,  61 => 13,  57 => 12,  51 => 9,  47 => 8,  44 => 7,  36 => 5,  33 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
  <ul class=\"nav navbar-nav\">
  {% for label, link in menu %}
    {% if link.children is empty %}
      <li><a href=\"{{ link.url }}\">{{ label }}</a></li>
    {% else %}
      <li class=\"dropdown\">
        <a href=\"{{ link.url }}\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
          {{ label }} <span class=\"caret\"></span>
        </a>
        <ul class=\"dropdown-menu\">
        {% for label, child in link.children %}
          <li><a href=\"{{ child.url }}\">{{ label }}</a></li>
        {% endfor %}
        </ul>
      </li>
    {% endif %}
  {% endfor %}
  </ul>
</div>
", "SynapseCmfBundle:Component:menu.html.twig", "/var/www/html/src/Synapse/Cmf/Bundle/Resources/views/Component/menu.html.twig");
    }
}
