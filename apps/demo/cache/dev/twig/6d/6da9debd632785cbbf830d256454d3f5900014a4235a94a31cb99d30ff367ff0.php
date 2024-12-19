<?php

/* SynapseAdminBundle:Media:list.html.twig */
class __TwigTemplate_3175694a26c3c71a3a6f3531ced5f13663d6366d689c87b328388a18c8e533a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SynapseAdminBundle::layout.html.twig", "SynapseAdminBundle:Media:list.html.twig", 1);
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
        $__internal_7ca1d9d714ec13fc598de965df5dbf347ceba3482a12a52c1e1f07878a4960c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ca1d9d714ec13fc598de965df5dbf347ceba3482a12a52c1e1f07878a4960c8->enter($__internal_7ca1d9d714ec13fc598de965df5dbf347ceba3482a12a52c1e1f07878a4960c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SynapseAdminBundle:Media:list.html.twig"));

        $__internal_c886788103e175ea11d0164e722d21c8bbc1f482e2e36dd39a54a93e9ae8254b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c886788103e175ea11d0164e722d21c8bbc1f482e2e36dd39a54a93e9ae8254b->enter($__internal_c886788103e175ea11d0164e722d21c8bbc1f482e2e36dd39a54a93e9ae8254b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SynapseAdminBundle:Media:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ca1d9d714ec13fc598de965df5dbf347ceba3482a12a52c1e1f07878a4960c8->leave($__internal_7ca1d9d714ec13fc598de965df5dbf347ceba3482a12a52c1e1f07878a4960c8_prof);

        
        $__internal_c886788103e175ea11d0164e722d21c8bbc1f482e2e36dd39a54a93e9ae8254b->leave($__internal_c886788103e175ea11d0164e722d21c8bbc1f482e2e36dd39a54a93e9ae8254b_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_87af07040dc9a3e9be87b2aba890dcbe2f827b7ce3c951905300e3aa9dbfebac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87af07040dc9a3e9be87b2aba890dcbe2f827b7ce3c951905300e3aa9dbfebac->enter($__internal_87af07040dc9a3e9be87b2aba890dcbe2f827b7ce3c951905300e3aa9dbfebac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_9e0432aeaad92f12062c76d75c9cc1fcb0284a002dc6d19a331650d7a584abea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e0432aeaad92f12062c76d75c9cc1fcb0284a002dc6d19a331650d7a584abea->enter($__internal_9e0432aeaad92f12062c76d75c9cc1fcb0284a002dc6d19a331650d7a584abea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<div class=\"row\">
  <div class=\"col-lg-12\">
    <div class=\"panel tab-content\">
      <header class=\"panel-heading composed bg-main tab-content\">
        <a href class=\"combo\">
          <i class=\"fa fa-picture-o\"></i>
        </a>
        <h3>Media gallery</h3>
        <a href=\"#list\" class=\"combo active\" role=\"tab\" data-toggle=\"tab\">
          <i class=\"fa fa-th-list\"></i>
        </a>
        <a href=\"#upload\" class=\"combo\" role=\"tab\" data-toggle=\"tab\">
          <i class=\"fa fa-cloud-upload\"></i>
        </a>
      </header>
      ";
        // line 19
        if ( !twig_test_empty(($context["medias"] ?? $this->getContext($context, "medias")))) {
            // line 20
            echo "      <div id=\"list\" class=\"panel-body active tab-pane\" role=\"tabpanel\">
        <div class=\"mediatheque\">
          ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["medias"] ?? $this->getContext($context, "medias")));
            foreach ($context['_seq'] as $context["_key"] => $context["media"]) {
                if (($this->getAttribute($context["media"], "type", array()) == "image")) {
                    // line 23
                    echo "          <div class=\"figure\" style=\"background-image: url(";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["media"], "webPath", array())), "html", null, true);
                    echo ")\">
            <div class=\"actions\">
              <a class=\"btn btn-primary btn-sm\" href=\"";
                    // line 25
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("synapse_admin_image_edition", array("id" => $this->getAttribute($context["media"], "id", array()))), "html", null, true);
                    echo "\">
                <i class=\"fa fa-edit\"></i>
              </a>
              <!--<a href=\"#\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa-times\"></i></a>-->
            </div>
            <div class=\"caption\">
              <div>";
                    // line 31
                    echo twig_escape_filter($this->env, $this->getAttribute($context["media"], "name", array()), "html", null, true);
                    echo "</div>
            </div>
          </div>
          ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['media'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "        </div>
      </div>
      ";
        } else {
            // line 38
            echo "      <div id=\"list\" class=\"panel-body active tab-pane\" role=\"tabpanel\">
        <span class=\"badge label-info\"><i class=\"fa fa-info\"></i></span>
        There's no media registered, try to upload some with the dedicated tool !
      </div>
      ";
        }
        // line 43
        echo "      <div id=\"upload\" class=\"tab-pane panel-body\" role=\"tabpanel\">
        <h4>Upload</h4>
        <form action=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("synapse_admin_media_xhr_upload");
        echo "\" method=\"POST\"
          class=\"dropzone form-group\" id=\"synapse_image_upload\">
        </form>
        <div class=\"btn-group\">
          <a class=\"btn btn-primary\" href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("synapse_admin_media_list");
        echo "\">
            <i class=\"fa fa-check\"></i>
            Done
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_9e0432aeaad92f12062c76d75c9cc1fcb0284a002dc6d19a331650d7a584abea->leave($__internal_9e0432aeaad92f12062c76d75c9cc1fcb0284a002dc6d19a331650d7a584abea_prof);

        
        $__internal_87af07040dc9a3e9be87b2aba890dcbe2f827b7ce3c951905300e3aa9dbfebac->leave($__internal_87af07040dc9a3e9be87b2aba890dcbe2f827b7ce3c951905300e3aa9dbfebac_prof);

    }

    public function getTemplateName()
    {
        return "SynapseAdminBundle:Media:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 49,  119 => 45,  115 => 43,  108 => 38,  103 => 35,  92 => 31,  83 => 25,  77 => 23,  72 => 22,  68 => 20,  66 => 19,  49 => 4,  40 => 3,  11 => 1,);
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
  <div class=\"col-lg-12\">
    <div class=\"panel tab-content\">
      <header class=\"panel-heading composed bg-main tab-content\">
        <a href class=\"combo\">
          <i class=\"fa fa-picture-o\"></i>
        </a>
        <h3>Media gallery</h3>
        <a href=\"#list\" class=\"combo active\" role=\"tab\" data-toggle=\"tab\">
          <i class=\"fa fa-th-list\"></i>
        </a>
        <a href=\"#upload\" class=\"combo\" role=\"tab\" data-toggle=\"tab\">
          <i class=\"fa fa-cloud-upload\"></i>
        </a>
      </header>
      {% if medias is not empty %}
      <div id=\"list\" class=\"panel-body active tab-pane\" role=\"tabpanel\">
        <div class=\"mediatheque\">
          {% for media in medias if media.type == 'image' %}
          <div class=\"figure\" style=\"background-image: url({{ asset(media.webPath) }})\">
            <div class=\"actions\">
              <a class=\"btn btn-primary btn-sm\" href=\"{{ path('synapse_admin_image_edition', { id: media.id }) }}\">
                <i class=\"fa fa-edit\"></i>
              </a>
              <!--<a href=\"#\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa-times\"></i></a>-->
            </div>
            <div class=\"caption\">
              <div>{{ media.name }}</div>
            </div>
          </div>
          {% endfor %}
        </div>
      </div>
      {% else %}
      <div id=\"list\" class=\"panel-body active tab-pane\" role=\"tabpanel\">
        <span class=\"badge label-info\"><i class=\"fa fa-info\"></i></span>
        There's no media registered, try to upload some with the dedicated tool !
      </div>
      {% endif %}
      <div id=\"upload\" class=\"tab-pane panel-body\" role=\"tabpanel\">
        <h4>Upload</h4>
        <form action=\"{{ url('synapse_admin_media_xhr_upload') }}\" method=\"POST\"
          class=\"dropzone form-group\" id=\"synapse_image_upload\">
        </form>
        <div class=\"btn-group\">
          <a class=\"btn btn-primary\" href=\"{{ path('synapse_admin_media_list') }}\">
            <i class=\"fa fa-check\"></i>
            Done
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
{% endblock %}
", "SynapseAdminBundle:Media:list.html.twig", "/var/www/html/src/Synapse/Admin/Bundle/Resources/views/Media/list.html.twig");
    }
}
