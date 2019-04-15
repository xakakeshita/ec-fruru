<?php

/* __string_template__baa8365c7fab3bad2c68b506021e4cb658a499bd5fb2db5e396cff62a90fe5a9 */
class __TwigTemplate_eab4007b58f74e65344780463791ccbd4f97f3ef97a616c516ed063a06ec51c9 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 11
        $context["Categories"] = twig_get_attribute($this->env, $this->source, call_user_func_array($this->env->getFunction('repository')->getCallable(), ["Eccube\\Entity\\Category"]), "getList", [], "method");
        // line 12
        echo "
";
        // line 28
        echo "
";
        // line 30
        $context["__internal_f97b4f76f8ee702ac57f8160516bd6f1ff8f3a7bc5785a1757b5c84b33ece81a"] = $this;
        // line 31
        echo "
<div class=\"ec-headerCategoryArea\">
    <div class=\"ec-headerCategoryArea__heading\">
        <p>";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カテゴリ一覧"), "html", null, true);
        echo "</p>
    </div>
    <div class=\"ec-itemNav\">
        <ul class=\"ec-itemNav__nav\">
            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["Category"]) {
            // line 39
            echo "                <li>
                    ";
            // line 40
            echo $context["__internal_f97b4f76f8ee702ac57f8160516bd6f1ff8f3a7bc5785a1757b5c84b33ece81a"]->macro_tree($context["Category"]);
            echo "
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </ul>
    </div>
</div>
";
    }

    // line 13
    public function macro_tree($__Category__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "Category" => $__Category__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 14
            echo "    ";
            $context["__internal_809bc1fa27eece405b2caeb46f3f260d4bc37514c35c9eece842c7b333ad715d"] = $this;
            // line 15
            echo "    <a href=\"";
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
            echo "?category_id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "id", []), "html", null, true);
            echo "\">
        ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "name", []), "html", null, true);
            echo "
    </a>
    ";
            // line 18
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "children", [])) > 0)) {
                // line 19
                echo "        <ul>
            ";
                // line 20
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "children", []));
                foreach ($context['_seq'] as $context["_key"] => $context["ChildCategory"]) {
                    // line 21
                    echo "                <li>
                    ";
                    // line 22
                    echo $context["__internal_809bc1fa27eece405b2caeb46f3f260d4bc37514c35c9eece842c7b333ad715d"]->macro_tree($context["ChildCategory"]);
                    echo "
                </li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ChildCategory'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "        </ul>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "__string_template__baa8365c7fab3bad2c68b506021e4cb658a499bd5fb2db5e396cff62a90fe5a9";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 25,  107 => 22,  104 => 21,  100 => 20,  97 => 19,  95 => 18,  90 => 16,  83 => 15,  80 => 14,  68 => 13,  61 => 43,  52 => 40,  49 => 39,  45 => 38,  38 => 34,  33 => 31,  31 => 30,  28 => 28,  25 => 12,  23 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__baa8365c7fab3bad2c68b506021e4cb658a499bd5fb2db5e396cff62a90fe5a9", "");
    }
}
