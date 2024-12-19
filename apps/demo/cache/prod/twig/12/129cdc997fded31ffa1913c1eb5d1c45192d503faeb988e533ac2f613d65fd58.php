<?php

/* SynapseAdminBundle:Form:synapse_admin_form_layout.html.twig */
class __TwigTemplate_a5eb4180fdbd77530edb36b522733d32c1d328f9b243942d7dad3543c929d752 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("bootstrap_3_layout.html.twig", "SynapseAdminBundle:Form:synapse_admin_form_layout.html.twig", 1);
        $this->blocks = array(
            'theme_widget' => array($this, 'block_theme_widget'),
            'template_widget' => array($this, 'block_template_widget'),
            'zone_widget' => array($this, 'block_zone_widget'),
            'component_widget' => array($this, 'block_component_widget'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "bootstrap_3_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_theme_widget($context, array $blocks = array())
    {
        // line 4
        echo "  <div class=\"panel-body\">
    <div class=\"row tab-content\">
      <div class=\"form-group col-md-5\">
        <label class=\"control-label required\">Template to edit</label>
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "template_types", array()), 'widget', array("attr" => array("class" => "template-select")));
        echo "
      </div>
    </div>
  </div>
  <div class=\"panel-body tab-content\">
  ";
        // line 14
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "templates", array()));
        foreach ($context['_seq'] as $context["templateName"] => $context["templateForm"]) {
            // line 15
            echo "    <div class=\"template-";
            echo twig_escape_filter($this->env, $context["templateName"], "html", null, true);
            echo " tab-pane template-pane\" role=\"tabpanel\">
      ";
            // line 16
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["templateForm"], 'widget');
            echo "
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['templateName'], $context['templateForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "  ";
        // line 20
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["templates_init_map"] ?? null));
        foreach ($context['_seq'] as $context["template_type_name"] => $context["template_data"]) {
            // line 21
            echo "    <div class=\"row template-";
            echo twig_escape_filter($this->env, $context["template_type_name"], "html", null, true);
            echo " tab-pane template-pane\" role=\"tabpanel\">
      <div class=\"pull-right template-init-button\">
        <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("synapse_admin_template_init", array("templateType" => $this->getAttribute($context["template_data"], "template_type_id", array()), "contentType" => $this->getAttribute($context["template_data"], "content_type", array()), "contentId" => $this->getAttribute($context["template_data"], "content_id", array()))), "html", null, true);
            echo "\"
          class=\"btn btn-primary\"
        >
          <i class=\"fa fa-plus\"></i>
          Create
        </a>
      </div>
      <div class=\"col-md-5 col-md-offset-5 template-init-message\">
        <p class=\"info\">
          <span class=\"badge label-info\"><i class=\"fa fa-info\"></i></span>
          There is no \"";
            // line 33
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize($context["template_type_name"])), "html", null, true);
            echo "\" template for this \"";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize($this->getAttribute($context["template_data"], "content_type", array()))), "html", null, true);
            echo "\" content only, it uses global skeleton for now. Want you to create a dedicated template for this content ?<br>
        </p>
      </div>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['template_type_name'], $context['template_data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "  </div>
";
    }

    // line 41
    public function block_template_widget($context, array $blocks = array())
    {
        // line 42
        echo "  <div class=\"row zone-selector-container\">
    <div class=\"separator col-md-2 col-md-offset-5\">
      <i class=\"fa fa-2x fa-arrow-right\"></i>
    </div>
    <div class=\"form-group col-md-5\">
      <label class=\"control-label required\">Zone to edit</label>
      ";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "zone_types", array()), 'widget', array("attr" => array("class" => "zone-select")));
        echo "
    </div>
  </div>
  <div class=\"zone-form-container tab-content\">
  ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "zones", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["zoneForm"]) {
            // line 53
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["zoneForm"], 'widget', array("template" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "data", array()), "template", array())));
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['zoneForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "  </div>
";
    }

    // line 58
    public function block_zone_widget($context, array $blocks = array())
    {
        // line 59
        echo "  <div class=\"zone-";
        echo twig_escape_filter($this->env, ($context["zone_name"] ?? null), "html", null, true);
        echo " tab-pane zone-pane\" role=\"tabpanel\">
    <div class=\"clearfix\">
      <div class=\"dropdown pull-right\">
        <button id=\"add-components\" class=\"btn btn-xs btn-primary\" type=\"button\"
          data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Add Components
        <span class=\"caret\"></span>
        </button>
        <ul class=\"dropdown-menu\" aria-labelledby=\"add-components\">
        ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["component_types"] ?? null));
        foreach ($context['_seq'] as $context["componentTypeId"] => $context["componentTypeName"]) {
            // line 69
            echo "          <li>
            <a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("synapse_admin_template_add_component", array("id" => $this->getAttribute(($context["template"] ?? null), "id", array()), "zoneTypeId" => ($context["zone_type_id"] ?? null), "componentTypeId" => $context["componentTypeId"])), "html", null, true);
            echo "\">
              ";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize($context["componentTypeName"]), "html", null, true);
            echo "
            </a>
          </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['componentTypeId'], $context['componentTypeName'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "        </ul>
      </div>
      <h4>";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["zone_name"] ?? null)), "html", null, true);
        echo "</h4>
    </div>
    <div class=\"component-form-container\">
    ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "components", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["componentForm"]) {
            // line 81
            echo "      ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["componentForm"], 'widget', array("zone" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "data", array()), "zone", array())));
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['componentForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "    </div>
  </div>
";
    }

    // line 87
    public function block_component_widget($context, array $blocks = array())
    {
        // line 88
        echo "  <div class=\"component-form-wrapper\">
    <header class=\"component-form-header\">
      <button
        class=\"component-form-toggle btn btn-link collapsed\"
        aria-controls=\"collapseExample\"
        aria-expanded=\"false\"
        data-target=\"#";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
        echo "\"
        data-toggle=\"collapse\"
        type=\"button\">
          <i class=\"icon fa fa-chevron-up\"></i>
      </button>
      ";
        // line 99
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', array("label_attr" => array("class" => "badge")));
        echo "
      <span class=\"center\"></span>
      <label class=\"action input-switch\">
        <input name=\"enabled\" type=\"checkbox\">
        <span class=\"input-switch--label\">Active</span>
        <span class=\"input-switch--toggle\"></span>
      </label>
      <button class=\"action btn btn-link\" type=\"button\"><i class=\"fa fa-arrows\"></i></button>
      <a class=\"action btn btn-link\"
        href=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("synapse_admin_component_delete", array("zoneId" => $this->getAttribute(($context["zone"] ?? null), "id", array()), "componentId" => $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "component_id", array()))), "html", null, true);
        echo "\" >
        <i class=\"fa fa-trash\"></i>
      </a>
    </header>
    ";
        // line 112
        if (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "data", array()), "count", array()) > 0)) {
            // line 113
            echo "      ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', array("attr" => array("class" => "component-form-content collapse", "aria-expanded" => "false")));
            // line 118
            echo "
    ";
        } else {
            // line 120
            echo "      <div id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
            echo "\" class=\"component-form-content collapse\" aria-expanded=\"false\">
        <p class=\"info\">
          <span class=\"badge label-info\"><i class=\"fa fa-info\"></i></span>
          This component has no customisable options.<br>
        </p>
      </div>
    ";
        }
        // line 127
        echo "  </div>
