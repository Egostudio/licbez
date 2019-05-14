<div class="categories">
    <div class="categories_heading">
        <span data-language="index_categories" class="cathead_text">{$lang->index_categories}</span>
        <span class="fn_subswitch cathead_switch"></span>
    </div>
    <nav class="categories_nav tablet-hidden">
        {function name=categories_tree}
            {if $categories}
                <ul class="level_{$level}{if $level > 1} subcategory{/if}">
                    {foreach $categories as $c}
                        {if $c->visible}
                            {if $c->subcategories && $c->has_children_visible}
                                <li class="category_item parent">
                                    <a class="category_link{if $category->id == $c->id} selected{/if}" href="{$lang_link}category/{$c->url}" data-category="{$c->id}">
                                        <span>{$c->name|escape}</span>
                                        <svg class="arrow_right" xmlns="http://www.w3.org/2000/svg" width="8px" height="15px" viewBox="-1 -1 9 16">
                                          <path fill="currentColor" d="M.04 1.1l5.543 5.8L0 13l.37 1L7 6.9.33 0z"/>
                                        </svg>
                                    </a>
                                    <i class="fn_switch cat_switch"></i>
                                    {categories_tree categories=$c->subcategories level=$level + 1}
                                </li>
                            {else}
                                <li class="category_item">
                                    <a class="category_link{if $category->id == $c->id} selected{/if}" href="{$lang_link}category/{$c->url}" data-category="{$c->id}">{$c->name|escape}</a>
                                </li>
                            {/if}
                        {/if}
                    {/foreach}
                </ul>
            {/if}
        {/function}
        {categories_tree categories=$categories level=1}
    </nav>
</div>
