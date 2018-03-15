<?php

/* index.html */
class __TwigTemplate_9ab14d8b5e8ae469d53511d8f7f2d3a453e9a80862f2b99e134237e7ef7e0239 extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\">
\t<title>Document</title>
</head>
<body>
\t
\t<div>
\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 11
            echo "\t\t    ";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo ",
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t</div>

\t<hr>
\t
\t<div>
\t\t";
        // line 18
        echo twig_escape_filter($this->env, twig_random($this->env, 5), "html", null, true);
        echo " 
\t</div>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 18,  43 => 13,  34 => 11,  30 => 10,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\">
\t<title>Document</title>
</head>
<body>
\t
\t<div>
\t\t{% for i in range(0, 3) %}
\t\t    {{ i }},
\t\t{% endfor %}
\t</div>

\t<hr>
\t
\t<div>
\t\t{{ random(5) }} 
\t</div>

</body>
</html>", "index.html", "D:\\phpStudy\\PHPTutorial\\WWW\\yangchi\\my\\17734027950\\twig\\twig-demo\\demo\\templates\\index.html");
    }
}