";
    }

    // line 130
    public function block_form_errors($context, array $blocks = array())
    {
        // line 131
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 132
            if ($this->getAttribute(($context["form"] ?? null), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 133
            echo "    <ul class=\"list-unstyled\">";
            // line 134
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 135
                echo "<li><i class=\"fa fa-warning\"></i> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            echo "</ul>
    ";
            // line 138
            if ($this->getAttribute(($context["form"] ?? null), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
    }

    public function getTemplateName()
    {
        return "SynapseAdminBundle:Form:synapse_admin_form_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 138,  302 => 137,  294 => 135,  290 => 134,  288 => 133,  282 => 132,  280 => 131,  277 => 130,  272 => 127,  261 => 120,  257 => 118,  254 => 113,  252 => 112,  245 => 108,  233 => 99,  225 => 94,  217 => 88,  214 => 87,  208 => 83,  199 => 81,  195 => 80,  189 => 77,  185 => 75,  175 => 71,  171 => 70,  168 => 69,  164 => 68,  151 => 59,  148 => 58,  143 => 55,  134 => 53,  130 => 52,  123 => 48,  115 => 42,  112 => 41,  107 => 38,  94 => 33,  81 => 23,  75 => 21,  70 => 20,  68 => 19,  59 => 16,  54 => 15,  49 => 14,  41 => 8,  35 => 4,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SynapseAdminBundle:Form:synapse_admin_form_layout.html.twig", "/var/www/html/src/Synapse/Admin/Bundle/Resources/views/Form/synapse_admin_form_layout.html.twig");
    }
}
