<?php

/* default/index.html.twig */
class __TwigTemplate_d8ad5f470bef4d134610387a61b7cd44e920294d37a7aa585a664348f8a3c9fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b8f641aefb15e39e935d5803b9b2b69b0b52ac2fc9b672d4cb15a26d16db10b = $this->env->getExtension("native_profiler");
        $__internal_6b8f641aefb15e39e935d5803b9b2b69b0b52ac2fc9b672d4cb15a26d16db10b->enter($__internal_6b8f641aefb15e39e935d5803b9b2b69b0b52ac2fc9b672d4cb15a26d16db10b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b8f641aefb15e39e935d5803b9b2b69b0b52ac2fc9b672d4cb15a26d16db10b->leave($__internal_6b8f641aefb15e39e935d5803b9b2b69b0b52ac2fc9b672d4cb15a26d16db10b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c2fcccd53c9e475fe89fe309978e7d1bc289f8f8c3ce55b6a999a4c18d7e7241 = $this->env->getExtension("native_profiler");
        $__internal_c2fcccd53c9e475fe89fe309978e7d1bc289f8f8c3ce55b6a999a4c18d7e7241->enter($__internal_c2fcccd53c9e475fe89fe309978e7d1bc289f8f8c3ce55b6a999a4c18d7e7241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"list-group\" role=\"group\" aria-label=\"...\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sites"]) ? $context["sites"] : $this->getContext($context, "sites")));
        foreach ($context['_seq'] as $context["_key"] => $context["site"]) {
            // line 6
            echo "        <a class=\"list-group-item\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("website", array("website" => $this->getAttribute($context["site"], "getPath", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["site"], "getTitle", array(), "method"), "html", null, true);
            echo "</a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['site'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "    </div>
";
        
        $__internal_c2fcccd53c9e475fe89fe309978e7d1bc289f8f8c3ce55b6a999a4c18d7e7241->leave($__internal_c2fcccd53c9e475fe89fe309978e7d1bc289f8f8c3ce55b6a999a4c18d7e7241_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d365d87a263fe72a2d8d3ce57653927ce266be11843bc9740ea4be95e517fab9 = $this->env->getExtension("native_profiler");
        $__internal_d365d87a263fe72a2d8d3ce57653927ce266be11843bc9740ea4be95e517fab9->enter($__internal_d365d87a263fe72a2d8d3ce57653927ce266be11843bc9740ea4be95e517fab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap-theme.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
";
        
        $__internal_d365d87a263fe72a2d8d3ce57653927ce266be11843bc9740ea4be95e517fab9->leave($__internal_d365d87a263fe72a2d8d3ce57653927ce266be11843bc9740ea4be95e517fab9_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f646606fe5066ac10e836f02832448979ec25e246234b674f072e318802cf6ca = $this->env->getExtension("native_profiler");
        $__internal_f646606fe5066ac10e836f02832448979ec25e246234b674f072e318802cf6ca->enter($__internal_f646606fe5066ac10e836f02832448979ec25e246234b674f072e318802cf6ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        echo "    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_f646606fe5066ac10e836f02832448979ec25e246234b674f072e318802cf6ca->leave($__internal_f646606fe5066ac10e836f02832448979ec25e246234b674f072e318802cf6ca_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 21,  98 => 18,  92 => 17,  83 => 14,  79 => 13,  74 => 12,  68 => 11,  60 => 8,  49 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="list-group" role="group" aria-label="...">*/
/*     {% for site in sites %}*/
/*         <a class="list-group-item" href="{{ path('website', {'website': site.getPath() }) }}">{{site.getTitle()}}</a>*/
/*     {% endfor %}*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">*/
/*     <link rel="stylesheet" href="{{ asset('css/bootstrap-theme.min.css')}}">*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->*/
/*     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/*     <!-- Include all compiled plugins (below), or include individual files as needed -->*/
/*     <script src="{{ asset('js/bootstrap.min.js')}}"></script>*/
/* {% endblock %}*/
