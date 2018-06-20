<?php

/* default/steps.html.twig */
class __TwigTemplate_aa8d88fcb0430d57f9c8d2c3ea6043c3ee7cd002e0355922228cb576a86d7fb6 extends Twig_Template
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
        echo "<div class=\"row mt20\">
    <div class=\"col-md-12 without-padding-right without-padding-left\">
        <ul class=\"steps nav nav-pills\">
            ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["titles"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 5
            echo "                <li role=\"presentation\" id=\"step-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"";
            echo (($this->getAttribute($context["loop"], "first", array())) ? ("active first") : (""));
            echo "\">
                    <a href=\"#\">
                        ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "
                    </a>
                    <span>";
            // line 9
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "</span>
                </li>
                ";
            // line 11
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                // line 12
                echo "                    <li class=\"";
                echo (((twig_length_filter($this->env, ($context["titles"] ?? null)) == 3)) ? ("divider-3-steps") : ("divider"));
                echo "\">
                        <span>
                            <hr class=\"hr-solid\">
                        </span>
                    </li>
                ";
            }
            // line 18
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "            ";
        // line 20
        echo "                ";
        // line 21
        echo "                    ";
        // line 22
        echo "                ";
        // line 23
        echo "                ";
        // line 24
        echo "            ";
        // line 25
        echo "            ";
        // line 26
        echo "                ";
        // line 27
        echo "                    ";
        // line 28
        echo "                ";
        // line 29
        echo "            ";
        // line 30
        echo "            ";
        // line 31
        echo "                ";
        // line 32
        echo "                    ";
        // line 33
        echo "                ";
        // line 34
        echo "                ";
        // line 35
        echo "            ";
        // line 36
        echo "            ";
        // line 37
        echo "                ";
        // line 38
        echo "                    ";
        // line 39
        echo "                ";
        // line 40
        echo "            ";
        // line 41
        echo "            ";
        // line 42
        echo "                ";
        // line 43
        echo "                    ";
        // line 44
        echo "                ";
        // line 45
        echo "                ";
        // line 46
        echo "            ";
        // line 47
        echo "
        </ul>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "default/steps.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 47,  139 => 46,  137 => 45,  135 => 44,  133 => 43,  131 => 42,  129 => 41,  127 => 40,  125 => 39,  123 => 38,  121 => 37,  119 => 36,  117 => 35,  115 => 34,  113 => 33,  111 => 32,  109 => 31,  107 => 30,  105 => 29,  103 => 28,  101 => 27,  99 => 26,  97 => 25,  95 => 24,  93 => 23,  91 => 22,  89 => 21,  87 => 20,  85 => 19,  71 => 18,  61 => 12,  59 => 11,  54 => 9,  49 => 7,  41 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/steps.html.twig", "/var/www/html/agenciaeventos/app/Resources/views/default/steps.html.twig");
    }
}
