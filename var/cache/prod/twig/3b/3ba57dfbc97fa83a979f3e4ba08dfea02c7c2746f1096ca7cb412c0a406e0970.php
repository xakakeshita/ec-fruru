<?php

/* __string_template__5e73ad33a400c4a189d98cf9079b89061de61b13969715f959e871a4fb8f7f9f */
class __TwigTemplate_9b77a991bc5cb00315900a2609c219a1fc03ba56170281b8a3b866072d6b8760 extends Twig_Template
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
        echo "
<div class=\"ec-role\">
    <div class=\"ec-eyecatchRole\">
        <div class=\"ec-eyecatchRole__image\">
            <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/top/img_about.jpg"), "html", null, true);
        echo "\" alt=\"\" role=\"presentation\"/>
        </div>
        <div class=\"ec-eyecatchRole__intro\">
            <p class=\"ec-eyecatchRole__introEnTitle\">";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("CUBE GELATO ICE"), "html", null, true);
        echo "</p>
            <p class=\"ec-eyecatchRole__introTitle\">";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("彩のジェラート\"CUBE\"をご堪能ください。"), "html", null, true);
        echo "</p>
            <p class=\"ec-eyecatchRole__introDescriptiron\">";
        // line 20
        echo nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ジェラートとはイタリアン・アイスクリームのことで、一般的なアイスクリームに比べて、乳脂肪分が低くいのが特徴です。
当店では厳選した旬の果物のおいしさをそのままジェラートに仕上げました。風味が濃厚でありながら、甘さ控えめでヘルシーなキューブジェラートをご堪能ください。
さらにジェラートの製法を活かした、アイスキャンディ・アイスサンドも販売しております。
"), "html", null, true));
        // line 23
        echo "</p>
            <a class=\"ec-blockBtn--top\" href=\"";
        // line 24
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=4\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("一覧を見る"), "html", null, true);
        echo "</a>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__5e73ad33a400c4a189d98cf9079b89061de61b13969715f959e871a4fb8f7f9f";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 24,  48 => 23,  43 => 20,  39 => 19,  35 => 18,  29 => 15,  23 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__5e73ad33a400c4a189d98cf9079b89061de61b13969715f959e871a4fb8f7f9f", "");
    }
}
