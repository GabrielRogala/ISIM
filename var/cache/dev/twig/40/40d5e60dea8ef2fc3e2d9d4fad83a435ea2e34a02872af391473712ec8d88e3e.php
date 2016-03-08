<?php

/* default/site.html.twig */
class __TwigTemplate_9778878641b6fd6db2156e9945ea4c0f92cdf6e5605fde1dc0b98164221bfd9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/site.html.twig", 1);
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
        $__internal_f4f4582151b95c4a6b94e4fb4a4b879d1275932589b7b2ca12f9a2de9b57a792 = $this->env->getExtension("native_profiler");
        $__internal_f4f4582151b95c4a6b94e4fb4a4b879d1275932589b7b2ca12f9a2de9b57a792->enter($__internal_f4f4582151b95c4a6b94e4fb4a4b879d1275932589b7b2ca12f9a2de9b57a792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/site.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4f4582151b95c4a6b94e4fb4a4b879d1275932589b7b2ca12f9a2de9b57a792->leave($__internal_f4f4582151b95c4a6b94e4fb4a4b879d1275932589b7b2ca12f9a2de9b57a792_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_75bad07bbb015beedccf86054c190b66403e23e0be4c87d84f60d995041aeb7d = $this->env->getExtension("native_profiler");
        $__internal_75bad07bbb015beedccf86054c190b66403e23e0be4c87d84f60d995041aeb7d->enter($__internal_75bad07bbb015beedccf86054c190b66403e23e0be4c87d84f60d995041aeb7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["home"]) ? $context["home"] : $this->getContext($context, "home")), "getTitle", array(), "method"), "html", null, true);
        echo "
            <div class=\"list-group\" role=\"group\" aria-label=\"...\">
                ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subsites"]) ? $context["subsites"] : $this->getContext($context, "subsites")));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 9
            echo "                    <a class=\"list-group-item\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sumsite", array("website" => $this->getAttribute((isset($context["home"]) ? $context["home"] : $this->getContext($context, "home")), "getPath", array(), "method"), "subsite" => $this->getAttribute($this->getAttribute($context["s"], "getIdSite", array(), "method"), "getPath", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["s"], "getIdSite", array(), "method"), "getTitle", array(), "method"), "html", null, true);
            echo "</a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-5\">
                ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "getBlock1", array(), "method"), "html", null, true);
        echo "
            </div>
            <div class=\"col-sm-7\">
                ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "getBlock2", array(), "method"), "html", null, true);
        echo "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-12\">
                ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "getBlock3", array(), "method"), "html", null, true);
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_75bad07bbb015beedccf86054c190b66403e23e0be4c87d84f60d995041aeb7d->leave($__internal_75bad07bbb015beedccf86054c190b66403e23e0be4c87d84f60d995041aeb7d_prof);

    }

    // line 29
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_36b9d67583a79b3a9c92268d8828431e906b7950c1110010d67b6fcb4c9d473c = $this->env->getExtension("native_profiler");
        $__internal_36b9d67583a79b3a9c92268d8828431e906b7950c1110010d67b6fcb4c9d473c->enter($__internal_36b9d67583a79b3a9c92268d8828431e906b7950c1110010d67b6fcb4c9d473c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 30
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap-theme.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
";
        
        $__internal_36b9d67583a79b3a9c92268d8828431e906b7950c1110010d67b6fcb4c9d473c->leave($__internal_36b9d67583a79b3a9c92268d8828431e906b7950c1110010d67b6fcb4c9d473c_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0dff367ec0438522cd7a30917240d0e473a46cf02af73975c2f677d1db58fe28 = $this->env->getExtension("native_profiler");
        $__internal_0dff367ec0438522cd7a30917240d0e473a46cf02af73975c2f677d1db58fe28->enter($__internal_0dff367ec0438522cd7a30917240d0e473a46cf02af73975c2f677d1db58fe28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 36
        echo "    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_0dff367ec0438522cd7a30917240d0e473a46cf02af73975c2f677d1db58fe28->leave($__internal_0dff367ec0438522cd7a30917240d0e473a46cf02af73975c2f677d1db58fe28_prof);

    }

    public function getTemplateName()
    {
        return "default/site.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 39,  128 => 36,  122 => 35,  113 => 32,  109 => 31,  104 => 30,  98 => 29,  86 => 23,  78 => 18,  72 => 15,  66 => 11,  55 => 9,  51 => 8,  46 => 6,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             {{home.getTitle()}}*/
/*             <div class="list-group" role="group" aria-label="...">*/
/*                 {% for s in subsites %}*/
/*                     <a class="list-group-item" href="{{ path('sumsite', {'website': home.getPath(), 'subsite': s.getIdSite().getPath() }) }}">{{s.getIdSite().getTitle()}}</a>*/
/*                 {% endfor %}*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-5">*/
/*                 {{site.getBlock1()}}*/
/*             </div>*/
/*             <div class="col-sm-7">*/
/*                 {{site.getBlock2()}}*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-12">*/
/*                 {{site.getBlock3()}}*/
/*             </div>*/
/*         </div>*/
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
/* */
