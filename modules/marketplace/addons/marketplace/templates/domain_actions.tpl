{foreach $domains as $domain}
    <div>
        <p>{$domain.domain}</p>
        {foreach $domain.actions as $action}
            <a href="{$action.uri}">{$action.label}</a>
        {/foreach}
    </div>
{/foreach}
