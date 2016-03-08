<?php

/* base.html.twig */
class __TwigTemplate_71b758dcc827d9b9c4ade035ab76dfd8d6c1ec917938ce4b8c3434ae823d2a68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_234a38dca49d64095647791a2860cf56b4964e673a8fb564d5b69f99061ec20e = $this->env->getExtension("native_profiler");
        $__internal_234a38dca49d64095647791a2860cf56b4964e673a8fb564d5b69f99061ec20e->enter($__internal_234a38dca49d64095647791a2860cf56b4964e673a8fb564d5b69f99061ec20e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_234a38dca49d64095647791a2860cf56b4964e673a8fb564d5b69f99061ec20e->leave($__internal_234a38dca49d64095647791a2860cf56b4964e673a8fb564d5b69f99061ec20e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d07b8d84a895acbed59bc3221a573dd558199b7f59efc7effb43932d75135543 = $this->env->getExtension("native_profiler");
        $__internal_d07b8d84a895acbed59bc3221a573dd558199b7f59efc7effb43932d75135543->enter($__internal_d07b8d84a895acbed59bc3221a573dd558199b7f59efc7effb43932d75135543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d07b8d84a895acbed59bc3221a573dd558199b7f59efc7effb43932d75135543->leave($__internal_d07b8d84a895acbed59bc3221a573dd558199b7f59efc7effb43932d75135543_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d83956540a99c79979fbd771816251c05a5b74857b6429fa5d6c6ce726e6fa64 = $this->env->getExtension("native_profiler");
        $__internal_d83956540a99c79979fbd771816251c05a5b74857b6429fa5d6c6ce726e6fa64->enter($__internal_d83956540a99c79979fbd771816251c05a5b74857b6429fa5d6c6ce726e6fa64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d83956540a99c79979fbd771816251c05a5b74857b6429fa5d6c6ce726e6fa64->leave($__internal_d83956540a99c79979fbd771816251c05a5b74857b6429fa5d6c6ce726e6fa64_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2fa45c15f2c6d4896b3c7a217270136914504b6d6a04e9a6f13f37b9bd349f40 = $this->env->getExtension("native_profiler");
        $__internal_2fa45c15f2c6d4896b3c7a217270136914504b6d6a04e9a6f13f37b9bd349f40->enter($__internal_2fa45c15f2c6d4896b3c7a217270136914504b6d6a04e9a6f13f37b9bd349f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2fa45c15f2c6d4896b3c7a217270136914504b6d6a04e9a6f13f37b9bd349f40->leave($__internal_2fa45c15f2c6d4896b3c7a217270136914504b6d6a04e9a6f13f37b9bd349f40_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_37e102ca4b8f46fb8df0c8d712c43cf444bf78a78eca34e3165feae5bfdb38b5 = $this->env->getExtension("native_profiler");
        $__internal_37e102ca4b8f46fb8df0c8d712c43cf444bf78a78eca34e3165feae5bfdb38b5->enter($__internal_37e102ca4b8f46fb8df0c8d712c43cf444bf78a78eca34e3165feae5bfdb38b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_37e102ca4b8f46fb8df0c8d712c43cf444bf78a78eca34e3165feae5bfdb38b5->leave($__internal_37e102ca4b8f46fb8df0c8d712c43cf444bf78a78eca34e3165feae5bfdb38b5_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
