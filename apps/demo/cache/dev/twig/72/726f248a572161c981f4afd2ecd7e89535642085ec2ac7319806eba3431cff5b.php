<?php

/* SynapseAdminBundle:Image:edit.html.twig */
class __TwigTemplate_c4ef355afe7b1e62802ef141dd3fc4f308f5d9a96eae89b7eb68d8feda4a3ef4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SynapseAdminBundle::layout.html.twig", "SynapseAdminBundle:Image:edit.html.twig", 1);
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
        $__internal_6722d6b1fc6f53a74e73c1cf073212bef8f62d83829576c07ddae29acda63a19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6722d6b1fc6f53a74e73c1cf073212bef8f62d83829576c07ddae29acda63a19->enter($__internal_6722d6b1fc6f53a74e73c1cf073212bef8f62d83829576c07ddae29acda63a19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SynapseAdminBundle:Image:edit.html.twig"));

        $__internal_9c5fe0c12bcc757a606f2f4142c81d0f0b2fadb3effa2eb0fa6261733c17d666 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c5fe0c12bcc757a606f2f4142c81d0f0b2fadb3effa2eb0fa6261733c17d666->enter($__internal_9c5fe0c12bcc757a606f2f4142c81d0f0b2fadb3effa2eb0fa6261733c17d666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SynapseAdminBundle:Image:edit.html.twig"));

        // line 3
        $context["clipboard"] = $this;
        // line 18
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6722d6b1fc6f53a74e73c1cf073212bef8f62d83829576c07ddae29acda63a19->leave($__internal_6722d6b1fc6f53a74e73c1cf073212bef8f62d83829576c07ddae29acda63a19_prof);

        
        $__internal_9c5fe0c12bcc757a606f2f4142c81d0f0b2fadb3effa2eb0fa6261733c17d666->leave($__internal_9c5fe0c12bcc757a606f2f4142c81d0f0b2fadb3effa2eb0fa6261733c17d666_prof);

    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        $__internal_a567d4066e4a75c129f584184857ade757731e74368297807ca22db90f9583cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a567d4066e4a75c129f584184857ade757731e74368297807ca22db90f9583cc->enter($__internal_a567d4066e4a75c129f584184857ade757731e74368297807ca22db90f9583cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ac8337aba627fddaeafcf12be3d9412f49ec15bd76213ed5923054aad176484e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac8337aba627fddaeafcf12be3d9412f49ec15bd76213ed5923054aad176484e->enter($__internal_ac8337aba627fddaeafcf12be3d9412f49ec15bd76213ed5923054aad176484e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 21
        echo "  <div class=\"row\">
    <div class=\"col-md-12\">
      <ul class=\"breadcrumb\">
        <li>
          <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("synapse_admin_media_list");
        echo "\">
            <i class=\"fa fa-picture-o\"></i>
            Images
          </a>
        </li>
        <li class=\"active\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize($this->getAttribute(($context["image"] ?? $this->getContext($context, "image")), "name", array())), "html", null, true);
        echo "</li>
        <li class=\"active\">edit</li>
      </ul>
    </div>
  </div>

  ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
  <div class=\"row-fluid\">
    <div class=\"col-fill synapse-image-format\">
      <div class=\"panel\">
        <header class=\"panel-heading composed bg-main\">
          <a href class=\"combo\">
            <i class=\"fa fa-picture-o\"></i>
          </a>
          <h3>General</h3>
        </header>
        <div class=\"panel-body\">
          ";
        // line 47
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
      </div>
      <div class=\"panel\">
        <header class=\"panel-heading composed bg-main\">
          <a href class=\"combo\">
            <i class=\"fa fa-crop\"></i>
          </a>
          <h3>Formats</h3>
        </header>
        <div class=\"panel-signets reverse\">
          <ul class=\"signets-list\">
            <li class=\"signet active\">
              <a href=\"#format-origin\" role=\"tab\" data-toggle=\"tab\">
                <i class=\"icon fa fa-cloud-upload\"></i>
                Origin
              </a>
            </li>
          ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["theme"] ?? $this->getContext($context, "theme")), "imageFormats", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
            // line 66
            echo "            <li class=\"signet\">
              <a href=\"#format-";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["format"], "name", array()), "html", null, true);
            echo "\" role=\"tab\" data-toggle=\"tab\">
                <i class=\"icon fa fa-arrows-alt\"></i>
                ";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize($this->getAttribute($context["format"], "name", array())), "html", null, true);
            echo "
              </a>
            </li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['format'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "          </ul>
          <div class=\"panel-body tab-content\">
            <div id=\"format-origin\" class=\"tab-pane active\">
              <div class=\"row\">
                <div class=\"col-md-9\">
                  <p class=\"lead\">Original image</p>
                </div>
                <div class=\"col-md-3\">
                  ";
        // line 81
        echo $context["clipboard"]->geturl_widget((("link-" . $this->getAttribute(($context["image"] ?? $this->getContext($context, "image")), "id", array())) . "-origin"), $this->getAttribute(($context["image"] ?? $this->getContext($context, "image")), "webPath", array()));
        echo "
                </div>
              </div>
              <div class=\"image-container\">
                <img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["image"] ?? $this->getContext($context, "image")), "webPath", array())), "html", null, true);
        echo "\" />
              </div>
            </div>
            ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["theme"] ?? $this->getContext($context, "theme")), "imageFormats", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
            // line 89
            echo "            <div id=\"format-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["format"], "name", array()), "html", null, true);
            echo "\" class=\"format-container tab-pane tab-content\">
              ";
            // line 90
            $context["formattedImage"] = $this->getAttribute(($context["image"] ?? $this->getContext($context, "image")), "formattedImage", array(0 => $context["format"]), "method");
            // line 91
            echo "              <div id=\"format-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["format"], "name", array()), "html", null, true);
            echo "-current\"
                class=\"display-area tab-pane ";
            // line 92
            echo (( !twig_test_empty(($context["formattedImage"] ?? $this->getContext($context, "formattedImage")))) ? ("active") : (""));
            echo "\"
                data-assets-prefix=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/"), "html", null, true);
            echo "\"
              >
                <div class=\"row\">
                  <div class=\"col-md-9\">
                    <p class=\"lead\">\"";
            // line 97
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize($this->getAttribute($context["format"], "name", array())), "html", null, true);
            echo "\" formatted image</p>
                  </div>
                ";
            // line 99
            if ( !twig_test_empty(($context["formattedImage"] ?? $this->getContext($context, "formattedImage")))) {
                // line 100
                echo "                  <div class=\"col-md-3\">
                    ";
                // line 101
                echo $context["clipboard"]->geturl_widget(((("link-" . $this->getAttribute(($context["image"] ?? $this->getContext($context, "image")), "id", array())) . "-") . $this->getAttribute($context["format"], "name", array())), $this->getAttribute(($context["formattedImage"] ?? $this->getContext($context, "formattedImage")), "webPath", array()));
                echo "
                  </div>
                ";
            }
            // line 104
            echo "                </div>
                <div class=\"image-container formatted-image\">
                ";
            // line 106
            if ( !twig_test_empty(($context["formattedImage"] ?? $this->getContext($context, "formattedImage")))) {
                // line 107
                echo "                  <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["formattedImage"] ?? $this->getContext($context, "formattedImage")), "webPath", array())), "html", null, true);
                echo "\" />
                ";
            }
            // line 109
            echo "                </div>
                <div class=\"format-action-bar clearfix\">
                  <div class=\"pull-left btn-group\" role=\"group\">
                    <a href=\"#format-";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute($context["format"], "name", array()), "html", null, true);
            echo "-crop\"  role=\"tab\" data-toggle=\"tab\" class=\"btn btn-primary\">
                      <i class=\"fa fa-crop\"></i>
                      Re-crop
                    </a>
                  </div>
                </div>
              </div>
              <div id=\"format-";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute($context["format"], "name", array()), "html", null, true);
            echo "-crop\"
                class=\"cropping-area tab-pane ";
            // line 120
            echo ((twig_test_empty(($context["formattedImage"] ?? $this->getContext($context, "formattedImage")))) ? ("active") : (""));
            echo "\"
                data-ratio=\"";
            // line 121
            echo twig_escape_filter($this->env, ($this->getAttribute($context["format"], "width", array()) / $this->getAttribute($context["format"], "height", array())), "html", null, true);
            echo "\"
                data-format-endpoint=\"";
            // line 122
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("synapse_admin_image_xhr_format", array("id" => $this->getAttribute(($context["image"] ?? $this->getContext($context, "image")), "id", array()), "formatName" => $this->getAttribute($context["format"], "name", array()))), "html", null, true);
            echo "\"
              >
                <p class=\"lead\">Crop image in \"";
            // line 124
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize($this->getAttribute($context["format"], "name", array())), "html", null, true);
            echo "\" format</p>
                <div class=\"image-container\">
                  <img id=\"crop-";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute($context["format"], "name", array()), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["image"] ?? $this->getContext($context, "image")), "webPath", array())), "html", null, true);
            echo "\" />
                </div>
                <div class=\"format-action-bar clearfix\">
                  <div class=\"pull-left\">
                    <a href=\"#\" class=\"validate-crop btn btn-primary\">
                      <i class=\"fa fa-check\"></i>
                      Validate
                    </a>
                    <a href=\"#\" class=\"spinner-crop hidden btn btn-warning\">
                      <i class=\"fa fa-spinner fa-spin fa-fw\"></i>
                      Processing...
                    </a>
                  </div>
                  <div class=\"pull-right\">
                    <a href=\"#format-";
            // line 140
            echo twig_escape_filter($this->env, $this->getAttribute($context["format"], "name", array()), "html", null, true);
            echo "-current\" role=\"tab\" data-toggle=\"tab\" class=\"cancel-crop btn btn-warning\">
                      <i class=\"fa fa-times\"></i>
                      Cancel
                    </a>
                  </div>
                </div>
              </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['format'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "          </div>
        </div>
      </div>
    </div>
    <div class=\"col-fix\">
      <div class=\"button-bar\" data-spy=\"affix\" data-offset-top=\"55\">
        <a class=\"btn btn-big btn-warning\" href=\"";
        // line 155
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("synapse_admin_media_list");
        echo "\">
          <i class=\"fa fa-times\"></i>
          <span>Cancel</span>
        </a>
        <button class=\"btn btn-big btn-success\" type=\"submit\">
          <i class=\"fa fa-2x fa-check\"></i>
          Submit
        </button>
      </div>
    </div>
  </div>
  ";
        // line 166
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_ac8337aba627fddaeafcf12be3d9412f49ec15bd76213ed5923054aad176484e->leave($__internal_ac8337aba627fddaeafcf12be3d9412f49ec15bd76213ed5923054aad176484e_prof);

        
        $__internal_a567d4066e4a75c129f584184857ade757731e74368297807ca22db90f9583cc->leave($__internal_a567d4066e4a75c129f584184857ade757731e74368297807ca22db90f9583cc_prof);

    }

    // line 5
    public function geturl_widget($__id__ = null, $__web_path__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $__id__,
            "web_path" => $__web_path__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_772cf921bb615cb92b04f0d599ff81a28e12500fec795d3131575d799f457677 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_772cf921bb615cb92b04f0d599ff81a28e12500fec795d3131575d799f457677->enter($__internal_772cf921bb615cb92b04f0d599ff81a28e12500fec795d3131575d799f457677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "url_widget"));

            $__internal_080a1d45762a3c8ca2b810462a7bd5de2d514c846c68a182b5753f5466f184f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_080a1d45762a3c8ca2b810462a7bd5de2d514c846c68a182b5753f5466f184f9->enter($__internal_080a1d45762a3c8ca2b810462a7bd5de2d514c846c68a182b5753f5466f184f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "url_widget"));

            // line 6
            echo "  <div class=\"input-group input-group-sm\">
    <input id=\"";
            // line 7
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "\" type=\"text\" class=\"form-control\" readonly=\"readonly\"
      value=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["web_path"] ?? $this->getContext($context, "web_path")), $this->getAttribute($this->getAttribute(($context["synapse"] ?? $this->getContext($context, "synapse")), "admin", array()), "front_assets_package", array())), "html", null, true);
            echo "\"
    />
    <span class=\"input-group-btn\">
      <button class=\"btn btn-info btn-clipboard\" type=\"button\" data-clipboard-target=\"#";
            // line 11
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "\">
        <i class=\"fa fa-clipboard\"></i>
      </button>
    </span>
  </div>
