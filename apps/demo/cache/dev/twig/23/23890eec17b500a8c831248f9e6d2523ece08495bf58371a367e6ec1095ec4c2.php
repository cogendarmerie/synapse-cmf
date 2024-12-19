<?php

/* SynapseAdminBundle:Form:synapse_admin_form_layout.html.twig */
class __TwigTemplate_6799af312ca533cde6494d2c494e2fadcb1a1e4d69fe887944c72548b1fc294f extends Twig_Template
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
        $__internal_01f6861d6f03b165e4aa2291f290954c6529aec4f34303b0c112f9699b508419 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01f6861d6f03b165e4aa2291f290954c6529aec4f34303b0c112f9699b508419->enter($__internal_01f6861d6f03b165e4aa2291f290954c6529aec4f34303b0c112f9699b508419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SynapseAdminBundle:Form:synapse_admin_form_layout.html.twig"));

        $__internal_a72832dab3fe6490268adb4d6160d376389bfda223ec99beeb8613fc319ceca9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a72832dab3fe6490268adb4d6160d376389bfda223ec99beeb8613fc319ceca9->enter($__internal_a72832dab3fe6490268adb4d6160d376389bfda223ec99beeb8613fc319ceca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SynapseAdminBundle:Form:synapse_admin_form_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01f6861d6f03b165e4aa2291f290954c6529aec4f34303b0c112f9699b508419->leave($__internal_01f6861d6f03b165e4aa2291f290954c6529aec4f34303b0c112f9699b508419_prof);

        
        $__internal_a72832dab3fe6490268adb4d6160d376389bfda223ec99beeb8613fc319ceca9->leave($__internal_a72832dab3fe6490268adb4d6160d376389bfda223ec99beeb8613fc319ceca9_prof);

    }

    // line 3
    public function block_theme_widget($context, array $blocks = array())
    {
        $__internal_9645efe29193a20ce6f1aec58ef375837f896a436676cf50054ba929c1b1365e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9645efe29193a20ce6f1aec58ef375837f896a436676cf50054ba929c1b1365e->enter($__internal_9645efe29193a20ce6f1aec58ef375837f896a436676cf50054ba929c1b1365e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "theme_widget"));

        $__internal_9a899a8ed565c8a1093727d80cda74d43c93eff4e180d1ace3de72694c6079cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a899a8ed565c8a1093727d80cda74d43c93eff4e180d1ace3de72694c6079cb->enter($__internal_9a899a8ed565c8a1093727d80cda74d43c93eff4e180d1ace3de72694c6079cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "theme_widget"));

        // line 4
        echo "  <div class=\"panel-body\">
    <div class=\"row tab-content\">
      <div class=\"form-group col-md-5\">
        <label class=\"control-label required\">Template to edit</label>
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "template_types", array()), 'widget', array("attr" => array("class" => "template-select")));
        echo "
      </div>
    </div>
  </div>
  <div class=\"panel-body tab-content\">
  ";
        // line 14
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "templates", array()));
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
        $context['_seq'] = twig_ensure_traversable(($context["templates_init_map"] ?? $this->getContext($context, "templates_init_map")));
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
        
        $__internal_9a899a8ed565c8a1093727d80cda74d43c93eff4e180d1ace3de72694c6079cb->leave($__internal_9a899a8ed565c8a1093727d80cda74d43c93eff4e180d1ace3de72694c6079cb_prof);

        
        $__internal_9645efe29193a20ce6f1aec58ef375837f896a436676cf50054ba929c1b1365e->leave($__internal_9645efe29193a20ce6f1aec58ef375837f896a436676cf50054ba929c1b1365e_prof);

    }

    // line 41
    public function block_template_widget($context, array $blocks = array())
    {
        $__internal_c33b7db377c6271bc549db555a212dd9edcf67a808aed70cf8d03fabb0c35611 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c33b7db377c6271bc549db555a212dd9edcf67a808aed70cf8d03fabb0c35611->enter($__internal_c33b7db377c6271bc549db555a212dd9edcf67a808aed70cf8d03fabb0c35611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "template_widget"));

        $__internal_3b6f943d2d7f637b5a7adaf0c7ab49fc6fe757add899d00ed506390e69c13ccb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b6f943d2d7f637b5a7adaf0c7ab49fc6fe757add899d00ed506390e69c13ccb->enter($__internal_3b6f943d2d7f637b5a7adaf0c7ab49fc6fe757add899d00ed506390e69c13ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "template_widget"));

        // line 42
        echo "  <div class=\"row zone-selector-container\">
    <div class=\"separator col-md-2 col-md-offset-5\">
      <i class=\"fa fa-2x fa-arrow-right\"></i>
    </div>
    <div class=\"form-group col-md-5\">
      <label class=\"control-label required\">Zone to edit</label>
      ";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "zone_types", array()), 'widget', array("attr" => array("class" => "zone-select")));
        echo "
    </div>
  </div>
  <div class=\"zone-form-container tab-content\">
  ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "zones", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["zoneForm"]) {
            // line 53
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["zoneForm"], 'widget', array("template" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "data", array()), "template", array())));
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['zoneForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "  </div>
";
        
        $__internal_3b6f943d2d7f637b5a7adaf0c7ab49fc6fe757add899d00ed506390e69c13ccb->leave($__internal_3b6f943d2d7f637b5a7adaf0c7ab49fc6fe757add899d00ed506390e69c13ccb_prof);

        
        $__internal_c33b7db377c6271bc549db555a212dd9edcf67a808aed70cf8d03fabb0c35611->leave($__internal_c33b7db377c6271bc549db555a212dd9edcf67a808aed70cf8d03fabb0c35611_prof);

    }

    // line 58
    public function block_zone_widget($context, array $blocks = array())
    {
        $__internal_2f527fe40ed3805139308e402bb888f10b4ee4897d4bc8a774663eb55adc3fbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f527fe40ed3805139308e402bb888f10b4ee4897d4bc8a774663eb55adc3fbf->enter($__internal_2f527fe40ed3805139308e402bb888f10b4ee4897d4bc8a774663eb55adc3fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "zone_widget"));

        $__internal_986785788c76149747c38e217c37b5ad41eba538a2ec265e6aa6fee84d437a18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_986785788c76149747c38e217c37b5ad41eba538a2ec265e6aa6fee84d437a18->enter($__internal_986785788c76149747c38e217c37b5ad41eba538a2ec265e6aa6fee84d437a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "zone_widget"));

        // line 59
        echo "  <div class=\"zone-";
        echo twig_escape_filter($this->env, ($context["zone_name"] ?? $this->getContext($context, "zone_name")), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["component_types"] ?? $this->getContext($context, "component_types")));
        foreach ($context['_seq'] as $context["componentTypeId"] => $context["componentTypeName"]) {
            // line 69
            echo "          <li>
            <a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("synapse_admin_template_add_component", array("id" => $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "id", array()), "zoneTypeId" => ($context["zone_type_id"] ?? $this->getContext($context, "zone_type_id")), "componentTypeId" => $context["componentTypeId"])), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["zone_name"] ?? $this->getContext($context, "zone_name"))), "html", null, true);
        echo "</h4>
    </div>
    <div class=\"component-form-container\">
    ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "components", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["componentForm"]) {
            // line 81
            echo "      ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["componentForm"], 'widget', array("zone" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "data", array()), "zone", array())));
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
        
        $__internal_986785788c76149747c38e217c37b5ad41eba538a2ec265e6aa6fee84d437a18->leave($__internal_986785788c76149747c38e217c37b5ad41eba538a2ec265e6aa6fee84d437a18_prof);

        
        $__internal_2f527fe40ed3805139308e402bb888f10b4ee4897d4bc8a774663eb55adc3fbf->leave($__internal_2f527fe40ed3805139308e402bb888f10b4ee4897d4bc8a774663eb55adc3fbf_prof);

    }

    // line 87
    public function block_component_widget($context, array $blocks = array())
    {
        $__internal_2704f265fe95a12e3cbeecbd83279f8f18028ee3a1904e873bd4621a0304a62b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2704f265fe95a12e3cbeecbd83279f8f18028ee3a1904e873bd4621a0304a62b->enter($__internal_2704f265fe95a12e3cbeecbd83279f8f18028ee3a1904e873bd4621a0304a62b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "component_widget"));

        $__internal_4365c0f324a7b4a03f662d7cf6c30e4b4e0e880096d7e3d5f82ad8d2dca1acad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4365c0f324a7b4a03f662d7cf6c30e4b4e0e880096d7e3d5f82ad8d2dca1acad->enter($__internal_4365c0f324a7b4a03f662d7cf6c30e4b4e0e880096d7e3d5f82ad8d2dca1acad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "component_widget"));

        // line 88
        echo "  <div class=\"component-form-wrapper\">
    <header class=\"component-form-header\">
      <button
        class=\"component-form-toggle btn btn-link collapsed\"
        aria-controls=\"collapseExample\"
        aria-expanded=\"false\"
        data-target=\"#";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "\"
        data-toggle=\"collapse\"
        type=\"button\">
          <i class=\"icon fa fa-chevron-up\"></i>
      </button>
      ";
        // line 99
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("label_attr" => array("class" => "badge")));
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("synapse_admin_component_delete", array("zoneId" => $this->getAttribute(($context["zone"] ?? $this->getContext($context, "zone")), "id", array()), "componentId" => $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "component_id", array()))), "html", null, true);
        echo "\" >
        <i class=\"fa fa-trash\"></i>
      </a>
    </header>
    ";
        // line 112
        if (($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "data", array()), "count", array()) > 0)) {
            // line 113
            echo "      ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget', array("attr" => array("class" => "component-form-content collapse", "aria-expanded" => "false")));
            // line 118
            echo "
    ";
        } else {
            // line 120
            echo "      <div id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
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
        
        $__internal_4365c0f324a7b4a03f662d7cf6c30e4b4e0e880096d7e3d5f82ad8d2dca1acad->leave($__internal_4365c0f324a7b4a03f662d7cf6c30e4b4e0e880096d7e3d5f82ad8d2dca1acad_prof);

        
        $__internal_2704f265fe95a12e3cbeecbd83279f8f18028ee3a1904e873bd4621a0304a62b->leave($__internal_2704f265fe95a12e3cbeecbd83279f8f18028ee3a1904e873bd4621a0304a62b_prof);

    }

    // line 130
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_b1cabd3df27f0ca3b610e84ae93186cb12e9ca6d40b956dd9429f47a3db5fc8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1cabd3df27f0ca3b610e84ae93186cb12e9ca6d40b956dd9429f47a3db5fc8b->enter($__internal_b1cabd3df27f0ca3b610e84ae93186cb12e9ca6d40b956dd9429f47a3db5fc8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_d9acfe186425d29882349d591bd6ff51d5ce59746a6c11839271957a1cd3ca65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9acfe186425d29882349d591bd6ff51d5ce59746a6c11839271957a1cd3ca65->enter($__internal_d9acfe186425d29882349d591bd6ff51d5ce59746a6c11839271957a1cd3ca65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 131
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 132
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 133
            echo "    <ul class=\"list-unstyled\">";
            // line 134
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
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
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_d9acfe186425d29882349d591bd6ff51d5ce59746a6c11839271957a1cd3ca65->leave($__internal_d9acfe186425d29882349d591bd6ff51d5ce59746a6c11839271957a1cd3ca65_prof);

        
        $__internal_b1cabd3df27f0ca3b610e84ae93186cb12e9ca6d40b956dd9429f47a3db5fc8b->leave($__internal_b1cabd3df27f0ca3b610e84ae93186cb12e9ca6d40b956dd9429f47a3db5fc8b_prof);

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
        return array (  371 => 138,  368 => 137,  360 => 135,  356 => 134,  354 => 133,  348 => 132,  346 => 131,  337 => 130,  326 => 127,  315 => 120,  311 => 118,  308 => 113,  306 => 112,  299 => 108,  287 => 99,  279 => 94,  271 => 88,  262 => 87,  250 => 83,  241 => 81,  237 => 80,  231 => 77,  227 => 75,  217 => 71,  213 => 70,  210 => 69,  206 => 68,  193 => 59,  184 => 58,  173 => 55,  164 => 53,  160 => 52,  153 => 48,  145 => 42,  136 => 41,  125 => 38,  112 => 33,  99 => 23,  93 => 21,  88 => 20,  86 => 19,  77 => 16,  72 => 15,  67 => 14,  59 => 8,  53 => 4,  44 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'bootstrap_3_layout.html.twig' %}

{% block theme_widget %}
  <div class=\"panel-body\">
    <div class=\"row tab-content\">
      <div class=\"form-group col-md-5\">
        <label class=\"control-label required\">Template to edit</label>
        {{ form_widget(form.template_types, { 'attr': { 'class': 'template-select' } }) }}
      </div>
    </div>
  </div>
  <div class=\"panel-body tab-content\">
  {# edition form #}
  {% for templateName, templateForm in form.templates %}
    <div class=\"template-{{ templateName }} tab-pane template-pane\" role=\"tabpanel\">
      {{ form_widget(templateForm) }}
    </div>
  {% endfor %}
  {# init form #}
  {% for template_type_name, template_data in templates_init_map %}
    <div class=\"row template-{{ template_type_name }} tab-pane template-pane\" role=\"tabpanel\">
      <div class=\"pull-right template-init-button\">
        <a href=\"{{ url('synapse_admin_template_init', { templateType: template_data.template_type_id, contentType: template_data.content_type, contentId: template_data.content_id }) }}\"
          class=\"btn btn-primary\"
        >
          <i class=\"fa fa-plus\"></i>
          Create
        </a>
      </div>
      <div class=\"col-md-5 col-md-offset-5 template-init-message\">
        <p class=\"info\">
          <span class=\"badge label-info\"><i class=\"fa fa-info\"></i></span>
          There is no \"{{ template_type_name|humanize|lower }}\" template for this \"{{ template_data.content_type|humanize|lower }}\" content only, it uses global skeleton for now. Want you to create a dedicated template for this content ?<br>
        </p>
      </div>
    </div>
  {% endfor %}
  </div>
{% endblock %}

{% block template_widget %}
  <div class=\"row zone-selector-container\">
    <div class=\"separator col-md-2 col-md-offset-5\">
      <i class=\"fa fa-2x fa-arrow-right\"></i>
    </div>
    <div class=\"form-group col-md-5\">
      <label class=\"control-label required\">Zone to edit</label>
      {{ form_widget(form.zone_types, { 'attr': { 'class': 'zone-select' } }) }}
    </div>
  </div>
  <div class=\"zone-form-container tab-content\">
  {% for zoneForm in form.zones %}
    {{ form_widget(zoneForm, { template: form.vars.data.template }) }}
  {% endfor %}
  </div>
{% endblock %}

{% block zone_widget %}
  <div class=\"zone-{{ zone_name }} tab-pane zone-pane\" role=\"tabpanel\">
    <div class=\"clearfix\">
      <div class=\"dropdown pull-right\">
        <button id=\"add-components\" class=\"btn btn-xs btn-primary\" type=\"button\"
          data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Add Components
        <span class=\"caret\"></span>
        </button>
        <ul class=\"dropdown-menu\" aria-labelledby=\"add-components\">
        {% for componentTypeId, componentTypeName in component_types %}
          <li>
            <a href=\"{{ path('synapse_admin_template_add_component', { id: template.id, zoneTypeId: zone_type_id, componentTypeId: componentTypeId }) }}\">
              {{ componentTypeName | humanize }}
            </a>
          </li>
        {% endfor %}
        </ul>
      </div>
      <h4>{{ zone_name|humanize }}</h4>
    </div>
    <div class=\"component-form-container\">
    {% for componentForm in form.components %}
      {{ form_widget(componentForm, { zone: form.vars.data.zone }) }}
    {% endfor %}
    </div>
  </div>
{% endblock %}

{% block component_widget %}
  <div class=\"component-form-wrapper\">
    <header class=\"component-form-header\">
      <button
        class=\"component-form-toggle btn btn-link collapsed\"
        aria-controls=\"collapseExample\"
        aria-expanded=\"false\"
        data-target=\"#{{ form.vars.id }}\"
        data-toggle=\"collapse\"
        type=\"button\">
          <i class=\"icon fa fa-chevron-up\"></i>
      </button>
      {{ form_label(form, null, { label_attr: { class: 'badge' }}) }}
      <span class=\"center\"></span>
      <label class=\"action input-switch\">
        <input name=\"enabled\" type=\"checkbox\">
        <span class=\"input-switch--label\">Active</span>
        <span class=\"input-switch--toggle\"></span>
      </label>
      <button class=\"action btn btn-link\" type=\"button\"><i class=\"fa fa-arrows\"></i></button>
      <a class=\"action btn btn-link\"
        href=\"{{ url('synapse_admin_component_delete', { zoneId: zone.id, componentId: form.vars.component_id }) }}\" >
        <i class=\"fa fa-trash\"></i>
      </a>
    </header>
    {% if form.data.count > 0 %}
      {{ form_widget(form, {
        attr: {
          class: 'component-form-content collapse',
          'aria-expanded':  'false'
        }
      }) }}
    {% else %}
      <div id=\"{{ form.vars.id }}\" class=\"component-form-content collapse\" aria-expanded=\"false\">
        <p class=\"info\">
          <span class=\"badge label-info\"><i class=\"fa fa-info\"></i></span>
          This component has no customisable options.<br>
        </p>
      </div>
    {% endif %}
  </div>
{% endblock %}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><i class=\"fa fa-warning\"></i> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "SynapseAdminBundle:Form:synapse_admin_form_layout.html.twig", "/var/www/html/src/Synapse/Admin/Bundle/Resources/views/Form/synapse_admin_form_layout.html.twig");
    }
}