";
            
            $__internal_080a1d45762a3c8ca2b810462a7bd5de2d514c846c68a182b5753f5466f184f9->leave($__internal_080a1d45762a3c8ca2b810462a7bd5de2d514c846c68a182b5753f5466f184f9_prof);

            
            $__internal_772cf921bb615cb92b04f0d599ff81a28e12500fec795d3131575d799f457677->leave($__internal_772cf921bb615cb92b04f0d599ff81a28e12500fec795d3131575d799f457677_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "SynapseAdminBundle:Image:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  349 => 11,  343 => 8,  339 => 7,  336 => 6,  317 => 5,  305 => 166,  291 => 155,  283 => 149,  268 => 140,  249 => 126,  244 => 124,  239 => 122,  235 => 121,  231 => 120,  227 => 119,  217 => 112,  212 => 109,  206 => 107,  204 => 106,  200 => 104,  194 => 101,  191 => 100,  189 => 99,  184 => 97,  177 => 93,  173 => 92,  168 => 91,  166 => 90,  161 => 89,  157 => 88,  151 => 85,  144 => 81,  134 => 73,  124 => 69,  119 => 67,  116 => 66,  112 => 65,  91 => 47,  77 => 36,  68 => 30,  60 => 25,  54 => 21,  45 => 20,  35 => 1,  33 => 18,  31 => 3,  11 => 1,);
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

{% import _self as clipboard %}

{% macro url_widget(id, web_path) %}
  <div class=\"input-group input-group-sm\">
    <input id=\"{{ id }}\" type=\"text\" class=\"form-control\" readonly=\"readonly\"
      value=\"{{ asset(web_path, synapse.admin.front_assets_package) }}\"
    />
    <span class=\"input-group-btn\">
      <button class=\"btn btn-info btn-clipboard\" type=\"button\" data-clipboard-target=\"#{{ id }}\">
        <i class=\"fa fa-clipboard\"></i>
      </button>
    </span>
  </div>
{% endmacro %}

{% form_theme form 'bootstrap_3_layout.html.twig' %}

{% block content %}
  <div class=\"row\">
    <div class=\"col-md-12\">
      <ul class=\"breadcrumb\">
        <li>
          <a href=\"{{ path('synapse_admin_media_list') }}\">
            <i class=\"fa fa-picture-o\"></i>
            Images
          </a>
        </li>
        <li class=\"active\">{{ image.name | humanize }}</li>
        <li class=\"active\">edit</li>
      </ul>
    </div>
  </div>

  {{ form_start(form) }}
  <div class=\"row-fluid\">
    <div class=\"col-fill synapse-image-format\">
      <div class=\"panel\">
        <header class=\"panel-heading composed bg-main\">
          <a href class=\"combo\">
            <i class=\"fa fa-picture-o\"></i>
          </a>
          <h3>General</h3>
        </header>
        <div class=\"panel-body\">
          {{ form_widget(form) }}
        </div>
      </div>
      <div class=\"panel\">
        <header class=\"panel-heading composed bg-main\">
          <a href class=\"combo\">
            <i class=\"fa fa-crop\"></i>
          </a>
          <h3>Formats</h3>
        </header>
        <div class=\"panel-signets reverse\">
          <ul class=\"signets-list\">
            <li class=\"signet active\">
              <a href=\"#format-origin\" role=\"tab\" data-toggle=\"tab\">
                <i class=\"icon fa fa-cloud-upload\"></i>
                Origin
              </a>
            </li>
          {% for format in theme.imageFormats %}
            <li class=\"signet\">
              <a href=\"#format-{{ format.name }}\" role=\"tab\" data-toggle=\"tab\">
                <i class=\"icon fa fa-arrows-alt\"></i>
                {{ format.name | humanize }}
              </a>
            </li>
          {% endfor %}
          </ul>
          <div class=\"panel-body tab-content\">
            <div id=\"format-origin\" class=\"tab-pane active\">
              <div class=\"row\">
                <div class=\"col-md-9\">
                  <p class=\"lead\">Original image</p>
                </div>
                <div class=\"col-md-3\">
                  {{ clipboard.url_widget('link-' ~ image.id ~ '-origin', image.webPath) }}
                </div>
              </div>
              <div class=\"image-container\">
                <img src=\"{{ asset(image.webPath) }}\" />
              </div>
            </div>
            {% for format in theme.imageFormats %}
            <div id=\"format-{{ format.name }}\" class=\"format-container tab-pane tab-content\">
              {% set formattedImage = image.formattedImage(format) %}
              <div id=\"format-{{ format.name }}-current\"
                class=\"display-area tab-pane {{ formattedImage is not empty ? 'active' : '' }}\"
                data-assets-prefix=\"{{ asset('/') }}\"
              >
                <div class=\"row\">
                  <div class=\"col-md-9\">
                    <p class=\"lead\">\"{{ format.name|humanize }}\" formatted image</p>
                  </div>
                {% if formattedImage is not empty %}
                  <div class=\"col-md-3\">
                    {{ clipboard.url_widget('link-' ~ image.id ~ '-' ~ format.name, formattedImage.webPath) }}
                  </div>
                {% endif %}
                </div>
                <div class=\"image-container formatted-image\">
                {% if formattedImage is not empty %}
                  <img src=\"{{ asset(formattedImage.webPath) }}\" />
                {% endif %}
                </div>
                <div class=\"format-action-bar clearfix\">
                  <div class=\"pull-left btn-group\" role=\"group\">
                    <a href=\"#format-{{ format.name }}-crop\"  role=\"tab\" data-toggle=\"tab\" class=\"btn btn-primary\">
                      <i class=\"fa fa-crop\"></i>
                      Re-crop
                    </a>
                  </div>
                </div>
              </div>
              <div id=\"format-{{ format.name }}-crop\"
                class=\"cropping-area tab-pane {{ formattedImage is empty ? 'active' : '' }}\"
                data-ratio=\"{{ format.width / format.height }}\"
                data-format-endpoint=\"{{ path('synapse_admin_image_xhr_format', { id: image.id, formatName: format.name }) }}\"
              >
                <p class=\"lead\">Crop image in \"{{ format.name|humanize }}\" format</p>
                <div class=\"image-container\">
                  <img id=\"crop-{{ format.name }}\" src=\"{{ asset(image.webPath) }}\" />
                </div>
                <div class=\"format-action-bar clearfix\">
                  <div class=\"pull-left\">
                    <a href=\"#\" class=\"validate-crop btn btn-primary\">
                      <i class=\"fa fa-check\"></i>
                      Validate
                    </a>
                    <a href=\"#\" class=\"spinner-crop hidden btn btn-warning\">
                      <i class=\"fa fa-spinner fa-spin fa-fw\"></i>
                      Processing...
                    </a>
                  </div>
                  <div class=\"pull-right\">
                    <a href=\"#format-{{ format.name }}-current\" role=\"tab\" data-toggle=\"tab\" class=\"cancel-crop btn btn-warning\">
                      <i class=\"fa fa-times\"></i>
                      Cancel
                    </a>
                  </div>
                </div>
              </div>
            </div>
            {% endfor %}
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-fix\">
      <div class=\"button-bar\" data-spy=\"affix\" data-offset-top=\"55\">
        <a class=\"btn btn-big btn-warning\" href=\"{{ path('synapse_admin_media_list') }}\">
          <i class=\"fa fa-times\"></i>
          <span>Cancel</span>
        </a>
        <button class=\"btn btn-big btn-success\" type=\"submit\">
          <i class=\"fa fa-2x fa-check\"></i>
          Submit
        </button>
      </div>
    </div>
  </div>
  {{ form_end(form) }}
{% endblock %}
", "SynapseAdminBundle:Image:edit.html.twig", "/var/www/html/src/Synapse/Admin/Bundle/Resources/views/Image/edit.html.twig");
    }
}
